<?php

/* :user:listProducts.html.twig */
class __TwigTemplate_f09ebd0428c0ff873144f619ad8312fa18e98e6a8ccff918d813d7b6174c7837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:listProducts.html.twig", 1);
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
        $__internal_1453ff60f65d66a61a4476c9e56901cbaeb08de59e9bda9a95ca7fa7cf9143ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1453ff60f65d66a61a4476c9e56901cbaeb08de59e9bda9a95ca7fa7cf9143ea->enter($__internal_1453ff60f65d66a61a4476c9e56901cbaeb08de59e9bda9a95ca7fa7cf9143ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:listProducts.html.twig"));

        $__internal_95afccdb33cd151c66a1e3063d6af43d6b8bc3db47472f4fbd4a2c77937a0bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95afccdb33cd151c66a1e3063d6af43d6b8bc3db47472f4fbd4a2c77937a0bc8->enter($__internal_95afccdb33cd151c66a1e3063d6af43d6b8bc3db47472f4fbd4a2c77937a0bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:listProducts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1453ff60f65d66a61a4476c9e56901cbaeb08de59e9bda9a95ca7fa7cf9143ea->leave($__internal_1453ff60f65d66a61a4476c9e56901cbaeb08de59e9bda9a95ca7fa7cf9143ea_prof);

        
        $__internal_95afccdb33cd151c66a1e3063d6af43d6b8bc3db47472f4fbd4a2c77937a0bc8->leave($__internal_95afccdb33cd151c66a1e3063d6af43d6b8bc3db47472f4fbd4a2c77937a0bc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_557d6d9958b8eec68e9121382eab0c62790bb6ee167364031b46ec7b6f7667d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557d6d9958b8eec68e9121382eab0c62790bb6ee167364031b46ec7b6f7667d7->enter($__internal_557d6d9958b8eec68e9121382eab0c62790bb6ee167364031b46ec7b6f7667d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16b54e575354e8302db0c27f5fa69f7123c377041456875d8615dcbd96d5d46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b54e575354e8302db0c27f5fa69f7123c377041456875d8615dcbd96d5d46c->enter($__internal_16b54e575354e8302db0c27f5fa69f7123c377041456875d8615dcbd96d5d46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>Posts of ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h1>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listProducts"] ?? $this->getContext($context, "listProducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "    <div class=””>
      <p><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo " </a></p>
      <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</p>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_16b54e575354e8302db0c27f5fa69f7123c377041456875d8615dcbd96d5d46c->leave($__internal_16b54e575354e8302db0c27f5fa69f7123c377041456875d8615dcbd96d5d46c_prof);

        
        $__internal_557d6d9958b8eec68e9121382eab0c62790bb6ee167364031b46ec7b6f7667d7->leave($__internal_557d6d9958b8eec68e9121382eab0c62790bb6ee167364031b46ec7b6f7667d7_prof);

    }

    public function getTemplateName()
    {
        return ":user:listProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  61 => 7,  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
  <h1>Posts of {{user.username}}</h1>
  {% for product in listProducts %}
    <div class=””>
      <p><a href=\"{{ path('product_show', { 'id': product.id }) }}\">{{ product.name }} </a></p>
      <p>{{ product.description }}</p>
    </div>
  {% endfor %}
{% endblock %}
", ":user:listProducts.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/user/listProducts.html.twig");
    }
}
