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

/* escape_game/show.html.twig */
class __TwigTemplate_7cbbbf3d66b9445c560d2e4e6cdcce2e655c57d8c408489a5b549cff33cf40d0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "escape_game/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "escape_game/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "escape_game/show.html.twig", 1);
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

        echo "EscapeGame";
        
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
        echo "    <h1>EscapeGame</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 20, $this->source); })()), "duration", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 20, $this->source); })()), "duration", [], "any", false, false, false, 20), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Date_time</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 24, $this->source); })()), "dateTime", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 24, $this->source); })()), "dateTime", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Number_min</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 28, $this->source); })()), "numberMin", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Number_max</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 32, $this->source); })()), "numberMax", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Public</th>
                <td>";
        // line 36
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 36, $this->source); })()), "public", [], "any", false, false, false, 36)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Excerpt</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 40, $this->source); })()), "excerpt", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category_name</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 44, $this->source); })()), "categoryName", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category_font</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 48, $this->source); })()), "categoryFont", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category_color</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 52, $this->source); })()), "categoryColor", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resume_text</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 56, $this->source); })()), "resumeText", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resume_image</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 60, $this->source); })()), "resumeImage", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Introduction_text</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 64, $this->source); })()), "introductionText", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Introduction_image</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 68, $this->source); })()), "introductionImage", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Instructions_text</th>
                <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 72, $this->source); })()), "instructionsText", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Instructions_image</th>
                <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 76, $this->source); })()), "instructionsImage", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>HappyEnd_text</th>
                <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 80, $this->source); })()), "happyEndText", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>HappyEnd_image</th>
                <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 84, $this->source); })()), "happyEndImage", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>GameOver_text</th>
                <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 88, $this->source); })()), "gameOverText", [], "any", false, false, false, 88), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>GameOver_image</th>
                <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 92, $this->source); })()), "gameOverImage", [], "any", false, false, false, 92), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escape_game_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escape_game_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["escape_game"]) || array_key_exists("escape_game", $context) ? $context["escape_game"] : (function () { throw new RuntimeError('Variable "escape_game" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 101
        echo twig_include($this->env, $context, "escape_game/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "escape_game/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 101,  249 => 99,  244 => 97,  236 => 92,  229 => 88,  222 => 84,  215 => 80,  208 => 76,  201 => 72,  194 => 68,  187 => 64,  180 => 60,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}EscapeGame{% endblock %}

{% block body %}
    <h1>EscapeGame</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ escape_game.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ escape_game.title }}</td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>{{ escape_game.duration ? escape_game.duration|date('H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Date_time</th>
                <td>{{ escape_game.dateTime ? escape_game.dateTime|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Number_min</th>
                <td>{{ escape_game.numberMin }}</td>
            </tr>
            <tr>
                <th>Number_max</th>
                <td>{{ escape_game.numberMax }}</td>
            </tr>
            <tr>
                <th>Public</th>
                <td>{{ escape_game.public ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Excerpt</th>
                <td>{{ escape_game.excerpt }}</td>
            </tr>
            <tr>
                <th>Category_name</th>
                <td>{{ escape_game.categoryName }}</td>
            </tr>
            <tr>
                <th>Category_font</th>
                <td>{{ escape_game.categoryFont }}</td>
            </tr>
            <tr>
                <th>Category_color</th>
                <td>{{ escape_game.categoryColor }}</td>
            </tr>
            <tr>
                <th>Resume_text</th>
                <td>{{ escape_game.resumeText }}</td>
            </tr>
            <tr>
                <th>Resume_image</th>
                <td>{{ escape_game.resumeImage }}</td>
            </tr>
            <tr>
                <th>Introduction_text</th>
                <td>{{ escape_game.introductionText }}</td>
            </tr>
            <tr>
                <th>Introduction_image</th>
                <td>{{ escape_game.introductionImage }}</td>
            </tr>
            <tr>
                <th>Instructions_text</th>
                <td>{{ escape_game.instructionsText }}</td>
            </tr>
            <tr>
                <th>Instructions_image</th>
                <td>{{ escape_game.instructionsImage }}</td>
            </tr>
            <tr>
                <th>HappyEnd_text</th>
                <td>{{ escape_game.happyEndText }}</td>
            </tr>
            <tr>
                <th>HappyEnd_image</th>
                <td>{{ escape_game.happyEndImage }}</td>
            </tr>
            <tr>
                <th>GameOver_text</th>
                <td>{{ escape_game.gameOverText }}</td>
            </tr>
            <tr>
                <th>GameOver_image</th>
                <td>{{ escape_game.gameOverImage }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('escape_game_index') }}\">back to list</a>

    <a href=\"{{ path('escape_game_edit', {'id': escape_game.id}) }}\">edit</a>

    {{ include('escape_game/_delete_form.html.twig') }}
{% endblock %}
", "escape_game/show.html.twig", "C:\\wamp64\\www\\EGMS\\templates\\escape_game\\show.html.twig");
    }
}
