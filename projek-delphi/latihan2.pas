unit latihan2;

interface

uses
  Windows, Messages, SysUtils, Variants, Classes, Graphics, Controls, Forms,
  Dialogs, StdCtrls;

type
  TForm1 = class(TForm)
    Label1: TLabel;
    Label2: TLabel;
    Button1: TButton;
    Label3: TLabel;
    Edit1: TEdit;
    Edit2: TEdit;
    ComboBox1: TComboBox;
    procedure Button1Click(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  Form1: TForm1;

implementation

{$R *.dfm}

procedure TForm1.Button1Click(Sender: TObject);
var angka1, angka2, hasil:integer;
begin
   angka1:=StrToInt(Edit1.Text);
   angka2:=StrToInt(Edit2.Text);

   //tambah
   if (ComboBox1.ItemIndex = 0 ) then
   begin
   hasil:= angka1 + angka2;
   Label3.Caption:= IntToStr(hasil);
   end
    //kurang
   else if (ComboBox1.ItemIndex = 1) then
   begin
   hasil:= angka1 - angka2;
   Label3.Caption:= IntToStr(hasil);
   end
   //kali
   else if (ComboBox1.ItemIndex = 2 ) then
   begin
      hasil:= angka1 * angka1;
      Label3.Caption:= IntToStr(hasil);
   end
   //Bagi
   else if (ComboBox1.ItemIndex = 3 ) then
   begin
        hasil:= angka1 div angka1;
      Label3.Caption:= IntToStr(hasil);
   end;
end;

end.
