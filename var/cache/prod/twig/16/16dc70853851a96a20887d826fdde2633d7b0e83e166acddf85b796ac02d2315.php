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

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_one_association_script.html.twig */
class __TwigTemplate_46727a491f5dd9edaaca52b02c333e996d1a1fbacf9dc592da47938905222624 extends \Twig\Template
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
        // line 22
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 28
        echo ($context["id"] ?? null);
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_append_form_element", (["code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 38), "root", [], "any", false, false, false, 38), "code", [], "any", false, false, false, 38), "elementId" =>         // line 39
($context["id"] ?? null), "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 40), "root", [], "any", false, false, false, 40), "id", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 40), "root", [], "any", false, false, false, 40), "subject", [], "any", false, false, false, 40)], "method", false, false, false, 40), "uniqid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["sonata_admin"] ?? null), "admin", [], "any", false, false, false, 41), "root", [], "any", false, false, false, 41), "uniqid", [], "any", false, false, false, 41), "subclass" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["app"] ?? null), "request", [], "any", false, false, false, 42), "query", [], "any", false, false, false, 42), "get", [0 => "subclass"], "method", false, false, false, 42)] + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["sonata_admin"] ?? null), "field_description", [], "any", false, false, false, 43), "getOption", [0 => "link_parameters", 1 => []], "method", false, false, false, 43)));
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }
                var \$newForm = jQuery(html);
                var \$oldForm = jQuery('#field_container_";
        // line 52
        echo ($context["id"] ?? null);
        echo "');

                // Maintain state of file inputs
                \$oldForm.find('input[type=\"file\"]').each(function(){
                    var id = '#'+\$(this).attr('id');
                    \$newForm.find(id).replaceWith(\$(this));
                });

                \$oldForm.replaceWith(\$newForm); // replace the html

                Admin.shared_setup(jQuery('#field_container_";
        // line 62
        echo ($context["id"] ?? null);
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 68
        echo ($context["id"] ?? null);
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 69
        echo ($context["id"] ?? null);
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 76
        echo ($context["id"] ?? null);
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 80
        echo ($context["id"] ?? null);
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 85
        echo ($context["id"] ?? null);
        echo " = jQuery(\"#field_widget_";
        echo ($context["id"] ?? null);
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 89
        echo ($context["id"] ?? null);
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 89,  136 => 85,  128 => 80,  121 => 76,  111 => 69,  107 => 68,  98 => 62,  85 => 52,  73 => 43,  72 => 42,  71 => 41,  70 => 40,  69 => 39,  68 => 38,  67 => 37,  55 => 28,  47 => 22,  44 => 20,  41 => 18,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_association_script.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_association_script.html.twig");
    }
}
