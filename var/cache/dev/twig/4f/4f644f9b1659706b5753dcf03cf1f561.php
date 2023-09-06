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

/* Reservation/listing.twig */
class __TwigTemplate_c9f6d920401d6fd390657ee891804121 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Reservation/listing.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Reservation/listing.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Reservation/listing.twig", 1);
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
        echo "    <main id=\"main\">
    <section id=\"about\" class=\"about\">
        <div class=\"container\">

            <div class=\"section-title\">
                <h2>Rezerwacje</h2>
                <p>Jeżeli widzisz błąd, prosimy o kontakt z administratorem systemu!</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-8 pt-4 pt-lg-0 content\" data-aos=\"fade-left\">
                    <h2>Twój pobyt</h2>

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <ul>
                                <li><i class=\"bi bi-chevron-right\"></i> <strong>Miejsce pobytu:</strong> <span>Place</span></li>
                                <li><i class=\"bi bi-chevron-right\"></i> <strong>Termin pobytu:</strong> <span>Termin</span></li>
                                <li><i class=\"bi bi-chevron-right\"></i> <strong>Zakwaterowanie</strong> <span>Zakwaterowanie</span></li>
                                <li><i class=\"bi bi-chevron-right\"></i> <strong>Plan pobytu:</strong> <span>Rodzaj planu</span></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        W razie wątplliwości związanych z zamówieniem skontaktuj się z nami!
                    </p>
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
        return "Reservation/listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
    <main id=\"main\">
    <section id=\"about\" class=\"about\">
        <div class=\"container\">

            <div class=\"section-title\">
                <h2>Rezerwacje</h2>
                <p>Jeżeli widzisz błąd, prosimy o kontakt z administratorem systemu!</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-8 pt-4 pt-lg-0 content\" data-aos=\"fade-left\">
                    <h2>Twój pobyt</h2>

                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <ul>
                                <li><i class=\"bi bi-chevron-right\"></i> <strong>Miejsce pobytu:</strong> <span>Place</span></li>
                                <li><i class=\"bi bi-chevron-right\"></i> <strong>Termin pobytu:</strong> <span>Termin</span></li>
                                <li><i class=\"bi bi-chevron-right\"></i> <strong>Zakwaterowanie</strong> <span>Zakwaterowanie</span></li>
                                <li><i class=\"bi bi-chevron-right\"></i> <strong>Plan pobytu:</strong> <span>Rodzaj planu</span></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        W razie wątplliwości związanych z zamówieniem skontaktuj się z nami!
                    </p>
                </div>
            </div>

        </div>
    </section>
{% endblock %}", "Reservation/listing.twig", "/var/www/templates/Reservation/listing.twig");
    }
}
