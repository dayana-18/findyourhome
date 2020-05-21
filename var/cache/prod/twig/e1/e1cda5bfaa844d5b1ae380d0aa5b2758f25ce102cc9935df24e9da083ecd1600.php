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

/* security/login.html.twig */
class __TwigTemplate_2273895ee815cb2275018159c35ed9ad434f5f271cc4ef781f817f5047632de3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    
    <h1><center>";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo " </h1>
<form method=\"post\">
    
    <h1 class=\"h3 mb-3 font-weight-normal\">Se connecter</h1>
    <label for=\"inputLogin\">Login</label>
    <input type=\"text\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"login\" id=\"inputLogin\" class=\"form-control\" required autofocus>
    <label for=\"inputPassword\">Mot de passe</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
    
    <div class=\"checkbox mb-3\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked/>
        <label for=\"remember_me\">Maintenir la connexion</label>
    </div>
    

    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Connexion
    </button>
    ";
        // line 29
        if (($context["error"] ?? null)) {
            // line 30
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 30), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "        
        <div class=\"mb-3\">
            ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
            echo "
            Vous etes connectés en tant que ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
        </div>
        <!--if proprio ça, if client ça, if locataire ça-->
        
    ";
        }
        // line 42
        echo "    
</form>
    <br>
    ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "    <div class=\"example-wrapper\">
            <ul>
                <li>
                    <a href=\"/appartement/new\">Déposer une annonce</a>
                </li>
                <li>
                    <a href=\"/utilisateur/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\">Faire une demande de logement</a>
                </li>
            </ul>
        </div>
    ";
        }
        // line 57
        echo "<div>
    <form action=\"/recherche\" role=\"search\">
        <div>
            <label for=\"demande\">Rechercher un appartement</label>
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
    <ul>
    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["appartements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["appartement"]) {
            // line 79
            echo "        <li>
            ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "typeappart", [], "any", false, false, false, 80), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "prixLoc", [], "any", false, false, false, 80), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "codePostal", [], "any", false, false, false, 80), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appartement"], "ville", [], "any", false, false, false, 80), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["appartement"], "arrondisseDem", [], "any", false, false, false, 80), "arrondisseDem", [], "any", false, false, false, 80), "html", null, true);
            echo " 
            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appartement_show", ["numappart" => twig_get_attribute($this->env, $this->source, $context["appartement"], "numappart", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\">Voir description</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appartement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 84,  188 => 81,  176 => 80,  173 => 79,  169 => 78,  146 => 57,  138 => 52,  130 => 46,  128 => 45,  123 => 42,  113 => 37,  109 => 36,  105 => 34,  103 => 33,  100 => 32,  94 => 30,  92 => 29,  77 => 17,  69 => 12,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/dayanavr/www/findyourhome/templates/security/login.html.twig");
    }
}
