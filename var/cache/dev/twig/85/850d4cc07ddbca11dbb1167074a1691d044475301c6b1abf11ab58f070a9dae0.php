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
        $__internal_63b259716a7c1eb06013389ae518b936bc637713127045846b28dadcf81cf056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b259716a7c1eb06013389ae518b936bc637713127045846b28dadcf81cf056->enter($__internal_63b259716a7c1eb06013389ae518b936bc637713127045846b28dadcf81cf056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_9d4c4823725f8240680c07e4328ecfbb46be0d5b0ce4a35faca6a2a44dbe046e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4c4823725f8240680c07e4328ecfbb46be0d5b0ce4a35faca6a2a44dbe046e->enter($__internal_9d4c4823725f8240680c07e4328ecfbb46be0d5b0ce4a35faca6a2a44dbe046e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63b259716a7c1eb06013389ae518b936bc637713127045846b28dadcf81cf056->leave($__internal_63b259716a7c1eb06013389ae518b936bc637713127045846b28dadcf81cf056_prof);

        
        $__internal_9d4c4823725f8240680c07e4328ecfbb46be0d5b0ce4a35faca6a2a44dbe046e->leave($__internal_9d4c4823725f8240680c07e4328ecfbb46be0d5b0ce4a35faca6a2a44dbe046e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa611b7cc6a0648bf074a1e526801c52d967e4d4739ad38815feabad570a353c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa611b7cc6a0648bf074a1e526801c52d967e4d4739ad38815feabad570a353c->enter($__internal_fa611b7cc6a0648bf074a1e526801c52d967e4d4739ad38815feabad570a353c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25a0e41db35aedfafefa411e50b11dfc88eeab069acd97fca826b749bc106cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a0e41db35aedfafefa411e50b11dfc88eeab069acd97fca826b749bc106cb4->enter($__internal_25a0e41db35aedfafefa411e50b11dfc88eeab069acd97fca826b749bc106cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <div class=\"separation\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <a class=\"btn btn-primary btn-outline\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
            ";
        // line 8
        if ((twig_date_format_filter($this->env, "now", "Ymd") < twig_date_format_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "endingdate", array()), "Ymd"))) {
            // line 9
            echo "                <a class=\"btn btn-warning btn-outline\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
            echo "\">Edit</a>
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger btn-outline\">
            ";
        }
        // line 12
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>

        ";
        // line 15
        $context["sumratings"] = 0;
        // line 16
        echo "        ";
        if (twig_test_empty(($context["rates"] ?? $this->getContext($context, "rates")))) {
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rates"] ?? $this->getContext($context, "rates")));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 19
                echo "            ";
                $context["sumratings"] = (($context["sumratings"] ?? $this->getContext($context, "sumratings")) + $this->getAttribute($context["rating"], "value", array()));
                // line 20
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "          ";
            $context["sumratings"] = twig_round((($context["sumratings"] ?? $this->getContext($context, "sumratings")) / twig_length_filter($this->env, ($context["rates"] ?? $this->getContext($context, "rates")))));
            // line 22
            echo "        ";
        }
        // line 23
        echo "
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
                    <h3 class=\"product-title\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</h3>

                    <div class=\"stars\">
                      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 41
            echo "                          ";
            if (($context["i"] <= ($context["sumratings"] ?? $this->getContext($context, "sumratings")))) {
                // line 42
                echo "                            <span class=\"fa fa-star checked\"></span>
                          ";
            } else {
                // line 44
                echo "                            <span class=\"fa fa-star\"></span>
                            ";
            }
            // line 46
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </div>

                    <h4 class=\"seller\" >Added by ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "user", array()), "username", array()), "html", null, true);
        echo "</h4>
                    <p class=\"product-description\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</p>

                    ";
        // line 52
        if ((twig_date_format_filter($this->env, "now", "Ymd") > twig_date_format_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "endingdate", array()), "Ymd"))) {
            // line 53
            echo "                        <div class=\"alert alert-danger\">this product is not avaible</div>
                    ";
        } else {
            // line 55
            echo "                        <h4>price start: <span>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "pricestart", array()), "html", null, true);
            echo " €</span></h4>
                        <h4 class=\"price\">current price: <span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), "html", null, true);
            echo " €</span></h4>
                        <h4>buy out: <span>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "buyout", array()), "html", null, true);
            echo " €</span></h4>
                        <p>
                            Users has bid on this product <strong>";
            // line 59
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["bids"] ?? $this->getContext($context, "bids"))), "html", null, true);
            echo "</strong> times.
                            ";
            // line 60
            if ( !twig_test_empty(($context["bids"] ?? $this->getContext($context, "bids")))) {
                // line 61
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show_bids", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
                echo "\">(show history)</a>
                            ";
            }
            // line 63
            echo "                        </p>

                        <p class=\"vote\">
                            <strong>";
            // line 66
            echo twig_escape_filter($this->env, ($context["sumratings"] ?? $this->getContext($context, "sumratings")), "html", null, true);
            echo " / 5</strong>
                             is the average note of this product!
                             ";
            // line 68
            if ( !twig_test_empty(($context["rates"] ?? $this->getContext($context, "rates")))) {
                // line 69
                echo "                                 <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show_comments", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
                echo "\"><strong>( ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["rates"] ?? $this->getContext($context, "rates"))), "html", null, true);
                echo " votes)</strong></a>
                             ";
            }
            // line 71
            echo "                             <a class=\"btn btn-primary btn-outline btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_new", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()), "type" => "product")), "html", null, true);
            echo "\">Rate</a>
                        </p>
                        <div class=\"action\">
                        ";
            // line 74
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
                // line 75
                echo "                            ";
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
                echo "
                                <p>";
                // line 76
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
                echo "
                                <input type=\"submit\" value=\"Bid\" class=\"btn btn-info btn-outline btn-md largebutton\"/></p>
                            ";
                // line 78
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
                echo "
                            ";
                // line 79
                if ((($context["error"] ?? $this->getContext($context, "error")) != "")) {
                    // line 80
                    echo "                                <div class=\"alert alert-danger\">";
                    echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
                    echo "</div>
                            ";
                }
                // line 82
                echo "                        ";
            }
            // line 83
            echo "                    ";
        }
        // line 84
        echo "                    </div>
                  </div>
                </div>
              </div>
            </div>

        ";
        // line 90
        if ( !twig_test_empty(($context["bids"] ?? $this->getContext($context, "bids")))) {
            // line 91
            echo "            <h3> Last bid</h3>
            <div classe=\"separation\">
                ";
            // line 93
            $context["bid"] = twig_last($this->env, ($context["bids"] ?? $this->getContext($context, "bids")));
            // line 94
            echo "                <div class=\"alert alert-info\">
                   Last bid:<strong> ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute(($context["bid"] ?? $this->getContext($context, "bid")), "amount", array()), "html", null, true);
            echo " €</strong> has been bade by ";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["bid"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["bid"] ?? null), "user", array(), "any", false, true), "username", array())))) ? ($this->getAttribute($this->getAttribute(($context["bid"] ?? null), "user", array(), "any", false, true), "username", array())) : ("Unknown")), "html", null, true);
            echo "
                </div>
            </div>
        ";
        } else {
            // line 99
            echo "            <div class=\"alert alert-warning separation\">
               There is no bids on this article yet.
            </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 104
        if ( !twig_test_empty(($context["rates"] ?? $this->getContext($context, "rates")))) {
            // line 105
            echo "            <h3> Last comment</h3>
            <div class=\"panel panel-default\">
                ";
            // line 107
            $context["rate"] = twig_last($this->env, ($context["rates"] ?? $this->getContext($context, "rates")));
            // line 108
            echo "                <div class=\"panel-heading\">
                  <p>Date: ";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "date", array()), "Y-m-d"), "html", null, true);
            echo " by ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "name", array()), "html", null, true);
            echo "</p>
                </div>
            <div class=\"panel-body\">
                  <p>
                      <div class=\"stars\">
                        Rate :
                        ";
            // line 115
            $context["value"] = twig_round($this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "value", array()));
            // line 116
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 117
                echo "                            ";
                if (($context["i"] <= ($context["value"] ?? $this->getContext($context, "value")))) {
                    // line 118
                    echo "                              <span class=\"fa fa-star checked\"></span>
                            ";
                } else {
                    // line 120
                    echo "                              <span class=\"fa fa-star\"></span>
                              ";
                }
                // line 122
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                      </div>
                  </p>
                  <p>Comment: ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "comment", array()), "html", null, true);
            echo "</p>
                </div>
            </div>

        ";
        } else {
            // line 130
            echo "            <div class=\"alert alert-warning\">
               There is no comments on this article yet.
            </div>
        ";
        }
        // line 134
        echo "    </div>

