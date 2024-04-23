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
class __TwigTemplate_fe19c9f495d20f076c3a801e1d41d6f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Hello HomeController!
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "\t\t\t<div class=\"text-dark text-center mt-5 mb-4\">
\t\t\t\t<h3 class=\"text-center\">
\t\t\t\t\tHello,
\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "prenom", [], "any", false, false, false, 26), "html", null, true);
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
\t\t\t<div
\t\t\t\tclass=\"d-flex justify-content-around my-4\">
\t\t\t\t";
        // line 51
        echo "
\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_musique");
        echo "\">Chanson</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parole");
        echo "\">Parole</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos");
        echo "\">Video</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instrumental");
        echo "\">Instrumentals</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_artistes");
        echo "\">Artistes</a>
\t\t\t\t</li>

\t\t\t</div>


\t\t\t";
        // line 72
        echo "
\t\t\t<div class=\"parole flex-column p-4 my-5\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Artistes 🦋:</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-evenly mt-4\">
\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/casque.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/garcon.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/me.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/sunset.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/smile.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/PP/sisters.JPG"), "html", null, true);
        echo "\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 106
        echo "
\t\t\t<div class=\"parole flex-column p-4 mt-5\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Chansons 🎧 :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 113
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113) == "1")) {
                // line 114
                echo "\t\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem; height: 13rem\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 116), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 118), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t\t\t\t\t";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 120), "nom", [], "any", false, false, false, 120), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t\t\t\t\t\t<source src=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("audio/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 123))), "html", null, true);
                echo "\" type=\"audio/mp3\">
\t\t\t\t\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 131
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 137
        echo "
\t\t\t";
        // line 139
        echo "
\t\t\t<div class=\"parole flex-column p-4 mt-5\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Instrumentals 🎙️ :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t\t";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 146
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 146), "id", [], "any", false, false, false, 146) == "14")) {
                // line 147
                echo "\t\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem;\">
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 149), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 151), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"card-text\">Format :
\t\t\t\t\t\t\t\t\t\t";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 153), "nom", [], "any", false, false, false, 153), "html", null, true);
                echo "</p>

\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<audio controls controlslist=\"nodownload\" style=\"max-width: 20rem;\">
\t\t\t\t\t\t\t\t\t\t\t<source src=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("audio/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 157))), "html", null, true);
                echo "\" type=\"audio/mp3\">
\t\t\t\t\t\t\t\t\t\t\tVotre navigateur ne supporte pas la lecture de ce fichier audio.
\t\t\t\t\t\t\t\t\t\t</audio>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 162), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t";
                // line 165
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "user", [], "any", false, false, false, 165)) {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 166)]), "html", null, true);
                    echo "\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    echo "\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 170
                echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "\t\t\t\t</div>
\t\t\t</div>


\t\t\t";
        // line 181
        echo "

\t\t\t";
        // line 184
        echo "

\t\t\t<div class=\"parole flex-column p-4 mb-4 mt-4\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center mb-4\">Paroles 🎤 :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-start\">
\t\t\t\t\t";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 191, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 192
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "IdCategorie", [], "any", false, false, false, 192), "id", [], "any", false, false, false, 192) == "2")) {
                // line 193
                echo "\t\t\t\t\t\t\t<div class=\"card mb-3\" style=\"max-width: 540px; width: 30rem;\">
\t\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 196
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["item"], "fichier", [], "any", false, false, false, 196))), "html", null, true);
                echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "titre", [], "any", false, false, false, 200), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 202), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "prix", [], "any", false, false, false, 203), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 206
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 206, $this->source); })()), "user", [], "any", false, false, false, 206)) {
                    // line 207
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 207)]), "html", null, true);
                    echo "\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 209
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    echo "\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 211
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 217
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  460 => 218,  454 => 217,  446 => 211,  440 => 209,  434 => 207,  432 => 206,  426 => 203,  422 => 202,  417 => 200,  410 => 196,  405 => 193,  402 => 192,  398 => 191,  389 => 184,  385 => 181,  379 => 176,  373 => 175,  366 => 170,  360 => 168,  354 => 166,  352 => 165,  346 => 162,  338 => 157,  331 => 153,  326 => 151,  321 => 149,  317 => 147,  314 => 146,  310 => 145,  302 => 139,  299 => 137,  293 => 132,  287 => 131,  276 => 123,  270 => 120,  265 => 118,  260 => 116,  256 => 114,  253 => 113,  249 => 112,  241 => 106,  232 => 99,  225 => 95,  218 => 91,  211 => 87,  204 => 83,  197 => 79,  188 => 72,  179 => 65,  173 => 62,  167 => 59,  161 => 56,  155 => 53,  151 => 51,  146 => 43,  143 => 41,  135 => 37,  129 => 34,  126 => 33,  117 => 26,  112 => 23,  110 => 22,  100 => 15,  96 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!
{% endblock %}

