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
        $__internal_5462562744b71a66be1ee8e7054205fb124f3e675555b1c26a9536e55e6dec34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5462562744b71a66be1ee8e7054205fb124f3e675555b1c26a9536e55e6dec34->enter($__internal_5462562744b71a66be1ee8e7054205fb124f3e675555b1c26a9536e55e6dec34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_485b0e3f3659c4a7921b42766b205a0d87ad6ac3195fad532b033308ec9352b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485b0e3f3659c4a7921b42766b205a0d87ad6ac3195fad532b033308ec9352b9->enter($__internal_485b0e3f3659c4a7921b42766b205a0d87ad6ac3195fad532b033308ec9352b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5462562744b71a66be1ee8e7054205fb124f3e675555b1c26a9536e55e6dec34->leave($__internal_5462562744b71a66be1ee8e7054205fb124f3e675555b1c26a9536e55e6dec34_prof);

        
        $__internal_485b0e3f3659c4a7921b42766b205a0d87ad6ac3195fad532b033308ec9352b9->leave($__internal_485b0e3f3659c4a7921b42766b205a0d87ad6ac3195fad532b033308ec9352b9_prof);

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
