<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_db3716d3f708ad48587c9859687a871f43214f665f4ba4c9523cefb01dc0c217 extends Twig_Template
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
        $__internal_ce6e01ae6b43cb59697d986667a8c8dbe0413aefc4d8c1a4a933ff6e7d4d287a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6e01ae6b43cb59697d986667a8c8dbe0413aefc4d8c1a4a933ff6e7d4d287a->enter($__internal_ce6e01ae6b43cb59697d986667a8c8dbe0413aefc4d8c1a4a933ff6e7d4d287a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_53ad4ae1c19bf851debebcec94a0c1dd055ce957e0f7222f17b8e719a94aba93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ad4ae1c19bf851debebcec94a0c1dd055ce957e0f7222f17b8e719a94aba93->enter($__internal_53ad4ae1c19bf851debebcec94a0c1dd055ce957e0f7222f17b8e719a94aba93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ce6e01ae6b43cb59697d986667a8c8dbe0413aefc4d8c1a4a933ff6e7d4d287a->leave($__internal_ce6e01ae6b43cb59697d986667a8c8dbe0413aefc4d8c1a4a933ff6e7d4d287a_prof);

        
        $__internal_53ad4ae1c19bf851debebcec94a0c1dd055ce957e0f7222f17b8e719a94aba93->leave($__internal_53ad4ae1c19bf851debebcec94a0c1dd055ce957e0f7222f17b8e719a94aba93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
