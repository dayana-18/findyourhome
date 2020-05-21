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

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_e4f003589d6002a8151e8af841e26b0d3128995aa90e7c4bf132e1c2fa7a4c1b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 43
        $_trait_0 = $this->loadTemplate("@SonataAdmin/CRUD/base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 43);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@SonataAdmin/CRUD/base_edit_form.html.twig".'" cannot be used as a trait.', 43, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new RuntimeError('Block "form" is not defined in trait "@SonataAdmin/CRUD/base_edit_form.html.twig".', 43, $this->source);
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'title' => [$this, 'block_title'],
                'navbar_title' => [$this, 'block_navbar_title'],
                'actions' => [$this, 'block_actions'],
                'tab_menu' => [$this, 'block_tab_menu'],
                'form' => [$this, 'block_form'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 16))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", [0 => ($context["object"] ?? null)], "method", false, false, false, 17), 15)], "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_create", [], "SonataAdminBundle"), 15), "html", null, true);
            echo "
    ";
        }
    }

    // line 23
    public function block_navbar_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 25))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 25))))) {
            // line 26
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", ["%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", [0 => ($context["object"] ?? null)], "method", false, false, false, 26), 100)], "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_create", [], "SonataAdminBundle"), 100), "html", null, true);
            echo "
    ";
        }
    }

    // line 32
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 33)->display($context);
    }

    // line 36
    public function block_tab_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "sidemenu", [0 => ($context["action"] ?? null)], "method", false, false, false, 37), ["currentClass" => "active", "template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("tab_menu_template")], "twig");
    }

    // line 45
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  129 => 45,  125 => 37,  121 => 36,  117 => 33,  113 => 32,  105 => 28,  99 => 26,  96 => 25,  94 => 24,  90 => 23,  82 => 19,  76 => 17,  73 => 16,  71 => 15,  67 => 14,  57 => 12,  28 => 43,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_edit.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit.html.twig");
    }
}
