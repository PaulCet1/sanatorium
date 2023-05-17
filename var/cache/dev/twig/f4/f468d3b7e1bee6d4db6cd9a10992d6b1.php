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
class __TwigTemplate_8945c2c57994d56ca25d99c34fcf4dee extends Template
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



  <!-- ======= Facts Section ======= -->
    <section id=\"facts\" class=\"facts\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>O nas</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class=\"row no-gutters\">

          <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\" data-aos=\"fade-up\">
            <div class=\"count-box\">
              <i class=\"bi bi-emoji-smile\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"10000\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p><strong>Zadowolonych klientów</strong> którzy do nas wracają</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"count-box\">
              <i class=\"bi bi-journal-richtext\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"count-box\">
              <i class=\"bi bi-headset\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"1453\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"count-box\">
              <i class=\"bi bi-people\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"32\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

  

 <!-- ======= Resume Section ======= -->
    <section id=\"resume\" class=\"resume\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Rezerwacje</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-6\" data-aos=\"fade-up\">
            <h3 class=\"resume-title\">Sumary</h3>
            <div class=\"resume-item pb-0\">
              <h4>PC</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
            </div>

            <h3 class=\"resume-title\">Education</h3>
            <div class=\"resume-item\">
              <h4>Master of Fine Arts &amp; Graphic Design</h4>
              <h5>2015 - 2016</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
            </div>
            <div class=\"resume-item\">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div>
          </div>
          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <h3 class=\"resume-title\">Professional Experience</h3>
            <div class=\"resume-item\">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from \$2,000 - \$25,000</li>
              </ul>
            </div>
            <div class=\"resume-item\">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

</main>


<footer id=\"footer\">
  <div class=\"container\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>Sanatorium</span></strong>
    </div>
    <div class=\"credits\">
       Designed by <a href=\"#\">PC</a>
    </div>
  </div>
</footer><!-- End  Footer -->
    
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



  <!-- ======= Facts Section ======= -->
    <section id=\"facts\" class=\"facts\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>O nas</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class=\"row no-gutters\">

          <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\" data-aos=\"fade-up\">
            <div class=\"count-box\">
              <i class=\"bi bi-emoji-smile\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"10000\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p><strong>Zadowolonych klientów</strong> którzy do nas wracają</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"count-box\">
              <i class=\"bi bi-journal-richtext\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"count-box\">
              <i class=\"bi bi-headset\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"1453\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-md-flex align-items-md-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"count-box\">
              <i class=\"bi bi-people\"></i>
              <span data-purecounter-start=\"0\" data-purecounter-end=\"32\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

  

 <!-- ======= Resume Section ======= -->
    <section id=\"resume\" class=\"resume\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2>Rezerwacje</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-6\" data-aos=\"fade-up\">
            <h3 class=\"resume-title\">Sumary</h3>
            <div class=\"resume-item pb-0\">
              <h4>PC</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
            </div>

            <h3 class=\"resume-title\">Education</h3>
            <div class=\"resume-item\">
              <h4>Master of Fine Arts &amp; Graphic Design</h4>
              <h5>2015 - 2016</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
            </div>
            <div class=\"resume-item\">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div>
          </div>
          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <h3 class=\"resume-title\">Professional Experience</h3>
            <div class=\"resume-item\">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from \$2,000 - \$25,000</li>
              </ul>
            </div>
            <div class=\"resume-item\">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

</main>


<footer id=\"footer\">
  <div class=\"container\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>Sanatorium</span></strong>
    </div>
    <div class=\"credits\">
       Designed by <a href=\"#\">PC</a>
    </div>
  </div>
</footer><!-- End  Footer -->
    
{% endblock body %}





", "Home/home.twig", "/var/www/templates/Home/home.twig");
    }
}
