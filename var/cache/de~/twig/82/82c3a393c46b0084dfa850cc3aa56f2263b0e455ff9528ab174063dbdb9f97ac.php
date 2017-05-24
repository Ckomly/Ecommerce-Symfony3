<?php

/* rate/new.html.twig */
class __TwigTemplate_4041d77ae6f63ff84d4b2723148b97083b2b9df3fe38931e6e7d851b9309ec15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rate/new.html.twig", 1);
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
        $__internal_df6ae3bd56abc39c6650dd1c5bfe29ad51de7b607f43fb7d4c15fe5cc07fed9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6ae3bd56abc39c6650dd1c5bfe29ad51de7b607f43fb7d4c15fe5cc07fed9b->enter($__internal_df6ae3bd56abc39c6650dd1c5bfe29ad51de7b607f43fb7d4c15fe5cc07fed9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rate/new.html.twig"));

        $__internal_cfe1000ea31b3892e1779cd923b8f05b7caa334349a9b301ef409c347134918f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe1000ea31b3892e1779cd923b8f05b7caa334349a9b301ef409c347134918f->enter($__internal_cfe1000ea31b3892e1779cd923b8f05b7caa334349a9b301ef409c347134918f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rate/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df6ae3bd56abc39c6650dd1c5bfe29ad51de7b607f43fb7d4c15fe5cc07fed9b->leave($__internal_df6ae3bd56abc39c6650dd1c5bfe29ad51de7b607f43fb7d4c15fe5cc07fed9b_prof);

        
        $__internal_cfe1000ea31b3892e1779cd923b8f05b7caa334349a9b301ef409c347134918f->leave($__internal_cfe1000ea31b3892e1779cd923b8f05b7caa334349a9b301ef409c347134918f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_604ae7c710a42abf2348300afc5930bdb3ea5fd33d026477e4dba81427f8a886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604ae7c710a42abf2348300afc5930bdb3ea5fd33d026477e4dba81427f8a886->enter($__internal_604ae7c710a42abf2348300afc5930bdb3ea5fd33d026477e4dba81427f8a886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2319e4d55a82e3eeefebe158a0e8fc74ea943923779abae237ec03bdb867069f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2319e4d55a82e3eeefebe158a0e8fc74ea943923779abae237ec03bdb867069f->enter($__internal_2319e4d55a82e3eeefebe158a0e8fc74ea943923779abae237ec03bdb867069f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rate creation</h1>

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
";
        
        $__internal_2319e4d55a82e3eeefebe158a0e8fc74ea943923779abae237ec03bdb867069f->leave($__internal_2319e4d55a82e3eeefebe158a0e8fc74ea943923779abae237ec03bdb867069f_prof);

        
        $__internal_604ae7c710a42abf2348300afc5930bdb3ea5fd33d026477e4dba81427f8a886->leave($__internal_604ae7c710a42abf2348300afc5930bdb3ea5fd33d026477e4dba81427f8a886_prof);

    }

    public function getTemplateName()
    {
        return "rate/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Rate creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}
{% endblock %}
", "rate/new.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/rate/new.html.twig");
    }
}
