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

/* nav.html.twig */
class __TwigTemplate_b08157203685a3c61107217dc24b3df9 extends Template
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
\t<div>
\t\t<ul>
\t\t\t<li class=\"nav-item dropdown text-center\">
\t\t\t\t<a class=\"nav-link text-center marge\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\tCatégories 🎧
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu\">

\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 21
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item text-center\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_produits", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>


\t";
        // line 32
        echo "

\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34)) {
            // line 35
            echo "
\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link active marge\" aria-current=\"page\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
            echo "\">Contact 🤳🏽</a>
\t\t</li>

\t\t";
            // line 41
            echo "\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 42
                echo "
\t\t\t<div>
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link fw-bold marge\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tADMIN 🔐</a>

\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center\" aria-current=\"page\" href=\"";
                // line 51
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits");
                echo "\">ProduitsAdmin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center\" aria-current=\"page\" href=\"";
                // line 54
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie");
                echo "\">CategorieAdmin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center\" aria-current=\"page\" href=\"";
                // line 57
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
                echo "\">UserAdmin</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t";
            }
            // line 65
            echo "
\t\t<div>
\t\t\t<li>
\t\t\t\t<a class=\"nav-link active text-center fw-bold marge\" aria-current=\"page\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_cart");
            echo "\">Panier</a>
\t\t\t</li>
\t\t</div>


\t";
        }
        // line 74
        echo "
\t";
        // line 76
        echo "\t<div>
\t\t<div class=\"float-end\">

\t\t\t";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 79)) {
            // line 80
            echo "
\t\t\t\t<ul>
\t\t\t\t\t<li class=\"nav-item dropdown profil\">
\t\t\t\t\t\t<a class=\"nav-link marge\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><img class=\"pp\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/bad.JPG"), "html", null, true);
            echo "\" alt=\"\" style=\"width:50px; height:50px\"></a>
\t\t\t\t\t\t<span class=\"position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-info p-2\">
\t\t\t\t\t\t\t<span class=\"visually-hidden\">unread messages</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">

\t\t\t\t\t\t\t";
            // line 90
            echo "

\t\t\t\t\t\t\t";
            // line 93
            echo "\t\t\t\t\t\t\t";
            // line 104
            echo "
\t\t\t\t\t\t\t";
            // line 106
            echo "
\t\t\t\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active text-center\" aria-current=\"page\" href=\"";
            // line 107
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">Profil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center text-danger\" aria-current=\"page\" href=\"";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t";
        } else {
            // line 115
            echo "
\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t<li class=\"nav-item me-1\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center text-info-emphasis marge\" aria-current=\"page\" href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion |</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item ms-1\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active text-center text-info-emphasis marge\" href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 125
        echo "\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t</div>
</div></nav>
";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 125,  219 => 121,  213 => 118,  208 => 115,  200 => 110,  194 => 107,  191 => 106,  188 => 104,  186 => 93,  182 => 90,  173 => 83,  168 => 80,  166 => 79,  161 => 76,  158 => 74,  149 => 68,  144 => 65,  133 => 57,  127 => 54,  121 => 51,  110 => 42,  107 => 41,  101 => 37,  97 => 35,  95 => 34,  91 => 32,  83 => 25,  72 => 22,  69 => 21,  65 => 20,  54 => 11,  45 => 6,  42 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nav.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/nav.html.twig");
    }
}
