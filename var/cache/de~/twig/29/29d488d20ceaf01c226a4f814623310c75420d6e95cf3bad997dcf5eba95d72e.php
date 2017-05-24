<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_76bf0ac26a99047ff29b3263e88c04869e0cc34ac959f274dce6eaae3620a324 extends Twig_Template
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
        $__internal_5cf42e62239f23d4b05650e7233ebee205343de7bb1898806ca3659c1548bbe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf42e62239f23d4b05650e7233ebee205343de7bb1898806ca3659c1548bbe9->enter($__internal_5cf42e62239f23d4b05650e7233ebee205343de7bb1898806ca3659c1548bbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bbf58cae9c44e7516de29f5ae8a27ae5d9225820ec47668a79360c13ac43a4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf58cae9c44e7516de29f5ae8a27ae5d9225820ec47668a79360c13ac43a4f6->enter($__internal_bbf58cae9c44e7516de29f5ae8a27ae5d9225820ec47668a79360c13ac43a4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5cf42e62239f23d4b05650e7233ebee205343de7bb1898806ca3659c1548bbe9->leave($__internal_5cf42e62239f23d4b05650e7233ebee205343de7bb1898806ca3659c1548bbe9_prof);

        
        $__internal_bbf58cae9c44e7516de29f5ae8a27ae5d9225820ec47668a79360c13ac43a4f6->leave($__internal_bbf58cae9c44e7516de29f5ae8a27ae5d9225820ec47668a79360c13ac43a4f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
