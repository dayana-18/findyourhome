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

/* @SonataAdmin/CRUD/Association/list_many_to_one.html.twig */
class __TwigTemplate_cdaf461d73139f47d916fc9597d4ab8851021766d7d2fe3146c0099ab6bb041c extends \Twig\Template
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
        return $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("base_list_field", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [], "any", false, false, false, 12)), "@SonataAdmin/CRUD/Association/list_many_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
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
            if ((((( !((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 17), "identifier", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 17), "identifier", [], "any", false, false, false, 17), false)) : (false)) && twig_get_attribute($this->env, $this->source,             // line 18
($context["field_description"] ?? null), "hasAssociationAdmin", [], "any", false, false, false, 18)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 19
($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 19), "hasRoute", [0 => ($context["route_name"] ?? null)], "method", false, false, false, 19)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 20), "hasAccess", [0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null)], "method", false, false, false, 20)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 21), "id", [0 => ($context["value"] ?? null)], "method", false, false, false, 21))) {
                // line 23
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 23), "generateObjectUrl", [0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 23), "route", [], "any", false, false, false, 23), "parameters", [], "any", false, false, false, 23)], "method", false, false, false, 23), "html", null, true);
                echo "\">
                ";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 27
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
                echo "
        ";
            }
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/list_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  73 => 27,  67 => 24,  62 => 23,  60 => 21,  59 => 20,  58 => 19,  57 => 18,  55 => 17,  52 => 16,  49 => 15,  45 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/Association/list_many_to_one.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/list_many_to_one.html.twig");
    }
}
