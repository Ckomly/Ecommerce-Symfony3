<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3411c5459fefde02e42888849cf135634fc31cb04d7e7c42d1794b2b3424f2ec extends Twig_Template
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
        $__internal_1c19b4d3acb269360faa268ce31e955c5dbae65a9654272ae5fe633331508191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c19b4d3acb269360faa268ce31e955c5dbae65a9654272ae5fe633331508191->enter($__internal_1c19b4d3acb269360faa268ce31e955c5dbae65a9654272ae5fe633331508191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_21a780bd5a3e26acf059618c1da9c6e72e6cabde415b4d1e1b7c11fdff18aaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a780bd5a3e26acf059618c1da9c6e72e6cabde415b4d1e1b7c11fdff18aaa4->enter($__internal_21a780bd5a3e26acf059618c1da9c6e72e6cabde415b4d1e1b7c11fdff18aaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_1c19b4d3acb269360faa268ce31e955c5dbae65a9654272ae5fe633331508191->leave($__internal_1c19b4d3acb269360faa268ce31e955c5dbae65a9654272ae5fe633331508191_prof);

        
        $__internal_21a780bd5a3e26acf059618c1da9c6e72e6cabde415b4d1e1b7c11fdff18aaa4->leave($__internal_21a780bd5a3e26acf059618c1da9c6e72e6cabde415b4d1e1b7c11fdff18aaa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
