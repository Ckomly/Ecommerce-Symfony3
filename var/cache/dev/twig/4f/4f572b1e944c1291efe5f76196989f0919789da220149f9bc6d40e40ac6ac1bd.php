<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a35857ee1311a28a3bc68d6cb688f4573a483378ff1d1ae838e53d4742bfcaab extends Twig_Template
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
        $__internal_b849c1ebfc6e517c49d4386f7ffaef26356036e6616a57fb7d1d7f6940326489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b849c1ebfc6e517c49d4386f7ffaef26356036e6616a57fb7d1d7f6940326489->enter($__internal_b849c1ebfc6e517c49d4386f7ffaef26356036e6616a57fb7d1d7f6940326489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bd180fe4dbd3d63c9afb17b701d97b062d3d9529b9e5a4e32821c647474fcf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd180fe4dbd3d63c9afb17b701d97b062d3d9529b9e5a4e32821c647474fcf91->enter($__internal_bd180fe4dbd3d63c9afb17b701d97b062d3d9529b9e5a4e32821c647474fcf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b849c1ebfc6e517c49d4386f7ffaef26356036e6616a57fb7d1d7f6940326489->leave($__internal_b849c1ebfc6e517c49d4386f7ffaef26356036e6616a57fb7d1d7f6940326489_prof);

        
        $__internal_bd180fe4dbd3d63c9afb17b701d97b062d3d9529b9e5a4e32821c647474fcf91->leave($__internal_bd180fe4dbd3d63c9afb17b701d97b062d3d9529b9e5a4e32821c647474fcf91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
