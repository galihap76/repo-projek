// JavaScript Document
let nilaiBenarsemua=20+20+20+20+20;
let soal1=prompt('Siapakah pencipta javascript itu?\n apakah brendan eich? apakah blaise pascal? apakah douglas crockforg?');
if(soal1=='brendan eich'){
	alert('Jawaban anda benar.');
}else if(soal1=='blaise pascal' || soal1=='douglas crockforg'){
	alert('Jawaban anda salah!');
}else{
	alert('Anda belum memasukkan apapun!');
}

let soal2=prompt('Mesin javascript yang di gunakan adalah?\n apakah V8 Engine? apakah HOUR Engine? apakah DOM Engine?');
if(soal2=='V8 Engine'){
	alert('Jawaban anda benar.');
}else if(soal2=='HOUR Engine' || soal2=='DOM Engine'){
	alert('Jawaban anda salah!');
}else{
	alert('Anda belum memasukkan apapun.');
}

let soal3=prompt('Teknik peretasan yang memanfaatkan sisi klien yaitu?\n XSS? SQL INJECTION? DDOS?');
if(soal3=='XSS'){
	alert('Jawaban anda benar.');
}else if(soal3=='SQL INJECTION' || soal3=='DDOS'){
	alert('Jawaban anda salah!');
}else{
	alert('Anda belum memasukkan apapun.');
}

let soal4=prompt('Bahasa pemrograman apa yang menggunakan sisi klien?\n Javascript? PHP? Delphi7?');
if(soal4=='Javascript'){
	alert('Jawaban anda benar.');
}else if(soal4=='PHP' || soal4=='Delphi7'){
	alert('Jawaban anda salah!');
}else{
	alert('Anda belum memasukkan apapun.');
}

let soal5=prompt('Javascript kebanyakan di gunakan untuk ?\n Pembuatan aplikasi web? aplikasi dekstop? aplikasi mobile?');
if(soal5=='aplikasi web'){
	alert('Jawaban anda benar.');
}else if(soal5=='aplikasi dekstop' || soal5=='aplikasi mobile'){
	alert('Jawaban anda salah!');
}else{
	alert('Anda belum memasukkan apapun.');
}

if(soal1=='brendan eich' && soal2=='V8 Engine' && soal3=='XSS' && soal4=='Javascript' && soal5=='aplikasi web'){
	alert('Nilai anda ' + nilaiBenarsemua);
}else{
	alert('Nilai anda belum memuaskan');
}




