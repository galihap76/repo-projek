program latihan14;
//aplikasi sederhana program hitung

{$APPTYPE CONSOLE}
uses
  SysUtils;

var
passwordSaya:string;
angka:integer;

begin
passwordSaya:='galihap76';

writeln('HALO GALIH SELAMAT DATANG DI APLIKASI PROGRAM HITUNG SEDERHANA.');
write('Masukkan password anda dulu jika anda ingin akses aplikasi tersebut : '); readln(passwordSaya);
if passwordSaya <> 'galihap76' then
 begin
  writeln('Maaf password anda salah anda tidak bisa masuk akses aplikasi!');
 end
 else if passwordSaya = 'galihap76' then
 begin
   writeln('Halo galih selamat akses aplikasi program hitung sederhana!');
   writeln('Berapa 10 + 10 ? '); readln(angka);
   if angka = 20 then
   begin
      writeln('Selamat anda benar!');
      writeln('Soal berikut nya 50 + 50 berapa? '); readln(angka);
      if angka = 100 then
      begin
      writeln('Selamat anda benar lagi!');
      end
      else
        writeln('Maaf jawaban anda salah!');
   end
   else
   writeln('Maaf jawaban anda salah!');
   end;

  { TODO -oUser -cConsole Main : Insert code here }
  readln;
end.
