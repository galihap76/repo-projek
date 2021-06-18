// JavaScript Document
alert('Buatlah program anda sendiri dalam membuat username dan password sederhana!');

var username=prompt('Masukkan username anda');
var password=prompt('Masukkan password anda juga!');

if(username=='galih'){
	if(password=='76'){
		alert('Halo selamat datang galih!');
	}
}else{
	alert('Anda memasukkan sebuah username dan password yang salah!');
}function data_array(){
	return arguments;
}
console.log(data_array(1,3,5,'hello world!',true));

function array(){
	var hasil=0;
	for(var i=0; i<arguments.length; i++){
		hasil+=arguments[i];
	}
	return hasil;
}
console.log(array(10,10));