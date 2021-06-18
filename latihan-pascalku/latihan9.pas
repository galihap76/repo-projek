program latihan9;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  var
  angka : integer;
  nama

begin
  { TODO -oUser -cConsole Main : Insert code here }
  angka := 7;

  if angka > 9 then
  begin
      writeln(angka, ' lebih besar dari 9');
  end
  else if angka > 100 then
  begin
     writeln(angka, ' lebih besar dari 3');
     readln;
  end
  else
  begin
  writeln('data tidak di temukan');
  readln;
  end;


end.
