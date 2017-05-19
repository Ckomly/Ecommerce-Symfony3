<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_fe78222a5fb2ce4fee0c48c86c02548535165fa9e1dcf0991a3e0868a5243f1f extends Twig_Template
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
        $__internal_1a4d6ca1b2c8e10e6a64f850795b6e463c85a016423ce2ea6b1ab0bfc0dc7359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4d6ca1b2c8e10e6a64f850795b6e463c85a016423ce2ea6b1ab0bfc0dc7359->enter($__internal_1a4d6ca1b2c8e10e6a64f850795b6e463c85a016423ce2ea6b1ab0bfc0dc7359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_34bc5cf9a8adeb0541b2c6ab52bb0345f6b1df64844a17ad0b5fddba2e751530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34bc5cf9a8adeb0541b2c6ab52bb0345f6b1df64844a17ad0b5fddba2e751530->enter($__internal_34bc5cf9a8adeb0541b2c6ab52bb0345f6b1df64844a17ad0b5fddba2e751530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1a4d6ca1b2c8e10e6a64f850795b6e463c85a016423ce2ea6b1ab0bfc0dc7359->leave($__internal_1a4d6ca1b2c8e10e6a64f850795b6e463c85a016423ce2ea6b1ab0bfc0dc7359_prof);

        
        $__internal_34bc5cf9a8adeb0541b2c6ab52bb0345f6b1df64844a17ad0b5fddba2e751530->leave($__internal_34bc5cf9a8adeb0541b2c6ab52bb0345f6b1df64844a17ad0b5fddba2e751530_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
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
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
