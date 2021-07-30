program latihan24;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var nilai:array[0..9] of integer;

begin
  nilai[0]:=17;
  nilai[7]:=9;
  nilai[3]:=55;

  writeln('nilai : ', nilai[0]);
  writeln('nilai : ', nilai[7]);
  writeln('nilai : ', nilai[3]);
  writeln('nilai : ', nilai[8]);
  { TODO -oUser -cConsole Main : Insert code here }
  readln;
end.
