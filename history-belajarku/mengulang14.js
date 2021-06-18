// JavaScript Document
//logika program if, else-if, else//
var jml_data=10;
var data_rumah_sakit=5;

for(var pasien_sembuh=1; pasien_sembuh<=jml_data; pasien_sembuh++){
	if(pasien_sembuh<=data_rumah_sakit && pasien_sembuh!==2 && pasien_sembuh!==3 && pasien_sembuh!==4 && pasien_sembuh!==5){
		console.log('Pasien No. ' + pasien_sembuh + ' Berhasil Sembuh.');
	}else if(pasien_sembuh===2){
		console.log('Pasien No. ' + pasien_sembuh + ' Dalam Keadaan Sehat.');
	}else if(pasien_sembuh===3){
		console.log('Pasien No. ' + pasien_sembuh + ' Menuju Rumah Sakit.');
	}else if(pasien_sembuh===4){
		console.log('Pasien No. ' + pasien_sembuh + ' Berhasil Di Pulangkan Ke Rumah.');
	}else if(pasien_sembuh===5){
		console.log('Pasien No. ' + pasien_sembuh + ' Telah Meninggal.');
	}else if(pasien_sembuh===6){
		console.log('Pasien No. ' + pasien_sembuh + ' Masih Di Rawat Di Rumah Sakit.');
	}else{
		console.log('Apakah Pasien No. ' + pasien_sembuh + ' Di Rawat Di Rumah Sakit?');
	}
}

//logika program switch//
var dataRSIA=prompt('Masukan inputan angka dari:1,2,3,4,5 maka program akan menampilkan data RSIA tersendiri.');
var obyek_pasien;
var jenis_kelamin;

switch(dataRSIA){
	case '1':
	obyek_pasien='Pasien Dalam Keadaan Sehat';
	jenis_kelamin='Pria';
	alert('Anda Memasukkan Angka 1 Dalam Data ' + obyek_pasien + ' Berjenis Kelamin ' + jenis_kelamin);
	break;
	case '2':
	obyek_pasien='Pasien Dalam Keadaan Kritis';
	jenis_kelamin='Pria';
	alert('Anda Memasukkan Angka 2 Dalam Data ' + obyek_pasien + ' Berjenis Kelamin ' + jenis_kelamin);
	break;
	case '3':
	obyek_pasien='Pasien Dalam Keadaan Koma';
	jenis_kelamin='Wanita';
	alert('Anda Memasukkan Angka 3 Dalam Data ' + obyek_pasien + ' Berjenis Kelamin ' + jenis_kelamin);
	break;
	case '4':
	obyek_pasien='Pasien Dalam Menuju Rumah Sakit';
	jenis_kelamin='Pria';
	alert('Anda Memasukkan Angka 4 Dalam Data ' + obyek_pasien + ' Berjenis Kelamin ' + jenis_kelamin);
	break;
	case '5':
	obyek_pasien='Pasien Dalam Keadaan Sangat Kritis';
	jenis_kelamin='Wanita';
	alert('Anda Memasukkan Angka 5 Dalam Data ' + obyek_pasien + ' Berjenis Kelamin ' + jenis_kelamin);
	break;
	default:
	alert('Anda Memasukkan Inputan Yang Salah Atau Keluar Sesi!');
	break;
}






