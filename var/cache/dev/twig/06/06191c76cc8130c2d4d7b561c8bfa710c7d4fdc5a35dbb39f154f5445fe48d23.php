<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85b2ccb6e82e3a87665006b7528b56159c640c36cd53ed73c26fdcf33a8718d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89b27666ae264cd55fbcd6ac02d6b6126243dc0933bb01cc3bcc18253401ab7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b27666ae264cd55fbcd6ac02d6b6126243dc0933bb01cc3bcc18253401ab7d->enter($__internal_89b27666ae264cd55fbcd6ac02d6b6126243dc0933bb01cc3bcc18253401ab7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7a84420e4f62478c916200fe2a2858b26ff31dcf4e4d3723bb92272521167b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a84420e4f62478c916200fe2a2858b26ff31dcf4e4d3723bb92272521167b48->enter($__internal_7a84420e4f62478c916200fe2a2858b26ff31dcf4e4d3723bb92272521167b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89b27666ae264cd55fbcd6ac02d6b6126243dc0933bb01cc3bcc18253401ab7d->leave($__internal_89b27666ae264cd55fbcd6ac02d6b6126243dc0933bb01cc3bcc18253401ab7d_prof);

        
        $__internal_7a84420e4f62478c916200fe2a2858b26ff31dcf4e4d3723bb92272521167b48->leave($__internal_7a84420e4f62478c916200fe2a2858b26ff31dcf4e4d3723bb92272521167b48_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4fc0b1560d687b07e63f14d379d8e246a177321058397dcffe0394a147c5762f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc0b1560d687b07e63f14d379d8e246a177321058397dcffe0394a147c5762f->enter($__internal_4fc0b1560d687b07e63f14d379d8e246a177321058397dcffe0394a147c5762f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d09f6656e7f299c3c91619bf4db0dfb7b3fefb4c877dc88d689e9ea32927757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d09f6656e7f299c3c91619bf4db0dfb7b3fefb4c877dc88d689e9ea32927757->enter($__internal_6d09f6656e7f299c3c91619bf4db0dfb7b3fefb4c877dc88d689e9ea32927757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6d09f6656e7f299c3c91619bf4db0dfb7b3fefb4c877dc88d689e9ea32927757->leave($__internal_6d09f6656e7f299c3c91619bf4db0dfb7b3fefb4c877dc88d689e9ea32927757_prof);

        
        $__internal_4fc0b1560d687b07e63f14d379d8e246a177321058397dcffe0394a147c5762f->leave($__internal_4fc0b1560d687b07e63f14d379d8e246a177321058397dcffe0394a147c5762f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba7696c0533793369325bf1e94c29f0bb7e2cc019badbf314ce884dd70c35c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7696c0533793369325bf1e94c29f0bb7e2cc019badbf314ce884dd70c35c7a->enter($__internal_ba7696c0533793369325bf1e94c29f0bb7e2cc019badbf314ce884dd70c35c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_658b0f92c9cd58277ef3359443c7d7b1f35666e94260c21d8a95b13a201b4d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658b0f92c9cd58277ef3359443c7d7b1f35666e94260c21d8a95b13a201b4d0d->enter($__internal_658b0f92c9cd58277ef3359443c7d7b1f35666e94260c21d8a95b13a201b4d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_658b0f92c9cd58277ef3359443c7d7b1f35666e94260c21d8a95b13a201b4d0d->leave($__internal_658b0f92c9cd58277ef3359443c7d7b1f35666e94260c21d8a95b13a201b4d0d_prof);

        
        $__internal_ba7696c0533793369325bf1e94c29f0bb7e2cc019badbf314ce884dd70c35c7a->leave($__internal_ba7696c0533793369325bf1e94c29f0bb7e2cc019badbf314ce884dd70c35c7a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7130454178138a5d5c21e8d54aa2c12f9ae3c84802f4add2d136d3bc5fd51b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7130454178138a5d5c21e8d54aa2c12f9ae3c84802f4add2d136d3bc5fd51b51->enter($__internal_7130454178138a5d5c21e8d54aa2c12f9ae3c84802f4add2d136d3bc5fd51b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c2b31ebe47afb25366a8f129b3f6dc40f75b98aad3e33dbf7ed71c4130bdae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2b31ebe47afb25366a8f129b3f6dc40f75b98aad3e33dbf7ed71c4130bdae7->enter($__internal_9c2b31ebe47afb25366a8f129b3f6dc40f75b98aad3e33dbf7ed71c4130bdae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9c2b31ebe47afb25366a8f129b3f6dc40f75b98aad3e33dbf7ed71c4130bdae7->leave($__internal_9c2b31ebe47afb25366a8f129b3f6dc40f75b98aad3e33dbf7ed71c4130bdae7_prof);

        
        $__internal_7130454178138a5d5c21e8d54aa2c12f9ae3c84802f4add2d136d3bc5fd51b51->leave($__internal_7130454178138a5d5c21e8d54aa2c12f9ae3c84802f4add2d136d3bc5fd51b51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
