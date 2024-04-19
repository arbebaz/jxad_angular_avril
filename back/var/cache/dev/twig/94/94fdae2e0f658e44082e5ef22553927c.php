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

/* user/index.html.twig */
class __TwigTemplate_eebf54007d97d2c6495cacb6d80854e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
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

\t\t<div class=\"example-wrapper text-center mb-4\">
\t\t\t<h1>Hello
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t! 🥷🏽</h1>
\t\t</div>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"table-info\">
\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t\t<th scope=\"col\">Email</th>
\t\t\t\t\t<th scope=\"col\">Adresse</th>
\t\t\t\t\t<th scope=\"col\">Code postal</th>
\t\t\t\t\t<th scope=\"col\">Téléphone</th>
\t\t\t\t\t";
        // line 34
        echo "\t\t\t\t\t<th scope=\"col\">Actions</th>

\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 42
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "prenom", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "email", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "adresse", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "codePostal", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "telephone", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
\t\t\t\t\t\t";
            // line 50
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_details", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/loupe.png"), "html", null, true);
            echo "\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>
\t\t\t\t\t\t\t\t";
            // line 54
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/pb.png"), "html", null, true);
            echo "\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t</tbody>
\t\t</table>

\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 60,  167 => 54,  161 => 52,  157 => 50,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  137 => 44,  133 => 43,  130 => 42,  126 => 41,  117 => 34,  101 => 20,  93 => 15,  89 => 13,  80 => 10,  77 => 9,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
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

\t\t<div class=\"example-wrapper text-center mb-4\">
\t\t\t<h1>Hello
\t\t\t\t{{ controller_name }}
\t\t\t\t! 🥷🏽</h1>
\t\t</div>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"table-info\">
\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t<th scope=\"col\">Prénom</th>
\t\t\t\t\t<th scope=\"col\">Email</th>
\t\t\t\t\t<th scope=\"col\">Adresse</th>
\t\t\t\t\t<th scope=\"col\">Code postal</th>
\t\t\t\t\t<th scope=\"col\">Téléphone</th>
\t\t\t\t\t{# <th scope=\"col\">Photo</th> #}
\t\t\t\t\t<th scope=\"col\">Actions</th>

\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t{% for value in user %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">{{value.nom}}</th>
\t\t\t\t\t\t<td>{{value.prenom}}</td>
\t\t\t\t\t\t<td>{{value.email}}</td>
\t\t\t\t\t\t<td>{{value.adresse}}</td>
\t\t\t\t\t\t<td>{{value.codePostal}}</td>
\t\t\t\t\t\t<td>{{value.telephone}}</td>
\t\t\t\t\t\t{# <td>{{value.photo}}</td> #}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_details', {'id': value.id } ) }}\"><img src=\"{{ asset('images/icones/loupe.png') }}\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>
\t\t\t\t\t\t\t\t{# <a href=\"{{ path('user_update', {'id': value.id } ) }}\"><img src=\"{{ asset('images/icones/crayon.png') }}\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a> #}
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_delete', {'id': value.id } ) }}\"><img src=\"{{ asset('images/icones/pb.png') }}\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>

\t</div>

{% endblock %}
", "user/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/user/index.html.twig");
    }
}
