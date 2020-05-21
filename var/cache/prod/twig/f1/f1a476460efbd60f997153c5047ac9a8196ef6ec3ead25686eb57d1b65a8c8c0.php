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

/* @SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig */
class __TwigTemplate_0fa9cf043caa9686adb21613dbe3aeadc24b0ec440a2710332aa6cbf1770f244 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sonata_admin_orm_one_to_one_widget' => [$this, 'block_sonata_admin_orm_one_to_one_widget'],
            'sonata_admin_orm_many_to_many_widget' => [$this, 'block_sonata_admin_orm_many_to_many_widget'],
            'sonata_admin_orm_many_to_one_widget' => [$this, 'block_sonata_admin_orm_many_to_one_widget'],
            'sonata_admin_orm_one_to_many_widget' => [$this, 'block_sonata_admin_orm_one_to_many_widget'],
            'sonata_type_model_widget' => [$this, 'block_sonata_type_model_widget'],
            'sonata_type_model_list_widget' => [$this, 'block_sonata_type_model_list_widget'],
            'sonata_type_admin_widget' => [$this, 'block_sonata_type_admin_widget'],
            'sonata_type_collection_widget' => [$this, 'block_sonata_type_collection_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@SonataAdmin/Form/form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@SonataAdmin/Form/form_admin_fields.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_one.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 17)->display($context);
    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_to_many.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 21)->display($context);
    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_to_one.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 25)->display($context);
    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 29)->display($context);
    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 40))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 42), "mappingtype", [], "any", false, false, false, 42) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 44), "mappingtype", [], "any", false, false, false, 44) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 46
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 46), "mappingtype", [], "any", false, false, false, 46) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 48), "mappingtype", [], "any", false, false, false, 48) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 58
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"field-short-description\">
            ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 59), "associationadmin", [], "any", false, false, false, 59), "id", [0 => twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "value", [], "any", false, false, false, 59)], "method", false, false, false, 59)) {
            // line 60
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", ["code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 61
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 61), "associationadmin", [], "any", false, false, false, 61), "code", [], "any", false, false, false, 61), "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 62
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 62), "associationadmin", [], "any", false, false, false, 62), "id", [0 => twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "value", [], "any", false, false, false, 62)], "method", false, false, false, 62), "uniqid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 63
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 63), "associationadmin", [], "any", false, false, false, 63), "uniqid", [], "any", false, false, false, 63), "linkParameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 64
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 64), "options", [], "any", false, false, false, 64), "link_parameters", [], "any", false, false, false, 64)]));
            // line 65
            echo "
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 66), "options", [], "any", false, true, false, 66), "placeholder", [], "any", true, true, false, 66) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 66), "options", [], "any", false, false, false, 66), "placeholder", [], "any", false, false, false, 66))) {
            // line 67
            echo "                <span class=\"inner-field-short-description\">
                    ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 68), "options", [], "any", false, false, false, 68), "placeholder", [], "any", false, false, false, 68), [], "SonataAdminBundle"), "html", null, true);
            echo "
                </span>
            ";
        }
        // line 71
        echo "        </span>
        <span id=\"field_actions_";
        // line 72
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
        // line 74
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 74), "associationadmin", [], "any", false, false, false, 74), "hasroute", [0 => "list"], "method", false, false, false, 74) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 74), "associationadmin", [], "any", false, false, false, 74), "isGranted", [0 => "LIST"], "method", false, false, false, 74)) && ($context["btn_list"] ?? null))) {
            // line 75
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 75), "associationadmin", [], "any", false, false, false, 75), "generateUrl", [0 => "list"], "method", false, false, false, 75), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 76
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_list"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_list"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 84
        echo "
                ";
        // line 85
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 85), "associationadmin", [], "any", false, false, false, 85), "hasroute", [0 => "create"], "method", false, false, false, 85) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 86), "associationadmin", [], "any", false, false, false, 86), "isGranted", [0 => "CREATE"], "method", false, false, false, 86)) &&         // line 87
($context["btn_add"] ?? null))) {
            // line 89
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 89), "associationadmin", [], "any", false, false, false, 89), "generateUrl", [0 => "create"], "method", false, false, false, 89), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 90
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 98
        echo "                ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 98), "associationadmin", [], "any", false, false, false, 98), "hasroute", [0 => "edit"], "method", false, false, false, 98) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 99), "associationadmin", [], "any", false, false, false, 99), "isGranted", [0 => "EDIT"], "method", false, false, false, 99)) &&         // line 100
