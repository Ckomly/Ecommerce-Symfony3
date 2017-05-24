<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_d9bc5a1bb8762ed25834758f597841d3eaf69286b6a4035a4c51c908446a74e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17088a2b6acdbf5105e45e5dd563a14a0d382073e78004006b7570d3c2b643c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17088a2b6acdbf5105e45e5dd563a14a0d382073e78004006b7570d3c2b643c1->enter($__internal_17088a2b6acdbf5105e45e5dd563a14a0d382073e78004006b7570d3c2b643c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_edd0af805ead11d28585e2e33991ca436c12f5b20dd610ce5ef835049bd26648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd0af805ead11d28585e2e33991ca436c12f5b20dd610ce5ef835049bd26648->enter($__internal_edd0af805ead11d28585e2e33991ca436c12f5b20dd610ce5ef835049bd26648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17088a2b6acdbf5105e45e5dd563a14a0d382073e78004006b7570d3c2b643c1->leave($__internal_17088a2b6acdbf5105e45e5dd563a14a0d382073e78004006b7570d3c2b643c1_prof);

        
        $__internal_edd0af805ead11d28585e2e33991ca436c12f5b20dd610ce5ef835049bd26648->leave($__internal_edd0af805ead11d28585e2e33991ca436c12f5b20dd610ce5ef835049bd26648_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9808cea7c4063bf8f536f862b79e0337a37905b716eb00e59c90ab448d7a6235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9808cea7c4063bf8f536f862b79e0337a37905b716eb00e59c90ab448d7a6235->enter($__internal_9808cea7c4063bf8f536f862b79e0337a37905b716eb00e59c90ab448d7a6235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_63f4f354888f186a0c680a6ea57f62b623d5f0b91d1e6a6ee7096fede98de3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f4f354888f186a0c680a6ea57f62b623d5f0b91d1e6a6ee7096fede98de3d9->enter($__internal_63f4f354888f186a0c680a6ea57f62b623d5f0b91d1e6a6ee7096fede98de3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_63f4f354888f186a0c680a6ea57f62b623d5f0b91d1e6a6ee7096fede98de3d9->leave($__internal_63f4f354888f186a0c680a6ea57f62b623d5f0b91d1e6a6ee7096fede98de3d9_prof);

        
        $__internal_9808cea7c4063bf8f536f862b79e0337a37905b716eb00e59c90ab448d7a6235->leave($__internal_9808cea7c4063bf8f536f862b79e0337a37905b716eb00e59c90ab448d7a6235_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1fce65afcd1cbbbf550a38ce83ab620152f824e8bb265f5ed99c7e9e4a9798a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fce65afcd1cbbbf550a38ce83ab620152f824e8bb265f5ed99c7e9e4a9798a2->enter($__internal_1fce65afcd1cbbbf550a38ce83ab620152f824e8bb265f5ed99c7e9e4a9798a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a2e4e8eb12130940c5a35949fefda6c2cdf26f0146c192e9f3b67ca06155acc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e4e8eb12130940c5a35949fefda6c2cdf26f0146c192e9f3b67ca06155acc6->enter($__internal_a2e4e8eb12130940c5a35949fefda6c2cdf26f0146c192e9f3b67ca06155acc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a2e4e8eb12130940c5a35949fefda6c2cdf26f0146c192e9f3b67ca06155acc6->leave($__internal_a2e4e8eb12130940c5a35949fefda6c2cdf26f0146c192e9f3b67ca06155acc6_prof);

        
        $__internal_1fce65afcd1cbbbf550a38ce83ab620152f824e8bb265f5ed99c7e9e4a9798a2->leave($__internal_1fce65afcd1cbbbf550a38ce83ab620152f824e8bb265f5ed99c7e9e4a9798a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
