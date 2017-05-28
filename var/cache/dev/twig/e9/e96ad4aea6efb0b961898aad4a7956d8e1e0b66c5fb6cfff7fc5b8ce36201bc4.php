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
        $__internal_acacdefac7696dca97269784cd9212171feb554767b3a78abd87d19905c15f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acacdefac7696dca97269784cd9212171feb554767b3a78abd87d19905c15f53->enter($__internal_acacdefac7696dca97269784cd9212171feb554767b3a78abd87d19905c15f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $__internal_6097999017652bf96d12d9396308632c7253855981b37203b65aa2b41bf42173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6097999017652bf96d12d9396308632c7253855981b37203b65aa2b41bf42173->enter($__internal_6097999017652bf96d12d9396308632c7253855981b37203b65aa2b41bf42173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acacdefac7696dca97269784cd9212171feb554767b3a78abd87d19905c15f53->leave($__internal_acacdefac7696dca97269784cd9212171feb554767b3a78abd87d19905c15f53_prof);

        
        $__internal_6097999017652bf96d12d9396308632c7253855981b37203b65aa2b41bf42173->leave($__internal_6097999017652bf96d12d9396308632c7253855981b37203b65aa2b41bf42173_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_656599574ca2122b99a0f2cecd086b59b6ed5436a70886d60ed0fe18b0085991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656599574ca2122b99a0f2cecd086b59b6ed5436a70886d60ed0fe18b0085991->enter($__internal_656599574ca2122b99a0f2cecd086b59b6ed5436a70886d60ed0fe18b0085991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1babb37d79efed8a93c83c9bff92fab7a68d4bd46f0ea22124873907f6ce05e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1babb37d79efed8a93c83c9bff92fab7a68d4bd46f0ea22124873907f6ce05e9->enter($__internal_1babb37d79efed8a93c83c9bff92fab7a68d4bd46f0ea22124873907f6ce05e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <h1>
                Subcategory of <strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</strong>   <a class=\"btn btn-warning btn-outline largebutton\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
                <a class=\"btn btn-primary btn-outline btm-sm category\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
                <input class=\"btn btn-danger btn-outline btm-sm category\" type=\"submit\" value=\"Delete\">
            </h1>
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </div>
    ";
        // line 13
        if (twig_test_empty(($context["categories"] ?? $this->getContext($context, "categories")))) {
            // line 14
            echo "        <div class=\"alert alert-warning\">
           <strong> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo " don't have subcategory yet. </strong>
        </div>
    ";
        }
        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 19
            echo "                <a class=\"btn btn-primary btn-outline category\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["cat"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
            echo "</a>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1babb37d79efed8a93c83c9bff92fab7a68d4bd46f0ea22124873907f6ce05e9->leave($__internal_1babb37d79efed8a93c83c9bff92fab7a68d4bd46f0ea22124873907f6ce05e9_prof);

        
        $__internal_656599574ca2122b99a0f2cecd086b59b6ed5436a70886d60ed0fe18b0085991->leave($__internal_656599574ca2122b99a0f2cecd086b59b6ed5436a70886d60ed0fe18b0085991_prof);

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
        return array (  90 => 19,  85 => 18,  79 => 15,  76 => 14,  74 => 13,  69 => 11,  63 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <div>
        {{ form_start(delete_form) }}
            <h1>
                Subcategory of <strong>{{ category.name }}</strong>   <a class=\"btn btn-warning btn-outline largebutton\" href=\"{{ path('category_edit', { 'id': category.id }) }}\">Edit</a>
                <a class=\"btn btn-primary btn-outline btm-sm category\" href=\"{{ path('category_index') }}\">Back to the list</a>
                <input class=\"btn btn-danger btn-outline btm-sm category\" type=\"submit\" value=\"Delete\">
            </h1>
        {{ form_end(delete_form) }}
    </div>
    {% if categories is empty%}
        <div class=\"alert alert-warning\">
           <strong> {{ category.name }} don't have subcategory yet. </strong>
        </div>
    {% endif %}
    {% for cat in categories %}
                <a class=\"btn btn-primary btn-outline category\" href=\"{{ path('category_show', { 'id': cat.id }) }}\">{{ cat.name }}</a>
            </tr>
    {% endfor %}
{% endblock %}
", "category/show.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/category/show.html.twig");
    }
}
