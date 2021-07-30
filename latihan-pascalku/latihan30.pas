program latihan30;

{$APPTYPE CONSOLE}

uses
  SysUtils;
  var username,password:string;

begin
 write('Masukkan username anda : ');readln(username);
     writeln;
     write('Masukkan password anda : ');readln(password);
     if (username = 'galih') and (password = 'programming') then
     begin
        writeln('Anda berhasil login!');
     end
     else
         writeln('Anda gagal login!');

  { TODO -oUser -cConsole Main : Insert code here }
  readln;
end.
