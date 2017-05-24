<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a17abe4598842f04223445f6098de96f5b1a6347d02254b3bfc5e54c38231fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17abe4598842f04223445f6098de96f5b1a6347d02254b3bfc5e54c38231fcb->enter($__internal_a17abe4598842f04223445f6098de96f5b1a6347d02254b3bfc5e54c38231fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4cc5d976809fa73f6f8051ffe96cb8926d6cd8ec6e9b41f442d3492b5848bb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc5d976809fa73f6f8051ffe96cb8926d6cd8ec6e9b41f442d3492b5848bb05->enter($__internal_4cc5d976809fa73f6f8051ffe96cb8926d6cd8ec6e9b41f442d3492b5848bb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a17abe4598842f04223445f6098de96f5b1a6347d02254b3bfc5e54c38231fcb->leave($__internal_a17abe4598842f04223445f6098de96f5b1a6347d02254b3bfc5e54c38231fcb_prof);

        
        $__internal_4cc5d976809fa73f6f8051ffe96cb8926d6cd8ec6e9b41f442d3492b5848bb05->leave($__internal_4cc5d976809fa73f6f8051ffe96cb8926d6cd8ec6e9b41f442d3492b5848bb05_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3ee43fad9eef577252c62a144c7dd235d2a09101c6edae243f62592f1a7a340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ee43fad9eef577252c62a144c7dd235d2a09101c6edae243f62592f1a7a340->enter($__internal_a3ee43fad9eef577252c62a144c7dd235d2a09101c6edae243f62592f1a7a340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_154b3bf4e378ec8dd235580885ae92df4f8201f6a2bb4b8013c458c811b2aaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154b3bf4e378ec8dd235580885ae92df4f8201f6a2bb4b8013c458c811b2aaa0->enter($__internal_154b3bf4e378ec8dd235580885ae92df4f8201f6a2bb4b8013c458c811b2aaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_154b3bf4e378ec8dd235580885ae92df4f8201f6a2bb4b8013c458c811b2aaa0->leave($__internal_154b3bf4e378ec8dd235580885ae92df4f8201f6a2bb4b8013c458c811b2aaa0_prof);

        
        $__internal_a3ee43fad9eef577252c62a144c7dd235d2a09101c6edae243f62592f1a7a340->leave($__internal_a3ee43fad9eef577252c62a144c7dd235d2a09101c6edae243f62592f1a7a340_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3427e77c7b698bfb2554425d6ab5cd07bd4eef0a5da5c9b62b73643462de7c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3427e77c7b698bfb2554425d6ab5cd07bd4eef0a5da5c9b62b73643462de7c98->enter($__internal_3427e77c7b698bfb2554425d6ab5cd07bd4eef0a5da5c9b62b73643462de7c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d890e7160f862bc0edc5db655bf433e909041576e957898c9fa8328db81cf6d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d890e7160f862bc0edc5db655bf433e909041576e957898c9fa8328db81cf6d6->enter($__internal_d890e7160f862bc0edc5db655bf433e909041576e957898c9fa8328db81cf6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d890e7160f862bc0edc5db655bf433e909041576e957898c9fa8328db81cf6d6->leave($__internal_d890e7160f862bc0edc5db655bf433e909041576e957898c9fa8328db81cf6d6_prof);

        
        $__internal_3427e77c7b698bfb2554425d6ab5cd07bd4eef0a5da5c9b62b73643462de7c98->leave($__internal_3427e77c7b698bfb2554425d6ab5cd07bd4eef0a5da5c9b62b73643462de7c98_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebcf5c2ae253c808303b2693c40b4149b0d82c89ad77bb3e7a4af8f8cfc98531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcf5c2ae253c808303b2693c40b4149b0d82c89ad77bb3e7a4af8f8cfc98531->enter($__internal_ebcf5c2ae253c808303b2693c40b4149b0d82c89ad77bb3e7a4af8f8cfc98531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dbdf556ae132b94f518a745b0bad69490e58792d2c101a5d71e02dab59dbab11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdf556ae132b94f518a745b0bad69490e58792d2c101a5d71e02dab59dbab11->enter($__internal_dbdf556ae132b94f518a745b0bad69490e58792d2c101a5d71e02dab59dbab11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dbdf556ae132b94f518a745b0bad69490e58792d2c101a5d71e02dab59dbab11->leave($__internal_dbdf556ae132b94f518a745b0bad69490e58792d2c101a5d71e02dab59dbab11_prof);

        
        $__internal_ebcf5c2ae253c808303b2693c40b4149b0d82c89ad77bb3e7a4af8f8cfc98531->leave($__internal_ebcf5c2ae253c808303b2693c40b4149b0d82c89ad77bb3e7a4af8f8cfc98531_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
