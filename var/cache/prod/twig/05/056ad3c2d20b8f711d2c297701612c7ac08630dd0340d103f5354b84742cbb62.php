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

/* @SonataAdmin/CRUD/list__action_show.html.twig */
class __TwigTemplate_86d3d4cc1ab45468e756f7c862e7042d916180569da467ad788c902e2f723fbf extends \Twig\Template
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
        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "show", 1 => ($context["object"] ?? null)], "method", false, false, false, 12) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "show"], "method", false, false, false, 12))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => "show", 1 => ($context["object"] ?? null)], "method", false, false, false, 13), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default view_link\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_show", [], "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_show", [], "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  42 => 13,  40 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/list__action_show.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list__action_show.html.twig");
    }
}
