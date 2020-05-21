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

/* @SonataBlock/Profiler/block.html.twig */
class __TwigTemplate_e41b402a504028593f823a1a7499f09705fff94aa09859f3e26820c1f57f94f3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'table' => [$this, 'block_table'],
            'table_v2' => [$this, 'block_table_v2'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@SonataBlock/Profiler/block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"sf-toolbar-block\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => ($context["token"] ?? null), "panel" => ($context["name"] ?? null)]), "html", null, true);
        echo "\">
            <div class=\"sf-toolbar-icon\">
                ";
        // line 7
        echo twig_include($this->env, $context, "@SonataBlock/Profiler/icon.svg");
        echo "
                <span class=\"sf-toolbar-value\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getTotalBlock", [], "method", false, false, false, 8), "html", null, true);
        echo "</span>
            </div>
        </a>

        <div class=\"sf-toolbar-info\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Real Blocks</b>
                <span>";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "realBlocks", [], "any", false, false, false, 15)), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Containers</b>
                <span>";
        // line 19
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "containers", [], "any", false, false, false, 19)), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Events</b>
                <span>";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 23)), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
";
    }

    // line 29
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 32
        echo twig_include($this->env, $context, "@SonataBlock/Profiler/icon.svg");
        echo "
        </span>
        <strong>Blocks";
        // line 34
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 34)) > 0)) {
            echo "<strong>*</strong>";
        }
        echo "</strong>
        <span class=\"count\">
            <span>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "getTotalBlock", [], "method", false, false, false, 36), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 41
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    <h2>Events Blocks</h2>
    <table>
        <tr>
            <th>code name</th>
            <th>listener tag</th>
            <th>Block types</th>
            <th>Listeners</th>
        </tr>

        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 52
            echo "            <tr>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["event"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["template_code"] ?? null) : null), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["event"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["event_name"] ?? null) : null), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["event"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["blocks"] ?? null) : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 57
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], 1, [], "any", false, false, false, 57), "html", null, true);
                echo " (id:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], 0, [], "any", false, false, false, 57), "html", null, true);
                echo ")
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 59
                echo "                        no block returned
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                </td>
                <td>
                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["event"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["listeners"] ?? null) : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 64
                echo "                        ";
                echo twig_escape_filter($this->env, $context["listener"], "html", null, true);
                echo "
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 66
                echo "                        no listener registered
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </table>

    <h2>Real Blocks</h2>
    ";
        // line 74
        $context["blocks"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "realBlocks", [], "any", false, false, false, 74);
        // line 75
        echo "    <div class=\"tab-content\">
        ";
        // line 76
        $this->displayBlock("table_v2", $context, $blocks);
        echo "
    </div>

    <h2>Containers Blocks</h2>
    ";
        // line 80
        $context["blocks"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "containers", [], "any", false, false, false, 80);
        // line 81
        echo "    <div class=\"tab-content\">
        ";
        // line 82
        $this->displayBlock("table_v2", $context, $blocks);
        echo "
    </div>
