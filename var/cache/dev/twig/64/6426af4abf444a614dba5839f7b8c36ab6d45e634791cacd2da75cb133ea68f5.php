<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d53658b15e56fd14b303884d834c3407f4d01ff2e637535840b08a37fb3d1798 extends Twig_Template
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
        $__internal_690e918159a9b58c414f7a6c8b021a8737d94f8122c2b8e09c9325349dd2b2d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690e918159a9b58c414f7a6c8b021a8737d94f8122c2b8e09c9325349dd2b2d2->enter($__internal_690e918159a9b58c414f7a6c8b021a8737d94f8122c2b8e09c9325349dd2b2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_26607458c4fe6984079c161830c9491f559de1af13c18beab7c29672dc7c28e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26607458c4fe6984079c161830c9491f559de1af13c18beab7c29672dc7c28e4->enter($__internal_26607458c4fe6984079c161830c9491f559de1af13c18beab7c29672dc7c28e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_690e918159a9b58c414f7a6c8b021a8737d94f8122c2b8e09c9325349dd2b2d2->leave($__internal_690e918159a9b58c414f7a6c8b021a8737d94f8122c2b8e09c9325349dd2b2d2_prof);

        
        $__internal_26607458c4fe6984079c161830c9491f559de1af13c18beab7c29672dc7c28e4->leave($__internal_26607458c4fe6984079c161830c9491f559de1af13c18beab7c29672dc7c28e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
