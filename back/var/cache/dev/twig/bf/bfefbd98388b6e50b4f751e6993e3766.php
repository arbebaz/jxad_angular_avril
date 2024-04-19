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

/* footer.html.twig */
class __TwigTemplate_6d7d8f9f3cd6d3115be2250089368cfb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer class=\"container-fluid\">
\t<div>
\t\t<li>
\t\t\t<a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mentions_legales");
        echo "\">Mentions légales</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgu");
        echo "\">CGU</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cgv");
        echo "\">CGV</a>
\t\t</li>
\t\t<p></p>
\t\t<p></p>
\t</div>

\t<div>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<h3>Navigation</h3>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Page d'accueil 🏠</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musique");
        echo "\">Musique 🎧</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parole");
        echo "\">Paroles 🎤</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Artistes 🦋</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact 📨</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_cart");
        echo "\">Panier ⏯️</a>
\t\t\t</li>
\t\t</ul>
\t</div>

\t<div>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<p>© arbebaz</p>
\t\t\t</li>
\t\t\t<a href=\"https://github.com/arbebaz\">
\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/github.png"), "html", null, true);
        echo "\" alt=\"\" height=\"50\">
\t\t\t</a>
\t\t</ul>
\t</div>

\t<div>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contactez-nous 🤳🏽</a>
\t\t\t</li>
\t\t\t<a href=\"https://www.instagram.com/jxadmusic_/\">
\t\t\t\t<img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/instagram.png"), "html", null, true);
        echo "\" alt=\"\" height=\"100\">
\t\t\t</a>
\t\t</ul>
\t</div>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 59,  130 => 56,  119 => 48,  105 => 37,  99 => 34,  93 => 31,  87 => 28,  81 => 25,  75 => 22,  60 => 10,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"container-fluid\">
\t<div>
\t\t<li>
\t\t\t<a href=\"{{ path('app_mentions_legales')}}\">Mentions légales</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"{{ path('app_cgu')}}\">CGU</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"{{ path('app_cgv')}}\">CGV</a>
\t\t</li>
\t\t<p></p>
\t\t<p></p>
\t</div>

\t<div>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<h3>Navigation</h3>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_home')}}\">Page d'accueil 🏠</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_musique')}}\">Musique 🎧</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_parole')}}\">Paroles 🎤</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_home')}}\">Artistes 🦋</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_contact')}}\">Contact 📨</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('get_cart')}}\">Panier ⏯️</a>
\t\t\t</li>
\t\t</ul>
\t</div>

\t<div>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<p>© arbebaz</p>
\t\t\t</li>
\t\t\t<a href=\"https://github.com/arbebaz\">
\t\t\t\t<img src=\"{{ asset('images/icones/github.png') }}\" alt=\"\" height=\"50\">
\t\t\t</a>
\t\t</ul>
\t</div>

\t<div>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_contact')}}\">Contactez-nous 🤳🏽</a>
\t\t\t</li>
\t\t\t<a href=\"https://www.instagram.com/jxadmusic_/\">
\t\t\t\t<img src=\"{{ asset('images/icones/instagram.png') }}\" alt=\"\" height=\"100\">
\t\t\t</a>
\t\t</ul>
\t</div>
</footer>
", "footer.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/footer.html.twig");
    }
}
