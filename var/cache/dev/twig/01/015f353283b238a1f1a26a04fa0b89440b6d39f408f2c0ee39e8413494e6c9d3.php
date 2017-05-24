<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_aaefabb95fdb057edc91b57e65ad07320397beccb8b0c0616689c51bac6073bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17cd40c0be7a99be09ecb1c447f27afc2f7cb9da0b34df914d84bf2a6b2ea451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cd40c0be7a99be09ecb1c447f27afc2f7cb9da0b34df914d84bf2a6b2ea451->enter($__internal_17cd40c0be7a99be09ecb1c447f27afc2f7cb9da0b34df914d84bf2a6b2ea451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_cf06d6c4db2e8e3436db7c6924d8aa477c2d161169a0a2ce38769c37ec9cfb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf06d6c4db2e8e3436db7c6924d8aa477c2d161169a0a2ce38769c37ec9cfb41->enter($__internal_cf06d6c4db2e8e3436db7c6924d8aa477c2d161169a0a2ce38769c37ec9cfb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_17cd40c0be7a99be09ecb1c447f27afc2f7cb9da0b34df914d84bf2a6b2ea451->leave($__internal_17cd40c0be7a99be09ecb1c447f27afc2f7cb9da0b34df914d84bf2a6b2ea451_prof);

        
        $__internal_cf06d6c4db2e8e3436db7c6924d8aa477c2d161169a0a2ce38769c37ec9cfb41->leave($__internal_cf06d6c4db2e8e3436db7c6924d8aa477c2d161169a0a2ce38769c37ec9cfb41_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_17b149e40e8ec8cf27d7842cca1639012d39c2940d933a636b488f4ffc4f69bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b149e40e8ec8cf27d7842cca1639012d39c2940d933a636b488f4ffc4f69bf->enter($__internal_17b149e40e8ec8cf27d7842cca1639012d39c2940d933a636b488f4ffc4f69bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_acb3430dbf5ea7c298e04f7b1f8fcb09b85108dba872c1c9a05b0cfee1c79960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb3430dbf5ea7c298e04f7b1f8fcb09b85108dba872c1c9a05b0cfee1c79960->enter($__internal_acb3430dbf5ea7c298e04f7b1f8fcb09b85108dba872c1c9a05b0cfee1c79960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_acb3430dbf5ea7c298e04f7b1f8fcb09b85108dba872c1c9a05b0cfee1c79960->leave($__internal_acb3430dbf5ea7c298e04f7b1f8fcb09b85108dba872c1c9a05b0cfee1c79960_prof);

        
        $__internal_17b149e40e8ec8cf27d7842cca1639012d39c2940d933a636b488f4ffc4f69bf->leave($__internal_17b149e40e8ec8cf27d7842cca1639012d39c2940d933a636b488f4ffc4f69bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
