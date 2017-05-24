<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_fdef7b3cbc51627ddf34b13ab6fe79909f3fb2aa9aacdf2b43b9e2fe712f399f extends Twig_Template
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
        $__internal_767029b44ccc7cc5b6c8f74dff123b9a4fb99009c5dfb2876769c97f61f97af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767029b44ccc7cc5b6c8f74dff123b9a4fb99009c5dfb2876769c97f61f97af4->enter($__internal_767029b44ccc7cc5b6c8f74dff123b9a4fb99009c5dfb2876769c97f61f97af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_5a13df7b25766f393f7851ee0e8c589399b5241b86eb63255f584cfffd22d645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a13df7b25766f393f7851ee0e8c589399b5241b86eb63255f584cfffd22d645->enter($__internal_5a13df7b25766f393f7851ee0e8c589399b5241b86eb63255f584cfffd22d645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_767029b44ccc7cc5b6c8f74dff123b9a4fb99009c5dfb2876769c97f61f97af4->leave($__internal_767029b44ccc7cc5b6c8f74dff123b9a4fb99009c5dfb2876769c97f61f97af4_prof);

        
        $__internal_5a13df7b25766f393f7851ee0e8c589399b5241b86eb63255f584cfffd22d645->leave($__internal_5a13df7b25766f393f7851ee0e8c589399b5241b86eb63255f584cfffd22d645_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
