<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ee860a2cff957446f4e9e2481079c3f6a949a8e6a353099fa77fd7770c2b433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ad501593a528e7287641b9b2e5fa90d24e9e1034f2fb261a62ea3c7ea58d2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad501593a528e7287641b9b2e5fa90d24e9e1034f2fb261a62ea3c7ea58d2f4->enter($__internal_7ad501593a528e7287641b9b2e5fa90d24e9e1034f2fb261a62ea3c7ea58d2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7715c726258cbc1f5ca825bee55cc5ca73eb81bda266024c21b3e0006c320f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7715c726258cbc1f5ca825bee55cc5ca73eb81bda266024c21b3e0006c320f9b->enter($__internal_7715c726258cbc1f5ca825bee55cc5ca73eb81bda266024c21b3e0006c320f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7ad501593a528e7287641b9b2e5fa90d24e9e1034f2fb261a62ea3c7ea58d2f4->leave($__internal_7ad501593a528e7287641b9b2e5fa90d24e9e1034f2fb261a62ea3c7ea58d2f4_prof);

        
        $__internal_7715c726258cbc1f5ca825bee55cc5ca73eb81bda266024c21b3e0006c320f9b->leave($__internal_7715c726258cbc1f5ca825bee55cc5ca73eb81bda266024c21b3e0006c320f9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
