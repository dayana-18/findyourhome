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

/* @SonataAdmin/Form/form_admin_fields.html.twig */
class __TwigTemplate_fc3b433ee0e322f9a8a094dd883df41ddfbe0e279702ecfff576d9e90a9a76d6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_errors' => [$this, 'block_form_errors'],
            'sonata_help' => [$this, 'block_sonata_help'],
            'form_help' => [$this, 'block_form_help'],
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'form_label' => [$this, 'block_form_label'],
            'checkbox_label' => [$this, 'block_checkbox_label'],
            'radio_label' => [$this, 'block_radio_label'],
            'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'form_row' => [$this, 'block_form_row'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'sonata_type_native_collection_widget_row' => [$this, 'block_sonata_type_native_collection_widget_row'],
            'sonata_type_native_collection_widget' => [$this, 'block_sonata_type_native_collection_widget'],
            'sonata_type_immutable_array_widget' => [$this, 'block_sonata_type_immutable_array_widget'],
            'sonata_type_immutable_array_widget_row' => [$this, 'block_sonata_type_immutable_array_widget_row'],
            'sonata_type_model_autocomplete_widget' => [$this, 'block_sonata_type_model_autocomplete_widget'],
            'sonata_type_choice_field_mask_widget' => [$this, 'block_sonata_type_choice_field_mask_widget'],
            'sonata_type_choice_multiple_sortable' => [$this, 'block_sonata_type_choice_multiple_sortable'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SonataAdmin/Form/form_admin_fields.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 16
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 16)) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 19), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 22)) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
    }

    // line 27
    public function block_sonata_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        ob_start(function () { return ''; });
        // line 29
        if (((isset($context["sonata_help"]) || array_key_exists("sonata_help", $context)) && ($context["sonata_help"] ?? null))) {
            // line 30
            echo "    ";
            @trigger_error("The \"sonata_help\" option is deprecated since sonata-project/admin-bundle 3.60, to be removed in 4.0. Use \"help\" instead."." (\"@SonataAdmin/Form/form_admin_fields.html.twig\" at line 30).", E_USER_DEPRECATED);
            // line 31
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo ($context["sonata_help"] ?? null);
            echo "</span>
";
        }
        $___internal_edaa154de4e87df98796b41b582ee1769284bfe9680e110b44e9bfed263163e6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo twig_spaceless($___internal_edaa154de4e87df98796b41b582ee1769284bfe9680e110b44e9bfed263163e6_);
    }

    // line 36
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        ob_start(function () { return ''; });
        // line 38
        echo "        <span class=\"help-block sonata-ba-field-widget-help\">";
        $this->displayParentBlock("form_help", $context, $blocks);
        echo "</span>
    ";
        $___internal_b6c718d62350e08fe4fa95aae5f68c42f1662b7e4a3e7036514105ba93e87707_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 37
        echo twig_spaceless($___internal_b6c718d62350e08fe4fa95aae5f68c42f1662b7e4a3e7036514105ba93e87707_);
    }

    // line 42
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 44
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 47
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 49
        echo "    ";
        if ((($context["type"] ?? null) != "file")) {
            // line 50
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 50), "")) : ("")) . " form-control")]);
            // line 51
            echo "    ";
        }
        // line 52
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 55
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 56), "")) : ("")) . " form-control")]);
        // line 57
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
    ";
        // line 58
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
";
    }

    // line 61
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        $this->displayParentBlock("number_widget", $context, $blocks);
        echo "
    ";
        // line 63
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 66
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        $this->displayParentBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 68
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 72
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        if ((($context["money_pattern"] ?? null) == "{{ widget }}")) {
            // line 74
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 76
            echo "        ";
            $context["currencySymbol"] = twig_trim_filter(twig_replace_filter(($context["money_pattern"] ?? null), ["{{ widget }}" => ""]));
            // line 77
            echo "        ";
            if (preg_match("/^{{ widget }}/", ($context["money_pattern"] ?? null))) {
                // line 78
                echo "            <div class=\"input-group\">";
                // line 79
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 80
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 82
($context["money_pattern"] ?? null))) {
                // line 83
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 84
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
                echo "</span>";
                // line 85
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 86
                echo "</div>
        ";
            }
            // line 88
            echo "    ";
        }
        // line 89
        echo "    ";
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 92
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "    ";
        ob_start(function () { return ''; });
        // line 94
        echo "        ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 95
        echo "        <div class=\"input-group\">
            ";
        // line 96
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
        ";
        // line 99
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
    ";
        $___internal_2a5c1d13ebd91466966c5d257587e477c38afb28d048b6a121f7b1cf5eaefce2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 93
        echo twig_spaceless($___internal_2a5c1d13ebd91466966c5d257587e477c38afb28d048b6a121f7b1cf5eaefce2_);
    }

    // line 103
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 105
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 108
            echo "<div class=\"checkbox\">";
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 110
            echo "</div>";
        }
    }

    // line 114
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 116
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 119
            echo "<div class=\"radio\">";
            // line 120
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 121
            echo "</div>";
        }
    }

    // line 126
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        ob_start(function () { return ''; });
        // line 128
        echo "    ";
        if (( !(($context["label"] ?? null) === false) && ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "options", [], "any", false, false, false, 128)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["form_type"] ?? null) : null) == "horizontal"))) {
            // line 129
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 130
            echo "    ";
        }
        // line 131
        echo "
    ";
        // line 132
        $context["label_class"] = ((((isset($context["label_class"]) || array_key_exists("label_class", $context))) ? (_twig_default_filter(($context["label_class"] ?? null), "")) : ("")) . " control-label");
        // line 133
        echo "
    ";
        // line 134
        if ( !(($context["label"] ?? null) === false)) {
            // line 135
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => ((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 135)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 135), "")) : ("")) . " ") . ($context["label_class"] ?? null))]);
            // line 136
            echo "
        ";
            // line 137
            if ( !($context["compound"] ?? null)) {
                // line 138
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
                // line 139
                echo "        ";
            }
            // line 140
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 141
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 141)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 141), "")) : ("")) . " required"))]);
                // line 142
                echo "        ";
            }
            // line 143
            echo "
        ";
            // line 144
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 145
                if (((isset($context["label_format"]) || array_key_exists("label_format", $context)) &&  !twig_test_empty(($context["label_format"] ?? null)))) {
                    // line 146
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 147
($context["name"] ?? null), "%id%" =>                     // line 148
($context["id"] ?? null)]);
                } else {
                    // line 151
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 154
            echo "
        <label";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 156
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 157
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } elseif ( !twig_get_attribute($this->env, $this->source,             // line 158
($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 158)) {
                // line 159
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 161
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 161), "translationDomain", [], "any", false, false, false, 161)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 161), "translationDomain", [], "any", false, false, false, 161)) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 161)))), "html", null, true);
                echo "
            ";
            }
            // line 163
            echo "        </label>
    ";
        }
        $___internal_f0c76862c101444f92ef4b8ee76833799b1e6b493efc8d66aa5aca806fcbd29e_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 127
        echo twig_spaceless($___internal_f0c76862c101444f92ef4b8ee76833799b1e6b493efc8d66aa5aca806fcbd29e_);
    }

    // line 168
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 172
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 176
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 177)) {
            // line 178
            echo "        ";
            $context["translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 178), "translationDomain", [], "any", false, false, false, 178);
            // line 179
            echo "    ";
        }
        // line 180
        echo "    ";
        // line 181
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 182
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 183
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 183)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 183), "")) : ("")) . " required"))]);
                // line 184
                echo "        ";
            }
            // line 185
            echo "        ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 186
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 186)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 186), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
                // line 187
                echo "        ";
            }
            // line 188
            echo "        ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 189
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 190
                echo "        ";
            }
            // line 191
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 192
            echo ($context["widget"] ?? null);
            // line 193
            if ( !(($context["label"] ?? null) === false)) {
                // line 194
                echo "<span class=\"control-label__text\">
                    ";
                // line 195
                if ((($context["translation_domain"] ?? null) === false)) {
                    // line 196
                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 198
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
                }
                // line 200
                echo "</span>";
            }
            // line 202
            echo "</label>
    ";
        }
    }

    // line 206
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        ob_start(function () { return ''; });
        // line 208
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 208)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 208), "")) : ("")) . " list-unstyled")]);
        // line 209
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 211
            echo "        <li>
            ";
            // line 212
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => "", "translation_domain" =>             // line 215
($context["choice_translation_domain"] ?? null)]);
            // line 216
            echo " ";
            // line 217
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "    </ul>
";
        $___internal_88a8fd8b9e9a88df8552806dca3b34ab96d2ae4db288ccaa78e6fb2807ada399_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 207
        echo twig_spaceless($___internal_88a8fd8b9e9a88df8552806dca3b34ab96d2ae4db288ccaa78e6fb2807ada399_);
    }

    // line 223
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 224
        ob_start(function () { return ''; });
        // line 225
        echo "    ";
        if (((($context["required"] ?? null) && (isset($context["placeholder"]) || array_key_exists("placeholder", $context))) && (null === ($context["placeholder"] ?? null)))) {
            // line 226
            echo "        ";
            $context["required"] = false;
            // line 227
            echo "    ";
        } elseif ((((((($context["required"] ?? null) && (isset($context["empty_value"]) || array_key_exists("empty_value", $context))) && (isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context))) && (null === ($context["empty_value"] ?? null))) &&  !($context["empty_value_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 228
            echo "        ";
            $context["required"] = false;
            // line 229
            echo "    ";
        }
        // line 230
        echo "
    ";
        // line 231
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 231)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 231), "")) : ("")) . " form-control")]);
        // line 232
        echo "    ";
        if ((((isset($context["sortable"]) || array_key_exists("sortable", $context)) && ($context["sortable"] ?? null)) && ($context["multiple"] ?? null))) {
            // line 233
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 235
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (($context["multiple"] ?? null)) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 236
            if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context)) &&  !(null === ($context["empty_value"] ?? null)))) {
                // line 237
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 238
                if ((($context["empty_value"] ?? null) != "")) {
                    // line 239
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 239)) {
                        // line 240
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["empty_value"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 242
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["empty_value"] ?? null), [], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 242), "translationDomain", [], "any", false, false, false, 242)), "html", null, true);
                    }
                    // line 244
                    echo "                    ";
                }
                // line 245
                echo "                </option>
            ";
            } elseif ((            // line 246
(isset($context["placeholder"]) || array_key_exists("placeholder", $context)) &&  !(null === ($context["placeholder"] ?? null)))) {
                // line 247
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 248
                if ((($context["placeholder"] ?? null) != "")) {
                    // line 249
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 249)) {
                        // line 250
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 252
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 252), "translationDomain", [], "any", false, false, false, 252)), "html", null, true);
                    }
                    // line 254
                    echo "                    ";
                }
                // line 255
                echo "                </option>
            ";
            }
            // line 257
            echo "            ";
            if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
                // line 258
                echo "                ";
                $context["options"] = ($context["preferred_choices"] ?? null);
                // line 259
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 260
                if ((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0)) {
                    // line 261
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                    echo "</option>
                ";
                }
                // line 263
                echo "            ";
            }
            // line 264
            echo "            ";
            $context["options"] = ($context["choices"] ?? null);
            // line 265
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        $___internal_bc26bf676b6e2b84f26cf65692c9c27d5c49eb04f6abbb8bdfcbfd469fc8a5f7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 224
        echo twig_spaceless($___internal_bc26bf676b6e2b84f26cf65692c9c27d5c49eb04f6abbb8bdfcbfd469fc8a5f7_);
    }

    // line 271
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 272
        ob_start(function () { return ''; });
        // line 273
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 274
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 276
            echo "        ";
            if (( !(isset($context["row"]) || array_key_exists("row", $context)) || (($context["row"] ?? null) == true))) {
                // line 277
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 277)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 277), "")) : ("")) . " row")]);
                // line 278
                echo "        ";
            }
            // line 279
            echo "        ";
            $context["input_wrapper_class"] = (((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context))) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-4")) : ("col-sm-4"));
            // line 280
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 281
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" => (((("<div class=\"" .             // line 282
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 282), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 283
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 283), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 284
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 284), 'widget')) . "</div>")]);
            // line 285
            echo "
        </div>
    ";
        }
        // line 288
        echo "    ";
        if ( !(isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context))) {
            // line 289
            echo "        ";
            $this->displayBlock("sonata_help", $context, $blocks);
            echo "
    ";
        }
        $___internal_6314426dfc9bc44a45655c40ef39c11370875ba19e8aa925e9b87bcadc2da83c_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 272
        echo twig_spaceless($___internal_6314426dfc9bc44a45655c40ef39c11370875ba19e8aa925e9b87bcadc2da83c_);
    }

    // line 294
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 295
        ob_start(function () { return ''; });
        // line 296
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 297
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 299
            echo "        ";
            if (( !(isset($context["row"]) || array_key_exists("row", $context)) || (($context["row"] ?? null) == true))) {
                // line 300
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 300)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 300), "")) : ("")) . " row")]);
                // line 301
                echo "        ";
            }
            // line 302
            echo "        ";
            $context["input_wrapper_class"] = (((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context))) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-6")) : ("col-sm-6"));
            // line 303
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 304
            echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 305
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 305), 'widget');
            echo "
            </div>
            ";
            // line 307
            if (($context["with_minutes"] ?? null)) {
                // line 308
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 309
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 309), 'widget');
                echo "
                </div>
            ";
            }
            // line 312
            echo "            ";
            if (($context["with_seconds"] ?? null)) {
                // line 313
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 314
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 314), 'widget');
                echo "
                </div>
            ";
            }
            // line 317
            echo "        </div>
    ";
        }
        // line 319
        echo "    ";
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
";
        $___internal_b1e3c6b1f5c0093e2d35720eddecf96279ac4f4ea6801173133aa2111d1bb10f_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 295
        echo twig_spaceless($___internal_b1e3c6b1f5c0093e2d35720eddecf96279ac4f4ea6801173133aa2111d1bb10f_);
    }

    // line 323
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 324
        ob_start(function () { return ''; });
        // line 325
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 326
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 328
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 328)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 328), "")) : ("")) . " row")]);
            // line 329
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 330), 'errors');
            echo "
            ";
            // line 331
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 331), 'errors');
            echo "

            ";
            // line 333
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 333), "vars", [], "any", false, false, false, 333), "widget", [], "any", false, false, false, 333) == "single_text")) {
                // line 334
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 335
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 335), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 338
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 338), 'widget', ["row" => false, "input_wrapper_class" => "col-sm-2"]);
                echo "
            ";
            }
            // line 340
            echo "
            ";
            // line 341
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 341), "vars", [], "any", false, false, false, 341), "widget", [], "any", false, false, false, 341) == "single_text")) {
                // line 342
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 343
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 343), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 346
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 346), 'widget', ["row" => false, "input_wrapper_class" => "col-sm-2"]);
                echo "
            ";
            }
            // line 348
            echo "        </div>
    ";
        }
        // line 350
        echo "    ";
        if ( !(isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context))) {
            // line 351
            echo "        ";
            $this->displayBlock("sonata_help", $context, $blocks);
            echo "
    ";
        }
        $___internal_ccabfb017e4b3f553e6f1a986bc7b37bb873884ab3ab9f8505c78807c7c260af_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 324
        echo twig_spaceless($___internal_ccabfb017e4b3f553e6f1a986bc7b37bb873884ab3ab9f8505c78807c7c260af_);
    }

    // line 356
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 357
        echo "    ";
        $context["show_label"] = (($context["show_label"]) ?? (true));
        // line 358
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 359
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 359), "options", [], "any", true, true, false, 359)) {
            // line 360
            echo "            ";
            $context["label"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 360), "options", [], "any", false, true, false, 360), "name", [], "any", true, true, false, 360)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 360), "options", [], "any", false, true, false, 360), "name", [], "any", false, false, false, 360), ($context["label"] ?? null))) : (($context["label"] ?? null)));
            // line 361
            echo "        ";
        }
        // line 362
        echo "
        ";
        // line 363
        $context["div_class"] = "sonata-ba-field";
        // line 364
        echo "
        ";
        // line 365
        if ((($context["label"] ?? null) === false)) {
            // line 366
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-collection-row-without-label");
            // line 367
            echo "        ";
        }
        // line 368
        echo "
        ";
        // line 369
        if (((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "options", [], "any", false, false, false, 369)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["form_type"] ?? null) : null) == "horizontal"))) {
            // line 370
            echo "            ";
            // line 371
            echo "            ";
            if (((($context["label"] ?? null) === false) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 371), "checked", [], "any", true, true, false, 371))) {
                // line 372
                echo "                ";
                if (twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 372), "vars", [], "any", false, false, false, 372), "block_prefixes", [], "any", false, false, false, 372))) {
                    // line 373
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-12");
                    // line 374
                    echo "                ";
                } else {
                    // line 375
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9 col-sm-offset-3");
                    // line 376
                    echo "                ";
                }
                // line 377
                echo "            ";
            } else {
                // line 378
                echo "                ";
                $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9");
                // line 379
                echo "            ";
            }
            // line 380
            echo "        ";
        }
        // line 381
        echo "
        ";
        // line 382
        if (($context["show_label"] ?? null)) {
            // line 383
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', (twig_test_empty($_label_ = (((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter(($context["label"] ?? null), null)) : (null))) ? [] : ["label" => $_label_]));
            echo "
        ";
        }
        // line 385
        echo "
        ";
        // line 386
        if (((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && ($context["sonata_admin_enabled"] ?? null))) {
            // line 387
            echo "            ";
            $context["div_class"] = ((((($context["div_class"] ?? null) . " sonata-ba-field-") . twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 387)) . "-") . twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", [], "any", false, false, false, 387));
            // line 388
            echo "        ";
        }
        // line 389
        echo "
        ";
        // line 390
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 391
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-ba-field-error");
            // line 392
            echo "        ";
        }
        // line 393
        echo "
        <div class=\"";
        // line 394
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 395
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => ""]);
        echo " ";
        // line 396
        echo "
            ";
        // line 397
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 398
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 399
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                </div>
            ";
        }
        // line 402
        echo "
            ";
        // line 403
        if ((((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && ($context["sonata_admin_enabled"] ?? null)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 403), "help", [], "any", true, true, false, 403)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, true, false, 403), "help", [], "any", false, false, false, 403), false)) : (false)))) {
            // line 404
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 404), "help", [], "any", false, false, false, 404), [], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 404), "translationDomain", [], "any", false, false, false, 404)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 404), "translationDomain", [], "any", false, false, false, 404)) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 404))));
            echo "</span>
            ";
        }
        // line 406
        echo "
            ";
        // line 407
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        echo "
        </div>
    </div>
