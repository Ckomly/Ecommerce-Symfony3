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
        $__internal_553cd4a55fec2dde9d990e39c000821649a48951e8981112e6d9a6ed27a4a34f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553cd4a55fec2dde9d990e39c000821649a48951e8981112e6d9a6ed27a4a34f->enter($__internal_553cd4a55fec2dde9d990e39c000821649a48951e8981112e6d9a6ed27a4a34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_92ba2daee7f0175d1e15e95e0f593100250b966d0be0471e72d1bfabd33ca404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ba2daee7f0175d1e15e95e0f593100250b966d0be0471e72d1bfabd33ca404->enter($__internal_92ba2daee7f0175d1e15e95e0f593100250b966d0be0471e72d1bfabd33ca404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_553cd4a55fec2dde9d990e39c000821649a48951e8981112e6d9a6ed27a4a34f->leave($__internal_553cd4a55fec2dde9d990e39c000821649a48951e8981112e6d9a6ed27a4a34f_prof);

        
        $__internal_92ba2daee7f0175d1e15e95e0f593100250b966d0be0471e72d1bfabd33ca404->leave($__internal_92ba2daee7f0175d1e15e95e0f593100250b966d0be0471e72d1bfabd33ca404_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_573b5f9d629bc1a652cc0b76677acf5e2b9b7a937bcada1c02268102dae3b108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573b5f9d629bc1a652cc0b76677acf5e2b9b7a937bcada1c02268102dae3b108->enter($__internal_573b5f9d629bc1a652cc0b76677acf5e2b9b7a937bcada1c02268102dae3b108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0637b73c80453f80ad4c145e25aacb9d82221114377c2261f4f101ae195bdbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0637b73c80453f80ad4c145e25aacb9d82221114377c2261f4f101ae195bdbf2->enter($__internal_0637b73c80453f80ad4c145e25aacb9d82221114377c2261f4f101ae195bdbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div class=\"container\">
            <div class=\"card\">
              <div class=\"container-fliud\">
                <div class=\"wrapper row\">
                  <div class=\"preview col-md-4\">

                    <div class=\"preview col-md-2\">
                      <div class=\"tab-pane active\" id=\"pic-1\"><img src=\"https://www.2checkout.com/upload/images/graphic_product_tangible.png\" height=\"300\" width=\"300\"/></div>
                    </div>

                  </div>
                  <div class=\"details col-md-6\">
                    <h3 class=\"product-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</h3>
                    <div class=\"rating\">
                      <div class=\"stars\">
                        <span class=\"fa fa-star checked\"></span>
                        <span class=\"fa fa-star checked\"></span>
                        <span class=\"fa fa-star checked\"></span>
                        <span class=\"fa fa-star\"></span>
                        <span class=\"fa fa-star\"></span>
                      </div>
                    </div>
                    <p class=\"product-description\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</p>

                    <h4>price start: <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "pricestart", array()), "html", null, true);
        echo " €</span></h4>
                    <h4 class=\"price\">current price: <span>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo " €</span></h4>
                    <h4>buy out: <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "buyout", array()), "html", null, true);
        echo " €</span></h4>
                    <p>User have bids this product <strong>";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["bids"] ?? $this->getContext($context, "bids"))), "html", null, true);
        echo "</strong> times</p>

                    ";
        // line 33
        $context["sumratings"] = 0;
        // line 34
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rates"] ?? $this->getContext($context, "rates")));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 35
            echo "                      ";
            $context["sumratings"] = (($context["sumratings"] ?? $this->getContext($context, "sumratings")) + $this->getAttribute($context["rating"], "value", array()));
            // line 36
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
                    <p class=\"vote\"><strong>";
        // line 38
        echo twig_escape_filter($this->env, twig_round((($context["sumratings"] ?? $this->getContext($context, "sumratings")) / twig_length_filter($this->env, ($context["rates"] ?? $this->getContext($context, "rates"))))), "html", null, true);
        echo " / 5</strong> is the average note of this product! <strong>( ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["rates"] ?? $this->getContext($context, "rates"))), "html", null, true);
        echo " votes)</strong></p>
                    <div class=\"action\">

                      ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                          <p>";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                          <input type=\"submit\" value=\"Bid\" class=\"btn btn-warning btn-md\"/></p>
                          <p>";
        // line 44
        echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
        echo "</p>
                      ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <h3> Last comment</h3>
        <div>
            ";
        // line 55
        $context["bid"] = twig_last($this->env, ($context["bids"] ?? $this->getContext($context, "bids")));
        // line 56
        echo "            <div class=\"alert alert-info\">
               Last bid:<strong> ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bid"] ?? $this->getContext($context, "bid")), "amount", array()), "html", null, true);
        echo " €</strong> has been bade by ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bid"] ?? $this->getContext($context, "bid")), "user", array()), "username", array()), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"panel panel-default\">
            ";
        // line 61
        $context["rate"] = twig_last($this->env, ($context["rates"] ?? $this->getContext($context, "rates")));
        // line 62
        echo "            <div class=\"panel-heading\">
              <p>Date: ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "date", array()), "Y-m-d"), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "name", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"panel-body\">
              <p>Rate: ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "value", array()), "html", null, true);
        echo "</p>
              <p>Comment: ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "comment", array()), "html", null, true);
        echo "</p>
            </div>
        </div>

        <ul>
            <li>
                <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
            </li>
            <li>
                <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
            </li>
            <li>
                <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_new", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "type" => "product")), "html", null, true);
        echo "\">Rate</a>
            </li>
            <li>
                ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" value=\"Delete\">
                ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
        </ul>
