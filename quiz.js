
window.onload = start;

function start() {

document.getElementById('btn').onclick = validate;
document.getElementById('btnclr').onclick = clear;

}

function validate() {
var radios = document.getElementById("quiz").getElementsByTagName("input");
var right = 0;
var wrong = 0; 
var text = "";
for(var i=0; i<radios.length  ; i++) {
  if(radios[i].value == "c") {
    if(radios[i].checked == true){
	      right++;
	text+= 'correct' + '<br>';
    }else {
      wrong++;
	text+= 'incorrect' + '<br>';
	}
    }
} 

var c_marks = (right * 2);
var w_marks = (wrong * -1)
var marks = (c_marks + w_marks);


document.getElementById("score").innerHTML = 'Correct: '+ right +'<br/>Incorrect: ' + wrong +'<br/> Total marks : ' + marks ;
document.getElementById("result").innerHTML = text; 

if (marks <=5){
	 
	document.getElementById("back").style.backgroundColor='#FFB6C1';
	document.getElementById("score").style.backgroundColor= 'black';
}else if(marks <=10){ 
	document.getElementById("back").style.backgroundColor= '#33FFFF';
	document.getElementById("score").style.backgroundColor= 'black';
}else if(marks <=15){ 	
	document.getElementById("back").style.backgroundColor= '#CCFF00';
	document.getElementById("score").style.backgroundColor= 'black';
}else if(marks <=20) {	
	document.getElementById("back").style.backgroundColor= '#CCFF66';
	document.getElementById("score").style.backgroundColor= 'black';
}
	document.getElementById("result").style.backgroundColor= 'black';
	document.getElementById("qq").style.backgroundColor= 'black';
}

function clear(){
var radios = document.getElementById("quiz").getElementsByTagName("input");
for(var i=0; i<radios.length; i++) {
radios[i].checked = false;
}
document.getElementById("back").style.backgroundColor='';
document.getElementById("score").innerHTML = '';
document.getElementById("score").style.backgroundColor='';
document.getElementById("result").style.backgroundColor= '';
document.getElementById("qq").style.backgroundColor= '';

}



var tot_sec = 12*10;
var c_min = parseInt(tot_sec/60)
var c_sec = parseInt(tot_sec%60)

function timer(){

	

	document.getElementById("demo").innerHTML = 'Time left : ' + c_min+
	' minutes ' + c_sec + ' seconds ' ;
	if(tot_sec == 120){
		document.getElementById("demo").style.color = "blue";
	}
	if(tot_sec<=0){
	alert("Times is up!");
		validate();
	}else{
		tot_sec = tot_sec-1;
		c_min = parseInt(tot_sec/60)
		c_sec = parseInt(tot_sec%60)
		setTimeout("timer()",1000);		
	}
	if(tot_sec == 60){
		document.getElementById("demo").style.color = "green";
	}
	if(tot_sec == 30){
		document.getElementById("demo").style.color = "red";
	}
}
setTimeout("timer()",1000);

	function direct(){
		
	}