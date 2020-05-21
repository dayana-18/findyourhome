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

/* @SonataAdmin/CRUD/display_time.html.twig */
class __TwigTemplate_113dece0b9abc76fbf6e8164cc356da2a38994c999208964ed528f2e653adb20 extends \Twig\Template
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
            echo "<time datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "H:i:sP", "UTC"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "H:i:sP", "UTC"), "html", null, true);
            echo "\">
            ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), "H:i:s", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 17), "timezone", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 17), "timezone", [], "any", false, false, false, 17), null)) : (null))), "html", null, true);
            echo "
        </time>";
        }
        $___internal_a33680b6472913b8de8ea6c04fe2dd39b397432ab3f8f964458eed2628edb522_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo twig_spaceless($___internal_a33680b6472913b8de8ea6c04fe2dd39b397432ab3f8f964458eed2628edb522_);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/display_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  51 => 17,  44 => 16,  41 => 14,  39 => 13,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/display_time.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/display_time.html.twig");
    }
}
