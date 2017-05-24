<?php

/* user/index.html.twig */
class __TwigTemplate_31cd7980d539f5030c9ba6008ad2e907e5d380f9e651916b39530209789f802f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_f99adc29f589574d79c4d6340f92c589ca9549ad4cc6c8c5c10010ba937a27c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99adc29f589574d79c4d6340f92c589ca9549ad4cc6c8c5c10010ba937a27c3->enter($__internal_f99adc29f589574d79c4d6340f92c589ca9549ad4cc6c8c5c10010ba937a27c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_896a9f15a40b23db32bb37b22ef6538c539855c4fa3fa25d78e9d0ae34cd7c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896a9f15a40b23db32bb37b22ef6538c539855c4fa3fa25d78e9d0ae34cd7c98->enter($__internal_896a9f15a40b23db32bb37b22ef6538c539855c4fa3fa25d78e9d0ae34cd7c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f99adc29f589574d79c4d6340f92c589ca9549ad4cc6c8c5c10010ba937a27c3->leave($__internal_f99adc29f589574d79c4d6340f92c589ca9549ad4cc6c8c5c10010ba937a27c3_prof);

        
        $__internal_896a9f15a40b23db32bb37b22ef6538c539855c4fa3fa25d78e9d0ae34cd7c98->leave($__internal_896a9f15a40b23db32bb37b22ef6538c539855c4fa3fa25d78e9d0ae34cd7c98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54fb8a0db3cd35e2677fb71e18af83c1f22bd2b2f3f5f425965296ad9af8e16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54fb8a0db3cd35e2677fb71e18af83c1f22bd2b2f3f5f425965296ad9af8e16e->enter($__internal_54fb8a0db3cd35e2677fb71e18af83c1f22bd2b2f3f5f425965296ad9af8e16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f30dad3ac218212379fd11cc1904919926d48ef5f5ae4e249041ed331f08ee4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30dad3ac218212379fd11cc1904919926d48ef5f5ae4e249041ed331f08ee4d->enter($__internal_f30dad3ac218212379fd11cc1904919926d48ef5f5ae4e249041ed331f08ee4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">show</a>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">edit</a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_new", array("id" => $this->getAttribute($context["user"], "id", array()), "type" => "user")), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">Rate</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_f30dad3ac218212379fd11cc1904919926d48ef5f5ae4e249041ed331f08ee4d->leave($__internal_f30dad3ac218212379fd11cc1904919926d48ef5f5ae4e249041ed331f08ee4d_prof);

        
        $__internal_54fb8a0db3cd35e2677fb71e18af83c1f22bd2b2f3f5f425965296ad9af8e16e->leave($__internal_54fb8a0db3cd35e2677fb71e18af83c1f22bd2b2f3f5f425965296ad9af8e16e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  113 => 32,  103 => 28,  99 => 27,  95 => 26,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.username }}</td>
                <td>{{ user.firstname }}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td>
                    <a href=\"{{ path('user_show', { 'id': user.id }) }}\" class=\"btn btn-outline-primary\">show</a>
                    <a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"btn btn-outline-primary\">edit</a>
                    <a href=\"{{ path('rate_new', { 'id': user.id, 'type': 'user' }) }}\" class=\"btn btn-outline-primary\">Rate</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/user/index.html.twig");
    }
}
