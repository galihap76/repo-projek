program latihan38;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var
  namaKu:string;

  procedure dataKu(namaku, umurku, hobiku, citacitaku:string);
  begin
      writeln('Nama anda ', namaku);
      writeln('Umur anda ', umurku);
      writeln('Hobiku ', hobiku);
      writeln('Cita Citaku ', citacitaku);
  end;

begin
writeln('=====PROGRAM PENGENALAN DIRI ANDA=====');
writeln;
write('Siapa diri anda ini sebenarnya: ' );readln(namaKu);
if (namaku='galih') then
      begin
        writeln('Selamat datang galih!');
        writeln('Akses data anda : ');
        writeln;
        dataKu('Galih Anggoro Prasetya', '17', 'Memrogram', 'Programmer');
      end
      else
      begin
        writeln('Maaf anda bukanlah galih!');
        writeln;
        dataKu('bukanlah galih', '-', '-', '-');
      end;
  { TODO -oUser -cConsole Main : Insert code here }
  readln;
end.
