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

/* @SonataAdmin/standard_layout.html.twig */
class __TwigTemplate_3cba53980f452b3827e6428a5de9febefe247c518a3653eb6912759d3e544cf6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html_attributes' => [$this, 'block_html_attributes'],
            'meta_tags' => [$this, 'block_meta_tags'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'sonata_javascript_config' => [$this, 'block_sonata_javascript_config'],
            'sonata_javascript_pool' => [$this, 'block_sonata_javascript_pool'],
            'sonata_head_title' => [$this, 'block_sonata_head_title'],
            'body_attributes' => [$this, 'block_body_attributes'],
            'sonata_header' => [$this, 'block_sonata_header'],
            'sonata_header_noscript_warning' => [$this, 'block_sonata_header_noscript_warning'],
            'logo' => [$this, 'block_logo'],
            'sonata_nav' => [$this, 'block_sonata_nav'],
            'sonata_breadcrumb' => [$this, 'block_sonata_breadcrumb'],
            'sonata_top_nav_menu' => [$this, 'block_sonata_top_nav_menu'],
            'sonata_top_nav_menu_add_block' => [$this, 'block_sonata_top_nav_menu_add_block'],
            'sonata_top_nav_menu_user_block' => [$this, 'block_sonata_top_nav_menu_user_block'],
            'sonata_wrapper' => [$this, 'block_sonata_wrapper'],
            'sonata_left_side' => [$this, 'block_sonata_left_side'],
            'sonata_side_nav' => [$this, 'block_sonata_side_nav'],
            'sonata_sidebar_search' => [$this, 'block_sonata_sidebar_search'],
            'side_bar_before_nav' => [$this, 'block_side_bar_before_nav'],
            'side_bar_nav' => [$this, 'block_side_bar_nav'],
            'side_bar_after_nav' => [$this, 'block_side_bar_after_nav'],
            'side_bar_after_nav_content' => [$this, 'block_side_bar_after_nav_content'],
            'sonata_page_content' => [$this, 'block_sonata_page_content'],
            'sonata_page_content_header' => [$this, 'block_sonata_page_content_header'],
            'sonata_page_content_nav' => [$this, 'block_sonata_page_content_nav'],
            'tab_menu_navbar_header' => [$this, 'block_tab_menu_navbar_header'],
            'sonata_admin_content_actions_wrappers' => [$this, 'block_sonata_admin_content_actions_wrappers'],
            'sonata_admin_content' => [$this, 'block_sonata_admin_content'],
            'notice' => [$this, 'block_notice'],
            'bootlint' => [$this, 'block_bootlint'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 25
        echo "<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        <meta data-sonata-admin='";
        // line 34
        echo json_encode(["config" => ["CONFIRM_EXIT" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 36), "getOption", [0 => "confirm_exit"], "method", false, false, false, 36), "USE_SELECT2" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 37), "getOption", [0 => "use_select2"], "method", false, false, false, 37), "USE_ICHECK" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 38), "getOption", [0 => "use_icheck"], "method", false, false, false, 38), "USE_STICKYFORMS" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 39), "getOption", [0 => "use_stickyforms"], "method", false, false, false, 39), "DEBUG" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 40), "getOption", [0 => "js_debug"], "method", false, false, false, 40)], "translations" => ["CONFIRM_EXIT" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm_exit", [], "SonataAdminBundle")]]);
        // line 45
        echo "'
        >

        ";
        // line 48
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
        <title>
        ";
        // line 84
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 110
        echo "        </title>
    </head>
    <body
            ";
        // line 113
        $this->displayBlock('body_attributes', $context, $blocks);
        // line 119
        echo ">

    <div class=\"wrapper\">

        ";
        // line 123
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 223
        echo "
        ";
        // line 224
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 362
        echo "    </div>

    ";
        // line 364
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 364), "getOption", [0 => "use_bootlint"], "method", false, false, false, 364)) {
            // line 365
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 371
            echo "    ";
        }
        // line 372
        echo "
    </body>
