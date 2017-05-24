<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b637723b582a7979b4b36d8b8f86a06c12f6affa9919a773d7bb7ead0fa50a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63951c690440acd8f6464f1ad85e3e26b054f14fe75d0ac4e87d59512e73c098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63951c690440acd8f6464f1ad85e3e26b054f14fe75d0ac4e87d59512e73c098->enter($__internal_63951c690440acd8f6464f1ad85e3e26b054f14fe75d0ac4e87d59512e73c098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e62338d06809d3c60f9f0b7a2f774b3e91c6da641772cc6e9b6a217657e501fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62338d06809d3c60f9f0b7a2f774b3e91c6da641772cc6e9b6a217657e501fe->enter($__internal_e62338d06809d3c60f9f0b7a2f774b3e91c6da641772cc6e9b6a217657e501fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63951c690440acd8f6464f1ad85e3e26b054f14fe75d0ac4e87d59512e73c098->leave($__internal_63951c690440acd8f6464f1ad85e3e26b054f14fe75d0ac4e87d59512e73c098_prof);

        
        $__internal_e62338d06809d3c60f9f0b7a2f774b3e91c6da641772cc6e9b6a217657e501fe->leave($__internal_e62338d06809d3c60f9f0b7a2f774b3e91c6da641772cc6e9b6a217657e501fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff5b17bd1c208177e496f9d04cba00b01c0dd343b29c5a7bc1e5a76839a7304f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5b17bd1c208177e496f9d04cba00b01c0dd343b29c5a7bc1e5a76839a7304f->enter($__internal_ff5b17bd1c208177e496f9d04cba00b01c0dd343b29c5a7bc1e5a76839a7304f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c691e1ab3e7b3d3fd119815de61c807eee3ba57d3c48af17355b1ceb88ed90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c691e1ab3e7b3d3fd119815de61c807eee3ba57d3c48af17355b1ceb88ed90d->enter($__internal_5c691e1ab3e7b3d3fd119815de61c807eee3ba57d3c48af17355b1ceb88ed90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5c691e1ab3e7b3d3fd119815de61c807eee3ba57d3c48af17355b1ceb88ed90d->leave($__internal_5c691e1ab3e7b3d3fd119815de61c807eee3ba57d3c48af17355b1ceb88ed90d_prof);

        
        $__internal_ff5b17bd1c208177e496f9d04cba00b01c0dd343b29c5a7bc1e5a76839a7304f->leave($__internal_ff5b17bd1c208177e496f9d04cba00b01c0dd343b29c5a7bc1e5a76839a7304f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_925ec21baf6e572af82f064af290c5791cde7198948d0dc68106b84e977b01eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925ec21baf6e572af82f064af290c5791cde7198948d0dc68106b84e977b01eb->enter($__internal_925ec21baf6e572af82f064af290c5791cde7198948d0dc68106b84e977b01eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f8d491b53e2a02d3a3764152a20b0f3e85af3cbc0dc385e1842b35b2fc7f922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8d491b53e2a02d3a3764152a20b0f3e85af3cbc0dc385e1842b35b2fc7f922->enter($__internal_1f8d491b53e2a02d3a3764152a20b0f3e85af3cbc0dc385e1842b35b2fc7f922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1f8d491b53e2a02d3a3764152a20b0f3e85af3cbc0dc385e1842b35b2fc7f922->leave($__internal_1f8d491b53e2a02d3a3764152a20b0f3e85af3cbc0dc385e1842b35b2fc7f922_prof);

        
        $__internal_925ec21baf6e572af82f064af290c5791cde7198948d0dc68106b84e977b01eb->leave($__internal_925ec21baf6e572af82f064af290c5791cde7198948d0dc68106b84e977b01eb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
