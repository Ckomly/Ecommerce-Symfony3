<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ed598f64c3eaa249ab8e1cd012263774744fd2aae7a0bb9f4357007b645c5fd8 extends Twig_Template
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
        $__internal_936563e709138230e0ab7b0b4888cce790e8595e9624512c5017782761b14926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936563e709138230e0ab7b0b4888cce790e8595e9624512c5017782761b14926->enter($__internal_936563e709138230e0ab7b0b4888cce790e8595e9624512c5017782761b14926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7d2e966e02b646b5f13a8a4dfe1b36bce76007e7f7f43cd75d6347c5756aae22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2e966e02b646b5f13a8a4dfe1b36bce76007e7f7f43cd75d6347c5756aae22->enter($__internal_7d2e966e02b646b5f13a8a4dfe1b36bce76007e7f7f43cd75d6347c5756aae22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_936563e709138230e0ab7b0b4888cce790e8595e9624512c5017782761b14926->leave($__internal_936563e709138230e0ab7b0b4888cce790e8595e9624512c5017782761b14926_prof);

        
        $__internal_7d2e966e02b646b5f13a8a4dfe1b36bce76007e7f7f43cd75d6347c5756aae22->leave($__internal_7d2e966e02b646b5f13a8a4dfe1b36bce76007e7f7f43cd75d6347c5756aae22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
