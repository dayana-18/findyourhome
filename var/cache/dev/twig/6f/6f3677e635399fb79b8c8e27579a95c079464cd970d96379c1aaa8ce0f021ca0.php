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

/* appartement/show.html.twig */
class __TwigTemplate_cbc29e94c2bd7e0f44670ce895bb8c15619862f2961ee35241aed638bc29fe80 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appartement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appartement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "appartement/show.html.twig", 1);
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

        echo "Appartement";
        
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
        echo "    <h1>Appartement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Numappart</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 12, $this->source); })()), "numappart", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rue</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 16, $this->source); })()), "rue", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code Postal</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 20, $this->source); })()), "codePostal", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 24, $this->source); })()), "ville", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etage</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 28, $this->source); })()), "etage", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typeappart</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 32, $this->source); })()), "typeappart", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 36, $this->source); })()), "libelle", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PrixLoc</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 40, $this->source); })()), "prixLoc", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PrixCharges</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 44, $this->source); })()), "prixCharges", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ascenseur</th>
                <td>";
        // line 48
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 48, $this->source); })()), "ascenseur", [], "any", false, false, false, 48)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Preavis</th>
                <td>";
        // line 52
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 52, $this->source); })()), "preavis", [], "any", false, false, false, 52)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>DateLibre</th>
                <td>";
        // line 56
        ((twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 56, $this->source); })()), "dateLibre", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 56, $this->source); })()), "dateLibre", [], "any", false, false, false, 56), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Cotisation</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 60, $this->source); })()), "cotisation", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Arrondissement</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 64, $this->source); })()), "arrondisseDem", [], "any", false, false, false, 64), "arrondisseDem", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
            
            <br>
    
    <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/" . twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 71, $this->source); })()), "photo", [], "any", false, false, false, 71))), "html", null, true);
        echo "\"/>
    <br>
            
    ";
        // line 74
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROPRIETAIRE")) {
            // line 75
            echo "
        <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appartement_edit", ["numappart" => twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 76, $this->source); })()), "numappart", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">Modifier appartement</a>

        ";
            // line 78
            echo twig_include($this->env, $context, "appartement/_delete_form.html.twig");
            echo "
    ";
        }
        // line 79
        echo "    

        <h2>Proprietaire</h2>

        <table class=\"table\">
            <tbody>
                <tr>
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proprietaire"]) || array_key_exists("proprietaire", $context) ? $context["proprietaire"] : (function () { throw new RuntimeError('Variable "proprietaire" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["propri"]) {
            // line 87
            echo "                    <th>Nom</th>
                    <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propri"], "nom", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Prenom</th>
                    <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propri"], "prenom", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propri"], "adresse", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>CodePostal</th>
                    <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propri"], "codePostal", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Ville</th>
                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propri"], "ville", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Tel</th>
                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propri"], "tel", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propri'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "            </tbody>
        </table>
            
                        
    ";
        // line 115
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLIENT") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LOCATAIRE"))) {
            // line 116
            echo "
    <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visiter_new", ["numappart" => twig_get_attribute($this->env, $this->source, (isset($context["appartement"]) || array_key_exists("appartement", $context) ? $context["appartement"] : (function () { throw new RuntimeError('Variable "appartement" does not exist.', 117, $this->source); })()), "numappart", [], "any", false, false, false, 117)]), "html", null, true);
            echo "\">Faire une demande de visite</a>
    
    ";
        }
        // line 120
        echo "
        ";
        // line 121
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PROPRIETAIRE")) {
            // line 122
            echo "        
        <h3>Locataire</h3>
        
        ";
            // line 125
            if ((isset($context["locataire"]) || array_key_exists("locataire", $context) ? $context["locataire"] : (function () { throw new RuntimeError('Variable "locataire" does not exist.', 125, $this->source); })())) {
                // line 126
                echo "        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Nom</th>
                    <td>";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["locataire"]) || array_key_exists("locataire", $context) ? $context["locataire"] : (function () { throw new RuntimeError('Variable "locataire" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130), "nom", [], "any", false, false, false, 130), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <th>Prenom</th>
                    <td>";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["locataire"]) || array_key_exists("locataire", $context) ? $context["locataire"] : (function () { throw new RuntimeError('Variable "locataire" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134), "prenom", [], "any", false, false, false, 134), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <th>RIB</th>
                    <td>";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["locataire"]) || array_key_exists("locataire", $context) ? $context["locataire"] : (function () { throw new RuntimeError('Variable "locataire" does not exist.', 138, $this->source); })()), "rIB", [], "any", false, false, false, 138), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <th>TelBanque</th>
                    <td>";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["locataire"]) || array_key_exists("locataire", $context) ? $context["locataire"] : (function () { throw new RuntimeError('Variable "locataire" does not exist.', 142, $this->source); })()), "telBanque", [], "any", false, false, false, 142), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <th>Tel</th>
                    <td>";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["locataire"]) || array_key_exists("locataire", $context) ? $context["locataire"] : (function () { throw new RuntimeError('Variable "locataire" does not exist.', 146, $this->source); })()), "id", [], "any", false, false, false, 146), "tel", [], "any", false, false, false, 146), "html", null, true);
                echo "</td>
                </tr>
            </tbody>
        </table>
                <a href=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("locataire_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["locataire"]) || array_key_exists("locataire", $context) ? $context["locataire"] : (function () { throw new RuntimeError('Variable "locataire" does not exist.', 150, $this->source); })()), "id", [], "any", false, false, false, 150), "id", [], "any", false, false, false, 150)]), "html", null, true);
                echo "\">Modifier locataire</a>
            ";
            } else {
                // line 152
                echo "                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("locataire_new");
                echo "\">Nouveau locataire</a>
                
        ";
            }
            // line 155
            echo "    ";
        }
        // line 156
        echo "    <br>
    <a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Retournez à l'accueil</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "appartement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 157,  363 => 156,  360 => 155,  353 => 152,  348 => 150,  341 => 146,  334 => 142,  327 => 138,  320 => 134,  313 => 130,  307 => 126,  305 => 125,  300 => 122,  298 => 121,  295 => 120,  289 => 117,  286 => 116,  284 => 115,  278 => 111,  269 => 108,  262 => 104,  255 => 100,  248 => 96,  241 => 92,  234 => 88,  231 => 87,  227 => 86,  218 => 79,  213 => 78,  208 => 76,  205 => 75,  203 => 74,  197 => 71,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Appartement{% endblock %}

