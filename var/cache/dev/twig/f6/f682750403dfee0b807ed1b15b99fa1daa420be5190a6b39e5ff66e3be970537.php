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
class __TwigTemplate_c070cf7d2a47cc77506d87ca71d4091b793c56fdd040cde0940456b69e15af7b extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'Categorie' => [$this, 'block_Categorie'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 54
        echo "</head>

<body>
<!-- Preloader -->
<div class=\"preloader\">
    <div class=\"preloader-inner\">
        <div class=\"preloader-icon\">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- End Preloader -->
<!-- Header -->
<header class=\"header shop\">
    <!-- Topbar -->
    <div class=\"topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 col-md-12 col-12\">
                    <!-- Top Left -->
                    <div class=\"top-left\">
                        <ul class=\"list-main\">
                            <li><i class=\"ti-headphone-alt\"></i> +216 44 19 44 60</li>
                            <li><i class=\"ti-email\"></i> support@tabdeal.tn</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class=\"col-lg-7 col-md-12 col-12\">
                    <!-- Top Right -->
                    <div class=\"right-content\">
                        <ul class=\"list-main\">
                            <li><i class=\"ti-location-pin\"></i> Store location</li>
                            <li><i class=\"ti-alarm-clock\"></i> <a href=\"#\">Daily deal</a></li>
                            <li><i class=\"ti-user\"></i> <a href=\"#\">My account</a></li>
                            <li><i class=\"ti-power-off\"></i><a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login.html#"), "html", null, true);
        echo "\">Login</a></li>
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class=\"middle-inner\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-2 col-12\">
                    <!-- Logo -->
                    <div class=\"logo\">
                        <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class=\"search-top\">
                        <div class=\"top-search\"><a href=\"#0\" ><i class=\"ti-search\"></i></a></div>
                        <!-- Search Form -->
                        <div class=\"search-top\">

                                <input type=\"text\" placeholder=\"Search here...\" id=\"search-input\" name=\"search\">
                                <button value=\"search\" ><i class=\"ti-search\"></i></button>

                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class=\"mobile-nav\"></div>
                </div>
                <div class=\"col-lg-8 col-md-7 col-12\">
                    <div class=\"search-bar-top\">
                        <div class=\"search-bar\">
                            <select>

                                <option selected=\"selected\">Lieu</option>
                                <option>Ariana</option>
                                <option>Beja</option>
                                <option>Binzert</option>
                                <option>Gabes</option>
                                <option>Gafsa</option>
                                <option>Jendouba</option>
                            </select>

                                <input name=\"search\" id=\"search-input\" placeholder=\"Search Products Here.....\" type=\"search\">
                                <button class=\"btnn\" id=\"search\"><i class=\"ti-search\"></i></button>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-12\">
                    <div class=\"right-bar\">
                        <!-- Search Form -->
                        <div class=\"sinlge-bar\">
                            <a href=\"#\" class=\"single-icon\"><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i></a>
                        </div>
                        <div class=\"sinlge-bar\">
                            <a href=\"#\" class=\"single-icon\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i></a>
                        </div>
                        <div class=\"sinlge-bar shopping\">
                            <a href=\"#\" class=\"single-icon\"><i class=\"ti-bag\"></i> <span class=\"total-count\">2</span></a>
                            <!-- Shopping Item -->
                            <div class=\"shopping-item\">
                                <div class=\"dropdown-cart-header\">
                                    <span>2 Items</span>
                                    <a href=\"#\">View Cart</a>
                                </div>
                                <ul class=\"shopping-list\">
                                    <li>
                                        <a href=\"#\" class=\"remove\" title=\"Remove this item\"><i class=\"fa fa-remove\"></i></a>
                                        <a class=\"cart-img\" href=\"#\"><img src=\"https://via.placeholder.com/70x70\" alt=\"#\"></a>
                                        <h4><a href=\"#\">Woman Ring</a></h4>
                                        <p class=\"quantity\">1x - <span class=\"amount\">\$99.00</span></p>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"remove\" title=\"Remove this item\"><i class=\"fa fa-remove\"></i></a>
                                        <a class=\"cart-img\" href=\"#\"><img src=\"https://via.placeholder.com/70x70\" alt=\"#\"></a>
                                        <h4><a href=\"#\">Woman Necklace</a></h4>
                                        <p class=\"quantity\">1x - <span class=\"amount\">\$35.00</span></p>
                                    </li>
                                </ul>
                                <div class=\"bottom\">
                                    <div class=\"total\">
                                        <span>Total</span>
                                        <span class=\"total-amount\">\$134.00</span>
                                    </div>
                                    <a href=\"checkout.html\" class=\"btn animate\">Checkout</a>
                                </div>
                            </div>
                            <!--/ End Shopping Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class=\"header-inner\">
        <div class=\"container\">
            <div class=\"cat-nav-head\">
                <div class=\"row\">
                    ";
        // line 194
        $this->displayBlock('Categorie', $context, $blocks);
        // line 197
        echo "                    <div class=\"col-lg-9 col-12\">
                        <div class=\"menu-area\">
                            <!-- Main Menu -->
                            <nav class=\"navbar navbar-expand-lg\">
                                <div class=\"navbar-collapse\">
                                    <div class=\"nav-inner\">
                                        <ul class=\"nav main-menu menu navbar-nav\">
                                            <li class=\"active\"><a href=\"#\">Acceuil</a></li>
                                            <li><a href=\"#\">Produit</a></li>
                                            <li><a href=\"#\">Forum</a></li>
                                            <li><a href=\"#\">Echange<i class=\"ti-angle-down\"></i><span class=\"new\">Nouveau</span></a>
                                                <ul class=\"dropdown\">
                                                    <li><a href=\"cart.html\">Cart</a></li>
                                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\">Pages</a></li>
                                            <li><a href=\"#\">Blog<i class=\"ti-angle-down\"></i></a>
                                                <ul class=\"dropdown\">
                                                    <li><a href=\"blog-single-sidebar.html\">Blog Single Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"contact.html\">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
