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

/* @SonataAdmin/Block/block_search_result.html.twig */
class __TwigTemplate_9ad2e2540e80c6d2394e49a719522ee4bae780c7a92b4f4c5cf411e75ee801f9 extends \Twig\Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_block"] ?? null), "templates", [], "any", false, false, false, 12), "block_base", [], "any", false, false, false, 12), "@SonataAdmin/Block/block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $context["show_empty_boxes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 15), "container", [], "any", false, false, false, 15), "getParameter", [0 => "sonata.admin.configuration.global_search.empty_boxes"], "method", false, false, false, 15);
        // line 16
        echo "    ";
        $context["visibility_class"] = ("sonata-search-result-" . ($context["show_empty_boxes"] ?? null));
        // line 17
        echo "    ";
        if ((($context["pager"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "getResults", [], "method", false, false, false, 17)))) {
            // line 18
            echo "        ";
            $context["visibility_class"] = "sonata-search-result-show";
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    <div class=\"col-lg-4 col-md-6 search-box-item ";
        // line 21
        echo twig_escape_filter($this->env, ($context["visibility_class"] ?? null), "html", null, true);
        echo "\">
        <div class=\"box box-solid ";
        // line 22
        echo twig_escape_filter($this->env, ($context["visibility_class"] ?? null), "html", null, true);
        echo "\">
            <div class=\"box-header with-border ";
        // line 23
        echo twig_escape_filter($this->env, ($context["visibility_class"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 24
        $context["icon"] = ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", [], "any", false, false, false, 24), "")) : (""));
        // line 25
        echo "                ";
        echo ($context["icon"] ?? null);
        echo "
                <h3 class=\"box-title\">
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "label", [], "any", false, false, false, 27), [], twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationdomain", [], "any", false, false, false, 27)), "html", null, true);
        echo "
                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 31
        if ((($context["pager"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "getNbResults", [], "method", false, false, false, 31) > 0))) {
            // line 32
            echo "                        <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "getNbResults", [], "method", false, false, false, 32), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 33
($context["admin"] ?? null), "hasRoute", [0 => "create"], "method", false, false, false, 33) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "create"], "method", false, false, false, 33))) {
            // line 34
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "create"], "method", false, false, false, 34), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 38
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "list"], "method", false, false, false, 38) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "list"], "method", false, false, false, 38))) {
            // line 39
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "list"], "method", false, false, false, 39), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 43
        echo "                </div>
            </div>
            ";
        // line 45
        if ((($context["pager"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "getResults", [], "method", false, false, false, 45)))) {
            // line 46
            echo "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "getResults", [], "method", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 49
                echo "                            ";
                $context["link"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getSearchResultLink", [0 => $context["result"]], "method", false, false, false, 49);
                // line 50
                echo "                            ";
                if (($context["link"] ?? null)) {
                    // line 51
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", [0 => $context["result"]], "method", false, false, false, 51), "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 53
                    echo "                                <li><a>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", [0 => $context["result"]], "method", false, false, false, 53), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 55
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 59
            echo "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_results_found", [], "SonataAdminBundle"), "html", null, true);
            echo "</em>
                    </p>
                </div>
            ";
        }
        // line 65
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 65,  171 => 61,  167 => 59,  162 => 56,  156 => 55,  150 => 53,  142 => 51,  139 => 50,  136 => 49,  132 => 48,  128 => 46,  126 => 45,  122 => 43,  114 => 39,  111 => 38,  103 => 34,  101 => 33,  96 => 32,  94 => 31,  87 => 27,  81 => 25,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  64 => 20,  61 => 19,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  45 => 14,  35 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Block/block_search_result.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/Block/block_search_result.html.twig");
    }
}
