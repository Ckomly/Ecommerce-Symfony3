<?php

/* CACommerceBundle:Default:index.html.twig */
class __TwigTemplate_170283fe8dba71e4531c42dc7d9a8ec82841370c9dff1db8cf01e3953b753655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CACommerceBundle:Default:index.html.twig", 1);
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
        $__internal_c3522781958c0d63ba62515cc45824aa1ed457c00ffdc124e27f2c1506d49ba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3522781958c0d63ba62515cc45824aa1ed457c00ffdc124e27f2c1506d49ba3->enter($__internal_c3522781958c0d63ba62515cc45824aa1ed457c00ffdc124e27f2c1506d49ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Default:index.html.twig"));

        $__internal_f81fec3c40197a2f4ec8248acaac8c9eac66d416e8af74ab879af568ba73a417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81fec3c40197a2f4ec8248acaac8c9eac66d416e8af74ab879af568ba73a417->enter($__internal_f81fec3c40197a2f4ec8248acaac8c9eac66d416e8af74ab879af568ba73a417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3522781958c0d63ba62515cc45824aa1ed457c00ffdc124e27f2c1506d49ba3->leave($__internal_c3522781958c0d63ba62515cc45824aa1ed457c00ffdc124e27f2c1506d49ba3_prof);

        
        $__internal_f81fec3c40197a2f4ec8248acaac8c9eac66d416e8af74ab879af568ba73a417->leave($__internal_f81fec3c40197a2f4ec8248acaac8c9eac66d416e8af74ab879af568ba73a417_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd7dbb4466ed4177b2c4449a14cce7af9252df0439c77ed8fc89d81e7c54df64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd7dbb4466ed4177b2c4449a14cce7af9252df0439c77ed8fc89d81e7c54df64->enter($__internal_dd7dbb4466ed4177b2c4449a14cce7af9252df0439c77ed8fc89d81e7c54df64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c6084b19ef51451d5565052c0c9c96b33d1e2da85b27155eca621a64270755c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6084b19ef51451d5565052c0c9c96b33d1e2da85b27155eca621a64270755c8->enter($__internal_c6084b19ef51451d5565052c0c9c96b33d1e2da85b27155eca621a64270755c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>INDEX</h1>
";
        
        $__internal_c6084b19ef51451d5565052c0c9c96b33d1e2da85b27155eca621a64270755c8->leave($__internal_c6084b19ef51451d5565052c0c9c96b33d1e2da85b27155eca621a64270755c8_prof);

        
        $__internal_dd7dbb4466ed4177b2c4449a14cce7af9252df0439c77ed8fc89d81e7c54df64->leave($__internal_dd7dbb4466ed4177b2c4449a14cce7af9252df0439c77ed8fc89d81e7c54df64_prof);

    }

    public function getTemplateName()
    {
        return "CACommerceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
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
<h1>INDEX</h1>
{% endblock %}
", "CACommerceBundle:Default:index.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/src/CA/CommerceBundle/Resources/views/Default/index.html.twig");
    }
}
