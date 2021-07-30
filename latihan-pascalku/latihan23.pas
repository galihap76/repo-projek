program latihan23;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var x,y,j,k,l,o,q,m,w,n,e,xx,yy,tt:integer;

begin
writeln('=====MEMBUAT PERULANGAN DENGAN PASCAL MENGGUNAKAN BINTANG=====');
WRITELN;
writeln('  PIRAMIDA');
writeln;

//PIRAMIDA
 for x:=1 to 1 do
 begin
   writeln('    *');
   begin
     write('   ');
   end;
  for y:=1 to 2 do
  begin
    write('* ');
  end;
  begin
    writeln;
  end;
  begin
    write('  ');
  end;
  for j:=1 to 3 do
  begin
     write('* ');
  end;
  begin
    writeln;
  end;
  begin
     write(' ');
  end;
  for k:=1 to 4 do
  begin
    write('* ');
  end;
  begin
     writeln;
  end;
  for l:=1 to 5 do
  begin
     write('* ');
  end;
 end;

 writeln;writeln;writeln;writeln;

 writeln('  BERLIAN');
writeln;

 //BERLIAN
 for o:=1 to 1 do
 begin
   writeln('    *');
   begin
     write('   ');
   end;
  for m:=1 to 2 do
  begin
    write('* ');
  end;
  begin
    writeln;
  end;
  begin
    write('  ');
  end;
  for w:=1 to 3 do
  begin
     write('* ');
  end;
  begin
    writeln;
  end;
  begin
     write(' ');
  end;
  for q:=1 to 4 do
  begin
    write('* ');
  end;
  begin
     writeln;
  end;
  for n:=1 to 5 do
  begin
     write('* ');
  end;
  begin
   writeln;
  end;
  begin
    write(' ');
  end;
  for e:=4 downto 1 do
  begin
      write('* ');
  end;
  begin
    writeln;
  end;
  begin
     write('  ');
  end;
  for xx:=3 downto 1 do
  begin
     write('* ');
  end;
  begin
      writeln;
  end;
  begin
      write('   ');
  end;
  for yy:=2 downto 1 do
  begin
      write('* ');
  end;
  begin
      writeln;
  end;
  for tt:=1 downto 1 do
  begin
      writeln('    *');
  end;
 end;



  { TODO -oUser -cConsole Main : Insert code here }
  readln;
end.
