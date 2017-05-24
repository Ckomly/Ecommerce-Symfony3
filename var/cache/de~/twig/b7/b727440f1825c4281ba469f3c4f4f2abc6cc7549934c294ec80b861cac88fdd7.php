<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_71135c85904bf810169f521ea4d0867221d786b90dd265c188d9d9c524cb0214 extends Twig_Template
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
        $__internal_d473c50f4b7f5e6d147fa5700d2d9803f3ba1da47d8c1e84721d33b6e49f4376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d473c50f4b7f5e6d147fa5700d2d9803f3ba1da47d8c1e84721d33b6e49f4376->enter($__internal_d473c50f4b7f5e6d147fa5700d2d9803f3ba1da47d8c1e84721d33b6e49f4376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_01bfe9eb30325458a6ecca9f352a2aab76d85756670b5247b2c564d5077cb840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bfe9eb30325458a6ecca9f352a2aab76d85756670b5247b2c564d5077cb840->enter($__internal_01bfe9eb30325458a6ecca9f352a2aab76d85756670b5247b2c564d5077cb840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d473c50f4b7f5e6d147fa5700d2d9803f3ba1da47d8c1e84721d33b6e49f4376->leave($__internal_d473c50f4b7f5e6d147fa5700d2d9803f3ba1da47d8c1e84721d33b6e49f4376_prof);

        
        $__internal_01bfe9eb30325458a6ecca9f352a2aab76d85756670b5247b2c564d5077cb840->leave($__internal_01bfe9eb30325458a6ecca9f352a2aab76d85756670b5247b2c564d5077cb840_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
