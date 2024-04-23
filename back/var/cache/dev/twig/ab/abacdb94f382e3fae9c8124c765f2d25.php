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

/* categorie/filtre.html.twig */
class __TwigTemplate_d680a7ea67646333c0c18c3d739a1722 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/filtre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/filtre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/filtre.html.twig", 1);
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

        echo "Hello CategorieController!
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
\t<div
\t\tclass=\"container\">

\t\t";
        // line 12
        echo "
\t\t<div class=\"parole flex-column p-4 mt-5\">
\t\t\t<div>
\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Musique 🎧 :</h3>
\t\t\t</div>
\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19) == "1")) {
                // line 20
                echo "\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem; height: 13rem\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 22), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 24), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t\t\t\t";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 26), "nom", [], "any", false, false, false, 26), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t\t\t\t\t<source src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("audio/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 29))), "html", null, true);
                echo "\" type=\"audio/mp3\">
\t\t\t\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</div>
\t\t</div>


\t\t";
        // line 43
        echo "

\t\t<div class=\"artiste flex-column p-4\">
\t\t\t<div>
\t\t\t\t<h3 class=\" ms-4 my-2 text-center\">Artistes 🦋:
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"d-flex justify-content-evenly mt-4\">
\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/casque.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/garcon.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/me.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/sunset.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/smile.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/sisters.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">

\t\t\t</div>
\t\t</div>

\t\t";
        // line 72
        echo "
\t\t<div class=\"parole flex-column p-4 mt-5\">
\t\t\t<div>
\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Instrumentals 🎙️ :</h3>
\t\t\t</div>
\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79) == "14")) {
                // line 80
                echo "\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 82), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 84), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t\t\t\t";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 86), "nom", [], "any", false, false, false, 86), "html", null, true);
                echo "</p>

\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t\t\t\t\t<source src=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("audio/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 90))), "html", null, true);
                echo "\" type=\"audio/mp3\">
\t\t\t\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 94), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t";
                // line 97
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 98)]), "html", null, true);
                    echo "\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    echo "\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 107
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t</div>
\t\t</div>


\t\t";
        // line 113
        echo "

\t\t";
        // line 116
        echo "

\t\t<div class=\"parole flex-column p-4 mb-4 mt-4\">
\t\t\t<div>
\t\t\t\t<h3 class=\"ms-4 my-2 text-center mb-4\">Paroles 🎤 :</h3>
\t\t\t</div>
\t\t\t<div class=\"d-flex flex-wrap justify-content-start\">
\t\t\t\t";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 124
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124) == "2")) {
                // line 125
                echo "\t\t\t\t\t\t<div class=\"card mb-3\" style=\"max-width: 540px; width: 30rem;\">
\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 128))), "html", null, true);
                echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 132), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t\t";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 134), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 135), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 138
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138)) {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 139)]), "html", null, true);
                    echo "\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    echo "\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 143
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "

\t\t\t</div>


\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "categorie/filtre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 150,  352 => 149,  344 => 143,  338 => 141,  332 => 139,  330 => 138,  324 => 135,  320 => 134,  315 => 132,  308 => 128,  303 => 125,  300 => 124,  296 => 123,  287 => 116,  283 => 113,  277 => 108,  271 => 107,  264 => 102,  258 => 100,  252 => 98,  250 => 97,  244 => 94,  237 => 90,  230 => 86,  225 => 84,  220 => 82,  216 => 80,  213 => 79,  209 => 78,  201 => 72,  193 => 66,  187 => 63,  181 => 60,  175 => 57,  169 => 54,  163 => 51,  153 => 43,  147 => 38,  141 => 37,  130 => 29,  124 => 26,  119 => 24,  114 => 22,  110 => 20,  107 => 19,  103 => 18,  95 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CategorieController!
{% endblock %}

{% block body %}

\t<div
\t\tclass=\"container\">

\t\t{#### Card Musique ########}

\t\t<div class=\"parole flex-column p-4 mt-5\">
\t\t\t<div>
\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Musique 🎧 :</h3>
\t\t\t</div>
\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t{% for item in produits %}
\t\t\t\t\t{% if item.IdCategorie.id == '1' %}
\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem; height: 13rem\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ item.titre }}</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t{{ item.description }}</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t\t\t\t{{ item.IdCategorie.nom }}</p>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t\t\t\t\t<source src=\"{{ asset('audio/' ~ item.fichier) }}\" type=\"audio/mp3\">
\t\t\t\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>


\t\t{# #########       ARTISTES       ########### #}


\t\t<div class=\"artiste flex-column p-4\">
\t\t\t<div>
\t\t\t\t<h3 class=\" ms-4 my-2 text-center\">Artistes 🦋:
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"d-flex justify-content-evenly mt-4\">
\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/casque.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/garcon.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/me.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/sunset.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/smile.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/sisters.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">

\t\t\t</div>
\t\t</div>

\t\t{#### Card Instrumentals ########}

\t\t<div class=\"parole flex-column p-4 mt-5\">
\t\t\t<div>
\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Instrumentals 🎙️ :</h3>
\t\t\t</div>
\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t{% for item in produits %}
\t\t\t\t\t{% if item.IdCategorie.id == '14' %}
\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ item.titre }}</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t{{ item.description }}</p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t\t\t\t{{ item.IdCategorie.nom }}</p>

\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t\t\t\t\t<source src=\"{{ asset('audio/' ~ item.fichier) }}\" type=\"audio/mp3\">
\t\t\t\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">{{ item.prix }}
\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"{{ path('post_cart', { 'id': item.id }) }}\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"{{ path('app_login') }}\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>


\t\t{#### fin Card ########}


\t\t{#### Card Paroles ########}


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


\t\t{% endblock %}
", "categorie/filtre.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/categorie/filtre.html.twig");
    }
}
