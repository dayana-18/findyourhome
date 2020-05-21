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

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_9c7c7d15b90b150c40393ecaa8a3006a85bf5825d2d64c828e9ea32fa96290ca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'sonata_header' => [$this, 'block_sonata_header'],
            'sonata_left_side' => [$this, 'block_sonata_left_side'],
            'sonata_nav' => [$this, 'block_sonata_nav'],
            'sonata_breadcrumb' => [$this, 'block_sonata_breadcrumb'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sonata_wrapper' => [$this, 'block_sonata_wrapper'],
            'sonata_page_content' => [$this, 'block_sonata_page_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("layout"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sonata_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_sonata_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
    }

    public function block_sonata_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  97 => 31,  93 => 30,  79 => 20,  75 => 19,  69 => 17,  63 => 16,  57 => 15,  51 => 14,  41 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SonataAdmin/empty_layout.html.twig", "/home/dayanavr/www/findyourhome/vendor/sonata-project/admin-bundle/src/Resources/views/empty_layout.html.twig");
    }
}
