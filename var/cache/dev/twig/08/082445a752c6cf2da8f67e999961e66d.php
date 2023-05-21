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
class __TwigTemplate_6926915dbbff15cee27bb5d4ff48374f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        <div class=\"mdk-header-layout__content page-content pb-0\">
            <div class=\"bg-gradient-primary py-32pt\">
                <div class=\"container d-flex flex-column flex-md-row align-items-center text-center text-md-left\">
                    <img src=\"assets/images/illustration/student/128/white.svg\" class=\"mr-md-32pt mb-32pt mb-md-0\"
                         alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h1 class=\"text-white mb-0\">Conexion</h1>
                        <p class=\"lead measure-lead text-white-50\">Gestion du compte</p>
                    </div>
                    <a href=\"/inscription\" class=\"btn btn-outline-white flex-column\">
                        Vous n'avez pas encore de compte?
                        <span class=\"btn__secondary-text\">Inscrivez-vous maintenant!</span>
                    </a>
                </div>
            </div>
            <div class=\"bg-white pt-32pt pt-sm-64pt pb-32pt\">
                <div class=\"container page__container\">
                    <form action=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\" method=\"post\" class=\"col-md-5 p-0 mx-auto\">
                        ";
        // line 28
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "
                            <div class=\"alert alert-danger text-center\">";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageKey", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })()), "messageData", [], "any", false, false, false, 30), "login"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 32
        echo "                        <div class=\"form-group\">
                            <label for=\"email\">Email:</label>
                            <input name=\"_username\" type=\"text\" class=\"form-control\"
                                   placeholder=\"Votre adresse email ...\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Mot de passe:</label>
                            <input name=\"_password\" type=\"password\" class=\"form-control\"
                                   placeholder=\"Votre mot de passe ...\">
                        </div>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-lg btn-accent\">Connexion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- // END Header Layout -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  125 => 32,  120 => 30,  117 => 29,  115 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}InaWay{% endblock %}

{% block body %}

    <!-- Header Layout -->
    <div class=\"mdk-header-layout js-mdk-header-layout\">

        <div class=\"mdk-header-layout__content page-content pb-0\">
            <div class=\"bg-gradient-primary py-32pt\">
                <div class=\"container d-flex flex-column flex-md-row align-items-center text-center text-md-left\">
                    <img src=\"assets/images/illustration/student/128/white.svg\" class=\"mr-md-32pt mb-32pt mb-md-0\"
                         alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h1 class=\"text-white mb-0\">Conexion</h1>
                        <p class=\"lead measure-lead text-white-50\">Gestion du compte</p>
                    </div>
                    <a href=\"/inscription\" class=\"btn btn-outline-white flex-column\">
                        Vous n'avez pas encore de compte?
                        <span class=\"btn__secondary-text\">Inscrivez-vous maintenant!</span>
                    </a>
                </div>
            </div>
            <div class=\"bg-white pt-32pt pt-sm-64pt pb-32pt\">
                <div class=\"container page__container\">
                    <form action=\"{{ path('connexion') }}\" method=\"post\" class=\"col-md-5 p-0 mx-auto\">
                        {% if error %}

                            <div class=\"alert alert-danger text-center\">{{ error.messageKey|trans(error.messageData, 'login') }}</div>
                        {% endif %}
                        <div class=\"form-group\">
                            <label for=\"email\">Email:</label>
                            <input name=\"_username\" type=\"text\" class=\"form-control\"
                                   placeholder=\"Votre adresse email ...\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Mot de passe:</label>
                            <input name=\"_password\" type=\"password\" class=\"form-control\"
                                   placeholder=\"Votre mot de passe ...\">
                        </div>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-lg btn-accent\">Connexion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- // END Header Layout -->
{% endblock %}
", "security/login.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\security\\login.html.twig");
    }
}
