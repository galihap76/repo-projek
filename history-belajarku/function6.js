// JavaScript Document
function number(){
	return arguments;
}
console.log(number(10,20,30));

function number_array(){
	var total=0;
	for(var i=0; i<arguments.length; i++){
		total+=arguments[i];
	}
	return total;
}
console.log(number_array(10,10,10,10,10));

function item(){
	return arguments;
}
console.log(item('laptop', 'smartphone', 'sunglasses', 'earphone', 'calender'));

function nilai(){
	var hasil=0;
	for(var j=0; j<arguments.length; j++){
		hasil+=arguments[j];
	}
	return hasil;
}
console.log(nilai(10,10,10,10,10,10,10));

function angka(){
	var jumlahkan=0;
	for(var k=0; k<arguments.length; k++){
		jumlahkan+=arguments[k];
	}
	return jumlahkan;
}
console.log(angka(10,100,20,50,10,50,50));



