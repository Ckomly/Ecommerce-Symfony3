<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2722426e46d50e4e427c4443770abf2394fe69258026c8e8f06233e47d4f859b extends Twig_Template
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
        $__internal_21d2053c97a67d47a7b21972defc4795b102fb2d7b58c514d70825e446ee785a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d2053c97a67d47a7b21972defc4795b102fb2d7b58c514d70825e446ee785a->enter($__internal_21d2053c97a67d47a7b21972defc4795b102fb2d7b58c514d70825e446ee785a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0a92e6e6d87e44b6fab787d6a33b9fd75bc6c992e1a1dc7b0d067a7b34a29a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a92e6e6d87e44b6fab787d6a33b9fd75bc6c992e1a1dc7b0d067a7b34a29a86->enter($__internal_0a92e6e6d87e44b6fab787d6a33b9fd75bc6c992e1a1dc7b0d067a7b34a29a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_21d2053c97a67d47a7b21972defc4795b102fb2d7b58c514d70825e446ee785a->leave($__internal_21d2053c97a67d47a7b21972defc4795b102fb2d7b58c514d70825e446ee785a_prof);

        
        $__internal_0a92e6e6d87e44b6fab787d6a33b9fd75bc6c992e1a1dc7b0d067a7b34a29a86->leave($__internal_0a92e6e6d87e44b6fab787d6a33b9fd75bc6c992e1a1dc7b0d067a7b34a29a86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
