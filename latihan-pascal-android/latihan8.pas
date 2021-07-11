program latihan8;
uses crt;

var x,y:Integer;
nama:String;

begin

nama:='galih';

writeln('=====Aplikasi Pascal Perulangan=====');
write('Masukkan nama anda untuk akses aplikasi : ');readln(nama);
writeln;

if nama = 'galih' then
begin
writeln('Halo galih selamat datang :)');
writeln;
for x:=1 to 5 do
 writeln('perulangan dalam ke : ', x , ' kalinya');
 for y:=1 to 5 do
 begin
 writeln;
 write('Penjumlahan dalam :');
 writeln(5, 'x', y , '=', y*5);
 end
end
else
begin
 writeln('Maaf anda adalah ' , nama , ' bukan galih,tidak boleh akses! ');
  readln;
  end;
end.
