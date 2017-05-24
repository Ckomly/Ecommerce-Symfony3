<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_55a2148693179018a72d00408568915a95616c14e20dcc32f78fcd861d6a1aa1 extends Twig_Template
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
        $__internal_f10bfe4eb8c01b7fe4b02beedba4a998e155d45134ef9a509e1578f00be45635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10bfe4eb8c01b7fe4b02beedba4a998e155d45134ef9a509e1578f00be45635->enter($__internal_f10bfe4eb8c01b7fe4b02beedba4a998e155d45134ef9a509e1578f00be45635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_278c675864b7f65adee3e846321089190536833dbdc64b046e2695daa4cca506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278c675864b7f65adee3e846321089190536833dbdc64b046e2695daa4cca506->enter($__internal_278c675864b7f65adee3e846321089190536833dbdc64b046e2695daa4cca506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f10bfe4eb8c01b7fe4b02beedba4a998e155d45134ef9a509e1578f00be45635->leave($__internal_f10bfe4eb8c01b7fe4b02beedba4a998e155d45134ef9a509e1578f00be45635_prof);

        
        $__internal_278c675864b7f65adee3e846321089190536833dbdc64b046e2695daa4cca506->leave($__internal_278c675864b7f65adee3e846321089190536833dbdc64b046e2695daa4cca506_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
