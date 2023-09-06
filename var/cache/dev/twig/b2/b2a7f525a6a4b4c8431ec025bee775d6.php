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

/* User/show.twig */
class __TwigTemplate_589a3fbb6adb14435518e4c2ca5fd8b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/show.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "User/show.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "User/show.twig", 1);
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
    <main id=\"main\">
        <section id=\"about\" class=\"about\">
            <div class=\"container\">

                <div class=\"section-title\">
                    <h2>Twoje konto</h2>
                    <p>Jeżeli widzisz błąd, prosimy o kontakt z administratorem systemu!</p>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-4\" data-aos=\"fade-right\">
                        <img src=\"assets/img/profile-img.jpg\" class=\"img-fluid\" alt=\"\">
                    </div>
                    <div class=\"col-lg-8 pt-4 pt-lg-0 content\" data-aos=\"fade-left\">
                        <h3>Twoje dane osobiste</h3>

                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <ul>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Imię i nazwisko:</strong> <span>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "</span></li>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Adres email:</strong> <span>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), "html", null, true);
        echo "</span></li>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Rodzaj użytkownika:</strong> <span>REGULAR</span></li>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Data urodzenia:</strong> <span>11.11.2011</span></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-6\">
                                <ul>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Telefon kontaktowy:</strong> <span>+00 000 000 000</span></li>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Status:</strong> <span>Master</span></li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Podczas tworzenia konta wyraziłeś zgodę na przetwarzanie Twoich danych osobowych.
                        </p>
                    </div>
                </div>

            </div>
        </section>

    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "User/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  90 => 23,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}

    <main id=\"main\">
        <section id=\"about\" class=\"about\">
            <div class=\"container\">

                <div class=\"section-title\">
                    <h2>Twoje konto</h2>
                    <p>Jeżeli widzisz błąd, prosimy o kontakt z administratorem systemu!</p>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-4\" data-aos=\"fade-right\">
                        <img src=\"assets/img/profile-img.jpg\" class=\"img-fluid\" alt=\"\">
                    </div>
                    <div class=\"col-lg-8 pt-4 pt-lg-0 content\" data-aos=\"fade-left\">
                        <h3>Twoje dane osobiste</h3>

                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <ul>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Imię i nazwisko:</strong> <span>{{ user.id }}</span></li>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Adres email:</strong> <span>{{ user.email }}</span></li>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Rodzaj użytkownika:</strong> <span>REGULAR</span></li>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Data urodzenia:</strong> <span>11.11.2011</span></li>
                                </ul>
                            </div>
                            <div class=\"col-lg-6\">
                                <ul>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Telefon kontaktowy:</strong> <span>+00 000 000 000</span></li>
                                    <li><i class=\"bi bi-chevron-right\"></i> <strong>Status:</strong> <span>Master</span></li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Podczas tworzenia konta wyraziłeś zgodę na przetwarzanie Twoich danych osobowych.
                        </p>
                    </div>
                </div>

            </div>
        </section>

    </main>
{% endblock %}", "User/show.twig", "/var/www/templates/User/show.twig");
    }
}
