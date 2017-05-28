<?php

/* user/listProducts.html.twig */
class __TwigTemplate_f09ebd0428c0ff873144f619ad8312fa18e98e6a8ccff918d813d7b6174c7837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/listProducts.html.twig", 1);
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
        $__internal_96155042e3fd894f8181f392f896e78c91f4b10f8edf64bd632cb548b1ecef97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96155042e3fd894f8181f392f896e78c91f4b10f8edf64bd632cb548b1ecef97->enter($__internal_96155042e3fd894f8181f392f896e78c91f4b10f8edf64bd632cb548b1ecef97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/listProducts.html.twig"));

        $__internal_f92581cc4d99c0aedfd0686c450aacf96d2c46f520ccfc8baf9214115d233734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92581cc4d99c0aedfd0686c450aacf96d2c46f520ccfc8baf9214115d233734->enter($__internal_f92581cc4d99c0aedfd0686c450aacf96d2c46f520ccfc8baf9214115d233734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/listProducts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96155042e3fd894f8181f392f896e78c91f4b10f8edf64bd632cb548b1ecef97->leave($__internal_96155042e3fd894f8181f392f896e78c91f4b10f8edf64bd632cb548b1ecef97_prof);

        
        $__internal_f92581cc4d99c0aedfd0686c450aacf96d2c46f520ccfc8baf9214115d233734->leave($__internal_f92581cc4d99c0aedfd0686c450aacf96d2c46f520ccfc8baf9214115d233734_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e4fc96e33177312b3a26f00b141bf423b4484babd125ce386f4dbd7c7a57757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e4fc96e33177312b3a26f00b141bf423b4484babd125ce386f4dbd7c7a57757->enter($__internal_5e4fc96e33177312b3a26f00b141bf423b4484babd125ce386f4dbd7c7a57757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8497efa4fbe60621a4572a9de69016cd5fefc1ad4ca25484b802aec07892fa20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8497efa4fbe60621a4572a9de69016cd5fefc1ad4ca25484b802aec07892fa20->enter($__internal_8497efa4fbe60621a4572a9de69016cd5fefc1ad4ca25484b802aec07892fa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>Products of ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h1>
  ";
        // line 5
        if (twig_test_empty(($context["listProducts"] ?? $this->getContext($context, "listProducts")))) {
            // line 6
            echo "      <div class=\"alert alert-info\">You don't have products in sell yet.</div>
  ";
        }
        // line 8
        echo "      <a class=\"btn btn-primary btn-outline\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_new");
        echo "\">Create a new product</a>
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listProducts"] ?? $this->getContext($context, "listProducts")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "  <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-top:2em;\">
        <div class=\"col-item\">
            <div class=\"post-img-content\">
                <img src=\"http://placehold.it/350x260\" class=\"img-responsive\" />
                <span class=\"post-title\">
                    <b><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></b><br>
                    <b>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "category", array()), "name", array()), "html", null, true);
            echo "</b>
                </span>
                ";
            // line 18
            if ((twig_date_format_filter($this->env, "now", "Ymd") > twig_date_format_filter($this->env, $this->getAttribute($context["product"], "endingdate", array()), "Ymd"))) {
                // line 19
                echo "                    <span class=\"round-tag out\">Out</span>
                ";
            } else {
                // line 21
                echo "                    <span class=\"round-tag\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo " €</span>
                ";
            }
            // line 23
            echo "            </div>
            <div class=\"info\">
                <div class=\"row\">
                    <div class=\"price col-md-10\">
                        <h5>End the : ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["product"], "endingdate", array()), "Y-m-d"), "html", null, true);
            echo "</h5>
                        <p>Added by ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
                <div class=\"separator clear-left\">
                    <p class=\"btn-details\">
                        <a href=\"";
            // line 33
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
        
        $__internal_8497efa4fbe60621a4572a9de69016cd5fefc1ad4ca25484b802aec07892fa20->leave($__internal_8497efa4fbe60621a4572a9de69016cd5fefc1ad4ca25484b802aec07892fa20_prof);

        
        $__internal_5e4fc96e33177312b3a26f00b141bf423b4484babd125ce386f4dbd7c7a57757->leave($__internal_5e4fc96e33177312b3a26f00b141bf423b4484babd125ce386f4dbd7c7a57757_prof);

    }

    public function getTemplateName()
    {
        return "user/listProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  109 => 28,  105 => 27,  99 => 23,  93 => 21,  89 => 19,  87 => 18,  82 => 16,  76 => 15,  69 => 10,  65 => 9,  60 => 8,  56 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
  <h1>Products of {{user.username}}</h1>
  {% if listProducts is empty %}
      <div class=\"alert alert-info\">You don't have products in sell yet.</div>
  {% endif %}
      <a class=\"btn btn-primary btn-outline\" href=\"{{ path('product_new') }}\">Create a new product</a>
  {% for product in listProducts %}
  <div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-top:2em;\">
        <div class=\"col-item\">
            <div class=\"post-img-content\">
                <img src=\"http://placehold.it/350x260\" class=\"img-responsive\" />
                <span class=\"post-title\">
                    <b><a href=\"{{ path('product_show', { 'id': product.id }) }}\">{{product.name}}</a></b><br>
                    <b>{{product.category.name}}</b>
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
", "user/listProducts.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/user/listProducts.html.twig");
    }
}
