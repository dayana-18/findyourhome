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

/* demande/_form.html.twig */
class __TwigTemplate_eaf17945976d99fa323a43a89529baa8e833e3c38a697e02613c58feb965e077 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    <p>Garder appuyé Ctrl pour selectionner plusieurs</p>
    
    <div>
    <form action=\"/recherche\" role=\"search\">
        <div>
            <input name=\"t\" id=\"rbox\" type=\"text\" class=\"\" placeholder=\"Type d'appartement\">
        </div>
            <div>
            <input name=\"p\" id=\"rbox\" type=\"number\" placeholder=\"Bugdet maximale\">
            </div>
            <div>
            <input name=\"v\" id=\"rbox\" type=\"text\" placeholder=\"Ville souhaitée\">
            <input type=\"submit\" value=\"Valider\">
        </div>
    </form>
    </div>
    
    <p>Id client</p>
    <input name=\"idclient\" type=\"number\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "\">

";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "demande/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  63 => 21,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "demande/_form.html.twig", "/home/dayanavr/www/findyourhome/templates/demande/_form.html.twig");
    }
}
