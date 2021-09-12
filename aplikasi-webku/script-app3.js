// JavaScript Document
// JavaScript Document
let btn_kucing = document.querySelector('.btn-kucing');
let btn_anjing = document.querySelector('.btn-anjing');
let bg_kucing = document.querySelector('.bg-kucing');
let bg_anjing = document.querySelector('.bg-anjing');

btn_kucing.addEventListener('click', gambarKucing);
btn_anjing.addEventListener('click', gambarAnjing);

function gambarKucing(){
fetch('https://aws.random.cat/meow')
.then(res=> res.json())
.then(call =>{
	bg_kucing.innerHTML = `<img src=${call.file} alt="kucing" style="width:100%; height:350px;"/>`; 
});	
}

function gambarAnjing(){
	fetch('https://random.dog/woof.json')
	.then(res=> res.json())
	.then(call=>{
		if(call.url.includes('.mp4')){
			gambarAnjing();
		}else{
				bg_anjing.innerHTML = `<img src=${call.url} alt="anjing"  style="width:100%; height:350px;"/>`;
		}
	});
}

