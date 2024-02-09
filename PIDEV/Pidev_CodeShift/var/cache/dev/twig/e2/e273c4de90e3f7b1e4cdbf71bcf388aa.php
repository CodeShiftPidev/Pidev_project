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

/* reusable/formCSS.html.twig */
class __TwigTemplate_1c4b7cbb6356a43b6f72e4265d76b59d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reusable/formCSS.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reusable/formCSS.html.twig"));

        // line 1
        echo "<style>
    /* CSS */
    .form-container {
        width: 400px; /* Adjust the width as needed */
        margin: 0 auto; /* Center the container horizontally */
        text-align: center; /* Center text within the container */
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px; /* Add rounded corners */
    }

    .form-group {
        margin: 10px 0; /* Add space between form elements */
    }

    .centered-button {
        display: block;
        margin: 10px auto; /* Center the button horizontally */
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
        return "reusable/formCSS.html.twig";
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
    /* CSS */
    .form-container {
        width: 400px; /* Adjust the width as needed */
        margin: 0 auto; /* Center the container horizontally */
        text-align: center; /* Center text within the container */
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px; /* Add rounded corners */
    }

    .form-group {
        margin: 10px 0; /* Add space between form elements */
    }

    .centered-button {
        display: block;
        margin: 10px auto; /* Center the button horizontally */
    }
</style>", "reusable/formCSS.html.twig", "C:\\Users\\Asus\\Desktop\\PIDEV\\Pidev_CodeShift\\templates\\reusable\\formCSS.html.twig");
    }
}
