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

/* artistes/index.html.twig */
class __TwigTemplate_44cc67a4948557a930c455ade5d134cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artistes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artistes/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artistes/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ArtistesController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        // line 7
        echo "

\t<div class=\"container\">
\t\t<div class=\"parole flex-column p-4 my-5\">
\t\t\t<div>
\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Artistes 🦋:</h3>
\t\t\t</div>
\t\t\t<div class=\"d-flex flex-wrap justify-content-evenly mt-4\">
\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/casque.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/garcon.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/me.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/sunset.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/smile.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/sisters.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "artistes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 36,  129 => 32,  122 => 28,  115 => 24,  108 => 20,  101 => 16,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ArtistesController!{% endblock %}

{% block body %}
\t{# #########       ARTISTES       ########### #}


\t<div class=\"container\">
\t\t<div class=\"parole flex-column p-4 my-5\">
\t\t\t<div>
\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Artistes 🦋:</h3>
\t\t\t</div>
\t\t\t<div class=\"d-flex flex-wrap justify-content-evenly mt-4\">
\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/casque.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/garcon.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/me.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/sunset.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/smile.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/sisters.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


{% endblock %}
", "artistes/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/artistes/index.html.twig");
    }
}
