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
        $__internal_935dd98ff7e28bb4461e6b03a7b5dde062a9e5a465554ec3a54ca83e6d6dd659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935dd98ff7e28bb4461e6b03a7b5dde062a9e5a465554ec3a54ca83e6d6dd659->enter($__internal_935dd98ff7e28bb4461e6b03a7b5dde062a9e5a465554ec3a54ca83e6d6dd659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rate/new.html.twig"));

        $__internal_b136b5fba24de0cef707a75e7f2aa2a258782b185e991455bbe8aa56cafeedff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b136b5fba24de0cef707a75e7f2aa2a258782b185e991455bbe8aa56cafeedff->enter($__internal_b136b5fba24de0cef707a75e7f2aa2a258782b185e991455bbe8aa56cafeedff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rate/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_935dd98ff7e28bb4461e6b03a7b5dde062a9e5a465554ec3a54ca83e6d6dd659->leave($__internal_935dd98ff7e28bb4461e6b03a7b5dde062a9e5a465554ec3a54ca83e6d6dd659_prof);

        
        $__internal_b136b5fba24de0cef707a75e7f2aa2a258782b185e991455bbe8aa56cafeedff->leave($__internal_b136b5fba24de0cef707a75e7f2aa2a258782b185e991455bbe8aa56cafeedff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f70c0598f5790c115847fcaf644bc9c4f5a64790ad524eb35e579add161e7bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f70c0598f5790c115847fcaf644bc9c4f5a64790ad524eb35e579add161e7bb6->enter($__internal_f70c0598f5790c115847fcaf644bc9c4f5a64790ad524eb35e579add161e7bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6c05bebc869ba7f87a8071f8d91a5fad39060f8f849b70b465cbec32bffe75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c05bebc869ba7f87a8071f8d91a5fad39060f8f849b70b465cbec32bffe75b->enter($__internal_d6c05bebc869ba7f87a8071f8d91a5fad39060f8f849b70b465cbec32bffe75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "'s rating</h1>

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
        
        $__internal_d6c05bebc869ba7f87a8071f8d91a5fad39060f8f849b70b465cbec32bffe75b->leave($__internal_d6c05bebc869ba7f87a8071f8d91a5fad39060f8f849b70b465cbec32bffe75b_prof);

        
        $__internal_f70c0598f5790c115847fcaf644bc9c4f5a64790ad524eb35e579add161e7bb6->leave($__internal_f70c0598f5790c115847fcaf644bc9c4f5a64790ad524eb35e579add161e7bb6_prof);

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
        return array (  64 => 9,  59 => 7,  55 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{ product.name}}'s rating</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}
{% endblock %}
", "rate/new.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/rate/new.html.twig");
    }
}
