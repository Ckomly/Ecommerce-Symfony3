<?php

/* user/new.html.twig */
class __TwigTemplate_49c558ab67ab2088e237b2719b27a2d33383dc86615ee4a744669f014520590a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_08e476d897a241af076947333e8d905f06e81826e6b6094feac717dae343d39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e476d897a241af076947333e8d905f06e81826e6b6094feac717dae343d39a->enter($__internal_08e476d897a241af076947333e8d905f06e81826e6b6094feac717dae343d39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_36c491a49615fddcfe6581d33dd9aed216afd9236ec39a70978d90cfebe453ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c491a49615fddcfe6581d33dd9aed216afd9236ec39a70978d90cfebe453ad->enter($__internal_36c491a49615fddcfe6581d33dd9aed216afd9236ec39a70978d90cfebe453ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08e476d897a241af076947333e8d905f06e81826e6b6094feac717dae343d39a->leave($__internal_08e476d897a241af076947333e8d905f06e81826e6b6094feac717dae343d39a_prof);

        
        $__internal_36c491a49615fddcfe6581d33dd9aed216afd9236ec39a70978d90cfebe453ad->leave($__internal_36c491a49615fddcfe6581d33dd9aed216afd9236ec39a70978d90cfebe453ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_361a2ce9f97672980b336e7444c0f56443f0fec12d00a45329ef0d91dec83187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361a2ce9f97672980b336e7444c0f56443f0fec12d00a45329ef0d91dec83187->enter($__internal_361a2ce9f97672980b336e7444c0f56443f0fec12d00a45329ef0d91dec83187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48002393c96614e4da9b05ad6cd4d400f17a151ed6222cd7580dbfd757a62735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48002393c96614e4da9b05ad6cd4d400f17a151ed6222cd7580dbfd757a62735->enter($__internal_48002393c96614e4da9b05ad6cd4d400f17a151ed6222cd7580dbfd757a62735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        
        $__internal_48002393c96614e4da9b05ad6cd4d400f17a151ed6222cd7580dbfd757a62735->leave($__internal_48002393c96614e4da9b05ad6cd4d400f17a151ed6222cd7580dbfd757a62735_prof);

        
        $__internal_361a2ce9f97672980b336e7444c0f56443f0fec12d00a45329ef0d91dec83187->leave($__internal_361a2ce9f97672980b336e7444c0f56443f0fec12d00a45329ef0d91dec83187_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

{% endblock %}
", "user/new.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/user/new.html.twig");
    }
}
