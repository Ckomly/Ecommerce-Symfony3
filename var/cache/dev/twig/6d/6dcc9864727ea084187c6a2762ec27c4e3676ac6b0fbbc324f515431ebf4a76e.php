<?php

/* user/show.html.twig */
class __TwigTemplate_7e0f6a5acbf709c76ff0dc40b25b3b9c5e461bc7dd7b57573f4088c4f2bd26ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_d728e1226883768a5e80e2bcc65f26bd03b2d2ce1a6c9860e698946e4af155e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d728e1226883768a5e80e2bcc65f26bd03b2d2ce1a6c9860e698946e4af155e1->enter($__internal_d728e1226883768a5e80e2bcc65f26bd03b2d2ce1a6c9860e698946e4af155e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_e30797581139230ae96804ae7ee691b339c06b485f03d59a2be7365671292750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30797581139230ae96804ae7ee691b339c06b485f03d59a2be7365671292750->enter($__internal_e30797581139230ae96804ae7ee691b339c06b485f03d59a2be7365671292750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d728e1226883768a5e80e2bcc65f26bd03b2d2ce1a6c9860e698946e4af155e1->leave($__internal_d728e1226883768a5e80e2bcc65f26bd03b2d2ce1a6c9860e698946e4af155e1_prof);

        
        $__internal_e30797581139230ae96804ae7ee691b339c06b485f03d59a2be7365671292750->leave($__internal_e30797581139230ae96804ae7ee691b339c06b485f03d59a2be7365671292750_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4897ccd6c4fe12b871e520eb48279034a7f190512527158b0d2b02507eaf343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4897ccd6c4fe12b871e520eb48279034a7f190512527158b0d2b02507eaf343->enter($__internal_f4897ccd6c4fe12b871e520eb48279034a7f190512527158b0d2b02507eaf343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8df8bd8781fa93618dae5a88bc57e01bfff4134df4986e885dbe783f83b35664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df8bd8781fa93618dae5a88bc57e01bfff4134df4986e885dbe783f83b35664->enter($__internal_8df8bd8781fa93618dae5a88bc57e01bfff4134df4986e885dbe783f83b35664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"separation\">
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <a class=\"btn btn-primary btn-outline\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        <a class=\"btn btn-warning btn-outline\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger btn-outline\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </div>

    <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h1>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    ";
        // line 38
        if ( !twig_test_empty(($context["bids"] ?? $this->getContext($context, "bids")))) {
            // line 39
            echo "    <h3> Last bid <a class=\"btn btn-info btn-outline\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show_bids", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">Edit</a></h3>
    <div classe=\"separation\">
        ";
            // line 41
            $context["bid"] = twig_last($this->env, ($context["bids"] ?? $this->getContext($context, "bids")));
            // line 42
            echo "        <div class=\"alert alert-info\">
           Last bid:<strong> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["bid"] ?? $this->getContext($context, "bid")), "amount", array()), "html", null, true);
            echo " €</strong> has been bade by ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bid"] ?? $this->getContext($context, "bid")), "user", array()), "username", array()), "html", null, true);
            echo "
        </div>
    </div>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ( !twig_test_empty(($context["rates"] ?? $this->getContext($context, "rates")))) {
            // line 49
            echo "    <h3> Last comment</h3>
    <div class=\"panel panel-default\">
        ";
            // line 51
            $context["rate"] = twig_last($this->env, ($context["rates"] ?? $this->getContext($context, "rates")));
            // line 52
            echo "        <div class=\"panel-heading\">
          <p>Date: <strong>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "date", array()), "Y-m-d"), "html", null, true);
            echo "</strong> by <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "name", array()), "html", null, true);
            echo "</strong></p>
        </div>
        <div class=\"panel-body\">
          <div class=\"stars\">
            Rate :
            ";
            // line 58
            $context["value"] = twig_round($this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "value", array()));
            // line 59
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 60
                echo "                ";
                if (($context["i"] <= ($context["value"] ?? $this->getContext($context, "value")))) {
                    // line 61
                    echo "                  <span class=\"fa fa-star checked\"></span>
                ";
                } else {
                    // line 63
                    echo "                  <span class=\"fa fa-star\"></span>
                  ";
                }
                // line 65
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "          </div>
          <p>Comment: ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["rate"] ?? $this->getContext($context, "rate")), "comment", array()), "html", null, true);
            echo "</p>
        </div>
    </div>
    ";
        }
        
        $__internal_8df8bd8781fa93618dae5a88bc57e01bfff4134df4986e885dbe783f83b35664->leave($__internal_8df8bd8781fa93618dae5a88bc57e01bfff4134df4986e885dbe783f83b35664_prof);

        
        $__internal_f4897ccd6c4fe12b871e520eb48279034a7f190512527158b0d2b02507eaf343->leave($__internal_f4897ccd6c4fe12b871e520eb48279034a7f190512527158b0d2b02507eaf343_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 67,  185 => 66,  179 => 65,  175 => 63,  171 => 61,  168 => 60,  163 => 59,  161 => 58,  151 => 53,  148 => 52,  146 => 51,  142 => 49,  140 => 48,  137 => 47,  128 => 43,  125 => 42,  123 => 41,  117 => 39,  115 => 38,  107 => 33,  100 => 29,  93 => 25,  86 => 21,  79 => 17,  71 => 12,  65 => 9,  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        <a class=\"btn btn-primary btn-outline\" href=\"{{ path('user_index') }}\">Back to the list</a>
        <a class=\"btn btn-warning btn-outline\" href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger btn-outline\">
    {{ form_end(delete_form) }}
    </div>

    <h1>{{ user.username }}</h1>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>{{ user.username }}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{ user.firstname }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ user.name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user.email }}</td>
            </tr>
        </tbody>
    </table>

    {% if not bids is empty %}
    <h3> Last bid <a class=\"btn btn-info btn-outline\" href=\"{{ path('product_show_bids', { 'id': user.id }) }}\">Edit</a></h3>
    <div classe=\"separation\">
        {% set bid = bids | last %}
        <div class=\"alert alert-info\">
           Last bid:<strong> {{ bid.amount }} €</strong> has been bade by {{ bid.user.username }}
        </div>
    </div>
    {% endif %}

    {% if not rates is empty %}
    <h3> Last comment</h3>
    <div class=\"panel panel-default\">
        {% set rate = rates | last %}
        <div class=\"panel-heading\">
          <p>Date: <strong>{{ rate.date|date('Y-m-d') }}</strong> by <strong>{{ rate.name }}</strong></p>
        </div>
        <div class=\"panel-body\">
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
          <p>Comment: {{ rate.comment }}</p>
        </div>
    </div>
    {% endif %}
{% endblock %}
", "user/show.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/user/show.html.twig");
    }
}
