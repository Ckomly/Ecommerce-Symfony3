<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bd9138c75d34683d1be6dab69d393fcdf5948f03f5be714a6a2d77b604181883 extends Twig_Template
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
        $__internal_f20619b21ddca9f64944a4dfd2bff0fb097bf390e78bf34d26d50d5541496880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20619b21ddca9f64944a4dfd2bff0fb097bf390e78bf34d26d50d5541496880->enter($__internal_f20619b21ddca9f64944a4dfd2bff0fb097bf390e78bf34d26d50d5541496880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_63fcec1bcdb03fdada1353acd02810f455155420dcc8d51e3ad725226f315dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fcec1bcdb03fdada1353acd02810f455155420dcc8d51e3ad725226f315dd0->enter($__internal_63fcec1bcdb03fdada1353acd02810f455155420dcc8d51e3ad725226f315dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f20619b21ddca9f64944a4dfd2bff0fb097bf390e78bf34d26d50d5541496880->leave($__internal_f20619b21ddca9f64944a4dfd2bff0fb097bf390e78bf34d26d50d5541496880_prof);

        
        $__internal_63fcec1bcdb03fdada1353acd02810f455155420dcc8d51e3ad725226f315dd0->leave($__internal_63fcec1bcdb03fdada1353acd02810f455155420dcc8d51e3ad725226f315dd0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