</html>
";
    }

    // line 26
    public function block_html_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_meta_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 48
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 49), "getOption", [0 => "stylesheets", 1 => []], "method", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 50
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        ";
    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 57
        echo "
            ";
        // line 58
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 63
        echo "
            ";
        // line 65
        echo "            ";
        $context["localeForMoment"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getCanonicalizedLocaleForMoment($context);
        // line 66
        echo "            ";
        if (($context["localeForMoment"] ?? null)) {
            // line 67
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" .             // line 69
($context["localeForMoment"] ?? null)) . ".js")), "html", null, true);
            // line 71
            echo "\"></script>
            ";
        }
        // line 73
        echo "
            ";
        // line 75
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 75), "getOption", [0 => "use_select2"], "method", false, false, false, 75)) {
            // line 76
            echo "                ";
            $context["localeForSelect2"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getCanonicalizedLocaleForSelect2($context);
            // line 77
            echo "                ";
            if (($context["localeForSelect2"] ?? null)) {
                // line 78
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . ($context["localeForSelect2"] ?? null)) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 80
            echo "            ";
        }
        // line 81
        echo "        ";
    }

    // line 55
    public function block_sonata_javascript_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "            ";
    }

    // line 58
    public function block_sonata_javascript_pool($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 59), "getOption", [0 => "javascripts", 1 => []], "method", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 60
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            ";
    }

    // line 84
    public function block_sonata_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin", [], "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 87
        if ( !twig_test_empty(($context["_title"] ?? null))) {
            // line 88
            echo "                ";
            echo strip_tags(($context["_title"] ?? null));
            echo "
            ";
        } else {
            // line 90
            echo "                ";
            if ((isset($context["action"]) || array_key_exists("action", $context))) {
                // line 91
                echo "                    -
                    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["breadcrumbs_builder"] ?? null), "breadcrumbs", [0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)], "method", false, false, false, 92));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 93
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 93)) {
                        // line 94
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 94) != 2)) {
                            // line 95
                            echo "                                &gt;
                            ";
                        }
                        // line 98
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "translation_domain", 1 => "messages"], "method", false, false, false, 98);
                        // line 99
                        $context["label"] = twig_get_attribute($this->env, $this->source, $context["menu"], "label", [], "any", false, false, false, 99);
                        // line 100
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 101
                            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "translation_params", 1 => []], "method", false, false, false, 101), ($context["translation_domain"] ?? null));
                        }
                        // line 104
                        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                        echo "
                        ";
                    }
                    // line 106
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                ";
            }
            // line 108
            echo "            ";
        }
        // line 109
        echo "        ";
    }

    // line 113
    public function block_body_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "class=\"sonata-bc skin-black fixed
                ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 115), "cookies", [], "any", false, false, false, 115), "get", [0 => "sonata_sidebar_hide"], "method", false, false, false, 115)) {
            // line 116
            echo "sidebar-collapse";
        }
        // line 117
        echo "\"";
    }

    // line 123
    public function block_sonata_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "            <header class=\"main-header\">
                ";
        // line 125
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 132
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 144
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 221
        echo "            </header>
        ";
    }

    // line 125
    public function block_sonata_header_noscript_warning($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("noscript_warning", [], "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
    }

    // line 132
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "                    ";
        ob_start(function () { return ''; });
        // line 134
        echo "                        <a class=\"logo\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 135
        if ((("single_image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 135), "getOption", [0 => "title_mode"], "method", false, false, false, 135)) || ("both" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 135), "getOption", [0 => "title_mode"], "method", false, false, false, 135)))) {
            // line 136
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 136), "titlelogo", [], "any", false, false, false, 136)), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 136), "title", [], "any", false, false, false, 136), "html", null, true);
            echo "\">
                            ";
        }
        // line 138
        echo "                            ";
        if ((("single_text" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 138), "getOption", [0 => "title_mode"], "method", false, false, false, 138)) || ("both" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 138), "getOption", [0 => "title_mode"], "method", false, false, false, 138)))) {
            // line 139
            echo "                                <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 139), "title", [], "any", false, false, false, 139), "html", null, true);
            echo "</span>
                            ";
        }
        // line 141
        echo "                        </a>
                    ";
        $___internal_c81ffc4aaf6202a7320e626ecd7789bad6c11b7c8c26c96606ba7d392ff16d95_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 133
        echo twig_spaceless($___internal_c81ffc4aaf6202a7320e626ecd7789bad6c11b7c8c26c96606ba7d392ff16d95_);
        // line 143
        echo "                ";
    }

    // line 144
    public function block_sonata_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\"
                           role=\"button\" title=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toggle_navigation", [], "SonataAdminBundle"), "html", null, true);
        echo "\">
                            <span class=\"sr-only\">";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toggle_navigation", [], "SonataAdminBundle"), "html", null, true);
        echo "</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 152
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 191
        echo "                        </div>

                        ";
        // line 193
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 219
        echo "                    </nav>
                ";
    }

    // line 152
    public function block_sonata_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 154
        if (( !twig_test_empty(($context["_breadcrumb"] ?? null)) || (isset($context["action"]) || array_key_exists("action", $context)))) {
            // line 155
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 156
            if (twig_test_empty(($context["_breadcrumb"] ?? null))) {
                // line 157
                echo "                                                ";
                if ((isset($context["action"]) || array_key_exists("action", $context))) {
                    // line 158
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["breadcrumbs_builder"] ?? null), "breadcrumbs", [0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)], "method", false, false, false, 158));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 159
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "translation_domain", 1 => "messages"], "method", false, false, false, 159);
                        // line 160
                        $context["label"] = twig_get_attribute($this->env, $this->source, $context["menu"], "label", [], "any", false, false, false, 160);
                        // line 161
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 162
                            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "translation_params", 1 => []], "method", false, false, false, 162), ($context["translation_domain"] ?? null));
                        }
                        // line 165
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 165)) {
                            // line 166
                            echo "                                                            <li>
                                                                ";
                            // line 167
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu"], "uri", [], "any", false, false, false, 167))) {
                                // line 168
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "uri", [], "any", false, false, false, 168), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 169
                                if (twig_get_attribute($this->env, $this->source, $context["menu"], "extra", [0 => "safe_label", 1 => true], "method", false, false, false, 169)) {
                                    // line 170
                                    echo ($context["label"] ?? null);
                                } else {
                                    // line 172
                                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, ($context["label"] ?? null), 100), "html", null, true);
                                }
                                // line 174
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 176
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, ($context["label"] ?? null), 100), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 178
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 180
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, ($context["label"] ?? null), 100), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 182
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "                                                ";
                }
                // line 184
                echo "                                            ";
            } else {
                // line 185
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? null);
                echo "
                                            ";
            }
            // line 187
            echo "                                        </ol>
                                    ";
        }
        // line 189
        echo "                                </div>
                            ";
    }

    // line 193
    public function block_sonata_top_nav_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 194
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 194) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 194), "getOption", [0 => "role_admin"], "method", false, false, false, 194)))) {
            // line 195
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 197
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 205
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 215
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 218
        echo "                        ";
    }

    // line 197
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 202
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("add_block"), "@SonataAdmin/standard_layout.html.twig", 202)->display($context);
        // line 203
        echo "                                            </li>
                                        ";
    }

    // line 205
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 206
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 211
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("user_block"), "@SonataAdmin/standard_layout.html.twig", 211)->display($context);
        // line 212
        echo "                                                </ul>
                                            </li>
                                        ";
    }

    // line 224
    public function block_sonata_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 258
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 260
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 360
        echo "            </div>
        ";
    }

    // line 225
    public function block_sonata_left_side($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 226
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 228
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 255
        echo "                    </section>
                </aside>
            ";
    }

    // line 228
    public function block_sonata_side_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 229
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 243
        echo "
                            ";
        // line 244
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 245
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 248
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 254
        echo "                        ";
    }

    // line 229
    public function block_sonata_sidebar_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 230
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 230), "getOption", [0 => "search"], "method", false, false, false, 230)) {
            // line 231
            echo "                                    <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 233), "get", [0 => "q"], "method", false, false, false, 233), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search_placeholder", [], "SonataAdminBundle"), "html", null, true);
            echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                ";
        }
        // line 242
        echo "                            ";
    }

    // line 244
    public function block_side_bar_before_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 245
    public function block_side_bar_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        echo "                                ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("sonata_admin_sidebar", ["template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("knp_menu_template")]);
        echo "
                            ";
    }

    // line 248
    public function block_side_bar_after_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 249
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 250
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 252
        echo "                                </p>
                            ";
    }

    // line 250
    public function block_side_bar_after_nav_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 251
        echo "                                    ";
    }

    // line 260
    public function block_sonata_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 261
        echo "                    <section class=\"content-header\">

                        ";
        // line 263
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 321
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 324
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 358
        echo "                    </section>
                ";
    }

    // line 263
    public function block_sonata_page_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 264
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 320
        echo "                        ";
    }

    // line 264
    public function block_sonata_page_content_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 265
        echo "                                ";
        if (((( !twig_test_empty(($context["_navbar_title"] ?? null)) ||  !twig_test_empty(        // line 266
($context["_tab_menu"] ?? null))) ||  !twig_test_empty(        // line 267
($context["_actions"] ?? null))) ||  !twig_test_empty(        // line 268
($context["_list_filters_actions"] ?? null)))) {
            // line 270
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 272
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 279
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 281
            if ( !twig_test_empty(($context["_tab_menu"] ?? null))) {
                // line 282
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 283
                echo ($context["_tab_menu"] ?? null);
                echo "
                                                    </div>
                                                ";
            }
            // line 286
            echo "
                                                ";
            // line 287
            if (((((isset($context["admin"]) || array_key_exists("admin", $context)) && (isset($context["action"]) || array_key_exists("action", $context))) && (($context["action"] ?? null) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "listModes", [], "any", false, false, false, 287)) > 1))) {
                // line 288
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 289
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "listModes", [], "any", false, false, false, 289));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 290
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 290), "query", [], "any", false, false, false, 290), "all", [], "any", false, false, false, 290), ["_list_mode" => $context["mode"]])], "method", false, false, false, 290), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getListMode", [], "method", false, false, false, 290) == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["settings"], "class", [], "any", false, false, false, 290), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 292
                echo "                                                    </div>
                                                ";
            }
            // line 294
            echo "
                                                ";
            // line 295
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 311
            echo "
                                                ";
            // line 312
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? null))) {
                // line 313
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? null);
                echo "
                                                ";
            }
            // line 315
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 319
        echo "                            ";
    }

    // line 272
    public function block_tab_menu_navbar_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 273
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? null))) {
            // line 274
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 275
            echo ($context["_navbar_title"] ?? null);
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 278
        echo "                                            ";
    }

    // line 295
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 296
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? null), ["<li>" => "", "</li>" => ""])))) {
            // line 297
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 298
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? null), "</a>")) > 2)) {
                // line 299
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 300
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_actions", [], "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 302
                echo ($context["_actions"] ?? null);
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 306
                echo "                                                            ";
                echo ($context["_actions"] ?? null);
                echo "
                                                        ";
            }
            // line 308
            echo "                                                        </ul>
                                                    ";
        }
        // line 310
        echo "                                                ";
    }

    // line 324
    public function block_sonata_admin_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 325
        echo "
                            ";
        // line 326
        $this->displayBlock('notice', $context, $blocks);
        // line 329
        echo "
                            ";
        // line 330
        if ( !twig_test_empty(($context["_preview"] ?? null))) {
            // line 331
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? null);
            echo "</div>
                            ";
        }
        // line 333
        echo "
                            ";
        // line 334
        if ( !twig_test_empty(($context["_content"] ?? null))) {
            // line 335
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? null);
            echo "</div>
                            ";
        }
        // line 337
        echo "
                            ";
        // line 338
        if ( !twig_test_empty(($context["_show"] ?? null))) {
            // line 339
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? null);
            echo "</div>
                            ";
        }
        // line 341
        echo "
                            ";
        // line 342
        if ( !twig_test_empty(($context["_form"] ?? null))) {
            // line 343
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? null);
            echo "</div>
                            ";
        }
        // line 345
        echo "
                            ";
        // line 346
        if ( !twig_test_empty(($context["_list_filters"] ?? null))) {
            // line 347
            echo "                                <div class=\"row\">
                                    ";
            // line 348
            echo ($context["_list_filters"] ?? null);
            echo "
                                </div>
                            ";
        }
        // line 351
        echo "
                            ";
        // line 352
        if ( !twig_test_empty(($context["_list_table"] ?? null))) {
            // line 353
            echo "                                <div class=\"row\">
                                    ";
            // line 354
            echo ($context["_list_table"] ?? null);
            echo "
                                </div>
                            ";
        }
        // line 357
        echo "                        ";
    }

    // line 326
    public function block_notice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 327
        echo "                                ";
        $this->loadTemplate("@SonataCore/FlashMessage/render.html.twig", "@SonataAdmin/standard_layout.html.twig", 327)->display($context);
        // line 328
        echo "                            ";
    }

    // line 365
    public function block_bootlint($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 366
        echo "            ";
        // line 367
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1099 => 367,  1097 => 366,  1093 => 365,  1089 => 328,  1086 => 327,  1082 => 326,  1078 => 357,  1072 => 354,  1069 => 353,  1067 => 352,  1064 => 351,  1058 => 348,  1055 => 347,  1053 => 346,  1050 => 345,  1044 => 343,  1042 => 342,  1039 => 341,  1033 => 339,  1031 => 338,  1028 => 337,  1022 => 335,  1020 => 334,  1017 => 333,  1011 => 331,  1009 => 330,  1006 => 329,  1004 => 326,  1001 => 325,  997 => 324,  993 => 310,  989 => 308,  983 => 306,  976 => 302,  971 => 300,  968 => 299,  966 => 298,  963 => 297,  960 => 296,  956 => 295,  952 => 278,  946 => 275,  943 => 274,  940 => 273,  936 => 272,  932 => 319,  926 => 315,  920 => 313,  918 => 312,  915 => 311,  913 => 295,  910 => 294,  906 => 292,  891 => 290,  887 => 289,  884 => 288,  882 => 287,  879 => 286,  873 => 283,  870 => 282,  868 => 281,  864 => 279,  862 => 272,  858 => 270,  856 => 268,  855 => 267,  854 => 266,  852 => 265,  848 => 264,  844 => 320,  841 => 264,  837 => 263,  832 => 358,  830 => 324,  825 => 321,  823 => 263,  819 => 261,  815 => 260,  811 => 251,  807 => 250,  802 => 252,  800 => 250,  797 => 249,  793 => 248,  786 => 246,  782 => 245,  775 => 244,  771 => 242,  757 => 233,  751 => 231,  748 => 230,  744 => 229,  740 => 254,  737 => 248,  734 => 245,  732 => 244,  729 => 243,  726 => 229,  722 => 228,  716 => 255,  714 => 228,  710 => 226,  706 => 225,  701 => 360,  699 => 260,  695 => 258,  692 => 225,  688 => 224,  682 => 212,  680 => 211,  673 => 206,  669 => 205,  664 => 203,  662 => 202,  656 => 198,  652 => 197,  648 => 218,  643 => 215,  640 => 205,  638 => 197,  634 => 195,  631 => 194,  627 => 193,  622 => 189,  618 => 187,  612 => 185,  609 => 184,  606 => 183,  592 => 182,  586 => 180,  582 => 178,  576 => 176,  572 => 174,  569 => 172,  566 => 170,  564 => 169,  559 => 168,  557 => 167,  554 => 166,  552 => 165,  549 => 162,  547 => 161,  545 => 160,  543 => 159,  525 => 158,  522 => 157,  520 => 156,  517 => 155,  515 => 154,  512 => 153,  508 => 152,  503 => 219,  501 => 193,  497 => 191,  495 => 152,  488 => 148,  484 => 147,  480 => 145,  476 => 144,  472 => 143,  470 => 133,  466 => 141,  460 => 139,  457 => 138,  449 => 136,  447 => 135,  442 => 134,  439 => 133,  435 => 132,  427 => 128,  423 => 126,  419 => 125,  414 => 221,  411 => 144,  408 => 132,  406 => 125,  403 => 124,  399 => 123,  395 => 117,  392 => 116,  390 => 115,  387 => 114,  383 => 113,  379 => 109,  376 => 108,  373 => 107,  359 => 106,  354 => 104,  351 => 101,  349 => 100,  347 => 99,  345 => 98,  341 => 95,  338 => 94,  335 => 93,  318 => 92,  315 => 91,  312 => 90,  306 => 88,  304 => 87,  298 => 85,  294 => 84,  290 => 62,  281 => 60,  276 => 59,  272 => 58,  268 => 56,  264 => 55,  260 => 81,  257 => 80,  251 => 78,  248 => 77,  245 => 76,  242 => 75,  239 => 73,  235 => 71,  233 => 69,  231 => 67,  228 => 66,  225 => 65,  222 => 63,  220 => 58,  217 => 57,  214 => 55,  210 => 54,  206 => 52,  197 => 50,  192 => 49,  188 => 48,  181 => 29,  177 => 28,  170 => 26,  163 => 372,  160 => 371,  157 => 365,  155 => 364,  151 => 362,  149 => 224,  146 => 223,  144 => 123,  138 => 119,  136 => 113,  131 => 110,  129 => 84,  125 => 82,  123 => 54,  120 => 53,  118 => 48,  113 => 45,  111 => 40,  110 => 39,  109 => 38,  108 => 37,  107 => 36,  106 => 34,  103 => 33,  101 => 28,  96 => 26,  93 => 25,  91 => 23,  89 => 22,  87 => 21,  85 => 20,  83 => 19,  81 => 18,  79 => 17,  77 => 16,  75 => 15,  73 => 14,  71 => 13,  69 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/standard_layout.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/standard_layout.html.twig");
    }
}
