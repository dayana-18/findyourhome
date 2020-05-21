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

/* @SonataAdmin/CRUD/base_edit_form_macro.html.twig */
class __TwigTemplate_8166be877f6fc175602f718f8f7ab86ca487f944f590292dd93a75fb269377a1 extends \Twig\Template
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
    }

    // line 1
    public function macro_render_groups($__admin__ = null, $__form__ = null, $__groups__ = null, $__has_tab__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "admin" => $__admin__,
            "form" => $__form__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <div class=\"row\">

    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter(($context["groups"] ?? null), function ($__code__) use ($context, $macros) { $context["code"] = $__code__; return twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formgroups", [], "any", false, true, false, 4), $context["code"], [], "array", true, true, false, 4); }));
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 5
                echo "        ";
                $context["form_group"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formgroups", [], "any", false, false, false, 5)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["code"]] ?? null) : null);
                // line 6
                echo "
        <div class=\"";
                // line 7
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "class", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "class", [], "any", false, false, false, 7), "col-md-12")) : ("col-md-12")), "html", null, true);
                echo "\">
            <div class=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "box_class", [], "any", false, false, false, 8), "html", null, true);
                echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "label", [], "any", false, false, false, 11), [], ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 11)) ? (twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 11)) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 11)))), "html", null, true);
                echo "
                    </h4>
                </div>
                <div class=\"box-body\">
                    <div class=\"sonata-ba-collapsed-fields\">
                        ";
                // line 16
                if (twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "description", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "                            <p>";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "description", [], "any", false, false, false, 17), [], ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 17)) ? (twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "translation_domain", [], "any", false, false, false, 17)) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", [], "any", false, false, false, 17))));
                    echo "</p>
                        ";
                }
                // line 19
                echo "
                        ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "fields", [], "any", false, false, false, 20), function ($__field_name__) use ($context, $macros) { $context["field_name"] = $__field_name__; return twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), $context["field_name"], [], "array", true, true, false, 20); }));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 21
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["form"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["field_name"]] ?? null) : null), 'row');
                    echo "
                        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 23
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "empty_message", [], "any", false, false, false, 23) != false)) {
                        // line 24
                        echo "                                <em>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "empty_message", [], "any", false, false, false, 24), [], twig_get_attribute($this->env, $this->source, ($context["form_group"] ?? null), "empty_message_translation_domain", [], "any", false, false, false, 24)), "html", null, true);
                        echo "</em>
                            ";
                    }
                    // line 26
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit_form_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 32,  126 => 27,  120 => 26,  114 => 24,  111 => 23,  103 => 21,  98 => 20,  95 => 19,  89 => 17,  87 => 16,  79 => 11,  73 => 8,  69 => 7,  66 => 6,  63 => 5,  59 => 4,  55 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/base_edit_form_macro.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit_form_macro.html.twig");
    }
}