{% block body %}
    <h1>Appartement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Numappart</th>
                <td>{{ appartement.numappart }}</td>
            </tr>
            <tr>
                <th>Rue</th>
                <td>{{ appartement.rue }}</td>
            </tr>
            <tr>
                <th>Code Postal</th>
                <td>{{ appartement.codePostal }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ appartement.ville }}</td>
            </tr>
            <tr>
                <th>Etage</th>
                <td>{{ appartement.etage }}</td>
            </tr>
            <tr>
                <th>Typeappart</th>
                <td>{{ appartement.typeappart }}</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>{{ appartement.libelle }}</td>
            </tr>
            <tr>
                <th>PrixLoc</th>
                <td>{{ appartement.prixLoc }}</td>
            </tr>
            <tr>
                <th>PrixCharges</th>
                <td>{{ appartement.prixCharges }}</td>
            </tr>
            <tr>
                <th>Ascenseur</th>
                <td>{{ appartement.ascenseur ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Preavis</th>
                <td>{{ appartement.preavis ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>DateLibre</th>
                <td>{{ appartement.dateLibre ? appartement.dateLibre|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Cotisation</th>
                <td>{{ appartement.cotisation }}</td>
            </tr>
            <tr>
                <th>Arrondissement</th>
                <td>{{ appartement.arrondisseDem.arrondisseDem }}</td>
            </tr>
        </tbody>
    </table>
            
            <br>
    
    <img src=\"{{ asset('photos/' ~ appartement.photo) }}\"/>
    <br>
            
    {% if is_granted('ROLE_PROPRIETAIRE') %}

        <a href=\"{{ path('appartement_edit', {'numappart': appartement.numappart}) }}\">Modifier appartement</a>

        {{ include('appartement/_delete_form.html.twig') }}
    {% endif %}    

        <h2>Proprietaire</h2>

        <table class=\"table\">
            <tbody>
                <tr>
                {% for propri in proprietaire %}
                    <th>Nom</th>
                    <td>{{ propri.nom }}</td>
                </tr>
                <tr>
                    <th>Prenom</th>
                    <td>{{ propri.prenom }}</td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td>{{ propri.adresse }}</td>
                </tr>
                <tr>
                    <th>CodePostal</th>
                    <td>{{ propri.codePostal }}</td>
                </tr>
                <tr>
                    <th>Ville</th>
                    <td>{{ propri.ville }}</td>
                </tr>
                <tr>
                    <th>Tel</th>
                    <td>{{ propri.tel }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
            
                        
    {% if is_granted('ROLE_CLIENT') or is_granted('ROLE_LOCATAIRE') %}

    <a href=\"{{ path('visiter_new', {'numappart': appartement.numappart}) }}\">Faire une demande de visite</a>
    
    {% endif %}

        {% if is_granted('ROLE_PROPRIETAIRE') %}
        
        <h3>Locataire</h3>
        
        {% if locataire %}
        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Nom</th>
                    <td>{{ locataire.id.nom }}</td>
                </tr>
                <tr>
                    <th>Prenom</th>
                    <td>{{ locataire.id.prenom }}</td>
                </tr>
                <tr>
                    <th>RIB</th>
                    <td>{{ locataire.rIB }}</td>
                </tr>
                <tr>
                    <th>TelBanque</th>
                    <td>{{ locataire.telBanque }}</td>
                </tr>
                <tr>
                    <th>Tel</th>
                    <td>{{ locataire.id.tel }}</td>
                </tr>
            </tbody>
        </table>
                <a href=\"{{ path('locataire_edit', {'id': locataire.id.id }) }}\">Modifier locataire</a>
            {% else %}
                <a href=\"{{ path('locataire_new') }}\">Nouveau locataire</a>
                
        {% endif %}
    {% endif %}
    <br>
    <a href=\"{{ path('app_login') }}\">Retournez à l'accueil</a>
{% endblock %}", "appartement/show.html.twig", "/home/dayanavr/www/findyourhome/templates/appartement/show.html.twig");
    }
}
