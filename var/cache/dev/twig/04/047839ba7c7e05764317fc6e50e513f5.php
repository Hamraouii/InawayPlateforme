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

/* header/index.html.twig */
class __TwigTemplate_96718eed3bf2581c29afc257ed5f52e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/index.html.twig"));

        // line 1
        echo "<head>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <link type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/chatbot-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css\"/>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/chatbot.js"), "html", null, true);
        echo "\"></script>
</head>

<script>
    // ChatBot Script
    \$(document).ready(function () {
        \$(\"#send-btn\").on(\"click\", async function () {

            \$value = \$(\"#data\").val();
            \$msg = '<div class=\"user-inbox inbox\"><div class=\"msg-header\"><p>' + \$value + '</p></div></div>';
            \$(\".form\").append(\$msg);

            \$writingMsg = '<div id=\"waiting\" class=\"bot-inbox inbox\">' +
                '<div class=\"icon\">' + '<i class=\"fa-solid fa-robot\"></i> </div>' +
                '<div class=\"msg-header\"><p>. . . </p> </div>' +
                '</div>';
            \$(\".form\").append(\$writingMsg);

            \$(\"#data\").val('');

            // the function that consume the API
            const answer = await askAssistant(\$value);

            \$replay = '<div class=\"bot-inbox inbox\"><div class=\"icon\"><i class=\"fa-solid fa-robot\"></i></div><div class=\"msg-header\"><p>' + answer + '</p></div></div>';

            \$('#waiting').remove();
            \$(\".form\").append(\$replay);

        });
    });
</script>
<!--ChatBot Modal-->
<div class=\"modal fade custom-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"chatbot\" aria-hidden=\"true\"
     id=\"chatbot\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"wrapper\">
                <div class=\"title modal-header justify-content-md-center\">
                    <h5 class=\"modal-title\">Assistant</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span
                                aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                </div>
                <div class=\"form\">
                    <div class=\"bot-inbox inbox\">
                        <div class=\"icon\">
                            <i class=\"fa-solid fa-robot\"></i>
                        </div>
                        <div class=\"msg-header\">
                            <p>
                                Bienvenue ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "prenom", [], "any", false, false, false, 54), "html", null, true);
            echo "
                                ";
        } else {
            // line 55
            echo " cher visiteur
                                ";
        }
        // line 57
        echo "                                !
                            </p>
                        </div>
                    </div>
                    <div class=\"bot-inbox inbox\">
                        <div class=\"icon\">
                            <i class=\"fa-solid fa-robot\"></i>
                        </div>
                        <div class=\"msg-header\">
                            <p>Je suis là pour vous aider avec votre orientation académique</p>
                        </div>
                    </div>
                </div>
                <form>
                <div class=\"typing-field\">
                    <div class=\"input-data\">
                        <input id=\"data\" type=\"text\" placeholder=\"Type something here..\" required>
                        <button id=\"send-btn\">Send</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--SingUp Modal-->
<div class=\"modal fade custom-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"singup\" aria-hidden=\"true\"
     id=\"singup\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <form action=\"/inscription/ajouter\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Inscription</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span
                                aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                </div>

                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <label for=\"prenom\">Prénom:</label>
                                <input name=\"prenom\" type=\"text\" class=\"form-control\" placeholder=\"Votre prénom ...\">
                            </div>
                            <div class=\"col-lg-6\">
                                <label for=\"nom\">Nom:</label>
                                <input name=\"nom\" type=\"text\" class=\"form-control\" placeholder=\"Votre nom ...\">
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <label for=\"cne\">CNE:</label>
                                <input name=\"cne\" type=\"text\" class=\"form-control\" placeholder=\"Votre CNE ...\">
                            </div>
                            <div class=\"col-lg-6\">
                                <label for=\"cne\">CIN:</label>
                                <input name=\"cin\" type=\"text\" class=\"form-control\" placeholder=\"Votre CIN ...\">
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
                                <br><label for=\"password\">Confirmer le Mot de passe:</label>
                                <input name=\"confirm_password\" type=\"password\" class=\"form-control\"
                                       placeholder=\"Répeter votre mot de passe ...\">
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <label for=\"nom\">Niveau:</label><br>
                                <select name=\"niveau\" class=\"form-control custom-select w-auto\">
                                    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveau"]) || array_key_exists("niveau", $context) ? $context["niveau"] : (function () { throw new RuntimeError('Variable "niveau" does not exist.', 148, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 149
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "idNiveau", [], "any", false, false, false, 149), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "Nom", [], "any", false, false, false, 149), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                                </select>
                            </div>
                            <div class=\"col-lg-12\">
                                <br><label for=\"nom\">Avatar:</label><br>
                                <input type=\"file\" name=\"avatar\" accept=\"image/png, image/jpeg\">
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <label for=\"nom\">Académie:</label><br>
                                <select name=\"acadimie\" class=\"form-control custom-select w-auto\">
                                    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acadimie"]) || array_key_exists("acadimie", $context) ? $context["acadimie"] : (function () { throw new RuntimeError('Variable "acadimie" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 165
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "idAcadimie", [], "any", false, false, false, 165), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Nom", [], "any", false, false, false, 165), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                                </select>
                            </div>
                            <div class=\"col-lg-12\">
                                <br><label for=\"nom\">Direction:</label><br>
                                <select name=\"direction\" class=\"form-control custom-select w-auto\">
                                    ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 172, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 173
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "idDirection", [], "any", false, false, false, 173), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "Nom", [], "any", false, false, false, 173), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-lg btn-accent\">Inscription</button>
                </div>

            </form>
        </div>
    </div>
