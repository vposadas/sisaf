<?php

class InfoFarmTrasladoTabla{
    protected $infoTraslado;

    function FnInfoTrasladoFarm($data){
        $this -> infoTraslado = $data;
    }

    function RenderInfoTrasladoFarm(){
        $matriz2 = $this->infoTraslado[0];
        ?>
        <!--Empieza el formato-->

        <!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
        <html xmlns:v="urn:schemas-microsoft-com:vml"
              xmlns:o="urn:schemas-microsoft-com:office:office"
              xmlns:x="urn:schemas-microsoft-com:office:excel"
              xmlns="http://www.w3.org/TR/REC-html40">

        <head>
            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
            <meta name=ProgId content=Excel.Sheet>
            <meta name=Generator content="Aspose.Cell ">
            <link rel=File-List href="a8yss-6rkfz_files/filelist.xml">
            <link rel=Edit-Time-Data href="a8yss-6rkfz_files/editdata.mso">
            <link rel=OLE-Object-Data href="a8yss-6rkfz_files/oledata.mso">
            <!--[if gte mso 9]><xml>
                <o:DocumentProperties>
                    <o:Author>Evelyn Zeceña</o:Author>
                    <o:LastPrinted>2021-05-06T11:58:38Z</o:LastPrinted>
                    <o:Created>2021-05-06T09:01:55Z</o:Created>
                    <o:LastSaved>2021-05-06T12:27:44Z</o:LastSaved>
                </o:DocumentProperties>
            </xml><![endif]-->
            <style>
                <!--table
                {mso-displayed-decimal-separator:"\.";
                    mso-displayed-thousand-separator:"\,";}
                @page
                {
                    mso-header-data:"";
                    mso-footer-data:"";
                    margin:0.118110236220472in 0.196850393700787in 0.118110236220472in 0in;
                    mso-header-margin:0.118110236220472in;
                    mso-footer-margin:0in;
                    mso-page-orientation:Portrait;
                    mso-horizontal-page-align:center;
                }
                tr
                {mso-height-source:auto;
                    mso-ruby-visibility:none;}
                col
                {mso-width-source:auto;
                    mso-ruby-visibility:none;}
                br
                {mso-data-placement:same-cell;}
                ruby
                {ruby-align:left;}
                .style0
                {
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border:none;
                    mso-protection:locked visible;
                    mso-style-name:Normal;
                    mso-style-id:0;}
                .font0
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font1
                {
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font2
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font3
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font4
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font5
                {
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font6
                {
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font7
                {
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font8
                {
                    color:#FF0000;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font9
                {
                    color:#000000;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font10
                {
                    color:#000000;
                    font-size:14pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font11
                {
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font12
                {
                    color:#FF0000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","sans-serif"; }
                td
                {mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border:none;
                    mso-protection:locked visible;
                    mso-ignore:padding;}
                .style0
                {
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Normal";
                }
                .style1
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style2
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style3
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style4
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style5
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style6
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style7
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style8
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style9
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style10
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style11
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style12
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style13
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style14
                {
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x15
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .style16
                {
                    mso-number-format:"0%";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Percent";
                }
                .style17
                {
                    mso-number-format:"_\(\0022$\0022* \#\,\#\#0\.00_\)\;_\(\0022$\0022* \(\#\,\#\#0\.00\)\;_\(\0022$\0022* \0022-\0022??_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Currency";
                }
                .style18
                {
                    mso-number-format:"_\(\0022$\0022* \#\,\#\#0_\)\;_\(\0022$\0022* \(\#\,\#\#0\)\;_\(\0022$\0022* \0022-\0022_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Currency [0]";
                }
                .style19
                {
                    mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \(\#\,\#\#0\.00\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Comma";
                }
                .style20
                {
                    mso-number-format:"_\(* \#\,\#\#0_\)\;_\(* \(\#\,\#\#0\)\;_\(* \0022-\0022_\)\;_\(\@_\)";
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Comma [0]";
                }
                .x21
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x22
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x23
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x24
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x25
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x26
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x27
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x28
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x29
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x30
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x31
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x32
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x33
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x34
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x35
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x36
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x37
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x38
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x39
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x40
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x41
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    white-space:normal;
                    word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x42
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x43
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x44
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x45
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x46
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arialf";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x47
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x48
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x49
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x50
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x51
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x52
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#FF0000;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x53
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x54
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x55
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x56
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x57
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x58
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x59
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x60
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x61
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x62
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x63
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x64
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x65
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:14pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                }
                .x66
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x67
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x68
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x69
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x70
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x71
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x72
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x73
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","sans-serif";
                    mso-protection:locked visible;
                }
                -->
            </style>
            <!--[if gte mso 9]><xml>
                <x:ExcelWorkbook>
                    <x:ExcelWorksheets>
                        <x:ExcelWorksheet>
                            <x:Name>TRASLADOS </x:Name>
                            <x:WorksheetOptions>
                                <x:StandardWidth>2560</x:StandardWidth>
                                <x:FitToPage/>
                                <x:Print>
                                    <x:ValidPrinterInfo/>
                                    <x:PaperSizeIndex>1</x:PaperSizeIndex>
                                    <x:Scale>67</x:Scale>
                                    <x:HorizontalResolution>600</x:HorizontalResolution>
                                    <x:VerticalResolution>600</x:VerticalResolution>
                                </x:Print>
                                <x:ShowPageBreakZoom/>
                                <x:Zoom>84</x:Zoom>
                                <x:Selected/>
                                <x:TopRowVisible>24</x:TopRowVisible>
                            </x:WorksheetOptions>
                        </x:ExcelWorksheet>
                    </x:ExcelWorksheets>
                    <x:WindowHeight>15840</x:WindowHeight>
                    <x:WindowWidth>29040</x:WindowWidth>
                    <x:WindowTopX>-120</x:WindowTopX>
                    <x:WindowTopY>-120</x:WindowTopY>
                    <x:RefModeR1C1/>
                    <x:TabRatio>600</x:TabRatio>
                    <x:ActiveSheet>0</x:ActiveSheet>
                </x:ExcelWorkbook>
                <x:ExcelName>
                    <x:Name>PRINT_AREA</x:Name>
                    <x:SheetIndex>1</x:SheetIndex>
                    <x:Formula>='TRASLADOS '!$A$1:$J$52</x:Formula>
                </x:ExcelName>
            </xml><![endif]-->
        </head>
        <body link=blue vlink=purple class=x21>

        <table border=0 cellpadding=0 cellspacing=0 width=1157 style='border-collapse:
 collapse;table-layout:fixed;width:1000pt'>
            <col class=x21 width=80 style='mso-width-source:userset;width:20pt'>
            <col class=x21 width=119 style='mso-width-source:userset;width:50pt'>
            <col class=x21 width=145 span=3 style='mso-width-source:userset;width:125pt'>
            <col class=x21 width=115 style='mso-width-source:userset;width:70pt'>
            <col class=x21 width=98 style='mso-width-source:userset;width:70pt'>
            <col class=x21 width=75 style='mso-width-source:userset;width:80pt'>
            <col class=x21 width=67 style='mso-width-source:userset;width:50.25pt'>
            <col class=x21 width=88 style='mso-width-source:userset;width:50pt'>
            <col width=80 style='width:60pt'>

            <tr height=26 style='mso-height-source:userset;height:19.5pt' id='r4'>
                <td height=26 class=x21 style='height:19.5pt;'></td>

                <td colspan=2 class=x65>Correlativo CGC</td>
                <td class=x52>No.<span style='mso-spacerun:yes'>&nbsp;&nbsp; </span><?php echo $matriz2['FarmNumIdTraslado']; ?></td>
                <td class=x21></td>
            </tr>

            <tr height=21 style='mso-height-source:userset;height:15.75pt' id='r13'>
                <td height=21 class=x21 style='height:15.75pt;'></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
                <td class=x21></td>
            </tr>
            <tr height=52 style='mso-height-source:userset;height:25pt' id='r14'>
                <td height=52 class=x21 style='height:25pt;'></td>
                <td class=x50>CODIGO</td>
                <td colspan=3 class=x46 style='border-bottom:2px solid windowtext;'>DESCRIPCIÓN DEL PRODUCTO</td>
                <td class=x48 style='overflow:hidden;'>CANTIDAD SOLICITADA</td>
                <td class=x47 style='overflow:hidden;'>CANTIDAD DESPACHADA</td>
                <td class=x46 style='overflow:hidden;'>NO. LOTE</td>
                <td colspan=3 class=x46 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>FECHA VENCIMIENTO</td>

                <td class=x21></td>
            </tr>

            <?php
            $cont=0;
            foreach ($matriz2['ArrayDetalle'] as $row) {
                $cont++;

                ?>

                <tr height=39 style='mso-height-source:userset;height:20pt' id='r15'>
                    <td height=39 class=x21 style='height:20pt;'></td>
                    <td class=x43 align="center"><?php echo $row['FarmNumCodiInsu'] ?></td>
                    <td colspan=3 class=x41 style='border-bottom:1px solid windowtext;' align="justify"><?php echo $row['FarmStrDescrip'] ?></td>
                    <td class=x43 align="center"><?php echo $row['FarmNumCantSoli'] ?></td>
                    <td class=x43 align="center"><?php echo $row['FarmNumCantDesp'] ?></td>
                    <td class=x42 align="center"><?php echo $row['FarmStrlote'] ?></td>
                    <td colspan=3 class=x62 style='border-right:2px solid windowtext;border-bottom:1px solid windowtext;' align="justify"><?php if($row['FarmDateVencimiento']=='1900-01-01'){
                            echo'No aplica';}else { echo $row['FarmDateVencimiento'] ;}?></td>
                    <td class=x21></td>
                </tr>

            <?php }//Fin de Foreach
            ?>


            <tr height=39 style='mso-height-source:userset;height:20pt' id='r16'>
                <td height=39 class=x21 style='height:20pt;'></td>
                <td class=x38 align="center">---------------</td>
                <td colspan=3 class=x36 style='border-bottom:1px solid windowtext;' align="center">---------------Última Línea---------------</td>
                <td class=x38 align="center">---------------</td>
                <td class=x37 align="center">---------------</td>
                <td class=x38 align="center">---------------</td>
                <td colspan=3 class=x36 style='border-right:2px solid windowtext;border-bottom:1px solid windowtext;' align="center">---------------</td>
                <td class=x21></td>
            </tr>

            <?php
            for($j=$cont; $j<24; $j++){ ?>

                <tr height=39 style='mso-height-source:userset;height:20pt' id='r16'>
                    <td height=39 class=x21 style='height:20pt;'></td>
                    <td class=x38 align="center"></td>
                    <td colspan=3 class=x36 style='border-bottom:1px solid windowtext;' align="center"></td>
                    <td class=x38 align="center"></td>
                    <td class=x37 align="center"></td>
                    <td class=x38 align="center"></td>
                    <td colspan=3 class=x36 style='border-right:2px solid windowtext;border-bottom:1px solid windowtext;' align="center"></td>
                    <td class=x21></td>
                </tr>

            <?php	} ?>







        </table>

        <script language = 'javascript' type='text/javascript'>
            function ChangeRowspanHiddenData()
            {
                var node;
                var params=["r50"];
                for (var i = 0;i < params.length; i++)
                {
                    node = document.getElementById(params[i]);
                    if (node != null)
                    {
                        node.style.display = "";
                    }
                }
            }
            ChangeRowspanHiddenData();
        </script>
        </body>

        <style>
            <!--
            .x74
            {
                mso-style-parent:style0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                white-space:nowrap;
                background:auto;
                mso-pattern:auto;
                font-size:14pt;
                font-weight:700;
                font-style:normal;
                font-family:"Calibri","sans-serif";
                mso-protection:locked visible;
            }
            .x75
            {
                mso-style-parent:style0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                white-space:nowrap;
                background:#FFFFFF;
                mso-pattern:auto none;
                color:#000000;
                font-size:8pt;
                font-weight:400;
                font-style:normal;
                font-family:"Calibri Light","serif";
                mso-protection:locked visible;
            }
            .x76
            {
                mso-style-parent:style0;
                mso-number-format:General;
                text-align:center;
                vertical-align:bottom;
                white-space:nowrap;
                background:#FFFFFF;
                mso-pattern:auto none;
                color:#000000;
                font-size:8pt;
                font-weight:400;
                font-style:normal;
                font-family:"Calibri Light","serif";
                mso-protection:locked visible;
            }
            .x77
            {
                mso-style-parent:style0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                white-space:nowrap;
                background:#FFFFFF;
                mso-pattern:auto none;
                color:#000000;
                font-size:8pt;
                font-weight:400;
                font-style:normal;
                font-family:"Calibri Light","serif";
                border-top:none;
                border-right:none;
                border-bottom:1px solid windowtext;
                border-left:none;
                mso-diagonal-down:none;
                mso-diagonal-up:none;
                mso-protection:locked visible;
            }
            -->
        </style>
        </html>





        <!--Termina la estructura php-->
        <?php
    }
}