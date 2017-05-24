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
        $__internal_85a3f3bc547c52f6b51e8dbbc50cec5e4f05752209a175e12b297e852c44ee86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a3f3bc547c52f6b51e8dbbc50cec5e4f05752209a175e12b297e852c44ee86->enter($__internal_85a3f3bc547c52f6b51e8dbbc50cec5e4f05752209a175e12b297e852c44ee86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0288201eb7169b70fd5911cac31e3421507d3b3951abcbbf73306fc03e7ee75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0288201eb7169b70fd5911cac31e3421507d3b3951abcbbf73306fc03e7ee75d->enter($__internal_0288201eb7169b70fd5911cac31e3421507d3b3951abcbbf73306fc03e7ee75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_85a3f3bc547c52f6b51e8dbbc50cec5e4f05752209a175e12b297e852c44ee86->leave($__internal_85a3f3bc547c52f6b51e8dbbc50cec5e4f05752209a175e12b297e852c44ee86_prof);

        
        $__internal_0288201eb7169b70fd5911cac31e3421507d3b3951abcbbf73306fc03e7ee75d->leave($__internal_0288201eb7169b70fd5911cac31e3421507d3b3951abcbbf73306fc03e7ee75d_prof);

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
