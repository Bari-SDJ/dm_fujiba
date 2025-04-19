<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Mypage/20002.html */
class __TwigTemplate_31fb526efd3d8a8855bdda67124d83f203c2a152dae1767a335305ed9ac66902 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage/20002.html"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
  <head>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
      <meta name=\"generator\" content=\"PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet\">
      <meta name=\"author\" content=\"藤川 アハメド\" />
      <meta name=\"company\" content=\"Microsoft Corporation\" />
    <style type=\"text/css\">
      html { font-family:meiryo,Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style0 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style1 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style1 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style3 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style3 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style4 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style4 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style5 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style5 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style7 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style8 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style8 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style9 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style9 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style10 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style10 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style11 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#E36C09 }
      th.style11 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#E36C09 }
      td.style12 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:7pt; background-color:#ffffff }
      th.style12 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:7pt; background-color:#ffffff }
      td.style13 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style13 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style14 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style14 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style15 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style15 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style17 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:10pt; background-color:#ffffff }
      th.style17 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#ffffff }
      td.style18 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style18 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      td.style19 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style19 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style20 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      td.style22 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style22 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style23 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style23 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style24 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style24 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style25 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#000000;  font-size:10pt; background-color:white }
      th.style25 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#000000;  font-size:10pt; background-color:white }
      td.style26 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:12pt; background-color:white }
      th.style26 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:12pt; background-color:white }
      td.style27 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style27 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style28 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style28 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style29 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:10pt; background-color:white }
      th.style29 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style30 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style30 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style31 { vertical-align:middle; text-align:left; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:left; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style33 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style33 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style34 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style34 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style35 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style35 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style36 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#000000;  font-size:12pt; background-color:#ffffff }
      th.style36 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:12pt; background-color:#ffffff }
      td.style37 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style37 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style38 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style38 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      td.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:white }
      td.style40 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09;}
      th.style40 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09;}
      td.style41 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style41 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style242 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #ffffff !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#041F30 }
      th.style242 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #ffffff !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#041F30 }
      td.style43 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style43 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style44 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style46 { vertical-align:middle; text-align:center; border-bottom:none #366092; border-top:none #366092; border-left:1px solid  #366092; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      th.style46 { vertical-align:middle; text-align:center; border-bottom:none #366092; border-top:none #366092; border-left:none #366092; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      td.style47 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style47 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style48 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #366092 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style48 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #366092 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style49 { vertical-align:middle; text-align:left; padding-left:5px; border-bottom:1px solid #366092 !important; border-top:1px solid #366092 !important; border-left:1px solid #366092 !important; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      th.style49 { vertical-align:middle; text-align:left; padding-left:5px; border-bottom:1px solid #366092 !important; border-top:1px solid #366092 !important; border-left:1px solid #366092 !important; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      td.style50 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style50 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style51 { vertical-align:middle; text-align:center; border-bottom:1px solid #366092 !important; border-top:1px solid #366092 !important; border-left:1px solid #366092 !important; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30; width:980px;}
      th.style51 { vertical-align:middle; text-align:center; border-bottom:1px solid #366092 !important; border-top:1px solid #366092 !important; border-left:1px solid #366092 !important; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      td.style52 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style52 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:white }
      td.style53 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style53 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style54 { vertical-align:top; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:10pt; background-color:white }
      th.style54 { vertical-align:top; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style55 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#ffffff }
      th.style55 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#ffffff }
      td.style56 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style56 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style57 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style57 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:white }
      td.style58 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style58 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style59 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:10pt; background-color:white }
      th.style59 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:10pt; background-color:white }
      td.style60 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style60 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style61 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#FF0000;  font-size:11pt; background-color:white }
      th.style61 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#FF0000;  font-size:11pt; background-color:white }
      td.style62 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#FF0000;  font-size:11pt; background-color:white }
      th.style62 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#FF0000;  font-size:11pt; background-color:white }
      td.style63 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style63 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style65 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style65 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style66 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style66 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style67 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style67 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style68 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style68 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style69 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style69 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style70 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style70 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style71 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style71 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style72 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style72 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style73 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style73 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style74 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style74 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style75 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style75 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style76 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style76 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style77 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #938953 !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style77 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #938953 !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style78 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style78 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style79 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:1px solid #938953 !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style79 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:1px solid #938953 !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style80 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style80 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style81 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:1px solid #938953 !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style81 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:1px solid #938953 !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style82 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style82 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style83 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:1pt; background-color:white }
      th.style83 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:1pt; background-color:white }
      td.style84 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #ffffff !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style84 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #ffffff !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style85 { vertical-align:top; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style85 { vertical-align:top; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style86 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#ffffff }
      th.style86 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#ffffff }
      td.style87 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style87 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style88 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #072633 !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style88 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #072633 !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style89 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#000000; font-size:8pt; background-color:#FFFFFF }
      th.style89 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#000000; font-size:8pt; background-color:#FFFFFF }      td.style90 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style90 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style91 { vertical-align:top; text-align:left; padding-left:2px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:#DBE5F1 }
      th.style91 { vertical-align:top; text-align:left; padding-left:2px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:#DBE5F1 }
      td.style92 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#17365D;  font-size:10pt; background-color:white }
      th.style92 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#17365D;  font-size:10pt; background-color:white }
      td.style93 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style93 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style94 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style94 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style95 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style95 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style96 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style96 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style97 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style97 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style98 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:7pt; background-color:#000000 }
      th.style98 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:7pt; background-color:#000000 }
      td.style99 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style99 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style100 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:11pt; background-color:#DBE5F1 }
      th.style100 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:11pt; background-color:#DBE5F1 }
      td.style101 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style101 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style102 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style102 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style103 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style103 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style104 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style104 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style105 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style105 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#FF0000;  font-size:11pt; background-color:#366092 }

      td.style200 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:12pt; background-color:#0f374a }
      th.style200 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:12pt; background-color:#0f374a }

      td.style201 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#000000;  font-size:11pt; background-color:#ffffff }
      th.style201 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#000000;  font-size:11pt; background-color:#ffffff }

      td.style203 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-weight:bold; font-size:10pt; background-color:#366092; width: 130px}
      th.style203 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-weight:bold; font-size:10pt; background-color:#366092; width: 130px}

      td.style204 { vertical-align:top; text-align:center; padding-left:2px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:var(--footer02BG) }
      th.style204 { vertical-align:top; text-align:center; padding-left:2px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:var(--footer02BG) }

      table.sheet0 col.col0 { width:3.38888885pt }
      table.sheet0 col.col1 { width:22.19999986pt }
      table.sheet0 col.col2 { width:12.19999986pt }
      table.sheet0 col.col3 { width:12.19999986pt }
      table.sheet0 col.col4 { width:12.19999986pt }
      table.sheet0 col.col5 { width:12.19999986pt }
      table.sheet0 col.col6 { width:12.19999986pt }
      table.sheet0 col.col7 { width:12.19999986pt }
      table.sheet0 col.col8 { width:12.19999986pt }
      table.sheet0 col.col9 { width:12.19999986pt }
      table.sheet0 col.col10 { width:12.19999986pt }
      table.sheet0 col.col11 { width:12.19999986pt }
      table.sheet0 col.col12 { width:12.19999986pt }
      table.sheet0 col.col13 { width:12.19999986pt }
      table.sheet0 col.col14 { width:12.19999986pt }
      table.sheet0 col.col15 { width:12.19999986pt }
      table.sheet0 col.col16 { width:12.19999986pt }
      table.sheet0 col.col17 { width:12.19999986pt }
      table.sheet0 col.col18 { width:12.19999986pt }
      table.sheet0 col.col19 { width:12.19999986pt }
      table.sheet0 col.col20 { width:12.19999986pt }
      table.sheet0 col.col21 { width:15.19999986pt }
      table.sheet0 col.col22 { width:12.19999986pt }
      table.sheet0 col.col23 { width:15.19999986pt }
      table.sheet0 col.col24 { width:12.19999986pt }
      table.sheet0 col.col25 { width:12.19999986pt }
      table.sheet0 col.col26 { width:12.19999986pt }
      table.sheet0 col.col27 { width:12.19999986pt }
      table.sheet0 col.col28 { width:12.19999986pt }
      table.sheet0 col.col29 { width:12.19999986pt }
      table.sheet0 col.col30 { width:12.19999986pt }
      table.sheet0 col.col31 { width:12.19999986pt }
      table.sheet0 col.col32 { width:12.19999986pt }
      table.sheet0 col.col33 { width:12.19999986pt }
      table.sheet0 col.col34 { width:12.19999986pt }
      table.sheet0 col.col35 { width:12.19999986pt }
      table.sheet0 col.col36 { width:12.19999986pt }
      table.sheet0 col.col37 { width:12.19999986pt }
      table.sheet0 col.col38 { width:12.19999986pt }
      table.sheet0 col.col39 { width:12.19999986pt }
      table.sheet0 col.col40 { width:12.19999986pt }
      table.sheet0 col.col41 { width:12.19999986pt }
      table.sheet0 col.col42 { width:12.19999986pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row0 { height:25.5pt }
      table.sheet0 tr.row1 { height:60pt }
      table.sheet0 tr.row2 { height:7.5pt }
      table.sheet0 tr.row3 { height:14.25pt }
      table.sheet0 tr.row4 { height:12pt }
      table.sheet0 tr.row5 { height:12pt }
      table.sheet0 tr.row6 { height:12pt }
      table.sheet0 tr.row7 { height:12pt }
      table.sheet0 tr.row8 { height:12.75pt }
      table.sheet0 tr.row9 { height:12.75pt }
      table.sheet0 tr.row10 { height:12.75pt }
      table.sheet0 tr.row11 { height:7.5pt }
      table.sheet0 tr.row12 { height:12.75pt }
      table.sheet0 tr.row13 { height:12.75pt }
      table.sheet0 tr.row14 { height:12.75pt }
      table.sheet0 tr.row15 { height:12.75pt }
      table.sheet0 tr.row16 { height:12.75pt }
      table.sheet0 tr.row17 { height:12.75pt }
      table.sheet0 tr.row18 { height:12.75pt }
      table.sheet0 tr.row19 { height:12.75pt }
      table.sheet0 tr.row20 { height:12.75pt }
      table.sheet0 tr.row21 { height:12.75pt }
      table.sheet0 tr.row22 { height:12.75pt }
      table.sheet0 tr.row23 { height:12.75pt }
      table.sheet0 tr.row24 { height:12.75pt }
      table.sheet0 tr.row25 { height:12.75pt }
      table.sheet0 tr.row26 { height:12.75pt }
      table.sheet0 tr.row27 { height:12.75pt }
      table.sheet0 tr.row28 { height:12.75pt }
      table.sheet0 tr.row29 { height:12.75pt }
      table.sheet0 tr.row30 { height:12.75pt }
      table.sheet0 tr.row31 { height:12.75pt }
      table.sheet0 tr.row32 { height:12.75pt }
      table.sheet0 tr.row33 { height:12.75pt }
      table.sheet0 tr.row34 { height:12.75pt }
      table.sheet0 tr.row35 { height:12.75pt }
      table.sheet0 tr.row36 { height:12.75pt }
      table.sheet0 tr.row37 { height:12.75pt }
      table.sheet0 tr.row38 { height:12.75pt }
      table.sheet0 tr.row39 { height:12.75pt }
      table.sheet0 tr.row40 { height:12.75pt }
      table.sheet0 tr.row41 { height:12pt }
      table.sheet0 tr.row42 { height:7.5pt }
      table.sheet0 tr.row43 { height:12.75pt }
      table.sheet0 tr.row44 { height:12.75pt }
      table.sheet0 tr.row45 { height:12.75pt }
      table.sheet0 tr.row46 { height:7.5pt }
      table.sheet0 tr.row47 { height:12.75pt }
      table.sheet0 tr.row48 { height:12.75pt }
      table.sheet0 tr.row49 { height:12.75pt }
      table.sheet0 tr.row50 { height:12.75pt }
      table.sheet0 tr.row51 { height:12.75pt }
      table.sheet0 tr.row52 { height:7.5pt }
      table.sheet0 tr.row53 { height:12.75pt }
      table.sheet0 tr.row54 { height:12.75pt }
      table.sheet0 tr.row55 { height:12.75pt }
      table.sheet0 tr.row56 { height:12.75pt }
      table.sheet0 tr.row57 { height:12.75pt }
      table.sheet0 tr.row58 { height:12pt }
      table.sheet0 tr.row59 { height:12pt }
      table.sheet0 tr.row60 { height:12pt }
      table.sheet0 tr.row61 { height:12pt }
      table.sheet0 tr.row62 { height:12pt }
      table.sheet0 tr.row63 { height:12pt }
      table.sheet0 tr.row64 { height:12pt }
      table.sheet0 tr.row65 { height:12pt }
      table.sheet0 tr.row66 { height:12pt }
      table.sheet0 tr.row67 { height:12pt }
      table.sheet0 tr.row68 { height:12pt }
      table.sheet0 tr.row69 { height:12pt }
      table.sheet0 tr.row70 { height:12pt }
      table.sheet0 tr.row71 { height:12pt }
      table.sheet0 tr.row72 { height:12pt }
      table.sheet0 tr.row73 { height:12pt }
      table.sheet0 tr.row74 { height:12pt }
      table.sheet0 tr.row75 { height:12pt }
      table.sheet0 tr.row76 { height:12pt }
      table.sheet0 tr.row77 { height:12pt }
      table.sheet0 tr.row78 { height:12pt }
 
 #partners {
  /*background-color: #eee;*/
  white-space: nowrap;
}

.logo-image {
  vertical-align: middle;
  padding: 2px;
  display: table-cell;
}

.logo-image img {
  max-width: 100%;
}

td input, td button {

  width:100%;
  height:100%;
  background-color: #f7f6f3;
  border: hidden;
}

td select {
  width:100%;
  height:100%;
  border: hidden;
}

/* input[type=number] start */
input[type=number] {text-align: right;}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
/* input[type=number] end */


    </style>
  </head>
";
        // line 417
        $this->displayBlock('javascript', $context, $blocks);
        // line 737
        echo "  <body onload=\"javascript:calculationPricebm()\">
<style>
@page { margin-left: 0.59055118110236in; margin-right: 0.59055118110236in; margin-top: 0.59055118110236in; margin-bottom: 0.59055118110236in; }

</style>
<style type=\"text/css\">.asd {
  background: rgba(0, 0, 0, 0);
  border: none;
}

