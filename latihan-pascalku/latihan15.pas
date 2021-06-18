program latihan15;

{$APPTYPE CONSOLE}
uses
  SysUtils;

var
grade:char;
begin
writeln('Masukkan grade anda : '); readln(grade);
case(grade) of
'A':write('Sangat bagus ');
'B':writeln('Bagus');
'C':writeln('Cukup');
'D':writeln('Buruk');
'E':writeln('Sangat buruk');
end;

writeln('nilai grade anda adalah = ' , grade);

readln;
  { TODO -oUser -cConsole Main : Insert code here }
end.
