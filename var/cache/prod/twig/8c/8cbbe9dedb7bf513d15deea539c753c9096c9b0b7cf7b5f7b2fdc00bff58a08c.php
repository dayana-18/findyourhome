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

/* @SonataAdmin/CRUD/tree.html.twig */
class __TwigTemplate_53e9519d945297bfbef784aed38a6f12c747516f7f38fab6eee9a82dd2ba7a68 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tab_menu' => [$this, 'block_tab_menu'],
            'list_table' => [$this, 'block_list_table'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 16
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $macros["tree"] = $this->macros["tree"] = $this;
        // line 16
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_list.html.twig", "@SonataAdmin/CRUD/tree.html.twig", 16);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_tab_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        $this->loadTemplate("@SonataAdmin/CRUD/list_tab_menu.html.twig", "@SonataAdmin/CRUD/tree.html.twig", 41)->display(twig_to_array(["mode" => "tree", "action" =>         // line 43
($context["action"] ?? null), "admin" =>         // line 44
($context["admin"] ?? null)]));
    }

    // line 48
    public function block_list_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h1 class=\"box-title\">
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("element.tree_site_label", [], twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationdomain", [], "any", false, false, false, 53)), "html", null, true);
        echo "
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                            <strong class=\"text-info\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentSite"] ?? null), "name", [], "any", false, false, false, 56), "html", null, true);
        echo "</strong> <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contexts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["context"]) {
            // line 60
            echo "                                <li>
                                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "tree", 1 => ["context" => twig_get_attribute($this->env, $this->source, $context["context"], "id", [], "any", false, false, false, 61)]], "method", false, false, false, 61), "html", null, true);
            echo "\">
                                        ";
            // line 62
            if ((($context["currentContext"] ?? null) && (twig_get_attribute($this->env, $this->source, $context["context"], "id", [], "any", false, false, false, 62) == twig_get_attribute($this->env, $this->source, ($context["currentContext"] ?? null), "id", [], "any", false, false, false, 62)))) {
                // line 63
                echo "                                            <span class=\"pull-right\">
                                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                            </span>
                                        ";
            }
            // line 67
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "name", [], "any", false, false, false, 67), "html", null, true);
            echo "
                                    </a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </ul>
                    </div>
                </h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 76
        echo twig_call_macro($macros["tree"], "macro_navigate_child", [($context["collection"] ?? null), ($context["admin"] ?? null), true], 76, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 19
    public function macro_navigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 20
            echo "    <ul";
            if (($context["root"] ?? null)) {
                echo " class=\"sonata-tree\"";
            }
            echo ">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["collection"] ?? null), function ($__element__) use ($context, $macros) { $context["element"] = $__element__; return  !($context["root"] ?? null); }));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 22
                echo "            <li>
                <div class=\"sonata-tree__item\">
                    ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["element"], "parent", [], "any", false, false, false, 24)) {
                    echo "<i class=\"fa fa-caret-right\" aria-hidden=\"true\"></i>";
                }
                // line 25
                echo "                    <i class=\"fa fa-code\" aria-hidden=\"true\"></i>
                    <a class=\"sonata-tree__item__edit\" href=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => "edit", 1 => $context["element"]], "method", false, false, false, 26), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "name", [], "any", false, false, false, 26), "html", null, true);
                echo "</a>
                    <i class=\"text-muted\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "description", [], "any", false, false, false, 27), "html", null, true);
                echo "</i>
                    <a class=\"label label-default pull-right\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => "edit", 1 => $context["element"]], "method", false, false, false, 28), "html", null, true);
                echo "\">edit <i class=\"fa fa-magic\" aria-hidden=\"true\"></i></a>
                    ";
                // line 29
                if (true) {
                    echo "<span class=\"label label-warning pull-right\">true</span>";
                }
                // line 30
                echo "                </div>

                ";
                // line 32
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "children", [], "any", false, false, false, 32))) {
                    // line 33
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_navigate_child", [twig_get_attribute($this->env, $this->source, $context["element"], "children", [], "any", false, false, false, 33), ($context["admin"] ?? null), false], 33, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 35
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 37,  197 => 35,  191 => 33,  189 => 32,  185 => 30,  181 => 29,  177 => 28,  173 => 27,  167 => 26,  164 => 25,  160 => 24,  156 => 22,  152 => 21,  145 => 20,  130 => 19,  121 => 76,  114 => 71,  103 => 67,  97 => 63,  95 => 62,  91 => 61,  88 => 60,  84 => 59,  78 => 56,  72 => 53,  66 => 49,  62 => 48,  58 => 44,  57 => 43,  55 => 41,  51 => 40,  46 => 16,  44 => 18,  37 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/tree.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/tree.html.twig");
    }
}
