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

/* Core/left-nav.twig */
class __TwigTemplate_f1bf307b104533d2335d337c2ffca8f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Core/left-nav.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Core/left-nav.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "  
<header id=\"header\">
    <div class=\"d-flex flex-column\">

      
        

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
        return "Core/left-nav.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block header %}
  
<header id=\"header\">
    <div class=\"d-flex flex-column\">

      
        

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
    
{% endblock header %}", "Core/left-nav.twig", "/home/paul-cetnarowski/Pulpit/Projects/sanatorium/templates/Core/left-nav.twig");
    }
}