</style>

<div id=\"status\"></div>
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"sheet0\" class=\"sheet0\" style=\"margin-left: auto; margin-right: auto;\">
        <col class=\"col0\">
        <col class=\"col1\">
        <col class=\"col2\">
        <col class=\"col3\">
        <col class=\"col4\">
        <col class=\"col5\">
        <col class=\"col6\">
        <col class=\"col7\">
        <col class=\"col8\">
        <col class=\"col9\">
        <col class=\"col10\">
        <col class=\"col11\">
        <col class=\"col12\">
        <col class=\"col13\">
        <col class=\"col14\">
        <col class=\"col15\">
        <col class=\"col16\">
        <col class=\"col17\">
        <col class=\"col18\">
        <col class=\"col19\">
        <col class=\"col20\">
        <col class=\"col21\">
        <col class=\"col22\">
        <col class=\"col23\">
        <col class=\"col24\">
        <col class=\"col25\">
        <col class=\"col26\">
        <col class=\"col27\">
        <col class=\"col28\">
        <col class=\"col29\">
        <col class=\"col30\">
        <col class=\"col31\">
        <col class=\"col32\">
        <col class=\"col33\">
        <col class=\"col34\">
        <col class=\"col35\">
        <col class=\"col36\">
        <col class=\"col37\">

        <tbody>
        <!-- pdf file name -->
                    <input type=\"hidden\" value=\"\" name=\"pdfFileName\" id=\"pdfFileNameId\">
                    <input type=\"hidden\" value=\"";
        // line 793
        echo twig_escape_filter($this->env, (isset($context["CustomerId"]) || array_key_exists("CustomerId", $context) ? $context["CustomerId"] : (function () { throw new RuntimeError('Variable "CustomerId" does not exist.', 793, $this->source); })()), "html", null, true);
        echo "\" name=\"customerId\" id=\"\">
                    <input type=\"hidden\" value=\"";
        // line 794
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 794, $this->source); })()), "image0", [], "array", false, false, false, 794), "html", null, true);
        echo "\" name=\"14_1\">
                    <input type=\"hidden\" value=\"";
        // line 795
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 795, $this->source); })()), "image1", [], "array", false, false, false, 795), "html", null, true);
        echo "\" name=\"14_2\">
                    <input type=\"hidden\" value=\"";
        // line 796
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 796, $this->source); })()), "image2", [], "array", false, false, false, 796), "html", null, true);
        echo "\" name=\"14_3\">
                    <input type=\"hidden\" value=\"";
        // line 797
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 797, $this->source); })()), "image3", [], "array", false, false, false, 797), "html", null, true);
        echo "\" name=\"14_4\">
                    <input type=\"hidden\" value=\"";
        // line 798
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 798, $this->source); })()), "image4", [], "array", false, false, false, 798), "html", null, true);
        echo "\" name=\"14_5\">
                    <input type=\"hidden\" value=\"";
        // line 799
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 799, $this->source); })()), "image5", [], "array", false, false, false, 799), "html", null, true);
        echo "\" name=\"14_6\">
                    <input type=\"hidden\" value=\"";
        // line 800
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 800, $this->source); })()), "request", [], "any", false, false, false, 800), "basePath", [], "any", false, false, false, 800), "html", null, true);
        echo "\" name=\"uploadPath\" id=\"uploadPath\">
          <tr class=\"row0\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style51 s style43-bk\" colspan=\"25\">御見積書</td>
            <td class=\"column26 style46 e style48-bk\" colspan=\"11\" rowspan=\"2\"> <img src=\"";
        // line 804
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 804, $this->source); })()), "request", [], "any", false, false, false, 804), "schemeAndHttpHost", [], "any", false, false, false, 804), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 804, $this->source); })()), "request", [], "any", false, false, false, 804), "basePath", [], "any", false, false, false, 804), "html", null, true);
        echo "/html/upload/save_image/companyLogo/";
        echo twig_escape_filter($this->env, (isset($context["CustomerId"]) || array_key_exists("CustomerId", $context) ? $context["CustomerId"] : (function () { throw new RuntimeError('Variable "CustomerId" does not exist.', 804, $this->source); })()), "html", null, true);
        echo ".png\" style=\"width: 50%;\"/></td>
            <td class=\"column37 style1 null\"></td>

          </tr>
          <tr class=\"row1\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style242 s\" colspan=\"2\">販売店</td>
            <td class=\"column3 style49 s style43\" colspan=\"23\"><input type=\"hidden\" value=\"&nbsp;<br>&nbsp;";
        // line 811
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 811, $this->source); })()), "CompanyName", [], "array", false, false, false, 811), "html", null, true);
        echo "<br />
&nbsp;本店：TEL ";
        // line 812
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 812, $this->source); })()), "CompanyPhone", [], "array", false, false, false, 812), "html", null, true);
        echo "<br>\" name=\"0_1\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 812, $this->source); })()), "CompanyName", [], "array", false, false, false, 812), "html", null, true);
        echo "<br />
本店：TEL ";
        // line 813
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 813, $this->source); })()), "CompanyPhone", [], "array", false, false, false, 813), "html", null, true);
        echo "</td>
            <td class=\"column37 style2 null\"></td>

          </tr>
          <tr class=\"row2\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style2 null\"></td>
            <td class=\"column2 style2 null\"></td>
            <td class=\"column3 style2 null\"></td>
            <td class=\"column4 style2 null\"></td>
            <td class=\"column5 style2 null\"></td>
            <td class=\"column6 style2 null\"></td>
            <td class=\"column7 style2 null\"></td>
            <td class=\"column8 style2 null\"></td>
            <td class=\"column9 style2 null\"></td>
            <td class=\"column10 style2 null\"></td>
            <td class=\"column11 style2 null\"></td>
            <td class=\"column12 style2 null\"></td>
            <td class=\"column13 style2 null\"></td>
            <td class=\"column14 style2 null\"></td>
            <td class=\"column15 style2 null\"></td>
            <td class=\"column16 style2 null\"></td>
            <td class=\"column17 style2 null\"></td>
            <td class=\"column18 style2 null\"></td>
            <td class=\"column19 style2 null\"></td>
            <td class=\"column20 style2 null\"></td>
            <td class=\"column21 style2 null\"></td>
            <td class=\"column22 style2 null\"></td>
            <td class=\"column23 style2 null\"></td>
            <td class=\"column24 style2 null\"></td>
            <td class=\"column25 style2 null\"></td>
            <td class=\"column26 style2 null\"></td>
            <td class=\"column27 style2 null\"></td>
            <td class=\"column28 style2 null\"></td>
            <td class=\"column29 style2 null\"></td>
            <td class=\"column30 style2 null\"></td>
            <td class=\"column31 style2 null\"></td>
            <td class=\"column32 style2 null\"></td>
            <td class=\"column33 style2 null\"></td>
            <td class=\"column34 style2 null\"></td>
            <td class=\"column35 style2 null\"></td>
            <td class=\"column36 style2 null\"></td>
            <td class=\"column37 style2 null\"></td>

          </tr>
          <tr class=\"row3\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style44 s style15\" colspan=\"14\">宛名</td>
            <td class=\"column15 style103 s style104\" colspan=\"17\">ご検討の車種</td>
            <td class=\"column15 style200 s style104\" colspan=\"5\">登録番号</td>

          </tr>
          <tr class=\"row4\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style41 s style15\" colspan=\"2\" rowspan=\"2\">宛先</td>
            <td class=\"column3 style26 s style25\" colspan=\"12\" rowspan=\"2\"><input type=\"text\" value=\"◯◯◯様\" name=\"1_1\" id=\"clientName\"></td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">作成日</td>
            <td class=\"column19 style31 f style15\" colspan=\"4\"><input type=\"date\" value=\"2024/10/09\" name=\"1_2\"></td>
            <td class=\"column23 style37 s style15\" colspan=\"4\">有効期限</td>
            <td class=\"column27 style31 f style15\" colspan=\"5\"><input type=\"date\" value=\"2024/11/09\" name=\"1_3\"></td>
            <td class=\"column32 style201 s style25\" colspan=\"5\">";
        // line 873
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 873, $this->source); })()), "CompanyRegistrationNumber", [], "array", false, false, false, 873), "html", null, true);
        echo "<input type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 873, $this->source); })()), "CompanyRegistrationNumber", [], "array", false, false, false, 873), "html", null, true);
        echo "\" name=\"10_1\" id=\"10_1\"></td>

          </tr>
          <tr class=\"row5\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">車種</td>
            <td class=\"column19 style38 s style15\" colspan=\"4\"><input type=\"text\" value=\"";
        // line 879
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 879, $this->source); })()), "CarModel", [], "array", false, false, false, 879), "html", null, true);
        echo "\" name=\"1_4\"></td>
            <td class=\"column23 style37 s style15\" colspan=\"4\">カラー</td>
            <td class=\"column27 style31 f style15\" colspan=\"5\"><input type=\"text\" value=\"";
        // line 881
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 881, $this->source); })()), "Color", [], "array", false, false, false, 881), "html", null, true);
        echo "\" name=\"1_4_1\"></td>
            <td class=\"column32 style200 f style25\" colspan=\"5\">古物商許可</td>

          </tr>
          <tr class=\"row6\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style22 s style25-bk\" colspan=\"2\" rowspan=\"2\">住所</td>
            <td class=\"column3 style29 s style25\" colspan=\"12\" rowspan=\"2\"><input type=\"text\" value=\"------\" name=\"1_5\"></td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">車台番号</td>
            <td class=\"column19 style38 s style15\" colspan=\"13\"><input type=\"text\" value=\"";
        // line 890
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 890, $this->source); })()), "ChassisNumber", [], "array", false, false, false, 890), "html", null, true);
        echo "\" name=\"1_6\" id=\"ChassisNumberID\"></td>
            <td class=\"column32 style201 f style15\" colspan=\"5\">";
        // line 891
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 891, $this->source); })()), "CompanyLicenseNumber", [], "array", false, false, false, 891), "html", null, true);
        echo "<input type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 891, $this->source); })()), "CompanyLicenseNumber", [], "array", false, false, false, 891), "html", null, true);
        echo "\" name=\"10_2\" id=\"10_2\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row7\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">排気量</td>
            <td class=\"column19 style18 s style15\" colspan=\"4\"><input type=\"text\" value=\"";
        // line 902
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 902, $this->source); })()), "Displacement", [], "array", false, false, false, 902), "html", null, true);
        echo "\" name=\"1_7\"></td>
            <td class=\"column23 style30 s style15\" colspan=\"4\">メーカー</td>
            <td class=\"column27 style18 s style15\" colspan=\"5\"><input type=\"text\" value=\"";
        // line 904
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 904, $this->source); })()), "Manufacturer", [], "array", false, false, false, 904), "html", null, true);
        echo "\" name=\"1_8\"></td>
            <td class=\"column32 style203 f style25\" colspan=\"5\" rowspan=\"2\">ご請求予定金額</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row8\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style40 s style15\" colspan=\"2\">メール</td>
            <td class=\"column3 style39 s style15\" colspan=\"12\"><input type=\"text\" value=\"------\" name=\"1_9\"></td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">年式</td>
            <td class=\"column19 style18 s style15\" colspan=\"4\"><input type=\"text\" value=\"";
        // line 918
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 918, $this->source); })()), "Year", [], "array", false, false, false, 918), "html", null, true);
        echo "\" name=\"1_10\"></td>
            <td class=\"column23 style30 s style15\" colspan=\"4\">走行距離</td>
            <td class=\"column27 style18 s style15\" colspan=\"5\"><input type=\"text\" value=\"";
        // line 920
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 920, $this->source); })()), "Mileage", [], "array", false, false, false, 920), "html", null, true);
        echo "\" name=\"1_11\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row9\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style41 s style15\" colspan=\"2\">電話</td>
            <td class=\"column3 style39 s style15\" colspan=\"12\"><input type=\"text\" value=\"------\" name=\"1_13\"></td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">ドア数</td>
            <td class=\"column19 style18 s style15\" colspan=\"4\"><input type=\"text\" value=\"";
        // line 933
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 933, $this->source); })()), "NumberOfDoors", [], "array", false, false, false, 933), "html", null, true);
        echo "\" name=\"1_14\"></td>
            <td class=\"column23 style30 s style15\" colspan=\"4\">修復歴</td>
            <td class=\"column27 style21 s style15\" colspan=\"5\"><input type=\"text\" value=\"";
        // line 935
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 935, $this->source); })()), "RepairHistory", [], "array", false, false, false, 935), "html", null, true);
        echo "\" name=\"1_15\"></td>
            <td class=\"column32 style36 f style25\" colspan=\"5\" rowspan=\"2\"><input type=\"text\" value=\"¥0\" name=\"1_12\" id=\"1_12\"  class=\"asd\" readonly style=\"text-align:center;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row10\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style41 s style15\" colspan=\"2\">Fax</td>
            <td class=\"column3 style39 s style15\" colspan=\"12\"><input type=\"text\" value=\"------\" name=\"1_16\"></td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">車検</td>
            <td class=\"column19 style59 s style15\" colspan=\"4\"><input type=\"text\" value=\"";
        // line 949
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 949, $this->source); })()), "VehicleInspection", [], "array", false, false, false, 949), "html", null, true);
        echo "\" name=\"1_17\"></td>
            <td class=\"column23 style30 s style15\" colspan=\"4\">保証内容</td>
            <td class=\"column27 style59 s style15\" colspan=\"5\"><input type=\"text\" value=\"\" name=\"1_18\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row11\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style55 s style34\" colspan=\"36\" rowspan=\"2\">下記の通りお見積り申し上げます</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row12\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row13\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style102 s style25\" colspan=\"2\" rowspan=\"5\">車両販売価格(内税)</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">車両体価格</td>
            <td class=\"column14 style52 n style15\" colspan=\"9\"><input type=\"number\" value=\"";
        // line 982
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 982, $this->source); })()), "VehiclePrice", [], "array", false, false, false, 982), "html", null, true);
        echo "\" id=\"2_1\" name=\"2_1\" onkeyup=\"calculationPricebm(this.value)\"></td>

            <td class=\"column23 style53 s style15\" colspan=\"14\">下取車種</td>
            <td class=\"column33 style3-bk null\"></td>
            <td class=\"column34 style3 null\"></td>
            <td class=\"column35 style3 null\"></td>
            <td class=\"column36 style3 null\"></td>
            <td class=\"column37 style4 null\"></td>
            <td class=\"column38 style4 null\"></td>
            <td class=\"column39 style4 null\"></td>
            <td class=\"column40 style4 null\"></td>
            <td class=\"column41 style4 null\"></td>
            <td class=\"column42 style4 null\"></td>
          </tr>
          <tr class=\"row14\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">追加明細合計</td>
            <td class=\"column14 style52 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_2\" id=\"2_2\"  onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">下取車名</td>
            <td class=\"column27 style54 s style15\" colspan=\"10\"><input type=\"text\" value=\"------\" name=\"2_3\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row15\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">車陸送代</td>
            <td class=\"column14 style57 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_4\" id=\"2_4\"  onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">色</td>
            <td class=\"column27 style54 s style15\" colspan=\"10\"><input type=\"text\" value=\"------\" name=\"2_5\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row16\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">陸送費用</td>
            <td class=\"column14 style57 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_6\" id=\"2_6\"  onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">車体番号</td>
            <td class=\"column27 style54 s style15\" colspan=\"10\"><input type=\"text\" value=\"------\" name=\"2_7\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row17\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style45 s style15\" colspan=\"11\">車両価格①</td>
            <td class=\"column14 style58 f style15\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"2_30\" id=\"2_30\"  class=\"asd\" readonly style=\"text-align:right;\"><!-- <label id=\"2_30\">￥0</label><input type=\"text\" value=\"\" name=\"2_30\" id=\"2_30\" style=\"color:black;\"> --></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">走行距離</td>
            <td class=\"column27 style54 s style15\" colspan=\"10\"><input type=\"text\" value=\"------\" name=\"2_8\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row18\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style64 s style66-bk\" rowspan=\"24\">諸費用内訳</td>
            <td class=\"column2 style64 s style66-bk\" rowspan=\"5\">非課税分</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">環境性能割</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_9\" id=\"2_9\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style16 s style15\" colspan=\"14\">下取車価格(内税)</td>

            
            
            
            
            
          </tr>
          <tr class=\"row19\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">自動車税</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_10\" id=\"2_10\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">車両本体価格</td>
            <td class=\"column27 style17 s style15\" colspan=\"10\"><input type=\"number\" value=\"0\" name=\"2_11\" id=\"2_11\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row20\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">非課税分 自賠責保険料</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_12\" id=\"2_12\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">陸送代</td>
            <td class=\"column27 style17 s style15\" colspan=\"10\"><input type=\"number\" value=\"0\" name=\"2_13\" id=\"2_13\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row21\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">重量税</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_14\" id=\"2_14\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style16 s style15\" colspan=\"4\" rowspan=\"3\">その他</td>
            <td class=\"column27 style17 s style15\" colspan=\"10\"><input type=\"number\" value=\"0\" name=\"2_15\" id=\"2_15\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row22\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">リサイクル預託金</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_16\" id=\"2_16\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column27 style17 s style15\" colspan=\"10\"><input type=\"number\" value=\"0\" name=\"2_17\" id=\"2_17\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            <td class=\"column41 style6 null\"></td>
            
          </tr>
          <tr class=\"row23\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column2 style105 s style66\" rowspan=\"3\">値引き</td>
            <td class=\"column3 style62 s style15\" colspan=\"11\">下取り車価格(-)</td>
            <td class=\"column14 style61 n style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_18\" id=\"2_18\" readonly onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column27 style17 s style15\" colspan=\"10\"><input type=\"number\" value=\"0\" name=\"2_19\" id=\"2_19\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row24\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style62 s style15\" colspan=\"11\">
            <input list=\"browsers\" name=\"5_1\" id=\"5_1\" style=\"background:#f2e9a1\">
            <datalist id=\"browsers\">
              <option value=\"夏キャンペーン(-)\">
              <option value=\"冬キャンペーン(-)\">
              <option value=\"特別キャンペーン (-)\">
            </datalist>

            
            </td>
            <td class=\"column14 style61 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_20\" id=\"2_20\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"9\">（内消費税・10%）</td>
            <td class=\"column32 style7 f\" colspan=\"5\"><input type=\"text\" value=\"¥0\" name=\"2_21\" id=\"2_21\"  class=\"asd\" readonly style=\"text-align:right;\"></td>

            
            
            
            
            
          </tr>
          <tr class=\"row25\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style62 s style15\" colspan=\"11\">
            <!--
            <select name=\"5_2\" id=\"5_2\" style=\"height:29px;\">>
              <option value=\"特別値引き(-)\">特別値引き(-)</option>
              <option value=\"売買仮契約預り金 (-)\">売買仮契約預り金 (-)</option>
              <option value=\"-\">-</option>
            </select>
            -->
            <input list=\"browsers2\" name=\"5_2\" id=\"5_2\" style=\"background:#f2e9a1\">
            <datalist id=\"browsers2\">
              <option value=\"特別値引き(-)\">
              <option value=\"売買仮契約預り金 (-)\">
            </datalist>
            </td>
            <td class=\"column14 style61 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_22\" id=\"2_22\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"9\">下取り車合計</td>
            <td class=\"column32 style7 f\" colspan=\"5\"><input type=\"text\" value=\"¥0\" name=\"2_23\" id=\"2_23\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column33 style10-bk null\"></td>
            <td class=\"column34 style10 null\"></td>
            <td class=\"column35 style10 null\"></td>
            <td class=\"column36 style10 null\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row26\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column2 style45 s style15\" colspan=\"12\">非課税分小計②</td>
            <td class=\"column14 style60 f style15\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"2_24\" id=\"2_24\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column23 style86 s style88-bk\" colspan=\"14\">
