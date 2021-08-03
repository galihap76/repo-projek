program latihan32;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  procedure say_hello(nama:string);
  begin
      writeln('Hello', nama);

  end;

  function tes(cek:string):string;
  begin
      writeln(cek);
  end;

begin
say_hello('Galih');
say_hello('Anggoro');
say_hello('Prasetya');
tes('Halo');
tes('Dunia');
readln;
  { TODO -oUser -cConsole Main : Insert code here }
end.
