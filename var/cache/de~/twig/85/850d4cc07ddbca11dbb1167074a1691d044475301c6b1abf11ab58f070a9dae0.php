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
        $__internal_a20337410f962bed048dad0238596824e27ed58af0fbf2b534b9ceedf72e2be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20337410f962bed048dad0238596824e27ed58af0fbf2b534b9ceedf72e2be9->enter($__internal_a20337410f962bed048dad0238596824e27ed58af0fbf2b534b9ceedf72e2be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_9546a1c99330179a728dd786df07b86e7f12c200009c13cf76921027143d3d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9546a1c99330179a728dd786df07b86e7f12c200009c13cf76921027143d3d6e->enter($__internal_9546a1c99330179a728dd786df07b86e7f12c200009c13cf76921027143d3d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a20337410f962bed048dad0238596824e27ed58af0fbf2b534b9ceedf72e2be9->leave($__internal_a20337410f962bed048dad0238596824e27ed58af0fbf2b534b9ceedf72e2be9_prof);

        
        $__internal_9546a1c99330179a728dd786df07b86e7f12c200009c13cf76921027143d3d6e->leave($__internal_9546a1c99330179a728dd786df07b86e7f12c200009c13cf76921027143d3d6e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e943e4553a7c4b4937001923aba9500a21cff9cd8279865be18d81b2f300709f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e943e4553a7c4b4937001923aba9500a21cff9cd8279865be18d81b2f300709f->enter($__internal_e943e4553a7c4b4937001923aba9500a21cff9cd8279865be18d81b2f300709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a06a13169478f93a1dafe10b945ade98f8cd6d129215eea69ab462e6184b54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a06a13169478f93a1dafe10b945ade98f8cd6d129215eea69ab462e6184b54e->enter($__internal_5a06a13169478f93a1dafe10b945ade98f8cd6d129215eea69ab462e6184b54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo " €</td>
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
            echo " by ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_new", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "type" => "product")), "html", null, true);
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
        
        $__internal_5a06a13169478f93a1dafe10b945ade98f8cd6d129215eea69ab462e6184b54e->leave($__internal_5a06a13169478f93a1dafe10b945ade98f8cd6d129215eea69ab462e6184b54e_prof);

        
        $__internal_e943e4553a7c4b4937001923aba9500a21cff9cd8279865be18d81b2f300709f->leave($__internal_e943e4553a7c4b4937001923aba9500a21cff9cd8279865be18d81b2f300709f_prof);

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
        return array (  143 => 51,  138 => 49,  132 => 46,  126 => 43,  120 => 40,  114 => 36,  105 => 33,  101 => 32,  93 => 29,  90 => 28,  86 => 27,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                <td>{{ product.price }} €</td>
            </tr>
        </tbody>
    </table>
    <div class=\"panel panel-default\">
        {% for rate in rates %}
        <div class=\"panel-heading\">
          <p>Date: {{ rate.date|date('Y-m-d') }} by {{ rate.name }}</p>
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
            <a href=\"{{ path('rate_new', { 'id': product.id, 'type': 'product' }) }}\">Rate</a>
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
