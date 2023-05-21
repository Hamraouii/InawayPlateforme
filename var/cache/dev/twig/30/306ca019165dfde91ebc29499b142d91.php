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

/* lycee.html.twig */
class __TwigTemplate_0ead8aa409079adf30a62f7a3c05a5e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lycee.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lycee.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lycee.html.twig", 1);
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

        echo "InaWay";
        
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
        echo "

<!-- Header Layout -->
<div class=\"mdk-header-layout js-mdk-header-layout\">
    ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "    <!-- Header Layout Content -->
    <div class=\"mdk-header-layout__content page-content \">

        <!-- Premiere Section -->
        <div class=\"mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0\"
            data-effects=\"parallax-background blend-background\">
            <div class=\"mdk-box__bg\">
                <div class=\"mdk-box__bg-front\" style=\"background-image: url(assets/images/capture.png);\"></div>
            </div>
            <div class=\"mdk-box__content\">
                <div class=\"container page__container py-64pt py-md-112pt\">
                    <div class=\"row align-items-center text-center text-md-left\">
                        <div class=\"col-md-6 col-lg-5 order-1 order-md-0\">
                            <h1 class=\"text-white\">Ina <span class=\"text-scramble js-text-scramble\">Way</span></h1>
                            <p class=\"lead mb-48pt text-white\">Branches, Filières, Ecoles et Universités. Découvrir tous
                                cela avec InaWay.</p>
                            <a href=\"#\" class=\"btn btn-lg btn-white btn--raised mb-16pt\">Voir plus</a>
                            <p><a href=\"#\" class=\"text-white-70 text-underline\"><strong>Êtes-vous un conseiller en
                                        orientation ?</strong></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // END Premiere Section -->

        <!-- Tronc commun -->
        <div class=\"page-section\">
            <div class=\"container page__container\">
                <div class=\"page-headline text-center\">
                    <h2>Tronc commun</h2>
                    <p class=\"lead measure-lead mx-auto text-black-70\">Vous trouvez ci-dessous les informations sur les
                        troncs communs(passrelles, coefficents,matieres...)</p>
                </div>
                <div class=\"text-center\">
                    <a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pdf/"), "html", null, true);
        echo "info0BAC.pdf\" target=\"_blank\"
                        class=\"btn btn-lg btn-white btn--raised mb-16pt\">Télécharger</a>
                </div>
            </div>
        </div>
        <!-- //END tronc commun -->

        <!-- PBac -->
        <div class=\"bg-white border-bottom-2 py-16pt py-sm-24pt py-md-32pt \">
            <div class=\"container page__container\">
                <div class=\"page-headline text-center\">
                    <h2>Première Bac</h2>
                    <p class=\"lead measure-lead mx-auto text-black-70\">Première année de baccalauréat , 
                    Les élèves sont soumis à un examen régional, qui représente 25% de moyen final du bac .</p>
                </div>
                <div class=\"text-center\">
                    <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pdf/"), "html", null, true);
        echo "info1BAC.pdf\" target=\"_blank\"
                        class=\"btn btn-lg btn-white btn--raised mb-16pt\">Télécharger</a>
                </div>

            </div>
        </div>
        <!-- END PBac -->

        <!-- DBac -->
        <div class=\"page-section\">
            <div class=\"container page__container\">
                <div class=\"page-headline text-center\">
                    <h2>Deuxieme Bac</h2>
                    <p class=\"lead measure-lead mx-auto text-black-70\">C'est la dernière année de l'Enseignement Secondaire , 
                    C'est l'année où les étudiants prennent leurs derniers examens du baccalauréat.</p>
                </div>

                <div class=\"text-center\">
                    <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pdf/"), "html", null, true);
        echo "info2BAC.pdf\" target=\"_blank\"
                        class=\"btn btn-lg btn-white btn--raised mb-16pt\">Télécharger</a>
                </div>
            </div>
        </div>
        <!-- //END DBac -->

    </div>
    <!-- // END Header Layout Content -->

</div>
<!-- // END Header Layout -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    <!-- Header -->

    <div id=\"header\" class=\"mdk-header bg-dark js-mdk-header mb-0\" data-effects=\"waterfall blend-background\" data-fixed
        data-condenses>
        <div class=\"mdk-header__content\">

            <div class=\"navbar navbar-expand-sm navbar-dark bg-dark pr-0 pr-md-16pt\" id=\"navbar\" data-primary>

                <!-- Navbar toggler -->
                <button class=\"navbar-toggler navbar-toggler-right d-block d-md-none\" type=\"button\"
                    data-toggle=\"sidebar\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <!-- Navbar Brand -->
                <a href=\"/\" class=\"navbar-brand\">
                    <img class=\"navbar-brand-icon mr-0 mr-md-8pt\" src=\"assets/images/logo.png\" width=\"30\" alt=\"InaWay\">
                    <span class=\"d-none d-md-block\">InaWay</span>
                </a>



                <!-- Main Navigation -->
                <ul class=\"nav navbar-nav ml-auto d-none d-sm-flex\">
                    ";
        // line 35
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "                    <li class=\"nav-item \">
                        <a href=\"/inscription\" class=\"nav-link\">Inscription</a>
                    </li>
                    <li class=\"nav-item \">
                        <a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            echo " \" class=\"nav-link\">Connexion</a>
                    </li>
                    ";
        } else {
            // line 43
            echo "                    <li class=\"nav-item active\">
                        <a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo " \" class=\"nav-link\">Déconnexion</a>
                    </li>
                    ";
        }
        // line 47
        echo "                </ul>
                <!-- // END Main Navigation -->

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
        return "lycee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 47,  250 => 44,  247 => 43,  241 => 40,  235 => 36,  233 => 35,  207 => 11,  197 => 10,  174 => 126,  153 => 108,  134 => 92,  97 => 57,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}InaWay{% endblock %}

