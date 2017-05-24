<?php

/* :rate:index.html.twig */
class __TwigTemplate_dce2c11dd1fddadbde4f8558ed992613170af54f1dfdb6df7646f8b54b60e69b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rate:index.html.twig", 1);
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
        $__internal_c217da5863d39fe894bdf523d9d1f8ea2691bc0d28a0d6da24ac18654c269edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c217da5863d39fe894bdf523d9d1f8ea2691bc0d28a0d6da24ac18654c269edd->enter($__internal_c217da5863d39fe894bdf523d9d1f8ea2691bc0d28a0d6da24ac18654c269edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rate:index.html.twig"));

        $__internal_9b2032a999c85f2b2c658ef6c4a9f475dc47d36e2df1ec77c14428eac2ebc595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2032a999c85f2b2c658ef6c4a9f475dc47d36e2df1ec77c14428eac2ebc595->enter($__internal_9b2032a999c85f2b2c658ef6c4a9f475dc47d36e2df1ec77c14428eac2ebc595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rate:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c217da5863d39fe894bdf523d9d1f8ea2691bc0d28a0d6da24ac18654c269edd->leave($__internal_c217da5863d39fe894bdf523d9d1f8ea2691bc0d28a0d6da24ac18654c269edd_prof);

        
        $__internal_9b2032a999c85f2b2c658ef6c4a9f475dc47d36e2df1ec77c14428eac2ebc595->leave($__internal_9b2032a999c85f2b2c658ef6c4a9f475dc47d36e2df1ec77c14428eac2ebc595_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc3ce1e995fac1893426b53bce624446c02c3d8aa0759c7cbcdbaca62c113ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3ce1e995fac1893426b53bce624446c02c3d8aa0759c7cbcdbaca62c113ac1->enter($__internal_fc3ce1e995fac1893426b53bce624446c02c3d8aa0759c7cbcdbaca62c113ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ad43ff78ae8763f0c6d7b10e989b220ee066cdc1273fedb68710c07ad83af46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad43ff78ae8763f0c6d7b10e989b220ee066cdc1273fedb68710c07ad83af46->enter($__internal_7ad43ff78ae8763f0c6d7b10e989b220ee066cdc1273fedb68710c07ad83af46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rates list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Value</th>
                <th>Date</th>
                <th>Comment</th>
                <th>Target</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rates"] ?? $this->getContext($context, "rates")));
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "value", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["rate"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rate"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "comment", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rate"], "product", array()), "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_edit", array("id" => $this->getAttribute($context["rate"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_new");
        echo "\">Create a new rate</a>
        </li>
    </ul>
";
        
        $__internal_7ad43ff78ae8763f0c6d7b10e989b220ee066cdc1273fedb68710c07ad83af46->leave($__internal_7ad43ff78ae8763f0c6d7b10e989b220ee066cdc1273fedb68710c07ad83af46_prof);

        
        $__internal_fc3ce1e995fac1893426b53bce624446c02c3d8aa0759c7cbcdbaca62c113ac1->leave($__internal_fc3ce1e995fac1893426b53bce624446c02c3d8aa0759c7cbcdbaca62c113ac1_prof);

    }

    public function getTemplateName()
    {
        return ":rate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  109 => 34,  97 => 28,  90 => 24,  86 => 23,  80 => 22,  76 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Rates list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Value</th>
                <th>Date</th>
                <th>Comment</th>
                <th>Target</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for rate in rates %}
            <tr>
                <td>{{ rate.id }}</td>
                <td>{{ rate.value }}</td>
                <td>{% if rate.date %}{{ rate.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ rate.comment }}</td>
                <td>{{ rate.product.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('rate_edit', { 'id': rate.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rate_new') }}\">Create a new rate</a>
        </li>
    </ul>
{% endblock %}
", ":rate:index.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/rate/index.html.twig");
    }
}
