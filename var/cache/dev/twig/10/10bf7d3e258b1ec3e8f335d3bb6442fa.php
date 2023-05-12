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

/* Home/welcome.twig */
class __TwigTemplate_a7483ba398b1ea5425d23b8a7a2f5bd9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/welcome.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Home/welcome.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Home/welcome.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "






  <section id=\"hero\" class=\"d-flex flex-column justify-content-center align-items-center\">
    
      
      
    <div class=\"hero-container\" data-aos=\"fade-in\">
      <h1>Sanatorium Elda</h1>
      <p>Oferujemy <span class=\"typed\" data-typed-items=\"rehabilitacje, Hotel Premium, usługi medyczne\"></span></p>
      <div class=\"row\">
          <div class=\"col\">
          <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" type=\"button\" class=\"btn btn-outline-light\">Zaloguj się</a>
          </div>
          
          <div class=\"col\">    
              
          </div>                   
          <div class=\"col\">
              
          </div>
          
          <div class=\"col\">
          <a href=\"#\" type=\"button\" class=\"btn btn-outline-light\">Informacje</a>
          </div>
          
      </div>
    </div>
      
  </section>




";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Home/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}







  <section id=\"hero\" class=\"d-flex flex-column justify-content-center align-items-center\">
    
      
      
    <div class=\"hero-container\" data-aos=\"fade-in\">
      <h1>Sanatorium Elda</h1>
      <p>Oferujemy <span class=\"typed\" data-typed-items=\"rehabilitacje, Hotel Premium, usługi medyczne\"></span></p>
      <div class=\"row\">
          <div class=\"col\">
          <a href=\"{{ path('login') }}\" type=\"button\" class=\"btn btn-outline-light\">Zaloguj się</a>
          </div>
          
          <div class=\"col\">    
              
          </div>                   
          <div class=\"col\">
              
          </div>
          
          <div class=\"col\">
          <a href=\"#\" type=\"button\" class=\"btn btn-outline-light\">Informacje</a>
          </div>
          
      </div>
    </div>
      
  </section>




{% endblock %}", "Home/welcome.twig", "/var/www/templates/Home/welcome.twig");
    }
}
