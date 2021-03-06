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

/* @SonataAdmin/CRUD/Association/edit_many_script.html.twig */
class __TwigTemplate_97889995e7d010be4646aca1eb372dd3e0d757f19047b02a531e0552eac5c395 extends \Twig\Template
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
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 21), "associationadmin", [], "any", false, false, false, 21);
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "
    var field_dialog_form_list_link_";
        // line 33
        echo ($context["id"] ?? null);
        echo " = function(event) {
        initialize_popup_";
        // line 34
        echo ($context["id"] ?? null);
        echo "();

        var target = jQuery(this);

        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 45
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 47
        echo ($context["id"] ?? null);
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[";
        // line 51
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 58
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 60
        echo ($context["id"] ?? null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 61
        echo ($context["id"] ?? null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 63
        echo ($context["id"] ?? null);
        echo ");
                }
            });

            return;
        }

        Admin.log('[";
        // line 70
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#";
        // line 72
        echo ($context["id"] ?? null);
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 73
        echo ($context["id"] ?? null);
        echo "').trigger('change');

        field_dialog_";
        // line 75
        echo ($context["id"] ?? null);
        echo ".modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 79
        echo ($context["id"] ?? null);
        echo "  =  function() {
        Admin.log('[";
        // line 80
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 84
        echo ($context["id"] ?? null);
        echo ").on('click', field_dialog_form_list_link_";
        echo ($context["id"] ?? null);
        echo ");
        jQuery('form', field_dialog_";
        // line 85
        echo ($context["id"] ?? null);
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 90
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 99
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 101
        echo ($context["id"] ?? null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 102
        echo ($context["id"] ?? null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 104
        echo ($context["id"] ?? null);
        echo ");
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_";
        // line 111
        echo ($context["id"] ?? null);
        echo " = function(event) {

        initialize_popup_";
        // line 113
        echo ($context["id"] ?? null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 118
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 122
        echo ($context["id"] ?? null);
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 130
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 133
        echo ($context["id"] ?? null);
        echo ".html(html);

                field_dialog_title_";
        // line 135
        echo ($context["id"] ?? null);
        echo ".html(\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "label", [], "any", false, false, false, 135), [], twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "translationdomain", [], "any", false, false, false, 135));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 137
        echo ($context["id"] ?? null);
        echo ");

                field_dialog_form_list_handle_action_";
        // line 139
        echo ($context["id"] ?? null);
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 142
        echo ($context["id"] ?? null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 144
        echo ($context["id"] ?? null);
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 150
        echo ($context["id"] ?? null);
        echo " = function(event) {
        initialize_popup_";
        // line 151
        echo ($context["id"] ?? null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 158
        echo ($context["id"] ?? null);
        echo ".html('');

        Admin.log('[";
        // line 160
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 168
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo ($context["id"] ?? null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 171
        echo ($context["id"] ?? null);
        echo ".html(html);
                field_dialog_title_";
        // line 172
        echo ($context["id"] ?? null);
        echo ".html(\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "label", [], "any", false, false, false, 172), [], twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "translationdomain", [], "any", false, false, false, 172));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 174
        echo ($context["id"] ?? null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery(document).on('click','#field_dialog_";
        // line 178
        echo ($context["id"] ?? null);
        echo " a', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
                jQuery('form', field_dialog_";
        // line 179
        echo ($context["id"] ?? null);
        echo ").on('submit', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 182
        echo ($context["id"] ?? null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 184
        echo ($context["id"] ?? null);
        echo ");
            }
        });
    };

    // handle the edit link
    var field_dialog_form_edit_";
        // line 190
        echo ($context["id"] ?? null);
        echo " = function(event) {
        initialize_popup_";
        // line 191
        echo ($context["id"] ?? null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 198
        echo ($context["id"] ?? null);
        echo ".html('');

        Admin.log('[";
        // line 200
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_edit] edit link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 208
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_edit] ajax success', field_dialog_";
        echo ($context["id"] ?? null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 211
        echo ($context["id"] ?? null);
        echo ".html(html);
                field_dialog_title_";
        // line 212
        echo ($context["id"] ?? null);
        echo ".html(\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "label", [], "any", false, false, false, 212), [], twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "translationdomain", [], "any", false, false, false, 212));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 214
        echo ($context["id"] ?? null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery(document).on('click','#field_dialog_";
        // line 218
        echo ($context["id"] ?? null);
        echo " a', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
                jQuery('form', field_dialog_";
        // line 219
        echo ($context["id"] ?? null);
        echo ").on('submit', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 222
        echo ($context["id"] ?? null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 224
        echo ($context["id"] ?? null);
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 230
        echo ($context["id"] ?? null);
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (
            this.nodeName === 'A'
            && (
                element.attr('href').length === 0
                || element.attr('href')[0] === '#'
                || element.attr('href').substr(0, 11) === 'javascript:'
            )
        ) {
            Admin.log('[";
        // line 243
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] element is an anchor or a script, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 250
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 252
        echo ($context["id"] ?? null);
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 266
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 276
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 284
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 289
        echo ($context["id"] ?? null);
        echo ".modal('hide');

                    ";
        // line 291
        if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 291) == "list")) {
            // line 292
            echo "                        ";
            // line 296
            echo "                        jQuery('#";
            echo ($context["id"] ?? null);
            echo "').val(data.objectId);
                        jQuery('#";
            // line 297
            echo ($context["id"] ?? null);
            echo "').change();

                    ";
        } else {
            // line 300
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 302
            echo ($context["id"] ?? null);
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 303
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_retrieve_form_element", ["elementId" =>             // line 304
($context["id"] ?? null), "subclass" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 305
($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 305), "getActiveSubclassCode", [], "method", false, false, false, 305), "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 306
($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 306), "root", [], "any", false, false, false, 306), "id", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 306), "root", [], "any", false, false, false, 306), "subject", [], "any", false, false, false, 306)], "method", false, false, false, 306), "uniqid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 307
($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 307), "root", [], "any", false, false, false, 307), "uniqid", [], "any", false, false, false, 307), "code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 308
($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 308), "root", [], "any", false, false, false, 308), "code", [], "any", false, false, false, 308)]);
            // line 309
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 314
            echo ($context["id"] ?? null);
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 315
            echo ($context["id"] ?? null);
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 322
            echo ($context["id"] ?? null);
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 327
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 332
        echo ($context["id"] ?? null);
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 334
        echo ($context["id"] ?? null);
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 337
        echo ($context["id"] ?? null);
        echo ").submit(field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
            }
        });

        return false;
    };

    var field_dialog_";
        // line 344
        echo ($context["id"] ?? null);
        echo "         = false;
    var field_dialog_content_";
        // line 345
        echo ($context["id"] ?? null);
        echo " = false;
    var field_dialog_title_";
        // line 346
        echo ($context["id"] ?? null);
        echo "   = false;

    function initialize_popup_";
        // line 348
        echo ($context["id"] ?? null);
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 350
        echo ($context["id"] ?? null);
        echo ") {
            field_dialog_";
        // line 351
        echo ($context["id"] ?? null);
        echo "         = jQuery(\"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");
            field_dialog_content_";
        // line 352
        echo ($context["id"] ?? null);
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");
            field_dialog_title_";
        // line 353
        echo ($context["id"] ?? null);
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 356
        echo ($context["id"] ?? null);
        echo ");

            Admin.log('[";
        // line 358
        echo ($context["id"] ?? null);
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 365
        echo "    // this function initializes the popup
    // this can be only done this way as popup can be cascaded
    function start_field_dialog_form_add_";
        // line 367
        echo ($context["id"] ?? null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 372
        echo ($context["id"] ?? null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 376
        echo ($context["id"] ?? null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    ";
        // line 386
        echo "    // this function initializes the popup
    // this can only be done this way as popup can be cascaded
    function start_field_dialog_form_edit_";
        // line 388
        echo ($context["id"] ?? null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 393
        echo ($context["id"] ?? null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_edit_";
        // line 397
        echo ($context["id"] ?? null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 404
        echo ($context["id"] ?? null);
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 405
        echo ($context["id"] ?? null);
        echo ");
    }

    ";
        // line 408
        if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", [], "any", false, false, false, 408) == "list")) {
            // line 409
            echo "        ";
            // line 412
            echo "        // this function initializes the popup
        // this can be only done this way as popup can be cascaded
        function start_field_dialog_form_list_";
            // line 414
            echo ($context["id"] ?? null);
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 418
            echo ($context["id"] ?? null);
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 422
            echo ($context["id"] ?? null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 429
            echo ($context["id"] ?? null);
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 434
            echo ($context["id"] ?? null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 441
            echo ($context["id"] ?? null);
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 444
            echo ($context["id"] ?? null);
            echo " option').get(0)) {
                jQuery('#";
            // line 445
            echo ($context["id"] ?? null);
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 448
            echo ($context["id"] ?? null);
            echo "').val('');
            jQuery('#";
            // line 449
            echo ($context["id"] ?? null);
            echo "').trigger('change');

            return false;
        }
        ";
            // line 456
            echo "
        // update the label
        jQuery('#";
            // line 458
            echo ($context["id"] ?? null);
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 460
            echo ($context["id"] ?? null);
            echo "|on:change] update the label');

            jQuery('#field_widget_";
            // line 462
            echo ($context["id"] ?? null);
            echo "').html(\"<span><img src=\\\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("loading_information", [], "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 465
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", ["objectId" => "OBJECT_ID", "uniqid" => twig_get_attribute($this->env, $this->source,             // line 467
($context["associationadmin"] ?? null), "uniqid", [], "any", false, false, false, 467), "code" => twig_get_attribute($this->env, $this->source,             // line 468
($context["associationadmin"] ?? null), "code", [], "any", false, false, false, 468), "linkParameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 469
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 469), "options", [], "any", false, false, false, 469), "link_parameters", [], "any", false, false, false, 469)]);
            // line 470
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 473
            echo ($context["id"] ?? null);
            echo "').html(html);
                }
            });

            ";
            // line 477
            if (($context["btn_edit"] ?? null)) {
                // line 478
                echo "                var edit_button_url = '";
                echo twig_get_attribute($this->env, $this->source,                 // line 479
($context["associationadmin"] ?? null), "generateUrl", [0 => "edit", 1 => ["id" => "OBJECT_ID"]], "method", false, false, false, 479);
                // line 480
                echo "'.replace('OBJECT_ID', jQuery(this).val());

                var edit_button_node = jQuery('#field_actions_";
                // line 482
                echo ($context["id"] ?? null);
                echo " a.btn-warning');
                if (jQuery(this).val()) {
                    edit_button_node.removeClass('hidden').attr('href', edit_button_url);
                } else {
                    edit_button_node.addClass('hidden');
                }
            ";
            }
            // line 489
            echo "        });

    ";
        }
        // line 492
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/Association/edit_many_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  886 => 492,  881 => 489,  871 => 482,  867 => 480,  865 => 479,  863 => 478,  861 => 477,  854 => 473,  849 => 470,  847 => 469,  846 => 468,  845 => 467,  844 => 465,  834 => 462,  829 => 460,  824 => 458,  820 => 456,  813 => 449,  809 => 448,  803 => 445,  799 => 444,  793 => 441,  783 => 434,  775 => 429,  765 => 422,  758 => 418,  751 => 414,  747 => 412,  745 => 409,  743 => 408,  737 => 405,  733 => 404,  723 => 397,  716 => 393,  708 => 388,  704 => 386,  694 => 376,  687 => 372,  679 => 367,  675 => 365,  668 => 358,  663 => 356,  655 => 353,  649 => 352,  643 => 351,  639 => 350,  634 => 348,  629 => 346,  625 => 345,  621 => 344,  609 => 337,  603 => 334,  598 => 332,  591 => 327,  583 => 322,  573 => 315,  569 => 314,  562 => 309,  560 => 308,  559 => 307,  558 => 306,  557 => 305,  556 => 304,  555 => 303,  551 => 302,  547 => 300,  541 => 297,  536 => 296,  534 => 292,  532 => 291,  527 => 289,  519 => 284,  508 => 276,  495 => 266,  478 => 252,  473 => 250,  463 => 243,  447 => 230,  438 => 224,  433 => 222,  425 => 219,  419 => 218,  412 => 214,  405 => 212,  401 => 211,  393 => 208,  382 => 200,  377 => 198,  367 => 191,  363 => 190,  354 => 184,  349 => 182,  341 => 179,  335 => 178,  328 => 174,  321 => 172,  317 => 171,  309 => 168,  298 => 160,  293 => 158,  283 => 151,  279 => 150,  270 => 144,  265 => 142,  259 => 139,  254 => 137,  247 => 135,  242 => 133,  236 => 130,  225 => 122,  218 => 118,  210 => 113,  205 => 111,  195 => 104,  190 => 102,  186 => 101,  181 => 99,  169 => 90,  161 => 85,  155 => 84,  148 => 80,  144 => 79,  137 => 75,  132 => 73,  128 => 72,  123 => 70,  113 => 63,  108 => 61,  104 => 60,  99 => 58,  89 => 51,  82 => 47,  77 => 45,  63 => 34,  59 => 33,  56 => 32,  49 => 22,  47 => 21,  44 => 20,  41 => 18,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_many_script.html.twig");
    }
}
