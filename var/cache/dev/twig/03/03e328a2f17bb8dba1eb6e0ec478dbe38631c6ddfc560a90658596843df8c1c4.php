<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bd9138c75d34683d1be6dab69d393fcdf5948f03f5be714a6a2d77b604181883 extends Twig_Template
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
        $__internal_c1afe5dd7ea9e36222a67f51567bf446cabcb34eabbf5c59b4ce2cec71ebb4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1afe5dd7ea9e36222a67f51567bf446cabcb34eabbf5c59b4ce2cec71ebb4d5->enter($__internal_c1afe5dd7ea9e36222a67f51567bf446cabcb34eabbf5c59b4ce2cec71ebb4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_41b0fe94b25398b62f0e03a9964a3372984ee4fc0af133033c0d2dba305d69dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b0fe94b25398b62f0e03a9964a3372984ee4fc0af133033c0d2dba305d69dc->enter($__internal_41b0fe94b25398b62f0e03a9964a3372984ee4fc0af133033c0d2dba305d69dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c1afe5dd7ea9e36222a67f51567bf446cabcb34eabbf5c59b4ce2cec71ebb4d5->leave($__internal_c1afe5dd7ea9e36222a67f51567bf446cabcb34eabbf5c59b4ce2cec71ebb4d5_prof);

        
        $__internal_41b0fe94b25398b62f0e03a9964a3372984ee4fc0af133033c0d2dba305d69dc->leave($__internal_41b0fe94b25398b62f0e03a9964a3372984ee4fc0af133033c0d2dba305d69dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
