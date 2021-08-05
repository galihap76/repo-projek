program latihan37;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var
  nama,golongan,nik:string;
  total,jumlah_anak,gaji_pokok,gaji_pokok2,gaji_pokok3,gaji_pokok4,status_nikah, transportasi, komunikasi:integer;

  //Procedure 1
  procedure golonganI(a,b,c:string; d,e,f,g:integer);
  begin

  end;

 //Procedure 2
 procedure golonganII(a,b,c:string; d,e,f,g:integer);
      begin

  end;
 //Procedure 3
 procedure golonganIII(a,b,c:string; d,e,f,g:integer);
     begin

  end;
 //Procedure 4
 procedure golonganIV(a,b,c:string; d,e,f,g:integer);
       begin
           
  end;
begin
  total:=0;
komunikasi:=200000;
gaji_pokok:=2000000;
gaji_pokok2:=3000000;
gaji_pokok3:=4000000;
gaji_pokok4:=5000000;
writeln('=====APLIKASI MENGHITUNG GAJI TOTAL KARYAWAN BERDASARKAN GAJI POKOK, DAN TUNJANGAN=====');
writeln;
write('Masukkan golongan : ');readln(golongan);
if golongan = '1' then
begin
       write('Gaji pokok : ', gaji_pokok);
       writeln;
       write('Nama : ');readln(nama);
       write('Nik : ');readln(nik);
       write('Golongan : ');readln(golongan);
       write('Status nikah : ');readln(status_nikah);
       write('Jumlah anak : ');readln(jumlah_anak);
       write('Transportasi : ');readln(transportasi);
       write('Komunikasi : ', komunikasi);
       writeln;
        total:=total + gaji_pokok  + jumlah_anak + status_nikah + transportasi + komunikasi;
       golonganI(nama,nik,golongan,status_nikah,jumlah_anak,transportasi,komunikasi);
       writeln('Total : ', total);
       end
       else if golongan = '2' then
    begin
       write('Gaji pokok : ', gaji_pokok2);
       writeln;
       write('Nama : ');readln(nama);
       write('Nik : ');readln(nik);
       write('Golongan : ');readln(golongan);
       write('Status nikah : ');readln(status_nikah);
       write('Jumlah anak : ');readln(jumlah_anak);
       write('Transportasi : ');readln(transportasi);
       write('Komunikasi : ', komunikasi);
       writeln;
       total:=total + gaji_pokok2  + jumlah_anak + status_nikah + transportasi + komunikasi;
       golonganII(nama,nik,golongan,status_nikah,jumlah_anak,transportasi,komunikasi);
       writeln('Total : ', total);

   end
   else if golongan = '3' then
   begin
       write('Gaji pokok : ', gaji_pokok3);
       writeln;
       write('Nama : ');readln(nama);
       write('Nik : ');readln(nik);
       write('Golongan : ');readln(golongan);
       write('Status nikah : ');readln(status_nikah);
       write('Jumlah anak : ');readln(jumlah_anak);
       write('Transportasi : ');readln(transportasi);
       write('Komunikasi : ', komunikasi);
       writeln;
       total:=total + gaji_pokok3  + jumlah_anak + status_nikah + transportasi + komunikasi;
       golonganIII(nama,nik,golongan,status_nikah,jumlah_anak,transportasi,komunikasi);
       writeln('Total : ', total);
   end
   else if golongan = '4' then
   begin
      write('Gaji pokok : ', gaji_pokok4);
       writeln;
       write('Nama : ');readln(nama);
       write('Nik : ');readln(nik);
       write('Golongan : ');readln(golongan);
       write('Status nikah : ');readln(status_nikah);
       write('Jumlah anak : ');readln(jumlah_anak);
       write('Transportasi : ');readln(transportasi);
       write('Komunikasi : ', komunikasi);
       writeln;
        total:=total + gaji_pokok4 + jumlah_anak + status_nikah + transportasi + komunikasi;
       golonganIII(nama,nik,golongan,status_nikah,jumlah_anak,transportasi,komunikasi);
       writeln('Total : ', total);
   end
   else
   begin
       writeln('Golongan pada karyawan tidak ada !');
       end;
       readln;
  { TODO -oUser -cConsole Main : Insert code here }
end.
