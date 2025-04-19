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

/* Block/search_product.twig */
class __TwigTemplate_10a333cee9e2100340e275b0189a859115d117d638be6558b265f800a65fd2c0 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/search_product.twig"));

        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 12
        echo "
<div class=\"ec-headerSearch\">
    <form method=\"get\" class=\"searchform\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_list");
        echo "\">
        <div class=\"ec-headerSearch__category\">
            <div class=\"ec-select ec-select_search\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "category_id", [], "any", false, false, false, 17), 'widget', ["id" => null, "attr" => ["class" => "category_id"]]);
        echo "
            </div>
        </div>
        <div class=\"ec-headerSearch__keyword\">
            <div class=\"ec-input\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), 'widget', ["id" => null, "attr" => ["class" => "search-name", "placeholder" => "キーワードを入力"]]);
        echo "
                <button class=\"ec-headerSearch__keywordBtn\" type=\"submit\">
                    <div class=\"ec-icon\">
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/search-dark.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </button>
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Block/search_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  60 => 22,  52 => 17,  46 => 14,  42 => 12,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% form_theme form 'Form/form_div_layout.twig' %}

<div class=\"ec-headerSearch\">
    <form method=\"get\" class=\"searchform\" action=\"{{ path('product_list') }}\">
        <div class=\"ec-headerSearch__category\">
            <div class=\"ec-select ec-select_search\">
                {{ form_widget(form.category_id, {'id': null, 'attr': {'class': 'category_id'}}) }}
            </div>
        </div>
        <div class=\"ec-headerSearch__keyword\">
            <div class=\"ec-input\">
                {{ form_widget(form.name, {'id': null, 'attr': {'class': 'search-name', 'placeholder' : 'キーワードを入力' }} ) }}
                <button class=\"ec-headerSearch__keywordBtn\" type=\"submit\">
                    <div class=\"ec-icon\">
                        <img src=\"{{ asset('assets/icon/search-dark.svg') }}\" alt=\"\">
                    </div>
                </button>
            </div>
        </div>
    </form>
</div>
", "Block/search_product.twig", "/Applications/MAMP/htdocs/eccube-mylocal/ec-cube/src/Eccube/Resource/template/default/Block/search_product.twig");
    }
}
