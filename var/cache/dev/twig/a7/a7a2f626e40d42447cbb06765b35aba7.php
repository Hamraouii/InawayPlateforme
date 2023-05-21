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

/* conseiller/profil.html.twig */
class __TwigTemplate_609a5ffe512d69ec739878e37ba6322f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'js_page' => [$this, 'block_js_page'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conseiller/profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conseiller/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conseiller/profil.html.twig", 1);
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

        echo "Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "prenom", [], "any", false, false, false, 3), "html", null, true);
        echo " !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_js_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_page"));

        // line 5
        echo "    <style>
        .avatar {
            margin-left: 110px;
            vertical-align: middle;
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <!-- Header Layout -->
    <div class=\"mdk-header-layout js-mdk-header-layout\">

        <!-- Header Layout Content -->
        <div class=\"mdk-header-layout__content page-content \">
            <div class=\"bg-gradient-primary border-bottom-white py-32pt\">
                <div class=\"container d-flex flex-column flex-md-row align-items-center text-center text-md-left\">
                    <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustration/teacher/128/white.svg"), "html", null, true);
        echo "\" width=\"104\"
                         class=\"mr-md-32pt mb-32pt mb-md-0\" alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h2 class=\"text-white mb-0\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo "</h2>
                        <p class=\"lead text-white-50 d-flex align-items-center\">Conseiller</p>
                    </div>
                </div>
            </div>
            <div class=\"navbar navbar-expand-sm navbar-dark-white bg-gradient-primary p-sm-0 \">
                <div class=\"container page__container\">

                    <!-- Navbar toggler -->
                    <button class=\"navbar-toggler ml-n16pt\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#navbar-submenu2\">
                        <span class=\"material-icons\">people_outline</span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbar-submenu2\">
                        <div class=\"navbar-collapse__content pb-16pt pb-sm-0\">
                            <ul class=\"nav navbar-nav\">

                                <li class=\"nav-item \">
                                    <a href=\"/conseiller\" class=\"nav-link\">Tableau de bord</a>
                                </li>

                                <li class=\"nav-item \">
                                    <a href=\"/forum\" class=\"nav-link\">Discussions</a>
                                </li>

                            </ul>
                            <ul class=\"nav navbar-nav ml-auto\">
                                <li class=\"nav-item active\">
                                    <a href=\"/conseiller/profil\" class=\"nav-link\">Profil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Profile-->
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-5\" style=\"margin-top:20px;margin-bottom:20px;margin-left:110px;\">
                    <div class=\"card card-stats mb-4 mb-xl-0\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/people/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "avatar", [], "any", false, false, false, 69)), "html", null, true);
        echo "\" alt=\"Avatar\"
                                         class=\"avatar\">
                                </div>
                            </div>
                            <div>
                                <div class=\"card-body pt-0 pt-md-4\">
                                    <div class=\"text-center\" style=\"margin-top:10px;\">
                                        <h3>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "prenom", [], "any", false, false, false, 76), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "nom", [], "any", false, false, false, 76), "html", null, true);
        echo "</h3>
                                        <div class=\"h5 mt-4\">
                                            <i class=\"ni business_briefcase-24 mr-2\"></i>Conseiller
                                        </div>
                                        <div>
                                            <i class=\"ni education_hat mr-2\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), "html", null, true);
        echo "</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end Container1-->
                <!--Container2-->
                <div class=\"col-xl-6 col-lg-12\" style=\"margin-top:20px;margin-bottom:20px;\">
                    <div class=\"card card-stats mb-4 mb-xl-0\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <h5 class=\"card-title text-uppercase text-muted mb-0 text-center\">Details
                                        utilisateur</h5>
                                    <hr>
                                    <br>
                                </div>
                            </div>
                            <div class=\"row\" style=\"margin-left:60px; margin-top:10px;\">
                                <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Prénom</label>
                                                <input class='form-control' name='prenom' type='text' required
                                                       value='";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 109, $this->source); })()), "prenom", [], "any", false, false, false, 109), "html", null, true);
        echo " ' disabled/>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Nom</label>
                                                <input class='form-control' name='nom' type='text' required
                                                       value='";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 116, $this->source); })()), "nom", [], "any", false, false, false, 116), "html", null, true);
        echo "' disabled/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Second row-->
                                    <div class='row'>
                                        <div class='col-lg-12'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Email</label>
                                                <input class='form-control' name='email' type='email' required
                                                       value='";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "email", [], "any", false, false, false, 126), "html", null, true);
        echo "' disabled/>
                                            </div>
                                        </div>

                                    </div>
                                    <!--third row-->
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">CIN</label>
                                                <input class='form-control' name='cin' type='text' required
                                                       value='";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 137, $this->source); })()), "cin", [], "any", false, false, false, 137), "html", null, true);
        echo "' disabled/>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>

                                        </div>
                                    </div>
                                    <!--hr-->

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Profile-->
    </div></div>
    <!-- // END Header Layout -->



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "conseiller/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 137,  257 => 126,  244 => 116,  234 => 109,  203 => 81,  193 => 76,  183 => 69,  135 => 26,  129 => 23,  120 => 16,  110 => 15,  91 => 5,  81 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bonjour {{app.user.prenom}} !{% endblock %}
{% block js_page %}
    <style>
        .avatar {
            margin-left: 110px;
            vertical-align: middle;
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
    </style>
{% endblock %}
{% block body %}
    <!-- Header Layout -->
    <div class=\"mdk-header-layout js-mdk-header-layout\">

        <!-- Header Layout Content -->
        <div class=\"mdk-header-layout__content page-content \">
            <div class=\"bg-gradient-primary border-bottom-white py-32pt\">
                <div class=\"container d-flex flex-column flex-md-row align-items-center text-center text-md-left\">
                    <img src=\"{{ asset('assets/images/illustration/teacher/128/white.svg') }}\" width=\"104\"
                         class=\"mr-md-32pt mb-32pt mb-md-0\" alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h2 class=\"text-white mb-0\">{{ user.prenom }} {{ user.nom }}</h2>
                        <p class=\"lead text-white-50 d-flex align-items-center\">Conseiller</p>
                    </div>
                </div>
            </div>
            <div class=\"navbar navbar-expand-sm navbar-dark-white bg-gradient-primary p-sm-0 \">
                <div class=\"container page__container\">

                    <!-- Navbar toggler -->
                    <button class=\"navbar-toggler ml-n16pt\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#navbar-submenu2\">
                        <span class=\"material-icons\">people_outline</span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbar-submenu2\">
                        <div class=\"navbar-collapse__content pb-16pt pb-sm-0\">
                            <ul class=\"nav navbar-nav\">

                                <li class=\"nav-item \">
                                    <a href=\"/conseiller\" class=\"nav-link\">Tableau de bord</a>
                                </li>

                                <li class=\"nav-item \">
                                    <a href=\"/forum\" class=\"nav-link\">Discussions</a>
                                </li>

                            </ul>
                            <ul class=\"nav navbar-nav ml-auto\">
                                <li class=\"nav-item active\">
                                    <a href=\"/conseiller/profil\" class=\"nav-link\">Profil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Profile-->
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-5\" style=\"margin-top:20px;margin-bottom:20px;margin-left:110px;\">
                    <div class=\"card card-stats mb-4 mb-xl-0\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <img src=\"{{ asset('assets/images/people/')~ user.avatar }}\" alt=\"Avatar\"
                                         class=\"avatar\">
                                </div>
                            </div>
                            <div>
                                <div class=\"card-body pt-0 pt-md-4\">
                                    <div class=\"text-center\" style=\"margin-top:10px;\">
                                        <h3>{{ user.prenom }} {{ user.nom }}</h3>
                                        <div class=\"h5 mt-4\">
                                            <i class=\"ni business_briefcase-24 mr-2\"></i>Conseiller
                                        </div>
                                        <div>
                                            <i class=\"ni education_hat mr-2\">{{ user.email }}</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end Container1-->
                <!--Container2-->
                <div class=\"col-xl-6 col-lg-12\" style=\"margin-top:20px;margin-bottom:20px;\">
                    <div class=\"card card-stats mb-4 mb-xl-0\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <h5 class=\"card-title text-uppercase text-muted mb-0 text-center\">Details
                                        utilisateur</h5>
                                    <hr>
                                    <br>
                                </div>
                            </div>
                            <div class=\"row\" style=\"margin-left:60px; margin-top:10px;\">
                                <form action=\"#\" method=\"post\" enctype='multipart/form-data'>
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Prénom</label>
                                                <input class='form-control' name='prenom' type='text' required
                                                       value='{{ user.prenom }} ' disabled/>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Nom</label>
                                                <input class='form-control' name='nom' type='text' required
                                                       value='{{ user.nom }}' disabled/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Second row-->
                                    <div class='row'>
                                        <div class='col-lg-12'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Email</label>
                                                <input class='form-control' name='email' type='email' required
                                                       value='{{ user.email }}' disabled/>
                                            </div>
                                        </div>

                                    </div>
                                    <!--third row-->
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">CIN</label>
                                                <input class='form-control' name='cin' type='text' required
                                                       value='{{ user.cin }}' disabled/>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>

                                        </div>
                                    </div>
                                    <!--hr-->

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Profile-->
    </div></div>
    <!-- // END Header Layout -->



{% endblock %}
", "conseiller/profil.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\conseiller\\profil.html.twig");
    }
}
