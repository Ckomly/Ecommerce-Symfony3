<?php

/* category/index.html.twig */
class __TwigTemplate_1c89d0fbc56f5f67753a90159bdfd70ecaa350e4a39ce26d3becc30c09491855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
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
        $__internal_ba2ab9a708557202c3cbd9c060faab8a606c0ba5cfe8ed07d4c78c06f63b0690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2ab9a708557202c3cbd9c060faab8a606c0ba5cfe8ed07d4c78c06f63b0690->enter($__internal_ba2ab9a708557202c3cbd9c060faab8a606c0ba5cfe8ed07d4c78c06f63b0690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_b2dd392ec120db1cc3c96467c5d09939eeed72b9e3e7f163fff79edfbd1afb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dd392ec120db1cc3c96467c5d09939eeed72b9e3e7f163fff79edfbd1afb5f->enter($__internal_b2dd392ec120db1cc3c96467c5d09939eeed72b9e3e7f163fff79edfbd1afb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba2ab9a708557202c3cbd9c060faab8a606c0ba5cfe8ed07d4c78c06f63b0690->leave($__internal_ba2ab9a708557202c3cbd9c060faab8a606c0ba5cfe8ed07d4c78c06f63b0690_prof);

        
        $__internal_b2dd392ec120db1cc3c96467c5d09939eeed72b9e3e7f163fff79edfbd1afb5f->leave($__internal_b2dd392ec120db1cc3c96467c5d09939eeed72b9e3e7f163fff79edfbd1afb5f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d693cef1d96510400e793a742b1566ec5b71b515ba703dd3a3fab2323715d171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d693cef1d96510400e793a742b1566ec5b71b515ba703dd3a3fab2323715d171->enter($__internal_d693cef1d96510400e793a742b1566ec5b71b515ba703dd3a3fab2323715d171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a93ad4b0f32ef91709551aa82b1a6c64cedcbfc99b51554c4a2568047c8ce8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93ad4b0f32ef91709551aa82b1a6c64cedcbfc99b51554c4a2568047c8ce8f9->enter($__internal_a93ad4b0f32ef91709551aa82b1a6c64cedcbfc99b51554c4a2568047c8ce8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "category", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">show</a>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">edit</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_a93ad4b0f32ef91709551aa82b1a6c64cedcbfc99b51554c4a2568047c8ce8f9->leave($__internal_a93ad4b0f32ef91709551aa82b1a6c64cedcbfc99b51554c4a2568047c8ce8f9_prof);

        
        $__internal_d693cef1d96510400e793a742b1566ec5b71b515ba703dd3a3fab2323715d171->leave($__internal_d693cef1d96510400e793a742b1566ec5b71b515ba703dd3a3fab2323715d171_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  99 => 27,  89 => 23,  85 => 22,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Categories list</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td><a href=\"{{ path('category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                <td>{{ category.name }}</td>
                <td>{{ category.category }}</td>
                <td>
                    <a href=\"{{ path('category_show', { 'id': category.id }) }}\" class=\"btn btn-outline-primary\">show</a>
                    <a href=\"{{ path('category_edit', { 'id': category.id }) }}\" class=\"btn btn-outline-primary\">edit</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('category_new') }}\">Create a new category</a>
        </li>
    </ul>
{% endblock %}
", "category/index.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/category/index.html.twig");
    }
}
