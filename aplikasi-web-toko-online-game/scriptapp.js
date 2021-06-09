// JavaScript Document
let container=document.querySelector('.container-barang');
let hilangkankalimat=document.querySelector('.hilangkankalimat');
let cekcontainerSelengkapnya=document.querySelector('.cekcontainerSelengkapnya');
let GOW3=document.querySelector('.GOW3');
let GTAV=document.querySelector('.GTAV');
let BF4=document.querySelector('.BF4');
let UC=document.querySelector('.UC');
let HOMEFRONT=document.querySelector('.HOMEFRONT');
let ISHIN=document.querySelector('.ISHIN');
GOW3.addEventListener('click', cekBtn1);
GTAV.addEventListener('click', cekBtn2);
BF4.addEventListener('click', cekBtn3);
UC.addEventListener('click', cekBtn4);
HOMEFRONT.addEventListener('click', cekBtn5);
ISHIN.addEventListener('click', cekBtn6);

function cekBtn1(){
	//Gow3
	container.style.display='none';
	hilangkankalimat.style.display='none';
	cekcontainerSelengkapnya.innerHTML=`<div class="card mb-5 w-75">
  <div class="row">
    <div class="col-md">
      <img src="images/gow3.jpg" class="w-100 h-100"   alt="...">
    </div>
    <div class="col-md">
      <div class="card-body">
      <center><h3 class="card-title pl-3">Informasi Barang</h3></center>
        <h5 class="card-title pl-3">God Of War 3</h5>
        <p class="card-text pl-3">Harga: Rp120.000</p>
        <p class="card-text pl-3">Kondisi : Bekas</p>
        <p class="card-text pl-3">Region: Asia</p>
        <p class="card-text pl-3">Info BD : Mulus, Lengkap Dengan Buku Panduan.</p>
           <p class="card-text pl-3">Informasi Stok : 1</p>
         <hr>
          <h5 class="card-title pl-3">Dekskripsi</h5>
           	 <p class="card-text pl-3">God of War III adalah sebuah permainan video aksi-petualangan dan hack and slash yang dikembangkan oleh Santa Monica Studio dan diterbitkan oleh Sony Computer Entertainment pada tahun 2010. Permainan ini merupakan judul kelima dalam seri God of War dan dirilis untuk konsol PlayStation 3.</p>
          <br>
           <br> 
          <center>
         <button type="button" class="btn btn-dark ml-3"><a href="aplikasi-toko-online-game.html">Kembali</a></button>
        <button type="button" class="btn btn-success ml-3">Beli & Chat Admin </button>
        </center>
      </div>
    </div>
  </div>
</div>`;
	cekcontainerSelengkapnya.style.transition='2s';
	cekcontainerSelengkapnya.style.transform='translateY(-20px)';

	}

function cekBtn2(){
	//Grand Theft Auto V
	container.style.display='none';
	hilangkankalimat.style.display='none';
	cekcontainerSelengkapnya.innerHTML=`<div class="card mb-5 w-75">
  <div class="row">
    <div class="col-md">
      <img src="images/gtav.jpg" class="w-100 h-100" alt="...">
    </div>
    <div class="col-md">
      <div class="card-body">
         <center><h3 class="card-title pl-3">Informasi Barang</h3></center>
        <h5 class="card-title pl-3">Grand Theft Auto 5</h5>
        <p class="card-text pl-3">Harga : Rp100.000</p>
        <p class="card-text pl-3">Kondisi : Bekas</p>
        <p class="card-text pl-3">Region : Asia</p>
        <p class="card-text pl-3">Info BD : Mulus, Tidak Lengkap , DlC Sudah Terpakai, Tidak Ada Buku Map.</p>
        <p class="card-text pl-3">Informasi Stok : 1</p>
         <hr>
             <h5 class="card-title pl-3">Dekskripsi</h5>
           	 <p class="card-text pl-3">Grand Theft Auto V adalah permainan aksi-petualangan 2013 yang dikembangkan oleh Rockstar North dan diterbitkan oleh Rockstar Games. Ini adalah entri utama pertama dalam seri Grand Theft Auto sejak 2008 Grand Theft Auto IV.</p>
          <br>
           <br>
          <center>
         <button type="button" class="btn btn-dark ml-3"><a href="aplikasi-toko-online-game.html">Kembali</a></button>
        <button type="button" class="btn btn-success ml-3">Beli & Chat Admin </button>
        </center>
      </div>
    </div>
  </div>
</div>`;
	cekcontainerSelengkapnya.style.transition='2s';
	cekcontainerSelengkapnya.style.transform='translateY(-20px)';

	}

