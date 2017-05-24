<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4797223814f9f4baf13dd6b3e4d12709f6698e41d16f53c7b98f05ee42b19e32 extends Twig_Template
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
        $__internal_6905e5489a33a9012ccc54af54ad7468366f91319733340f16ee4319a35d8b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6905e5489a33a9012ccc54af54ad7468366f91319733340f16ee4319a35d8b9f->enter($__internal_6905e5489a33a9012ccc54af54ad7468366f91319733340f16ee4319a35d8b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_089ff1279859c2b59890c7c9eec639a6a6705eafb892fe9911fb9cd6170b34cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089ff1279859c2b59890c7c9eec639a6a6705eafb892fe9911fb9cd6170b34cb->enter($__internal_089ff1279859c2b59890c7c9eec639a6a6705eafb892fe9911fb9cd6170b34cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6905e5489a33a9012ccc54af54ad7468366f91319733340f16ee4319a35d8b9f->leave($__internal_6905e5489a33a9012ccc54af54ad7468366f91319733340f16ee4319a35d8b9f_prof);

        
        $__internal_089ff1279859c2b59890c7c9eec639a6a6705eafb892fe9911fb9cd6170b34cb->leave($__internal_089ff1279859c2b59890c7c9eec639a6a6705eafb892fe9911fb9cd6170b34cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