{% block body %}


<!-- Header Layout -->
<div class=\"mdk-header-layout js-mdk-header-layout\">
    {% block header%}
    <!-- Header -->

    <div id=\"header\" class=\"mdk-header bg-dark js-mdk-header mb-0\" data-effects=\"waterfall blend-background\" data-fixed
        data-condenses>
        <div class=\"mdk-header__content\">

            <div class=\"navbar navbar-expand-sm navbar-dark bg-dark pr-0 pr-md-16pt\" id=\"navbar\" data-primary>

                <!-- Navbar toggler -->
                <button class=\"navbar-toggler navbar-toggler-right d-block d-md-none\" type=\"button\"
                    data-toggle=\"sidebar\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <!-- Navbar Brand -->
                <a href=\"/\" class=\"navbar-brand\">
                    <img class=\"navbar-brand-icon mr-0 mr-md-8pt\" src=\"assets/images/logo.png\" width=\"30\" alt=\"InaWay\">
                    <span class=\"d-none d-md-block\">InaWay</span>
                </a>



                <!-- Main Navigation -->
                <ul class=\"nav navbar-nav ml-auto d-none d-sm-flex\">
                    {% if not app.user %}
                    <li class=\"nav-item \">
                        <a href=\"/inscription\" class=\"nav-link\">Inscription</a>
                    </li>
                    <li class=\"nav-item \">
                        <a href=\"{{ path('connexion')}} \" class=\"nav-link\">Connexion</a>
                    </li>
                    {% else %}
                    <li class=\"nav-item active\">
                        <a href=\"{{ path('logout')}} \" class=\"nav-link\">Déconnexion</a>
                    </li>
                    {% endif %}
                </ul>
                <!-- // END Main Navigation -->

            </div>

        </div>
    </div>

    <!-- // END Header -->
    {% endblock %}
    <!-- Header Layout Content -->
    <div class=\"mdk-header-layout__content page-content \">

        <!-- Premiere Section -->
        <div class=\"mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0\"
            data-effects=\"parallax-background blend-background\">
            <div class=\"mdk-box__bg\">
                <div class=\"mdk-box__bg-front\" style=\"background-image: url(assets/images/capture.png);\"></div>
            </div>
            <div class=\"mdk-box__content\">
                <div class=\"container page__container py-64pt py-md-112pt\">
                    <div class=\"row align-items-center text-center text-md-left\">
                        <div class=\"col-md-6 col-lg-5 order-1 order-md-0\">
                            <h1 class=\"text-white\">Ina <span class=\"text-scramble js-text-scramble\">Way</span></h1>
                            <p class=\"lead mb-48pt text-white\">Branches, Filières, Ecoles et Universités. Découvrir tous
                                cela avec InaWay.</p>
                            <a href=\"#\" class=\"btn btn-lg btn-white btn--raised mb-16pt\">Voir plus</a>
                            <p><a href=\"#\" class=\"text-white-70 text-underline\"><strong>Êtes-vous un conseiller en
                                        orientation ?</strong></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // END Premiere Section -->

        <!-- Tronc commun -->
        <div class=\"page-section\">
            <div class=\"container page__container\">
                <div class=\"page-headline text-center\">
                    <h2>Tronc commun</h2>
                    <p class=\"lead measure-lead mx-auto text-black-70\">Vous trouvez ci-dessous les informations sur les
                        troncs communs(passrelles, coefficents,matieres...)</p>
                </div>
                <div class=\"text-center\">
                    <a href=\"{{ asset('assets/pdf/') }}info0BAC.pdf\" target=\"_blank\"
                        class=\"btn btn-lg btn-white btn--raised mb-16pt\">Télécharger</a>
                </div>
            </div>
        </div>
        <!-- //END tronc commun -->

        <!-- PBac -->
        <div class=\"bg-white border-bottom-2 py-16pt py-sm-24pt py-md-32pt \">
            <div class=\"container page__container\">
                <div class=\"page-headline text-center\">
                    <h2>Première Bac</h2>
                    <p class=\"lead measure-lead mx-auto text-black-70\">Première année de baccalauréat , 
                    Les élèves sont soumis à un examen régional, qui représente 25% de moyen final du bac .</p>
                </div>
                <div class=\"text-center\">
                    <a href=\"{{ asset('assets/pdf/') }}info1BAC.pdf\" target=\"_blank\"
                        class=\"btn btn-lg btn-white btn--raised mb-16pt\">Télécharger</a>
                </div>

            </div>
        </div>
        <!-- END PBac -->

        <!-- DBac -->
        <div class=\"page-section\">
            <div class=\"container page__container\">
                <div class=\"page-headline text-center\">
                    <h2>Deuxieme Bac</h2>
                    <p class=\"lead measure-lead mx-auto text-black-70\">C'est la dernière année de l'Enseignement Secondaire , 
                    C'est l'année où les étudiants prennent leurs derniers examens du baccalauréat.</p>
                </div>

                <div class=\"text-center\">
                    <a href=\"{{ asset('assets/pdf/') }}info2BAC.pdf\" target=\"_blank\"
                        class=\"btn btn-lg btn-white btn--raised mb-16pt\">Télécharger</a>
                </div>
            </div>
        </div>
        <!-- //END DBac -->

    </div>
    <!-- // END Header Layout Content -->

</div>
<!-- // END Header Layout -->
{% endblock %}", "lycee.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\lycee.html.twig");
    }
}
