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

/* @SonataBlock/Block/block_side_menu_template.html.twig */
class __TwigTemplate_e238779042ffca2db33c962bc284a3b15f00417db2915429c9215f61249d68a2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'list' => [$this, 'block_list'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataBlock/Block/block_side_menu_template.html.twig", 14)->unwrap();
        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataBlock/Block/block_side_menu_template.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", [], "any", false, false, false, 17) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 17) === 0)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", [], "any", false, false, false, 17))) {
            // line 18
            echo "        <div";
            echo twig_call_macro($macros["macros"], "macro_attributes", [($context["listAttributes"] ?? null)], 18, $context, $this->getSourceContext());
            echo ">
            ";
            // line 19
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 24
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", [], "any", false, false, false, 25)) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method", false, false, false, 27))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method", false, false, false, 27)]) : ([]));
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", [0 => ($context["item"] ?? null)], "method", false, false, false, 28)) {
                // line 29
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", [], "any", false, false, false, 29)]);
            } elseif (twig_get_attribute($this->env, $this->source,             // line 30
($context["matcher"] ?? null), "isAncestor", [0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 30)], "method", false, false, false, 30)) {
                // line 31
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", [], "any", false, false, false, 31)]);
            }
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeFirst", [], "any", false, false, false, 33)) {
                // line 34
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "firstClass", [], "any", false, false, false, 34)]);
            }
            // line 36
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeLast", [], "any", false, false, false, 36)) {
                // line 37
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "lastClass", [], "any", false, false, false, 37)]);
            }
            // line 39
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, false, 39);
            // line 40
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 41
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["class" => twig_join_filter(($context["classes"] ?? null), " ")]);
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 44)) && ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "current", [], "any", false, false, false, 44) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentAsLink", [], "any", false, false, false, 44)))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method", false, false, false, 50))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method", false, false, false, 50)]) : ([]));
            // line 51
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), [0 => ("menu_level_" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 51))]);
            // line 52
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", [], "any", false, false, false, 52), ["class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")]);
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 57), "html", null, true);
        echo "\"";
        echo twig_call_macro($macros["macros"], "macro_attributes", [twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttributes", [], "any", false, false, false, 57)), ($context["attributes"] ?? null))], 57, $context, $this->getSourceContext());
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<div";
        echo twig_call_macro($macros["macros"], "macro_attributes", [twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttributes", [], "any", false, false, false, 59)), ($context["attributes"] ?? null))], 59, $context, $this->getSourceContext());
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  137 => 57,  129 => 53,  127 => 52,  125 => 51,  123 => 50,  121 => 49,  117 => 47,  113 => 45,  111 => 44,  109 => 43,  106 => 41,  104 => 40,  102 => 39,  99 => 37,  97 => 36,  94 => 34,  92 => 33,  89 => 31,  87 => 30,  85 => 29,  83 => 28,  81 => 27,  79 => 26,  76 => 25,  72 => 24,  64 => 19,  59 => 18,  56 => 17,  52 => 16,  47 => 12,  45 => 14,  38 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataBlock/Block/block_side_menu_template.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_side_menu_template.html.twig");
    }
}
