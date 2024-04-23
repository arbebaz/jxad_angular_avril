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

/* base.html.twig */
class __TwigTemplate_cc9e6f2b240eacfa2a54eae2ac971b41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'h3' => [$this, 'block_h3'],
            'p' => [$this, 'block_p'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

\t\t";
        // line 13
        echo "
\t\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "

\t</head>
\t<body>


\t\t";
        // line 21
        $this->loadTemplate("nav.html.twig", "base.html.twig", 21)->display($context);
        // line 22
        echo "
\t\t<h3 class=\"text-center m-4\"> ";
        // line 23
        $this->displayBlock('h3', $context, $blocks);
        // line 24
        echo "\t\t\t</h3>
\t\t\t<p>
\t\t\t\t";
        // line 26
        $this->displayBlock('p', $context, $blocks);
        // line 27
        echo "\t\t\t</p>

\t\t\t";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
\t\t\t";
        // line 38
        $this->loadTemplate("footer.html.twig", "base.html.twig", 38)->display($context);
        // line 39
        echo "

\t\t\t";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "

\t\t</body>
\t</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!
\t\t\t";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 23
    public function block_h3($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_p($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "
\t\t\t\t<header>
\t\t\t\t\t";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 33
        echo "\t\t\t\t</header>


\t\t\t";
    }

    // line 32
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "\t\t\t\t
\t\t\t\t<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>

\t\t\t";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 43,  166 => 42,  162 => 41,  156 => 32,  149 => 33,  147 => 32,  143 => 30,  139 => 29,  133 => 26,  127 => 23,  121 => 14,  113 => 6,  105 => 47,  103 => 41,  99 => 39,  97 => 38,  94 => 37,  92 => 29,  88 => 27,  86 => 26,  82 => 24,  80 => 23,  77 => 22,  75 => 21,  67 => 15,  65 => 14,  62 => 13,  57 => 10,  53 => 8,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/abeba/Desktop/jxadMusic/templates/base.html.twig");
    }
}
