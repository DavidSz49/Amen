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

/* tabla/tabla.html.twig */
class __TwigTemplate_b1763ae0628f71aca8c444697ba9281c7dedfbfdbeae2c1ce3456a2c5d7d2cae extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tabla/tabla.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tabla/tabla.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tabla/tabla.html.twig", 1);
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

        echo "Dashboard";
        
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
        echo "     <div class=\"bg-neutral-800 h-10 flex items-center justify-center text-xl uppercase text-white\">
        <div>Gestion de Proveedores</div>
        
    </div> 
    <div class=\"underline text-center w-full text-red-600\">
        <a href=\"/registro\" >Añade un nuevo proveedor haciendo click aqui</a>
    </div>
    <hr>
    <div class=\"cambios bg-green-600 text-center w-full\"></div>
    <div class=\"relative overflow-x-auto h-screen\">
        <table class=\"w-full text-sm text-left\">
            <thead class=\"text-xs text-black uppercase\">
                <tr class=\"[&>*]:px-6 [&>*]:py-3 border-b bg-neutral-300\">
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Fecha de creación</th>
                    <th>Ultima modificacion</th>
                    <th class=\"text-center\">Acciones</th>
                </tr>
            </thead>

            <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedores"]) || array_key_exists("proveedores", $context) ? $context["proveedores"] : (function () { throw new RuntimeError('Variable "proveedores" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 32
            echo "                <tr class=\"[&>*]:px-6 [&>*]:py-3 [&>*]:text-neutral-800 border-b\">
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Nombre", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Correo", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Telefono", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Tipo", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Estado", [], "any", false, false, false, 38), "html", null, true);
            echo "
                    </td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Creado", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proveedor"], "Editado", [], "any", false, false, false, 41), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                    <td class=\"flex\">

                        <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_editar", ["id" => twig_get_attribute($this->env, $this->source, $context["proveedor"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"bg-green-500 rounded-md mr-2.5 flex justify-center items-center h-10 w-20 hover:bg-green-600\" id=\"editbtn\">
                            <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/editar.png"), "html", null, true);
            echo "\" alt=\"editar\" width=\"20\" height=\"20\">
                        </a>

                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eliminar", ["id" => twig_get_attribute($this->env, $this->source, $context["proveedor"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"bg-red-500 rounded-md flex justify-center items-center h-10 w-20 hover:bg-red-600\" >
                            <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/borrar.png"), "html", null, true);
            echo "\" alt=\"borrar\" width=\"20\" height=\"20\">
                        </a>

                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tabla/tabla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 61,  194 => 60,  181 => 55,  169 => 49,  165 => 48,  159 => 45,  155 => 44,  149 => 41,  145 => 40,  140 => 38,  135 => 36,  131 => 35,  127 => 34,  123 => 33,  120 => 32,  116 => 31,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
     <div class=\"bg-neutral-800 h-10 flex items-center justify-center text-xl uppercase text-white\">
        <div>Gestion de Proveedores</div>
        
    </div> 
    <div class=\"underline text-center w-full text-red-600\">
        <a href=\"/registro\" >Añade un nuevo proveedor haciendo click aqui</a>
    </div>
    <hr>
    <div class=\"cambios bg-green-600 text-center w-full\"></div>
    <div class=\"relative overflow-x-auto h-screen\">
        <table class=\"w-full text-sm text-left\">
            <thead class=\"text-xs text-black uppercase\">
                <tr class=\"[&>*]:px-6 [&>*]:py-3 border-b bg-neutral-300\">
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Fecha de creación</th>
                    <th>Ultima modificacion</th>
                    <th class=\"text-center\">Acciones</th>
                </tr>
            </thead>

            <tbody>
            {% for proveedor in proveedores %}
                <tr class=\"[&>*]:px-6 [&>*]:py-3 [&>*]:text-neutral-800 border-b\">
                    <td>{{ proveedor.Nombre }}</td>
                    <td>{{ proveedor.Correo }}</td>
                    <td>{{ proveedor.Telefono }}</td>
                    <td>{{ proveedor.Tipo }}</td>
                    <td>
                        {{proveedor.Estado}}
                    </td>
                    <td>{{ proveedor.Creado | date('Y-m-d H:i:s')}}</td>
                    <td>{{ proveedor.Editado | date('Y-m-d H:i:s')}}</td>
                    <td class=\"flex\">

                        <a href=\"{{ path(\"app_editar\",{id:proveedor.id}) }}\" class=\"bg-green-500 rounded-md mr-2.5 flex justify-center items-center h-10 w-20 hover:bg-green-600\" id=\"editbtn\">
                            <img src=\"{{ asset('images/editar.png') }}\" alt=\"editar\" width=\"20\" height=\"20\">
                        </a>

                        <a href=\"{{ path(\"app_eliminar\",{id:proveedor.id}) }}\" class=\"bg-red-500 rounded-md flex justify-center items-center h-10 w-20 hover:bg-red-600\" >
                            <img src=\"{{ asset('images/borrar.png') }}\" alt=\"borrar\" width=\"20\" height=\"20\">
                        </a>

                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/main.js') }}\" type=\"text/javascript\"></script>
{% endblock %}
", "tabla/tabla.html.twig", "/var/www/project/templates/tabla/tabla.html.twig");
    }
}
