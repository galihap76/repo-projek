program latihan33;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  //FUNCTION
  function penambahanAngka(nilai1,nilai2:integer): integer;
  begin
       penambahanAngka:=nilai1 + nilai2;
  end;

  function penguranganAngka(nilai1, nilai2:integer): integer;
  begin
      penguranganAngka:=nilai1 - nilai2;
  end;

  function perkalianAngka(nilai1, nilai2:integer): integer;
  begin
      perkalianAngka:=nilai1 * nilai2;
  end;

  function pembagianAngka(nilai1, nilai2:integer): integer;
  begin
      pembagianAngka:=nilai1 div nilai2;
  end;

  function sisaPembagianangka(nilai1, nilai2:integer): integer;
  begin
      sisaPembagianangka:= nilai1 mod nilai2;
  end;

  //PROCEDURE
  procedure dataSaya(nama,tempatTinggal:string; umur:integer);
  begin
      writeln('Nama saya ', nama);
      writeln('Tinggal di ',tempatTinggal);
      writeln('Umur saya ',umur);
  end;

begin
  { TODO -oUser -cConsole Main : Insert code here }

  //Function

  writeln('=====FUNCTION PASCAL=====');
  writeln;

  //Penambahan pada function pascal
  writeln('=====Penambahan pada function pascal=====');
     writeln(penambahanAngka(10,10));
     writeln(penambahanAngka(50,50));
     writeln(penambahanAngka(20,20));
     writeln;

  //Pengurangan pada function pascal
  writeln('=====Pengurangan pada function pascal=====');
  writeln(penguranganAngka(40,30));
  writeln(penguranganAngka(30,10));
  writeln(penguranganAngka(70,20));
  writeln;

  //Perkalian pada function pascal
  writeln('=====Perkalian pada function pascal=====');
  writeln(perkalianAngka(20,20));
  writeln(perkalianAngka(30,30));
  writeln(perkalianAngka(10,5));
  writeln;

  //Pembagian pada function pascal
  writeln('=====Pembagian pada function pascal=====');
  writeln(pembagianAngka(30,30));
  writeln(pembagianAngka(70,30));
  writeln(pembagianAngka(50,30));
  writeln;

  //Sisa pembagian pada function pascal
  writeln('=====Sisa pembagian function pascal=====');
  writeln(sisaPembagianAngka(70,20));
  writeln(sisaPembagianAngka(100,100));
  writeln(sisaPembagianAngka(40,20));

  //PROCEDURE
  WRITELN;
  writeln('=====PROCEDURE PASCAL=====');
  writeln;
  writeln('=====Data Saya=====');
  dataSaya('galih anggoro prasetya', 'slawi', 17);
  readln;
end.
