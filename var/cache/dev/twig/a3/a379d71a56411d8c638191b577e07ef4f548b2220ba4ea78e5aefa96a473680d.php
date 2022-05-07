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

/* article_contr/backoffice.html.twig */
class __TwigTemplate_dfc420de98faa43dbbeae0cc28ffb7028bbc215d9926f980f1bd61b9becbd83c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_contr/backoffice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_contr/backoffice.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"keywords\"
          content=\"wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template\">
    <meta name=\"description\"
          content=\"Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <title>Boost_Admin</title>
    <link rel=\"canonical\" href=\"https://www.wrappixel.com/templates/ample-admin-lite/\" />
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"images/favicon.png\">
    <!-- Custom CSS -->
    <link href=\"plugins/bower_components/chartist/dist/chartist.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css\">
    <!-- Custom CSS -->
    <link href=\"css/style.min.css\" rel=\"stylesheet\">
</head>
<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class=\"preloader\">
    <div class=\"lds-ripple\">
        <div class=\"lds-pos\"></div>
        <div class=\"lds-pos\"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\" data-layout=\"vertical\" data-navbarbg=\"skin5\" data-sidebartype=\"full\"
     data-sidebar-position=\"absolute\" data-header-position=\"absolute\" data-boxed-layout=\"full\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\" data-navbarbg=\"skin5\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
            <div class=\"navbar-header\" data-logobg=\"skin6\">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class=\"navbar-brand\" href=\"dashboard.html\">
                    <!-- Logo icon -->
                    <b class=\"logo-icon\">
                        <!-- Dark Logo icon -->
                        <img src=\"plugins/images/logo-icon.png\" alt=\"homepage\" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class=\"logo-text\">
                            <!-- dark Logo text -->
                            <img src=\"plugins/images/logo-text.png\" alt=\"homepage\" />
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <a class=\"nav-toggler waves-effect waves-light text-dark d-block d-md-none\"
                   href=\"javascript:void(0)\"><i class=\"ti-menu ti-close\"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\" data-navbarbg=\"skin5\">

                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav ms-auto d-flex align-items-center\">

                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class=\" in\">
                        <form role=\"search\" class=\"app-search d-none d-md-block me-3\">

                            <input id=\"myInput2\" onkeyup=\"myFunction2()\" type=\"text\" placeholder=\"Search...\" class=\"form-control mt-0\">

                            <a href=\"\" class=\"active\">
                                <i class=\"fa fa-search\"></i>
                            </a>
                        </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li>
                        <a class=\"profile-pic\" href=\"#\">
                            <img src=\"plugins/images/users/varun.jpg\" alt=\"user-img\" width=\"36\"
                                 class=\"img-circle\"><span class=\"text-white font-medium\">Habib Belguith</span></a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <aside class=\"left-sidebar\" data-sidebarbg=\"skin6\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
            <!-- Sidebar navigation-->
            <nav class=\"sidebar-nav\">
                <ul id=\"sidebarnav\">
                    <!-- User Profile-->
                    <li class=\"sidebar-item pt-2\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"dashboard.html\"
                           aria-expanded=\"false\">
                            <i class=\"far fa-clock\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Dashboard</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"profile.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Profile</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"basic-table.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-table\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Boost</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"fontawesome.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-font\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Forum</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"map-google.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Message</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"blank.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-columns\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Echange</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"404.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Article</span>
                        </a>
                    </li>
                    
                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>

    <div class=\"page-wrapper\">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class=\"page-breadcrumb bg-white\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
                    <h4 class=\"page-title\">Dashboard Boost</h4>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
    <div class=\"container-fluid\">

            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12 col-sm-12\">
                    <div class=\"white-box\">
                        <div class=\"d-md-flex mb-3\">
                            <h3 class=\"box-title mb-0\">Boost</h3>
                        </div>
                        <div class=\"table-responsive\">
                            <table id=\"myTable\" class=\"table no-wrap \">
                                <thead>
                                <tr>
                                    <th class=\"border-top-0\">Id boost</th>
                                    <th class=\"border-top-0\">Article</th>
                                    <th class=\"border-top-0\">Type Boost</th>
                                    <th class=\"border-top-0\">Prix Boost</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boosts"]) || array_key_exists("boosts", $context) ? $context["boosts"] : (function () { throw new RuntimeError('Variable "boosts" does not exist.', 209, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 210
            echo "                                <tr>
                                    <td>";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "idBoost", [], "any", false, false, false, 211), "html", null, true);
            echo "</td>
                                    <td class=\"txt-oflo\">";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["b"], "getIdarticle", [], "any", false, false, false, 212), "getTitre", [], "any", false, false, false, 212), "html", null, true);
            echo " </td>
                                    <td>";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "typeBoost", [], "any", false, false, false, 213), "html", null, true);
            echo "</td>
                                    <td><span class=\"text-success\">";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "prixBoost", [], "any", false, false, false, 214), "html", null, true);
            echo "DT</span></td>
                                    <td>
                                        <a href=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifBoost", ["idBoost" => twig_get_attribute($this->env, $this->source, $context["b"], "idBoost", [], "any", false, false, false, 216)]), "html", null, true);
            echo "\">Modifier</a>
                                    </td>
                                    <td>
                                        <a class=\"btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white\"  href=\"";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_boost", ["idBoost" => twig_get_attribute($this->env, $this->source, $context["b"], "idBoost", [], "any", false, false, false, 219)]), "html", null, true);
            echo "\">Supprimer</a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>





        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class=\"footer text-center\"> TabDeal <a
                    href=\"https://www.wrappixel.com/\">TabDeal.tn</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src=\"plugins/bower_components/jquery/dist/jquery.min.js\"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"js/app-style-switcher.js\"></script>
