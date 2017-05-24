<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b62c5a534f913c2e7bdf389d8c2467f29272453f660d2c60a71d102a1f9c547b extends Twig_Template
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
        $__internal_83fa476b8c5807448ae13003bdf2e07196a81e0bd2386677478912fa7da93536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83fa476b8c5807448ae13003bdf2e07196a81e0bd2386677478912fa7da93536->enter($__internal_83fa476b8c5807448ae13003bdf2e07196a81e0bd2386677478912fa7da93536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6bb82695c4555745fc62e14d95d33a6ff4c6afb3d313923e79da350e66d792a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb82695c4555745fc62e14d95d33a6ff4c6afb3d313923e79da350e66d792a2->enter($__internal_6bb82695c4555745fc62e14d95d33a6ff4c6afb3d313923e79da350e66d792a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_83fa476b8c5807448ae13003bdf2e07196a81e0bd2386677478912fa7da93536->leave($__internal_83fa476b8c5807448ae13003bdf2e07196a81e0bd2386677478912fa7da93536_prof);

        
        $__internal_6bb82695c4555745fc62e14d95d33a6ff4c6afb3d313923e79da350e66d792a2->leave($__internal_6bb82695c4555745fc62e14d95d33a6ff4c6afb3d313923e79da350e66d792a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
