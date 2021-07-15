program latihan21;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var y,x,i:integer;

begin
  writeln('=====MEMBUAT BINTANG DENGAN PASCAL=====');
  writeln;
  write('masukkan berapa kali bintang : ');readln(x);
  for y:=1 to x do
  begin
     for i:=1 to x-y do
     write('*');
     writeln;
  end;

 begin
  writeln;
  end;

  { TODO -oUser -cConsole Main : Insert code here }
  readln;
end.
