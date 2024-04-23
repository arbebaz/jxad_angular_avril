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

/* instrumental/index.html.twig */
class __TwigTemplate_581c8b4b2be786f0a66425c97f1c49eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instrumental/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instrumental/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "instrumental/index.html.twig", 1);
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

        echo "Hello InstrumentalController!";
        
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
        echo "

<div class=\"container\">
   ";
        // line 10
        echo "
\t\t\t<div class=\"parole flex-column p-4 mt-5 my-4\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Instrumentals 🎙️ :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == "14")) {
                // line 18
                echo "\t\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem;\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 20), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 22), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t\t\t\t\t";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
                echo "</p>

\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t\t\t\t\t\t<source src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("audio/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 28))), "html", null, true);
                echo "\" type=\"audio/mp3\">
\t\t\t\t\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 32), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t";
                // line 35
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                    echo "\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    echo "\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 51
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instrumental/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 51,  169 => 46,  163 => 45,  156 => 40,  150 => 38,  144 => 36,  142 => 35,  136 => 32,  129 => 28,  122 => 24,  117 => 22,  112 => 20,  108 => 18,  105 => 17,  101 => 16,  93 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello InstrumentalController!{% endblock %}

{% block body %}


<div class=\"container\">
   {#### Card Instrumentals ########}

\t\t\t<div class=\"parole flex-column p-4 mt-5 my-4\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Instrumentals 🎙️ :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t\t{% for item in produits %}
\t\t\t\t\t\t{% if item.IdCategorie.id == '14' %}
\t\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem;\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ item.titre }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t{{ item.description }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t\t\t\t\t{{ item.IdCategorie.nom }}</p>

\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t\t\t\t\t\t<source src=\"{{ asset('audio/' ~ item.fichier) }}\" type=\"audio/mp3\">
\t\t\t\t\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">{{ item.prix }}
\t\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"{{ path('post_cart', { 'id': item.id }) }}\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"{{ path('app_login') }}\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>


\t\t\t{#### fin Card ########}
</div>
{% endblock %}
", "instrumental/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/instrumental/index.html.twig");
    }
}
