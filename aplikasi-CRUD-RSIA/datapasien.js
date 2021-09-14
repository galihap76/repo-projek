// JavaScript Document
let cariPasien = document.getElementById('cari-pasien');
let table_responsive = document.querySelector('.table-responsive');


cariPasien.addEventListener('keyup', cariDatapasien);

function cariDatapasien(){
	//buat objek ajax
	let xhr = new XMLHttpRequest();
	//cek kesiapan ajax
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			table_responsive.innerHTML = xhr.responseText;
		}
	};
	//eksekusi ajax
	xhr.open('GET', 'ajax/data-pasien-ajax.php?cari-pasien=' + cariPasien.value, true);
	xhr.send();

}