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

/* @SonataAdmin/CRUD/base_show.html.twig */
class __TwigTemplate_35c0f90914ca208cd204ba4cea7298be33eb27c5e8875eaa29dfdaac7c1eb851 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navbar_title' => [$this, 'block_navbar_title'],
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'show' => [$this, 'block_show'],
            'show_groups' => [$this, 'block_show_groups'],
            'field_row' => [$this, 'block_field_row'],
            'show_title' => [$this, 'block_show_title'],
            'show_field' => [$this, 'block_show_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/base_show.html.twig", 12);
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
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_show", ["%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", [0 => ($context["object"] ?? null)], "method", false, false, false, 15), 15)], "SonataAdminBundle"), "html", null, true);
        echo "
";
    }

    // line 18
    public function block_navbar_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_show", ["%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", [0 => ($context["object"] ?? null)], "method", false, false, false, 19), 100)], "SonataAdminBundle"), "html", null, true);
        echo "
";
    }

    // line 22
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_show.html.twig", 23)->display($context);
    }

    // line 26
    public function block_tab_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "sidemenu", [0 => ($context["action"] ?? null)], "method", false, false, false, 27), ["currentClass" => "active", "template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("tab_menu_template")], "twig");
        // line 30
        echo "
";
    }

    // line 33
    public function block_show($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.show.top", ["admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null)]]);
        echo "

        ";
        // line 38
        $context["has_tab"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", [], "any", false, false, false, 38)) == 1) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", [], "any", false, false, false, 38))) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null) != "default")) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", [], "any", false, false, false, 38)) > 1));
        // line 39
        echo "
        ";
        // line 40
        if (($context["has_tab"] ?? null)) {
            // line 41
            echo "            ";
            $context["tab_prefix"] = ((("tab_" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "any", false, false, false, 41)) . "_") . twig_random($this->env));
            // line 42
            echo "            ";
            $context["tab_query_index"] = twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 42), "query", [], "any", false, false, false, 42), "get", [0 => "_tab", 1 => 0], "method", false, false, false, 42), "_"));
            // line 43
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", [], "any", false, false, false, 45));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 46
                echo "                        ";
                $context["_tab_name"] = ((($context["tab_prefix"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46));
                // line 47
                echo "                        <li";
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 47), "query", [], "any", false, false, false, 47), "has", [0 => "_tab"], "method", false, false, false, 47) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 47) == 1)) || (($context["tab_query_index"] ?? null) == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 47)))) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#";
                // line 48
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\" class=\"changer-tab\" aria-controls=\"";
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                ";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["show_tab"], "label", [], "any", false, false, false, 49), [], ((twig_get_attribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", false, false, false, 49)) ? (twig_get_attribute($this->env, $this->source, $context["show_tab"], "translation_domain", [], "any", false, false, false, 49)) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 49)))), "html", null, true);
                echo "
                            </a>
                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", [], "any", false, false, false, 56));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 57
                echo "                        ";
                $context["_tab_name"] = ((($context["tab_prefix"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 57));
                // line 58
                echo "                        <div
                            class=\"tab-pane fade";
                // line 59
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 59), "query", [], "any", false, false, false, 59), "has", [0 => "_tab"], "method", false, false, false, 59) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 59)) || (($context["tab_query_index"] ?? null) == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59)))) {
                    echo " in active";
                }
                echo "\"
                            id=\"";
                // line 60
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["show_tab"], "description", [], "any", false, false, false, 64) != false)) {
                    // line 65
                    echo "                                        <p>";
                    echo twig_get_attribute($this->env, $this->source, $context["show_tab"], "description", [], "any", false, false, false, 65);
                    echo "</p>
                                    ";
                }
                // line 67
                echo "
                                    ";
                // line 68
                $context["groups"] = twig_get_attribute($this->env, $this->source, $context["show_tab"], "groups", [], "any", false, false, false, 68);
                // line 69
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable(twig_get_attribute($this->env, $this->source,         // line 76
($context["admin"] ?? null), "showtabs", [], "any", false, false, false, 76))) {
            // line 77
            echo "            ";
            $context["groups"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", [], "any", false, false, false, 77), "default", [], "any", false, false, false, 77), "groups", [], "any", false, false, false, 77);
            // line 78
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 80
        echo "
    </div>

    ";
        // line 83
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.show.bottom", ["admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null)]]);
        echo "
";
    }

    // line 86
    public function block_show_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "    <div class=\"row\">
        ";
        // line 88
        $this->displayBlock('field_row', $context, $blocks);
        // line 120
        echo "
    </div>
";
    }

    // line 88
    public function block_field_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 90
            echo "                ";
            $context["show_group"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showgroups", [], "any", false, false, false, 90)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["code"]] ?? null) : null);
            // line 91
            echo "
                <div class=\"";
            // line 92
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "class", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "class", [], "any", false, false, false, 92), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((((isset($context["no_padding"]) || array_key_exists("no_padding", $context))) ? (_twig_default_filter(($context["no_padding"] ?? null), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "box_class", [], "any", false, false, false, 93), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 96
            $this->displayBlock('show_title', $context, $blocks);
            // line 99
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "fields", [], "any", false, false, false, 104));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 105
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 112
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        ";
    }

    // line 96
    public function block_show_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "label", [], "any", false, false, false, 97), [], ((twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", [], "any", true, true, false, 97)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 97))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 97)))), "html", null, true);
        echo "
                                ";
    }

    // line 105
    public function block_show_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), ($context["field_name"] ?? null), [], "array", true, true, false, 107)) {
            // line 108
            echo "                                                ";
            echo $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderViewElement($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["elements"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["field_name"] ?? null)] ?? null) : null), ($context["object"] ?? null));
            echo "
                                            ";
        }
        // line 110
        echo "                                        </tr>
                                    ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 110,  417 => 108,  415 => 107,  412 => 106,  408 => 105,  401 => 97,  397 => 96,  393 => 119,  374 => 113,  360 => 112,  357 => 105,  340 => 104,  333 => 99,  331 => 96,  325 => 93,  319 => 92,  316 => 91,  313 => 90,  295 => 89,  291 => 88,  285 => 120,  283 => 88,  280 => 87,  276 => 86,  270 => 83,  265 => 80,  259 => 78,  256 => 77,  254 => 76,  250 => 74,  230 => 69,  228 => 68,  225 => 67,  219 => 65,  217 => 64,  210 => 60,  204 => 59,  201 => 58,  198 => 57,  181 => 56,  176 => 53,  158 => 49,  152 => 48,  145 => 47,  142 => 46,  125 => 45,  121 => 43,  118 => 42,  115 => 41,  113 => 40,  110 => 39,  108 => 38,  103 => 36,  99 => 34,  95 => 33,  90 => 30,  87 => 27,  83 => 26,  79 => 23,  75 => 22,  68 => 19,  64 => 18,  57 => 15,  53 => 14,  43 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_show.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show.html.twig");
    }
}
