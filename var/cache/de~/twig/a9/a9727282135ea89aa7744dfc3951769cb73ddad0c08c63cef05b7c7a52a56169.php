<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3a850b9d28cdb48dc986b07263c05526f4999b31edacc9ce6e365ca366872178 extends Twig_Template
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
        $__internal_c709011f87c7a0ed48ac706493dddbc0aa46382cc7ccde099f6c91d736176cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c709011f87c7a0ed48ac706493dddbc0aa46382cc7ccde099f6c91d736176cb2->enter($__internal_c709011f87c7a0ed48ac706493dddbc0aa46382cc7ccde099f6c91d736176cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_55d311a84cbd2f9a493f9e5b0243adf1864ad2324a3b91ec8c2ab3009bcc2286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d311a84cbd2f9a493f9e5b0243adf1864ad2324a3b91ec8c2ab3009bcc2286->enter($__internal_55d311a84cbd2f9a493f9e5b0243adf1864ad2324a3b91ec8c2ab3009bcc2286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c709011f87c7a0ed48ac706493dddbc0aa46382cc7ccde099f6c91d736176cb2->leave($__internal_c709011f87c7a0ed48ac706493dddbc0aa46382cc7ccde099f6c91d736176cb2_prof);

        
        $__internal_55d311a84cbd2f9a493f9e5b0243adf1864ad2324a3b91ec8c2ab3009bcc2286->leave($__internal_55d311a84cbd2f9a493f9e5b0243adf1864ad2324a3b91ec8c2ab3009bcc2286_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
