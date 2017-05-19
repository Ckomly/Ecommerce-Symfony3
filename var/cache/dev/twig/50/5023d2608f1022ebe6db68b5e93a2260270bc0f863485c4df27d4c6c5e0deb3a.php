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
        $__internal_b4c7dcde23f07894578dbb7c6c6137dc38aaca9c5d1b672b6738ae4f3470ebff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c7dcde23f07894578dbb7c6c6137dc38aaca9c5d1b672b6738ae4f3470ebff->enter($__internal_b4c7dcde23f07894578dbb7c6c6137dc38aaca9c5d1b672b6738ae4f3470ebff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_84b842ce72842212ba085ed7e62f3150e61634e274219fcf77b0ecf2f3a47a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b842ce72842212ba085ed7e62f3150e61634e274219fcf77b0ecf2f3a47a6b->enter($__internal_84b842ce72842212ba085ed7e62f3150e61634e274219fcf77b0ecf2f3a47a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4c7dcde23f07894578dbb7c6c6137dc38aaca9c5d1b672b6738ae4f3470ebff->leave($__internal_b4c7dcde23f07894578dbb7c6c6137dc38aaca9c5d1b672b6738ae4f3470ebff_prof);

        
        $__internal_84b842ce72842212ba085ed7e62f3150e61634e274219fcf77b0ecf2f3a47a6b->leave($__internal_84b842ce72842212ba085ed7e62f3150e61634e274219fcf77b0ecf2f3a47a6b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_671ba93c3debd396ce463815948a296c4a4ebc19f593172347a28ca9469d2d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671ba93c3debd396ce463815948a296c4a4ebc19f593172347a28ca9469d2d7c->enter($__internal_671ba93c3debd396ce463815948a296c4a4ebc19f593172347a28ca9469d2d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b82304ef65704e2da6d05526f13af42b6c5972592f7bb0e447243f000da9d861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82304ef65704e2da6d05526f13af42b6c5972592f7bb0e447243f000da9d861->enter($__internal_b82304ef65704e2da6d05526f13af42b6c5972592f7bb0e447243f000da9d861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b82304ef65704e2da6d05526f13af42b6c5972592f7bb0e447243f000da9d861->leave($__internal_b82304ef65704e2da6d05526f13af42b6c5972592f7bb0e447243f000da9d861_prof);

        
        $__internal_671ba93c3debd396ce463815948a296c4a4ebc19f593172347a28ca9469d2d7c->leave($__internal_671ba93c3debd396ce463815948a296c4a4ebc19f593172347a28ca9469d2d7c_prof);

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
