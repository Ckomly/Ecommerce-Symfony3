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
        $__internal_5638ab4ef77942579153d695e016d0e65910df0c4333f677e634bb386970d9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5638ab4ef77942579153d695e016d0e65910df0c4333f677e634bb386970d9bd->enter($__internal_5638ab4ef77942579153d695e016d0e65910df0c4333f677e634bb386970d9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_55c3cb8dbbe19545050dddeaa82221c04bed1dfb587d6fbe3946ed857409474e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c3cb8dbbe19545050dddeaa82221c04bed1dfb587d6fbe3946ed857409474e->enter($__internal_55c3cb8dbbe19545050dddeaa82221c04bed1dfb587d6fbe3946ed857409474e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5638ab4ef77942579153d695e016d0e65910df0c4333f677e634bb386970d9bd->leave($__internal_5638ab4ef77942579153d695e016d0e65910df0c4333f677e634bb386970d9bd_prof);

        
        $__internal_55c3cb8dbbe19545050dddeaa82221c04bed1dfb587d6fbe3946ed857409474e->leave($__internal_55c3cb8dbbe19545050dddeaa82221c04bed1dfb587d6fbe3946ed857409474e_prof);

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
