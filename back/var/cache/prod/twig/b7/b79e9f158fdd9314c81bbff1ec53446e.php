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
class __TwigTemplate_050ec632414635bc44344c85ba0ba494 extends Template
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
        echo "<footer class=\"container\">
    <div>
        <li>
            <a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mentions_legales");
        echo "\">Mentions légales</a>
        </li>
        <p>CGU</p>
        <p>CGV</p>
    </div>

    <div>
        <ul>
            <li>
                <h3>Navigation</h3>
            </li>
            <li>
                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Page d'accueil 🏠</a>
            </li>
            <li>
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Musique 🎧</a>
            </li>
            <li>
                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Paroles 🎤</a>
            </li>
            <li>
                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Artistes 🦋</a>
            </li>
            <li>
                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Contact 📨</a>
            </li>
            <li>
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Playlist ⏯️</a>
            </li>
        </ul>
    </div>

    <div>
        <ul>
            <li>
                <p>© arbebaz</p>
            </li>
            <a href=\"https://github.com/arbebaz\">
                <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/github.png"), "html", null, true);
        echo "\" alt=\"\" height=\"50\">
            </a>
        </ul>
    </div>

    <div>
        <ul>
            <li>
                <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Contactez-nous 🤳🏽</a>
            </li>
            <a href=\"https://www.instagram.com/jxadmusic_/\">
                <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icones/instagram.png"), "html", null, true);
        echo "\" alt=\"\" height=\"100\">
            </a>
        </ul>
    </div>
</footer>
";
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
        return array (  118 => 53,  112 => 50,  101 => 42,  87 => 31,  81 => 28,  75 => 25,  69 => 22,  63 => 19,  57 => 16,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "footer.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/footer.html.twig");
    }
}
