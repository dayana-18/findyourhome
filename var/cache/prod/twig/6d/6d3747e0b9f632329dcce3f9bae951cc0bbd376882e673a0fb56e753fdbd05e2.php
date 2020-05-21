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

/* @SonataAdmin/CRUD/base_list_field.html.twig */
class __TwigTemplate_b8abe9683ffeb118b0b207bde61a0963ef5fe4ae55e1ca0056e9e57743ab5bea extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'field_span_attributes' => [$this, 'block_field_span_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", [], "any", false, false, false, 12), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 12), "html", null, true);
        echo "\"";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 12), "row_align", [], "any", true, true, false, 12)) {
            echo " style=\"text-align:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 12), "row_align", [], "any", false, false, false, 12), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 13
        $context["route"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 13), "route", [], "any", false, true, false, 13), "name", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 13), "route", [], "any", false, true, false, 13), "name", [], "any", false, false, false, 13), null)) : (null));
        // line 14
        echo "
    ";
        // line 15
        if ((((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["field_description"] ?? null), "options", [], "any", false, true, false, 16), "identifier", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 16), "identifier", [], "any", false, false, false, 16), false)) : (false)) &&         // line 17
($context["route"] ?? null)) && twig_get_attribute($this->env, $this->source,         // line 18
($context["admin"] ?? null), "hasRoute", [0 => ($context["route"] ?? null)], "method", false, false, false, 18)) && twig_get_attribute($this->env, $this->source,         // line 19
($context["admin"] ?? null), "hasAccess", [0 => ($context["route"] ?? null), 1 => ((twig_in_filter(($context["route"] ?? null), [0 => "show", 1 => "edit"])) ? (($context["object"] ?? null)) : (null))], "method", false, false, false, 19))) {
            // line 21
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", [0 => ($context["route"] ?? null), 1 => ($context["object"] ?? null), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 21), "route", [], "any", false, false, false, 21), "parameters", [], "any", false, false, false, 21)], "method", false, false, false, 21), "html", null, true);
            echo "\">";
            // line 22
            $this->displayBlock('field', $context, $blocks);
            // line 35
            echo "</a>
    ";
        } else {
            // line 37
            echo "        ";
            $context["isEditable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 37), "editable", [], "any", true, true, false, 37) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 37), "editable", [], "any", false, false, false, 37)) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "edit", 1 => ($context["object"] ?? null)], "method", false, false, false, 37));
            // line 38
            echo "        ";
            if ((((($context["isEditable"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 38), "multiple", [], "any", true, true, false, 38)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 38), "multiple", [], "any", false, false, false, 38)) && twig_test_iterable(($context["value"] ?? null)))) {
                // line 39
                echo "            ";
                // line 40
                echo "            ";
                // line 41
                echo "            ";
                $context["xEditableType"] = "checklist";
                // line 42
                echo "        ";
            } else {
                // line 43
                echo "            ";
                $context["xEditableType"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getXEditableType(twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", [], "any", false, false, false, 43));
                // line 44
                echo "        ";
            }
            // line 45
            echo "
        ";
            // line 46
            if ((($context["isEditable"] ?? null) && ($context["xEditableType"] ?? null))) {
                // line 47
                echo "            ";
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_set_object_field_value", twig_array_merge(((twig_get_attribute($this->env, $this->source,                 // line 49
($context["admin"] ?? null), "getPersistentParameters", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getPersistentParameters", [], "any", false, false, false, 49), [])) : ([])), ["context" => "list", "field" => twig_get_attribute($this->env, $this->source,                 // line 51
($context["field_description"] ?? null), "name", [], "any", false, false, false, 51), "objectId" => twig_get_attribute($this->env, $this->source,                 // line 52
($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 52), "code" => twig_get_attribute($this->env, $this->source,                 // line 53
($context["admin"] ?? null), "code", [0 => ($context["object"] ?? null)], "method", false, false, false, 53)]));
                // line 56
                echo "
            ";
                // line 57
                if (((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", [], "any", false, false, false, 57) == "date") &&  !twig_test_empty(($context["value"] ?? null)))) {
                    // line 58
                    echo "                ";
                    $context["data_value"] = twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "format", [0 => "Y-m-d"], "method", false, false, false, 58);
                    // line 59
                    echo "            ";
                } elseif (((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", [], "any", false, false, false, 59) == "boolean") && twig_test_empty(($context["value"] ?? null)))) {
                    // line 60
                    echo "                ";
                    $context["data_value"] = 0;
                    // line 61
                    echo "            ";
                } elseif (twig_test_iterable(($context["value"] ?? null))) {
                    // line 62
                    echo "                ";
                    $context["data_value"] = json_encode(($context["value"] ?? null));
                    // line 63
                    echo "            ";
                } else {
                    // line 64
                    echo "                ";
                    $context["data_value"] = ($context["value"] ?? null);
                    // line 65
                    echo "            ";
                }
                // line 66
                echo "
            <span ";
                // line 67
                $this->displayBlock('field_span_attributes', $context, $blocks);
                // line 72
                echo ">
                ";
                // line 73
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 76
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 78
            echo "    ";
        }
        // line 79
        echo "</td>
";
    }

    // line 22
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                ";
        ob_start(function () { return ''; });
        // line 24
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 24), "collapse", [], "any", true, true, false, 24)) {
            // line 25
            echo "                    ";
            $context["collapse"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 25), "collapse", [], "any", false, false, false, 25);
            // line 26
            echo "                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"";
            // line 27
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", [], "any", false, false, false, 27), 40)) : (40)), "html", null, true);
            echo "\"
                          data-readmore-more=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", [], "any", false, false, false, 28), "read_more")) : ("read_more")), [], "SonataAdminBundle"), "html", null, true);
            echo "\"
                          data-readmore-less=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", [], "any", false, false, false, 29), "read_less")) : ("read_less")), [], "SonataAdminBundle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
                ";
        }
        // line 33
        echo "                ";
        $___internal_66b1e867c3f53b655ee23f2aea1dec9c286f15a1a3b1f4282d262741c8676eb6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo twig_spaceless($___internal_66b1e867c3f53b655ee23f2aea1dec9c286f15a1a3b1f4282d262741c8676eb6_);
        // line 34
        echo "            ";
    }

    // line 67
    public function block_field_span_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "class=\"x-editable\"
                  data-type=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["xEditableType"] ?? null), "html", null, true);
        echo "\"
                  data-value=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["data_value"] ?? null), "html", null, true);
        echo "\"
                  data-title=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "label", [], "any", false, false, false, 70), [], twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "translationDomain", [], "any", false, false, false, 70)), "html", null, true);
        echo "\"
                  data-pk=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 71), "html", null, true);
        echo "\"
                  data-url=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 72,  230 => 71,  226 => 70,  222 => 69,  218 => 68,  212 => 67,  208 => 34,  206 => 23,  203 => 33,  197 => 31,  190 => 29,  186 => 28,  182 => 27,  179 => 26,  176 => 25,  173 => 24,  170 => 23,  166 => 22,  161 => 79,  158 => 78,  152 => 76,  146 => 73,  143 => 72,  141 => 67,  138 => 66,  135 => 65,  132 => 64,  129 => 63,  126 => 62,  123 => 61,  120 => 60,  117 => 59,  114 => 58,  112 => 57,  109 => 56,  107 => 53,  106 => 52,  105 => 51,  104 => 49,  102 => 47,  100 => 46,  97 => 45,  94 => 44,  91 => 43,  88 => 42,  85 => 41,  83 => 40,  81 => 39,  78 => 38,  75 => 37,  71 => 35,  69 => 22,  65 => 21,  63 => 19,  62 => 18,  61 => 17,  60 => 16,  59 => 15,  56 => 14,  54 => 13,  42 => 12,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_list_field.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list_field.html.twig");
    }
}
