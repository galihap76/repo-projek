program latihan13;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var
  nomor : integer;
  nama_anda: string;
  umur : integer;

begin
  { TODO -oUser -cConsole Main : Insert code here }
  for nomor := 1 to 10 do writeln('nomor ke :', nomor);
  write('Masukkan nama anda : '); readln(nama_anda);
  if nama_anda = 'galih' then
  begin
   writeln('Anda adalah ', nama_anda , ' saya pascal sangat suka berjumpa dengan anda.');
  end
  else
  begin
    writeln('Anda adalah ', nama_anda , ' anda bukanlah galih!');
  end;
     write('Masukkan umur anda : '); readln(umur);
      case umur of
        17 : write('Anda adalah galih!');
        else
        write('Anda bukanlah galih!');
      end;

  readln;
end.
