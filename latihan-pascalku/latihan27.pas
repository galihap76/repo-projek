program latihan27;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var i,x:integer;

begin
write('Masukkan berapa kali anda ulang : ');readln(i);
writeln;

for x:=1 to i do
begin
  writeln('Anda mengulang sebanyak ', x);
end;
writeln;
  { TODO -oUser -cConsole Main : Insert code here }

  readln;
end.
