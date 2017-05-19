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
        $__internal_90bca6fe8e5298330844dd8f60590a71d71c1a7b5f64edd4000bcc477728f8f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90bca6fe8e5298330844dd8f60590a71d71c1a7b5f64edd4000bcc477728f8f4->enter($__internal_90bca6fe8e5298330844dd8f60590a71d71c1a7b5f64edd4000bcc477728f8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_42effab43dc254488598130ce2666f3e9866976030c5bf6a2864203a377b094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42effab43dc254488598130ce2666f3e9866976030c5bf6a2864203a377b094d->enter($__internal_42effab43dc254488598130ce2666f3e9866976030c5bf6a2864203a377b094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_90bca6fe8e5298330844dd8f60590a71d71c1a7b5f64edd4000bcc477728f8f4->leave($__internal_90bca6fe8e5298330844dd8f60590a71d71c1a7b5f64edd4000bcc477728f8f4_prof);

        
        $__internal_42effab43dc254488598130ce2666f3e9866976030c5bf6a2864203a377b094d->leave($__internal_42effab43dc254488598130ce2666f3e9866976030c5bf6a2864203a377b094d_prof);

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
