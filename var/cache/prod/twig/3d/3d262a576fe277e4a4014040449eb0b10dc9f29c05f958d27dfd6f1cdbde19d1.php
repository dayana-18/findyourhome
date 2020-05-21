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

/* @SonataAdmin/CRUD/base_show_field.html.twig */
class __TwigTemplate_c51d07c8f9fed69641133cc55425924a9f58ac5adf667e008770aa7bcd58c9d5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'name' => [$this, 'block_name'],
            'field' => [$this, 'block_field'],
            'field_value' => [$this, 'block_field_value'],
            'field_compare' => [$this, 'block_field_compare'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
<th";
        // line 12
        if ((((isset($context["is_diff"]) || array_key_exists("is_diff", $context))) ? (_twig_default_filter(($context["is_diff"] ?? null), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
    }

    // line 12
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "label", [], "any", false, false, false, 12), [], ((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "translationDomain", [], "any", false, false, false, 12)) ? (twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "translationDomain", [], "any", false, false, false, 12)) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 12)))), "html", null, true);
    }

    // line 14
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        ob_start(function () { return ''; });
        // line 16
        echo "            ";
        $context["collapse"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 16), "collapse", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 16), "collapse", [], "any", false, false, false, 16), false)) : (false));
        // line 17
        echo "            ";
        if (($context["collapse"] ?? null)) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", [], "any", false, false, false, 19), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", [], "any", false, false, false, 20), "read_more")) : ("read_more")), [], "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", [], "any", false, false, false, 21), "read_less")) : ("read_less")), [], "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        $___internal_50a40171688ea2f233ab18b7c892028c1df276290d7e9d9c15b2eb509cbad44e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo twig_spaceless($___internal_50a40171688ea2f233ab18b7c892028c1df276290d7e9d9c15b2eb509cbad44e_);
    }

    // line 22
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 23), "safe", [], "any", false, false, false, 23)) {
            echo ($context["value"] ?? null);
        } else {
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true));
        }
        // line 24
        echo "                    ";
    }

    // line 33
    public function block_field_compare($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    ";
        if ((isset($context["value_compare"]) || array_key_exists("value_compare", $context))) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = ($context["value_compare"] ?? null);
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  140 => 36,  137 => 35,  134 => 34,  130 => 33,  126 => 24,  119 => 23,  115 => 22,  111 => 15,  108 => 29,  102 => 27,  98 => 25,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  73 => 15,  69 => 14,  62 => 12,  58 => 33,  54 => 31,  52 => 14,  44 => 12,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_show_field.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show_field.html.twig");
    }
}
