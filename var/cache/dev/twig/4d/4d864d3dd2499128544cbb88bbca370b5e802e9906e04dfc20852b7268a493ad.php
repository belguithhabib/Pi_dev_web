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

/* article_contr/pdf.html.twig */
class __TwigTemplate_d2c079116a0259eaa77e16e49f1973f19a2679a2cf91d792a9b2bfcdfa124971 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_contr/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article_contr/pdf.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Example 2</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\" media=\"all\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<header class=\"clearfix\">
    <div id=\"logo\">
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
    </div>
    <div id=\"company\">
        <h2 class=\"name\">TabDeal</h2>
        <div> All Rights Reserved.</div>
        <div>+216 44 19 44 60</div>
        <div><a href=\"mailto:company@example.com\">support@tabdeal.tn</a></div>
    </div>
    </div>
</header>
<main>
    <div id=\"details\" class=\"clearfix\">
        <div id=\"client\">
            <div class=\"to\">TabDeal Boost</div>
            <h2 class=\"name\">Habib Belguith</h2>
            <div class=\"address\">Tunis,Gazella</div>
            <div class=\"email\"><a href=\"mailto:john@example.com\">Habib@tabdeal.tn</a></div>
        </div>

    </div>
    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        <thead>
        <tr>
            <th class=\"no\">id_boost</th>
            <th class=\"desc\">Nom Article</th>
            <th class=\"unit\">Type Boost</th>
            <th class=\"qty\">Prix Boost</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boosts"]) || array_key_exists("boosts", $context) ? $context["boosts"] : (function () { throw new RuntimeError('Variable "boosts" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            // line 46
            echo "        <tr>
            <td class=\"no\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "idBoost", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
            <td class=\"desc\">Article_Nom</td>
            <td class=\"unit\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "typeBoost", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
            <td class=\"qty\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "prixBoost", [], "any", false, false, false, 50), "html", null, true);
            echo "DT</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>

    </table>
    <div id=\"thanks\">Merci</div>
    <div id=\"notices\">
        <div>NOTICE:</div>
        <div class=\"notice\">Les articles boostées ne sont pas forcement encore disponible</div>
    </div>
</main>
<footer>
    Ce PDF est crée seulement pour les administrateurs
</footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article_contr/pdf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  167 => 53,  158 => 50,  154 => 49,  149 => 47,  146 => 46,  142 => 45,  109 => 15,  105 => 13,  95 => 12,  82 => 8,  72 => 7,  61 => 66,  59 => 12,  55 => 10,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Example 2</title>
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\" media=\"all\" />
    {% endblock %}
</head>
<body>
{% block body %}
<header class=\"clearfix\">
    <div id=\"logo\">
        <img src=\"{{ asset ('images/logo.png') }}\">
    </div>
    <div id=\"company\">
        <h2 class=\"name\">TabDeal</h2>
        <div> All Rights Reserved.</div>
        <div>+216 44 19 44 60</div>
        <div><a href=\"mailto:company@example.com\">support@tabdeal.tn</a></div>
    </div>
    </div>
</header>
<main>
    <div id=\"details\" class=\"clearfix\">
        <div id=\"client\">
            <div class=\"to\">TabDeal Boost</div>
            <h2 class=\"name\">Habib Belguith</h2>
            <div class=\"address\">Tunis,Gazella</div>
            <div class=\"email\"><a href=\"mailto:john@example.com\">Habib@tabdeal.tn</a></div>
        </div>

    </div>
    <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
        <thead>
        <tr>
            <th class=\"no\">id_boost</th>
            <th class=\"desc\">Nom Article</th>
            <th class=\"unit\">Type Boost</th>
            <th class=\"qty\">Prix Boost</th>
        </tr>
        </thead>
        <tbody>
        {% for b in boosts  %}
        <tr>
            <td class=\"no\">{{ b.idBoost }}</td>
            <td class=\"desc\">Article_Nom</td>
            <td class=\"unit\">{{ b.typeBoost }}</td>
            <td class=\"qty\">{{ b.prixBoost }}DT</td>
        </tr>
        {% endfor %}
        </tbody>

    </table>
    <div id=\"thanks\">Merci</div>
    <div id=\"notices\">
        <div>NOTICE:</div>
        <div class=\"notice\">Les articles boostées ne sont pas forcement encore disponible</div>
    </div>
</main>
<footer>
    Ce PDF est crée seulement pour les administrateurs
</footer>
{% endblock %}
</body>
</html>", "article_contr/pdf.html.twig", "C:\\xampp\\symfony\\symfony-master\\3A7\\PiDev\\templates\\article_contr\\pdf.html.twig");
    }
}
