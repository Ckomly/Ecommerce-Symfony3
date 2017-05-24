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
        $__internal_166f829c99526392a22a6ff4c6add0c75fe0cec3a420d576d07db0ba9e986ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166f829c99526392a22a6ff4c6add0c75fe0cec3a420d576d07db0ba9e986ae8->enter($__internal_166f829c99526392a22a6ff4c6add0c75fe0cec3a420d576d07db0ba9e986ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b7168c6e740e3ff68f2530aab5eff3337473c56dea2be531264083e2c71c8998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7168c6e740e3ff68f2530aab5eff3337473c56dea2be531264083e2c71c8998->enter($__internal_b7168c6e740e3ff68f2530aab5eff3337473c56dea2be531264083e2c71c8998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_166f829c99526392a22a6ff4c6add0c75fe0cec3a420d576d07db0ba9e986ae8->leave($__internal_166f829c99526392a22a6ff4c6add0c75fe0cec3a420d576d07db0ba9e986ae8_prof);

        
        $__internal_b7168c6e740e3ff68f2530aab5eff3337473c56dea2be531264083e2c71c8998->leave($__internal_b7168c6e740e3ff68f2530aab5eff3337473c56dea2be531264083e2c71c8998_prof);

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
