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

/* @SonataDatagrid/Search/pager.html.twig */
class __TwigTemplate_a08aa0d69af7ef0f9e81bea080b9239932776a2e8e1df4ba0463ab9db6f335c0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'pager_links' => [$this, 'block_pager_links'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('pager_links', $context, $blocks);
    }

    public function block_pager_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <ul class=\"pagination";
        if ((isset($context["pager_class"]) || array_key_exists("pager_class", $context))) {
            echo " ";
            echo twig_escape_filter($this->env, ($context["pager_class"] ?? null), "html", null, true);
        }
        echo "\">
        ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 14), "page", [], "any", false, false, false, 14) > 2)) {
            // line 15
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", [0 => "_route"], "method", false, false, false, 15), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 15), "query", [], "any", false, false, false, 15), "all", [], "any", false, false, false, 15), ["page" => 1])), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_first_pager", [], "SonataDatagridBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
        ";
        }
        // line 17
        echo "
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 18), "page", [], "any", false, false, false, 18) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 18), "previouspage", [], "any", false, false, false, 18))) {
            // line 19
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "attributes", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "query", [], "any", false, false, false, 19), "all", [], "any", false, false, false, 19), ["page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 19), "previouspage", [], "any", false, false, false, 19)])), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_previous_pager", [], "SonataDatagridBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
        ";
        }
        // line 21
        echo "
        ";
        // line 23
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 23), "getLinks", [0 => 5], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "            ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 24), "page", [], "any", false, false, false, 24))) {
                // line 25
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 25), "attributes", [], "any", false, false, false, 25), "get", [0 => "_route"], "method", false, false, false, 25), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "all", [], "any", false, false, false, 25), ["page" => $context["page"]])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 27
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", [0 => "_route"], "method", false, false, false, 27), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "query", [], "any", false, false, false, 27), "all", [], "any", false, false, false, 27), ["page" => $context["page"]])), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 31), "page", [], "any", false, false, false, 31) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 31), "nextpage", [], "any", false, false, false, 31))) {
            // line 32
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "attributes", [], "any", false, false, false, 32), "get", [0 => "_route"], "method", false, false, false, 32), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "query", [], "any", false, false, false, 32), "all", [], "any", false, false, false, 32), ["page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 32), "nextpage", [], "any", false, false, false, 32)])), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_next_pager", [], "SonataDatagridBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 35), "page", [], "any", false, false, false, 35) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 35), "lastpage", [], "any", false, false, false, 35)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 35), "lastpage", [], "any", false, false, false, 35) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 35), "nextpage", [], "any", false, false, false, 35)))) {
            // line 36
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 36), "attributes", [], "any", false, false, false, 36), "get", [0 => "_route"], "method", false, false, false, 36), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 36), "query", [], "any", false, false, false, 36), "all", [], "any", false, false, false, 36), ["page" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "pager", [], "any", false, false, false, 36), "lastpage", [], "any", false, false, false, 36)])), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_last_pager", [], "SonataDatagridBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
        ";
        }
        // line 38
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "@SonataDatagrid/Search/pager.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 38,  130 => 36,  128 => 35,  125 => 34,  117 => 32,  115 => 31,  112 => 30,  106 => 29,  98 => 27,  90 => 25,  87 => 24,  82 => 23,  79 => 21,  71 => 19,  69 => 18,  66 => 17,  58 => 15,  56 => 14,  48 => 13,  41 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataDatagrid/Search/pager.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/datagrid-bundle/src/Resources/views/Search/pager.html.twig");
    }
}
