//*********************
function embedFlash(fileName, width, height, bgcolor, quality, align, salign, wmode, scale, play, flashvars, menu, base, devicefont, loop) {	
//*********************
	var text;
	text = "";
	
	if ((null != bgcolor)||(bgcolor != "")) {
		parambgcolor = "";
		embedbgcolor = "";
	} else {
		parambgcolor = "<param value=\"" + bgcolor + "\" name=\"bgcolor\" />";
		embedbgcolor = " bgcolor=\"" + bgcolor + "\"";
	}
	
	if ((null == quality)||(quality == "")) {
		quality = "high";
	}
	
	if ((null == align)||(align == "")) {
		align = "middle";
	}
	
	if ((null == salign)||(salign == "")) {
		paramsalign = "";
		embedsalign = "";
	} else {
		paramsalign = "<param value=\"" + salign + "\" name=\"salign\" />";
		embedsalign = " salign=\"" + salign + "\"";
	}
	wmode="transparent";
	if ((null == wmode)||(wmode == "")) {
		
		paramwmode = "";
		embedwmode = "";
	} else {
		paramwmode = "<param value=\"" + wmode + "\" name=\"wmode\" />";
		embedwmode = " wmode=\"" + wmode + "\"";
	}
	
	if ((null == scale)||(scale == "")) {
		paramscale = "";
		embedscale = "";
	} else {
		paramscale = "<param value=\"" + scale + "\" name=\"scale\" />";
		embedscale = " scale=\"" + scale + "\"";
	}
	
	if ((null == play)||(play == "")) {
		paramplay = "";
		embedplay = "";
	} else {
		paramplay = "<param value=\"" + play + "\" name=\"play\" />";
		embedplay = " play=\"" + play + "\"";
	}
	
	if ((null == flashvars)||(flashvars == "")) {
		paramflashvars = "";
		embedflashvars = "";
	} else {
		paramflashvars = "<param value=\"" + flashvars + "\" name=\"flashvars\" />";
		embedflashvars = " flashvars=\"" + flashvars + "\"";
	}
	menu="false";
	if ((null == menu)||(menu == "")) {
		parammenu = "";
		embedmenu = "";
	} else {
		parammenu = "<param value=\"" + menu + "\" name=\"menu\" />";
		embedmenu = " menu=\"" + menu + "\"";
	}
	
	if ((null == base)||(base == "")) {
		parambase = "";
		embedbase = "";
	} else {
		parambase = "<param value=\"" + base + "\" name=\"base\" />";
		embedbase = " base=\"" + base + "\"";
	}
	
	if ((null == devicefont)||(devicefont == "")) {
		paramdevicefont = "";
		embeddevicefont = "";
	} else {
		paramdevicefont = "<param value=\"" + devicefont + "\" name=\"devicefont\" />";
		embeddevicefont = " devicefont=\"" + devicefont + "\"";
	}
	
	if ((null == loop)||(loop == "")) {
		paramloop = "";
		embedloop = "";
	} else {
		paramloop = "<param value=\"" + loop + "\" name=\"loop\" />";
		embedloop = " loop=\"" + loop + "\"";
	}

 
	text +="<object align=\"" + align + "\" id=\"main\" height=\"" + height + "\" width=\"" + width + "\" codebase=\"http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0\" classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\">";
	text +="<param value=\"" + fileName + "\" name=\"movie\" />";
	text +="<param value=\"" + quality + "\" name=\"quality\" />";
	text += parambgcolor + paramsalign + paramwmode + paramscale + paramplay + paramflashvars + parammenu + parambase + paramdevicefont + paramloop;
	text += "<embed pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" align=\"" + align + "\" name=\"movie\" quality=\"" + quality + "\" height=\"" + height + "\" width=\"" + width + "\" src=\"" + fileName + "\"" + embedbgcolor + embedsalign + embedwmode + embedscale + embedplay + embedflashvars + embedmenu + embedbase + embeddevicefont + embedloop +  "></embed></object>";
	document.write(text);
}
