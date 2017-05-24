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
        $__internal_633225f557866ef751821dc585446e86fe0a16f41905b6b11d0f47d4e14a998e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633225f557866ef751821dc585446e86fe0a16f41905b6b11d0f47d4e14a998e->enter($__internal_633225f557866ef751821dc585446e86fe0a16f41905b6b11d0f47d4e14a998e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_1d329ac087f7fb1f52ecd203f9e3e4bbb1c501113b05f8f1e76395fb38767b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d329ac087f7fb1f52ecd203f9e3e4bbb1c501113b05f8f1e76395fb38767b78->enter($__internal_1d329ac087f7fb1f52ecd203f9e3e4bbb1c501113b05f8f1e76395fb38767b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_633225f557866ef751821dc585446e86fe0a16f41905b6b11d0f47d4e14a998e->leave($__internal_633225f557866ef751821dc585446e86fe0a16f41905b6b11d0f47d4e14a998e_prof);

        
        $__internal_1d329ac087f7fb1f52ecd203f9e3e4bbb1c501113b05f8f1e76395fb38767b78->leave($__internal_1d329ac087f7fb1f52ecd203f9e3e4bbb1c501113b05f8f1e76395fb38767b78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_461d86dee485507650f50c5af18b6f22be2256c6ee9d4002dcc1a40a5f3aa61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461d86dee485507650f50c5af18b6f22be2256c6ee9d4002dcc1a40a5f3aa61a->enter($__internal_461d86dee485507650f50c5af18b6f22be2256c6ee9d4002dcc1a40a5f3aa61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57b922033331ebea9bd0b93e3bfa0bd84bbbb745bc9414d66b6c80eb575c0d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b922033331ebea9bd0b93e3bfa0bd84bbbb745bc9414d66b6c80eb575c0d34->enter($__internal_57b922033331ebea9bd0b93e3bfa0bd84bbbb745bc9414d66b6c80eb575c0d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <div class=\"panel panel-default\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rates"] ?? $this->getContext($context, "rates")));
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 33
            echo "        <div class=\"panel-heading\">
          <p>Date: ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rate"], "date", array()), "Y-m-d"), "html", null, true);
            echo " by ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "name", array()), "html", null, true);
            echo "</p>
        </div>
        <div class=\"panel-body\">
          <p>Rate: ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "value", array()), "html", null, true);
            echo "</p>
          <p>Comment: ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "comment", array()), "html", null, true);
            echo "</p>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </div>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_new", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "type" => "user")), "html", null, true);
        echo "\">Rate</a>
        </li>
        <li>
            ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_57b922033331ebea9bd0b93e3bfa0bd84bbbb745bc9414d66b6c80eb575c0d34->leave($__internal_57b922033331ebea9bd0b93e3bfa0bd84bbbb745bc9414d66b6c80eb575c0d34_prof);

        
        $__internal_461d86dee485507650f50c5af18b6f22be2256c6ee9d4002dcc1a40a5f3aa61a->leave($__internal_461d86dee485507650f50c5af18b6f22be2256c6ee9d4002dcc1a40a5f3aa61a_prof);

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
        return array (  151 => 56,  146 => 54,  140 => 51,  134 => 48,  128 => 45,  122 => 41,  113 => 38,  109 => 37,  101 => 34,  98 => 33,  94 => 32,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User</h1>

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

    <div class=\"panel panel-default\">
        {% for rate in rates %}
        <div class=\"panel-heading\">
          <p>Date: {{ rate.date|date('Y-m-d') }} by {{ rate.name }}</p>
        </div>
        <div class=\"panel-body\">
          <p>Rate: {{ rate.value }}</p>
          <p>Comment: {{ rate.comment }}</p>
        </div>
        {% endfor %}
    </div>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            <a href=\"{{ path('rate_new', { 'id': user.id, 'type': 'user' }) }}\">Rate</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/user/show.html.twig");
    }
}
