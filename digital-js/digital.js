// JavaScript Document
function showHour(){
		const Digital=new Date();
		const hours=Digital.getHours();
		document.digitalHour.clock1.value=hours;
		setInterval('showHour();', 1000);
	}
	showHour();

function showMinute(){
		const Digital=new Date();
		const minutes=Digital.getMinutes();
		document.digitalMinute.clock2.value=minutes;
		setInterval('showMinute();', 1000);
	}
	showMinute();

function showSecond(){
		const Digital=new Date();
		const second=Digital.getSeconds();
		document.digitalSecond.clock3.value=second;
		setInterval('showSecond();', 1000);
	}
	showSecond();
