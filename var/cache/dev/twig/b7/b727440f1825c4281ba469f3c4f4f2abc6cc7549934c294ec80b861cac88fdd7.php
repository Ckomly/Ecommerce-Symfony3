<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_71135c85904bf810169f521ea4d0867221d786b90dd265c188d9d9c524cb0214 extends Twig_Template
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
        $__internal_1177478b21c5523099682250a73d9b91a591ffc80b22d9ad3cbb783ffd6ef9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1177478b21c5523099682250a73d9b91a591ffc80b22d9ad3cbb783ffd6ef9cf->enter($__internal_1177478b21c5523099682250a73d9b91a591ffc80b22d9ad3cbb783ffd6ef9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e5e714a0e3aae85feb2994bb95fe31a2ecbb42f60df05bc3a7f858d04f303710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e714a0e3aae85feb2994bb95fe31a2ecbb42f60df05bc3a7f858d04f303710->enter($__internal_e5e714a0e3aae85feb2994bb95fe31a2ecbb42f60df05bc3a7f858d04f303710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1177478b21c5523099682250a73d9b91a591ffc80b22d9ad3cbb783ffd6ef9cf->leave($__internal_1177478b21c5523099682250a73d9b91a591ffc80b22d9ad3cbb783ffd6ef9cf_prof);

        
        $__internal_e5e714a0e3aae85feb2994bb95fe31a2ecbb42f60df05bc3a7f858d04f303710->leave($__internal_e5e714a0e3aae85feb2994bb95fe31a2ecbb42f60df05bc3a7f858d04f303710_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
