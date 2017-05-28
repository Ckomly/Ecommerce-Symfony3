<?php

/* CACommerceBundle:Session:login.html.twig */
class __TwigTemplate_9dffe50d23ea2b226fb46d372e818447649526549bcfd4141edaea2e0d987968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CACommerceBundle:Session:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_489a9e38038de49d8438b4d27cf3f48b1fd930039bc6fbcd5040bcbeea67882d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489a9e38038de49d8438b4d27cf3f48b1fd930039bc6fbcd5040bcbeea67882d->enter($__internal_489a9e38038de49d8438b4d27cf3f48b1fd930039bc6fbcd5040bcbeea67882d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Session:login.html.twig"));

        $__internal_e81d2d5326f022be2eb61dac199080dc13e004b7ee1da3ded6b0bcbae9de62e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81d2d5326f022be2eb61dac199080dc13e004b7ee1da3ded6b0bcbae9de62e0->enter($__internal_e81d2d5326f022be2eb61dac199080dc13e004b7ee1da3ded6b0bcbae9de62e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Session:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489a9e38038de49d8438b4d27cf3f48b1fd930039bc6fbcd5040bcbeea67882d->leave($__internal_489a9e38038de49d8438b4d27cf3f48b1fd930039bc6fbcd5040bcbeea67882d_prof);

        
        $__internal_e81d2d5326f022be2eb61dac199080dc13e004b7ee1da3ded6b0bcbae9de62e0->leave($__internal_e81d2d5326f022be2eb61dac199080dc13e004b7ee1da3ded6b0bcbae9de62e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ced19b5399ffafa552ec32b6a044fe34317985a80a80a8edc5a0d81d01d36e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced19b5399ffafa552ec32b6a044fe34317985a80a80a8edc5a0d81d01d36e11->enter($__internal_ced19b5399ffafa552ec32b6a044fe34317985a80a80a8edc5a0d81d01d36e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_efe37fb51c866350b49189b63f0959e848d040ae1bdd89547cba3e184703f505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe37fb51c866350b49189b63f0959e848d040ae1bdd89547cba3e184703f505->enter($__internal_efe37fb51c866350b49189b63f0959e848d040ae1bdd89547cba3e184703f505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CABlogBundle:SessionController:login";
        
        $__internal_efe37fb51c866350b49189b63f0959e848d040ae1bdd89547cba3e184703f505->leave($__internal_efe37fb51c866350b49189b63f0959e848d040ae1bdd89547cba3e184703f505_prof);

        
        $__internal_ced19b5399ffafa552ec32b6a044fe34317985a80a80a8edc5a0d81d01d36e11->leave($__internal_ced19b5399ffafa552ec32b6a044fe34317985a80a80a8edc5a0d81d01d36e11_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_445a1594de7e51e37675f9a858fc71ed182c5aaafb2cd5c3dcc904639262a1e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445a1594de7e51e37675f9a858fc71ed182c5aaafb2cd5c3dcc904639262a1e5->enter($__internal_445a1594de7e51e37675f9a858fc71ed182c5aaafb2cd5c3dcc904639262a1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8b471f87841ec301f12132c450c0177f5b6a1a529db9f8f1b33ed4596db4975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b471f87841ec301f12132c450c0177f5b6a1a529db9f8f1b33ed4596db4975->enter($__internal_e8b471f87841ec301f12132c450c0177f5b6a1a529db9f8f1b33ed4596db4975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "      ";
            if (($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "action", array()) == "create")) {
                // line 8
                echo "          <div class=\"alert alert-danger\">You have to be logged in to <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "action", array()), "html", null, true);
                echo "</strong> a <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "entity", array()), "html", null, true);
                echo "</strong>.</div>
      ";
            } elseif (($this->getAttribute(            // line 9
($context["error"] ?? $this->getContext($context, "error")), "action", array()) == "edit")) {
                // line 10
                echo "          <div class=\"alert alert-danger\">You have to be logged in to <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "action", array()), "html", null, true);
                echo "</strong> a <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "entity", array()), "html", null, true);
                echo "</strong>.</div>
      ";
            } elseif (($this->getAttribute(            // line 11
($context["error"] ?? $this->getContext($context, "error")), "action", array()) == "delete")) {
                // line 12
                echo "          <div class=\"alert alert-danger\">You have to be logged in to <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "action", array()), "html", null, true);
                echo "</strong> a <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "entity", array()), "html", null, true);
                echo "</strong>.</div>
      ";
            }
            // line 14
            echo "  ";
        }
        // line 15
        echo "
  <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
    <label for=\"remember_me\">Keep me logged in</label>
    <br />
    <input type=\"submit\" value=\"Connexion\" />

  </form>

";
        
        $__internal_e8b471f87841ec301f12132c450c0177f5b6a1a529db9f8f1b33ed4596db4975->leave($__internal_e8b471f87841ec301f12132c450c0177f5b6a1a529db9f8f1b33ed4596db4975_prof);

        
        $__internal_445a1594de7e51e37675f9a858fc71ed182c5aaafb2cd5c3dcc904639262a1e5->leave($__internal_445a1594de7e51e37675f9a858fc71ed182c5aaafb2cd5c3dcc904639262a1e5_prof);

    }

    public function getTemplateName()
    {
        return "CACommerceBundle:Session:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 18,  106 => 16,  103 => 15,  100 => 14,  92 => 12,  90 => 11,  83 => 10,  81 => 9,  74 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}CABlogBundle:SessionController:login{% endblock %}

{% block body %}
  {% if error %}
      {% if error.action == 'create'%}
          <div class=\"alert alert-danger\">You have to be logged in to <strong>{{ error.action }}</strong> a <strong>{{ error.entity }}</strong>.</div>
      {% elseif error.action == 'edit' %}
          <div class=\"alert alert-danger\">You have to be logged in to <strong>{{ error.action }}</strong> a <strong>{{ error.entity }}</strong>.</div>
      {% elseif error.action == 'delete' %}
          <div class=\"alert alert-danger\">You have to be logged in to <strong>{{ error.action }}</strong> a <strong>{{ error.entity }}</strong>.</div>
      {% endif %}
  {% endif %}

  <form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
    <label for=\"remember_me\">Keep me logged in</label>
    <br />
    <input type=\"submit\" value=\"Connexion\" />

  </form>

{% endblock %}
", "CACommerceBundle:Session:login.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/src/CA/CommerceBundle/Resources/views/Session/login.html.twig");
    }
}
