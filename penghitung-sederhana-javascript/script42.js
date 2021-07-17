//javascript document
let angka1 = document.getElementById('angka1');
let angka2 = document.getElementById('angka2');
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
function btnTambah(){
	tambah = parseInt(angka1.value) + parseInt(angka2.value);
	form.hasil.value = tambah;
}
function btnKurang(){
	kurang = parseInt(angka1.value) - parseInt(angka2.value);
	form.hasil.value = kurang;
}
function btnKali(){
	kali = parseInt(angka1.value) * parseInt(angka2.value);
	form.hasil.value = kali;
}
function btnBagi(){
	bagi = parseInt(angka1.value) / parseInt(angka2.value);
	form.hasil.value = bagi;
}
function btnReset(){
	form.hasil.value = "";
	form.angka1.value = "";
	form.angka2.value = "";
}

