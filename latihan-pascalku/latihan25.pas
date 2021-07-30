program latihan25;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  

function penambahan(nilai1, nilai2 : integer) : integer;
  begin
      penambahan:= nilai1 + nilai2;
  end;

  function pengurangan(nilai1, nilai2 : integer) : integer;
  begin
      pengurangan:= nilai1 - nilai2;
  end;

begin
  { TODO -oUser -cConsole Main : Insert code here }
     writeln(penambahan(10,5));
     writeln(penambahan(20,40));

     writeln(pengurangan(30,50));
  readln;
end.
 