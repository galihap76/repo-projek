// JavaScript Document
var jmlAngkot=10;
var angkotBeroperasi=6;

for(var noAngkot=1 ; noAngkot<=jmlAngkot ; noAngkot++){
	
	if(noAngkot<=angkotBeroperasi){
		
		console.log('Angkot No. ' + noAngkot + ' Beroperasi Dengan Baik.');
		
	} else if(noAngkot===8 || noAngkot===10){
		
		console.log('Angkot No. ' + noAngkot + ' Sedang Lembur.');
		
	}else{
		console.log('Angkot No. ' + noAngkot + ' Sedang Tidak Beroperasi.');
	}
}