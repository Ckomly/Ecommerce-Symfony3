<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_67641477698b6eea2e6bbfd3a74b45911356d91d77869b652912de882954c17f extends Twig_Template
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
        $__internal_b164ed9dbbd669488d36fbd64f201a7e81e4ee32b25d86f4cfcd3f9d39e047d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b164ed9dbbd669488d36fbd64f201a7e81e4ee32b25d86f4cfcd3f9d39e047d2->enter($__internal_b164ed9dbbd669488d36fbd64f201a7e81e4ee32b25d86f4cfcd3f9d39e047d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_b837c2f42a0003d7956e9d1ef10bbb2c7176beebae357205a7b1d00e30f3be34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b837c2f42a0003d7956e9d1ef10bbb2c7176beebae357205a7b1d00e30f3be34->enter($__internal_b837c2f42a0003d7956e9d1ef10bbb2c7176beebae357205a7b1d00e30f3be34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b164ed9dbbd669488d36fbd64f201a7e81e4ee32b25d86f4cfcd3f9d39e047d2->leave($__internal_b164ed9dbbd669488d36fbd64f201a7e81e4ee32b25d86f4cfcd3f9d39e047d2_prof);

        
        $__internal_b837c2f42a0003d7956e9d1ef10bbb2c7176beebae357205a7b1d00e30f3be34->leave($__internal_b837c2f42a0003d7956e9d1ef10bbb2c7176beebae357205a7b1d00e30f3be34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
