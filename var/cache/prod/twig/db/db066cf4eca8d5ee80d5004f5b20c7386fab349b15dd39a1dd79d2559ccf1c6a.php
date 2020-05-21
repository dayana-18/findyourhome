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

/* @SonataAdmin/Core/search.html.twig */
class __TwigTemplate_6de0c19120b92148ef620a91d5a8e973ff5734d87fb7c6a900eba3db64cca73e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/Core/search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_search_results", ["%query%" => ($context["query"] ?? null)], "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_search_results", ["%query%" => ($context["query"] ?? null)], "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if (((isset($context["query"]) || array_key_exists("query", $context)) &&  !(($context["query"] ?? null) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "            ";
                $context["display"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 23)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 23), "getOption", [0 => "role_super_admin"], "method", false, false, false, 23))) || (twig_length_filter($this->env, twig_array_filter(twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 23), function ($__role__) use ($context, $macros) { $context["role"] = $__role__; return $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["role"] ?? null)); })) > 0));
                // line 24
                echo "
            ";
                // line 25
                if (($context["display"] ?? null)) {
                    // line 26
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 27
                        echo "                    ";
                        $context["count"] = (($context["count"] ?? null) + 1);
                        // line 28
                        echo "                    ";
                        if (((twig_get_attribute($this->env, $this->source, $context["admin"], "hasRoute", [0 => "create"], "method", false, false, false, 28) && twig_get_attribute($this->env, $this->source, $context["admin"], "hasAccess", [0 => "create"], "method", false, false, false, 28)) || (twig_get_attribute($this->env, $this->source, $context["admin"], "hasRoute", [0 => "list"], "method", false, false, false, 28) && twig_get_attribute($this->env, $this->source, $context["admin"], "hasAccess", [0 => "list"], "method", false, false, false, 28)))) {
                            // line 29
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => "sonata.admin.block.search_result"], ["query" =>                             // line 32
($context["query"] ?? null), "admin_code" => twig_get_attribute($this->env, $this->source,                             // line 33
$context["admin"], "code", [], "any", false, false, false, 33), "page" => 0, "per_page" => 10, "icon" => twig_get_attribute($this->env, $this->source,                             // line 36
$context["group"], "icon", [], "any", false, false, false, 36)]]);
                            // line 37
                            echo "
                    ";
                        }
                        // line 39
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "            ";
                }
                // line 41
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </div>
    ";
        }
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  126 => 42,  120 => 41,  117 => 40,  111 => 39,  107 => 37,  105 => 36,  104 => 33,  103 => 32,  101 => 29,  98 => 28,  95 => 27,  90 => 26,  88 => 25,  85 => 24,  82 => 23,  78 => 22,  75 => 21,  72 => 20,  70 => 19,  64 => 17,  60 => 16,  54 => 15,  47 => 14,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Core/search.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/Core/search.html.twig");
    }
}