<script src=\"plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js\"></script>
<!--Wave Effects -->
<script src=\"js/waves.js\"></script>
<!--Menu sidebar -->
<script src=\"js/sidebarmenu.js\"></script>
<!--Custom JavaScript -->
<script src=\"js/custom.js\"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src=\"plugins/bower_components/chartist/dist/chartist.min.js\"></script>
<script src=\"plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js\"></script>
<script src=\"js/pages/dashboards/dashboard1.js\"></script>
<script>
    function myFunction2() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById(\"myInput2\");
        filter = input.value.toUpperCase();
        table = document.getElementById(\"myTable\");
        tr = table.getElementsByTagName(\"tr\");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = \"\";
                } else {
                    tr[i].style.display = \"none\";
                }
            }
        }
    }
    function myFunction3() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById(\"myInput3\");
        filter = input.value.toUpperCase();
        table = document.getElementById(\"myTable\");
        tr = table.getElementsByTagName(\"tr\");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[3];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = \"\";
                } else {
                    tr[i].style.display = \"none\";
                }
            }
        }
    }

</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "article_contr/backoffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 223,  283 => 219,  277 => 216,  272 => 214,  268 => 213,  264 => 212,  260 => 211,  257 => 210,  253 => 209,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"keywords\"
          content=\"wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template\">
    <meta name=\"description\"
          content=\"Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <title>Boost_Admin</title>
    <link rel=\"canonical\" href=\"https://www.wrappixel.com/templates/ample-admin-lite/\" />
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"images/favicon.png\">
    <!-- Custom CSS -->
    <link href=\"plugins/bower_components/chartist/dist/chartist.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css\">
    <!-- Custom CSS -->
    <link href=\"css/style.min.css\" rel=\"stylesheet\">
