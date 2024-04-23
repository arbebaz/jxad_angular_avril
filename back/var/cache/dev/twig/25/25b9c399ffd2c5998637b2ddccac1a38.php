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

/* lookup/index.html.twig */
class __TwigTemplate_6a168605efd0a08bfc74ec3404e745a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lookup/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lookup/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lookup/index.html.twig", 1);
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

        echo "Hello LookupController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<div class=\"container\">

\t\t";
        // line 11
        echo "
\t\t<div class=\"container-fluid my-4\">
\t\t\t<form class=\"d-flex m-auto\" role=\"search\" action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lookup");
        echo "\">
\t\t\t\t<input class=\"form-control me-2\" type=\"search\" placeholder=\"Recherche..\" aria-label=\"Search\" name=\"search\">
\t\t\t\t<button class=\"btn btn-dark\" type=\"submit\">Rechercher</button>
\t\t\t</form>
\t\t</div>


\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21) == "1")) {
                // line 22
                echo "
\t\t\t<div class=\"card\" style=\"width: 25rem; height: 25rem\">

\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t<h5 class=\"card-title\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 26), "html", null, true);
                echo "</h5>

\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 29), "html", null, true);
                echo "</p>
\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true);
                echo "</p>

\t\t\t\t\t<div>
\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"\">
\t\t\t\t\t\t\t<source src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("audio/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 35))), "html", null, true);
                echo "\" type=\"audio/mp3\">
\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t</audio>
\t\t\t\t\t</div>


\t\t\t\t\t<p class=\"card-text fw-bold\">";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 41), "html", null, true);
                echo "
\t\t\t\t\t\teuros.</p>
\t\t\t\t\t<div class=\"ms-3 mt-3\">
\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 49
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lookup/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 51,  162 => 49,  154 => 44,  148 => 41,  139 => 35,  132 => 31,  127 => 29,  121 => 26,  115 => 22,  112 => 21,  108 => 20,  98 => 13,  94 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello LookupController!
{% endblock %}

{% block body %}

<div class=\"container\">

\t\t{# #########       Barre de recherche       ########### #}

\t\t<div class=\"container-fluid my-4\">
\t\t\t<form class=\"d-flex m-auto\" role=\"search\" action=\"{{ path('app_lookup')}}\">
\t\t\t\t<input class=\"form-control me-2\" type=\"search\" placeholder=\"Recherche..\" aria-label=\"Search\" name=\"search\">
\t\t\t\t<button class=\"btn btn-dark\" type=\"submit\">Rechercher</button>
\t\t\t</form>
\t\t</div>


\t{% for item in produits %}
\t\t{% if item.IdCategorie.id == '1' %}

\t\t\t<div class=\"card\" style=\"width: 25rem; height: 25rem\">

\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t<h5 class=\"card-title\">{{item.titre}}</h5>

\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t{{item.description}}</p>
\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t{{item.IdCategorie.nom}}</p>

\t\t\t\t\t<div>
\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"\">
\t\t\t\t\t\t\t<source src=\"{{ asset('audio/' ~ item.fichier) }}\" type=\"audio/mp3\">
\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t</audio>
\t\t\t\t\t</div>


\t\t\t\t\t<p class=\"card-text fw-bold\">{{item.prix}}
\t\t\t\t\t\teuros.</p>
\t\t\t\t\t<div class=\"ms-3 mt-3\">
\t\t\t\t\t\t<a id=\"btnPayer\" href=\"{{ path('post_cart', { 'id': item.id }) }}\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}

\t{% endfor %}

\t</div>
{% endblock %}
", "lookup/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/lookup/index.html.twig");
    }
}
