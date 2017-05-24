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
        $__internal_8c8688219a9102e499f3156c4c0c0a06330735d726dde5844cf9547547707a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8688219a9102e499f3156c4c0c0a06330735d726dde5844cf9547547707a4b->enter($__internal_8c8688219a9102e499f3156c4c0c0a06330735d726dde5844cf9547547707a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_616d80762f3bac9e1ed5460970d97b1a6110e4484dc8e6221b375791a2053021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616d80762f3bac9e1ed5460970d97b1a6110e4484dc8e6221b375791a2053021->enter($__internal_616d80762f3bac9e1ed5460970d97b1a6110e4484dc8e6221b375791a2053021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_8c8688219a9102e499f3156c4c0c0a06330735d726dde5844cf9547547707a4b->leave($__internal_8c8688219a9102e499f3156c4c0c0a06330735d726dde5844cf9547547707a4b_prof);

        
        $__internal_616d80762f3bac9e1ed5460970d97b1a6110e4484dc8e6221b375791a2053021->leave($__internal_616d80762f3bac9e1ed5460970d97b1a6110e4484dc8e6221b375791a2053021_prof);

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