";
        // line 233
        $this->displayBlock('body', $context, $blocks);
        // line 236
        echo "                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"ti-close\" aria-hidden=\"true\"></span></button>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"row no-gutters\">
                                        <div class=\"col-lg-6 offset-lg-3 col-12\">
                                            <h4 style=\"margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;\">TabDeal</h4>
                                            <h3 style=\"font-size:30px;color:#333;\">Currently You are using free lite Version of Eshop.</h3>
                                            <p style=\"display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;\">Please, purchase full version of the template to get all pages, features and commercial license</p>
                                            <div class=\"button\" style=\"margin-top:30px;\">
                                                <a href=\"https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/\" target=\"_blank\" class=\"btn\" style=\"color:#fff;\">Buy Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                    <!-- Start Footer Area -->
                    <footer class=\"footer\">
                        <!-- Footer Top -->
                        <div class=\"footer-top section\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-lg-5 col-md-6 col-12\">
                                        <!-- Single Widget -->
                                        <div class=\"single-footer about\">
                                            <div class=\"logo\">
                                                <a href=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo2.png"), "html", null, true);
        echo "\" alt=\"#\"></a>
                                            </div>
                                            <p class=\"call\">Call us 24/7<span><a href=\"tel:123456789\">+216 44 19 44 60</a></span></p>
                                        </div>
                                        <!-- End Single Widget -->
                                    </div>
                                    <div class=\"col-lg-2 col-md-6 col-12\">
                                        <!-- Single Widget -->
                                        <div class=\"single-footer links\">
                                            <h4>Information</h4>
                                            <ul>
                                                <li><a href=\"#\">About Us</a></li>
                                                <li><a href=\"#\">Faq</a></li>
                                                <li><a href=\"#\">Terms & Conditions</a></li>
                                                <li><a href=\"#\">Contact Us</a></li>
                                                <li><a href=\"#\">Help</a></li>
                                            </ul>
                                        </div>
                                        <!-- End Single Widget -->
                                    </div>
                                    <div class=\"col-lg-2 col-md-6 col-12\">
                                        <!-- Single Widget -->
                                        <div class=\"single-footer links\">
                                            <h4>Customer Service</h4>
                                            <ul>
                                                <li><a href=\"#\">Payment Methods</a></li>
                                                <li><a href=\"#\">Money-back</a></li>
                                                <li><a href=\"#\">Returns</a></li>
                                                <li><a href=\"#\">Shipping</a></li>
                                                <li><a href=\"#\">Privacy Policy</a></li>
                                            </ul>
                                        </div>
                                        <!-- End Single Widget -->
                                    </div>
                                    <div class=\"col-lg-3 col-md-6 col-12\">
                                        <!-- Single Widget -->
                                        <div class=\"single-footer social\">
                                            <h4>Get In Tuch</h4>
                                            <!-- Single Widget -->
                                            <div class=\"contact\">
                                                <ul>
                                                    <li>Tunis-Ghazella Esprit</li>
                                                    <li>contact@TabDeal.tn</li>
                                                    <li>+216 44 19 44 60</li>
                                                </ul>
                                            </div>
                                            <!-- End Single Widget -->
                                            <ul>
                                                <li><a href=\"#\"><i class=\"ti-facebook\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"ti-twitter\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"ti-flickr\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"ti-instagram\"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- End Single Widget -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Footer Top -->
                        <div class=\"copyright\">
                            <div class=\"container\">
                                <div class=\"inner\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-6 col-12\">
                                            <div class=\"left\">
                                                <p>Copyright © 2020 <a href=\"http://www.wpthemesgrid.com\" target=\"_blank\">TabDeal</a>  All Rights Reserved.</p>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-12\">
                                            <div class=\"right\">
                                                <img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/payments.png"), "html", null, true);
        echo "\" alt=\"#\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
