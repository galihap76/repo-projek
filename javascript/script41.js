// JavaScript Document

let html=document.getElementById('html');
let html2=document.getElementsByTagName('input')[1];
let html3=document.getElementsByTagName('input')[2];
let javascript=document.getElementById('javascript');
let javascript2=document.getElementsByTagName('input')[4];
let javascript3=document.getElementsByTagName('input')[5];
let pemrograman=document.getElementById('pemrograman');
let pemrograman2=document.getElementsByTagName('input')[6];
let pemrograman3=document.getElementsByTagName('input')[8];
let dbms=document.getElementById('dbms');
let dbms2=document.getElementsByTagName('input')[10];
let dbms3=document.getElementsByTagName('input')[11];
let dekstop=document.getElementById('dekstop');
let dekstop2=document.getElementsByTagName('input')[12];
let dekstop3=document.getElementsByTagName('input')[14];
let form=document.getElementById('form');
let poinBenarsemua=20 + 20 + 20 + 20 + 20;
let noneContent=document.getElementById('noneContent');
form.addEventListener('submit', checkSkorUntukuser);




function checkSkorUntukuser(c){
	if(html.checked && javascript.checked && pemrograman.checked && dbms.checked && dekstop.checked){
	form.style.display='none';
	noneContent.innerHTML=`<div class="container">
   <div class="row" id="noneContent">
   	<div class="col-md">
   	<center>
   		<div class="card mt-5 border-all w-75" >
    <div class="card-body">
    <h5 class="card-title text-center">Anda mendapatkan nilai ${poinBenarsemua}.</h5>
    <p class="card-text font-weight-bold text-center"> jawaban anda benar semua selamat! </p>
  </div>
</div>
		</center>
   	</div>
   </div>`;
		c.preventDefault();
	} else if( html.checked || html2.checked || html3.checked  || javascript.checked || javascript2.checked || javascript3.checked ||  pemrograman.checked|| pemrograman2.checked|| pemrograman3.checked ||  dbms.checked || dbms2.checked || dbms3.checked ||  dekstop.checked || dekstop2.checked || dekstop3.checked){
		form.style.display='none';
		noneContent.innerHTML= `<div class="container">
   <div class="row" id="noneContent">
   	<div class="col-md">
   	<center>
   		<div class="card mt-5 border-all w-75" >
    <div class="card-body">
    <h5 class="card-title text-center">Nilai anda belum memuaskan ataupun belum 100% harap coba lagi!</h5>
  </div>
</div>
		</center>
   	</div>
   </div>`;
		c.preventDefault();
		
	}
	 if(html.checked==false && html2.checked==false && html3.checked==false && javascript.checked==false &&  javascript2.checked==false && javascript3.checked==false && pemrograman.checked==false &&  pemrograman2.checked==false && pemrograman3.checked==false && dbms.checked==false &&  dbms2.checked==false && dbms3.checked==false && dekstop.checked==false &&  dekstop2.checked==false && dekstop3.checked==false){
		form.style.display='none';
	noneContent.innerHTML=`<div class="container">
   <div class="row" id="noneContent">
   	<div class="col-md">
   	<center>
   		<div class="card mt-5 border-all w-75" >
    <div class="card-body">
    <h5 class="card-title text-center">Oops anda berusaha untuk langsung men-submit harap ulang halaman kembali!</h5>
  </div>
</div>
		</center>
   	</div>
   </div>`;
		c.preventDefault();
	}
}
 