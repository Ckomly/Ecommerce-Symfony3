<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8bbc625140afc72c8b19f38f0f24da0557ba3863bbb77bb63a619b97bc881b85 extends Twig_Template
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
        $__internal_2b28dc818dced83bf94ca7a61c53c35f089c03b9bb83d0f475921e400336bde6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b28dc818dced83bf94ca7a61c53c35f089c03b9bb83d0f475921e400336bde6->enter($__internal_2b28dc818dced83bf94ca7a61c53c35f089c03b9bb83d0f475921e400336bde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_94d5b61acbf3faf380569a528c5c4b76c30f917787da627fbf11ec8d9809e92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d5b61acbf3faf380569a528c5c4b76c30f917787da627fbf11ec8d9809e92f->enter($__internal_94d5b61acbf3faf380569a528c5c4b76c30f917787da627fbf11ec8d9809e92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2b28dc818dced83bf94ca7a61c53c35f089c03b9bb83d0f475921e400336bde6->leave($__internal_2b28dc818dced83bf94ca7a61c53c35f089c03b9bb83d0f475921e400336bde6_prof);

        
        $__internal_94d5b61acbf3faf380569a528c5c4b76c30f917787da627fbf11ec8d9809e92f->leave($__internal_94d5b61acbf3faf380569a528c5c4b76c30f917787da627fbf11ec8d9809e92f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
