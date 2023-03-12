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
class __TwigTemplate_9d8e10ba8633e132351c868cb4675423c6ac422aba56e57159c91175b8149418 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "tabla/tabla.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dashboard";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["proveedores"] ?? null));
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
    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
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
        return array (  162 => 61,  158 => 60,  151 => 55,  139 => 49,  135 => 48,  129 => 45,  125 => 44,  119 => 41,  115 => 40,  110 => 38,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  90 => 32,  86 => 31,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tabla/tabla.html.twig", "/var/www/project/templates/tabla/tabla.html.twig");
    }
}
