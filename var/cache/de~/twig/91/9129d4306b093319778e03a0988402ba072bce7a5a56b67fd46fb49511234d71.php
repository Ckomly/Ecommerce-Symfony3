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
        $__internal_14a52ef92f95a5bb13ad0a6b1b2a924b9d728694a5c4c99dde65866ae3088918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14a52ef92f95a5bb13ad0a6b1b2a924b9d728694a5c4c99dde65866ae3088918->enter($__internal_14a52ef92f95a5bb13ad0a6b1b2a924b9d728694a5c4c99dde65866ae3088918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b71c191f4f23fef13ecc74fb14b7384d07b7a387e2a58ae15133a87fb875ab6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71c191f4f23fef13ecc74fb14b7384d07b7a387e2a58ae15133a87fb875ab6e->enter($__internal_b71c191f4f23fef13ecc74fb14b7384d07b7a387e2a58ae15133a87fb875ab6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_14a52ef92f95a5bb13ad0a6b1b2a924b9d728694a5c4c99dde65866ae3088918->leave($__internal_14a52ef92f95a5bb13ad0a6b1b2a924b9d728694a5c4c99dde65866ae3088918_prof);

        
        $__internal_b71c191f4f23fef13ecc74fb14b7384d07b7a387e2a58ae15133a87fb875ab6e->leave($__internal_b71c191f4f23fef13ecc74fb14b7384d07b7a387e2a58ae15133a87fb875ab6e_prof);

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
