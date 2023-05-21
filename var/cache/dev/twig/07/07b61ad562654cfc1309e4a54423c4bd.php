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

/* forum_answer.html.twig */
class __TwigTemplate_c37fe4f0fc3d300a6e168db1bf27c4ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum_answer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum_answer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum_answer.html.twig", 1);
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

        echo "Forum | InaWay";
        
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

    <div class=\"mdk-header-layout js-mdk-header-layout\">
        <div class=\"mdk-header-layout__content page-content \">
            <div class=\"container page__container\">
                <div class=\"page-section\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1 class=\"h2 mb-2\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 14, $this->source); })()), "TITRE", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
                            <p class=\"text-muted d-flex align-items-center mb-32pt mb-lg-48pt\">
                                <a href=\"/forum\" class=\"mr-3\">Retour</a>
                            </p>
                            <div class=\"card card-body\">
                                <div class=\"d-flex\">
                                    <a href=\"#\" class=\"avatar mr-3\">
                                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/people/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 21, $this->source); })()), "idUser", [], "any", false, false, false, 21), "avatar", [], "any", false, false, false, 21))), "html", null, true);
        echo "\" alt=\"people\"
                                             class=\"avatar-img rounded-circle\">
                                    </a>
                                    <div class=\"flex\">
                                        <p class=\"d-flex align-items-center mb-2\">
                                            <a href=\"#\" class=\"text-body mr-2\"><strong>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 26, $this->source); })()), "idUser", [], "any", false, false, false, 26), "html", null, true);
        echo "</strong></a>
                                            <small class=\"text-muted\">";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 27, $this->source); })()), "DATE", [], "any", false, false, false, 27), "d/m/Y"), "html", null, true);
        echo "</small>
                                        </p>
                                        <p>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 29, $this->source); })()), "contenu", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </div>

                            <form methode=\"post\" action=\"/forum_answer/ajouter/";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 34, $this->source); })()), "idQuestion", [], "any", false, false, false, 34), "html", null, true);
        echo "\">

                                <div class=\"d-flex mb-4\">
                                    <a href=\"#\" class=\"avatar mr-3\">
                                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/people/") . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "avatar", [], "any", false, false, false, 38)), "html", null, true);
        echo "\" alt=\"people\"
                                             class=\"avatar-img rounded-circle\">
                                    </a>
                                    <div class=\"flex\">
                                        <input type=\"hidden\" name=\"question\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 42, $this->source); })()), "idQuestion", [], "any", false, false, false, 42), "html", null, true);
        echo "\"/>
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control\" name=\"comment\" id=\"comment\" rows=\"3\"
                                                      placeholder=\"Répondre ...\"></textarea>
                                        </div>
                                        <button class=\"btn btn-accent\">Envoyer</button>
                                    </div>
                                </div>

                            </form>

                            <div class=\"pt-3\">

                                <h4>";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["nbrCommentaire"]) || array_key_exists("nbrCommentaire", $context) ? $context["nbrCommentaire"] : (function () { throw new RuntimeError('Variable "nbrCommentaire" does not exist.', 55, $this->source); })()), "html", null, true);
        echo " Commentaires</h4>

                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaire"]) || array_key_exists("commentaire", $context) ? $context["commentaire"] : (function () { throw new RuntimeError('Variable "commentaire" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 58
            echo "                                    <div class=\"ml-sm-32pt mt-3 card p-3\">
                                        <div class=\"d-flex\">
                                            <a href=\"#\" class=\"avatar avatar-xs mr-3\">
                                                <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/people/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "idUser", [], "any", false, false, false, 61), "avatar", [], "any", false, false, false, 61))), "html", null, true);
            echo "\"
                                                     alt=\"Guy\" class=\"avatar-img rounded-circle\">
                                            </a>
                                            <div class=\"flex\">
                                                <div class=\"d-flex align-items-center\">
                                                    <a href=\"#\" class=\"text-body\"><strong>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "idUser", [], "any", false, false, false, 66), "html", null, true);
            echo "</strong></a>
                                                </div>
                                                <p class=\"mt-1 mb-0 text-black-70\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "contenu", [], "any", false, false, false, 68), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "forum_answer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 73,  190 => 68,  185 => 66,  177 => 61,  172 => 58,  168 => 57,  163 => 55,  147 => 42,  140 => 38,  133 => 34,  125 => 29,  120 => 27,  116 => 26,  108 => 21,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Forum | InaWay{% endblock %}

{% block body %}


    <div class=\"mdk-header-layout js-mdk-header-layout\">
        <div class=\"mdk-header-layout__content page-content \">
            <div class=\"container page__container\">
                <div class=\"page-section\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1 class=\"h2 mb-2\">{{ sujet.TITRE }}</h1>
                            <p class=\"text-muted d-flex align-items-center mb-32pt mb-lg-48pt\">
                                <a href=\"/forum\" class=\"mr-3\">Retour</a>
                            </p>
                            <div class=\"card card-body\">
                                <div class=\"d-flex\">
                                    <a href=\"#\" class=\"avatar mr-3\">
                                        <img src=\"{{ asset('assets/images/people/'~sujet.idUser.avatar) }}\" alt=\"people\"
                                             class=\"avatar-img rounded-circle\">
                                    </a>
                                    <div class=\"flex\">
                                        <p class=\"d-flex align-items-center mb-2\">
                                            <a href=\"#\" class=\"text-body mr-2\"><strong>{{ sujet.idUser }}</strong></a>
                                            <small class=\"text-muted\">{{ sujet.DATE|date('d/m/Y') }}</small>
                                        </p>
                                        <p>{{ sujet.contenu }}</p>
                                    </div>
                                </div>
                            </div>

                            <form methode=\"post\" action=\"/forum_answer/ajouter/{{ sujet.idQuestion }}\">

                                <div class=\"d-flex mb-4\">
                                    <a href=\"#\" class=\"avatar mr-3\">
                                        <img src=\"{{ asset('assets/images/people/')~ user.avatar }}\" alt=\"people\"
                                             class=\"avatar-img rounded-circle\">
                                    </a>
                                    <div class=\"flex\">
                                        <input type=\"hidden\" name=\"question\" value=\"{{ sujet.idQuestion }}\"/>
                                        <div class=\"form-group\">
                                            <textarea class=\"form-control\" name=\"comment\" id=\"comment\" rows=\"3\"
                                                      placeholder=\"Répondre ...\"></textarea>
                                        </div>
                                        <button class=\"btn btn-accent\">Envoyer</button>
                                    </div>
                                </div>

                            </form>

                            <div class=\"pt-3\">

                                <h4>{{ nbrCommentaire }} Commentaires</h4>

                                {% for c in commentaire %}
                                    <div class=\"ml-sm-32pt mt-3 card p-3\">
                                        <div class=\"d-flex\">
                                            <a href=\"#\" class=\"avatar avatar-xs mr-3\">
                                                <img src=\"{{ asset('assets/images/people/'~c.idUser.avatar) }}\"
                                                     alt=\"Guy\" class=\"avatar-img rounded-circle\">
                                            </a>
                                            <div class=\"flex\">
                                                <div class=\"d-flex align-items-center\">
                                                    <a href=\"#\" class=\"text-body\"><strong>{{ c.idUser }}</strong></a>
                                                </div>
                                                <p class=\"mt-1 mb-0 text-black-70\">{{ c.contenu }}</p>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "forum_answer.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\forum_answer.html.twig");
    }
}
