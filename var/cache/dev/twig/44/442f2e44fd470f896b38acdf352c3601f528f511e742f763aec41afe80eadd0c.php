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

/* article_contr/act.html.twig */
class __TwigTemplate_66d78553af80d13238a61eabc764f55985e73333f89c8cad1c3ab6b3e6c4a13a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'Categorie' => [$this, 'block_Categorie'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_contr/act.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_contr/act.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article_contr/act.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Fill Actualité";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_Categorie($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Categorie"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Categorie"));

        // line 6
        echo "    <style>

        .hide {
            display: none;
        }

        ::placeholder {
            font-size: 0.6em;
        }
    </style>
    <div class=\"col-lg-3\">
        <div class=\"all-category\">
            <h3 class=\"cat-heading\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i>CATEGORIE</h3>
            <!--<div class=\"form-control\"
                 { form_start(form) }}
                  { form_end(form) }}
            </div>-->
            <ul class=\"main-category\">
                <li><a href=\"#\">accessories</a></li>
                <li><a href=\"#\">Immobilier</a></li>
                <li><a href=\"#\">Véhicules</a></li>
                <li><a href=\"#\">Maison</a></li>
                <li><a href=\"#\">Habillement</a></li>
                <li><a href=\"#\">Informatique et Multimedia</a></li>
                <li><a href=\"#\">Loisirs</a></li>
            </ul>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "

<!--/ End Header -->
<!-- Slider Area -->
<section class=\"hero-slider\">
    <!-- Single Slider -->
    <div class=\"single-slider\">
        <div class=\"container\">
            <div class=\"row no-gutters\">
                <div class=\"col-lg-9 offset-lg-3 col-12\">
                    <div class=\"text-inner\">
                        <div class=\"row\">
                            <div class=\"col-lg-7 col-12\">
                                <div class=\"hero-text\">
                                    <h1><span>Your best place to trade </span>TabDeal</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->
<!-- Start Product Area -->
<div class=\"product-area section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-title\">
                    <h2>Article</h2>
                </div>
            </div>
        </div>
        <div class=\"tab-pane fade show active\" id=\"man\" role=\"tabpanel\">
            <div class=\"tab-single\">
                <div class=\"row\">
                    <script src=\"https://kit.fontawesome.com/b512623766.js\" crossorigin=\"anonymous\"></script>
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 77
            echo "                    <div class=\"col-xl-3 col-lg-4 col-md-4 col-12\">
                        <div class=\"single-product\">
                            <div class=\"product-img\">
                                <a href=\"product-details.html\">
                                    <img class=\"default-img\" src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["article"], "getImage", [], "any", false, false, false, 81)), "html", null, true);
            echo "\"  width=\"5\"  height=\"5\" alt=\"#\">
                                    <img class=\"hover-img\" src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["article"], "getImage", [], "any", false, false, false, 82)), "html", null, true);
            echo "\" width=\"5\"  height=\"5\" alt=\"#\">
                                </a>
                                <div class=\"button-head\">
                                    <div class=\"product-action\">

                                        <a class=\"like\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("postlike", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 87)]), "html", null, true);
            echo "\"   >

                                            ";
            // line 89
            if (twig_get_attribute($this->env, $this->source, $context["article"], "isLikedByUser", [0 => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), 1 => (isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 89, $this->source); })())], "method", false, false, false, 89)) {
                // line 90
                echo "                                                <i id=\"alike\" class=\"fa-solid fa-heart\"></i>
                                            <span>J'aime pas</span></a>
";
            } else {
                // line 93
                echo "
    <i id=\"alike\" class=\" ti-heart \"></i>
    <span>J'aime</span></a>

    ";
            }
            // line 98
            echo "
                                    </div>

                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3><a href=\"product-details.html\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getTitre", [], "any", false, false, false, 104), "html", null, true);
            echo "</a></h3>
                                <div class=\"product-price\">
                                    <span>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getEtat", [], "any", false, false, false, 106), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </div>
                    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
                </div>
            </div>
        </div>





    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        function onClickBtnLike(event){
          event.preventDefault();
         const url =this.href;
       // const icone =this.querySelector('i');
           const like=this.querySelector('i');
           const span=this.querySelector('span')

axios.get(url).then(function (response){
    console.log(response);
   /* if(icone.classList.contains('ti-heart')) {
        icone.classList.replace('ti-heart','fa-solid fa-heart');*/
   if(response.data.code==400){
        like.className='fa-solid fa-heart';
       span.innerText='j \\'aime pas';
   }

    if(response.data.code==200){
        like.className='ti-heart';
        span.innerText='j \\'aime '
    }







})

        }





         document.querySelectorAll(\"a.like\").forEach(function(link){

          link.addEventListener('click',onClickBtnLike)

          })


    </script>
        </div>
    </div>
