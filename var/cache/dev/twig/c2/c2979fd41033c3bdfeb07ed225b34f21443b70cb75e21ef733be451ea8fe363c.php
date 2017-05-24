<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d044b5b9fa6cb4e2bc707333177a330c48f7d931749ce4128e14fbce038de2c3 extends Twig_Template
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
        $__internal_b75cc63ff8b092e4e0d9cce635d63d21493f2fa104814fa5fee7cb3cf0fa9a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75cc63ff8b092e4e0d9cce635d63d21493f2fa104814fa5fee7cb3cf0fa9a92->enter($__internal_b75cc63ff8b092e4e0d9cce635d63d21493f2fa104814fa5fee7cb3cf0fa9a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_e1fab945dd12ba7ccf90fb14edf35453d4c2884629c84121008b9bf8fbfab46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fab945dd12ba7ccf90fb14edf35453d4c2884629c84121008b9bf8fbfab46b->enter($__internal_e1fab945dd12ba7ccf90fb14edf35453d4c2884629c84121008b9bf8fbfab46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b75cc63ff8b092e4e0d9cce635d63d21493f2fa104814fa5fee7cb3cf0fa9a92->leave($__internal_b75cc63ff8b092e4e0d9cce635d63d21493f2fa104814fa5fee7cb3cf0fa9a92_prof);

        
        $__internal_e1fab945dd12ba7ccf90fb14edf35453d4c2884629c84121008b9bf8fbfab46b->leave($__internal_e1fab945dd12ba7ccf90fb14edf35453d4c2884629c84121008b9bf8fbfab46b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
