<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a36dad82158789959d9353abb049e3bb361e6d82c87d5cbb9dae18e8d3c92758 extends Twig_Template
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
        $__internal_20508918b457935647f0abb0a0bcb8fd6c35f86c9b37f477a3b2ac3808169da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20508918b457935647f0abb0a0bcb8fd6c35f86c9b37f477a3b2ac3808169da4->enter($__internal_20508918b457935647f0abb0a0bcb8fd6c35f86c9b37f477a3b2ac3808169da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_967ef019c7a59a997d1bde46b5686fa1102e99c59662eca92f23c2b9de08b083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967ef019c7a59a997d1bde46b5686fa1102e99c59662eca92f23c2b9de08b083->enter($__internal_967ef019c7a59a997d1bde46b5686fa1102e99c59662eca92f23c2b9de08b083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_20508918b457935647f0abb0a0bcb8fd6c35f86c9b37f477a3b2ac3808169da4->leave($__internal_20508918b457935647f0abb0a0bcb8fd6c35f86c9b37f477a3b2ac3808169da4_prof);

        
        $__internal_967ef019c7a59a997d1bde46b5686fa1102e99c59662eca92f23c2b9de08b083->leave($__internal_967ef019c7a59a997d1bde46b5686fa1102e99c59662eca92f23c2b9de08b083_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
