<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3b800c76039893f776d13579b102652f2f9390bd8d7e25474946641ff184e935 extends Twig_Template
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
        $__internal_db4b9724663e4ba4ea5e1dd09c512f9b406e261f64b0fc645fc224b8e99a9a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4b9724663e4ba4ea5e1dd09c512f9b406e261f64b0fc645fc224b8e99a9a3c->enter($__internal_db4b9724663e4ba4ea5e1dd09c512f9b406e261f64b0fc645fc224b8e99a9a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_83a09440498c8b081f1859c6c6de7fada297da53314350694db4be212ffa292a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a09440498c8b081f1859c6c6de7fada297da53314350694db4be212ffa292a->enter($__internal_83a09440498c8b081f1859c6c6de7fada297da53314350694db4be212ffa292a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_db4b9724663e4ba4ea5e1dd09c512f9b406e261f64b0fc645fc224b8e99a9a3c->leave($__internal_db4b9724663e4ba4ea5e1dd09c512f9b406e261f64b0fc645fc224b8e99a9a3c_prof);

        
        $__internal_83a09440498c8b081f1859c6c6de7fada297da53314350694db4be212ffa292a->leave($__internal_83a09440498c8b081f1859c6c6de7fada297da53314350694db4be212ffa292a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
