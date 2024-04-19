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

/* home/index.html.twig */
class __TwigTemplate_962085424aaf479f55e50deda0d98407 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello HomeController!
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "

\t<div
\t\tclass=\"container\">

\t\t";
        // line 13
        echo "
\t\t<div class=\"container-fluid\">
\t\t\t<form class=\"d-flex m-auto\" role=\"search\" action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lookup");
        echo "\">
\t\t\t\t<input class=\"form-control me-2\" type=\"search\" placeholder=\"Recherche..\" aria-label=\"Search\" name=\"search\">
\t\t\t\t<button class=\"btn btn-dark\" type=\"submit\">Rechercher</button>
\t\t\t</form>
\t\t</div>


\t\t";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "\t\t\t<div class=\"text-dark text-center mt-5 mb-4\">
\t\t\t\t<h3 class=\"text-center\">
\t\t\t\t\tHello,
\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "prenom", [], "any", false, false, false, 26), "html", null, true);
            echo "
\t\t\t\t\t!
\t\t\t\t\t<br>
\t\t\t\t\tBienvenue sur JXAD Musique 🎙️
\t\t\t\t</h3>

\t\t\t\t";
            // line 33
            echo "
\t\t\t\t<img class=\"d-flex m-auto\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO/JxadSf.png"), "html", null, true);
            echo "\" alt=\"\" style=\"width:300px; height:300px\">

\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t<img class=\"d-flex m-auto\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/LOGO/JxadSf.png"), "html", null, true);
            echo "\" alt=\"\" style=\"width:300px; height:300px\">


\t\t\t";
        }
        // line 41
        echo "
\t\t\t";
        // line 43
        echo "
\t\t\t<div class=\"d-flex justify-content-around my-4\">
\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorie"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 46
            echo "\t\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_produits", ["id" => twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t</div>


\t\t\t";
        // line 54
        echo "

\t\t\t<div class=\"artiste flex-column p-4\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\" ms-4 my-2 text-center\">Artistes 🦋:
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex justify-content-evenly mt-4\">
\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/casque.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/garcon.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/me.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/sunset.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/smile.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">


\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/sisters.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">

\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 84
        echo "
\t\t\t<div class=\"parole flex-column p-4 mt-5\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Musique 🎧 :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t\t";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 91
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 91), "id", [], "any", false, false, false, 91) == "1")) {
                // line 92
                echo "\t\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem; height: 13rem\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 94), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 96), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t\t\t\t\t";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 98), "nom", [], "any", false, false, false, 98), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t\t\t\t\t\t<source src=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("audio/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 101))), "html", null, true);
                echo "\" type=\"audio/mp3\">
\t\t\t\t\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 115
        echo "
\t\t\t";
        // line 117
        echo "
\t\t\t<div class=\"parole flex-column p-4 mt-5\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Instrumentals 🎙️ :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t\t";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 124
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124) == "14")) {
                // line 125
                echo "\t\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem;\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 127), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 129), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t\t\t\t\t";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 131), "nom", [], "any", false, false, false, 131), "html", null, true);
                echo "</p>

\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t\t\t\t\t\t<source src=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("audio/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 135))), "html", null, true);
                echo "\" type=\"audio/mp3\">
\t\t\t\t\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 139), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t";
                // line 142
                if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 143)]), "html", null, true);
                    echo "\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    echo "\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 147
                echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 152
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 158
        echo "

\t\t\t";
        // line 161
        echo "

\t\t\t<div class=\"parole flex-column p-4 mb-4 mt-4\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center mb-4\">Paroles 🎤 :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-start\">
\t\t\t\t\t";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 169
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 169), "id", [], "any", false, false, false, 169) == "2")) {
                // line 170
                echo "\t\t\t\t\t\t\t<div class=\"card mb-3\" style=\"max-width: 540px; width: 30rem;\">
\t\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 173
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 173))), "html", null, true);
                echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 177), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 179), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">";
                // line 180
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 180), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 183
                if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 183)) {
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 184)]), "html", null, true);
                    echo "\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    echo "\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 194
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 195,  404 => 194,  396 => 188,  390 => 186,  384 => 184,  382 => 183,  376 => 180,  372 => 179,  367 => 177,  360 => 173,  355 => 170,  352 => 169,  348 => 168,  339 => 161,  335 => 158,  329 => 153,  323 => 152,  316 => 147,  310 => 145,  304 => 143,  302 => 142,  296 => 139,  289 => 135,  282 => 131,  277 => 129,  272 => 127,  268 => 125,  265 => 124,  261 => 123,  253 => 117,  250 => 115,  244 => 110,  238 => 109,  227 => 101,  221 => 98,  216 => 96,  211 => 94,  207 => 92,  204 => 91,  200 => 90,  192 => 84,  183 => 77,  177 => 74,  171 => 71,  165 => 68,  159 => 65,  153 => 62,  143 => 54,  138 => 50,  127 => 47,  124 => 46,  120 => 45,  116 => 43,  113 => 41,  105 => 37,  99 => 34,  96 => 33,  87 => 26,  82 => 23,  80 => 22,  70 => 15,  66 => 13,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/home/index.html.twig");
    }
}
