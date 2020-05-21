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

/* @SonataAdmin/CRUD/batch_confirmation.html.twig */
class __TwigTemplate_c99c41309c800a2403616f11d48789b75c17f7fda85754e7553aa2d3b7d60320 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actions' => [$this, 'block_actions'],
            'tab_menu' => [$this, 'block_tab_menu'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/batch_confirmation.html.twig", 15)->display($context);
    }

    // line 18
    public function block_tab_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "sidemenu", [0 => ($context["action"] ?? null)], "method", false, false, false, 19), ["currentClass" => "active", "template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("tab_menu_template")], "twig");
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                ";
        // line 29
        if ( !(($context["batch_translation_domain"] ?? null) === false)) {
            // line 30
            echo "                    ";
            $context["action_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["action_label"] ?? null), [], ($context["batch_translation_domain"] ?? null));
            // line 31
            echo "                ";
        }
        // line 32
        echo "                <h4 class=\"box-title\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_batch_confirmation", ["%action%" => ($context["action_label"] ?? null)], "SonataAdminBundle");
        echo "</h4>
            </div>
            <div class=\"box-body\">
                ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "all_elements", [], "any", false, false, false, 35)) {
            // line 36
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_batch_all_confirmation", [], "SonataAdminBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 38
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_batch_confirmation", ["%count%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "idx", [], "any", false, false, false, 38))], "SonataAdminBundle");
            // line 39
            echo "                ";
        }
        // line 40
        echo "            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "batch", 1 => ["filter" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "filterParameters", [], "any", false, false, false, 42)]], "method", false, false, false, 42), "html", null, true);
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, json_encode(($context["data"] ?? null)), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">

                    <div style=\"display: none\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_execute_batch_action", [], "SonataAdminBundle"), "html", null, true);
        echo "</button>

                    ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "list"], "method", false, false, false, 53) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "list"], "method", false, false, false, 53))) {
            // line 54
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "list"], "method", false, false, false, 56), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_action_list", [], "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 60
        echo "                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 60,  143 => 57,  139 => 56,  133 => 54,  131 => 53,  126 => 51,  120 => 48,  114 => 45,  110 => 44,  105 => 42,  101 => 40,  98 => 39,  95 => 38,  89 => 36,  87 => 35,  80 => 32,  77 => 31,  74 => 30,  72 => 29,  67 => 26,  63 => 25,  59 => 19,  55 => 18,  51 => 15,  47 => 14,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/batch_confirmation.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/batch_confirmation.html.twig");
    }
}
