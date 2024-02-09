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

/* reusable/header.html.twig */
class __TwigTemplate_38f347b8bc328e3e50f210c5884dfc31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reusable/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reusable/header.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Makaan - Real Estate HTML Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"../public/img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"../public/lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"../public/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"../public/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"../public/css/style.css\" rel=\"stylesheet\">
</head>

<body>
 <div class=\"container-xxl bg-white p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar Start -->
        <div class=\"container-fluid nav-bar bg-transparent\">
            <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-0 px-4\">
                <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center text-center\">
                    <div class=\"icon p-2 me-2\">
                        <img class=\"img-fluid\" src=\"../public/img/icon-deal.png\" alt=\"Icon\" style=\"width: 30px; height: 30px;\">
                    </div>
                    <h1 class=\"m-0 text-primary\">Makaan</h1>
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto\">
                        <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Property</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"property-list.html\" class=\"dropdown-item\">Property List</a>
                                <a href=\"property-type.html\" class=\"dropdown-item\">Property Type</a>
                                <a href=\"property-agent.html\" class=\"dropdown-item\">Property Agent</a>
                            </div>
                        </div>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                <a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
                            </div>
                        </div>
                        <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                    </div>
                    <a href=\"\" class=\"btn btn-primary px-3 d-none d-lg-flex\">Add Property</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

      
             <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"../public/lib/wow/wow.min.js\"></script>
    <script src=\"../public/lib/easing/easing.min.js\"></script>
    <script src=\"../public/lib/waypoints/waypoints.min.js\"></script>
    <script src=\"../public/lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"../public/js/main.js\"></script>

</body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reusable/header.html.twig";
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
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Makaan - Real Estate HTML Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"../public/img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap\" rel=\"stylesheet\">
    
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"../public/lib/animate/animate.min.css\" rel=\"stylesheet\">
    <link href=\"../public/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"../public/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"../public/css/style.css\" rel=\"stylesheet\">
</head>

<body>
 <div class=\"container-xxl bg-white p-0\">
        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar Start -->
        <div class=\"container-fluid nav-bar bg-transparent\">
            <nav class=\"navbar navbar-expand-lg bg-white navbar-light py-0 px-4\">
                <a href=\"index.html\" class=\"navbar-brand d-flex align-items-center text-center\">
                    <div class=\"icon p-2 me-2\">
                        <img class=\"img-fluid\" src=\"../public/img/icon-deal.png\" alt=\"Icon\" style=\"width: 30px; height: 30px;\">
                    </div>
                    <h1 class=\"m-0 text-primary\">Makaan</h1>
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto\">
                        <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Property</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"property-list.html\" class=\"dropdown-item\">Property List</a>
                                <a href=\"property-type.html\" class=\"dropdown-item\">Property Type</a>
                                <a href=\"property-agent.html\" class=\"dropdown-item\">Property Agent</a>
                            </div>
                        </div>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                <a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
                            </div>
                        </div>
                        <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                    </div>
                    <a href=\"\" class=\"btn btn-primary px-3 d-none d-lg-flex\">Add Property</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

      
             <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"../public/lib/wow/wow.min.js\"></script>
    <script src=\"../public/lib/easing/easing.min.js\"></script>
    <script src=\"../public/lib/waypoints/waypoints.min.js\"></script>
    <script src=\"../public/lib/owlcarousel/owl.carousel.min.js\"></script>

    <!-- Template Javascript -->
    <script src=\"../public/js/main.js\"></script>

</body>", "reusable/header.html.twig", "C:\\Users\\Asus\\Desktop\\PIDEV\\Pidev_CodeShift\\templates\\reusable\\header.html.twig");
    }
}
