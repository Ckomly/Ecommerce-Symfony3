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
        $__internal_8b9489440a428bd9ffc64dd69904426651fb1eb10c7cf2de2f401fcbf196b2ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9489440a428bd9ffc64dd69904426651fb1eb10c7cf2de2f401fcbf196b2ff->enter($__internal_8b9489440a428bd9ffc64dd69904426651fb1eb10c7cf2de2f401fcbf196b2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_b6203afc1a2f3185b3ee91161a95a4d0be709f033875bf5af47bbbcccb31e4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6203afc1a2f3185b3ee91161a95a4d0be709f033875bf5af47bbbcccb31e4dd->enter($__internal_b6203afc1a2f3185b3ee91161a95a4d0be709f033875bf5af47bbbcccb31e4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_8b9489440a428bd9ffc64dd69904426651fb1eb10c7cf2de2f401fcbf196b2ff->leave($__internal_8b9489440a428bd9ffc64dd69904426651fb1eb10c7cf2de2f401fcbf196b2ff_prof);

        
        $__internal_b6203afc1a2f3185b3ee91161a95a4d0be709f033875bf5af47bbbcccb31e4dd->leave($__internal_b6203afc1a2f3185b3ee91161a95a4d0be709f033875bf5af47bbbcccb31e4dd_prof);

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
