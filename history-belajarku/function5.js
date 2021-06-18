// JavaScript Document
//bagian program function 1 //
function nilai_tambah(a, b){
	var nilaiA;
	var nilaiB;
	var total;
	
	nilaiA= a + a + a;
	nilaiB= b + b + b;
	total= nilaiA + nilaiB;
	 
	return total;
}
console.log(nilai_tambah(10,10));

function array(){
	return arguments;
}
console.log(array(1,2,3,'Hello World!',true));

function data_array(){
	var angka_array=0;
	
	for(var i=0; i<arguments.length; i++){
		angka_array+=arguments[i];
	}
	return angka_array;
}
console.log(data_array(1,2,3,4,5));

function data_array2(){
	var angka_array2=0;
	
	for(var j=0; j<arguments.length; j++){
		angka_array2+=arguments[j];
	}
	return angka_array2;
}
console.log(data_array2(5,5,10,25));

function array2(){
	return arguments;
}
console.log(array2(1,'3',5,'10','Hello World!',true));


