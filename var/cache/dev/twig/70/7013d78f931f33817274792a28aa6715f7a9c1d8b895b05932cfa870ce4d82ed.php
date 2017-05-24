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
        $__internal_b4cb2d4da0f7367237c6263d98d2ad9e468ab81e32c55b26c81e16e55a7d8a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4cb2d4da0f7367237c6263d98d2ad9e468ab81e32c55b26c81e16e55a7d8a61->enter($__internal_b4cb2d4da0f7367237c6263d98d2ad9e468ab81e32c55b26c81e16e55a7d8a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_9e985d01fa471c457cad3790a8dc473df8fe6defc6f862ecac709aa620785f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e985d01fa471c457cad3790a8dc473df8fe6defc6f862ecac709aa620785f04->enter($__internal_9e985d01fa471c457cad3790a8dc473df8fe6defc6f862ecac709aa620785f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b4cb2d4da0f7367237c6263d98d2ad9e468ab81e32c55b26c81e16e55a7d8a61->leave($__internal_b4cb2d4da0f7367237c6263d98d2ad9e468ab81e32c55b26c81e16e55a7d8a61_prof);

        
        $__internal_9e985d01fa471c457cad3790a8dc473df8fe6defc6f862ecac709aa620785f04->leave($__internal_9e985d01fa471c457cad3790a8dc473df8fe6defc6f862ecac709aa620785f04_prof);

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
