<?php

/* category/new.html.twig */
class __TwigTemplate_0a2aab3d007b54e4c8cf66ca494197a8e6989206fa1787a12dd6603773f215c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b560a9392201f23043c0759e62223bb3339bf3fc114ebb92a0509e888fd7776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b560a9392201f23043c0759e62223bb3339bf3fc114ebb92a0509e888fd7776->enter($__internal_1b560a9392201f23043c0759e62223bb3339bf3fc114ebb92a0509e888fd7776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $__internal_df2161461292fc7025abd065dd932bdcc981051dfde2c39e5d66a05d74af6115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2161461292fc7025abd065dd932bdcc981051dfde2c39e5d66a05d74af6115->enter($__internal_df2161461292fc7025abd065dd932bdcc981051dfde2c39e5d66a05d74af6115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b560a9392201f23043c0759e62223bb3339bf3fc114ebb92a0509e888fd7776->leave($__internal_1b560a9392201f23043c0759e62223bb3339bf3fc114ebb92a0509e888fd7776_prof);

        
        $__internal_df2161461292fc7025abd065dd932bdcc981051dfde2c39e5d66a05d74af6115->leave($__internal_df2161461292fc7025abd065dd932bdcc981051dfde2c39e5d66a05d74af6115_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_caf79f06e039c145df87e937ed256818577a46249fa2267903bad10697054a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf79f06e039c145df87e937ed256818577a46249fa2267903bad10697054a16->enter($__internal_caf79f06e039c145df87e937ed256818577a46249fa2267903bad10697054a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb8a0fb9ef17f0fe70b92980611c7290ef7b2f2393049f319b1ff79780086bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8a0fb9ef17f0fe70b92980611c7290ef7b2f2393049f319b1ff79780086bd3->enter($__internal_bb8a0fb9ef17f0fe70b92980611c7290ef7b2f2393049f319b1ff79780086bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bb8a0fb9ef17f0fe70b92980611c7290ef7b2f2393049f319b1ff79780086bd3->leave($__internal_bb8a0fb9ef17f0fe70b92980611c7290ef7b2f2393049f319b1ff79780086bd3_prof);

        
        $__internal_caf79f06e039c145df87e937ed256818577a46249fa2267903bad10697054a16->leave($__internal_caf79f06e039c145df87e937ed256818577a46249fa2267903bad10697054a16_prof);

    }

    public function getTemplateName()
    {
        return "category/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Category creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "category/new.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/category/new.html.twig");
    }
}
