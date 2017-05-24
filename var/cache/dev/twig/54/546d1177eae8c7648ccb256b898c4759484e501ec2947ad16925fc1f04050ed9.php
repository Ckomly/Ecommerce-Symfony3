<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4cd3c0a952a2a819f5f39c3904ceaf3e68e9f659f876be58dc8bc9275f87ecf5 extends Twig_Template
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
        $__internal_166142d85a8eb8f31ed003861034f1d9f77e46787f533022c0960a534869ddb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166142d85a8eb8f31ed003861034f1d9f77e46787f533022c0960a534869ddb5->enter($__internal_166142d85a8eb8f31ed003861034f1d9f77e46787f533022c0960a534869ddb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_373860313d3dd307f3c7b9c64d7993ec37f1d500f965ea894e6b5d8d73f24aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373860313d3dd307f3c7b9c64d7993ec37f1d500f965ea894e6b5d8d73f24aaa->enter($__internal_373860313d3dd307f3c7b9c64d7993ec37f1d500f965ea894e6b5d8d73f24aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_166142d85a8eb8f31ed003861034f1d9f77e46787f533022c0960a534869ddb5->leave($__internal_166142d85a8eb8f31ed003861034f1d9f77e46787f533022c0960a534869ddb5_prof);

        
        $__internal_373860313d3dd307f3c7b9c64d7993ec37f1d500f965ea894e6b5d8d73f24aaa->leave($__internal_373860313d3dd307f3c7b9c64d7993ec37f1d500f965ea894e6b5d8d73f24aaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
