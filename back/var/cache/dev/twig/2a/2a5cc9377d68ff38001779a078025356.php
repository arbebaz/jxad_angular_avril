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

/* navig.html.twig */
class __TwigTemplate_720aae7e988302e8778172da3e2afbc8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navig.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navig.html.twig"));

        // line 1
        echo "<nav
\tclass=\"navjxad navbar-expand-lg bg-body-tertiary d-flex justify-content-around\">

\t";
        // line 5
        echo "\t<div>
\t\t<a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO/jxadSf.png"), "html", null, true);
        echo "\" alt=\"\" style=\"width:100px\"></a>
\t</div>


\t";
        // line 11
        echo "

\t";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "
\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link active marge\" aria-current=\"page\" href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
            echo "\">Contact 🤳🏽</a>
\t\t</li>

\t\t";
            // line 20
            echo "\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 21
                echo "
\t\t\t<div>
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link fw-bold marge\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tADMIN 🔐</a>

\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center\" aria-current=\"page\" href=\"";
                // line 30
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits");
                echo "\">ProduitsAdmin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center\" aria-current=\"page\" href=\"";
                // line 33
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie");
                echo "\">CategorieAdmin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center\" aria-current=\"page\" href=\"";
                // line 36
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
                echo "\">UserAdmin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t";
            }
            // line 44
            echo "
\t\t<div>
\t\t\t<li>
\t\t\t\t<a class=\"nav-link active text-center fw-bold marge\" aria-current=\"page\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_cart");
            echo "\">Panier ⚡️</a>
\t\t\t</li>
\t\t</div>


\t";
        }
        // line 53
        echo "
\t";
        // line 55
        echo "\t<div>
\t\t<div class=\"float-end\">

\t\t\t";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) {
            // line 59
            echo "
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"nav-item dropdown profil\">
\t\t\t\t\t\t<a class=\"nav-link marge\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><img class=\"pp\" src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/bad.JPG"), "html", null, true);
            echo "\" alt=\"\" style=\"width:50px; height:50px\"></a>
\t\t\t\t\t\t<span class=\"position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-info p-2\">
\t\t\t\t\t\t\t<span class=\"visually-hidden\">unread messages</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">

\t\t\t\t\t\t\t";
            // line 69
            echo "

\t\t\t\t\t\t\t";
            // line 72
            echo "\t\t\t\t\t\t\t";
            // line 83
            echo "
\t\t\t\t\t\t\t";
            // line 85
            echo "
\t\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active text-center\" aria-current=\"page\" href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">Profil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center text-danger\" aria-current=\"page\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t";
        } else {
            // line 94
            echo "
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<li class=\"nav-item me-1\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center text-info-emphasis marge\" aria-current=\"page\" href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion |</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item ms-1\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center text-info-emphasis marge\" href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>
</div></nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 104,  188 => 100,  182 => 97,  177 => 94,  169 => 89,  163 => 86,  160 => 85,  157 => 83,  155 => 72,  151 => 69,  142 => 62,  137 => 59,  135 => 58,  130 => 55,  127 => 53,  118 => 47,  113 => 44,  102 => 36,  96 => 33,  90 => 30,  79 => 21,  76 => 20,  70 => 16,  66 => 14,  64 => 13,  60 => 11,  51 => 6,  48 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav
\tclass=\"navjxad navbar-expand-lg bg-body-tertiary d-flex justify-content-around\">

\t{# Logo / Redirection vers l'accueil #}
\t<div>
\t\t<a class=\"navbar-brand\" href=\"{{ path('app_home')}}\"><img src=\"{{ asset('images/LOGO/jxadSf.png') }}\" alt=\"\" style=\"width:100px\"></a>
\t</div>


\t{# ADMIN #}


\t{% if app.user %}

\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link active marge\" aria-current=\"page\" href=\"{{ path('app_contact')}}\">Contact 🤳🏽</a>
\t\t</li>

\t\t{# {% if app.user.roles[0] == 'ROLE_ADMIN' %} #}
\t\t{% if is_granted('ROLE_ADMIN')  %}

\t\t\t<div>
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link fw-bold marge\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tADMIN 🔐</a>

\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center\" aria-current=\"page\" href=\"{{ path('app_produits') }}\">ProduitsAdmin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center\" aria-current=\"page\" href=\"{{ path('app_categorie') }}\">CategorieAdmin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center\" aria-current=\"page\" href=\"{{ path('app_user') }}\">UserAdmin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t{% endif %}

\t\t<div>
\t\t\t<li>
\t\t\t\t<a class=\"nav-link active text-center fw-bold marge\" aria-current=\"page\" href=\"{{ path('get_cart')}}\">Panier ⚡️</a>
\t\t\t</li>
\t\t</div>


\t{% endif %}

\t{# Menu du profil #}
\t<div>
\t\t<div class=\"float-end\">

\t\t\t{% if app.user %}

\t\t\t\t<ul>
\t\t\t\t\t<li class=\"nav-item dropdown profil\">
\t\t\t\t\t\t<a class=\"nav-link marge\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><img class=\"pp\" src=\"{{ asset('images/PP/bad.JPG') }}\" alt=\"\" style=\"width:50px; height:50px\"></a>
\t\t\t\t\t\t<span class=\"position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-info p-2\">
\t\t\t\t\t\t\t<span class=\"visually-hidden\">unread messages</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">

\t\t\t\t\t\t\t{# Condition connexion : ADMIN / USER #}


\t\t\t\t\t\t\t{# ADMIN #}
\t\t\t\t\t\t\t{# {% if app.user.roles[0] == 'ROLE_ADMIN' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                                                                                                                                                                                                                                                                
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active text-center\" aria-current=\"page\" href=\"{{ path('app_produits') }}\">ProduitsAdmin</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active text-center\" aria-current=\"page\" href=\"{{ path('app_categorie') }}\">CategorieAdmin</a>
                                </li>
        
                            {% endif %} #}

\t\t\t\t\t\t\t{# USER #}

\t\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active text-center\" aria-current=\"page\" href=\"{{ path('app_profil')}}\">Profil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center text-danger\" aria-current=\"page\" href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<li class=\"nav-item me-1\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center text-info-emphasis marge\" aria-current=\"page\" href=\"{{ path('app_login') }}\">Connexion |</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item ms-1\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center text-info-emphasis marge\" href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>
</div></nav>
", "navig.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/navig.html.twig");
    }
}
