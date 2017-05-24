<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cdbb904837e962a19dfec90805919a0d29ba78968ddf9c258e4cd106724570ae extends Twig_Template
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
        $__internal_76b1fa52e4e6101ed7d4a0135504eb25210983b6f9f1f1510daac810b386b535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b1fa52e4e6101ed7d4a0135504eb25210983b6f9f1f1510daac810b386b535->enter($__internal_76b1fa52e4e6101ed7d4a0135504eb25210983b6f9f1f1510daac810b386b535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1fe96607dee1ff11abc7f768f89efca541738c3f02006321db6e9596d750c0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe96607dee1ff11abc7f768f89efca541738c3f02006321db6e9596d750c0f8->enter($__internal_1fe96607dee1ff11abc7f768f89efca541738c3f02006321db6e9596d750c0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_76b1fa52e4e6101ed7d4a0135504eb25210983b6f9f1f1510daac810b386b535->leave($__internal_76b1fa52e4e6101ed7d4a0135504eb25210983b6f9f1f1510daac810b386b535_prof);

        
        $__internal_1fe96607dee1ff11abc7f768f89efca541738c3f02006321db6e9596d750c0f8->leave($__internal_1fe96607dee1ff11abc7f768f89efca541738c3f02006321db6e9596d750c0f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
