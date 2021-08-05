program latihan34;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  var
  username:string;
  password:integer;

  procedure dataKu(namaKu, tempatKu, negaraKu, hobiKu:string; umurKu:integer);
  begin
      writeln('Nama anda :', namaKu);
      writeln('Umur anda : ', umurKu);
      writeln('Tempat anda : ', tempatKu);
      writeln('Negara anda : ', negaraKu);
      writeln('Hobi anda : ', hobiKu);
  end;


begin
writeln('=====APLIKASI DATA PRIBADI KU DENGAN PASCAL=====');
writeln;
write('Silakan masukkan username anda dulu : ');readln(username);
write('Silakan  masukkan password anda dulu : ');readln(password);
if (username = 'galih') and (password = 76) then
begin
    writeln('Selamat datang galih data anda dalam sistem ini adalah : ');
    writeln;
    dataKu('Galih Anggoro Prasetya', 'Gumayun 02', 'Indonesia', 'Mempelajari dunia pemrograman dan keamanan data', 17);
end
else
writeln('Maaf anda bukanlah galih anda gagal login dalam sistem ini!');

  { TODO -oUser -cConsole Main : Insert code here }


  readln;
end.
