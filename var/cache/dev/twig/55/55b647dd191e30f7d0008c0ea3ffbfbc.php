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

/* eleve/profil.html.twig */
class __TwigTemplate_37ad608a043733f5487534307a4da64a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "eleve/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "eleve/profil.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustration/student/128/white.svg"), "html", null, true);
        echo "\" width=\"104\"
                         class=\"mr-md-32pt mb-32pt mb-md-0\" alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h2 class=\"text-white mb-0\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "html", null, true);
        echo "</h2>
                        <p class=\"lead text-white-50 d-flex align-items-center\">Elève</p>
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
                                    <a href=\"/forum\" class=\"nav-link\">Discussions</a>
                                </li>

                            </ul>
                            <ul class=\"nav navbar-nav ml-auto\">
                                <li class=\"nav-item active\">
                                    <a href=\"/eleve/profil\" class=\"nav-link\">Profil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--Profile-->
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-5\"
                     style=\"margin-top:20px;margin-bottom:20px;margin-left:20px;margin-left:110px;\">
                    <div class=\"card card-stats mb-4 mb-xl-0\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/people/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "avatar", [], "any", false, false, false, 67)), "html", null, true);
        echo "\" alt=\"Avatar\"
                                         class=\"avatar\">
                                </div>
                            </div>
                            <form action=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierAvatar", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "idUser", [], "any", false, false, false, 71)]), "html", null, true);
        echo "\" method=\"post\"
                                  enctype=\"multipart/form-data\">
                                <div class=\"row\" style=\"margin-top:15px;\">
                                    <div class='col-lg-12 text-center' style=\"margin-left\">
                                        <label class=\"card-title  text-muted mb-0\">Changer avatar</label>
                                        <input type=\"file\" name=\"avatar\" class='form-control'/>
                                        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-save\"
                                                                                                aria-hidden=\"true\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div>
                                <div class=\"card-body pt-0 pt-md-4\">
                                    <div class=\"text-center\" style=\"margin-top:10px;\">
                                        <h3>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "prenom", [], "any", false, false, false, 86), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "nom", [], "any", false, false, false, 86), "html", null, true);
        echo "</h3>
                                        <div class=\"h5 mt-4\">
                                            <i class=\"ni business_briefcase-24 mr-2\"></i>Elève
                                        </div>
                                        <div>
                                            <i class=\"ni education_hat mr-2\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "email", [], "any", false, false, false, 91), "html", null, true);
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
                                <form action=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierProfile", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "idUser", [], "any", false, false, false, 113)]), "html", null, true);
        echo "\" method=\"post\"
                                      enctype='multipart/form-data'>
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Prénom</label>
                                                <input class='form-control' name='prenom' type='text' required
                                                       value='";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 120, $this->source); })()), "prenom", [], "any", false, false, false, 120), "html", null, true);
        echo "'/>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Nom</label>
                                                <input class='form-control' name='nom' type='text' required
                                                       value='";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 127, $this->source); })()), "nom", [], "any", false, false, false, 127), "html", null, true);
        echo "'/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Second row-->
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Email</label>
                                                <input class='form-control' name='email' type='email' required
                                                       value='";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 137, $this->source); })()), "email", [], "any", false, false, false, 137), "html", null, true);
        echo "'/>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Mot de passe</label>
                                                <input class='form-control' name='pass' type='password' required
                                                       value=''/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--third row-->
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">CNE</label>
                                                <input class='form-control' name='cne' type='text' required
                                                       value='";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 154, $this->source); })()), "cne", [], "any", false, false, false, 154), "html", null, true);
        echo "'/>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Niveau</label>
                                                <select name=\"secteur\" class=\"form-control form-control-alternative\">
                                                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 161, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 162
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "idNiveau", [], "any", false, false, false, 162), "html", null, true);
            echo "\"
                                                                ";
            // line 163
            if ((twig_get_attribute($this->env, $this->source, $context["n"], "Nom", [], "any", false, false, false, 163) == twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 163, $this->source); })()), "idNiveau", [], "any", false, false, false, 163))) {
                // line 164
                echo "                                                                    selected
                                                                ";
            }
            // line 166
            echo "                                                        >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "Nom", [], "any", false, false, false, 166), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--hr-->
                                    <div class='modal-footer'>
                                        <div class=\"col-1 text-right\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" name=\"mod\"
                                                    style=\"color:white;cursor:pointer;\">Modifier
                                            </button>
                                        </div>
                                        <div class=\"col-4 text-right\" style=\"float:right;\">
                                            <button type=\"reset\" class=\"btn btn-sm\"
                                                    style=\"color:white;background-color:#ed0b4c; margin-left:50px\">
                                                Réinitialisé
                                            </button>
                                        </div>
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
        return "eleve/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 168,  319 => 166,  315 => 164,  313 => 163,  308 => 162,  304 => 161,  294 => 154,  274 => 137,  261 => 127,  251 => 120,  241 => 113,  216 => 91,  206 => 86,  188 => 71,  181 => 67,  135 => 26,  129 => 23,  120 => 16,  110 => 15,  91 => 5,  81 => 4,  60 => 3,  37 => 1,);
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
                    <img src=\"{{ asset('assets/images/illustration/student/128/white.svg') }}\" width=\"104\"
                         class=\"mr-md-32pt mb-32pt mb-md-0\" alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h2 class=\"text-white mb-0\">{{ user.prenom }} {{ user.nom }}</h2>
                        <p class=\"lead text-white-50 d-flex align-items-center\">Elève</p>
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
                                    <a href=\"/forum\" class=\"nav-link\">Discussions</a>
                                </li>

                            </ul>
                            <ul class=\"nav navbar-nav ml-auto\">
                                <li class=\"nav-item active\">
                                    <a href=\"/eleve/profil\" class=\"nav-link\">Profil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--Profile-->
            <div class=\"row\">
                <div class=\"col-xl-4 col-lg-5\"
                     style=\"margin-top:20px;margin-bottom:20px;margin-left:20px;margin-left:110px;\">
                    <div class=\"card card-stats mb-4 mb-xl-0\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <img src=\"{{ asset('assets/images/people/')~ user.avatar }}\" alt=\"Avatar\"
                                         class=\"avatar\">
                                </div>
                            </div>
                            <form action=\"{{ path('modifierAvatar',{id:user.idUser} ) }}\" method=\"post\"
                                  enctype=\"multipart/form-data\">
                                <div class=\"row\" style=\"margin-top:15px;\">
                                    <div class='col-lg-12 text-center' style=\"margin-left\">
                                        <label class=\"card-title  text-muted mb-0\">Changer avatar</label>
                                        <input type=\"file\" name=\"avatar\" class='form-control'/>
                                        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-save\"
                                                                                                aria-hidden=\"true\"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div>
                                <div class=\"card-body pt-0 pt-md-4\">
                                    <div class=\"text-center\" style=\"margin-top:10px;\">
                                        <h3>{{ user.prenom }} {{ user.nom }}</h3>
                                        <div class=\"h5 mt-4\">
                                            <i class=\"ni business_briefcase-24 mr-2\"></i>Elève
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
                                <form action=\"{{ path('modifierProfile',{id:user.idUser} ) }}\" method=\"post\"
                                      enctype='multipart/form-data'>
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Prénom</label>
                                                <input class='form-control' name='prenom' type='text' required
                                                       value='{{ user.prenom }}'/>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Nom</label>
                                                <input class='form-control' name='nom' type='text' required
                                                       value='{{ user.nom }}'/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Second row-->
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Email</label>
                                                <input class='form-control' name='email' type='email' required
                                                       value='{{ user.email }}'/>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Mot de passe</label>
                                                <input class='form-control' name='pass' type='password' required
                                                       value=''/>
                                            </div>
                                        </div>
                                    </div>
                                    <!--third row-->
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">CNE</label>
                                                <input class='form-control' name='cne' type='text' required
                                                       value='{{ eleve.cne }}'/>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='form-group'>
                                                <label class=\"text-muted mb-0\">Niveau</label>
                                                <select name=\"secteur\" class=\"form-control form-control-alternative\">
                                                    {% for n in niveau %}
                                                        <option value=\"{{ n.idNiveau }}\"
                                                                {% if  n.Nom ==  eleve.idNiveau %}
                                                                    selected
                                                                {% endif %}
                                                        >{{ n.Nom }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--hr-->
                                    <div class='modal-footer'>
                                        <div class=\"col-1 text-right\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-primary\" name=\"mod\"
                                                    style=\"color:white;cursor:pointer;\">Modifier
                                            </button>
                                        </div>
                                        <div class=\"col-4 text-right\" style=\"float:right;\">
                                            <button type=\"reset\" class=\"btn btn-sm\"
                                                    style=\"color:white;background-color:#ed0b4c; margin-left:50px\">
                                                Réinitialisé
                                            </button>
                                        </div>
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



{% endblock %}", "eleve/profil.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\eleve\\profil.html.twig");
    }
}
