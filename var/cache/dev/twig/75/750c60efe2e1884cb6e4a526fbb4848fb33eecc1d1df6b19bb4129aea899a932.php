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
        $__internal_4fe999db5a37d87108baf6b3ee2cc3c168fa0411302e7631d03ddd712bebd3c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe999db5a37d87108baf6b3ee2cc3c168fa0411302e7631d03ddd712bebd3c5->enter($__internal_4fe999db5a37d87108baf6b3ee2cc3c168fa0411302e7631d03ddd712bebd3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Session:login.html.twig"));

        $__internal_960ad5a53a7c5cf3ad0c9a2d98771d33742142c3420b75d8ab3e66a294aa701b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960ad5a53a7c5cf3ad0c9a2d98771d33742142c3420b75d8ab3e66a294aa701b->enter($__internal_960ad5a53a7c5cf3ad0c9a2d98771d33742142c3420b75d8ab3e66a294aa701b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Session:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe999db5a37d87108baf6b3ee2cc3c168fa0411302e7631d03ddd712bebd3c5->leave($__internal_4fe999db5a37d87108baf6b3ee2cc3c168fa0411302e7631d03ddd712bebd3c5_prof);

        
        $__internal_960ad5a53a7c5cf3ad0c9a2d98771d33742142c3420b75d8ab3e66a294aa701b->leave($__internal_960ad5a53a7c5cf3ad0c9a2d98771d33742142c3420b75d8ab3e66a294aa701b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_928d20926636ac6a457b71a392d87a496e4c5208d97a8ff73ecc7ebc2b31054f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928d20926636ac6a457b71a392d87a496e4c5208d97a8ff73ecc7ebc2b31054f->enter($__internal_928d20926636ac6a457b71a392d87a496e4c5208d97a8ff73ecc7ebc2b31054f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0f78c2ec295b526da080c9bdbec00414c93885ab6a490e3d3f400592a86e7fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f78c2ec295b526da080c9bdbec00414c93885ab6a490e3d3f400592a86e7fd->enter($__internal_d0f78c2ec295b526da080c9bdbec00414c93885ab6a490e3d3f400592a86e7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CABlogBundle:SessionController:login";
        
        $__internal_d0f78c2ec295b526da080c9bdbec00414c93885ab6a490e3d3f400592a86e7fd->leave($__internal_d0f78c2ec295b526da080c9bdbec00414c93885ab6a490e3d3f400592a86e7fd_prof);

        
        $__internal_928d20926636ac6a457b71a392d87a496e4c5208d97a8ff73ecc7ebc2b31054f->leave($__internal_928d20926636ac6a457b71a392d87a496e4c5208d97a8ff73ecc7ebc2b31054f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f49cb7bc44b85ea3511f1ac15f4ad5710e3b4d0e37d8cfc8f45001b362913dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49cb7bc44b85ea3511f1ac15f4ad5710e3b4d0e37d8cfc8f45001b362913dfb->enter($__internal_f49cb7bc44b85ea3511f1ac15f4ad5710e3b4d0e37d8cfc8f45001b362913dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00483bb5bac98cb8babfd133442fcddf798e7d304233ffc7afc558b22c4edceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00483bb5bac98cb8babfd133442fcddf798e7d304233ffc7afc558b22c4edceb->enter($__internal_00483bb5bac98cb8babfd133442fcddf798e7d304233ffc7afc558b22c4edceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  ";
        // line 7
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 8
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 10
        echo "
  <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
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
        
        $__internal_00483bb5bac98cb8babfd133442fcddf798e7d304233ffc7afc558b22c4edceb->leave($__internal_00483bb5bac98cb8babfd133442fcddf798e7d304233ffc7afc558b22c4edceb_prof);

        
        $__internal_f49cb7bc44b85ea3511f1ac15f4ad5710e3b4d0e37d8cfc8f45001b362913dfb->leave($__internal_f49cb7bc44b85ea3511f1ac15f4ad5710e3b4d0e37d8cfc8f45001b362913dfb_prof);

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
        return array (  87 => 13,  82 => 11,  79 => 10,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    <div class=\"alert alert-danger\">{{ error.message }}</div>
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
