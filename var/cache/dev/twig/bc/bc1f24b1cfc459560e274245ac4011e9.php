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
class __TwigTemplate_4774796e6758b9f5b5bd0d4ca5638c57 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
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
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta charset=\"UTF-8\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
</head>

<body>
";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "
<!-- Vendor JS Files -->
<script src=\"assets/vendor/purecounter/purecounter_vanilla.js\"></script>
<script src=\"assets/vendor/aos/aos.js\"></script>
<script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
<script src=\"assets/vendor/glightbox/js/glightbox.min.js\"></script>
<script src=\"assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
<script src=\"assets/vendor/swiper/swiper-bundle.min.js\"></script>
<script src=\"assets/vendor/typed.js/typed.min.js\"></script>
<script src=\"assets/vendor/waypoints/noframework.waypoints.js\"></script>
<script src=\"assets/vendor/php-email-form/validate.js\"></script>

<!-- Template Main JS File -->
<script src=\"assets/js/main.js\"></script>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paweł Cetnarowski ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        <link href=\"assets/css/style.css\" rel=\"stylesheet\">
        <!-- Vendor CSS Files -->
        <link href=\"assets/vendor/aos/aos.css\" rel=\"stylesheet\">
        <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
        <link href=\"assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
        <link href=\"assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
        <link href=\"assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 29
            echo "        <header id=\"header\">
            <div class=\"d-flex flex-column\">

                <div class=\"profile\">
                    <img src=\"assets/img/profile-img.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                    <h1 class=\"text-light\"><a href=\"index.html\">Witaj, ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></h1>
                    <h1 class=\"text-light\"><a href=\"index.html\">Sanatorium Elda</a></h1>
                    <div class=\"social-links mt-3 text-center\">
                        <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                        <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                        <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                        <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-logout\"></i></a>
                    </div>
                </div>

                <nav id=\"navbar\" class=\"nav-menu navbar\">
                    <ul>
                        <li><a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" class=\"nav-link\"><i class=\"bx bx-home\"></i>
                                <span>Start</span></a></li>
                        <li><a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show");
            echo "\" class=\"nav-link\"><i class=\"bx bx-user\"></i>
                                <span>Twoje dane</span></a></li>
                        <li><a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_listing");
            echo "\" class=\"nav-link\"> <i class=\"bx bx-file-blank\"></i>
                                <span>Rezerwacje</span></a></li>
                        <li><a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("treatments_show");
            echo "\" class=\"nav-link\"><i class=\"bx bx-book-content\"></i>
                                <span>Zabiegi</span></a></li>
                        <li><a href=\"\" class=\"nav-link\"><i class=\"bx bx-server\"></i>
                                <span>Kontakt</span></a></li>
                        <li><a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link\"><i class=\"bx bx-envelope\"></i>
                                <span>Wyloguj</span></a></li>

                    </ul>
                </nav>

                ";
            // line 63
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 64
                echo "                ";
                // line 65
                echo "
                <div class=\"profile\">
                    <h1 class=\"text-light\"><a href=\"index.html\">ADMIN</a></h1>
                </div>
            </div>

            <nav id=\"navbar\" class=\"nav-menu navbar\">
                <ul>
                    <li><a href=\"";
                // line 73
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_listing");
                echo "\" class=\"nav-link\"><i class=\"bx bx-user\"></i>
                            <span>Użytkownicy</span></a>
                    </li>
                    <li><a href=\"";
                // line 76
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("places_listing");
                echo "\" class=\"nav-link\"><i class=\"bx bx-building-house\"></i>
                            <span>Obiekty</span></a>
                    </li>

                </ul>
            </nav>
            ";
            }
            // line 83
            echo "        </header>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 88
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  274 => 88,  264 => 87,  252 => 83,  242 => 76,  236 => 73,  226 => 65,  224 => 64,  222 => 63,  213 => 57,  206 => 53,  201 => 51,  196 => 49,  191 => 47,  175 => 34,  168 => 29,  165 => 28,  155 => 27,  134 => 13,  124 => 12,  105 => 8,  78 => 90,  76 => 87,  73 => 86,  71 => 27,  65 => 23,  63 => 12,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta charset=\"UTF-8\">
    <title>{% block title %}Paweł Cetnarowski {% endblock %}</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
        <link href=\"assets/css/style.css\" rel=\"stylesheet\">
        <!-- Vendor CSS Files -->
        <link href=\"assets/vendor/aos/aos.css\" rel=\"stylesheet\">
        <link href=\"assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
        <link href=\"assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
        <link href=\"assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
        <link href=\"assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">
    {% endblock %}

