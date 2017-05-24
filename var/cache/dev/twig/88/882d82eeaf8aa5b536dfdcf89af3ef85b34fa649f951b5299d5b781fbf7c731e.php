<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3f95cc52884f1e1fc3f59cf29d804ae00326e9c7855e29cd2cb9bf7f2b0bd4ed extends Twig_Template
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
        $__internal_a11f6099618604cdc5aaff084f7ff7649637eb9d71d307c90cde0eb17ded8727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11f6099618604cdc5aaff084f7ff7649637eb9d71d307c90cde0eb17ded8727->enter($__internal_a11f6099618604cdc5aaff084f7ff7649637eb9d71d307c90cde0eb17ded8727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8d41648958dda2bcbc46c67204e38410cb465649d51d527742ebbe1f821b6e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d41648958dda2bcbc46c67204e38410cb465649d51d527742ebbe1f821b6e78->enter($__internal_8d41648958dda2bcbc46c67204e38410cb465649d51d527742ebbe1f821b6e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a11f6099618604cdc5aaff084f7ff7649637eb9d71d307c90cde0eb17ded8727->leave($__internal_a11f6099618604cdc5aaff084f7ff7649637eb9d71d307c90cde0eb17ded8727_prof);

        
        $__internal_8d41648958dda2bcbc46c67204e38410cb465649d51d527742ebbe1f821b6e78->leave($__internal_8d41648958dda2bcbc46c67204e38410cb465649d51d527742ebbe1f821b6e78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
