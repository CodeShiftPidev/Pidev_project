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

/* voyage/list.html.twig */
class __TwigTemplate_f5bb09b0a1ef39df2c9f890e48607e13 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/list.html.twig"));

        // line 1
        $this->loadTemplate("reusable/listCSS.html.twig", "voyage/list.html.twig", 1)->display($context);
        // line 2
        $this->loadTemplate("reusable/headerButtons.html.twig", "voyage/list.html.twig", 2)->display($context);
        // line 3
        echo "
<br>
<br>
<br>

";
        // line 8
        if (( !array_key_exists("voyages", $context) || twig_test_empty((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 8, $this->source); })())))) {
            // line 9
            echo "    <h3>Aucun voyage repertorié</h3>
";
        } else {
            // line 11
            echo "    <table class=\"author-table\">
        <tr>
            <td>Nom</td>
            <td>Destination</td>
            <td>Duree</td>
            <td>Prix</td>
            <td>Description</td>
            <td>Role</td>
        </tr>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unit"]) {
                // line 21
                echo "            <tr>
                ";
                // line 23
                echo "                <td>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unit"], "nom", [], "any", false, false, false, 23)), "html", null, true);
                echo "</td>
                <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unit"], "destination", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unit"], "duree", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unit"], "prix", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unit"], "description", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unit"], "role", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                ";
                // line 30
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit-voyage", ["id" => twig_get_attribute($this->env, $this->source, $context["unit"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\"><strong>Edit</strong></a>&nbsp;&nbsp;<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete-voyage", ["id" => twig_get_attribute($this->env, $this->source, $context["unit"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\"><strong>Delete</strong></a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </table>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voyage/list.html.twig";
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
        return array (  115 => 33,  103 => 30,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  78 => 23,  75 => 21,  71 => 20,  60 => 11,  56 => 9,  54 => 8,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'reusable/listCSS.html.twig' %}
{% include 'reusable/headerButtons.html.twig' %}

<br>
<br>
<br>

{% if voyages is not defined or voyages is empty %}
    <h3>Aucun voyage repertorié</h3>
{% else %}
    <table class=\"author-table\">
        <tr>
            <td>Nom</td>
            <td>Destination</td>
            <td>Duree</td>
            <td>Prix</td>
            <td>Description</td>
            <td>Role</td>
        </tr>
        {% for unit in voyages %}
            <tr>
                {#<td><a href=\"{{path('author-details', {'name':unit.name}) }}\">{{ unit.name|upper }}</a></td>#}
                <td>{{ unit.nom|upper }}</td>
                <td>{{ unit.destination}}</td>
                <td>{{ unit.duree }}</td>
                <td>{{ unit.prix }}</td>
                <td>{{ unit.description }}</td>
                <td>{{ unit.role }}</td>
                {#<td><img class=\"author-image\" src=\"{{ asset('images/' ~ unit.image) }}\" alt=\"Author Portrait\" /></td>#}
                <td><a href=\"{{ path('edit-voyage',{'id':unit.id}) }}\"><strong>Edit</strong></a>&nbsp;&nbsp;<a href=\"{{ path('delete-voyage', {'id':unit.id}) }}\"><strong>Delete</strong></a></td>
            </tr>
        {% endfor %}
    </table>
{% endif %}", "voyage/list.html.twig", "C:\\Users\\Asus\\Desktop\\PIDEV\\Pidev_CodeShift\\templates\\voyage\\list.html.twig");
    }
}
