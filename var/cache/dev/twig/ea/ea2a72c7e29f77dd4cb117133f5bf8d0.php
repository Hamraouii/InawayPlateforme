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

/* forum.html.twig */
class __TwigTemplate_a4a3b9a0f2e8f0eff23d73931ba15386 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum.html.twig", 1);
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
        echo "<!--Question Modal-->
    <div class=\"modal fade custom-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"question\" aria-hidden=\"true\" id=\"question\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"/forum/ajouter\" method=\"post\" enctype=\"multipart/form-data\" >
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Poser une question</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>          \t
                    </div>
                    
                    <div class=\"modal-body\">   
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <label for=\"question\">Titre:</label>
                                <input name=\"titre\" placeholder=\"Titre pour votre question\"  class=\"form-control\">
                            </div>
                        </div>             \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <label for=\"question\">Sujet:</label>
                                <textarea name=\"question\" placeholder=\"...\" rows=\"4\" class=\"form-control\"></textarea>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <label id=\"label-topic\" for=\"theme\" class=\"col-md-3 col-form-label form-label\">Thème</label>
                                <div class=\"col-md-9\">
                                    <select name=\"theme\" class=\"form-control custom-select w-auto\">
                                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 35
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "idTheme", [], "any", false, false, false, 35), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "Nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                                    </select>
                                </div>
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t
                    </div> 
                    
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-lg btn-accent\">Envoyer</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
<!--Question Modal-->

    <!-- Header Layout -->
        <div class=\"mdk-header-layout js-mdk-header-layout\">

           
        <div class=\"mdk-header-layout__content page-content \">

            <div class=\"container page__container\">
                <div class=\"page-section\">

                    <h4>Discussions</h4>

                    <div class=\"card\">
                        <div class=\"card-header\">
                            <div class=\"row align-items-center\" style=\"white-space: nowrap;\">
                                <div class=\"col-lg-auto\">
                                   
                                </div>
                                <div class=\"col-lg d-flex flex-wrap align-items-center\">
                                    <div class=\"ml-lg-auto dropdown\">
                                       
                                    </div>
                                    <a href=\"#\" class=\"btn btn-accent\" data-toggle=\"modal\" data-target=\"#question\">Poser une question</a>
                                </div>
                            </div>
                        </div>

                        <div class=\"list-group list-group-flush\">

                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 82
            echo "                            <div class=\"list-group-item p-3\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-3 mb-8pt mb-md-0\">
                                        <div class=\"media\">
                                            <div class=\"media-left mr-16pt\">
                                                <a href=\"#\"><img src=\"assets/images/people/";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "idUser", [], "any", false, false, false, 87), "avatar", [], "any", false, false, false, 87), "html", null, true);
            echo "\" width=\"40\" alt=\"avatar\" class=\"rounded-circle\"></a>
                                            </div>
                                            <div class=\"media-body media-middle\">
                                                <p class=\"text-muted m-0\"> ";
            // line 90
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "DATE", [], "any", false, false, false, 90), "d/m/Y"), "html", null, true);
            echo "</p>
                                                <p><a href=\"#\" class=\"text-body\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "idUser", [], "any", false, false, false, 91), "html", null, true);
            echo "</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col mb-8pt mb-md-0\">
                                        <p class=\"mb-8pt\"><a href=\"/forum_answer/";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "IdQuestion", [], "any", false, false, false, 96), "html", null, true);
            echo "\" class=\"text-body\"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "TITRE", [], "any", false, false, false, 96), "html", null, true);
            echo "</strong></a></p>

                                    </div>
                                    <div class=\"col-auto d-flex flex-column align-items-center justify-content-center\">
                                        <p class=\"lh-1 mb-0\"><small class=\"text-black-70\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "idTheme", [], "any", false, false, false, 100), "html", null, true);
            echo "</small></p>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                        </div>

                        <div class=\"card-body text-center\">
                            <a href=\"/forum_plus\" class=\"text-black-70 text-underline\">Voir plus</a>
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
        return "forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 105,  217 => 100,  208 => 96,  200 => 91,  196 => 90,  190 => 87,  183 => 82,  179 => 81,  133 => 37,  122 => 35,  118 => 34,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Forum | InaWay{% endblock %}

