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

/* @SonataCore/Form/color.html.twig */
class __TwigTemplate_f439d63af344a8e69b6b2d1e58e9b4079c00071e7414b247109febb1bd9168c8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sonata_type_color_widget' => [$this, 'block_sonata_type_color_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $this->displayBlock('sonata_type_color_widget', $context, $blocks);
    }

    public function block_sonata_type_color_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        ob_start(function () { return ''; });
        // line 13
        echo "        <input type=\"color\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@SonataCore/Form/color.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  45 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataCore/Form/color.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/views/Form/color.html.twig");
    }
}
