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

/* @SonataAdmin/Menu/sonata_menu.html.twig */
class __TwigTemplate_1e186ade1382f162580de245f65047febd4e8dbf6156b63dd99bf19f4d823ae7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'root' => [$this, 'block_root'],
            'item' => [$this, 'block_item'],
            'linkElement' => [$this, 'block_linkElement'],
            'spanElement' => [$this, 'block_spanElement'],
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
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Menu/sonata_menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", [], "any", false, false, false, 4), ["class" => "sidebar-menu", "data-widget" => "tree"]);
        // line 5
        $context["request"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "request"], "method", false, false, false, 5)) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "request"], "method", false, false, false, 5)) : (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 5)));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    // line 9
    public function block_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", [], "any", false, false, false, 10)) {
            // line 12
            $context["display"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "roles"], "method", false, false, false, 12)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 12), "getOption", [0 => "role_super_admin"], "method", false, false, false, 12))) || (twig_length_filter($this->env, twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "roles"], "method", false, false, false, 12), function ($__role__) use ($context, $macros) { $context["role"] = $__role__; return $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["role"] ?? null)); })) > 0));
        }
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", [], "any", false, false, false, 15) && (((isset($context["display"]) || array_key_exists("display", $context))) ? (_twig_default_filter(($context["display"] ?? null))) : ("")))) {
            // line 16
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["branch_class" => "treeview", "currentClass" => "active", "ancestorClass" => "active"]);
            // line 17
            twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "setChildrenAttribute", [0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method", false, false, false, 17) . " active"))], "method", false, false, false, 17);
            // line 18
            twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "setChildrenAttribute", [0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", [0 => "class"], "method", false, false, false, 18) . " treeview-menu"))], "method", false, false, false, 18);
            // line 19
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
    }

    // line 23
    public function block_linkElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        ob_start(function () { return ''; });
        // line 25
        echo "        ";
        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "label_catalogue", 1 => "messages"], "method", false, false, false, 25);
        // line 26
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "on_top"], "method", true, true, false, 26) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "on_top"], "method", false, false, false, 26))) {
            // line 27
            echo "            ";
            $context["icon"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method", false, false, false, 27), (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 27) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", [], "any", false, false, false, 27) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 28
            echo "        ";
        } else {
            // line 29
            echo "            ";
            $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method", false, false, false, 29);
            // line 30
            echo "        ";
        }
        // line 31
        echo "        ";
        $context["is_link"] = true;
        // line 32
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        $___internal_d12b634bd3329165e5f0ba5e4da87e2cc93df13b45efef36438941ab57e47cd4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        echo twig_spaceless($___internal_d12b634bd3329165e5f0ba5e4da87e2cc93df13b45efef36438941ab57e47cd4_);
    }

    // line 36
    public function block_spanElement($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        ob_start(function () { return ''; });
        // line 38
        echo "        <a href=\"#\">
            ";
        // line 39
        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "label_catalogue"], "method", false, false, false, 39);
        // line 40
        echo "            ";
        $context["icon"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "icon"], "method", false, false, false, 40), "")) : (""));
        // line 41
        echo "            ";
        echo ($context["icon"] ?? null);
        echo "
            ";
        // line 42
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 43
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "keep_open"], "method", true, true, false, 43) ||  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "keep_open"], "method", false, false, false, 43))) {
            // line 44
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 46
        echo "</a>
    ";
        $___internal_2b8fe7bba791d968451ae0e75adcf24f38cc4580bf09a50f78b90220e8193fe0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo twig_spaceless($___internal_2b8fe7bba791d968451ae0e75adcf24f38cc4580bf09a50f78b90220e8193fe0_);
    }

    // line 50
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (((isset($context["is_link"]) || array_key_exists("is_link", $context)) && ($context["is_link"] ?? null))) {
            echo (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter(($context["icon"] ?? null))) : (""));
        }
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "allow_safe_labels", [], "any", false, false, false, 50) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", [0 => "safe_label", 1 => false], "method", false, false, false, 50))) {
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 50);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 50), [], (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context))) ? (_twig_default_filter(($context["translation_domain"] ?? null), "messages")) : ("messages"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Menu/sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 50,  158 => 37,  154 => 46,  151 => 44,  149 => 43,  147 => 42,  142 => 41,  139 => 40,  137 => 39,  134 => 38,  131 => 37,  127 => 36,  123 => 24,  117 => 32,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  89 => 23,  81 => 19,  79 => 18,  77 => 17,  74 => 16,  72 => 15,  69 => 12,  67 => 10,  63 => 9,  58 => 6,  56 => 5,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Menu/sonata_menu.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/Menu/sonata_menu.html.twig");
    }
}
