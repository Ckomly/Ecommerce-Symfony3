<?php

/* :user:new.html.twig */
class __TwigTemplate_49c558ab67ab2088e237b2719b27a2d33383dc86615ee4a744669f014520590a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_2135ea927d52b9549362da8b1a3c9e8bc24e9bafee3ae93cbc8ad0a73e13efe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2135ea927d52b9549362da8b1a3c9e8bc24e9bafee3ae93cbc8ad0a73e13efe3->enter($__internal_2135ea927d52b9549362da8b1a3c9e8bc24e9bafee3ae93cbc8ad0a73e13efe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $__internal_d96c81ce8cde6b5af09bac1db4ad08a2f65e094a09b5123b634d6b87b5abacef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96c81ce8cde6b5af09bac1db4ad08a2f65e094a09b5123b634d6b87b5abacef->enter($__internal_d96c81ce8cde6b5af09bac1db4ad08a2f65e094a09b5123b634d6b87b5abacef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2135ea927d52b9549362da8b1a3c9e8bc24e9bafee3ae93cbc8ad0a73e13efe3->leave($__internal_2135ea927d52b9549362da8b1a3c9e8bc24e9bafee3ae93cbc8ad0a73e13efe3_prof);

        
        $__internal_d96c81ce8cde6b5af09bac1db4ad08a2f65e094a09b5123b634d6b87b5abacef->leave($__internal_d96c81ce8cde6b5af09bac1db4ad08a2f65e094a09b5123b634d6b87b5abacef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bbb0ad72adedb4f0aa8baba3325d97ae98607bca26e0c3fe4c89601d865a6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbb0ad72adedb4f0aa8baba3325d97ae98607bca26e0c3fe4c89601d865a6ba->enter($__internal_3bbb0ad72adedb4f0aa8baba3325d97ae98607bca26e0c3fe4c89601d865a6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2342d7f45f0edcde32aa3a98791d6437a14d3ec685efc4cb0f4ca963258be3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2342d7f45f0edcde32aa3a98791d6437a14d3ec685efc4cb0f4ca963258be3d0->enter($__internal_2342d7f45f0edcde32aa3a98791d6437a14d3ec685efc4cb0f4ca963258be3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2342d7f45f0edcde32aa3a98791d6437a14d3ec685efc4cb0f4ca963258be3d0->leave($__internal_2342d7f45f0edcde32aa3a98791d6437a14d3ec685efc4cb0f4ca963258be3d0_prof);

        
        $__internal_3bbb0ad72adedb4f0aa8baba3325d97ae98607bca26e0c3fe4c89601d865a6ba->leave($__internal_3bbb0ad72adedb4f0aa8baba3325d97ae98607bca26e0c3fe4c89601d865a6ba_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
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
", ":user:new.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/user/new.html.twig");
    }
}
