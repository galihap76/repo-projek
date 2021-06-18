// JavaScript Document
var obj1={
	nama:'galih',
	umur:17,
	status:'pelajar'
};
console.log(obj1);

function call1(i){
	if(i===0){
		return;
	}
	console.log(i);
	call1(i-1);
}
call1(10);

function call2(n){
	if(n===11){
		return;
	}
	console.log(n);
	call2(n+1);
}
call2(1);

var penumpang=['Galih', undefined, 'Prasetya'];
var tambahPenumpang= function(namaPenumpang, penumpang){
// jika angkot kosong
	if(penumpang.length===0){
//	jika penumpang di awal Array
		penumpang.push(namaPenumpang);
//	kembalikan isi array & keluar dari function
		return penumpang;
	}else{
//	telusuri seluruh kursi dari awal
		for(var i=0; i<penumpang.length; i++){
//	jika ada kursi kosong
			if(penumpang[i]==undefined){
//	tambah penumpang di kursi tersebut
				penumpang[i]=namaPenumpang;
//	kembalikan isi array & keluar dari function
				return penumpang;
			}
//	jika sudah ada nama yang sama
			else if(penumpang[i]==namaPenumpang){
//	tampilkan  pesan kesalahannya
			console.log(namaPenumpang + ' Sudah ada di dalam angkot.');	
//	kembalikan isi array & keluar dari function
				return penumpang;
			}
//	jika seluruh kursi terisi
			else if(i==penumpang.length -1){
//	tambah penumpang akhir di Array
				penumpang.push(namaPenumpang);
//	kembalikan isi array & keluar dari function
				return penumpang;
	}
   }
  }
}

var obj2={value:1, value:2, value:3};

var value=Object.values(obj2);
console.log(value);











