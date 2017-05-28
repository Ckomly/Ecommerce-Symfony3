<?php

/* rate/show.html.twig */
class __TwigTemplate_d121eb480e5861c9681a1cad561b3047db53e88c11860cb12cdb8473dff20ca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rate/show.html.twig", 1);
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
        $__internal_4d7ce16c95f5a421fd38aa842b2eaef5fc2a4321f7d163bd8b81869eae45c5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7ce16c95f5a421fd38aa842b2eaef5fc2a4321f7d163bd8b81869eae45c5f4->enter($__internal_4d7ce16c95f5a421fd38aa842b2eaef5fc2a4321f7d163bd8b81869eae45c5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rate/show.html.twig"));

        $__internal_63f5c4a6d9757dc2359994d04e3e9ef20375f5a785fc498f4599ef987b324ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f5c4a6d9757dc2359994d04e3e9ef20375f5a785fc498f4599ef987b324ba4->enter($__internal_63f5c4a6d9757dc2359994d04e3e9ef20375f5a785fc498f4599ef987b324ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rate/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7ce16c95f5a421fd38aa842b2eaef5fc2a4321f7d163bd8b81869eae45c5f4->leave($__internal_4d7ce16c95f5a421fd38aa842b2eaef5fc2a4321f7d163bd8b81869eae45c5f4_prof);

        
        $__internal_63f5c4a6d9757dc2359994d04e3e9ef20375f5a785fc498f4599ef987b324ba4->leave($__internal_63f5c4a6d9757dc2359994d04e3e9ef20375f5a785fc498f4599ef987b324ba4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_906b6b5178824ba012ffe961853265489bd823231d1cef57697795132caca892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906b6b5178824ba012ffe961853265489bd823231d1cef57697795132caca892->enter($__internal_906b6b5178824ba012ffe961853265489bd823231d1cef57697795132caca892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aca89100205336597bc195fd800e8345e37d9fe1f3d2fd977c5676e8ee684aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca89100205336597bc195fd800e8345e37d9fe1f3d2fd977c5676e8ee684aac->enter($__internal_aca89100205336597bc195fd800e8345e37d9fe1f3d2fd977c5676e8ee684aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "'s rates</h1>
    <p class=\"btn btn-primary btn-outline btm-sm\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\"><strong>Back to the product</strong></a> </p>

    <div class=\"panel panel-default\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listRates"] ?? $this->getContext($context, "listRates")));
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 9
            echo "        <div class=\"panel-heading\">
          <p>Date: ";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rate"], "date", array()), "Y-m-d"), "html", null, true);
            echo " by ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "name", array()), "html", null, true);
            echo "</p>
        </div>
        <div class=\"panel-body\">
          <p>Rate: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "value", array()), "html", null, true);
            echo "</p>
          <p>Comment: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "comment", array()), "html", null, true);
            echo "</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
";
        
        $__internal_aca89100205336597bc195fd800e8345e37d9fe1f3d2fd977c5676e8ee684aac->leave($__internal_aca89100205336597bc195fd800e8345e37d9fe1f3d2fd977c5676e8ee684aac_prof);

        
        $__internal_906b6b5178824ba012ffe961853265489bd823231d1cef57697795132caca892->leave($__internal_906b6b5178824ba012ffe961853265489bd823231d1cef57697795132caca892_prof);

    }

    public function getTemplateName()
    {
        return "rate/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  79 => 14,  75 => 13,  67 => 10,  64 => 9,  60 => 8,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>{{ product.name }}'s rates</h1>
    <p class=\"btn btn-primary btn-outline btm-sm\"><a href=\"{{ path('product_show', { 'id': product.id }) }}\"><strong>Back to the product</strong></a> </p>

    <div class=\"panel panel-default\">
        {% for rate in listRates %}
        <div class=\"panel-heading\">
          <p>Date: {{ rate.date|date('Y-m-d') }} by {{ rate.name }}</p>
        </div>
        <div class=\"panel-body\">
          <p>Rate: {{ rate.value }}</p>
          <p>Comment: {{ rate.comment }}</p>
        </div>
        {% endfor %}
    </div>
{% endblock %}
", "rate/show.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/rate/show.html.twig");
    }
}
