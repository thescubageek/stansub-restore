var siteUrl = "http://www.stanleysubmarines.com/karlstanley/";

var $ = jQuery.noConflict();

var headerImgIndex = -1;
var headerImgs = [
				   'nationalgeokarl.jpg',
				  'brittle_star.jpg',
				  'five_sea_lillies.jpg',
				   'karl_in_sub.jpg', 
				  'flytrap_anemone.jpg',
				  'goosefish.jpg', 
				  'idabel_along_wall.jpg', 
				  'jellynose.jpg', 
				  'karl_and_shells.jpg', 
				  'karl_and_urn.jpg', 
				  'rough_shark_face.jpg', 
				  'rough_shark.jpg',
				  'siphonophore.jpg', 
				  'six_gill_face.jpg', 
				  'six_gill_eating.jpg', 
				  'spinley_crab.jpg',
				  'squat_lobster_crinoid.jpg',
				  'terrain_1.jpg',
				  'terrain_2.jpg', 
				  'terrain_3.jpg',
				  'white_starfish.jpg'
				  ];

$(document).ready(function() {

	$('button').button();
    
    $('.book-dive-button').css({'font-size': '24px'}).click(function() {
    	window.location = "http://www.stanleysubmarines.com/karlstanley/contact/";
    });
    
    $('#header_nav_menu li').each(function() {
    	if ($(this).find('ul').length){
        	$(this).append('<span class="ui-icon ui-icon-carat-1-s"></span>');
        }
    });
	
	$('#searchsubmit').button({icons: {primary: 'ui-icon-search'} });
    
    $("#header_slideshow").block_slider({
        slides: '.featured',					
        animationSpeed: 600,	
        autorotation: true,						
        autorotationSpeed: 3,					
        transition: 'fade'						//slide or fade
    });
    
    $("#header_slideshow").bind('contextmenu', function(e){	
    	e.preventDefault();
        e.stopPropagation();
        return false;
    });
    
    setTimeout(function() {
    	$('#container').fadeIn(1000);
    }, 1000);
});



// -------------------------------------------------------------------------------------------
// The BLOCK && FADE && CURTAIN Slider
// -------------------------------------------------------------------------------------------

