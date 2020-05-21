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

/* @SonataAdmin/Core/add_block.html.twig */
class __TwigTemplate_7b3c4f68d0991f55c7111228fd574938c3dd376a843a2c7410486189e52e4b58 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'user_block' => [$this, 'block_user_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["items_per_column"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 2), "getOption", [0 => "dropdown_number_groups_per_colums"], "method", false, false, false, 2);
        // line 3
        echo "    ";
        $context["groups"] = [];
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 5), "dashboardgroups", [], "any", false, false, false, 5), function ($__group__) use ($context, $macros) { $context["group"] = $__group__; return (twig_length_filter($this->env, twig_array_filter(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 5), function ($__admin__) use ($context, $macros) { $context["admin"] = $__admin__; return (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "create"], "method", false, false, false, 5) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "create"], "method", false, false, false, 5)); })) > 0); }));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "        ";
            $context["groups"] = twig_array_merge([0 => $context["group"]], ($context["groups"] ?? null));
            // line 7
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    ";
        // line 9
        $context["column_count"] = twig_round((twig_length_filter($this->env, ($context["groups"] ?? null)) / ($context["items_per_column"] ?? null)), 0, "ceil");
        // line 10
        echo "
    <div class=\"dropdown-menu multi-column dropdown-add\"
        ";
        // line 12
        if ((($context["column_count"] ?? null) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, (($context["column_count"] ?? null) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 13
        echo "    >
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groups"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 15
            echo "            ";
            $context["display"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 15)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 15), "getOption", [0 => "role_admin"], "method", false, false, false, 15))) || (twig_length_filter($this->env, twig_array_filter(twig_get_attribute($this->env, $this->source, $context["group"], "roles", [], "any", false, false, false, 15), function ($__role__) use ($context, $macros) { $context["role"] = $__role__; return $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["role"] ?? null)); })) > 0));
            // line 16
            echo "
            ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 17)) {
                // line 18
                echo "                ";
                $context["render_first_element"] = true;
                // line 19
                echo "            ";
            }
            // line 20
            echo "
            ";
            // line 21
            if (($context["display"] ?? null)) {
                // line 22
                echo "                ";
                if ((($context["render_first_element"] ?? null) || ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 22) % ($context["items_per_column"] ?? null)) == 0))) {
                    // line 23
                    echo "                    ";
                    if (($context["render_first_element"] ?? null)) {
                        // line 24
                        echo "                        <div class=\"container-fluid\">
                            <div class=\"row\">
                        ";
                        // line 26
                        $context["render_first_element"] = false;
                        // line 27
                        echo "                    ";
                    } else {
                        // line 28
                        echo "                        </ul>
                    ";
                    }
                    // line 30
                    echo "                    <ul class=\"dropdown-menu";
                    if ((($context["column_count"] ?? null) > 1)) {
                        echo " col-md-";
                        echo twig_escape_filter($this->env, twig_round((12 / ($context["column_count"] ?? null))), "html", null, true);
                    }
                    echo "\">
                ";
                }
                // line 32
                echo "                ";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 32) % ($context["items_per_column"] ?? null)) != 0)) {
                    // line 33
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 35
                echo "                <li role=\"presentation\" class=\"dropdown-header\">
                    ";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["group"], "icon", [], "any", false, false, false, 36);
                echo "
                    ";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 37), [], twig_get_attribute($this->env, $this->source, $context["group"], "label_catalogue", [], "any", false, false, false, 37)), "html", null, true);
                echo "
                </li>

                ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", [], "any", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 41
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["admin"], "hasRoute", [0 => "create"], "method", false, false, false, 41) && twig_get_attribute($this->env, $this->source, $context["admin"], "hasAccess", [0 => "create"], "method", false, false, false, 41))) {
                        // line 42
                        echo "                        ";
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["admin"], "subClasses", [], "any", false, false, false, 42))) {
                            // line 43
                            echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                            // line 44
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", [0 => "create"], "method", false, false, false, 44), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["admin"], "label", [], "any", false, false, false, 44), [], twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", [], "any", false, false, false, 44)), "html", null, true);
                            echo "</a>
                            </li>
                        ";
                        } else {
                            // line 47
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, $context["admin"], "subclasses", [], "any", false, false, false, 47)));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 48
                                echo "                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                                // line 49
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", [0 => "create", 1 => ["subclass" => $context["subclass"]]], "method", false, false, false, 49), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["subclass"], [], twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", [], "any", false, false, false, 49)), "html", null, true);
                                echo "</a>
                                </li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 52
                            echo "                        ";
                        }
                        // line 53
                        echo "                    ";
                    }
                    // line 54
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 55) &&  !($context["render_first_element"] ?? null))) {
                    // line 56
                    echo "                    </ul>
                    </div>
                    </div>
                ";
                }
                // line 60
                echo "            ";
            }
            // line 61
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  247 => 62,  233 => 61,  230 => 60,  224 => 56,  221 => 55,  215 => 54,  212 => 53,  209 => 52,  198 => 49,  195 => 48,  190 => 47,  182 => 44,  179 => 43,  176 => 42,  173 => 41,  169 => 40,  163 => 37,  159 => 36,  156 => 35,  152 => 33,  149 => 32,  140 => 30,  136 => 28,  133 => 27,  131 => 26,  127 => 24,  124 => 23,  121 => 22,  119 => 21,  116 => 20,  113 => 19,  110 => 18,  108 => 17,  105 => 16,  102 => 15,  85 => 14,  82 => 13,  76 => 12,  72 => 10,  70 => 9,  67 => 8,  61 => 7,  58 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Core/add_block.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/Core/add_block.html.twig");
    }
}
