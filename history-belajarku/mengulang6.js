// JavaScript Document
var angka=prompt('Masukkan nilai anda dan berapakah ranking anda nanti!');

if(angka > 90){
	alert('Anda mendapatkan ranking a');
	
}else if(angka > 80){
	alert('Anda mendapatkan ranking b');
	
}else if(angka > 70){
	alert('Anda mendapatkan ranking c');
	
}else if(angka > 60){
	alert('Anda mendapatkan ranking d');
	
}else if(angka >= 50){
	alert('Anda mendapatkan ranking e');
	
}else{
	alert('Maaf yang anda masukkan apakah nilai atau salah mengartikan?');

}

//bagian data //

var jmlKaryawan=10;
var karyawanbekerjaIT=6;

for(var noKaryawan=1; noKaryawan<=jmlKaryawan; noKaryawan++){
	if(noKaryawan<=karyawanbekerjaIT && noKaryawan!==2 && noKaryawan!==5){
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Web Developer.');
		
	}else if(noKaryawan===2 || noKaryawan===5){
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Fullstack Developer.');
		
	}else if(noKaryawan===7){
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Game Developer.');
		
	}else if(noKaryawan===8){
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Mobile Developer.');
		
	}else{
		console.log('Apakah Karyawan No. ' + noKaryawan + ' Berkerja Sebagai IT?');
	}
}






















