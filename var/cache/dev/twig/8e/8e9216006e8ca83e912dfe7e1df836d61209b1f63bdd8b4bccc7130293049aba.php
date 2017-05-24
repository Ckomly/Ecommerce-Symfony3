<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8379bf755200ba199f8eb9a135bc2640ad66bbe1df70a5c176ed8cec89bf1992 extends Twig_Template
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
        $__internal_884b53e6615dd367de7c4f5b18fa92ad2f04a183312ee3754ad59ddcb929f20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884b53e6615dd367de7c4f5b18fa92ad2f04a183312ee3754ad59ddcb929f20d->enter($__internal_884b53e6615dd367de7c4f5b18fa92ad2f04a183312ee3754ad59ddcb929f20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_acf49efe6d56111a3cee03f674ed2072a052e4f6fe95a3543f3301b0fc651844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf49efe6d56111a3cee03f674ed2072a052e4f6fe95a3543f3301b0fc651844->enter($__internal_acf49efe6d56111a3cee03f674ed2072a052e4f6fe95a3543f3301b0fc651844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_884b53e6615dd367de7c4f5b18fa92ad2f04a183312ee3754ad59ddcb929f20d->leave($__internal_884b53e6615dd367de7c4f5b18fa92ad2f04a183312ee3754ad59ddcb929f20d_prof);

        
        $__internal_acf49efe6d56111a3cee03f674ed2072a052e4f6fe95a3543f3301b0fc651844->leave($__internal_acf49efe6d56111a3cee03f674ed2072a052e4f6fe95a3543f3301b0fc651844_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
