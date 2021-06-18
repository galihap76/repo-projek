program latihan6;

{$APPTYPE CONSOLE}

uses
  SysUtils;
     var
     nilai:integer;
begin
  { TODO -oUser -cConsole Main : Insert code here }
  write('Masukan Nilai UAS : ');readln(nilai);
if nilai < 75 then
begin
writeln('tidak lulus');
writeln('nilai anda kurang dari 75');
end;
readln;
end.
