object frmAESDemo: TfrmAESDemo
  Left = 0
  Top = 0
  BorderIcons = [biSystemMenu, biMinimize]
  BorderStyle = bsSingle
  Caption = 'frmAESDemo'
  ClientHeight = 276
  ClientWidth = 411
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  Position = poScreenCenter
  PixelsPerInch = 96
  TextHeight = 13
  object aesMemo: TMemo
    Left = 8
    Top = 8
    Width = 393
    Height = 233
    Lines.Strings = (
      '')
    ReadOnly = True
    TabOrder = 0
  end
  object Encryption: TButton
    Left = 8
    Top = 247
    Width = 393
    Height = 25
    Caption = 'Encryption'
    TabOrder = 1
    OnClick = EncryptionClick
  end
end
