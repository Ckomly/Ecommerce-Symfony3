<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_831d6045f5f7e57b672f77b45a30282bdbdc2f4d734edd3fbfaeb309409bb625 extends Twig_Template
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
        $__internal_347011489809f76626a0562a6dd858e380f7b61d2d99402256cb44ba842aecab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347011489809f76626a0562a6dd858e380f7b61d2d99402256cb44ba842aecab->enter($__internal_347011489809f76626a0562a6dd858e380f7b61d2d99402256cb44ba842aecab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_bba9c78043a5a064a086e3ae6a4a7a31694fb6e673d76e83b2269cb64bc13e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba9c78043a5a064a086e3ae6a4a7a31694fb6e673d76e83b2269cb64bc13e4a->enter($__internal_bba9c78043a5a064a086e3ae6a4a7a31694fb6e673d76e83b2269cb64bc13e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_347011489809f76626a0562a6dd858e380f7b61d2d99402256cb44ba842aecab->leave($__internal_347011489809f76626a0562a6dd858e380f7b61d2d99402256cb44ba842aecab_prof);

        
        $__internal_bba9c78043a5a064a086e3ae6a4a7a31694fb6e673d76e83b2269cb64bc13e4a->leave($__internal_bba9c78043a5a064a086e3ae6a4a7a31694fb6e673d76e83b2269cb64bc13e4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
