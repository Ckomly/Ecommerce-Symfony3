<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3f4c9cade32f53675f5d1507ee1007bd799aa5f57b44c2fc2f6931c09424bd7f extends Twig_Template
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
        $__internal_be230a7340c2ae0431ccc51f8998a42637856253776d380c758498b9689eb11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be230a7340c2ae0431ccc51f8998a42637856253776d380c758498b9689eb11f->enter($__internal_be230a7340c2ae0431ccc51f8998a42637856253776d380c758498b9689eb11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_22937f5e9e468e44aa53b848779d17c9e0a7df9a6e4cb663736d5e9857a1c87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22937f5e9e468e44aa53b848779d17c9e0a7df9a6e4cb663736d5e9857a1c87b->enter($__internal_22937f5e9e468e44aa53b848779d17c9e0a7df9a6e4cb663736d5e9857a1c87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_be230a7340c2ae0431ccc51f8998a42637856253776d380c758498b9689eb11f->leave($__internal_be230a7340c2ae0431ccc51f8998a42637856253776d380c758498b9689eb11f_prof);

        
        $__internal_22937f5e9e468e44aa53b848779d17c9e0a7df9a6e4cb663736d5e9857a1c87b->leave($__internal_22937f5e9e468e44aa53b848779d17c9e0a7df9a6e4cb663736d5e9857a1c87b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
