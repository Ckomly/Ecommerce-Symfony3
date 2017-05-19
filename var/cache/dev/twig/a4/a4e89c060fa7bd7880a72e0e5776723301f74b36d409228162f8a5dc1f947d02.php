<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f6ec7f51f2d51e10ad09ad7f2f36fcd1e8d01be6d18aa5fbd82ae21ca0f6871 extends Twig_Template
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
        $__internal_c3ddfab1ad241ce07797e0b72eb9c7a211f320710da887cd90cf80d485c95cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ddfab1ad241ce07797e0b72eb9c7a211f320710da887cd90cf80d485c95cd6->enter($__internal_c3ddfab1ad241ce07797e0b72eb9c7a211f320710da887cd90cf80d485c95cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_959d87ba07e443e8654ed2f88b836f33f2ed9ed5cb9e60f4d42b5beb0236c136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959d87ba07e443e8654ed2f88b836f33f2ed9ed5cb9e60f4d42b5beb0236c136->enter($__internal_959d87ba07e443e8654ed2f88b836f33f2ed9ed5cb9e60f4d42b5beb0236c136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c3ddfab1ad241ce07797e0b72eb9c7a211f320710da887cd90cf80d485c95cd6->leave($__internal_c3ddfab1ad241ce07797e0b72eb9c7a211f320710da887cd90cf80d485c95cd6_prof);

        
        $__internal_959d87ba07e443e8654ed2f88b836f33f2ed9ed5cb9e60f4d42b5beb0236c136->leave($__internal_959d87ba07e443e8654ed2f88b836f33f2ed9ed5cb9e60f4d42b5beb0236c136_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