(function($)
{
	$.fn.block_slider= function(options) 
	{
		var defaults = 
		{
			slides: '>div',				// wich element inside the container should serve as slide
			animationSpeed: 900,		// animation duration
			autorotation: true,			// autorotation true or false?
			autorotationSpeed:3,		// duration between autorotation switch in Seconds
			appendControls: '',		// element to apply controls to
			slideControls: 'none',		// controls, yes or no?
			blockSize: {height: 'full', width:'full'},
			betweenBlockDelay:15,
			display: 'topleft',
			switchMovement: false,
			showText: true,	
			transition: 'slide',		//slide or fade	
			backgroundOpacity:0.85,		// opacity for background
			transitionOrder: new Array('diagonaltop', 'diagonalbottom','topleft', 'bottomright', 'random')
		};
		
		var options = $.extend(defaults, options);
		
		return this.each(function()
		{
			var slideWrapper 	= $(this),								//wrapper element
				slides			= slideWrapper.find(options.slides),	//single slide container
				slideImages		= slides.find('>a>img'),				//slide image within container
				slideCount 	= slides.length,							//number of slides
				slideWidth = slides.width(),							//width of slidecontainer
				slideHeight= slides.height(),							//height of slidecontainer
				blockNumber = 0,										//how many blocks do we need
				currentSlideNumber = 0,									//which slide is currently shown
				reverseSwitch = false,									//var to set the starting point of the transition
				currentTransition = 0,									//var to set which transition to display when rotating with 'all'
				current_class = 'active_item',							//currently active controller item
				controls = '',											//string that will contain control items to append
				skipSwitch = true,										//var to check if performing transition is allowed
				interval ='',
				blockOrder = new Array();										
			
			if (options.blockSize.height == 'full') options.blockSize.height = slideHeight;
			if (options.blockSize.width == 'full') options.blockSize.width = slideWidth;
			
			if(options.showText)
			slides.find('.feature_excerpt').css({display:'block', 'opacity':options.backgroundOpacity});
				
			slideWrapper.methods = {
			
				init: function()
				{	
					var posX = 0,
						posY = 0,
						generateBlocks = true,
						bgOffset = '',
						blockSelectionJQ ='',
						blockSelection ='';
						
					while(generateBlocks)
					{
						blockNumber ++;
						bgOffset = "-"+posX +"px -"+posY+"px";
						
						$('<div class="kBlock"></div>').appendTo(slideWrapper).css({	
								zIndex:20, 
								position:'absolute',
								display:'none',
								left:posX,
								top:posY,
								height:options.blockSize.height,
								width:options.blockSize.width,
								backgroundPosition:bgOffset
							});
				
						
						posX += options.blockSize.width;
						
						if(posX >= slideWidth)
						{
							posX = 0;
							posY += options.blockSize.height;
						}
						
						if(posY >= slideHeight)
						{	
							//end adding Blocks
							generateBlocks = false;
						}
					}
					
					//setup directions
					blockSelection = slideWrapper.find('.kBlock');
					blockOrder['topleft'] = blockSelection;
					blockOrder['bottomright'] = $(blockSelection.get().reverse());
					blockOrder['diagonaltop'] = slideWrapper.methods.kcubit(blockSelection);
					blockOrder['diagonalbottom'] = slideWrapper.methods.kcubit(blockOrder['bottomright']);
					blockOrder['random'] = slideWrapper.methods.fyrandomize(blockSelection);
					
					
					//save image in case of flash replacements
					slides.each(function()
					{
						$.data(this, "data", { img: $(this).find('img').attr('src')});
					});
			
					if(slideCount <= 1)
						{
							slideWrapper.image_preloader({delay:200});
						}
						else
						{
							slideWrapper.image_preloader({callback:slideWrapper.methods.preloadingDone, delay:200});
							slideWrapper.methods.appendControls();
						}	
				},
				
				appendControls: function()
				{
					if (options.slideControls != 'none' && options.slideControls.length)
					{
						controls = $('<div></div>').addClass('slidecontrols').css({position:'absolute'}).appendTo(options.appendControls);
						
						slides.each(function(i)
						{	
							var controller = $('<a href="#" class="ie6fix '+current_class+'">'+i+'</a>').appendTo(controls);
							controller.bind('click', {currentSlideNumber: i}, slideWrapper.methods.switchSlide);
							current_class = "";
						});	
					}
				},
				
				preloadingDone: function()
				{	
					skipSwitch = false;
					
					slides.css({'backgroundColor':'transparent','backgroundImage':'none'});
					
					if(options.autorotation && !$.browser.opera) 
					{
						slideWrapper.methods.autorotate();
						slideImages.bind("click", function(){ clearInterval(interval); });
					}
				},
				
				autorotate: function()
				{	
					interval = setInterval(function()
					{ 	
						currentSlideNumber ++;
						
						if(currentSlideNumber == slideCount) currentSlideNumber = 0;
						
						slideWrapper.methods.switchSlide();
					},
					(parseInt(options.autorotationSpeed) * 1000) + (options.betweenBlockDelay * blockNumber) + options.animationSpeed);
				},
				
				switchSlide: function(passed)
				{
					var noAction = false;
						
					if(passed != undefined && !skipSwitch)
					{	
						if(currentSlideNumber != passed.data.currentSlideNumber)
						{	
							currentSlideNumber = passed.data.currentSlideNumber;
						}
						else
						{
							noAction = true;
						}
					}
						
					if(passed != undefined) clearInterval(interval);
					
					if(!skipSwitch && noAction == false)
					{	
						skipSwitch = true;
						var currentSlide = slides.filter(':visible'),
							nextSlide = slides.filter(':eq('+currentSlideNumber+')'),
							nextURL = $.data(nextSlide[0], "data").img,	
							nextImageBG = 'url('+nextURL+')';	
							if(options.appendControls)
							{	
								controls.find('.active_item').removeClass('active_item');
								controls.find('a:eq('+currentSlideNumber+')').addClass('active_item');									
							}

						blockSelectionJQ = blockOrder[options.display];
						
						//workarround to make more than one flash movies with the same classname possible
						slides.find('>a>img').css({opacity:1,visibility:'visible'});
						slides.find('>a>img').each(function() { cleanupIEFade(this); });
							
						//switchmovement
						if(options.switchMovement && (options.display == "topleft" || options.display == "diagonaltop"))
						{
								if(reverseSwitch == false)
								{	
									blockSelectionJQ = blockOrder[options.display];
									reverseSwitch = true;							
								}
								else
								{	
									if(options.display == "topleft") blockSelectionJQ = blockOrder['bottomright'];
									if(options.display == "diagonaltop") blockSelectionJQ = blockOrder['diagonalbottom'];
									reverseSwitch = false;							
								}
						}	
						
						if(options.display == 'random')
						{
							blockSelectionJQ = slideWrapper.methods.fyrandomize(blockSelection);
						}

						if(options.display == 'all')
						{
							blockSelectionJQ = blockOrder[options.transitionOrder[currentTransition]];
							currentTransition ++;
							if(currentTransition >=  options.transitionOrder.length) currentTransition = 0;
						}
						

						//fire transition
						blockSelectionJQ.css({backgroundImage: nextImageBG}).each(function(i)
						{	
							
							var currentBlock = $(this);
							setTimeout(function()
							{	
								var transitionObject = new Array();
								if(options.transition == 'slide')
								{
									transitionObject['css'] = {height:1, width:1, display:'block',opacity:0};
									transitionObject['anim'] = {height:options.blockSize.height,width:options.blockSize.width,opacity:1};
								}
								else
								{
									transitionObject['css'] = {display:'block',opacity:0};
									transitionObject['anim'] = {opacity:1};
								}
							
								currentBlock
								.css(transitionObject['css'])
								.animate(transitionObject['anim'],options.animationSpeed, function()
								{ 
									if(i+1 == blockNumber)
									{	
										slideWrapper.methods.changeImage(currentSlide, nextSlide);
									}
								});
							}, i*options.betweenBlockDelay);
						});
						
					} // end if(!skipSwitch && noAction == false)
					
					return false;
				},
				
				changeImage: function(currentSlide, nextSlide)
				{	
					currentSlide.css({zIndex:0, display:'none'});
					nextSlide.css({zIndex:3, display:'block'});
					blockSelectionJQ.fadeOut(options.animationSpeed*1/3, function(){ skipSwitch = false; });
				},
				
				// array sorting
				fyrandomize: function(object) 
				{	
					var length = object.length,
						objectSorted = $(object);
						
					if ( length == 0 ) return false;
					
					while ( --length ) 
					{
						var newObject = Math.floor( Math.random() * ( length + 1 ) ),
							temp1 = objectSorted[length],
							temp2 = objectSorted[newObject];
						objectSorted[length] = temp2;
						objectSorted[newObject] = temp1;
					}
					return objectSorted;
				},
				
				kcubit: function(object)
				{
					var length = object.length, 
						objectSorted = $(object),	
						currentIndex = 0;		//index of the object that should get the object in "i" applied
						rows = Math.ceil(slideHeight / options.blockSize.height),
						columns = Math.ceil(slideWidth / options.blockSize.width),
						oneColumn = blockNumber/columns,
						oneRow = blockNumber/rows,
						modX = 0,
						modY = 0,
						rowend = 0,
						endreached = false,
						onlyOne = false; 
					
					if ( length == 0 ) return false;
					for (i = 0; i<length; i++ ) 
					{
						objectSorted[i] = object[currentIndex];
						
						if((currentIndex % oneRow == 0 && blockNumber - i > oneRow)|| (modY + 1) % oneColumn == 0)
						{						
							currentIndex -= (((oneRow - 1) * modY) - 1); modY = 0; modX ++; onlyOne = false;
							
							if (rowend > 0)
							{
								modY = rowend; currentIndex += (oneRow -1) * modY;
							}
						}
						else
						{
							currentIndex += oneRow -1; modY ++;
						}
						
						if((modX % (oneRow-1) == 0 && modX != 0 && rowend == 0) || (endreached == true && onlyOne == false) )
						{	
							modX = 0.1; rowend ++; endreached = true; onlyOne = true;
						}	
					}
					
				return objectSorted;						
				}
			}	
			
			slideWrapper.methods.init();	
		});
	}
})(jQuery);

