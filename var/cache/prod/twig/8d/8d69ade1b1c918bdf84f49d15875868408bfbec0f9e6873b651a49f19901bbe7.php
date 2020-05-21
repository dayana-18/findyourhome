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

/* @SonataAdmin/Pager/base_links.html.twig */
class __TwigTemplate_8f8b3570b08dabcb45195b145ad08a53e7177203d7480611125e09f0af615f47 extends \Twig\Template
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
<div class=\"text-center\">
    <ul class=\"pagination\">
        ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 14), "pager", [], "any", false, false, false, 14), "page", [], "any", false, false, false, 14) > 2)) {
            // line 15
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => ($context["action"] ?? null), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", [], "any", false, false, false, 15), "paginationparameters", [0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 15), 1 => 1], "method", false, false, false, 15)], "method", false, false, false, 15), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_first_pager", [], "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 18), "pager", [], "any", false, false, false, 18), "page", [], "any", false, false, false, 18) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 18), "pager", [], "any", false, false, false, 18), "previouspage", [], "any", false, false, false, 18))) {
            // line 19
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => ($context["action"] ?? null), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", [], "any", false, false, false, 19), "paginationparameters", [0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 19), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 19), "pager", [], "any", false, false, false, 19), "previouspage", [], "any", false, false, false, 19)], "method", false, false, false, 19)], "method", false, false, false, 19), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_previous_pager", [], "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
        ";
        }
        // line 21
        echo "
        ";
        // line 23
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 23), "pager", [], "any", false, false, false, 23), "getLinks", [0 => twig_get_attribute($this->env, $this->source, ($context["admin_pool"] ?? null), "getOption", [0 => "pager_links"], "method", false, false, false, 23)], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "            ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 24), "pager", [], "any", false, false, false, 24), "page", [], "any", false, false, false, 24))) {
                // line 25
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => ($context["action"] ?? null), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", [], "any", false, false, false, 25), "paginationparameters", [0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 25), 1 => $context["page"]], "method", false, false, false, 25)], "method", false, false, false, 25), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 27
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => ($context["action"] ?? null), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", [], "any", false, false, false, 27), "paginationparameters", [0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 27), 1 => $context["page"]], "method", false, false, false, 27)], "method", false, false, false, 27), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
            ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 31), "pager", [], "any", false, false, false, 31), "page", [], "any", false, false, false, 31) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 31), "pager", [], "any", false, false, false, 31), "nextpage", [], "any", false, false, false, 31))) {
            // line 32
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => ($context["action"] ?? null), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", [], "any", false, false, false, 32), "paginationparameters", [0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 32), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 32), "pager", [], "any", false, false, false, 32), "nextpage", [], "any", false, false, false, 32)], "method", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_next_pager", [], "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 35), "pager", [], "any", false, false, false, 35), "page", [], "any", false, false, false, 35) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 35), "pager", [], "any", false, false, false, 35), "lastpage", [], "any", false, false, false, 35)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 35), "pager", [], "any", false, false, false, 35), "lastpage", [], "any", false, false, false, 35) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 35), "pager", [], "any", false, false, false, 35), "nextpage", [], "any", false, false, false, 35)))) {
            // line 36
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => ($context["action"] ?? null), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", [], "any", false, false, false, 36), "paginationparameters", [0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 36), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 36), "pager", [], "any", false, false, false, 36), "lastpage", [], "any", false, false, false, 36)], "method", false, false, false, 36)], "method", false, false, false, 36), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_last_pager", [], "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
        ";
        }
        // line 38
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 38,  116 => 36,  114 => 35,  111 => 34,  103 => 32,  101 => 31,  98 => 30,  92 => 29,  84 => 27,  76 => 25,  73 => 24,  68 => 23,  65 => 21,  57 => 19,  55 => 18,  52 => 17,  44 => 15,  42 => 14,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Pager/base_links.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/Pager/base_links.html.twig");
    }
}
