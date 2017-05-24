<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b899594e1a4af6ec732f205dc84f98eb52b7baa8fd2d88f5bc1115b4936d23ad extends Twig_Template
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
        $__internal_74dd0e5c7f4e35babc1f13ca601107403abf33f908984dbe40d7502921dfca79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74dd0e5c7f4e35babc1f13ca601107403abf33f908984dbe40d7502921dfca79->enter($__internal_74dd0e5c7f4e35babc1f13ca601107403abf33f908984dbe40d7502921dfca79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_406d0f22bde63347497bc029f7673f9d8307895d37ca8c6af091d37ac033da7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406d0f22bde63347497bc029f7673f9d8307895d37ca8c6af091d37ac033da7d->enter($__internal_406d0f22bde63347497bc029f7673f9d8307895d37ca8c6af091d37ac033da7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_74dd0e5c7f4e35babc1f13ca601107403abf33f908984dbe40d7502921dfca79->leave($__internal_74dd0e5c7f4e35babc1f13ca601107403abf33f908984dbe40d7502921dfca79_prof);

        
        $__internal_406d0f22bde63347497bc029f7673f9d8307895d37ca8c6af091d37ac033da7d->leave($__internal_406d0f22bde63347497bc029f7673f9d8307895d37ca8c6af091d37ac033da7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
