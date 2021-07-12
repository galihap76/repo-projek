program latihan16;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  var
  a,b:integer;

begin
  { TODO -oUser -cConsole Main : Insert code here }
  writeln('======APLIKASI PROGRAM HITUNG SEDERHANA======');
  writeln;
  write('Masukkan nilai a : ');readln(a);
  write('Masukkan nilai b : ');readln(b);
  writeln;

  writeln('Hasil penjumlahan a + b = ', a+b);
  writeln('Hasil pengurangan a - b = ', a-b);
  writeln('Hasil perkalian a * b = ', a*b);
  writeln('Hasil pembagian a / b = ', a/b:0:1);
  readln;
end.
