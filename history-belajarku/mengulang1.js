// JavaScript Document
var jmlAngkot=10;
var noAngkot=1;

while(noAngkot<=jmlAngkot){
	
	console.log('No Angkot. ' + noAngkot + ' Beroperasi Dengan baik.');
	
noAngkot++;
	
}

//bagian kedua //
var jmlKomputer=10;
var noKomputer=1;

for(noKomputer=1; noKomputer<=jmlKomputer; noKomputer++){
	
	console.log('No Komputer. ' + noKomputer + ' Sedang Tidak Beroperasi Dengan Baik.');
}

//bagian ketiga //
var jmlMotor=5;
var noMotor=1;

while(noMotor<=jmlMotor){
	
	console.log('No Motor. ' + noMotor + ' Beroperasi Dengan Baik.');
	
noMotor++;
	
}

//bagian keempat//

var jmlMobil=5;
var noMobil=1;

for(noMobil=1; noMobil<=jmlMobil; noMobil++){
	
	console.log('No Mobil. ' + noMobil + ' Sedang Tidak Beroperasi Dengan Baik.');
}

//bagian kelima//

var jmlTruk=10;
var trukBerjalan=6;
var noTruk=1;

while(noTruk<=trukBerjalan){
	
	console.log ('No Truk.' + noTruk + ' Berjalan Dengan Baik.');
	
noTruk++;
	
}

for(noTruk<=trukBerjalan +1 ; noTruk<=jmlTruk ; noTruk++){
	
	console.log('No Truk ' + noTruk + ' Tidak Berjalan Dengan Baik.');
}

//bagian keenam//
var jmlCpu=10;
var cpuBeroperasi=6;

for(var noCpu=1; noCpu<=jmlCpu; noCpu++){

	if(noCpu<=cpuBeroperasi){
	
	console.log('Nomor Cpu. ' + noCpu + ' Berjalan Dengan Baik.');
	
} else if(noCpu===8){
	
	console.log('Nomor Cpu. ' + noCpu + ' Mengalami Kotor.');
	
}else{
	
	console.log('Nomor Cpu. ' + noCpu + ' Tidak berjalan Dengan Baik.');
}
}

//bagian ketujuh//
var jmlMifi=10;
var mifiBerjalan=6;

for(var noMifi=1; noMifi<=jmlMifi; noMifi++){
	
	if(noMifi<=mifiBerjalan && noMifi !==2){
		
		console.log('No Mifi. ' +  noMifi + ' Berjalan Dengan Baik.');
		
	}else if(noMifi===8 || noMifi===2){
		
		console.log ('No Mifi. ' + noMifi + ' Data Kouta Mengalami Sekarat.');
		
	}else{
		
		console.log('No Mifi. ' + noMifi + ' Tidak Berjalan Dengan Baik.');
	}
	
}

//bagian kedelapan//
var jmlProduk=10;
var produkGagal=5;

for(var noProduk=1; noProduk<=jmlProduk; noProduk++){
	
	if(noProduk<=produkGagal){
		
		console.log('Produk No. ' + noProduk + ' Tidak Mengalami Gagal.');
		
	}else if(noProduk===7){
		
		console.log('Produk No. ' + noProduk + ' Mengalami Kendala Sedikit.');
		
	}else{
		
		console.log('Produk No. ' + noProduk + ' Mengalami Kegagalan.');
		
	}
}
	


























