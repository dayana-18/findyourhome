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

/* @SonataAdmin/Core/dashboard.html.twig */
class __TwigTemplate_8d444f1722f79a40010566213cbbaadb0b2ad38fbcf4988eb508c29422e577ca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/Core/dashboard.html.twig", 12);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_dashboard", [], "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
    ";
        // line 18
        $context["has_left"] = false;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "left", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 20)) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 20)))) {
                // line 21
                echo "            ";
                $context["has_left"] = true;
                // line 22
                echo "        ";
            }
            // line 23
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    ";
        // line 25
        $context["has_center"] = false;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "center", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 27)) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 27)))) {
                // line 28
                echo "            ";
                $context["has_center"] = true;
                // line 29
                echo "        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        $context["has_right"] = false;
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "right", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 34
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 34)) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 34)))) {
                // line 35
                echo "            ";
                $context["has_right"] = true;
                // line 36
                echo "        ";
            }
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    ";
        // line 39
        $context["has_top"] = false;
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "top", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 41
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 41)) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 41)))) {
                // line 42
                echo "            ";
                $context["has_top"] = true;
                // line 43
                echo "        ";
            }
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
    ";
        // line 46
        $context["has_bottom"] = false;
        // line 47
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "bottom", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            echo "        ";
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 48)) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 48)))) {
                // line 49
                echo "            ";
                $context["has_bottom"] = true;
                // line 50
                echo "        ";
            }
            // line 51
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    ";
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.dashboard.top", ["admin_pool" => twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 53)]]);
        echo "

    ";
        // line 55
        if (($context["has_top"] ?? null)) {
            // line 56
            echo "        <div class=\"row\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "top", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 58
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 58)) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 58)))) {
                    // line 59
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "class", [], "any", false, false, false, 59), "html", null, true);
                    echo "\">
                        ";
                    // line 60
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 60), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 60)]]);
                    echo "
                    </div>
                ";
                }
                // line 63
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "
    <div class=\"row\">
        ";
        // line 68
        $context["width_left"] = 4;
        // line 69
        echo "        ";
        $context["width_right"] = 4;
        // line 70
        echo "        ";
        $context["width_center"] = 4;
        // line 71
        echo "
        ";
        // line 73
        echo "        ";
        if ( !($context["has_center"] ?? null)) {
            // line 74
            echo "            ";
            $context["width_left"] = 6;
            // line 75
            echo "            ";
            $context["width_right"] = 6;
            // line 76
            echo "        ";
        }
        // line 77
        echo "
        ";
        // line 79
        echo "        ";
        if (( !($context["has_left"] ?? null) &&  !($context["has_right"] ?? null))) {
            // line 80
            echo "            ";
            $context["width_center"] = 12;
            // line 81
            echo "        ";
        }
        // line 82
        echo "
        ";
        // line 84
        echo "        ";
        if ((($context["has_left"] ?? null) || ($context["has_right"] ?? null))) {
            // line 85
            echo "        <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_left"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "left", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 87
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 87)) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 87)))) {
                    // line 88
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 88), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 88)]]);
                    echo "
                ";
                }
                // line 90
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </div>
        ";
        }
        // line 93
        echo "
        ";
        // line 94
        if (($context["has_center"] ?? null)) {
            // line 95
            echo "            <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_center"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "center", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 97
                echo "                    ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 97)) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 97)))) {
                    // line 98
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 98), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 98)]]);
                    echo "
                    ";
                }
                // line 100
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 105
        echo "        ";
        if ((($context["has_left"] ?? null) || ($context["has_right"] ?? null))) {
            // line 106
            echo "         <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_right"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "right", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 108
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 108)) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 108)))) {
                    // line 109
                    echo "                    ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 109), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 109)]]);
                    echo "
                ";
                }
                // line 111
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        </div>
        ";
        }
        // line 114
        echo "    </div>

    ";
        // line 116
        if (($context["has_bottom"] ?? null)) {
            // line 117
            echo "        <div class=\"row\">
            ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "bottom", [], "any", false, false, false, 118));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 119
                echo "                ";
                if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 119)) == 0) || $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->isGrantedAffirmative(twig_get_attribute($this->env, $this->source, $context["block"], "roles", [], "any", false, false, false, 119)))) {
                    // line 120
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "class", [], "any", false, false, false, 120), "html", null, true);
                    echo "\">
                        ";
                    // line 121
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), [["type" => twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 121), "settings" => twig_get_attribute($this->env, $this->source, $context["block"], "settings", [], "any", false, false, false, 121)]]);
                    echo "
                    </div>
                ";
                }
                // line 124
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        </div>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.dashboard.bottom", ["admin_pool" => twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", [], "any", false, false, false, 128)]]);
        echo "

";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 128,  407 => 127,  403 => 125,  397 => 124,  391 => 121,  386 => 120,  383 => 119,  379 => 118,  376 => 117,  374 => 116,  370 => 114,  366 => 112,  360 => 111,  354 => 109,  351 => 108,  347 => 107,  342 => 106,  339 => 105,  336 => 103,  332 => 101,  326 => 100,  320 => 98,  317 => 97,  313 => 96,  308 => 95,  306 => 94,  303 => 93,  299 => 91,  293 => 90,  287 => 88,  284 => 87,  280 => 86,  275 => 85,  272 => 84,  269 => 82,  266 => 81,  263 => 80,  260 => 79,  257 => 77,  254 => 76,  251 => 75,  248 => 74,  245 => 73,  242 => 71,  239 => 70,  236 => 69,  234 => 68,  230 => 66,  226 => 64,  220 => 63,  214 => 60,  209 => 59,  206 => 58,  202 => 57,  199 => 56,  197 => 55,  192 => 53,  189 => 52,  183 => 51,  180 => 50,  177 => 49,  174 => 48,  169 => 47,  167 => 46,  164 => 45,  158 => 44,  155 => 43,  152 => 42,  149 => 41,  144 => 40,  142 => 39,  139 => 38,  133 => 37,  130 => 36,  127 => 35,  124 => 34,  119 => 33,  117 => 32,  114 => 31,  108 => 30,  105 => 29,  102 => 28,  99 => 27,  94 => 26,  92 => 25,  89 => 24,  83 => 23,  80 => 22,  77 => 21,  74 => 20,  69 => 19,  67 => 18,  64 => 17,  60 => 16,  54 => 15,  47 => 14,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/Core/dashboard.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/Core/dashboard.html.twig");
    }
}
