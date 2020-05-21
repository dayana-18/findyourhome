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

/* utilisateur/client_recherche.twig */
class __TwigTemplate_c06dd635495d201457159c8b175f975475a9e46881b33b9e6ed32e9004673c41 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/client_recherche.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "findyourhome";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <ul>
        <li>
            <a href=\"http://findyourhome.com/login\">Se connecter</a>
        </li>
        <li>
            <a href=\"http://findyourhome.com/register\">Créer un compte</a>
        </li>
        <li>
            <a href=\"http://findyourhome.com/appartement/new\">Déposer une annonce</a>
        </li>
    </ul>
</div>
<div>
    <form action=\"/recherche\" role=\"search\">
        <div>
            <div>
            <input name=\"t\" id=\"rbox\" type=\"text\" class=\"\" placeholder=\"Type d'appartement\">
            </div>
        </div> 
        <div>
            <div>
            <input name=\"p\" id=\"rbox\" type=\"number\" placeholder=\"Bugdet maximale\">
        </div>
        <div>
            <div>
            <input name=\"v\" id=\"rbox\" type=\"text\" placeholder=\"Ville souhaitée\">
            <input type=\"submit\" value=\"Valider\">
        </div>
    </form>
</div>
<div>  
    <p>Résultats de recherche pour :  ";
        // line 43
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["prixmax"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["ville"] ?? null), "html", null, true);
        echo "</p>
        
    <ul>
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resappartements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["appartement"]) {
            // line 47
            echo "        <li>
            ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "typeappart", [], "any", false, false, false, 48), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "prixLoc", [], "any", false, false, false, 48), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "codePostal", [], "any", false, false, false, 48), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "ville", [], "any", false, false, false, 48), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "arrondisseDem", [], "any", false, false, false, 48), "html", null, true);
            echo " 
            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appartement_show", ["numappart" => twig_get_attribute($this->env, $this->source, $context["appartement"], "numappart", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\">Voir description</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appartement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "utilisateur/client_recherche.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  126 => 49,  114 => 48,  111 => 47,  107 => 46,  97 => 43,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "utilisateur/client_recherche.twig", "/home/dayanavr/www/findyourhome/templates/utilisateur/client_recherche.twig");
    }
}
