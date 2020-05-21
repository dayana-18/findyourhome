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

/* @SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig */
class __TwigTemplate_a1f564c3802d22ba872a9acd92f999014b814188bb297230d6cef515d2c633c3 extends \Twig\Template
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
        // line 12
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 17), "route", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17);
        // line 18
        echo "    ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "hasAssociationAdmin", [], "any", false, false, false, 18) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 19), "id", [0 => ($context["value"] ?? null)], "method", false, false, false, 19)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 20), "hasRoute", [0 => ($context["route_name"] ?? null)], "method", false, false, false, 20)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 21), "hasAccess", [0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null)], "method", false, false, false, 21))) {
            // line 22
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 22), "generateObjectUrl", [0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 22), "route", [], "any", false, false, false, 22), "parameters", [], "any", false, false, false, 22)], "method", false, false, false, 22), "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 26
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  64 => 23,  59 => 22,  57 => 21,  56 => 20,  55 => 19,  53 => 18,  50 => 17,  46 => 16,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/show_orm_one_to_one.html.twig");
    }
}
