// JavaScript Document
//logika program for di dalam for//
var s='';

for(var program1=0; program1<1; program1++){
	s+='      *';
}{
	s+='\n';
}{
	s+='     ';
}for(var program2=0; program2<3; program2++){
	s+='*';
}{
	s+='\n';
}{
	s+='    ';
}for(var program3=0; program3<5; program3++){
	s+='*';
}{
	s+='\n';
}{
	s+='   ';
}for(var program4=0; program4<7; program4++){
	s+='*';
}{
	s+='\n';
}{
	s+='  ';
}for(var program5=0; program5<9; program5++){
	s+='*';
}{
	s+='\n';
}{
	s+=' ';
}for(var program6=0; program6<11; program6++){
	s+='*';
}{
	s+='\n';
}{
	s+='';
}for(var program7=0; program7<13; program7++){
	s+='*';
}{
	s+='\n';
}{
	s+=' ';
}for(var program8=0; program8<11; program8++){
	s+='*';
}{
	s+='\n';
}{
	s+='  ';
}for(var program9=0; program9<9; program9++){
	s+='*';
}{
	s+='\n';
}{
	s+='   ';
}for(var program10=0; program10<7; program10++){
	s+='*';
}{
	s+='\n';
}{
	s+='    ';
}for( var program11=0; program11<5; program11++){
	s+='*';
}{
	s+='\n';
}{
	s+='     ';
}for(var program12=0; program12<3; program12++){
	s+='*';
}{
	s+='\n';
}{
	s+='      ';
}for(var program13=0; program13<1; program13++){
	s+='*';
}{
	s+='\n';
	s+='\n';
	s+='\n';
}{
	s+='    ';
}for(var program14=0; program14<5; program14++){
	s+='*';
}{
	s+='\n';
}{
	s+='     ';
}for(var program15=0; program15<4; program15++){
	s+='*';
}{
	s+='\n';
}{
	s+='      ';
}for(var program16=0; program16<3; program16++){
	s+='*';
}{
	s+='\n';
}{
	s+='       ';
}for(var program17=0; program17<2; program17++){
	s+='*';
}{
	s+='\n';
}{
	s+='        ';
}for(var program18=0; program18<1; program18++){
	s+='*';
}{
	s+='\n';
}{
	s+='       ';
}for(var program19=0; program19<2; program19++){
	s+='*';
}{
	s+='\n';
}{
	s+='      ';
}for(var program20=0; program20<3; program20++){
	s+='*';
}{
	s+='\n';
}{
	s+='     ';
}for(var program21=0; program21<4; program21++){
	s+='*';
}{
	s+='\n';
}{
	s+='    ';
}for(var program22=0; program22<5; program22++){
	s+='*';
}{
	s+='\n';
	s+='\n';
	s+='\n';
}{
	s+='          ';
}for(var program23=0; program23<1; program23++){
	s+='*';
}{
	s+='\n';
}{
	s+='         ';
}for(var program24=0; program24<2; program24++){
	s+='* ';
}{
	s+='\n';
}{
	s+='        ';
}for(var program25=0; program25<3; program25++){
	s+='* ';
}{
	s+='\n';
}{
	s+='       ';
}for(var program26=0; program26<4; program26++){
	s+='* ';
}{
	s+='\n';
}{
	s+='      ';
}for(var program27=0; program27<5; program27++){
	s+='* ';
}{
	s+='\n';
}{
	s+='     ';
}for(var program28=0; program28<6; program28++){
	s+='* ';
}{
	s+='\n';
}{
	s+='    ';
}for(var program29=0; program29<7; program29++){
	s+='* ';
}{
	s+='\n';
}{
	s+='   ';
}for(var program30=0; program30<8; program30++){
	s+='* ';
}{
	s+='\n';
}{
	s+='  ';
}for(var program31=0; program31<9; program31++){
	s+='* ';
}{
	s+='\n';
}{
	s+=' ';
}for(var program32=0; program32<10; program32++){
	s+='* ';
}{
	s+='\n';
	s+='\n';
	s+='\n';
}{
	s+='       ';
}for(var program33=0; program33<15; program33++){
	s+='*';
}{
	s+='\n';
}{
	s+='      ';
}for(var program34=0; program34<15; program34++){
	s+='*';
}{
	s+='\n';
}{
	s+='     ';
}for(var program35=0; program35<15; program35++){
	s+='*';
}{
	s+='\n';
}{
	s+='    ';
}for(var program36=0; program36<15; program36++){
	s+='*';
}{
	s+='\n';
}{
	s+='   ';
}for(var program37=0; program37<15; program37++){
	s+='*';
}{
	s+='\n';
	s+='\n';
	s+='\n';
}for(var program38=0; program38<10; program38++){
	for(var program39=0; program39<program38; program39++){
		s+='*';
	}
	s+='\n';
}{
	s+='\n';
	s+='\n';
	s+='\n';
}
console.log(s);

