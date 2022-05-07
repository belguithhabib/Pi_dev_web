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

/* boost_contr/creaBoost.html.twig */
class __TwigTemplate_0cbd74e5ead07fd6eac22e5afd17275eaf2e4609393ee0769973c930888d6ff0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boost_contr/creaBoost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "boost_contr/creaBoost.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "boost_contr/creaBoost.html.twig", 1);
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

        echo "ADD Boost";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
<!-- Start Checkout -->
<section class=\"shop checkout section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-12\">
                <div class=\"Boost Form\">
                    <h2>Boost</h2>
                    <p>Faites Attention dans le remplissage du formulaire</p>
                    <!-- Form -->
                    <form class=\"form\" method=\"post\" action=\"#\">
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"form-group\">
                                <label>Articles<span>*</span></label>
                                <select Id='articles' name='articles' >
                                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 22
            echo "                                    <OPTION name=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getTitre", [], "any", false, false, false, 22), "html", null, true);
            echo " value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "any", false, false, false, 22), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getTitre", [], "any", false, false, false, 22), "html", null, true);
            echo "
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                                </select>
                            </div>
                            </div>
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"form-group\">
                                <label>Type Boost<span>*</span></label>
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "typeBoost", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control p-0 border-0"]]);
        echo "
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "typeBoost", [], "any", false, false, false, 31), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"form-group\">
                                <label>Prix Boost<span>*</span></label>
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prix_boost", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control p-0 border-0"]]);
        echo "
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "prix_boost", [], "any", false, false, false, 38), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"form-group create-account\">
                                <input id=\"cbox\" type=\"checkbox\">
                                <label>Confirmer l'ajout du Bosst</label>
                            </div>
                        </div>
                        <div class=\"single-widget get-button\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'widget');
        echo "
                        <button class=\"btn\">";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 49, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
                        <!-- Button Widget -->
                        </div>
                        <!--/ End Button Widget -->

                    <!--/ End Form -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "boost_contr/creaBoost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 60,  165 => 49,  161 => 48,  148 => 38,  144 => 37,  135 => 31,  131 => 30,  123 => 24,  110 => 22,  106 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ADD Boost{% endblock %}

{% block body %}
{{ form_start(form) }}
<!-- Start Checkout -->
<section class=\"shop checkout section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-12\">
                <div class=\"Boost Form\">
                    <h2>Boost</h2>
                    <p>Faites Attention dans le remplissage du formulaire</p>
                    <!-- Form -->
                    <form class=\"form\" method=\"post\" action=\"#\">
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"form-group\">
                                <label>Articles<span>*</span></label>
                                <select Id='articles' name='articles' >
                                    {% for article in articles %}
                                    <OPTION name={{article.getTitre}} value='{{ article.getId }}'>{{ article.getTitre }}
                                        {% endfor %}
                                </select>
                            </div>
                            </div>
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"form-group\">
                                <label>Type Boost<span>*</span></label>
                                {{ form_widget(form.typeBoost,{'attr':{'class':'form-control p-0 border-0'}}) }}
                                {{ form_errors(form.typeBoost,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"form-group\">
                                <label>Prix Boost<span>*</span></label>
                                {{ form_widget(form.prix_boost,{'attr':{'class':'form-control p-0 border-0'}}) }}
                                {{ form_errors(form.prix_boost,{'attr':{'class':'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"form-group create-account\">
                                <input id=\"cbox\" type=\"checkbox\">
                                <label>Confirmer l'ajout du Bosst</label>
                            </div>
                        </div>
                        <div class=\"single-widget get-button\">
                        {{ form_widget(form) }}
                        <button class=\"btn\">{{ button_label|default('Ajouter') }}</button>
                        <!-- Button Widget -->
                        </div>
                        <!--/ End Button Widget -->

                    <!--/ End Form -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(form) }}

{% endblock %}


", "boost_contr/creaBoost.html.twig", "C:\\xampp\\symfony\\symfony-master\\3A7\\PiDev\\templates\\boost_contr\\creaBoost.html.twig");
    }
}
