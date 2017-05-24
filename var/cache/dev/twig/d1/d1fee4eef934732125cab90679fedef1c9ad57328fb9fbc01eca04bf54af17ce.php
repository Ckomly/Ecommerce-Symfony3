<?php

/* :rate:edit.html.twig */
class __TwigTemplate_ad0d18b75a2082abe8c40853678f5c42615e8e651615c36d341e2a0db1a26cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rate:edit.html.twig", 1);
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
        $__internal_4ea1386583a393ebd282b859d44399e4684abd48047c12be13b63ebcd68faed7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea1386583a393ebd282b859d44399e4684abd48047c12be13b63ebcd68faed7->enter($__internal_4ea1386583a393ebd282b859d44399e4684abd48047c12be13b63ebcd68faed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rate:edit.html.twig"));

        $__internal_0647dcaeedf04120a2360271a18df21bee7d9c350b23fabf77e6dd59bdf6261f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0647dcaeedf04120a2360271a18df21bee7d9c350b23fabf77e6dd59bdf6261f->enter($__internal_0647dcaeedf04120a2360271a18df21bee7d9c350b23fabf77e6dd59bdf6261f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rate:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ea1386583a393ebd282b859d44399e4684abd48047c12be13b63ebcd68faed7->leave($__internal_4ea1386583a393ebd282b859d44399e4684abd48047c12be13b63ebcd68faed7_prof);

        
        $__internal_0647dcaeedf04120a2360271a18df21bee7d9c350b23fabf77e6dd59bdf6261f->leave($__internal_0647dcaeedf04120a2360271a18df21bee7d9c350b23fabf77e6dd59bdf6261f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6142cf9a6765c8b379492c0637c5a7b77acf0f2370858bd2dbe14e3ce5db83ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6142cf9a6765c8b379492c0637c5a7b77acf0f2370858bd2dbe14e3ce5db83ec->enter($__internal_6142cf9a6765c8b379492c0637c5a7b77acf0f2370858bd2dbe14e3ce5db83ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c32c633a64fbafb1f35fc6c50ace7d8ffcddaef9f16e5b8876348f05c0dac966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32c633a64fbafb1f35fc6c50ace7d8ffcddaef9f16e5b8876348f05c0dac966->enter($__internal_c32c633a64fbafb1f35fc6c50ace7d8ffcddaef9f16e5b8876348f05c0dac966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rate edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_index");
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
        
        $__internal_c32c633a64fbafb1f35fc6c50ace7d8ffcddaef9f16e5b8876348f05c0dac966->leave($__internal_c32c633a64fbafb1f35fc6c50ace7d8ffcddaef9f16e5b8876348f05c0dac966_prof);

        
        $__internal_6142cf9a6765c8b379492c0637c5a7b77acf0f2370858bd2dbe14e3ce5db83ec->leave($__internal_6142cf9a6765c8b379492c0637c5a7b77acf0f2370858bd2dbe14e3ce5db83ec_prof);

    }

    public function getTemplateName()
    {
        return ":rate:edit.html.twig";
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
    <h1>Rate edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('rate_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":rate:edit.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/rate/edit.html.twig");
    }
}
