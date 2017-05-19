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
        $__internal_71c4d634fef48086ce92978a26257d5ed227562e41dc2fe18868e5619c3482ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c4d634fef48086ce92978a26257d5ed227562e41dc2fe18868e5619c3482ac->enter($__internal_71c4d634fef48086ce92978a26257d5ed227562e41dc2fe18868e5619c3482ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c673762520c59f439c90c18fb841fa33aa2e146f99221f288e7b95131ee126a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c673762520c59f439c90c18fb841fa33aa2e146f99221f288e7b95131ee126a7->enter($__internal_c673762520c59f439c90c18fb841fa33aa2e146f99221f288e7b95131ee126a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_71c4d634fef48086ce92978a26257d5ed227562e41dc2fe18868e5619c3482ac->leave($__internal_71c4d634fef48086ce92978a26257d5ed227562e41dc2fe18868e5619c3482ac_prof);

        
        $__internal_c673762520c59f439c90c18fb841fa33aa2e146f99221f288e7b95131ee126a7->leave($__internal_c673762520c59f439c90c18fb841fa33aa2e146f99221f288e7b95131ee126a7_prof);

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
