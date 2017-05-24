<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2b010cb35fb9a71259ebd5f4d9945690d6bc2df7d5bb357e7184efe2193ab1b2 extends Twig_Template
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
        $__internal_0daf8c891ed28d927b8d5ea86cd23c226c87018cebccee05b8898fcaaf17234e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0daf8c891ed28d927b8d5ea86cd23c226c87018cebccee05b8898fcaaf17234e->enter($__internal_0daf8c891ed28d927b8d5ea86cd23c226c87018cebccee05b8898fcaaf17234e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_acf80864fc7c537cba311cbf66f2945a13ad622e652c7dae6514c3547b1c2642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf80864fc7c537cba311cbf66f2945a13ad622e652c7dae6514c3547b1c2642->enter($__internal_acf80864fc7c537cba311cbf66f2945a13ad622e652c7dae6514c3547b1c2642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0daf8c891ed28d927b8d5ea86cd23c226c87018cebccee05b8898fcaaf17234e->leave($__internal_0daf8c891ed28d927b8d5ea86cd23c226c87018cebccee05b8898fcaaf17234e_prof);

        
        $__internal_acf80864fc7c537cba311cbf66f2945a13ad622e652c7dae6514c3547b1c2642->leave($__internal_acf80864fc7c537cba311cbf66f2945a13ad622e652c7dae6514c3547b1c2642_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
