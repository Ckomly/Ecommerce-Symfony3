<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_33d244f06e3597a4611798c3ebdde8e315ef10d0cb27077d0c8e708c948f75a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6387b227ebdd5130c975dbca230f6895265ac248762f2a1577ddb2bcf78de3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6387b227ebdd5130c975dbca230f6895265ac248762f2a1577ddb2bcf78de3a->enter($__internal_b6387b227ebdd5130c975dbca230f6895265ac248762f2a1577ddb2bcf78de3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_000d5817da3eb9d0f670ba4f90f1a2b424d2cb9ece467f9cea9a26ec230da337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000d5817da3eb9d0f670ba4f90f1a2b424d2cb9ece467f9cea9a26ec230da337->enter($__internal_000d5817da3eb9d0f670ba4f90f1a2b424d2cb9ece467f9cea9a26ec230da337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6387b227ebdd5130c975dbca230f6895265ac248762f2a1577ddb2bcf78de3a->leave($__internal_b6387b227ebdd5130c975dbca230f6895265ac248762f2a1577ddb2bcf78de3a_prof);

        
        $__internal_000d5817da3eb9d0f670ba4f90f1a2b424d2cb9ece467f9cea9a26ec230da337->leave($__internal_000d5817da3eb9d0f670ba4f90f1a2b424d2cb9ece467f9cea9a26ec230da337_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_057e7184eb9896a5ba5533d3b7fd84e2e05ded13ad2357f2a09dfc8a5f3cbad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057e7184eb9896a5ba5533d3b7fd84e2e05ded13ad2357f2a09dfc8a5f3cbad9->enter($__internal_057e7184eb9896a5ba5533d3b7fd84e2e05ded13ad2357f2a09dfc8a5f3cbad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_358fd4eb3bf5a872d9c4565a3dd0e5b571a0fa1c522e50e481ea05eb2a2a28a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358fd4eb3bf5a872d9c4565a3dd0e5b571a0fa1c522e50e481ea05eb2a2a28a4->enter($__internal_358fd4eb3bf5a872d9c4565a3dd0e5b571a0fa1c522e50e481ea05eb2a2a28a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_358fd4eb3bf5a872d9c4565a3dd0e5b571a0fa1c522e50e481ea05eb2a2a28a4->leave($__internal_358fd4eb3bf5a872d9c4565a3dd0e5b571a0fa1c522e50e481ea05eb2a2a28a4_prof);

        
        $__internal_057e7184eb9896a5ba5533d3b7fd84e2e05ded13ad2357f2a09dfc8a5f3cbad9->leave($__internal_057e7184eb9896a5ba5533d3b7fd84e2e05ded13ad2357f2a09dfc8a5f3cbad9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
