<?php


$str = $_POST['2_5'];
$spliteData = explode('-',$str);
$year_2_5 =  $spliteData[0];
$month_2_5 =  $spliteData[1];
$day_2_5 =  $spliteData[2];

$str = $_POST['2_6'];
$spliteData = explode('-',$str);
$year_2_6 =  $spliteData[0];
$month_2_6 =  $spliteData[1];
$day_2_6 =  $spliteData[2];

$str = $_POST['2_7'];
$spliteData = explode('-',$str);
$year_2_7 =  $spliteData[0];
$month_2_7 =  $spliteData[1];
$day_2_7 =  $spliteData[2];

$str = $_POST['2_13'];
$spliteData = explode('-',$str);
$year_2_13 =  $spliteData[0];
$month_2_13 =  $spliteData[1];
$day_2_13 =  $spliteData[2];

$str = $_POST['2_14'];
$spliteData = explode('-',$str);
$year_2_14 =  $spliteData[0];
$month_2_14 =  $spliteData[1];
$day_2_14 =  $spliteData[2];

$str = $_POST['2_15'];
$spliteData = explode('-',$str);
$year_2_15 =  $spliteData[0];
$month_2_15 =  $spliteData[1];
$day_2_15 =  $spliteData[2];

$str = $_POST['2_32'];
$spliteData = explode('-',$str);
$year_2_32 =  $spliteData[0];
$month_2_32 =  $spliteData[1];
$day_2_32 =  $spliteData[2];


$html = <<< EOF

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="MSTER_COPY_契約書-2.fld/filelist.xml">
<style id="MSTER_COPY_契約書-2_6227_Styles">
table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
@page
	{margin:.2in 0in .2in .2in;
	mso-header-margin:0in;
	mso-footer-margin:0in;}
tr
	{mso-height-source:auto;
	mso-ruby-visibility:none;}

col
	{mso-width-source:auto;
	mso-ruby-visibility:none;}
br
	{mso-data-placement:same-cell;}
.style0
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;

	mso-generic-font-family:auto;
	mso-font-charset:128;
	border:none;
	mso-protection:locked visible;
	mso-style-name:標準;
	mso-style-id:0;}
td
	{mso-style-parent:style0;
	padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;

	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:locked visible;
	white-space:nowrap;
	mso-rotate:0;}
.xl63
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;}
.xl64
	{mso-style-parent:style0;
	font-size:20.0pt;
	font-weight:700;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
  font-weight:bold;}
.xl65
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	vertical-align:top;
	white-space:normal;}
.xl66
	{mso-style-parent:style0;
	font-size:11.0pt;
	font-weight:700;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
  font-weight:bold;}
.xl67
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:right;}
.xl68
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:left;}
.xl69
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl70
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:none;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl71
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:right;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl72
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl73
	{mso-style-parent:style0;
	font-size:8.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;}
.xl74
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\0022¥\0022\#\,\#\#0_\)\;\\\(\0022¥\0022\#\,\#\#0\\\)";}
.xl75
	{mso-style-parent:style0;
	color:red;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;}
.xl76
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\#\,\#\#0_\)\;\\\(\#\,\#\#0\\\)";}
.xl77
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\#\,\#\#0_\)\;\\\(\#\,\#\#0\\\)";
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl78
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:left;
	vertical-align:top;
	white-space:normal;}
.xl79
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	vertical-align:top;}
.xl80
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	vertical-align:top;
	white-space:normal;}
