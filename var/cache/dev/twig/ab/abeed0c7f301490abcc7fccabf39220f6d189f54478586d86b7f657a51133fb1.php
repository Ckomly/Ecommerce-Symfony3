<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ec14cc3b2c8168b74a9a870dce4471c37542a8af95d1c3deda5e8bf67f7d3c6d extends Twig_Template
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
        $__internal_407c7db029a6e33360080845b14f1e18bfc895c2774ac1f4123c1766790ffa85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407c7db029a6e33360080845b14f1e18bfc895c2774ac1f4123c1766790ffa85->enter($__internal_407c7db029a6e33360080845b14f1e18bfc895c2774ac1f4123c1766790ffa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a0ff8f84056f99bfbb4efbe88d1465a3c65a019a3a4a8cfc88c5bbe0ff4765d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ff8f84056f99bfbb4efbe88d1465a3c65a019a3a4a8cfc88c5bbe0ff4765d8->enter($__internal_a0ff8f84056f99bfbb4efbe88d1465a3c65a019a3a4a8cfc88c5bbe0ff4765d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_407c7db029a6e33360080845b14f1e18bfc895c2774ac1f4123c1766790ffa85->leave($__internal_407c7db029a6e33360080845b14f1e18bfc895c2774ac1f4123c1766790ffa85_prof);

        
        $__internal_a0ff8f84056f99bfbb4efbe88d1465a3c65a019a3a4a8cfc88c5bbe0ff4765d8->leave($__internal_a0ff8f84056f99bfbb4efbe88d1465a3c65a019a3a4a8cfc88c5bbe0ff4765d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
