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

/* reusable/headerButtons.html.twig */
class __TwigTemplate_b001287028730f2bcaecda50298bd890 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reusable/headerButtons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reusable/headerButtons.html.twig"));

        // line 1
        echo "<style>
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}


.tablink:hover {
  background-color: #777;
}

.tabcontent {
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}

</style>

<div id=\"voyages\" class=\"tabcontent\">
  <h1>Voyages</h1>
</div>

";
        // line 35
        echo "
<div id=\"add_voyage\" class=\"tabcontent\">
  <h1>Add voyage</h1>
</div>

";
        // line 44
        echo "
<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list-voyage");
        echo "\"><button class=\"tablink\">Voyages</button></a>
<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add-voyage");
        echo "\"><button class=\"tablink\">Add voyage</button></a>
";
        // line 49
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
        return "reusable/headerButtons.html.twig";
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
        return array (  94 => 49,  90 => 46,  86 => 45,  83 => 44,  76 => 35,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}


.tablink:hover {
  background-color: #777;
}

.tabcontent {
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}

</style>

<div id=\"voyages\" class=\"tabcontent\">
  <h1>Voyages</h1>
</div>

{#<div id=\"Books\" class=\"tabcontent\">
  <h1>Books</h1>
</div>#}

<div id=\"add_voyage\" class=\"tabcontent\">
  <h1>Add voyage</h1>
</div>

{#
<div id=\"add_book\" class=\"tabcontent\">
  <h1>Add book</h1>
</div>#}

<a href=\"{{ path('list-voyage')  }}\"><button class=\"tablink\">Voyages</button></a>
<a href=\"{{ path('add-voyage')  }}\"><button class=\"tablink\">Add voyage</button></a>
{#<a href=\"{{ path('book-list')  }}\"><button class=\"tablink\">Books</button></a>
<a href=\"{{ path('add-book')  }}\"><button class=\"tablink\">Add book</button></a>#}

", "reusable/headerButtons.html.twig", "C:\\Users\\Asus\\Desktop\\PIDEV\\Pidev_CodeShift\\templates\\reusable\\headerButtons.html.twig");
    }
}