function cekBtn3(){
	//Battlefield 4
	container.style.display='none';
	hilangkankalimat.style.display='none';
	cekcontainerSelengkapnya.innerHTML=`<div class="card mb-5 w-75">
  <div class="row">
    <div class="col-md">
      <img src="images/battlefield4.jpg" class="w-100 h-100"  alt="...">
    </div>
    <div class="col-md">
      <div class="card-body">
		<center><h3 class="card-title pl-3">Informasi Barang</h3></center>
        <h5 class="card-title pl-3">Battlefield 4</h5>
        <p class="card-text pl-3">Harga: Rp50.000</p>
        <p class="card-text pl-3">Kondisi : Bekas</p>
        <p class="card-text pl-3">Region : Asia</p>
        <p class="card-text pl-3">Info BD : Mulus, Tidak Lengkap , DlC Sudah Terpakai, Tidak Ada Buku Map Dan Panduan.</p>
		 <p class="card-text pl-3">Informasi Stok : 1</p>
			 <hr>
             <h5 class="card-title pl-3">Dekskripsi</h5>
           	 <p class="card-text pl-3">Battlefield 4 adalah permainan video tembak-menembak orang-pertama yang dikembangkan oleh EA Digital Illusions CE dan diterbitkan oleh Electronic Arts. Ini adalah sekuel dari Battlefield 3.</p>
          <br>
           <br>
          <center>
         <button type="button" class="btn btn-dark ml-3 mb-3"><a href="aplikasi-toko-online-game.html">Kembali</a></button>
        <button type="button" class="btn btn-success ml-3 mb-3">Beli & Chat Admin </button>
		</center>
      </div>
    </div>
  </div>
</div>`;
	cekcontainerSelengkapnya.style.transition='2s';
	cekcontainerSelengkapnya.style.transform='translateY(-20px)';

	}

function cekBtn4(){
	//Uncharted
	container.style.display='none';
	hilangkankalimat.style.display='none';
	cekcontainerSelengkapnya.innerHTML=`<div class="card mb-3 w-75">
  <div class="row">
    <div class="col-md">
      <img src="images/uncharted.jpg" class="w-100 h-100"  alt="...">
    </div>
    <div class="col-md">
      <div class="card-body">
		<center><h3 class="card-title pl-3">Informasi Barang</h3></center>
        <h5 class="card-title pl-3">Uncharted Drake Fortuned</h5>
        <p class="card-text pl-3">Harga : Rp110.000</p>
        <p class="card-text pl-3">Kondisi : Bekas</p>
        <p class="card-text pl-3">Region : Asia</p>
        <p class="card-text pl-3">Info BD : Mulus, Lengkap , DlC Tidak Ada, Ada Buku Map Dan Panduan.</p>
		 <p class="card-text pl-3">Informasi Stok : 1</p>
			 <hr>
             <h5 class="card-title pl-3">Dekskripsi</h5>
           	 <p class="card-text pl-3">Uncharted: Drake Fortune adalah video game yang dikembangkan oleh Naughty Dog, dan diterbitkan oleh Sony Computer Entertainment untuk PlayStation 3. Ini adalah game pertama dari seri Uncharted.</p>
          <br>
           <br>
          <center>
         <button type="button" class="btn btn-dark ml-3 mb-3"><a href="aplikasi-toko-online-game.html">Kembali</a></button>
        <button type="button" class="btn btn-success ml-3 mb-3">Beli & Chat Admin </button>
		</center>
      </div>
    </div>
  </div>
</div>`;
	cekcontainerSelengkapnya.style.transition='2s';
	cekcontainerSelengkapnya.style.transform='translateY(-20px)';

	}

