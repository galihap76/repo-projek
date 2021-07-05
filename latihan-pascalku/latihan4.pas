program latihan4;
uses crt;
var
angka:Integer;
namaSaya:String;
begin
clrscr;
  namaSaya:='galih';
  
  write('Masukkan nama anda sebagai pemrogram untuk akses aplikasi program hitung sederhana: '); readln(namaSaya);
  if namaSaya <> 'galih' then
    begin
  writeLn('Maaf anda bukanlah admin sebagai seorang pemrogram!');   
  end
  else if namaSaya = '' then
  begin
  writeln('Maaf kolom masukkan jangan kosong, anda tidak berhak masuk aplikasi!');
  end
  else
  if namaSaya = 'galih' then
  begin
  writeLn('Halo galih selamat datang di aplikasi anda!');
  writeLn('Silakan tebak berapa angka jumlah di bawah ini?');
  writeln('1+1 ?');readln(angka);
  if angka = 2 then
  begin
  writeln('Selamat jawaban anda benar!');
  end
  else
   writeLn('Maaf jawaban anda salah!');
  end;
  readln;
end.
