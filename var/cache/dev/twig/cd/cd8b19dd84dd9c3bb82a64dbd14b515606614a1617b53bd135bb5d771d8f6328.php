<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_368c53b7bea6d9e5ed76843d596537b8d2470a39bb1aa6924d3e4bcaa9f70989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368c53b7bea6d9e5ed76843d596537b8d2470a39bb1aa6924d3e4bcaa9f70989->enter($__internal_368c53b7bea6d9e5ed76843d596537b8d2470a39bb1aa6924d3e4bcaa9f70989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_09263cb8c19bebfe6b6569d2c040950c37a61d5a51d192f1bcdc778c993fe21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09263cb8c19bebfe6b6569d2c040950c37a61d5a51d192f1bcdc778c993fe21e->enter($__internal_09263cb8c19bebfe6b6569d2c040950c37a61d5a51d192f1bcdc778c993fe21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368c53b7bea6d9e5ed76843d596537b8d2470a39bb1aa6924d3e4bcaa9f70989->leave($__internal_368c53b7bea6d9e5ed76843d596537b8d2470a39bb1aa6924d3e4bcaa9f70989_prof);

        
        $__internal_09263cb8c19bebfe6b6569d2c040950c37a61d5a51d192f1bcdc778c993fe21e->leave($__internal_09263cb8c19bebfe6b6569d2c040950c37a61d5a51d192f1bcdc778c993fe21e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4707c558aad65154684178549df4b4a011fea2f9b7f8de0671826442cbf1aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4707c558aad65154684178549df4b4a011fea2f9b7f8de0671826442cbf1aa1->enter($__internal_c4707c558aad65154684178549df4b4a011fea2f9b7f8de0671826442cbf1aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d67d1d830dc77fcf5a772d08f06f7ec23a927d41b83d9bf4c3859af861bb7f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67d1d830dc77fcf5a772d08f06f7ec23a927d41b83d9bf4c3859af861bb7f6b->enter($__internal_d67d1d830dc77fcf5a772d08f06f7ec23a927d41b83d9bf4c3859af861bb7f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d67d1d830dc77fcf5a772d08f06f7ec23a927d41b83d9bf4c3859af861bb7f6b->leave($__internal_d67d1d830dc77fcf5a772d08f06f7ec23a927d41b83d9bf4c3859af861bb7f6b_prof);

        
        $__internal_c4707c558aad65154684178549df4b4a011fea2f9b7f8de0671826442cbf1aa1->leave($__internal_c4707c558aad65154684178549df4b4a011fea2f9b7f8de0671826442cbf1aa1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a62ad0d28072ce4a5620ffd6ea2824fe38eaf75c1e940ce79fc6b16a9e2e2cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62ad0d28072ce4a5620ffd6ea2824fe38eaf75c1e940ce79fc6b16a9e2e2cb3->enter($__internal_a62ad0d28072ce4a5620ffd6ea2824fe38eaf75c1e940ce79fc6b16a9e2e2cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d74b5831075536eedeb5813d2d2de56c8bcb2a62f907908d56a739ebb95733b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74b5831075536eedeb5813d2d2de56c8bcb2a62f907908d56a739ebb95733b2->enter($__internal_d74b5831075536eedeb5813d2d2de56c8bcb2a62f907908d56a739ebb95733b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d74b5831075536eedeb5813d2d2de56c8bcb2a62f907908d56a739ebb95733b2->leave($__internal_d74b5831075536eedeb5813d2d2de56c8bcb2a62f907908d56a739ebb95733b2_prof);

        
        $__internal_a62ad0d28072ce4a5620ffd6ea2824fe38eaf75c1e940ce79fc6b16a9e2e2cb3->leave($__internal_a62ad0d28072ce4a5620ffd6ea2824fe38eaf75c1e940ce79fc6b16a9e2e2cb3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_491459072c6976631e46be55ffdda3efcf84136cb1807f00fe2089ab1e30ca48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491459072c6976631e46be55ffdda3efcf84136cb1807f00fe2089ab1e30ca48->enter($__internal_491459072c6976631e46be55ffdda3efcf84136cb1807f00fe2089ab1e30ca48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ca48fefaf02b8dfca9798735663ab5ded8dad28ec0c7a4b0c7999deb631425b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca48fefaf02b8dfca9798735663ab5ded8dad28ec0c7a4b0c7999deb631425b->enter($__internal_4ca48fefaf02b8dfca9798735663ab5ded8dad28ec0c7a4b0c7999deb631425b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ca48fefaf02b8dfca9798735663ab5ded8dad28ec0c7a4b0c7999deb631425b->leave($__internal_4ca48fefaf02b8dfca9798735663ab5ded8dad28ec0c7a4b0c7999deb631425b_prof);

        
        $__internal_491459072c6976631e46be55ffdda3efcf84136cb1807f00fe2089ab1e30ca48->leave($__internal_491459072c6976631e46be55ffdda3efcf84136cb1807f00fe2089ab1e30ca48_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
