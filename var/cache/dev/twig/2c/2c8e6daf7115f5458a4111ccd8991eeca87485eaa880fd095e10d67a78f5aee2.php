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
        $__internal_5ae5613691218fcacb3444229b6a15d01f8f3b44d2b285bfae802fcef831e5af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae5613691218fcacb3444229b6a15d01f8f3b44d2b285bfae802fcef831e5af->enter($__internal_5ae5613691218fcacb3444229b6a15d01f8f3b44d2b285bfae802fcef831e5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c03dc5f743156a2c89bdba1153cc1160cf66153c30df302bb8d6d9b513faba5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03dc5f743156a2c89bdba1153cc1160cf66153c30df302bb8d6d9b513faba5d->enter($__internal_c03dc5f743156a2c89bdba1153cc1160cf66153c30df302bb8d6d9b513faba5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_5ae5613691218fcacb3444229b6a15d01f8f3b44d2b285bfae802fcef831e5af->leave($__internal_5ae5613691218fcacb3444229b6a15d01f8f3b44d2b285bfae802fcef831e5af_prof);

        
        $__internal_c03dc5f743156a2c89bdba1153cc1160cf66153c30df302bb8d6d9b513faba5d->leave($__internal_c03dc5f743156a2c89bdba1153cc1160cf66153c30df302bb8d6d9b513faba5d_prof);

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
