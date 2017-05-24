<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_91a8934b45f9944e6ad04de6aaf89fffee96696656f72c4601847bdc8ca26d04 extends Twig_Template
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
        $__internal_f65a26e4bbf944a0fd5b5edc9be201261693255ef542a3af2adc3976376e072e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65a26e4bbf944a0fd5b5edc9be201261693255ef542a3af2adc3976376e072e->enter($__internal_f65a26e4bbf944a0fd5b5edc9be201261693255ef542a3af2adc3976376e072e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ec2214556bf9382d2c8d3891cbb556d57868ec5b7f775a443a1b335a7f120ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2214556bf9382d2c8d3891cbb556d57868ec5b7f775a443a1b335a7f120ead->enter($__internal_ec2214556bf9382d2c8d3891cbb556d57868ec5b7f775a443a1b335a7f120ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f65a26e4bbf944a0fd5b5edc9be201261693255ef542a3af2adc3976376e072e->leave($__internal_f65a26e4bbf944a0fd5b5edc9be201261693255ef542a3af2adc3976376e072e_prof);

        
        $__internal_ec2214556bf9382d2c8d3891cbb556d57868ec5b7f775a443a1b335a7f120ead->leave($__internal_ec2214556bf9382d2c8d3891cbb556d57868ec5b7f775a443a1b335a7f120ead_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
