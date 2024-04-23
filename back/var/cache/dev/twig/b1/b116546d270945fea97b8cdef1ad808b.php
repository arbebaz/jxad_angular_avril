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

/* produits/index.html.twig */
class __TwigTemplate_07e425b42904670dbe7cf8a9b44119ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produits/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produits/index.html.twig", 1);
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
\t\t\t\t! 📖</h1>
\t\t</div>


\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"table-info\">
\t\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t\t<th scope=\"col\">Catégorie</th>
\t\t\t\t\t<th scope=\"col\">Titre</th>
\t\t\t\t\t<th scope=\"col\">Artiste</th>
\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t<th scope=\"col\">Fichier</th>
\t\t\t\t\t<th scope=\"col\">Actions</th>


\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 43
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</th>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["value"], "IdCategorie", [], "any", false, false, false, 47)) {
                // line 48
                echo "
\t\t\t\t\t\t\t\t";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "idCategorie", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "titre", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "description", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "prix", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "fichier", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits_details", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/loupe.png"), "html", null, true);
            echo "\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits_update", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/crayon.png"), "html", null, true);
            echo "\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produits_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 60)]), "html", null, true);
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
        // line 66
        echo "\t\t\t</tbody>
\t\t</table>

\t\t";
        // line 70
        echo "
\t\t<h2 class=\"mb-3 text-center mt-4 mb-4\">Insérer un nouveau fichier 🗃️ :</h2>

\t\t";
        // line 74
        echo "\t\t<div class=\"inputForm\">
\t\t\t";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FormProduits"]) || array_key_exists("FormProduits", $context) ? $context["FormProduits"] : (function () { throw new RuntimeError('Variable "FormProduits" does not exist.', 75, $this->source); })()), 'form');
        echo "
\t\t\t</div>

\t\t</div>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "produits/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 75,  206 => 74,  201 => 70,  196 => 66,  182 => 60,  176 => 59,  170 => 58,  164 => 55,  160 => 54,  156 => 53,  152 => 52,  149 => 51,  144 => 49,  141 => 48,  139 => 47,  133 => 44,  130 => 43,  126 => 42,  101 => 20,  93 => 15,  89 => 13,  80 => 10,  77 => 9,  73 => 8,  68 => 5,  58 => 4,  35 => 1,);
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
\t\t\t\t! 📖</h1>
\t\t</div>


\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr class=\"table-info\">
\t\t\t\t\t<th scope=\"col\">ID</th>
\t\t\t\t\t<th scope=\"col\">Catégorie</th>
\t\t\t\t\t<th scope=\"col\">Titre</th>
\t\t\t\t\t<th scope=\"col\">Artiste</th>
\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t<th scope=\"col\">Fichier</th>
\t\t\t\t\t<th scope=\"col\">Actions</th>


\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>


\t\t\t\t{% for value in produits %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">{{value.id}}</th>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% if value.IdCategorie %}

\t\t\t\t\t\t\t\t{{value.idCategorie.nom}}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{value.titre}}</td>
\t\t\t\t\t\t<td>{{value.description}}</td>
\t\t\t\t\t\t<td>{{value.prix}}</td>
\t\t\t\t\t\t<td>{{value.fichier}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('produits_details', {'id': value.id } ) }}\"><img src=\"{{ asset('images/icones/loupe.png') }}\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('produits_update', {'id': value.id } ) }}\"><img src=\"{{ asset('images/icones/crayon.png') }}\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('produits_delete', {'id': value.id } ) }}\"><img src=\"{{ asset('images/icones/pb.png') }}\" alt=\"\" class=\"me-2\" style=\"width:20px\"></a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>

\t\t{#### fin du Tableau ########}

\t\t<h2 class=\"mb-3 text-center mt-4 mb-4\">Insérer un nouveau fichier 🗃️ :</h2>

\t\t{#### Form pour ajouter fichier ########}
\t\t<div class=\"inputForm\">
\t\t\t{{form(FormProduits)}}
\t\t\t</div>

\t\t</div>

\t{% endblock %}
", "produits/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/produits/index.html.twig");
    }
}
