// JavaScript Document
var s='';

for(var i=0; i<=5; i++){
	for(var j=0; j<i; j++){
		s+='*';
	}
	s+='\n';
}for(var a=0; a<=5; a++){
	s+='*';
  }

{
	s+='\n';
}for(var d=5; d>0; d--){
	for(var e=0; e<d; e++){
		s+='*';
	}
	s+='\n';
}
console.log(s);