.xl81
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	white-space:normal;}
.xl82
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:left;
	border-top:none;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl83
	{mso-style-parent:style0;
	color:windowtext;
	border-top:none;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl84
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:left;
	border-top:none;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl85
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:left;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl86
	{mso-style-parent:style0;
	color:windowtext;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl87
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl88
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:right;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl89
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\0022¥\0022\#\,\#\#0_\)\;\\\(\0022¥\0022\#\,\#\#0\\\)";
	text-align:right;
	border-top:none;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl90
	{mso-style-parent:style0;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\0022¥\0022\#\,\#\#0_\)\;\\\(\0022¥\0022\#\,\#\#0\\\)";
	text-align:right;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl91
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	background:#F2F2F2;
	mso-pattern:#F2F2F2 none;
  background-color: #F2F2F2;
  line-height:50px;}
.xl92
	{mso-style-parent:style0;
	color:windowtext;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl93
	{mso-style-parent:style0;
	color:windowtext;
	border-top:.5pt hairline black;
	border-right:.5pt hairline black;
	border-bottom:none;
	border-left:none;}
.xl94
	{mso-style-parent:style0;
	color:windowtext;
	border-top:none;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:.5pt hairline black;}
.xl95
	{mso-style-parent:style0;
	color:windowtext;
	border-top:none;
	border-right:.5pt hairline black;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl96
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-weight:700;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	background:#F2F2F2;
	mso-pattern:#F2F2F2 none;
  background-color: #F2F2F2;}
.xl97
	{mso-style-parent:style0;
	color:windowtext;
	border-top:.5pt hairline black;
	border-right:.5pt hairline black;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
.xl98
	{mso-style-parent:style0;
	font-size:8.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:left;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:.5pt hairline black;}
.xl99
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-weight:700;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:.5pt hairline black;}
.xl100
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:00;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl101
	{mso-style-parent:style0;
	color:windowtext;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl102
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid black;
	border-left:none;}
.xl103
	{mso-style-parent:style0;
	color:red;
	font-size:10.0pt;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;
  text-align:right;}
.xl104
	{mso-style-parent:style0;
	font-size:10.0pt;
	font-weight:700;
;
	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-number-format:"\0022¥\0022\#\,\#\#0_\)\;\\\(\0022¥\0022\#\,\#\#0\\\)";
	text-align:right;
	border-top:.5pt hairline black;
	border-right:none;
	border-bottom:1px solid #9E9E9E !important;
	border-left:none;}
ruby
	{ruby-align:left;}
rt
	{color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;

	mso-generic-font-family:auto;
	mso-font-charset:128;
	mso-char-type:katakana;
	display:none;}

</style>
<style> td{height: 20px;line-height:25px;}</style>

</head>

<body link="#0563C1" vlink="#0563C1">
<!--[if !excel]>　　<![endif]-->
<!--次の情報は、Excel の Web ページとして発行ウィザードで生成されました。-->
<!--同じアイテムが Excel から再発行されるとき、DIV タグ間のすべての情報が置き換えられます。-->
<!----------------------------->
<!--Excel の Web ページとして発行 ウィザードのアウトプットの始まり-->
<!----------------------------->

<div id="MSTER_COPY_契約書-2_6227" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=749 style='border-collapse:
 collapse;table-layout:fixed;width:569pt'>
 <col width=24 style='mso-width-source:userset;mso-width-alt:768;width:18pt'>
 <col width=25 span=29 style='mso-width-source:userset;mso-width-alt:810;
 width:19pt'>

 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td colspan="28" rowspan="2" class="xl64">⾃動⾞売買契約書</td>
  <td class="xl64"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl64"></td>
 </tr>

 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td colspan="28" rowspan="4" class="xl65" width=700 style='width:532pt'>売、主{$_POST['2_34']}（以下「甲」という）と買主
  （以下「乙」という）とは、甲所有の後記自動車（以下「本件自動車」という）について、以下の内容の自動車個人間売買契約を締結した。</td>
  <td class="xl65" width=25 style='width:19pt'></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl65" width=25 style='width:19pt'></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl65" width=25 style='width:19pt'></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl65" width=25 style='width:19pt'></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl66" colspan="8" style="mso-ignore:colspan">1 本件自動車の表示</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="3" style='mso-ignore:colspan'>登録番号</td>
  <td colspan="11" class="xl82">{$_POST['2_1']}</td>
  <td colspan="3" class="xl67">車種</td>
  <td colspan="10" class="xl84">{$_POST['2_2']}</td>
  <td class="xl68"></td>
 </tr>
 <tr height="24" style="mso-height-source:userset;height:18.0pt">
  <td height="24" class="xl63" style="height:18.0pt"></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="2" style="mso-ignore:colspan">型 式</td>
  <td colspan="12" class="xl82">{$_POST['2_3']}</td>
  <td colspan="3" class="xl67">車台番号</td>
  <td colspan="10" class="xl85">{$_POST['2_4']}</td>
  <td class="xl68"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="4" style='mso-ignore:colspan'>初年度登録</td>

  <td colspan="2" class="xl87">$year_2_5</td>
  <td class="xl69" style='border-top:none'>年</td>
  <td colspan="1" class="xl87">$month_2_5</td>
  <td class="xl69" style='border-top:none'>月</td>
  <td colspan="1" class="xl87">$day_2_5</td>
  <td class="xl69" style='border-top:none'>日</td>
  <td class="xl63"></td>
  <td class="xl63"></td> 
  <td colspan="4" class="xl67" >登録年月日</td>
  <td colspan="2" class="xl70">$year_2_6</td>
  <td  class="xl69" style='border-top:none'>年</td>
  <td class="xl70" >$month_2_6</td>
  <td  class="xl69" style='border-top:none'>月</td>
  <td class="xl70" >$day_2_6</td>
  <td  class="xl69" style='border-top:none'>日</td>
  <td class="xl67"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:18.0pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="4" style='mso-ignore:colspan'>車検満了日</td>
  <td colspan="2" class="xl72" style='border-top:none'>$year_2_7</td>
  <td class="xl63">年</td>
  <td class="xl72" style='border-top:none'>$month_2_7</td>
  <td class="xl63">月</td>
  <td class="xl72" style='border-top:none'>$day_2_7</td>
  <td class="xl63">日</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td colspan="4" class="xl67">走行距離数</td>
  <td colspan="10" class="xl88">{$_POST['2_8']}</td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="4" style='mso-ignore:colspan'>所有者の氏名</td>
  <td class="xl70" colspan="8" style='mso-ignore:colspan'>{$_POST['2_9']}</td>

  <td class="xl63"></td>
  <td class="xl67" colspan="4" >所有者の住所</td>
  <td class="xl70" colspan="10" style='mso-ignore:colspan'>{$_POST['2_10']}</td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="4" style='mso-ignore:colspan'>使用者の氏名</td>
  <td class="xl70" colspan="8" ><span style='display:none'>{$_POST['2_11']}</span></td>
  <td class="xl63"></td>


  <td class="xl67" colspan="4" >使用者の住所</td>
  <td class="xl72" colspan="10" style='mso-ignore:colspan'>{$_POST['2_12']}</td>

  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl66" colspan="5" style='mso-ignore:colspan'>2 契約内容</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="2" style='mso-ignore:colspan'>契約日</td>
  <td colspan="2" class="xl82">$year_2_13</td>
  <td class="xl63">年</td>
  <td colspan="1" class="xl82">$month_2_13</td>
  <td class="xl63">月</td>
  <td colspan="1" class="xl82">$day_2_13</td>
  <td class="xl63">日</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="4" style='mso-ignore:colspan'>車両引渡し日</td>
  <td colspan="2" class="xl70">$year_2_14</td>
  <td class="xl63">年</td>
  <td class="xl70">$month_2_14</td>
  <td class="xl63">月</td>
  <td class="xl70">$day_2_14</td>
  <td class="xl63">日</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="5" style='mso-ignore:colspan'>登録名義変更期日</td>
  <td colspan="2" class="xl70">$year_2_15</td>
  <td class="xl63">年</td>
  <td class="xl70">$month_2_15</td>
  <td class="xl63">月</td>
  <td class="xl70">$day_2_15</td>
  <td class="xl63">日</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="17" style='mso-ignore:colspan'>登録名義変更済み新検査証の複写引渡し日
  登録名義変更日より</td>
  
  <td  colspan="3" class="xl70">{$_POST['2_16']}</td>
  <td  colspan="2" class="xl67">日以内</td>
  <td class="xl67">　</td>
  <td class="xl67">　</td>


  <td class="xl67"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl66"></td>
  <td class="xl63" colspan="7" style='mso-ignore:colspan'>本件自動車車両価格</td>
  <td class="xl63"></td>
  <td colspan="10" class="xl89">{$_POST['2_17']}</td>

  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="7" style='mso-ignore:colspan'>整備、車検、登録諸費用</td>
  <td colspan="11" class="xl90">{$_POST['2_18']}</td>
  <td class="xl63"></td>
  <td colspan="8" rowspan="2" class="xl91" style="vertical-align:bottom;">下取車両情報</td>
  <td class="xl73"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="4" style='mso-ignore:colspan'>車陸送費用</td>
  <td colspan="14" class="xl89">{$_POST['2_19']}</td>

  <td class="xl73"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="6" style='mso-ignore:colspan'>ドライブレコーダー</td>
  <td colspan="12" class="xl90">{$_POST['2_20']}</td>
  <td class="xl63"></td>
  <td colspan="3" class="xl96" style="">メーカー</td>
  <td colspan="5" class="xl98" style="">{$_POST['2_21']}</td>
  <td class="xl73"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td colspan="9" class="xl68">KASUVARンドロイドカーナビ</td>
  <td colspan="9" class="xl90">{$_POST['2_22']}</td>
  <td class="xl63"></td>
  <td colspan="3" class="xl96" style='border-right:.5pt hairline black'>車種</td>
  <td colspan="5" class="xl98" style='border-right:.5pt hairline black;border-left:none'>{$_POST['2_23']}</td>
  <td class="xl73"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl75" colspan="5" style='mso-ignore:colspan'>車両本体価格(-)</td>
  <td colspan="13" class="xl103">{$_POST['2_24']}</td>
  <td class="xl63"></td>
  <td colspan="3" class="xl96" style="">走行距離数</td>
  <td colspan="5" class="xl98" style="">{$_POST['2_25']}</td>
  <td class="xl73"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl75" colspan="8" style='mso-ignore:colspan'>{$_POST['2_26']}</td>
  <td colspan="10" class="xl103">{$_POST['2_27']}</td>
  <td class="xl63"></td>
  <td colspan="3" class="xl96" style='border-right:.5pt hairline black'>車体色</td>
  <td colspan="5" class="xl98" style='border-right:.5pt hairline black;border-left: none'>{$_POST['2_28']}</td>
  <td class="xl73"></td>
 </tr>
  <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl75" colspan="8" style='mso-ignore:colspan'>{$_POST['2_29']}</td>
  <td colspan="10" class="xl103">{$_POST['2_30']}</td>
  <td class="xl63"></td>
  <td colspan="3" class="xl73"></td>
  <td colspan="5" class="xl73">　</td>
  <td class="xl73"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl66"></td>
  <td class="xl66" colspan="8" style='mso-ignore:colspan'>本件自動車売買の合計金額</td>



  <td colspan="10" class="xl90" class="xl104">{$_POST['2_31']}</td>


  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl66" colspan="8" style='mso-ignore:colspan'>第１条（契約の成立）</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl66"></td>
  <td class="xl63" colspan="27" style='mso-ignore:colspan'>甲は乙に対し本件自動車を前記契約内容の約定により売り渡し、
  乙はこれを買い受ける。</td>

  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl66" colspan="8" style='mso-ignore:colspan'>第２条（事故の責任）</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="27" style='mso-ignore:colspan'>自動車引渡し後の事故等については、乙の責任において一切の処
  理を行い、甲へはいかなる迷惑</td>

  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="7" style='mso-ignore:colspan'>をかけないものとする。</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl66" colspan="9" style='mso-ignore:colspan'>第３条（所有権移転時期）</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="25" style='mso-ignore:colspan'>本件自動車の所有権は、本件自動車売買代金完済時に、甲か
  ら乙に移転する。</td>
  <td class="xl63"></td>

  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl66" colspan="10" style='mso-ignore:colspan'>第 4 条（契約の解除）</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="27" style='mso-ignore:colspan'>甲乙の一方が契約の解除を申し立てた際には、契約の相手方に対して、遅滞無く、前記契約内容記載の契約解除損害金を支払うものとする</td>

  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="12" style='mso-ignore:colspan'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl66" colspan="9" style='mso-ignore:colspan'>5 条（危険負担）</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td colspan="27" rowspan="4" class="xl78" width=675 style='width:513pt'>本件自動車の引渡し前に、本件自動車が天災その他不可抗力により、その価値が著しく減少し、乙が売買の目的を達することができなくなったときは、当然
  に甲の自動車を引き渡す債務は消滅し、乙の売買代金を支払う債務も消滅する。なお、甲は乙に対し、受領済みの手付金、売買代金がある場合、これをすみやかに返還しなけ ればならない。</td>
  <td class="xl78" width=25 style='width:19pt'></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl78" width=25 style='width:19pt'></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl78" width=25 style='width:19pt'></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl78" width=25 style='width:19pt'></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>



 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl66" colspan="17" style='mso-ignore:colspan'>第 6 条（瑕疵担保責任）</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl79" colspan="27" style='mso-ignore:colspan'>1.甲は、本件自動車に乙の責任とはならない瑕疵が発見されたときにはその責に任じ、</td>

  <td class="xl80" width=25 style='width:19pt'></td>
 </tr>

  <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="19" style='mso-ignore:colspan'>乙は瑕疵の補修または代金減額を請求することができる。</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>

  <td class="xl63"></td>
 </tr>

 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl79" colspan="27" style='mso-ignore:colspan'><span
  style='mso-spacerun:yes'> </span>2. 前項の瑕疵の存在によって本契約の目的を達することができない場合には、</td>
  <td class="xl63"></td>
  <td class="xl63"></td>

 </tr>
  <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="19" style='mso-ignore:colspan'>乙は本 契約を解除することができる。</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>

  <td class="xl63"></td>
 </tr>
 
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="27" style='mso-ignore:colspan'>3. 甲の乙に対する前 2項の責任は、前記契約内容記載の瑕疵担保期間に限られ、</td>

  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="19" style='mso-ignore:colspan'>以後 甲は乙に対し何らの責任を負わない。</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>

  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl66" colspan="10" style='mso-ignore:colspan'>第 7 条（協議）</td>
  
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63" colspan="27" style='mso-ignore:colspan'>本件契約に定めのない事項については、民法その他法規に従い、その都
  度甲乙協議して決定する。</td>

  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.0pt'>
  <td height="20" class="xl63" style='height:15.0pt'></td>
  <td colspan="28" class="xl81" width=700 style='width:532pt'>以上、契約の証として本書２通を作成し、甲乙署名捺印のうえ、各々その１通を保有する。</td>
  <td class="xl81" width=25 style='width:19pt'></td>
 </tr>
 
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td colspan="2" class="xl102">$year_2_32</td>
  <td class="xl63">年</td>
  <td colspan="1" class="xl100">$month_2_32</td>
  <td class="xl63">月</td>
  <td colspan="1" class="xl102">$day_2_32</td>
  <td class="xl63">日</td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>

  <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>

  <td class="xl63"></td>
  <td colspan="7" class="xl67">売主（甲）住所：</td>
  <td class="xl63" colspan="15" style='mso-ignore:colspan'>{$_POST['2_33']}<span
  style='mso-spacerun:yes'> </span></td>

  <td class="xl63"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td colspan="5" class="xl67">社名：</td>
  <td class="xl72" colspan="12" style='mso-ignore:colspan'>{$_POST['2_34']}</td>

  <td class="xl63"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td colspan="4" class="xl67">氏名：</td>
  <td class="xl72" colspan="12" style='mso-ignore:colspan'>{$_POST['2_35']}</td>
  <td class="xl72" style='border-top:none'>　</td>

  <td class="xl63">㊞</td>

  <td class="xl63"></td>

  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
  <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>

  <td class="xl63"></td>
  <td colspan="7" class="xl67">買主（乙）住所：</td>
  <td class="xl63" colspan="15" style='mso-ignore:colspan'>{$_POST['2_36']}<span
  style='mso-spacerun:yes'> </span></td>

  <td class="xl63"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td colspan="5" class="xl67">社名：</td>
  <td class="xl72" colspan="12" style='mso-ignore:colspan'>{$_POST['2_37']}</td>

  <td class="xl63"></td>
 </tr>
 <tr height="24" style='mso-height-source:userset;height:18.0pt'>
  <td height="24" class="xl63" style='height:18.0pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td colspan="4" class="xl67">氏名：</td>
  <td class="xl72" colspan="12" style='mso-ignore:colspan'>{$_POST['2_38']}</td>
  <td class="xl72" style='border-top:none'>　</td>

  <td class="xl63">㊞</td>

  <td class="xl63"></td>

  <td class="xl63"></td>
 </tr>
 <tr height="20" style='mso-height-source:userset;height:15.75pt'>
  <td height="20" class="xl63" style='height:15.75pt'></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
  <td class="xl63"></td>
 </tr>


 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=24 style='width:18pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
  <td width=25 style='width:19pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--Excel の Web ページとして発行 ウィザードのアウトプットの終わり-->
<!----------------------------->
</body>

</html>

EOF;

//echo $_POST['bm_text'];



//============================================================+
// File name   : example_033.php
// Begin       : 2008-06-24
// Last Update : 2013-05-14
//
// Description : Example 033 for TCPDF class
//               Mixed font types
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Mixed font types
 * @author Nicola Asuni
 * @since 2008-06-24
 * @group font
 * @group pdf
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('@DM Fujiba');
$pdf->setTitle('@DM Fujiba 契約書');
$pdf->setSubject('@DM Fujiba 契約書');
//$pdf->setKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 033', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
//$pdf->SetDisplayMode('fullpage', 'SinglePage', 'UseNone');

// add a page
//$pdf->AddPage();
$pdf->AddPage('P','A4');
//$pdf->Cell(0, 0, 'A4 PORTRAIT', 1, 1, 'C');


// set default font subsetting mode
$pdf->setFontSubsetting(false);

$pdf->setFont('cid0jp', '', '12','');





//$html = file_get_contents('test.html', false);

//$pdf->writeHTMLCell($w=0,$h=0,$x=0,$y=0,$html,$border=0,$ln=0,$fill=false,$reseth=true,$align='L',$autopadding=false);

//https://stackoverflow.com/questions/44061583/what-are-the-parameter-of-the-image-in-tcpdf
//mage( filename, left, top, width, height, type, link, align, resize, dpi, align, ismask, imgmask, border, fitbox, hidden, fitonpage)
/*
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 125, 190, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 160, 190, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);

$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 125, 216, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 160, 216, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);

$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 125, 241, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 160, 241, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
*/



$pdf->Image($_POST['4_1'], 125, 190, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image($_POST['4_2'], 160, 190, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);

$pdf->Image($_POST['4_3'], 125, 216, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image($_POST['4_4'], 160, 216, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);

$pdf->Image($_POST['4_5'], 125, 241, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);
$pdf->Image($_POST['4_6'], 160, 241, 30, 25, '', 'http://www.tcpdf.org', '', false, 300);

//$pdf->Image('https://picture1.goo-net.com/056/0561562/J/0561562A30241024W00205.jpg', 100, 300, 40, 30, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);
$pdf->writeHTML($html, true, 0, true, 0);
//$pdf->Write(5, $html, '', 0, '', false, 0, false, false, 0);
//$pdf->Output($_SERVER['DOCUMENT_ROOT'] . '/eccube-mylocal/ec-cube/html/upload/contract/' . $_POST['customerId'] . '/' . $_POST['pdfFileName'] . '.pdf', 'FI');

$pdf->Output($_SERVER['DOCUMENT_ROOT'] . $_POST['uploadPath'] . '/html/upload/contract/' . $_POST['customerId'] . '/' . $_POST['pdfFileName'] . '.pdf', 'FI');

//$pdf->Output($_SERVER['DOCUMENT_ROOT'] . '/eccube-mylocal/ec-cube/html/upload/contract/20002/test.pdf', 'FI');

