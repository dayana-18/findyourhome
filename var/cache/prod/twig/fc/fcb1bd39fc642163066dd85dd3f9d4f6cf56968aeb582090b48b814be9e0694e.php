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

/* @SonataAdmin/CRUD/Association/edit_many_to_one.html.twig */
class __TwigTemplate_394d89af1fafd3909a4b52b102002d09feb6f13a730a239a84a8a651b48fa4a4 extends \Twig\Template
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
        // line 11
        echo "
";
        // line 12
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 12), "hasassociationadmin", [], "any", false, false, false, 12)) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["value"] ?? null), twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 13)), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 14
($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 14) == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 15), "associationadmin", [], "any", false, false, false, 15), "formfielddescriptions", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["form"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["field_description"], "name", [], "any", false, false, false, 16)] ?? null) : null), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 20) == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 22), "id", [0 => twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "value", [], "any", false, false, false, 22)], "method", false, false, false, 22)) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", ["code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 24
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 24), "associationadmin", [], "any", false, false, false, 24), "code", [], "any", false, false, false, 24), "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 25
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 25), "associationadmin", [], "any", false, false, false, 25), "id", [0 => twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "value", [], "any", false, false, false, 25)], "method", false, false, false, 25), "uniqid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 26
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 26), "associationadmin", [], "any", false, false, false, 26), "uniqid", [], "any", false, false, false, 26), "linkParameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 27
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 27), "options", [], "any", false, false, false, 27), "link_parameters", [], "any", false, false, false, 27)]));
                    // line 28
                    echo "
                ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 29
($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 29), "options", [], "any", false, true, false, 29), "placeholder", [], "any", true, true, false, 29) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 29), "options", [], "any", false, false, false, 29), "placeholder", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 31), "options", [], "any", false, false, false, 31), "placeholder", [], "any", false, false, false, 31), [], "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <div id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 45
            $context["display_btn_list"] = ((((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 45) == "list") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 46
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 46), "associationadmin", [], "any", false, false, false, 46), "hasRoute", [0 => "list"], "method", false, false, false, 46)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 47
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 47), "associationadmin", [], "any", false, false, false, 47), "hasAccess", [0 => "list"], "method", false, false, false, 47)) &&             // line 48
($context["btn_list"] ?? null));
            // line 49
            echo "            ";
            $context["display_btn_add"] = ((((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 49) != "admin") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 50
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 50), "associationadmin", [], "any", false, false, false, 50), "hasRoute", [0 => "create"], "method", false, false, false, 50)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 51
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 51), "associationadmin", [], "any", false, false, false, 51), "hasAccess", [0 => "create"], "method", false, false, false, 51)) &&             // line 52
($context["btn_add"] ?? null));
            // line 53
            echo "            ";
            if ((($context["display_btn_list"] ?? null) || ($context["display_btn_add"] ?? null))) {
                // line 54
                echo "            <div class=\"btn-group\">
                ";
                // line 55
                if (($context["display_btn_list"] ?? null)) {
                    // line 56
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 56), "associationadmin", [], "any", false, false, false, 56), "generateUrl", [0 => "list", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 56), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 56)], "method", false, false, false, 56), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                    // line 57
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_list"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                    // line 62
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_list"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 65
                echo "
                ";
                // line 66
                if (($context["display_btn_add"] ?? null)) {
                    // line 67
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 67), "associationadmin", [], "any", false, false, false, 67), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 67), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 67)], "method", false, false, false, 67), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 68
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 73
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 76
                echo "            </div>
            ";
            }
            // line 78
            echo "
            ";
            // line 79
            $context["display_btn_delete"] = ((((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 79) == "list") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 80
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 80), "associationadmin", [], "any", false, false, false, 80), "hasRoute", [0 => "delete"], "method", false, false, false, 80)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 81
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 81), "associationadmin", [], "any", false, false, false, 81), "hasAccess", [0 => "delete"], "method", false, false, false, 81)) &&             // line 82
($context["btn_delete"] ?? null));
            // line 83
            echo "            ";
            if (($context["display_btn_delete"] ?? null)) {
                // line 84
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 85
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    title=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_delete"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    ";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_delete"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 93
            echo "
            ";
            // line 94
            if (((($context["display_btn_list"] ?? null) || ($context["display_btn_add"] ?? null)) || ($context["display_btn_delete"] ?? null))) {
                // line 95
                echo "                ";
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig", 95)->display($context);
                // line 96
                echo "                ";
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig", 96)->display($context);
                // line 97
                echo "            ";
            }
            // line 98
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 98,  241 => 97,  238 => 96,  235 => 95,  233 => 94,  230 => 93,  224 => 90,  218 => 87,  213 => 85,  210 => 84,  207 => 83,  205 => 82,  204 => 81,  203 => 80,  202 => 79,  199 => 78,  195 => 76,  189 => 73,  183 => 70,  178 => 68,  173 => 67,  171 => 66,  168 => 65,  162 => 62,  156 => 59,  151 => 57,  146 => 56,  144 => 55,  141 => 54,  138 => 53,  136 => 52,  135 => 51,  134 => 50,  132 => 49,  130 => 48,  129 => 47,  128 => 46,  127 => 45,  123 => 44,  120 => 43,  114 => 40,  109 => 39,  103 => 36,  99 => 34,  93 => 31,  90 => 30,  88 => 29,  85 => 28,  83 => 27,  82 => 26,  81 => 25,  80 => 24,  78 => 23,  76 => 22,  71 => 21,  69 => 20,  64 => 19,  54 => 16,  49 => 15,  47 => 14,  42 => 13,  40 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_many_to_one.html.twig");
    }
}
