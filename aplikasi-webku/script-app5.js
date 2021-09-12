// JavaScript Document
let button = document.getElementById('memulai');
//let hapusPesan = document.querySelectorAll('.hapus-pesan');
let containerFluid = document.querySelector('.container-fluid');
let tempatGame = document.querySelector('.tempat-game');
let munculkanGame = document.querySelectorAll('.munculkanGame');

button.addEventListener('click', function(){
//	hapusPesan.forEach(function(hapus){
//		hapus.classList.add('d-none');
//	});
	
	//persiapan
let persiapan = confirm('Siap?');
	// script game
	
	if(persiapan){
	containerFluid.classList.add('d-none');
	tempatGame.classList.add('d-block');
	
	munculkanGame.forEach(function(tampilkan){
		tampilkan.classList.add('d-block');
	});	
let character = document.getElementById("character");
let block = document.getElementById("block");
let counter=0;
window.addEventListener('click', function(){
	 if(character.classList == "animate"){return;}
    character.classList.add("animate");
    setTimeout(function(){
        character.classList.remove("animate");
    },300);
	
});
let checkDead = setInterval(function() {
    let characterTop = parseInt(window.getComputedStyle(character).getPropertyValue("top"));
    let blockLeft = parseInt(window.getComputedStyle(block).getPropertyValue("left"));
    if(blockLeft<15 && blockLeft>-50 && characterTop>=-59){
        block.style.animation = "none";
        alert("Yahh kena :D skor kamu : "+Math.floor(counter/100));
        counter=0;
        block.style.animation = "block 1s infinite linear";
    }else{
        counter++;
        document.getElementById("scoreSpan").innerHTML = Math.floor(counter/100);
    }
}, 10);
	}else{
		alert('Ok kalo tidak jadi :)');
	}
});
