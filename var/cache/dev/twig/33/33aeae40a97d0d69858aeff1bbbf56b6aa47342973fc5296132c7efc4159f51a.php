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

/* escape_game/index.html.twig */
class __TwigTemplate_9b5b34d1c2bb550a41930d8e7470dce23b62cfe4d502edb4bfd2570aeb2636a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "escape_game/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "escape_game/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "escape_game/index.html.twig", 1);
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

        echo "EscapeGame index";
        
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
        echo "    <h1>EscapeGame index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Duration</th>
                <th>Date_time</th>
                <th>Number_min</th>
                <th>Number_max</th>
                <th>Public</th>
                <th>Excerpt</th>
                <th>Category_name</th>
                <th>Category_font</th>
                <th>Category_color</th>
                <th>Resume_text</th>
                <th>Resume_image</th>
                <th>Introduction_text</th>
                <th>Introduction_image</th>
                <th>Instructions_text</th>
                <th>Instructions_image</th>
                <th>HappyEnd_text</th>
                <th>HappyEnd_image</th>
                <th>GameOver_text</th>
                <th>GameOver_image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["escape_games"]) || array_key_exists("escape_games", $context) ? $context["escape_games"] : (function () { throw new RuntimeError('Variable "escape_games" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["escape_game"]) {
            // line 37
            echo "            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["escape_game"], "duration", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "duration", [], "any", false, false, false, 40), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 41
            ((twig_get_attribute($this->env, $this->source, $context["escape_game"], "dateTime", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "dateTime", [], "any", false, false, false, 41), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "numberMin", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "numberMax", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo ((twig_get_attribute($this->env, $this->source, $context["escape_game"], "public", [], "any", false, false, false, 44)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "excerpt", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "categoryName", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "categoryFont", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "categoryColor", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "resumeText", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "resumeImage", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "introductionText", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "introductionImage", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "instructionsText", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "instructionsImage", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "happyEndText", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "happyEndImage", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "gameOverText", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["escape_game"], "gameOverImage", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escape_game_show", ["id" => twig_get_attribute($this->env, $this->source, $context["escape_game"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escape_game_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["escape_game"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "            <tr>
                <td colspan=\"22\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['escape_game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("escape_game_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "escape_game/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 72,  235 => 69,  226 => 65,  217 => 61,  213 => 60,  208 => 58,  204 => 57,  200 => 56,  196 => 55,  192 => 54,  188 => 53,  184 => 52,  180 => 51,  176 => 50,  172 => 49,  168 => 48,  164 => 47,  160 => 46,  156 => 45,  152 => 44,  148 => 43,  144 => 42,  140 => 41,  136 => 40,  132 => 39,  128 => 38,  125 => 37,  120 => 36,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}EscapeGame index{% endblock %}

{% block body %}
    <h1>EscapeGame index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Duration</th>
                <th>Date_time</th>
                <th>Number_min</th>
                <th>Number_max</th>
                <th>Public</th>
                <th>Excerpt</th>
                <th>Category_name</th>
                <th>Category_font</th>
                <th>Category_color</th>
                <th>Resume_text</th>
                <th>Resume_image</th>
                <th>Introduction_text</th>
                <th>Introduction_image</th>
                <th>Instructions_text</th>
                <th>Instructions_image</th>
                <th>HappyEnd_text</th>
                <th>HappyEnd_image</th>
                <th>GameOver_text</th>
                <th>GameOver_image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for escape_game in escape_games %}
            <tr>
                <td>{{ escape_game.id }}</td>
                <td>{{ escape_game.title }}</td>
                <td>{{ escape_game.duration ? escape_game.duration|date('H:i:s') : '' }}</td>
                <td>{{ escape_game.dateTime ? escape_game.dateTime|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ escape_game.numberMin }}</td>
                <td>{{ escape_game.numberMax }}</td>
                <td>{{ escape_game.public ? 'Yes' : 'No' }}</td>
                <td>{{ escape_game.excerpt }}</td>
                <td>{{ escape_game.categoryName }}</td>
                <td>{{ escape_game.categoryFont }}</td>
                <td>{{ escape_game.categoryColor }}</td>
                <td>{{ escape_game.resumeText }}</td>
                <td>{{ escape_game.resumeImage }}</td>
                <td>{{ escape_game.introductionText }}</td>
                <td>{{ escape_game.introductionImage }}</td>
                <td>{{ escape_game.instructionsText }}</td>
                <td>{{ escape_game.instructionsImage }}</td>
                <td>{{ escape_game.happyEndText }}</td>
                <td>{{ escape_game.happyEndImage }}</td>
                <td>{{ escape_game.gameOverText }}</td>
                <td>{{ escape_game.gameOverImage }}</td>
                <td>
                    <a href=\"{{ path('escape_game_show', {'id': escape_game.id}) }}\">show</a>
                    <a href=\"{{ path('escape_game_edit', {'id': escape_game.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"22\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('escape_game_new') }}\">Create new</a>
{% endblock %}
", "escape_game/index.html.twig", "C:\\wamp64\\www\\EGMS\\templates\\escape_game\\index.html.twig");
    }
}
