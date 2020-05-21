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

/* @SonataAdmin/Block/block_stats.html.twig */
class __TwigTemplate_22c80b9b1edae4c85e16a4bb6c6fb499cab280a3dc124a8731a46d474d8145ed extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'block' => [$this, 'block_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_block"] ?? null), "templates", [], "any", false, false, false, 12), "block_base", [], "any", false, false, false, 12), "@SonataAdmin/Block/block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["translation_domain"] = (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", [], "any", true, true, false, 14) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", [], "any", false, false, false, 14)))) ? (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", [], "any", false, false, false, 14)) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 14)));
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "color", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "count", [], "method", false, false, false, 20), "html", null, true);
        echo "</h3>
            <p>
                ";
        // line 22
        if (($context["translation_domain"] ?? null)) {
            // line 23
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "text", [], "any", false, false, false, 23), ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "count", [], "method", false, false, false, 23)], ($context["translation_domain"] ?? null)), "html", null, true);
            echo "
                ";
        } else {
            // line 25
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "text", [], "any", false, false, false, 25), "html", null, true);
            echo "
                ";
        }
        // line 27
        echo "            </p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", false, false, false, 30), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "list", 1 => ["filter" => twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "filters", [], "any", false, false, false, 32)]], "method", false, false, false, 32), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats_view_more", [], "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  89 => 32,  84 => 30,  79 => 27,  73 => 25,  67 => 23,  65 => 22,  60 => 20,  55 => 18,  52 => 17,  48 => 16,  44 => 12,  42 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Block/block_stats.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/Block/block_stats.html.twig");
    }
}
