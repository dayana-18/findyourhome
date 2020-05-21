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

/* @SonataAdmin/CRUD/base_list.html.twig */
class __TwigTemplate_ab623ded181c3e04f5e2830abea2699212cb578cf0d7356d0b766f2cc9233b5d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'title' => [$this, 'block_title'],
            'navbar_title' => [$this, 'block_navbar_title'],
            'list_table' => [$this, 'block_list_table'],
            'list_header' => [$this, 'block_list_header'],
            'table_header' => [$this, 'block_table_header'],
            'table_body' => [$this, 'block_table_body'],
            'table_footer' => [$this, 'block_table_footer'],
            'no_result_content' => [$this, 'block_no_result_content'],
            'list_footer' => [$this, 'block_list_footer'],
            'batch' => [$this, 'block_batch'],
            'batch_javascript' => [$this, 'block_batch_javascript'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'pager_results' => [$this, 'block_pager_results'],
            'pager_links' => [$this, 'block_pager_links'],
            'list_filters_actions' => [$this, 'block_list_filters_actions'],
            'list_filters' => [$this, 'block_list_filters'],
            'sonata_list_filter_group_class' => [$this, 'block_sonata_list_filter_group_class'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_list.html.twig", 15)->display($context);
    }

    // line 18
    public function block_tab_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "sidemenu", [0 => ($context["action"] ?? null)], "method", false, false, false, 19), ["currentClass" => "active", "template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("tab_menu_template")], "twig");
    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isChild", [], "any", false, false, false, 26) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", [], "any", false, false, false, 26), "subject", [], "any", false, false, false, 26))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", [], "any", false, false, false, 26), "toString", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", [], "any", false, false, false, 26), "subject", [], "any", false, false, false, 26)], "method", false, false, false, 26), 15)], "SonataAdminBundle"), "html", null, true))) : (print ("")));
        echo "
";
    }

    // line 29
    public function block_navbar_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isChild", [], "any", false, false, false, 30) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", [], "any", false, false, false, 30), "subject", [], "any", false, false, false, 30))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", [], "any", false, false, false, 30), "toString", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", [], "any", false, false, false, 30), "subject", [], "any", false, false, false, 30)], "method", false, false, false, 30), 100)], "SonataAdminBundle"), "html", null, true))) : (print ("")));
        echo "
";
    }

    // line 33
    public function block_list_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 35
        $context["batchactions"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "batchactions", [], "any", false, false, false, 35);
        // line 36
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "batch"], "method", false, false, false, 36) && twig_length_filter($this->env, ($context["batchactions"] ?? null)))) {
            // line 37
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "batch", 1 => ["filter" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "filterParameters", [], "any", false, false, false, 37)]], "method", false, false, false, 37), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\">
        ";
        }
        // line 40
        echo "
        ";
        // line 42
        echo "        <div class=\"box box-primary\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 42), "pager", [], "any", false, false, false, 42), "lastPage", [], "any", false, false, false, 42) == 1)) {
            echo " style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body";
        // line 43
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 43), "results", [], "any", false, false, false, 43)) > 0)) {
            echo " table-responsive no-padding";
        }
        echo "\">
                ";
        // line 44
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.list.table.top", ["admin" => ($context["admin"] ?? null)]]);
        echo "

                ";
        // line 46
        $this->displayBlock('list_header', $context, $blocks);
        // line 47
        echo "
                ";
        // line 48
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 48), "results", [], "any", false, false, false, 48)) > 0)) {
            // line 49
            echo "                    <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                        ";
            // line 50
            $this->displayBlock('table_header', $context, $blocks);
            // line 91
            echo "
                        ";
            // line 92
            $this->displayBlock('table_body', $context, $blocks);
            // line 97
            echo "
                        ";
            // line 98
            $this->displayBlock('table_footer', $context, $blocks);
            // line 100
            echo "                    </table>
                ";
        } else {
            // line 102
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 120
            echo "                ";
        }
        // line 121
        echo "
                ";
        // line 122
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.list.table.bottom", ["admin" => ($context["admin"] ?? null)]]);
        echo "
            </div>
            ";
        // line 124
        $this->displayBlock('list_footer', $context, $blocks);
        // line 225
        echo "        </div>
        ";
        // line 226
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "batch"], "method", false, false, false, 226) && twig_length_filter($this->env, ($context["batchactions"] ?? null)))) {
            // line 227
            echo "            </form>
        ";
        }
        // line 229
        echo "    </div>
