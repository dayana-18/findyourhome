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

/* @SonataAdmin/CRUD/display_datetime.html.twig */
class __TwigTemplate_f54c429a3d3df7091d3a6c61f79e6a1309cabe49b8a39e35cc3a73cca561b5fd extends \Twig\Template
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
        // line 12
        ob_start(function () { return ''; });
        // line 13
        if (twig_test_empty(($context["value"] ?? null))) {
            // line 14
            echo "&nbsp;";
        } else {
            // line 16
            $context["options"] = ((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 16), null)) : (null));
            // line 17
            echo "        <time datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "c", "UTC"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "c", "UTC"), "html", null, true);
            echo "\">
            ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "format", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "format", [], "any", false, false, false, 18), null)) : (null)), ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "timezone", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "timezone", [], "any", false, false, false, 18), null)) : (null))), "html", null, true);
            echo "
        </time>";
        }
        $___internal_0d898f61d5c25ce8ce8bd2acc96c566196513803375963b44d5a3ec77036e971_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_0d898f61d5c25ce8ce8bd2acc96c566196513803375963b44d5a3ec77036e971_);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/display_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 18,  46 => 17,  44 => 16,  41 => 14,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/display_datetime.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/display_datetime.html.twig");
    }
}
