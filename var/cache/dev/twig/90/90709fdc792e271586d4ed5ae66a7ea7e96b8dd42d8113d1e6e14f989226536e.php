<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e297c640960503a899ae115cebef317122a0fecdcd1671665a4e9527d4b3f59c extends Twig_Template
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
        $__internal_e2e9bbc83a09b77173da5c888eda030a75f6e3df90ee6e2a2fd50879001096a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e9bbc83a09b77173da5c888eda030a75f6e3df90ee6e2a2fd50879001096a4->enter($__internal_e2e9bbc83a09b77173da5c888eda030a75f6e3df90ee6e2a2fd50879001096a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_28d1692166073fc1810a2e58f89725e6ff847bab3b907464194c8f33d0851fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d1692166073fc1810a2e58f89725e6ff847bab3b907464194c8f33d0851fe5->enter($__internal_28d1692166073fc1810a2e58f89725e6ff847bab3b907464194c8f33d0851fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e2e9bbc83a09b77173da5c888eda030a75f6e3df90ee6e2a2fd50879001096a4->leave($__internal_e2e9bbc83a09b77173da5c888eda030a75f6e3df90ee6e2a2fd50879001096a4_prof);

        
        $__internal_28d1692166073fc1810a2e58f89725e6ff847bab3b907464194c8f33d0851fe5->leave($__internal_28d1692166073fc1810a2e58f89725e6ff847bab3b907464194c8f33d0851fe5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
