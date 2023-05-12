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

/* Welcome/welcome.twig */
class __TwigTemplate_ca1ed2d5dbc2746fa958943755357cd1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Welcome/welcome.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Welcome/welcome.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Welcome/welcome.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo " <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"assets/welcome/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/welcome/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"assets/welcome/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"assets/welcome/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/welcome/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/welcome/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
  <link href=\"assets/welcome/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"assets/welcome/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"assets/css/style.css\" rel=\"stylesheet\">

  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "      <header id=\"header\">
    <div class=\"d-flex flex-column\">

      <div class=\"profile\">
        <img src=\"assets/welcome/img/profile-img.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
        <h1 class=\"text-light\"><a href=\"index.html\">Alex Smith</a></h1>
        <div class=\"social-links mt-3 text-center\">
          <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
          <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
          <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
          <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
          <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
        </div>
      </div>

      <nav id=\"navbar\" class=\"nav-menu navbar\">
        <ul>
          <li><a href=\"#hero\" class=\"nav-link scrollto active\"><i class=\"bx bx-home\"></i> <span>Home</span></a></li>
          <li><a href=\"#about\" class=\"nav-link scrollto\"><i class=\"bx bx-user\"></i> <span>About</span></a></li>
          <li><a href=\"#resume\" class=\"nav-link scrollto\"><i class=\"bx bx-file-blank\"></i> <span>Resume</span></a></li>
          <li><a href=\"#portfolio\" class=\"nav-link scrollto\"><i class=\"bx bx-book-content\"></i> <span>Portfolio</span></a></li>
          <li><a href=\"#services\" class=\"nav-link scrollto\"><i class=\"bx bx-server\"></i> <span>Services</span></a></li>
          <li><a href=\"#contact\" class=\"nav-link scrollto\"><i class=\"bx bx-envelope\"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Welcome/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  105 => 31,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block head %}
 <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"assets/welcome/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/welcome/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"assets/welcome/vendor/aos/aos.css\" rel=\"stylesheet\">
  <link href=\"assets/welcome/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"assets/welcome/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
  <link href=\"assets/welcome/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
  <link href=\"assets/welcome/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
  <link href=\"assets/welcome/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"assets/css/style.css\" rel=\"stylesheet\">

  
{% endblock %}

{% block body %}
      <header id=\"header\">
    <div class=\"d-flex flex-column\">

      <div class=\"profile\">
        <img src=\"assets/welcome/img/profile-img.jpg\" alt=\"\" class=\"img-fluid rounded-circle\">
        <h1 class=\"text-light\"><a href=\"index.html\">Alex Smith</a></h1>
        <div class=\"social-links mt-3 text-center\">
          <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
          <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
          <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
          <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
          <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
        </div>
      </div>

      <nav id=\"navbar\" class=\"nav-menu navbar\">
        <ul>
          <li><a href=\"#hero\" class=\"nav-link scrollto active\"><i class=\"bx bx-home\"></i> <span>Home</span></a></li>
          <li><a href=\"#about\" class=\"nav-link scrollto\"><i class=\"bx bx-user\"></i> <span>About</span></a></li>
          <li><a href=\"#resume\" class=\"nav-link scrollto\"><i class=\"bx bx-file-blank\"></i> <span>Resume</span></a></li>
          <li><a href=\"#portfolio\" class=\"nav-link scrollto\"><i class=\"bx bx-book-content\"></i> <span>Portfolio</span></a></li>
          <li><a href=\"#services\" class=\"nav-link scrollto\"><i class=\"bx bx-server\"></i> <span>Services</span></a></li>
          <li><a href=\"#contact\" class=\"nav-link scrollto\"><i class=\"bx bx-envelope\"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
{% endblock %}
", "Welcome/welcome.twig", "D:\\projects\\witryna\\templates\\Welcome\\welcome.twig");
    }
}
