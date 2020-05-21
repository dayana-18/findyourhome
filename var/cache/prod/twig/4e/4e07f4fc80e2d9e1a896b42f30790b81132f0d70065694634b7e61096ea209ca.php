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

/* @SonataBlock/Block/block_container.html.twig */
class __TwigTemplate_3603223888cc50b80d63d19139cfc5079e726c5da1b0d11bcd685d35821e723a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'block_class' => [$this, 'block_block_class'],
            'block_role' => [$this, 'block_block_role'],
            'block' => [$this, 'block_block'],
            'block_child_render' => [$this, 'block_block_child_render'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_block"] ?? null), "templates", [], "any", false, false, false, 12), "block_base", [], "any", false, false, false, 12), "@SonataBlock/Block/block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " cms-container";
        if ( !twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "hasParent", [], "method", false, false, false, 15)) {
            echo " cms-container-root";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "class", [], "any", false, false, false, 15)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "class", [], "any", false, false, false, 15), "html", null, true);
        }
    }

    // line 18
    public function block_block_role($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "container";
    }

    // line 21
    public function block_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        if (($context["decorator"] ?? null)) {
            echo twig_get_attribute($this->env, $this->source, ($context["decorator"] ?? null), "pre", [], "any", false, false, false, 22);
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "children", [], "any", false, false, false, 23));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if (($context["decorator"] ?? null)) {
            echo twig_get_attribute($this->env, $this->source, ($context["decorator"] ?? null), "post", [], "any", false, false, false, 28);
        }
    }

    // line 24
    public function block_block_child_render($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [($context["child"] ?? null)]);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 25,  120 => 24,  113 => 28,  99 => 27,  96 => 24,  78 => 23,  73 => 22,  69 => 21,  62 => 18,  48 => 15,  38 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataBlock/Block/block_container.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_container.html.twig");
    }
}
