<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8cffbb1fe8b1699a05e879eb7aef88e3bd574f3762956b7656e4af077bb583d3 extends Twig_Template
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
        $__internal_7fe0b51cdb37e5cded016a12f925f66916eabbd62ed8ec1d065dda41f091f6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe0b51cdb37e5cded016a12f925f66916eabbd62ed8ec1d065dda41f091f6a5->enter($__internal_7fe0b51cdb37e5cded016a12f925f66916eabbd62ed8ec1d065dda41f091f6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4230a35902de93b220e0f3803ae7b2d09e8bafc7c52d8b3c7def5f1029812143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4230a35902de93b220e0f3803ae7b2d09e8bafc7c52d8b3c7def5f1029812143->enter($__internal_4230a35902de93b220e0f3803ae7b2d09e8bafc7c52d8b3c7def5f1029812143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7fe0b51cdb37e5cded016a12f925f66916eabbd62ed8ec1d065dda41f091f6a5->leave($__internal_7fe0b51cdb37e5cded016a12f925f66916eabbd62ed8ec1d065dda41f091f6a5_prof);

        
        $__internal_4230a35902de93b220e0f3803ae7b2d09e8bafc7c52d8b3c7def5f1029812143->leave($__internal_4230a35902de93b220e0f3803ae7b2d09e8bafc7c52d8b3c7def5f1029812143_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
