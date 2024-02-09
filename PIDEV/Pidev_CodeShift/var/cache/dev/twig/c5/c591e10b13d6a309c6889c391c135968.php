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

/* reusable/listCSS.html.twig */
class __TwigTemplate_5f98db1fadcc35240e0f4f66c4273764 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reusable/listCSS.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reusable/listCSS.html.twig"));

        // line 1
        echo "<style>
    .author-image {
        width: 100px; /* Adjust the width as needed */
        height: 100px; /* Adjust the height as needed */
    }

    .author-table {
        border-collapse: collapse;
        width: 100%;
    }

    .author-table, .author-table th, .author-table td {
        border: 1px solid #000;
        text-align: center;
    }

    .author-table th, .author-table td {
        padding: 10px;
    }
</style>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reusable/listCSS.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .author-image {
        width: 100px; /* Adjust the width as needed */
        height: 100px; /* Adjust the height as needed */
    }

    .author-table {
        border-collapse: collapse;
        width: 100%;
    }

    .author-table, .author-table th, .author-table td {
        border: 1px solid #000;
        text-align: center;
    }

    .author-table th, .author-table td {
        padding: 10px;
    }
</style>", "reusable/listCSS.html.twig", "C:\\Users\\Asus\\Desktop\\PIDEV\\Pidev_CodeShift\\templates\\reusable\\listCSS.html.twig");
    }
}
