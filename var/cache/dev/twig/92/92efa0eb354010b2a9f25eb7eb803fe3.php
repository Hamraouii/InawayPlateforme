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

/* administration/index.html.twig */
class __TwigTemplate_e0e850ad787d06c428a2babbdad095d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "administration/index.html.twig", 1);
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

        echo "Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "prenom", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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
        echo "    <script>

        function showModal(id) {
            model = \"#update\" + id;
            //\$('#update .score').html(id);
            \$(model).modal('show')

        }

        function getUtilisateur(index) {
            var id = index - 1;
            //alert(id);
            showModal(id);
        }

        \$(document).ready(function () {
            \$(\"input[type=checkbox]\").click(function () {
                \$.ajax({
                    type: \"POST\",
                    url: \"\",
                    data: {
                        value: \$(this).prop(\"checked\") ? 1 : 0
                    },
                    success: function (data) {
                        \$('#echo2').html(data);
                    }
                });
            });


        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 41
            echo "        <div class=\"modal fade custom-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"update\" aria-hidden=\"true\"
             id=\"update";
            // line 42
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42) - 1), "html", null, true);
            echo "\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <form action=\"admin/modifierconseiller/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "idUser", [], "any", false, false, false, 45), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Modifier le conseiller</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span
                                        aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                        </div>

                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <label for=\"prenom\">Prénom:</label>
                                        <input name=\"prenom\" type=\"text\" class=\"form-control\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 57), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <label for=\"nom\">Nom:</label>
                                        <input name=\"nom\" type=\"text\" class=\"form-control\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 61), "html", null, true);
            echo "\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <label for=\"cne\">PPR:</label>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <label for=\"cne\">CIN:</label>
                                        <input name=\"cin\" type=\"text\" class=\"form-control\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "cin", [], "any", false, false, false, 72), "html", null, true);
            echo "\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <label for=\"email\">Email:</label>
                                        <input name=\"email\" type=\"email\" class=\"form-control\"
                                               value=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 81), "html", null, true);
            echo "\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <br><label for=\"password\">Mot de passe:</label>
                                        <input name=\"password\" type=\"password\" class=\"form-control\"
                                               value=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "password", [], "any", false, false, false, 90), "html", null, true);
            echo "\">
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <br><label for=\"password\">Confirmer le Mot de passe:</label>
                                        <input name=\"confirm_password\" type=\"password\" class=\"form-control\"
                                               value=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "password", [], "any", false, false, false, 95), "html", null, true);
            echo "\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
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
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["acadimie"]) || array_key_exists("acadimie", $context) ? $context["acadimie"] : (function () { throw new RuntimeError('Variable "acadimie" does not exist.', 112, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 113
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "idAcadimie", [], "any", false, false, false, 113), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Nom", [], "any", false, false, false, 113), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                                        </select>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <br><label for=\"nom\">Direction:</label><br>
                                        <select name=\"direction\" class=\"form-control custom-select w-auto\">
                                            ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 121
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "idDirection", [], "any", false, false, false, 121), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "Nom", [], "any", false, false, false, 121), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-lg btn-accent\">Modifier</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "    <!-- Header Layout -->
    <div class=\"mdk-header-layout js-mdk-header-layout\">

        <!-- Header Layout Content -->
        <div class=\"mdk-header-layout__content page-content \">
            <div class=\"bg-gradient-primary border-bottom-white py-32pt\">
                <div class=\"container d-flex flex-column flex-md-row align-items-center text-center text-md-left\">
                    <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/illustration/teacher/128/white.svg"), "html", null, true);
        echo "\" width=\"104\"
                         class=\"mr-md-32pt mb-32pt mb-md-0\" alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h2 class=\"text-white mb-0\" id=\"text\"></h2>
                        <script type=\"text/javascript\">
                            var i = 0, text;
                            text = \"Bienvenue ";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "html", null, true);
        echo "\";

                            function typing() {
                                if (i < text.length) {
                                    document.getElementById(\"text\").innerHTML += text.charAt(i);
                                    i++;
                                    setTimeout(typing, 80);
                                }
                            }

                            typing();
                        </script>
                        <p class=\"lead text-white-50 d-flex align-items-center\">Administrateur</p>
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

                                <li class=\"nav-item active\">
                                    <a href=\"/eleve\" class=\"nav-link\">Espace Administrateur</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!--Debut-->
            <div class=\"container page__container page-section\">

                <div class=\"page-headline text-center\">
                    <h2>Gestion des conseillers</h2>
                </div>
                <div class=\"col-xl-12 col-lg-24\">
                    <div class=\"card card-stats mb-4 mb-xl-0\">
                    <span class=\"pull-right\" style=\"float:right; margin-top:30px;margin-left:850px;\">
                    <button class=\"btn btn-primary btn-sm\" data-toggle=\"modal\"
                            data-target=\"#singup\"><i class=\"fa fa-plus\"
                                                     aria-hidden=\"true\"></i> Ajouter un conseiller</button></span>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"card-body\">

                                        <div class=\"table-responsive\">
                                            <table class=\"table table-bordered table-hover display\">
                                                <thead>
                                                <tr>
                                                    <th style=\"padding:13px;\">Prénom</th>
                                                    <th style=\"padding:13px;\">Nom</th>
                                                    <th style=\"padding:13px;\">Email</th>
                                                    <th style=\"padding:13px;\">CIN</th>
                                                    <th style=\"padding:13px;\">Actions</th>
                                                </tr>
                                                </thead>
                                                ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 217, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 218
            echo "                                                    <tr>
                                                        <td style=\"padding:13px;\">";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 219), "html", null, true);
            echo "</td>
                                                        <td style=\"padding:13px;\">";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 220), "html", null, true);
            echo "</td>
                                                        <td style=\"padding:13px;\">";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 221), "html", null, true);
            echo "</td>
                                                        <td style=\"padding:13px;\">";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "cin", [], "any", false, false, false, 222), "html", null, true);
            echo "</td>
                                                        <td style=\"padding:13px; text-align:center;\">
                                                            <a role=\"button\" id=\"modifier\" data-toggle=\"modal\"
                                                               data-target=\"\" onclick=\"getUtilisateur(";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 225), "html", null, true);
            echo ")\"
                                                               value=\"";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 226), "html", null, true);
            echo "\"><i
                                                                        class=\"fas fa-edit text-green fa-2x\"
                                                                        style=\"font-size: 20px; \"></i></a>
                                                            <a role=\"button\" id=\"supprimer\"
                                                               href=\"/admin/supprimerconseiller/";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "idUser", [], "any", false, false, false, 230), "html", null, true);
            echo "\"><i
                                                                        class=\"fas fa-trash text-red fa-2x\"
                                                                        style=\"font-size: 20px;\"></i></a>
                                                        </td>
                                                    </tr>
                                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"container page__container page-section\">

                <div class=\"page-headline text-center\">
                    <h2>Gestion des publications</h2>
                </div>
                <div class=\"card card-body mb-32pt\">
                    <div class=\"row\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover display\">
                                <thead>
                                <tr>
                                    <th style=\"width:600px;\">Publication</th>
                                    <th style=\"width:200px;\">Titre</th>
                                    <th style=\"width:90px;\">Conseiller</th>
                                    <th style=\"padding:13px;\">Approuver</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pub"]) || array_key_exists("pub", $context) ? $context["pub"] : (function () { throw new RuntimeError('Variable "pub" does not exist.', 267, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 268
            echo "                                    <tr>
                                        <td style=\"width:600px;\">
                                            <p class=\"text-70\">";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "contenu", [], "any", false, false, false, 270), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"width:200px;\">
                                            <p class=\"text-70\">";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "titre", [], "any", false, false, false, 273), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"width:90px;\">
                                            <p class=\"text-70\">";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "idConseiller", [], "any", false, false, false, 276), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <div class=\"col-lg-12 d-flex align-items-center\">
                                                <div class=\"flex\">
                                                    <a role=\"button\"
                                                       href=\"/admin/accepterpublication/article/";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "idArticle", [], "any", false, false, false, 282), "html", null, true);
            echo "\"><i
                                                                class=\"fas fa-check text-green fa-2x\"
                                                                style=\"color:green;font-size: 20px; margin-left:18px;\"></i></a>
                                                    <a role=\"button\"
                                                       href=\"/admin/refuserpublication/article/";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "idArticle", [], "any", false, false, false, 286), "html", null, true);
            echo "\"><i
                                                                class=\"fas fa-times text-red fa-2x\"
                                                                style=\"color:red; font-size: 20px;margin-left:30px;\"></i></a>

                                                    <!--<label class=\"form-label mb-0\" for=\"approuver\">Oui</label>-->
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pub1"]) || array_key_exists("pub1", $context) ? $context["pub1"] : (function () { throw new RuntimeError('Variable "pub1" does not exist.', 296, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p1"]) {
            // line 297
            echo "                                    <tr>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">";
            // line 299
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p1"], "discription", [], "any", false, false, false, 299), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p1"], "nom", [], "any", false, false, false, 302), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p1"], "idConseiller", [], "any", false, false, false, 305), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <div class=\"col-lg-12 d-flex align-items-center\">
                                                <div class=\"flex\">
                                                    <a role=\"button\" href=\"/admin/accepterpublication/es/";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p1"], "idEs", [], "any", false, false, false, 310), "html", null, true);
            echo "\"><i
                                                                class=\"fas fa-check text-green fa-2x\"
                                                                style=\"color:green;font-size: 20px;margin-left:18px;\"></i></a>
                                                    <a role=\"button\"
                                                       href=\"/admin/refuserpublication/es/";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p1"], "idEs", [], "any", false, false, false, 314), "html", null, true);
            echo "\"><i
                                                                class=\"fas fa-times text-red fa-2x\"
                                                                style=\"color:red; font-size: 20px; margin-left:30px;\"></i></a>
                                                    <!--<label class=\"form-label mb-0\" for=\"approuver1\">Oui</label>-->
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pub2"]) || array_key_exists("pub2", $context) ? $context["pub2"] : (function () { throw new RuntimeError('Variable "pub2" does not exist.', 323, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p2"]) {
            // line 324
            echo "                                    <tr>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p2"], "discription", [], "any", false, false, false, 326), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">";
            // line 329
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p2"], "titre", [], "any", false, false, false, 329), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">";
            // line 332
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p2"], "idConseiller", [], "any", false, false, false, 332), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <div class=\"col-lg-12 d-flex align-items-center\">
                                                <div class=\"flex\">
                                                    <a role=\"button\"
                                                       href=\"/admin/accepterpublication/concours/";
            // line 338
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p2"], "idConcours", [], "any", false, false, false, 338), "html", null, true);
            echo "\"><i
                                                                class=\"fas fa-check text-green fa-2x\"
                                                                style=\"color:green;font-size: 20px; margin-left:18px;\"></i></a>
                                                    <a role=\"button\"
                                                       href=\"/admin/refuserpublication/concours/";
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p2"], "idConcours", [], "any", false, false, false, 342), "html", null, true);
            echo "\"><i
                                                                class=\"fas fa-times text-red fa-2x\"
                                                                style=\"color:red; font-size: 20px; margin-left:30px;\"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pub3"]) || array_key_exists("pub3", $context) ? $context["pub3"] : (function () { throw new RuntimeError('Variable "pub3" does not exist.', 350, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p3"]) {
            // line 351
            echo "                                    <tr>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">";
            // line 353
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p3"], "discription", [], "any", false, false, false, 353), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">";
            // line 356
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p3"], "nom", [], "any", false, false, false, 356), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">";
            // line 359
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p3"], "idConseiller", [], "any", false, false, false, 359), "html", null, true);
            echo "</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <div class=\"col-lg-12 d-flex align-items-center\">
                                                <div class=\"flex\">
                                                    <a role=\"button\"
                                                       href=\"/admin/accepterpublication/evenement/";
            // line 365
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p3"], "idEvenement", [], "any", false, false, false, 365), "html", null, true);
            echo "\"><i
                                                                class=\"fas fa-check text-green fa-2x\"
                                                                style=\"color:green;font-size: 20px; margin-left:18px;\"></i></a>
                                                    <a role=\"button\"
                                                       href=\"/admin/refuserpublication/evenement/";
            // line 369
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p3"], "idEvenement", [], "any", false, false, false, 369), "html", null, true);
            echo "\"><i
                                                                class=\"fas fa-times text-red fa-2x\"
                                                                style=\"color:red; font-size: 20px; margin-left:30px;\"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p3'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin-->

        </div>
    </div>
    <!-- // END Header Layout -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "administration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  719 => 377,  705 => 369,  698 => 365,  689 => 359,  683 => 356,  677 => 353,  673 => 351,  668 => 350,  654 => 342,  647 => 338,  638 => 332,  632 => 329,  626 => 326,  622 => 324,  617 => 323,  602 => 314,  595 => 310,  587 => 305,  581 => 302,  575 => 299,  571 => 297,  566 => 296,  550 => 286,  543 => 282,  534 => 276,  528 => 273,  522 => 270,  518 => 268,  514 => 267,  481 => 236,  461 => 230,  454 => 226,  450 => 225,  444 => 222,  440 => 221,  436 => 220,  432 => 219,  429 => 218,  412 => 217,  343 => 151,  334 => 145,  325 => 138,  297 => 123,  286 => 121,  282 => 120,  275 => 115,  264 => 113,  260 => 112,  240 => 95,  232 => 90,  220 => 81,  208 => 72,  194 => 61,  187 => 57,  172 => 45,  166 => 42,  163 => 41,  146 => 40,  143 => 39,  133 => 38,  91 => 5,  81 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bonjour {{app.user.prenom}} {% endblock %}
{% block js_page %}
    <script>

        function showModal(id) {
            model = \"#update\" + id;
            //\$('#update .score').html(id);
            \$(model).modal('show')

        }

        function getUtilisateur(index) {
            var id = index - 1;
            //alert(id);
            showModal(id);
        }

        \$(document).ready(function () {
            \$(\"input[type=checkbox]\").click(function () {
                \$.ajax({
                    type: \"POST\",
                    url: \"\",
                    data: {
                        value: \$(this).prop(\"checked\") ? 1 : 0
                    },
                    success: function (data) {
                        \$('#echo2').html(data);
                    }
                });
            });


        });
    </script>
{% endblock %}
{% block body %}

    {% for u in user %}
        <div class=\"modal fade custom-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"update\" aria-hidden=\"true\"
             id=\"update{{ loop.index-1 }}\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <form action=\"admin/modifierconseiller/{{ u.idUser }}\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Modifier le conseiller</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span
                                        aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                        </div>

                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <label for=\"prenom\">Prénom:</label>
                                        <input name=\"prenom\" type=\"text\" class=\"form-control\" value=\"{{ u.prenom }}\">
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <label for=\"nom\">Nom:</label>
                                        <input name=\"nom\" type=\"text\" class=\"form-control\" value=\"{{ u.nom }}\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <label for=\"cne\">PPR:</label>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <label for=\"cne\">CIN:</label>
                                        <input name=\"cin\" type=\"text\" class=\"form-control\" value=\"{{ u.cin }}\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <label for=\"email\">Email:</label>
                                        <input name=\"email\" type=\"email\" class=\"form-control\"
                                               value=\"{{ u.email }}\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                        <br><label for=\"password\">Mot de passe:</label>
                                        <input name=\"password\" type=\"password\" class=\"form-control\"
                                               value=\"{{ u.password }}\">
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <br><label for=\"password\">Confirmer le Mot de passe:</label>
                                        <input name=\"confirm_password\" type=\"password\" class=\"form-control\"
                                               value=\"{{ u.password }}\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"row\">
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
                            <button type=\"submit\" class=\"btn btn-lg btn-accent\">Modifier</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    {% endfor %}
    <!-- Header Layout -->
    <div class=\"mdk-header-layout js-mdk-header-layout\">

        <!-- Header Layout Content -->
        <div class=\"mdk-header-layout__content page-content \">
            <div class=\"bg-gradient-primary border-bottom-white py-32pt\">
                <div class=\"container d-flex flex-column flex-md-row align-items-center text-center text-md-left\">
                    <img src=\"{{ asset('assets/images/illustration/teacher/128/white.svg') }}\" width=\"104\"
                         class=\"mr-md-32pt mb-32pt mb-md-0\" alt=\"student\">
                    <div class=\"flex mb-32pt mb-md-0\">
                        <h2 class=\"text-white mb-0\" id=\"text\"></h2>
                        <script type=\"text/javascript\">
                            var i = 0, text;
                            text = \"Bienvenue {{ app.user }}\";

                            function typing() {
                                if (i < text.length) {
                                    document.getElementById(\"text\").innerHTML += text.charAt(i);
                                    i++;
                                    setTimeout(typing, 80);
                                }
                            }

                            typing();
                        </script>
                        <p class=\"lead text-white-50 d-flex align-items-center\">Administrateur</p>
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

                                <li class=\"nav-item active\">
                                    <a href=\"/eleve\" class=\"nav-link\">Espace Administrateur</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!--Debut-->
            <div class=\"container page__container page-section\">

                <div class=\"page-headline text-center\">
                    <h2>Gestion des conseillers</h2>
                </div>
                <div class=\"col-xl-12 col-lg-24\">
                    <div class=\"card card-stats mb-4 mb-xl-0\">
                    <span class=\"pull-right\" style=\"float:right; margin-top:30px;margin-left:850px;\">
                    <button class=\"btn btn-primary btn-sm\" data-toggle=\"modal\"
                            data-target=\"#singup\"><i class=\"fa fa-plus\"
                                                     aria-hidden=\"true\"></i> Ajouter un conseiller</button></span>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"card-body\">

                                        <div class=\"table-responsive\">
                                            <table class=\"table table-bordered table-hover display\">
                                                <thead>
                                                <tr>
                                                    <th style=\"padding:13px;\">Prénom</th>
                                                    <th style=\"padding:13px;\">Nom</th>
                                                    <th style=\"padding:13px;\">Email</th>
                                                    <th style=\"padding:13px;\">CIN</th>
                                                    <th style=\"padding:13px;\">Actions</th>
                                                </tr>
                                                </thead>
                                                {% for u in user %}
                                                    <tr>
                                                        <td style=\"padding:13px;\">{{ u.prenom }}</td>
                                                        <td style=\"padding:13px;\">{{ u.nom }}</td>
                                                        <td style=\"padding:13px;\">{{ u.email }}</td>
                                                        <td style=\"padding:13px;\">{{ u.cin }}</td>
                                                        <td style=\"padding:13px; text-align:center;\">
                                                            <a role=\"button\" id=\"modifier\" data-toggle=\"modal\"
                                                               data-target=\"\" onclick=\"getUtilisateur({{ loop.index }})\"
                                                               value=\"{{ loop.index }}\"><i
                                                                        class=\"fas fa-edit text-green fa-2x\"
                                                                        style=\"font-size: 20px; \"></i></a>
                                                            <a role=\"button\" id=\"supprimer\"
                                                               href=\"/admin/supprimerconseiller/{{ u.idUser }}\"><i
                                                                        class=\"fas fa-trash text-red fa-2x\"
                                                                        style=\"font-size: 20px;\"></i></a>
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"container page__container page-section\">

                <div class=\"page-headline text-center\">
                    <h2>Gestion des publications</h2>
                </div>
                <div class=\"card card-body mb-32pt\">
                    <div class=\"row\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-bordered table-hover display\">
                                <thead>
                                <tr>
                                    <th style=\"width:600px;\">Publication</th>
                                    <th style=\"width:200px;\">Titre</th>
                                    <th style=\"width:90px;\">Conseiller</th>
                                    <th style=\"padding:13px;\">Approuver</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for p in pub %}
                                    <tr>
                                        <td style=\"width:600px;\">
                                            <p class=\"text-70\">{{ p.contenu }}</p>
                                        </td>
                                        <td style=\"width:200px;\">
                                            <p class=\"text-70\">{{ p.titre }}</p>
                                        </td>
                                        <td style=\"width:90px;\">
                                            <p class=\"text-70\">{{ p.idConseiller }}</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <div class=\"col-lg-12 d-flex align-items-center\">
                                                <div class=\"flex\">
                                                    <a role=\"button\"
                                                       href=\"/admin/accepterpublication/article/{{ p.idArticle }}\"><i
                                                                class=\"fas fa-check text-green fa-2x\"
                                                                style=\"color:green;font-size: 20px; margin-left:18px;\"></i></a>
                                                    <a role=\"button\"
                                                       href=\"/admin/refuserpublication/article/{{ p.idArticle }}\"><i
                                                                class=\"fas fa-times text-red fa-2x\"
                                                                style=\"color:red; font-size: 20px;margin-left:30px;\"></i></a>

                                                    <!--<label class=\"form-label mb-0\" for=\"approuver\">Oui</label>-->
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                                {% for p1 in pub1 %}
                                    <tr>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">{{ p1.discription }}</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">{{ p1.nom }}</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">{{ p1.idConseiller }}</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <div class=\"col-lg-12 d-flex align-items-center\">
                                                <div class=\"flex\">
                                                    <a role=\"button\" href=\"/admin/accepterpublication/es/{{ p1.idEs }}\"><i
                                                                class=\"fas fa-check text-green fa-2x\"
                                                                style=\"color:green;font-size: 20px;margin-left:18px;\"></i></a>
                                                    <a role=\"button\"
                                                       href=\"/admin/refuserpublication/es/{{ p1.idEs }}\"><i
                                                                class=\"fas fa-times text-red fa-2x\"
                                                                style=\"color:red; font-size: 20px; margin-left:30px;\"></i></a>
                                                    <!--<label class=\"form-label mb-0\" for=\"approuver1\">Oui</label>-->
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                                {% for p2 in pub2 %}
                                    <tr>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">{{ p2.discription }}</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">{{ p2.titre }}</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">{{ p2.idConseiller }}</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <div class=\"col-lg-12 d-flex align-items-center\">
                                                <div class=\"flex\">
                                                    <a role=\"button\"
                                                       href=\"/admin/accepterpublication/concours/{{ p2.idConcours }}\"><i
                                                                class=\"fas fa-check text-green fa-2x\"
                                                                style=\"color:green;font-size: 20px; margin-left:18px;\"></i></a>
                                                    <a role=\"button\"
                                                       href=\"/admin/refuserpublication/concours/{{ p2.idConcours }}\"><i
                                                                class=\"fas fa-times text-red fa-2x\"
                                                                style=\"color:red; font-size: 20px; margin-left:30px;\"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                                {% for p3 in pub3 %}
                                    <tr>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">{{ p3.discription }}</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">{{ p3.nom }}</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <p class=\"text-70\">{{ p3.idConseiller }}</p>
                                        </td>
                                        <td style=\"padding:13px;\">
                                            <div class=\"col-lg-12 d-flex align-items-center\">
                                                <div class=\"flex\">
                                                    <a role=\"button\"
                                                       href=\"/admin/accepterpublication/evenement/{{ p3.idEvenement }}\"><i
                                                                class=\"fas fa-check text-green fa-2x\"
                                                                style=\"color:green;font-size: 20px; margin-left:18px;\"></i></a>
                                                    <a role=\"button\"
                                                       href=\"/admin/refuserpublication/evenement/{{ p3.idEvenement }}\"><i
                                                                class=\"fas fa-times text-red fa-2x\"
                                                                style=\"color:red; font-size: 20px; margin-left:30px;\"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin-->

        </div>
    </div>
    <!-- // END Header Layout -->

{% endblock %}
", "administration/index.html.twig", "C:\\Users\\dell\\Desktop\\PFE\\inaway\\templates\\administration\\index.html.twig");
    }
}
