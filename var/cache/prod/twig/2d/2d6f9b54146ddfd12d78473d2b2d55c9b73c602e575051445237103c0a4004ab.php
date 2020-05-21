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

/* @SonataAdmin/CRUD/base_list_flat_field.html.twig */
class __TwigTemplate_fc8029e680e54df211d3e5788946e78d6d7dd84eb548e23fa1e3757129f18a7a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
<span class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", [], "any", false, false, false, 12), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 12), "html", null, true);
        echo "\">
    ";
        // line 13
        if ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["field_description"] ?? null), "options", [], "any", false, true, false, 14), "identifier", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 14), "identifier", [], "any", false, false, false, 14), false)) : (false)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["field_description"] ?? null), "options", [], "any", false, true, false, 15), "route", [], "any", true, true, false, 15)) && twig_get_attribute($this->env, $this->source,         // line 16
($context["admin"] ?? null), "hasAccess", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 16), "route", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), 1 => ($context["object"] ?? null)], "method", false, false, false, 16)) && twig_get_attribute($this->env, $this->source,         // line 17
($context["admin"] ?? null), "hasRoute", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 17), "route", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17)], "method", false, false, false, 17))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 19), "route", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), 1 => ($context["object"] ?? null), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 19), "route", [], "any", false, false, false, 19), "parameters", [], "any", false, false, false, 19)], "method", false, false, false, 19), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</span>
";
    }

    // line 20
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_flat_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  69 => 25,  63 => 23,  59 => 21,  57 => 20,  53 => 19,  51 => 17,  50 => 16,  49 => 15,  48 => 14,  47 => 13,  41 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_list_flat_field.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list_flat_field.html.twig");
    }
}
