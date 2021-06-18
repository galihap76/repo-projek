// JavaScript Document
var jmlAngkot=10;
var angkotBeroperasi=6;

for(var noAngkot=1; noAngkot<=jmlAngkot; noAngkot++){
	
	if(noAngkot<=angkotBeroperasi){
		
		console.log('No Angkot. ' + noAngkot + ' Beroperasi Dengan Baik.');
		
	}else if(noAngkot===9){
		
		console.log('No Angkot. ' + noAngkot + ' Sedang Lembur.');
		
	}else{
		
		console.log('No Angkot ' + noAngkot + ' Tidak Beroperasi Dengan Baik.' );
	}
}


//bagian kedua//
var jmlError=10;
var sistemError=5;

for(var noError=1; noError<=jmlError; noError++){
	
	if(noError<=sistemError){
		
		console.log('Komputer No. ' + noError + ' Terdapat Sebuah Error.');
		
	}else if(noError===8){
		
		console.log('Komputer No. ' + noError + ' Masih Dalam Perbaikan.');
		
	}else{
		
		console.log('Komputer No. ' + noError + ' Tidak Dapat Di Temukan Sebuah Error.');
	}
}

//bagian ketiga//
var dataOS=10;
var tersediadataOS=5;

for(var noOS=1; noOS<=dataOS; noOS++){
	
	if(noOS<=tersediadataOS){
		
		console.log('Sistem Operasi Android No. ' + noOS + ' Berhasil Di Kembangkan.');
		
	}else if(noOS===7 || noOS===10){
		
		console.log('Sistem Operasi Android No. ' + noOS + ' Sedang Dalam Pembaharuan.');
		
	}else{
		
		console.log('Sistem Operasi Android No. ' + noOS + ' Tidak Dapat Di Perbaharui');
	}
}

//bagian keempat//
var jmlServer=10;
var serverTersedia=6;

for(var noServer=1; noServer<=jmlServer; noServer++){
	
	if(noServer<=serverTersedia){
		
		console.log('Server No. ' + noServer + ' Tidak Mengalami Down.');
		
	} else if(noServer===8){
		
		console.log('Server No. ' + noServer + ' Hampir Mengalami Down.');
		
	}else{
		
		console.log('Server No. ' + noServer + ' Mengalami Down.');
	}
}


//bagian kelima//

var jmlData=10;
var dataKomputer=6;

for(var no_data_komputer=1; no_data_komputer<=jmlData; no_data_komputer++){
	
	if(no_data_komputer<=dataKomputer){
		
		console.log('Data Komputer No. ' + no_data_komputer + ' Tidak Mengalami Kendala.');
		
	}else if(no_data_komputer===9){
		
		console.log('Data Komputer No. ' + no_data_komputer + ' Hampir Di Retas.');
		
	}else{
		
		console.log('Data Komputer No. ' + no_data_komputer + ' Telah Di Retas. ');
	}
}

//bagian keenam//

var jmlRumah=10;
var rumahTersedia=6;

for(var noRumah=1; noRumah<=jmlRumah; noRumah++){
	
	if(noRumah<=rumahTersedia){
		
		console.log('Rumah No. ' + noRumah + ' Berhasil Di Bangun.');
		
	}else if(noRumah===8 || noRumah===10){
		
		console.log('Rumah No. ' + noRumah + ' Sedang Di Bangun.');
		
	}else{
		
		console.log('Rumah No. ' + noRumah + ' Sedang Di Beli Seseorang.');
	}
}

//bagian ketujuh//

var jmlMobil=10;
var mobilTersedia=6;

for(var noMobil=1; noMobil<=jmlMobil; noMobil++){
	
	if(noMobil<=mobilTersedia && noMobil!==3){
		
		console.log(' Mobil No. ' + noMobil + ' Sudah Tersedia.');
			
			
		}else if(noMobil===8 || noMobil===10 || noMobil===3){
			
			console.log('Mobil No. ' + noMobil + ' Sedang Dalam Perakitan.');
			
		}else{
			
			console.log('Mobil No. ' + noMobil + ' Sudah Terjual Dalam Beberapa Hari Yang Lalu.');
		}
}
















