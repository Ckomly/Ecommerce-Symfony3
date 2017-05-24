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
        $__internal_5ed90ff13a9bb679e899927258877be2fa53d376872474bbddfc33606d567238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed90ff13a9bb679e899927258877be2fa53d376872474bbddfc33606d567238->enter($__internal_5ed90ff13a9bb679e899927258877be2fa53d376872474bbddfc33606d567238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d157313c589c0f4d0c2d5b21ef986e873e0e55190a53b7c134b426b9aea707f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d157313c589c0f4d0c2d5b21ef986e873e0e55190a53b7c134b426b9aea707f2->enter($__internal_d157313c589c0f4d0c2d5b21ef986e873e0e55190a53b7c134b426b9aea707f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ed90ff13a9bb679e899927258877be2fa53d376872474bbddfc33606d567238->leave($__internal_5ed90ff13a9bb679e899927258877be2fa53d376872474bbddfc33606d567238_prof);

        
        $__internal_d157313c589c0f4d0c2d5b21ef986e873e0e55190a53b7c134b426b9aea707f2->leave($__internal_d157313c589c0f4d0c2d5b21ef986e873e0e55190a53b7c134b426b9aea707f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e5066b019ad2a8b2680dc80d09d75cb824da1d2ee341e8adbf2e85c480906ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5066b019ad2a8b2680dc80d09d75cb824da1d2ee341e8adbf2e85c480906ea->enter($__internal_3e5066b019ad2a8b2680dc80d09d75cb824da1d2ee341e8adbf2e85c480906ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f56296f81eac777c088a241c3f951d98c22f3caa3ec4ee618da69ff90d955803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56296f81eac777c088a241c3f951d98c22f3caa3ec4ee618da69ff90d955803->enter($__internal_f56296f81eac777c088a241c3f951d98c22f3caa3ec4ee618da69ff90d955803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f56296f81eac777c088a241c3f951d98c22f3caa3ec4ee618da69ff90d955803->leave($__internal_f56296f81eac777c088a241c3f951d98c22f3caa3ec4ee618da69ff90d955803_prof);

        
        $__internal_3e5066b019ad2a8b2680dc80d09d75cb824da1d2ee341e8adbf2e85c480906ea->leave($__internal_3e5066b019ad2a8b2680dc80d09d75cb824da1d2ee341e8adbf2e85c480906ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee5925eb1f7a560675b0e513e9bd2f736353491792017e8cba912b3f6904a09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5925eb1f7a560675b0e513e9bd2f736353491792017e8cba912b3f6904a09c->enter($__internal_ee5925eb1f7a560675b0e513e9bd2f736353491792017e8cba912b3f6904a09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_959b18a34486a0c4322c22727f007c93a35806fc5bbe5dde60d8999110aa0176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959b18a34486a0c4322c22727f007c93a35806fc5bbe5dde60d8999110aa0176->enter($__internal_959b18a34486a0c4322c22727f007c93a35806fc5bbe5dde60d8999110aa0176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_959b18a34486a0c4322c22727f007c93a35806fc5bbe5dde60d8999110aa0176->leave($__internal_959b18a34486a0c4322c22727f007c93a35806fc5bbe5dde60d8999110aa0176_prof);

        
        $__internal_ee5925eb1f7a560675b0e513e9bd2f736353491792017e8cba912b3f6904a09c->leave($__internal_ee5925eb1f7a560675b0e513e9bd2f736353491792017e8cba912b3f6904a09c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8b81df5be75dd305aa8c708e5eed6f82d4eeef024112ae14043a979f049c66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b81df5be75dd305aa8c708e5eed6f82d4eeef024112ae14043a979f049c66d->enter($__internal_b8b81df5be75dd305aa8c708e5eed6f82d4eeef024112ae14043a979f049c66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d047d52f784414e391583c688745c02dad4eb01a127f9d5171b6f5cce1f42a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d047d52f784414e391583c688745c02dad4eb01a127f9d5171b6f5cce1f42a05->enter($__internal_d047d52f784414e391583c688745c02dad4eb01a127f9d5171b6f5cce1f42a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d047d52f784414e391583c688745c02dad4eb01a127f9d5171b6f5cce1f42a05->leave($__internal_d047d52f784414e391583c688745c02dad4eb01a127f9d5171b6f5cce1f42a05_prof);

        
        $__internal_b8b81df5be75dd305aa8c708e5eed6f82d4eeef024112ae14043a979f049c66d->leave($__internal_b8b81df5be75dd305aa8c708e5eed6f82d4eeef024112ae14043a979f049c66d_prof);

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