";
        
        $__internal_25a0e41db35aedfafefa411e50b11dfc88eeab069acd97fca826b749bc106cb4->leave($__internal_25a0e41db35aedfafefa411e50b11dfc88eeab069acd97fca826b749bc106cb4_prof);

        
        $__internal_fa611b7cc6a0648bf074a1e526801c52d967e4d4739ad38815feabad570a353c->leave($__internal_fa611b7cc6a0648bf074a1e526801c52d967e4d4739ad38815feabad570a353c_prof);

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
        return array (  351 => 134,  345 => 130,  337 => 125,  333 => 123,  327 => 122,  323 => 120,  319 => 118,  316 => 117,  311 => 116,  309 => 115,  298 => 109,  295 => 108,  293 => 107,  289 => 105,  287 => 104,  284 => 103,  278 => 99,  269 => 95,  266 => 94,  264 => 93,  260 => 91,  258 => 90,  250 => 84,  247 => 83,  244 => 82,  238 => 80,  236 => 79,  232 => 78,  227 => 76,  222 => 75,  220 => 74,  213 => 71,  205 => 69,  203 => 68,  198 => 66,  193 => 63,  187 => 61,  185 => 60,  181 => 59,  176 => 57,  172 => 56,  167 => 55,  163 => 53,  161 => 52,  156 => 50,  152 => 49,  148 => 47,  142 => 46,  138 => 44,  134 => 42,  131 => 41,  127 => 40,  121 => 37,  105 => 23,  102 => 22,  99 => 21,  93 => 20,  90 => 19,  85 => 18,  82 => 17,  79 => 16,  77 => 15,  70 => 12,  63 => 9,  61 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

        <div class=\"separation\">
        {{ form_start(delete_form) }}
            <a class=\"btn btn-primary btn-outline\" href=\"{{ path('product_index') }}\">Back to the list</a>
            {% if \"now\"|date('Ymd')  < product.endingdate|date('Ymd') %}
                <a class=\"btn btn-warning btn-outline\" href=\"{{ path('product_edit', { 'id': product.id }) }}\">Edit</a>
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger btn-outline\">
            {% endif %}
        {{ form_end(delete_form) }}
        </div>

        {% set sumratings = 0 %}
        {% if rates is empty %}
        {% else %}
          {% for rating in rates %}
            {% set sumratings = sumratings + rating.value %}
          {% endfor %}
          {% set sumratings = (sumratings / rates|length) | round %}
        {% endif %}

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

                    <div class=\"stars\">
                      {% for i in 1..5 %}
                          {% if i <= sumratings %}
                            <span class=\"fa fa-star checked\"></span>
                          {% else %}
                            <span class=\"fa fa-star\"></span>
                            {% endif %}
                      {% endfor %}
                    </div>

                    <h4 class=\"seller\" >Added by {{ product.user.username }}</h4>
                    <p class=\"product-description\">{{ product.description }}</p>

                    {% if \"now\"|date('Ymd')  > product.endingdate|date('Ymd') %}
                        <div class=\"alert alert-danger\">this product is not avaible</div>
                    {% else %}
                        <h4>price start: <span>{{ product.pricestart }} €</span></h4>
                        <h4 class=\"price\">current price: <span>{{ product.price }} €</span></h4>
                        <h4>buy out: <span>{{ product.buyout }} €</span></h4>
                        <p>
                            Users has bid on this product <strong>{{  bids | length }}</strong> times.
                            {% if not bids is empty %}
                                <a href=\"{{ path('product_show_bids', { 'id': product.id }) }}\">(show history)</a>
                            {% endif %}
                        </p>

                        <p class=\"vote\">
                            <strong>{{  sumratings }} / 5</strong>
                             is the average note of this product!
                             {% if not rates is empty %}
                                 <a href=\"{{ path('product_show_comments', { 'id': product.id }) }}\"><strong>( {{ rates | length }} votes)</strong></a>
                             {% endif %}
                             <a class=\"btn btn-primary btn-outline btn-xs\" href=\"{{ path('rate_new', { 'id': product.id, 'type': 'product' }) }}\">Rate</a>
                        </p>
                        <div class=\"action\">
                        {% if app.user %}
                            {{ form_start(form) }}
                                <p>{{ form_widget(form) }}
                                <input type=\"submit\" value=\"Bid\" class=\"btn btn-info btn-outline btn-md largebutton\"/></p>
                            {{ form_end(form) }}
                            {% if error != '' %}
                                <div class=\"alert alert-danger\">{{ error }}</div>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                    </div>
                  </div>
                </div>
              </div>
            </div>

        {% if not bids is empty %}
            <h3> Last bid</h3>
            <div classe=\"separation\">
                {% set bid = bids | last %}
                <div class=\"alert alert-info\">
                   Last bid:<strong> {{ bid.amount }} €</strong> has been bade by {{ bid.user.username ?? 'Unknown'}}
                </div>
            </div>
        {% else %}
            <div class=\"alert alert-warning separation\">
               There is no bids on this article yet.
            </div>
        {% endif %}

        {% if not rates is empty %}
            <h3> Last comment</h3>
            <div class=\"panel panel-default\">
                {% set rate = rates | last %}
                <div class=\"panel-heading\">
                  <p>Date: {{ rate.date|date('Y-m-d') }} by {{ rate.name }}</p>
                </div>
            <div class=\"panel-body\">
                  <p>
                      <div class=\"stars\">
                        Rate :
                        {% set value = (rate.value | round) %}
                        {% for i in 1..5 %}
                            {% if i <= value %}
                              <span class=\"fa fa-star checked\"></span>
                            {% else %}
                              <span class=\"fa fa-star\"></span>
                              {% endif %}
                        {% endfor %}
                      </div>
                  </p>
                  <p>Comment: {{ rate.comment }}</p>
                </div>
            </div>

        {% else %}
            <div class=\"alert alert-warning\">
               There is no comments on this article yet.
            </div>
        {% endif %}
    </div>

{% endblock %}
", "product/show.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/product/show.html.twig");
    }
}
