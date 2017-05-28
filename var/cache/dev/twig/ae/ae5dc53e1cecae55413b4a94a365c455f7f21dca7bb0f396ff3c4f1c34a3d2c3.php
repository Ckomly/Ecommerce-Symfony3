<?php

/* CACommerceBundle:Default:index.html.twig */
class __TwigTemplate_170283fe8dba71e4531c42dc7d9a8ec82841370c9dff1db8cf01e3953b753655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CACommerceBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_472e4236ba6c44717968d1b63b18765218ec743f58a44d75a91e25f99b8db116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472e4236ba6c44717968d1b63b18765218ec743f58a44d75a91e25f99b8db116->enter($__internal_472e4236ba6c44717968d1b63b18765218ec743f58a44d75a91e25f99b8db116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Default:index.html.twig"));

        $__internal_894934049e344720e987fc834ca0ddc5898f4a0341815bd1219e4195c88836fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894934049e344720e987fc834ca0ddc5898f4a0341815bd1219e4195c88836fc->enter($__internal_894934049e344720e987fc834ca0ddc5898f4a0341815bd1219e4195c88836fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_472e4236ba6c44717968d1b63b18765218ec743f58a44d75a91e25f99b8db116->leave($__internal_472e4236ba6c44717968d1b63b18765218ec743f58a44d75a91e25f99b8db116_prof);

        
        $__internal_894934049e344720e987fc834ca0ddc5898f4a0341815bd1219e4195c88836fc->leave($__internal_894934049e344720e987fc834ca0ddc5898f4a0341815bd1219e4195c88836fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_729555898ff2ffe8f0db65d387a38a75e7b3ae566252e142544aa2c0577e4a44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729555898ff2ffe8f0db65d387a38a75e7b3ae566252e142544aa2c0577e4a44->enter($__internal_729555898ff2ffe8f0db65d387a38a75e7b3ae566252e142544aa2c0577e4a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6042d8e620c2464aaf267d2011007caa72d0c92c5e5838e53f3b3f1cb35e4c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6042d8e620c2464aaf267d2011007caa72d0c92c5e5838e53f3b3f1cb35e4c27->enter($__internal_6042d8e620c2464aaf267d2011007caa72d0c92c5e5838e53f3b3f1cb35e4c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h2> Last 4 articles </h2>
</div>
<div class=\"container-outpadding\" style=\" margin-bottom:20.5em;\">
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "    \t<div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-top:1em;\">
            <div class=\"col-item\">
                <div class=\"post-img-content\">
                    <img src=\"http://placehold.it/350x260\" class=\"img-responsive\" />
                    <span class=\"post-title\">
                        <b><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></b><br>
                        <b>";
            // line 15
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["product"], "category", array(), "any", false, true), "name", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["product"], "category", array(), "any", false, true), "name", array())))) ? ($this->getAttribute($this->getAttribute($context["product"], "category", array(), "any", false, true), "name", array())) : ("no category")), "html", null, true);
            echo "</b>
                    </span>
                    ";
            // line 17
            if ((twig_date_format_filter($this->env, "now", "Ymd") > twig_date_format_filter($this->env, $this->getAttribute($context["product"], "endingdate", array()), "Ymd"))) {
                // line 18
                echo "                        <span class=\"round-tag out\">Out</span>
                    ";
            } else {
                // line 20
                echo "                        <span class=\"round-tag\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo " €</span>
                    ";
            }
            // line 22
            echo "                </div>
                <div class=\"info\">
                    <div class=\"row\">
                        <div class=\"price col-md-10\">
                            <h5>End the : ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["product"], "endingdate", array()), "Y-m-d"), "html", null, true);
            echo "</h5>
                        </div>
                    </div>
                    <div class=\"separator clear-left\">
                        <p class=\"btn-details\">
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">more details</a>
                        </p>
                    </div>
                    <div class=\"clearfix\">
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
</div>
<div class=\"container\">
    <h2> Last 4 bids </h2>
