$(document).ready(function() {
	
	setInterval(up, 1000); // Устанавливаем чтобы каждую секунду вызывалась функция up()
});

function up () {

	var date = new Date();
	//var toDate = new Date(2014, 8, 2, 10, 40, 0, 0); // timer to date // Год, месяц с 0 до 11, число, часов, минут, секунд, миллисекунд
	var toDate = new Date(date.getFullYear(), date.getMonth(), date.getDate()+1); // timer for a 1 Day
	
	
	var timer = toDate - date;

	if(timer < 0) {
		$("#timer p").html('<span>0<div>ЧАСОВ</div></span><span>0<div>МИНУТ</div></span><span>0<div>СЕКУНД</div></span>');
	}

	else {


	// day

		var day = parseInt(timer/(60*60*1000*24));
		if(day < 10) {
			day = day.toString();
			day = '0' + day;
		}
		else day = day.toString();
		
	
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

	$("#timer").html('<span>' + hour + '<div>ЧАСОВ</div></span><span>' + min + '<div>МИНУТ</div></span><span>' + sec + '<div>СЕКУНД</div></span>'); // Блок куда будем выводить текст
	}
}