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
        $__internal_1f6de34c77fd483132917c5715e174abd7b2e6d259a51d69853f96d8cb40762e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6de34c77fd483132917c5715e174abd7b2e6d259a51d69853f96d8cb40762e->enter($__internal_1f6de34c77fd483132917c5715e174abd7b2e6d259a51d69853f96d8cb40762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_a26fbad188d2a945562a7d598d183fbdbc1267305d625bc51b7b0f27b2c69565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26fbad188d2a945562a7d598d183fbdbc1267305d625bc51b7b0f27b2c69565->enter($__internal_a26fbad188d2a945562a7d598d183fbdbc1267305d625bc51b7b0f27b2c69565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f6de34c77fd483132917c5715e174abd7b2e6d259a51d69853f96d8cb40762e->leave($__internal_1f6de34c77fd483132917c5715e174abd7b2e6d259a51d69853f96d8cb40762e_prof);

        
        $__internal_a26fbad188d2a945562a7d598d183fbdbc1267305d625bc51b7b0f27b2c69565->leave($__internal_a26fbad188d2a945562a7d598d183fbdbc1267305d625bc51b7b0f27b2c69565_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea3fb0a686fa980da38558336b3e13b8c619a5200e2803ad8074b97356fb9fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea3fb0a686fa980da38558336b3e13b8c619a5200e2803ad8074b97356fb9fc9->enter($__internal_ea3fb0a686fa980da38558336b3e13b8c619a5200e2803ad8074b97356fb9fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a9b1efcedc6f091fc2577b039a6c4ad99ccd5cfb3101a0c2bb22b1854b74e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9b1efcedc6f091fc2577b039a6c4ad99ccd5cfb3101a0c2bb22b1854b74e76->enter($__internal_0a9b1efcedc6f091fc2577b039a6c4ad99ccd5cfb3101a0c2bb22b1854b74e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a9b1efcedc6f091fc2577b039a6c4ad99ccd5cfb3101a0c2bb22b1854b74e76->leave($__internal_0a9b1efcedc6f091fc2577b039a6c4ad99ccd5cfb3101a0c2bb22b1854b74e76_prof);

        
        $__internal_ea3fb0a686fa980da38558336b3e13b8c619a5200e2803ad8074b97356fb9fc9->leave($__internal_ea3fb0a686fa980da38558336b3e13b8c619a5200e2803ad8074b97356fb9fc9_prof);

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
