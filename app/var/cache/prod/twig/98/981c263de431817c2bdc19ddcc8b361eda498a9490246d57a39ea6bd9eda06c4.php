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

/* editar/editar.html.twig */
class __TwigTemplate_0b3bbe8edb7ee2abd86a2d63ad6442677991e61198b112bcad027984648030ff extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editar/editar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Editar";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulario"] ?? null), 'form_start');
        echo "
      <div class=\"bg-black/80 w-full h-screen sm:flex items-center justify-center\">
       
        <div class=\"flex flex-col mb-2 bg-blue-500 h-screen sm:w-[50%]  sm:rounded-3xl sm:h-fit sm:py-10 sm:shadow-2xl sm:px-5\">
            <span class=\"font-bold text-center mt-4 sm:mt-0\">Editar proveedor</span>
            <hr class=\"mt-4\">
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "Nombre", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "\">Nombre:</label>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "Nombre", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto"]]);
        echo "
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "Correo", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "\">Correo:</label>
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "Correo", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto"]]);
        echo "
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "Telefono", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\">Telefono:</label>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "Telefono", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto"]]);
        echo "
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "Tipo", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "\">Tipo:</label>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "Tipo", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto h-10"]]);
        echo "
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "Estado", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "\">Estado:</label>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "Estado", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto h-10"]]);
        echo "
            
            <div class=\"flex w-full items-center justify-center gap-2\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulario"] ?? null), "Guardar", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "bg-yellow-300 text-black font-bold rounded-lg w-2/4 mt-8 h-10 w-fit px-7"]]);
        echo "
                <button class=\"bg-red-400 font-bold rounded-lg mt-8 h-10 w-fit px-7\" id=\"cancbtn\">Cancelar</button>
            </div>
        </div>
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formulario"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "editar/editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  116 => 29,  110 => 26,  106 => 25,  101 => 23,  97 => 22,  92 => 20,  88 => 19,  83 => 17,  79 => 16,  74 => 14,  70 => 13,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editar/editar.html.twig", "/var/www/project/templates/editar/editar.html.twig");
    }
}
