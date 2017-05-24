<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a2047749632772e78fc479fb789b20bfbae028baf86d5e829db4bd4947a1e2e3 extends Twig_Template
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
        $__internal_16c29884276d89211b09f4808050d6e240285fdea3eae55cce71425e8a90c0ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c29884276d89211b09f4808050d6e240285fdea3eae55cce71425e8a90c0ab->enter($__internal_16c29884276d89211b09f4808050d6e240285fdea3eae55cce71425e8a90c0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8a3f23f92d5376a668af5b5e8b69b482f6dca9ab18d0a7a52d8e36f311915850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3f23f92d5376a668af5b5e8b69b482f6dca9ab18d0a7a52d8e36f311915850->enter($__internal_8a3f23f92d5376a668af5b5e8b69b482f6dca9ab18d0a7a52d8e36f311915850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_16c29884276d89211b09f4808050d6e240285fdea3eae55cce71425e8a90c0ab->leave($__internal_16c29884276d89211b09f4808050d6e240285fdea3eae55cce71425e8a90c0ab_prof);

        
        $__internal_8a3f23f92d5376a668af5b5e8b69b482f6dca9ab18d0a7a52d8e36f311915850->leave($__internal_8a3f23f92d5376a668af5b5e8b69b482f6dca9ab18d0a7a52d8e36f311915850_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
