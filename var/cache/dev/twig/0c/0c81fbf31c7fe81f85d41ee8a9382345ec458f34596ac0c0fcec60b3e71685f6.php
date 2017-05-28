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
        $__internal_b23a9d1ca32dcdeba905598a246b31c3d657f0590921d2ed11afd2bba03dedc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23a9d1ca32dcdeba905598a246b31c3d657f0590921d2ed11afd2bba03dedc2->enter($__internal_b23a9d1ca32dcdeba905598a246b31c3d657f0590921d2ed11afd2bba03dedc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_ef12ac52d1c10c222dc1c1a143dab9949be9afb918f0d77dd6c2dd0b745e6777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef12ac52d1c10c222dc1c1a143dab9949be9afb918f0d77dd6c2dd0b745e6777->enter($__internal_ef12ac52d1c10c222dc1c1a143dab9949be9afb918f0d77dd6c2dd0b745e6777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b23a9d1ca32dcdeba905598a246b31c3d657f0590921d2ed11afd2bba03dedc2->leave($__internal_b23a9d1ca32dcdeba905598a246b31c3d657f0590921d2ed11afd2bba03dedc2_prof);

        
        $__internal_ef12ac52d1c10c222dc1c1a143dab9949be9afb918f0d77dd6c2dd0b745e6777->leave($__internal_ef12ac52d1c10c222dc1c1a143dab9949be9afb918f0d77dd6c2dd0b745e6777_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac6e90556650fc1023cabe602d715434bc9cef0921ef7c3aaf87bc8f2d967f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6e90556650fc1023cabe602d715434bc9cef0921ef7c3aaf87bc8f2d967f45->enter($__internal_ac6e90556650fc1023cabe602d715434bc9cef0921ef7c3aaf87bc8f2d967f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0035abf98b6931ff075d5d9ac326ff326e517b3345d69d5193ae475a374ad2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0035abf98b6931ff075d5d9ac326ff326e517b3345d69d5193ae475a374ad2e5->enter($__internal_0035abf98b6931ff075d5d9ac326ff326e517b3345d69d5193ae475a374ad2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list <a class=\"btn btn-primary btn-outline\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a></h1>

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
            echo "\" class=\"btn btn-primary btn-outline\">show</a>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-outline\">edit</a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rate_new", array("id" => $this->getAttribute($context["user"], "id", array()), "type" => "user")), "html", null, true);
            echo "\" class=\"btn btn-primary btn-outline\">Rate</a>
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

";
        
        $__internal_0035abf98b6931ff075d5d9ac326ff326e517b3345d69d5193ae475a374ad2e5->leave($__internal_0035abf98b6931ff075d5d9ac326ff326e517b3345d69d5193ae475a374ad2e5_prof);

        
        $__internal_ac6e90556650fc1023cabe602d715434bc9cef0921ef7c3aaf87bc8f2d967f45->leave($__internal_ac6e90556650fc1023cabe602d715434bc9cef0921ef7c3aaf87bc8f2d967f45_prof);

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
        return array (  115 => 32,  105 => 28,  101 => 27,  97 => 26,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  74 => 20,  71 => 19,  67 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list <a class=\"btn btn-primary btn-outline\" href=\"{{ path('user_new') }}\">Create a new user</a></h1>

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
                    <a href=\"{{ path('user_show', { 'id': user.id }) }}\" class=\"btn btn-primary btn-outline\">show</a>
                    <a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"btn btn-warning btn-outline\">edit</a>
                    <a href=\"{{ path('rate_new', { 'id': user.id, 'type': 'user' }) }}\" class=\"btn btn-primary btn-outline\">Rate</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "user/index.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/user/index.html.twig");
    }
}
