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
        $__internal_0b04a8cec0fc08ba36b17c960b894812e9c3f7ca5ea199e61a90cec4d10f28e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b04a8cec0fc08ba36b17c960b894812e9c3f7ca5ea199e61a90cec4d10f28e4->enter($__internal_0b04a8cec0fc08ba36b17c960b894812e9c3f7ca5ea199e61a90cec4d10f28e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ecc11c351bf4c51e66addd11cf738642df4c2087d8306da68f31ab4fa511a98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc11c351bf4c51e66addd11cf738642df4c2087d8306da68f31ab4fa511a98f->enter($__internal_ecc11c351bf4c51e66addd11cf738642df4c2087d8306da68f31ab4fa511a98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0b04a8cec0fc08ba36b17c960b894812e9c3f7ca5ea199e61a90cec4d10f28e4->leave($__internal_0b04a8cec0fc08ba36b17c960b894812e9c3f7ca5ea199e61a90cec4d10f28e4_prof);

        
        $__internal_ecc11c351bf4c51e66addd11cf738642df4c2087d8306da68f31ab4fa511a98f->leave($__internal_ecc11c351bf4c51e66addd11cf738642df4c2087d8306da68f31ab4fa511a98f_prof);

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