{% block body %}
<!--Question Modal-->
    <div class=\"modal fade custom-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"question\" aria-hidden=\"true\" id=\"question\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"/forum/ajouter\" method=\"post\" enctype=\"multipart/form-data\" >
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Poser une question</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>          \t
                    </div>
                    
                    <div class=\"modal-body\">   
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <label for=\"question\">Titre:</label>
                                <input name=\"titre\" placeholder=\"Titre pour votre question\"  class=\"form-control\">
                            </div>
                        </div>             \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <label for=\"question\">Sujet:</label>
                                <textarea name=\"question\" placeholder=\"...\" rows=\"4\" class=\"form-control\"></textarea>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <label id=\"label-topic\" for=\"theme\" class=\"col-md-3 col-form-label form-label\">Thème</label>
                                <div class=\"col-md-9\">
                                    <select name=\"theme\" class=\"form-control custom-select w-auto\">
                                    {% for t in theme %}
                                        <option value=\"{{ t.idTheme }}\">{{ t.Nom }}</option>
                                    {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>\t\t\t\t\t\t\t\t\t
                    </div> 
                    
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-lg btn-accent\">Envoyer</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
<!--Question Modal-->

    <!-- Header Layout -->
        <div class=\"mdk-header-layout js-mdk-header-layout\">

           
        <div class=\"mdk-header-layout__content page-content \">

            <div class=\"container page__container\">
                <div class=\"page-section\">

                    <h4>Discussions</h4>

                    <div class=\"card\">
                        <div class=\"card-header\">
                            <div class=\"row align-items-center\" style=\"white-space: nowrap;\">
                                <div class=\"col-lg-auto\">
                                   
                                </div>
                                <div class=\"col-lg d-flex flex-wrap align-items-center\">
                                    <div class=\"ml-lg-auto dropdown\">
                                       
                                    </div>
                                    <a href=\"#\" class=\"btn btn-accent\" data-toggle=\"modal\" data-target=\"#question\">Poser une question</a>
                                </div>
                            </div>
                        </div>

                        <div class=\"list-group list-group-flush\">

                            {% for f in sujet %}
                            <div class=\"list-group-item p-3\">
                                <div class=\"row align-items-center\">
                                    <div class=\"col-md-3 mb-8pt mb-md-0\">
                                        <div class=\"media\">
                                            <div class=\"media-left mr-16pt\">
                                                <a href=\"#\"><img src=\"assets/images/people/{{ f.idUser.avatar }}\" width=\"40\" alt=\"avatar\" class=\"rounded-circle\"></a>
                                            </div>
                                            <div class=\"media-body media-middle\">
                                                <p class=\"text-muted m-0\"> {{ f.DATE|date('d/m/Y') }}</p>
                                                <p><a href=\"#\" class=\"text-body\">{{ f.idUser }}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col mb-8pt mb-md-0\">
                                        <p class=\"mb-8pt\"><a href=\"/forum_answer/{{f.IdQuestion}}\" class=\"text-body\"><strong>{{ f.TITRE }}</strong></a></p>

                                    </div>
                                    <div class=\"col-auto d-flex flex-column align-items-center justify-content-center\">
                                        <p class=\"lh-1 mb-0\"><small class=\"text-black-70\">{{ f.idTheme }}</small></p>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                        </div>

                        <div class=\"card-body text-center\">
                            <a href=\"/forum_plus\" class=\"text-black-70 text-underline\">Voir plus</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        </div>
    <!-- // END Header Layout -->
{% endblock %}
", "forum.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\forum.html.twig");
    }
}