";
    }

    // line 412
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 413
        $context["show_label"] = false;
        // line 414
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 417
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 418
        $context["show_label"] = false;
        // line 419
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 422
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 423
        ob_start(function () { return ''; });
        // line 424
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 425
        if (($context["allow_delete"] ?? null)) {
            // line 426
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 434
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'row', ["label" => false]);
        echo "
        ";
        // line 435
        if (($context["allow_delete"] ?? null)) {
            // line 436
            echo "                </div>
            </div>
        ";
        }
        // line 439
        echo "    </div>
";
        $___internal_36611e3e79ed0f47a0f21ec4f7b7b7d28c1ce3e9049ca70da457f92c2b153327_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 423
        echo twig_spaceless($___internal_36611e3e79ed0f47a0f21ec4f7b7b7d28c1ce3e9049ca70da457f92c2b153327_);
    }

    // line 443
    public function block_sonata_type_native_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 444
        ob_start(function () { return ''; });
        // line 445
        echo "    ";
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 446
            echo "        ";
            $context["child"] = ($context["prototype"] ?? null);
            // line 447
            echo "        ";
            $context["allow_delete_backup"] = ($context["allow_delete"] ?? null);
            // line 448
            echo "        ";
            $context["allow_delete"] = true;
            // line 449
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 449), "name", [], "any", false, false, false, 449), "class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 449)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 449), "")) : (""))]);
            // line 450
            echo "        ";
            $context["allow_delete"] = ($context["allow_delete_backup"] ?? null);
            // line 451
            echo "    ";
        }
        // line 452
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 453
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        ";
        // line 454
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 455
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 457
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        ";
        // line 458
        if (($context["allow_add"] ?? null)) {
            // line 459
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 461
        echo "    </div>
";
        $___internal_b8ff06cddee475c5101aa27039f8ceb5f80c2e9abaa98b4800f5f150557657a9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 444
        echo twig_spaceless($___internal_b8ff06cddee475c5101aa27039f8ceb5f80c2e9abaa98b4800f5f150557657a9_);
    }

    // line 465
    public function block_sonata_type_immutable_array_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 466
        echo "    ";
        ob_start(function () { return ''; });
        // line 467
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 468
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

            ";
        // line 470
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

            ";
        // line 472
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 473
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 475
        echo "
            ";
        // line 476
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>
    ";
        $___internal_5b7d4a32d16e647a453a25abd6bdfabea6ddeea32d24bcf8a2513706d5c83576_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 466
        echo twig_spaceless($___internal_5b7d4a32d16e647a453a25abd6bdfabea6ddeea32d24bcf8a2513706d5c83576_);
    }

    // line 481
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 482
        echo "    ";
        ob_start(function () { return ''; });
        // line 483
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", [], "any", false, false, false, 483), "errors", [], "any", false, false, false, 483)) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 485
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'label');
        echo "

            ";
        // line 487
        $context["div_class"] = "";
        // line 488
        echo "            ";
        if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "options", [], "any", false, false, false, 488)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["form_type"] ?? null) : null) == "horizontal")) {
            // line 489
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 490
            echo "            ";
        }
        // line 491
        echo "
            <div class=\"";
        // line 492
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 492), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", [], "any", false, false, false, 492), "html", null, true);
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", [], "any", false, false, false, 492), "errors", [], "any", false, false, false, 492)) > 0)) {
            echo " sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 493
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'widget', ["horizontal" => false, "horizontal_input_wrapper_class" => ""]);
        echo " ";
        // line 494
        echo "                ";
        $context["sonata_help"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", [], "any", false, false, false, 494), "sonata_help", [], "any", false, false, false, 494);
        // line 495
        echo "                ";
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
            </div>

            ";
        // line 498
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", [], "any", false, false, false, 498), "errors", [], "any", false, false, false, 498)) > 0)) {
            // line 499
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 500
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'errors');
            echo "
                </div>
            ";
        }
        // line 503
        echo "        </div>
    ";
        $___internal_e4ee90bb5591fadc4d1cab75310236fd3d372ebaef2fd60c5876639108178733_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 482
        echo twig_spaceless($___internal_e4ee90bb5591fadc4d1cab75310236fd3d372ebaef2fd60c5876639108178733_);
    }

    // line 507
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 508
        echo "    ";
        $this->loadTemplate(($context["template"] ?? null), "@SonataAdmin/Form/form_admin_fields.html.twig", 508)->display($context);
    }

    // line 511
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 512
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 514
        echo "    ";
        $context["main_form_name"] = twig_slice($this->env, ($context["id"] ?? null), 0, ((twig_length_filter($this->env, ($context["id"] ?? null)) - twig_length_filter($this->env, ($context["name"] ?? null))) - 1));
        // line 515
        echo "    ";
        if (($context["expanded"] ?? null)) {
            // line 516
            echo "        ";
            $context["js_selector"] = (((("#" . ($context["main_form_name"] ?? null)) . "_") . ($context["name"] ?? null)) . " input");
            // line 517
            echo "        ";
            $context["js_event"] = "ifChecked";
            // line 518
            echo "    ";
        } else {
            // line 519
            echo "        ";
            $context["js_selector"] = ((("#" . ($context["main_form_name"] ?? null)) . "_") . ($context["name"] ?? null));
            // line 520
            echo "        ";
            $context["js_event"] = "change";
            // line 521
            echo "    ";
        }
        // line 522
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 524
        echo json_encode(($context["all_fields"] ?? null));
        echo ",
                map = ";
        // line 525
        echo json_encode(($context["map"] ?? null));
        echo ",
                showMaskChoiceEl = jQuery(\"";
        // line 526
        echo twig_escape_filter($this->env, ($context["js_selector"] ?? null), "html", null, true);
        echo "\");

            showMaskChoiceEl.on(\"";
        // line 528
        echo twig_escape_filter($this->env, ($context["js_event"] ?? null), "html", null, true);
        echo "\", function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-";
        // line 535
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo "_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        return '#sonata-ba-field-container-";
        // line 539
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo "-' + field;
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    var fieldContainer = controlGroupIdFunc(field);
                    jQuery(fieldContainer).hide();
                    jQuery(fieldContainer).find('[required=\"required\"]').attr('data-required', 'required').removeAttr(\"required\");
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        var fieldContainer = controlGroupIdFunc(field);
                        jQuery(fieldContainer).show();
                        jQuery(fieldContainer).find('[data-required=\"required\"]').attr(\"required\", \"required\");
                    });
                }
            }

            ";
        // line 560
        if (twig_test_empty(($context["value"] ?? null))) {
            // line 561
            echo "                choice_field_mask_show(showMaskChoiceEl.val());
            ";
        } else {
            // line 563
            echo "                choice_field_mask_show('";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["value"] ?? null), "js"), "html", null, true);
            echo "');
            ";
        }
        // line 565
        echo "        });

    </script>
