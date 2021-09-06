program latihandpr1;

uses
  Forms,
  latihanku1 in 'latihanku1.pas' {Form1};

{$R *.res}

begin
  Application.Initialize;
  Application.CreateForm(TForm1, Form1);
  Application.Run;
end.
