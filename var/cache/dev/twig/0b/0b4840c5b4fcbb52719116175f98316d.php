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

/* base.html.twig */
class __TwigTemplate_d37d1c3621cb1b31c9f974580366ac09 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'js_page' => [$this, 'block_js_page'],
            'preloader' => [$this, 'block_preloader'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html >
<html>
<head>
    <title> ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"InaWay site d'orientation scolaire\">
    <meta name=\"author\" content=\"Ahmed & Ayoub\">

    <!-- Perfect Scrollbar -->
    <link type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Fix ChatBot CSS -->
    <link type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/chatbot-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Fix Footer CSS -->
    <link type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fix-footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Material Design Icons -->
    <link type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/material-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Font Awesome Icons
    /*
    <link type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">-->

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/fontawesome.min.js\"/>
    <!-- Preloader -->
    <link type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/preloader.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- App CSS -->
    <link type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Bootstrap CSS -->
    <!--<link href=\"asset/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />-->
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/chatbot.js"), "html", null, true);
        echo "\"></script>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.ico"), "html", null, true);
        echo "\">
    ";
        // line 42
        $this->displayBlock('js_page', $context, $blocks);
        // line 45
        echo "
</head>
<body>
";
        // line 48
        $this->displayBlock('preloader', $context, $blocks);
        // line 56
        echo "


";
        // line 59
        $this->displayBlock('header', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 171
        echo "
";
        // line 172
        $this->displayBlock('javascript', $context, $blocks);
        // line 198
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Page d’accueil!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_js_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_page"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js_page"));

        // line 43
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_preloader($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preloader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preloader"));

        // line 49
        echo "    <div class=\"preloader\">
        <div class=\"sk-double-bounce\">
            <div class=\"sk-child sk-double-bounce1\"></div>
            <div class=\"sk-child sk-double-bounce2\"></div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 60
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_header"));
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 67
        echo "
    <div class=\"bg-white js-fix-footer border-top-2\">
        <div class=\"container page-section py-lg-48pt\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"row\">
                        <div class=\"col-6 col-md-4 mb-24pt mb-md-0\">
                            <h4 class=\"text-black-70\">Raccourcis</h4>
                            <nav class=\"nav nav-links nav--flush flex-column\">
                                <a class=\"nav-link\" href=\"/lycee\">Lycée</a>
                                <a class=\"nav-link\" href=\"/etudes_superieures\">Etudes supérieures</a>
                                <a class=\"nav-link\" href=\"/concours\">Concours</a>
                                <a class=\"nav-link\" href=\"/evenements\">Evénements</a>
                            </nav>
                        </div>

                        ";
        // line 83
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83)) {
            // line 84
            echo "                            <div class=\"col-6 col-md-4 mb-24pt mb-md-0\">
                                <h4 class=\"text-black-70\">Rejoignez nous</h4>
                                <nav class=\"nav nav-links nav--flush flex-column\">
                                    <a class=\"nav-link\" href=\"/connexion\">Connexion</a>
                                    <a class=\"nav-link\" href=\"/inscription\">Inscription</a>
                                </nav>
                            </div>
                            <div class=\"col-6 col-md-4 mb-32pt mb-md-0\">
                                <h4 class=\"text-black-70\">Forum</h4>
                                <nav class=\"nav nav-links nav--flush flex-column\">
                                    <p class=\"text-muted\">
                                        Avez-vous des question ?
                                        voulez-vous disscuter avec les conseillers et d'autres amis ?
                                        Rejoignez-nous vite.
                                    </p>
                                </nav>
                            </div>
                        ";
        } else {
            // line 102
            echo "                            <div class=\"col-6 col-md-4 mb-24pt mb-md-0\">
                                <h4 class=\"text-black-70\">Bienvenu chez inaway</h4>
                                ";
            // line 104
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONSEILLER")) {
                // line 105
                echo "                                    <nav class=\"nav nav-links nav--flush flex-column\">
                                        <a class=\"nav-link\" href=\"";
                // line 106
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
                echo "\">Profile</a>
                                    </nav>
                                ";
            } else {
                // line 109
                echo "                                    <nav class=\"nav nav-links nav--flush flex-column\">
                                        <a class=\"nav-link\" href=\"";
                // line 110
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
                echo "\">Profile</a>
                                    </nav>
                                ";
            }
            // line 113
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 114
                echo "                                    <nav class=\"nav nav-links nav--flush flex-column\">
                                        <a class=\"nav-link\" href=\"";
                // line 115
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration");
                echo "\">Administration</a>
                                    </nav>
                                ";
            }
            // line 118
            echo "                                <nav class=\"nav nav-links nav--flush flex-column\">
                                    <a class=\"nav-link\" href=\"/deconnexion\">Déconnexion</a>
                                </nav>
                            </div>
                            <div class=\"col-6 col-md-4 mb-32pt mb-md-0\">
                                <h4 class=\"text-black-70\">Forum</h4>
                                <nav class=\"nav nav-links nav--flush flex-column\">
                                    <a class=\"nav-link\" href=\"/forum\">Discussions</a>
                                    <a class=\"nav-link\" href=\"/forum\">Poser une question</a>
                                </nav>
                            </div>
                        ";
        }
        // line 130
        echo "
                    </div>
                </div>
                <div class=\"col-md-4 text-md-left\">
                    <p class=\"text-black-70 brand justify-content-md-left\">
                        <img class=\"brand-icon\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" width=\"30\" alt=\"InaWay\">
                        InaWay
                    </p>
                    <p class=\"text-muted\">InaWay est un site d'orientation scolaire et professionnel qui va vous aidez
                        pour bien s'orienter.</p>
                </div>
            </div>
        </div>
        <div class=\"bg-footer page-section py-lg-32pt\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-4 mb-24pt mb-md-0\">
                        <p class=\"text-white-70 mb-8pt\"><strong>Suivez-nous</strong></p>
                        <nav class=\"nav nav-links nav--flush\">
                            <a href=\"#\" class=\"nav-link mr-8pt\"><img
                                        src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon/footer/facebook-square.svg"), "html", null, true);
        echo "\"
                                        alt=\"Facebook\"></a>
                            <a href=\"#\" class=\"nav-link mr-8pt\"><img
                                        src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon/footer/twitter-square.svg"), "html", null, true);
        echo "\" alt=\"Twitter\"></a>
                            <a href=\"#\" class=\"nav-link mr-8pt\"><img
                                        src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon/footer/vimeo-square.svg"), "html", null, true);
        echo "\" alt=\"Vimeo\"></a>
                            <a href=\"#\" class=\"nav-link\"><img
                                        src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/icon/footer/youtube-square.svg"), "html", null, true);
        echo "\" alt=\"YouTube\"></a>
                        </nav>
                    </div>
                    <div class=\"col-md-4 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center\">
                    </div>
                    <div class=\"col-md-6 text-md-right\">
                        <p class=\"text-white-50 mb-0\">Copyright 2023 &copy;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 172
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 173
        echo "<!-- jQuery -->
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery.min.js"), "html", null, true);
        echo "\"></script>
            
            <!-- Bootstrap -->
            <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Perfect Scrollbar -->
            <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>

            <!-- DOM Factory -->
            <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/dom-factory.js"), "html", null, true);
        echo "\"></script>

            <!-- MDK -->
            <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/material-design-kit.js"), "html", null, true);
        echo "\"></script>

            <!-- Fix Footer -->
            <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fix-footer.js"), "html", null, true);
        echo "\"></script>

            <!-- App JS -->
            <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>

            <!-- Highlight.js -->
            <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/hljs.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 196,  493 => 193,  487 => 190,  481 => 187,  475 => 184,  469 => 181,  463 => 178,  459 => 177,  453 => 174,  450 => 173,  440 => 172,  416 => 157,  411 => 155,  406 => 153,  400 => 150,  382 => 135,  375 => 130,  361 => 118,  355 => 115,  352 => 114,  349 => 113,  343 => 110,  340 => 109,  334 => 106,  331 => 105,  329 => 104,  325 => 102,  305 => 84,  303 => 83,  285 => 67,  275 => 66,  257 => 63,  244 => 60,  234 => 59,  218 => 49,  208 => 48,  197 => 43,  187 => 42,  168 => 4,  157 => 198,  155 => 172,  152 => 171,  150 => 66,  147 => 65,  145 => 63,  142 => 62,  140 => 59,  135 => 56,  133 => 48,  128 => 45,  126 => 42,  122 => 41,  116 => 38,  112 => 37,  105 => 33,  99 => 30,  91 => 25,  84 => 21,  78 => 18,  72 => 15,  66 => 12,  55 => 4,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html >
<html>
<head>
    <title> {% block title %}Page d’accueil!{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"InaWay site d'orientation scolaire\">
    <meta name=\"author\" content=\"Ahmed & Ayoub\">

    <!-- Perfect Scrollbar -->
    <link type=\"text/css\" href=\"{{ asset('assets/vendor/perfect-scrollbar.css') }}\" rel=\"stylesheet\">

    <!-- Fix ChatBot CSS -->
    <link type=\"text/css\" href=\"{{ asset('assets/css/chatbot-style.css') }}\" rel=\"stylesheet\">

    <!-- Fix Footer CSS -->
    <link type=\"text/css\" href=\"{{ asset('assets/vendor/fix-footer.css') }}\" rel=\"stylesheet\">

    <!-- Material Design Icons -->
    <link type=\"text/css\" href=\"{{ asset('assets/css/material-icons.css') }}\" rel=\"stylesheet\">

    <!-- Font Awesome Icons
    /*
    <link type=\"text/css\" href=\"{{ asset('assets/css/fontawesome.css') }}\" rel=\"stylesheet\">-->

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/fontawesome.min.js\"/>
    <!-- Preloader -->
    <link type=\"text/css\" href=\"{{ asset('assets/css/preloader.css') }}\" rel=\"stylesheet\">

    <!-- App CSS -->
    <link type=\"text/css\" href=\"{{ asset('assets/css/app.css') }}\" rel=\"stylesheet\">

    <!-- Bootstrap CSS -->
    <!--<link href=\"asset/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />-->
    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/chatbot.js') }}\"></script>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/logo.ico') }}\">
    {% block js_page %}

    {% endblock %}

</head>
<body>
{% block preloader %}
    <div class=\"preloader\">
        <div class=\"sk-double-bounce\">
            <div class=\"sk-child sk-double-bounce1\"></div>
            <div class=\"sk-child sk-double-bounce2\"></div>
        </div>
    </div>
{% endblock %}



{% block header %}
    {{ render(path('app_header')) }}
{% endblock %}

{% block body %}
{% endblock %}

{% block footer %}

    <div class=\"bg-white js-fix-footer border-top-2\">
        <div class=\"container page-section py-lg-48pt\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"row\">
                        <div class=\"col-6 col-md-4 mb-24pt mb-md-0\">
                            <h4 class=\"text-black-70\">Raccourcis</h4>
                            <nav class=\"nav nav-links nav--flush flex-column\">
                                <a class=\"nav-link\" href=\"/lycee\">Lycée</a>
                                <a class=\"nav-link\" href=\"/etudes_superieures\">Etudes supérieures</a>
                                <a class=\"nav-link\" href=\"/concours\">Concours</a>
                                <a class=\"nav-link\" href=\"/evenements\">Evénements</a>
                            </nav>
                        </div>

                        {% if not app.user %}
                            <div class=\"col-6 col-md-4 mb-24pt mb-md-0\">
                                <h4 class=\"text-black-70\">Rejoignez nous</h4>
                                <nav class=\"nav nav-links nav--flush flex-column\">
                                    <a class=\"nav-link\" href=\"/connexion\">Connexion</a>
                                    <a class=\"nav-link\" href=\"/inscription\">Inscription</a>
                                </nav>
                            </div>
                            <div class=\"col-6 col-md-4 mb-32pt mb-md-0\">
                                <h4 class=\"text-black-70\">Forum</h4>
                                <nav class=\"nav nav-links nav--flush flex-column\">
                                    <p class=\"text-muted\">
                                        Avez-vous des question ?
                                        voulez-vous disscuter avec les conseillers et d'autres amis ?
                                        Rejoignez-nous vite.
                                    </p>
                                </nav>
                            </div>
                        {% else %}
                            <div class=\"col-6 col-md-4 mb-24pt mb-md-0\">
                                <h4 class=\"text-black-70\">Bienvenu chez inaway</h4>
                                {% if is_granted('ROLE_CONSEILLER') %}
                                    <nav class=\"nav nav-links nav--flush flex-column\">
                                        <a class=\"nav-link\" href=\"{{ path('profil') }}\">Profile</a>
                                    </nav>
                                {% else %}
                                    <nav class=\"nav nav-links nav--flush flex-column\">
                                        <a class=\"nav-link\" href=\"{{ path('profile') }}\">Profile</a>
                                    </nav>
                                {% endif %}
                                {% if is_granted('ROLE_ADMIN') %}
                                    <nav class=\"nav nav-links nav--flush flex-column\">
                                        <a class=\"nav-link\" href=\"{{ path('administration') }}\">Administration</a>
                                    </nav>
                                {% endif %}
                                <nav class=\"nav nav-links nav--flush flex-column\">
                                    <a class=\"nav-link\" href=\"/deconnexion\">Déconnexion</a>
                                </nav>
                            </div>
                            <div class=\"col-6 col-md-4 mb-32pt mb-md-0\">
                                <h4 class=\"text-black-70\">Forum</h4>
                                <nav class=\"nav nav-links nav--flush flex-column\">
                                    <a class=\"nav-link\" href=\"/forum\">Discussions</a>
                                    <a class=\"nav-link\" href=\"/forum\">Poser une question</a>
                                </nav>
                            </div>
                        {% endif %}

                    </div>
                </div>
                <div class=\"col-md-4 text-md-left\">
                    <p class=\"text-black-70 brand justify-content-md-left\">
                        <img class=\"brand-icon\" src=\"{{ asset('assets/images/logo.png') }}\" width=\"30\" alt=\"InaWay\">
                        InaWay
                    </p>
                    <p class=\"text-muted\">InaWay est un site d'orientation scolaire et professionnel qui va vous aidez
                        pour bien s'orienter.</p>
                </div>
            </div>
        </div>
        <div class=\"bg-footer page-section py-lg-32pt\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-4 mb-24pt mb-md-0\">
                        <p class=\"text-white-70 mb-8pt\"><strong>Suivez-nous</strong></p>
                        <nav class=\"nav nav-links nav--flush\">
                            <a href=\"#\" class=\"nav-link mr-8pt\"><img
                                        src=\"{{ asset('assets/images/icon/footer/facebook-square.svg') }}\"
                                        alt=\"Facebook\"></a>
                            <a href=\"#\" class=\"nav-link mr-8pt\"><img
                                        src=\"{{ asset('assets/images/icon/footer/twitter-square.svg') }}\" alt=\"Twitter\"></a>
                            <a href=\"#\" class=\"nav-link mr-8pt\"><img
                                        src=\"{{ asset('assets/images/icon/footer/vimeo-square.svg') }}\" alt=\"Vimeo\"></a>
                            <a href=\"#\" class=\"nav-link\"><img
                                        src=\"{{ asset('assets/images/icon/footer/youtube-square.svg') }}\" alt=\"YouTube\"></a>
                        </nav>
                    </div>
                    <div class=\"col-md-4 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center\">
                    </div>
                    <div class=\"col-md-6 text-md-right\">
                        <p class=\"text-white-50 mb-0\">Copyright 2023 &copy;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascript %}
<!-- jQuery -->
<script src=\"{{ asset('assets/vendor/jquery.min.js') }}\"></script>
            
            <!-- Bootstrap -->
            <script src=\"{{ asset('assets/vendor/popper.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendor/bootstrap.min.js') }}\"></script>

            <!-- Perfect Scrollbar -->
            <script src=\"{{ asset('assets/vendor/perfect-scrollbar.min.js') }}\"></script>

            <!-- DOM Factory -->
            <script src=\"{{ asset('assets/vendor/dom-factory.js') }}\"></script>

            <!-- MDK -->
            <script src=\"{{ asset('assets/vendor/material-design-kit.js') }}\"></script>

            <!-- Fix Footer -->
            <script src=\"{{ asset('assets/vendor/fix-footer.js') }}\"></script>

            <!-- App JS -->
            <script src=\"{{ asset('assets/js/app.js') }}\"></script>

            <!-- Highlight.js -->
            <script src=\"{{ asset('assets/js/hljs.js') }}\"></script>
        {% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\base.html.twig");
    }
}
