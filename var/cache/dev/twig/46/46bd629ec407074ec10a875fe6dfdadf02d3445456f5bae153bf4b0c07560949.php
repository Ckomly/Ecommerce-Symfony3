<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9fc7b5f5e31d3b8e74481a5e754c4409c63c4f1289c0221f87cf0e3d7d5cdf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9fc7b5f5e31d3b8e74481a5e754c4409c63c4f1289c0221f87cf0e3d7d5cdf2->enter($__internal_d9fc7b5f5e31d3b8e74481a5e754c4409c63c4f1289c0221f87cf0e3d7d5cdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_13f33b4ee529e2780e8e83c7b525b7c0e7c2ba725760d5a5f90b6579bcc4b29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f33b4ee529e2780e8e83c7b525b7c0e7c2ba725760d5a5f90b6579bcc4b29f->enter($__internal_13f33b4ee529e2780e8e83c7b525b7c0e7c2ba725760d5a5f90b6579bcc4b29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <div class=\"container\">
          ";
        // line 13
        $this->loadTemplate("layout/navbar.html.twig", "base.html.twig", 13)->display($context);
        // line 14
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "          ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "        </div>
    </body>
</html>
";
        
        $__internal_d9fc7b5f5e31d3b8e74481a5e754c4409c63c4f1289c0221f87cf0e3d7d5cdf2->leave($__internal_d9fc7b5f5e31d3b8e74481a5e754c4409c63c4f1289c0221f87cf0e3d7d5cdf2_prof);

        
        $__internal_13f33b4ee529e2780e8e83c7b525b7c0e7c2ba725760d5a5f90b6579bcc4b29f->leave($__internal_13f33b4ee529e2780e8e83c7b525b7c0e7c2ba725760d5a5f90b6579bcc4b29f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3884def91c9fa98ee5cdc88974f5c485360e535d0ab24aa2ffd8a6bea13e5378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3884def91c9fa98ee5cdc88974f5c485360e535d0ab24aa2ffd8a6bea13e5378->enter($__internal_3884def91c9fa98ee5cdc88974f5c485360e535d0ab24aa2ffd8a6bea13e5378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90733ca645535da5dade3465296a02f5da889a95566ec10fc4fa27f6b9e7fda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90733ca645535da5dade3465296a02f5da889a95566ec10fc4fa27f6b9e7fda5->enter($__internal_90733ca645535da5dade3465296a02f5da889a95566ec10fc4fa27f6b9e7fda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_90733ca645535da5dade3465296a02f5da889a95566ec10fc4fa27f6b9e7fda5->leave($__internal_90733ca645535da5dade3465296a02f5da889a95566ec10fc4fa27f6b9e7fda5_prof);

        
        $__internal_3884def91c9fa98ee5cdc88974f5c485360e535d0ab24aa2ffd8a6bea13e5378->leave($__internal_3884def91c9fa98ee5cdc88974f5c485360e535d0ab24aa2ffd8a6bea13e5378_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4fbe21986d9414aff3eb9875361d10f9a5dffb5164f32b6f306d71fb705386b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbe21986d9414aff3eb9875361d10f9a5dffb5164f32b6f306d71fb705386b5->enter($__internal_4fbe21986d9414aff3eb9875361d10f9a5dffb5164f32b6f306d71fb705386b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a0d571d565c1e77a2795516eccc818fc76c490da09cf77e68381afc952284b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d571d565c1e77a2795516eccc818fc76c490da09cf77e68381afc952284b6e->enter($__internal_a0d571d565c1e77a2795516eccc818fc76c490da09cf77e68381afc952284b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a0d571d565c1e77a2795516eccc818fc76c490da09cf77e68381afc952284b6e->leave($__internal_a0d571d565c1e77a2795516eccc818fc76c490da09cf77e68381afc952284b6e_prof);

        
        $__internal_4fbe21986d9414aff3eb9875361d10f9a5dffb5164f32b6f306d71fb705386b5->leave($__internal_4fbe21986d9414aff3eb9875361d10f9a5dffb5164f32b6f306d71fb705386b5_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_02eb05ccd56b1663a6884eaabfd6060607c37925b196b41b1cb530f92875d89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02eb05ccd56b1663a6884eaabfd6060607c37925b196b41b1cb530f92875d89e->enter($__internal_02eb05ccd56b1663a6884eaabfd6060607c37925b196b41b1cb530f92875d89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc4f6b500545cfd6a15fac3d7bab744c6667b1d0c353578385ad5e6eb650bf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4f6b500545cfd6a15fac3d7bab744c6667b1d0c353578385ad5e6eb650bf69->enter($__internal_bc4f6b500545cfd6a15fac3d7bab744c6667b1d0c353578385ad5e6eb650bf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bc4f6b500545cfd6a15fac3d7bab744c6667b1d0c353578385ad5e6eb650bf69->leave($__internal_bc4f6b500545cfd6a15fac3d7bab744c6667b1d0c353578385ad5e6eb650bf69_prof);

        
        $__internal_02eb05ccd56b1663a6884eaabfd6060607c37925b196b41b1cb530f92875d89e->leave($__internal_02eb05ccd56b1663a6884eaabfd6060607c37925b196b41b1cb530f92875d89e_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd4ae727546f2163a95578719cb167ca4b85cd7af2e37aec063299cc29da2f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4ae727546f2163a95578719cb167ca4b85cd7af2e37aec063299cc29da2f00->enter($__internal_bd4ae727546f2163a95578719cb167ca4b85cd7af2e37aec063299cc29da2f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d8ca3aabd80e729c7dda637ad3c92e7c63be126e789ba485c85523436b02266e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ca3aabd80e729c7dda637ad3c92e7c63be126e789ba485c85523436b02266e->enter($__internal_d8ca3aabd80e729c7dda637ad3c92e7c63be126e789ba485c85523436b02266e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d8ca3aabd80e729c7dda637ad3c92e7c63be126e789ba485c85523436b02266e->leave($__internal_d8ca3aabd80e729c7dda637ad3c92e7c63be126e789ba485c85523436b02266e_prof);

        
        $__internal_bd4ae727546f2163a95578719cb167ca4b85cd7af2e37aec063299cc29da2f00->leave($__internal_bd4ae727546f2163a95578719cb167ca4b85cd7af2e37aec063299cc29da2f00_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 15,  110 => 14,  93 => 7,  75 => 6,  62 => 16,  59 => 15,  56 => 14,  54 => 13,  45 => 8,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.css') }}\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <div class=\"container\">
          {% include('layout/navbar.html.twig') %}
          {% block body %}{% endblock %}
          {% block javascripts %}{% endblock %}
        </div>
    </body>
</html>
", "base.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/app/Resources/views/base.html.twig");
    }
}