";
    }

    // line 46
    public function block_list_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 50
    public function block_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", [], "any", false, false, false, 53), "elements", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 54
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "batch"], "method", false, false, false, 54) && (twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "code"], "method", false, false, false, 54) == "_batch")) && (twig_length_filter($this->env, ($context["batchactions"] ?? null)) > 0))) {
                // line 55
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 58
$context["field_description"], "getOption", [0 => "code"], "method", false, false, false, 58) == "_select")) {
                // line 59
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 60
$context["field_description"], "name", [], "any", false, false, false, 60) == "_action") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 60), "isXmlHttpRequest", [], "any", false, false, false, 60))) {
                // line 61
                echo "                                            ";
                // line 62
                echo "                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "ajax_hidden"], "method", false, false, false, 62) == true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 62), "isXmlHttpRequest", [], "any", false, false, false, 62))) {
                // line 63
                echo "                                            ";
                // line 64
                echo "                                        ";
            } else {
                // line 65
                echo "                                            ";
                $context["sortable"] = false;
                // line 66
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", [], "any", false, true, false, 66), "sortable", [], "any", true, true, false, 66) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", [], "any", false, false, false, 66), "sortable", [], "any", false, false, false, 66))) {
                    // line 67
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 68
                    echo "                                                ";
                    $context["sort_parameters"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", [], "any", false, false, false, 68), "sortparameters", [0 => $context["field_description"], 1 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 68)], "method", false, false, false, 68);
                    // line 69
                    echo "                                                ";
                    $context["current"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, true, false, 69), "values", [], "any", false, true, false, 69), "_sort_by", [], "any", true, true, false, 69) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 70
