program latihan5;
Uses Crt;

begin
  

Label

Atas;

Var

Nil1, Nil2 : Integer;

NilRata    : Real;

Lagi       : Char;

Begin

Atas:

ClrScr;

WriteLn('Program Hitung Nilai');

WriteLn('--------------------');

WriteLn;

Write('Masukan Nilai 1 : ');

ReadLn(Nil1);

Write('Masukan Nilai 2 : ');

ReadLn(Nil2);

NilRata := (Nil1 + Nil2)/2;

WriteLn('Nilai Rata - Rata : ',NilRata:5:2);

WriteLn;

Write('Ingin Hitung Lagi[Y/T] : ');

ReadLn(Lagi);

If (Lagi='Y') Then

GoTo Atas;

End.


end.
