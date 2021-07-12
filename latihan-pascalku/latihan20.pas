program latihan20;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  var x,y:integer;

begin
//BREAK
for x:=1 to 10 do
begin
  writeln('Hello World ', x);
  if(x=5)then
  break;
  writeln;
end;

//CONTINUE
    for y:=1 to 20 do
    begin
      if(y=5)then
      continue;
         writeln('Hello Galih ', y);
    end ;

  { TODO -oUser -cConsole Main : Insert code here }
  readln;
end.
