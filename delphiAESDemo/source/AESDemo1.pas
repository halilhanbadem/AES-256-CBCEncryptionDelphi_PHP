{ ***********************************************************************************************************************
  *                                              Dev.Halil Han Badem                                                     *
  *                                                  24/07/2019                                                          *                                              Instagram: halilhanbademm                                               *
  *                                      Github, Twitter, Facebook: halilhanbadem                                        *
  *                                            Instagram: halilhanbademm                                                 *
  *                                          halilhanbadem@protonmail.com                                                *
  *********************************************************************************************************************** }

unit AESDemo1;

interface

uses
  Winapi.Windows, Winapi.Messages, System.SysUtils, System.Variants,
  System.Classes, Vcl.Graphics,
  Vcl.Controls, Vcl.Forms, Vcl.Dialogs, Vcl.StdCtrls, AESEncDec,
  System.NetEncoding;

type
  TfrmAESDemo = class(TForm)
    aesMemo: TMemo;
    Encryption: TButton;
    procedure EncryptionClick(Sender: TObject);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  frmAESDemo: TfrmAESDemo;

implementation

{$R *.dfm}

procedure TfrmAESDemo.EncryptionClick(Sender: TObject);
var
  Cha: TChainingMode;
  Pad: TPaddingMode;
  size: Integer;
  Enc: TEncoding;
  Password, Data, IV, Crypto: TBytes;
begin
  Key_Size := 256;
  Encoding := TEncoding.ANSI;
  Cha := cmCBC;
  Pad := pmPKCS7;
  Data := Enc.GetBytes('halilhanbadem testi türkçe karakter');
  Password := Enc.GetBytes('pstestpstestpstestpstestpstest12');
  IV := Enc.GetBytes('ivtest_ivtest123');

  aesMemo.Lines.Text := TNetEncoding.Base64.EncodeBytesToString
    (TAESEncDec.Create.EncryptAES(Data, Password, Key_Size, IV, cha,
    pad));
end;

end.
