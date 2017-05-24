<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f5a0aa3844d9600030e9ac735f4890a4de59c0b76ee05fadb7af494b20f0708d extends Twig_Template
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
        $__internal_16ebd8c670d8a28cd6e26b80ceae4ca2af929d4b66e0aa054c25d2eb077df560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ebd8c670d8a28cd6e26b80ceae4ca2af929d4b66e0aa054c25d2eb077df560->enter($__internal_16ebd8c670d8a28cd6e26b80ceae4ca2af929d4b66e0aa054c25d2eb077df560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d87a532c0cce790c2a2c2d39877b21e54dbf5c024c6a6644a035ccdd2b6e7926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87a532c0cce790c2a2c2d39877b21e54dbf5c024c6a6644a035ccdd2b6e7926->enter($__internal_d87a532c0cce790c2a2c2d39877b21e54dbf5c024c6a6644a035ccdd2b6e7926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_16ebd8c670d8a28cd6e26b80ceae4ca2af929d4b66e0aa054c25d2eb077df560->leave($__internal_16ebd8c670d8a28cd6e26b80ceae4ca2af929d4b66e0aa054c25d2eb077df560_prof);

        
        $__internal_d87a532c0cce790c2a2c2d39877b21e54dbf5c024c6a6644a035ccdd2b6e7926->leave($__internal_d87a532c0cce790c2a2c2d39877b21e54dbf5c024c6a6644a035ccdd2b6e7926_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
