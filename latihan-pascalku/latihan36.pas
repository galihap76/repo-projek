program latihan36;

{$APPTYPE CONSOLE}

uses
  SysUtils;

  var
   bil1,bil2, hasil: integer;

   //Mendefinisikan prosedur
   procedure HitungPenjumlahan(a,b :integer);
   begin
      hasil:=a+b;
      writeln('Hasil Penjumlahan ',a,'+',b,'=',hasil);
   end;

begin

   write('Masukan bilangan pertama : '); readln(bil1);
   write('Masukan bilangan kedua   : '); readln(bil2);
   //Memanggil prosedur
   HitungPenjumlahan(bil1,bil2);
  { TODO -oUser -cConsole Main : Insert code here }
  readln;
end.