//logika program if, else-if, else//
var jml_pasien=15; 
var daftar_pasien=5;

for(var no_pasien=1; no_pasien<=jml_pasien; no_pasien++){
	if(no_pasien<=daftar_pasien && no_pasien!==4 && no_pasien!==5 && no_pasien!==2){
		console.log('Pasien no. ' + no_pasien + ' berhasil menuju rumah sakit.');
	}else if(no_pasien===4){
		console.log('Pasien no. ' + no_pasien + ' sedang menuju rumah sakit.');
	}else if(no_pasien===5 || no_pasien===2){
		console.log('Pasien no. ' + no_pasien + ' dalam mengalami kecelakaan.');
	}else if(no_pasien===8){
		console.log('Pasien no. ' + no_pasien + ' mengalami penyakit kulit.');
	}else if(no_pasien===10){
		console.log('Pasien no. ' + no_pasien + ' mengalami kanker stadium B.');
	}else if(no_pasien===11){
		console.log('Pasien no. ' + no_pasien + ' mengalami gangguan mata.');
	}else if(no_pasien===12){
		console.log('Pasien no. ' + no_pasien + ' mengalami penyakit kanker tenggorokan.');
	}else if(no_pasien===13 || no_pasien===14){
		console.log('Pasien no. ' + no_pasien + ' berhasil di pulangkan ke rumah dalam kondisi sehat.');
	}else if(no_pasien===15){
		console.log('Pasien no. ' + no_pasien + ' telah meninggal.');
	}else{
		console.log('Apakah pasien no. ' + no_pasien + ' di rawat di rumah sakit?');
	}
}

//space program 1//
	var s2='';
	
for(var space_program1=0; space_program1<1; space_program1++){
	s2+='\n';
	s2+='\n';
	s2+='\n';
	s2+='\n';
	s2+='\n';
	s2+='\n';
	s2+='\n';
	s2+='\n';
	s2+='\n';
	s2+='\n';
}
	console.log(s2);
	
