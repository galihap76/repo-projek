// JavaScript Document
var dataKomputer=10;
var dataAktif=6;

for(var noData=1; noData<=dataKomputer; noData++){
	
	if(noData<=dataAktif && noData!==3 && noData!==5 ){
		
		console.log('Data Komputer No. ' + noData + ' Sudah Di Aktifkan.');
		
	}else if(noData===8 || noData===3){
		
		console.log('Data Komputer No. ' + noData + ' Hampir Tidak Aktif.');
		
	}else if(noData===5){
		
		console.log('Data Komputer No. ' + noData + ' Hampir Di Retas.');
		
	}else{
		
		console.log('Data Komputer No. ' + noData + ' Sudah Tidak Aktif.');
	}
}


//bagian kedua//
var jmlServer=10;
var serverAktif=6;

for(var noServer=1; noServer<=jmlServer; noServer++){
	
    if(noServer<=serverAktif && noServer!==3){
		
		console.log('Server No. ' + noServer + ' Tidak Mengalami Kendala.');
		
	}else if(noServer===3){
		
		console.log('Server No. ' + noServer + ' Hampir Mengalami Kendala.');
		
	}else{
		
		console.log('Server No. ' + noServer + ' Mengalami Kendala.');
	}
}

//bagian ketiga//
var jmlKomputer=10;
var dataKomputer=6;

for(var noKomputer=1; noKomputer<=jmlKomputer; noKomputer++){
	
	if(noKomputer<=dataKomputer && noKomputer!==2){
		
		console.log('Komputer No. ' + noKomputer + ' Berhasil Di Amankan.');
		
	}else if(noKomputer===2){
		
		console.log('Komputer No. ' + noKomputer + ' Mengalami Kendala Dikit.');
		
	}else{
		
		console.log('Komputer No. ' + noKomputer + ' Hampir Di Retas.');
	}
}

//bagian keempat//
var jmlAndroid=10;
var dataAndroid=5;

for(var noAndroid=1; noAndroid<=jmlAndroid; noAndroid++){
	
	if(noAndroid<=dataAndroid && noAndroid!==2 && noAndroid!==4){
		
		console.log('Data Android No. ' + noAndroid + ' Tidak Di Retas Oleh Hacker.');
		
	}else if(noAndroid===7 || noAndroid===2 || noAndroid===4){
		
		console.log('Data Android No. ' + noAndroid + ' Hampir Di Retas Oleh Hacker.');
		
	}else{
		
		console.log('Data Android No. ' + noAndroid + ' Telah Di Retas Oleh Hacker.');
	}
	
}

//bagian kelima//
var jmlAplikasi=10;
var aplikasiBerjalan=6;

for(var noAplikasi=1; noAplikasi<=jmlAplikasi; noAplikasi++){
	
	if(noAplikasi<=aplikasiBerjalan){
		
		console.log('Aplikasi No. ' + noAplikasi + ' Berhasil Di Perbaharui.');
		
	}else if(noAplikasi===8){
		
		console.log('Aplikasi No. ' + noAplikasi + ' Tidak Dapat Di Perbaharui.');
		
	}else{
		
		console.log('Aplikasi No. ' + noAplikasi + ' Masih Beta.');
		
	}
}

//bagian keenam//
var jmlRumah=10;
var rumahAktif=6;

for(var noRumah=1; noRumah<=jmlRumah; noRumah++){
	
	if(noRumah<=rumahAktif && noRumah!==3 && noRumah!==1){
		
	    console.log('Rumah No. ' + noRumah + ' Merupakan Rumah Yang Masih Aktif.');
		
	}else if(noRumah===3 || noRumah===1){
		
		console.log('Rumah No. ' + noRumah + ' Merupakan Rumah Yang Masih Dalam Pembangunan.');
		
	}else{
		
		console.log('Rumah No. ' + noRumah + ' Merupakan Rumah Yang Masih Kosong.');
	}
}

//bagian ketujuh//
var jmlKaryawan=10;
var karyawanAktif=6;

for(var noKaryawan=1; noKaryawan<=jmlKaryawan; noKaryawan++){
	
	if(noKaryawan<=karyawanAktif && noKaryawan!==3 && noKaryawan!==4 && noKaryawan!==2){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Di Perusahaan Bukalapak.');
		
	}else if(noKaryawan===3 || noKaryawan===4 || noKaryawan===2){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Di Perusahaan Tokopedia.');
		
	}else if(noKaryawan===8 || noKaryawan===9){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Di Perusahaan Lazada.');
		
	}else{
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Di Perusahaan Traveloka.');
		
	}
}

//bagian kedelapan//
var jmlkaryawanIT=20;
var karyawanBerkerja=8;

for(var noKaryawanIT=1; noKaryawanIT<=jmlkaryawanIT; noKaryawanIT++){
	
	if(noKaryawanIT<=karyawanBerkerja && noKaryawanIT!==2 && noKaryawanIT!==4 && noKaryawanIT!==5 && noKaryawanIT!==7){
		
		console.log('Karyawan IT No. ' + noKaryawanIT + ' Berkerja Sebagai Web Developer.');
		
	}else if(noKaryawanIT===2 || noKaryawanIT===4 || noKaryawanIT===5 || noKaryawanIT===7){
		
		console.log('Karyawan IT No. ' + noKaryawanIT + ' Berkerja Sebagai Game Developer.');
		
	}else if(noKaryawanIT===14 || noKaryawanIT===16){
		
		console.log('Karyawan IT No. ' + noKaryawanIT + ' Berkerja Sebagai Android Developer.');
		
	}else if(noKaryawanIT===9 || noKaryawanIT===10){
		
		console.log('Karyawan IT No. ' + noKaryawanIT + ' Berkerja Sebagai Fullstack Developer.');
	
	}else if(noKaryawanIT===11){
		
		console.log('Karyawan IT No. ' + noKaryawanIT + ' Berkerja Sebagai System Analyst.');
		
	}else if(noKaryawanIT===15){
		
		console.log('Karyawan IT No. ' + noKaryawanIT + ' Berkerja Sebagai Database Administration.');
		
	}else if(noKaryawanIT===17 || noKaryawanIT===18 || noKaryawanIT===19){
		
		console.log('Karyawan IT No. ' + noKaryawanIT + ' Berkerja Sebagai Security Engineer.');
		
	}else{
		
		console.log('Karyawan IT No. ' + noKaryawanIT + ' Berkerja Sebagai UI/UX Designer.');
	}
}

























