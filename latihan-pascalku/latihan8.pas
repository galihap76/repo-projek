program latihan8;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  var
  umur : integer;
begin
  { TODO -oUser -cConsole Main : Insert code here }
 write('Masukan Umur Anda : ');readln(umur);
 if umur >= 18 then
writeln('Anda Telah Dewasa')
else
writeln('Anda Masih Dibawah Umur');
readln;
end.