function cekBtn5(){
	//Homefront
	container.style.display='none';
	hilangkankalimat.style.display='none';
	cekcontainerSelengkapnya.innerHTML=`<div class="card mb-3 w-75">
  <div class="row no">
    <div class="col-md">
      <img src="images/homefront.jpg" class="w-100 h-100"  alt="...">
    </div>
    <div class="col-md">
      <div class="card-body">
		<center><h3 class="card-title pl-3">Informasi Barang</h3></center>
        <h5 class="card-title pl-3">Homefront</h5>
        <p class="card-text pl-3">Harga : Rp70.000</p>
        <p class="card-text pl-3">Kondisi : Bekas</p>
        <p class="card-text pl-3">Region : Asia</p>
        <p class="card-text pl-3">Info BD : Mulus, Lengkap , Tidak Ada DLC, Ada Buku Map Dan Panduan.</p>
         <p class="card-text pl-3">Informasi Stok : 1</p>
			 <hr>
             <h5 class="card-title pl-3">Dekskripsi</h5>
           	 <p class="card-text pl-3">Homefront adalah permainan tembak-menembak orang pertama yang diproduksi oleh Kaos Studio dan di distribusikan oleh THQ.</p>
          <br>
           <br>
          <center>
         <button type="button" class="btn btn-dark ml-3 mb-3"><a href="aplikasi-toko-online-game.html">Kembali</a></button>
        <button type="button" class="btn btn-success ml-3 mb-3">Beli & Chat Admin </button>
		</center>
      </div>
    </div>
  </div>
</div>`;
	cekcontainerSelengkapnya.style.transition='2s';
	cekcontainerSelengkapnya.style.transform='translateY(-20px)';

	}

function cekBtn6(){
	//Battlefield 4
	container.style.display='none';
	hilangkankalimat.style.display='none';
	cekcontainerSelengkapnya.innerHTML=`<div class="card mb-3 w-75">
  <div class="row">
    <div class="col-md">
      <img src="images/yakuza.jpg" class="w-100 h-100"  alt="...">
    </div>
    <div class="col-md">
      <div class="card-body">
        <center><h3 class="card-title pl-3">Informasi Barang</h3></center>
        <h5 class="card-text pl-3">Yakuza Ishin Restoration</h5>
        <p class="card-text pl-3">Kondisi : Bekas</p>
        <p class="card-text pl-3">Region : Asia</p>
        <p class="card-text pl-3">Info BD : Mulus, Lengkap , Tidak Ada DLC, Ada Buku Map Dan Panduan.</p>
        <p class="card-text pl-3">Informasi Stok : 1</p>
			 <hr>
             <h5 class="card-title pl-3">Dekskripsi</h5>
           	 <p class="card-text pl-3">Ryū ga Gotoku Ishin! ( Jepang :龍 が 如 く 維新! , Menyala. " Likea Dragon: Restoration!") Adalah game spin-off dalam seri video game Ryū ga Gotoku , yang dikenal dalam bahasa Inggris sebagai Yakuza . Video game ini dikembangkan dan diterbitkan oleh Sega untuk PlayStation 3 dan merupakan judul peluncuran untuk PlayStation 4 .</p>
          <br>
           <br>
          <center>
         <button type="button" class="btn btn-dark ml-3 mb-3"><a href="aplikasi-toko-online-game.html">Kembali</a></button>
        <button type="button" class="btn btn-success ml-3 mb-3">Beli & Chat Admin </button>
		</center>
      </div>
    </div>
  </div>
</div>`;
	cekcontainerSelengkapnya.style.transition='2s';
	cekcontainerSelengkapnya.style.transform='translateY(-20px)';

	}



