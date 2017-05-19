<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_87c54b94642b5acb5f8392769c9f7cda27b8679021e0bbdc2603da56cb6339b7 extends Twig_Template
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
        $__internal_8aa3a28cfd4dc5578eb0c5ab07199cc174fcbc3d44d6c924bedbc6d9f62ec708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa3a28cfd4dc5578eb0c5ab07199cc174fcbc3d44d6c924bedbc6d9f62ec708->enter($__internal_8aa3a28cfd4dc5578eb0c5ab07199cc174fcbc3d44d6c924bedbc6d9f62ec708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_aebac5acaacaca7c44f60d650faf36e369fb8df0ae6498f06c21c9c760765938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebac5acaacaca7c44f60d650faf36e369fb8df0ae6498f06c21c9c760765938->enter($__internal_aebac5acaacaca7c44f60d650faf36e369fb8df0ae6498f06c21c9c760765938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8aa3a28cfd4dc5578eb0c5ab07199cc174fcbc3d44d6c924bedbc6d9f62ec708->leave($__internal_8aa3a28cfd4dc5578eb0c5ab07199cc174fcbc3d44d6c924bedbc6d9f62ec708_prof);

        
        $__internal_aebac5acaacaca7c44f60d650faf36e369fb8df0ae6498f06c21c9c760765938->leave($__internal_aebac5acaacaca7c44f60d650faf36e369fb8df0ae6498f06c21c9c760765938_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
