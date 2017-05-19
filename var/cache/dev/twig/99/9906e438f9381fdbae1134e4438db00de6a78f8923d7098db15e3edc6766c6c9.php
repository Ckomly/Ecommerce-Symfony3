<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9da4296c33e4a2507a8266e721232d10f3a1b58beaa68b6875203d4e982a6302 extends Twig_Template
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
        $__internal_11bd1e06a0f01248fdcb63f13c5d6029c1d0bd33a2ee6b9268544e7aa1522837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11bd1e06a0f01248fdcb63f13c5d6029c1d0bd33a2ee6b9268544e7aa1522837->enter($__internal_11bd1e06a0f01248fdcb63f13c5d6029c1d0bd33a2ee6b9268544e7aa1522837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_950df5949f5af5e87d0e8c9a2d2600d2f50d2a05bc242643b01edae97ef2678d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950df5949f5af5e87d0e8c9a2d2600d2f50d2a05bc242643b01edae97ef2678d->enter($__internal_950df5949f5af5e87d0e8c9a2d2600d2f50d2a05bc242643b01edae97ef2678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_11bd1e06a0f01248fdcb63f13c5d6029c1d0bd33a2ee6b9268544e7aa1522837->leave($__internal_11bd1e06a0f01248fdcb63f13c5d6029c1d0bd33a2ee6b9268544e7aa1522837_prof);

        
        $__internal_950df5949f5af5e87d0e8c9a2d2600d2f50d2a05bc242643b01edae97ef2678d->leave($__internal_950df5949f5af5e87d0e8c9a2d2600d2f50d2a05bc242643b01edae97ef2678d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
