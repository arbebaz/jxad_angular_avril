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

/* error/index.html.twig */
class __TwigTemplate_483a54021868193ee837eaca4e0bb945 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/index.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/error.css"), "html", null, true);
        echo "\">

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

\t<body class=\"bg-purple\">

\t\t<div class=\"stars\">
\t\t\t<div class=\"custom-navbar\">
\t\t\t\t<div class=\"brand-logo\">
\t\t\t\t\t<img src=\"http://salehriaz.com/404Page/img/logo.svg\" width=\"80px\">
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"central-body\">
\t\t\t\t<img class=\"image-404\" src=\"http://salehriaz.com/404Page/img/404.svg\" width=\"300px\">
\t\t\t\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"btn-go-home\" target=\"_blank\">GO BACK HOME</a>
\t\t\t</div>
\t\t\t<div class=\"objects\">
\t\t\t\t<img class=\"object_rocket\" src=\"http://salehriaz.com/404Page/img/rocket.svg\" width=\"40px\">
\t\t\t\t<div class=\"earth-moon\">
\t\t\t\t\t<img class=\"object_earth\" src=\"http://salehriaz.com/404Page/img/earth.svg\" width=\"100px\">
\t\t\t\t\t<img class=\"object_moon\" src=\"http://salehriaz.com/404Page/img/moon.svg\" width=\"80px\">
\t\t\t\t</div>
\t\t\t\t<div class=\"box_astronaut\">
\t\t\t\t\t<img class=\"object_astronaut\" src=\"http://salehriaz.com/404Page/img/astronaut.svg\" width=\"140px\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"glowing_stars\">
\t\t\t\t<div class=\"star\"></div>
\t\t\t\t<div class=\"star\"></div>
\t\t\t\t<div class=\"star\"></div>
\t\t\t\t<div class=\"star\"></div>
\t\t\t\t<div class=\"star\"></div>

\t\t\t</div>

\t\t</div>

\t</body>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "error/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  69 => 4,  50 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"{{ asset('css/error.css') }}\">

{% block body %}


\t<body class=\"bg-purple\">

\t\t<div class=\"stars\">
\t\t\t<div class=\"custom-navbar\">
\t\t\t\t<div class=\"brand-logo\">
\t\t\t\t\t<img src=\"http://salehriaz.com/404Page/img/logo.svg\" width=\"80px\">
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"central-body\">
\t\t\t\t<img class=\"image-404\" src=\"http://salehriaz.com/404Page/img/404.svg\" width=\"300px\">
\t\t\t\t<a href=\"{{ path('app_home') }}\" class=\"btn-go-home\" target=\"_blank\">GO BACK HOME</a>
\t\t\t</div>
\t\t\t<div class=\"objects\">
\t\t\t\t<img class=\"object_rocket\" src=\"http://salehriaz.com/404Page/img/rocket.svg\" width=\"40px\">
\t\t\t\t<div class=\"earth-moon\">
\t\t\t\t\t<img class=\"object_earth\" src=\"http://salehriaz.com/404Page/img/earth.svg\" width=\"100px\">
\t\t\t\t\t<img class=\"object_moon\" src=\"http://salehriaz.com/404Page/img/moon.svg\" width=\"80px\">
\t\t\t\t</div>
\t\t\t\t<div class=\"box_astronaut\">
\t\t\t\t\t<img class=\"object_astronaut\" src=\"http://salehriaz.com/404Page/img/astronaut.svg\" width=\"140px\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"glowing_stars\">
\t\t\t\t<div class=\"star\"></div>
\t\t\t\t<div class=\"star\"></div>
\t\t\t\t<div class=\"star\"></div>
\t\t\t\t<div class=\"star\"></div>
\t\t\t\t<div class=\"star\"></div>

\t\t\t</div>

\t\t</div>

\t</body>


{% endblock %}
", "error/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/error/index.html.twig");
    }
}
