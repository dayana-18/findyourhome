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

/* @SonataAdmin/CRUD/list_choice.html.twig */
class __TwigTemplate_a47cf5d99f369a6ee702dd85549889741b3f69fd2c7acc79cffe4119e069c574 extends \Twig\Template
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
        return $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("base_list_field", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", [], "any", false, false, false, 12)), "@SonataAdmin/CRUD/list_choice.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["is_editable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["field_description"] ?? null), "options", [], "any", false, true, false, 15), "editable", [], "any", true, true, false, 15) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["field_description"] ?? null), "options", [], "any", false, false, false, 16), "editable", [], "any", false, false, false, 16)) && twig_get_attribute($this->env, $this->source,         // line 17
($context["admin"] ?? null), "hasAccess", [0 => "edit", 1 => ($context["object"] ?? null)], "method", false, false, false, 17));
        // line 19
        $context["x_editable_type"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getXEditableType(twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", [], "any", false, false, false, 19));
        // line 21
        if ((($context["is_editable"] ?? null) && ($context["x_editable_type"] ?? null))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_field_span_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        ";
        ob_start(function () { return ''; });
        // line 24
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"";
        // line 25
        echo twig_escape_filter($this->env, json_encode($this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getXEditableChoices(($context["field_description"] ?? null))), "html", null, true);
        echo "\"
        ";
        $___internal_b917e5ec3e086d88ff6ddd5169d0b34027c247d71f27f23d35ebd5bb650cf641_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        echo twig_spaceless($___internal_b917e5ec3e086d88ff6ddd5169d0b34027c247d71f27f23d35ebd5bb650cf641_);
        // line 27
        echo "    ";
    }

    // line 30
    public function block_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        ob_start(function () { return ''; });
        // line 32
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 32), "choices", [], "any", true, true, false, 32)) {
            // line 33
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 33), "multiple", [], "any", true, true, false, 33) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 33), "multiple", [], "any", false, false, false, 33) == true)) && twig_test_iterable(($context["value"] ?? null)))) {
                // line 34
                echo "
            ";
                // line 35
                $context["result"] = "";
                // line 36
                echo "            ";
                $context["delimiter"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 36), "delimiter", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 36), "delimiter", [], "any", false, false, false, 36), ", ")) : (", "));
                // line 37
                echo "
            ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 39
                    echo "                ";
                    if ( !twig_test_empty(($context["result"] ?? null))) {
                        // line 40
                        echo "                    ";
                        $context["result"] = (($context["result"] ?? null) . ($context["delimiter"] ?? null));
                        // line 41
                        echo "                ";
                    }
                    // line 42
                    echo "
                ";
                    // line 43
                    if (twig_in_filter($context["val"], twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 43), "choices", [], "any", false, false, false, 43)))) {
                        // line 44
                        echo "                    ";
                        $context["choice"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 44), "choices", [], "any", false, false, false, 44)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["val"]] ?? null) : null);
                        // line 45
                        echo "                ";
                    } else {
                        // line 46
                        echo "                    ";
                        $context["choice"] = $context["val"];
                        // line 47
                        echo "                ";
                    }
                    // line 48
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 48), "catalogue", [], "any", true, true, false, 48)) {
                        // line 49
                        echo "                    ";
                        $context["result"] = (($context["result"] ?? null) . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["choice"] ?? null), [], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 49), "catalogue", [], "any", false, false, false, 49)));
                        // line 50
                        echo "                ";
                    } else {
                        // line 51
                        echo "                    ";
                        $context["result"] = (($context["result"] ?? null) . ($context["choice"] ?? null));
                        // line 52
                        echo "                ";
                    }
                    // line 53
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "
            ";
                // line 55
                $context["value"] = ($context["result"] ?? null);
                // line 56
                echo "
        ";
            } elseif (twig_in_filter(            // line 57
($context["value"] ?? null), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 57), "choices", [], "any", false, false, false, 57)))) {
                // line 58
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, true, false, 58), "catalogue", [], "any", true, true, false, 58)) {
                    // line 59
                    echo "                ";
                    $context["value"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 59), "choices", [], "any", false, false, false, 59)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["value"] ?? null)] ?? null) : null);
                    // line 60
                    echo "            ";
                } else {
                    // line 61
                    echo "                ";
                    $context["value"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 61), "choices", [], "any", false, false, false, 61)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["value"] ?? null)] ?? null) : null), [], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", [], "any", false, false, false, 61), "catalogue", [], "any", false, false, false, 61));
                    // line 62
                    echo "            ";
                }
                // line 63
                echo "        ";
            }
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    ";
        // line 66
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "
";
        $___internal_82681d4cac7ae21ea8f4cd1a1bf17bd35b7b3bed43158f8c6516e7d1f2d7d414_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo twig_spaceless($___internal_82681d4cac7ae21ea8f4cd1a1bf17bd35b7b3bed43158f8c6516e7d1f2d7d414_);
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 31,  188 => 66,  185 => 65,  182 => 64,  179 => 63,  176 => 62,  173 => 61,  170 => 60,  167 => 59,  164 => 58,  162 => 57,  159 => 56,  157 => 55,  154 => 54,  148 => 53,  145 => 52,  142 => 51,  139 => 50,  136 => 49,  133 => 48,  130 => 47,  127 => 46,  124 => 45,  121 => 44,  119 => 43,  116 => 42,  113 => 41,  110 => 40,  107 => 39,  103 => 38,  100 => 37,  97 => 36,  95 => 35,  92 => 34,  89 => 33,  86 => 32,  84 => 31,  80 => 30,  76 => 27,  74 => 23,  69 => 25,  64 => 24,  61 => 23,  57 => 22,  53 => 12,  50 => 21,  48 => 19,  46 => 17,  45 => 16,  44 => 15,  43 => 14,  36 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/list_choice.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_choice.html.twig");
    }
}