</div>


<!--SingIn Modal-->
<div class=\"modal fade custom-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"singin\" aria-hidden=\"true\"
     id=\"singin\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <form action=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connexion");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Connexion</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span
                                aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                </div>

                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <label for=\"_username\">Email:</label>
                            <input name=\"_username\" type=\"text\" class=\"form-control\"
                                   placeholder=\"Votre adresse email ...\"
                                   required>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <label for=\"_password\">Mot de passe:</label>
                            <input name=\"_password\" type=\"password\" class=\"form-control\"
                                   placeholder=\"Votre mot de passe ...\" required>
                        </div>
                    </div>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-lg btn-accent\">Connexion</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!--SingIn Modal-->

<!-- Header Layout -->


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
                <img class=\"navbar-brand-icon mr-0 mr-md-8pt\" src=\"assets/images/logo.png\" width=\"30\" alt=\"InaWay\">
            </a>

            <!-- Main Navigation -->
            <ul class=\"nav navbar-nav ml-auto d-none d-sm-flex\">
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#chatbot\">
                        <i class=\"fas fa-robot\"></i>
                    </a>
                </li>

                ";
        // line 262
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 262, $this->source); })()), "user", [], "any", false, false, false, 262)) {
            // line 263
            echo "                    <li class=\"nav-item \">
                        <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#singup\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#singin\">Connexion</a>
                    </li>
                ";
        } else {
            // line 270
            echo "
                    ";
            // line 271
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONSEILLER")) {
                // line 272
                echo "                        <li class=\"nav-item\">
                            <a href=\"";
                // line 273
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
                echo "\" class=\"nav-link\">
                                <i class=\"fas fa-user-circle\"></i>
                            </a>
                        </li>

                    ";
            } else {
                // line 279
                echo "                        <li class=\"nav-item\">
                            <a href=\"";
                // line 280
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
                echo "\" class=\"nav-link\">
                                <i class=\"fas fa-user-circle\"></i>
                            </a>
                        </li>

                    ";
            }
            // line 286
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 287
                echo "                        <li class=\"nav-item\">
                            <a href=\"";
                // line 288
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("administration");
                echo "\" class=\"nav-link\">
                                <i class=\"fas fa-briefcase\"></i>
                            </a>
                        </li>

                    ";
            }
            // line 294
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 295
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"nav-link\">
                            <i class=\"fas fa-power-off\"></i>
                        </a>
                    </li>

                ";
        }
        // line 301
        echo "            </ul>
        </div>
    </div>
