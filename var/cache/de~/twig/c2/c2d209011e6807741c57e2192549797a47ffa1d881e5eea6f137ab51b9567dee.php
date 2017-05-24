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
        $__internal_4bd326e58c0b6909233559495683cdedfef178115b75274263d7adf237c71264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd326e58c0b6909233559495683cdedfef178115b75274263d7adf237c71264->enter($__internal_4bd326e58c0b6909233559495683cdedfef178115b75274263d7adf237c71264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_89add42148f17147b25444d2a9e641597568d0d69a2d7b60ce566aafeaed45fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89add42148f17147b25444d2a9e641597568d0d69a2d7b60ce566aafeaed45fc->enter($__internal_89add42148f17147b25444d2a9e641597568d0d69a2d7b60ce566aafeaed45fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4bd326e58c0b6909233559495683cdedfef178115b75274263d7adf237c71264->leave($__internal_4bd326e58c0b6909233559495683cdedfef178115b75274263d7adf237c71264_prof);

        
        $__internal_89add42148f17147b25444d2a9e641597568d0d69a2d7b60ce566aafeaed45fc->leave($__internal_89add42148f17147b25444d2a9e641597568d0d69a2d7b60ce566aafeaed45fc_prof);

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
