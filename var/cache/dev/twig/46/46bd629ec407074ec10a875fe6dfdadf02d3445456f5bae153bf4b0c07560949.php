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
        $__internal_e582e400e1ed4a337ab82df14d000cfc72601b52809f940173a9860fc8366622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e582e400e1ed4a337ab82df14d000cfc72601b52809f940173a9860fc8366622->enter($__internal_e582e400e1ed4a337ab82df14d000cfc72601b52809f940173a9860fc8366622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_501618c69473c4b4cfa2c5b7afb15993a223cc9ebcc48defc70652fbe2d87491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501618c69473c4b4cfa2c5b7afb15993a223cc9ebcc48defc70652fbe2d87491->enter($__internal_501618c69473c4b4cfa2c5b7afb15993a223cc9ebcc48defc70652fbe2d87491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mystyle.css"), "html", null, true);
        echo "\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <div class=\"container\">
          ";
        // line 16
        $this->loadTemplate("layout/navbar.html.twig", "base.html.twig", 16)->display($context);
        // line 17
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "          ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "        </div>
    </body>
</html>
";
        
        $__internal_e582e400e1ed4a337ab82df14d000cfc72601b52809f940173a9860fc8366622->leave($__internal_e582e400e1ed4a337ab82df14d000cfc72601b52809f940173a9860fc8366622_prof);

        
        $__internal_501618c69473c4b4cfa2c5b7afb15993a223cc9ebcc48defc70652fbe2d87491->leave($__internal_501618c69473c4b4cfa2c5b7afb15993a223cc9ebcc48defc70652fbe2d87491_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_66744fd6b2786ab698d02650bb2c002a01e402a93ca2fc020333d1a1a8e83fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66744fd6b2786ab698d02650bb2c002a01e402a93ca2fc020333d1a1a8e83fe3->enter($__internal_66744fd6b2786ab698d02650bb2c002a01e402a93ca2fc020333d1a1a8e83fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6abc9429ae4f3657f7b319591b555886cc9d27014dc35caeaed9da129903f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6abc9429ae4f3657f7b319591b555886cc9d27014dc35caeaed9da129903f86->enter($__internal_c6abc9429ae4f3657f7b319591b555886cc9d27014dc35caeaed9da129903f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c6abc9429ae4f3657f7b319591b555886cc9d27014dc35caeaed9da129903f86->leave($__internal_c6abc9429ae4f3657f7b319591b555886cc9d27014dc35caeaed9da129903f86_prof);

        
        $__internal_66744fd6b2786ab698d02650bb2c002a01e402a93ca2fc020333d1a1a8e83fe3->leave($__internal_66744fd6b2786ab698d02650bb2c002a01e402a93ca2fc020333d1a1a8e83fe3_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c95ea50ffb628eef10c64e4532890e09f969981403b8ef742e2087419144b887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95ea50ffb628eef10c64e4532890e09f969981403b8ef742e2087419144b887->enter($__internal_c95ea50ffb628eef10c64e4532890e09f969981403b8ef742e2087419144b887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_31520e30e965d881f7e737e7a3c018f2bc1a121a467d5d81af536e3bfbc49158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31520e30e965d881f7e737e7a3c018f2bc1a121a467d5d81af536e3bfbc49158->enter($__internal_31520e30e965d881f7e737e7a3c018f2bc1a121a467d5d81af536e3bfbc49158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_31520e30e965d881f7e737e7a3c018f2bc1a121a467d5d81af536e3bfbc49158->leave($__internal_31520e30e965d881f7e737e7a3c018f2bc1a121a467d5d81af536e3bfbc49158_prof);

        
        $__internal_c95ea50ffb628eef10c64e4532890e09f969981403b8ef742e2087419144b887->leave($__internal_c95ea50ffb628eef10c64e4532890e09f969981403b8ef742e2087419144b887_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7d871abd08c8c8a596b7ce5531ca4654567d6fca8c56ba5ac4b3d1a31bfcdde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d871abd08c8c8a596b7ce5531ca4654567d6fca8c56ba5ac4b3d1a31bfcdde->enter($__internal_e7d871abd08c8c8a596b7ce5531ca4654567d6fca8c56ba5ac4b3d1a31bfcdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63df46ef54d450d8de96ceaaab370ac48d2f9a43031105ae238910811329610c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63df46ef54d450d8de96ceaaab370ac48d2f9a43031105ae238910811329610c->enter($__internal_63df46ef54d450d8de96ceaaab370ac48d2f9a43031105ae238910811329610c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63df46ef54d450d8de96ceaaab370ac48d2f9a43031105ae238910811329610c->leave($__internal_63df46ef54d450d8de96ceaaab370ac48d2f9a43031105ae238910811329610c_prof);

        
        $__internal_e7d871abd08c8c8a596b7ce5531ca4654567d6fca8c56ba5ac4b3d1a31bfcdde->leave($__internal_e7d871abd08c8c8a596b7ce5531ca4654567d6fca8c56ba5ac4b3d1a31bfcdde_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5846a30951dcf682ea4a4b7dd31be623a5da88ab04593519395e854c390b74eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5846a30951dcf682ea4a4b7dd31be623a5da88ab04593519395e854c390b74eb->enter($__internal_5846a30951dcf682ea4a4b7dd31be623a5da88ab04593519395e854c390b74eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0ab65f00e47594cf8e9a2a13a62344c7bb2f05ab03d45c867c472d30283f1bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab65f00e47594cf8e9a2a13a62344c7bb2f05ab03d45c867c472d30283f1bf8->enter($__internal_0ab65f00e47594cf8e9a2a13a62344c7bb2f05ab03d45c867c472d30283f1bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ab65f00e47594cf8e9a2a13a62344c7bb2f05ab03d45c867c472d30283f1bf8->leave($__internal_0ab65f00e47594cf8e9a2a13a62344c7bb2f05ab03d45c867c472d30283f1bf8_prof);

        
        $__internal_5846a30951dcf682ea4a4b7dd31be623a5da88ab04593519395e854c390b74eb->leave($__internal_5846a30951dcf682ea4a4b7dd31be623a5da88ab04593519395e854c390b74eb_prof);

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
        return array (  133 => 18,  116 => 17,  99 => 10,  81 => 9,  68 => 19,  65 => 18,  62 => 17,  60 => 16,  51 => 11,  49 => 10,  45 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/mystyle.css') }}\">
        <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\">
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
