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
        $__internal_4f6afc861f42bb646f54c5f88b1629f1d15548b1ffef9454a48d833941e487fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6afc861f42bb646f54c5f88b1629f1d15548b1ffef9454a48d833941e487fb->enter($__internal_4f6afc861f42bb646f54c5f88b1629f1d15548b1ffef9454a48d833941e487fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Session:login.html.twig"));

        $__internal_2e5c66918e4ddf27f751822ce946fa7cf680d8e5ca3e6ed37269ee285213b9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5c66918e4ddf27f751822ce946fa7cf680d8e5ca3e6ed37269ee285213b9de->enter($__internal_2e5c66918e4ddf27f751822ce946fa7cf680d8e5ca3e6ed37269ee285213b9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CACommerceBundle:Session:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6afc861f42bb646f54c5f88b1629f1d15548b1ffef9454a48d833941e487fb->leave($__internal_4f6afc861f42bb646f54c5f88b1629f1d15548b1ffef9454a48d833941e487fb_prof);

        
        $__internal_2e5c66918e4ddf27f751822ce946fa7cf680d8e5ca3e6ed37269ee285213b9de->leave($__internal_2e5c66918e4ddf27f751822ce946fa7cf680d8e5ca3e6ed37269ee285213b9de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf0d578a5b7c85afce0594227ad48e43165f27cf51269f4eff33d4979e907aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0d578a5b7c85afce0594227ad48e43165f27cf51269f4eff33d4979e907aff->enter($__internal_cf0d578a5b7c85afce0594227ad48e43165f27cf51269f4eff33d4979e907aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7f731960e1b8d6388a4fc211166d40c0865a721c7882102f6507c1a73798edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f731960e1b8d6388a4fc211166d40c0865a721c7882102f6507c1a73798edf->enter($__internal_c7f731960e1b8d6388a4fc211166d40c0865a721c7882102f6507c1a73798edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CABlogBundle:SessionController:login";
        
        $__internal_c7f731960e1b8d6388a4fc211166d40c0865a721c7882102f6507c1a73798edf->leave($__internal_c7f731960e1b8d6388a4fc211166d40c0865a721c7882102f6507c1a73798edf_prof);

        
        $__internal_cf0d578a5b7c85afce0594227ad48e43165f27cf51269f4eff33d4979e907aff->leave($__internal_cf0d578a5b7c85afce0594227ad48e43165f27cf51269f4eff33d4979e907aff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0309bcc172cf6f9211c475cfe3681eb47e73695c0a2662d4731e50cd503440c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0309bcc172cf6f9211c475cfe3681eb47e73695c0a2662d4731e50cd503440c->enter($__internal_b0309bcc172cf6f9211c475cfe3681eb47e73695c0a2662d4731e50cd503440c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bec466b724336ce1a940c30a5a0f5a68fc08095416e3d488cd1c026ceb88e368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec466b724336ce1a940c30a5a0f5a68fc08095416e3d488cd1c026ceb88e368->enter($__internal_bec466b724336ce1a940c30a5a0f5a68fc08095416e3d488cd1c026ceb88e368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bec466b724336ce1a940c30a5a0f5a68fc08095416e3d488cd1c026ceb88e368->leave($__internal_bec466b724336ce1a940c30a5a0f5a68fc08095416e3d488cd1c026ceb88e368_prof);

        
        $__internal_b0309bcc172cf6f9211c475cfe3681eb47e73695c0a2662d4731e50cd503440c->leave($__internal_b0309bcc172cf6f9211c475cfe3681eb47e73695c0a2662d4731e50cd503440c_prof);

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
