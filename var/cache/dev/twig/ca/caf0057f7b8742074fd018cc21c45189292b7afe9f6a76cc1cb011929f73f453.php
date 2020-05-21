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

/* proprietaire/liste_visites.html.twig */
class __TwigTemplate_8450f0354dd084420c1c90e308bb7509de3f2725b629838f113d5a680efdb63d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proprietaire/liste_visites.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proprietaire/liste_visites.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proprietaire/liste_visites.html.twig", 1);
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

        echo "visites";
        
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
        echo "    <h1>Liste de demandes de visites</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Appartement(s)</th>
                <th>Date de la visite</th>
                <th>Client</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["visites"]) || array_key_exists("visites", $context) ? $context["visites"] : (function () { throw new RuntimeError('Variable "visites" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["visiterdem"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "numappart", [], "any", false, false, false, 20), "rue", [], "any", false, false, false, 20), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "numappart", [], "any", false, false, false, 20), "typeAppart", [], "any", false, false, false, 20), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "numappart", [], "any", false, false, false, 20), "prixLoc", [], "any", false, false, false, 20), "html", null, true);
            echo "
                ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "numappart", [], "any", false, false, false, 21), "codePostal", [], "any", false, false, false, 21), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "numappart", [], "any", false, false, false, 21), "ville", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            ((twig_get_attribute($this->env, $this->source, $context["visiterdem"], "datevisite", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "datevisite", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["visiterdem"], "id", [], "any", false, false, false, 23)) {
                // line 24
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "id", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "prenom", [], "any", false, false, false, 24), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "id", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "id", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "tel", [], "any", false, false, false, 24), "html", null, true);
                echo " 
                    ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "id", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "adresse", [], "any", false, false, false, 25), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "id", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "codePostal", [], "any", false, false, false, 25), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["visiterdem"], "id", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "ville", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
            ";
            } else {
                // line 27
                echo "            <td></td>
            ";
            }
            // line 29
            echo "                <td>
                    <button class=\"btn\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visiterdem_edit", ["numvisite" => twig_get_attribute($this->env, $this->source, $context["visiterdem"], "numvisite", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">Modifier la date de visite</a></button>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visiterdem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proprietaire/liste_visites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 34,  154 => 30,  151 => 29,  147 => 27,  138 => 25,  129 => 24,  127 => 23,  123 => 22,  117 => 21,  109 => 20,  106 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}visites{% endblock %}

{% block body %}
    <h1>Liste de demandes de visites</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Appartement(s)</th>
                <th>Date de la visite</th>
                <th>Client</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for visiterdem in visites %}
            <tr>
                <td>{{ visiterdem.numappart.rue }} {{ visiterdem.numappart.typeAppart }} {{ visiterdem.numappart.prixLoc }}
                {{ visiterdem.numappart.codePostal }} {{ visiterdem.numappart.ville }}</td>
                <td>{{ visiterdem.datevisite ? visiterdem.datevisite|date('Y-m-d') : '' }}</td>
                {% if visiterdem.id %}
                <td>{{ visiterdem.id.id.prenom }} {{ visiterdem.id.id.nom }} {{ visiterdem.id.id.tel }} 
                    {{ visiterdem.id.id.adresse }} {{ visiterdem.id.id.codePostal }} {{ visiterdem.id.id.ville }}</td>
            {% else %}
            <td></td>
            {% endif %}
                <td>
                    <button class=\"btn\"><a href=\"{{ path('visiterdem_edit', {'numvisite': visiterdem.numvisite}) }}\">Modifier la date de visite</a></button>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "proprietaire/liste_visites.html.twig", "/home/dayanavr/www/findyourhome/templates/proprietaire/liste_visites.html.twig");
    }
}
