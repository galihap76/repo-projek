program latihan10;
uses crt;
var i,j,n,t,r,x,bil:integer;
begin
write('masukkan berapa kali bintang: ');readln(n);
for i:= 1 to n do
begin
for j:=1 to n-i do 
write('*');
writeln;
end;

begin
writeln
end;

write('masukkan tinggi piramida: ');readln(bil);
for t:=1 to bil do
begin
for r:=bil downto t do
begin
write(' ');
end;
for x:=1 to t+t-1 do
begin
write('*');
end;
writeln;
  end;
  readln;
end.
