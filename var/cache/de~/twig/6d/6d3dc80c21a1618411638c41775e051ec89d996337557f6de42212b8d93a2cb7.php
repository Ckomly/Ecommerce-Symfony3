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
        $__internal_bda2fb7cf46ac28a03d4b09e2b3102ed9a4d3692a2ca89e21169acf08d5f765f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda2fb7cf46ac28a03d4b09e2b3102ed9a4d3692a2ca89e21169acf08d5f765f->enter($__internal_bda2fb7cf46ac28a03d4b09e2b3102ed9a4d3692a2ca89e21169acf08d5f765f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_25ab837d3bdb016ffb05a9a3ef1459a79d071f0b695b12f4536b526df149185f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ab837d3bdb016ffb05a9a3ef1459a79d071f0b695b12f4536b526df149185f->enter($__internal_25ab837d3bdb016ffb05a9a3ef1459a79d071f0b695b12f4536b526df149185f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_bda2fb7cf46ac28a03d4b09e2b3102ed9a4d3692a2ca89e21169acf08d5f765f->leave($__internal_bda2fb7cf46ac28a03d4b09e2b3102ed9a4d3692a2ca89e21169acf08d5f765f_prof);

        
        $__internal_25ab837d3bdb016ffb05a9a3ef1459a79d071f0b695b12f4536b526df149185f->leave($__internal_25ab837d3bdb016ffb05a9a3ef1459a79d071f0b695b12f4536b526df149185f_prof);

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
