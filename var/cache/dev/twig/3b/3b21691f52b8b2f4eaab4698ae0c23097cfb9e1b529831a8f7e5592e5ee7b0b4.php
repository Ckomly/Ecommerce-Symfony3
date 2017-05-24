<?php

/* product/edit.html.twig */
class __TwigTemplate_f2eafe8b02d05a6f8bc21eb702a7fa34f2e843f94489c69ed1ef01e164d9b3f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/edit.html.twig", 1);
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
        $__internal_133108521ffe8060f4c95875a2d1b846b5d5bc33b2b7210bcd472118443f5f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133108521ffe8060f4c95875a2d1b846b5d5bc33b2b7210bcd472118443f5f1b->enter($__internal_133108521ffe8060f4c95875a2d1b846b5d5bc33b2b7210bcd472118443f5f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $__internal_7adeac2448310064c8fb717ae9a3fb1bb2ec7c8223666094af4410712999b2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7adeac2448310064c8fb717ae9a3fb1bb2ec7c8223666094af4410712999b2c7->enter($__internal_7adeac2448310064c8fb717ae9a3fb1bb2ec7c8223666094af4410712999b2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133108521ffe8060f4c95875a2d1b846b5d5bc33b2b7210bcd472118443f5f1b->leave($__internal_133108521ffe8060f4c95875a2d1b846b5d5bc33b2b7210bcd472118443f5f1b_prof);

        
        $__internal_7adeac2448310064c8fb717ae9a3fb1bb2ec7c8223666094af4410712999b2c7->leave($__internal_7adeac2448310064c8fb717ae9a3fb1bb2ec7c8223666094af4410712999b2c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eb675a4226efc9a9d2c4b8fdcac098764f2eedb242b81f60cb997f2860dc663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb675a4226efc9a9d2c4b8fdcac098764f2eedb242b81f60cb997f2860dc663->enter($__internal_0eb675a4226efc9a9d2c4b8fdcac098764f2eedb242b81f60cb997f2860dc663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_445613964b3488ddc7b4cc17f2ca2266c305cea62cd5ccffba4d21be13b343d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445613964b3488ddc7b4cc17f2ca2266c305cea62cd5ccffba4d21be13b343d6->enter($__internal_445613964b3488ddc7b4cc17f2ca2266c305cea62cd5ccffba4d21be13b343d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
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
        
        $__internal_445613964b3488ddc7b4cc17f2ca2266c305cea62cd5ccffba4d21be13b343d6->leave($__internal_445613964b3488ddc7b4cc17f2ca2266c305cea62cd5ccffba4d21be13b343d6_prof);

        
        $__internal_0eb675a4226efc9a9d2c4b8fdcac098764f2eedb242b81f60cb997f2860dc663->leave($__internal_0eb675a4226efc9a9d2c4b8fdcac098764f2eedb242b81f60cb997f2860dc663_prof);

    }

    public function getTemplateName()
    {
        return "product/edit.html.twig";
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
    <h1>Product edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product/edit.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/product/edit.html.twig");
    }
}
