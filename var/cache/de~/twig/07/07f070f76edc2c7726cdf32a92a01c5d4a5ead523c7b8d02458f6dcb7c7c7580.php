<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff91a568cd45297ad6ddeca97ebca6d3330951cbc4769f18119be76f4df36f5c extends Twig_Template
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
        $__internal_995188d4e622f616145b74380315baed79c3db051970b11ee50d6281cfc030d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995188d4e622f616145b74380315baed79c3db051970b11ee50d6281cfc030d3->enter($__internal_995188d4e622f616145b74380315baed79c3db051970b11ee50d6281cfc030d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5616262788148fc17dec41d4fdb473816978c043148543d2b84015a90c73e0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5616262788148fc17dec41d4fdb473816978c043148543d2b84015a90c73e0a5->enter($__internal_5616262788148fc17dec41d4fdb473816978c043148543d2b84015a90c73e0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_995188d4e622f616145b74380315baed79c3db051970b11ee50d6281cfc030d3->leave($__internal_995188d4e622f616145b74380315baed79c3db051970b11ee50d6281cfc030d3_prof);

        
        $__internal_5616262788148fc17dec41d4fdb473816978c043148543d2b84015a90c73e0a5->leave($__internal_5616262788148fc17dec41d4fdb473816978c043148543d2b84015a90c73e0a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
