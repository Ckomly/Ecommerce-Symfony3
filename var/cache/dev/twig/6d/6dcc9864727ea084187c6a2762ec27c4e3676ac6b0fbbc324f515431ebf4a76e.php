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
        $__internal_b62f5a16224ece98a572e89f53165549bb56b5b0cf5a7bfe0124cc8797e09965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62f5a16224ece98a572e89f53165549bb56b5b0cf5a7bfe0124cc8797e09965->enter($__internal_b62f5a16224ece98a572e89f53165549bb56b5b0cf5a7bfe0124cc8797e09965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6d8da99cc019255d65f144ac3325b9cb629e96cb5d64f3407c8a92406c35ba25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8da99cc019255d65f144ac3325b9cb629e96cb5d64f3407c8a92406c35ba25->enter($__internal_6d8da99cc019255d65f144ac3325b9cb629e96cb5d64f3407c8a92406c35ba25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b62f5a16224ece98a572e89f53165549bb56b5b0cf5a7bfe0124cc8797e09965->leave($__internal_b62f5a16224ece98a572e89f53165549bb56b5b0cf5a7bfe0124cc8797e09965_prof);

        
        $__internal_6d8da99cc019255d65f144ac3325b9cb629e96cb5d64f3407c8a92406c35ba25->leave($__internal_6d8da99cc019255d65f144ac3325b9cb629e96cb5d64f3407c8a92406c35ba25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_301839bb6e48f50486ff05d49b8fc6986dec1238c1d9d4d087f5d36058721631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301839bb6e48f50486ff05d49b8fc6986dec1238c1d9d4d087f5d36058721631->enter($__internal_301839bb6e48f50486ff05d49b8fc6986dec1238c1d9d4d087f5d36058721631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af8db9146a976e1cfae89bf4621457efacd30689f55759ff704ed0bbb27e16a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8db9146a976e1cfae89bf4621457efacd30689f55759ff704ed0bbb27e16a4->enter($__internal_af8db9146a976e1cfae89bf4621457efacd30689f55759ff704ed0bbb27e16a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af8db9146a976e1cfae89bf4621457efacd30689f55759ff704ed0bbb27e16a4->leave($__internal_af8db9146a976e1cfae89bf4621457efacd30689f55759ff704ed0bbb27e16a4_prof);

        
        $__internal_301839bb6e48f50486ff05d49b8fc6986dec1238c1d9d4d087f5d36058721631->leave($__internal_301839bb6e48f50486ff05d49b8fc6986dec1238c1d9d4d087f5d36058721631_prof);

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
