<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_740a1e675171eae31fdc33a6b2ec07b9a03970286eb59464e27fc1f696422796 extends Twig_Template
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
        $__internal_75c732bf3d749ba9e4f300bb68719c780af111a4ba48740903be4ba8c29e09aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c732bf3d749ba9e4f300bb68719c780af111a4ba48740903be4ba8c29e09aa->enter($__internal_75c732bf3d749ba9e4f300bb68719c780af111a4ba48740903be4ba8c29e09aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_481f3b9d39036891f080ac4321f17de7b7ef5f042d3b0e3f1be9016993162226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481f3b9d39036891f080ac4321f17de7b7ef5f042d3b0e3f1be9016993162226->enter($__internal_481f3b9d39036891f080ac4321f17de7b7ef5f042d3b0e3f1be9016993162226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_75c732bf3d749ba9e4f300bb68719c780af111a4ba48740903be4ba8c29e09aa->leave($__internal_75c732bf3d749ba9e4f300bb68719c780af111a4ba48740903be4ba8c29e09aa_prof);

        
        $__internal_481f3b9d39036891f080ac4321f17de7b7ef5f042d3b0e3f1be9016993162226->leave($__internal_481f3b9d39036891f080ac4321f17de7b7ef5f042d3b0e3f1be9016993162226_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
