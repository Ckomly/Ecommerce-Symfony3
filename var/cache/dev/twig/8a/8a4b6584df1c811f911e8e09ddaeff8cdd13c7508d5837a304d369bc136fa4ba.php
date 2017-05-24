<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4215492859ff851dd46248b460e126b3fb360a785635db52ff03b10fe3f09c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_291dd9968a2959abcc3022ef2b1cd2ce1fb9046372bf5eb81be6b8088aa83cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291dd9968a2959abcc3022ef2b1cd2ce1fb9046372bf5eb81be6b8088aa83cfe->enter($__internal_291dd9968a2959abcc3022ef2b1cd2ce1fb9046372bf5eb81be6b8088aa83cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_eb1e293a9a65f36c7022cdeb6e505a555de21f08b902d255d781ec4c4ddc8527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1e293a9a65f36c7022cdeb6e505a555de21f08b902d255d781ec4c4ddc8527->enter($__internal_eb1e293a9a65f36c7022cdeb6e505a555de21f08b902d255d781ec4c4ddc8527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_291dd9968a2959abcc3022ef2b1cd2ce1fb9046372bf5eb81be6b8088aa83cfe->leave($__internal_291dd9968a2959abcc3022ef2b1cd2ce1fb9046372bf5eb81be6b8088aa83cfe_prof);

        
        $__internal_eb1e293a9a65f36c7022cdeb6e505a555de21f08b902d255d781ec4c4ddc8527->leave($__internal_eb1e293a9a65f36c7022cdeb6e505a555de21f08b902d255d781ec4c4ddc8527_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e815de00ee39f15d90f7ce431bdb18f480a0fd8d10c8936bb4cd9ca00c187e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e815de00ee39f15d90f7ce431bdb18f480a0fd8d10c8936bb4cd9ca00c187e0->enter($__internal_8e815de00ee39f15d90f7ce431bdb18f480a0fd8d10c8936bb4cd9ca00c187e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cab61ed3d805486d057c8b4e62b5ef68c077912730ab34279074f02349782e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab61ed3d805486d057c8b4e62b5ef68c077912730ab34279074f02349782e08->enter($__internal_cab61ed3d805486d057c8b4e62b5ef68c077912730ab34279074f02349782e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cab61ed3d805486d057c8b4e62b5ef68c077912730ab34279074f02349782e08->leave($__internal_cab61ed3d805486d057c8b4e62b5ef68c077912730ab34279074f02349782e08_prof);

        
        $__internal_8e815de00ee39f15d90f7ce431bdb18f480a0fd8d10c8936bb4cd9ca00c187e0->leave($__internal_8e815de00ee39f15d90f7ce431bdb18f480a0fd8d10c8936bb4cd9ca00c187e0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e68c96912c67dc82a157655eb305f45e4c56f0b6d3d37160cc4b01e03ac986b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e68c96912c67dc82a157655eb305f45e4c56f0b6d3d37160cc4b01e03ac986b->enter($__internal_1e68c96912c67dc82a157655eb305f45e4c56f0b6d3d37160cc4b01e03ac986b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_663e351f40ea345b15403fe940a93446bc76bae518cb20628b2153d04dca239f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663e351f40ea345b15403fe940a93446bc76bae518cb20628b2153d04dca239f->enter($__internal_663e351f40ea345b15403fe940a93446bc76bae518cb20628b2153d04dca239f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_663e351f40ea345b15403fe940a93446bc76bae518cb20628b2153d04dca239f->leave($__internal_663e351f40ea345b15403fe940a93446bc76bae518cb20628b2153d04dca239f_prof);

        
        $__internal_1e68c96912c67dc82a157655eb305f45e4c56f0b6d3d37160cc4b01e03ac986b->leave($__internal_1e68c96912c67dc82a157655eb305f45e4c56f0b6d3d37160cc4b01e03ac986b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