";
        // line 348
        $this->displayBlock('javascripts', $context, $blocks);
        // line 386
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "TabDeal";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <!-- Meta Tag -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css\"
              integrity=\"sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7\" crossorigin=\"anonymous\"/>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name='copyright' content=''>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <!-- Title Tag  -->
        <title>Fill d'actualité</title>
        <!-- Favicon -->
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\">
        <!-- Web Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">

        <!-- StyleSheet -->

        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <!-- Magnific Popup -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
        <!-- Fancybox -->
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.fancybox.min.css"), "html", null, true);
        echo "\">
        <!-- Themify Icons -->
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\">
        <!-- Nice Select CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/niceselect.css"), "html", null, true);
        echo "\">
        <!-- Animate CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
        <!-- Flex Slider CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flex-slider.min.css"), "html", null, true);
        echo "\">
        <!-- Owl Carousel -->
        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl-carousel.css"), "html", null, true);
        echo "\">
        <!-- Slicknav -->
        <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.min.css"), "html", null, true);
        echo "\">
        <!-- Eshop StyleSheet -->
        <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\">




    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 194
    public function block_Categorie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Categorie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Categorie"));

        // line 195
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 233
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 234
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 348
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 349
        echo "    <!-- Jquery -->
    <script defer src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://use.fontawesome.com/releases/v5.15.4/js/solid.js"), "html", null, true);
        echo "\"
            integrity=\"sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc\" crossorigin=\"anonymous\"></script>
    <script defer src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"), "html", null, true);
        echo "\"
            integrity=\"sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Popper JS -->
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap JS -->
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Color JS -->
    <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/colors.js"), "html", null, true);
        echo "\"></script>
    <!-- Slicknav JS -->
    <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slicknav.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Owl Carousel JS -->
    <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
    <!-- Magnific Popup JS -->
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/magnific-popup.js"), "html", null, true);
        echo "\"></script>
    <!-- Waypoints JS -->
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Countdown JS -->
    <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/finalcountdown.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Nice Select JS -->
    <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nicesellect.js"), "html", null, true);
        echo "\"></script>
    <!-- Flex Slider JS -->
    <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/flex-slider.js"), "html", null, true);
        echo "\"></script>
    <!-- ScrollUp JS -->
    <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollup.js"), "html", null, true);
        echo "\"></script>
    <!-- Onepage Nav JS -->
    <script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/onepage-nav.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Easing JS -->
    <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
    <!-- Active JS -->
    <script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/active.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  657 => 384,  652 => 382,  647 => 380,  642 => 378,  637 => 376,  632 => 374,  627 => 372,  622 => 370,  617 => 368,  612 => 366,  607 => 364,  602 => 362,  597 => 360,  592 => 358,  587 => 356,  583 => 355,  579 => 354,  574 => 352,  569 => 350,  566 => 349,  556 => 348,  545 => 234,  535 => 233,  524 => 195,  514 => 194,  498 => 48,  494 => 47,  490 => 46,  485 => 44,  480 => 42,  475 => 40,  470 => 38,  465 => 36,  460 => 34,  455 => 32,  450 => 30,  445 => 28,  440 => 26,  430 => 19,  416 => 7,  406 => 6,  387 => 5,  376 => 386,  374 => 348,  363 => 340,  287 => 269,  252 => 236,  250 => 233,  212 => 197,  210 => 194,  116 => 105,  98 => 90,  60 => 54,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}TabDeal{% endblock %}</title>
    {% block stylesheets %}
        <!-- Meta Tag -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css\"
              integrity=\"sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7\" crossorigin=\"anonymous\"/>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name='copyright' content=''>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <!-- Title Tag  -->
        <title>Fill d'actualité</title>
        <!-- Favicon -->
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset ('images/favicon.png') }}\">
        <!-- Web Font -->
        <link href=\"https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap\" rel=\"stylesheet\">

        <!-- StyleSheet -->

        <!-- Bootstrap -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/bootstrap.css') }}\">
        <!-- Magnific Popup -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/magnific-popup.min.css') }}\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/font-awesome.css') }}\">
        <!-- Fancybox -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/jquery.fancybox.min.css') }}\">
        <!-- Themify Icons -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/themify-icons.css') }}\">
        <!-- Nice Select CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/niceselect.css') }}\">
        <!-- Animate CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/animate.css') }}\">
        <!-- Flex Slider CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/flex-slider.min.css') }}\">
        <!-- Owl Carousel -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/owl-carousel.css') }}\">
        <!-- Slicknav -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/slicknav.min.css') }}\">
        <!-- Eshop StyleSheet -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('css/responsive.css') }}\">




    {% endblock %}
