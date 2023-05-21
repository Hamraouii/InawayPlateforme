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

/* eleve/index.html.twig */
class __TwigTemplate_56590d32dd95481a5c1fce01b4de509f extends Template
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
            'header' => [$this, 'block_header'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "eleve/index.html.twig", 1);
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

        echo "Hello ConseillerController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<!-- Header Layout -->
        <div class=\"mdk-header-layout js-mdk-header-layout\">
        ";
        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "    <!-- Header Layout Content -->
        <div class=\"mdk-header-layout__content page-content \">        
     <div class=\"bg-gradient-primary border-bottom-white py-32pt\">
                <div class=\"container d-flex flex-column flex-md-row align-items-center text-center text-md-left\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustration/student/128/white.svg"), "html", null, true);
        echo "\" width=\"104\" class=\"mr-md-32pt mb-32pt mb-md-0\" alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h2 class=\"text-white mb-0\">Naoual Smaili</h2>
                        <p class=\"lead text-white-50 d-flex align-items-center\">Elève</p>
                    </div>
                </div>
            </div>    
            <div class=\"navbar navbar-expand-sm navbar-dark-white bg-gradient-primary p-sm-0 \">
                <div class=\"container page__container\">

                    <!-- Navbar toggler -->
                    <button class=\"navbar-toggler ml-n16pt\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-submenu2\">
                        <span class=\"material-icons\">people_outline</span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbar-submenu2\">
                        <div class=\"navbar-collapse__content pb-16pt pb-sm-0\">
                            <ul class=\"nav navbar-nav\">

                                <li class=\"nav-item active \">
                                    <a href=\"/conseiller\" class=\"nav-link\">Tableau de bord</a>
                                </li>
                                
                                <li class=\"nav-item \">
                                    <a href=\"/forum\" class=\"nav-link\">Discussions</a>
                                </li>

                            </ul>
                            <ul class=\"nav navbar-nav ml-auto\">
                                <li class=\"nav-item \">
                                    <a href=\"/eleve/profil\" class=\"nav-link\">Profil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            test
</div>
</div>
    <!-- // END Header Layout -->



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "            <!-- Header -->

                <div id=\"header\" class=\"mdk-header bg-dark js-mdk-header mb-0\" data-effects=\"waterfall blend-background\" data-fixed data-condenses>
                    <div class=\"mdk-header__content\">

                        <div class=\"navbar navbar-expand-sm navbar-dark bg-dark pr-0 pr-md-16pt\" id=\"navbar\" data-primary>

                            <!-- Navbar toggler -->
                            <button class=\"navbar-toggler navbar-toggler-right d-block d-md-none\" type=\"button\" data-toggle=\"sidebar\">
                                <span class=\"navbar-toggler-icon\"></span>
                            </button>

                            <!-- Navbar Brand -->
                            <a href=\"/\" class=\"navbar-brand\">
                                <img class=\"navbar-brand-icon mr-0 mr-md-8pt\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" width=\"30\" alt=\"InaWay\">
                                <span class=\"d-none d-md-block\">InaWay</span>
                            </a>

                            <form class=\"search-form search-form--black search-form-courses d-none d-md-flex\" action=\"library-filters.php\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Chercher...\">
                                <button class=\"btn\" type=\"submit\" role=\"button\"><i class=\"material-icons\">search</i></button>
                            </form>

                        </div>

                    </div>
                </div>

            <!-- // END Header -->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "eleve/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 23,  167 => 9,  157 => 8,  101 => 43,  95 => 39,  93 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ConseillerController!{% endblock %}

{% block body %}
<!-- Header Layout -->
        <div class=\"mdk-header-layout js-mdk-header-layout\">
        {% block header%}
            <!-- Header -->

                <div id=\"header\" class=\"mdk-header bg-dark js-mdk-header mb-0\" data-effects=\"waterfall blend-background\" data-fixed data-condenses>
                    <div class=\"mdk-header__content\">

                        <div class=\"navbar navbar-expand-sm navbar-dark bg-dark pr-0 pr-md-16pt\" id=\"navbar\" data-primary>

                            <!-- Navbar toggler -->
                            <button class=\"navbar-toggler navbar-toggler-right d-block d-md-none\" type=\"button\" data-toggle=\"sidebar\">
                                <span class=\"navbar-toggler-icon\"></span>
                            </button>

                            <!-- Navbar Brand -->
                            <a href=\"/\" class=\"navbar-brand\">
                                <img class=\"navbar-brand-icon mr-0 mr-md-8pt\" src=\"{{ asset('assets/images/logo.png') }}\" width=\"30\" alt=\"InaWay\">
                                <span class=\"d-none d-md-block\">InaWay</span>
                            </a>

                            <form class=\"search-form search-form--black search-form-courses d-none d-md-flex\" action=\"library-filters.php\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Chercher...\">
                                <button class=\"btn\" type=\"submit\" role=\"button\"><i class=\"material-icons\">search</i></button>
                            </form>

                        </div>

                    </div>
                </div>

            <!-- // END Header -->
        {% endblock %}
    <!-- Header Layout Content -->
        <div class=\"mdk-header-layout__content page-content \">        
     <div class=\"bg-gradient-primary border-bottom-white py-32pt\">
                <div class=\"container d-flex flex-column flex-md-row align-items-center text-center text-md-left\">
                    <img src=\"{{ asset('assets/images/illustration/student/128/white.svg') }}\" width=\"104\" class=\"mr-md-32pt mb-32pt mb-md-0\" alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h2 class=\"text-white mb-0\">Naoual Smaili</h2>
                        <p class=\"lead text-white-50 d-flex align-items-center\">Elève</p>
                    </div>
                </div>
            </div>    
            <div class=\"navbar navbar-expand-sm navbar-dark-white bg-gradient-primary p-sm-0 \">
                <div class=\"container page__container\">

                    <!-- Navbar toggler -->
                    <button class=\"navbar-toggler ml-n16pt\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-submenu2\">
                        <span class=\"material-icons\">people_outline</span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbar-submenu2\">
                        <div class=\"navbar-collapse__content pb-16pt pb-sm-0\">
                            <ul class=\"nav navbar-nav\">

                                <li class=\"nav-item active \">
                                    <a href=\"/conseiller\" class=\"nav-link\">Tableau de bord</a>
                                </li>
                                
                                <li class=\"nav-item \">
                                    <a href=\"/forum\" class=\"nav-link\">Discussions</a>
                                </li>

                            </ul>
                            <ul class=\"nav navbar-nav ml-auto\">
                                <li class=\"nav-item \">
                                    <a href=\"/eleve/profil\" class=\"nav-link\">Profil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            test
</div>
</div>
    <!-- // END Header Layout -->



{% endblock %}
", "eleve/index.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\eleve\\index.html.twig");
    }
}
