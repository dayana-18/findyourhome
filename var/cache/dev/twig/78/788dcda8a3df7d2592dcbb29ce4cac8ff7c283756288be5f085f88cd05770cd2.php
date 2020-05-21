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

/* cotisation/index.html.twig */
class __TwigTemplate_6060b600757b7735733db10470ec08cb9fc25ff395512f39eb94e6d9c42c74e5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cotisation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cotisation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cotisation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "cotisations";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div>
    <table>
        <tbody>
        <th colspan='2'>Propriétaire</th>
        <th colspan='3'>Appartement(s)</th>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appartements"]) || array_key_exists("appartements", $context) ? $context["appartements"] : (function () { throw new RuntimeError('Variable "appartements" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["apparts"]) {
            // line 16
            echo "            ";
            $context["totalcotisations"] = 0;
            // line 17
            echo "        <tr>
            <td colspan='2'></td><td>N°Appart</td><td>Loyer</td><td>Cotisation</td>
        </tr>
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["apparts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["appartement"]) {
                // line 21
                echo "            <tr>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appartement"], "proprietaire", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appartement"], "proprietaire", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "prenom", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appartement"], "proprietaire", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "adresse", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appartement"], "proprietaire", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), "codePostal", [], "any", false, false, false, 28), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appartement"], "proprietaire", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), "ville", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                <td> </td>
                <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "numappart", [], "any", false, false, false, 30), "html", null, true);
                echo " </td> 
                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "prixLoc", [], "any", false, false, false, 31), "html", null, true);
                echo " </td>
                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "cotisation", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
            </tr>
                ";
                // line 34
                $context["totalcotisations"] = ((isset($context["totalcotisations"]) || array_key_exists("totalcotisations", $context) ? $context["totalcotisations"] : (function () { throw new RuntimeError('Variable "totalcotisations" does not exist.', 34, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["appartement"], "cotisation", [], "any", false, false, false, 34));
                // line 35
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appartement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            <tr>
                <td> </td><td> </td>
                <td> </td>
                <td> Total cotisation : ";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["totalcotisations"]) || array_key_exists("totalcotisations", $context) ? $context["totalcotisations"] : (function () { throw new RuntimeError('Variable "totalcotisations" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "€</td>
            </tr>
            <tr>
                <td>___________________ </td>
                <td>___________________ </td>
                <td>___________________ </td>
                <td>___________________ </td>
                <td>___________________ </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apparts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>
        
        
        
        
        
        
    </p>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cotisation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 49,  165 => 39,  160 => 36,  154 => 35,  152 => 34,  147 => 32,  143 => 31,  139 => 30,  132 => 28,  126 => 25,  118 => 22,  115 => 21,  111 => 20,  106 => 17,  103 => 16,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}cotisations{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<div>
    <table>
        <tbody>
        <th colspan='2'>Propriétaire</th>
        <th colspan='3'>Appartement(s)</th>
        {% for apparts in appartements %}
            {% set totalcotisations = 0 %}
        <tr>
            <td colspan='2'></td><td>N°Appart</td><td>Loyer</td><td>Cotisation</td>
        </tr>
            {% for appartement in apparts %}
            <tr>
                <td>{{ appartement.proprietaire.id.nom }} {{ appartement.proprietaire.id.prenom }}</td>
            </tr>
            <tr>
                <td>{{ appartement.proprietaire.id.adresse }}</td>
            </tr>
            <tr>
                <td>{{ appartement.proprietaire.id.codePostal }} {{ appartement.proprietaire.id.ville}}</td>
                <td> </td>
                <td>{{ appartement.numappart}} </td> 
                <td>{{ appartement.prixLoc }} </td>
                <td>{{ appartement.cotisation }}</td>
            </tr>
                {% set totalcotisations = totalcotisations + appartement.cotisation %}
            {% endfor %}
            <tr>
                <td> </td><td> </td>
                <td> </td>
                <td> Total cotisation : {{ totalcotisations }}€</td>
            </tr>
            <tr>
                <td>___________________ </td>
                <td>___________________ </td>
                <td>___________________ </td>
                <td>___________________ </td>
                <td>___________________ </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
        
        
        
        
        
        
    </p>

</div>
{% endblock %}
", "cotisation/index.html.twig", "/home/dayanavr/www/findyourhome/templates/cotisation/index.html.twig");
    }
}