</head>
<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class=\"preloader\">
    <div class=\"lds-ripple\">
        <div class=\"lds-pos\"></div>
        <div class=\"lds-pos\"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\" data-layout=\"vertical\" data-navbarbg=\"skin5\" data-sidebartype=\"full\"
     data-sidebar-position=\"absolute\" data-header-position=\"absolute\" data-boxed-layout=\"full\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\" data-navbarbg=\"skin5\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-dark\">
            <div class=\"navbar-header\" data-logobg=\"skin6\">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class=\"navbar-brand\" href=\"dashboard.html\">
                    <!-- Logo icon -->
                    <b class=\"logo-icon\">
                        <!-- Dark Logo icon -->
                        <img src=\"plugins/images/logo-icon.png\" alt=\"homepage\" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class=\"logo-text\">
                            <!-- dark Logo text -->
                            <img src=\"plugins/images/logo-text.png\" alt=\"homepage\" />
                        </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <a class=\"nav-toggler waves-effect waves-light text-dark d-block d-md-none\"
                   href=\"javascript:void(0)\"><i class=\"ti-menu ti-close\"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\" data-navbarbg=\"skin5\">

                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav ms-auto d-flex align-items-center\">

                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class=\" in\">
                        <form role=\"search\" class=\"app-search d-none d-md-block me-3\">

                            <input id=\"myInput2\" onkeyup=\"myFunction2()\" type=\"text\" placeholder=\"Search...\" class=\"form-control mt-0\">

                            <a href=\"\" class=\"active\">
                                <i class=\"fa fa-search\"></i>
                            </a>
                        </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li>
                        <a class=\"profile-pic\" href=\"#\">
                            <img src=\"plugins/images/users/varun.jpg\" alt=\"user-img\" width=\"36\"
                                 class=\"img-circle\"><span class=\"text-white font-medium\">Habib Belguith</span></a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <aside class=\"left-sidebar\" data-sidebarbg=\"skin6\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
            <!-- Sidebar navigation-->
            <nav class=\"sidebar-nav\">
                <ul id=\"sidebarnav\">
                    <!-- User Profile-->
                    <li class=\"sidebar-item pt-2\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"dashboard.html\"
                           aria-expanded=\"false\">
                            <i class=\"far fa-clock\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Dashboard</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"profile.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Profile</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"basic-table.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-table\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Boost</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"fontawesome.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-font\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Forum</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"map-google.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Message</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"blank.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-columns\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Echange</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"404.html\"
                           aria-expanded=\"false\">
                            <i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
                            <span class=\"hide-menu\">Article</span>
                        </a>
                    </li>
                    
                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>

    <div class=\"page-wrapper\">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class=\"page-breadcrumb bg-white\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12\">
                    <h4 class=\"page-title\">Dashboard Boost</h4>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
    <div class=\"container-fluid\">

            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12 col-sm-12\">
                    <div class=\"white-box\">
                        <div class=\"d-md-flex mb-3\">
                            <h3 class=\"box-title mb-0\">Boost</h3>
                        </div>
                        <div class=\"table-responsive\">
                            <table id=\"myTable\" class=\"table no-wrap \">
                                <thead>
                                <tr>
                                    <th class=\"border-top-0\">Id boost</th>
                                    <th class=\"border-top-0\">Article</th>
                                    <th class=\"border-top-0\">Type Boost</th>
                                    <th class=\"border-top-0\">Prix Boost</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for b in boosts  %}
                                <tr>
                                    <td>{{ b.idBoost }}</td>
                                    <td class=\"txt-oflo\">{{ b.getIdarticle.getTitre }} </td>
                                    <td>{{ b.typeBoost }}</td>
                                    <td><span class=\"text-success\">{{ b.prixBoost }}DT</span></td>
                                    <td>
                                        <a href=\"{{ path('modifBoost',{'idBoost':b.idBoost}) }}\">Modifier</a>
                                    </td>
                                    <td>
                                        <a class=\"btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white\"  href=\"{{ path('supp_boost',{'idBoost':b.idBoost}) }}\">Supprimer</a>
                                    </td>
                                </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>





        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class=\"footer text-center\"> TabDeal <a
                    href=\"https://www.wrappixel.com/\">TabDeal.tn</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src=\"plugins/bower_components/jquery/dist/jquery.min.js\"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src=\"bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"js/app-style-switcher.js\"></script>
<script src=\"plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js\"></script>
<!--Wave Effects -->
<script src=\"js/waves.js\"></script>
<!--Menu sidebar -->
<script src=\"js/sidebarmenu.js\"></script>
<!--Custom JavaScript -->
<script src=\"js/custom.js\"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src=\"plugins/bower_components/chartist/dist/chartist.min.js\"></script>
<script src=\"plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js\"></script>
<script src=\"js/pages/dashboards/dashboard1.js\"></script>
<script>
    function myFunction2() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById(\"myInput2\");
        filter = input.value.toUpperCase();
        table = document.getElementById(\"myTable\");
        tr = table.getElementsByTagName(\"tr\");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = \"\";
                } else {
                    tr[i].style.display = \"none\";
                }
            }
        }
    }
    function myFunction3() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById(\"myInput3\");
        filter = input.value.toUpperCase();
        table = document.getElementById(\"myTable\");
        tr = table.getElementsByTagName(\"tr\");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[3];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = \"\";
                } else {
                    tr[i].style.display = \"none\";
                }
            }
        }
    }

</script>
</body>
</html>", "article_contr/backoffice.html.twig", "C:\\xampp\\symfony\\symfony-master\\3A7\\PiDev\\templates\\article_contr\\backoffice.html.twig");
    }
}
