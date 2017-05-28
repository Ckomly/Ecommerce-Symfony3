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
        $__internal_4cb7f37750e71fc2c404f27ea9236cfdf263d4ca5d01d0dddd72007cae91bb82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb7f37750e71fc2c404f27ea9236cfdf263d4ca5d01d0dddd72007cae91bb82->enter($__internal_4cb7f37750e71fc2c404f27ea9236cfdf263d4ca5d01d0dddd72007cae91bb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_d3eacf8dcbfbd14ddcf13b937921a6e6a2db93e8ceb857a79c3574cf398feb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3eacf8dcbfbd14ddcf13b937921a6e6a2db93e8ceb857a79c3574cf398feb51->enter($__internal_d3eacf8dcbfbd14ddcf13b937921a6e6a2db93e8ceb857a79c3574cf398feb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb7f37750e71fc2c404f27ea9236cfdf263d4ca5d01d0dddd72007cae91bb82->leave($__internal_4cb7f37750e71fc2c404f27ea9236cfdf263d4ca5d01d0dddd72007cae91bb82_prof);

        
        $__internal_d3eacf8dcbfbd14ddcf13b937921a6e6a2db93e8ceb857a79c3574cf398feb51->leave($__internal_d3eacf8dcbfbd14ddcf13b937921a6e6a2db93e8ceb857a79c3574cf398feb51_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f15b6a70ee615e603ae872b889316f02b23b4b6ec1fad06bdf36337dc657038b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15b6a70ee615e603ae872b889316f02b23b4b6ec1fad06bdf36337dc657038b->enter($__internal_f15b6a70ee615e603ae872b889316f02b23b4b6ec1fad06bdf36337dc657038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b59441d8d65d97bb81cee5639962fa762d6ef4ab96c1dc9a318f00087cee104d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59441d8d65d97bb81cee5639962fa762d6ef4ab96c1dc9a318f00087cee104d->enter($__internal_b59441d8d65d97bb81cee5639962fa762d6ef4ab96c1dc9a318f00087cee104d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "            <a class=\"btn btn-success btn-outline category\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    <ul>
        <li>
            <a class=\"btn btn-primary btn-outline\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_b59441d8d65d97bb81cee5639962fa762d6ef4ab96c1dc9a318f00087cee104d->leave($__internal_b59441d8d65d97bb81cee5639962fa762d6ef4ab96c1dc9a318f00087cee104d_prof);

        
        $__internal_f15b6a70ee615e603ae872b889316f02b23b4b6ec1fad06bdf36337dc657038b->leave($__internal_f15b6a70ee615e603ae872b889316f02b23b4b6ec1fad06bdf36337dc657038b_prof);

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
        return array (  72 => 11,  67 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        {% for category in categories %}
            <a class=\"btn btn-success btn-outline category\" href=\"{{ path('category_show', { 'id': category.id }) }}\" class=\"btn btn-outline-primary\">{{ category.name }}</a>
        {% endfor %}

    <ul>
        <li>
            <a class=\"btn btn-primary btn-outline\" href=\"{{ path('category_new') }}\">Create a new category</a>
        </li>
    </ul>
{% endblock %}
", "category/index.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/category/index.html.twig");
    }
}
