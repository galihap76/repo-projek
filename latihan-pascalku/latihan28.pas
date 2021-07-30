program latihan28;

{$APPTYPE CONSOLE}

uses
  SysUtils;

     var
     barangTersedia:array[0..100] of string;
     hargaBarang:array[0..100] of integer;
     banyakBarang,x:integer;
     username,password,inputan_barang_untuk_user:string;
  begin

  // login
  username:='galih';
  password:='76';
  //barang tersedia
  barangTersedia[0]:='shampo';
  barangTersedia[1]:='sikat gigi';
  barangTersedia[2]:='sabun';
  barangTersedia[3]:='pulpen';
  barangTersedia[4]:='pensil';
  barangTersedia[5]:='masker';
  barangTersedia[6]:='jam tangan';
  barangTersedia[7]:='sepeda anak';
  barangTersedia[8]:='handuk';
  barangTersedia[9]:='kursi';
  barangTersedia[10]:='mifi modem';

  //harga barang
  hargaBarang[0]:=2500;
  hargaBarang[1]:=3000;
  hargaBarang[2]:=2000;
  hargaBarang[3]:=1500;
  hargaBarang[4]:=1500;
  hargaBarang[5]:=4000;
  hargaBarang[6]:=12000;
  hargaBarang[7]:=55000;
  hargaBarang[8]:=10000;
  hargaBarang[9]:=33000;
  hargaBarang[10]:=45000;


  writeln('Anda harus login dahulu!');
  writeln;
  write('Masukkan username anda : ');readln(username);
  writeln;
  write('Masukkan password anda : ');readln(password);
  if (username='galih') and (password='76') then
  begin
  writeln('Anda berhasil login!');
  writeln;
      writeln('=====APLIKASI TOKO BUATANKU DENGAN PEMROGRAMAN PASCAL=====');
   writeln;
   writeln('Barang yang tersedia:');
   writeln(barangTersedia[0] + ' : ' , hargaBarang[0]);
   writeln(barangTersedia[1] + ' : ' , hargaBarang[1]);
   writeln(barangTersedia[2] + ' : ' , hargaBarang[2]);
   writeln(barangTersedia[3] + ' : ' , hargaBarang[3]);
   writeln(barangTersedia[4] + ' : ' , hargaBarang[4]);
   writeln(barangTersedia[5] + ' : ' , hargaBarang[5]);
   writeln(barangTersedia[6] + ' : ' , hargaBarang[6]);
   writeln(barangTersedia[7] + ' : ' , hargaBarang[7]);
   writeln(barangTersedia[8] + ' : ' , hargaBarang[8]);
   writeln(barangTersedia[9] + ' : ' , hargaBarang[9]);
   writeln(barangTersedia[10] + ' : ' , hargaBarang[10]);
   writeln;
   writeln;
   writeln('============================================================');
   writeln;
   write('Berapa banyak barang yang anda mau beli : ');readln(banyakBarang);
   for x:=1 to banyakBarang do
   begin
       write('Barang apa yang anda beli : ');readln(inputan_barang_untuk_user);
       if (inputan_barang_untuk_user=barangTersedia[0]) or (inputan_barang_untuk_user=barangTersedia[1])
       or (inputan_barang_untuk_user=barangTersedia[2]) or (inputan_barang_untuk_user=barangTersedia[2])
       or (inputan_barang_untuk_user=barangTersedia[3])  or (inputan_barang_untuk_user=barangTersedia[4])
       or (inputan_barang_untuk_user=barangTersedia[5]) or (inputan_barang_untuk_user=barangTersedia[6])
       or (inputan_barang_untuk_user=barangTersedia[7]) or (inputan_barang_untuk_user=barangTersedia[8])
       or (inputan_barang_untuk_user=barangTersedia[9]) or (inputan_barang_untuk_user=barangTersedia[10])then
       begin
        if (inputan_barang_untuk_user=barangTersedia[0]) then
        begin
           write('Barang yang anda beli seharga ', hargaBarang[0]);
           writeln;
        end
        else if(inputan_barang_untuk_user=barangTersedia[1]) then
        begin
           write('Barang yang anda beli seharga ', hargaBarang[1]);
           writeln;
        end
        else if(inputan_barang_untuk_user=barangTersedia[2]) then
        begin
           write('Barang yang anda beli seharga ', hargaBarang[2]);
           writeln;
        end
        else if(inputan_barang_untuk_user=barangTersedia[3]) then
        begin
           write('Barang yang anda beli seharga ', hargaBarang[3]);
           writeln;
        end
        else if(inputan_barang_untuk_user=barangTersedia[4]) then
        begin
           write('Barang yang anda beli seharga ', hargaBarang[4]);
           writeln;
        end
        else if(inputan_barang_untuk_user=barangTersedia[5]) then
        begin
           write('Barang yang anda beli seharga ', hargaBarang[5]);
           writeln;
        end
        else if(inputan_barang_untuk_user=barangTersedia[6]) then
        begin
           write('Barang yang anda beli seharga ', hargaBarang[6]);
           writeln;
        end
        else if(inputan_barang_untuk_user=barangTersedia[7]) then
        begin
           write('Barang yang anda beli seharga ', hargaBarang[7]);
           writeln;
        end
        else if(inputan_barang_untuk_user=barangTersedia[8]) then
        begin
           write('Barang yang anda beli seharga ', hargaBarang[8]);
           writeln;
        end
        else if(inputan_barang_untuk_user=barangTersedia[9]) then
        begin
           write('Barang yang anda beli seharga ', hargaBarang[9]);
           writeln;
        end
        else if(inputan_barang_untuk_user=barangTersedia[10]) then
        begin
           write('Barang yang anda beli seharga ', hargaBarang[10]);
           writeln;
        end
       end
        else if (inputan_barang_untuk_user<>barangTersedia[0]) and (inputan_barang_untuk_user<>barangTersedia[1])
       and (inputan_barang_untuk_user<>barangTersedia[2]) and (inputan_barang_untuk_user<>barangTersedia[2])
       and (inputan_barang_untuk_user<>barangTersedia[3])  and (inputan_barang_untuk_user<>barangTersedia[4])
       and (inputan_barang_untuk_user<>barangTersedia[5]) and (inputan_barang_untuk_user<>barangTersedia[6])
       and (inputan_barang_untuk_user<>barangTersedia[7]) and (inputan_barang_untuk_user<>barangTersedia[8])
       and (inputan_barang_untuk_user<>barangTersedia[9]) and (inputan_barang_untuk_user<>barangTersedia[10])then
       begin
          writeln('Oops! barang yang anda beli tidak ada!');
       end
   end;

  end

  else
  writeln('Anda gagal login!');
   {if  barangBeli= barangTersedia[0] then
   begin
      write('Anda membeli ' , barangTersedia[0], ' seharga ', hargaBarang[0]);
   end
   else
       writeln('Barang yang tersedia tidak ada dalam toko!');

readln;
  { TODO -oUser -cConsole Main : Insert code here }
  readln;
end.
