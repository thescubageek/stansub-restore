function RenderWeather(oWea) {
	var curDate = new Date();
	var sDay = 'Tomorrow';
	var sTmp = '';
	var aFore = ''
	var bFore = (oWea.swFore!='');
	if (bFore)
	{
		aFore = oWea.swFore.split("|");
		if ( (aFore[0] - 1) == curDate.getDay() ) {sDay = 'Today';}
	}
	sTmp += '<table cellpadding=0 cellspacing=0 border=0 style=table-layout:fixed; width=256>';
		sTmp += '<col width=1><col><col width=1>';
		sTmp += '<tr>';
			sTmp += '<td bgcolor=000099></td>';
			sTmp += '<td>';
				sTmp += '<table cellpadding=1 cellspacing=0 border=0 style=table-layout:fixed;>';
			sTmp += '<col width=100><col width=50%><col width=50%>';
					sTmp += '<tr bgcolor=000099><td colspan=3><img src=http://www.msnbc.com/m/chnk/r/i/msnbc_logo.gif width=50 height=35 align=left><span style=font-family:arial;font-size:13px;color:white;>Local Weather for</span><br><span style=font-family:arial;font-size:16px;color:white;font-weight:bold;>'+oWea.swCity+', ' + ((oWea.swSubDiv=='')?oWea.swCountry:oWea.swSubDiv) + '</span></td></tr>';
			sTmp += '<tr>';
						sTmp += '<td colspan=2 style=font-weight:bold;font-family:arial;font-size:13px;>&nbsp;Current Conditions</td>';
						if (bFore) {sTmp += '<td style=font-weight:bold;font-family:arial;font-size:13px; align=center>'+sDay+'</td>';}
			sTmp += '</tr>';
			sTmp += '<tr><td colspan=3 bgcolor=black height=1></td></tr>';
			sTmp += '<tr>';
						sTmp += '<td style=font-size:150%;color:ff9900;font-weight:bold;>&nbsp;'+oWea.swTemp+'&#176;<img src=http://www.msnbc.com/m/wea/i/36/'+oWea.swCIcon+'.gif align=absmiddle height=36 width=36></td>';
				sTmp += '<td style=font-size:60%;><b>Wind</b>: '+oWea.swWindS+oWea.swWindD+'<br><b>Baro</b>: '+oWea.swBaro+'"<br><b>Humidity</b>: '+oWea.swHumid+'%</td>';
				if (bFore) {sTmp += '<td align=center><img width=36 height=36 src=http://www.msnbc.com/m/wea/i/36/'+aFore[10]+'.gif></td></tr><tr><td colspan=2></td><td align=center style=font-size:60%;>'+aFore[20]+'&#176;/'+aFore[40]+'&#176;</td>';}
				else {sTmp += '<td style=font-size:60%;><b>Real Feel</b>: '+oWea.swReal+'&#176;<br><b>UV</b>: '+oWea.swUV+'<br><b>Visibility</b>: '+oWea.swVis+'</td>';}
			sTmp += '</tr>';
					sTmp += '<tr><td colspan=3 align=center><a style=font-size:11px;color:black;font-family:arial; href=http://www.msnbc.com/news/wea_front.asp>For extended forecasts, go to MSNBC.com</a></td></tr>';
				sTmp += '</table>';
			sTmp += '</td>';
			sTmp += '<td bgcolor=000099></td>';
		sTmp += '</tr>';
		sTmp += '<tr bgcolor=000099 height=1><td colspan=3></td></tr>';
		sTmp += '</table>';
	return sTmp;
}
