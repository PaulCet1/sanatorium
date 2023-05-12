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

/* Home/home.twig */
class __TwigTemplate_6f27680f890fd559f2ce6b7ccf4973d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/home.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/home.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Home/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Witaj, ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
          <p>Skorzystaj z naszej bogatej oferty</p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4\" data-aos=\"fade-right\">
            <img src=\"assets/img/profile-img.jpg\" class=\"img-fluid\" alt=\"\">
          </div>
          <div class=\"col-lg-8 pt-4 pt-lg-0 content\" data-aos=\"fade-left\">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <p class=\"fst-italic\">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <ul>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>City:</strong> <span>New York, USA</span></li>
                </ul>
              </div>
              <div class=\"col-lg-6\">
                <ul>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Age:</strong> <span>30</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
</main>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}


{% block body %}
<main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Witaj, {{ app.user.username }}</h2>
          <p>Skorzystaj z naszej bogatej oferty</p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4\" data-aos=\"fade-right\">
            <img src=\"assets/img/profile-img.jpg\" class=\"img-fluid\" alt=\"\">
          </div>
          <div class=\"col-lg-8 pt-4 pt-lg-0 content\" data-aos=\"fade-left\">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <p class=\"fst-italic\">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <ul>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>City:</strong> <span>New York, USA</span></li>
                </ul>
              </div>
              <div class=\"col-lg-6\">
                <ul>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Age:</strong> <span>30</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                  <li><i class=\"bi bi-chevron-right\"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
</main>
    
{% endblock body %}





", "Home/home.twig", "/home/pawelcetnarowski/Projects/sanatorium/templates/Home/home.twig");
    }
}
