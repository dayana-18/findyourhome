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

/* @SonataAdmin/CRUD/show_trans.html.twig */
class __TwigTemplate_fbae58e60bd028089df8eee4adbe31b9fd4afc8309cb9c4621bcddf2bd95da60 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "@SonataAdmin/CRUD/show_trans.html.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $context["value_format"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 14), "format", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 14), "format", [], "any", false, false, false, 14), "%s")) : ("%s"));
        // line 15
        echo "
    ";
        // line 16
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 16), "catalogue", [], "any", true, true, false, 16)) {
            // line 17
            echo "        ";
            $context["value"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(sprintf(($context["value_format"] ?? null), ($context["value"] ?? null)));
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "        ";
            $context["value"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(sprintf(($context["value_format"] ?? null), ($context["value"] ?? null)), [], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 19), "catalogue", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 19), "catalogue", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 19))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 19))));
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 22), "safe", [], "any", false, false, false, 22)) {
            // line 23
            echo "        ";
            echo ($context["value"] ?? null);
            echo "
    ";
        } else {
            // line 25
            echo "        ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  75 => 23,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  56 => 16,  53 => 15,  50 => 14,  46 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/show_trans.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_trans.html.twig");
    }
}
