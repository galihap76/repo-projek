// JavaScript Document
function validasi(){
	if(form.gajikaryawan.value===""){
		alert('Maaf tidak tervalidasi.');
		return true;
	}
}
const kirim=document.getElementById('kirim');
kirim.addEventListener('click', function(){
	if(form.namakaryawan.value && form.totalgaji.value && form.gajikaryawan.value){
		alert('Gaji sebesar bernama ' + form.namakaryawan.value + ' ' +  form.totalgaji.value);
	}else{
		alert('Isi dulu gaji.');
	}
});
function penentuangaji(){
	validasi();
	if(form.gajikaryawan.value){
		let a=eval(form.gajikaryawan.value);
		let b=eval(form.gajikaryawan.value);
		a=b;
		let c=a*b;
		let d=a/b;
		let e=a-b;
		form.totalgaji.value=b;
	}else{
		alert('dan gagal menjumlahkan.');
	}
}
function reset(){
	form.gajikaryawan.value="";
	form.totalgaji.value="";
}