($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 70), "values", [], "any", false, false, false, 70), "_sort_by", [], "any", false, false, false, 70) == $context["field_description"]) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 71
($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 71), "values", [], "any", false, false, false, 71), "_sort_by", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sort_parameters"] ?? null), "filter", [], "any", false, false, false, 71), "_sort_by", [], "any", false, false, false, 71))));
                    // line 72
                    echo "                                                ";
                    $context["sort_active_class"] = ((($context["current"] ?? null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 73
                    echo "                                                ";
                    $context["sort_by"] = ((($context["current"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 73), "values", [], "any", false, false, false, 73), "_sort_order", [], "any", false, false, false, 73)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", [], "any", false, false, false, 73), "_sort_order", [], "any", false, false, false, 73)));
                    // line 74
                    echo "                                            ";
                }
                // line 75
                echo "
                                            ";
                // line 76
                ob_start(function () { return ''; });
                // line 77
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "type", [], "any", false, false, false, 77), "html", null, true);
                if (($context["sortable"] ?? null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["sort_by"] ?? null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["sort_active_class"] ?? null), "html", null, true);
                }
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", [], "any", false, true, false, 77), "header_class", [], "any", true, true, false, 77)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", [], "any", false, false, false, 77), "header_class", [], "any", false, false, false, 77), "html", null, true);
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", [], "any", false, true, false, 77), "header_style", [], "any", true, true, false, 77)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", [], "any", false, false, false, 77), "header_style", [], "any", false, false, false, 77), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 78
                if (($context["sortable"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "list", 1 => twig_array_merge(($context["sort_parameters"] ?? null), ["_list_mode" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getListMode", [], "method", false, false, false, 78)])], "method", false, false, false, 78), "html", null, true);
                    echo "\">";
                }
                // line 79
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "label_icon"], "method", false, false, false, 79)) {
                    // line 80
                    echo "                                                        <i class=\"sonata-ba-list-field-header-label-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", [0 => "label_icon"], "method", false, false, false, 80), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                                                    ";
                }
                // line 82
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field_description"], "label", [], "any", false, false, false, 82), [], twig_get_attribute($this->env, $this->source, $context["field_description"], "translationDomain", [], "any", false, false, false, 82)), "html", null, true);
                echo "
                                                    ";
                // line 83
                if (($context["sortable"] ?? null)) {
                    echo "</a>";
                }
                // line 84
                echo "                                                </th>
                                            ";
                $___internal_e1572d31e6bb83e49c77257cd571245f9992812b74281d0dc833f0414e803e43_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 76
                echo twig_spaceless($___internal_e1572d31e6bb83e49c77257cd571245f9992812b74281d0dc833f0414e803e43_);
                // line 86
                echo "                                        ";
            }
            // line 87
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                </tr>
                            </thead>
                        ";
    }

    // line 92
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                            <tbody>
                                ";
        // line 94
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate(("outer_list_rows_" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getListMode", [], "method", false, false, false, 94)), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [], "any", false, false, false, 94)), "@SonataAdmin/CRUD/base_list.html.twig", 94)->display($context);
        // line 95
        echo "                            </tbody>
                        ";
    }

    // line 98
    public function block_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                        ";
    }

    // line 102
    public function block_no_result_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_result", [], "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 111
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 111), "xmlHttpRequest", [], "any", false, false, false, 111)) {
            // line 112
            echo "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 113
            $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("button_create", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [], "any", false, false, false, 113)), "@SonataAdmin/CRUD/base_list.html.twig", 113)->display($context);
            // line 114
            echo "                                    </ul>
                                    ";
        }
        // line 116
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
    }

    // line 124
    public function block_list_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 125), "results", [], "any", false, false, false, 125)) > 0)) {
            // line 126
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 128
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 128), "isXmlHttpRequest", [], "any", false, false, false, 128)) {
                // line 129
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 130
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "batch"], "method", false, false, false, 130) && (twig_length_filter($this->env, ($context["batchactions"] ?? null)) > 0))) {
                    // line 131
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 179
                    echo "                                    ";
                }
                // line 180
                echo "                                </div>


                                ";
                // line 184
                echo "                                ";
                $context["export_formats"] = (((isset($context["export_formats"]) || array_key_exists("export_formats", $context))) ? (_twig_default_filter(($context["export_formats"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "exportFormats", [], "any", false, false, false, 184))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "exportFormats", [], "any", false, false, false, 184)));
                // line 185
                echo "
                                <div class=\"pull-right\">
                                    ";
                // line 187
                if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "export"], "method", false, false, false, 187) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "export"], "method", false, false, false, 187)) && twig_length_filter($this->env, ($context["export_formats"] ?? null)))) {
                    // line 188
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 191
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_export_download", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 195
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["export_formats"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 196
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 197
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "export", 1 => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", [], "any", false, false, false, 197), "paginationparameters", [0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 197), 1 => 0], "method", false, false, false, 197) + ["format" => $context["format"]])], "method", false, false, false, 197), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 199
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("export_format_" . $context["format"]), [], "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                </li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 208
                echo "
                                    ";
                // line 209
                $this->displayBlock('pager_results', $context, $blocks);
                // line 212
                echo "                                </div>
                            ";
            }
            // line 214
            echo "                        </div>

                        ";
            // line 216
            $this->displayBlock('pager_links', $context, $blocks);
            // line 222
            echo "                    </div>
                ";
        }
        // line 224
        echo "            ";
    }

    // line 131
    public function block_batch($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "                                            <script>
                                                ";
        // line 133
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 161
        echo "                                            </script>

                                        ";
        // line 163
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 176
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_batch", [], "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
    }

    // line 133
    public function block_batch_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;

                                                            if (Admin.get_config('USE_ICHECK')) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
    }

    // line 163
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "any", false, false, false, 164), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "any", false, false, false, 165), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("all_elements", [], "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 167), "pager", [], "any", false, false, false, 167), "nbresults", [], "any", false, false, false, 167), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batchactions"] ?? null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 172
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["options"], "label", [], "any", false, false, false, 172), [], ((twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", true, true, false, 172)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", [], "any", false, false, false, 172), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 172))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 172)))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                                            </select>
                                        ";
    }

    // line 209
    public function block_pager_results($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        echo "                                        ";
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("pager_results", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [], "any", false, false, false, 210)), "@SonataAdmin/CRUD/base_list.html.twig", 210)->display($context);
        // line 211
        echo "                                    ";
    }

    // line 216
    public function block_pager_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 217
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 217), "pager", [], "any", false, false, false, 217), "haveToPaginate", [], "method", false, false, false, 217)) {
            // line 218
            echo "                                <hr/>
                                ";
            // line 219
            $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("pager_links", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [], "any", false, false, false, 219)), "@SonataAdmin/CRUD/base_list.html.twig", 219)->display($context);
            // line 220
            echo "                            ";
        }
        // line 221
        echo "                        ";
    }

    // line 232
    public function block_list_filters_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 233
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 233), "filters", [], "any", false, false, false, 233))) {
            // line 234
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 239
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_filters", [], "SonataAdminBundle"), "html", null, true);
            echo "
                    <span class=\"badge sonata-filter-count\"></span>
                    <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 245), "filters", [], "any", false, false, false, 245), function ($__filter__) use ($context, $macros) { $context["filter"] = $__filter__; return (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [], "any", false, false, false, 245)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["show_filter"] ?? null) : null) === true) || (null === (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [], "any", false, false, false, 245)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["show_filter"] ?? null) : null))); }));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 246
                echo "                        ";
                $context["filterActive"] = ((twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", [], "method", false, false, false, 246) || (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [], "any", false, false, false, 246)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["show_filter"] ?? null) : null)) &&  !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isDefaultFilter", [0 => twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 246)], "method", false, false, false, 246));
                // line 247
                echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "any", false, false, false, 248), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 248), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "method", false, false, false, 248), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 249
                echo (((twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", [], "method", false, false, false, 249) || (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [], "any", false, false, false, 249)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["show_filter"] ?? null) : null))) ? ("fa-check-square-o") : ("fa-square-o"));
                echo "\"></i>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 249), [], ((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 249)) ? (twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 249)) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 249)))), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "                </ul>
            </li>
        </ul>
    ";
        }
    }

    // line 259
    public function block_list_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 260
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 260), "filters", [], "any", false, false, false, 260)) {
            // line 261
            echo "        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("filter", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [], "any", false, false, false, 261))], true);
            // line 262
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 263
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 263), "hasDisplayableFilters", [], "any", false, false, false, 263)) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "method", false, false, false, 263), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 266
            echo (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isChild", [], "any", false, false, false, 266) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 266), "filters", [], "any", false, false, false, 266))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "list"], "method", false, false, false, 266), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 267
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 271
            $context["withAdvancedFilter"] = false;
            // line 272
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 272), "filters", [], "any", false, false, false, 272));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 273
                echo "                                    ";
                $context["filterActive"] = (((twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", [], "method", false, false, false, 273) && (null === (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [], "any", false, false, false, 273)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["show_filter"] ?? null) : null))) || ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [], "any", false, false, false, 273)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["show_filter"] ?? null) : null) === true)) &&  !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isDefaultFilter", [0 => twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 273)], "method", false, false, false, 273));
                // line 274
                echo "                                    ";
                $context["filterVisible"] = (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [], "any", false, false, false, 274)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["show_filter"] ?? null) : null) === true) || (null === (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [], "any", false, false, false, 274)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["show_filter"] ?? null) : null)));
                // line 275
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "any", false, false, false, 275), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 275), "html", null, true);
                echo "\" sonata-filter=\"";
                echo ((($context["filterVisible"] ?? null)) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($context["filterActive"] ?? null)) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 276
                if ( !(twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 276) === false)) {
                    // line 277
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["form"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 277)] ?? null) : null), "children", [], "any", false, false, false, 277)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["value"] ?? null) : null), "vars", [], "any", false, false, false, 277), "id", [], "any", false, false, false, 277), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["filter"], "label", [], "any", false, false, false, 277), [], ((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 277)) ? (twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", [], "any", false, false, false, 277)) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 277)))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 279
                echo "                                        ";
                $context["attr"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 279), [], "array", false, true, false, 279), "children", [], "any", false, true, false, 279), "type", [], "array", false, true, false, 279), "vars", [], "any", false, true, false, 279), "attr", [], "any", true, true, false, 279)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 279), [], "array", false, true, false, 279), "children", [], "any", false, true, false, 279), "type", [], "array", false, true, false, 279), "vars", [], "any", false, true, false, 279), "attr", [], "any", false, false, false, 279), [])) : ([]));
                // line 280
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 282
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["form"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 282)] ?? null) : null), "children", [], "any", false, false, false, 282)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["type"] ?? null) : null), 'widget', ["attr" => ($context["attr"] ?? null)]);
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 286
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["form"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", [], "any", false, false, false, 286)] ?? null) : null), "children", [], "any", false, false, false, 286)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["value"] ?? null) : null), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 291
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "any", false, false, false, 291), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 291), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", [], "method", false, false, false, 291), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 298
                if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["filter"], "options", [], "any", false, false, false, 298)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["advanced_filter"] ?? null) : null)) {
                    // line 299
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 300
                    echo "                                    ";
                }
                // line 301
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 306
            $context["foo"] = twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["form"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["_page"] ?? null) : null), "setRendered", [], "method", false, false, false, 306);
            // line 307
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 311
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_filter", [], "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "list", 1 => ["filters" => "reset"]], "method", false, false, false, 314), "html", null, true);
            echo "\">
                                        ";
            // line 315
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_reset_filter", [], "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 319
            if (($context["withAdvancedFilter"] ?? null)) {
                // line 320
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 323
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_advanced_filters", [], "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 327
            echo "                            </div>
                        </div>

                        ";
            // line 330
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "persistentParameters", [], "any", false, false, false, 330));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 331
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 275
    public function block_sonata_list_filter_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  912 => 275,  903 => 333,  892 => 331,  888 => 330,  883 => 327,  876 => 323,  871 => 320,  869 => 319,  862 => 315,  858 => 314,  852 => 311,  844 => 307,  842 => 306,  836 => 302,  822 => 301,  819 => 300,  816 => 299,  814 => 298,  800 => 291,  792 => 286,  785 => 282,  781 => 280,  778 => 279,  770 => 277,  768 => 276,  751 => 275,  748 => 274,  745 => 273,  727 => 272,  725 => 271,  718 => 267,  712 => 266,  704 => 263,  701 => 262,  698 => 261,  695 => 260,  691 => 259,  683 => 253,  671 => 249,  663 => 248,  660 => 247,  657 => 246,  653 => 245,  644 => 239,  637 => 234,  635 => 233,  631 => 232,  627 => 221,  624 => 220,  622 => 219,  619 => 218,  616 => 217,  612 => 216,  608 => 211,  605 => 210,  601 => 209,  596 => 174,  585 => 172,  581 => 171,  574 => 167,  570 => 166,  566 => 165,  561 => 164,  557 => 163,  527 => 134,  523 => 133,  517 => 177,  514 => 176,  512 => 163,  508 => 161,  506 => 133,  503 => 132,  499 => 131,  495 => 224,  491 => 222,  489 => 216,  485 => 214,  481 => 212,  479 => 209,  476 => 208,  469 => 203,  459 => 199,  454 => 197,  451 => 196,  447 => 195,  440 => 191,  435 => 188,  433 => 187,  429 => 185,  426 => 184,  421 => 180,  418 => 179,  415 => 131,  413 => 130,  410 => 129,  408 => 128,  404 => 126,  401 => 125,  397 => 124,  390 => 116,  386 => 114,  384 => 113,  381 => 112,  379 => 111,  371 => 106,  366 => 103,  362 => 102,  358 => 99,  354 => 98,  349 => 95,  347 => 94,  344 => 93,  340 => 92,  334 => 88,  328 => 87,  325 => 86,  323 => 76,  319 => 84,  315 => 83,  310 => 82,  304 => 80,  301 => 79,  295 => 78,  274 => 77,  272 => 76,  269 => 75,  266 => 74,  263 => 73,  260 => 72,  258 => 71,  257 => 70,  255 => 69,  252 => 68,  249 => 67,  246 => 66,  243 => 65,  240 => 64,  238 => 63,  235 => 62,  233 => 61,  231 => 60,  228 => 59,  226 => 58,  221 => 55,  218 => 54,  214 => 53,  210 => 51,  206 => 50,  200 => 46,  195 => 229,  191 => 227,  189 => 226,  186 => 225,  184 => 124,  179 => 122,  176 => 121,  173 => 120,  170 => 102,  166 => 100,  164 => 98,  161 => 97,  159 => 92,  156 => 91,  154 => 50,  151 => 49,  149 => 48,  146 => 47,  144 => 46,  139 => 44,  133 => 43,  126 => 42,  123 => 40,  118 => 38,  113 => 37,  110 => 36,  108 => 35,  105 => 34,  101 => 33,  94 => 30,  90 => 29,  83 => 26,  79 => 25,  75 => 19,  71 => 18,  67 => 15,  63 => 14,  53 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_list.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list.html.twig");
    }
}
