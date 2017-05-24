<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff91a568cd45297ad6ddeca97ebca6d3330951cbc4769f18119be76f4df36f5c extends Twig_Template
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
        $__internal_e9796f935822c7374ba4a69a0283fc43c4b017484f7b1c6c28c771af3ec8b54b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9796f935822c7374ba4a69a0283fc43c4b017484f7b1c6c28c771af3ec8b54b->enter($__internal_e9796f935822c7374ba4a69a0283fc43c4b017484f7b1c6c28c771af3ec8b54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3c0695e3b5891e3250306ad34d1c7f11cfe83ebcec01f5a42e80737a79490d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0695e3b5891e3250306ad34d1c7f11cfe83ebcec01f5a42e80737a79490d67->enter($__internal_3c0695e3b5891e3250306ad34d1c7f11cfe83ebcec01f5a42e80737a79490d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e9796f935822c7374ba4a69a0283fc43c4b017484f7b1c6c28c771af3ec8b54b->leave($__internal_e9796f935822c7374ba4a69a0283fc43c4b017484f7b1c6c28c771af3ec8b54b_prof);

        
        $__internal_3c0695e3b5891e3250306ad34d1c7f11cfe83ebcec01f5a42e80737a79490d67->leave($__internal_3c0695e3b5891e3250306ad34d1c7f11cfe83ebcec01f5a42e80737a79490d67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
