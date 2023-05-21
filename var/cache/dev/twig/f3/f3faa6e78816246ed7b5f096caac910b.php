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

/* security/singup.html.twig */
class __TwigTemplate_d8624ad874369be4606b0e98b65c0e79 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/singup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/singup.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/singup.html.twig", 1);
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

            <div class=\"py-64pt bg-gradient-primary\">
                <div class=\"container d-flex flex-column flex-md-row align-items-center text-center text-md-left\">
                    <img src=\"assets/images/illustration/student/128/white.svg\" class=\"mr-md-32pt mb-32pt mb-md-0\"
                         alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h1 class=\"text-white mb-8pt\">Inscription</h1>
                        <p class=\"lead measure-lead text-white-50\">Tracer bien votre avenir avec vos nous.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-outline-white flex-column\">
                        Questions?
                        <span class=\"btn__secondary-text\">Visiter notre centre d'aide</span>
                    </a>
                </div>
            </div>
            <div class=\"py-32pt bg-white border-bottom-2\">
                <div class=\"container page__container\">
                    <a href=\"/inscription\">
                                <span class=\"progression-bar__item-content\">
                                    <span class=\"progression-bar__item-text h5 mb-0 text-uppercase\">Détailles du compte</span>
                                </span>
                    </a>
                </div>
            </div>

            <div class=\"bg-white py-32pt py-lg-64pt\">
                <div class=\"container page__container\">
                    <div class=\"col-lg-10 p-0 mx-auto\">
                        <div class=\"row\">
                            <div class=\"col-md-12 mb-24pt mb-md-0\">
                                <form action=\"/inscription/ajouter\" method=\"post\" enctype=\"multipart/form-data\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <label for=\"prenom\">Prénom:</label>
                                                <input name=\"prenom\" type=\"text\" class=\"form-control\"
                                                       placeholder=\"Votre prénom ...\">
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <label for=\"nom\">Nom:</label>
                                                <input name=\"nom\" type=\"text\" class=\"form-control\"
                                                       placeholder=\"Votre nom ...\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <label for=\"cne\">CNE:</label>
                                                <input name=\"cne\" type=\"text\" class=\"form-control\"
                                                       placeholder=\"Votre CNE ...\">
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <label for=\"cne\">CIN:</label>
                                                <input name=\"cin\" type=\"text\" class=\"form-control\"
                                                       placeholder=\"Votre CIN ...\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <label for=\"email\">Email:</label>
                                                <input name=\"email\" type=\"email\" class=\"form-control\"
                                                       placeholder=\"Votre adresse email ...\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <br><label for=\"password\">Mot de passe:</label>
                                                <input name=\"password\" type=\"password\" class=\"form-control\"
                                                       placeholder=\"Votre mot de passe ...\">
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <br><label for=\"confirm_password\">Confirmer le Mot de passe:</label>
                                                <input name=\"confirm_password\" type=\"password\" class=\"form-control\"
                                                       placeholder=\"Répeter votre mot de passe ...\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <label for=\"nom\">Niveau:</label><br>
                                                <select name=\"niveau\" class=\"form-control custom-select w-auto\">
                                                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 99
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "idNiveau", [], "any", false, false, false, 99), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "Nom", [], "any", false, false, false, 99), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <label for=\"nom\">Avatar:</label><br>
                                                <input type=\"file\" name=\"avatar\" accept=\"image/png, image/jpeg\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <label for=\"nom\">Académie:</label><br>
                                                <select name=\"acadimie\" class=\"form-control custom-select w-auto\">
                                                    ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acadimie"]) || array_key_exists("acadimie", $context) ? $context["acadimie"] : (function () { throw new RuntimeError('Variable "acadimie" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 115
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "idAcadimie", [], "any", false, false, false, 115), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Nom", [], "any", false, false, false, 115), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                                                </select>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <label for=\"nom\">Direction:</label><br>
                                                <select name=\"direction\" class=\"form-control custom-select w-auto\">
                                                    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 123
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "idDirection", [], "any", false, false, false, 123), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "Nom", [], "any", false, false, false, 123), "html", null, true);
            echo "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"text-center\">
                                        <button class=\"btn btn-lg btn-accent\">Créer un compte</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
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
        return "security/singup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 125,  238 => 123,  234 => 122,  227 => 117,  216 => 115,  212 => 114,  197 => 101,  186 => 99,  182 => 98,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}InaWay{% endblock %}

