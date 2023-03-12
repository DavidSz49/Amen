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
class __TwigTemplate_79afe074807cc2647ab0c082430555aab83be5c7035df0306744f1f899e392b4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editar/editar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editar/editar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editar/editar.html.twig", 1);
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

        echo "Editar";
        
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
        echo "
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
      <div class=\"bg-black/80 w-full h-screen sm:flex items-center justify-center\">
       
        <div class=\"flex flex-col mb-2 bg-blue-500 h-screen sm:w-[50%]  sm:rounded-3xl sm:h-fit sm:py-10 sm:shadow-2xl sm:px-5\">
            <span class=\"font-bold text-center mt-4 sm:mt-0\">Editar proveedor</span>
            <hr class=\"mt-4\">
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 13, $this->source); })()), "Nombre", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "\">Nombre:</label>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 14, $this->source); })()), "Nombre", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto"]]);
        echo "
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 16, $this->source); })()), "Correo", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "\">Correo:</label>
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 17, $this->source); })()), "Correo", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto"]]);
        echo "
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 19, $this->source); })()), "Telefono", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\">Telefono:</label>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 20, $this->source); })()), "Telefono", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto"]]);
        echo "
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 22, $this->source); })()), "Tipo", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "\">Tipo:</label>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 23, $this->source); })()), "Tipo", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto h-10"]]);
        echo "
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 25, $this->source); })()), "Estado", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "\">Estado:</label>
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), "Estado", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto h-10"]]);
        echo "
            
            <div class=\"flex w-full items-center justify-center gap-2\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 29, $this->source); })()), "Guardar", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "bg-yellow-300 text-black font-bold rounded-lg w-2/4 mt-8 h-10 w-fit px-7"]]);
        echo "
                <button class=\"bg-red-400 font-bold rounded-lg mt-8 h-10 w-fit px-7\" id=\"cancbtn\">Cancelar</button>
            </div>
        </div>
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  153 => 33,  146 => 29,  140 => 26,  136 => 25,  131 => 23,  127 => 22,  122 => 20,  118 => 19,  113 => 17,  109 => 16,  104 => 14,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Editar{% endblock %}

{% block body %}

        {{ form_start(formulario) }}
      <div class=\"bg-black/80 w-full h-screen sm:flex items-center justify-center\">
       
        <div class=\"flex flex-col mb-2 bg-blue-500 h-screen sm:w-[50%]  sm:rounded-3xl sm:h-fit sm:py-10 sm:shadow-2xl sm:px-5\">
            <span class=\"font-bold text-center mt-4 sm:mt-0\">Editar proveedor</span>
            <hr class=\"mt-4\">
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"{{ formulario.Nombre.vars.id }}\">Nombre:</label>
            {{ form_widget(formulario.Nombre, { 'attr': {'class': 'block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto'} }) }}
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"{{ formulario.Correo.vars.id }}\">Correo:</label>
            {{ form_widget(formulario.Correo, { 'attr': {'class': 'block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto'} }) }}
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"{{ formulario.Telefono.vars.id }}\">Telefono:</label>
            {{ form_widget(formulario.Telefono, { 'attr': {'class': 'block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto'} }) }}
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"{{ formulario.Tipo.vars.id }}\">Tipo:</label>
            {{ form_widget(formulario.Tipo, { 'attr': {'class': 'block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto h-10'} }) }}
            
            <label class=\" block text-black font-bold py-2 px-4 sm:px-0\" for=\"{{ formulario.Estado.vars.id }}\">Estado:</label>
            {{ form_widget(formulario.Estado, { 'attr': {'class': 'block w-[90%] sm:w-full py-2 px-4 border rounded-md focus:border-blue-500 outline-none text-gray-700 bg-gray-100 mx-auto h-10'} }) }}
            
            <div class=\"flex w-full items-center justify-center gap-2\">
                {{ form_row(formulario.Guardar, { 'attr': {'class': 'bg-yellow-300 text-black font-bold rounded-lg w-2/4 mt-8 h-10 w-fit px-7'} }) }}
                <button class=\"bg-red-400 font-bold rounded-lg mt-8 h-10 w-fit px-7\" id=\"cancbtn\">Cancelar</button>
            </div>
        </div>
        {{ form_end(formulario) }}
{% endblock %}
", "editar/editar.html.twig", "/var/www/project/templates/editar/editar.html.twig");
    }
}
