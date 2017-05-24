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
        $__internal_090b58ba09151b6922a4249a3b430fcb4a0a5382bf644d58de10521f93b2ddaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090b58ba09151b6922a4249a3b430fcb4a0a5382bf644d58de10521f93b2ddaf->enter($__internal_090b58ba09151b6922a4249a3b430fcb4a0a5382bf644d58de10521f93b2ddaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Default:index.html.twig"));

        $__internal_d7b336694d70fadf1b4ea47756c5e3cae6f06dee41e2ae5af3726c2260f9f624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b336694d70fadf1b4ea47756c5e3cae6f06dee41e2ae5af3726c2260f9f624->enter($__internal_d7b336694d70fadf1b4ea47756c5e3cae6f06dee41e2ae5af3726c2260f9f624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_090b58ba09151b6922a4249a3b430fcb4a0a5382bf644d58de10521f93b2ddaf->leave($__internal_090b58ba09151b6922a4249a3b430fcb4a0a5382bf644d58de10521f93b2ddaf_prof);

        
        $__internal_d7b336694d70fadf1b4ea47756c5e3cae6f06dee41e2ae5af3726c2260f9f624->leave($__internal_d7b336694d70fadf1b4ea47756c5e3cae6f06dee41e2ae5af3726c2260f9f624_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_6155d6532fb8e36c0146d13229d4d71fa95e61b6278218dbf054b5d1ed408630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6155d6532fb8e36c0146d13229d4d71fa95e61b6278218dbf054b5d1ed408630->enter($__internal_6155d6532fb8e36c0146d13229d4d71fa95e61b6278218dbf054b5d1ed408630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df274917e25a68d14eb1ecfe969631a753795a145537a7fd97ae31977b96725d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df274917e25a68d14eb1ecfe969631a753795a145537a7fd97ae31977b96725d->enter($__internal_df274917e25a68d14eb1ecfe969631a753795a145537a7fd97ae31977b96725d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>INDEX</h1>
";
        
        $__internal_df274917e25a68d14eb1ecfe969631a753795a145537a7fd97ae31977b96725d->leave($__internal_df274917e25a68d14eb1ecfe969631a753795a145537a7fd97ae31977b96725d_prof);

        
        $__internal_6155d6532fb8e36c0146d13229d4d71fa95e61b6278218dbf054b5d1ed408630->leave($__internal_6155d6532fb8e36c0146d13229d4d71fa95e61b6278218dbf054b5d1ed408630_prof);

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
