program latihan12;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  var hewan:char;
begin

write('Masukan Huruf (A/B/C) : '); readln(hewan);
case hewan of
'A' : writeln ('Ayam');
'B' : writeln ('Badak');
'C' : writeln ('Cacing');
end;
readln;
end.
