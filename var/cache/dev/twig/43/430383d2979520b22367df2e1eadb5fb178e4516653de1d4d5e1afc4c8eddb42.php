<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_31b4dbacaa75b32fe087894727345b3276da107eb281b3d4fdd33195cfe56426 extends Twig_Template
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
        $__internal_baca7e86d1ff19a525ffe72a22e381b0c61a927e0d517a01fcc5b2337bd7c554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baca7e86d1ff19a525ffe72a22e381b0c61a927e0d517a01fcc5b2337bd7c554->enter($__internal_baca7e86d1ff19a525ffe72a22e381b0c61a927e0d517a01fcc5b2337bd7c554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_5ea92791f3f3b99ce8a614bb03a969101cd875b87b1b03579c5ad267c2b1d8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea92791f3f3b99ce8a614bb03a969101cd875b87b1b03579c5ad267c2b1d8a9->enter($__internal_5ea92791f3f3b99ce8a614bb03a969101cd875b87b1b03579c5ad267c2b1d8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_baca7e86d1ff19a525ffe72a22e381b0c61a927e0d517a01fcc5b2337bd7c554->leave($__internal_baca7e86d1ff19a525ffe72a22e381b0c61a927e0d517a01fcc5b2337bd7c554_prof);

        
        $__internal_5ea92791f3f3b99ce8a614bb03a969101cd875b87b1b03579c5ad267c2b1d8a9->leave($__internal_5ea92791f3f3b99ce8a614bb03a969101cd875b87b1b03579c5ad267c2b1d8a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
