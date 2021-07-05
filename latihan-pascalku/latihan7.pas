program pemilu;

uses wincrt;

var nama:string;


    hakpilih:boolean;

    wn,status:0..1;

    ulangi:char;

label lagi,lagi1,lagi2;


begin

lagi:

clrscr; {clearscreen untuk membersihkan layar}

     writeln('   +------------------------------+');

     writeln('   |   Program Hak Pilih PEMILU   |');

     writeln('   +------------------------------+');

     write('Siapa nama anda? ');readln(nama);

     write('Berapa umur anda? ');readln(umur);

     lagi1:

           write('Apakah anda WNI? 1.YA 0.TIDAK: ');readln(wn);

           if (wn<>0) and (wn<>1) then

              begin

              writeln('Masukkan salah, Ulangi lagi!');

              goto lagi1;

              end

           else

               if wn=0 then hakpilih:=false

     else

     begin

     lagi2:

           if umur<17 then

              begin

              write('Apakah anda sudah menikah? 1.YA 0.TIDAK: ');readln(status);

              if (status<>0) and (status<>1) then

                 begin

                 writeln('Masukkan salah, Ulangi lagi!');

                 goto lagi2;

                 end

           else

               if status=0 then hakpilih:=false;

      end

      else

      begin

           if umur>=17 then hakpilih:=true;

      end;

      end;

      writeln;

      if hakpilih then

      writeln('Saudara ',nama,' mempunyai hak pilih')

      else

      writeln('Saudara ',nama,' tidak mempunyai hak pilih');

      writeln;

      write('Apakah anda ingin coba lagi? (y/t): ');readln(ulangi);

      if (ulangi='y') or (ulangi='Y') then goto lagi;

      writeln;

      writeln('Terima Kasih');

Writeln;

      writeln('   +------------------------------+');

      writeln('   | http://hobi-it.blogspot.com  |');

      writeln('   +------------------------------+');

end.


