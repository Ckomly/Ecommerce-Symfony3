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
        $__internal_2ab79378359faaf3871d2a1b540aa0c7c738fe8d0c5f55d865fa14dbae0d6d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab79378359faaf3871d2a1b540aa0c7c738fe8d0c5f55d865fa14dbae0d6d5e->enter($__internal_2ab79378359faaf3871d2a1b540aa0c7c738fe8d0c5f55d865fa14dbae0d6d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_5d571c2f821685fa044442659e5cf4228ba096ab1b9ed7ab812ef9eb98786adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d571c2f821685fa044442659e5cf4228ba096ab1b9ed7ab812ef9eb98786adc->enter($__internal_5d571c2f821685fa044442659e5cf4228ba096ab1b9ed7ab812ef9eb98786adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ab79378359faaf3871d2a1b540aa0c7c738fe8d0c5f55d865fa14dbae0d6d5e->leave($__internal_2ab79378359faaf3871d2a1b540aa0c7c738fe8d0c5f55d865fa14dbae0d6d5e_prof);

        
        $__internal_5d571c2f821685fa044442659e5cf4228ba096ab1b9ed7ab812ef9eb98786adc->leave($__internal_5d571c2f821685fa044442659e5cf4228ba096ab1b9ed7ab812ef9eb98786adc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b5ae7a40b7c33557a1b797ef272bf76c12c3aedeb03abad34abd77bf00587a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b5ae7a40b7c33557a1b797ef272bf76c12c3aedeb03abad34abd77bf00587a8->enter($__internal_1b5ae7a40b7c33557a1b797ef272bf76c12c3aedeb03abad34abd77bf00587a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_deb363b0e5ff733ca89bf16812a8577379b341f2c9496018b15bd2177f01557d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb363b0e5ff733ca89bf16812a8577379b341f2c9496018b15bd2177f01557d->enter($__internal_deb363b0e5ff733ca89bf16812a8577379b341f2c9496018b15bd2177f01557d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_new", array("id" => $this->getAttribute($context["product"], "id", array()), "type" => "product")), "html", null, true);
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
        
        $__internal_deb363b0e5ff733ca89bf16812a8577379b341f2c9496018b15bd2177f01557d->leave($__internal_deb363b0e5ff733ca89bf16812a8577379b341f2c9496018b15bd2177f01557d_prof);

        
        $__internal_1b5ae7a40b7c33557a1b797ef272bf76c12c3aedeb03abad34abd77bf00587a8->leave($__internal_1b5ae7a40b7c33557a1b797ef272bf76c12c3aedeb03abad34abd77bf00587a8_prof);

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
                    <a href=\"{{ path('rate_new', { 'id': product.id, 'type': 'product' }) }}\" class=\"btn btn-outline-primary\">Rate</a>
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
