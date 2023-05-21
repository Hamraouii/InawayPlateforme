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

/* index.html.twig */
class __TwigTemplate_d1b0f67ee427839780be007056bbf6f4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
    public function block_js_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_page"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\"/>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "

<!-- Header Layout -->
<div class=\"mdk-header-layout js-mdk-header-layout\">

    <div class=\"mdk-header-layout__content page-content \">

        <!-- Premiere Section -->
        <div class=\"mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0\"
            data-effects=\"parallax-background blend-background\">
            <div class=\"mdk-box__bg\">
                <div class=\"mdk-box__bg-front\" style=\"background-image: url('assets/images/Capture.png');\"></div>
            </div>
            <div class=\"mdk-box__content\">
                <div class=\"container page__container py-64pt py-md-112pt\">
                    <div class=\"row align-items-center text-center text-md-left\">
                        <div class=\"col-md-6 col-lg-5 order-1 order-md-0\">
                            <h1 class=\"text-white\">Ina <span class=\"text-scramble js-text-scramble\">Way</span></h1>
                            <p class=\"lead mb-48pt text-white\">Branches, Filières, Ecoles et Universités. Découvrir tous
                                cela avec InaWay.</p>
                            <a href=\"https://www.facebook.com/inawayorient/\" class=\"btn btn-lg btn-white btn--raised mb-16pt\">Voir plus</a>
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
                            <h2>les dernières nouveautés</h2>
                        </div>
                    </div>
                </div>

                <!-- Contenu -->
                <div id=\"content\" class=\"row\">
                    ";
        // line 95
        if (array_key_exists("es", $context)) {
            // line 96
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["es"]) || array_key_exists("es", $context) ? $context["es"] : (function () { throw new RuntimeError('Variable "es" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["actu"]) {
                // line 97
                echo "                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["actu"], "image", [], "any", false, false, false, 104))), "html", null, true);
                echo "\" style=\" width: 430px !important;height: 168px !important;\"
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
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "Nom", [], "any", false, false, false, 115), "html", null, true);
                echo "</a>
                                            <small
                                                class=\"text-black-50 font-weight-bold mb-4pt\">";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "Adresse", [], "any", false, false, false, 117), "html", null, true);
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
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "Nom", [], "any", false, false, false, 126), "html", null, true);
                echo "</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span
                                            class=\"text-black-50 small font-weight-bold\">";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "idConseiller", [], "any", false, false, false, 130), "html", null, true);
                echo "</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "discription", [], "any", false, false, false, 135), "html", null, true);
                echo "</p>

                            <div class=\"mb-16pt\">
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Acces: ";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "acces", [], "any", false, false, false, 140), "html", null, true);
                echo "</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Site: ";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "site", [], "any", false, false, false, 144), "html", null, true);
                echo "</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Téléphone: ";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "tel", [], "any", false, false, false, 148), "html", null, true);
                echo "</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Adresse: ";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actu"], "adresse", [], "any", false, false, false, 152), "html", null, true);
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
            // line 161
            echo "                    ";
        }
        // line 162
        echo "
                    ";
        // line 163
        if (array_key_exists("eve", $context)) {
            // line 164
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["eve"]) || array_key_exists("eve", $context) ? $context["eve"] : (function () { throw new RuntimeError('Variable "eve" does not exist.', 164, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 165
                echo "                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["e"], "image", [], "any", false, false, false, 172))), "html", null, true);
                echo "\" style=\" width: 430px !important;height: 168px !important;\"
                                    alt=\"course\">
                                <!-- <span class=\"overlay__content\"></span>-->
                            </a>
                            <!--image-->

                            <div class=\"mdk-reveal__content\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex\">
                                            <a class=\"card-title\" href=\"#\">";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "Nom", [], "any", false, false, false, 182), "html", null, true);
                echo "</a>
                                            <small class=\"text-black-50 font-weight-bold mb-4pt\">";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "lieu", [], "any", false, false, false, 183), "html", null, true);
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
                // line 192
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "Nom", [], "any", false, false, false, 192), "html", null, true);
                echo "</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span class=\"text-black-50 small font-weight-bold\">";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "idConseiller", [], "any", false, false, false, 195), "html", null, true);
                echo "</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">";
                // line 200
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "discription", [], "any", false, false, false, 200), "html", null, true);
                echo "</p>

                            <div class=\"mb-16pt\">
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date début:
                                            ";
                // line 206
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateDebut", [], "any", false, false, false, 206), "d/m/Y"), "html", null, true);
                echo "</small></p>
                                </div>
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date fin:
                                            ";
                // line 211
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "dateFIN", [], "any", false, false, false, 211), "d/m/Y"), "html", null, true);
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
            // line 220
            echo "                    ";
        }
        // line 221
        echo "
                    ";
        // line 222
        if (array_key_exists("cnc", $context)) {
            // line 223
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cnc"]) || array_key_exists("cnc", $context) ? $context["cnc"] : (function () { throw new RuntimeError('Variable "cnc" does not exist.', 223, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 224
                echo "                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"";
                // line 231
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 231))), "html", null, true);
                echo "\" style=\" width: 430px !important;height: 168px !important;\"
                                    alt=\"course\">
                                <!-- <span class=\"overlay__content\"></span>-->
                            </a>
                            <!--image-->

                            <div class=\"mdk-reveal__content\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex\">
                                            <a class=\"card-title\" href=\"#\">";
                // line 241
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Titre", [], "any", false, false, false, 241), "html", null, true);
                echo "</a>
                                            <small class=\"text-black-50 font-weight-bold mb-4pt\">";
                // line 242
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "lieu", [], "any", false, false, false, 242), "html", null, true);
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
                // line 251
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Titre", [], "any", false, false, false, 251), "html", null, true);
                echo "</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span class=\"text-black-50 small font-weight-bold\">";
                // line 254
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "idConseiller", [], "any", false, false, false, 254), "html", null, true);
                echo "</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">";
                // line 259
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "discription", [], "any", false, false, false, 259), "html", null, true);
                echo "</p>

                            <div class=\"mb-16pt\">
                                <div class=\"d-flex align-items-center\">
                                    <span class=\"material-icons icon-16pt text-black-50 mr-8pt\">check</span>
                                    <p class=\"flex text-black-50 lh-1 mb-0\"><small>Date:
                                            ";
                // line 265
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "date", [], "any", false, false, false, 265), "d/m/Y"), "html", null, true);
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
            // line 273
            echo "                    ";
        }
        // line 274
        echo "
                    ";
        // line 275
        if (array_key_exists("news", $context)) {
            // line 276
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 276, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 277
                echo "                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"";
                // line 284
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, $context["n"], "image", [], "any", false, false, false, 284))), "html", null, true);
                echo "\" style=\" width: 430px !important;height: 168px !important;\"
                                    alt=\"course\">
                                <!-- <span class=\"overlay__content\"></span>-->
                            </a>
                            <!--image-->

                            <div class=\"mdk-reveal__content\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"flex\">
                                            <a class=\"card-title\" href=\"#\">";
                // line 294
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "Titre", [], "any", false, false, false, 294), "html", null, true);
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
                // line 303
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "Titre", [], "any", false, false, false, 303), "html", null, true);
                echo "</div>
                                    <p class=\"lh-1\">
                                        <span class=\"text-black-50 small\">Par</span>
                                        <span class=\"text-black-50 small font-weight-bold\">";
                // line 306
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "idConseiller", [], "any", false, false, false, 306), "html", null, true);
                echo "</span>
                                    </p>
                                </div>
                            </div>

                            <p class=\"my-16pt text-black-70\">";
                // line 311
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "contenu", [], "any", false, false, false, 311), "html", null, true);
                echo "</p>

                        </div>

                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 317
            echo "                    ";
        }
        // line 318
        echo "
                </div>
                <!-- Contenu -->

                <div class=\"pt-md-16pt text-center\">
                    ";
        // line 323
        if (array_key_exists("news", $context)) {
            // line 324
            echo "                    <a href=\"/plus\" class=\"btn btn-outline-secondary\">Voir plus</a>
                    ";
        }
        // line 326
        echo "                    ";
        if (array_key_exists("eve", $context)) {
            // line 327
            echo "                    <a href=\"/plus/evenements\" class=\"btn btn-outline-secondary\">Voir plus</a>
                    ";
        }
        // line 329
        echo "                    ";
        if (array_key_exists("cnc", $context)) {
            // line 330
            echo "                    <a href=\"/plus/concours\" class=\"btn btn-outline-secondary\">Voir plus</a>
                    ";
        }
        // line 332
        echo "                    ";
        if (array_key_exists("es", $context)) {
            // line 333
            echo "                    <a href=\"/plus/etudes_superieures\" class=\"btn btn-outline-secondary\">Voir plus</a>
                    ";
        }
        // line 335
        echo "                </div>
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
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 335,  595 => 333,  592 => 332,  588 => 330,  585 => 329,  581 => 327,  578 => 326,  574 => 324,  572 => 323,  565 => 318,  562 => 317,  550 => 311,  542 => 306,  536 => 303,  524 => 294,  511 => 284,  502 => 277,  497 => 276,  495 => 275,  492 => 274,  489 => 273,  475 => 265,  466 => 259,  458 => 254,  452 => 251,  440 => 242,  436 => 241,  423 => 231,  414 => 224,  409 => 223,  407 => 222,  404 => 221,  401 => 220,  386 => 211,  378 => 206,  369 => 200,  361 => 195,  355 => 192,  343 => 183,  339 => 182,  326 => 172,  317 => 165,  312 => 164,  310 => 163,  307 => 162,  304 => 161,  289 => 152,  282 => 148,  275 => 144,  268 => 140,  260 => 135,  252 => 130,  245 => 126,  233 => 117,  228 => 115,  214 => 104,  205 => 97,  200 => 96,  198 => 95,  112 => 11,  102 => 10,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}InaWay{% endblock %}
{% block js_page %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\"/>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
{% endblock %}

{% block body %}


<!-- Header Layout -->
<div class=\"mdk-header-layout js-mdk-header-layout\">

    <div class=\"mdk-header-layout__content page-content \">

        <!-- Premiere Section -->
        <div class=\"mdk-box mdk-box--bg-gradient-primary bg-dark js-mdk-box position-relative overflow-hidden mb-0\"
            data-effects=\"parallax-background blend-background\">
            <div class=\"mdk-box__bg\">
                <div class=\"mdk-box__bg-front\" style=\"background-image: url('assets/images/Capture.png');\"></div>
            </div>
            <div class=\"mdk-box__content\">
                <div class=\"container page__container py-64pt py-md-112pt\">
                    <div class=\"row align-items-center text-center text-md-left\">
                        <div class=\"col-md-6 col-lg-5 order-1 order-md-0\">
                            <h1 class=\"text-white\">Ina <span class=\"text-scramble js-text-scramble\">Way</span></h1>
                            <p class=\"lead mb-48pt text-white\">Branches, Filières, Ecoles et Universités. Découvrir tous
                                cela avec InaWay.</p>
                            <a href=\"https://www.facebook.com/inawayorient/\" class=\"btn btn-lg btn-white btn--raised mb-16pt\">Voir plus</a>
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
                            <h2>les dernières nouveautés</h2>
                        </div>
                    </div>
                </div>

                <!-- Contenu -->
                <div id=\"content\" class=\"row\">
                    {% if es is defined  %}
                    {% for actu in es %}
                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"{{asset('assets/images/'~actu.image )}}\" style=\" width: 430px !important;height: 168px !important;\"
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

                    {% if eve is defined %}
                    {% for e in eve %}
                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"{{asset('assets/images/'~e.image )}}\" style=\" width: 430px !important;height: 168px !important;\"
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

                    {% if cnc is defined %}
                    {% for c in cnc %}
                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"{{asset('assets/images/'~c.image )}}\" style=\" width: 430px !important;height: 168px !important;\"
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
                                            {{ c.date|date('d/m/Y')}}</small></p>
                                </div>
                            </div>

                        </div>

                    </div>
                    {% endfor %}
                    {% endif %}

                    {% if news is defined %}
                    {% for n in news %}
                    <div class=\"col-sm-6 col-md-4 col-lg-3\">

                        <div class=\"card card--elevated card-course overlay js-overlay mdk-reveal js-mdk-reveal \"
                            data-partial-height=\"40\" data-toggle=\"popover\" data-trigger=\"click\">

                            <!--image-->
                            <a href=\"#\" class=\"js-image\" data-position=\"center\">
                                <img src=\"{{asset('assets/images/'~n.image )}}\" style=\" width: 430px !important;height: 168px !important;\"
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

                            <p class=\"my-16pt text-black-70\">{{n.contenu }}</p>

                        </div>

                    </div>
                    {% endfor %}
                    {% endif %}

                </div>
                <!-- Contenu -->

                <div class=\"pt-md-16pt text-center\">
                    {% if news is defined %}
                    <a href=\"/plus\" class=\"btn btn-outline-secondary\">Voir plus</a>
                    {% endif %}
                    {% if eve is defined %}
                    <a href=\"/plus/evenements\" class=\"btn btn-outline-secondary\">Voir plus</a>
                    {% endif %}
                    {% if cnc is defined %}
                    <a href=\"/plus/concours\" class=\"btn btn-outline-secondary\">Voir plus</a>
                    {% endif %}
                    {% if es is defined %}
                    <a href=\"/plus/etudes_superieures\" class=\"btn btn-outline-secondary\">Voir plus</a>
                    {% endif %}
                </div>
            </div>
        </div>
        <!-- // END Annoces -->


    </div>
    <!-- // END Header Layout Content -->

</div>
<!-- // END Header Layout -->
{% endblock %}", "index.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\index.html.twig");
    }
}