</div>
<div class=\"separation\">

    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bids"] ?? $this->getContext($context, "bids")));
        foreach ($context['_seq'] as $context["_key"] => $context["bid"]) {
            // line 48
            echo "        ";
            $context["difference"] = $this->getAttribute(twig_date_converter($this->env, "now"), "diff", array(0 => $this->getAttribute($context["bid"], "date", array())), "method");
            // line 49
            echo "        <div></div>
        <div class=\"alert alert-info\">
            <strong>";
            // line 51
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["bid"], "user", array(), "any", false, true), "username", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["bid"], "user", array(), "any", false, true), "username", array())))) ? ($this->getAttribute($this->getAttribute($context["bid"], "user", array(), "any", false, true), "username", array())) : ("Unknown")), "html", null, true);
            echo "</strong> has bid <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bid"], "amount", array()), "html", null, true);
            echo "€</strong> on <strong>";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["bid"], "product", array(), "any", false, true), "name", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["bid"], "product", array(), "any", false, true), "name", array())))) ? ($this->getAttribute($this->getAttribute($context["bid"], "product", array(), "any", false, true), "name", array())) : ("a deleted product")), "html", null, true);
            echo "</strong>.
            ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute(($context["difference"] ?? $this->getContext($context, "difference")), "d", array()), "html", null, true);
            echo " days, ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["difference"] ?? $this->getContext($context, "difference")), "h", array()), "html", null, true);
            echo " hours, ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["difference"] ?? $this->getContext($context, "difference")), "i", array()), "html", null, true);
            echo " minutes, ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["difference"] ?? $this->getContext($context, "difference")), "s", array()), "html", null, true);
            echo " secondes ago.
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bid'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>

";
        
        $__internal_6042d8e620c2464aaf267d2011007caa72d0c92c5e5838e53f3b3f1cb35e4c27->leave($__internal_6042d8e620c2464aaf267d2011007caa72d0c92c5e5838e53f3b3f1cb35e4c27_prof);

        
        $__internal_729555898ff2ffe8f0db65d387a38a75e7b3ae566252e142544aa2c0577e4a44->leave($__internal_729555898ff2ffe8f0db65d387a38a75e7b3ae566252e142544aa2c0577e4a44_prof);

    }

    public function getTemplateName()
    {
        return "CACommerceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 55,  146 => 52,  138 => 51,  134 => 49,  131 => 48,  127 => 47,  118 => 40,  103 => 31,  95 => 26,  89 => 22,  83 => 20,  79 => 18,  77 => 17,  72 => 15,  66 => 14,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}
<div class=\"container\">
    <h2> Last 4 articles </h2>
</div>
<div class=\"container-outpadding\" style=\" margin-bottom:20.5em;\">
      {% for product in products %}
    \t<div class=\"col-xs-12 col-sm-6 col-md-3\" style=\"margin-top:1em;\">
            <div class=\"col-item\">
                <div class=\"post-img-content\">
                    <img src=\"http://placehold.it/350x260\" class=\"img-responsive\" />
                    <span class=\"post-title\">
                        <b><a href=\"{{ path('product_show', { 'id': product.id }) }}\">{{product.name}}</a></b><br>
                        <b>{{product.category.name ?? 'no category'}}</b>
                    </span>
                    {% if \"now\"|date('Ymd')  > product.endingdate|date('Ymd') %}
                        <span class=\"round-tag out\">Out</span>
                    {% else %}
                        <span class=\"round-tag\">{{product.price}} €</span>
                    {% endif %}
                </div>
                <div class=\"info\">
                    <div class=\"row\">
                        <div class=\"price col-md-10\">
                            <h5>End the : {{ product.endingdate | date('Y-m-d')}}</h5>
                        </div>
                    </div>
                    <div class=\"separator clear-left\">
                        <p class=\"btn-details\">
                            <a href=\"{{ path('product_show', { 'id': product.id }) }}\">more details</a>
                        </p>
                    </div>
                    <div class=\"clearfix\">
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}

</div>
<div class=\"container\">
    <h2> Last 4 bids </h2>
</div>
<div class=\"separation\">

    {% for bid in bids %}
        {% set difference = date(\"now\").diff(bid.date) %}
        <div></div>
        <div class=\"alert alert-info\">
            <strong>{{ bid.user.username ?? 'Unknown'}}</strong> has bid <strong>{{ bid.amount }}€</strong> on <strong>{{ bid.product.name ?? 'a deleted product'}}</strong>.
            {{ difference.d }} days, {{ difference.h }} hours, {{ difference.i }} minutes, {{ difference.s }} secondes ago.
        </div>
    {% endfor %}
</div>

{% endblock %}
", "CACommerceBundle:Default:index.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/src/CA/CommerceBundle/Resources/views/Default/index.html.twig");
    }
}
