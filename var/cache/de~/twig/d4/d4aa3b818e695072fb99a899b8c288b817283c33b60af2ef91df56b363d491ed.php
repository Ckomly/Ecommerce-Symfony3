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
        $__internal_da5bc68d3a1ca9c54617db682910eb447c757cbd18396fc300594b02cec8cdc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5bc68d3a1ca9c54617db682910eb447c757cbd18396fc300594b02cec8cdc0->enter($__internal_da5bc68d3a1ca9c54617db682910eb447c757cbd18396fc300594b02cec8cdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d5407e421a69a53fb49c19f6ee205725323285e066242bb01e6a7ead7c8c57a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5407e421a69a53fb49c19f6ee205725323285e066242bb01e6a7ead7c8c57a2->enter($__internal_d5407e421a69a53fb49c19f6ee205725323285e066242bb01e6a7ead7c8c57a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da5bc68d3a1ca9c54617db682910eb447c757cbd18396fc300594b02cec8cdc0->leave($__internal_da5bc68d3a1ca9c54617db682910eb447c757cbd18396fc300594b02cec8cdc0_prof);

        
        $__internal_d5407e421a69a53fb49c19f6ee205725323285e066242bb01e6a7ead7c8c57a2->leave($__internal_d5407e421a69a53fb49c19f6ee205725323285e066242bb01e6a7ead7c8c57a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cba8b6d94b8ab149396aefac366525a6c38ca65c34c9240f485bd66a1ea29a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba8b6d94b8ab149396aefac366525a6c38ca65c34c9240f485bd66a1ea29a5d->enter($__internal_cba8b6d94b8ab149396aefac366525a6c38ca65c34c9240f485bd66a1ea29a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06d98a1ecd2eb95bb31e9b9b37aadcbee9cc5a5124c7cc63afa4dd908df3c963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d98a1ecd2eb95bb31e9b9b37aadcbee9cc5a5124c7cc63afa4dd908df3c963->enter($__internal_06d98a1ecd2eb95bb31e9b9b37aadcbee9cc5a5124c7cc63afa4dd908df3c963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_06d98a1ecd2eb95bb31e9b9b37aadcbee9cc5a5124c7cc63afa4dd908df3c963->leave($__internal_06d98a1ecd2eb95bb31e9b9b37aadcbee9cc5a5124c7cc63afa4dd908df3c963_prof);

        
        $__internal_cba8b6d94b8ab149396aefac366525a6c38ca65c34c9240f485bd66a1ea29a5d->leave($__internal_cba8b6d94b8ab149396aefac366525a6c38ca65c34c9240f485bd66a1ea29a5d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b5b8717ba683cd8ec64b7ecf92f07384121a5a3e5f640431acb5cc97b75ff56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5b8717ba683cd8ec64b7ecf92f07384121a5a3e5f640431acb5cc97b75ff56->enter($__internal_4b5b8717ba683cd8ec64b7ecf92f07384121a5a3e5f640431acb5cc97b75ff56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7915ff4c0f0a91914fd7db349b157d52b6143f9e909b210ec3f7dfd15e0edb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7915ff4c0f0a91914fd7db349b157d52b6143f9e909b210ec3f7dfd15e0edb56->enter($__internal_7915ff4c0f0a91914fd7db349b157d52b6143f9e909b210ec3f7dfd15e0edb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7915ff4c0f0a91914fd7db349b157d52b6143f9e909b210ec3f7dfd15e0edb56->leave($__internal_7915ff4c0f0a91914fd7db349b157d52b6143f9e909b210ec3f7dfd15e0edb56_prof);

        
        $__internal_4b5b8717ba683cd8ec64b7ecf92f07384121a5a3e5f640431acb5cc97b75ff56->leave($__internal_4b5b8717ba683cd8ec64b7ecf92f07384121a5a3e5f640431acb5cc97b75ff56_prof);

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
