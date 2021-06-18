program latihan10;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var
  angka : integer;
  nama_saya : string;

begin
  { TODO -oUser -cConsole Main : Insert code here }
  angka := 10;
  nama_saya := 'galih';
  if angka <4 then
  begin
   writeln('Anda mendapatkan nilai A;');
  end
  else if angka <3 then
  begin
     writeln('Anda mendapatkan nilai B');
  end
  else if angka <9 then
  begin
  writeln('Anda mendapatkan nilai C');
  end
  else if angka > 1 then
  begin
  writeln('Anda mendaptkan nilai D');
  end;

  writeln('Masukkan nama anda sesungguhnya'); readln(nama_saya);
  if nama_saya <> 'galih' then
  begin
     writeln('Anda adalah ' , nama_saya , ' namun bukanlah galih!');
  end
  else if nama_saya = 'galih' then
  begin
    writeln('Anda adalah ' , nama_saya , ' halo selamat pagi galih');
  end;
  readln;
end.
