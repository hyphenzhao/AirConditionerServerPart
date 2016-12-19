var temp,humi,mode,speed,time;
var modeList = ["制冷","制热", "除湿"];
var speedList = ["自动","低速","中速","高速"];
var power=0, smart=0;

window.onload = function(){
	var elements = document.getElementsByName("power_control");
	for(var i = 0; i < elements.length; i++){
		elements[i].disabled = true;
	}
};

function powerClicked(){
	if(power == 0){
		temp = 26; humi = 40; mode = 0; speed = 0; time = 0;
		var elements = document.getElementsByName("power_control");
		for(var i = 0; i < elements.length; i++){
			elements[i].disabled = false;
		}
		updateContent();
		document.getElementById("power_button").innerHTML = "按此关机";
		document.getElementById("power_button").setAttribute("class", "btn btn-danger center-block");
		power = 1;
	}else{
		var elements = document.getElementsByName("power_control");
		for(var i = 0; i < elements.length; i++){
			elements[i].disabled = true;
		}
		document.getElementById("temp_text").innerHTML = "温度：" + "--" + "°C";
		document.getElementById("humi_text").innerHTML = "湿度：" + "--" + "%";
		document.getElementById("mode_text").innerHTML = "模式：" + "--";
		document.getElementById("speed_text").innerHTML = "风速：" + "--";
		document.getElementById("time_text").innerHTML = "定时：" + "--" + "H";
		document.getElementById("power_button").innerHTML = "轻按开机";
		document.getElementById("power_button").setAttribute("class", "btn btn-success center-block");
		power = 0;
	}
}

function updateContent() {
	document.getElementById("temp_text").innerHTML = "温度：" + temp + "°C";
	document.getElementById("humi_text").innerHTML = "湿度：" + humi + "%";
	document.getElementById("mode_text").innerHTML = "模式：" + modeList[mode];
	document.getElementById("speed_text").innerHTML = "风速：" + speedList[speed];
	document.getElementById("time_text").innerHTML = "定时：" + time + "H";
}

function tempUpClicked(){
	if(temp + 1 <= 30) {
		temp += 1;
		updateContent();
	}
}
function humiUpClicked(){
	if(humi + 1 <= 60) {
		humi += 1;
		updateContent();
	}
}
function speedUpClicked(){
	speed = (speed + 1) % 4;
	updateContent();
}
function modeUpClicked(){
	mode = (mode + 1) % 3;
	updateContent();
}
function timeUpClicked(){
	time = (time + 1) % 25;
	updateContent();
}

function tempDownClicked(){
	if(temp - 1 >= 16) {
		temp -= 1;
		updateContent();
	}
}
function humiDownClicked(){
	if(humi - 1 >= 20) {
		humi -= 1;
		updateContent();
	}
}
function speedDownClicked(){
	speed = (speed - 1) % 4;
	if(speed < 0) speed += 4;
	updateContent();
}
function modeDownClicked(){
	mode = (mode - 1) % 3;
	if(mode < 0) mode += 3;
	updateContent();
}
function timeDownClicked(){
	time = (time - 1) % 25;
	if(time < 0) time += 25;
	updateContent();
}

function modeCheck() {
	
}
