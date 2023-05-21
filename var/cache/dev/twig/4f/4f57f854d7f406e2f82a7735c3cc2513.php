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

/* voirPlus.html.twig */
class __TwigTemplate_bd71a7630627ea01186b9d5567f2f9ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voirPlus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voirPlus.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voirPlus.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<!-- Header Layout -->
<div class=\"mdk-header-layout js-mdk-header-layout\">
    ";
        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "    <!-- Header Layout Content -->
    <div class=\"mdk-header-layout__content page-content \">

        <!-- Premiere Section -->
        <div class=\"mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0\"
            data-effects=\"parallax-background blend-background\">
            <div class=\"mdk-box__bg\">
                <div class=\"mdk-box__bg-front\" style=\"background-image: url(";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/capture.png"), "html", null, true);
        echo ");\">
                </div>
            </div>
            <div class=\"mdk-box__content\">
                <div class=\"container page__container py-64pt py-md-112pt\">
                    <div class=\"row align-items-center text-center text-md-left\">
                        <div class=\"col-md-6 col-lg-5 order-1 order-md-0\">
                            <h1 class=\"text-white\">Ina <span class=\"text-scramble js-text-scramble\">Way</span></h1>
                            <p class=\"lead mb-48pt text-white\">Branches, Filières, Ecoles et Universités. Découvrir tous
                                cela avec InaWay.</p>
                            <a href=\"#\" class=\"btn btn-lg btn-white btn--raised mb-16pt\">Voir plus</a>
                            <p><a href=\"/conseiller\" class=\"text-white-70 text-underline\"><strong>Êtes-vous un
                                        conseiller en orientation ?</strong></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // END Premiere Section -->

        <!-- Statistiques -->
        <div class=\"bg-white border-bottom-2 py-16pt py-sm-24pt py-md-32pt \">
            <div class=\"container page__container\">
                <div class=\"row align-items-center\">
                    <div
                        class=\"d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0\">
                        <div
                            class=\"rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt\">
                            <i class=\"material-icons text-primary-light\">subscriptions</i>
                        </div>
                        <div class=\"flex\">
                            <p class=\"mb-0\"><strong>+500 Publications</strong></p>
                            <p class=\"text-black-70\">Découvrire les avec InaWay.</p>
                        </div>
                    </div>
                    <div
                        class=\"d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0\">
                        <div
                            class=\"rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt\">
                            <i class=\"material-icons text-primary-light\">verified_user</i>
                        </div>
                        <div class=\"flex\">
                            <p class=\"mb-0\"><strong>Par des conseillers en orientation</strong></p>
                            <p class=\"text-black-70\">Des ges expert dans le domaine.</p>
                        </div>
                    </div>
                    <div class=\"d-flex col-md align-items-center\">
                        <div
                            class=\"rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt\">
                            <i class=\"material-icons text-primary-light\">update</i>
                        </div>
                        <div class=\"flex\">
                            <p class=\"mb-0\"><strong>Acces illimité</strong></p>
                            <p class=\"text-black-70\">Informations disponible tout le temps.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //END Statistiques -->

        <!-- Annoces -->
        <div class=\"page-section border-bottom-2\">
            <div id=\"page-wrap\" class=\"container page__container\">
                <div class=\"row align-items-end mb-16pt mb-md-32pt\">
                    <div class=\"col-md-auto mb-32pt mb-md-0\">
                        <div class=\"page-headline page-headline--title text-center text-md-left p-0\">
                            <h2></h2>
                        </div>
                    </div>
                </div>

                <!-- Contenu -->
                <div id=\"content\" class=\"row\">
                    ";
        // line 136
        if (array_key_exists("es_plus", $context)) {
            // line 137
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["es_plus"]) || array_key_exists("es_plus", $context) ? $context["es_plus"] : (function () { throw new RuntimeError('Variable "es_plus" does not exist.', 137, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
                // line 138
                echo "                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["actu"], "image", [], "any", false, false, false, 145))), "html", null, true);
                echo "\"
                                    style=\" width: 430px !important;height: 168px !important;\" alt=\"course\">
                                <span class=\"overlay__content\">
                                </span>
                            </a>
                            <!--image-->

                            <div class=\"mdk-reveal__content\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex\">
                                            <a class=\"card-title\" href=\"#\">";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "Nom", [], "any", false, false, false, 156), "html", null, true);
                echo "</a>
                                            <small
                                                class=\"text-black-50 font-weight-bold mb-4pt\">";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "Adresse", [], "any", false, false, false, 158), "html", null, true);
                echo "</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"popoverContainer d-none\">
                            <div class=\"media\">
                                <div class=\"media-body\">
                                    <div class=\"card-title text-body mb-0\">";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "Nom", [], "any", false, false, false, 167), "html", null, true);
                echo "</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span
                                            class=\"text-black-50 small font-weight-bold\">";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "idConseiller", [], "any", false, false, false, 171), "html", null, true);
                echo "</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "discription", [], "any", false, false, false, 176), "html", null, true);
                echo "</p>

                            <div class=\"mb-16pt\">
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Acces: ";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "acces", [], "any", false, false, false, 181), "html", null, true);
                echo "</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Site: ";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "site", [], "any", false, false, false, 185), "html", null, true);
                echo "</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Téléphone: ";
                // line 189
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "tel", [], "any", false, false, false, 189), "html", null, true);
                echo "</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Adresse: ";
                // line 193
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "adresse", [], "any", false, false, false, 193), "html", null, true);
                echo "</small>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                    ";
        }
        // line 203
        echo "
                    ";
        // line 204
        if (array_key_exists("eve_plus", $context)) {
            // line 205
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eve_plus"]) || array_key_exists("eve_plus", $context) ? $context["eve_plus"] : (function () { throw new RuntimeError('Variable "eve_plus" does not exist.', 205, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 206
                echo "                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"";
                // line 213
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["e"], "image", [], "any", false, false, false, 213))), "html", null, true);
                echo "\"
                                    style=\" width: 430px !important;height: 168px !important;\" alt=\"course\">
                                <!-- <span class=\"overlay__content\"></span>-->
                            </a>
                            <!--image-->

                            <div class=\"mdk-reveal__content\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex\">
                                            <a class=\"card-title\" href=\"#\">";
                // line 223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "Nom", [], "any", false, false, false, 223), "html", null, true);
                echo "</a>
                                            <small class=\"text-black-50 font-weight-bold mb-4pt\">";
                // line 224
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "lieu", [], "any", false, false, false, 224), "html", null, true);
                echo "</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"popoverContainer d-none\">
                            <div class=\"media\">
                                <div class=\"media-body\">
                                    <div class=\"card-title text-body mb-0\">";
                // line 233
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "Nom", [], "any", false, false, false, 233), "html", null, true);
                echo "</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span class=\"text-black-50 small font-weight-bold\">";
                // line 236
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "idConseiller", [], "any", false, false, false, 236), "html", null, true);
                echo "</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">";
                // line 241
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "discription", [], "any", false, false, false, 241), "html", null, true);
                echo "</p>

                            <div class=\"mb-16pt\">
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date début:
                                            ";
                // line 247
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateDebut", [], "any", false, false, false, 247), "d/m/Y"), "html", null, true);
                echo "</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date fin:
                                            ";
                // line 252
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateFIN", [], "any", false, false, false, 252), "d/m/Y"), "html", null, true);
                echo "</small></p>
                                </div>
                            </div>


                        </div>

                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "                    ";
        }
        // line 262
        echo "
                    ";
        // line 263
        if (array_key_exists("cnc_plus", $context)) {
            // line 264
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cnc_plus"]) || array_key_exists("cnc_plus", $context) ? $context["cnc_plus"] : (function () { throw new RuntimeError('Variable "cnc_plus" does not exist.', 264, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 265
                echo "                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"";
                // line 272
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 272))), "html", null, true);
                echo "\"
                                    style=\" width: 430px !important;height: 168px !important;\" alt=\"course\">
                                <!-- <span class=\"overlay__content\"></span>-->
                            </a>
                            <!--image-->

                            <div class=\"mdk-reveal__content\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex\">
                                            <a class=\"card-title\" href=\"#\">";
                // line 282
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Titre", [], "any", false, false, false, 282), "html", null, true);
                echo "</a>
                                            <small class=\"text-black-50 font-weight-bold mb-4pt\">";
                // line 283
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "lieu", [], "any", false, false, false, 283), "html", null, true);
                echo "</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"popoverContainer d-none\">
                            <div class=\"media\">
                                <div class=\"media-body\">
                                    <div class=\"card-title text-body mb-0\">";
                // line 292
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Titre", [], "any", false, false, false, 292), "html", null, true);
                echo "</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span class=\"text-black-50 small font-weight-bold\">";
                // line 295
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "idConseiller", [], "any", false, false, false, 295), "html", null, true);
                echo "</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">";
                // line 300
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "discription", [], "any", false, false, false, 300), "html", null, true);
                echo "</p>

                            <div class=\"mb-16pt\">
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date:
                                            ";
                // line 306
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "date", [], "any", false, false, false, 306), "d/m/Y"), "html", null, true);
                echo "</small></p>
                                </div>
                            </div>

                        </div>

                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 314
            echo "                    ";
        }
        // line 315
        echo "
                    ";
        // line 316
        if (array_key_exists("news_plus", $context)) {
            // line 317
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news_plus"]) || array_key_exists("news_plus", $context) ? $context["news_plus"] : (function () { throw new RuntimeError('Variable "news_plus" does not exist.', 317, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 318
                echo "                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"";
                // line 325
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["n"], "image", [], "any", false, false, false, 325))), "html", null, true);
                echo "\"
                                    style=\" width: 430px !important;height: 168px !important;\" alt=\"course\">
                                <!-- <span class=\"overlay__content\"></span>-->
                            </a>
                            <!--image-->

                            <div class=\"mdk-reveal__content\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex\">
                                            <a class=\"card-title\" href=\"#\">";
                // line 335
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "Titre", [], "any", false, false, false, 335), "html", null, true);
                echo "</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"popoverContainer d-none\">
                            <div class=\"media\">
                                <div class=\"media-body\">
                                    <div class=\"card-title text-body mb-0\">";
                // line 344
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "Titre", [], "any", false, false, false, 344), "html", null, true);
                echo "</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span class=\"text-black-50 small font-weight-bold\">";
                // line 347
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "idConseiller", [], "any", false, false, false, 347), "html", null, true);
                echo "</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">";
                // line 352
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "contenu", [], "any", false, false, false, 352), "html", null, true);
                echo "</p>

                        </div>

                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            echo "                    ";
        }
        // line 359
        echo "
                </div>
                <!-- Contenu -->

            </div>
        </div>
        <!-- // END Annoces -->


    </div>
    <!-- // END Header Layout Content -->

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
                    <img class=\"navbar-brand-icon mr-0 mr-md-8pt\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" width=\"30\"
                        alt=\"InaWay\">
                    <span class=\"d-none d-md-block\">InaWay</span>
                </a>


                <!-- Main Navigation -->
                <ul class=\"nav navbar-nav ml-auto d-none d-sm-flex\">
                    ";
        // line 33
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "                    <li class=\"nav-item \">
                        <a href=\"/inscription\" class=\"nav-link\">Inscription</a>
                    </li>
                    <li class=\"nav-item \">
                        <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
            echo " \" class=\"nav-link\">Connexion</a>
                    </li>
                    ";
        } else {
            // line 41
            echo "                    <li class=\"nav-item active\">
                        <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo " \" class=\"nav-link\">Déconnexion</a>
                    </li>
                    ";
        }
        // line 45
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
        return "voirPlus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 45,  629 => 42,  626 => 41,  620 => 38,  614 => 34,  612 => 33,  601 => 25,  583 => 9,  573 => 8,  549 => 359,  546 => 358,  534 => 352,  526 => 347,  520 => 344,  508 => 335,  495 => 325,  486 => 318,  481 => 317,  479 => 316,  476 => 315,  473 => 314,  459 => 306,  450 => 300,  442 => 295,  436 => 292,  424 => 283,  420 => 282,  407 => 272,  398 => 265,  393 => 264,  391 => 263,  388 => 262,  385 => 261,  370 => 252,  362 => 247,  353 => 241,  345 => 236,  339 => 233,  327 => 224,  323 => 223,  310 => 213,  301 => 206,  296 => 205,  294 => 204,  291 => 203,  288 => 202,  273 => 193,  266 => 189,  259 => 185,  252 => 181,  244 => 176,  236 => 171,  229 => 167,  217 => 158,  212 => 156,  198 => 145,  189 => 138,  184 => 137,  182 => 136,  105 => 62,  96 => 55,  94 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
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
                    <img class=\"navbar-brand-icon mr-0 mr-md-8pt\" src=\"{{ asset('assets/images/logo.png') }}\" width=\"30\"
                        alt=\"InaWay\">
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
                <div class=\"mdk-box__bg-front\" style=\"background-image: url({{ asset('assets/images/capture.png') }});\">
                </div>
            </div>
            <div class=\"mdk-box__content\">
                <div class=\"container page__container py-64pt py-md-112pt\">
                    <div class=\"row align-items-center text-center text-md-left\">
                        <div class=\"col-md-6 col-lg-5 order-1 order-md-0\">
                            <h1 class=\"text-white\">Ina <span class=\"text-scramble js-text-scramble\">Way</span></h1>
                            <p class=\"lead mb-48pt text-white\">Branches, Filières, Ecoles et Universités. Découvrir tous
                                cela avec InaWay.</p>
                            <a href=\"#\" class=\"btn btn-lg btn-white btn--raised mb-16pt\">Voir plus</a>
                            <p><a href=\"/conseiller\" class=\"text-white-70 text-underline\"><strong>Êtes-vous un
                                        conseiller en orientation ?</strong></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // END Premiere Section -->

        <!-- Statistiques -->
        <div class=\"bg-white border-bottom-2 py-16pt py-sm-24pt py-md-32pt \">
            <div class=\"container page__container\">
                <div class=\"row align-items-center\">
                    <div
                        class=\"d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0\">
                        <div
                            class=\"rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt\">
                            <i class=\"material-icons text-primary-light\">subscriptions</i>
                        </div>
                        <div class=\"flex\">
                            <p class=\"mb-0\"><strong>+500 Publications</strong></p>
                            <p class=\"text-black-70\">Découvrire les avec InaWay.</p>
                        </div>
                    </div>
                    <div
                        class=\"d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0\">
                        <div
                            class=\"rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt\">
                            <i class=\"material-icons text-primary-light\">verified_user</i>
                        </div>
                        <div class=\"flex\">
                            <p class=\"mb-0\"><strong>Par des conseillers en orientation</strong></p>
                            <p class=\"text-black-70\">Des ges expert dans le domaine.</p>
                        </div>
                    </div>
                    <div class=\"d-flex col-md align-items-center\">
                        <div
                            class=\"rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt\">
                            <i class=\"material-icons text-primary-light\">update</i>
                        </div>
                        <div class=\"flex\">
                            <p class=\"mb-0\"><strong>Acces illimité</strong></p>
                            <p class=\"text-black-70\">Informations disponible tout le temps.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //END Statistiques -->

        <!-- Annoces -->
        <div class=\"page-section border-bottom-2\">
            <div id=\"page-wrap\" class=\"container page__container\">
                <div class=\"row align-items-end mb-16pt mb-md-32pt\">
                    <div class=\"col-md-auto mb-32pt mb-md-0\">
                        <div class=\"page-headline page-headline--title text-center text-md-left p-0\">
                            <h2></h2>
                        </div>
                    </div>
                </div>

                <!-- Contenu -->
                <div id=\"content\" class=\"row\">
                    {% if es_plus is defined  %}
                    {% for actu in es_plus %}
                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"{{asset('assets/images/'~actu.image )}}\"
                                    style=\" width: 430px !important;height: 168px !important;\" alt=\"course\">
                                <span class=\"overlay__content\">
                                </span>
                            </a>
                            <!--image-->

                            <div class=\"mdk-reveal__content\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex\">
                                            <a class=\"card-title\" href=\"#\">{{ actu.Nom }}</a>
                                            <small
                                                class=\"text-black-50 font-weight-bold mb-4pt\">{{ actu.Adresse }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"popoverContainer d-none\">
                            <div class=\"media\">
                                <div class=\"media-body\">
                                    <div class=\"card-title text-body mb-0\">{{ actu.Nom }}</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span
                                            class=\"text-black-50 small font-weight-bold\">{{ actu.idConseiller }}</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">{{ actu.discription }}</p>

                            <div class=\"mb-16pt\">
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Acces: {{ actu.acces }}</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Site: {{ actu.site }}</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Téléphone: {{ actu.tel }}</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Adresse: {{ actu.adresse }}</small>
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                    {% endfor %}
                    {% endif %}

                    {% if eve_plus is defined %}
                    {% for e in eve_plus %}
                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"{{asset('assets/images/'~e.image )}}\"
                                    style=\" width: 430px !important;height: 168px !important;\" alt=\"course\">
                                <!-- <span class=\"overlay__content\"></span>-->
                            </a>
                            <!--image-->

                            <div class=\"mdk-reveal__content\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex\">
                                            <a class=\"card-title\" href=\"#\">{{ e.Nom }}</a>
                                            <small class=\"text-black-50 font-weight-bold mb-4pt\">{{ e.lieu }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"popoverContainer d-none\">
                            <div class=\"media\">
                                <div class=\"media-body\">
                                    <div class=\"card-title text-body mb-0\">{{ e.Nom }}</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span class=\"text-black-50 small font-weight-bold\">{{ e.idConseiller }}</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">{{ e.discription }}</p>

                            <div class=\"mb-16pt\">
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date début:
                                            {{ e.dateDebut|date('d/m/Y')}}</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date fin:
                                            {{ e.dateFIN|date('d/m/Y') }}</small></p>
                                </div>
                            </div>


                        </div>

                    </div>
                    {% endfor %}
                    {% endif %}

                    {% if cnc_plus is defined %}
                    {% for c in cnc_plus %}
                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"{{asset('assets/images/'~c.image )}}\"
                                    style=\" width: 430px !important;height: 168px !important;\" alt=\"course\">
                                <!-- <span class=\"overlay__content\"></span>-->
                            </a>
                            <!--image-->

                            <div class=\"mdk-reveal__content\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex\">
                                            <a class=\"card-title\" href=\"#\">{{ c.Titre }}</a>
                                            <small class=\"text-black-50 font-weight-bold mb-4pt\">{{ c.lieu }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"popoverContainer d-none\">
                            <div class=\"media\">
                                <div class=\"media-body\">
                                    <div class=\"card-title text-body mb-0\">{{ c.Titre }}</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span class=\"text-black-50 small font-weight-bold\">{{ c.idConseiller }}</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">{{ c.discription }}</p>

                            <div class=\"mb-16pt\">
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date:
                                            {{ c.date|date('d/m/Y')}}</small></p>
                                </div>
                            </div>

                        </div>

                    </div>
                    {% endfor %}
                    {% endif %}

                    {% if news_plus is defined %}
                    {% for n in news_plus %}
                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"{{asset('assets/images/'~n.image )}}\"
                                    style=\" width: 430px !important;height: 168px !important;\" alt=\"course\">
                                <!-- <span class=\"overlay__content\"></span>-->
                            </a>
                            <!--image-->

                            <div class=\"mdk-reveal__content\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex\">
                                            <a class=\"card-title\" href=\"#\">{{ n.Titre }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"popoverContainer d-none\">
                            <div class=\"media\">
                                <div class=\"media-body\">
                                    <div class=\"card-title text-body mb-0\">{{ n.Titre }}</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span class=\"text-black-50 small font-weight-bold\">{{ n.idConseiller }}</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">{{n.contenu }}</p>

                        </div>

                    </div>
                    {% endfor %}
                    {% endif %}

                </div>
                <!-- Contenu -->

            </div>
        </div>
        <!-- // END Annoces -->


    </div>
    <!-- // END Header Layout Content -->

</div>
<!-- // END Header Layout -->
{% endblock %}", "voirPlus.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\voirPlus.html.twig");
    }
}
