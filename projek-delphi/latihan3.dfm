object Form1: TForm1
  Left = 362
  Top = 186
  Width = 726
  Height = 326
  Caption = 'Form1'
  Color = clBtnFace
  Font.Charset = ANSI_CHARSET
  Font.Color = clWindowText
  Font.Height = -19
  Font.Name = 'Arial Rounded MT Bold'
  Font.Style = []
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 22
  object Label1: TLabel
    Left = 184
    Top = 24
    Width = 359
    Height = 32
    Caption = 'Halo Selamat Datang Galih!'
    Font.Charset = ANSI_CHARSET
    Font.Color = clWindowText
    Font.Height = -27
    Font.Name = 'Arial Rounded MT Bold'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object Label2: TLabel
    Left = 192
    Top = 88
    Width = 93
    Height = 22
    Caption = 'Username'
  end
  object Label3: TLabel
    Left = 192
    Top = 144
    Width = 90
    Height = 22
    Caption = 'Password'
  end
  object usernameku: TEdit
    Left = 296
    Top = 88
    Width = 161
    Height = 30
    TabOrder = 0
  end
  object passwordku: TEdit
    Left = 296
    Top = 144
    Width = 161
    Height = 30
    TabOrder = 1
  end
  object Klik: TButton
    Left = 336
    Top = 208
    Width = 75
    Height = 25
    Caption = 'Klik'
    TabOrder = 2
    OnClick = usernamekClick
  end
end
