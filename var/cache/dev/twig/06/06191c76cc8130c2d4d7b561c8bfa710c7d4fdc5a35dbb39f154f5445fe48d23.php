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
        $__internal_c195187192ced03e98e5e202792746bf263a020a2f30ed97c96f719c29761c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c195187192ced03e98e5e202792746bf263a020a2f30ed97c96f719c29761c83->enter($__internal_c195187192ced03e98e5e202792746bf263a020a2f30ed97c96f719c29761c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_09ad51936095563f66382995552b0a7272ceb24f84cef8b335af5feb55da09a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ad51936095563f66382995552b0a7272ceb24f84cef8b335af5feb55da09a9->enter($__internal_09ad51936095563f66382995552b0a7272ceb24f84cef8b335af5feb55da09a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c195187192ced03e98e5e202792746bf263a020a2f30ed97c96f719c29761c83->leave($__internal_c195187192ced03e98e5e202792746bf263a020a2f30ed97c96f719c29761c83_prof);

        
        $__internal_09ad51936095563f66382995552b0a7272ceb24f84cef8b335af5feb55da09a9->leave($__internal_09ad51936095563f66382995552b0a7272ceb24f84cef8b335af5feb55da09a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1348a4bcccdb35f2e09df5cfadc589e59b2b4eb9005e1709d39c5cd21a744652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1348a4bcccdb35f2e09df5cfadc589e59b2b4eb9005e1709d39c5cd21a744652->enter($__internal_1348a4bcccdb35f2e09df5cfadc589e59b2b4eb9005e1709d39c5cd21a744652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e15278c84bf321df789e3514edd90a0d815572013bd19e76cf3ff6173679fce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15278c84bf321df789e3514edd90a0d815572013bd19e76cf3ff6173679fce8->enter($__internal_e15278c84bf321df789e3514edd90a0d815572013bd19e76cf3ff6173679fce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e15278c84bf321df789e3514edd90a0d815572013bd19e76cf3ff6173679fce8->leave($__internal_e15278c84bf321df789e3514edd90a0d815572013bd19e76cf3ff6173679fce8_prof);

        
        $__internal_1348a4bcccdb35f2e09df5cfadc589e59b2b4eb9005e1709d39c5cd21a744652->leave($__internal_1348a4bcccdb35f2e09df5cfadc589e59b2b4eb9005e1709d39c5cd21a744652_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_72368ffb844ed0072cdcdb1347659362d94e771b870af14c7784ad941793393d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72368ffb844ed0072cdcdb1347659362d94e771b870af14c7784ad941793393d->enter($__internal_72368ffb844ed0072cdcdb1347659362d94e771b870af14c7784ad941793393d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfbcfc5ef9646e9fef69977fbeda6d112908ebe2c69a738a92eec872133c3386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbcfc5ef9646e9fef69977fbeda6d112908ebe2c69a738a92eec872133c3386->enter($__internal_bfbcfc5ef9646e9fef69977fbeda6d112908ebe2c69a738a92eec872133c3386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bfbcfc5ef9646e9fef69977fbeda6d112908ebe2c69a738a92eec872133c3386->leave($__internal_bfbcfc5ef9646e9fef69977fbeda6d112908ebe2c69a738a92eec872133c3386_prof);

        
        $__internal_72368ffb844ed0072cdcdb1347659362d94e771b870af14c7784ad941793393d->leave($__internal_72368ffb844ed0072cdcdb1347659362d94e771b870af14c7784ad941793393d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7c189c36d677749bc5d039cddbedde7ed70b69b455b00051a21d4a5551c1171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c189c36d677749bc5d039cddbedde7ed70b69b455b00051a21d4a5551c1171->enter($__internal_b7c189c36d677749bc5d039cddbedde7ed70b69b455b00051a21d4a5551c1171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c39b84d40912fa9d09bc170a1133237edf5cb41a2ecf04dd9cb0ec8c9bb473f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c39b84d40912fa9d09bc170a1133237edf5cb41a2ecf04dd9cb0ec8c9bb473f->enter($__internal_6c39b84d40912fa9d09bc170a1133237edf5cb41a2ecf04dd9cb0ec8c9bb473f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6c39b84d40912fa9d09bc170a1133237edf5cb41a2ecf04dd9cb0ec8c9bb473f->leave($__internal_6c39b84d40912fa9d09bc170a1133237edf5cb41a2ecf04dd9cb0ec8c9bb473f_prof);

        
        $__internal_b7c189c36d677749bc5d039cddbedde7ed70b69b455b00051a21d4a5551c1171->leave($__internal_b7c189c36d677749bc5d039cddbedde7ed70b69b455b00051a21d4a5551c1171_prof);

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
