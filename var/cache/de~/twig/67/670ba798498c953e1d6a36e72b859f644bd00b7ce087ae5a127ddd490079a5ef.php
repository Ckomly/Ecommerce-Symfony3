<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_740a1e675171eae31fdc33a6b2ec07b9a03970286eb59464e27fc1f696422796 extends Twig_Template
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
        $__internal_5a851c6e9f03962f6d3411c79053fa0e54baa1ed6bee0e9859338b681ce7d133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a851c6e9f03962f6d3411c79053fa0e54baa1ed6bee0e9859338b681ce7d133->enter($__internal_5a851c6e9f03962f6d3411c79053fa0e54baa1ed6bee0e9859338b681ce7d133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_987854e71c4ad1d4d16032a5531c113953f0a4df87fcf2128122cc14cc6a0b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987854e71c4ad1d4d16032a5531c113953f0a4df87fcf2128122cc14cc6a0b11->enter($__internal_987854e71c4ad1d4d16032a5531c113953f0a4df87fcf2128122cc14cc6a0b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5a851c6e9f03962f6d3411c79053fa0e54baa1ed6bee0e9859338b681ce7d133->leave($__internal_5a851c6e9f03962f6d3411c79053fa0e54baa1ed6bee0e9859338b681ce7d133_prof);

        
        $__internal_987854e71c4ad1d4d16032a5531c113953f0a4df87fcf2128122cc14cc6a0b11->leave($__internal_987854e71c4ad1d4d16032a5531c113953f0a4df87fcf2128122cc14cc6a0b11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
