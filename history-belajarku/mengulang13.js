// JavaScript Document
//program logika javascript for in for//
var s='';

for(var program1=0; program1<1; program1++){
	s+='      ';
	for(var program2=0; program2<1; program2++){
		s+='*';
	}
{
	s+='\n';	
	}
{
	s+='     ';	
	}
}for(var program3=0; program3<3; program3++){
	s+='*';
}{
	s+='\n';
}{
	s+='    ';
}for(var program4=0; program4<5; program4++){
	s+='*';
}{
	s+='\n';
}{
	s+='   ';
}for(var program5=0; program5<7; program5++){
	s+='*';
}{
	s+='\n';
}{
	s+='  ';
}for(var program6=0; program6<9; program6++){
	s+='*';
}{
	s+='\n';
}{
	s+='   ';
}for(var program7=0; program7<7; program7++){
	s+='*';
}{
	s+='\n';
}{
	s+='    ';
}for(var program8=0; program8<5; program8++){
	s+='*';
}{
	s+='\n';
}{
	s+='     ';
}for(var program9=0; program9<3; program9++){
	s+='*';
}{
	s+='\n';
}{
	s+='      ';
}for(var program10=0; program10<1; program10++){
	s+='*';
}{
	s+='\n';
	s+='\n';
	s+='\n';
}{
	s+='      ';
}for(var program11=0; program11<15; program11++){
	s+='*';
}{
	s+='\n';
}{
	s+='     ';
}for(var program12=0; program12<15; program12++){
	s+='*';
}{
	s+='\n';
}{
	s+='    ';
}for(var program13=0; program13<15; program13++){
	s+='*';
}{
	s+='\n';
}{
	s+='   ';
}for(var program14=0; program14<15; program14++){
	s+='*';
}{
	s+='\n';
}{
	s+='  ';
}for(var program15=0; program15<15; program15++){
	s+='*';
}{
	s+='\n';
	s+='\n';
	s+='\n';
}{
	s+='       ';
}for(var program16=0; program16<1; program16++){
	s+='*';
}{
	s+='\n';
}{
	s+='      ';
}for(var program17=0; program17<2; program17++){
	s+='* ';
}{
	s+='\n';
}{
	s+='     ';
}for( var program18=0; program18<3; program18++){
	s+='* ';
}{
	s+='\n';
}{
	s+='    ';
}for(var program19=0; program19<4; program19++){
	s+='* ';
}{
	s+='\n';
}{
	s+='   ';
}for(var program20=0; program20<5; program20++){
	s+='* ';
}{
	s+='\n';
	s+='\n';
}{
	s+='';
}for(var program21=0; program21<=5; program21++){
	for(var program22=0; program22<program21; program22++){
		s+='*';
	}
	s+='\n';
}{
	s+='\n';
}{
	s+='      ';
}for(var program23=0; program23<5; program23++){
	s+='*';
}{
	s+='\n';
}{
	s+='       ';
}for(var program24=0; program24<4; program24++){
	s+='*';
}{
	s+='\n';
}{
	s+='        ';
}for(var program25=0; program25<3; program25++){
	s+='*';
}{
	s+='\n';
}{
	s+='         ';
}for(var program26=0; program26<2; program26++){
	s+='*';
}{
	s+='\n';
}{
	s+='          ';
}for(var program27=0; program27<1; program27++){
	s+='*';
}{
	s+='\n';
	s+='\n';
	s+='\n';
	s+='\n';
}
console.log(s);

//program logika javascript if , if-else , else//
var jmlkaryawanIT=10;
var karyawanBerkerja=4;

for(var noKaryawan=1; noKaryawan<=jmlkaryawanIT; noKaryawan++){
	if(noKaryawan<=karyawanBerkerja && noKaryawan!==3 && noKaryawan!==4){
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Web Developer.');
	}else if(noKaryawan===3){
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Bagian Dari Fullstack Developer.');
	}else if(noKaryawan===4){
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Game Developer.');
	}else if(noKaryawan===5){
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Mobile Developer.');
	}else if(noKaryawan===6){
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Data Analyst.');
	}else if(noKaryawan===7){
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai IT Support.');
	}else{
		console.log('Apakah Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Karyawan IT?');
	}
}

//program logika javascript Switch//

var data=prompt('Masukan inputan dari:1,2,3,4,5 data berupa data sistem operasi android, data sistem operasi pc, data server, data sekolah, data perusahaan!');
var obyek_program;

switch(data){
	case '1':
	obyek_program='data sistem operasi android';
	alert('Anda memasukkan sebuah ' + obyek_program);
	break;
	case '2':
	obyek_program='data sistem operasi pc';
	alert('Anda memasukkan sebuah ' + obyek_program);
	break;
	case '3':
	obyek_program='data server';
	alert('Anda memasukkan sebuah ' + obyek_program);
	break;
	case '4':
	obyek_program='data sekolah';
	alert('Anda memasukkan ' + obyek_program);
	break;
	case '5':
	obyek_program='data perusahaan';
	alert('Anda memasukkan ' + obyek_program);
	break;
	default:
	alert('Anda memasukkan inputan yang salah atau keluar sesi!');
	break;
    
}




