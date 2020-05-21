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

/* @SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig */
class __TwigTemplate_b7f37405b7a96485a3a32cc57fc7708e90a1d892408650ac9f68d4bac034afab extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sonata_type_model_autocomplete_ajax_request_parameters' => [$this, 'block_sonata_type_model_autocomplete_ajax_request_parameters'],
            'sonata_type_model_autocomplete_dropdown_item_format' => [$this, 'block_sonata_type_model_autocomplete_dropdown_item_format'],
            'sonata_type_model_autocomplete_selection_format' => [$this, 'block_sonata_type_model_autocomplete_selection_format'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        // line 12
        echo "
    <input type=\"text\" id=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input\" value=\"\"";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        if ((((isset($context["read_only"]) || array_key_exists("read_only", $context))) ? (_twig_default_filter(($context["read_only"] ?? null), false)) : (false))) {
            echo " readonly=\"readonly\"";
        }
        // line 16
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 17
        echo "    />

    <select id=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_autocomplete_input_v4\" data-sonata-select2=\"false\"";
        // line 20
        if ((((isset($context["read_only"]) || array_key_exists("read_only", $context))) ? (_twig_default_filter(($context["read_only"] ?? null), false)) : (false))) {
            echo " readonly=\"readonly\"";
        }
        // line 21
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 22
        echo "    >";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["value"] ?? null), function ($__val__, $__idx__) use ($context, $macros) { $context["val"] = $__val__; $context["idx"] = $__idx__; return (($context["idx"] . "") != "_labels"); }));
        foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
            // line 24
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["value"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["_labels"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["idx"]] ?? null) : null), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</select>

    <div id=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "_hidden_inputs_wrap\">
        ";
        // line 29
        if (($context["multiple"] ?? null)) {
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["value"] ?? null), function ($__val__, $__idx__) use ($context, $macros) { $context["val"] = $__val__; $context["idx"] = $__idx__; return (($context["idx"] . "") != "_labels"); }));
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                // line 31
                echo "<input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
                echo "[]\"";
                if (($context["disabled"] ?? null)) {
                    echo " disabled=\"disabled\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 34
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\"";
            if (($context["disabled"] ?? null)) {
                echo " disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), 0, [], "array", true, true, false, 34)) ? (_twig_default_filter((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["value"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 36
        echo "</div>

    ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 38) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 38), "hasAssociationAdmin", [], "any", false, false, false, 38))) {
            // line 39
            echo "        <div id=\"field_actions_";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 40
            $context["display_btn_add"] = ((((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 40) != "admin") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 40), "associationadmin", [], "any", false, false, false, 40), "hasRoute", [0 => "create"], "method", false, false, false, 40)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 41
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 41), "associationadmin", [], "any", false, false, false, 41), "isGranted", [0 => "CREATE"], "method", false, false, false, 41)) && ($context["btn_add"] ?? null));
            // line 42
            echo "            ";
            if (($context["display_btn_add"] ?? null)) {
                // line 43
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 43), "associationadmin", [], "any", false, false, false, 43), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 44
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 44), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 44)], "method", false, false, false, 43), "html", null, true);
                // line 45
                echo "\"
                    onclick=\"return start_field_dialog_form_add_";
                // line 46
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-success btn-sm sonata-ba-action\"
                    title=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-plus-circle\"></i>
                    ";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), [], ($context["btn_catalogue"] ?? null)), "html", null, true);
                echo "
                </a>
                ";
                // line 53
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig", 53)->display($context);
                // line 54
                echo "                ";
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig", 54)->display($context);
                // line 55
                echo "            ";
            }
            // line 56
            echo "        </div>
    ";
        }
        // line 58
        echo "
    <script>
        ";
        // line 61
        echo "        jQuery(function (\$) {
            // Select2 v3 does not used same input as v4.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var usedInputRef = window.Select2 ? '#";
        // line 64
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
        echo "_autocomplete_input' : '#";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
        echo "_autocomplete_input_v4';
            var unusedInputRef = window.Select2 ? '#";
        // line 65
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
        echo "_autocomplete_input_v4' : '#";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
        echo "_autocomplete_input';

            \$(unusedInputRef).remove();
            var autocompleteInput = \$(usedInputRef);

            var select2Options = {";
        // line 71
        $context["allowClearPlaceholder"] = ((( !($context["multiple"] ?? null) &&  !($context["required"] ?? null))) ? (" ") : (""));
        // line 72
        echo "placeholder: '";
        echo twig_escape_filter($this->env, ((($context["placeholder"] ?? null)) ? (($context["placeholder"] ?? null)) : (($context["allowClearPlaceholder"] ?? null))), "js", null, true);
        echo "', // allowClear needs placeholder to work properly
                allowClear: ";
        // line 73
        echo ((($context["required"] ?? null)) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 74
        echo ((($context["disabled"] ?? null)) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 75
        echo ((((((isset($context["read_only"]) || array_key_exists("read_only", $context))) ? (_twig_default_filter(($context["read_only"] ?? null), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "read_only", [], "any", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "read_only", [], "any", false, false, false, 75), false)) : (false)))) ? ("true") : ("false"));
        echo ", ";
        // line 76
        echo "                ";
        echo "    ";
        // line 77
        echo "                minimumInputLength: ";
        echo twig_escape_filter($this->env, ($context["minimum_input_length"] ?? null), "js", null, true);
        echo ",
                multiple: ";
        // line 78
        echo ((($context["multiple"] ?? null)) ? ("true") : ("false"));
        echo ",
                width: function() {
                    // Select2 v3 and v4 BC. If window.Select2 is defined, then the v3 is installed.
                    // NEXT_MAJOR: Remove Select2 v3 support.
                    return Admin.get_select2_width(window.Select2 ? this.element : jQuery(this));
                },
                dropdownAutoWidth: ";
        // line 84
        echo ((($context["dropdown_auto_width"] ?? null)) ? ("true") : ("false"));
        echo ",
                containerCssClass: '";
        // line 85
        echo twig_escape_filter($this->env, (($context["container_css_class"] ?? null) . " form-control"), "js", null, true);
        echo "',
                dropdownCssClass: '";
        // line 86
        echo twig_escape_filter($this->env, ($context["dropdown_css_class"] ?? null), "js", null, true);
        echo "',
                ajax: {
                    url:  '";
        // line 88
        echo twig_escape_filter($this->env, ((($context["url"] ?? null)) ? (($context["url"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "name", [], "any", false, false, false, 88), ((twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "parameters", [], "any", false, false, false, 88), [])) : ([]))))), "js", null, true);
        echo "',
                    dataType: 'json',
                    quietMillis: ";
        // line 90
        echo twig_escape_filter($this->env, ($context["quiet_millis"] ?? null), "js", null, true);
        echo ",
                    cache: ";
        // line 91
        echo ((($context["cache"] ?? null)) ? ("true") : ("false"));
        echo ",
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        // Select2 v4 got a \"params\" unique argument
                        // NEXT_MAJOR: Remove this BC layer.
                        if (typeof page === 'undefined') {
                            page = typeof term.page !== 'undefined' ? term.page : 1;
                            term = term.term;
                        }

                        ";
        // line 100
        $this->displayBlock('sonata_type_model_autocomplete_ajax_request_parameters', $context, $blocks);
        // line 140
        echo "                    },
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            };

            // Select2 v3/v4 special options.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var templateResult = function (item) {
                return ";
        // line 148
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        // line 154
        echo "; // format of one dropdown item
            };
            var templateSelection = function (item) {
                // Select2 v4 BC select pre-selection.
                if (typeof item.label === 'undefined') {
                    item.label = item.text;
                }
                return ";
        // line 161
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        // line 167
        echo "; // format selected item '<b>'+item.label+'</b>';
            };

            if (window.Select2) {
                select2Options.initSelection = function (element, callback) {
                    callback(element.val());
                };
                select2Options.ajax.results = function (data, page) {
                    // notice we return the value of more so Select2 knows if more results can be loaded
                    return {results: data.items, more: data.more};
                };
                select2Options.formatResult = templateResult;
                select2Options.formatSelection = templateSelection;
            } else {
                select2Options.ajax.processResults = function (data, params) {
                    return {
                        results: data.items,
                        pagination: {
                            more: data.more
                        }
                    };
                };
                select2Options.templateResult = templateResult;
                select2Options.templateSelection = templateSelection;
            }
            // END Select2 v3/v4 special options

            autocompleteInput.select2(select2Options);

            // Events structure is different between v3 and v4
            // NEXT_MAJOR: Remove BC layer.
            var boundEvents = window.Select2 ? 'change' : 'select2:select select2:unselect';
            autocompleteInput.on(boundEvents, function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    ";
        // line 213
        if (($context["multiple"] ?? null)) {
            // line 214
            echo "                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#";
            // line 221
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }";
        } else {
            // line 224
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden').val('');";
        }
        // line 226
        echo "                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    ";
        // line 234
        if (($context["multiple"] ?? null)) {
            // line 235
            echo "                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#";
            // line 242
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
            echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "js", null, true);
            echo "[]\" value=\"'+el.id+'\" />');
                        }";
        } else {
            // line 245
            echo "\$('#";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden').val(addedItems.id);";
        }
        // line 247
        echo "                }
            });

            // Initialise the autocomplete
            var data = [];";
        // line 253
        if ( !twig_test_empty(($context["value"] ?? null))) {
            // line 254
            echo "data =";
            if (($context["multiple"] ?? null)) {
                echo "[";
            }
            // line 255
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["value"] ?? null), function ($__val__, $__idx__) use ($context, $macros) { $context["val"] = $__val__; $context["idx"] = $__idx__; return (($context["idx"] . "") != "_labels"); }));
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
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                // line 256
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 256)) {
                    echo ", ";
                }
                // line 257
                echo "{id: '";
                echo twig_escape_filter($this->env, $context["val"], "js", null, true);
                echo "', label:'";
                echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["value"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["_labels"] ?? null) : null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["idx"]] ?? null) : null), "js", null, true);
                echo "'}";
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
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            if (($context["multiple"] ?? null)) {
                echo "]";
            }
            echo ";
            ";
        }
        // line 262
        echo "// Select2 v3 data populate.
            // NEXT_MAJOR: Remove while dropping v3 support.
            if (window.Select2 && (undefined==data.length || 0<data.length)) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$(usedInputRef).closest('form').submit(function()
            {
                \$(usedInputRef).remove();
                return true;
            });

            // Automatically select the created record after closing the popup window
            ";
        // line 276
        if (((((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 276) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 277
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 277), "hasAssociationAdmin", [], "any", false, false, false, 277)) &&         // line 278
($context["btn_add"] ?? null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 279
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 279), "associationadmin", [], "any", false, false, false, 279), "hasRoute", [0 => "create"], "method", false, false, false, 279)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 280
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 280), "associationadmin", [], "any", false, false, false, 280), "hasAccess", [0 => "create"], "method", false, false, false, 280))) {
            // line 281
            echo "
                ";
            // line 282
            $context["create_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 282), "associationadmin", [], "any", false, false, false, 282), "generateUrl", [0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 282), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 282)], "method", false, false, false, 282);
            // line 283
            echo "
                \$(document).ajaxSuccess(function(event, xhr, settings) {
                  if(typeof xhr.responseJSON != 'undefined') {
                      if ('";
            // line 286
            echo twig_escape_filter($this->env, ($context["create_url"] ?? null), "js", null, true);
            echo "'.indexOf(settings.url) !== -1 && typeof xhr.responseJSON != 'string' && xhr.responseJSON.result == 'ok') {
                        var item = new Option(
                          new DOMParser().parseFromString(xhr.responseJSON.objectName, \"text/html\").documentElement.textContent,
                          xhr.responseJSON.objectId,
                          true, true
                          );";
            // line 293
            if (($context["multiple"] ?? null)) {
                // line 294
                echo "var data = autocompleteInput.select2('data');
                          data.push(item);";
            } else {
                // line 297
                echo "var data = item;";
            }
            // line 300
            if (($context["multiple"] ?? null)) {
                // line 301
                echo "                          \$('#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
                echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "js", null, true);
                echo "[]\" value=\"'+xhr.responseJSON.objectId+'\" />');
                        ";
            } else {
                // line 303
                echo "                          \$('#";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "js", null, true);
                echo "_hidden_inputs_wrap').html('<input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "js", null, true);
                echo "\" value=\"'+xhr.responseJSON.objectId+'\" />');
                        ";
            }
            // line 305
            echo "
                        // append to Select2
                        autocompleteInput.select2('data', data).append(data).trigger('change');

                        // manually trigger the `select2:select` event
                        autocompleteInput.select2('data', data).trigger({
                            type: 'select2:select',
                            params: {
                                data: data
                            }
                        });
                      }
                  }
                });
            ";
        }
        // line 320
        echo "        });
        ";
        // line 322
        echo "    </script>