<!--
<div class=\"first\">車両写真
  <p><input type=\"file\" accept=\"image/*\" name=\"image\" id=\"file\" onchange=\"loadFile(event)\"></p>
  <p><img id=\"output\" width=\"200\" /></p>
</div>
-->
            </td>
            <td class=\"column33 style11-bk null\"></td>
            <td class=\"column34 style11 null\"></td>
            <td class=\"column35 style11 null\"></td>
            <td class=\"column36 style11 null\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>

          
          <tr class=\"row27\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column2 style67 s style66\" rowspan=\"13\">税対象(内税)</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">檢查登錄代行費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_1\" id=\"3_1\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style89 null style25\" colspan=\"14\" rowspan=\"19\">
            <div id=\"partners\">
                <div class=\"logo-image\"><img id=\"img1\" style=\"width: 185px; height: 160px;\" src=\"";
        // line 1210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1210, $this->source); })()), "image0", [], "array", false, false, false, 1210), "html", null, true);
        echo "\" border=\"0\" /></div>
                <div class=\"logo-image\"><img id=\"img2\" style=\"width: 185px; height: 160px;\" src=\"";
        // line 1211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1211, $this->source); })()), "image1", [], "array", false, false, false, 1211), "html", null, true);
        echo "\" border=\"0\" /></div>
            </div>
            <div id=\"partners\">
                <div class=\"logo-image\"><img id=\"img3\" style=\"width: 185px; height: 160px;\" src=\"";
        // line 1214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1214, $this->source); })()), "image2", [], "array", false, false, false, 1214), "html", null, true);
        echo "\" border=\"0\" /></div>
                <div class=\"logo-image\"><img id=\"img4\" style=\"width: 185px; height: 160px;\" src=\"";
        // line 1215
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1215, $this->source); })()), "image3", [], "array", false, false, false, 1215), "html", null, true);
        echo "\" border=\"0\" /></div>
            </div>
            <div id=\"partners\">
                <div class=\"logo-image\"><img id=\"img5\" style=\"width: 185px; height: 160px;\" src=\"";
        // line 1218
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1218, $this->source); })()), "image4", [], "array", false, false, false, 1218), "html", null, true);
        echo "\" border=\"0\" /></div>
                <div class=\"logo-image\"><img id=\"img6\" style=\"width: 185px; height: 160px;\" src=\"";
        // line 1219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1219, $this->source); })()), "image5", [], "array", false, false, false, 1219), "html", null, true);
        echo "\" border=\"0\" /></div>
            </div>
            </td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row28\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">車庫証明代行費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_2\" id=\"3_2\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row29\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">納車点検費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_3\" id=\"3_3\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row30\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">納車費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_4\" id=\"3_4\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row31\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">下取車諸手続き代行費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_5\" id=\"3_5\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row32\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">整備、車検、登錄諸費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"";
        // line 1276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1276, $this->source); })()), "OtherPrice", [], "array", false, false, false, 1276), "html", null, true);
        echo "\" name=\"3_6\" id=\"3_6\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row33\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">名義変更費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_7\" id=\"3_7\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row34\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">希望ナンバー費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_8\" id=\"3_8\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row35\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\"><input type=\"text\" value=\"\" name=\"30_1\" id=\"30_1\" style=\"background:#f2e9a1\"></td>
            <td class=\"column14 style19 n style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_9\" id=\"3_9\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row36\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\"><input type=\"text\" value=\"\" name=\"30_2\" id=\"30_2\" style=\"background:#f2e9a1\"></td>
            <td class=\"column14 style19 n style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_10\" id=\"3_10\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row37\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\"><input type=\"text\" value=\"\" name=\"30_3\" id=\"30_3\" style=\"background:#f2e9a1\"></td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_11\" id=\"3_11\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row38\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\"><input type=\"text\" value=\"\" name=\"30_4\" id=\"30_4\" style=\"background:#f2e9a1\"></td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_12\" id=\"3_12\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row39\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\"><input type=\"text\" value=\"\" name=\"30_5\" id=\"30_5\" style=\"background:#f2e9a1\"></td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_13\" id=\"3_13\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row40\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column2 style30 s style15\" colspan=\"12\">諸費用（ 課税分）  小計③</td>
            <td class=\"column14 style63 f style15\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"3_14\" id=\"3_14\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row41\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column2 style30 s style15\" colspan=\"12\">諸費用合計②+③ </td>
            <td class=\"column14 style63 f style15\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"3_15\" id=\"3_15\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row42\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style83 f style84-bk\" colspan=\"22\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row43\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style68 s style70-bk\" colspan=\"13\">小計＝①＋②＋③</td>
            <td class=\"column14 style77 f style78-bk\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"3_16\" id=\"3_16\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row44\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style71 s style73-bk\" colspan=\"13\">（内消費税①と③の10%）</td>
            <td class=\"column14 style79 f style80-bk\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"3_17\" id=\"3_17\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row45\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style74 s style76-bk\" colspan=\"13\">支払合計金額（ 税込）</td>
            <td class=\"column14 style81 f style82-bk\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"3_18\" id=\"3_18\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row46\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style92 null style84\" colspan=\"36\"></td>
            <td class=\"column37 style1 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row47\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style93 s style66\" rowspan=\"5\">振込先</td>
            <td class=\"column2 style91 s style25\" colspan=\"19\" rowspan=\"5\">";
        // line 1439
        echo nl2br(twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1439, $this->source); })()), "BankInfo", [], "array", false, false, false, 1439));
        echo "<textarea style=\"display:none;\" name=\"4_1\" id=\"4_1\"  class=\"asd\" readonly\"><br>";
        echo nl2br(twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1439, $this->source); })()), "BankInfo", [], "array", false, false, false, 1439));
        echo "</textarea></td>
            <td class=\"column21 style97 s style24\" rowspan=\"5\">お問合せ</td>
            <td class=\"column22 style204 s style25\" colspan=\"15\" rowspan=\"5\">";
        // line 1441
        echo nl2br(twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1441, $this->source); })()), "Display01", [], "array", false, false, false, 1441));
        echo "<textarea style=\"display:none;\" name=\"4_2\" id=\"4_2\"  class=\"asd\" readonly\"><br>";
        echo nl2br(twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1441, $this->source); })()), "Display01", [], "array", false, false, false, 1441));
        echo "</textarea></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row48\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row49\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row50\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row51\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row52\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style101 null style14\" colspan=\"36\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row53\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style94 s style96-bk\" rowspan=\"5\">特記事項</td>
            <td class=\"column2 style100 s style25\" colspan=\"35\" rowspan=\"5\">毎度ありがとうございます。<br />
