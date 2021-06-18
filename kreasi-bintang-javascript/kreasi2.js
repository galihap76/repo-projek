// JavaScript Document
//sebagai alat looping
let s='';

//piramida
for(let i = 0; i<1; i++){
//	cara utama
	s+='      *';
	s+=' \n';
{
		s+='    ';
	}
	for(let k = 0; k<1; k++){		
		s+=' * *';
	{
			s+=' \n';
		    s+='   ';
		}
		for(let v = 0; v<3; v++){
			s+=' ';
			s+='*';
		}
	{
			s+='\n';
		    s+='  ';
		}
		for(let x = 0; x<4; x++){
			s+=' *';
		}
	{
			s+='\n';
			s+=' ';
		}
		for(let z = 0; z<5; z++){
			s+=' *';
		}
	{
			s+='\n';
		}
		for(let q = 0; q<6; q++){
			s+=' *';
		}
		
}
	
	
	
	
	
	
	//cara lain 1
//	console.log(" ");
//	console.log("    " +" *");
//	console.log("    " + "*" + "" +" *");
//	console.log("   " + "* * *");
//	console.log("  " + "* * * *");
//	console.log(" "+ "* * * * *");
//	console.log("* * * * * *");
	
	//cara lain	2
//	s+='     *';
//	s+=' \n';
//	s+='    * *';
//	s+=' \n';
//	s+='   * * *';
//	s+=' \n';
//	s+='  * * * *';
//	s+=' \n';
//	s+=' * * * * *';
//	s+=' \n';
//	s+='* * * * * *';
}
//baris baru
for(let baris = 0; baris<1; baris++){
s+='\n';
s+='\n';
}


//garis bawah
for(let j = 0; j<1; j++){
s+='*';
s+='\n';
	for(let a = 0; a<2; a++){
		s+='*';
	}
{
		s+='\n';
	}
	for( let y = 0; y<3; y++){
		s+='*';
	}
{ 
	s+='\n';
		
	}
	for(let m = 0; m<4; m++){
		s+='*';
	}
{
		s+='\n';
	}
	for(let f = 0; f<5; f++){
		s+='*';
	}
	
}

//baris baru
for(let baris2 = 0; baris2<1; baris2++){
s+='\n';
s+='\n';
}

//garis atas
for(let r = 1; r>0; r--){
	s+='   *****';
{
		s+='\n';
	}
	for(let c = 1; c>0; c--){
		s+='    ****';
	}
{
		s+='\n';
	}
	for(let h = 1; h>0; h--){
		s+='     ***';
	}
{
		s+='\n';
	}
	for(let o = 1; o>0; o--){
		s+='      **';
	}
{
		s+='\n';
	}
	for(let p = 1; p>0; p--){
		s+='       *';
	}
}


console.log(s);



