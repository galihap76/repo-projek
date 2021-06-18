// JavaScript Document
var jmlkaryawanIT=20;
var karyawanBerkerja=8;

for(var noKaryawan=1; noKaryawan<=jmlkaryawanIT; noKaryawan++){
	
	if(noKaryawan<=karyawanBerkerja &&  noKaryawan!==5 && noKaryawan!==6 && noKaryawan!==7 && noKaryawan!==8){
		
	  console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Web Developer.');
	
	}else if(noKaryawan===5 || noKaryawan===6 || noKaryawan===7 || noKaryawan===8 ){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Game Developer.');
		
	}else if(noKaryawan===9 || noKaryawan===10){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Fullstack Developer.');
		
	}else if(noKaryawan===11){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai System Analyst.');
		
	}else if (noKaryawan===13 || noKaryawan===14 || noKaryawan===15){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Data Scientist.');
		
	}else if(noKaryawan===16 || noKaryawan===17){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Hardware Engineer.');
		
	}else if(noKaryawan===18 || noKaryawan===19 || noKaryawan===20){
		
		console.log('Karyawan No.' + noKaryawan + ' Berkerja Sebagai Security Engineer.');
		
	}else{
		
		console.log('Apakah Karyawan ' + noKaryawan + ' Berkerja Sebagai IT?');
	}
	
}






