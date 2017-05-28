<?php

/* bid/show.html.twig */
class __TwigTemplate_8f02182b81696e80dcc19e6fd818960fcde0084a94902971d9a2a9be2d69f5e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bid/show.html.twig", 1);
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
        $__internal_f2c2d5c1495e7294e3297d78ee91e44ea21939a44206efd42243b2d3f2aab63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c2d5c1495e7294e3297d78ee91e44ea21939a44206efd42243b2d3f2aab63a->enter($__internal_f2c2d5c1495e7294e3297d78ee91e44ea21939a44206efd42243b2d3f2aab63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bid/show.html.twig"));

        $__internal_bbba1dbd38bb201fdd6af61611ebec076679eb19aca627536b73966ee10759a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbba1dbd38bb201fdd6af61611ebec076679eb19aca627536b73966ee10759a4->enter($__internal_bbba1dbd38bb201fdd6af61611ebec076679eb19aca627536b73966ee10759a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bid/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c2d5c1495e7294e3297d78ee91e44ea21939a44206efd42243b2d3f2aab63a->leave($__internal_f2c2d5c1495e7294e3297d78ee91e44ea21939a44206efd42243b2d3f2aab63a_prof);

        
        $__internal_bbba1dbd38bb201fdd6af61611ebec076679eb19aca627536b73966ee10759a4->leave($__internal_bbba1dbd38bb201fdd6af61611ebec076679eb19aca627536b73966ee10759a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_012072523e76b47c0262df79e1eab34b04ef910aa4229110c6d67429ea65df73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_012072523e76b47c0262df79e1eab34b04ef910aa4229110c6d67429ea65df73->enter($__internal_012072523e76b47c0262df79e1eab34b04ef910aa4229110c6d67429ea65df73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0597b3d132fdebc6477b072d3fdd53ba98b002d737964afa58eeffc884306293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0597b3d132fdebc6477b072d3fdd53ba98b002d737964afa58eeffc884306293->enter($__internal_0597b3d132fdebc6477b072d3fdd53ba98b002d737964afa58eeffc884306293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</strong>'s bids history</h1>
    <p class=\"btn btn-primary btn-outline btm-sm\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\"><strong>Back to the product</strong></a> </p>

    <div class=\"separation\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listBids"] ?? $this->getContext($context, "listBids")));
        foreach ($context['_seq'] as $context["_key"] => $context["bid"]) {
            // line 9
            echo "        <div class=\"alert alert-info\">
           <strong> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["bid"], "amount", array()), "html", null, true);
            echo " €</strong> has been bade
           by <strong>";
            // line 11
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["bid"], "user", array(), "any", false, true), "username", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["bid"], "user", array(), "any", false, true), "username", array())))) ? ($this->getAttribute($this->getAttribute($context["bid"], "user", array(), "any", false, true), "username", array())) : ("Unknown")), "html", null, true);
            echo "</strong>
           the <strong>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bid"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</strong>
           at <strong>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["bid"], "date", array()), "H:i"), "html", null, true);
            echo "</strong>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>

";
        
        $__internal_0597b3d132fdebc6477b072d3fdd53ba98b002d737964afa58eeffc884306293->leave($__internal_0597b3d132fdebc6477b072d3fdd53ba98b002d737964afa58eeffc884306293_prof);

        
        $__internal_012072523e76b47c0262df79e1eab34b04ef910aa4229110c6d67429ea65df73->leave($__internal_012072523e76b47c0262df79e1eab34b04ef910aa4229110c6d67429ea65df73_prof);

    }

    public function getTemplateName()
    {
        return "bid/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 16,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  64 => 9,  60 => 8,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1><strong>{{ product.name }}</strong>'s bids history</h1>
    <p class=\"btn btn-primary btn-outline btm-sm\"><a href=\"{{ path('product_show', { 'id': product.id }) }}\"><strong>Back to the product</strong></a> </p>

    <div class=\"separation\">
        {% for bid in listBids %}
        <div class=\"alert alert-info\">
           <strong> {{ bid.amount }} €</strong> has been bade
           by <strong>{{ bid.user.username ?? 'Unknown' }}</strong>
           the <strong>{{ bid.date | date('Y-m-d') }}</strong>
           at <strong>{{ bid.date | date('H:i') }}</strong>
        </div>
        {% endfor %}
    </div>

{% endblock %}
", "bid/show.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/bid/show.html.twig");
    }
}
