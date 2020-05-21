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

/* @SonataAdmin/CRUD/list_boolean.html.twig */
class __TwigTemplate_b9072b9b4eed822ea30b709f705cd018f2ac916ce7e7435c4f91f956d6cd2738 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field_span_attributes' => [$this, 'block_field_span_attributes'],
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("base_list_field", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [], "any", false, false, false, 12)), "@SonataAdmin/CRUD/list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["isEditable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 14), "editable", [], "any", true, true, false, 14) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 14), "editable", [], "any", false, false, false, 14)) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "edit", 1 => ($context["object"] ?? null)], "method", false, false, false, 14));
        // line 15
        $context["xEditableType"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getXEditableType(twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", [], "any", false, false, false, 15));
        // line 17
        if ((($context["isEditable"] ?? null) && ($context["xEditableType"] ?? null))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        ";
        ob_start(function () { return ''; });
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_type_no", [], "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_type_yes", [], "SonataAdminBundle");
        echo "'}]\"
        ";
        $___internal_a7856459e2716e23268c9344f18e51ee0bc84c78f0432f0d2900d24a4d4f4b75_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        echo twig_spaceless($___internal_a7856459e2716e23268c9344f18e51ee0bc84c78f0432f0d2900d24a4d4f4b75_);
        // line 23
        echo "    ";
    }

    // line 26
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        $this->loadTemplate("@SonataAdmin/CRUD/display_boolean.html.twig", "@SonataAdmin/CRUD/list_boolean.html.twig", 27)->display($context);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  79 => 26,  75 => 23,  73 => 19,  66 => 21,  61 => 20,  58 => 19,  54 => 18,  50 => 12,  47 => 17,  45 => 15,  43 => 14,  36 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/list_boolean.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_boolean.html.twig");
    }
}
