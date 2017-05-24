<?php

/* :category:show.html.twig */
class __TwigTemplate_5f4c4caf2c0e21d38ebe1039a32044d657ff88e404d7dcbcc67fce6bc9c04bcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:show.html.twig", 1);
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
        $__internal_7565044162e585be395982477cd116646afac2c5e1eb72ae871d63ef16582af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7565044162e585be395982477cd116646afac2c5e1eb72ae871d63ef16582af5->enter($__internal_7565044162e585be395982477cd116646afac2c5e1eb72ae871d63ef16582af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:show.html.twig"));

        $__internal_6792b25fb3a267e0afaeea3ffe13a605c30cde4962bc910a04432c638758278e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6792b25fb3a267e0afaeea3ffe13a605c30cde4962bc910a04432c638758278e->enter($__internal_6792b25fb3a267e0afaeea3ffe13a605c30cde4962bc910a04432c638758278e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7565044162e585be395982477cd116646afac2c5e1eb72ae871d63ef16582af5->leave($__internal_7565044162e585be395982477cd116646afac2c5e1eb72ae871d63ef16582af5_prof);

        
        $__internal_6792b25fb3a267e0afaeea3ffe13a605c30cde4962bc910a04432c638758278e->leave($__internal_6792b25fb3a267e0afaeea3ffe13a605c30cde4962bc910a04432c638758278e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f7271fcaabe62587fc0884255b6448d877b9432765e378d0db8e1748715a671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f7271fcaabe62587fc0884255b6448d877b9432765e378d0db8e1748715a671->enter($__internal_4f7271fcaabe62587fc0884255b6448d877b9432765e378d0db8e1748715a671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49fadfc1f351eddce2e8b733b1d8109ff43d951b04020ff57876dca22459de46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fadfc1f351eddce2e8b733b1d8109ff43d951b04020ff57876dca22459de46->enter($__internal_49fadfc1f351eddce2e8b733b1d8109ff43d951b04020ff57876dca22459de46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "category", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute(($context["category"] ?? $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_49fadfc1f351eddce2e8b733b1d8109ff43d951b04020ff57876dca22459de46->leave($__internal_49fadfc1f351eddce2e8b733b1d8109ff43d951b04020ff57876dca22459de46_prof);

        
        $__internal_4f7271fcaabe62587fc0884255b6448d877b9432765e378d0db8e1748715a671->leave($__internal_4f7271fcaabe62587fc0884255b6448d877b9432765e378d0db8e1748715a671_prof);

    }

    public function getTemplateName()
    {
        return ":category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ category.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ category.name }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ category.category }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('category_edit', { 'id': category.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":category:show.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/category/show.html.twig");
    }
}
