<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e8da47c82bdbf50e78aef30bcc8d459ea0b2d9469dfc5aab66ef267e1403fcc8 extends Twig_Template
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
        $__internal_6fbbf274c698a01bce837aef7b4ac540da030fad4d9713b73e0bf7c2ef7c2799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbbf274c698a01bce837aef7b4ac540da030fad4d9713b73e0bf7c2ef7c2799->enter($__internal_6fbbf274c698a01bce837aef7b4ac540da030fad4d9713b73e0bf7c2ef7c2799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3a47f8224baed6244ddb1e933079e41a13e044eb83d2ee33a6323cac70ec90a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a47f8224baed6244ddb1e933079e41a13e044eb83d2ee33a6323cac70ec90a5->enter($__internal_3a47f8224baed6244ddb1e933079e41a13e044eb83d2ee33a6323cac70ec90a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6fbbf274c698a01bce837aef7b4ac540da030fad4d9713b73e0bf7c2ef7c2799->leave($__internal_6fbbf274c698a01bce837aef7b4ac540da030fad4d9713b73e0bf7c2ef7c2799_prof);

        
        $__internal_3a47f8224baed6244ddb1e933079e41a13e044eb83d2ee33a6323cac70ec90a5->leave($__internal_3a47f8224baed6244ddb1e933079e41a13e044eb83d2ee33a6323cac70ec90a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
