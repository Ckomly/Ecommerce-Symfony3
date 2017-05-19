<?php

/* rate/show.html.twig */
class __TwigTemplate_d121eb480e5861c9681a1cad561b3047db53e88c11860cb12cdb8473dff20ca8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rate/show.html.twig", 1);
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
        $__internal_7eacf1fb7e8a981a6dd68d430d4448a1909cfc1e8b589bfb8dd52c39e3d4085b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eacf1fb7e8a981a6dd68d430d4448a1909cfc1e8b589bfb8dd52c39e3d4085b->enter($__internal_7eacf1fb7e8a981a6dd68d430d4448a1909cfc1e8b589bfb8dd52c39e3d4085b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rate/show.html.twig"));

        $__internal_d7699425546d37b456fe75229e5cf5098ee5e2b6e9dfda5d3c7b6e0fde1de8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7699425546d37b456fe75229e5cf5098ee5e2b6e9dfda5d3c7b6e0fde1de8ce->enter($__internal_d7699425546d37b456fe75229e5cf5098ee5e2b6e9dfda5d3c7b6e0fde1de8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rate/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eacf1fb7e8a981a6dd68d430d4448a1909cfc1e8b589bfb8dd52c39e3d4085b->leave($__internal_7eacf1fb7e8a981a6dd68d430d4448a1909cfc1e8b589bfb8dd52c39e3d4085b_prof);

        
        $__internal_d7699425546d37b456fe75229e5cf5098ee5e2b6e9dfda5d3c7b6e0fde1de8ce->leave($__internal_d7699425546d37b456fe75229e5cf5098ee5e2b6e9dfda5d3c7b6e0fde1de8ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97e88512141f592b4eaffc16290776068fa5a60a25fa878e567883a6b142ae8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e88512141f592b4eaffc16290776068fa5a60a25fa878e567883a6b142ae8b->enter($__internal_97e88512141f592b4eaffc16290776068fa5a60a25fa878e567883a6b142ae8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea3444d3ec4d22efe39d9cfce2d15229e940883c93a70d05ebf7cda299d73b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3444d3ec4d22efe39d9cfce2d15229e940883c93a70d05ebf7cda299d73b0a->enter($__internal_ea3444d3ec4d22efe39d9cfce2d15229e940883c93a70d05ebf7cda299d73b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rate</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "value", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "comment", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_edit", array("id" => $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ea3444d3ec4d22efe39d9cfce2d15229e940883c93a70d05ebf7cda299d73b0a->leave($__internal_ea3444d3ec4d22efe39d9cfce2d15229e940883c93a70d05ebf7cda299d73b0a_prof);

        
        $__internal_97e88512141f592b4eaffc16290776068fa5a60a25fa878e567883a6b142ae8b->leave($__internal_97e88512141f592b4eaffc16290776068fa5a60a25fa878e567883a6b142ae8b_prof);

    }

    public function getTemplateName()
    {
        return "rate/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  96 => 32,  90 => 29,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Rate</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ rate.id }}</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>{{ rate.value }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if rate.date %}{{ rate.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>{{ rate.comment }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rate_edit', { 'id': rate.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "rate/show.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/rate/show.html.twig");
    }
}
