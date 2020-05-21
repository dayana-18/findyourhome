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

/* @SonataCore/Form/datepicker.html.twig */
class __TwigTemplate_be6533d76102cad3534cdde6931dcca62da79c8da303277acd5f9bf8a32ec188 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sonata_type_date_picker_widget_html' => [$this, 'block_sonata_type_date_picker_widget_html'],
            'sonata_type_date_picker_widget' => [$this, 'block_sonata_type_date_picker_widget'],
            'sonata_type_datetime_picker_widget_html' => [$this, 'block_sonata_type_datetime_picker_widget_html'],
            'sonata_type_datetime_picker_widget' => [$this, 'block_sonata_type_datetime_picker_widget'],
            'sonata_type_datetime_range_script_block' => [$this, 'block_sonata_type_datetime_range_script_block'],
            'sonata_type_datetime_range_picker_widget' => [$this, 'block_sonata_type_datetime_range_picker_widget'],
            'sonata_type_date_range_picker_widget' => [$this, 'block_sonata_type_date_range_picker_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('sonata_type_datetime_range_script_block', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('sonata_type_datetime_range_picker_widget', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('sonata_type_date_range_picker_widget', $context, $blocks);
    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        if (($context["datepicker_use_button"] ?? null)) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-date-format" => ($context["moment_format"] ?? null)]);
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if (($context["datepicker_use_button"] ?? null)) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        ob_start(function () { return ''; });
        // line 25
        echo "        ";
        if (($context["wrap_fields_with_addons"] ?? null)) {
            // line 26
            echo "            <div class=\"input-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo ((($context["datepicker_use_button"] ?? null)) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').datetimepicker(";
        echo json_encode(($context["dp_options"] ?? null));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        if (($context["datepicker_use_button"] ?? null)) {
            // line 42
            echo "        <div class='input-group date ";
            if ( !(($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["dp_options"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["pickDate"] ?? null) : null)) {
                echo "timepicker";
            }
            echo "' id='dtp_";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-date-format" => ($context["moment_format"] ?? null)]);
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if (($context["datepicker_use_button"] ?? null)) {
            // line 47
            echo "            <span class=\"input-group-addon\">
                <span class=\"fa ";
            // line 48
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["dp_options"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["pickDate"] ?? null) : null)) {
                echo "fa-calendar";
            } else {
                echo "fa-clock";
            }
            echo "\"></span>
            </span>
        </div>
    ";
        }
    }

    // line 54
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "    ";
        ob_start(function () { return ''; });
        // line 56
        echo "        ";
        if (($context["wrap_fields_with_addons"] ?? null)) {
            // line 57
            echo "            <div class=\"input-group\">
                ";
            // line 58
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 61
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 63
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 65
        echo ((($context["datepicker_use_button"] ?? null)) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').datetimepicker(";
        echo json_encode(($context["dp_options"] ?? null));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 71
    public function block_sonata_type_datetime_range_script_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "    ";
        ob_start(function () { return ''; });
        // line 73
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var \$startDateTimePicker = \$('#";
        // line 76
        echo twig_escape_filter($this->env, ($context["startId"] ?? null), "html", null, true);
        echo "');
                var \$endDateTimePicker = \$('#";
        // line 77
        echo twig_escape_filter($this->env, ($context["endId"] ?? null), "html", null, true);
        echo "');
                \$startDateTimePicker.on(\"dp.change\", function (e) {
                    \$endDateTimePicker.data(\"DateTimePicker\").setMinDate(e.date);
                });
                \$endDateTimePicker.on(\"dp.change\", function (e) {
                    \$startDateTimePicker.data(\"DateTimePicker\").setMaxDate(e.date);
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_sonata_type_datetime_range_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "    ";
        $context["startId"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 90), "start", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "datepicker_use_button", [], "any", false, false, false, 90)) ? ("dtp_") : ("")) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 90), "start", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90));
        // line 91
        echo "    ";
        $context["endId"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 91), "end", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "datepicker_use_button", [], "any", false, false, false, 91)) ? ("dtp_") : ("")) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 91), "end", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91));
        // line 92
        echo "    ";
        $this->displayBlock("sonata_type_datetime_range_script_block", $context, $blocks);
        echo "
";
    }

    // line 95
    public function block_sonata_type_date_range_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    ";
        $context["startId"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 96), "start", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "datepicker_use_button", [], "any", false, false, false, 96)) ? ("dp_") : ("")) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 96), "start", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96));
        // line 97
        echo "    ";
        $context["endId"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 97), "end", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "datepicker_use_button", [], "any", false, false, false, 97)) ? ("dp_") : ("")) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 97), "end", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97));
        // line 98
        echo "    ";
        $this->displayBlock("sonata_type_datetime_range_script_block", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SonataCore/Form/datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  293 => 98,  290 => 97,  287 => 96,  283 => 95,  276 => 92,  273 => 91,  270 => 90,  266 => 89,  251 => 77,  247 => 76,  240 => 73,  237 => 72,  233 => 71,  221 => 65,  217 => 63,  211 => 61,  205 => 58,  202 => 57,  199 => 56,  196 => 55,  192 => 54,  179 => 48,  176 => 47,  174 => 46,  169 => 45,  166 => 44,  156 => 42,  153 => 41,  149 => 40,  137 => 34,  133 => 32,  127 => 30,  121 => 27,  118 => 26,  115 => 25,  112 => 24,  108 => 23,  101 => 18,  99 => 17,  94 => 16,  91 => 15,  85 => 13,  82 => 12,  78 => 11,  74 => 95,  71 => 94,  69 => 89,  66 => 88,  64 => 71,  61 => 70,  59 => 54,  56 => 53,  54 => 40,  51 => 39,  49 => 23,  46 => 22,  44 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataCore/Form/datepicker.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/core-bundle/src/CoreBundle/Resources/views/Form/datepicker.html.twig");
    }
}
