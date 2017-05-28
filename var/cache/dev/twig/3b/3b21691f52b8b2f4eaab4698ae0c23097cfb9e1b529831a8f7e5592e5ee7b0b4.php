<?php

/* product/edit.html.twig */
class __TwigTemplate_f2eafe8b02d05a6f8bc21eb702a7fa34f2e843f94489c69ed1ef01e164d9b3f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/edit.html.twig", 1);
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
        $__internal_f7d01318d774f976b807d5bf77d0260936960bbefb68d08a5b527fc2a927c4b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d01318d774f976b807d5bf77d0260936960bbefb68d08a5b527fc2a927c4b5->enter($__internal_f7d01318d774f976b807d5bf77d0260936960bbefb68d08a5b527fc2a927c4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $__internal_c95ffd3bba31acdad962faeec89e0608a8cc20e034f3ba5eb1da6eb3e1bcda5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95ffd3bba31acdad962faeec89e0608a8cc20e034f3ba5eb1da6eb3e1bcda5e->enter($__internal_c95ffd3bba31acdad962faeec89e0608a8cc20e034f3ba5eb1da6eb3e1bcda5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d01318d774f976b807d5bf77d0260936960bbefb68d08a5b527fc2a927c4b5->leave($__internal_f7d01318d774f976b807d5bf77d0260936960bbefb68d08a5b527fc2a927c4b5_prof);

        
        $__internal_c95ffd3bba31acdad962faeec89e0608a8cc20e034f3ba5eb1da6eb3e1bcda5e->leave($__internal_c95ffd3bba31acdad962faeec89e0608a8cc20e034f3ba5eb1da6eb3e1bcda5e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ba09484db06db7f3dcbe0d9d7a4566adf9d18cafb2c5f66d6eab40da54e17f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba09484db06db7f3dcbe0d9d7a4566adf9d18cafb2c5f66d6eab40da54e17f0->enter($__internal_6ba09484db06db7f3dcbe0d9d7a4566adf9d18cafb2c5f66d6eab40da54e17f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3748f78bdcc44ad59bc14d0987a25824e456e152f86dc9d1e6f5f192ac67ab92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3748f78bdcc44ad59bc14d0987a25824e456e152f86dc9d1e6f5f192ac67ab92->enter($__internal_3748f78bdcc44ad59bc14d0987a25824e456e152f86dc9d1e6f5f192ac67ab92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
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
        
        $__internal_3748f78bdcc44ad59bc14d0987a25824e456e152f86dc9d1e6f5f192ac67ab92->leave($__internal_3748f78bdcc44ad59bc14d0987a25824e456e152f86dc9d1e6f5f192ac67ab92_prof);

        
        $__internal_6ba09484db06db7f3dcbe0d9d7a4566adf9d18cafb2c5f66d6eab40da54e17f0->leave($__internal_6ba09484db06db7f3dcbe0d9d7a4566adf9d18cafb2c5f66d6eab40da54e17f0_prof);

    }

    public function getTemplateName()
    {
        return "product/edit.html.twig";
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
    <h1>Product edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product/edit.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/product/edit.html.twig");
    }
}
