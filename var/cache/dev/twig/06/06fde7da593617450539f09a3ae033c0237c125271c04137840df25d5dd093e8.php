<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8a3b45b4f648c0b479f9d055381f3f87f726c7c3165679746d8501eb35ac77d3 extends Twig_Template
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
        $__internal_c5c33d0cd81c60ed7660e7b93dc28baf35df5345a938722b270fcaf2bccbf284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c33d0cd81c60ed7660e7b93dc28baf35df5345a938722b270fcaf2bccbf284->enter($__internal_c5c33d0cd81c60ed7660e7b93dc28baf35df5345a938722b270fcaf2bccbf284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_9f3c1f992130734d770597ccb8479fd23dbb0044d751f2f2e53f1ac4f24a826e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3c1f992130734d770597ccb8479fd23dbb0044d751f2f2e53f1ac4f24a826e->enter($__internal_9f3c1f992130734d770597ccb8479fd23dbb0044d751f2f2e53f1ac4f24a826e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c5c33d0cd81c60ed7660e7b93dc28baf35df5345a938722b270fcaf2bccbf284->leave($__internal_c5c33d0cd81c60ed7660e7b93dc28baf35df5345a938722b270fcaf2bccbf284_prof);

        
        $__internal_9f3c1f992130734d770597ccb8479fd23dbb0044d751f2f2e53f1ac4f24a826e->leave($__internal_9f3c1f992130734d770597ccb8479fd23dbb0044d751f2f2e53f1ac4f24a826e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
