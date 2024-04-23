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

/* produits/produits_details.html.twig */
class __TwigTemplate_8edcc67101bd3c5a7a652b13a744841c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/produits_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/produits_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produits/produits_details.html.twig", 1);
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
\t<div class=\"container\">

\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 8
            echo "\t\t\t<div class=\"alert alert-success col-md-6 mx-auto text-center disparition\">
\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
\t\t<div class=\"example-wrapper text-center mb-3\">
\t\t\t<h1>Hello
\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t! ⏯️</h1>
\t\t</div>

\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits");
        echo "\" class=\"btn btn-dark\">Retour</a>


\t\t<div class=\"card text-center\" style=\"width: 30rem;\">
\t\t\t<div class=\"card-header\">

\t\t\t\t<p class=\"card-text\">ARTISTE :
\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>

\t\t\t</div>

\t\t\t<div class=\"card-body\">

\t\t\t\t<p class=\"card-title\">ID BDD :
\t\t\t\t\t";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"card-text\">CATÉGORIE :
\t\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 35, $this->source); })()), "IdCategorie", [], "any", false, false, false, 35), "nom", [], "any", false, false, false, 35), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"card-text\">TITRE :
\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 37, $this->source); })()), "titre", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"card-text\">PRIX :
\t\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 39, $this->source); })()), "prix", [], "any", false, false, false, 39), "html", null, true);
        echo "
\t\t\t\t\teuros.</p>
\t\t\t\t<p class=\"card-text\">FICHIER :
\t\t\t\t\t";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 42, $this->source); })()), "fichier", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>

\t\t\t</div>

\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produits/produits_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 42,  136 => 39,  131 => 37,  126 => 35,  121 => 33,  111 => 26,  101 => 19,  94 => 15,  89 => 12,  80 => 9,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<div class=\"container\">

\t\t{% for notification in app.flashes('Success') %}
\t\t\t<div class=\"alert alert-success col-md-6 mx-auto text-center disparition\">
\t\t\t\t{{ notification }}
\t\t\t</div>
\t\t{% endfor %}

\t\t<div class=\"example-wrapper text-center mb-3\">
\t\t\t<h1>Hello
\t\t\t\t{{ controller_name }}
\t\t\t\t! ⏯️</h1>
\t\t</div>

\t\t<a href=\"{{ path('app_produits') }}\" class=\"btn btn-dark\">Retour</a>


\t\t<div class=\"card text-center\" style=\"width: 30rem;\">
\t\t\t<div class=\"card-header\">

\t\t\t\t<p class=\"card-text\">ARTISTE :
\t\t\t\t\t{{produits.description}}</p>

\t\t\t</div>

\t\t\t<div class=\"card-body\">

\t\t\t\t<p class=\"card-title\">ID BDD :
\t\t\t\t\t{{produits.id}}</p>
\t\t\t\t<p class=\"card-text\">CATÉGORIE :
\t\t\t\t\t{{produits.IdCategorie.nom}}</p>
\t\t\t\t<p class=\"card-text\">TITRE :
\t\t\t\t\t{{produits.titre}}</p>
\t\t\t\t<p class=\"card-text\">PRIX :
\t\t\t\t\t{{produits.prix}}
\t\t\t\t\teuros.</p>
\t\t\t\t<p class=\"card-text\">FICHIER :
\t\t\t\t\t{{produits.fichier}}</p>

\t\t\t</div>

\t\t</div>
\t</div>

{% endblock %}
", "produits/produits_details.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/produits/produits_details.html.twig");
    }
}
