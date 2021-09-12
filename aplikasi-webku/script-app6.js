// JavaScript Document
let jawaban = document.querySelectorAll('input[name="jawaban"]');
let info_jawaban = document.querySelectorAll('.info-jawaban');
let selainPilihanbenar = document.querySelectorAll('input[name="selainPilihanbenar"]');
let card_body = document.querySelectorAll('.card-body');
let cekKeberhasilan = document.querySelector('.btn-warning');
let btn_loading = document.querySelector('.btn_loading');
let info_benar = document.querySelector('.info-benar');
let info_salah = document.querySelector('.info-salah');
let btn_validasi = document.querySelector('.btn_validasi');
let btn_cobalagi = document.querySelector('.btn_cobalagi');
btn_cobalagi.addEventListener('click', refreshHalaman);
cekKeberhasilan.addEventListener('click', checkJawabanUntukuser);

//fungsi tombol refresh halaman
function refreshHalaman(){
	//refresh halaman
	window.location.reload();
}

//cek jawaban untuk user
function checkJawabanUntukuser(e){
	//hapus tombol cek berhasilan
	cekKeberhasilan.classList.add('d-none');
	//tampilkan tombol loading
	btn_loading.classList.add('d-block');
	//menunggu 3 detik
	setTimeout(function(){
	//tarik kembali jendela browser
	window.scrollTo(0,0);
	//cek jawaban ketika ada jawaban yang di pilih salah 
	selainPilihanbenar.forEach(function(jawabanSoalketikaSalah){
	//jika jawaban ada yang salah tampilkan info kesalahan
	if(jawabanSoalketikaSalah.checked){
	//berikan info dan pengertian jawaban pada user
	info_jawaban.forEach(function(tampilkanInfo){
	tampilkanInfo.classList.add('d-block');
	});
	//berikan info kesalahan kepada user
	info_salah.classList.add('d-block');
		}
});
		
	//cek jawaban ketika benar
	jawaban.forEach(function(jawabanSoal){
	//jika jawaban benar semua tampilkan info
	if(jawabanSoal.checked){
	//berikan info dan pengertian jawaban pada user
	info_jawaban.forEach(function(tampilkanInfo){
	tampilkanInfo.classList.add('d-block');
	});
	//berikan info benar kepada user
	info_benar.classList.add('d-block');
	//jika selain ada jawaban yang salah
	 }else if(jawabanSoal.checked || jawabanSoal.checked == false){
	 //hapus info benar kepada user dan berikan kesalahan jawaban salah
	info_benar.classList.remove('d-block');
	  }	
	 });
	//hilangkan tombol loading
	btn_loading.classList.remove('d-block');
	}, 3000);
}
 