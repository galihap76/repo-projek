program latihan31;

{$APPTYPE CONSOLE}

uses
  SysUtils;
    var
    namaobat:string;

begin
//nama obat
writeln;
writeln('=========APLIKASI SEDERHANA KETERSEDIAAN OBAT=========');
writeln;
writeln('Obat yang tersedia: obat batuk, obat pilek, obat sakit perut');
write('Masukkan obat yang anda pilih:');readln(namaobat);
  { TODO -oUser -cConsole Main : Insert code here }
     if namaobat='obat batuk' then
     begin
        writeln('Anda memilih obat batuk');
     end
     else if namaobat='obat pilek' then
     begin
        writeln('Anda memilih obat pilek');
     end
     else if namaobat='obat sakit perut' then
     begin
        writeln('Anda memilih obat sakit perut');
     end
     else
         writeln('Tidak ada obat tersedia');
  readln;
end.
