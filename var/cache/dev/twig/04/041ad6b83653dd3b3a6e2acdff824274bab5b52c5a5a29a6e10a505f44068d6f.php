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
        $__internal_6128e5ee1c158a9534e43f10ef6130504dfd6266a83dff38ebb8bd45032aa6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6128e5ee1c158a9534e43f10ef6130504dfd6266a83dff38ebb8bd45032aa6f7->enter($__internal_6128e5ee1c158a9534e43f10ef6130504dfd6266a83dff38ebb8bd45032aa6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_45a6d95b1aae5b68f3c97b687e4f401e483b765cdf669807368b6fcf40adfe51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a6d95b1aae5b68f3c97b687e4f401e483b765cdf669807368b6fcf40adfe51->enter($__internal_45a6d95b1aae5b68f3c97b687e4f401e483b765cdf669807368b6fcf40adfe51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6128e5ee1c158a9534e43f10ef6130504dfd6266a83dff38ebb8bd45032aa6f7->leave($__internal_6128e5ee1c158a9534e43f10ef6130504dfd6266a83dff38ebb8bd45032aa6f7_prof);

        
        $__internal_45a6d95b1aae5b68f3c97b687e4f401e483b765cdf669807368b6fcf40adfe51->leave($__internal_45a6d95b1aae5b68f3c97b687e4f401e483b765cdf669807368b6fcf40adfe51_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_910aff1d328602c8db8f49fe1f191302601b913ac79609620f0a20b7134684f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910aff1d328602c8db8f49fe1f191302601b913ac79609620f0a20b7134684f9->enter($__internal_910aff1d328602c8db8f49fe1f191302601b913ac79609620f0a20b7134684f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f6271b29ab1f327b134e4a82b32d5490bfe33c7280ffc063f6420fa23be24b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6271b29ab1f327b134e4a82b32d5490bfe33c7280ffc063f6420fa23be24b6->enter($__internal_0f6271b29ab1f327b134e4a82b32d5490bfe33c7280ffc063f6420fa23be24b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h2>
            Product's list  <a class=\"btn btn-primary btn-outline\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_new");
        echo "\">Create a new product</a>
        </h2>
    </div>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "    <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-top:2em;\">
          <div class=\"col-item\">
              <div class=\"post-img-content\">
                  <img src=\"http://placehold.it/350x260\" class=\"img-responsive\" />
                  <span class=\"post-title\">
                      <b><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></b><br>
                      <b>";
            // line 17
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["product"], "category", array(), "any", false, true), "name", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["product"], "category", array(), "any", false, true), "name", array())))) ? ($this->getAttribute($this->getAttribute($context["product"], "category", array(), "any", false, true), "name", array())) : ("no category")), "html", null, true);
            echo "</b>
                  </span>
                  ";
            // line 19
            if ((twig_date_format_filter($this->env, "now", "Ymd") > twig_date_format_filter($this->env, $this->getAttribute($context["product"], "endingdate", array()), "Ymd"))) {
                // line 20
                echo "                      <span class=\"round-tag out\">Out</span>
                  ";
            } else {
                // line 22
                echo "                      <span class=\"round-tag\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo " €</span>
                  ";
            }
            // line 24
            echo "              </div>
              <div class=\"info\">
                  <div class=\"row\">
                      <div class=\"price col-md-10\">
                          <h5>End the : ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["product"], "endingdate", array()), "Y-m-d"), "html", null, true);
            echo "</h5>
                          <p>Added by ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "user", array()), "username", array()), "html", null, true);
            echo "</p>
                      </div>
                  </div>
                  <div class=\"separator clear-left\">
                      <p class=\"btn-details\">
                          <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">more details</a>
                      </p>
                  </div>
                  <div class=\"clearfix\">
                  </div>
              </div>
          </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
";
        
        $__internal_0f6271b29ab1f327b134e4a82b32d5490bfe33c7280ffc063f6420fa23be24b6->leave($__internal_0f6271b29ab1f327b134e4a82b32d5490bfe33c7280ffc063f6420fa23be24b6_prof);

        
        $__internal_910aff1d328602c8db8f49fe1f191302601b913ac79609620f0a20b7134684f9->leave($__internal_910aff1d328602c8db8f49fe1f191302601b913ac79609620f0a20b7134684f9_prof);

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
        return array (  127 => 43,  112 => 34,  104 => 29,  100 => 28,  94 => 24,  88 => 22,  84 => 20,  82 => 19,  77 => 17,  71 => 16,  64 => 11,  60 => 10,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
        <h2>
            Product's list  <a class=\"btn btn-primary btn-outline\" href=\"{{ path('product_new') }}\">Create a new product</a>
        </h2>
    </div>

    {% for product in products %}
    <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-top:2em;\">
          <div class=\"col-item\">
              <div class=\"post-img-content\">
                  <img src=\"http://placehold.it/350x260\" class=\"img-responsive\" />
                  <span class=\"post-title\">
                      <b><a href=\"{{ path('product_show', { 'id': product.id }) }}\">{{product.name}}</a></b><br>
                      <b>{{product.category.name ?? 'no category'}}</b>
                  </span>
                  {% if \"now\"|date('Ymd')  > product.endingdate|date('Ymd') %}
                      <span class=\"round-tag out\">Out</span>
                  {% else %}
                      <span class=\"round-tag\">{{product.price}} €</span>
                  {% endif %}
              </div>
              <div class=\"info\">
                  <div class=\"row\">
                      <div class=\"price col-md-10\">
                          <h5>End the : {{ product.endingdate | date('Y-m-d')}}</h5>
                          <p>Added by {{ product.user.username }}</p>
                      </div>
                  </div>
                  <div class=\"separator clear-left\">
                      <p class=\"btn-details\">
                          <a href=\"{{ path('product_show', { 'id': product.id }) }}\">more details</a>
                      </p>
                  </div>
                  <div class=\"clearfix\">
                  </div>
              </div>
          </div>
      </div>
    {% endfor %}

{% endblock %}
", "product/index.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/product/index.html.twig");
    }
}