";
    }

    // line 570
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 571
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 575
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "'), ";
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 575), "choices", [], "any", false, false, false, 575));
        echo ");
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Form/form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1544 => 575,  1532 => 571,  1528 => 570,  1521 => 565,  1515 => 563,  1511 => 561,  1509 => 560,  1485 => 539,  1478 => 535,  1468 => 528,  1463 => 526,  1459 => 525,  1455 => 524,  1451 => 522,  1448 => 521,  1445 => 520,  1442 => 519,  1439 => 518,  1436 => 517,  1433 => 516,  1430 => 515,  1427 => 514,  1422 => 512,  1418 => 511,  1413 => 508,  1409 => 507,  1405 => 482,  1401 => 503,  1395 => 500,  1392 => 499,  1390 => 498,  1383 => 495,  1380 => 494,  1377 => 493,  1366 => 492,  1363 => 491,  1360 => 490,  1357 => 489,  1354 => 488,  1352 => 487,  1347 => 485,  1335 => 483,  1332 => 482,  1328 => 481,  1324 => 466,  1318 => 476,  1315 => 475,  1298 => 473,  1281 => 472,  1276 => 470,  1271 => 468,  1266 => 467,  1263 => 466,  1259 => 465,  1255 => 444,  1251 => 461,  1247 => 459,  1245 => 458,  1240 => 457,  1223 => 455,  1206 => 454,  1202 => 453,  1197 => 452,  1194 => 451,  1191 => 450,  1188 => 449,  1185 => 448,  1182 => 447,  1179 => 446,  1176 => 445,  1174 => 444,  1170 => 443,  1166 => 423,  1162 => 439,  1157 => 436,  1155 => 435,  1150 => 434,  1140 => 426,  1138 => 425,  1135 => 424,  1133 => 423,  1129 => 422,  1124 => 419,  1122 => 418,  1118 => 417,  1113 => 414,  1111 => 413,  1107 => 412,  1099 => 407,  1096 => 406,  1090 => 404,  1088 => 403,  1085 => 402,  1079 => 399,  1076 => 398,  1074 => 397,  1071 => 396,  1068 => 395,  1064 => 394,  1061 => 393,  1058 => 392,  1055 => 391,  1053 => 390,  1050 => 389,  1047 => 388,  1044 => 387,  1042 => 386,  1039 => 385,  1033 => 383,  1031 => 382,  1028 => 381,  1025 => 380,  1022 => 379,  1019 => 378,  1016 => 377,  1013 => 376,  1010 => 375,  1007 => 374,  1004 => 373,  1001 => 372,  998 => 371,  996 => 370,  994 => 369,  991 => 368,  988 => 367,  985 => 366,  983 => 365,  980 => 364,  978 => 363,  975 => 362,  972 => 361,  969 => 360,  967 => 359,  958 => 358,  955 => 357,  951 => 356,  947 => 324,  940 => 351,  937 => 350,  933 => 348,  927 => 346,  921 => 343,  918 => 342,  916 => 341,  913 => 340,  907 => 338,  901 => 335,  898 => 334,  896 => 333,  891 => 331,  887 => 330,  882 => 329,  879 => 328,  873 => 326,  870 => 325,  868 => 324,  864 => 323,  860 => 295,  854 => 319,  850 => 317,  844 => 314,  839 => 313,  836 => 312,  830 => 309,  825 => 308,  823 => 307,  818 => 305,  814 => 304,  809 => 303,  806 => 302,  803 => 301,  800 => 300,  797 => 299,  791 => 297,  788 => 296,  786 => 295,  782 => 294,  778 => 272,  771 => 289,  768 => 288,  763 => 285,  761 => 284,  760 => 283,  759 => 282,  758 => 281,  753 => 280,  750 => 279,  747 => 278,  744 => 277,  741 => 276,  735 => 274,  732 => 273,  730 => 272,  726 => 271,  722 => 224,  714 => 265,  711 => 264,  708 => 263,  702 => 261,  700 => 260,  695 => 259,  692 => 258,  689 => 257,  685 => 255,  682 => 254,  679 => 252,  676 => 250,  673 => 249,  671 => 248,  664 => 247,  662 => 246,  659 => 245,  656 => 244,  653 => 242,  650 => 240,  647 => 239,  645 => 238,  638 => 237,  636 => 236,  628 => 235,  622 => 233,  619 => 232,  617 => 231,  614 => 230,  611 => 229,  608 => 228,  605 => 227,  602 => 226,  599 => 225,  597 => 224,  593 => 223,  589 => 207,  585 => 219,  578 => 217,  576 => 216,  574 => 215,  573 => 212,  570 => 211,  566 => 210,  561 => 209,  558 => 208,  556 => 207,  552 => 206,  546 => 202,  543 => 200,  540 => 198,  537 => 196,  535 => 195,  532 => 194,  530 => 193,  528 => 192,  513 => 191,  510 => 190,  507 => 189,  504 => 188,  501 => 187,  498 => 186,  495 => 185,  492 => 184,  489 => 183,  486 => 182,  483 => 181,  481 => 180,  478 => 179,  475 => 178,  472 => 177,  468 => 176,  464 => 173,  460 => 172,  456 => 169,  452 => 168,  448 => 127,  443 => 163,  437 => 161,  434 => 159,  432 => 158,  430 => 157,  428 => 156,  413 => 155,  410 => 154,  406 => 151,  403 => 148,  402 => 147,  401 => 146,  399 => 145,  397 => 144,  394 => 143,  391 => 142,  388 => 141,  385 => 140,  382 => 139,  379 => 138,  377 => 137,  374 => 136,  371 => 135,  369 => 134,  366 => 133,  364 => 132,  361 => 131,  358 => 130,  355 => 129,  352 => 128,  350 => 127,  346 => 126,  341 => 121,  339 => 120,  337 => 119,  334 => 117,  332 => 116,  330 => 115,  326 => 114,  321 => 110,  319 => 109,  317 => 108,  314 => 106,  312 => 105,  310 => 104,  306 => 103,  302 => 93,  297 => 99,  291 => 96,  288 => 95,  285 => 94,  282 => 93,  278 => 92,  273 => 89,  270 => 88,  266 => 86,  264 => 85,  261 => 84,  258 => 83,  256 => 82,  250 => 80,  248 => 79,  246 => 78,  243 => 77,  240 => 76,  237 => 74,  235 => 73,  231 => 72,  227 => 68,  223 => 67,  219 => 66,  215 => 63,  211 => 62,  207 => 61,  201 => 58,  196 => 57,  193 => 56,  189 => 55,  182 => 52,  179 => 51,  176 => 50,  173 => 49,  170 => 48,  166 => 47,  162 => 44,  158 => 43,  154 => 42,  150 => 37,  144 => 38,  141 => 37,  137 => 36,  133 => 28,  126 => 31,  123 => 30,  121 => 29,  119 => 28,  115 => 27,  110 => 23,  106 => 22,  103 => 21,  94 => 19,  90 => 18,  87 => 17,  82 => 16,  80 => 15,  76 => 14,  65 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Form/form_admin_fields.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/Form/form_admin_fields.html.twig");
    }
}