</div>















";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article_contr/act.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 112,  233 => 106,  228 => 104,  220 => 98,  213 => 93,  208 => 90,  206 => 89,  201 => 87,  193 => 82,  189 => 81,  183 => 77,  179 => 76,  137 => 36,  127 => 35,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fill Actualité{% endblock %}

{% block Categorie %}
    <style>

        .hide {
            display: none;
        }

        ::placeholder {
            font-size: 0.6em;
        }
    </style>
    <div class=\"col-lg-3\">
        <div class=\"all-category\">
            <h3 class=\"cat-heading\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i>CATEGORIE</h3>
            <!--<div class=\"form-control\"
                 { form_start(form) }}
                  { form_end(form) }}
            </div>-->
            <ul class=\"main-category\">
                <li><a href=\"#\">accessories</a></li>
                <li><a href=\"#\">Immobilier</a></li>
                <li><a href=\"#\">Véhicules</a></li>
                <li><a href=\"#\">Maison</a></li>
                <li><a href=\"#\">Habillement</a></li>
                <li><a href=\"#\">Informatique et Multimedia</a></li>
                <li><a href=\"#\">Loisirs</a></li>
            </ul>
        </div>
    </div>
{% endblock %}
{% block body %}


<!--/ End Header -->
<!-- Slider Area -->
<section class=\"hero-slider\">
    <!-- Single Slider -->
    <div class=\"single-slider\">
        <div class=\"container\">
            <div class=\"row no-gutters\">
                <div class=\"col-lg-9 offset-lg-3 col-12\">
                    <div class=\"text-inner\">
                        <div class=\"row\">
                            <div class=\"col-lg-7 col-12\">
                                <div class=\"hero-text\">
                                    <h1><span>Your best place to trade </span>TabDeal</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Slider Area -->
<!-- Start Product Area -->
<div class=\"product-area section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-title\">
                    <h2>Article</h2>
                </div>
            </div>
        </div>
        <div class=\"tab-pane fade show active\" id=\"man\" role=\"tabpanel\">
            <div class=\"tab-single\">
                <div class=\"row\">
                    <script src=\"https://kit.fontawesome.com/b512623766.js\" crossorigin=\"anonymous\"></script>
                    {% for article in articles %}
                    <div class=\"col-xl-3 col-lg-4 col-md-4 col-12\">
                        <div class=\"single-product\">
                            <div class=\"product-img\">
                                <a href=\"product-details.html\">
                                    <img class=\"default-img\" src=\"{{ asset(article.getImage) }}\"  width=\"5\"  height=\"5\" alt=\"#\">
                                    <img class=\"hover-img\" src=\"{{ asset(article.getImage) }}\" width=\"5\"  height=\"5\" alt=\"#\">
                                </a>
                                <div class=\"button-head\">
                                    <div class=\"product-action\">

                                        <a class=\"like\" href=\"{{ path('postlike',{'id':article.getId()}) }}\"   >

                                            {% if article.isLikedByUser(user,likes) %}
                                                <i id=\"alike\" class=\"fa-solid fa-heart\"></i>
                                            <span>J'aime pas</span></a>
{% else %}

    <i id=\"alike\" class=\" ti-heart \"></i>
    <span>J'aime</span></a>

    {% endif %}

                                    </div>

                                </div>
                            </div>
                            <div class=\"product-content\">
                                <h3><a href=\"product-details.html\">{{ article.getTitre }}</a></h3>
                                <div class=\"product-price\">
                                    <span>{{ article.getEtat }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
{% endfor %}

                </div>
            </div>
        </div>





    <script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
    <script>
        function onClickBtnLike(event){
          event.preventDefault();
         const url =this.href;
       // const icone =this.querySelector('i');
           const like=this.querySelector('i');
           const span=this.querySelector('span')

axios.get(url).then(function (response){
    console.log(response);
   /* if(icone.classList.contains('ti-heart')) {
        icone.classList.replace('ti-heart','fa-solid fa-heart');*/
   if(response.data.code==400){
        like.className='fa-solid fa-heart';
       span.innerText='j \\'aime pas';
   }

    if(response.data.code==200){
        like.className='ti-heart';
        span.innerText='j \\'aime '
    }







})

        }





         document.querySelectorAll(\"a.like\").forEach(function(link){

          link.addEventListener('click',onClickBtnLike)

          })


    </script>
        </div>
    </div>
</div>















{% endblock %}", "article_contr/act.html.twig", "C:\\xampp\\symfony\\symfony-master\\3A7\\PiDev\\templates\\article_contr\\act.html.twig");
    }
}
