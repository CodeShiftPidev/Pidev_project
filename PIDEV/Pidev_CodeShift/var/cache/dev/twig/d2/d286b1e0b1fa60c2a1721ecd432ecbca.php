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

/* base.html.twig */
class __TwigTemplate_2b1b367ca33a9e6242c17549b0a8e24a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>🌍</text></svg>\">
        ";
        // line 8
        echo "        
        
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </head>
    <body>
        
        
        <!-- Header Start -->
        ";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 99
        echo "        <!-- Header End -->

        ";
        // line 101
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "
        <!-- Footer Start -->
        ";
        // line 104
        $this->displayBlock('footer', $context, $blocks);
        // line 154
        echo "        <!-- Footer End -->
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "The Traveler";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">
            <!-- Google Web Fonts -->
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
            <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap\" rel=\"stylesheet\">
            
            <!-- Icon Font Stylesheet -->
            <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

            <!-- Libraries Stylesheet -->
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Customized Bootstrap Stylesheet -->
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Template Stylesheet -->
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
             <!-- JavaScript Libraries -->
            <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Template Javascript -->
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 52
        echo "            <div class=\"container-xxl bg-white p-0\">
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
                        <img class=\"img-fluid\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-deal.png"), "html", null, true);
        echo "\" alt=\"Icon\" style=\"width: 30px; height: 30px;\">
                    </div>
                    <h1 class=\"m-0 text-primary\">The Traveler</h1>
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto\">
                        <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"about.html\" class=\"nav-item nav-link\">Spots</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Trips</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"property-list.html\" class=\"dropdown-item\">Spots</a>
                                <a href=\"property-type.html\" class=\"dropdown-item\">Events</a>
                                <a href=\"property-agent.html\" class=\"dropdown-item\">Trips</a>
                                <a href=\"property-agent.html\" class=\"dropdown-item\">Blog</a>
                            </div>
                        </div>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Blogs</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                <a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
                            </div>
                        </div>
                    </div>
                    <a href=\"\" class=\"btn btn-primary px-3 d-none d-lg-flex\">Sign in</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 104
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 105
        echo "            <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-3 col-md-6\">
                        <h5 class=\"text-white mb-4\">Get In Touch</h5>
                        <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>R52H+WWC, Av. Habib Thameur, Tunis</p>
                        <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+216 71 520 630</p>
                        <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>thetraveler.info@gmail.com</p>
                        <div class=\"d-flex pt-2\">
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h5 class=\"text-white mb-4\">Quick Links</h5>
                        <a class=\"btn btn-link text-white-50\" href=\"\">About Us</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Contact Us</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Our Services</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Privacy Policy</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Terms & Condition</a>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h5 class=\"text-white mb-4\">Newsletter</h5>
                        <p>Provide your e-mail to subscribe to our newsletter</p>
                        <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                            <input class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                            <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-end\">
                            <div class=\"footer-menu\">
                                <a href=\"\">Home</a>
                                <a href=\"\">Cookies</a>
                                <a href=\"\">Help</a>
                                <a href=\"\">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  327 => 105,  317 => 104,  298 => 101,  254 => 65,  239 => 52,  229 => 51,  217 => 44,  211 => 41,  207 => 40,  203 => 39,  199 => 38,  191 => 34,  181 => 33,  169 => 30,  163 => 27,  157 => 24,  153 => 23,  139 => 12,  134 => 11,  124 => 10,  105 => 5,  92 => 154,  90 => 104,  86 => 102,  84 => 101,  80 => 99,  78 => 51,  71 => 46,  69 => 33,  66 => 32,  64 => 10,  60 => 8,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}The Traveler{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>🌍</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        
        
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
            <link href=\"{{asset('img/favicon.ico')}}\" rel=\"icon\">
            <!-- Google Web Fonts -->
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
            <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap\" rel=\"stylesheet\">
            
            <!-- Icon Font Stylesheet -->
            <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

            <!-- Libraries Stylesheet -->
            <link href=\"{{asset('lib/animate/animate.min.css')}}\" rel=\"stylesheet\">
            <link href=\"{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">

            <!-- Customized Bootstrap Stylesheet -->
            <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">

            <!-- Template Stylesheet -->
            <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
             <!-- JavaScript Libraries -->
            <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
            <script src=\"{{asset('lib/wow/wow.min.js')}}\"></script>
            <script src=\"{{asset('lib/easing/easing.min.js')}}\"></script>
            <script src=\"{{asset('lib/waypoints/waypoints.min.js')}}\"></script>
            <script src=\"{{asset('lib/owlcarousel/owl.carousel.min.js')}}\"></script>

            <!-- Template Javascript -->
            <script src=\"{{asset('js/main.js')}}\"></script>
        {% endblock %}
    </head>
    <body>
        
        
        <!-- Header Start -->
        {% block header %}
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
                        <img class=\"img-fluid\" src=\"{{asset('img/icon-deal.png')}}\" alt=\"Icon\" style=\"width: 30px; height: 30px;\">
                    </div>
                    <h1 class=\"m-0 text-primary\">The Traveler</h1>
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto\">
                        <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"about.html\" class=\"nav-item nav-link\">Spots</a>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Trips</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"property-list.html\" class=\"dropdown-item\">Spots</a>
                                <a href=\"property-type.html\" class=\"dropdown-item\">Events</a>
                                <a href=\"property-agent.html\" class=\"dropdown-item\">Trips</a>
                                <a href=\"property-agent.html\" class=\"dropdown-item\">Blog</a>
                            </div>
                        </div>
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Blogs</a>
                            <div class=\"dropdown-menu rounded-0 m-0\">
                                <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                                <a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
                            </div>
                        </div>
                    </div>
                    <a href=\"\" class=\"btn btn-primary px-3 d-none d-lg-flex\">Sign in</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->
        {% endblock %}
        <!-- Header End -->

        {% block body %} {% endblock %}

        <!-- Footer Start -->
        {% block footer %}
            <div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn\" data-wow-delay=\"0.1s\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-3 col-md-6\">
                        <h5 class=\"text-white mb-4\">Get In Touch</h5>
                        <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt me-3\"></i>R52H+WWC, Av. Habib Thameur, Tunis</p>
                        <p class=\"mb-2\"><i class=\"fa fa-phone-alt me-3\"></i>+216 71 520 630</p>
                        <p class=\"mb-2\"><i class=\"fa fa-envelope me-3\"></i>thetraveler.info@gmail.com</p>
                        <div class=\"d-flex pt-2\">
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                            <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h5 class=\"text-white mb-4\">Quick Links</h5>
                        <a class=\"btn btn-link text-white-50\" href=\"\">About Us</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Contact Us</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Our Services</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Privacy Policy</a>
                        <a class=\"btn btn-link text-white-50\" href=\"\">Terms & Condition</a>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <h5 class=\"text-white mb-4\">Newsletter</h5>
                        <p>Provide your e-mail to subscribe to our newsletter</p>
                        <div class=\"position-relative mx-auto\" style=\"max-width: 400px;\">
                            <input class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Your email\">
                            <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"copyright\">
                    <div class=\"row\">
                        <div class=\"col-md-6 text-center text-md-end\">
                            <div class=\"footer-menu\">
                                <a href=\"\">Home</a>
                                <a href=\"\">Cookies</a>
                                <a href=\"\">Help</a>
                                <a href=\"\">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        <!-- Footer End -->
    </body>
</html>
", "base.html.twig", "C:\\Users\\Asus\\Desktop\\PIDEV\\Pidev_CodeShift\\templates\\base.html.twig");
    }
}
