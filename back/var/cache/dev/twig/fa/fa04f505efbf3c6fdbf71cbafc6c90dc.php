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

/* musique/index.html.twig */
class __TwigTemplate_7e6f899e10e9d339ecd411be2838cc4d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "musique/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "musique/index.html.twig", 1);
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
<div class=\"container\">

\t";
        // line 11
        echo "
\t<img
\tclass=\"d-flex m-auto\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO/JxadSf.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:300px; height:300px\">

\t";
        // line 16
        echo "
\t\t\t<div class=\"parole flex-column p-4 my-5\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Chansons 🎧 :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23) == "1")) {
                // line 24
                echo "\t\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem; height: 13rem\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 26), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 28), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t\t\t\t\t";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t\t\t\t\t\t<source src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("audio/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 33))), "html", null, true);
                echo "\" type=\"audio/mp3\">
\t\t\t\t\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 47
        echo "
\t\t\t

\t\t\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "musique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 47,  155 => 42,  149 => 41,  138 => 33,  132 => 30,  127 => 28,  122 => 26,  118 => 24,  115 => 23,  111 => 22,  103 => 16,  98 => 13,  94 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello MusiqueController!
{% endblock %}

{% block body %}

<div class=\"container\">

\t{# #########       LOGO       ########### #}

\t<img
\tclass=\"d-flex m-auto\" src=\"{{ asset('images/LOGO/JxadSf.png')}}\" alt=\"\" style=\"width:300px; height:300px\">

\t{#### Card Musique ########}

\t\t\t<div class=\"parole flex-column p-4 my-5\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Chansons 🎧 :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t\t{% for item in produits %}
\t\t\t\t\t\t{% if item.IdCategorie.id == '1' %}
\t\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem; height: 13rem\">
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

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>


\t\t\t{#### fin Card ########}

\t\t\t

\t\t\t</div>


{% endblock %}

", "musique/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/musique/index.html.twig");
    }
}
