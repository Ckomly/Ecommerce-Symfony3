<?php

/* layout/navbar.html.twig */
class __TwigTemplate_adb71b2ecf2d36d09f1c24bcdb7d65c2ececcbf161919653a2638dd2b89e76d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b43016919679a1c2cf9232bfe4e2ad620ed48cc61923b489175cdff461f258a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43016919679a1c2cf9232bfe4e2ad620ed48cc61923b489175cdff461f258a1->enter($__internal_b43016919679a1c2cf9232bfe4e2ad620ed48cc61923b489175cdff461f258a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/navbar.html.twig"));

        $__internal_f300992c1db636db4425acf4d4538a161d9ccc5a27301e571307098db9f39ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f300992c1db636db4425acf4d4538a161d9ccc5a27301e571307098db9f39ca1->enter($__internal_f300992c1db636db4425acf4d4538a161d9ccc5a27301e571307098db9f39ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ca_commerce_homepage");
        echo "\">ECOM</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Users</a></li>
      <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Products</a></li>
      <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Categories</a></li>
    </ul>

    <ul class=\"nav navbar-nav navbar-right\">
      ";
        // line 13
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 14
            echo "          <p class=\"navbar-brand\"> Connected as ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </p>
          <li><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">My profil</a></li>
          <li><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_list_products", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">My products</a></li>
          <li><a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a></li>
      ";
        } else {
            // line 19
            echo "          <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
            echo "\">Register</a></li>
          <li><a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"> Login</a></li>
      ";
        }
        // line 22
        echo "    </ul>
  </div>
</nav>
";
        
        $__internal_b43016919679a1c2cf9232bfe4e2ad620ed48cc61923b489175cdff461f258a1->leave($__internal_b43016919679a1c2cf9232bfe4e2ad620ed48cc61923b489175cdff461f258a1_prof);

        
        $__internal_f300992c1db636db4425acf4d4538a161d9ccc5a27301e571307098db9f39ca1->leave($__internal_f300992c1db636db4425acf4d4538a161d9ccc5a27301e571307098db9f39ca1_prof);

    }

    public function getTemplateName()
    {
        return "layout/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  76 => 20,  71 => 19,  66 => 17,  62 => 16,  58 => 15,  53 => 14,  51 => 13,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"{{ path('ca_commerce_homepage') }}\">ECOM</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li><a href=\"{{ path('user_index') }}\">Users</a></li>
      <li><a href=\"{{ path('product_index') }}\">Products</a></li>
      <li><a href=\"{{ path('category_index') }}\">Categories</a></li>
    </ul>

    <ul class=\"nav navbar-nav navbar-right\">
      {% if app.user %}
          <p class=\"navbar-brand\"> Connected as {{ app.user.username }} </p>
          <li><a href=\"{{ path('user_show', { 'id': app.user.id }) }}\">My profil</a></li>
          <li><a href=\"{{ path('user_list_products', { 'id': app.user.id }) }}\">My products</a></li>
          <li><a href=\"{{ path('logout') }}\">Logout</a></li>
      {% else %}
          <li><a href=\"{{ path('user_new') }}\">Register</a></li>
          <li><a href=\"{{ path('login') }}\"> Login</a></li>
      {% endif %}
    </ul>
  </div>
</nav>
", "layout/navbar.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/layout/navbar.html.twig");
    }
}
