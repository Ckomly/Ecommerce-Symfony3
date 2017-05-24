<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_501d28dc35d0a9b0ae7d99ecd9c7f941fdfb54f813d14dd33122c1bdc5b0b10d extends Twig_Template
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
        $__internal_10fc32c0de150af4e3f7a9edbed480d5e4dc94ce614cb06389e4f79379a2f809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10fc32c0de150af4e3f7a9edbed480d5e4dc94ce614cb06389e4f79379a2f809->enter($__internal_10fc32c0de150af4e3f7a9edbed480d5e4dc94ce614cb06389e4f79379a2f809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7113982c0d2373bce4b8eb5aa5a055a2313ed4b2ecc8d4cc593ad9c7c91cfc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7113982c0d2373bce4b8eb5aa5a055a2313ed4b2ecc8d4cc593ad9c7c91cfc9a->enter($__internal_7113982c0d2373bce4b8eb5aa5a055a2313ed4b2ecc8d4cc593ad9c7c91cfc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_10fc32c0de150af4e3f7a9edbed480d5e4dc94ce614cb06389e4f79379a2f809->leave($__internal_10fc32c0de150af4e3f7a9edbed480d5e4dc94ce614cb06389e4f79379a2f809_prof);

        
        $__internal_7113982c0d2373bce4b8eb5aa5a055a2313ed4b2ecc8d4cc593ad9c7c91cfc9a->leave($__internal_7113982c0d2373bce4b8eb5aa5a055a2313ed4b2ecc8d4cc593ad9c7c91cfc9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
