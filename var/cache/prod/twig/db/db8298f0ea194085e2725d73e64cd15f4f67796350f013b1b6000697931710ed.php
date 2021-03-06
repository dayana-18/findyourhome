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

/* @SonataAdmin/CRUD/Association/list_one_to_many.html.twig */
class __TwigTemplate_c23241e8c7ec35213193dd66f40b746ca8ae5fc0267ee3e8f8cc9778df6b0661 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'relation_link' => [$this, 'block_relation_link'],
            'relation_value' => [$this, 'block_relation_value'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("base_list_field", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [], "any", false, false, false, 12)), "@SonataAdmin/CRUD/Association/list_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 15), "route", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15);
        // line 16
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "hasassociationadmin", [], "any", false, false, false, 16) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 16), "hasRoute", [0 => ($context["route_name"] ?? null)], "method", false, false, false, 16))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 18), "hasAccess", [0 => ($context["route_name"] ?? null), 1 => $context["element"]], "method", false, false, false, 18)) {
                    // line 19
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 21
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 23
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 23)) {
                    echo ", ";
                }
                // line 24
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 27
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 27)) {
                    echo ", ";
                }
                // line 28
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
    }

    // line 32
    public function block_relation_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "associationadmin", [], "any", false, false, false, 33), "generateObjectUrl", [0 => ($context["route_name"] ?? null), 1 => ($context["element"] ?? null), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 33), "route", [], "any", false, false, false, 33), "parameters", [], "any", false, false, false, 33)], "method", false, false, false, 33), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["element"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
        // line 35
        echo "</a>";
    }

    // line 38
    public function block_relation_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["element"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/list_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 39,  161 => 38,  157 => 35,  155 => 34,  151 => 33,  147 => 32,  142 => 29,  128 => 28,  122 => 27,  104 => 26,  101 => 25,  87 => 24,  83 => 23,  80 => 21,  77 => 19,  75 => 18,  57 => 17,  54 => 16,  51 => 15,  47 => 14,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/Association/list_one_to_many.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/list_one_to_many.html.twig");
    }
}
