function dynacolour(){
	if (attendance<=arguments[0]) {
		document.getElementById('att').style.background="#F00";
	}
	if (attendance<=arguments[0]) {
		document.getElementById('att').style.background="#0F0";
	}
	if (attendance>arguments[0]) {
		document.getElementById('att').style.background="#00F";
	}
}