<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9b7e91467a98ec3bfd0c0a15bf5a691f95618817514bacd939803090eeb923df extends Twig_Template
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
        $__internal_df74fceba184c55e4dd2788776b57bad314c199d301d3a15b3c9e3e7d2f68e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df74fceba184c55e4dd2788776b57bad314c199d301d3a15b3c9e3e7d2f68e13->enter($__internal_df74fceba184c55e4dd2788776b57bad314c199d301d3a15b3c9e3e7d2f68e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9b4b556abc37eac092ccf3ffd78d0d0253887acf4ec0474b9c0803d5e7181fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4b556abc37eac092ccf3ffd78d0d0253887acf4ec0474b9c0803d5e7181fba->enter($__internal_9b4b556abc37eac092ccf3ffd78d0d0253887acf4ec0474b9c0803d5e7181fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_df74fceba184c55e4dd2788776b57bad314c199d301d3a15b3c9e3e7d2f68e13->leave($__internal_df74fceba184c55e4dd2788776b57bad314c199d301d3a15b3c9e3e7d2f68e13_prof);

        
        $__internal_9b4b556abc37eac092ccf3ffd78d0d0253887acf4ec0474b9c0803d5e7181fba->leave($__internal_9b4b556abc37eac092ccf3ffd78d0d0253887acf4ec0474b9c0803d5e7181fba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
