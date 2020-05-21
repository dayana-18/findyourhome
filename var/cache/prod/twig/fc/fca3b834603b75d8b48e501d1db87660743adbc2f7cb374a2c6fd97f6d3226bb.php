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

/* @SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig */
class __TwigTemplate_7ac7c5b6ce070b1171b108dbd7564023d292bcf02ec9d9bed70ec1da070060f8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sonata_mosaic_background' => [$this, 'block_sonata_mosaic_background'],
            'sonata_mosaic_default_view' => [$this, 'block_sonata_mosaic_default_view'],
            'sonata_mosaic_hover_view' => [$this, 'block_sonata_mosaic_hover_view'],
            'sonata_mosaic_description' => [$this, 'block_sonata_mosaic_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"";
        // line 20
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", [], "any", false, false, false, 20), "elements", [], "any", false, false, false, 20)) - ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 20), "isXmlHttpRequest", [], "any", false, false, false, 20)) ? ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", [], "any", false, false, false, 20), "has", [0 => "_action"], "method", false, false, false, 20) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", [], "any", false, false, false, 20), "has", [0 => "batch"], "method", false, false, false, 20))) : (0))), "html", null, true);
        echo "\">
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", [], "any", false, false, false, 22), "results", [], "any", false, false, false, 22));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 23
            echo "                ";
            $context["meta"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getObjectMetadata", [0 => $context["object"]], "method", false, false, false, 23);
            // line 24
            echo "                ";
            ob_start(function () { return ''; });
            // line 25
            echo "                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
            // line 30
            echo "
                            <div class=\"mosaic-inner-box-default\">
                                ";
            // line 32
            $this->displayBlock('sonata_mosaic_background', $context, $blocks);
            // line 37
            echo "                                ";
            $this->displayBlock('sonata_mosaic_default_view', $context, $blocks);
            // line 40
            echo "                            </div>

                            ";
            // line 46
            echo "                            <div class=\"mosaic-inner-box-hover\">
                                ";
            // line 47
            $this->displayBlock('sonata_mosaic_hover_view', $context, $blocks);
            // line 51
            echo "                            </div>
                        </div>

                        ";
            // line 55
            echo "                        ";
            $context["export_formats"] = (((isset($context["export_formats"]) || array_key_exists("export_formats", $context))) ? (_twig_default_filter(($context["export_formats"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getExportFormats", [], "any", false, false, false, 55))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getExportFormats", [], "any", false, false, false, 55)));
            // line 56
            echo "
                        <div class=\"mosaic-inner-text\">
                            ";
            // line 58
            if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "batch"], "method", false, false, false, 58) && (twig_length_filter($this->env, ($context["batchactions"] ?? null)) > 0)) || ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "export"], "method", false, false, false, 58) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "export"], "method", false, false, false, 58)) && twig_length_filter($this->env, ($context["export_formats"] ?? null))))) {
                // line 59
                echo "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => $context["object"]], "method", false, false, false, 59), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 61
                echo "                                &nbsp;
                            ";
            }
            // line 63
            echo "
                            ";
            // line 64
            $this->displayBlock('sonata_mosaic_description', $context, $blocks);
            // line 67
            echo "                        </div>
                    </div>
                ";
            $context["mosaic_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 70
            echo "                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\"
                     objectId=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => $context["object"]], "method", false, false, false, 71), "html", null, true);
            echo "\">
                    ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", [0 => "edit", 1 => $context["object"]], "method", false, false, false, 72) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "edit"], "method", false, false, false, 72))) {
                // line 73
                echo "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "edit", 1 => ["id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier($context["object"], ($context["admin"] ?? null))]], "method", false, false, false, 74), "html", null, true);
                echo "\">
                            ";
                // line 75
                echo twig_escape_filter($this->env, ($context["mosaic_content"] ?? null), "html", null, true);
                echo "
                        </a>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 77
($context["admin"] ?? null), "hasAccess", [0 => "show", 1 => $context["object"]], "method", false, false, false, 77) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", [0 => "show"], "method", false, false, false, 77))) {
                // line 78
                echo "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", [0 => "show", 1 => ["id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier($context["object"], ($context["admin"] ?? null))]], "method", false, false, false, 79), "html", null, true);
                echo "\">
                            ";
                // line 80
                echo twig_escape_filter($this->env, ($context["mosaic_content"] ?? null), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 83
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["mosaic_content"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 85
            echo "                </div>

                ";
            // line 87
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 87) % 4) == 0)) {
                // line 88
                echo "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 90
            echo "                ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 90) % 2) == 0)) {
                // line 91
                echo "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 93
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </div>
    </td>
</tr>
";
    }

    // line 32
    public function block_sonata_mosaic_background($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "isImageAvailable", [], "any", true, true, false, 33) &&  !twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "isImageAvailable", [], "any", false, false, false, 33))) ? (twig_get_attribute($this->env, $this->source,         // line 34
($context["sonata_admin"] ?? null), "getMosaicBackground", [], "method", false, false, false, 34)) : (twig_get_attribute($this->env, $this->source,         // line 35
($context["meta"] ?? null), "image", [], "any", false, false, false, 35))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", false, false, false, 35), "html", null, true);
        echo "\" />
                                ";
    }

    // line 37
    public function block_sonata_mosaic_default_view($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 38), "html", null, true);
        echo "</span>
                                ";
    }

    // line 47
    public function block_sonata_mosaic_hover_view($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", [0 => ($context["object"] ?? null)], "method", false, false, false, 48), "html", null, true);
        echo "</span>
                                    ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "description", [], "any", false, false, false, 49), "html", null, true);
        echo "
                                ";
    }

    // line 64
    public function block_sonata_mosaic_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                                ";
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", [], "any", false, false, false, 65), 40), "html", null, true);
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 65,  257 => 64,  251 => 49,  246 => 48,  242 => 47,  235 => 38,  231 => 37,  223 => 35,  222 => 34,  220 => 33,  216 => 32,  209 => 94,  195 => 93,  191 => 91,  188 => 90,  184 => 88,  182 => 87,  178 => 85,  172 => 83,  166 => 80,  162 => 79,  159 => 78,  157 => 77,  152 => 75,  148 => 74,  145 => 73,  143 => 72,  139 => 71,  136 => 70,  131 => 67,  129 => 64,  126 => 63,  122 => 61,  116 => 59,  114 => 58,  110 => 56,  107 => 55,  102 => 51,  100 => 47,  97 => 46,  93 => 40,  90 => 37,  88 => 32,  84 => 30,  80 => 25,  77 => 24,  74 => 23,  57 => 22,  52 => 20,  41 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_outer_rows_mosaic.html.twig");
    }
}
