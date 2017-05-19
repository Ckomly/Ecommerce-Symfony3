<?php

/* product/index.html.twig */
class __TwigTemplate_f1fa677b6c43b01ba566f594e214d0eb404574ab71756cb4c76086903b3f75d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        $__internal_43525f111192087147587b2ade9dc5b64dff4c756dd3357bca5be8c991d0d4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43525f111192087147587b2ade9dc5b64dff4c756dd3357bca5be8c991d0d4b2->enter($__internal_43525f111192087147587b2ade9dc5b64dff4c756dd3357bca5be8c991d0d4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_63e6bd7e5b57de31d640e1416fc3782bcb2bf6bb1884fa1493dc6c0ba3cdd634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e6bd7e5b57de31d640e1416fc3782bcb2bf6bb1884fa1493dc6c0ba3cdd634->enter($__internal_63e6bd7e5b57de31d640e1416fc3782bcb2bf6bb1884fa1493dc6c0ba3cdd634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43525f111192087147587b2ade9dc5b64dff4c756dd3357bca5be8c991d0d4b2->leave($__internal_43525f111192087147587b2ade9dc5b64dff4c756dd3357bca5be8c991d0d4b2_prof);

        
        $__internal_63e6bd7e5b57de31d640e1416fc3782bcb2bf6bb1884fa1493dc6c0ba3cdd634->leave($__internal_63e6bd7e5b57de31d640e1416fc3782bcb2bf6bb1884fa1493dc6c0ba3cdd634_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af3efa70611c049326635012877c3ac64c555d72105c45e9e0f736be48b6d0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3efa70611c049326635012877c3ac64c555d72105c45e9e0f736be48b6d0d9->enter($__internal_af3efa70611c049326635012877c3ac64c555d72105c45e9e0f736be48b6d0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54c8a5ef7b423346a46ce46df4a70459d3cfc03f992fabe3c035f688cd0af41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c8a5ef7b423346a46ce46df4a70459d3cfc03f992fabe3c035f688cd0af41c->enter($__internal_54c8a5ef7b423346a46ce46df4a70459d3cfc03f992fabe3c035f688cd0af41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Products list</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">show</a>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">edit</a>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_new", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Rate</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_new");
        echo "\">Create a new product</a>
        </li>
    </ul>
";
        
        $__internal_54c8a5ef7b423346a46ce46df4a70459d3cfc03f992fabe3c035f688cd0af41c->leave($__internal_54c8a5ef7b423346a46ce46df4a70459d3cfc03f992fabe3c035f688cd0af41c_prof);

        
        $__internal_af3efa70611c049326635012877c3ac64c555d72105c45e9e0f736be48b6d0d9->leave($__internal_af3efa70611c049326635012877c3ac64c555d72105c45e9e0f736be48b6d0d9_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  108 => 30,  98 => 26,  94 => 25,  90 => 24,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Products list</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for product in products %}
            <tr>
                <td><a href=\"{{ path('product_show', { 'id': product.id }) }}\">{{ product.id }}</a></td>
                <td>{{ product.name }}</td>
                <td>{{ product.description }}</td>
                <td>{{ product.price }}</td>
                <td>
                    <a href=\"{{ path('product_show', { 'id': product.id }) }}\" class=\"btn btn-outline-primary\">show</a>
                    <a href=\"{{ path('product_edit', { 'id': product.id }) }}\" class=\"btn btn-outline-primary\">edit</a>
                    <a href=\"{{ path('rate_new', { 'id': product.id }) }}\" class=\"btn btn-outline-primary\">Rate</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_new') }}\">Create a new product</a>
        </li>
    </ul>
{% endblock %}
", "product/index.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/product/index.html.twig");
    }
}