//bagian program if, else-if, else bagian kedua//
var jml_bidan_RSIA=20;
var bidan_RSIA=7;
for( var no_bidan_RSIA=1; no_bidan_RSIA<=jml_bidan_RSIA; no_bidan_RSIA++){
	if(no_bidan_RSIA<=bidan_RSIA && no_bidan_RSIA!==3 && no_bidan_RSIA!==4 && no_bidan_RSIA!==5){
		console.log('Bidan no. ' + no_bidan_RSIA + ' sedang dalam perawatan rumah sakit.');
	}else if(no_bidan_RSIA===3 || no_bidan_RSIA===4 || no_bidan_RSIA===5){
		console.log('Bidan no. ' + no_bidan_RSIA + ' sedang perawatan rumah sakit dalam tahap pelaksanaan bersama jam 12.45 siang nanti.');
	}else if(no_bidan_RSIA===9){
		console.log('Bidan no. ' + no_bidan_RSIA + ' sedang dalam istirahat dalam perawatan pasien khusus no.9');
	}else if(no_bidan_RSIA===10){
		console.log('Bidan no. ' + no_bidan_RSIA + ' sedang dalam istirahat dalam perawatan pasien khusus no.10');
	}else if(no_bidan_RSIA===12){
		console.log('Bidan no. ' + no_bidan_RSIA + ' sedang dalam pengecekan pasien dalam kamar no.24');
	}else if(no_bidan_RSIA===13){
		console.log('Bidan no. ' + no_bidan_RSIA + ' sedang dalam pengecekan pasien dalam kamar no.27');
	}else if(no_bidan_RSIA===14 || no_bidan_RSIA===15){
		console.log('Bidan no. ' + no_bidan_RSIA + ' sedang dalam pengecekan bersama dalam pasien kamar no.29');
	}else if(no_bidan_RSIA===17){
		console.log('Bidan no. ' + no_bidan_RSIA + ' sedang dalam pengecekan pasien dalam kamar no.44');
	}else if(no_bidan_RSIA===18){
		console.log('Bidan no. ' + no_bidan_RSIA + ' sedang dalam pengecekan pasien dalam kamar no 47');
	}else{
		console.log('Apakah bidan no. ' + no_bidan_RSIA + ' sudah melakukan tugas?');
	}
}

//bagian program switch//
var data_RSIA=prompt('Masukkan angka: 1, 2, 3, 4, 5 data RSIA akan muncul sesuai nilai masing masing.');
var data_pasien;
switch(data_RSIA){
	case '1':
	data_pasien=('anda boleh memasuki kantor IT no.5');
	alert('Anda memasukkan angka 1 data terkirim dalam output ' + data_pasien);
	break;
	case '2':
	data_pasien=('anda boleh memasuki kantor IT no.7');
	alert('Anda memasukkan angka 2 data terkirim dalam output ' + data_pasien);
	break;
	case '3':
	data_pasien=('anda boleh memasuki ruang operasi.');
	alert('Anda memasukkan angka 3 data terkirim dalam output ' + data_pasien);
	break;
	case '4':
	data_pasien=('anda boleh memasuki ruang khusus yang di sediakan oleh pihak rumah sakit.');
	alert('Anda memasukkan angka 4 data terkirim dalam output ' + data_pasien);
	break;
	case '5':
	data_pasien=('anda boleh memasuki ruang khusus dalam ruang IT yang di sediakan oleh pihak rumah sakit.');
	alert('Anda memasukkan angka 5 data terkirim dalam output ' + data_pasien);
	break;
	default:
	alert('Anda salah memasukkan atau anda keluar sesi!');
	break;
}
//space program 2//
var s3='';

for(var space_program2=0; space_program2<10; space_program2++){
	s3+='\n';
}
console.log(s3);

//bagian program function//
function nama(namadepan, namabelakang){
	console.log('Hello ' + namadepan + namabelakang);
}
nama('Galih',' Anggoro Prasetya.');

function nilai_tambah(a,b){
	var nilaiA;
    var nilaiB;
	var total;
	
	nilaiA= a + a + a ;
	nilaiB= b + b + b ;
	total= nilaiA + nilaiB;
	
	return total;
}
console.log(nilai_tambah(5,10));

function nilai_kurang(a){
	var nilaiA;
	var total;
	
	nilaiA= a - 10;
	total= nilaiA;
	return total;
	
}
console.log(nilai_kurang(20));

function array(){
	return arguments;
  }
var output=array(0,3,5,'Hello Wolrd!',true);
console.log(output);

function array2(){
	return arguments;
}
var output2=array2(2,4,5,6,7,'Hello Galih Angggoro Prasetya',false);
console.log(output2);

function array3(){
	return arguments;
}
var output3=array3(5,10,15,20,'Hello Galih!',true);
console.log(output3);




	
	