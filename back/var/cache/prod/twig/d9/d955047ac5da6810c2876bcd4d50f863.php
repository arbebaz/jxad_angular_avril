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

/* security/login.html.twig */
class __TwigTemplate_1406cfd155cc5bf3b3994b9a2885c2af extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t<form method=\"post\">
\t\t";
        // line 8
        if (($context["error"] ?? null)) {
            // line 9
            echo "\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 9), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 11
        echo "
\t\t";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "\t\t\t<div class=\"mb-3\">
\t\t\t\tYou are logged in as
\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "userIdentifier", [], "any", false, false, false, 15), "html", null, true);
            echo ",
\t\t\t\t<a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t</div>
\t\t";
        }
        // line 19
        echo "
\t\t<div class=\"container\">

\t\t\t<h1 class=\"h3 mb-3 font-weight-normal text-center\">Connexion ! 🔐</h1>

\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t<input type=\"email\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control mb-3\" autocomplete=\"email\" required autofocus>
\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

\t\t\t<input
\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t";
        // line 41
        echo "
\t\t\t<a class=\"d-flex justify-content-center my-3\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">J'ai oublié mon mot de passe 😓 ! Cliquer ici.
\t\t\t</a>


\t\t\t<button class=\"btn btn-lg btn-dark d-flex justify-content-center mt-3\" type=\"submit\">
\t\t\t\tConnexion
\t\t\t</button>
\t\t</form>

\t\t<a class=\"d-flex justify-content-center my-3\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Pas encore inscrit(e) ? Inscription en cliquant ici !
\t\t</a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 51,  113 => 42,  110 => 41,  105 => 30,  97 => 25,  89 => 19,  83 => 16,  79 => 15,  75 => 13,  73 => 12,  70 => 11,  64 => 9,  62 => 8,  59 => 7,  55 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/security/login.html.twig");
    }
}
