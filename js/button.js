var sidel=0;
function Navi(){
	if(sidel==0){openNavi(); sidel=1;}
	else{closeNavi();sidel=0;}
}
function openNavi() {
 	document.getElementById("sidewrap").style.height = "auto";
 	document.getElementById("sidewrap").style.opacity = "1";
 	document.getElementById('navbtn').style.background = "#FFF";
 	document.getElementById('navbtn').style.color = "rgba(9, 24, 184, 0.95)";
 }
function closeNavi() {
	document.getElementById("sidewrap").style.height = "0";
	document.getElementById("sidewrap").style.opacity = "0";
	document.getElementById('navbtn').style.background = "rgba(9, 24, 184, 0.8)";
 	document.getElementById('navbtn').style.color = "#FFF";
}