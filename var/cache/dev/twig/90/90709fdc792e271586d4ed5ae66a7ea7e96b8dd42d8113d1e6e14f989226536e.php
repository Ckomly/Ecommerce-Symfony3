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
        $__internal_975695eb60072639e33cd37a983071f659ac5b4f1838efe6d502e0af8ac4e291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975695eb60072639e33cd37a983071f659ac5b4f1838efe6d502e0af8ac4e291->enter($__internal_975695eb60072639e33cd37a983071f659ac5b4f1838efe6d502e0af8ac4e291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_34c84e3f88dd5cde66cb447b8283bd8f3b52a15d0e628e245b6d2ce0e58862c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c84e3f88dd5cde66cb447b8283bd8f3b52a15d0e628e245b6d2ce0e58862c1->enter($__internal_34c84e3f88dd5cde66cb447b8283bd8f3b52a15d0e628e245b6d2ce0e58862c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_975695eb60072639e33cd37a983071f659ac5b4f1838efe6d502e0af8ac4e291->leave($__internal_975695eb60072639e33cd37a983071f659ac5b4f1838efe6d502e0af8ac4e291_prof);

        
        $__internal_34c84e3f88dd5cde66cb447b8283bd8f3b52a15d0e628e245b6d2ce0e58862c1->leave($__internal_34c84e3f88dd5cde66cb447b8283bd8f3b52a15d0e628e245b6d2ce0e58862c1_prof);

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
