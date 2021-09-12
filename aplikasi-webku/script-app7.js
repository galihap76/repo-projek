 //JavaScript Document
let nilai1 = document.getElementById('nilai1');
let nilai2 = document.getElementById('nilai2');
let hasil = document.getElementById('hasil');
let tambah = document.getElementsByName('tambah')[0];
let kurang = document.getElementsByName('kurang')[0];
let kali = document.getElementsByName('kali')[0];
let bagi = document.getElementsByName('bagi')[0];
let reset = document.getElementsByName('reset')[0];
let form = document.getElementsByTagName('form')[0];

tambah.addEventListener('click', btnTambah);
kurang.addEventListener('click', btnKurang);
kali.addEventListener('click', btnKali);
bagi.addEventListener('click', btnBagi);
reset.addEventListener('click', btnReset);

//fungsi pada tambah
function btnTambah(){
	tambah = parseInt(nilai1.value) + parseInt(nilai2.value);
	form.hasil.value = tambah;
}

//fungsi pada kurang
function btnKurang(){
	kurang = parseInt(nilai1.value) - parseInt(nilai2.value);
	form.hasil.value = kurang;
}

//fungsi pada kali
function btnKali(){
	kali = parseInt(nilai1.value) * parseInt(nilai2.value);
	form.hasil.value = kali;
}

//fungsi pada bagi
function btnBagi(){
	bagi = parseInt(nilai1.value) / parseInt(nilai2.value);
	form.hasil.value = bagi;
}

//fungsi pada reset
function btnReset(){
	form.hasil.value = "";
	form.nilai1.value = "";
	form.nilai2.value = "";
}