jQuery(document).ready(function(){
	jQuery('.preloading').image_preloader({delay:100});
});

(function($)
{
	$.fn.image_preloader = function(options) 
	{
		var defaults = 
		{
			repeatedCheck: 500,
			fadeInSpeed: 1000,
			delay:600,
			callback: '',
			easing: 'easeOutQuint'
		};
		
		var options = $.extend(defaults, options);
		
		return this.each(function()
		{	
			var imageContainer = jQuery(this),
				images = imageContainer.find('img').css({opacity:0, visibility:'hidden'}),
				imagesToLoad = images.length;				
				
				imageContainer.operations =
				{	
					preload: function()
					{	
						var stopPreloading = true;
												
						images.each(function(i, event)
						{	
							var image = $(this);							
							
							if(event.complete == true)
							{	
								if($.browser.opera) imagesToLoad --;
								imageContainer.operations.showImage(image);
							}
							else
							{	
								if($.browser.opera) imagesToLoad --;
								image.bind('error load',{currentImage: image}, imageContainer.operations.showImage);
							}
							
						});
						
						return this;
					},
					
					showImage: function(image)
					{	
						if(!$.browser.opera) imagesToLoad --;
						if(image.data.currentImage != undefined) { image = image.data.currentImage;}
													
						if (options.delay <= 0) {
							image.css('visibility','visible').animate({opacity:1}, options.fadeInSpeed, function() 
							{ 
								cleanupIEFade(this); 
							});
						}
											 
						if(imagesToLoad == 0)
						{
							if(options.delay > 0)
							{
								images.each(function(i, event)
								{	
									var image = $(this);
									setTimeout(function()
									{	
										image.css('visibility','visible').animate({opacity:1}, options.fadeInSpeed, function()
										{
											$(this).parent().removeClass('preloading');
											cleanupIEFade(this);
										});
									},
									options.delay*(i+1));
								});
								
								if(options.callback != '')
								{
									setTimeout(options.callback, options.delay*images.length);
								}
							}
							else if(options.callback != '')
							{
								(options.callback)();
							}
							
						}
						
					}

				};
				
				imageContainer.operations.preload();
		});
		
	}
})(jQuery);

function cleanupIEFade(elm) {
	if ($.browser.msie)
		elm.style.removeAttribute('filter');
}
