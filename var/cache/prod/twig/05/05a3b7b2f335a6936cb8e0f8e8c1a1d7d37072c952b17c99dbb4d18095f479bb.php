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

/* @SonataAdmin/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_471711d6fb2a48a1f6c5911ca29ec28cbbf177c3f48dc3c9c1342e0f4d55e6fd extends \Twig\Template
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
        // line 12
        $this->loadTemplate("@SonataAdmin/CRUD/display_datetime.html.twig", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig", 12)->display(twig_array_merge($context, ["value" => twig_get_attribute($this->env, $this->source, ($context["revision"] ?? null), "timestamp", [], "any", false, false, false, 12)]));
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
