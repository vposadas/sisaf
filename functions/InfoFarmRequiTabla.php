
<?php

class InfoFarmRequiTabla{
    protected $InfoFarmRequi;

    function FnInfoFarmRequi($data){
        $this -> InfoFarmRequi = $data;
    }

    function RenderInfoFarmRequi(){
        $matriz2 = $this->InfoFarmRequi[0];
        ?>
        <!--Inicia formulario-->
        <!DOCTYPE html PUBLIC "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
        <!-- saved from url=(0056)file:///C:/Users/ezece%C3%B1a/Documents/a21qs-9mamw.html -->
        <html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

            <meta name="ProgId" content="Excel.Sheet">
            <meta name="Generator" content="Aspose.Cell ">
            <link rel="File-List" href="file:///C:/Users/ezece%C3%B1a/Documents/a21qs-9mamw_files/filelist.xml">
            <link rel="Edit-Time-Data" href="file:///C:/Users/ezece%C3%B1a/Documents/a21qs-9mamw_files/editdata.mso">
            <link rel="OLE-Object-Data" href="file:///C:/Users/ezece%C3%B1a/Documents/a21qs-9mamw_files/oledata.mso">
            <!--[if gte mso 9]><xml>
                <o:DocumentProperties>
                    <o:Author>Fcardona</o:Author>
                    <o:LastPrinted>2021-05-06T08:52:07Z</o:LastPrinted>
                    <o:Created>2021-05-06T06:27:03Z</o:Created>
                    <o:LastSaved>2021-05-07T06:51:34Z</o:LastSaved>
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
                    margin:0.31496062992126in 0.236220472440945in 0.31496062992126in 0.590551181102362in;
                    mso-header-margin:0.31496062992126in;
                    mso-footer-margin:0.31496062992126in;
                    mso-page-orientation:Portrait;
                    mso-horizontal-page-align:center;
                    mso-vertical-page-align:center;
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
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font3
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font4
                {
                    color:#FF0000;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font5
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font6
                {
                    color:#000000;
                    font-size:14pt;
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
                    color:#000000;
                    font-size:12pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font9
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font10
                {
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font11
                {
                    color:#000000;
                    font-size:12pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font12
                {
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font13
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font14
                {
                    color:#000000;
                    font-size:24pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif"; }
                .font15
                {
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","sans-serif"; }
                .font16
                {
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:italic;
                    font-family:"Calibri Light","sans-serif"; }
                .font17
                {
                    color:#000000;
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
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x22
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
                .x23
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x24
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:right;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x25
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
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x26
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x27
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
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
                .x28
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    font-size:14pt;
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
                .x29
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    font-size:14pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x30
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x31
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
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
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x33
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x34
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
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
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
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
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
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
                    white-space:normal;
                    word-wrap:break-word;
                    text-align:left;
                    vertical-align:middle;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x38
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x39
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x40
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
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
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
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
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x43
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x44
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
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
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
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
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
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
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
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
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
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
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
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
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
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
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x52
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x53
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x54
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
                .x55
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
                .x56
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    white-space:normal;
                    word-wrap:break-word;
                    text-align:center;
                    vertical-align:bottom;
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
                .x58
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
                .x59
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
                .x60
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
                .x61
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
                .x62
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
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
                .x63
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
                .x64
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
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x65
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
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
                .x68
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:general;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:24pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x69
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
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
                .x70
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
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
                .x71
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:middle;
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
                .x72
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
                .x73
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x74
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
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
                .x75
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
                .x76
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
                .x77
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
                .x78
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x79
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","sans-serif";
                    mso-protection:locked visible;
                }
                .x80
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
                .x81
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
                    mso-protection:locked visible;
                }
                .x82
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
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
                .x83
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x84
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    font-size:11pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    mso-protection:locked visible;
                }
                .x85
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:middle;
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
                .x86
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
                .x87
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x88
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x89
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x90
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x91
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x92
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x93
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x94
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:auto;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri Light","serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x95
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
                -->
            </style>
            <!--[if gte mso 9]><xml>
                <x:ExcelWorkbook>
                    <x:ExcelWorksheets>
                        <x:ExcelWorksheet>
                            <x:Name>REQUISICIONES</x:Name>
                            <x:WorksheetOptions>
                                <x:StandardWidth>2560</x:StandardWidth>
                                <x:FitToPage/>
                                <x:Print>
                                    <x:ValidPrinterInfo/>
                                    <x:PaperSizeIndex>1</x:PaperSizeIndex>
                                    <x:Scale>74</x:Scale>
                                    <x:HorizontalResolution>600</x:HorizontalResolution>
                                    <x:VerticalResolution>600</x:VerticalResolution>
                                </x:Print>
                                <x:ShowPageBreakZoom/>
                                <x:Selected/>
                                <x:TopRowVisible>18</x:TopRowVisible>
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
                    <x:Formula>=REQUISICIONES!$A$1:$K$49</x:Formula>
                </x:ExcelName>
            </xml><![endif]-->
        </head>
        <body link="blue" vlink="purple" class="x22">

        <table border="0" cellpadding="0" cellspacing="0" width="1009" style="border-collapse:
 collapse;table-layout:fixed;width:756pt">
            <colgroup><col class="x22" width="24" style="mso-width-source:userset;width:18pt">
                <col class="x22" width="80" span="5" style="mso-width-source:userset;width:50pt">
                <col class="x22" width="261" style="mso-width-source:userset;width:195.75pt">
                <col class="x22" width="59" span="2" style="mso-width-source:userset;width:44.25pt">
                <col class="x22" width="114" style="mso-width-source:userset;width:85.5pt">
                <col class="x22" width="12" style="mso-width-source:userset;width:70pt">
                <col width="80" style="width:70pt">
            </colgroup><tbody>



            <tr height="20" style="mso-height-source:userset;height:15pt" id="r4">
                <td height="20" class="x23" style="height:15pt;"></td>
                <td class="x23"></td>
                <td class="x23"></td>
                <td class="x23"></td>
                <td class="x23"></td>
                <td class="x23"></td>
                <td class="x23"></td>
                <td class="x23"></td>
                <td class="x23"></td>
                <td class="x23"></td>
                <td class="x23"></td>
                <td class="x22"></td>
            </tr>
            <tr height="20" style="mso-height-source:userset;height:15pt" id="r5">

                <td colspan="3" class="x24"><span style="float:right">Correlativo CGC</span></td>
                <td class="x25">No. <?php echo $matriz2['FarmNumIdRequi']; ?></td>
                <td class="x23"></td>
                <td class="x22"></td>
            </tr>

            <tr height="21" style="mso-height-source:userset;height:15.75pt" id="r7">
                <td height="21" class="x22" style="height:15.75pt;"></td>
                <td class="x22"></td>
                <td class="x22"></td>
                <td class="x22"></td>
                <td class="x22"></td>
                <td class="x22"></td>
                <td class="x22"></td>
                <td class="x22"></td>
                <td class="x22"></td>
                <td class="x22"></td>
                <td class="x22"></td>
                <td class="x22"></td>
            </tr>


            <tr height="60" style="mso-height-source:userset;height:45pt" id="r8">
                <td height="60" class="x22" style="height:45pt;"></td>
                <td class="x30">CODIGO</td>
                <td colspan="5" class="x31" style="border-right:2px solid windowtext;border-bottom:2px solid windowtext;">DESCRIPCIÓN DEL PRODUCTO</td>
                <td colspan="2" class="x87" style="border-right:2px solid windowtext;border-bottom:2px solid windowtext;">CANTIDAD SOLICITADA</td>
                <td class="x34">CANTIDAD DESPACHADA</td>
                <td class="x34">NO. LOTE</td>
                <td class="x34">FECHA VENCIMIENTO</td>
                <td class="x35"></td>
                <td class="x22"></td>
            </tr>

            <?php
            $cont=0;
            foreach ($matriz2['ArrayDetalle'] as $row) {
                $cont++;
                ?>


                <tr height="29" style="mso-height-source:userset;height:10pt" id="r9">
                    <td height="29" class="x22" style="height:10pt;"></td>
                    <td class="x36"><?php echo $row['AlmacNumCodInsumo'] ?></td>
                    <td colspan="5" class="x37" style="border-right:2px solid windowtext;border-bottom:1px solid windowtext;"><?php echo $row['FarmStrDescripcion'] ?></td>
                    <td colspan="2" class="x89" style="border-right:2px solid windowtext;border-bottom:1px solid windowtext;"><?php echo $row['FarmNumCantSolicit'] ?></td>
                    <td class="x40"><?php echo $row['FarmNumCantDespac'] ?></td>
                    <td class="x40"><?php echo $row['FarmStrNolote'] ?></td>
                    <td class="x40"><?php  if($row['FarmDateVencimiento']=='1900-01-01'){
                            echo'No aplica';}else { echo $row['FarmDateVencimiento'] ;} ?></td>
                    <td class="x35"></td>
                    <td class="x22"></td>
                </tr>

            <?php }//Fin de Foreach
            ?>


            <tr height="29" style="mso-height-source:userset;height:10pt" id="r10">
                <td height="29" class="x22" style="height:10pt;"></td>
                <td class="x41"----------</td>
                <td colspan="5" class="x42" style="border-right:2px solid windowtext;border-bottom:1px solid windowtext;">------------------------------Última Línea------------------------------</td>
                <td colspan="2" class="x92" style="border-right:2px solid windowtext;border-bottom:1px solid windowtext;">----------</td>
                <td class="x45">----------</td>
                <td class="x45">----------</td>
                <td class="x45">----------</td>
                <td class="x35"></td>
                <td class="x22"></td>
            </tr>

            <!--El otro php
            -->

            <?php
            for($j=$cont; $j<27; $j++){ ?>
                <tr height="29" style="mso-height-source:userset;height:10pt" id="r11">
                    <td height="29" class="x22" style="height:15pt;"></td>
                    <td class="x41"></td>
                    <td colspan="5" class="x46" style="border-right:2px solid windowtext;border-bottom:1px solid windowtext;"></td>
                    <td colspan="2" class="x92" style="border-right:2px solid windowtext;border-bottom:1px solid windowtext;"></td>
                    <td class="x45"></td>
                    <td class="x45"></td>
                    <td class="x45"></td>
                    <td class="x35"></td>
                    <td class="x22"></td>
                </tr>

            <?php	} ?>


            </tbody></table>



        <style>
            <!--
            .x96
            {
                mso-style-parent:style0;
                mso-number-format:General;
                text-align:general;
                vertical-align:middle;
                white-space:nowrap;
                background:auto;
                mso-pattern:auto;
                color:#000000;
                font-size:14pt;
                font-weight:700;
                font-style:normal;
                font-family:"Calibri Light","serif";
                mso-protection:locked visible;
            }
            .x97
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
        </body></html>
        <!--Termina la estructura php-->

        <?php
    }
}