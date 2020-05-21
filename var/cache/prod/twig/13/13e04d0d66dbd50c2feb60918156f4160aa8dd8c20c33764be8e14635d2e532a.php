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

/* @SonataAdmin/CRUD/base_edit_form.html.twig */
class __TwigTemplate_a5528d638fc8e71676e6e1061ad22876e7ad109808416a5307cd83528e8ec964 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
            'sonata_form_action_url' => [$this, 'block_sonata_form_action_url'],
            'sonata_form_attributes' => [$this, 'block_sonata_form_attributes'],
            'sonata_pre_fieldsets' => [$this, 'block_sonata_pre_fieldsets'],
            'sonata_tab_content' => [$this, 'block_sonata_tab_content'],
            'sonata_post_fieldsets' => [$this, 'block_sonata_post_fieldsets'],
            'formactions' => [$this, 'block_formactions'],
            'sonata_form_actions' => [$this, 'block_sonata_form_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.edit.form.top", ["admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null)]]);
        echo "

    ";
        // line 5
        echo "    ";
        $context["url"] = (( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 5))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 5))))) ? ("edit") : ("create"));
        // line 6
        echo "
    ";
        // line 7
        if ( !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => ($context["url"] ?? null)], "method", false, false, false, 7)) {
            // line 8
            echo "        <div>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form_not_available", [], "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 12
            echo "        <form
              ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 13), "getOption", [0 => "form_type"], "method", false, false, false, 13) == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 14
            echo "              role=\"form\"
              ";
            // line 16
            echo "              action=\"";
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 17), "multipart", [], "any", false, false, false, 17)) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 18
            echo "              method=\"POST\"
              ";
            // line 19
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 19), "getOption", [0 => "html5_validate"], "method", false, false, false, 19)) {
                echo "novalidate=\"novalidate\"";
            }
            // line 20
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 21
            echo "              >

            ";
            // line 23
            echo twig_include($this->env, $context, "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 25
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 28
            echo "
            ";
            // line 29
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 76
            echo "
            ";
            // line 77
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 80
            echo "
            ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "

            ";
            // line 83
            $this->displayBlock('formactions', $context, $blocks);
            // line 135
            echo "        </form>
    ";
        }
        // line 137
        echo "
    ";
        // line 138
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.edit.form.bottom", ["admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null)]]);
        echo "

