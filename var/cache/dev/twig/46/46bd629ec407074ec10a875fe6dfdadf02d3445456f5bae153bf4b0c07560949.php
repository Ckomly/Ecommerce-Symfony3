<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28233761c25b14e5d84336a5e171450213fabab5abbcede0a6654649465c66c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28233761c25b14e5d84336a5e171450213fabab5abbcede0a6654649465c66c1->enter($__internal_28233761c25b14e5d84336a5e171450213fabab5abbcede0a6654649465c66c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8a60f8fe9918f053014dc24924331ac2e8f9b976ffc01d2767f422a35b42fcbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a60f8fe9918f053014dc24924331ac2e8f9b976ffc01d2767f422a35b42fcbf->enter($__internal_8a60f8fe9918f053014dc24924331ac2e8f9b976ffc01d2767f422a35b42fcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <div class=\"container\">
          ";
        // line 13
        $this->loadTemplate("layout/navbar.html.twig", "base.html.twig", 13)->display($context);
        // line 14
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "          ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "        </div>
    </body>
</html>
";
        
        $__internal_28233761c25b14e5d84336a5e171450213fabab5abbcede0a6654649465c66c1->leave($__internal_28233761c25b14e5d84336a5e171450213fabab5abbcede0a6654649465c66c1_prof);

        
        $__internal_8a60f8fe9918f053014dc24924331ac2e8f9b976ffc01d2767f422a35b42fcbf->leave($__internal_8a60f8fe9918f053014dc24924331ac2e8f9b976ffc01d2767f422a35b42fcbf_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1de366b03ab9c04f41f91c10b1d450addbb43f177988389c3ce7a3ee6e70637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1de366b03ab9c04f41f91c10b1d450addbb43f177988389c3ce7a3ee6e70637->enter($__internal_f1de366b03ab9c04f41f91c10b1d450addbb43f177988389c3ce7a3ee6e70637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a3f4d955c647eb5dec89dc79236433863822d867f843272fb7b277ed9f1a879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3f4d955c647eb5dec89dc79236433863822d867f843272fb7b277ed9f1a879->enter($__internal_9a3f4d955c647eb5dec89dc79236433863822d867f843272fb7b277ed9f1a879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9a3f4d955c647eb5dec89dc79236433863822d867f843272fb7b277ed9f1a879->leave($__internal_9a3f4d955c647eb5dec89dc79236433863822d867f843272fb7b277ed9f1a879_prof);

        
        $__internal_f1de366b03ab9c04f41f91c10b1d450addbb43f177988389c3ce7a3ee6e70637->leave($__internal_f1de366b03ab9c04f41f91c10b1d450addbb43f177988389c3ce7a3ee6e70637_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cecc89853178b3667b78dec319fea9e4ca94f4fe0ecbd5d4169f0bb99b222273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecc89853178b3667b78dec319fea9e4ca94f4fe0ecbd5d4169f0bb99b222273->enter($__internal_cecc89853178b3667b78dec319fea9e4ca94f4fe0ecbd5d4169f0bb99b222273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c94bc083dead3d00217eaac6563a9ff4c426ac2c0878de612d0f8a4254e794bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94bc083dead3d00217eaac6563a9ff4c426ac2c0878de612d0f8a4254e794bb->enter($__internal_c94bc083dead3d00217eaac6563a9ff4c426ac2c0878de612d0f8a4254e794bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c94bc083dead3d00217eaac6563a9ff4c426ac2c0878de612d0f8a4254e794bb->leave($__internal_c94bc083dead3d00217eaac6563a9ff4c426ac2c0878de612d0f8a4254e794bb_prof);

        
        $__internal_cecc89853178b3667b78dec319fea9e4ca94f4fe0ecbd5d4169f0bb99b222273->leave($__internal_cecc89853178b3667b78dec319fea9e4ca94f4fe0ecbd5d4169f0bb99b222273_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7e01bbe247f868b7ad992108983c85996c26d7c468b971b339312080e3ae629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e01bbe247f868b7ad992108983c85996c26d7c468b971b339312080e3ae629->enter($__internal_c7e01bbe247f868b7ad992108983c85996c26d7c468b971b339312080e3ae629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_576572c97c9c8ae1763ce2c97d82e135ed3f283682e6a6e2e6d969323c242366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576572c97c9c8ae1763ce2c97d82e135ed3f283682e6a6e2e6d969323c242366->enter($__internal_576572c97c9c8ae1763ce2c97d82e135ed3f283682e6a6e2e6d969323c242366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_576572c97c9c8ae1763ce2c97d82e135ed3f283682e6a6e2e6d969323c242366->leave($__internal_576572c97c9c8ae1763ce2c97d82e135ed3f283682e6a6e2e6d969323c242366_prof);

        
        $__internal_c7e01bbe247f868b7ad992108983c85996c26d7c468b971b339312080e3ae629->leave($__internal_c7e01bbe247f868b7ad992108983c85996c26d7c468b971b339312080e3ae629_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_811c3beb015aed535cd2354c6a34b83a6825d1f5c7545b89ab9df9ae44168100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811c3beb015aed535cd2354c6a34b83a6825d1f5c7545b89ab9df9ae44168100->enter($__internal_811c3beb015aed535cd2354c6a34b83a6825d1f5c7545b89ab9df9ae44168100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2de9b43597430b8398eca81c281ceee3242b2e40b6f2090dc248792adf8afd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de9b43597430b8398eca81c281ceee3242b2e40b6f2090dc248792adf8afd03->enter($__internal_2de9b43597430b8398eca81c281ceee3242b2e40b6f2090dc248792adf8afd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2de9b43597430b8398eca81c281ceee3242b2e40b6f2090dc248792adf8afd03->leave($__internal_2de9b43597430b8398eca81c281ceee3242b2e40b6f2090dc248792adf8afd03_prof);

        
        $__internal_811c3beb015aed535cd2354c6a34b83a6825d1f5c7545b89ab9df9ae44168100->leave($__internal_811c3beb015aed535cd2354c6a34b83a6825d1f5c7545b89ab9df9ae44168100_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 15,  110 => 14,  93 => 7,  75 => 6,  62 => 16,  59 => 15,  56 => 14,  54 => 13,  45 => 8,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.css') }}\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <div class=\"container\">
          {% include('layout/navbar.html.twig') %}
          {% block body %}{% endblock %}
          {% block javascripts %}{% endblock %}
        </div>
    </body>
</html>
", "base.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/base.html.twig");
    }
}