表題の通り、見積もり書をお送りいたしますので、ご査収ください。<br />
ご不明点がございましたら、<label id=\"4_3\">";
        // line 1500
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1500, $this->source); })()), "CompanyPhone", [], "array", false, false, false, 1500), "html", null, true);
        echo "</label><input type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["siteInfo"]) || array_key_exists("siteInfo", $context) ? $context["siteInfo"] : (function () { throw new RuntimeError('Variable "siteInfo" does not exist.', 1500, $this->source); })()), "CompanyPhone", [], "array", false, false, false, 1500), "html", null, true);
        echo "\" name=\"4_3\">までお問合せください。<br />
今後ともどうぞよろしくお願いいたします。</td>
            <td class=\"column37 style1 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row54\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row55\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row56\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row57\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row58\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style98 null style99\" colspan=\"32\"></td>
            <td class=\"column33 style12 null\"></td>
            <td class=\"column34 style12 null\"></td>
            <td class=\"column35 style12 null\"></td>
            <td class=\"column36 style12 null\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row59\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style2 null\"></td>
            <td class=\"column2 style2 null\"></td>
            <td class=\"column3 style2 null\"></td>
            <td class=\"column4 style2 null\"></td>
            <td class=\"column5 style2 null\"></td>
            <td class=\"column6 style2 null\"></td>
            <td class=\"column7 style2 null\"></td>
            <td class=\"column8 style2 null\"></td>
            <td class=\"column9 style2 null\"></td>
            <td class=\"column10 style2 null\"></td>
            <td class=\"column11 style2 null\"></td>
            <td class=\"column12 style2 null\"></td>
            <td class=\"column13 style2 null\"></td>
            <td class=\"column14 style2 null\"></td>
            <td class=\"column15 style2 null\"></td>
            <td class=\"column16 style2 null\"></td>
            <td class=\"column17 style2 null\"></td>
            <td class=\"column18 style2 null\"></td>
            <td class=\"column19 style2 null\"></td>
            <td class=\"column20 style2 null\"></td>
            <td class=\"column21 style2 null\"></td>
            <td class=\"column22 style2 null\"></td>
            <td class=\"column23 style2 null\"></td>
            <td class=\"column24 style2 null\"></td>
            <td class=\"column25 style2 null\"></td>
            <td class=\"column26 style2 null\"></td>
            <td class=\"column27 style2 null\"></td>
            <td class=\"column28 style2 null\"></td>
            <td class=\"column29 style2 null\"></td>
            <td class=\"column30 style2 null\"></td>
            <td class=\"column31 style2 null\"></td>
            <td class=\"column32 style2 null\"></td>
            <td class=\"column33 style2 null\"></td>
            <td class=\"column34 style2 null\"></td>
            <td class=\"column35 style2 null\"></td>
            <td class=\"column36 style2 null\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
 
            
            
            
          </tr>
        </tbody>
    </table>
  </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 417
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 418
        echo "<script src=\"https://requirejs.org/docs/release/2.3.5/minified/require.js\"></script>
   <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
 
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
    <script type=\"text/javascript\">


