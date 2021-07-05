program latihan6;
uses crt;

var a,b,x,y:integer;
z:char;
label lagi;
begin
  
  writeln('====Aplikasi Bangun Datar====');
  writeln('1. persegi panjang');
  writeln('2. segitiga');
  writeln('=======================');
  write('Masukkan pilihan anda: ');readln(x);
  
  if x=1 then
  begin
  writeln('Anda memilih persegi panjang');
  writeln('Masukkan nilai panjang : ');
  readln(a);
  write('Masukkan nilai lebar : ');
  readln(b);
  y:=a*b;
  writeln('luas persegi panjang adalah ',y, ' cm2');
  end
  else if x=2 then
  begin
  writeln('Anda memilih segitiga');
  write('Masukkan alas : ');
  readln(a);
  writeln('Masukkan tinggi: ');
  readln(b);
  writeln('Luas segitiga adalah ',a*b/2:0:2, ' cm2');
  end
  else
  begin
  writeln('Anda salah memilih angka');
  end;
  
  writeln('Apakah anda ingin kembali?Y/T?');
  readln(z);
  if (z='y') or (z='Y') then
  goto lagi;
  readln;
end.
