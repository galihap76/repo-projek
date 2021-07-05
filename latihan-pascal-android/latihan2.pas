program program2;
uses crt;
var
namaSaya:string;
begin
namaSaya:='galih';

write('Masukkan nama anda ');ReadLn(namaSaya);
if namaSaya='galih' then
  write('Nama anda adalah ' + namaSaya)
  else
  write('Maaf nama anda bukanlah galih!');
  readln;
end.
