<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_73735ef2de69645ebcdeac65c950fbb0f088f50adae5df3c40ef4d9100a786c6 extends Twig_Template
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
        $__internal_edef7a4892d2e3faacf8c73f1c218972316d229b4c1c06819041b1f94490908e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edef7a4892d2e3faacf8c73f1c218972316d229b4c1c06819041b1f94490908e->enter($__internal_edef7a4892d2e3faacf8c73f1c218972316d229b4c1c06819041b1f94490908e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_a564a94970f063e6c5d2874343c9d5219b6fe013b20bfce2eede233545f580ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a564a94970f063e6c5d2874343c9d5219b6fe013b20bfce2eede233545f580ed->enter($__internal_a564a94970f063e6c5d2874343c9d5219b6fe013b20bfce2eede233545f580ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_edef7a4892d2e3faacf8c73f1c218972316d229b4c1c06819041b1f94490908e->leave($__internal_edef7a4892d2e3faacf8c73f1c218972316d229b4c1c06819041b1f94490908e_prof);

        
        $__internal_a564a94970f063e6c5d2874343c9d5219b6fe013b20bfce2eede233545f580ed->leave($__internal_a564a94970f063e6c5d2874343c9d5219b6fe013b20bfce2eede233545f580ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
