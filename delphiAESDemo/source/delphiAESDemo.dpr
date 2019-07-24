program delphiAESDemo;

uses
  Vcl.Forms,
  AESDemo1 in 'AESDemo1.pas' {frmAESDemo},
  AESEncDec in '..\lib\AESEncDec.pas';

{$R *.res}

begin
  Application.Initialize;
  Application.MainFormOnTaskbar := True;
  Application.CreateForm(TfrmAESDemo, frmAESDemo);
  Application.Run;
end.
