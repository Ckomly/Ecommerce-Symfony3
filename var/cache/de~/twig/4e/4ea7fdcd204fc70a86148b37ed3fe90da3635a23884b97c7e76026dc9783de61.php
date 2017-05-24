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
        $__internal_79a435bdc08588dfbe01f44f8438acf7de4af0cf42507696daccee2f612accfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a435bdc08588dfbe01f44f8438acf7de4af0cf42507696daccee2f612accfd->enter($__internal_79a435bdc08588dfbe01f44f8438acf7de4af0cf42507696daccee2f612accfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_652d8e6b4b9ff05137007466d869e66a8f1d5db0401df9dc98e17bccfa27f4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652d8e6b4b9ff05137007466d869e66a8f1d5db0401df9dc98e17bccfa27f4dd->enter($__internal_652d8e6b4b9ff05137007466d869e66a8f1d5db0401df9dc98e17bccfa27f4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_79a435bdc08588dfbe01f44f8438acf7de4af0cf42507696daccee2f612accfd->leave($__internal_79a435bdc08588dfbe01f44f8438acf7de4af0cf42507696daccee2f612accfd_prof);

        
        $__internal_652d8e6b4b9ff05137007466d869e66a8f1d5db0401df9dc98e17bccfa27f4dd->leave($__internal_652d8e6b4b9ff05137007466d869e66a8f1d5db0401df9dc98e17bccfa27f4dd_prof);

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
