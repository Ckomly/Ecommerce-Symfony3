<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_67641477698b6eea2e6bbfd3a74b45911356d91d77869b652912de882954c17f extends Twig_Template
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
        $__internal_3045a21739918463868b5933a06b99655007ceb908e67a3ae3bfe663e193faf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3045a21739918463868b5933a06b99655007ceb908e67a3ae3bfe663e193faf4->enter($__internal_3045a21739918463868b5933a06b99655007ceb908e67a3ae3bfe663e193faf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_5ef5224dab59bc428aa377751458a60117e2870292188a7542097eb081e0d3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef5224dab59bc428aa377751458a60117e2870292188a7542097eb081e0d3d4->enter($__internal_5ef5224dab59bc428aa377751458a60117e2870292188a7542097eb081e0d3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3045a21739918463868b5933a06b99655007ceb908e67a3ae3bfe663e193faf4->leave($__internal_3045a21739918463868b5933a06b99655007ceb908e67a3ae3bfe663e193faf4_prof);

        
        $__internal_5ef5224dab59bc428aa377751458a60117e2870292188a7542097eb081e0d3d4->leave($__internal_5ef5224dab59bc428aa377751458a60117e2870292188a7542097eb081e0d3d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
