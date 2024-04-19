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

/* parole/index.html.twig */
class __TwigTemplate_27df37c666e35024680be5ba27745058 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parole/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parole/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "parole/index.html.twig", 1);
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

        echo "Hello MusiqueController!
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
\t";
        // line 9
        echo "
\t<img
\tclass=\"d-flex m-auto\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO/JxadSf.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:300px; height:300px\">

\t";
        // line 14
        echo "
\t<div class=\"container\">
\t\t<div class=\"parole flex-column p-4 mb-4 mt-4\">
\t\t\t<div>
\t\t\t\t<h3 class=\"ms-4 my-2 text-center mb-4\">Paroles 🎤 :</h3>
\t\t\t</div>
\t\t\t<div class=\"d-flex flex-wrap justify-content-start\">
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22) == "2")) {
                // line 23
                echo "\t\t\t\t\t\t<div class=\"card mb-3\" style=\"max-width: 540px; width: 30rem;\">
\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 26))), "html", null, true);
                echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 30), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 32), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 33), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 36
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                    echo "\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    echo "\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t</div>
\t\t\t</div>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "parole/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 48,  166 => 47,  158 => 41,  152 => 39,  146 => 37,  144 => 36,  138 => 33,  134 => 32,  129 => 30,  122 => 26,  117 => 23,  114 => 22,  110 => 21,  101 => 14,  96 => 11,  92 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MusiqueController!
{% endblock %}

{% block body %}

\t{# #########       LOGO       ########### #}

\t<img
\tclass=\"d-flex m-auto\" src=\"{{ asset('images/LOGO/JxadSf.png')}}\" alt=\"\" style=\"width:300px; height:300px\">

\t{#### Card Paroles ########}

\t<div class=\"container\">
\t\t<div class=\"parole flex-column p-4 mb-4 mt-4\">
\t\t\t<div>
\t\t\t\t<h3 class=\"ms-4 my-2 text-center mb-4\">Paroles 🎤 :</h3>
\t\t\t</div>
\t\t\t<div class=\"d-flex flex-wrap justify-content-start\">
\t\t\t\t{% for item in produits %}
\t\t\t\t\t{% if item.IdCategorie.id == '2' %}
\t\t\t\t\t\t<div class=\"card mb-3\" style=\"max-width: 540px; width: 30rem;\">
\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/' ~ item.fichier) }}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ item.titre }}</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t\t{{ item.description }}</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">{{ item.prix }}
\t\t\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"{{ path('post_cart', { 'id': item.id }) }}\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"{{ path('app_login') }}\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t</div>

\t\t{% endblock %}
", "parole/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/parole/index.html.twig");
    }
}
