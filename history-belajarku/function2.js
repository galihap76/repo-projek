// JavaScript Document
function Nilai(a, b){
	var nilaiA;
	var nilaiB;
	var total;
	
    nilaiA=a + a + a;
	nilaiB=b + b + b;
	
	total=nilaiA + nilaiB;
	return total;
}

alert(Nilai(10,10));
alert(Nilai(14,26));
alert(Nilai(7,9));
alert(Nilai(14,10));


function nama(depan, belakang){
	console.log('Hello ' + depan + belakang);
}
nama('Galih', ' Anggoro Prasetya.');


function jumlah(a,b,c){
	var nilaiA;
	var nilaiB;
	var nilaiC;
	var total;

	nilaiA=a + a + a;
	nilaiB=b + b + b;
	nilaiC=c + c + c;
	
	total=nilaiA + nilaiB + nilaiC;
	
	return total;
}
console.log(jumlah(5,5,10));

function program(klien){
	console.log('Saya menggunakan bahasa pemograman ' + klien);
}
program('Javascript');


