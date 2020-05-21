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
class __TwigTemplate_606d09deef423c1f1c632cc503bbe1d838d65f7fc830e3bc4b5d30b8e60b44cc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "appartement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Appartement";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Appartement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Numappart</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "numappart", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rue</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "rue", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code Postal</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "codePostal", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "ville", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etage</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "etage", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typeappart</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "typeappart", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "libelle", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PrixLoc</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "prixLoc", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PrixCharges</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "prixCharges", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ascenseur</th>
                <td>";
        // line 48
        echo ((twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "ascenseur", [], "any", false, false, false, 48)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Preavis</th>
                <td>";
        // line 52
        echo ((twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "preavis", [], "any", false, false, false, 52)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>DateLibre</th>
                <td>";
        // line 56
        ((twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "dateLibre", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "dateLibre", [], "any", false, false, false, 56), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Cotisation</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "cotisation", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appartement_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appartement_edit", ["numappart" => twig_get_attribute($this->env, $this->source, ($context["appartement"] ?? null), "numappart", [], "any", false, false, false, 67)]), "html", null, true);
        echo "\">edit</a>
    
    <p>Faire une <a href=\"\">demande </a></p>

    ";
        // line 71
        echo twig_include($this->env, $context, "appartement/_delete_form.html.twig");
        echo "
";
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
        return array (  170 => 71,  163 => 67,  158 => 65,  150 => 60,  143 => 56,  136 => 52,  129 => 48,  122 => 44,  115 => 40,  108 => 36,  101 => 32,  94 => 28,  87 => 24,  80 => 20,  73 => 16,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "appartement/show.html.twig", "/home/dayanavr/www/findyourhome/templates/appartement/show.html.twig");
    }
}
