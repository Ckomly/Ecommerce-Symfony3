<?php

/* product/show.html.twig */
class __TwigTemplate_897b0951cb044d593ede039758b1a1a3a401837335c1b66ae1c199d11379b093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
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
        $__internal_4b58ab73d2c87ac8061e812e80e63652c168d623ed5d1d3d21a63bc45a08beb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b58ab73d2c87ac8061e812e80e63652c168d623ed5d1d3d21a63bc45a08beb0->enter($__internal_4b58ab73d2c87ac8061e812e80e63652c168d623ed5d1d3d21a63bc45a08beb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_eb6b3f7c3b842996e594e696795976e010e6ee9e04a2caad5cc901167c2b6821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6b3f7c3b842996e594e696795976e010e6ee9e04a2caad5cc901167c2b6821->enter($__internal_eb6b3f7c3b842996e594e696795976e010e6ee9e04a2caad5cc901167c2b6821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b58ab73d2c87ac8061e812e80e63652c168d623ed5d1d3d21a63bc45a08beb0->leave($__internal_4b58ab73d2c87ac8061e812e80e63652c168d623ed5d1d3d21a63bc45a08beb0_prof);

        
        $__internal_eb6b3f7c3b842996e594e696795976e010e6ee9e04a2caad5cc901167c2b6821->leave($__internal_eb6b3f7c3b842996e594e696795976e010e6ee9e04a2caad5cc901167c2b6821_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15d7f0dbf30ce10ee53e4432841fa3cc5300f077550cb028f2ac0f45f9889915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d7f0dbf30ce10ee53e4432841fa3cc5300f077550cb028f2ac0f45f9889915->enter($__internal_15d7f0dbf30ce10ee53e4432841fa3cc5300f077550cb028f2ac0f45f9889915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f423c63fc377e348cf0bd4ef6b8e79efe966c049f20447672d9c09f93f2e862a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f423c63fc377e348cf0bd4ef6b8e79efe966c049f20447672d9c09f93f2e862a->enter($__internal_f423c63fc377e348cf0bd4ef6b8e79efe966c049f20447672d9c09f93f2e862a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product</h1>

    <table class=\"table table-striped\">
        <tbody >
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    <div class=\"panel panel-default\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rates"] ?? $this->getContext($context, "rates")));
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 28
            echo "        <div class=\"panel-heading\">
          <p>Date: ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rate"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</p>
        </div>
        <div class=\"panel-body\">
          <p>Rate: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "value", array()), "html", null, true);
            echo "</p>
          <p>Comment: ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "comment", array()), "html", null, true);
            echo "</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_new", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">Rate</a>
        </li>
        <li>
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f423c63fc377e348cf0bd4ef6b8e79efe966c049f20447672d9c09f93f2e862a->leave($__internal_f423c63fc377e348cf0bd4ef6b8e79efe966c049f20447672d9c09f93f2e862a_prof);

        
        $__internal_15d7f0dbf30ce10ee53e4432841fa3cc5300f077550cb028f2ac0f45f9889915->leave($__internal_15d7f0dbf30ce10ee53e4432841fa3cc5300f077550cb028f2ac0f45f9889915_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 51,  136 => 49,  130 => 46,  124 => 43,  118 => 40,  112 => 36,  103 => 33,  99 => 32,  93 => 29,  90 => 28,  86 => 27,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Product</h1>

    <table class=\"table table-striped\">
        <tbody >
            <tr>
                <th>Id</th>
                <td>{{ product.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ product.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ product.description }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product.price }}</td>
            </tr>
        </tbody>
    </table>
    <div class=\"panel panel-default\">
        {% for rate in rates %}
        <div class=\"panel-heading\">
          <p>Date: {{ rate.date|date('Y-m-d') }}</p>
        </div>
        <div class=\"panel-body\">
          <p>Rate: {{ rate.value }}</p>
          <p>Comment: {{ rate.comment }}</p>
        </div>
        {% endfor %}
    </div>

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('product_edit', { 'id': product.id }) }}\">Edit</a>
        </li>
        <li>
            <a href=\"{{ path('rate_new', { 'id': product.id }) }}\">Rate</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product/show.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/product/show.html.twig");
    }
}
