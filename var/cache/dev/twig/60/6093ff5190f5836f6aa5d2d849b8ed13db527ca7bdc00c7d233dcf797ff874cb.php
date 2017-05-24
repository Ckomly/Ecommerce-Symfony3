<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d9bc5a1bb8762ed25834758f597841d3eaf69286b6a4035a4c51c908446a74e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_fc13f4964a53a06b00eb7b1f83c56405ab742a734ba9f99c12c7d1f4f527f7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc13f4964a53a06b00eb7b1f83c56405ab742a734ba9f99c12c7d1f4f527f7fb->enter($__internal_fc13f4964a53a06b00eb7b1f83c56405ab742a734ba9f99c12c7d1f4f527f7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_bce80353adbcaa4eb3d9809b8371785a14fc841e01fb098abaa6559c85848611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce80353adbcaa4eb3d9809b8371785a14fc841e01fb098abaa6559c85848611->enter($__internal_bce80353adbcaa4eb3d9809b8371785a14fc841e01fb098abaa6559c85848611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc13f4964a53a06b00eb7b1f83c56405ab742a734ba9f99c12c7d1f4f527f7fb->leave($__internal_fc13f4964a53a06b00eb7b1f83c56405ab742a734ba9f99c12c7d1f4f527f7fb_prof);

        
        $__internal_bce80353adbcaa4eb3d9809b8371785a14fc841e01fb098abaa6559c85848611->leave($__internal_bce80353adbcaa4eb3d9809b8371785a14fc841e01fb098abaa6559c85848611_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_285c5bbe701b5659d546bf2b0db4beb3ec151494f59bc251868ee6510266e876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285c5bbe701b5659d546bf2b0db4beb3ec151494f59bc251868ee6510266e876->enter($__internal_285c5bbe701b5659d546bf2b0db4beb3ec151494f59bc251868ee6510266e876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_5b04fccd728b3149ff9151c3d9532414b6f4935d9423ffbcef9aee7bee59a171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b04fccd728b3149ff9151c3d9532414b6f4935d9423ffbcef9aee7bee59a171->enter($__internal_5b04fccd728b3149ff9151c3d9532414b6f4935d9423ffbcef9aee7bee59a171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_5b04fccd728b3149ff9151c3d9532414b6f4935d9423ffbcef9aee7bee59a171->leave($__internal_5b04fccd728b3149ff9151c3d9532414b6f4935d9423ffbcef9aee7bee59a171_prof);

        
        $__internal_285c5bbe701b5659d546bf2b0db4beb3ec151494f59bc251868ee6510266e876->leave($__internal_285c5bbe701b5659d546bf2b0db4beb3ec151494f59bc251868ee6510266e876_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_601fdcaef288683ef27984e34158b6ad0a881bdb775b4336ec2b264931b697a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601fdcaef288683ef27984e34158b6ad0a881bdb775b4336ec2b264931b697a6->enter($__internal_601fdcaef288683ef27984e34158b6ad0a881bdb775b4336ec2b264931b697a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_229c84cd45b4a3ec96bd25670a2ee594963867843f2e0c9f76aa2460d533c9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229c84cd45b4a3ec96bd25670a2ee594963867843f2e0c9f76aa2460d533c9e8->enter($__internal_229c84cd45b4a3ec96bd25670a2ee594963867843f2e0c9f76aa2460d533c9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_229c84cd45b4a3ec96bd25670a2ee594963867843f2e0c9f76aa2460d533c9e8->leave($__internal_229c84cd45b4a3ec96bd25670a2ee594963867843f2e0c9f76aa2460d533c9e8_prof);

        
        $__internal_601fdcaef288683ef27984e34158b6ad0a881bdb775b4336ec2b264931b697a6->leave($__internal_601fdcaef288683ef27984e34158b6ad0a881bdb775b4336ec2b264931b697a6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