($context["btn_edit"] ?? null))) {
            // line 102
            echo "                    <a  href=\"";
            // line 103
            (((twig_get_attribute($this->env, $this->source,             // line 102
($context["sonata_admin"] ?? null), "value", [], "any", false, false, false, 102) == null)) ? (print ("")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 102), "associationadmin", [], "any", false, false, false, 102), "generateUrl", [0 => "edit", 1 => ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 103
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 103), "associationadmin", [], "any", false, false, false, 103), "normalizedIdentifier", [0 => twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "value", [], "any", false, false, false, 103)], "method", false, false, false, 103)]], "method", false, false, false, 102), "html", null, true))));
            // line 104
            echo "\"
                        onclick=\"return start_field_dialog_form_edit_";
            // line 105
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-warning btn-sm sonata-ba-action ";
            // line 106
            if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "value", [], "any", false, false, false, 106) == null)) {
                echo "hidden";
            }
            echo "\"
                        title=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_edit"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-pencil\"></i>
                        ";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_edit"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 113
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 116
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 116), "associationadmin", [], "any", false, false, false, 116), "hasRoute", [0 => "delete"], "method", false, false, false, 116) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 116), "associationadmin", [], "any", false, false, false, 116), "isGranted", [0 => "DELETE"], "method", false, false, false, 116)) && ($context["btn_delete"] ?? null))) {
            // line 117
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 118
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_delete"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_delete"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 126
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 131
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["required" => false]);
        echo "
        </span>

        ";
        // line 134
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 136
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 150
        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 150)->display($context);
    }

    // line 153
    public function block_sonata_type_admin_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "    ";
        // line 155
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 155), "mappingtype", [], "any", false, false, false, 155) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 156
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 157
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 157), "mappingtype", [], "any", false, false, false, 157) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 158
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 159
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 159), "mappingtype", [], "any", false, false, false, 159) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 160
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 161
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 161), "mappingtype", [], "any", false, false, false, 161) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 162
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 164
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "
    ";
        }
    }

    // line 168
    public function block_sonata_type_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 169), "mappingtype", [], "any", false, false, false, 169) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 170
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 171
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 171), "mappingtype", [], "any", false, false, false, 171) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 172
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 174
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " - type : CollectionType - mapping : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 174), "mappingtype", [], "any", false, false, false, 174), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 174,  404 => 172,  402 => 171,  397 => 170,  394 => 169,  390 => 168,  382 => 164,  376 => 162,  374 => 161,  369 => 160,  367 => 159,  362 => 158,  360 => 157,  355 => 156,  352 => 155,  350 => 154,  346 => 153,  342 => 150,  325 => 136,  320 => 134,  313 => 131,  307 => 126,  301 => 123,  295 => 120,  290 => 118,  287 => 117,  285 => 116,  280 => 113,  274 => 110,  268 => 107,  262 => 106,  258 => 105,  255 => 104,  253 => 103,  252 => 102,  251 => 103,  249 => 102,  247 => 100,  246 => 99,  244 => 98,  238 => 95,  232 => 92,  227 => 90,  222 => 89,  220 => 87,  219 => 86,  218 => 85,  215 => 84,  209 => 81,  203 => 78,  198 => 76,  193 => 75,  191 => 74,  186 => 72,  183 => 71,  177 => 68,  174 => 67,  172 => 66,  169 => 65,  167 => 64,  166 => 63,  165 => 62,  164 => 61,  162 => 60,  160 => 59,  156 => 58,  151 => 57,  147 => 56,  139 => 52,  137 => 51,  131 => 49,  129 => 48,  124 => 47,  122 => 46,  117 => 45,  115 => 44,  110 => 43,  108 => 42,  103 => 41,  101 => 40,  98 => 39,  95 => 37,  93 => 33,  89 => 32,  84 => 29,  80 => 28,  75 => 25,  71 => 24,  66 => 21,  62 => 20,  57 => 17,  53 => 16,  42 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/Form/form_admin_fields.html.twig");
    }
}