document.getElementById('myInput').addEventListener('change', function() {
    alert('The value has changed to: ' + this.value);
});

  document.addEventListener(\"DOMContentLoaded\", function() {
    // Select the field by its ID
    const myField = document.getElementById('myField');

    // Listen for changes to the field
    myField.addEventListener('change', function() {
      const myFieldValue = myField.value;
      console.log(myFieldValue); // Outputs the new value when the field changes
      alert(\"bm\");
    });
  });

  function validateAndSubmit() {

      let isValid = true;

 
      if (isValid) {
        i= document.getElementById('myForm');
        doubleSubmit(i); //submit for pdf
        i.submit();      //submit for database
      }


    }
    function calculationPricebm(value) {
//alert(\"bm3\");
        // generate serialNo
        const serialNoField = document.getElementById('serialNoId');


        var currentdate = new Date(); 
        var datetime = String(currentdate.getFullYear().toString().substr(-2))
                      + String((currentdate.getMonth()+1)).padStart(2, '0')
                      + String(currentdate.getDate()).padStart(2, '0')
                      + String(currentdate.getHours()).padStart(2, '0')
                      + String(currentdate.getMinutes()).padStart(2, '0');


          
        //const pdfFileTextField = document.getElementById('pdfFileNameId');
        //pdfFileTextField.value = fileName;
        document.getElementById('2_18').value = document.getElementById('2_11').value;
        
        //alert('The value has changed to: ' + value);
        var part2_1 = document.getElementById('2_1');
        var part2_2 = document.getElementById('2_2');
        var part2_4 = document.getElementById('2_4');
        var part2_6 = document.getElementById('2_6');
        
        var part1_total = document.getElementById('2_30');

        part2_1_val = part2_1.value;
        part2_2_val = part2_2.value;
        part2_4_val = part2_4.value;
        part2_6_val = part2_6.value;

        if (part2_1_val == \"\") part2_1_val = 0;
        if (part2_2_val == \"\") part2_2_val = 0;
        if (part2_4_val == \"\") part2_4_val = 0;
        if (part2_6_val == \"\") part2_6_val = 0;

        allPart1 = parseInt(part2_1_val) + parseInt(part2_2_val) + parseInt(part2_4_val) + parseInt(part2_6_val);
        part1_total.value = allPart1;
        document.getElementById('2_30').value = \"￥\" + part1_total.value.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");
        
        //2nd part
        var part2_9 = document.getElementById('2_9');
        var part2_10 = document.getElementById('2_10');
        var part2_12 = document.getElementById('2_12');
        var part2_14 = document.getElementById('2_14');
        var part2_16 = document.getElementById('2_16');
        var part2_18 = document.getElementById('2_18');
        var part2_20 = document.getElementById('2_20');
        var part2_22 = document.getElementById('2_22');

        var part2_total = document.getElementById('2_24');

        part2_9_val = part2_9.value;
        part2_10_val = part2_10.value;
        part2_12_val = part2_12.value;
        part2_14_val = part2_14.value;
        part2_16_val = part2_16.value;
        part2_18_val = part2_18.value;
        part2_20_val = part2_20.value;
        part2_22_val = part2_22.value;

        if (part2_9_val == \"\") part2_9_val = 0;
        if (part2_10_val == \"\") part2_10_val = 0;
        if (part2_12_val == \"\") part2_12_val = 0;
        if (part2_14_val == \"\") part2_14_val = 0;
        if (part2_16_val == \"\") part2_16_val = 0;
        if (part2_18_val == \"\") part2_18_val = 0;
        if (part2_20_val == \"\") part2_20_val = 0;
        if (part2_22_val == \"\") part2_22_val = 0;


        var allPart2 = parseInt(part2_9_val) + parseInt(part2_10_val) + parseInt(part2_12_val) + parseInt(part2_14_val)　+ parseInt(part2_16_val) - parseInt(part2_18_val) - parseInt(part2_20_val) - parseInt(part2_22_val);
        //alert(aa);
        part2_total.value = allPart2;
        document.getElementById('2_24').value = \"￥\" + part2_total.value.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

       //3rd part
        var part3_1 = document.getElementById('3_1');
        var part3_2 = document.getElementById('3_2');
        var part3_3 = document.getElementById('3_3');
        var part3_4 = document.getElementById('3_4');
        var part3_5 = document.getElementById('3_5');
        var part3_6 = document.getElementById('3_6');
        var part3_7 = document.getElementById('3_7');
        var part3_8 = document.getElementById('3_8');
        var part3_9 = document.getElementById('3_9');
        var part3_10 = document.getElementById('3_10');
        var part3_11 = document.getElementById('3_11');
        var part3_12 = document.getElementById('3_12');
        var part3_13 = document.getElementById('3_13');


        var part3_total = document.getElementById('3_14');

        part3_1_val = part3_1.value;
        part3_2_val = part3_2.value;
        part3_3_val = part3_3.value;
        part3_4_val = part3_4.value;
        part3_5_val = part3_5.value;
        part3_6_val = part3_6.value;
        part3_7_val = part3_7.value;
        part3_8_val = part3_8.value;
        part3_9_val = part3_9.value;
        part3_10_val = part3_10.value;
        part3_11_val = part3_11.value;
        part3_12_val = part3_12.value;
        part3_13_val = part3_13.value;


        if (part3_1_val == \"\") part3_1_val = 0;
        if (part3_2_val == \"\") part3_2_val = 0;
        if (part3_3_val == \"\") part3_3_val = 0;
        if (part3_4_val == \"\") part3_4_val = 0;
        if (part3_5_val == \"\") part3_5_val = 0;
        if (part3_6_val == \"\") part3_6_val = 0;
        if (part3_7_val == \"\") part3_7_val = 0;
        if (part3_8_val == \"\") part3_8_val = 0;
        if (part3_9_val == \"\") part3_9_val = 0;
        if (part3_10_val == \"\") part3_10_val = 0;
        if (part3_11_val == \"\") part3_11_val = 0;
        if (part3_12_val == \"\") part3_12_val = 0;
        if (part3_13_val == \"\") part3_13_val = 0;

        //part3_total.value
        allPart3 = parseInt(part3_1_val) + parseInt(part3_2_val) + parseInt(part3_3_val) + parseInt(part3_4_val) + parseInt(part3_5_val) + 
                    parseInt(part3_6_val) + parseInt(part3_7_val) + parseInt(part3_8_val) + parseInt(part3_9_val) + parseInt(part3_10_val) + parseInt(part3_11_val) + 
                    parseInt(part3_12_val) + parseInt(part3_13_val);
        part3_total.value = allPart3;
        document.getElementById('3_14').value = \"￥\" + part3_total.value.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //諸費用合計②+③ \t\t\t\t\t\t
        //var Total23 = part2_total.value + part3_total.value;
        var Total23 = allPart2 + allPart3;
        //alert(Total23);
        document.getElementById('3_15').value = \"￥\" + Total23.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //小計＝①＋②＋③
        var Total123 = Total23 + allPart1;
        document.getElementById('3_16').value = \"￥\" + Total123.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //（内消費税①と③の10%）\t
        Total = ((allPart1 + allPart3)*0.1);//.toFixed(2);
        document.getElementById('3_17').value = \"￥\" + Total.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //支払合計金額（ 税込）
        var Total5 = allPart1 + Total23;
        document.getElementById('3_18').value = \"￥\" + Total5.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //ご請求予定金額
        document.getElementById('1_12').value = \"￥\" + Total5.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");
        //document.getElementById('1_12').value = \"￥\" + Total5;

        //下取車価格(内税)
        var part2_11 = document.getElementById('2_11');
        var part2_13 = document.getElementById('2_13');
        var part2_15 = document.getElementById('2_15');
        var part2_17 = document.getElementById('2_17');
        var part2_19 = document.getElementById('2_19');

        var part_total = document.getElementById('2_23');

        part2_11_val = part2_11.value;
        part2_13_val = part2_13.value;
        part2_15_val = part2_15.value;
        part2_17_val = part2_17.value;
        part2_19_val = part2_19.value;

        if (part2_11_val == \"\") part2_11_val = 0;
        if (part2_13_val == \"\") part2_13_val = 0;
        if (part2_15_val == \"\") part2_15_val = 0;
        if (part2_17_val == \"\") part2_17_val = 0;
        if (part2_19_val == \"\") part2_19_val = 0;

        part_total = parseInt(part2_11_val) + parseInt(part2_13_val) + parseInt(part2_15_val) + parseInt(part2_17_val) + parseInt(part2_19_val);
        document.getElementById('2_23').value = \"￥\" + part_total.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //（内消費税・10%）\t
　　　　　Total = ((part_total)*0.1);//.toFixed(2);
        document.getElementById('2_21').value = \"￥\" + Total.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");
        //alert(parseInt(one.value) + parseInt(two.value))



    }

function doubleSubmit(f) 
{

  const myField = document.getElementById('myField');
  const textField = document.getElementById('clientName');
  const pdfFileTextField = document.getElementById('pdfFileNameId');
  const chassisNumberIdField = document.getElementById('ChassisNumberID');
  
  var currentdate = new Date(); 

  var datetime = String(currentdate.getFullYear())
                + String((currentdate.getMonth()+1)).padStart(2, '0')
                + String(currentdate.getDate()).padStart(2, '0')
                + String(currentdate.getHours()).padStart(2, '0')
                + String(currentdate.getMinutes()).padStart(2, '0');
                //+ String(currentdate.getSeconds());

    // Set a new value
    //textField.value = myField.value;

    var fileName = chassisNumberIdField.value + \"_\" + textField.value + \"_\" + datetime;
    myField.value = fileName;
    //alert(fileName);

    pdfFileTextField.value = fileName;

// Assuming formData is your FormData object containing your data

// Clone the FormData object
let formDataClone = new FormData(f);

  //  alert(\"bm\");

// Second fetch request
var baseurl = document.getElementById('uploadPath').value
fetch(baseurl+'/src/tcpdf/examples/example_033.php', {
//fetch('/eccube-mylocal/ec-cube/src/tcpdf/examples/example_033.php', {
  method: 'POST',
  body: formDataClone, // Use the cloned FormData object
})
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    //window.open('/eccube-mylocal/ec-cube/src/tcpdf/examples/example_033.php');
    alert(\"bm\");
    window.open('/eccube-mylocal/ec-cube/src/tcpdf/examples/example_033.php', '_blank').focus();
    return response.json();
  })
  .then(data => {
    console.log('Second URL Response:', data);
  })
  .catch(error => {
    console.error('Error:', error);
  });

return false;
}


async function uploadImage() {
  //alert(\"bm\");
    const statusDiv = document.getElementById('status');
    const imageFile = document.getElementById('imageFile').files[0];

    if (!imageFile) {
        alert(\"Please select an image file.\");
        return;
    }

    const formData = new FormData();
    formData.append('image', imageFile);

    try {
        const response = await fetch('/mypage/quotation/upload', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest', // To identify the request as AJAX
            },
            body: formData,
        });

        const result = await response.json();
        if (response.ok) {
            statusDiv.innerHTML = `<p style=\"color: green;\">\${result.message}</p>`;
        } else {
            statusDiv.innerHTML = `<p style=\"color: red;\">Error: \${result.message}</p>`;
        }
    } catch (error) {
        statusDiv.innerHTML = `<p style=\"color: red;\">Failed to upload image. Error: \${error.message}</p>`;
    }
}


</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mypage/20002.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1470 => 418,  1463 => 417,  1341 => 1500,  1277 => 1441,  1270 => 1439,  1104 => 1276,  1044 => 1219,  1040 => 1218,  1034 => 1215,  1030 => 1214,  1024 => 1211,  1020 => 1210,  789 => 982,  753 => 949,  736 => 935,  731 => 933,  715 => 920,  710 => 918,  693 => 904,  688 => 902,  672 => 891,  668 => 890,  656 => 881,  651 => 879,  640 => 873,  577 => 813,  571 => 812,  567 => 811,  554 => 804,  547 => 800,  543 => 799,  539 => 798,  535 => 797,  531 => 796,  527 => 795,  523 => 794,  519 => 793,  461 => 737,  459 => 417,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
  <head>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
      <meta name=\"generator\" content=\"PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet\">
      <meta name=\"author\" content=\"藤川 アハメド\" />
      <meta name=\"company\" content=\"Microsoft Corporation\" />
    <style type=\"text/css\">
      html { font-family:meiryo,Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style0 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style1 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style1 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style3 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style3 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style4 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style4 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style5 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style5 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style7 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style8 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style8 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style9 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style9 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style10 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style10 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style11 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#E36C09 }
      th.style11 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#E36C09 }
      td.style12 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:7pt; background-color:#ffffff }
      th.style12 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:7pt; background-color:#ffffff }
      td.style13 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style13 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style14 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style14 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style15 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style15 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style17 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:10pt; background-color:#ffffff }
      th.style17 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#ffffff }
      td.style18 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style18 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      td.style19 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style19 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style20 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      td.style22 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style22 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style23 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style23 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style24 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style24 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style25 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#000000;  font-size:10pt; background-color:white }
      th.style25 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#000000;  font-size:10pt; background-color:white }
      td.style26 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:12pt; background-color:white }
      th.style26 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:12pt; background-color:white }
      td.style27 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style27 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style28 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style28 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style29 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:10pt; background-color:white }
      th.style29 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style30 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style30 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style31 { vertical-align:middle; text-align:left; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:left; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style33 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style33 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style34 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style34 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style35 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style35 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style36 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#000000;  font-size:12pt; background-color:#ffffff }
      th.style36 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:12pt; background-color:#ffffff }
      td.style37 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style37 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style38 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style38 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      td.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style39 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:white }
      td.style40 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09;}
      th.style40 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09;}
      td.style41 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style41 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style242 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #ffffff !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#041F30 }
      th.style242 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #ffffff !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#041F30 }
      td.style43 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style43 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style44 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style46 { vertical-align:middle; text-align:center; border-bottom:none #366092; border-top:none #366092; border-left:1px solid  #366092; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      th.style46 { vertical-align:middle; text-align:center; border-bottom:none #366092; border-top:none #366092; border-left:none #366092; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      td.style47 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style47 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style48 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #366092 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style48 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #366092 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style49 { vertical-align:middle; text-align:left; padding-left:5px; border-bottom:1px solid #366092 !important; border-top:1px solid #366092 !important; border-left:1px solid #366092 !important; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      th.style49 { vertical-align:middle; text-align:left; padding-left:5px; border-bottom:1px solid #366092 !important; border-top:1px solid #366092 !important; border-left:1px solid #366092 !important; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      td.style50 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style50 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style51 { vertical-align:middle; text-align:center; border-bottom:1px solid #366092 !important; border-top:1px solid #366092 !important; border-left:1px solid #366092 !important; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30; width:980px;}
      th.style51 { vertical-align:middle; text-align:center; border-bottom:1px solid #366092 !important; border-top:1px solid #366092 !important; border-left:1px solid #366092 !important; border-right:none #366092; color:#ffffff;  font-size:20pt; background-color:#041F30 }
      td.style52 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style52 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:white }
      td.style53 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style53 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style54 { vertical-align:top; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:10pt; background-color:white }
      th.style54 { vertical-align:top; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style55 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#ffffff }
      th.style55 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#ffffff }
      td.style56 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style56 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style57 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:white }
      th.style57 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:white }
      td.style58 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style58 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style59 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:10pt; background-color:white }
      th.style59 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:10pt; background-color:white }
      td.style60 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style60 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style61 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#FF0000;  font-size:11pt; background-color:white }
      th.style61 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#FF0000;  font-size:11pt; background-color:white }
      td.style62 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#FF0000;  font-size:11pt; background-color:white }
      th.style62 { vertical-align:middle; text-align:left; padding-left:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#FF0000;  font-size:11pt; background-color:white }
      td.style63 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style63 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style65 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style65 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style66 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style66 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style67 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style67 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style68 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style68 { vertical-align:middle; text-align:right; padding-right:2px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style69 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style69 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style70 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style70 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style71 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style71 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style72 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style72 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style73 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style73 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style74 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style74 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style75 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style75 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style76 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style76 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #938953 !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style77 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #938953 !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style77 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #938953 !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style78 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style78 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style79 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:1px solid #938953 !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style79 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:1px solid #938953 !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style80 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style80 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #938953 !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style81 { vertical-align:middle; text-align:right; padding-right:3px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:1px solid #938953 !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style81 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:1px solid #938953 !important; border-right:none #000000; font-weight:bold; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style82 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style82 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #938953 !important; border-left:none #000000; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style83 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:1pt; background-color:white }
      th.style83 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:1pt; background-color:white }
      td.style84 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #ffffff !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style84 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #ffffff !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style85 { vertical-align:top; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      th.style85 { vertical-align:top; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#366092 }
      td.style86 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#ffffff }
      th.style86 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:#ffffff }
      td.style87 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style87 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style88 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #072633 !important; color:#ffffff;  font-size:10pt; background-color:white }
      th.style88 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #072633 !important; color:#ffffff;  font-size:10pt; background-color:white }
      td.style89 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#000000; font-size:8pt; background-color:#FFFFFF }
      th.style89 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#000000; font-size:8pt; background-color:#FFFFFF }      td.style90 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style90 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style91 { vertical-align:top; text-align:left; padding-left:2px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:#DBE5F1 }
      th.style91 { vertical-align:top; text-align:left; padding-left:2px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:#DBE5F1 }
      td.style92 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#17365D;  font-size:10pt; background-color:white }
      th.style92 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#17365D;  font-size:10pt; background-color:white }
      td.style93 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style93 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style94 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style94 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style95 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style95 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style96 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style96 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style97 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      th.style97 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#E36C09 }
      td.style98 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:7pt; background-color:#000000 }
      th.style98 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:7pt; background-color:#000000 }
      td.style99 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style99 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style100 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:11pt; background-color:#DBE5F1 }
      th.style100 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#000000;  font-size:11pt; background-color:#DBE5F1 }
      td.style101 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      th.style101 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:1px solid #9E9E9E !important; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:10pt; background-color:white }
      td.style102 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style102 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style103 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style103 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style104 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style104 { vertical-align:middle; text-align:center; border-bottom:1px solid #9E9E9E !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#ffffff;  font-size:11pt; background-color:#366092 }
      td.style105 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:11pt; background-color:#366092 }
      th.style105 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#FF0000;  font-size:11pt; background-color:#366092 }

      td.style200 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:12pt; background-color:#0f374a }
      th.style200 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-size:12pt; background-color:#0f374a }

      td.style201 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#000000;  font-size:11pt; background-color:#ffffff }
      th.style201 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#000000;  font-size:11pt; background-color:#ffffff }

      td.style203 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-weight:bold; font-size:10pt; background-color:#366092; width: 130px}
      th.style203 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:1px solid #9E9E9E !important; color:#ffffff;  font-weight:bold; font-size:10pt; background-color:#366092; width: 130px}

      td.style204 { vertical-align:top; text-align:center; padding-left:2px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:var(--footer02BG) }
      th.style204 { vertical-align:top; text-align:center; padding-left:2px; border-bottom:none #000000; border-top:1px solid #9E9E9E !important; border-left:1px solid #9E9E9E !important; border-right:none #000000; color:#000000;  font-size:11pt; background-color:var(--footer02BG) }

      table.sheet0 col.col0 { width:3.38888885pt }
      table.sheet0 col.col1 { width:22.19999986pt }
      table.sheet0 col.col2 { width:12.19999986pt }
      table.sheet0 col.col3 { width:12.19999986pt }
      table.sheet0 col.col4 { width:12.19999986pt }
      table.sheet0 col.col5 { width:12.19999986pt }
      table.sheet0 col.col6 { width:12.19999986pt }
      table.sheet0 col.col7 { width:12.19999986pt }
      table.sheet0 col.col8 { width:12.19999986pt }
      table.sheet0 col.col9 { width:12.19999986pt }
      table.sheet0 col.col10 { width:12.19999986pt }
      table.sheet0 col.col11 { width:12.19999986pt }
      table.sheet0 col.col12 { width:12.19999986pt }
      table.sheet0 col.col13 { width:12.19999986pt }
      table.sheet0 col.col14 { width:12.19999986pt }
      table.sheet0 col.col15 { width:12.19999986pt }
      table.sheet0 col.col16 { width:12.19999986pt }
      table.sheet0 col.col17 { width:12.19999986pt }
      table.sheet0 col.col18 { width:12.19999986pt }
      table.sheet0 col.col19 { width:12.19999986pt }
      table.sheet0 col.col20 { width:12.19999986pt }
      table.sheet0 col.col21 { width:15.19999986pt }
      table.sheet0 col.col22 { width:12.19999986pt }
      table.sheet0 col.col23 { width:15.19999986pt }
      table.sheet0 col.col24 { width:12.19999986pt }
      table.sheet0 col.col25 { width:12.19999986pt }
      table.sheet0 col.col26 { width:12.19999986pt }
      table.sheet0 col.col27 { width:12.19999986pt }
      table.sheet0 col.col28 { width:12.19999986pt }
      table.sheet0 col.col29 { width:12.19999986pt }
      table.sheet0 col.col30 { width:12.19999986pt }
      table.sheet0 col.col31 { width:12.19999986pt }
      table.sheet0 col.col32 { width:12.19999986pt }
      table.sheet0 col.col33 { width:12.19999986pt }
      table.sheet0 col.col34 { width:12.19999986pt }
      table.sheet0 col.col35 { width:12.19999986pt }
      table.sheet0 col.col36 { width:12.19999986pt }
      table.sheet0 col.col37 { width:12.19999986pt }
      table.sheet0 col.col38 { width:12.19999986pt }
      table.sheet0 col.col39 { width:12.19999986pt }
      table.sheet0 col.col40 { width:12.19999986pt }
      table.sheet0 col.col41 { width:12.19999986pt }
      table.sheet0 col.col42 { width:12.19999986pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row0 { height:25.5pt }
      table.sheet0 tr.row1 { height:60pt }
      table.sheet0 tr.row2 { height:7.5pt }
      table.sheet0 tr.row3 { height:14.25pt }
      table.sheet0 tr.row4 { height:12pt }
      table.sheet0 tr.row5 { height:12pt }
      table.sheet0 tr.row6 { height:12pt }
      table.sheet0 tr.row7 { height:12pt }
      table.sheet0 tr.row8 { height:12.75pt }
      table.sheet0 tr.row9 { height:12.75pt }
      table.sheet0 tr.row10 { height:12.75pt }
      table.sheet0 tr.row11 { height:7.5pt }
      table.sheet0 tr.row12 { height:12.75pt }
      table.sheet0 tr.row13 { height:12.75pt }
      table.sheet0 tr.row14 { height:12.75pt }
      table.sheet0 tr.row15 { height:12.75pt }
      table.sheet0 tr.row16 { height:12.75pt }
      table.sheet0 tr.row17 { height:12.75pt }
      table.sheet0 tr.row18 { height:12.75pt }
      table.sheet0 tr.row19 { height:12.75pt }
      table.sheet0 tr.row20 { height:12.75pt }
      table.sheet0 tr.row21 { height:12.75pt }
      table.sheet0 tr.row22 { height:12.75pt }
      table.sheet0 tr.row23 { height:12.75pt }
      table.sheet0 tr.row24 { height:12.75pt }
      table.sheet0 tr.row25 { height:12.75pt }
      table.sheet0 tr.row26 { height:12.75pt }
      table.sheet0 tr.row27 { height:12.75pt }
      table.sheet0 tr.row28 { height:12.75pt }
      table.sheet0 tr.row29 { height:12.75pt }
      table.sheet0 tr.row30 { height:12.75pt }
      table.sheet0 tr.row31 { height:12.75pt }
      table.sheet0 tr.row32 { height:12.75pt }
      table.sheet0 tr.row33 { height:12.75pt }
      table.sheet0 tr.row34 { height:12.75pt }
      table.sheet0 tr.row35 { height:12.75pt }
      table.sheet0 tr.row36 { height:12.75pt }
      table.sheet0 tr.row37 { height:12.75pt }
      table.sheet0 tr.row38 { height:12.75pt }
      table.sheet0 tr.row39 { height:12.75pt }
      table.sheet0 tr.row40 { height:12.75pt }
      table.sheet0 tr.row41 { height:12pt }
      table.sheet0 tr.row42 { height:7.5pt }
      table.sheet0 tr.row43 { height:12.75pt }
      table.sheet0 tr.row44 { height:12.75pt }
      table.sheet0 tr.row45 { height:12.75pt }
      table.sheet0 tr.row46 { height:7.5pt }
      table.sheet0 tr.row47 { height:12.75pt }
      table.sheet0 tr.row48 { height:12.75pt }
      table.sheet0 tr.row49 { height:12.75pt }
      table.sheet0 tr.row50 { height:12.75pt }
      table.sheet0 tr.row51 { height:12.75pt }
      table.sheet0 tr.row52 { height:7.5pt }
      table.sheet0 tr.row53 { height:12.75pt }
      table.sheet0 tr.row54 { height:12.75pt }
      table.sheet0 tr.row55 { height:12.75pt }
      table.sheet0 tr.row56 { height:12.75pt }
      table.sheet0 tr.row57 { height:12.75pt }
      table.sheet0 tr.row58 { height:12pt }
      table.sheet0 tr.row59 { height:12pt }
      table.sheet0 tr.row60 { height:12pt }
      table.sheet0 tr.row61 { height:12pt }
      table.sheet0 tr.row62 { height:12pt }
      table.sheet0 tr.row63 { height:12pt }
      table.sheet0 tr.row64 { height:12pt }
      table.sheet0 tr.row65 { height:12pt }
      table.sheet0 tr.row66 { height:12pt }
      table.sheet0 tr.row67 { height:12pt }
      table.sheet0 tr.row68 { height:12pt }
      table.sheet0 tr.row69 { height:12pt }
      table.sheet0 tr.row70 { height:12pt }
      table.sheet0 tr.row71 { height:12pt }
      table.sheet0 tr.row72 { height:12pt }
      table.sheet0 tr.row73 { height:12pt }
      table.sheet0 tr.row74 { height:12pt }
      table.sheet0 tr.row75 { height:12pt }
      table.sheet0 tr.row76 { height:12pt }
      table.sheet0 tr.row77 { height:12pt }
      table.sheet0 tr.row78 { height:12pt }
 
 #partners {
  /*background-color: #eee;*/
  white-space: nowrap;
}

.logo-image {
  vertical-align: middle;
  padding: 2px;
  display: table-cell;
}

.logo-image img {
  max-width: 100%;
}

td input, td button {

  width:100%;
  height:100%;
  background-color: #f7f6f3;
  border: hidden;
}

td select {
  width:100%;
  height:100%;
  border: hidden;
}

/* input[type=number] start */
input[type=number] {text-align: right;}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
/* input[type=number] end */


    </style>
  </head>
{% block javascript %}
<script src=\"https://requirejs.org/docs/release/2.3.5/minified/require.js\"></script>
   <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
 
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
    <script type=\"text/javascript\">


document.getElementById('myInput').addEventListener('change', function() {
    alert('The value has changed to: ' + this.value);
});

  document.addEventListener(\"DOMContentLoaded\", function() {
    // Select the field by its ID
    const myField = document.getElementById('myField');

    // Listen for changes to the field
    myField.addEventListener('change', function() {
      const myFieldValue = myField.value;
      console.log(myFieldValue); // Outputs the new value when the field changes
      alert(\"bm\");
    });
  });

  function validateAndSubmit() {

      let isValid = true;

 
      if (isValid) {
        i= document.getElementById('myForm');
        doubleSubmit(i); //submit for pdf
        i.submit();      //submit for database
      }


    }
    function calculationPricebm(value) {
//alert(\"bm3\");
        // generate serialNo
        const serialNoField = document.getElementById('serialNoId');


        var currentdate = new Date(); 
        var datetime = String(currentdate.getFullYear().toString().substr(-2))
                      + String((currentdate.getMonth()+1)).padStart(2, '0')
                      + String(currentdate.getDate()).padStart(2, '0')
                      + String(currentdate.getHours()).padStart(2, '0')
                      + String(currentdate.getMinutes()).padStart(2, '0');


          
        //const pdfFileTextField = document.getElementById('pdfFileNameId');
        //pdfFileTextField.value = fileName;
        document.getElementById('2_18').value = document.getElementById('2_11').value;
        
        //alert('The value has changed to: ' + value);
        var part2_1 = document.getElementById('2_1');
        var part2_2 = document.getElementById('2_2');
        var part2_4 = document.getElementById('2_4');
        var part2_6 = document.getElementById('2_6');
        
        var part1_total = document.getElementById('2_30');

        part2_1_val = part2_1.value;
        part2_2_val = part2_2.value;
        part2_4_val = part2_4.value;
        part2_6_val = part2_6.value;

        if (part2_1_val == \"\") part2_1_val = 0;
        if (part2_2_val == \"\") part2_2_val = 0;
        if (part2_4_val == \"\") part2_4_val = 0;
        if (part2_6_val == \"\") part2_6_val = 0;

        allPart1 = parseInt(part2_1_val) + parseInt(part2_2_val) + parseInt(part2_4_val) + parseInt(part2_6_val);
        part1_total.value = allPart1;
        document.getElementById('2_30').value = \"￥\" + part1_total.value.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");
        
        //2nd part
        var part2_9 = document.getElementById('2_9');
        var part2_10 = document.getElementById('2_10');
        var part2_12 = document.getElementById('2_12');
        var part2_14 = document.getElementById('2_14');
        var part2_16 = document.getElementById('2_16');
        var part2_18 = document.getElementById('2_18');
        var part2_20 = document.getElementById('2_20');
        var part2_22 = document.getElementById('2_22');

        var part2_total = document.getElementById('2_24');

        part2_9_val = part2_9.value;
        part2_10_val = part2_10.value;
        part2_12_val = part2_12.value;
        part2_14_val = part2_14.value;
        part2_16_val = part2_16.value;
        part2_18_val = part2_18.value;
        part2_20_val = part2_20.value;
        part2_22_val = part2_22.value;

        if (part2_9_val == \"\") part2_9_val = 0;
        if (part2_10_val == \"\") part2_10_val = 0;
        if (part2_12_val == \"\") part2_12_val = 0;
        if (part2_14_val == \"\") part2_14_val = 0;
        if (part2_16_val == \"\") part2_16_val = 0;
        if (part2_18_val == \"\") part2_18_val = 0;
        if (part2_20_val == \"\") part2_20_val = 0;
        if (part2_22_val == \"\") part2_22_val = 0;


        var allPart2 = parseInt(part2_9_val) + parseInt(part2_10_val) + parseInt(part2_12_val) + parseInt(part2_14_val)　+ parseInt(part2_16_val) - parseInt(part2_18_val) - parseInt(part2_20_val) - parseInt(part2_22_val);
        //alert(aa);
        part2_total.value = allPart2;
        document.getElementById('2_24').value = \"￥\" + part2_total.value.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

       //3rd part
        var part3_1 = document.getElementById('3_1');
        var part3_2 = document.getElementById('3_2');
        var part3_3 = document.getElementById('3_3');
        var part3_4 = document.getElementById('3_4');
        var part3_5 = document.getElementById('3_5');
        var part3_6 = document.getElementById('3_6');
        var part3_7 = document.getElementById('3_7');
        var part3_8 = document.getElementById('3_8');
        var part3_9 = document.getElementById('3_9');
        var part3_10 = document.getElementById('3_10');
        var part3_11 = document.getElementById('3_11');
        var part3_12 = document.getElementById('3_12');
        var part3_13 = document.getElementById('3_13');


        var part3_total = document.getElementById('3_14');

        part3_1_val = part3_1.value;
        part3_2_val = part3_2.value;
        part3_3_val = part3_3.value;
        part3_4_val = part3_4.value;
        part3_5_val = part3_5.value;
        part3_6_val = part3_6.value;
        part3_7_val = part3_7.value;
        part3_8_val = part3_8.value;
        part3_9_val = part3_9.value;
        part3_10_val = part3_10.value;
        part3_11_val = part3_11.value;
        part3_12_val = part3_12.value;
        part3_13_val = part3_13.value;


        if (part3_1_val == \"\") part3_1_val = 0;
        if (part3_2_val == \"\") part3_2_val = 0;
        if (part3_3_val == \"\") part3_3_val = 0;
        if (part3_4_val == \"\") part3_4_val = 0;
        if (part3_5_val == \"\") part3_5_val = 0;
        if (part3_6_val == \"\") part3_6_val = 0;
        if (part3_7_val == \"\") part3_7_val = 0;
        if (part3_8_val == \"\") part3_8_val = 0;
        if (part3_9_val == \"\") part3_9_val = 0;
        if (part3_10_val == \"\") part3_10_val = 0;
        if (part3_11_val == \"\") part3_11_val = 0;
        if (part3_12_val == \"\") part3_12_val = 0;
        if (part3_13_val == \"\") part3_13_val = 0;

        //part3_total.value
        allPart3 = parseInt(part3_1_val) + parseInt(part3_2_val) + parseInt(part3_3_val) + parseInt(part3_4_val) + parseInt(part3_5_val) + 
                    parseInt(part3_6_val) + parseInt(part3_7_val) + parseInt(part3_8_val) + parseInt(part3_9_val) + parseInt(part3_10_val) + parseInt(part3_11_val) + 
                    parseInt(part3_12_val) + parseInt(part3_13_val);
        part3_total.value = allPart3;
        document.getElementById('3_14').value = \"￥\" + part3_total.value.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //諸費用合計②+③ \t\t\t\t\t\t
        //var Total23 = part2_total.value + part3_total.value;
        var Total23 = allPart2 + allPart3;
        //alert(Total23);
        document.getElementById('3_15').value = \"￥\" + Total23.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //小計＝①＋②＋③
        var Total123 = Total23 + allPart1;
        document.getElementById('3_16').value = \"￥\" + Total123.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //（内消費税①と③の10%）\t
        Total = ((allPart1 + allPart3)*0.1);//.toFixed(2);
        document.getElementById('3_17').value = \"￥\" + Total.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //支払合計金額（ 税込）
        var Total5 = allPart1 + Total23;
        document.getElementById('3_18').value = \"￥\" + Total5.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //ご請求予定金額
        document.getElementById('1_12').value = \"￥\" + Total5.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");
        //document.getElementById('1_12').value = \"￥\" + Total5;

        //下取車価格(内税)
        var part2_11 = document.getElementById('2_11');
        var part2_13 = document.getElementById('2_13');
        var part2_15 = document.getElementById('2_15');
        var part2_17 = document.getElementById('2_17');
        var part2_19 = document.getElementById('2_19');

        var part_total = document.getElementById('2_23');

        part2_11_val = part2_11.value;
        part2_13_val = part2_13.value;
        part2_15_val = part2_15.value;
        part2_17_val = part2_17.value;
        part2_19_val = part2_19.value;

        if (part2_11_val == \"\") part2_11_val = 0;
        if (part2_13_val == \"\") part2_13_val = 0;
        if (part2_15_val == \"\") part2_15_val = 0;
        if (part2_17_val == \"\") part2_17_val = 0;
        if (part2_19_val == \"\") part2_19_val = 0;

        part_total = parseInt(part2_11_val) + parseInt(part2_13_val) + parseInt(part2_15_val) + parseInt(part2_17_val) + parseInt(part2_19_val);
        document.getElementById('2_23').value = \"￥\" + part_total.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");

        //（内消費税・10%）\t
　　　　　Total = ((part_total)*0.1);//.toFixed(2);
        document.getElementById('2_21').value = \"￥\" + Total.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, \",\");
        //alert(parseInt(one.value) + parseInt(two.value))



    }

function doubleSubmit(f) 
{

  const myField = document.getElementById('myField');
  const textField = document.getElementById('clientName');
  const pdfFileTextField = document.getElementById('pdfFileNameId');
  const chassisNumberIdField = document.getElementById('ChassisNumberID');
  
  var currentdate = new Date(); 

  var datetime = String(currentdate.getFullYear())
                + String((currentdate.getMonth()+1)).padStart(2, '0')
                + String(currentdate.getDate()).padStart(2, '0')
                + String(currentdate.getHours()).padStart(2, '0')
                + String(currentdate.getMinutes()).padStart(2, '0');
                //+ String(currentdate.getSeconds());

    // Set a new value
    //textField.value = myField.value;

    var fileName = chassisNumberIdField.value + \"_\" + textField.value + \"_\" + datetime;
    myField.value = fileName;
    //alert(fileName);

    pdfFileTextField.value = fileName;

// Assuming formData is your FormData object containing your data

// Clone the FormData object
let formDataClone = new FormData(f);

  //  alert(\"bm\");

// Second fetch request
var baseurl = document.getElementById('uploadPath').value
fetch(baseurl+'/src/tcpdf/examples/example_033.php', {
//fetch('/eccube-mylocal/ec-cube/src/tcpdf/examples/example_033.php', {
  method: 'POST',
  body: formDataClone, // Use the cloned FormData object
})
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    //window.open('/eccube-mylocal/ec-cube/src/tcpdf/examples/example_033.php');
    alert(\"bm\");
    window.open('/eccube-mylocal/ec-cube/src/tcpdf/examples/example_033.php', '_blank').focus();
    return response.json();
  })
  .then(data => {
    console.log('Second URL Response:', data);
  })
  .catch(error => {
    console.error('Error:', error);
  });

return false;
}


async function uploadImage() {
  //alert(\"bm\");
    const statusDiv = document.getElementById('status');
    const imageFile = document.getElementById('imageFile').files[0];

    if (!imageFile) {
        alert(\"Please select an image file.\");
        return;
    }

    const formData = new FormData();
    formData.append('image', imageFile);

    try {
        const response = await fetch('/mypage/quotation/upload', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest', // To identify the request as AJAX
            },
            body: formData,
        });

        const result = await response.json();
        if (response.ok) {
            statusDiv.innerHTML = `<p style=\"color: green;\">\${result.message}</p>`;
        } else {
            statusDiv.innerHTML = `<p style=\"color: red;\">Error: \${result.message}</p>`;
        }
    } catch (error) {
        statusDiv.innerHTML = `<p style=\"color: red;\">Failed to upload image. Error: \${error.message}</p>`;
    }
}


</script>

{% endblock javascript %}
  <body onload=\"javascript:calculationPricebm()\">
<style>
@page { margin-left: 0.59055118110236in; margin-right: 0.59055118110236in; margin-top: 0.59055118110236in; margin-bottom: 0.59055118110236in; }

</style>
<style type=\"text/css\">.asd {
  background: rgba(0, 0, 0, 0);
  border: none;
}

</style>

<div id=\"status\"></div>
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"sheet0\" class=\"sheet0\" style=\"margin-left: auto; margin-right: auto;\">
        <col class=\"col0\">
        <col class=\"col1\">
        <col class=\"col2\">
        <col class=\"col3\">
        <col class=\"col4\">
        <col class=\"col5\">
        <col class=\"col6\">
        <col class=\"col7\">
        <col class=\"col8\">
        <col class=\"col9\">
        <col class=\"col10\">
        <col class=\"col11\">
        <col class=\"col12\">
        <col class=\"col13\">
        <col class=\"col14\">
        <col class=\"col15\">
        <col class=\"col16\">
        <col class=\"col17\">
        <col class=\"col18\">
        <col class=\"col19\">
        <col class=\"col20\">
        <col class=\"col21\">
        <col class=\"col22\">
        <col class=\"col23\">
        <col class=\"col24\">
        <col class=\"col25\">
        <col class=\"col26\">
        <col class=\"col27\">
        <col class=\"col28\">
        <col class=\"col29\">
        <col class=\"col30\">
        <col class=\"col31\">
        <col class=\"col32\">
        <col class=\"col33\">
        <col class=\"col34\">
        <col class=\"col35\">
        <col class=\"col36\">
        <col class=\"col37\">

        <tbody>
        <!-- pdf file name -->
                    <input type=\"hidden\" value=\"\" name=\"pdfFileName\" id=\"pdfFileNameId\">
                    <input type=\"hidden\" value=\"{{CustomerId}}\" name=\"customerId\" id=\"\">
                    <input type=\"hidden\" value=\"{{siteInfo['image0']}}\" name=\"14_1\">
                    <input type=\"hidden\" value=\"{{siteInfo['image1']}}\" name=\"14_2\">
                    <input type=\"hidden\" value=\"{{siteInfo['image2']}}\" name=\"14_3\">
                    <input type=\"hidden\" value=\"{{siteInfo['image3']}}\" name=\"14_4\">
                    <input type=\"hidden\" value=\"{{siteInfo['image4']}}\" name=\"14_5\">
                    <input type=\"hidden\" value=\"{{siteInfo['image5']}}\" name=\"14_6\">
                    <input type=\"hidden\" value=\"{{ app.request.basePath }}\" name=\"uploadPath\" id=\"uploadPath\">
          <tr class=\"row0\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style51 s style43-bk\" colspan=\"25\">御見積書</td>
            <td class=\"column26 style46 e style48-bk\" colspan=\"11\" rowspan=\"2\"> <img src=\"{{ app.request.schemeAndHttpHost }}{{ app.request.basePath }}/html/upload/save_image/companyLogo/{{CustomerId}}.png\" style=\"width: 50%;\"/></td>
            <td class=\"column37 style1 null\"></td>

          </tr>
          <tr class=\"row1\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style242 s\" colspan=\"2\">販売店</td>
            <td class=\"column3 style49 s style43\" colspan=\"23\"><input type=\"hidden\" value=\"&nbsp;<br>&nbsp;{{siteInfo['CompanyName']}}<br />
&nbsp;本店：TEL {{siteInfo['CompanyPhone']}}<br>\" name=\"0_1\">{{siteInfo['CompanyName']}}<br />
本店：TEL {{siteInfo['CompanyPhone']}}</td>
            <td class=\"column37 style2 null\"></td>

          </tr>
          <tr class=\"row2\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style2 null\"></td>
            <td class=\"column2 style2 null\"></td>
            <td class=\"column3 style2 null\"></td>
            <td class=\"column4 style2 null\"></td>
            <td class=\"column5 style2 null\"></td>
            <td class=\"column6 style2 null\"></td>
            <td class=\"column7 style2 null\"></td>
            <td class=\"column8 style2 null\"></td>
            <td class=\"column9 style2 null\"></td>
            <td class=\"column10 style2 null\"></td>
            <td class=\"column11 style2 null\"></td>
            <td class=\"column12 style2 null\"></td>
            <td class=\"column13 style2 null\"></td>
            <td class=\"column14 style2 null\"></td>
            <td class=\"column15 style2 null\"></td>
            <td class=\"column16 style2 null\"></td>
            <td class=\"column17 style2 null\"></td>
            <td class=\"column18 style2 null\"></td>
            <td class=\"column19 style2 null\"></td>
            <td class=\"column20 style2 null\"></td>
            <td class=\"column21 style2 null\"></td>
            <td class=\"column22 style2 null\"></td>
            <td class=\"column23 style2 null\"></td>
            <td class=\"column24 style2 null\"></td>
            <td class=\"column25 style2 null\"></td>
            <td class=\"column26 style2 null\"></td>
            <td class=\"column27 style2 null\"></td>
            <td class=\"column28 style2 null\"></td>
            <td class=\"column29 style2 null\"></td>
            <td class=\"column30 style2 null\"></td>
            <td class=\"column31 style2 null\"></td>
            <td class=\"column32 style2 null\"></td>
            <td class=\"column33 style2 null\"></td>
            <td class=\"column34 style2 null\"></td>
            <td class=\"column35 style2 null\"></td>
            <td class=\"column36 style2 null\"></td>
            <td class=\"column37 style2 null\"></td>

          </tr>
          <tr class=\"row3\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style44 s style15\" colspan=\"14\">宛名</td>
            <td class=\"column15 style103 s style104\" colspan=\"17\">ご検討の車種</td>
            <td class=\"column15 style200 s style104\" colspan=\"5\">登録番号</td>

          </tr>
          <tr class=\"row4\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style41 s style15\" colspan=\"2\" rowspan=\"2\">宛先</td>
            <td class=\"column3 style26 s style25\" colspan=\"12\" rowspan=\"2\"><input type=\"text\" value=\"◯◯◯様\" name=\"1_1\" id=\"clientName\"></td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">作成日</td>
            <td class=\"column19 style31 f style15\" colspan=\"4\"><input type=\"date\" value=\"2024/10/09\" name=\"1_2\"></td>
            <td class=\"column23 style37 s style15\" colspan=\"4\">有効期限</td>
            <td class=\"column27 style31 f style15\" colspan=\"5\"><input type=\"date\" value=\"2024/11/09\" name=\"1_3\"></td>
            <td class=\"column32 style201 s style25\" colspan=\"5\">{{siteInfo['CompanyRegistrationNumber']}}<input type=\"hidden\" value=\"{{siteInfo['CompanyRegistrationNumber']}}\" name=\"10_1\" id=\"10_1\"></td>

          </tr>
          <tr class=\"row5\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">車種</td>
            <td class=\"column19 style38 s style15\" colspan=\"4\"><input type=\"text\" value=\"{{siteInfo['CarModel']}}\" name=\"1_4\"></td>
            <td class=\"column23 style37 s style15\" colspan=\"4\">カラー</td>
            <td class=\"column27 style31 f style15\" colspan=\"5\"><input type=\"text\" value=\"{{siteInfo['Color']}}\" name=\"1_4_1\"></td>
            <td class=\"column32 style200 f style25\" colspan=\"5\">古物商許可</td>

          </tr>
          <tr class=\"row6\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style22 s style25-bk\" colspan=\"2\" rowspan=\"2\">住所</td>
            <td class=\"column3 style29 s style25\" colspan=\"12\" rowspan=\"2\"><input type=\"text\" value=\"------\" name=\"1_5\"></td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">車台番号</td>
            <td class=\"column19 style38 s style15\" colspan=\"13\"><input type=\"text\" value=\"{{siteInfo['ChassisNumber']}}\" name=\"1_6\" id=\"ChassisNumberID\"></td>
            <td class=\"column32 style201 f style15\" colspan=\"5\">{{siteInfo['CompanyLicenseNumber']}}<input type=\"hidden\" value=\"{{siteInfo['CompanyLicenseNumber']}}\" name=\"10_2\" id=\"10_2\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row7\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">排気量</td>
            <td class=\"column19 style18 s style15\" colspan=\"4\"><input type=\"text\" value=\"{{siteInfo['Displacement']}}\" name=\"1_7\"></td>
            <td class=\"column23 style30 s style15\" colspan=\"4\">メーカー</td>
            <td class=\"column27 style18 s style15\" colspan=\"5\"><input type=\"text\" value=\"{{siteInfo['Manufacturer']}}\" name=\"1_8\"></td>
            <td class=\"column32 style203 f style25\" colspan=\"5\" rowspan=\"2\">ご請求予定金額</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row8\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style40 s style15\" colspan=\"2\">メール</td>
            <td class=\"column3 style39 s style15\" colspan=\"12\"><input type=\"text\" value=\"------\" name=\"1_9\"></td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">年式</td>
            <td class=\"column19 style18 s style15\" colspan=\"4\"><input type=\"text\" value=\"{{siteInfo['Year']}}\" name=\"1_10\"></td>
            <td class=\"column23 style30 s style15\" colspan=\"4\">走行距離</td>
            <td class=\"column27 style18 s style15\" colspan=\"5\"><input type=\"text\" value=\"{{siteInfo['Mileage']}}\" name=\"1_11\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row9\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style41 s style15\" colspan=\"2\">電話</td>
            <td class=\"column3 style39 s style15\" colspan=\"12\"><input type=\"text\" value=\"------\" name=\"1_13\"></td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">ドア数</td>
            <td class=\"column19 style18 s style15\" colspan=\"4\"><input type=\"text\" value=\"{{siteInfo['NumberOfDoors']}}\" name=\"1_14\"></td>
            <td class=\"column23 style30 s style15\" colspan=\"4\">修復歴</td>
            <td class=\"column27 style21 s style15\" colspan=\"5\"><input type=\"text\" value=\"{{siteInfo['RepairHistory']}}\" name=\"1_15\"></td>
            <td class=\"column32 style36 f style25\" colspan=\"5\" rowspan=\"2\"><input type=\"text\" value=\"¥0\" name=\"1_12\" id=\"1_12\"  class=\"asd\" readonly style=\"text-align:center;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row10\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style41 s style15\" colspan=\"2\">Fax</td>
            <td class=\"column3 style39 s style15\" colspan=\"12\"><input type=\"text\" value=\"------\" name=\"1_16\"></td>
            <td class=\"column15 style20 s style15\" colspan=\"4\">車検</td>
            <td class=\"column19 style59 s style15\" colspan=\"4\"><input type=\"text\" value=\"{{siteInfo['VehicleInspection']}}\" name=\"1_17\"></td>
            <td class=\"column23 style30 s style15\" colspan=\"4\">保証内容</td>
            <td class=\"column27 style59 s style15\" colspan=\"5\"><input type=\"text\" value=\"\" name=\"1_18\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row11\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style55 s style34\" colspan=\"36\" rowspan=\"2\">下記の通りお見積り申し上げます</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row12\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row13\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style102 s style25\" colspan=\"2\" rowspan=\"5\">車両販売価格(内税)</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">車両体価格</td>
            <td class=\"column14 style52 n style15\" colspan=\"9\"><input type=\"number\" value=\"{{siteInfo['VehiclePrice']}}\" id=\"2_1\" name=\"2_1\" onkeyup=\"calculationPricebm(this.value)\"></td>

            <td class=\"column23 style53 s style15\" colspan=\"14\">下取車種</td>
            <td class=\"column33 style3-bk null\"></td>
            <td class=\"column34 style3 null\"></td>
            <td class=\"column35 style3 null\"></td>
            <td class=\"column36 style3 null\"></td>
            <td class=\"column37 style4 null\"></td>
            <td class=\"column38 style4 null\"></td>
            <td class=\"column39 style4 null\"></td>
            <td class=\"column40 style4 null\"></td>
            <td class=\"column41 style4 null\"></td>
            <td class=\"column42 style4 null\"></td>
          </tr>
          <tr class=\"row14\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">追加明細合計</td>
            <td class=\"column14 style52 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_2\" id=\"2_2\"  onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">下取車名</td>
            <td class=\"column27 style54 s style15\" colspan=\"10\"><input type=\"text\" value=\"------\" name=\"2_3\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row15\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">車陸送代</td>
            <td class=\"column14 style57 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_4\" id=\"2_4\"  onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">色</td>
            <td class=\"column27 style54 s style15\" colspan=\"10\"><input type=\"text\" value=\"------\" name=\"2_5\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row16\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">陸送費用</td>
            <td class=\"column14 style57 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_6\" id=\"2_6\"  onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">車体番号</td>
            <td class=\"column27 style54 s style15\" colspan=\"10\"><input type=\"text\" value=\"------\" name=\"2_7\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row17\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style45 s style15\" colspan=\"11\">車両価格①</td>
            <td class=\"column14 style58 f style15\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"2_30\" id=\"2_30\"  class=\"asd\" readonly style=\"text-align:right;\"><!-- <label id=\"2_30\">￥0</label><input type=\"text\" value=\"\" name=\"2_30\" id=\"2_30\" style=\"color:black;\"> --></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">走行距離</td>
            <td class=\"column27 style54 s style15\" colspan=\"10\"><input type=\"text\" value=\"------\" name=\"2_8\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row18\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style64 s style66-bk\" rowspan=\"24\">諸費用内訳</td>
            <td class=\"column2 style64 s style66-bk\" rowspan=\"5\">非課税分</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">環境性能割</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_9\" id=\"2_9\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style16 s style15\" colspan=\"14\">下取車価格(内税)</td>

            
            
            
            
            
          </tr>
          <tr class=\"row19\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">自動車税</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_10\" id=\"2_10\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">車両本体価格</td>
            <td class=\"column27 style17 s style15\" colspan=\"10\"><input type=\"number\" value=\"0\" name=\"2_11\" id=\"2_11\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row20\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">非課税分 自賠責保険料</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_12\" id=\"2_12\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"4\">陸送代</td>
            <td class=\"column27 style17 s style15\" colspan=\"10\"><input type=\"number\" value=\"0\" name=\"2_13\" id=\"2_13\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row21\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">重量税</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_14\" id=\"2_14\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style16 s style15\" colspan=\"4\" rowspan=\"3\">その他</td>
            <td class=\"column27 style17 s style15\" colspan=\"10\"><input type=\"number\" value=\"0\" name=\"2_15\" id=\"2_15\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row22\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">リサイクル預託金</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_16\" id=\"2_16\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column27 style17 s style15\" colspan=\"10\"><input type=\"number\" value=\"0\" name=\"2_17\" id=\"2_17\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            <td class=\"column41 style6 null\"></td>
            
          </tr>
          <tr class=\"row23\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column2 style105 s style66\" rowspan=\"3\">値引き</td>
            <td class=\"column3 style62 s style15\" colspan=\"11\">下取り車価格(-)</td>
            <td class=\"column14 style61 n style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_18\" id=\"2_18\" readonly onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column27 style17 s style15\" colspan=\"10\"><input type=\"number\" value=\"0\" name=\"2_19\" id=\"2_19\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row24\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style62 s style15\" colspan=\"11\">
            <input list=\"browsers\" name=\"5_1\" id=\"5_1\" style=\"background:#f2e9a1\">
            <datalist id=\"browsers\">
              <option value=\"夏キャンペーン(-)\">
              <option value=\"冬キャンペーン(-)\">
              <option value=\"特別キャンペーン (-)\">
            </datalist>

            
            </td>
            <td class=\"column14 style61 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_20\" id=\"2_20\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"9\">（内消費税・10%）</td>
            <td class=\"column32 style7 f\" colspan=\"5\"><input type=\"text\" value=\"¥0\" name=\"2_21\" id=\"2_21\"  class=\"asd\" readonly style=\"text-align:right;\"></td>

            
            
            
            
            
          </tr>
          <tr class=\"row25\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style62 s style15\" colspan=\"11\">
            <!--
            <select name=\"5_2\" id=\"5_2\" style=\"height:29px;\">>
              <option value=\"特別値引き(-)\">特別値引き(-)</option>
              <option value=\"売買仮契約預り金 (-)\">売買仮契約預り金 (-)</option>
              <option value=\"-\">-</option>
            </select>
            -->
            <input list=\"browsers2\" name=\"5_2\" id=\"5_2\" style=\"background:#f2e9a1\">
            <datalist id=\"browsers2\">
              <option value=\"特別値引き(-)\">
              <option value=\"売買仮契約預り金 (-)\">
            </datalist>
            </td>
            <td class=\"column14 style61 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"2_22\" id=\"2_22\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style13 s style15-bk\" colspan=\"9\">下取り車合計</td>
            <td class=\"column32 style7 f\" colspan=\"5\"><input type=\"text\" value=\"¥0\" name=\"2_23\" id=\"2_23\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column33 style10-bk null\"></td>
            <td class=\"column34 style10 null\"></td>
            <td class=\"column35 style10 null\"></td>
            <td class=\"column36 style10 null\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row26\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column2 style45 s style15\" colspan=\"12\">非課税分小計②</td>
            <td class=\"column14 style60 f style15\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"2_24\" id=\"2_24\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column23 style86 s style88-bk\" colspan=\"14\">
<!--
<div class=\"first\">車両写真
  <p><input type=\"file\" accept=\"image/*\" name=\"image\" id=\"file\" onchange=\"loadFile(event)\"></p>
  <p><img id=\"output\" width=\"200\" /></p>
</div>
-->
            </td>
            <td class=\"column33 style11-bk null\"></td>
            <td class=\"column34 style11 null\"></td>
            <td class=\"column35 style11 null\"></td>
            <td class=\"column36 style11 null\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>

          
          <tr class=\"row27\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column2 style67 s style66\" rowspan=\"13\">税対象(内税)</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">檢查登錄代行費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_1\" id=\"3_1\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column23 style89 null style25\" colspan=\"14\" rowspan=\"19\">
            <div id=\"partners\">
                <div class=\"logo-image\"><img id=\"img1\" style=\"width: 185px; height: 160px;\" src=\"{{siteInfo['image0']}}\" border=\"0\" /></div>
                <div class=\"logo-image\"><img id=\"img2\" style=\"width: 185px; height: 160px;\" src=\"{{siteInfo['image1']}}\" border=\"0\" /></div>
            </div>
            <div id=\"partners\">
                <div class=\"logo-image\"><img id=\"img3\" style=\"width: 185px; height: 160px;\" src=\"{{siteInfo['image2']}}\" border=\"0\" /></div>
                <div class=\"logo-image\"><img id=\"img4\" style=\"width: 185px; height: 160px;\" src=\"{{siteInfo['image3']}}\" border=\"0\" /></div>
            </div>
            <div id=\"partners\">
                <div class=\"logo-image\"><img id=\"img5\" style=\"width: 185px; height: 160px;\" src=\"{{siteInfo['image4']}}\" border=\"0\" /></div>
                <div class=\"logo-image\"><img id=\"img6\" style=\"width: 185px; height: 160px;\" src=\"{{siteInfo['image5']}}\" border=\"0\" /></div>
            </div>
            </td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row28\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">車庫証明代行費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_2\" id=\"3_2\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row29\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">納車点検費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_3\" id=\"3_3\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row30\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">納車費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_4\" id=\"3_4\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row31\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">下取車諸手続き代行費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_5\" id=\"3_5\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row32\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">整備、車検、登錄諸費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"{{siteInfo['OtherPrice']}}\" name=\"3_6\" id=\"3_6\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row33\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">名義変更費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_7\" id=\"3_7\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row34\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\">希望ナンバー費用</td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_8\" id=\"3_8\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row35\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\"><input type=\"text\" value=\"\" name=\"30_1\" id=\"30_1\" style=\"background:#f2e9a1\"></td>
            <td class=\"column14 style19 n style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_9\" id=\"3_9\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row36\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\"><input type=\"text\" value=\"\" name=\"30_2\" id=\"30_2\" style=\"background:#f2e9a1\"></td>
            <td class=\"column14 style19 n style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_10\" id=\"3_10\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row37\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\"><input type=\"text\" value=\"\" name=\"30_3\" id=\"30_3\" style=\"background:#f2e9a1\"></td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_11\" id=\"3_11\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row38\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\"><input type=\"text\" value=\"\" name=\"30_4\" id=\"30_4\" style=\"background:#f2e9a1\"></td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_12\" id=\"3_12\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row39\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column3 style18 s style15\" colspan=\"11\"><input type=\"text\" value=\"\" name=\"30_5\" id=\"30_5\" style=\"background:#f2e9a1\"></td>
            <td class=\"column14 style19 s style15\" colspan=\"9\"><input type=\"number\" value=\"0\" name=\"3_13\" id=\"3_13\" onkeyup=\"calculationPricebm(this.value)\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row40\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column2 style30 s style15\" colspan=\"12\">諸費用（ 課税分）  小計③</td>
            <td class=\"column14 style63 f style15\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"3_14\" id=\"3_14\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row41\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column2 style30 s style15\" colspan=\"12\">諸費用合計②+③ </td>
            <td class=\"column14 style63 f style15\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"3_15\" id=\"3_15\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row42\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style83 f style84-bk\" colspan=\"22\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row43\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style68 s style70-bk\" colspan=\"13\">小計＝①＋②＋③</td>
            <td class=\"column14 style77 f style78-bk\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"3_16\" id=\"3_16\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row44\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style71 s style73-bk\" colspan=\"13\">（内消費税①と③の10%）</td>
            <td class=\"column14 style79 f style80-bk\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"3_17\" id=\"3_17\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row45\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style74 s style76-bk\" colspan=\"13\">支払合計金額（ 税込）</td>
            <td class=\"column14 style81 f style82-bk\" colspan=\"9\"><input type=\"text\" value=\"¥0\" name=\"3_18\" id=\"3_18\"  class=\"asd\" readonly style=\"text-align:right;\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row46\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style92 null style84\" colspan=\"36\"></td>
            <td class=\"column37 style1 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row47\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style93 s style66\" rowspan=\"5\">振込先</td>
            <td class=\"column2 style91 s style25\" colspan=\"19\" rowspan=\"5\">{{ siteInfo['BankInfo']|raw|nl2br }}<textarea style=\"display:none;\" name=\"4_1\" id=\"4_1\"  class=\"asd\" readonly\"><br>{{ siteInfo['BankInfo']|raw|nl2br }}</textarea></td>
            <td class=\"column21 style97 s style24\" rowspan=\"5\">お問合せ</td>
            <td class=\"column22 style204 s style25\" colspan=\"15\" rowspan=\"5\">{{ siteInfo['Display01']|raw|nl2br }}<textarea style=\"display:none;\" name=\"4_2\" id=\"4_2\"  class=\"asd\" readonly\"><br>{{ siteInfo['Display01']|raw|nl2br }}</textarea></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row48\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row49\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row50\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row51\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row52\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style101 null style14\" colspan=\"36\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row53\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style94 s style96-bk\" rowspan=\"5\">特記事項</td>
            <td class=\"column2 style100 s style25\" colspan=\"35\" rowspan=\"5\">毎度ありがとうございます。<br />
表題の通り、見積もり書をお送りいたしますので、ご査収ください。<br />
ご不明点がございましたら、<label id=\"4_3\">{{ siteInfo['CompanyPhone']}}</label><input type=\"hidden\" value=\"{{ siteInfo['CompanyPhone']}}\" name=\"4_3\">までお問合せください。<br />
今後ともどうぞよろしくお願いいたします。</td>
            <td class=\"column37 style1 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row54\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row55\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row56\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row57\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row58\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style98 null style99\" colspan=\"32\"></td>
            <td class=\"column33 style12 null\"></td>
            <td class=\"column34 style12 null\"></td>
            <td class=\"column35 style12 null\"></td>
            <td class=\"column36 style12 null\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
          </tr>
          <tr class=\"row59\">
            <td class=\"column0\">&nbsp;</td>
            <td class=\"column1 style2 null\"></td>
            <td class=\"column2 style2 null\"></td>
            <td class=\"column3 style2 null\"></td>
            <td class=\"column4 style2 null\"></td>
            <td class=\"column5 style2 null\"></td>
            <td class=\"column6 style2 null\"></td>
            <td class=\"column7 style2 null\"></td>
            <td class=\"column8 style2 null\"></td>
            <td class=\"column9 style2 null\"></td>
            <td class=\"column10 style2 null\"></td>
            <td class=\"column11 style2 null\"></td>
            <td class=\"column12 style2 null\"></td>
            <td class=\"column13 style2 null\"></td>
            <td class=\"column14 style2 null\"></td>
            <td class=\"column15 style2 null\"></td>
            <td class=\"column16 style2 null\"></td>
            <td class=\"column17 style2 null\"></td>
            <td class=\"column18 style2 null\"></td>
            <td class=\"column19 style2 null\"></td>
            <td class=\"column20 style2 null\"></td>
            <td class=\"column21 style2 null\"></td>
            <td class=\"column22 style2 null\"></td>
            <td class=\"column23 style2 null\"></td>
            <td class=\"column24 style2 null\"></td>
            <td class=\"column25 style2 null\"></td>
            <td class=\"column26 style2 null\"></td>
            <td class=\"column27 style2 null\"></td>
            <td class=\"column28 style2 null\"></td>
            <td class=\"column29 style2 null\"></td>
            <td class=\"column30 style2 null\"></td>
            <td class=\"column31 style2 null\"></td>
            <td class=\"column32 style2 null\"></td>
            <td class=\"column33 style2 null\"></td>
            <td class=\"column34 style2 null\"></td>
            <td class=\"column35 style2 null\"></td>
            <td class=\"column36 style2 null\"></td>
            <td class=\"column37 style2 null\"></td>
            
            
            
            
            
 
            
            
            
          </tr>
        </tbody>
    </table>
  </body>
</html>
", "Mypage/20002.html", "/Applications/MAMP/htdocs/eccube-mylocal/ec-cube/src/Eccube/Resource/template/default/Mypage/20002.html");
    }
}
