program latihan29;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var
  a,b,hasil:boolean;
  username,password:string;

begin
a:=true;
b:=false;
username:='galih';
password:='programming';

hasil:= a or b;
writeln('Hasil yang di keluarkan ', hasil);
writeln;

 writeln('Masukkan username anda : ');readln(username);
     writeln;
     writeln('Masukkan password anda : ');readln(password);
     if (username = 'galih') or (password = 'programming') then
     begin
        writeln('Anda berhasil login!');
     end
     else
         writeln('Anda gagal login!');
     end

{if a and b then
begin
   writeln('Benar');
end
else
     writeln('Salah');
     end;

     writeln('Masukkan username anda : ');readln(username);
     writeln;
     writeln('Masukkan password anda : ');readln(password);
     if (username = 'galih') or (password = 'programming') then
     begin
        writeln('Anda berhasil login!');
     end
     else
         writeln('Anda gagal login!');
     end;

readln;
  { TODO -oUser -cConsole Main : Insert code here }
end.