</div>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "header/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 301,  425 => 295,  422 => 294,  413 => 288,  410 => 287,  407 => 286,  398 => 280,  395 => 279,  386 => 273,  383 => 272,  381 => 271,  378 => 270,  369 => 263,  367 => 262,  299 => 197,  275 => 175,  264 => 173,  260 => 172,  253 => 167,  242 => 165,  238 => 164,  223 => 151,  212 => 149,  208 => 148,  115 => 57,  111 => 55,  104 => 54,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <link type=\"text/css\" href=\"{{ asset('assets/css/chatbot-style.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.css\"/>
    <script src=\"{{ asset('assets/js/chatbot.js') }}\"></script>
</head>

<script>
    // ChatBot Script
    \$(document).ready(function () {
        \$(\"#send-btn\").on(\"click\", async function () {

            \$value = \$(\"#data\").val();
            \$msg = '<div class=\"user-inbox inbox\"><div class=\"msg-header\"><p>' + \$value + '</p></div></div>';
            \$(\".form\").append(\$msg);

            \$writingMsg = '<div id=\"waiting\" class=\"bot-inbox inbox\">' +
                '<div class=\"icon\">' + '<i class=\"fa-solid fa-robot\"></i> </div>' +
                '<div class=\"msg-header\"><p>. . . </p> </div>' +
                '</div>';
            \$(\".form\").append(\$writingMsg);

            \$(\"#data\").val('');

            // the function that consume the API
            const answer = await askAssistant(\$value);

            \$replay = '<div class=\"bot-inbox inbox\"><div class=\"icon\"><i class=\"fa-solid fa-robot\"></i></div><div class=\"msg-header\"><p>' + answer + '</p></div></div>';

            \$('#waiting').remove();
            \$(\".form\").append(\$replay);

        });
    });
</script>
<!--ChatBot Modal-->
<div class=\"modal fade custom-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"chatbot\" aria-hidden=\"true\"
     id=\"chatbot\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"wrapper\">
                <div class=\"title modal-header justify-content-md-center\">
                    <h5 class=\"modal-title\">Assistant</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span
                                aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                </div>
                <div class=\"form\">
                    <div class=\"bot-inbox inbox\">
                        <div class=\"icon\">
                            <i class=\"fa-solid fa-robot\"></i>
                        </div>
                        <div class=\"msg-header\">
                            <p>
                                Bienvenue {% if app.user %} {{app.user.prenom}}
                                {% else %} cher visiteur
                                {% endif %}
                                !
                            </p>
                        </div>
                    </div>
                    <div class=\"bot-inbox inbox\">
                        <div class=\"icon\">
                            <i class=\"fa-solid fa-robot\"></i>
                        </div>
                        <div class=\"msg-header\">
                            <p>Je suis là pour vous aider avec votre orientation académique</p>
                        </div>
                    </div>
                </div>
                <form>
                <div class=\"typing-field\">
                    <div class=\"input-data\">
                        <input id=\"data\" type=\"text\" placeholder=\"Type something here..\" required>
                        <button id=\"send-btn\">Send</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--SingUp Modal-->
<div class=\"modal fade custom-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"singup\" aria-hidden=\"true\"
     id=\"singup\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <form action=\"/inscription/ajouter\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Inscription</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span
                                aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                </div>

                <div class=\"modal-body\">
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <label for=\"prenom\">Prénom:</label>
                                <input name=\"prenom\" type=\"text\" class=\"form-control\" placeholder=\"Votre prénom ...\">
                            </div>
                            <div class=\"col-lg-6\">
                                <label for=\"nom\">Nom:</label>
                                <input name=\"nom\" type=\"text\" class=\"form-control\" placeholder=\"Votre nom ...\">
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <label for=\"cne\">CNE:</label>
                                <input name=\"cne\" type=\"text\" class=\"form-control\" placeholder=\"Votre CNE ...\">
                            </div>
                            <div class=\"col-lg-6\">
                                <label for=\"cne\">CIN:</label>
                                <input name=\"cin\" type=\"text\" class=\"form-control\" placeholder=\"Votre CIN ...\">
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
                                <br><label for=\"password\">Confirmer le Mot de passe:</label>
                                <input name=\"confirm_password\" type=\"password\" class=\"form-control\"
                                       placeholder=\"Répeter votre mot de passe ...\">
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <label for=\"nom\">Niveau:</label><br>
                                <select name=\"niveau\" class=\"form-control custom-select w-auto\">
                                    {% for n in niveau %}
                                        <option value=\"{{ n.idNiveau }}\">{{ n.Nom }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-lg-12\">
                                <br><label for=\"nom\">Avatar:</label><br>
                                <input type=\"file\" name=\"avatar\" accept=\"image/png, image/jpeg\">
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <label for=\"nom\">Académie:</label><br>
                                <select name=\"acadimie\" class=\"form-control custom-select w-auto\">
                                    {% for a in acadimie %}
                                        <option value=\"{{ a.idAcadimie }}\">{{ a.Nom }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div class=\"col-lg-12\">
                                <br><label for=\"nom\">Direction:</label><br>
                                <select name=\"direction\" class=\"form-control custom-select w-auto\">
                                    {% for d in direction %}
                                        <option value=\"{{ d.idDirection }}\">{{ d.Nom }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-lg btn-accent\">Inscription</button>
                </div>

            </form>
        </div>
    </div>
</div>


<!--SingIn Modal-->
<div class=\"modal fade custom-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"singin\" aria-hidden=\"true\"
     id=\"singin\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

            <form action=\"{{ path('connexion') }}\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Connexion</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span
                                aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                </div>

                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <label for=\"_username\">Email:</label>
                            <input name=\"_username\" type=\"text\" class=\"form-control\"
                                   placeholder=\"Votre adresse email ...\"
                                   required>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <label for=\"_password\">Mot de passe:</label>
                            <input name=\"_password\" type=\"password\" class=\"form-control\"
                                   placeholder=\"Votre mot de passe ...\" required>
                        </div>
                    </div>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-lg btn-accent\">Connexion</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!--SingIn Modal-->

<!-- Header Layout -->


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
                <img class=\"navbar-brand-icon mr-0 mr-md-8pt\" src=\"assets/images/logo.png\" width=\"30\" alt=\"InaWay\">
            </a>

            <!-- Main Navigation -->
            <ul class=\"nav navbar-nav ml-auto d-none d-sm-flex\">
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#chatbot\">
                        <i class=\"fas fa-robot\"></i>
                    </a>
                </li>

                {% if not app.user %}
                    <li class=\"nav-item \">
                        <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#singup\">Inscription</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\" data-toggle=\"modal\" data-target=\"#singin\">Connexion</a>
                    </li>
                {% else %}

                    {% if is_granted('ROLE_CONSEILLER') %}
                        <li class=\"nav-item\">
                            <a href=\"{{ path('profil') }}\" class=\"nav-link\">
                                <i class=\"fas fa-user-circle\"></i>
                            </a>
                        </li>

                    {% else %}
                        <li class=\"nav-item\">
                            <a href=\"{{ path('profile') }}\" class=\"nav-link\">
                                <i class=\"fas fa-user-circle\"></i>
                            </a>
                        </li>

                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a href=\"{{ path('administration') }}\" class=\"nav-link\">
                                <i class=\"fas fa-briefcase\"></i>
                            </a>
                        </li>

                    {% endif %}
                    <li class=\"nav-item\">
                        <a href=\"{{ path('logout') }}\" class=\"nav-link\">
                            <i class=\"fas fa-power-off\"></i>
                        </a>
                    </li>

                {% endif %}
            </ul>
        </div>
    </div>
</div>


", "header/index.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\header\\index.html.twig");
    }
}