</head>

<body>
{% block header %}
    {% if is_granted('ROLE_USER') %}
        <header id=\"header\">
            <div class=\"d-flex flex-column\">

                <div class=\"profile\">
                    <img src=\"assets/img/profile-img.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
                    <h1 class=\"text-light\"><a href=\"index.html\">Witaj, {{ app.user.username }}</a></h1>
                    <h1 class=\"text-light\"><a href=\"index.html\">Sanatorium Elda</a></h1>
                    <div class=\"social-links mt-3 text-center\">
                        <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                        <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                        <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                        <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
                        <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-logout\"></i></a>
                    </div>
                </div>

                <nav id=\"navbar\" class=\"nav-menu navbar\">
                    <ul>
                        <li><a href=\"{{ path('home') }}\" class=\"nav-link\"><i class=\"bx bx-home\"></i>
                                <span>Start</span></a></li>
                        <li><a href=\"{{ path('user_show') }}\" class=\"nav-link\"><i class=\"bx bx-user\"></i>
                                <span>Twoje dane</span></a></li>
                        <li><a href=\"{{ path('reservation_listing') }}\" class=\"nav-link\"> <i class=\"bx bx-file-blank\"></i>
                                <span>Rezerwacje</span></a></li>
                        <li><a href=\"{{ path('treatments_show') }}\" class=\"nav-link\"><i class=\"bx bx-book-content\"></i>
                                <span>Zabiegi</span></a></li>
                        <li><a href=\"\" class=\"nav-link\"><i class=\"bx bx-server\"></i>
                                <span>Kontakt</span></a></li>
                        <li><a href=\"{{ path('logout') }}\" class=\"nav-link\"><i class=\"bx bx-envelope\"></i>
                                <span>Wyloguj</span></a></li>

                    </ul>
                </nav>

                {% if is_granted('ROLE_ADMIN') %}
                {# ADMIN FUNCTIONS#}

                <div class=\"profile\">
                    <h1 class=\"text-light\"><a href=\"index.html\">ADMIN</a></h1>
                </div>
            </div>

            <nav id=\"navbar\" class=\"nav-menu navbar\">
                <ul>
                    <li><a href=\"{{ path('user_listing') }}\" class=\"nav-link\"><i class=\"bx bx-user\"></i>
                            <span>Użytkownicy</span></a>
                    </li>
                    <li><a href=\"{{ path('places_listing') }}\" class=\"nav-link\"><i class=\"bx bx-building-house\"></i>
                            <span>Obiekty</span></a>
                    </li>

                </ul>
            </nav>
            {% endif %}
        </header>
    {% endif %}
{% endblock header %}

{% block body %}

{% endblock body%}

<!-- Vendor JS Files -->
<script src=\"assets/vendor/purecounter/purecounter_vanilla.js\"></script>
<script src=\"assets/vendor/aos/aos.js\"></script>
<script src=\"assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
<script src=\"assets/vendor/glightbox/js/glightbox.min.js\"></script>
<script src=\"assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
<script src=\"assets/vendor/swiper/swiper-bundle.min.js\"></script>
<script src=\"assets/vendor/typed.js/typed.min.js\"></script>
<script src=\"assets/vendor/waypoints/noframework.waypoints.js\"></script>
<script src=\"assets/vendor/php-email-form/validate.js\"></script>

<!-- Template Main JS File -->
<script src=\"assets/js/main.js\"></script>
</body>

</html>
", "base.html.twig", "/var/www/templates/base.html.twig");
    }
}
