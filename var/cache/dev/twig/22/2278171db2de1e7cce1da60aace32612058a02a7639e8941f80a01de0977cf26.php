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
        $__internal_c22737f84ac3f8a94fa02eef389d6304036510eb4f16a5068dae9affdcd6bd5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22737f84ac3f8a94fa02eef389d6304036510eb4f16a5068dae9affdcd6bd5b->enter($__internal_c22737f84ac3f8a94fa02eef389d6304036510eb4f16a5068dae9affdcd6bd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ae2277390922c79733675aadb7397ba34f1aa6853b0a863d3cd5fe2b8290d216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2277390922c79733675aadb7397ba34f1aa6853b0a863d3cd5fe2b8290d216->enter($__internal_ae2277390922c79733675aadb7397ba34f1aa6853b0a863d3cd5fe2b8290d216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c22737f84ac3f8a94fa02eef389d6304036510eb4f16a5068dae9affdcd6bd5b->leave($__internal_c22737f84ac3f8a94fa02eef389d6304036510eb4f16a5068dae9affdcd6bd5b_prof);

        
        $__internal_ae2277390922c79733675aadb7397ba34f1aa6853b0a863d3cd5fe2b8290d216->leave($__internal_ae2277390922c79733675aadb7397ba34f1aa6853b0a863d3cd5fe2b8290d216_prof);

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
