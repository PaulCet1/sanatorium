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

/* User/Auth/registration.twig */
class __TwigTemplate_083d7fc70c3bba7fb8eb24fef533805d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Auth/registration.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/Auth/registration.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "User/Auth/registration.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                ";
        // line 7
        $this->loadTemplate("Core/display_alerts.twig", "User/Auth/registration.twig", 7)->display($context);
        // line 8
        echo "                <form method=\"POST\">
                    <div class=\"form-group\">
                        <label for=\"username\">Login:</label>
                        <input type=\"text\" name=\"username\" class=\"form-control\" />
                    </div>  
                     <div class=\"form-group\">
                        <label for=\"email\">E-mail:</label>
                        <input type=\"text\" name=\"email\" class=\"form-control\" />
                    </div> 
                     <div class=\"form-group\">
                        <label for=\"password\">Hasło:</label>
                        <input type=\"password\" name=\"password\" class=\"form-control\" />
                    </div> 
                     <div class=\"form-group\">
                        <label for=\"repeatPassword\">Powtórz hasło</label>
                        <input type=\"password\" name=\"repeatPassword\" class=\"form-control\" />
                    </div> 
                     <div class=\"form-group\">
                        <input type=\"submit\" name=\"Zarejestruj\" class=\"btn btn-primary\" />
                    </div> 
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "User/Auth/registration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6\">
                {% include 'Core/display_alerts.twig' %}
                <form method=\"POST\">
                    <div class=\"form-group\">
                        <label for=\"username\">Login:</label>
                        <input type=\"text\" name=\"username\" class=\"form-control\" />
                    </div>  
                     <div class=\"form-group\">
                        <label for=\"email\">E-mail:</label>
                        <input type=\"text\" name=\"email\" class=\"form-control\" />
                    </div> 
                     <div class=\"form-group\">
                        <label for=\"password\">Hasło:</label>
                        <input type=\"password\" name=\"password\" class=\"form-control\" />
                    </div> 
                     <div class=\"form-group\">
                        <label for=\"repeatPassword\">Powtórz hasło</label>
                        <input type=\"password\" name=\"repeatPassword\" class=\"form-control\" />
                    </div> 
                     <div class=\"form-group\">
                        <input type=\"submit\" name=\"Zarejestruj\" class=\"btn btn-primary\" />
                    </div> 
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "User/Auth/registration.twig", "/home/paul-cetnarowski/Pulpit/Projects/sanatorium/templates/User/Auth/registration.twig");
    }
}
