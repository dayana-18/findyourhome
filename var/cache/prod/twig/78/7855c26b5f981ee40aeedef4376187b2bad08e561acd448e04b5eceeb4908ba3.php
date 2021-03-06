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

/* @SonataAdmin/CRUD/list_html.html.twig */
class __TwigTemplate_f809cf1d6a049f802d2fd9dba13c9d137bda97e55447a386d516cf676f0c1631 extends \Twig\Template
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
        // line 1
        return $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("base_list_field", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [], "any", false, false, false, 1)), "@SonataAdmin/CRUD/list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (twig_test_empty(($context["value"] ?? null))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 7), "truncate", [], "any", true, true, false, 7)) {
                // line 8
                $context["truncate"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 8), "truncate", [], "any", false, false, false, 8);
                // line 9
                echo "            ";
                $context["length"] = ((twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "length", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "length", [], "any", false, false, false, 9), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = ((twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "preserve", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "preserve", [], "any", false, false, false, 10), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = ((twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "separator", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["truncate"] ?? null), "separator", [], "any", false, false, false, 11), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags(($context["value"] ?? null)), ($context["length"] ?? null), ($context["preserve"] ?? null), ($context["separator"] ?? null));
            } else {
                // line 14
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 14), "strip", [], "any", true, true, false, 14)) {
                    // line 15
                    $context["value"] = strip_tags(($context["value"] ?? null));
                }
                // line 17
                echo ($context["value"] ?? null);
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  77 => 17,  74 => 15,  72 => 14,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/list_html.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_html.html.twig");
    }
}
