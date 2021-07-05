program latihan3;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var 
  s,keliling : integer;

begin
  { TODO -oUser -cConsole Main : Insert code here }
 write('Masukan Nilai Sisi : '); readln(s);
 keliling := 4 * s;
 writeln('Keliling Persegi = ',keliling);
readln;
end.
