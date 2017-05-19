<?php

/* :category:edit.html.twig */
class __TwigTemplate_d23b9fdb4470001b1ecf5725746a5e8429d4a32de813e7c8a1c49111a2ae7255 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c1f63b7db2651426cca5da5bfed75ac629ea0ad7fb43a0659f39b0aa06b7ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1f63b7db2651426cca5da5bfed75ac629ea0ad7fb43a0659f39b0aa06b7ed1->enter($__internal_1c1f63b7db2651426cca5da5bfed75ac629ea0ad7fb43a0659f39b0aa06b7ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $__internal_cfe3e52d4740d59d249785054ee2e90b454a29fdd98f4b78315471c3cdec7a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe3e52d4740d59d249785054ee2e90b454a29fdd98f4b78315471c3cdec7a9b->enter($__internal_cfe3e52d4740d59d249785054ee2e90b454a29fdd98f4b78315471c3cdec7a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c1f63b7db2651426cca5da5bfed75ac629ea0ad7fb43a0659f39b0aa06b7ed1->leave($__internal_1c1f63b7db2651426cca5da5bfed75ac629ea0ad7fb43a0659f39b0aa06b7ed1_prof);

        
        $__internal_cfe3e52d4740d59d249785054ee2e90b454a29fdd98f4b78315471c3cdec7a9b->leave($__internal_cfe3e52d4740d59d249785054ee2e90b454a29fdd98f4b78315471c3cdec7a9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cce9f14cfc8ba971f1e206efe5867b2d3b7b258555464b17471b86c6e149c33f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce9f14cfc8ba971f1e206efe5867b2d3b7b258555464b17471b86c6e149c33f->enter($__internal_cce9f14cfc8ba971f1e206efe5867b2d3b7b258555464b17471b86c6e149c33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5e210c01a2b545f79bc8a42ec5ca04f2b3c50a8e0a7cb747deeccf425a7ce71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e210c01a2b545f79bc8a42ec5ca04f2b3c50a8e0a7cb747deeccf425a7ce71->enter($__internal_a5e210c01a2b545f79bc8a42ec5ca04f2b3c50a8e0a7cb747deeccf425a7ce71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a5e210c01a2b545f79bc8a42ec5ca04f2b3c50a8e0a7cb747deeccf425a7ce71->leave($__internal_a5e210c01a2b545f79bc8a42ec5ca04f2b3c50a8e0a7cb747deeccf425a7ce71_prof);

        
        $__internal_cce9f14cfc8ba971f1e206efe5867b2d3b7b258555464b17471b86c6e149c33f->leave($__internal_cce9f14cfc8ba971f1e206efe5867b2d3b7b258555464b17471b86c6e149c33f_prof);

    }

    public function getTemplateName()
    {
        return ":category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Category edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":category:edit.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/category/edit.html.twig");
    }
}
