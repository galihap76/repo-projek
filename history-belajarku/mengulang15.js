// JavaScript Document
//logika program if , else-if , else//
var jml_pasien=15;
var pasien_dirawat=8;

for(var noPasien=1; noPasien<=jml_pasien; noPasien++){
	if(noPasien<=pasien_dirawat && noPasien!==3 && noPasien!==6 && noPasien!==7){
		console.log('Pasien No. ' + noPasien + ' Berhasil Di Rawat Di Rumah Sakit.');
	}else if(noPasien===3){
		console.log('Pasien No. ' + noPasien + ' Sedang Menuju Rumah Sakit.');
	}else if(noPasien===6){
		console.log('Pasien No. ' + noPasien + ' Mengalami Kritis.');
	}else if(noPasien===7){
		console.log('Pasien No. ' + noPasien + ' Mengalami Kanker Dalam Stadium B.');
	}else if(noPasien===9){
		console.log('Pasien No. ' + noPasien + ' Sedang Menuju Rumah Sakit.');
	}else if(noPasien===11){
		console.log('Pasien No. ' + noPasien + ' Sedang Di Rawat Dalam Kamar No 24. ');
	}else if(noPasien===13){
		console.log('Apakah Pasien No. ' + noPasien + ' Dalam Kendala ' + ' Bersama Bidan RSIA No. 22?');
	}else if(noPasien===14){
		console.log('Apakah Pasien No. ' + noPasien + ' Dalam Kondisi Sehat ' + ' Bersama Bidan RSIA No.23?');
	}else if(noPasien===15){
		console.log('Pasien No. ' + noPasien + ' Berhasil Di Pulangkan.');
	}else {
		console.log('Apakah Pasien No. ' + noPasien + ' Berhasil Di Rawat?');
	}
}
//logika program if , else if , else bagian 2//
var nilai=prompt('Masukkan Nilai Anda Sekarang Dan Lihat Nilai Yang Anda Program.');

if(nilai>90){
	alert('Anda Berhasil Mendapatkan Nilai A.');
}else if(nilai>80){
	alert('Anda Berhasil Mendapatkan Nilai B.');
}else if(nilai>70){
	alert('Anda Berhasil Mendapatkan Nilai C.');
}else if(nilai>60){
	alert('Anda Berhasil Mendapatkan Nilai D.');
}else if(nilai>50){
	alert('Anda Berhasil Mendapatkan Nilai E.');
}else{
	alert('Nilai Anda Sangat Rendah Dalam Kategori Yang Anda Program.');
}





