";
    }

    // line 86
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mem. (diff)</th>
            <th>Mem. (peak)</th>
            <th>Duration</th>
        </tr>
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 97
            echo "
            ";
            // line 98
            $context["rowspan"] = 1;
            // line 99
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 99), "handler", [], "any", false, false, false, 99)) {
                // line 100
                echo "                ";
                $context["rowspan"] = (($context["rowspan"] ?? null) + 1);
                // line 101
                echo "            ";
            }
            // line 102
            echo "
            ";
            // line 103
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "assets", [], "any", false, false, false, 103), "js", [], "any", false, false, false, 103)) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "assets", [], "any", false, false, false, 103), "css", [], "any", false, false, false, 103)) > 0))) {
                // line 104
                echo "                ";
                $context["rowspan"] = (($context["rowspan"] ?? null) + 1);
                // line 105
                echo "            ";
            }
            // line 106
            echo "            <tr>
                <th style=\"vertical-align: top\" rowspan=\"";
            // line 107
            echo twig_escape_filter($this->env, ($context["rowspan"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "</th>
                <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "name", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["block"], "memory_end", [], "any", false, false, false, 110) - twig_get_attribute($this->env, $this->source, $context["block"], "memory_start", [], "any", false, false, false, 110)) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["block"], "memory_peak", [], "any", false, false, false, 111) / 1000), 0), "html", null, true);
            echo " Kb</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "duration", [], "any", false, false, false, 112), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 115
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 115), "handler", [], "any", false, false, false, 115)) {
                // line 116
                echo "                <tr style=\"vertical-align: top\">
                    <td colspan=\"3\">
                        Cache Keys: <pre>";
                // line 118
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 118), "keys", [], "any", false, false, false, 118)), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 119
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 119), "contextual_keys", [], "any", false, false, false, 119)), "html", null, true);
                echo "</pre>
                    </td>
                    <td colspan=\"2\">
                        TTL: ";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 122), "ttl", [], "any", false, false, false, 122), "html", null, true);
                echo "s. <br />
                        Lifetime: ";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 123), "lifetime", [], "any", false, false, false, 123), "html", null, true);
                echo "s. <br />
                        Backend: ";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 124), "handler", [], "any", false, false, false, 124), "html", null, true);
                echo " <br />
                        Loading from cache: ";
                // line 125
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 125), "from_cache", [], "any", false, false, false, 125)) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                echo " <br />
                    </td>
                </tr>
            ";
            }
            // line 129
            echo "
            ";
            // line 130
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "assets", [], "any", false, false, false, 130), "js", [], "any", false, false, false, 130)) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "assets", [], "any", false, false, false, 130), "css", [], "any", false, false, false, 130)) > 0))) {
                // line 131
                echo "                <tr>
                    <td colspan=\"5\">
                        Javascripts: <pre>";
                // line 133
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "assets", [], "any", false, false, false, 133), "js", [], "any", false, false, false, 133)), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 134
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "assets", [], "any", false, false, false, 134), "css", [], "any", false, false, false, 134)), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 138
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "    </table>
";
    }

    // line 143
    public function block_table_v2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["block"]) {
            // line 145
            echo "        <table>
            <thead>
            <tr>
                <th colspan=\"2\">Block ";
            // line 148
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Name</th>
                <td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "name", [], "any", false, false, false, 154), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 158), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Mem. diff / Mem. peak / Duration</th>
                <td>";
            // line 162
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["block"], "memory_end", [], "any", false, false, false, 162) - twig_get_attribute($this->env, $this->source, $context["block"], "memory_start", [], "any", false, false, false, 162)) / 1000), 0), "html", null, true);
            echo " Kb / ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["block"], "memory_peak", [], "any", false, false, false, 162) / 1000), 0), "html", null, true);
            echo " Kb / ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "duration", [], "any", false, false, false, 162), 2), "html", null, true);
            echo " ms</td>
            </tr>

            ";
            // line 165
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 165), "handler", [], "any", false, false, false, 165)) {
                // line 166
                echo "                <tr>
                    <th>Cache backend</th>
                    <td>
                        ";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 169), "handler", [], "any", false, false, false, 169), "html", null, true);
                echo " - Loading from cache: ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 169), "from_cache", [], "any", false, false, false, 169)) {
                    echo "YES";
                } else {
                    echo "NO";
                }
                // line 170
                echo "                    </td>
                </tr>
                <tr>
                    <th>Cache TTL / Lifetime</th>
                    <td>
                        ";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 175), "ttl", [], "any", false, false, false, 175), "html", null, true);
                echo "s. / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 175), "lifetime", [], "any", false, false, false, 175), "html", null, true);
                echo "s
                    </td>
                </tr>
                <tr>
                    <th>
                        Cache Informations
                    </th>
                    <td>
                        Cache Keys: <pre>";
                // line 183
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 183), "keys", [], "any", false, false, false, 183)), "html", null, true);
                echo "</pre> <br />
                        Contextual Keys: <pre>";
                // line 184
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "cache", [], "any", false, false, false, 184), "contextual_keys", [], "any", false, false, false, 184)), "html", null, true);
                echo "</pre> <br />
                    </td>
                </tr>
            ";
            }
            // line 188
            echo "
            ";
            // line 189
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "assets", [], "any", false, false, false, 189), "js", [], "any", false, false, false, 189)) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "assets", [], "any", false, false, false, 189), "css", [], "any", false, false, false, 189)) > 0))) {
                // line 190
                echo "                <tr>
                    <th>Assets</th>
                    <td>
                        Javascripts: <pre>";
                // line 193
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "assets", [], "any", false, false, false, 193), "js", [], "any", false, false, false, 193)), "html", null, true);
                echo "</pre><br />
                        Stylesheets: <pre>";
                // line 194
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "assets", [], "any", false, false, false, 194), "css", [], "any", false, false, false, 194)), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
            ";
            }
            // line 198
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@SonataBlock/Profiler/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 198,  494 => 194,  490 => 193,  485 => 190,  483 => 189,  480 => 188,  473 => 184,  469 => 183,  456 => 175,  449 => 170,  441 => 169,  436 => 166,  434 => 165,  424 => 162,  417 => 158,  410 => 154,  401 => 148,  396 => 145,  391 => 144,  387 => 143,  382 => 140,  375 => 138,  368 => 134,  364 => 133,  360 => 131,  358 => 130,  355 => 129,  344 => 125,  340 => 124,  336 => 123,  332 => 122,  326 => 119,  322 => 118,  318 => 116,  316 => 115,  310 => 112,  306 => 111,  302 => 110,  298 => 109,  294 => 108,  288 => 107,  285 => 106,  282 => 105,  279 => 104,  277 => 103,  274 => 102,  271 => 101,  268 => 100,  265 => 99,  263 => 98,  260 => 97,  256 => 96,  245 => 87,  241 => 86,  234 => 82,  231 => 81,  229 => 80,  222 => 76,  219 => 75,  217 => 74,  212 => 71,  204 => 68,  197 => 66,  189 => 64,  184 => 63,  180 => 61,  173 => 59,  163 => 57,  158 => 56,  153 => 54,  149 => 53,  146 => 52,  142 => 51,  131 => 42,  127 => 41,  119 => 36,  112 => 34,  107 => 32,  103 => 30,  99 => 29,  90 => 23,  83 => 19,  76 => 15,  66 => 8,  62 => 7,  57 => 5,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataBlock/Profiler/block.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/block-bundle/src/Resources/views/Profiler/block.html.twig");
    }
}