";
        
        $__internal_0637b73c80453f80ad4c145e25aacb9d82221114377c2261f4f101ae195bdbf2->leave($__internal_0637b73c80453f80ad4c145e25aacb9d82221114377c2261f4f101ae195bdbf2_prof);

        
        $__internal_573b5f9d629bc1a652cc0b76677acf5e2b9b7a937bcada1c02268102dae3b108->leave($__internal_573b5f9d629bc1a652cc0b76677acf5e2b9b7a937bcada1c02268102dae3b108_prof);

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
        return array (  214 => 84,  209 => 82,  203 => 79,  197 => 76,  191 => 73,  182 => 67,  178 => 66,  170 => 63,  167 => 62,  165 => 61,  156 => 57,  153 => 56,  151 => 55,  138 => 45,  134 => 44,  129 => 42,  125 => 41,  117 => 38,  114 => 37,  108 => 36,  105 => 35,  100 => 34,  98 => 33,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  76 => 26,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
            <div class=\"card\">
              <div class=\"container-fliud\">
                <div class=\"wrapper row\">
                  <div class=\"preview col-md-4\">

                    <div class=\"preview col-md-2\">
                      <div class=\"tab-pane active\" id=\"pic-1\"><img src=\"https://www.2checkout.com/upload/images/graphic_product_tangible.png\" height=\"300\" width=\"300\"/></div>
                    </div>

                  </div>
                  <div class=\"details col-md-6\">
                    <h3 class=\"product-title\">{{ product.name }}</h3>
                    <div class=\"rating\">
                      <div class=\"stars\">
                        <span class=\"fa fa-star checked\"></span>
                        <span class=\"fa fa-star checked\"></span>
                        <span class=\"fa fa-star checked\"></span>
                        <span class=\"fa fa-star\"></span>
                        <span class=\"fa fa-star\"></span>
                      </div>
                    </div>
                    <p class=\"product-description\">{{ product.description }}</p>

                    <h4>price start: <span>{{ product.pricestart }} €</span></h4>
                    <h4 class=\"price\">current price: <span>{{ product.price }} €</span></h4>
                    <h4>buy out: <span>{{ product.buyout }} €</span></h4>
                    <p>User have bids this product <strong>{{  bids | length }}</strong> times</p>

                    {% set sumratings = 0 %}
                    {% for rating in rates %}
                      {% set sumratings = sumratings + rating.value %}
                    {% endfor %}

                    <p class=\"vote\"><strong>{{  (sumratings / rates|length) | round }} / 5</strong> is the average note of this product! <strong>( {{ rates | length }} votes)</strong></p>
                    <div class=\"action\">

                      {{ form_start(form) }}
                          <p>{{ form_widget(form) }}
                          <input type=\"submit\" value=\"Bid\" class=\"btn btn-warning btn-md\"/></p>
                          <p>{{ error }}</p>
                      {{ form_end(form) }}

                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <h3> Last comment</h3>
        <div>
            {% set bid = bids | last %}
            <div class=\"alert alert-info\">
               Last bid:<strong> {{ bid.amount }} €</strong> has been bade by {{ bid.user.username }}
            </div>
        </div>
        <div class=\"panel panel-default\">
            {% set rate = rates | last %}
            <div class=\"panel-heading\">
              <p>Date: {{ rate.date|date('Y-m-d') }} by {{ rate.name }}</p>
            </div>
            <div class=\"panel-body\">
              <p>Rate: {{ rate.value }}</p>
              <p>Comment: {{ rate.comment }}</p>
            </div>
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
