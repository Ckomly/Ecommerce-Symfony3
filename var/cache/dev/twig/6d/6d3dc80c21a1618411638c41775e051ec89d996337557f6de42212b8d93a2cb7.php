<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_613178b24aef7e1dee0e3cd93f8393d1524d06bae56091fd1630ad3aeb8204b3 extends Twig_Template
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
        $__internal_95d6a048d3f99fe50e6f88b0400f5646476d013b365439aea58d68b017683a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d6a048d3f99fe50e6f88b0400f5646476d013b365439aea58d68b017683a72->enter($__internal_95d6a048d3f99fe50e6f88b0400f5646476d013b365439aea58d68b017683a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_66ad8be3da5f64e11fa98279e96f6d2d0701c98ce8d6bd968dcfe871b7089f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ad8be3da5f64e11fa98279e96f6d2d0701c98ce8d6bd968dcfe871b7089f44->enter($__internal_66ad8be3da5f64e11fa98279e96f6d2d0701c98ce8d6bd968dcfe871b7089f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_95d6a048d3f99fe50e6f88b0400f5646476d013b365439aea58d68b017683a72->leave($__internal_95d6a048d3f99fe50e6f88b0400f5646476d013b365439aea58d68b017683a72_prof);

        
        $__internal_66ad8be3da5f64e11fa98279e96f6d2d0701c98ce8d6bd968dcfe871b7089f44->leave($__internal_66ad8be3da5f64e11fa98279e96f6d2d0701c98ce8d6bd968dcfe871b7089f44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
