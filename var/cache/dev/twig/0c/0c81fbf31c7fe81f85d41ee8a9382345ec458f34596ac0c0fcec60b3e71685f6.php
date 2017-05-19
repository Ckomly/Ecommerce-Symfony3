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
        $__internal_bc162c2f59d9e9e322e776d34c1688b5b2e5268d14d3a494d753aa86d8b25914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc162c2f59d9e9e322e776d34c1688b5b2e5268d14d3a494d753aa86d8b25914->enter($__internal_bc162c2f59d9e9e322e776d34c1688b5b2e5268d14d3a494d753aa86d8b25914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_4c4a1fad26bdd4be659b2ea683f36aadd3aed715b64bde7054da802e23c377d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4a1fad26bdd4be659b2ea683f36aadd3aed715b64bde7054da802e23c377d5->enter($__internal_4c4a1fad26bdd4be659b2ea683f36aadd3aed715b64bde7054da802e23c377d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc162c2f59d9e9e322e776d34c1688b5b2e5268d14d3a494d753aa86d8b25914->leave($__internal_bc162c2f59d9e9e322e776d34c1688b5b2e5268d14d3a494d753aa86d8b25914_prof);

        
        $__internal_4c4a1fad26bdd4be659b2ea683f36aadd3aed715b64bde7054da802e23c377d5->leave($__internal_4c4a1fad26bdd4be659b2ea683f36aadd3aed715b64bde7054da802e23c377d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a80bed6cbc6155b929fe0947bc5f24d74ad50d17b34703653459d972527022a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80bed6cbc6155b929fe0947bc5f24d74ad50d17b34703653459d972527022a0->enter($__internal_a80bed6cbc6155b929fe0947bc5f24d74ad50d17b34703653459d972527022a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d8c12faf4f88b3b07357ab691d0a4014a2af3aa6e23cab26956be5ae1bf1916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8c12faf4f88b3b07357ab691d0a4014a2af3aa6e23cab26956be5ae1bf1916->enter($__internal_1d8c12faf4f88b3b07357ab691d0a4014a2af3aa6e23cab26956be5ae1bf1916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_1d8c12faf4f88b3b07357ab691d0a4014a2af3aa6e23cab26956be5ae1bf1916->leave($__internal_1d8c12faf4f88b3b07357ab691d0a4014a2af3aa6e23cab26956be5ae1bf1916_prof);

        
        $__internal_a80bed6cbc6155b929fe0947bc5f24d74ad50d17b34703653459d972527022a0->leave($__internal_a80bed6cbc6155b929fe0947bc5f24d74ad50d17b34703653459d972527022a0_prof);

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
        return array (  116 => 36,  109 => 31,  99 => 27,  95 => 26,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
