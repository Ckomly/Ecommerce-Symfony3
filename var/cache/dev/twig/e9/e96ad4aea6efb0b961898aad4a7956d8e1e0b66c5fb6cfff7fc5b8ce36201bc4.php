<?php

/* category/show.html.twig */
class __TwigTemplate_5f4c4caf2c0e21d38ebe1039a32044d657ff88e404d7dcbcc67fce6bc9c04bcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/show.html.twig", 1);
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
        $__internal_76d81c4109b0f82c97ca32af767535a6488620ee88e300494700793684ebf144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d81c4109b0f82c97ca32af767535a6488620ee88e300494700793684ebf144->enter($__internal_76d81c4109b0f82c97ca32af767535a6488620ee88e300494700793684ebf144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $__internal_39c6d1e639ef4571bc4532a6d92a60f234f3e61dfe1cca320d9320480261a830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c6d1e639ef4571bc4532a6d92a60f234f3e61dfe1cca320d9320480261a830->enter($__internal_39c6d1e639ef4571bc4532a6d92a60f234f3e61dfe1cca320d9320480261a830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76d81c4109b0f82c97ca32af767535a6488620ee88e300494700793684ebf144->leave($__internal_76d81c4109b0f82c97ca32af767535a6488620ee88e300494700793684ebf144_prof);

        
        $__internal_39c6d1e639ef4571bc4532a6d92a60f234f3e61dfe1cca320d9320480261a830->leave($__internal_39c6d1e639ef4571bc4532a6d92a60f234f3e61dfe1cca320d9320480261a830_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd021bf9752d840328d3e3c380862174b57178907ad617b4a3fb6d91580e1ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd021bf9752d840328d3e3c380862174b57178907ad617b4a3fb6d91580e1ea9->enter($__internal_fd021bf9752d840328d3e3c380862174b57178907ad617b4a3fb6d91580e1ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b01a539a62f8f5ef31973272bd8ebbce0a1e3db8a606dfbedeb8b453b62a0ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01a539a62f8f5ef31973272bd8ebbce0a1e3db8a606dfbedeb8b453b62a0ae4->enter($__internal_b01a539a62f8f5ef31973272bd8ebbce0a1e3db8a606dfbedeb8b453b62a0ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "category", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b01a539a62f8f5ef31973272bd8ebbce0a1e3db8a606dfbedeb8b453b62a0ae4->leave($__internal_b01a539a62f8f5ef31973272bd8ebbce0a1e3db8a606dfbedeb8b453b62a0ae4_prof);

        
        $__internal_fd021bf9752d840328d3e3c380862174b57178907ad617b4a3fb6d91580e1ea9->leave($__internal_fd021bf9752d840328d3e3c380862174b57178907ad617b4a3fb6d91580e1ea9_prof);

    }

    public function getTemplateName()
    {
        return "category/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ category.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ category.name }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ category.category }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('category_edit', { 'id': category.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "category/show.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/category/show.html.twig");
    }
}
