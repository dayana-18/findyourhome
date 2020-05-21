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

/* @SonataAdmin/CRUD/Intl/display_decimal.html.twig */
class __TwigTemplate_59e69b22b9d984836b37450d2a26bb698080c5ad7880b6e3498c1950f75b559e extends \Twig\Template
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
        if ((null === ($context["value"] ?? null))) {
            // line 14
            echo "&nbsp;";
        } else {
            // line 16
            $context["attributes"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 16), "attributes", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 16), "attributes", [], "any", false, false, false, 16), [])) : ([]));
            // line 17
            echo "        ";
            $context["locale"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 17), "locale", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 17), "locale", [], "any", false, false, false, 17), null)) : (null));
            // line 18
            echo "        ";
            $context["type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 18), "type", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 18), "type", [], "any", false, false, false, 18), "default")) : ("default"));
            // line 19
            echo "
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatNumber(($context["value"] ?? null), ($context["attributes"] ?? null), "decimal", ($context["type"] ?? null), ($context["locale"] ?? null)), "html", null, true);
        }
        $___internal_4b8a1e6585264c3173a2a75268d548cb89aa09b377e676d04a363436f4041dcb_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_4b8a1e6585264c3173a2a75268d548cb89aa09b377e676d04a363436f4041dcb_);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Intl/display_decimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  55 => 20,  52 => 19,  49 => 18,  46 => 17,  44 => 16,  41 => 14,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/Intl/display_decimal.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Intl/display_decimal.html.twig");
    }
}
