<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b62c5a534f913c2e7bdf389d8c2467f29272453f660d2c60a71d102a1f9c547b extends Twig_Template
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
        $__internal_8ca589a5e5f9447583c9da501dc9b8a65e000c5732a16ae0035a1fb77f1d95b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca589a5e5f9447583c9da501dc9b8a65e000c5732a16ae0035a1fb77f1d95b4->enter($__internal_8ca589a5e5f9447583c9da501dc9b8a65e000c5732a16ae0035a1fb77f1d95b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8f911c52d20fb432a6c980d5ab316ac29a0ec925b6f8e0aa82699653f7290b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f911c52d20fb432a6c980d5ab316ac29a0ec925b6f8e0aa82699653f7290b0b->enter($__internal_8f911c52d20fb432a6c980d5ab316ac29a0ec925b6f8e0aa82699653f7290b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8ca589a5e5f9447583c9da501dc9b8a65e000c5732a16ae0035a1fb77f1d95b4->leave($__internal_8ca589a5e5f9447583c9da501dc9b8a65e000c5732a16ae0035a1fb77f1d95b4_prof);

        
        $__internal_8f911c52d20fb432a6c980d5ab316ac29a0ec925b6f8e0aa82699653f7290b0b->leave($__internal_8f911c52d20fb432a6c980d5ab316ac29a0ec925b6f8e0aa82699653f7290b0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
