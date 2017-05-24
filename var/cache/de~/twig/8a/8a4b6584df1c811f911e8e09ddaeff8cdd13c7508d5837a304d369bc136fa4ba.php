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
        $__internal_890439ad681eaed20597ad9d572e7bd197308cfe2010672844e827ccbfd924ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890439ad681eaed20597ad9d572e7bd197308cfe2010672844e827ccbfd924ed->enter($__internal_890439ad681eaed20597ad9d572e7bd197308cfe2010672844e827ccbfd924ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c644a48cf3b09eb2c31e98965d561a9fc7a441d7eb8d3f1179ac5b37e3cadd63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c644a48cf3b09eb2c31e98965d561a9fc7a441d7eb8d3f1179ac5b37e3cadd63->enter($__internal_c644a48cf3b09eb2c31e98965d561a9fc7a441d7eb8d3f1179ac5b37e3cadd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_890439ad681eaed20597ad9d572e7bd197308cfe2010672844e827ccbfd924ed->leave($__internal_890439ad681eaed20597ad9d572e7bd197308cfe2010672844e827ccbfd924ed_prof);

        
        $__internal_c644a48cf3b09eb2c31e98965d561a9fc7a441d7eb8d3f1179ac5b37e3cadd63->leave($__internal_c644a48cf3b09eb2c31e98965d561a9fc7a441d7eb8d3f1179ac5b37e3cadd63_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b9e98ec37d47173e1880a2059d95fc69e680d5b53c381f32a14cc841d8ab39b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e98ec37d47173e1880a2059d95fc69e680d5b53c381f32a14cc841d8ab39b6->enter($__internal_b9e98ec37d47173e1880a2059d95fc69e680d5b53c381f32a14cc841d8ab39b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_25ee26144d9334a36a8eed3f8511fd3e2a71c6c6493d1c96f2e4f2e6d78c6936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ee26144d9334a36a8eed3f8511fd3e2a71c6c6493d1c96f2e4f2e6d78c6936->enter($__internal_25ee26144d9334a36a8eed3f8511fd3e2a71c6c6493d1c96f2e4f2e6d78c6936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_25ee26144d9334a36a8eed3f8511fd3e2a71c6c6493d1c96f2e4f2e6d78c6936->leave($__internal_25ee26144d9334a36a8eed3f8511fd3e2a71c6c6493d1c96f2e4f2e6d78c6936_prof);

        
        $__internal_b9e98ec37d47173e1880a2059d95fc69e680d5b53c381f32a14cc841d8ab39b6->leave($__internal_b9e98ec37d47173e1880a2059d95fc69e680d5b53c381f32a14cc841d8ab39b6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca5ce71998d2811eed31bf37614ade8a14cdc0816c8eba68832d7b4b9af6334c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5ce71998d2811eed31bf37614ade8a14cdc0816c8eba68832d7b4b9af6334c->enter($__internal_ca5ce71998d2811eed31bf37614ade8a14cdc0816c8eba68832d7b4b9af6334c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3154be5756854080b06b3860402908abd47fc73c824c868ce02fe5517226078a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3154be5756854080b06b3860402908abd47fc73c824c868ce02fe5517226078a->enter($__internal_3154be5756854080b06b3860402908abd47fc73c824c868ce02fe5517226078a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3154be5756854080b06b3860402908abd47fc73c824c868ce02fe5517226078a->leave($__internal_3154be5756854080b06b3860402908abd47fc73c824c868ce02fe5517226078a_prof);

        
        $__internal_ca5ce71998d2811eed31bf37614ade8a14cdc0816c8eba68832d7b4b9af6334c->leave($__internal_ca5ce71998d2811eed31bf37614ade8a14cdc0816c8eba68832d7b4b9af6334c_prof);

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
