//javascript document
let tambah=document.getElementsByName('tambah')[0];
let kurang=document.getElementsByName('kurang')[0];
let kali=document.getElementsByName('kali')[0];
let bagi=document.getElementsByName('bagi')[0];
let reset=document.getElementsByName('reset')[0];
let hitung=document.getElementById('hitung');
let form=document.getElementById('form');
tambah.addEventListener('click', cekhasilTambah);
kurang.addEventListener('click', cekhasilKurang);
kali.addEventListener('click', cekhasilKali);
bagi.addEventListener('click', cekhasilBagi);
reset.addEventListener('click', resetHasil);

function cekhasilTambah(e){
    if(form.hitung.value){
		let hasilpenambahan=eval(form.hitung.value);
		 hasilpenambahan + hasilpenambahan;
		form.hasil.value=hasilpenambahan;
	}else if(form.hitung.value===""){
		alert('Maaf jangan kosong.');
	}
	e.preventDefault();
}

function cekhasilKurang(e){
	if(form.hitung.value){
		let hasilpengurangan=eval(form.hitung.value);
		hasilpengurangan - hasilpengurangan;
		form.hasil.value=hasilpengurangan;
	}else if(form.hitung.value===""){
		alert('Maaf jangan kosong.');
	}
	e.preventDefault();
}

function cekhasilKali(e){
	if(form.hitung.value){
		let hasilKali=eval(form.hitung.value);
		hasilKali * hasilKali;
		form.hasil.value=hasilKali;
	}else if(form.hitung.value===""){
		alert('Maaf jangan kosong.');
	}
	e.preventDefault();
}

function cekhasilBagi(e){
	if(form.hitung.value){
		let hasilBagi=eval(form.hitung.value);
		hasilBagi / hasilBagi;
		form.hasil.value=hasilBagi;
	}else if(form.hitung.value===""){
		alert('Maaf jangan kosong.');
	}
	e.preventDefault();
}

function resetHasil(e){
	form.hitung.value="";
	form.hasil.value="";
	e.preventDefault();
}
