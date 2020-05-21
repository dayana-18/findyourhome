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

/* @SonataAdmin/CRUD/Intl/display_datetime.html.twig */
class __TwigTemplate_cf09b0c4a6c899a6106c646e0238e15f0904fc6baa79c0a6308c847324232bd7 extends \Twig\Template
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
            $context["pattern"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 16), "pattern", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 16), "pattern", [], "any", false, false, false, 16), "")) : (""));
            // line 17
            echo "        ";
            $context["calendar"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 17), "calendar", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 17), "calendar", [], "any", false, false, false, 17), "")) : (""));
            // line 18
            echo "        ";
            $context["locale"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 18), "locale", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 18), "locale", [], "any", false, false, false, 18), null)) : (null));
            // line 19
            echo "        ";
            $context["timezone"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 19), "timezone", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 19), "timezone", [], "any", false, false, false, 19), null)) : (null));
            // line 20
            echo "        ";
            $context["dateType"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 20), "dateType", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 20), "dateType", [], "any", false, false, false, 20), null)) : (null));
            // line 21
            echo "        ";
            $context["timeType"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 21), "timeType", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 21), "timeType", [], "any", false, false, false, 21), null)) : (null));
            // line 22
            echo "
        <time datetime=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "c", "UTC"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "c", "UTC"), "html", null, true);
            echo "\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, ($context["value"] ?? null), ($context["dateType"] ?? null), ($context["timeType"] ?? null), ($context["pattern"] ?? null), ($context["timezone"] ?? null), ($context["calendar"] ?? null), ($context["locale"] ?? null)), "html", null, true);
            echo "
        </time>";
        }
        $___internal_f2bcfbeab590ef042c0bd0630587fee01c0fdf74b16f598e96ea6d5b9478cf92_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_f2bcfbeab590ef042c0bd0630587fee01c0fdf74b16f598e96ea6d5b9478cf92_);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Intl/display_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  70 => 24,  64 => 23,  61 => 22,  58 => 21,  55 => 20,  52 => 19,  49 => 18,  46 => 17,  44 => 16,  41 => 14,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/Intl/display_datetime.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Intl/display_datetime.html.twig");
    }
}
