<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ec14cc3b2c8168b74a9a870dce4471c37542a8af95d1c3deda5e8bf67f7d3c6d extends Twig_Template
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
        $__internal_82d572fdff7f135ff565fab6837f1965569cc7db5e6d0c5e0e0d92a3ad2194d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d572fdff7f135ff565fab6837f1965569cc7db5e6d0c5e0e0d92a3ad2194d1->enter($__internal_82d572fdff7f135ff565fab6837f1965569cc7db5e6d0c5e0e0d92a3ad2194d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_bf74deb563a06795d2a70d38f0530a2d955e6b4693aabf69d335dedea3d9446f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf74deb563a06795d2a70d38f0530a2d955e6b4693aabf69d335dedea3d9446f->enter($__internal_bf74deb563a06795d2a70d38f0530a2d955e6b4693aabf69d335dedea3d9446f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_82d572fdff7f135ff565fab6837f1965569cc7db5e6d0c5e0e0d92a3ad2194d1->leave($__internal_82d572fdff7f135ff565fab6837f1965569cc7db5e6d0c5e0e0d92a3ad2194d1_prof);

        
        $__internal_bf74deb563a06795d2a70d38f0530a2d955e6b4693aabf69d335dedea3d9446f->leave($__internal_bf74deb563a06795d2a70d38f0530a2d955e6b4693aabf69d335dedea3d9446f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