{% block body %}


\t<div
\t\tclass=\"container\">

\t\t{# #########       Barre de recherche       ########### #}

\t\t<div class=\"container-fluid\">
\t\t\t<form class=\"d-flex m-auto\" role=\"search\" action=\"{{ path('app_lookup')}}\">
\t\t\t\t<input class=\"form-control me-2\" type=\"search\" placeholder=\"Recherche..\" aria-label=\"Search\" name=\"search\">
\t\t\t\t<button class=\"btn btn-dark\" type=\"submit\">Rechercher</button>
\t\t\t</form>
\t\t</div>


\t\t{% if app.user %}
\t\t\t<div class=\"text-dark text-center mt-5 mb-4\">
\t\t\t\t<h3 class=\"text-center\">
\t\t\t\t\tHello,
\t\t\t\t\t{{ app.user.prenom }}
\t\t\t\t\t!
\t\t\t\t\t<br>
\t\t\t\t\tBienvenue sur JXAD Musique 🎙️
\t\t\t\t</h3>

\t\t\t\t{# #########       LOGO       ########### #}

\t\t\t\t<img class=\"d-flex m-auto\" src=\"{{ asset('images/LOGO/JxadSf.png')}}\" alt=\"\" style=\"width:300px; height:300px\">

\t\t\t{% else %}
\t\t\t\t<img class=\"d-flex m-auto\" src=\"{{ asset('images/LOGO/JxadSf.png')}}\" alt=\"\" style=\"width:300px; height:300px\">


\t\t\t{% endif %}

\t\t\t{# #########       MENU        ########### #}

\t\t\t<div
\t\t\t\tclass=\"d-flex justify-content-around my-4\">
\t\t\t\t{# {% for value in categorie %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"{{ path('categorie_produits', {'id': value.id}) }}\">{{ value.nom }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %} #}

\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"{{ path('app_musique') }}\">Chanson</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"{{ path('app_parole') }}\">Parole</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"{{ path('app_videos') }}\">Video</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"{{ path('app_instrumental') }}\">Instrumentals</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"border-bottom\">
\t\t\t\t\t<a class=\"menuC fs-5 text-dark\" href=\"{{ path('app_artistes') }}\">Artistes</a>
\t\t\t\t</li>

\t\t\t</div>


\t\t\t{# #########       ARTISTES       ########### #}

\t\t\t<div class=\"parole flex-column p-4 my-5\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Artistes 🦋:</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-evenly mt-4\">
\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/casque.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/garcon.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/me.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/sunset.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/smile.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 mb-4 text-center\">
\t\t\t\t\t\t<img class=\"imgArt\" src=\"{{asset('images/PP/sisters.JPG')}}\" alt=\"\" style=\"width:140px; height:140px\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t{#### Card Musique ########}

\t\t\t<div class=\"parole flex-column p-4 mt-5\">
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

\t\t\t{#### Card Instrumentals ########}

\t\t\t<div class=\"parole flex-column p-4 mt-5\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center\">Instrumentals 🎙️ :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t\t\t\t{% for item in produits %}
\t\t\t\t\t\t{% if item.IdCategorie.id == '14' %}
\t\t\t\t\t\t\t<div class=\"card m-3\" style=\"max-width: 25rem;\">
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

\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">{{ item.prix }}
\t\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"{{ path('post_cart', { 'id': item.id }) }}\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"{{ path('app_login') }}\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>


\t\t\t{#### fin Card ########}


\t\t\t{#### Card Paroles ########}


\t\t\t<div class=\"parole flex-column p-4 mb-4 mt-4\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"ms-4 my-2 text-center mb-4\">Paroles 🎤 :</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex flex-wrap justify-content-start\">
\t\t\t\t\t{% for item in produits %}
\t\t\t\t\t\t{% if item.IdCategorie.id == '2' %}
\t\t\t\t\t\t\t<div class=\"card mb-3\" style=\"max-width: 540px; width: 30rem;\">
\t\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/' ~ item.fichier) }}\" class=\"img-fluid rounded-start\" alt=\"...\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ item.titre }}</h5>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fst-italic\">Artiste :
\t\t\t\t\t\t\t\t\t\t\t\t{{ item.description }}</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"card-text fw-bold\">{{ item.prix }}
\t\t\t\t\t\t\t\t\t\t\t\teuros.</p>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"{{ path('post_cart', { 'id': item.id }) }}\" class=\"btn btn-dark\">Ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"btnPayer\" href=\"{{ path('app_login') }}\" class=\"btn btn-dark\">Se connecter pour ajouter au panier</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endblock %}
", "home/index.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/home/index.html.twig");
    }
}
