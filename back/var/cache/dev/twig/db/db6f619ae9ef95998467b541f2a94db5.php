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

/* categorie/index.html.twig */
class __TwigTemplate_25108ad8e5aa57cf595119b33c96096b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/index.html.twig", 1);
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
\t<div class=\"container\">

\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "Success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 11
            echo "\t\t\t<div class=\"alert alert-success col-md-6 mx-auto text-center disparition\">
\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["notification"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
\t\t<div>
\t\t\t<a class=\"btn btn-dark\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Retour</a>
\t\t</div>

\t\t<div class=\"example-wrapper text-center mb-4\">
\t\t\t<h1>Hello
\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t! 🫧</h1>
\t\t</div>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"table-info\">
\t\t\t\t\t<th scope=\"col\">Nom de la catégorie :
\t\t\t\t\t</th>
\t\t\t\t\t<th scope=\"col\">Dossier :
\t\t\t\t\t</th>
\t\t\t\t\t<th scope=\"col\">Actions :
\t\t\t\t\t</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 41
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nom", [], "any", false, false, false, 42), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th scope=\"row\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "dossier", [], "any", false, false, false, 43), "html", null, true);
            echo "</th>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_details", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/loupe.png"), "html", null, true);
            echo "\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_update", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/crayon.png"), "html", null, true);
            echo "\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 49)]), "html", null, true);
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
        // line 55
        echo "\t\t\t</tbody>
\t\t</table>


\t\t";
        // line 60
        echo "
\t\t<h2 class=\"mb-3 text-center my-4\">Entrer votre nouvelle catégorie 🫧 :</h2>

\t\t<div class=\"inputForm\">
\t\t\t";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FormCategorie"]) || array_key_exists("FormCategorie", $context) ? $context["FormCategorie"] : (function () { throw new RuntimeError('Variable "FormCategorie" does not exist.', 64, $this->source); })()), 'form');
        echo "
\t\t\t</div>
\t\t</div>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 64,  193 => 60,  187 => 55,  173 => 49,  167 => 48,  161 => 47,  154 => 43,  150 => 42,  147 => 41,  143 => 40,  122 => 22,  114 => 17,  110 => 15,  101 => 12,  98 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CategorieController!
{% endblock %}

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
\t\t\t\t! 🫧</h1>
\t\t</div>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"table-info\">
\t\t\t\t\t<th scope=\"col\">Nom de la catégorie :
\t\t\t\t\t</th>
\t\t\t\t\t<th scope=\"col\">Dossier :
\t\t\t\t\t</th>
\t\t\t\t\t<th scope=\"col\">Actions :
\t\t\t\t\t</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t{% for value in categorie %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">{{value.nom}}</th>
\t\t\t\t\t\t<th scope=\"row\">{{value.dossier}}</th>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('categorie_details', {'id': value.id } ) }}\"><img src=\"{{ asset('images/icones/loupe.png') }}\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('categorie_update', {'id': value.id } ) }}\"><img src=\"{{ asset('images/icones/crayon.png') }}\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('categorie_delete', {'id': value.id } ) }}\"><img src=\"{{ asset('images/icones/pb.png') }}\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>


\t\t{#### Form pour ajouter categorie ########}

\t\t<h2 class=\"mb-3 text-center my-4\">Entrer votre nouvelle catégorie 🫧 :</h2>

\t\t<div class=\"inputForm\">
\t\t\t{{form(FormCategorie)}}
\t\t\t</div>
\t\t</div>

\t{% endblock %}
", "categorie/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/categorie/index.html.twig");
    }
}
