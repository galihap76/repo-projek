program latihan22;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  var x,i,j,bil:integer;

begin
write('masukkan tinggi piramida: ');readln(bil);
for x:=1 to bil do
begin
for i:=bil downto x do
begin
  write(' ');
end;

for j:=1 to x+x-1 do
begin
 write('*');
end;
writeln;
end;
  { TODO -oUser -cConsole Main : Insert code here }
  readln;
end.
