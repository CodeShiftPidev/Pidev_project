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

/* voyage/addVoyage.html.twig */
class __TwigTemplate_744b1de6b3f88c86a40e438f0b12e4b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/addVoyage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/addVoyage.html.twig"));

        // line 1
        $this->loadTemplate("reusable/formCSS.html.twig", "voyage/addVoyage.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("reusable/headerButtons.html.twig", "voyage/addVoyage.html.twig", 2)->display($context);
        // line 3
        echo "
<br>
<br>
<br>

";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
<div class=\"form-container\">
    <div class=\"form-group\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 11, $this->source); })()), "identifiant", [], "any", false, false, false, 11), 'label', ["label" => "Identifiant"]);
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 12, $this->source); })()), "identifiant", [], "any", false, false, false, 12), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'label', ["label" => "Nom"]);
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 19, $this->source); })()), "duree", [], "any", false, false, false, 19), 'label', ["label" => "Duree"]);
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 20, $this->source); })()), "duree", [], "any", false, false, false, 20), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 23, $this->source); })()), "prix", [], "any", false, false, false, 23), 'label', ["label" => "Prix"]);
        echo "
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 24, $this->source); })()), "prix", [], "any", false, false, false, 24), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 27, $this->source); })()), "destination", [], "any", false, false, false, 27), 'label', ["label" => "Destination"]);
        echo "
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 28, $this->source); })()), "destination", [], "any", false, false, false, 28), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'label', ["label" => "Description"]);
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 35, $this->source); })()), "role", [], "any", false, false, false, 35), 'label', ["label" => "Role"]);
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 36, $this->source); })()), "role", [], "any", false, false, false, 36), 'widget');
        echo "
    </div>
    <div class=\"form-group\">
        <button type=\"submit\" class=\"centered-button\">Submit</button>
    </div>
</div>
";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["voyage_form"]) || array_key_exists("voyage_form", $context) ? $context["voyage_form"] : (function () { throw new RuntimeError('Variable "voyage_form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voyage/addVoyage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  133 => 42,  124 => 36,  120 => 35,  114 => 32,  110 => 31,  104 => 28,  100 => 27,  94 => 24,  90 => 23,  84 => 20,  80 => 19,  74 => 16,  70 => 15,  64 => 12,  60 => 11,  54 => 8,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'reusable/formCSS.html.twig' %}
{% include 'reusable/headerButtons.html.twig' %}

<br>
<br>
<br>

{{ form_start(voyage_form) }}
<div class=\"form-container\">
    <div class=\"form-group\">
        {{ form_label(voyage_form.identifiant, \"Identifiant\") }}
        {{ form_widget(voyage_form.identifiant) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(voyage_form.nom, \"Nom\") }}
        {{ form_widget(voyage_form.nom) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(voyage_form.duree, \"Duree\") }}
        {{ form_widget(voyage_form.duree) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(voyage_form.prix, \"Prix\") }}
        {{ form_widget(voyage_form.prix) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(voyage_form.destination, \"Destination\") }}
        {{ form_widget(voyage_form.destination) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(voyage_form.description, \"Description\") }}
        {{ form_widget(voyage_form.description) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(voyage_form.role, \"Role\") }}
        {{ form_widget(voyage_form.role) }}
    </div>
    <div class=\"form-group\">
        <button type=\"submit\" class=\"centered-button\">Submit</button>
    </div>
</div>
{{ form_end(voyage_form) }}

", "voyage/addVoyage.html.twig", "C:\\Users\\Asus\\Desktop\\PIDEV\\Pidev_CodeShift\\templates\\voyage\\addVoyage.html.twig");
    }
}