";
    }

    // line 16
    public function block_sonata_form_action_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => ($context["url"] ?? null), 1 => ["id" => (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 16))), "uniqid" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "any", false, false, false, 16), "subclass" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 16), "get", [0 => "subclass"], "method", false, false, false, 16)]], "method", false, false, false, 16), "html", null, true);
    }

    // line 20
    public function block_sonata_form_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 25
    public function block_sonata_pre_fieldsets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                <div class=\"row\">
            ";
    }

    // line 29
    public function block_sonata_tab_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                ";
        $macros["form_helper"] = $this->loadTemplate("@SonataAdmin/CRUD/base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit_form.html.twig", 30)->unwrap();
        // line 31
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", [], "any", false, false, false, 31)) == 1) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", [], "any", false, false, false, 31))) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null) != "default")) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", [], "any", false, false, false, 31)) > 1));
        // line 32
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 34
        if (($context["has_tab"] ?? null)) {
            // line 35
            echo "                        ";
            $context["tab_prefix"] = ((("tab_" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "any", false, false, false, 35)) . "_") . twig_random($this->env));
            // line 36
            echo "                        ";
            $context["tab_query_index"] = twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 36), "query", [], "any", false, false, false, 36), "get", [0 => "_tab", 1 => 0], "method", false, false, false, 36), "_"));
            // line 37
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", [], "any", false, false, false, 39));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 40
                echo "                                    ";
                $context["_tab_name"] = ((($context["tab_prefix"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40));
                // line 41
                echo "                                    <li";
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 41), "query", [], "any", false, false, false, 41), "has", [0 => "_tab"], "method", false, false, false, 41) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41) == 1)) || (($context["tab_query_index"] ?? null) == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 41)))) {
                    echo " class=\"active\"";
                }
                echo ">
                                        <a href=\"#";
                // line 42
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\" class=\"changer-tab\" aria-controls=\"";
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                            <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["form_tab"], "label", [], "any", false, false, false, 43), [], ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 43)) ? (twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 43)) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 43)))), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", [], "any", false, false, false, 49));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 50
                echo "                                    ";
                $context["_tab_name"] = ((($context["tab_prefix"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50));
                // line 51
                echo "                                    <div
                                        class=\"tab-pane fade";
                // line 52
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 52), "query", [], "any", false, false, false, 52), "has", [0 => "_tab"], "method", false, false, false, 52) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 52)) || (($context["tab_query_index"] ?? null) == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52)))) {
                    echo " in active";
                }
                echo "\"
                                        id=\"";
                // line 53
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\"
                                    >
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 57
                if ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "description", [], "any", false, false, false, 57) != false)) {
                    // line 58
                    echo "                                                    <p>
                                                        ";
                    // line 59
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["form_tab"], "description", [], "any", false, false, false, 59), [], ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 59)) ? (twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 59)) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 59))));
                    echo "
                                                    </p>
                                                ";
                }
                // line 62
                echo "
                                                ";
                // line 63
                echo twig_call_macro($macros["form_helper"], "macro_render_groups", [($context["admin"] ?? null), ($context["form"] ?? null), (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["form_tab"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["groups"] ?? null) : null), ($context["has_tab"] ?? null)], 63, $context, $this->getSourceContext());
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                            </div>
                            <input type=\"hidden\" name=\"_tab\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 69), "query", [], "any", false, false, false, 69), "get", [0 => "_tab"], "method", false, false, false, 69), "html", null, true);
            echo "\">
                        </div>
                    ";
        } else {
            // line 72
            echo "                        ";
            echo twig_call_macro($macros["form_helper"], "macro_render_groups", [($context["admin"] ?? null), ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", [], "any", false, false, false, 72)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["default"] ?? null) : null), "groups", [], "any", false, false, false, 72), ($context["has_tab"] ?? null)], 72, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 74
        echo "                </div>
            ";
    }

    // line 77
    public function block_sonata_post_fieldsets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                </div>
            ";
    }

    // line 83
    public function block_formactions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 85
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 133
        echo "                </div>
            ";
    }

    // line 85
    public function block_sonata_form_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 86), "isxmlhttprequest", [], "any", false, false, false, 86)) {
            // line 87
            echo "                        ";
            // line 88
            echo "                        ";
            if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 88))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 88))))) {
                // line 89
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                            ";
                // line 90
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "delete"], "method", false, false, false, 90) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "delete", 1 => ($context["object"] ?? null)], "method", false, false, false, 90))) {
                    // line 91
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => "delete", 1 => ($context["object"] ?? null)], "method", false, false, false, 92), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    // line 93
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_delete", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                </a>
                            ";
                }
                // line 96
                echo "                        ";
            } else {
                // line 97
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 99
            echo "                    ";
        } else {
            // line 100
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "supportsPreviewMode", [], "any", false, false, false, 100)) {
                // line 101
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_preview", [], "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 106
            echo "                        ";
            // line 107
            echo "                        ";
            if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 107))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 107))))) {
                // line 108
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update_and_edit_again", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 110
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "list"], "method", false, false, false, 110) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "list"], "method", false, false, false, 110))) {
                    // line 111
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update_and_return_to_list", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 113
                echo "
                            ";
                // line 114
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "delete"], "method", false, false, false, 114) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "delete", 1 => ($context["object"] ?? null)], "method", false, false, false, 114))) {
                    // line 115
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => "delete", 1 => ($context["object"] ?? null)], "method", false, false, false, 116), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_delete", [], "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 118
                echo "
                            ";
                // line 119
                if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isAclEnabled", [], "method", false, false, false, 119) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "acl"], "method", false, false, false, 119)) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "acl", 1 => ($context["object"] ?? null)], "method", false, false, false, 119))) {
                    // line 120
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => "acl", 1 => ($context["object"] ?? null)], "method", false, false, false, 120), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_edit_acl", [], "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 122
                echo "                        ";
            } else {
                // line 123
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasroute", [0 => "edit"], "method", false, false, false, 123) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "edit"], "method", false, false, false, 123))) {
                    // line 124
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_edit_again", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 126
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasroute", [0 => "list"], "method", false, false, false, 126) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "list"], "method", false, false, false, 126))) {
                    // line 127
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_return_to_list", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 129
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_create_a_new_one", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 131
            echo "                    ";
        }
        // line 132
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  502 => 132,  499 => 131,  493 => 129,  487 => 127,  484 => 126,  478 => 124,  475 => 123,  472 => 122,  464 => 120,  462 => 119,  459 => 118,  452 => 116,  447 => 115,  445 => 114,  442 => 113,  436 => 111,  434 => 110,  428 => 108,  425 => 107,  423 => 106,  417 => 103,  413 => 101,  410 => 100,  407 => 99,  401 => 97,  398 => 96,  392 => 93,  388 => 92,  383 => 91,  381 => 90,  376 => 89,  373 => 88,  371 => 87,  368 => 86,  364 => 85,  359 => 133,  357 => 85,  354 => 84,  350 => 83,  345 => 78,  341 => 77,  336 => 74,  330 => 72,  324 => 69,  321 => 68,  302 => 63,  299 => 62,  293 => 59,  290 => 58,  288 => 57,  281 => 53,  275 => 52,  272 => 51,  269 => 50,  252 => 49,  248 => 47,  230 => 43,  224 => 42,  217 => 41,  214 => 40,  197 => 39,  193 => 37,  190 => 36,  187 => 35,  185 => 34,  181 => 32,  178 => 31,  175 => 30,  171 => 29,  166 => 26,  162 => 25,  156 => 20,  149 => 16,  142 => 138,  139 => 137,  135 => 135,  133 => 83,  128 => 81,  125 => 80,  123 => 77,  120 => 76,  118 => 29,  115 => 28,  113 => 25,  108 => 23,  104 => 21,  101 => 20,  97 => 19,  94 => 18,  90 => 17,  85 => 16,  82 => 14,  78 => 13,  75 => 12,  69 => 9,  66 => 8,  64 => 7,  61 => 6,  58 => 5,  52 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_edit_form.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
