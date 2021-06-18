// JavaScript Document
function nilai(a,b){
	return a+b;
}
console.log(nilai(10,20));

function arr(){
	return arguments;
}
console.log(arr('Hello', 'World', 7, true, 10));

function nilai2(){
	var hasil=0;
	for(var i=0; i<arguments.length; i++){
		hasil+=arguments[i];
	}
	return hasil;
}
console.log(nilai2(10,10,10,50));
console.log(nilai2(50,50,50,50));

function panggil(a,b){
	return a+b;
}
alert(panggil('Hello', ' World!'));
alert(panggil('Hello', ' Galih!'));

function name(Greeting, Myname){
	return Greeting + Myname;
}
alert(name('Hi', ' Galih!'));

function data_array(){
	return arguments;
}
console.log(data_array(1,2,7,'Tes',true));










