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

/* User/Auth/login.twig */
class __TwigTemplate_f688331d164d16a50092d88417d139a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Auth/login.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Auth/login.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "User/Auth/login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<section class=\"contact\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Logowanie</h2>
          <p>Zaloguj się do systemu!</p>
        </div>
        <div class=\"row\" data-aos=\"fade-in\">
          <div class=\"col-lg-5 d-flex align-items-stretch\">
              
    ";
        // line 15
        $this->loadTemplate("Core/display_alerts.twig", "User/Auth/login.twig", 15)->display($context);
        // line 16
        echo "                ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "                    <div class=\"alert alert-danger\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageKey", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 20
        echo "           
<form action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\">
  <!-- Email input -->
  <div class=\"form-outline mb-4\">
    <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"Email\" />
    
  </div>

  <!-- Password input -->
  <div class=\"form-outline mb-4\">
    <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Hasło\" />
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class=\"row mb-4\">
    <div class=\"col d-flex justify-content-center\">
      <!-- Checkbox -->
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"form2Example31\" checked />
        <label class=\"form-check-label\" for=\"\"> Zapamiętaj mnie </label>
      </div>
    </div>

    <div class=\"col\">
      <!-- Simple link -->
      <a href=\"#!\">Zapomniałem hasła</a>
    </div>
  </div>

  <!-- Submit button -->
  <div class=\"row\">
  <button type=\"submit\" class=\"btn btn-primary btn-block mb-4\">Zaloguj się </button>
  </div>
</div>
</form>
              
            </div>
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
        return "User/Auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  95 => 20,  89 => 18,  86 => 17,  83 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

<section class=\"contact\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Logowanie</h2>
          <p>Zaloguj się do systemu!</p>
        </div>
        <div class=\"row\" data-aos=\"fade-in\">
          <div class=\"col-lg-5 d-flex align-items-stretch\">
              
    {% include \"Core/display_alerts.twig\" %}
                {% if error %}
                    <div class=\"alert alert-danger\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}           
<form action=\"{{ path('login') }}\" method=\"POST\">
  <!-- Email input -->
  <div class=\"form-outline mb-4\">
    <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"Email\" />
    
  </div>

  <!-- Password input -->
  <div class=\"form-outline mb-4\">
    <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Hasło\" />
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class=\"row mb-4\">
    <div class=\"col d-flex justify-content-center\">
      <!-- Checkbox -->
      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"form2Example31\" checked />
        <label class=\"form-check-label\" for=\"\"> Zapamiętaj mnie </label>
      </div>
    </div>

    <div class=\"col\">
      <!-- Simple link -->
      <a href=\"#!\">Zapomniałem hasła</a>
    </div>
  </div>

  <!-- Submit button -->
  <div class=\"row\">
  <button type=\"submit\" class=\"btn btn-primary btn-block mb-4\">Zaloguj się </button>
  </div>
</div>
</form>
              
            </div>
          </div>
        </div>
      </div>
    </section>               


      

               
{% endblock %}


            
", "User/Auth/login.twig", "/home/pawelcetnarowski/Projects/sanatorium/templates/User/Auth/login.twig");
    }
}
