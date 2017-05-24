<?php

/* :user:edit.html.twig */
class __TwigTemplate_0f612a596ff8e7cabb00af03b9a8cc025d2e6b8e4ae0b9f37894b090af23b085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_591afd3953a6f97cc18976fb496dfe11e47229da6f2999467dd09df79e011582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591afd3953a6f97cc18976fb496dfe11e47229da6f2999467dd09df79e011582->enter($__internal_591afd3953a6f97cc18976fb496dfe11e47229da6f2999467dd09df79e011582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $__internal_0d0cda9374472a190df581071caf24ea92fa53f9cf8cbc1f907ae4b6410fb004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0cda9374472a190df581071caf24ea92fa53f9cf8cbc1f907ae4b6410fb004->enter($__internal_0d0cda9374472a190df581071caf24ea92fa53f9cf8cbc1f907ae4b6410fb004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_591afd3953a6f97cc18976fb496dfe11e47229da6f2999467dd09df79e011582->leave($__internal_591afd3953a6f97cc18976fb496dfe11e47229da6f2999467dd09df79e011582_prof);

        
        $__internal_0d0cda9374472a190df581071caf24ea92fa53f9cf8cbc1f907ae4b6410fb004->leave($__internal_0d0cda9374472a190df581071caf24ea92fa53f9cf8cbc1f907ae4b6410fb004_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a74881d4549266f52d1f963945a56d9ddfdb571281516787a798711939791ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74881d4549266f52d1f963945a56d9ddfdb571281516787a798711939791ae7->enter($__internal_a74881d4549266f52d1f963945a56d9ddfdb571281516787a798711939791ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4afbdee6f7abd996f1b6b23e94e0d014a40d338c43dcc2adfa6c342e1e6af6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afbdee6f7abd996f1b6b23e94e0d014a40d338c43dcc2adfa6c342e1e6af6fc->enter($__internal_4afbdee6f7abd996f1b6b23e94e0d014a40d338c43dcc2adfa6c342e1e6af6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4afbdee6f7abd996f1b6b23e94e0d014a40d338c43dcc2adfa6c342e1e6af6fc->leave($__internal_4afbdee6f7abd996f1b6b23e94e0d014a40d338c43dcc2adfa6c342e1e6af6fc_prof);

        
        $__internal_a74881d4549266f52d1f963945a56d9ddfdb571281516787a798711939791ae7->leave($__internal_a74881d4549266f52d1f963945a56d9ddfdb571281516787a798711939791ae7_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":user:edit.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/user/edit.html.twig");
    }
}
