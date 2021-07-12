program latihan17;

{$APPTYPE CONSOLE}
{ TODO -oUser -cConsole Main : Insert code here }

uses
  SysUtils;
  var
  panjang,lebar,volume,luas,keliling,tinggi:integer;

begin
writeln('======APLIKASI BANGUN RUANG======');
write('Masukkan panjang : ');readln(panjang);
write('Masukkan lebar : ');readln(lebar);
write('Masukkan tinggi : ');readln(tinggi);
writeln;

luas:=panjang*lebar;
keliling:=2*(panjang+lebar);
volume:=panjang*lebar*tinggi;

writeln('Luas persegi panjang adalah ',luas,' cm2');
writeln('Keliling persegi panjang adalah ',keliling,' cm');
writeln('Volume balok adalah ',volume,' cm3');

  readln;
end.
