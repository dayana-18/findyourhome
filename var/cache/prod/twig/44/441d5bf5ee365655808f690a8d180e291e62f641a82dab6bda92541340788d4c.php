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

/* @SonataAdmin/CRUD/list_array.html.twig */
class __TwigTemplate_4db619cf9f5c3effc2a56402f8ea97d1ed8a6f2aeeb7ef7110d14364ded5394e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 13
        return $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("base_list_field", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [], "any", false, false, false, 13)), "@SonataAdmin/CRUD/list_array.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $macros["list"] = $this->macros["list"] = $this->loadTemplate("@SonataAdmin/CRUD/base_array_macro.html.twig", "@SonataAdmin/CRUD/list_array.html.twig", 11)->unwrap();
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        echo twig_call_macro($macros["list"], "macro_render_array", [($context["value"] ?? null), ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 16), "inline", [], "any", true, true, false, 16) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 16), "inline", [], "any", false, false, false, 16))], 16, $context, $this->getSourceContext());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  48 => 15,  44 => 13,  42 => 11,  35 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/list_array.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_array.html.twig");
    }
}
