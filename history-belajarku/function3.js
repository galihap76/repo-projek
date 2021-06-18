// JavaScript Document
function tambah(){
	var hasil=0;
	for(var i=0; i<arguments.length; i++){
		hasil+=arguments[i];
	}
	return hasil;
}

var coba=tambah(1,2,4,2);
console.log(coba);


function array(){
	return arguments;
}
var coba=array(1,2,3,'Hello World!',true);
console.log(coba);

function kali(a,b){
	var nilaiA;
	var nilaiB;
	var total;
	
	nilaiA= a * a;
	nilaiB= b * b;
	total= nilaiA + nilaiB;
	
	return total;
}

console.log(kali(5,5));

function kurang(a,b){
	var nilaiA;
	var nilaiB;
	var total;
	
	nilaiA= a - a;
	nilaiB= b - b;
	total= nilaiA + nilaiB;
	return total;
}
console.log(kurang(10,3));

function bagi(a){
	var nilaiA;
	var total;
	
	nilaiA= a / 8;
	total= nilaiA;
	
	return total;
}

console.log(bagi(12));

var namaku='Galih Anggoro Prasetya';
console.log(namaku.charAt(6));

function array(){
	return arguments;
}
var hasil=array(1,2,5,10);
console.log(hasil);







