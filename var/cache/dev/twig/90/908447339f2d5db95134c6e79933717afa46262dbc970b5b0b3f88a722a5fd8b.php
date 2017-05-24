<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_aa31ab996e47fda23ad49151f6136e043e59dca3f38aa76de5207f69d5ac57fa extends Twig_Template
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
        $__internal_716452f307da2f44a5a11597a2249a730f5857f623620860226093bbc7834bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716452f307da2f44a5a11597a2249a730f5857f623620860226093bbc7834bae->enter($__internal_716452f307da2f44a5a11597a2249a730f5857f623620860226093bbc7834bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_cd424496bd4e26f7f3d17e97573b5e636c0c71071f81690d0d87b793d90d573c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd424496bd4e26f7f3d17e97573b5e636c0c71071f81690d0d87b793d90d573c->enter($__internal_cd424496bd4e26f7f3d17e97573b5e636c0c71071f81690d0d87b793d90d573c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_716452f307da2f44a5a11597a2249a730f5857f623620860226093bbc7834bae->leave($__internal_716452f307da2f44a5a11597a2249a730f5857f623620860226093bbc7834bae_prof);

        
        $__internal_cd424496bd4e26f7f3d17e97573b5e636c0c71071f81690d0d87b793d90d573c->leave($__internal_cd424496bd4e26f7f3d17e97573b5e636c0c71071f81690d0d87b793d90d573c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
