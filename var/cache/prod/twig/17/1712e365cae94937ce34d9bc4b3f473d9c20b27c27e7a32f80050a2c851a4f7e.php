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

/* @SonataAdmin/Core/tab_menu_template.html.twig */
class __TwigTemplate_aef520a27c5b505e945e0f7a1bfe5bde76c6d1a9cf17e9ded93d8c2a5a120382 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'dividerElement' => [$this, 'block_dividerElement'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
            'dropdownElement' => [$this, 'block_dropdownElement'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 4)->unwrap();
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", [], "any", false, false, false, 5)) {
            // line 6
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, false, 6);
            // line 7
            $context["is_dropdown"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "dropdown", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "dropdown", [], "any", false, false, false, 7), false)) : (false));
            // line 8
            $context["divider_prepend"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_prepend", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_prepend", [], "any", false, false, false, 8), false)) : (false));
            // line 9
            $context["divider_append"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_append", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_append", [], "any", false, false, false, 9), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["dropdown" => null, "divider_prepend" => null, "divider_append" => null]);
            // line 14
            if (($context["divider_prepend"] ?? null)) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method", false, false, false, 19))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "class"], "method", false, false, false, 19)]) : ([]));
            // line 21
            if ((isset($context["matcher"]) || array_key_exists("matcher", $context))) {
                echo " ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", [0 => ($context["item"] ?? null)], "method", false, false, false, 22)) {
                    // line 23
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", [], "any", false, false, false, 23)]);
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 24
($context["matcher"] ?? null), "isAncestor", [0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", [], "any", false, false, false, 24)], "method", false, false, false, 24)) {
                    // line 25
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", [], "any", false, false, false, 25)]);
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "current", [], "any", false, false, false, 28)) {
                    // line 29
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", [], "any", false, false, false, 29)]);
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 30
($context["item"] ?? null), "currentAncestor", [], "any", false, false, false, 30)) {
                    // line 31
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", [], "any", false, false, false, 31)]);
                }
            }
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeFirst", [], "any", false, false, false, 35)) {
                // line 36
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "firstClass", [], "any", false, false, false, 36)]);
            }
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeLast", [], "any", false, false, false, 38)) {
                // line 39
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "lastClass", [], "any", false, false, false, 39)]);
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method", false, false, false, 43))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method", false, false, false, 43)]) : ([]));
            // line 44
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), [0 => ("menu_level_" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 44))]);
            // line 45
            echo "
";
            // line 47
            if (($context["is_dropdown"] ?? null)) {
                // line 48
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "dropdown"]);
                // line 49
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), [0 => "dropdown-menu"]);
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 54
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["class" => twig_join_filter(($context["classes"] ?? null), " ")]);
            }
            // line 56
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", [], "any", false, false, false, 56), ["class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")]);
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo twig_call_macro($macros["macros"], "macro_attributes", [($context["attributes"] ?? null)], 59, $context, $this->getSourceContext());
            echo ">";
            // line 60
            if (($context["is_dropdown"] ?? null)) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 62
($context["item"] ?? null), "uri", [], "any", false, false, false, 62)) && ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "current", [], "any", false, false, false, 62) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentAsLink", [], "any", false, false, false, 62)))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if (($context["divider_append"] ?? null)) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
    }

    // line 77
    public function block_dividerElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 78) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
    }

    // line 85
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 86)->unwrap();
        // line 87
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", [], "any", false, false, false, 87), "html", null, true);
        echo "\"";
        echo twig_call_macro($macros["macros"], "macro_attributes", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttributes", [], "any", false, false, false, 87)], 87, $context, $this->getSourceContext());
        echo ">
        ";
        // line 88
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method", false, false, false, 88))) {
            // line 89
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method", false, false, false, 89), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 91
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
    }

    // line 95
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 96)->unwrap();
        // line 97
        echo "    <span ";
        echo twig_call_macro($macros["macros"], "macro_attributes", [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttributes", [], "any", false, false, false, 97)], 97, $context, $this->getSourceContext());
        echo ">
        ";
        // line 98
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method", false, false, false, 98))) {
            // line 99
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method", false, false, false, 99), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 101
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
    }

    // line 105
    public function block_dropdownElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "    ";
        $macros["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 106)->unwrap();
        // line 107
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttribute", [0 => "class"], "method", false, false, false, 107))) ? ([0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttribute", [0 => "class"], "method", false, false, false, 107)]) : ([]));
        // line 108
        $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "dropdown-toggle"]);
        // line 109
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttributes", [], "any", false, false, false, 109);
        // line 110
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["class" => twig_join_filter(($context["classes"] ?? null), " ")]);
        // line 111
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-toggle" => "dropdown"]);
        // line 112
        echo "    <a href=\"#\"";
        echo twig_call_macro($macros["macros"], "macro_attributes", [($context["attributes"] ?? null)], 112, $context, $this->getSourceContext());
        echo ">
        ";
        // line 113
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method", false, false, false, 113))) {
            // line 114
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", [0 => "icon"], "method", false, false, false, 114), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 116
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
    }

    // line 121
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 123
($context["item"] ?? null), "label", [], "any", false, false, false, 123), twig_get_attribute($this->env, $this->source,         // line 124
($context["item"] ?? null), "getExtra", [0 => "translation_params", 1 => []], "method", false, false, false, 124), twig_get_attribute($this->env, $this->source,         // line 125
($context["item"] ?? null), "getExtra", [0 => "translation_domain", 1 => ((twig_get_attribute($this->env, $this->source,         // line 127
($context["item"] ?? null), "getParent", [], "method", false, false, false, 127)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getParent", [], "method", false, false, false, 127), "getExtra", [0 => "translation_domain"], "method", false, false, false, 127)) : (null))], "method", false, false, false, 125)), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 127,  301 => 125,  300 => 124,  299 => 123,  298 => 122,  294 => 121,  285 => 116,  279 => 114,  277 => 113,  272 => 112,  270 => 111,  268 => 110,  266 => 109,  264 => 108,  262 => 107,  259 => 106,  255 => 105,  247 => 101,  241 => 99,  239 => 98,  234 => 97,  231 => 96,  227 => 95,  219 => 91,  213 => 89,  211 => 88,  204 => 87,  201 => 86,  197 => 85,  191 => 81,  187 => 79,  185 => 78,  181 => 77,  174 => 72,  172 => 71,  167 => 68,  163 => 65,  159 => 63,  157 => 62,  154 => 61,  152 => 60,  148 => 59,  145 => 57,  143 => 56,  140 => 54,  138 => 53,  135 => 51,  132 => 49,  130 => 48,  128 => 47,  125 => 45,  123 => 44,  121 => 43,  118 => 41,  115 => 39,  113 => 38,  110 => 36,  108 => 35,  104 => 31,  102 => 30,  100 => 29,  98 => 28,  96 => 27,  92 => 25,  90 => 24,  88 => 23,  86 => 22,  83 => 21,  81 => 19,  78 => 17,  74 => 15,  72 => 14,  70 => 12,  67 => 10,  65 => 9,  63 => 8,  61 => 7,  59 => 6,  57 => 5,  55 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Core/tab_menu_template.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/Core/tab_menu_template.html.twig");
    }
}
