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
        $__internal_554b97b4e672a32f61724fa4b871805ea0a84a4a04d5a95c5f8f644ebe74a161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554b97b4e672a32f61724fa4b871805ea0a84a4a04d5a95c5f8f644ebe74a161->enter($__internal_554b97b4e672a32f61724fa4b871805ea0a84a4a04d5a95c5f8f644ebe74a161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b1e830f051753b08a26cacf118a29bf17ff2d88da2bfd1d91e23931e0b55ddb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e830f051753b08a26cacf118a29bf17ff2d88da2bfd1d91e23931e0b55ddb2->enter($__internal_b1e830f051753b08a26cacf118a29bf17ff2d88da2bfd1d91e23931e0b55ddb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_554b97b4e672a32f61724fa4b871805ea0a84a4a04d5a95c5f8f644ebe74a161->leave($__internal_554b97b4e672a32f61724fa4b871805ea0a84a4a04d5a95c5f8f644ebe74a161_prof);

        
        $__internal_b1e830f051753b08a26cacf118a29bf17ff2d88da2bfd1d91e23931e0b55ddb2->leave($__internal_b1e830f051753b08a26cacf118a29bf17ff2d88da2bfd1d91e23931e0b55ddb2_prof);

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
