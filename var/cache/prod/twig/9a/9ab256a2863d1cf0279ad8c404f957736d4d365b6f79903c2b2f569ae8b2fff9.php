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

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_31749f88b89ff79b6be26007022e916c935970896d779da606aa33def393c62f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'form' => [$this, 'block_form'],
            'form_acl_roles' => [$this, 'block_form_acl_roles'],
            'form_acl_users' => [$this, 'block_form_acl_users'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $macros["acl"] = $this->macros["acl"] = $this->loadTemplate("@SonataAdmin/CRUD/base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18)->unwrap();
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
    }

    // line 20
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        echo twig_call_macro($macros["acl"], "macro_render_form", [($context["aclRolesForm"] ?? null), ($context["permissions"] ?? null), "td_role", ($context["admin"] ?? null), twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 22), ($context["object"] ?? null)], 22, $context, $this->getSourceContext());
        echo "
    ";
    }

    // line 24
    public function block_form_acl_users($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        ";
        echo twig_call_macro($macros["acl"], "macro_render_form", [($context["aclUsersForm"] ?? null), ($context["permissions"] ?? null), "td_username", ($context["admin"] ?? null), twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 25), ($context["object"] ?? null)], 25, $context, $this->getSourceContext());
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  82 => 24,  75 => 22,  71 => 21,  66 => 24,  63 => 21,  59 => 20,  55 => 15,  51 => 14,  47 => 12,  45 => 18,  38 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_acl.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_acl.html.twig");
    }
}
