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

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig */
class __TwigTemplate_45ac7e8ceb871fd73bc2d21f3394c114d23e9d55bcdf95c28843982df1893871 extends \Twig\Template
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
        // line 13
        echo "
";
        // line 14
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 14), "hasassociationadmin", [], "any", false, false, false, 14)) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 16
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement($context["element"], twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 16)), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "
    <div id=\"field_container_";
            // line 20
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 21
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" >
            ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 22) == "inline")) {
                // line 23
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", [], "any", false, false, false, 23) == "table")) {
                    // line 24
                    echo "                    ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 24)) > 0)) {
                        // line 25
                        echo "                        ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 25)->display($context);
                        // line 26
                        echo "                    ";
                    }
                    // line 27
                    echo "                ";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 27)) > 0)) {
                    // line 28
                    echo "                    ";
                    $context["associationAdmin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 28), "associationadmin", [], "any", false, false, false, 28);
                    // line 29
                    echo "                    ";
                    $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_tabs.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 29)->display($context);
                    // line 30
                    echo "
                ";
                }
                // line 32
                echo "            ";
            } else {
                // line 33
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
            ";
            }
            // line 35
            echo "
        </span>

        ";
            // line 38
            $context["display_create_button"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 38), "associationadmin", [], "any", false, false, false, 38), "hasroute", [0 => "create"], "method", false, false, false, 38) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 39
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 39), "associationadmin", [], "any", false, false, false, 39), "isGranted", [0 => "CREATE"], "method", false, false, false, 39)) &&             // line 40
($context["btn_add"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 42
($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 42), "options", [], "any", false, true, false, 42), "limit", [], "any", true, true, false, 42) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 43
($context["form"] ?? null), "children", [], "any", false, false, false, 43)) < twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 43), "options", [], "any", false, false, false, 43), "limit", [], "any", false, false, false, 43))));
            // line 45
            echo "
        ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 46) == "inline")) {
                // line 47
                echo "
            ";
                // line 48
                if (($context["display_create_button"] ?? null)) {
                    // line 49
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 51), "associationadmin", [], "any", false, false, false, 51), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 53
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 53), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 53)], "method", false, false, false, 51), "html", null, true);
                    // line 54
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 55
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 64
                echo "
            ";
                // line 66
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 66), "options", [], "any", false, true, false, 66), "sortable", [], "any", true, true, false, 66)) {
                    // line 67
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", [], "any", false, false, false, 67) == "table")) {
                        // line 68
                        echo "                    ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_table.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 68)->display($context);
                        // line 69
                        echo "                ";
                    } else {
                        // line 70
                        echo "                    ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 70)->display($context);
                        // line 71
                        echo "                ";
                    }
                    // line 72
                    echo "            ";
                }
                // line 73
                echo "
            ";
                // line 75
                echo "            ";
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_association_script.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 75)->display($context);
                // line 76
                echo "
        ";
            } else {
                // line 78
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" >
                ";
                // line 79
                if (($context["display_create_button"] ?? null)) {
                    // line 80
                    echo "                    <a
                        href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 81), "associationadmin", [], "any", false, false, false, 81), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 83
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 83), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 83)], "method", false, false, false, 81), "html", null, true);
                    // line 84
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 85
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 93
                echo "            </span>

            ";
                // line 95
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 95)->display($context);
                // line 96
                echo "
            ";
                // line 97
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", 97)->display($context);
                // line 98
                echo "        ";
            }
            // line 99
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 99,  236 => 98,  234 => 97,  231 => 96,  229 => 95,  225 => 93,  219 => 90,  213 => 87,  208 => 85,  205 => 84,  203 => 83,  202 => 81,  199 => 80,  197 => 79,  192 => 78,  188 => 76,  185 => 75,  182 => 73,  179 => 72,  176 => 71,  173 => 70,  170 => 69,  167 => 68,  164 => 67,  161 => 66,  158 => 64,  151 => 60,  145 => 57,  140 => 55,  137 => 54,  135 => 53,  134 => 51,  128 => 49,  126 => 48,  123 => 47,  121 => 46,  118 => 45,  116 => 43,  115 => 42,  114 => 40,  113 => 39,  112 => 38,  107 => 35,  101 => 33,  98 => 32,  94 => 30,  91 => 29,  88 => 28,  85 => 27,  82 => 26,  79 => 25,  76 => 24,  73 => 23,  71 => 22,  67 => 21,  63 => 20,  60 => 19,  50 => 16,  45 => 15,  43 => 14,  40 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_to_many.html.twig");
    }
}
