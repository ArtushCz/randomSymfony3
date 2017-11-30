<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_f65a1c506420d54e5c21590115b2fd1ab4d8928d630d522379ae1f8372b1444c extends Twig_Template
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
        $__internal_e0acb5cc939bb4cb53d56580092366bdde6c2df4f5b9437a256387362cb048cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0acb5cc939bb4cb53d56580092366bdde6c2df4f5b9437a256387362cb048cd->enter($__internal_e0acb5cc939bb4cb53d56580092366bdde6c2df4f5b9437a256387362cb048cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_6880c76887dbec28305c7d1ccb151071c7323ae13fcb261998ec4765b4c2d974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6880c76887dbec28305c7d1ccb151071c7323ae13fcb261998ec4765b4c2d974->enter($__internal_6880c76887dbec28305c7d1ccb151071c7323ae13fcb261998ec4765b4c2d974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_e0acb5cc939bb4cb53d56580092366bdde6c2df4f5b9437a256387362cb048cd->leave($__internal_e0acb5cc939bb4cb53d56580092366bdde6c2df4f5b9437a256387362cb048cd_prof);

        
        $__internal_6880c76887dbec28305c7d1ccb151071c7323ae13fcb261998ec4765b4c2d974->leave($__internal_6880c76887dbec28305c7d1ccb151071c7323ae13fcb261998ec4765b4c2d974_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "D:\\xampp\\htdocs\\eshop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
