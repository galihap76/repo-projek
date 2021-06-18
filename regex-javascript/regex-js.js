// JavaScript Document
// JavaScript Document
let password = document.getElementsByTagName('password')[0];
let username = document.getElementsByTagName('username')[0];
let form = document.getElementsByTagName('form')[0];
let usernameField = document.querySelector("[name=username]");
let passwordField = document.querySelector("[name=password]");
let paragrafUsername = document.getElementsByTagName('p')[0];
let paragrafValidusername = document.getElementsByTagName('p')[1];
let paragrafPassword = document.getElementsByTagName('p')[2];
let paragrafValidpassword = document.getElementsByTagName('p')[3];



usernameField.addEventListener("keyup", cekRegex);
passwordField.addEventListener("keyup", cekRegex);
form.addEventListener('submit', cekValidasi);

function cekRegex(){
    if(!usernameField.validity.valid){
        console.error("username invalid");
        paragrafUsername.style.display = "block";
    } else {
         console.info("username valid");
        paragrafUsername.style.display = "none";
    }
	if(!passwordField.validity.valid){
		console.error("password invalid");
		paragrafPassword.style.display = "block";
	}else{
		console.info("password valid");
		paragrafPassword.style.display = "none";
	}
}


function cekValidasi(e){
	if(form.username.value===""){
		paragrafValidusername.style.display = "block";
		e.preventDefault();
	}
	if(form.password.value===""){
		paragrafValidpassword.style.display = "block";
		e.preventDefault();
	}
	
}




