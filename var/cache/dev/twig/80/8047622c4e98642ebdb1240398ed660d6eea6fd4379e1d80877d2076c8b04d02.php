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
        $__internal_af713e96131adfe03e2e35f02cdd708eb19357feeda6f7425dd84d294aa480f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af713e96131adfe03e2e35f02cdd708eb19357feeda6f7425dd84d294aa480f3->enter($__internal_af713e96131adfe03e2e35f02cdd708eb19357feeda6f7425dd84d294aa480f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_597d81ca13068ff4b369a6a0d44c87b0b80e487882a23f6469096b91b8ca7095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597d81ca13068ff4b369a6a0d44c87b0b80e487882a23f6469096b91b8ca7095->enter($__internal_597d81ca13068ff4b369a6a0d44c87b0b80e487882a23f6469096b91b8ca7095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_af713e96131adfe03e2e35f02cdd708eb19357feeda6f7425dd84d294aa480f3->leave($__internal_af713e96131adfe03e2e35f02cdd708eb19357feeda6f7425dd84d294aa480f3_prof);

        
        $__internal_597d81ca13068ff4b369a6a0d44c87b0b80e487882a23f6469096b91b8ca7095->leave($__internal_597d81ca13068ff4b369a6a0d44c87b0b80e487882a23f6469096b91b8ca7095_prof);

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
