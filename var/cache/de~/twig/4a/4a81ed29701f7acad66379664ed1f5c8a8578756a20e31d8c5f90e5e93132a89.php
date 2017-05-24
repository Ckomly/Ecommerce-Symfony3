<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9b7e91467a98ec3bfd0c0a15bf5a691f95618817514bacd939803090eeb923df extends Twig_Template
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
        $__internal_11f373bdbc1a84a6ec8e9a35146f2497756ba456c154952340847eb46fb9f321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f373bdbc1a84a6ec8e9a35146f2497756ba456c154952340847eb46fb9f321->enter($__internal_11f373bdbc1a84a6ec8e9a35146f2497756ba456c154952340847eb46fb9f321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a2cc8e9c3793c01065ec0e00540240bdce5de0a552664f203d27d4c774b914c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2cc8e9c3793c01065ec0e00540240bdce5de0a552664f203d27d4c774b914c0->enter($__internal_a2cc8e9c3793c01065ec0e00540240bdce5de0a552664f203d27d4c774b914c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_11f373bdbc1a84a6ec8e9a35146f2497756ba456c154952340847eb46fb9f321->leave($__internal_11f373bdbc1a84a6ec8e9a35146f2497756ba456c154952340847eb46fb9f321_prof);

        
        $__internal_a2cc8e9c3793c01065ec0e00540240bdce5de0a552664f203d27d4c774b914c0->leave($__internal_a2cc8e9c3793c01065ec0e00540240bdce5de0a552664f203d27d4c774b914c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
