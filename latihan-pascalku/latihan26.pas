program latihan26;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var
  a:array[1..20] of integer;
  x,y,jumlah:integer;
  rata_rata:real;

begin
writeln('=====APLIKASI MENGHITUNG RATA RATA DENGAN ARRAY PASCAL=====');
writeln;
    write('Masukkan berapa banyak data : ');readln(x);
    writeln;
    jumlah:=0;
   for y:=1 to x do
 begin
    write('Masukan nilai ke - ' , y , ':');readln(a[y]);
      jumlah:=jumlah + a[y];
end;

 rata_rata:=jumlah/x;
  writeln ('jumlah :',jumlah);
  writeln ('rata-rata:',rata_rata:0:2);
  { TODO -oUser -cConsole Main : Insert code here }


  readln;
end.