</head>

<body>
<!-- Preloader -->
<div class=\"preloader\">
    <div class=\"preloader-inner\">
        <div class=\"preloader-icon\">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- End Preloader -->
<!-- Header -->
<header class=\"header shop\">
    <!-- Topbar -->
    <div class=\"topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 col-md-12 col-12\">
                    <!-- Top Left -->
                    <div class=\"top-left\">
                        <ul class=\"list-main\">
                            <li><i class=\"ti-headphone-alt\"></i> +216 44 19 44 60</li>
                            <li><i class=\"ti-email\"></i> support@tabdeal.tn</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class=\"col-lg-7 col-md-12 col-12\">
                    <!-- Top Right -->
                    <div class=\"right-content\">
                        <ul class=\"list-main\">
                            <li><i class=\"ti-location-pin\"></i> Store location</li>
                            <li><i class=\"ti-alarm-clock\"></i> <a href=\"#\">Daily deal</a></li>
                            <li><i class=\"ti-user\"></i> <a href=\"#\">My account</a></li>
                            <li><i class=\"ti-power-off\"></i><a href=\"{{ asset ('login.html#') }}\">Login</a></li>
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class=\"middle-inner\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-2 col-12\">
                    <!-- Logo -->
                    <div class=\"logo\">
                        <a href=\"{{ asset ('index.html') }}\"><img src=\"{{ asset ('images/logo.png') }}\" alt=\"logo\"></a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class=\"search-top\">
                        <div class=\"top-search\"><a href=\"#0\" ><i class=\"ti-search\"></i></a></div>
                        <!-- Search Form -->
                        <div class=\"search-top\">

                                <input type=\"text\" placeholder=\"Search here...\" id=\"search-input\" name=\"search\">
                                <button value=\"search\" ><i class=\"ti-search\"></i></button>

                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class=\"mobile-nav\"></div>
                </div>
                <div class=\"col-lg-8 col-md-7 col-12\">
                    <div class=\"search-bar-top\">
                        <div class=\"search-bar\">
                            <select>

                                <option selected=\"selected\">Lieu</option>
                                <option>Ariana</option>
                                <option>Beja</option>
                                <option>Binzert</option>
                                <option>Gabes</option>
                                <option>Gafsa</option>
                                <option>Jendouba</option>
                            </select>

                                <input name=\"search\" id=\"search-input\" placeholder=\"Search Products Here.....\" type=\"search\">
                                <button class=\"btnn\" id=\"search\"><i class=\"ti-search\"></i></button>

                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-12\">
                    <div class=\"right-bar\">
                        <!-- Search Form -->
                        <div class=\"sinlge-bar\">
                            <a href=\"#\" class=\"single-icon\"><i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i></a>
                        </div>
                        <div class=\"sinlge-bar\">
                            <a href=\"#\" class=\"single-icon\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i></a>
                        </div>
                        <div class=\"sinlge-bar shopping\">
                            <a href=\"#\" class=\"single-icon\"><i class=\"ti-bag\"></i> <span class=\"total-count\">2</span></a>
                            <!-- Shopping Item -->
                            <div class=\"shopping-item\">
                                <div class=\"dropdown-cart-header\">
                                    <span>2 Items</span>
                                    <a href=\"#\">View Cart</a>
                                </div>
                                <ul class=\"shopping-list\">
                                    <li>
                                        <a href=\"#\" class=\"remove\" title=\"Remove this item\"><i class=\"fa fa-remove\"></i></a>
                                        <a class=\"cart-img\" href=\"#\"><img src=\"https://via.placeholder.com/70x70\" alt=\"#\"></a>
                                        <h4><a href=\"#\">Woman Ring</a></h4>
                                        <p class=\"quantity\">1x - <span class=\"amount\">\$99.00</span></p>
                                    </li>
                                    <li>
                                        <a href=\"#\" class=\"remove\" title=\"Remove this item\"><i class=\"fa fa-remove\"></i></a>
                                        <a class=\"cart-img\" href=\"#\"><img src=\"https://via.placeholder.com/70x70\" alt=\"#\"></a>
                                        <h4><a href=\"#\">Woman Necklace</a></h4>
                                        <p class=\"quantity\">1x - <span class=\"amount\">\$35.00</span></p>
                                    </li>
                                </ul>
                                <div class=\"bottom\">
                                    <div class=\"total\">
                                        <span>Total</span>
                                        <span class=\"total-amount\">\$134.00</span>
                                    </div>
                                    <a href=\"checkout.html\" class=\"btn animate\">Checkout</a>
                                </div>
                            </div>
                            <!--/ End Shopping Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class=\"header-inner\">
        <div class=\"container\">
            <div class=\"cat-nav-head\">
                <div class=\"row\">
                    {% block Categorie %}

                    {% endblock %}
                    <div class=\"col-lg-9 col-12\">
                        <div class=\"menu-area\">
                            <!-- Main Menu -->
                            <nav class=\"navbar navbar-expand-lg\">
                                <div class=\"navbar-collapse\">
                                    <div class=\"nav-inner\">
                                        <ul class=\"nav main-menu menu navbar-nav\">
                                            <li class=\"active\"><a href=\"#\">Acceuil</a></li>
                                            <li><a href=\"#\">Produit</a></li>
                                            <li><a href=\"#\">Forum</a></li>
                                            <li><a href=\"#\">Echange<i class=\"ti-angle-down\"></i><span class=\"new\">Nouveau</span></a>
                                                <ul class=\"dropdown\">
                                                    <li><a href=\"cart.html\">Cart</a></li>
                                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\">Pages</a></li>
                                            <li><a href=\"#\">Blog<i class=\"ti-angle-down\"></i></a>
                                                <ul class=\"dropdown\">
                                                    <li><a href=\"blog-single-sidebar.html\">Blog Single Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"contact.html\">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
{% block body %}

