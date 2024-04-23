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

/* user/user_details.html.twig */
class __TwigTemplate_4d46f5ac34f097806b2d4ca0ae2cc900 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/user_details.html.twig", 1);
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
\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        echo "\" class=\"btn btn-dark mt-3\">Retour</a>

\t\t<div class=\"example-wrapper text-center mb-3\">
\t\t\t<h1>Hello
\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t! 🥷🏽</h1>
\t\t</div>

\t\t<div class=\"card text-center\" style=\"width: 30rem;\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<p class=\"card-text\">NOM :
\t\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"card-text\">PRÉNOM :
\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
\t\t\t</div>

\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-title\">ID BDD :
\t\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>

\t\t\t\t<p class=\"card-text\">EMAIL :
\t\t\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"card-text\">ADRESSE :
\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "adresse", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"card-text\">CODE POSTAL :
\t\t\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "codePostal", [], "any", false, false, false, 38), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\"card-text\">TÉLÉPHONE :
\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "telephone", [], "any", false, false, false, 40), "html", null, true);
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
        return "user/user_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 40,  138 => 38,  133 => 36,  128 => 34,  122 => 31,  114 => 26,  109 => 24,  99 => 17,  92 => 13,  89 => 12,  80 => 9,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
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

\t\t<a href=\"{{ path('app_user') }}\" class=\"btn btn-dark mt-3\">Retour</a>

\t\t<div class=\"example-wrapper text-center mb-3\">
\t\t\t<h1>Hello
\t\t\t\t{{ controller_name }}
\t\t\t\t! 🥷🏽</h1>
\t\t</div>

\t\t<div class=\"card text-center\" style=\"width: 30rem;\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<p class=\"card-text\">NOM :
\t\t\t\t\t{{user.nom}}</p>
\t\t\t\t<p class=\"card-text\">PRÉNOM :
\t\t\t\t\t{{user.prenom}}</p>
\t\t\t</div>

\t\t\t<div class=\"card-body\">
\t\t\t\t<p class=\"card-title\">ID BDD :
\t\t\t\t\t{{user.id}}</p>

\t\t\t\t<p class=\"card-text\">EMAIL :
\t\t\t\t\t{{user.email}}</p>
\t\t\t\t<p class=\"card-text\">ADRESSE :
\t\t\t\t\t{{user.adresse}}</p>
\t\t\t\t<p class=\"card-text\">CODE POSTAL :
\t\t\t\t\t{{user.codePostal}}</p>
\t\t\t\t<p class=\"card-text\">TÉLÉPHONE :
\t\t\t\t\t{{user.telephone}}</p>
\t\t\t</div>

\t\t</div>
\t</div>

{% endblock %}
", "user/user_details.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/user/user_details.html.twig");
    }
}
