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

/* includes/taskList.html.twig */
class __TwigTemplate_9a9ce174c24ba250ab8915d64f25d74dfa2931f4d3a3c6cf292e8b838fb2ddfa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/taskList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/taskList.html.twig"));

        // line 1
        if ((0 <= twig_compare(twig_length_filter($this->env, (isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 1, $this->source); })())), 1))) {
            // line 2
            echo "<table>
        <tr>
            <th>Tareas</th>
            <th>Prioridad</th>
            <th>Horas presupuestadas</th>
            <th>Acciones</th>
        </tr>

        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 11
                echo "            <tr>
                <td>";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 12), "html", null, true);
                echo "</td>
                <td>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "priority", [], "any", false, false, false, 13), "html", null, true);
                echo "</td>
                <td>";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "hours", [], "any", false, false, false, 14), "html", null, true);
                echo "</td>
                <td class=\"buttons\">
                    <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 16)]), "html", null, true);
                echo "\" class=\"btn_ver\">Ver</a>

                   

                    ";
                // line 20
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["task"], "user", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20))))) {
                    // line 21
                    echo "                     <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                    echo "\" class=\"btn_editar\">Editar</a>

                    <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                    echo "\" class=\"btn_eliminar\">Eliminar</a>
                    ";
                }
                // line 25
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
    </table>

    ";
        } else {
            // line 32
            echo "    <strong>No hay tareas guardadas</strong>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/taskList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  103 => 28,  95 => 25,  90 => 23,  84 => 21,  82 => 20,  75 => 16,  70 => 14,  66 => 13,  62 => 12,  59 => 11,  55 => 10,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if tasks|length >= 1 %}
<table>
        <tr>
            <th>Tareas</th>
            <th>Prioridad</th>
            <th>Horas presupuestadas</th>
            <th>Acciones</th>
        </tr>

        {%  for task in tasks %}
            <tr>
                <td>{{ task.title }}</td>
                <td>{{ task.priority }}</td>
                <td>{{ task.hours }}</td>
                <td class=\"buttons\">
                    <a href=\"{{ path('task_detail', {'id':task.id}) }}\" class=\"btn_ver\">Ver</a>

                   

                    {% if app.user != null and task.user.id == app.user.id %}
                     <a href=\"{{ path('task_edit', {'id':task.id}) }}\" class=\"btn_editar\">Editar</a>

                    <a href=\"{{ path('task_delete', {'id':task.id}) }}\" class=\"btn_eliminar\">Eliminar</a>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}

    </table>

    {% else %}
    <strong>No hay tareas guardadas</strong>
{% endif %}", "includes/taskList.html.twig", "C:\\wamp64\\www\\proyecto-symfony\\templates\\includes\\taskList.html.twig");
    }
}