{% block body %}

    <!-- Header Layout -->
    <div class=\"mdk-header-layout js-mdk-header-layout\">

        <div class=\"mdk-header-layout__content page-content pb-0\">

            <div class=\"py-64pt bg-gradient-primary\">
                <div class=\"container d-flex flex-column flex-md-row align-items-center text-center text-md-left\">
                    <img src=\"assets/images/illustration/student/128/white.svg\" class=\"mr-md-32pt mb-32pt mb-md-0\"
                         alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h1 class=\"text-white mb-8pt\">Inscription</h1>
                        <p class=\"lead measure-lead text-white-50\">Tracer bien votre avenir avec vos nous.</p>
                    </div>
                    <a href=\"#\" class=\"btn btn-outline-white flex-column\">
                        Questions?
                        <span class=\"btn__secondary-text\">Visiter notre centre d'aide</span>
                    </a>
                </div>
            </div>
            <div class=\"py-32pt bg-white border-bottom-2\">
                <div class=\"container page__container\">
                    <a href=\"/inscription\">
                                <span class=\"progression-bar__item-content\">
                                    <span class=\"progression-bar__item-text h5 mb-0 text-uppercase\">Détailles du compte</span>
                                </span>
                    </a>
                </div>
            </div>

            <div class=\"bg-white py-32pt py-lg-64pt\">
                <div class=\"container page__container\">
                    <div class=\"col-lg-10 p-0 mx-auto\">
                        <div class=\"row\">
                            <div class=\"col-md-12 mb-24pt mb-md-0\">
                                <form action=\"/inscription/ajouter\" method=\"post\" enctype=\"multipart/form-data\">
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <label for=\"prenom\">Prénom:</label>
                                                <input name=\"prenom\" type=\"text\" class=\"form-control\"
                                                       placeholder=\"Votre prénom ...\">
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <label for=\"nom\">Nom:</label>
                                                <input name=\"nom\" type=\"text\" class=\"form-control\"
                                                       placeholder=\"Votre nom ...\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <label for=\"cne\">CNE:</label>
                                                <input name=\"cne\" type=\"text\" class=\"form-control\"
                                                       placeholder=\"Votre CNE ...\">
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <label for=\"cne\">CIN:</label>
                                                <input name=\"cin\" type=\"text\" class=\"form-control\"
                                                       placeholder=\"Votre CIN ...\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-12\">
                                                <label for=\"email\">Email:</label>
                                                <input name=\"email\" type=\"email\" class=\"form-control\"
                                                       placeholder=\"Votre adresse email ...\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <br><label for=\"password\">Mot de passe:</label>
                                                <input name=\"password\" type=\"password\" class=\"form-control\"
                                                       placeholder=\"Votre mot de passe ...\">
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <br><label for=\"confirm_password\">Confirmer le Mot de passe:</label>
                                                <input name=\"confirm_password\" type=\"password\" class=\"form-control\"
                                                       placeholder=\"Répeter votre mot de passe ...\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <label for=\"nom\">Niveau:</label><br>
                                                <select name=\"niveau\" class=\"form-control custom-select w-auto\">
                                                    {% for n in niveau %}
                                                        <option value=\"{{ n.idNiveau }}\">{{ n.Nom }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <label for=\"nom\">Avatar:</label><br>
                                                <input type=\"file\" name=\"avatar\" accept=\"image/png, image/jpeg\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <label for=\"nom\">Académie:</label><br>
                                                <select name=\"acadimie\" class=\"form-control custom-select w-auto\">
                                                    {% for a in acadimie %}
                                                        <option value=\"{{ a.idAcadimie }}\">{{ a.Nom }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <label for=\"nom\">Direction:</label><br>
                                                <select name=\"direction\" class=\"form-control custom-select w-auto\">
                                                    {% for d in direction %}
                                                        <option value=\"{{ d.idDirection }}\">{{ d.Nom }}</option>
                                                    {% endfor %}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"text-center\">
                                        <button class=\"btn btn-lg btn-accent\">Créer un compte</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- // END Header Layout -->
{% endblock %}
", "security/singup.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\security\\singup.html.twig");
    }
}
