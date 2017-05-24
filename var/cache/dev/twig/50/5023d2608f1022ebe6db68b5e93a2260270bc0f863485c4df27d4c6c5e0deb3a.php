<?php

/* product/new.html.twig */
class __TwigTemplate_c7621aba1ebdd926ce2ebb6bc994ca12fde9a7c09352b840e30e95385738eedb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/new.html.twig", 1);
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
        $__internal_27103a1d579fdcdd18319b5569d636453db799a287f78ad643b045e5c53c48fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27103a1d579fdcdd18319b5569d636453db799a287f78ad643b045e5c53c48fc->enter($__internal_27103a1d579fdcdd18319b5569d636453db799a287f78ad643b045e5c53c48fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_d9854a147c803b834b6341d799774bbc24d1d04909218068e175e68701a8afe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9854a147c803b834b6341d799774bbc24d1d04909218068e175e68701a8afe3->enter($__internal_d9854a147c803b834b6341d799774bbc24d1d04909218068e175e68701a8afe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27103a1d579fdcdd18319b5569d636453db799a287f78ad643b045e5c53c48fc->leave($__internal_27103a1d579fdcdd18319b5569d636453db799a287f78ad643b045e5c53c48fc_prof);

        
        $__internal_d9854a147c803b834b6341d799774bbc24d1d04909218068e175e68701a8afe3->leave($__internal_d9854a147c803b834b6341d799774bbc24d1d04909218068e175e68701a8afe3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ada07ab08866c5256eaed9224360250a04b7f75ece93d9440a0459db4f31b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ada07ab08866c5256eaed9224360250a04b7f75ece93d9440a0459db4f31b9c->enter($__internal_0ada07ab08866c5256eaed9224360250a04b7f75ece93d9440a0459db4f31b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c95f1b6d01a23f6e156aa587a46eadbd471bee25b2d0ba3fa9882a50ba9aca74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95f1b6d01a23f6e156aa587a46eadbd471bee25b2d0ba3fa9882a50ba9aca74->enter($__internal_c95f1b6d01a23f6e156aa587a46eadbd471bee25b2d0ba3fa9882a50ba9aca74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c95f1b6d01a23f6e156aa587a46eadbd471bee25b2d0ba3fa9882a50ba9aca74->leave($__internal_c95f1b6d01a23f6e156aa587a46eadbd471bee25b2d0ba3fa9882a50ba9aca74_prof);

        
        $__internal_0ada07ab08866c5256eaed9224360250a04b7f75ece93d9440a0459db4f31b9c->leave($__internal_0ada07ab08866c5256eaed9224360250a04b7f75ece93d9440a0459db4f31b9c_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
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
    <h1>Product creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "product/new.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/product/new.html.twig");
    }
}
