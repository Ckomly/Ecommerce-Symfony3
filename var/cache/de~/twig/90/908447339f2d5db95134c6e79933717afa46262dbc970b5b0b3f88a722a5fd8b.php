<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_aa31ab996e47fda23ad49151f6136e043e59dca3f38aa76de5207f69d5ac57fa extends Twig_Template
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
        $__internal_edc2ea99c95edfb1d0e932558699c7fae56ffece42f94e4c043eefa30c2f9fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc2ea99c95edfb1d0e932558699c7fae56ffece42f94e4c043eefa30c2f9fb1->enter($__internal_edc2ea99c95edfb1d0e932558699c7fae56ffece42f94e4c043eefa30c2f9fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_585d01b713e4018ede6137262374ce2f9d80ed724ffcbe2beb665e2c6b0c35c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585d01b713e4018ede6137262374ce2f9d80ed724ffcbe2beb665e2c6b0c35c3->enter($__internal_585d01b713e4018ede6137262374ce2f9d80ed724ffcbe2beb665e2c6b0c35c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_edc2ea99c95edfb1d0e932558699c7fae56ffece42f94e4c043eefa30c2f9fb1->leave($__internal_edc2ea99c95edfb1d0e932558699c7fae56ffece42f94e4c043eefa30c2f9fb1_prof);

        
        $__internal_585d01b713e4018ede6137262374ce2f9d80ed724ffcbe2beb665e2c6b0c35c3->leave($__internal_585d01b713e4018ede6137262374ce2f9d80ed724ffcbe2beb665e2c6b0c35c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
