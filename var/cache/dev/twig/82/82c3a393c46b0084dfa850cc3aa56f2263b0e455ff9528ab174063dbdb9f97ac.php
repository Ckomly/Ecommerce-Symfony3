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
        $__internal_36343cc908ed9c493403b2fbdbebb7ef26f9428c57657370e1e82564ed518f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36343cc908ed9c493403b2fbdbebb7ef26f9428c57657370e1e82564ed518f60->enter($__internal_36343cc908ed9c493403b2fbdbebb7ef26f9428c57657370e1e82564ed518f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rate/new.html.twig"));

        $__internal_0f0e65767b2aa083d2e1af23ec387375cd0aa714d6ccfe05b98d98b0cd6f0d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0e65767b2aa083d2e1af23ec387375cd0aa714d6ccfe05b98d98b0cd6f0d80->enter($__internal_0f0e65767b2aa083d2e1af23ec387375cd0aa714d6ccfe05b98d98b0cd6f0d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rate/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36343cc908ed9c493403b2fbdbebb7ef26f9428c57657370e1e82564ed518f60->leave($__internal_36343cc908ed9c493403b2fbdbebb7ef26f9428c57657370e1e82564ed518f60_prof);

        
        $__internal_0f0e65767b2aa083d2e1af23ec387375cd0aa714d6ccfe05b98d98b0cd6f0d80->leave($__internal_0f0e65767b2aa083d2e1af23ec387375cd0aa714d6ccfe05b98d98b0cd6f0d80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4d7fa0f33a54d804dc3ffcd78f5da7b21ec9020d7213d73bdd95bb5479be021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d7fa0f33a54d804dc3ffcd78f5da7b21ec9020d7213d73bdd95bb5479be021->enter($__internal_c4d7fa0f33a54d804dc3ffcd78f5da7b21ec9020d7213d73bdd95bb5479be021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fe778fb2daf0064cf241609da670c622ed5f626ab789a10996eba981b9d5cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe778fb2daf0064cf241609da670c622ed5f626ab789a10996eba981b9d5cbe->enter($__internal_3fe778fb2daf0064cf241609da670c622ed5f626ab789a10996eba981b9d5cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3fe778fb2daf0064cf241609da670c622ed5f626ab789a10996eba981b9d5cbe->leave($__internal_3fe778fb2daf0064cf241609da670c622ed5f626ab789a10996eba981b9d5cbe_prof);

        
        $__internal_c4d7fa0f33a54d804dc3ffcd78f5da7b21ec9020d7213d73bdd95bb5479be021->leave($__internal_c4d7fa0f33a54d804dc3ffcd78f5da7b21ec9020d7213d73bdd95bb5479be021_prof);

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
