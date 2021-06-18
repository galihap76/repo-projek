// JavaScript Document
var jmlAngkot=10;
var angkotBeroperasi=6;

for(var noAngkot=1; noAngkot<=jmlAngkot ; noAngkot++){
	
	if(noAngkot<=angkotBeroperasi){
		
		console.log('Angkot No. ' + noAngkot + ' Berhasil Beroperasi.');
		
	}else if(noAngkot===8){
		
		console.log('Angkot No. ' + noAngkot + ' Butuh Perbaikan.');
		
	}else{
		
		console.log('Angkot No. ' + noAngkot + ' Tidak Berhasil Beroperasi. ');
	}
}

// Bagian Kedua //
var jmlKomputer=10;
var komputerBerjalan=5;

for(var noKomputer=1; noKomputer<=jmlKomputer ; noKomputer++){
	
	if(noKomputer<=komputerBerjalan && noKomputer!==2){
	
	console.log('Komputer No. ' + noKomputer + ' Berjalan Dengan Baik.');
		
} else if(noKomputer===9 || noKomputer===2){
	
	console.log('Komputer No. ' + noKomputer + ' Berkendala.');
	
}else{
	
	console.log('Komputer No. ' + noKomputer + ' Tidak Berjalan Dengan Baik.');
}
	
}






