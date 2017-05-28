<?php

/* user/edit.html.twig */
class __TwigTemplate_0f612a596ff8e7cabb00af03b9a8cc025d2e6b8e4ae0b9f37894b090af23b085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_6ec5598e9bb5607599062a8b5f16f992790434cad92935a57aa5d8ff8c6069ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec5598e9bb5607599062a8b5f16f992790434cad92935a57aa5d8ff8c6069ef->enter($__internal_6ec5598e9bb5607599062a8b5f16f992790434cad92935a57aa5d8ff8c6069ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_b6b3a003c4aed0fb854718688c9e55f2ec8a38f2a757f7594ee6e615f50a0524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b3a003c4aed0fb854718688c9e55f2ec8a38f2a757f7594ee6e615f50a0524->enter($__internal_b6b3a003c4aed0fb854718688c9e55f2ec8a38f2a757f7594ee6e615f50a0524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ec5598e9bb5607599062a8b5f16f992790434cad92935a57aa5d8ff8c6069ef->leave($__internal_6ec5598e9bb5607599062a8b5f16f992790434cad92935a57aa5d8ff8c6069ef_prof);

        
        $__internal_b6b3a003c4aed0fb854718688c9e55f2ec8a38f2a757f7594ee6e615f50a0524->leave($__internal_b6b3a003c4aed0fb854718688c9e55f2ec8a38f2a757f7594ee6e615f50a0524_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_408013b913242c0792e780a2029befac8702acc8e0b611ab00cb4b3b3319762c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408013b913242c0792e780a2029befac8702acc8e0b611ab00cb4b3b3319762c->enter($__internal_408013b913242c0792e780a2029befac8702acc8e0b611ab00cb4b3b3319762c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a686860d08993c05e4e971a0f114b7e063f29730ec886d8b0b5a37e076cdeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a686860d08993c05e4e971a0f114b7e063f29730ec886d8b0b5a37e076cdeb3->enter($__internal_7a686860d08993c05e4e971a0f114b7e063f29730ec886d8b0b5a37e076cdeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a686860d08993c05e4e971a0f114b7e063f29730ec886d8b0b5a37e076cdeb3->leave($__internal_7a686860d08993c05e4e971a0f114b7e063f29730ec886d8b0b5a37e076cdeb3_prof);

        
        $__internal_408013b913242c0792e780a2029befac8702acc8e0b611ab00cb4b3b3319762c->leave($__internal_408013b913242c0792e780a2029befac8702acc8e0b611ab00cb4b3b3319762c_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
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
", "user/edit.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/user/edit.html.twig");
    }
}
