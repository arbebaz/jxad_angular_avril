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

/* profil/index.html.twig */
class __TwigTemplate_85ac1e7938e8e47e7e90c837e2738c6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/index.html.twig", 1);
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
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 9
            echo "\t\t\t<div class=\"alert alert-success col-md-6 mx-auto text-center disparition\">
\t\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
\t\t<div>
\t\t\t<a class=\"btn btn-dark\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Retour</a>
\t\t</div>


\t\t<div class=\"example-wrapper text-center mb-3\">
\t\t\t<h1>Hello 🎙️</h1>
\t\t</div>


\t\t<h3 class=\"mb-3 text-center\">Mon profil 🦋 :</h3>

\t\t<div class=\"container\">

\t\t\t";
        // line 31
        echo "

\t\t\t<input class=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Email : ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "userIdentifier", [], "any", false, false, false, 33), "html", null, true);
        echo "\" aria-label=\"readonly input example\" readonly>
\t\t\t<input class=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Nom : ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
        echo "\" aria-label=\"readonly input example\" readonly>
\t\t\t<input class=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Prénom : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "prenom", [], "any", false, false, false, 35), "html", null, true);
        echo "\" aria-label=\"readonly input example\" readonly>
\t\t\t<input class=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Adresse : ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "adresse", [], "any", false, false, false, 36), "html", null, true);
        echo "\" aria-label=\"readonly input example\" readonly>
\t\t\t<input class=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Code postal : ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "codePostal", [], "any", false, false, false, 37), "html", null, true);
        echo "\" aria-label=\"readonly input example\" readonly>
\t\t\t<input
\t\t\tclass=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Téléphone : ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "telephone", [], "any", false, false, false, 39), "html", null, true);
        echo "\" aria-label=\"readonly input example\" readonly>

\t\t\t";
        // line 42
        echo "
\t\t\t<div class=\"text-center my-3\">
\t\t\t\t<a class=\"btn btn-dark\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\">Modifier mon profil ✏️</a>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 49
        echo "\t</div>


</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 49,  144 => 44,  140 => 42,  135 => 39,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  114 => 33,  110 => 31,  94 => 15,  90 => 13,  81 => 10,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
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

\t\t<div>
\t\t\t<a class=\"btn btn-dark\" href=\"{{ path('app_home') }}\">Retour</a>
\t\t</div>


\t\t<div class=\"example-wrapper text-center mb-3\">
\t\t\t<h1>Hello 🎙️</h1>
\t\t</div>


\t\t<h3 class=\"mb-3 text-center\">Mon profil 🦋 :</h3>

\t\t<div class=\"container\">

\t\t\t{# <div class=\"col-md-4\">
\t\t\t\t<img src=\"{{ asset(app.user.photo) }}\" class=\"img-fluid rounded-start\" alt=\"Photo de profil\">
\t\t\t</div> #}


\t\t\t<input class=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Email : {{ app.user.userIdentifier }}\" aria-label=\"readonly input example\" readonly>
\t\t\t<input class=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Nom : {{ app.user.nom }}\" aria-label=\"readonly input example\" readonly>
\t\t\t<input class=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Prénom : {{ app.user.prenom }}\" aria-label=\"readonly input example\" readonly>
\t\t\t<input class=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Adresse : {{ app.user.adresse }}\" aria-label=\"readonly input example\" readonly>
\t\t\t<input class=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Code postal : {{ app.user.codePostal }}\" aria-label=\"readonly input example\" readonly>
\t\t\t<input
\t\t\tclass=\"form-control text-center mt-2\" style=\"width: 25rem\" type=\"text\" value=\"Téléphone : {{ app.user.telephone }}\" aria-label=\"readonly input example\" readonly>

\t\t\t{# {% for value in user %} #}

\t\t\t<div class=\"text-center my-3\">
\t\t\t\t<a class=\"btn btn-dark\" href=\"{{ path('profil_update', {'id': app.user.id } ) }}\">Modifier mon profil ✏️</a>
\t\t\t</div>
\t\t</div>

\t\t{# {% endfor %} #}
\t</div>


</div>{% endblock %}
", "profil/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/profil/index.html.twig");
    }
}
