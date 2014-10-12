$(document).ready(function() { // or js window.onload = function() {}
	
	setInterval(up, 1000);

});

function up () {

	var date = new Date();
	var toDate = new Date(2014, 7/*мес начная с 0(январь)-11(декабрь)*/, 22/*дата*/, 20/*часы*/, 0/*минуты*/, 0, 0); // таймер до 20:00 22 августа 
	
	
	var timer = toDate - date;

	if(timer < 0) {
		$(".timer").html(''); // or .innerHTML
	}

	else {

	// hours

		var hour = parseInt(timer/(60*60*1000))%24;
		if(hour < 10) {
			hour = hour.toString();
			hour = '0' + hour;
		}
		else hour = hour.toString();
	
	// minuts

		var min = parseInt(timer/(60*1000))%60;
		if(min < 10) {
			min = min.toString();
			min = '0' + min;
		}
		else min = min.toString();
	
	// sec

		var sec = parseInt(timer/1000)%60;
		if(sec < 10) {
			sec = sec.toString();
			sec = '0' + sec;
		}
		else sec = sec.toString();

	$(".hours_val").html(hour);
	$(".minutes_val").html(min);
	$(".seconds_val").html(sec);
	}
}