";
        $___internal_f8ea7021dc45d151c96fa138a5f34aedd69dc43bb50ab9249f662d7f7cffa148_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_f8ea7021dc45d151c96fa138a5f34aedd69dc43bb50ab9249f662d7f7cffa148_);
    }

    // line 100
    public function block_sonata_type_model_autocomplete_ajax_request_parameters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "                        return {
                                //search term
                                '";
        // line 103
        echo twig_escape_filter($this->env, ($context["req_param_name_search"] ?? null), "js", null, true);
        echo "': term,

                                // page size
                                '";
        // line 106
        echo twig_escape_filter($this->env, ($context["req_param_name_items_per_page"] ?? null), "js", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, ($context["items_per_page"] ?? null), "js", null, true);
        echo ",

                                // page number
                                '";
        // line 109
        echo twig_escape_filter($this->env, ($context["req_param_name_page_number"] ?? null), "js", null, true);
        echo "': page,

                                // admin
                                ";
        // line 112
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 112))) {
            // line 113
            echo "                                    'uniqid': '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 113), "uniqid", [], "any", false, false, false, 113), "js", null, true);
            echo "',
                                    'admin_code': '";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 114), "code", [], "any", false, false, false, 114), "js");
            echo "',
                                ";
        } elseif (        // line 115
($context["admin_code"] ?? null)) {
            // line 116
            echo "                                    'admin_code':  '";
            echo twig_escape_filter($this->env, ($context["admin_code"] ?? null), "js");
            echo "',
                                ";
        }
        // line 118
        echo "
                                 // subclass
                                ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 120), "query", [], "any", false, false, false, 120), "get", [0 => "subclass"], "method", false, false, false, 120)) {
            // line 121
            echo "                                    'subclass': '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 121), "query", [], "any", false, false, false, 121), "get", [0 => "subclass"], "method", false, false, false, 121), "js", null, true);
            echo "',
                                ";
        }
        // line 123
        echo "
                                ";
        // line 124
        if ((($context["context"] ?? null) == "filter")) {
            // line 125
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["full_name"] ?? null), ["filter[" => "", "][value]" => "", "__" => "."]), "js", null, true);
            echo "',
                                    '_context': 'filter'
                                ";
        } else {
            // line 128
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "js", null, true);
            echo "'
                                ";
        }
        // line 130
        echo "
                                // other parameters
                                ";
        // line 132
        if ( !twig_test_empty(($context["req_params"] ?? null))) {
            echo ",";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["req_params"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 134
                echo "'";
                echo twig_escape_filter($this->env, $context["key"], "js", null, true);
                echo "': '";
                echo twig_escape_filter($this->env, $context["value"], "js", null, true);
                echo "'";
                // line 135
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 135)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 138
        echo "                        };
                        ";
    }

    // line 148
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        if ((((isset($context["safe_label"]) || array_key_exists("safe_label", $context))) ? (_twig_default_filter(($context["safe_label"] ?? null), false)) : (false))) {
            // line 150
            echo "                        '<div class=\"";
            echo twig_escape_filter($this->env, ($context["dropdown_item_css_class"] ?? null), "js", null, true);
            echo "\">'+item.label+'<\\/div>'
                    ";
        } else {
            // line 152
            echo "                        jQuery('<div class=\"";
            echo twig_escape_filter($this->env, ($context["dropdown_item_css_class"] ?? null), "js", null, true);
            echo "\">').text(item.label).prop('outerHTML')
                    ";
        }
    }

    // line 161
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        if ((((isset($context["safe_label"]) || array_key_exists("safe_label", $context))) ? (_twig_default_filter(($context["safe_label"] ?? null), false)) : (false))) {
            // line 163
            echo "                        item.label
                    ";
        } else {
            // line 165
            echo "                        jQuery('<div>').text(item.label).prop('innerHTML')
                    ";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  727 => 165,  723 => 163,  721 => 162,  717 => 161,  709 => 152,  703 => 150,  701 => 149,  697 => 148,  692 => 138,  675 => 135,  669 => 134,  652 => 133,  649 => 132,  645 => 130,  639 => 128,  632 => 125,  630 => 124,  627 => 123,  621 => 121,  619 => 120,  615 => 118,  609 => 116,  607 => 115,  603 => 114,  598 => 113,  596 => 112,  590 => 109,  582 => 106,  576 => 103,  572 => 101,  568 => 100,  564 => 11,  560 => 322,  557 => 320,  540 => 305,  532 => 303,  524 => 301,  522 => 300,  519 => 297,  515 => 294,  513 => 293,  505 => 286,  500 => 283,  498 => 282,  495 => 281,  493 => 280,  492 => 279,  491 => 278,  490 => 277,  489 => 276,  473 => 262,  466 => 259,  448 => 257,  444 => 256,  427 => 255,  422 => 254,  420 => 253,  414 => 247,  409 => 245,  402 => 242,  393 => 235,  391 => 234,  381 => 226,  376 => 224,  371 => 221,  362 => 214,  360 => 213,  312 => 167,  310 => 161,  301 => 154,  299 => 148,  289 => 140,  287 => 100,  275 => 91,  271 => 90,  266 => 88,  261 => 86,  257 => 85,  253 => 84,  244 => 78,  239 => 77,  236 => 76,  233 => 75,  229 => 74,  225 => 73,  220 => 72,  218 => 71,  208 => 65,  202 => 64,  197 => 61,  193 => 58,  189 => 56,  186 => 55,  183 => 54,  181 => 53,  176 => 51,  170 => 48,  165 => 46,  162 => 45,  160 => 44,  158 => 43,  155 => 42,  153 => 41,  152 => 40,  147 => 39,  145 => 38,  141 => 36,  129 => 34,  114 => 31,  110 => 30,  108 => 29,  104 => 28,  100 => 26,  90 => 24,  86 => 23,  84 => 22,  80 => 21,  76 => 20,  73 => 19,  69 => 17,  65 => 16,  61 => 15,  48 => 14,  45 => 13,  42 => 12,  40 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Form/Type/sonata_type_model_autocomplete.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/Form/Type/sonata_type_model_autocomplete.html.twig");
    }
}
