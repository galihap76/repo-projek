program latihandpr2;

uses
  Forms,
  latihan2 in 'latihan2.pas' {Form1};

{$R *.res}

begin
  Application.Initialize;
  Application.CreateForm(TForm1, Form1);
  Application.Run;
end.
