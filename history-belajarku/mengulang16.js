// JavaScript Document
//bagian logika if, else-if, else//
var jmlPasien=15;
var pasien_terawat=6;

for(var noPasien=1; noPasien<=jmlPasien; noPasien++){
	if(noPasien<=pasien_terawat && noPasien!==3 && noPasien!==4 && noPasien!==5){
		console.log('Pasien No. ' + noPasien + ' Berhasil Di Rawat Di Rumah Sakit.');
	}else if(noPasien===3){
		console.log('Pasien No. ' + noPasien + ' Menuju Rumah Sakit.');
	}else if(noPasien===4){
		console.log('Pasien No. ' + noPasien + ' Dalam Keadaan Kritis.');
	}else if(noPasien===5){
		console.log('Pasien No. ' + noPasien + ' Dalam Keadaan Koma.');
	}else if(noPasien===8){
		console.log('Pasien No. ' + noPasien + ' Sedang Dalam Perawatan Rumah Sakit.');
	}else if(noPasien===9){
		console.log('Pasien No. ' + noPasien + ' Dalam Keadaan Terkena Kanker Stadium B.');
	}else if(noPasien===11){
		console.log('Pasien No. ' + noPasien + ' Sedang Dalam Perawatan Rumah Sakit.');
	}else if(noPasien===13){
		console.log('Pasien No. ' + noPasien + ' Sedang Dalam Operasi.');
	}else if(noPasien===14){
		console.log('Pasien No. ' + noPasien + ' Tidak Sedang Dalam Operasi.');
	}else{
		console.log('Apakah Pasien No. ' + noPasien + ' Sedang Di Rawat Di Rumah Sakit?');
	}
}

//bagian logika switch//
var dataRSIA=prompt('Masukkan pilihan angka berupa: angka 1, angka 2, angka 3, angka 4, angka 5 maka program akan tampil dalam data RSIA.');

var data_dalam_RSIA;

switch(dataRSIA){
	case '1':
	data_dalam_RSIA=('silakan anda boleh memasuki ruang IT RSIA.');
	alert('Anda memasukkan angka 1 dalam data ' + data_dalam_RSIA);
	break;
	case '2':
	data_dalam_RSIA=('silakan anda boleh memasuki kamar no 12.');
	alert('Anda memasukkan angka 2 dalam data ' + data_dalam_RSIA);
	break;
	case '3':
	data_dalam_RSIA=('silakan anda boleh mengecek kamar no 15.');
	alert('Anda Memasukkan angka 3 dalam data ' + data_dalam_RSIA);
	break;
	case '4':
	data_dalam_RSIA=('silakan anda boleh memeriksa pasien RSIA.');
	alert('Anda memasukkan angka 4 dalam data ' + data_dalam_RSIA);
	break;
	case '5':
	data_dalam_RSIA=('silakan anda boleh menuju ruang sendiri.');
	alert('Anda memasukkan angka 5 dalam data ' + data_dalam_RSIA);
	break;
	default:
	alert('Anda salah memasukkan data atau keluar sesi!');
	break;
}














