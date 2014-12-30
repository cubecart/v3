/*
 * FCKeditor - The text editor for internet
 * Copyright (C) 2003-2004 Frederico Caldeira Knabben
 * 
 * Licensed under the terms of the GNU Lesser General Public License:
 * 		http://www.opensource.org/licenses/lgpl-license.php
 * 
 * For further information visit:
 * 		http://www.fckeditor.net/
 * 
 * File Name: gr.js
 * 	Greek language file.
 * 
 * Version:  2.0 RC2
 * Modified: 2004-11-29 09:51:40
 * 
 * File Authors:
 * 		Spyros Barbatos (sbarbatos{at}users.sourceforge.net)
 * Modified for 8859-7 enconding by Aris Ntatsis (a.ntatsis@onscreen.gr)
 */

var FCKLang =
{
// Language direction : "ltr" (left to right) or "rtl" (right to left).
Dir					: "ltr",

ToolbarCollapse		: "�������� ������ ���������",
ToolbarExpand		: "�������� ������ ���������",

// Toolbar Items and Context Menu
Save				: "����������",
NewPage				: "��� ������",
Preview				: "�������������",
Cut					: "�������",
Copy				: "���������",
Paste				: "����������",
PasteText			: "���������� (���� �������)",
PasteWord			: "���������� ��� �� Word",
Print				: "��������",
SelectAll			: "������� ����",
RemoveFormat		: "�������� ������������",
InsertLinkLbl		: "��������� (Link)",
InsertLink			: "��������/�������� ��������� (Link)",
RemoveLink			: "�������� ��������� (Link)",
InsertImageLbl		: "������",
InsertImage			: "��������/�������� �������",
InsertTableLbl		: "�������",
InsertTable			: "��������/�������� ������",
InsertLineLbl		: "������",
InsertLine			: "�������� ���������� �������",
InsertSpecialCharLbl: "������ �������",
InsertSpecialChar	: "�������� ������� ��������",
InsertSmileyLbl		: "Smiley",
InsertSmiley		: "�������� Smiley",
About				: "���� ��� FCKeditor",
Bold				: "������",
Italic				: "������",
Underline			: "�����������",
StrikeThrough		: "�����������",
Subscript			: "�������",
Superscript			: "�������",
LeftJustify			: "�������� ��������",
CenterJustify		: "�������� ��� ������",
RightJustify		: "�������� �����",
BlockJustify		: "������ �������� (Block)",
DecreaseIndent		: "������ ������",
IncreaseIndent		: "������ ������",
Undo				: "Undo",
Redo				: "Redo",
NumberedListLbl		: "����� �� ��������",
NumberedList		: "��������/�������� ������ �� ��������",
BulletedListLbl		: "����� �� Bullets",
BulletedList		: "��������/�������� ������ �� Bullets",
ShowTableBorders	: "������� ����� ������",
ShowDetails			: "������� ������������",
Style				: "Style",
FontFormat			: "����� ��������������",
Font				: "�������������",
FontSize			: "�������",
TextColor			: "����� ���������",
BGColor				: "����� ���������",
Source				: "HTML �������",
Find				: "���������",
Replace				: "�������������",

// Context Menu
EditLink			: "�������� ��������� (Link)",
InsertRow			: "�������� �������",
DeleteRows			: "�������� �������",
InsertColumn		: "�������� �������",
DeleteColumns		: "�������� �������",
InsertCell			: "�������� ������",
DeleteCells			: "�������� ������",
MergeCells			: "��������� ������",
SplitCell			: "����������� ������",
CellProperties		: "��������� ������",
TableProperties		: "��������� ������",
ImageProperties		: "��������� �������",

FontFormats			: "Normal;Formatted;Address;Heading 1;Heading 2;Heading 3;Heading 4;Heading 5;Heading 6",

// Alerts and Messages
ProcessingXHTML		: "����������� XHTML. �������� ����������...",
Done				: "������",
PasteWordConfirm	: "�� ������� ��� ������ �� �����������, �������� ��� ���������� ��� �� Word. ������ �� ���������� ���� ����������;",
NotCompatiblePaste	: "���� � ������� ����� ��������� ���� Internet Explorer ������ 5.5+. ������ �� ����� � ���������� ����� ���������;",
UnknownToolbarItem	: "������� ����������� ��� ������ ��������� \"%1\"",
UnknownCommand		: "������� ������ \"%1\"",
NotImplemented		: "� ������ ��� ���� �������������",
UnknownToolbarSet	: "� ����� ��������� \"%1\" ��� �������",

// Dialogs
DlgBtnOK			: "OK",
DlgBtnCancel		: "�������",
DlgBtnClose			: "��������",
DlgAdvancedTag		: "��� �������������",

// General Dialogs Labels
DlgGenNotSet		: "&lt;�����&gt;",
DlgGenId			: "Id",
DlgGenLangDir		: "���������� ��������",
DlgGenLangDirLtr	: "�������� ���� ����� (LTR)",
DlgGenLangDirRtl	: "����� ���� �������� (RTL)",
DlgGenLangCode		: "������� �������",
DlgGenAccessKey		: "���������� (Access Key)",
DlgGenName			: "Name",
DlgGenTabIndex		: "Tab Index",
DlgGenLongDescr		: "Long Description URL",
DlgGenClass			: "Stylesheet Classes",
DlgGenTitle			: "Advisory Title",
DlgGenContType		: "Advisory Content Type",
DlgGenLinkCharset	: "Linked Resource Charset",
DlgGenStyle			: "Style",

// Image Dialog
DlgImgTitle			: "��������� �������",
DlgImgInfoTab		: "����������� �������",
DlgImgBtnUpload		: "�������� ���� ����������",
DlgImgURL			: "URL",
DlgImgUpload		: "��������",
DlgImgBtnBrowse		: "������� ������� ����������",
DlgImgAlt			: "����������� ������� (ALT)",
DlgImgWidth			: "������",
DlgImgHeight		: "����",
DlgImgLockRatio		: "�������� ���������",
DlgBtnResetSize		: "��������� ������� ��������",
DlgImgBorder		: "���������",
DlgImgHSpace		: "���������� ����� (HSpace)",
DlgImgVSpace		: "������� ����� (VSpace)",
DlgImgAlign			: "������������ (Align)",
DlgImgAlignLeft		: "��������",
DlgImgAlignAbsBottom: "������� ���� (Abs Bottom)",
DlgImgAlignAbsMiddle: "������� ��� ���� (Abs Middle)",
DlgImgAlignBaseline	: "������ ����� (Baseline)",
DlgImgAlignBottom	: "���� (Bottom)",
DlgImgAlignMiddle	: "���� (Middle)",
DlgImgAlignRight	: "����� (Right)",
DlgImgAlignTextTop	: "������ �������� (Text Top)",
DlgImgAlignTop		: "���� (Top)",
DlgImgPreview		: "�������������",
DlgImgMsgWrongExt	: "�������� ���� �� �������� ����� ������� ����������� �� �����������:\n\n" + FCKConfig.ImageUploadAllowedExtensions + "\n\n� ������� ���������.",
DlgImgAlertSelect	: "�������� ��� ������ ��� ��������.",
DlgImgAlertUrl		: "�������� ��� ��������� (URL) ��� �������",

// Link Dialog
DlgLnkWindowTitle	: "������������� (Link)",
DlgLnkInfoTab		: "Link",
DlgLnkTargetTab		: "�������� ������ (Target)",

DlgLnkType			: "����� ������������� (Link)",
DlgLnkTypeURL		: "URL",
DlgLnkTypeAnchor	: "Anchor in this page",
DlgLnkTypeEMail		: "E-Mail",
DlgLnkProto			: "Protocol",
DlgLnkProtoOther	: "&lt;����&gt;",
DlgLnkURL			: "URL",
DlgLnkBtnBrowse		: "������� ������� ����������",
DlgLnkAnchorSel		: "�������� ��� Anchor",
DlgLnkAnchorByName	: "����� ��� �������� (Name)��� Anchor",
DlgLnkAnchorById	: "����� ��� Element Id",
DlgLnkNoAnchors		: "&lt;��� �������� Anchors ��� �������&gt;",
DlgLnkEMail			: "��������� ������������ ������������",
DlgLnkEMailSubject	: "���� ���������",
DlgLnkEMailBody		: "������� ���������",
DlgLnkUpload		: "��������",
DlgLnkBtnUpload		: "�������� ���� ����������",

DlgLnkTarget		: "�������� ������ (Target)",
DlgLnkTargetFrame	: "&lt;frame&gt;",
DlgLnkTargetPopup	: "&lt;popup window&gt;",
DlgLnkTargetBlank	: "��� �������� (_blank)",
DlgLnkTargetParent	: "������ �������� (_parent)",
DlgLnkTargetSelf	: "���� �������� (_self)",
DlgLnkTargetTop		: "������� �������� (_top)",
DlgLnkTargetFrame	: "����� Target Frame",
DlgLnkPopWinName	: "����� Popup Window",
DlgLnkPopWinFeat	: "�������� Popup Window",
DlgLnkPopResize		: "�� ������ ��������",
DlgLnkPopLocation	: "����� ����������",
DlgLnkPopMenu		: "����� Menu",
DlgLnkPopScroll		: "������ �������",
DlgLnkPopStatus		: "����� Status",
DlgLnkPopToolbar	: "����� ���������",
DlgLnkPopFullScrn	: "�������� � ����� (IE)",
DlgLnkPopDependent	: "Dependent (Netscape)",
DlgLnkPopWidth		: "������",
DlgLnkPopHeight		: "����",
DlgLnkPopLeft		: "��������� ��������� �����",
DlgLnkPopTop		: "��������� ���� �����",

DlgLnkMsgWrongExtA	: "�������� ���� �� �������� ����� ������� ����������� �� �����������:\n\n" + FCKConfig.LinkUploadAllowedExtensions + "\n\n� ������� ���������.",
DlgLnkMsgWrongExtD	: "�������� �� �������� ����� ������� ��� ����������� �� �����������:\n\n" + FCKConfig.LinkUploadDeniedExtensions + "\n\n� ������� ���������.",

DlnLnkMsgNoUrl		: "�������� ��� ��������� (URL) ��� ������������� (Link)",
DlnLnkMsgNoEMail	: "�������� ��� ��������� ������������ ������������",
DlnLnkMsgNoAnchor	: "�������� ��� Anchor",

// Color Dialog
DlgColorTitle		: "������� ��������",
DlgColorBtnClear	: "����������",
DlgColorHighlight	: "�������������",
DlgColorSelected	: "����������",

// Smiley Dialog
DlgSmileyTitle		: "�������� ��� Smiley",

// Special Character Dialog
DlgSpecialCharTitle	: "�������� ��� ������ �������",

// Table Dialog
DlgTableTitle		: "��������� ������",
DlgTableRows		: "�������",
DlgTableColumns		: "�������",
DlgTableBorder		: "������� ����������",
DlgTableAlign		: "��������",
DlgTableAlignNotSet	: "<�����>",
DlgTableAlignLeft	: "��������",
DlgTableAlignCenter	: "������",
DlgTableAlignRight	: "�����",
DlgTableWidth		: "������",
DlgTableWidthPx		: "pixels",
DlgTableWidthPc		: "\%",
DlgTableHeight		: "����",
DlgTableCellSpace	: "Cell spacing",
DlgTableCellPad		: "Cell padding",
DlgTableCaption		: "����������",

// Table Cell Dialog
DlgCellTitle		: "��������� ������",
DlgCellWidth		: "������",
DlgCellWidthPx		: "pixels",
DlgCellWidthPc		: "\%",
DlgCellHeight		: "����",
DlgCellWordWrap		: "�� ������ �������",
DlgCellWordWrapNotSet	: "<�����>",
DlgCellWordWrapYes	: "���",
DlgCellWordWrapNo	: "���",
DlgCellHorAlign		: "��������� ��������",
DlgCellHorAlignNotSet	: "<�����>",
DlgCellHorAlignLeft	: "��������",
DlgCellHorAlignCenter	: "������",
DlgCellHorAlignRight: "�����",
DlgCellVerAlign		: "������ ��������",
DlgCellVerAlignNotSet	: "<�����>",
DlgCellVerAlignTop	: "���� (Top)",
DlgCellVerAlignMiddle	: "���� (Middle)",
DlgCellVerAlignBottom	: "���� (Bottom)",
DlgCellVerAlignBaseline	: "������ ����� (Baseline)",
DlgCellRowSpan		: "������� ������� (Rows Span)",
DlgCellCollSpan		: "������� ������� (Columns Span)",
DlgCellBackColor	: "����� ���������",
DlgCellBorderColor	: "����� ����������",
DlgCellBtnSelect	: "�������...",

// Find Dialog
DlgFindTitle		: "���������",
DlgFindFindBtn		: "���������",
DlgFindNotFoundMsg	: "�� ������� ��� �������.",

// Replace Dialog
DlgReplaceTitle			: "�������������",
DlgReplaceFindLbl		: "���������:",
DlgReplaceReplaceLbl	: "������������� ��:",
DlgReplaceCaseChk		: "������� �����/���������",
DlgReplaceReplaceBtn	: "�������������",
DlgReplaceReplAllBtn	: "������������� ����",
DlgReplaceWordChk		: "������ ������� �����",

// Paste Operations / Dialog
PasteErrorPaste	: "�� ��������� ��������� ��� ������������ ��� ��� ���������� ��� ���������� ������� �����������. ��������������� �� ������������ (Ctrl+V).",
PasteErrorCut	: "�� ��������� ��������� ��� ������������ ��� ��� ���������� ��� ���������� ������� ��������. ��������������� �� ������������ (Ctrl+X).",
PasteErrorCopy	: "�� ��������� ��������� ��� ������������ ��� ��� ���������� ��� ���������� ������� ����������. ��������������� �� ������������ (Ctrl+C).",

PasteAsText		: "���������� �� ���� �������",
PasteFromWord	: "���������� ��� �� Word",

DlgPasteMsg		: "� ������������ �������� ��� ������ �� ��������� �������� ��� ���������� ���� ��� <strong>��������� ���������</strong> ��� ������������ ���.<br />�������� �� ������� ��� ��� ���� ��������� ��������������� �� ������������ (<strong>Ctrl+V</strong>) ��� ������ <strong>OK</strong>.",

// Color Picker
ColorAutomatic	: "��������",
ColorMoreColors	: "����������� �������...",

// About Dialog
DlgAboutVersion	: "������",
DlgAboutLicense	: "����� ������ ��� ���� ����� ��� GNU Lesser General Public License",
DlgAboutInfo	: "��� ������������ �����������"
}