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
        $__internal_163798613398cc7a61a2937c6383739de300d9be6ef8857e3191ff3e4fe0f488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163798613398cc7a61a2937c6383739de300d9be6ef8857e3191ff3e4fe0f488->enter($__internal_163798613398cc7a61a2937c6383739de300d9be6ef8857e3191ff3e4fe0f488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_34635a4dd2692ed0c0360d79f794299a26e94753595f06ff669a23b12059eeb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34635a4dd2692ed0c0360d79f794299a26e94753595f06ff669a23b12059eeb7->enter($__internal_34635a4dd2692ed0c0360d79f794299a26e94753595f06ff669a23b12059eeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_163798613398cc7a61a2937c6383739de300d9be6ef8857e3191ff3e4fe0f488->leave($__internal_163798613398cc7a61a2937c6383739de300d9be6ef8857e3191ff3e4fe0f488_prof);

        
        $__internal_34635a4dd2692ed0c0360d79f794299a26e94753595f06ff669a23b12059eeb7->leave($__internal_34635a4dd2692ed0c0360d79f794299a26e94753595f06ff669a23b12059eeb7_prof);

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
