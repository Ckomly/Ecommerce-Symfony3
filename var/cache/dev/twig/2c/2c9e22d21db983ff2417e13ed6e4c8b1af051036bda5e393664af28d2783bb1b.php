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
        $__internal_3ab66bb1c05b63dd9fa1e3d7368de9b578e2f7c3363ccae00325cce36c1d6a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab66bb1c05b63dd9fa1e3d7368de9b578e2f7c3363ccae00325cce36c1d6a05->enter($__internal_3ab66bb1c05b63dd9fa1e3d7368de9b578e2f7c3363ccae00325cce36c1d6a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b0c7937e46159d94a125ee3273757db0c6805559dfa3db9948c75c7db7ec44a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c7937e46159d94a125ee3273757db0c6805559dfa3db9948c75c7db7ec44a9->enter($__internal_b0c7937e46159d94a125ee3273757db0c6805559dfa3db9948c75c7db7ec44a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3ab66bb1c05b63dd9fa1e3d7368de9b578e2f7c3363ccae00325cce36c1d6a05->leave($__internal_3ab66bb1c05b63dd9fa1e3d7368de9b578e2f7c3363ccae00325cce36c1d6a05_prof);

        
        $__internal_b0c7937e46159d94a125ee3273757db0c6805559dfa3db9948c75c7db7ec44a9->leave($__internal_b0c7937e46159d94a125ee3273757db0c6805559dfa3db9948c75c7db7ec44a9_prof);

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