{% endblock %}
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span class=\"ti-close\" aria-hidden=\"true\"></span></button>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"row no-gutters\">
                                        <div class=\"col-lg-6 offset-lg-3 col-12\">
                                            <h4 style=\"margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;\">TabDeal</h4>
                                            <h3 style=\"font-size:30px;color:#333;\">Currently You are using free lite Version of Eshop.</h3>
                                            <p style=\"display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;\">Please, purchase full version of the template to get all pages, features and commercial license</p>
                                            <div class=\"button\" style=\"margin-top:30px;\">
                                                <a href=\"https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/\" target=\"_blank\" class=\"btn\" style=\"color:#fff;\">Buy Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal end -->
                    <!-- Start Footer Area -->
                    <footer class=\"footer\">
                        <!-- Footer Top -->
                        <div class=\"footer-top section\">
                            <div class=\"container\">
                                <div class=\"row\">
                                    <div class=\"col-lg-5 col-md-6 col-12\">
                                        <!-- Single Widget -->
                                        <div class=\"single-footer about\">
                                            <div class=\"logo\">
                                                <a href=\"{{ asset ('index.html') }}\"><img src=\"{{ asset ('images/logo2.png') }}\" alt=\"#\"></a>
                                            </div>
                                            <p class=\"call\">Call us 24/7<span><a href=\"tel:123456789\">+216 44 19 44 60</a></span></p>
                                        </div>
                                        <!-- End Single Widget -->
                                    </div>
                                    <div class=\"col-lg-2 col-md-6 col-12\">
                                        <!-- Single Widget -->
                                        <div class=\"single-footer links\">
                                            <h4>Information</h4>
                                            <ul>
                                                <li><a href=\"#\">About Us</a></li>
                                                <li><a href=\"#\">Faq</a></li>
                                                <li><a href=\"#\">Terms & Conditions</a></li>
                                                <li><a href=\"#\">Contact Us</a></li>
                                                <li><a href=\"#\">Help</a></li>
                                            </ul>
                                        </div>
                                        <!-- End Single Widget -->
                                    </div>
                                    <div class=\"col-lg-2 col-md-6 col-12\">
                                        <!-- Single Widget -->
                                        <div class=\"single-footer links\">
                                            <h4>Customer Service</h4>
                                            <ul>
                                                <li><a href=\"#\">Payment Methods</a></li>
                                                <li><a href=\"#\">Money-back</a></li>
                                                <li><a href=\"#\">Returns</a></li>
                                                <li><a href=\"#\">Shipping</a></li>
                                                <li><a href=\"#\">Privacy Policy</a></li>
                                            </ul>
                                        </div>
                                        <!-- End Single Widget -->
                                    </div>
                                    <div class=\"col-lg-3 col-md-6 col-12\">
                                        <!-- Single Widget -->
                                        <div class=\"single-footer social\">
                                            <h4>Get In Tuch</h4>
                                            <!-- Single Widget -->
                                            <div class=\"contact\">
                                                <ul>
                                                    <li>Tunis-Ghazella Esprit</li>
                                                    <li>contact@TabDeal.tn</li>
                                                    <li>+216 44 19 44 60</li>
                                                </ul>
                                            </div>
                                            <!-- End Single Widget -->
                                            <ul>
                                                <li><a href=\"#\"><i class=\"ti-facebook\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"ti-twitter\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"ti-flickr\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"ti-instagram\"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- End Single Widget -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Footer Top -->
                        <div class=\"copyright\">
                            <div class=\"container\">
                                <div class=\"inner\">
                                    <div class=\"row\">
                                        <div class=\"col-lg-6 col-12\">
                                            <div class=\"left\">
                                                <p>Copyright © 2020 <a href=\"http://www.wpthemesgrid.com\" target=\"_blank\">TabDeal</a>  All Rights Reserved.</p>
                                            </div>
                                        </div>
                                        <div class=\"col-lg-6 col-12\">
                                            <div class=\"right\">
                                                <img src=\"{{ asset('images/payments.png') }}\" alt=\"#\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
{% block javascripts %}
    <!-- Jquery -->
    <script defer src=\"{{ asset ('https://use.fontawesome.com/releases/v5.15.4/js/solid.js') }}\"
            integrity=\"sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc\" crossorigin=\"anonymous\"></script>
    <script defer src=\"{{ asset ('https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js') }}\"
            integrity=\"sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ asset ('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset ('js/jquery-migrate-3.0.0.js') }}\"></script>
    <script src=\"{{ asset ('js/jquery-ui.min.js') }}\"></script>
    <!-- Popper JS -->
    <script src=\"{{ asset ('js/popper.min.js') }}\"></script>
    <!-- Bootstrap JS -->
    <script src=\"{{ asset ('js/bootstrap.min.js') }}\"></script>
    <!-- Color JS -->
    <script src=\"{{ asset ('js/colors.js') }}\"></script>
    <!-- Slicknav JS -->
    <script src=\"{{ asset ('js/slicknav.min.js') }}\"></script>
    <!-- Owl Carousel JS -->
    <script src=\"{{ asset ('js/owl-carousel.js') }}\"></script>
    <!-- Magnific Popup JS -->
    <script src=\"{{ asset ('js/magnific-popup.js') }}\"></script>
    <!-- Waypoints JS -->
    <script src=\"{{ asset ('js/waypoints.min.js') }}\"></script>
    <!-- Countdown JS -->
    <script src=\"{{ asset ('js/finalcountdown.min.js') }}\"></script>
    <!-- Nice Select JS -->
    <script src=\"{{ asset ('js/nicesellect.js') }}\"></script>
    <!-- Flex Slider JS -->
    <script src=\"{{ asset ('js/flex-slider.js') }}\"></script>
    <!-- ScrollUp JS -->
    <script src=\"{{ asset ('js/scrollup.js') }}\"></script>
    <!-- Onepage Nav JS -->
    <script src=\"{{ asset ('js/onepage-nav.min.js') }}\"></script>
    <!-- Easing JS -->
    <script src=\"{{ asset ('js/easing.js') }}\"></script>
    <!-- Active JS -->
    <script src=\"{{ asset ('js/active.js') }}\"></script>
{% endblock %}
</body>
</html>", "base.html.twig", "C:\\xampp\\symfony\\symfony-master\\3A7\\PiDev\\templates\\base.html.twig");
    }
}
