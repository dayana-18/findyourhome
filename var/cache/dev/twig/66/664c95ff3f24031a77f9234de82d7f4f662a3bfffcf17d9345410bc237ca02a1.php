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

/* accueil/recherche.html.twig */
class __TwigTemplate_7ea648402caad1f76273c0cf959289abf07e81c28c3698bd07740b78f9fe74c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/recherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/recherche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/recherche.html.twig", 1);
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

        echo "findyourhome";
        
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

<div class=\"example-wrapper\">
    <h1><center>Find your home ! </h1><br>
    <center>
    <a href=\"http://findyourhome.com/login\">~~ Se connecter</a>  <a href=\"http://findyourhome.com/register\"> ~~ Créer un compte</a>
    </center><br>
</div>
<div>
    <form action=\"/recherche\" role=\"search\">
        <div>
            <center><input name=\"t\" id=\"rbox\" type=\"text\" class=\"\" placeholder=\"Type d'appartement\"></center>
            <br>
        </div> 
        <div>
            <center><input name=\"p\" id=\"rbox\" type=\"number\" placeholder=\"Bugdet maximale\"></center><br>
        </div>
        <div>
            <center><input name=\"v\" id=\"rbox\" type=\"text\" placeholder=\"Ville souhaitée\"></center><br>
        </div>    
        <center><input type=\"submit\" value=\"Valider\"></center><br>
    </form>
</div>
<div>
    <center><p>Résultats de recherche pour :  ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prixmax"]) || array_key_exists("prixmax", $context) ? $context["prixmax"] : (function () { throw new RuntimeError('Variable "prixmax" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "</p></Center>
        
    <ul>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resappartements"]) || array_key_exists("resappartements", $context) ? $context["resappartements"] : (function () { throw new RuntimeError('Variable "resappartements" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appartement"]) {
            // line 37
            echo "        <li>
            ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "typeappart", [], "any", false, false, false, 38), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "prixLoc", [], "any", false, false, false, 38), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "codePostal", [], "any", false, false, false, 38), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "ville", [], "any", false, false, false, 38), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appartement"], "arrondisseDem", [], "any", false, false, false, 38), "arrondisseDem", [], "any", false, false, false, 38), "html", null, true);
            echo " <br>
            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appartement_show", ["numappart" => twig_get_attribute($this->env, $this->source, $context["appartement"], "numappart", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">Voir description</a><br>
        </li>
        <br>
        <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/" . twig_get_attribute($this->env, $this->source, $context["appartement"], "photo", [], "any", false, false, false, 42))), "html", null, true);
            echo "\"/>
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appartement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 45,  152 => 42,  146 => 39,  134 => 38,  131 => 37,  127 => 36,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}findyourhome{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1><center>Find your home ! </h1><br>
    <center>
    <a href=\"http://findyourhome.com/login\">~~ Se connecter</a>  <a href=\"http://findyourhome.com/register\"> ~~ Créer un compte</a>
    </center><br>
</div>
<div>
    <form action=\"/recherche\" role=\"search\">
        <div>
            <center><input name=\"t\" id=\"rbox\" type=\"text\" class=\"\" placeholder=\"Type d'appartement\"></center>
            <br>
        </div> 
        <div>
            <center><input name=\"p\" id=\"rbox\" type=\"number\" placeholder=\"Bugdet maximale\"></center><br>
        </div>
        <div>
            <center><input name=\"v\" id=\"rbox\" type=\"text\" placeholder=\"Ville souhaitée\"></center><br>
        </div>    
        <center><input type=\"submit\" value=\"Valider\"></center><br>
    </form>
</div>
<div>
    <center><p>Résultats de recherche pour :  {{ type }} {{ prixmax }} {{ ville }}</p></Center>
        
    <ul>
    {% for appartement in resappartements  %}
        <li>
            {{ appartement.typeappart }} {{ appartement.prixLoc }} {{ appartement.codePostal }} {{ appartement.ville}} {{ appartement.arrondisseDem.arrondisseDem }} <br>
            <a href=\"{{ path('appartement_show', {'numappart': appartement.numappart}) }}\">Voir description</a><br>
        </li>
        <br>
        <img src=\"{{ asset('photos/' ~ appartement.photo) }}\"/>
        <br>
    {% endfor %}
    </ul>
</div>
{% endblock %}

", "accueil/recherche.html.twig", "/home/dayanavr/www/findyourhome/templates/accueil/recherche.html.twig");
    }
}
