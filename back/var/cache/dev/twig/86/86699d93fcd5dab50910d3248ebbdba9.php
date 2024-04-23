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

/* cart/index.html.twig */
class __TwigTemplate_3d20251a5ca313b03b7a96653cb9a8a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Hello CartController!";
        
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
        echo "\t<div class=\"container\">
\t\t<div>
\t\t\t<a class=\"btn btn-dark mb-4\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Retour</a>
\t\t</div>

\t\t<div class=\"card text-center\" style=\"height: auto; width: 75%\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3>Votre panier ⚡️</h3>
\t\t\t</div>

\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t<div class=\"fw-bold mx-4 my-4\">
\t\t\t\t\t<p>Nombre de produit : ";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 18, $this->source); })())), "html", null, true);
        echo ".</p>
\t\t\t\t</div>

\t\t\t\t";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 21, $this->source); })())) > 0)) {
            // line 22
            echo "\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t<a class=\"btn btn-danger text-center my-3 mx-4\" style=\"width: 12rem\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_all_cart");
            echo "\">
\t\t\t\t\t\t\tVider mon panier</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
            // line 28
            $context["total"] = null;
            // line 29
            echo "
\t\t\t\t<div class=\"trait border border-dark m-auto my-5\" style=\"width: 20rem\"></div>

\t\t\t\t<div class=\"row d-flex justify-content-center my-4\">
\t\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 34
                echo "\t\t\t\t\t\t";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 34, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "produits", [], "any", false, false, false, 34), "prix", [], "any", false, false, false, 34) * twig_get_attribute($this->env, $this->source, $context["value"], "quantity", [], "any", false, false, false, 34)));
                // line 35
                echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card mb-4\" style=\"width: 15rem; height: 13rem\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Titre: ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "produits", [], "any", false, false, false, 38), "titre", [], "any", false, false, false, 38), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Artiste: ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "produits", [], "any", false, false, false, 39), "description", [], "any", false, false, false, 39), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Catégorie: ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "produits", [], "any", false, false, false, 40), "IdCategorie", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">Prix: ";
                // line 41
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "produits", [], "any", false, false, false, 41), "prix", [], "any", false, false, false, 41) * twig_get_attribute($this->env, $this->source, $context["value"], "quantity", [], "any", false, false, false, 41)), 2, ",", "."), "html", null, true);
                echo " euros.</p>
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "produits", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/poubelle.png"), "html", null, true);
                echo "\" alt=\"\" class=\"me-2\" style=\"width:20px\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t\t\t</div>

\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<p class=\"fw-bold card-text\">Prix total : ";
            // line 56
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 56, $this->source); })()), 2, ",", "."), "html", null, true);
            echo " euros.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe");
            echo "\" class=\"btn btn-success text-center\">Payer</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<a class=\"btn btn-dark my-3 mx-3\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            echo "\">VOTRE PANIER EST VIDE</a>
\t\t\t\t\t</div>
\t\t\t";
        }
        // line 68
        echo "\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 68,  202 => 65,  199 => 64,  191 => 59,  185 => 56,  178 => 51,  165 => 44,  161 => 43,  156 => 41,  152 => 40,  148 => 39,  144 => 38,  139 => 35,  136 => 34,  132 => 33,  126 => 29,  124 => 28,  116 => 23,  113 => 22,  111 => 21,  105 => 18,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CartController!{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div>
\t\t\t<a class=\"btn btn-dark mb-4\" href=\"{{ path('app_home') }}\">Retour</a>
\t\t</div>

\t\t<div class=\"card text-center\" style=\"height: auto; width: 75%\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3>Votre panier ⚡️</h3>
\t\t\t</div>

\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t<div class=\"fw-bold mx-4 my-4\">
\t\t\t\t\t<p>Nombre de produit : {{ cart|length }}.</p>
\t\t\t\t</div>

\t\t\t\t{% if cart|length > 0 %}
\t\t\t\t\t<div class=\"d-flex justify-content-end\">
\t\t\t\t\t\t<a class=\"btn btn-danger text-center my-3 mx-4\" style=\"width: 12rem\" href=\"{{ path('delete_all_cart') }}\">
\t\t\t\t\t\t\tVider mon panier</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{% set total = null %}

\t\t\t\t<div class=\"trait border border-dark m-auto my-5\" style=\"width: 20rem\"></div>

\t\t\t\t<div class=\"row d-flex justify-content-center my-4\">
\t\t\t\t\t{% for value in cart %}
\t\t\t\t\t\t{% set total = total + (value.produits.prix * value.quantity) %}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card mb-4\" style=\"width: 15rem; height: 13rem\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Titre: {{ value.produits.titre }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Artiste: {{ value.produits.description }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Catégorie: {{ value.produits.IdCategorie.nom }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">Prix: {{ (value.produits.prix * value.quantity)|number_format(2, ',', '.') }} euros.</p>
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('delete_cart', {'id': value.produits.id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/icones/poubelle.png') }}\" alt=\"\" class=\"me-2\" style=\"width:20px\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>

\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<p class=\"fw-bold card-text\">Prix total : {{ (total)|number_format(2, ',', '.') }} euros.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_stripe') }}\" class=\"btn btn-success text-center\">Payer</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<a class=\"btn btn-dark my-3 mx-3\" href=\"{{ path('app_home') }}\">VOTRE PANIER EST VIDE</a>
\t\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
{% endblock %}
", "cart/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/cart/index.html.twig");
    }
}
