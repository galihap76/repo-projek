// JavaScript Document
for(var i=0; i<5; i++){
	var s='';
	for(var j=5; j>i; j--){
		s+=' ';
	}
	for(var k=0; k<=i; k++){
		s+='*';
	}
    for(var t=1; t<=i; t++){
		s+='*';
	}
	console.log(s);
}

for(var i=5; i>=0; i--){
	var s='';
	for(var j=5; j>i; j--){
		s+=' ';
	}
	for(var k=0; k<=i; k++){
		s+='*';
	}
	for(var t=1; t<=i; t++){
		s+='*';
	}
	console.log(s);
}






