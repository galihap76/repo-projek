program latihan2;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  var
  nama_saya :string;
  umur_saya : integer;
  citacita_saya: string;

begin
   write('Cek nama anda :'); readln(nama_saya);
   write('Cek umur anda :'); readln(umur_saya);
   write('Beritahu cita cita anda :'); readln(citacita_saya);
   writeln('Nama anda adalah ', nama_saya, ' umur anda ', umur_saya,' cita cita anda seorang ',citacita_saya);
   readln;

end.
