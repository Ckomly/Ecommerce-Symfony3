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
        $__internal_47ab6ff8671c4d92cc8a54dee1eac28e2f1ab792e06479b6d3093c574cfedaf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ab6ff8671c4d92cc8a54dee1eac28e2f1ab792e06479b6d3093c574cfedaf6->enter($__internal_47ab6ff8671c4d92cc8a54dee1eac28e2f1ab792e06479b6d3093c574cfedaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_15dfd34b76ad32f8efaeb06eb3c5d61a5286c7d04e43f98641bb13fafef2078e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15dfd34b76ad32f8efaeb06eb3c5d61a5286c7d04e43f98641bb13fafef2078e->enter($__internal_15dfd34b76ad32f8efaeb06eb3c5d61a5286c7d04e43f98641bb13fafef2078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_47ab6ff8671c4d92cc8a54dee1eac28e2f1ab792e06479b6d3093c574cfedaf6->leave($__internal_47ab6ff8671c4d92cc8a54dee1eac28e2f1ab792e06479b6d3093c574cfedaf6_prof);

        
        $__internal_15dfd34b76ad32f8efaeb06eb3c5d61a5286c7d04e43f98641bb13fafef2078e->leave($__internal_15dfd34b76ad32f8efaeb06eb3c5d61a5286c7d04e43f98641bb13fafef2078e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0f2cee009391b6f24639f88d85f18a2cd318dce2f5d9ad1c7e99226011d61d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f2cee009391b6f24639f88d85f18a2cd318dce2f5d9ad1c7e99226011d61d9->enter($__internal_d0f2cee009391b6f24639f88d85f18a2cd318dce2f5d9ad1c7e99226011d61d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0422682d46ffafb1565bf3e061a5ee0f2d25940295c0e059e1a592e4da3f828c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0422682d46ffafb1565bf3e061a5ee0f2d25940295c0e059e1a592e4da3f828c->enter($__internal_0422682d46ffafb1565bf3e061a5ee0f2d25940295c0e059e1a592e4da3f828c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0422682d46ffafb1565bf3e061a5ee0f2d25940295c0e059e1a592e4da3f828c->leave($__internal_0422682d46ffafb1565bf3e061a5ee0f2d25940295c0e059e1a592e4da3f828c_prof);

        
        $__internal_d0f2cee009391b6f24639f88d85f18a2cd318dce2f5d9ad1c7e99226011d61d9->leave($__internal_d0f2cee009391b6f24639f88d85f18a2cd318dce2f5d9ad1c7e99226011d61d9_prof);

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
