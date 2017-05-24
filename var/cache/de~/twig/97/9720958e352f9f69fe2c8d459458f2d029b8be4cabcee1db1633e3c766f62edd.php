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
        $__internal_adbfece1e6480fa7e8ab651116fa3def71d1f1407d93af2a5773e21c15ea8582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbfece1e6480fa7e8ab651116fa3def71d1f1407d93af2a5773e21c15ea8582->enter($__internal_adbfece1e6480fa7e8ab651116fa3def71d1f1407d93af2a5773e21c15ea8582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3fd2691e1f142d751f5bdd954b5b068de5726bf7524bfba17f8df00981582638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd2691e1f142d751f5bdd954b5b068de5726bf7524bfba17f8df00981582638->enter($__internal_3fd2691e1f142d751f5bdd954b5b068de5726bf7524bfba17f8df00981582638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adbfece1e6480fa7e8ab651116fa3def71d1f1407d93af2a5773e21c15ea8582->leave($__internal_adbfece1e6480fa7e8ab651116fa3def71d1f1407d93af2a5773e21c15ea8582_prof);

        
        $__internal_3fd2691e1f142d751f5bdd954b5b068de5726bf7524bfba17f8df00981582638->leave($__internal_3fd2691e1f142d751f5bdd954b5b068de5726bf7524bfba17f8df00981582638_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34cf96f4de03c5d953e8f0e1ccea21ef55f4f4caffbf2e5c6464b30aa2b8dcae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34cf96f4de03c5d953e8f0e1ccea21ef55f4f4caffbf2e5c6464b30aa2b8dcae->enter($__internal_34cf96f4de03c5d953e8f0e1ccea21ef55f4f4caffbf2e5c6464b30aa2b8dcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_033bcd9534a42e63dbe37f99aed6c2f2e1057a103aec9bf07c144d5f37ba3013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033bcd9534a42e63dbe37f99aed6c2f2e1057a103aec9bf07c144d5f37ba3013->enter($__internal_033bcd9534a42e63dbe37f99aed6c2f2e1057a103aec9bf07c144d5f37ba3013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_033bcd9534a42e63dbe37f99aed6c2f2e1057a103aec9bf07c144d5f37ba3013->leave($__internal_033bcd9534a42e63dbe37f99aed6c2f2e1057a103aec9bf07c144d5f37ba3013_prof);

        
        $__internal_34cf96f4de03c5d953e8f0e1ccea21ef55f4f4caffbf2e5c6464b30aa2b8dcae->leave($__internal_34cf96f4de03c5d953e8f0e1ccea21ef55f4f4caffbf2e5c6464b30aa2b8dcae_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_423130d9a614cff4bc2fe84e04df4e315296aa4fb84dc1ba14d7b4e26ffa50f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423130d9a614cff4bc2fe84e04df4e315296aa4fb84dc1ba14d7b4e26ffa50f7->enter($__internal_423130d9a614cff4bc2fe84e04df4e315296aa4fb84dc1ba14d7b4e26ffa50f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fa8589fe2085a8953d4f4c64dde7fd1963b6a4f5f8d8e2fee0729867e02fe7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8589fe2085a8953d4f4c64dde7fd1963b6a4f5f8d8e2fee0729867e02fe7ea->enter($__internal_fa8589fe2085a8953d4f4c64dde7fd1963b6a4f5f8d8e2fee0729867e02fe7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fa8589fe2085a8953d4f4c64dde7fd1963b6a4f5f8d8e2fee0729867e02fe7ea->leave($__internal_fa8589fe2085a8953d4f4c64dde7fd1963b6a4f5f8d8e2fee0729867e02fe7ea_prof);

        
        $__internal_423130d9a614cff4bc2fe84e04df4e315296aa4fb84dc1ba14d7b4e26ffa50f7->leave($__internal_423130d9a614cff4bc2fe84e04df4e315296aa4fb84dc1ba14d7b4e26ffa50f7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03c18fa00b900cef11c40a74076c375273c0caa1584ab370818946de10aad6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c18fa00b900cef11c40a74076c375273c0caa1584ab370818946de10aad6b8->enter($__internal_03c18fa00b900cef11c40a74076c375273c0caa1584ab370818946de10aad6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6b6fcfc978722ba92dac0c620d3a0ce1c112aff2c7e13ea77e85b932d9b8cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b6fcfc978722ba92dac0c620d3a0ce1c112aff2c7e13ea77e85b932d9b8cf7->enter($__internal_a6b6fcfc978722ba92dac0c620d3a0ce1c112aff2c7e13ea77e85b932d9b8cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a6b6fcfc978722ba92dac0c620d3a0ce1c112aff2c7e13ea77e85b932d9b8cf7->leave($__internal_a6b6fcfc978722ba92dac0c620d3a0ce1c112aff2c7e13ea77e85b932d9b8cf7_prof);

        
        $__internal_03c18fa00b900cef11c40a74076c375273c0caa1584ab370818946de10aad6b8->leave($__internal_03c18fa00b900cef11c40a74076c375273c0caa1584ab370818946de10aad6b8_prof);

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
