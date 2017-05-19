<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d04edcbb07950ac0cb4bea09bdded90c5d65a63a3e0c5df87d22b56839c447b8 extends Twig_Template
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
        $__internal_38779fa68ccd5dd5dbfd879ec0e3f53f0e132c97de15c8073fb0143cd95e9712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38779fa68ccd5dd5dbfd879ec0e3f53f0e132c97de15c8073fb0143cd95e9712->enter($__internal_38779fa68ccd5dd5dbfd879ec0e3f53f0e132c97de15c8073fb0143cd95e9712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_3f837bfa75c6c99ce16e9eca629c3c26d7733c6d91f55084bebd404d4db63c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f837bfa75c6c99ce16e9eca629c3c26d7733c6d91f55084bebd404d4db63c8f->enter($__internal_3f837bfa75c6c99ce16e9eca629c3c26d7733c6d91f55084bebd404d4db63c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_38779fa68ccd5dd5dbfd879ec0e3f53f0e132c97de15c8073fb0143cd95e9712->leave($__internal_38779fa68ccd5dd5dbfd879ec0e3f53f0e132c97de15c8073fb0143cd95e9712_prof);

        
        $__internal_3f837bfa75c6c99ce16e9eca629c3c26d7733c6d91f55084bebd404d4db63c8f->leave($__internal_3f837bfa75c6c99ce16e9eca629c3c26d7733c6d91f55084bebd404d4db63c8f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
