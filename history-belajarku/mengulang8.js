// JavaScript Document
var angka=prompt('Apakah makanan seperti: sate ayam, nasi pecel, nasi goreng, nasi padang merupakan makanan indonesia? selain itu\n apakah makanan seperti: hamburger, kebab, pizza bukan merupakan makanan indonesia? masukkan ketikan anda jika ingin menentukan.' );
 
switch(angka){
	case 'sate ayam':
	case 'nasi pecel':
	case 'nasi goreng':
	case 'nasi padang':
	alert('Ya yang anda masukkan merupakan makanan dari indonesia!');
	break;
	case 'hamburger':
	case 'kebab':
	case 'pizza':
	alert('Yang anda masukkan merupakan bukan makanan dari indonesia!');
	break;
	default:
	alert('Maaf masukkan ketikan yang valid!');
	break;
}




















