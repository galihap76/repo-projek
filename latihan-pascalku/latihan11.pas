program latihan11;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var
  angka, umur_saya : integer;
  citacita_saya, nama_saya: string;

begin
  { TODO -oUser -cConsole Main : Insert code here }
  angka := 10;

  //bagian angka
  if angka > 50 then
  begin
    writeln('Anda mendapatkan nilai A');
  end
  else if angka > 11 then
  begin
    writeln('Anda mendapatkan nilai B');
  end
  else if angka > 30 then
  begin
   writeln('Anda mendapatkan nilai C');
  end
  else
  begin
    writeln('Nilai anda tidak memuaskan');
  end;

  //bagian nama
  writeln('Masukkan nama anda sebenernya'); readln(nama_saya);
  if nama_saya <> 'galih anggoro prasetya' then
  begin
    writeln('Anda adalah ', nama_saya , ' anda bukanlah galih');
  end
  else if nama_saya = 'galih anggoro prasetya' then
  begin
    writeln('Anda adalah ', nama_saya , ' halo selamat siang galih');
  end;

  //bagian umur

  writeln('Masukkan umur anda sebenarnya'); readln(umur_saya);
  if umur_saya = 17 then
  begin
     writeln('Saya pascal, anda masih sangat muda yang memiliki ketertarikan dunia programming');
  end
  else
  begin
    writeln('Saya pascal , saya tidak begitu yakin dengan umur anda');
  end;

  //bagian cita cita
  writeln('Masukkan cita cita anda sebenarnya'); readln(citacita_saya);
  if citacita_saya = 'programmer' then
      begin
        writeln('Anda memiliki cita cita yang sangat di cintai yaitu ', citacita_saya);
      end
      else if citacita_saya <> 'programmer' then
      begin
        writeln('Saya pascal, sepertinya cita cita anda bukanlah cita cita yang tepat!');
      end;
  readln;
end.

//terselesaikan
