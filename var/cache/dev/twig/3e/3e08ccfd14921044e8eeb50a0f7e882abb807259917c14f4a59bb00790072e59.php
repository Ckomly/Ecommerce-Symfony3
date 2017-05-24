<?php

/* :category:edit.html.twig */
class __TwigTemplate_d23b9fdb4470001b1ecf5725746a5e8429d4a32de813e7c8a1c49111a2ae7255 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:edit.html.twig", 1);
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
        $__internal_bdb6bdae66eed57dfd3ec013446abd265d731d2f901ceacbac41caad6f50a22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb6bdae66eed57dfd3ec013446abd265d731d2f901ceacbac41caad6f50a22d->enter($__internal_bdb6bdae66eed57dfd3ec013446abd265d731d2f901ceacbac41caad6f50a22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $__internal_28d84f4d744feed9b70db5159de1afbedc9a48367fefddc174b041bf702793dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d84f4d744feed9b70db5159de1afbedc9a48367fefddc174b041bf702793dd->enter($__internal_28d84f4d744feed9b70db5159de1afbedc9a48367fefddc174b041bf702793dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdb6bdae66eed57dfd3ec013446abd265d731d2f901ceacbac41caad6f50a22d->leave($__internal_bdb6bdae66eed57dfd3ec013446abd265d731d2f901ceacbac41caad6f50a22d_prof);

        
        $__internal_28d84f4d744feed9b70db5159de1afbedc9a48367fefddc174b041bf702793dd->leave($__internal_28d84f4d744feed9b70db5159de1afbedc9a48367fefddc174b041bf702793dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34438945eb88d6175b104ef98307a967928a8810783b2cee49a2b16e5e9f3f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34438945eb88d6175b104ef98307a967928a8810783b2cee49a2b16e5e9f3f17->enter($__internal_34438945eb88d6175b104ef98307a967928a8810783b2cee49a2b16e5e9f3f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5fa045534c381edadc0f3eee537d9301f66f7f90aed5d96b87ecfc8ee27275e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fa045534c381edadc0f3eee537d9301f66f7f90aed5d96b87ecfc8ee27275e->enter($__internal_e5fa045534c381edadc0f3eee537d9301f66f7f90aed5d96b87ecfc8ee27275e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e5fa045534c381edadc0f3eee537d9301f66f7f90aed5d96b87ecfc8ee27275e->leave($__internal_e5fa045534c381edadc0f3eee537d9301f66f7f90aed5d96b87ecfc8ee27275e_prof);

        
        $__internal_34438945eb88d6175b104ef98307a967928a8810783b2cee49a2b16e5e9f3f17->leave($__internal_34438945eb88d6175b104ef98307a967928a8810783b2cee49a2b16e5e9f3f17_prof);

    }

    public function getTemplateName()
    {
        return ":category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Category edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":category:edit.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/category/edit.html.twig");
    }
}
