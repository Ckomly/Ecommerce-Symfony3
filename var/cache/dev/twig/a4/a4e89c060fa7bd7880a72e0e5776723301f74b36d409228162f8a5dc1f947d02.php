<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f6ec7f51f2d51e10ad09ad7f2f36fcd1e8d01be6d18aa5fbd82ae21ca0f6871 extends Twig_Template
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
        $__internal_036052cdfde9f3556b0a8995ba8480919255d2a3caa698d719b091d75caec8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036052cdfde9f3556b0a8995ba8480919255d2a3caa698d719b091d75caec8cc->enter($__internal_036052cdfde9f3556b0a8995ba8480919255d2a3caa698d719b091d75caec8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6c5876da08ddff1090c2ea8a17f813687a2308d5c619c3fe8ab43d1abb048173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5876da08ddff1090c2ea8a17f813687a2308d5c619c3fe8ab43d1abb048173->enter($__internal_6c5876da08ddff1090c2ea8a17f813687a2308d5c619c3fe8ab43d1abb048173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_036052cdfde9f3556b0a8995ba8480919255d2a3caa698d719b091d75caec8cc->leave($__internal_036052cdfde9f3556b0a8995ba8480919255d2a3caa698d719b091d75caec8cc_prof);

        
        $__internal_6c5876da08ddff1090c2ea8a17f813687a2308d5c619c3fe8ab43d1abb048173->leave($__internal_6c5876da08ddff1090c2ea8a17f813687a2308d5c619c3fe8ab43d1abb048173_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
