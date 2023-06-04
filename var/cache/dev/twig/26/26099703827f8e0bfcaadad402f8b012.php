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

/* conseiller/index.html.twig */
class __TwigTemplate_91cb0e4a8fa4dff6ecea32540d487cad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conseiller/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conseiller/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conseiller/index.html.twig", 1);
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

        echo "Hello Conseiller!";
        
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
        .container1 {
            padding: 16px;
        }

        .modal1 {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            /* padding-top: 20px;*/
        }

        .modal-content1 {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 50%;
        }

        .animate {
            animation: animatezoom 0.6s;
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        .an {
            width: auto;
            padding: 1px 5px;
            background-color: #f44336;
            border-color: #f44336;
            color: white;
        }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "    <!-- Header Layout -->
    <div class=\"mdk-header-layout js-mdk-header-layout\">

        <!-- Header Layout Content -->
        <div class=\"mdk-header-layout__content page-content \">
            <div class=\"bg-gradient-primary border-bottom-white py-32pt\">
                <div class=\"container d-flex flex-column flex-md-row align-items-center text-center text-md-left\">
                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustration/teacher/128/white.svg"), "html", null, true);
        echo "\" width=\"104\"
                         class=\"mr-md-32pt mb-32pt mb-md-0\" alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h2 class=\"text-white mb-0\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "prenom", [], "any", false, false, false, 66), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "nom", [], "any", false, false, false, 66), "html", null, true);
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

                                <li class=\"nav-item active \">
                                    <a href=\"/conseiller\" class=\"nav-link\">Tableau de bord</a>
                                </li>

                                <li class=\"nav-item \">
                                    <a href=\"/forum\" class=\"nav-link\">Discussions</a>
                                </li>

                            </ul>
                            <ul class=\"nav navbar-nav ml-auto\">
                                <li class=\"nav-item \">
                                    <a href=\"/conseiller/profil\" class=\"nav-link\">Profil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"container page__container page-section\">
                <div class=\"mb-heading d-flex align-items-center\">
                    <h4 class=\"flex m-0\">Gérer les publications</h4>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-6\">
                        <div class=\"card card-stats mb-4 mb-xl-0\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h5 class=\"card-title text-uppercase text-muted mb-0\"
                                            style=\"text-align:center;\">
                                            Articles</h5>
                                        <div class=\"text-center\" style=\"margin-top:20px;\">
                                            <button class=\"btn-primary\"
                                                    onclick=\"document.getElementById('wifi').style.display='block'\"
                                                    style=\"border-radius:10px;cursor:pointer;\">Ajouter
                                            </button>
                                        </div>
                                        <!--Ajouter-->
                                        <div class=\"modal1\" id=\"wifi\">
                                            <div class=\"modal-content1 animate\">
                                                <div class=\"container1\" style=\"padding:70px;\">
                                                    <form action=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publier", ["type" => "article"]);
        echo "\" method=\"post\"
                                                          enctype=\"multipart/form-data\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Titre</label>
                                                                    <input type=\"text\" name=\"titre\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer un titre\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Contenu</label>
                                                                    <TextArea name=\"contenu\"
                                                                              class=\"form-control form-control-alternative\"
                                                                              row=\"4\" col=\"20\"></TextArea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Image</label>
                                                                    <input type=\"file\" name=\"image\"
                                                                           class=\"form-control form-control-alternative\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class='modal-footer' style=\"background-color:#f1f1f1;\">
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" name=\"Add\"
                                                                style=\"color:white;\">Ajouter
                                                        </button>
                                                    </div>
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"button\"
                                                                onclick=\"document.getElementById('wifi').style.display='none'\"
                                                                class=\"btn btn-sm btn-danger\"
                                                                style=\"color:white;\">Fermer
                                                        </button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--Ajouter fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6\">
                        <div class=\"card card-stats mb-4 mb-xl-0\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h5 class=\"card-title text-uppercase text-muted mb-0\"
                                            style=\"text-align:center;\">
                                            Evenements</h5>
                                        <div class=\"text-center\" style=\"margin-top:20px;\">
                                            <button class=\"btn-primary\" style=\"border-radius:10px;cursor:pointer;\"
                                                    onclick=\"document.getElementById('even').style.display='block'\">
                                                Ajouter
                                            </button>
                                        </div>
                                        <!--Ajouter-->
                                        <div class=\"modal1\" id=\"even\">
                                            <div class=\"modal-content1 animate\">
                                                <div class=\"container1\" style=\"padding:70px;\">
                                                    <form action=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publier", ["type" => "evenement"]);
        echo "\"
                                                          method=\"post\" enctype=\"multipart/form-data\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Nom</label>
                                                                    <input type=\"text\" name=\"nom\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le nom\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Lieu</label>
                                                                    <input type=\"text\" name=\"lieu\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le lieu\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Date début</label>
                                                                    <input type=\"date\" name=\"debut\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Date fin</label>
                                                                    <input type=\"date\" name=\"fin\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Discription</label>
                                                                    <TextArea name=\"disc\"
                                                                              class=\"form-control form-control-alternative\"
                                                                              row=\"4\" col=\"20\"></TextArea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Image</label>
                                                                    <input type=\"file\" name=\"image\"
                                                                           class=\"form-control form-control-alternative\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!--button class=\"btn-primary abt\" type=\"submit\" name=\"Ajouter\">Ajouter</button-->
                                                <div class='modal-footer' style=\"background-color:#f1f1f1;\">
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" name=\"Add\"
                                                                style=\"color:white;\">Ajouter
                                                        </button>
                                                    </div>
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"button\"
                                                                onclick=\"document.getElementById('even').style.display='none'\"
                                                                class=\"btn btn-sm btn-danger\"
                                                                style=\"color:white;\">Fermer
                                                        </button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--Ajouter fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6\">
                        <div class=\"card card-stats mb-4 mb-xl-0\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h5 class=\"card-title text-uppercase text-muted mb-0\"
                                            style=\"text-align:center;\">
                                            Etudes supérieures</h5>
                                        <div class=\"text-center\" style=\"margin-top:20px;\">
                                            <button class=\"btn-primary\" style=\"border-radius:10px;cursor:pointer;\"
                                                    onclick=\"document.getElementById('etude').style.display='block'\">
                                                Ajouter
                                            </button>
                                        </div>
                                        <!--Ajouter-->
                                        <div class=\"modal1\" id=\"etude\">
                                            <div class=\"modal-content1 animate\">
                                                <div class=\"container1\" style=\"padding:70px;\">
                                                    <form action=\"";
        // line 299
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publier", ["type" => "etudes_superieures"]);
        echo "\"
                                                          method=\"post\" enctype=\"multipart/form-data\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Nom d'université</label>
                                                                    <input type=\"text\" name=\"nom\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le nom\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Téléphone</label>
                                                                    <input type=\"tel\" name=\"tel\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le numero\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Adresse</label>
                                                                    <TextArea name=\"adr\"
                                                                              class=\"form-control form-control-alternative\"
                                                                              row=\"4\" col=\"20\"></TextArea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Site</label>
                                                                    <input type=\"text\" name=\"site\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Le site\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Acces</label>
                                                                    <input type=\"text\" name=\"acces\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Acces\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Discription</label>
                                                                    <TextArea name=\"disc\"
                                                                              class=\"form-control form-control-alternative\"
                                                                              row=\"4\" col=\"20\"></TextArea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Image</label>
                                                                    <input type=\"file\" name=\"image\"
                                                                           class=\"form-control form-control-alternative\">
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Secteur</label>
                                                                    <select name=\"secteur\"
                                                                            class=\"form-control form-control-alternative\">
                                                                        ";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["secteur"]) || array_key_exists("secteur", $context) ? $context["secteur"] : (function () { throw new RuntimeError('Variable "secteur" does not exist.', 370, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 371
            echo "                                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "idSecteur", [], "any", false, false, false, 371), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "Nom", [], "any", false, false, false, 371), "html", null, true);
            echo "</option>
                                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!--button class=\"btn-primary abt\" type=\"submit\" name=\"Ajouter\">Ajouter</button-->
                                                <div class='modal-footer' style=\"background-color:#f1f1f1;\">
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" name=\"Add\"
                                                                style=\"color:white;\">Ajouter
                                                        </button>
                                                    </div>
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"button\"
                                                                onclick=\"document.getElementById('etude').style.display='none'\"
                                                                class=\"btn btn-sm btn-danger\"
                                                                style=\"color:white;\">Fermer
                                                        </button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--Ajouter fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6\">
                        <div class=\"card card-stats mb-4 mb-xl-0\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h5 class=\"card-title text-uppercase text-muted mb-0\"
                                            style=\"text-align:center;\">
                                            Concours</h5>
                                        <div class=\"text-center\" style=\"margin-top:20px;\">
                                            <button class=\"btn-primary\" style=\"border-radius:10px;cursor:pointer;\"
                                                    onclick=\"document.getElementById('con').style.display='block'\">
                                                Ajouter
                                            </button>
                                        </div>
                                        <!--Ajouter-->
                                        <div class=\"modal1\" id=\"con\">
                                            <div class=\"modal-content1 animate\">
                                                <div class=\"container1\" style=\"padding:70px;\">
                                                    <form action=\"";
        // line 420
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publier", ["type" => "concours"]);
        echo "\" method=\"post\"
                                                          enctype=\"multipart/form-data\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Titre</label>
                                                                    <input type=\"text\" name=\"titre\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le titre\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Lieu</label>
                                                                    <input type=\"text\" name=\"lieu\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le lieu\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Discription</label>
                                                                    <TextArea name=\"disc\"
                                                                              class=\"form-control form-control-alternative\"
                                                                              row=\"4\" col=\"20\"></TextArea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Date</label>
                                                                    <input type=\"date\" name=\"date\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Image</label>
                                                                    <input type=\"file\" name=\"image\"
                                                                           class=\"form-control form-control-alternative\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!--button class=\"btn-primary abt\" type=\"submit\" name=\"Ajouter\">Ajouter</button-->
                                                <div class='modal-footer' style=\"background-color:#f1f1f1;\">
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" name=\"Add\"
                                                                style=\"color:white;\">Ajouter
                                                        </button>
                                                    </div>
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"button\"
                                                                onclick=\"document.getElementById('con').style.display='none'\"
                                                                class=\"btn btn-sm btn-danger\"
                                                                style=\"color:white;\">Fermer
                                                        </button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--Ajouter fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


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
        return "conseiller/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 420,  506 => 373,  495 => 371,  491 => 370,  417 => 299,  314 => 199,  238 => 126,  173 => 66,  167 => 63,  158 => 56,  148 => 55,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello Conseiller!{% endblock %}
{% block js_page %}
    <style>
        .container1 {
            padding: 16px;
        }

        .modal1 {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            /* padding-top: 20px;*/
        }

        .modal-content1 {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 50%;
        }

        .animate {
            animation: animatezoom 0.6s;
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        .an {
            width: auto;
            padding: 1px 5px;
            background-color: #f44336;
            border-color: #f44336;
            color: white;
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
                        <h2 class=\"text-white mb-0\">{{app.user.prenom}} {{app.user.nom}}</h2>
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

                                <li class=\"nav-item active \">
                                    <a href=\"/conseiller\" class=\"nav-link\">Tableau de bord</a>
                                </li>

                                <li class=\"nav-item \">
                                    <a href=\"/forum\" class=\"nav-link\">Discussions</a>
                                </li>

                            </ul>
                            <ul class=\"nav navbar-nav ml-auto\">
                                <li class=\"nav-item \">
                                    <a href=\"/conseiller/profil\" class=\"nav-link\">Profil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"container page__container page-section\">
                <div class=\"mb-heading d-flex align-items-center\">
                    <h4 class=\"flex m-0\">Gérer les publications</h4>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-6\">
                        <div class=\"card card-stats mb-4 mb-xl-0\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h5 class=\"card-title text-uppercase text-muted mb-0\"
                                            style=\"text-align:center;\">
                                            Articles</h5>
                                        <div class=\"text-center\" style=\"margin-top:20px;\">
                                            <button class=\"btn-primary\"
                                                    onclick=\"document.getElementById('wifi').style.display='block'\"
                                                    style=\"border-radius:10px;cursor:pointer;\">Ajouter
                                            </button>
                                        </div>
                                        <!--Ajouter-->
                                        <div class=\"modal1\" id=\"wifi\">
                                            <div class=\"modal-content1 animate\">
                                                <div class=\"container1\" style=\"padding:70px;\">
                                                    <form action=\"{{ path('publier',{type:'article'}) }}\" method=\"post\"
                                                          enctype=\"multipart/form-data\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Titre</label>
                                                                    <input type=\"text\" name=\"titre\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer un titre\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Contenu</label>
                                                                    <TextArea name=\"contenu\"
                                                                              class=\"form-control form-control-alternative\"
                                                                              row=\"4\" col=\"20\"></TextArea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Image</label>
                                                                    <input type=\"file\" name=\"image\"
                                                                           class=\"form-control form-control-alternative\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class='modal-footer' style=\"background-color:#f1f1f1;\">
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" name=\"Add\"
                                                                style=\"color:white;\">Ajouter
                                                        </button>
                                                    </div>
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"button\"
                                                                onclick=\"document.getElementById('wifi').style.display='none'\"
                                                                class=\"btn btn-sm btn-danger\"
                                                                style=\"color:white;\">Fermer
                                                        </button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--Ajouter fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6\">
                        <div class=\"card card-stats mb-4 mb-xl-0\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h5 class=\"card-title text-uppercase text-muted mb-0\"
                                            style=\"text-align:center;\">
                                            Evenements</h5>
                                        <div class=\"text-center\" style=\"margin-top:20px;\">
                                            <button class=\"btn-primary\" style=\"border-radius:10px;cursor:pointer;\"
                                                    onclick=\"document.getElementById('even').style.display='block'\">
                                                Ajouter
                                            </button>
                                        </div>
                                        <!--Ajouter-->
                                        <div class=\"modal1\" id=\"even\">
                                            <div class=\"modal-content1 animate\">
                                                <div class=\"container1\" style=\"padding:70px;\">
                                                    <form action=\"{{ path('publier',{type:'evenement'}) }}\"
                                                          method=\"post\" enctype=\"multipart/form-data\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Nom</label>
                                                                    <input type=\"text\" name=\"nom\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le nom\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Lieu</label>
                                                                    <input type=\"text\" name=\"lieu\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le lieu\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Date début</label>
                                                                    <input type=\"date\" name=\"debut\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Date fin</label>
                                                                    <input type=\"date\" name=\"fin\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Discription</label>
                                                                    <TextArea name=\"disc\"
                                                                              class=\"form-control form-control-alternative\"
                                                                              row=\"4\" col=\"20\"></TextArea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Image</label>
                                                                    <input type=\"file\" name=\"image\"
                                                                           class=\"form-control form-control-alternative\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!--button class=\"btn-primary abt\" type=\"submit\" name=\"Ajouter\">Ajouter</button-->
                                                <div class='modal-footer' style=\"background-color:#f1f1f1;\">
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" name=\"Add\"
                                                                style=\"color:white;\">Ajouter
                                                        </button>
                                                    </div>
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"button\"
                                                                onclick=\"document.getElementById('even').style.display='none'\"
                                                                class=\"btn btn-sm btn-danger\"
                                                                style=\"color:white;\">Fermer
                                                        </button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--Ajouter fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6\">
                        <div class=\"card card-stats mb-4 mb-xl-0\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h5 class=\"card-title text-uppercase text-muted mb-0\"
                                            style=\"text-align:center;\">
                                            Etudes supérieures</h5>
                                        <div class=\"text-center\" style=\"margin-top:20px;\">
                                            <button class=\"btn-primary\" style=\"border-radius:10px;cursor:pointer;\"
                                                    onclick=\"document.getElementById('etude').style.display='block'\">
                                                Ajouter
                                            </button>
                                        </div>
                                        <!--Ajouter-->
                                        <div class=\"modal1\" id=\"etude\">
                                            <div class=\"modal-content1 animate\">
                                                <div class=\"container1\" style=\"padding:70px;\">
                                                    <form action=\"{{ path('publier',{type:'etudes_superieures'}) }}\"
                                                          method=\"post\" enctype=\"multipart/form-data\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Nom d'université</label>
                                                                    <input type=\"text\" name=\"nom\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le nom\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Téléphone</label>
                                                                    <input type=\"tel\" name=\"tel\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le numero\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Adresse</label>
                                                                    <TextArea name=\"adr\"
                                                                              class=\"form-control form-control-alternative\"
                                                                              row=\"4\" col=\"20\"></TextArea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Site</label>
                                                                    <input type=\"text\" name=\"site\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Le site\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Acces</label>
                                                                    <input type=\"text\" name=\"acces\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Acces\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Discription</label>
                                                                    <TextArea name=\"disc\"
                                                                              class=\"form-control form-control-alternative\"
                                                                              row=\"4\" col=\"20\"></TextArea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Image</label>
                                                                    <input type=\"file\" name=\"image\"
                                                                           class=\"form-control form-control-alternative\">
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Secteur</label>
                                                                    <select name=\"secteur\"
                                                                            class=\"form-control form-control-alternative\">
                                                                        {% for n in secteur %}
                                                                            <option value=\"{{ n.idSecteur }}\">{{ n.Nom }}</option>
                                                                        {% endfor %}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!--button class=\"btn-primary abt\" type=\"submit\" name=\"Ajouter\">Ajouter</button-->
                                                <div class='modal-footer' style=\"background-color:#f1f1f1;\">
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" name=\"Add\"
                                                                style=\"color:white;\">Ajouter
                                                        </button>
                                                    </div>
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"button\"
                                                                onclick=\"document.getElementById('etude').style.display='none'\"
                                                                class=\"btn btn-sm btn-danger\"
                                                                style=\"color:white;\">Fermer
                                                        </button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--Ajouter fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6\">
                        <div class=\"card card-stats mb-4 mb-xl-0\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <h5 class=\"card-title text-uppercase text-muted mb-0\"
                                            style=\"text-align:center;\">
                                            Concours</h5>
                                        <div class=\"text-center\" style=\"margin-top:20px;\">
                                            <button class=\"btn-primary\" style=\"border-radius:10px;cursor:pointer;\"
                                                    onclick=\"document.getElementById('con').style.display='block'\">
                                                Ajouter
                                            </button>
                                        </div>
                                        <!--Ajouter-->
                                        <div class=\"modal1\" id=\"con\">
                                            <div class=\"modal-content1 animate\">
                                                <div class=\"container1\" style=\"padding:70px;\">
                                                    <form action=\"{{ path('publier',{type:'concours'}) }}\" method=\"post\"
                                                          enctype=\"multipart/form-data\">
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Titre</label>
                                                                    <input type=\"text\" name=\"titre\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le titre\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Lieu</label>
                                                                    <input type=\"text\" name=\"lieu\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           placeholder=\"Entrer le lieu\" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-12\">
                                                                <div class=\"form-group\">
                                                                    <label>Discription</label>
                                                                    <TextArea name=\"disc\"
                                                                              class=\"form-control form-control-alternative\"
                                                                              row=\"4\" col=\"20\"></TextArea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"row\">
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Date</label>
                                                                    <input type=\"date\" name=\"date\"
                                                                           class=\"form-control form-control-alternative\"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-lg-6\">
                                                                <div class=\"form-group\">
                                                                    <label>Image</label>
                                                                    <input type=\"file\" name=\"image\"
                                                                           class=\"form-control form-control-alternative\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <!--button class=\"btn-primary abt\" type=\"submit\" name=\"Ajouter\">Ajouter</button-->
                                                <div class='modal-footer' style=\"background-color:#f1f1f1;\">
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"submit\" class=\"btn btn-sm btn-primary\" name=\"Add\"
                                                                style=\"color:white;\">Ajouter
                                                        </button>
                                                    </div>
                                                    <div class=\"col-2 text-right\">
                                                        <button type=\"button\"
                                                                onclick=\"document.getElementById('con').style.display='none'\"
                                                                class=\"btn btn-sm btn-danger\"
                                                                style=\"color:white;\">Fermer
                                                        </button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--Ajouter fin-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- // END Header Layout Content -->
    </div>
    <!-- // END Header Layout -->



{% endblock %}", "conseiller/index.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\conseiller\\index.html.twig");
    }
}
