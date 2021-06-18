// JavaScript Document
var jmlkaryawanIT=20;
var karyawanBerkerja=7;

for(var noKaryawan=1; noKaryawan<=jmlkaryawanIT; noKaryawan++){
	
	if(noKaryawan<=karyawanBerkerja && noKaryawan!==6 && noKaryawan!==7){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Web Developer.');
		
	}else if(noKaryawan===6 || noKaryawan===7){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Fullstack Developer.');
		
	}else if(noKaryawan===8 || noKaryawan===10){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Android Developer.');
		
	}else if(noKaryawan===9){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai UI/UX Designer.');
		
	}else if(noKaryawan===11){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai System Analyst.');
		
	}else if(noKaryawan===13 || noKaryawan===14){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Hardware Engineer.');
		
	}else if(noKaryawan===15){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Database Administration.');
		
	}else if(noKaryawan===16){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Quality Assurance.');
		
	}else if(noKaryawan===18){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Security Engineer.');
		
	}else if(noKaryawan===19){
		
		console.log('Karyawan No. ' + noKaryawan + ' Berkerja Sebagai Game Developer.');
		
	}else if(noKaryawan===20){
		
		console.log('Karyawan No. ' + noKaryawan + ' Bekerja Sebagai Game Developer');
		
	}else {
		
		console.log('Apakah Karyawan No. ' + noKaryawan + ' Berkerja Sebagai IT?');
	}
	
}














