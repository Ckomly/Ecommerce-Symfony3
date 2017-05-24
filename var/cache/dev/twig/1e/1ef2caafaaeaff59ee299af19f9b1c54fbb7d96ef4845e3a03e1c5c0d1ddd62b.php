<?php

/* bid/new.html.twig */
class __TwigTemplate_039a6d3d0bad5136768495a5ff321aa6122f50b7d907b6c2c98b924640e0812b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("show.html.twig", "bid/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ec2121388da7693f4c65d8dd324b28037d201ddb6cb9003f99d3274064eb152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec2121388da7693f4c65d8dd324b28037d201ddb6cb9003f99d3274064eb152->enter($__internal_4ec2121388da7693f4c65d8dd324b28037d201ddb6cb9003f99d3274064eb152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bid/new.html.twig"));

        $__internal_6f63d39326ffbfa3ccee80652ec9d8a9223daa2997e15a136858a7292e40c5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f63d39326ffbfa3ccee80652ec9d8a9223daa2997e15a136858a7292e40c5cb->enter($__internal_6f63d39326ffbfa3ccee80652ec9d8a9223daa2997e15a136858a7292e40c5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bid/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ec2121388da7693f4c65d8dd324b28037d201ddb6cb9003f99d3274064eb152->leave($__internal_4ec2121388da7693f4c65d8dd324b28037d201ddb6cb9003f99d3274064eb152_prof);

        
        $__internal_6f63d39326ffbfa3ccee80652ec9d8a9223daa2997e15a136858a7292e40c5cb->leave($__internal_6f63d39326ffbfa3ccee80652ec9d8a9223daa2997e15a136858a7292e40c5cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad0d035fc30fafb4198319dfde1d7b6101a89fe1f91190a852db38253a61b3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0d035fc30fafb4198319dfde1d7b6101a89fe1f91190a852db38253a61b3c8->enter($__internal_ad0d035fc30fafb4198319dfde1d7b6101a89fe1f91190a852db38253a61b3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a18943bf3f44d5a67073b7e34f489fe3075d8d260cc87eb9ded2721f4842939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a18943bf3f44d5a67073b7e34f489fe3075d8d260cc87eb9ded2721f4842939->enter($__internal_2a18943bf3f44d5a67073b7e34f489fe3075d8d260cc87eb9ded2721f4842939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Bid creation</h1>

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
        
        $__internal_2a18943bf3f44d5a67073b7e34f489fe3075d8d260cc87eb9ded2721f4842939->leave($__internal_2a18943bf3f44d5a67073b7e34f489fe3075d8d260cc87eb9ded2721f4842939_prof);

        
        $__internal_ad0d035fc30fafb4198319dfde1d7b6101a89fe1f91190a852db38253a61b3c8->leave($__internal_ad0d035fc30fafb4198319dfde1d7b6101a89fe1f91190a852db38253a61b3c8_prof);

    }

    public function getTemplateName()
    {
        return "bid/new.html.twig";
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
        return new Twig_Source("{% extends 'show.html.twig' %}

{% block body %}
    <h1>Bid creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

{% endblock %}
", "bid/new.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/bid/new.html.twig");
    }
}
