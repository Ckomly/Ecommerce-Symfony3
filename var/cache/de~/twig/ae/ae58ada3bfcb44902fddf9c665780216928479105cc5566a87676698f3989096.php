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
        $__internal_d00162bdfebd74c54e40ae8b09fb188c46f356343a39eb5135ead8a273a3c600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00162bdfebd74c54e40ae8b09fb188c46f356343a39eb5135ead8a273a3c600->enter($__internal_d00162bdfebd74c54e40ae8b09fb188c46f356343a39eb5135ead8a273a3c600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c14f583947eb45707918fa67de7fc6f1ce9097ad44f3b6a61e0a896b791c1c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14f583947eb45707918fa67de7fc6f1ce9097ad44f3b6a61e0a896b791c1c5e->enter($__internal_c14f583947eb45707918fa67de7fc6f1ce9097ad44f3b6a61e0a896b791c1c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d00162bdfebd74c54e40ae8b09fb188c46f356343a39eb5135ead8a273a3c600->leave($__internal_d00162bdfebd74c54e40ae8b09fb188c46f356343a39eb5135ead8a273a3c600_prof);

        
        $__internal_c14f583947eb45707918fa67de7fc6f1ce9097ad44f3b6a61e0a896b791c1c5e->leave($__internal_c14f583947eb45707918fa67de7fc6f1ce9097ad44f3b6a61e0a896b791c1c5e_prof);

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
