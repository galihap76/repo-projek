// JavaScript Document
	// JavaScript Document
let username = document.getElementsByName('username')[0];
let username_text = document.querySelector('.invalid-username');
let password_text = document.querySelector('.invalid-password');
let password = document.getElementsByName('password')[0];
let form = document.getElementsByTagName('form')[0];

form.addEventListener('submit', cekValidasi);
username.addEventListener('keyup', cekValidasi2);
password.addEventListener('keyup', cekValidasi2);
	

function cekValidasi(e){
	if(form.username.value===""){
		username_text.style.display = "block";
		e.preventDefault();
	}
	if(form.password.value===""){
		password_text.style.display = "block";
		e.preventDefault();
	}
}


function cekValidasi2(){
	if(form.username.value!==""){
	username.style.border = '2px solid green';
	}
	if(form.password.value!==""){
	password.style.border = '2px solid green';
	}
}