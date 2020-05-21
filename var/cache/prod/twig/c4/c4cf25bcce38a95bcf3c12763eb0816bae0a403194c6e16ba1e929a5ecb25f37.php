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

/* @SonataDatagrid/Search/results.html.twig */
class __TwigTemplate_eefda5a1f3abbd4f2b7c6a26975a70036c9753e0719bd3fcef4adece036887da extends \Twig\Template
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
        // line 2
        echo "
<div class=\"row\">
    <form name=\"search\" method=\"get\" action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null));
        echo "\">
        <div class=\"row\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search", [], "any", false, false, false, 6), 'widget');
        echo "
        </div>

        <div class=\"row\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "priceStart", [], "any", false, false, false, 10), 'widget', ["horizontal_input_wrapper_class" => "col-sm-3", "attr" => ["min" => 1, "class" => "form-control", "placeholder" => "Start from"]]);
        // line 14
        echo "

            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "priceEnd", [], "any", false, false, false, 16), 'widget', ["horizontal_input_wrapper_class" => "col-sm-3", "attr" => ["min" => 1, "class" => "form-control", "placeholder" => "End to"]]);
        // line 20
        echo "
        </div>

        <div class=\"row\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sort", [], "any", false, false, false, 24), 'widget', ["horizontal_input_wrapper_class" => "col-sm-3"]);
        echo "
        </div>

        <div class=\"row col-sm-3\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Search\" />
        </div>
    </form>
</div>

<div class=\"row text-center\">
    ";
        // line 34
        $this->loadTemplate("@SonataDatagrid/Search/pager.html.twig", "@SonataDatagrid/Search/results.html.twig", 34)->display($context);
        // line 35
        echo "</div>

<div class=\"row\">
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 39
            echo "        <div class=\"col-sm-4\" itemscope itemtype=\"http://schema.org/Product\">
            ";
            // line 40
            $this->loadTemplate("@SonataProduct/Catalog/_product_grid.html.twig", "@SonataDatagrid/Search/results.html.twig", 40)->display($context);
            // line 41
            echo "        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@SonataDatagrid/Search/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 43,  109 => 41,  107 => 40,  104 => 39,  87 => 38,  82 => 35,  80 => 34,  67 => 24,  61 => 20,  59 => 16,  55 => 14,  53 => 10,  46 => 6,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataDatagrid/Search/results.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/datagrid-bundle/src/Resources/views/Search/results.html.twig");
    }
}
