<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4474f74cada0a5e75a6dd5b3cdda12cf897c90f75a32f1281201f0c9fa22ecb9 extends Twig_Template
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
        $__internal_6d13cbb7c96538ca8a5d3225a7df9f61e8c29ca7fbdac49b56ce2458bd8604fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d13cbb7c96538ca8a5d3225a7df9f61e8c29ca7fbdac49b56ce2458bd8604fa->enter($__internal_6d13cbb7c96538ca8a5d3225a7df9f61e8c29ca7fbdac49b56ce2458bd8604fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1652ed489773fa4cf764cd241cda1783b1ad122d2f44387ae0180a06750435d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1652ed489773fa4cf764cd241cda1783b1ad122d2f44387ae0180a06750435d3->enter($__internal_1652ed489773fa4cf764cd241cda1783b1ad122d2f44387ae0180a06750435d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6d13cbb7c96538ca8a5d3225a7df9f61e8c29ca7fbdac49b56ce2458bd8604fa->leave($__internal_6d13cbb7c96538ca8a5d3225a7df9f61e8c29ca7fbdac49b56ce2458bd8604fa_prof);

        
        $__internal_1652ed489773fa4cf764cd241cda1783b1ad122d2f44387ae0180a06750435d3->leave($__internal_1652ed489773fa4cf764cd241cda1783b1ad122d2f44387ae0180a06750435d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
