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

        <!-- Header Layout Content -->
        <div class=\"mdk-header-layout__content page-content \">

            <!-- Premiere Section -->
            <div class=\"mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0\"
                 data-effects=\"parallax-background blend-background\">
                <div class=\"mdk-box__bg\">
                    <div class=\"mdk-box__bg-front\"
                         style=\"background-image: url(";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/capture.png"), "html", null, true);
        echo ");\">
                    </div>
                </div>
                <div class=\"mdk-box__content\">
                    <div class=\"container page__container py-64pt py-md-112pt\">
                        <div class=\"row align-items-center text-center text-md-left\">
                            <div class=\"col-md-6 col-lg-5 order-1 order-md-0\">
                                <h1 class=\"text-white\">Ina <span class=\"text-scramble js-text-scramble\">Way</span></h1>
                                <p class=\"lead mb-48pt text-white\">Branches, Filières, Ecoles et Universités. Découvrir
                                    tous
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
        // line 92
        if (array_key_exists("es_plus", $context)) {
            // line 93
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["es_plus"]) || array_key_exists("es_plus", $context) ? $context["es_plus"] : (function () { throw new RuntimeError('Variable "es_plus" does not exist.', 93, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
                // line 94
                echo "                                <div class=\"col-sm-6 col-md-4 col-lg-3\">

                                    <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                                         data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                                        <!--image-->
                                        <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                            <img src=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["actu"], "image", [], "any", false, false, false, 101))), "html", null, true);
                echo "\"
                                                 style=\" width: 430px !important;height: 168px !important;\"
                                                 alt=\"course\">
                                            <span class=\"overlay__content\">
                                </span>
                                        </a>
                                        <!--image-->

                                        <div class=\"mdk-reveal__content\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"flex\">
                                                        <a class=\"card-title\" href=\"#\">";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "Nom", [], "any", false, false, false, 113), "html", null, true);
                echo "</a>
                                                        <small
                                                                class=\"text-black-50 font-weight-bold mb-4pt\">";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "Adresse", [], "any", false, false, false, 115), "html", null, true);
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
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "Nom", [], "any", false, false, false, 124), "html", null, true);
                echo "</div>
                                                <p class=\"lh-1\">
                                                    <span class=\"text-black-50 small\">Par</span>
                                                    <span
                                                            class=\"text-black-50 small font-weight-bold\">";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "idConseiller", [], "any", false, false, false, 128), "html", null, true);
                echo "</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class=\"my-16pt text-black-70\">";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "discription", [], "any", false, false, false, 133), "html", null, true);
                echo "</p>

                                        <div class=\"mb-16pt\">
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                                <p class=\"flex text-black-50 lh-1 mb-0\">
                                                    <small>Acces: ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "acces", [], "any", false, false, false, 139), "html", null, true);
                echo "</small></p>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                                <p class=\"flex text-black-50 lh-1 mb-0\">
                                                    <small>Site: ";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "site", [], "any", false, false, false, 144), "html", null, true);
                echo "</small></p>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                                <p class=\"flex text-black-50 lh-1 mb-0\">
                                                    <small>Téléphone: ";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "tel", [], "any", false, false, false, 149), "html", null, true);
                echo "</small></p>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                                <p class=\"flex text-black-50 lh-1 mb-0\">
                                                    <small>Adresse: ";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "adresse", [], "any", false, false, false, 154), "html", null, true);
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
            // line 163
            echo "                        ";
        }
        // line 164
        echo "
                        ";
        // line 165
        if (array_key_exists("eve_plus", $context)) {
            // line 166
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eve_plus"]) || array_key_exists("eve_plus", $context) ? $context["eve_plus"] : (function () { throw new RuntimeError('Variable "eve_plus" does not exist.', 166, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 167
                echo "                                <div class=\"col-sm-6 col-md-4 col-lg-3\">

                                    <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                                         data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                                        <!--image-->
                                        <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                            <img src=\"";
                // line 174
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["e"], "image", [], "any", false, false, false, 174))), "html", null, true);
                echo "\"
                                                 style=\" width: 430px !important;height: 168px !important;\"
                                                 alt=\"course\">
                                            <!-- <span class=\"overlay__content\"></span>-->
                                        </a>
                                        <!--image-->

                                        <div class=\"mdk-reveal__content\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"flex\">
                                                        <a class=\"card-title\" href=\"#\">";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "Nom", [], "any", false, false, false, 185), "html", null, true);
                echo "</a>
                                                        <small class=\"text-black-50 font-weight-bold mb-4pt\">";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "lieu", [], "any", false, false, false, 186), "html", null, true);
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
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "Nom", [], "any", false, false, false, 195), "html", null, true);
                echo "</div>
                                                <p class=\"lh-1\">
                                                    <span class=\"text-black-50 small\">Par</span>
                                                    <span class=\"text-black-50 small font-weight-bold\">";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "idConseiller", [], "any", false, false, false, 198), "html", null, true);
                echo "</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class=\"my-16pt text-black-70\">";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "discription", [], "any", false, false, false, 203), "html", null, true);
                echo "</p>

                                        <div class=\"mb-16pt\">
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                                <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date début:
                                                        ";
                // line 209
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateDebut", [], "any", false, false, false, 209), "d/m/Y"), "html", null, true);
                echo "</small></p>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                                <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date fin:
                                                        ";
                // line 214
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateFIN", [], "any", false, false, false, 214), "d/m/Y"), "html", null, true);
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
            // line 223
            echo "                        ";
        }
        // line 224
        echo "
                        ";
        // line 225
        if (array_key_exists("cnc_plus", $context)) {
            // line 226
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cnc_plus"]) || array_key_exists("cnc_plus", $context) ? $context["cnc_plus"] : (function () { throw new RuntimeError('Variable "cnc_plus" does not exist.', 226, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 227
                echo "                                <div class=\"col-sm-6 col-md-4 col-lg-3\">

                                    <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                                         data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                                        <!--image-->
                                        <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                            <img src=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 234))), "html", null, true);
                echo "\"
                                                 style=\" width: 430px !important;height: 168px !important;\"
                                                 alt=\"course\">
                                            <!-- <span class=\"overlay__content\"></span>-->
                                        </a>
                                        <!--image-->

                                        <div class=\"mdk-reveal__content\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"flex\">
                                                        <a class=\"card-title\" href=\"#\">";
                // line 245
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Titre", [], "any", false, false, false, 245), "html", null, true);
                echo "</a>
                                                        <small class=\"text-black-50 font-weight-bold mb-4pt\">";
                // line 246
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "lieu", [], "any", false, false, false, 246), "html", null, true);
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
                // line 255
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Titre", [], "any", false, false, false, 255), "html", null, true);
                echo "</div>
                                                <p class=\"lh-1\">
                                                    <span class=\"text-black-50 small\">Par</span>
                                                    <span class=\"text-black-50 small font-weight-bold\">";
                // line 258
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "idConseiller", [], "any", false, false, false, 258), "html", null, true);
                echo "</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class=\"my-16pt text-black-70\">";
                // line 263
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "discription", [], "any", false, false, false, 263), "html", null, true);
                echo "</p>

                                        <div class=\"mb-16pt\">
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                                <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date:
                                                        ";
                // line 269
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "date", [], "any", false, false, false, 269), "d/m/Y"), "html", null, true);
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
            // line 277
            echo "                        ";
        }
        // line 278
        echo "
                        ";
        // line 279
        if (array_key_exists("news_plus", $context)) {
            // line 280
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news_plus"]) || array_key_exists("news_plus", $context) ? $context["news_plus"] : (function () { throw new RuntimeError('Variable "news_plus" does not exist.', 280, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 281
                echo "                                <div class=\"col-sm-6 col-md-4 col-lg-3\">

                                    <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                                         data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                                        <!--image-->
                                        <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                            <img src=\"";
                // line 288
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["n"], "image", [], "any", false, false, false, 288))), "html", null, true);
                echo "\"
                                                 style=\" width: 430px !important;height: 168px !important;\"
                                                 alt=\"course\">
                                            <!-- <span class=\"overlay__content\"></span>-->
                                        </a>
                                        <!--image-->

                                        <div class=\"mdk-reveal__content\">
                                            <div class=\"card-body\">
                                                <div class=\"d-flex\">
                                                    <div class=\"flex\">
                                                        <a class=\"card-title\" href=\"#\">";
                // line 299
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "Titre", [], "any", false, false, false, 299), "html", null, true);
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
                // line 308
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "Titre", [], "any", false, false, false, 308), "html", null, true);
                echo "</div>
                                                <p class=\"lh-1\">
                                                    <span class=\"text-black-50 small\">Par</span>
                                                    <span class=\"text-black-50 small font-weight-bold\">";
                // line 311
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "idConseiller", [], "any", false, false, false, 311), "html", null, true);
                echo "</span>
                                                </p>
                                            </div>
                                        </div>

                                        <p class=\"my-16pt text-black-70\">";
                // line 316
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "contenu", [], "any", false, false, false, 316), "html", null, true);
                echo "</p>

                                    </div>

                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            echo "                        ";
        }
        // line 323
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
        return array (  555 => 323,  552 => 322,  540 => 316,  532 => 311,  526 => 308,  514 => 299,  500 => 288,  491 => 281,  486 => 280,  484 => 279,  481 => 278,  478 => 277,  464 => 269,  455 => 263,  447 => 258,  441 => 255,  429 => 246,  425 => 245,  411 => 234,  402 => 227,  397 => 226,  395 => 225,  392 => 224,  389 => 223,  374 => 214,  366 => 209,  357 => 203,  349 => 198,  343 => 195,  331 => 186,  327 => 185,  313 => 174,  304 => 167,  299 => 166,  297 => 165,  294 => 164,  291 => 163,  276 => 154,  268 => 149,  260 => 144,  252 => 139,  243 => 133,  235 => 128,  228 => 124,  216 => 115,  211 => 113,  196 => 101,  187 => 94,  182 => 93,  180 => 92,  102 => 17,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}InaWay{% endblock %}
{% block body %}

    <!-- Header Layout -->
    <div class=\"mdk-header-layout js-mdk-header-layout\">

        <!-- Header Layout Content -->
        <div class=\"mdk-header-layout__content page-content \">

            <!-- Premiere Section -->
            <div class=\"mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0\"
                 data-effects=\"parallax-background blend-background\">
                <div class=\"mdk-box__bg\">
                    <div class=\"mdk-box__bg-front\"
                         style=\"background-image: url({{ asset('assets/images/capture.png') }});\">
                    </div>
                </div>
                <div class=\"mdk-box__content\">
                    <div class=\"container page__container py-64pt py-md-112pt\">
                        <div class=\"row align-items-center text-center text-md-left\">
                            <div class=\"col-md-6 col-lg-5 order-1 order-md-0\">
                                <h1 class=\"text-white\">Ina <span class=\"text-scramble js-text-scramble\">Way</span></h1>
                                <p class=\"lead mb-48pt text-white\">Branches, Filières, Ecoles et Universités. Découvrir
                                    tous
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
                        {% if es_plus is defined %}
                            {% for actu in es_plus %}
                                <div class=\"col-sm-6 col-md-4 col-lg-3\">

                                    <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                                         data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                                        <!--image-->
                                        <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                            <img src=\"{{ asset('assets/images/'~actu.image ) }}\"
                                                 style=\" width: 430px !important;height: 168px !important;\"
                                                 alt=\"course\">
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
                                                <p class=\"flex text-black-50 lh-1 mb-0\">
                                                    <small>Acces: {{ actu.acces }}</small></p>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                                <p class=\"flex text-black-50 lh-1 mb-0\">
                                                    <small>Site: {{ actu.site }}</small></p>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                                <p class=\"flex text-black-50 lh-1 mb-0\">
                                                    <small>Téléphone: {{ actu.tel }}</small></p>
                                            </div>
                                            <div class=\"d-flex align-items-center\">
                                                <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                                <p class=\"flex text-black-50 lh-1 mb-0\">
                                                    <small>Adresse: {{ actu.adresse }}</small>
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
                                            <img src=\"{{ asset('assets/images/'~e.image ) }}\"
                                                 style=\" width: 430px !important;height: 168px !important;\"
                                                 alt=\"course\">
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
                                                        {{ e.dateDebut|date('d/m/Y') }}</small></p>
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
                                            <img src=\"{{ asset('assets/images/'~c.image ) }}\"
                                                 style=\" width: 430px !important;height: 168px !important;\"
                                                 alt=\"course\">
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
                                                        {{ c.date|date('d/m/Y') }}</small></p>
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
                                            <img src=\"{{ asset('assets/images/'~n.image ) }}\"
                                                 style=\" width: 430px !important;height: 168px !important;\"
                                                 alt=\"course\">
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

                                        <p class=\"my-16pt text-black-70\">{{ n.contenu }}</p>

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
