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

/* @SonataAdmin/CRUD/Association/show_many_to_one.html.twig */
class __TwigTemplate_f1b43e9654483a3d209c6c9be03a69192d2cbbf06cbbd8f245e22b7bcfbf35de extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "@SonataAdmin/CRUD/Association/show_many_to_one.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        if (($context["value"] ?? null)) {
            // line 16
            echo "        ";
            $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 16), "route", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16);
            // line 17
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "hasAssociationAdmin", [], "any", false, false, false, 17) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 18
($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 18), "hasRoute", [0 => ($context["route_name"] ?? null)], "method", false, false, false, 18)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 19
($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 19), "hasAccess", [0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null)], "method", false, false, false, 19))) {
                // line 20
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 20), "generateObjectUrl", [0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 20), "route", [], "any", false, false, false, 20), "parameters", [], "any", false, false, false, 20)], "method", false, false, false, 20), "html", null, true);
                echo "\">
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
                echo "
        ";
            }
            // line 26
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/show_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  72 => 24,  66 => 21,  61 => 20,  59 => 19,  58 => 18,  56 => 17,  53 => 16,  50 => 15,  46 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/Association/show_many_to_one.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/show_many_to_one.html.twig");
    }
}
