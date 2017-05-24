<?php

/* :category:new.html.twig */
class __TwigTemplate_0a2aab3d007b54e4c8cf66ca494197a8e6989206fa1787a12dd6603773f215c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:new.html.twig", 1);
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
        $__internal_a6cbedc65b454b0b4f6ba423e07378d2bc011d98c15cc0ac90e6f3b3635c008e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6cbedc65b454b0b4f6ba423e07378d2bc011d98c15cc0ac90e6f3b3635c008e->enter($__internal_a6cbedc65b454b0b4f6ba423e07378d2bc011d98c15cc0ac90e6f3b3635c008e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $__internal_03402b20bb534dc789eb842ebfbd6ac5983b1fa223231683d7e895a5b710bf27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03402b20bb534dc789eb842ebfbd6ac5983b1fa223231683d7e895a5b710bf27->enter($__internal_03402b20bb534dc789eb842ebfbd6ac5983b1fa223231683d7e895a5b710bf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6cbedc65b454b0b4f6ba423e07378d2bc011d98c15cc0ac90e6f3b3635c008e->leave($__internal_a6cbedc65b454b0b4f6ba423e07378d2bc011d98c15cc0ac90e6f3b3635c008e_prof);

        
        $__internal_03402b20bb534dc789eb842ebfbd6ac5983b1fa223231683d7e895a5b710bf27->leave($__internal_03402b20bb534dc789eb842ebfbd6ac5983b1fa223231683d7e895a5b710bf27_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fabecd214541d3c3512d64d721f5583c259e6c4b0ca5fb891b702f9b566f4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fabecd214541d3c3512d64d721f5583c259e6c4b0ca5fb891b702f9b566f4bf->enter($__internal_4fabecd214541d3c3512d64d721f5583c259e6c4b0ca5fb891b702f9b566f4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7e4cf6c5ccd3698e3f93c81e7745d92cd880b6e14a21ec2ea3c032d5034a554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e4cf6c5ccd3698e3f93c81e7745d92cd880b6e14a21ec2ea3c032d5034a554->enter($__internal_f7e4cf6c5ccd3698e3f93c81e7745d92cd880b6e14a21ec2ea3c032d5034a554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f7e4cf6c5ccd3698e3f93c81e7745d92cd880b6e14a21ec2ea3c032d5034a554->leave($__internal_f7e4cf6c5ccd3698e3f93c81e7745d92cd880b6e14a21ec2ea3c032d5034a554_prof);

        
        $__internal_4fabecd214541d3c3512d64d721f5583c259e6c4b0ca5fb891b702f9b566f4bf->leave($__internal_4fabecd214541d3c3512d64d721f5583c259e6c4b0ca5fb891b702f9b566f4bf_prof);

    }

    public function getTemplateName()
    {
        return ":category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Category creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":category:new.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/category/new.html.twig");
    }
}
