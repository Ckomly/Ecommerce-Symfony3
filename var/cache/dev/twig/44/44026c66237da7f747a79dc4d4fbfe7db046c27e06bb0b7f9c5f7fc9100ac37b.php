<?php

/* category/new.html.twig */
class __TwigTemplate_0a2aab3d007b54e4c8cf66ca494197a8e6989206fa1787a12dd6603773f215c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/new.html.twig", 1);
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
        $__internal_46976cc12da01a25f5a826651a3963bb202189595379288d5dbd5fc2d2302a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46976cc12da01a25f5a826651a3963bb202189595379288d5dbd5fc2d2302a59->enter($__internal_46976cc12da01a25f5a826651a3963bb202189595379288d5dbd5fc2d2302a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $__internal_39a27edd0c8b3f014e620ff6b80598f306ca2e11df77e8cddf984ea48ee22e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a27edd0c8b3f014e620ff6b80598f306ca2e11df77e8cddf984ea48ee22e7d->enter($__internal_39a27edd0c8b3f014e620ff6b80598f306ca2e11df77e8cddf984ea48ee22e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46976cc12da01a25f5a826651a3963bb202189595379288d5dbd5fc2d2302a59->leave($__internal_46976cc12da01a25f5a826651a3963bb202189595379288d5dbd5fc2d2302a59_prof);

        
        $__internal_39a27edd0c8b3f014e620ff6b80598f306ca2e11df77e8cddf984ea48ee22e7d->leave($__internal_39a27edd0c8b3f014e620ff6b80598f306ca2e11df77e8cddf984ea48ee22e7d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4413a77b6195442c9005246df889111c01055245191b8282e6d3c8a0729f29e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4413a77b6195442c9005246df889111c01055245191b8282e6d3c8a0729f29e4->enter($__internal_4413a77b6195442c9005246df889111c01055245191b8282e6d3c8a0729f29e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77704c0b706e8fc2e6adb026e0f9b4c58dc1d43ba371fe9da03d9ddd3223df5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77704c0b706e8fc2e6adb026e0f9b4c58dc1d43ba371fe9da03d9ddd3223df5b->enter($__internal_77704c0b706e8fc2e6adb026e0f9b4c58dc1d43ba371fe9da03d9ddd3223df5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_77704c0b706e8fc2e6adb026e0f9b4c58dc1d43ba371fe9da03d9ddd3223df5b->leave($__internal_77704c0b706e8fc2e6adb026e0f9b4c58dc1d43ba371fe9da03d9ddd3223df5b_prof);

        
        $__internal_4413a77b6195442c9005246df889111c01055245191b8282e6d3c8a0729f29e4->leave($__internal_4413a77b6195442c9005246df889111c01055245191b8282e6d3c8a0729f29e4_prof);

    }

    public function getTemplateName()
    {
        return "category/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Category creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "category/new.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/category/new.html.twig");
    }
}
