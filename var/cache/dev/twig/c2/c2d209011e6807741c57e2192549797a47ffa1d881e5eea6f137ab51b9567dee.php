<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_af0d7ffca172acc8290551e8da69fd63cb787d448b705003130cc80d19d83054 extends Twig_Template
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
        $__internal_a274f18f82615c485d2749abc5479b4172e9367fe6dcf7e4a8279058d2b11f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a274f18f82615c485d2749abc5479b4172e9367fe6dcf7e4a8279058d2b11f5b->enter($__internal_a274f18f82615c485d2749abc5479b4172e9367fe6dcf7e4a8279058d2b11f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_79fc735761f4feca094d4cd1a8fb37a140eb695b9651361e1d9120dac7d479b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fc735761f4feca094d4cd1a8fb37a140eb695b9651361e1d9120dac7d479b0->enter($__internal_79fc735761f4feca094d4cd1a8fb37a140eb695b9651361e1d9120dac7d479b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a274f18f82615c485d2749abc5479b4172e9367fe6dcf7e4a8279058d2b11f5b->leave($__internal_a274f18f82615c485d2749abc5479b4172e9367fe6dcf7e4a8279058d2b11f5b_prof);

        
        $__internal_79fc735761f4feca094d4cd1a8fb37a140eb695b9651361e1d9120dac7d479b0->leave($__internal_79fc735761f4feca094d4cd1a8fb37a140eb695b9651361e1d9120dac7d479b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
