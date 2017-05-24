<?php

/* CACommerceBundle:Session:login.html.twig */
class __TwigTemplate_d1d3f1ae973a27ffda6ab83de94c4d436c86428b06764ded1fba12cfbe261d63 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "CABlogBundle:SessionController:login";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "message", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked />
    <label for=\"remember_me\">Keep me logged in</label>
    <br />
    <input type=\"submit\" value=\"Connexion\" />

  </form>

";
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
        return array (  57 => 13,  52 => 11,  49 => 10,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CACommerceBundle:Session:login.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/src/CA/CommerceBundle/Resources/views/Session/login.html.twig");
    }
}
