<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_5d2ae1d0a64b41e4515169acd5bba145a3cee3a340bee724fa3db7572906088a extends Twig_Template
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
        $__internal_297f6473d8d1e76d9a35af50cbfa4a7834c0a54f65571071126294bffef0728c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297f6473d8d1e76d9a35af50cbfa4a7834c0a54f65571071126294bffef0728c->enter($__internal_297f6473d8d1e76d9a35af50cbfa4a7834c0a54f65571071126294bffef0728c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_062ad987bab2d5c498880581f50f6d9ff7f2cabbe49c7dbbe3eac508ece3581f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062ad987bab2d5c498880581f50f6d9ff7f2cabbe49c7dbbe3eac508ece3581f->enter($__internal_062ad987bab2d5c498880581f50f6d9ff7f2cabbe49c7dbbe3eac508ece3581f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_297f6473d8d1e76d9a35af50cbfa4a7834c0a54f65571071126294bffef0728c->leave($__internal_297f6473d8d1e76d9a35af50cbfa4a7834c0a54f65571071126294bffef0728c_prof);

        
        $__internal_062ad987bab2d5c498880581f50f6d9ff7f2cabbe49c7dbbe3eac508ece3581f->leave($__internal_062ad987bab2d5c498880581f50f6d9ff7f2cabbe49c7dbbe3eac508ece3581f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/lulu/Rendu/Symfony/Symfony_Commerce/Ecom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
