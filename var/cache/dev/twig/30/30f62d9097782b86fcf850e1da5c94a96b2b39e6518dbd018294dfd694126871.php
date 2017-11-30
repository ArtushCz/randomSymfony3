<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_00c92ba8d57a8f6e418ec87277e55634e4a6a5c1f75fad8fcf01537d5bf3d943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5279a539c50e7ed011e834b8aeab7da14a5abd98d7a2a7132d9f893b39c2aa59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5279a539c50e7ed011e834b8aeab7da14a5abd98d7a2a7132d9f893b39c2aa59->enter($__internal_5279a539c50e7ed011e834b8aeab7da14a5abd98d7a2a7132d9f893b39c2aa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ef94a9f47e419427ef1ddf767aaae914fb2d18e001e99daa3cdc1cdd02226f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef94a9f47e419427ef1ddf767aaae914fb2d18e001e99daa3cdc1cdd02226f6e->enter($__internal_ef94a9f47e419427ef1ddf767aaae914fb2d18e001e99daa3cdc1cdd02226f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5279a539c50e7ed011e834b8aeab7da14a5abd98d7a2a7132d9f893b39c2aa59->leave($__internal_5279a539c50e7ed011e834b8aeab7da14a5abd98d7a2a7132d9f893b39c2aa59_prof);

        
        $__internal_ef94a9f47e419427ef1ddf767aaae914fb2d18e001e99daa3cdc1cdd02226f6e->leave($__internal_ef94a9f47e419427ef1ddf767aaae914fb2d18e001e99daa3cdc1cdd02226f6e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea53e74d8ee16779909e1bbcf819e8f8db9097acdd8eee3befd68197ff899362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea53e74d8ee16779909e1bbcf819e8f8db9097acdd8eee3befd68197ff899362->enter($__internal_ea53e74d8ee16779909e1bbcf819e8f8db9097acdd8eee3befd68197ff899362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d40f81c0c4e1be18dc0c27351f89ca019c17c8c5a2e98720c09c7f04d434dbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40f81c0c4e1be18dc0c27351f89ca019c17c8c5a2e98720c09c7f04d434dbd4->enter($__internal_d40f81c0c4e1be18dc0c27351f89ca019c17c8c5a2e98720c09c7f04d434dbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d40f81c0c4e1be18dc0c27351f89ca019c17c8c5a2e98720c09c7f04d434dbd4->leave($__internal_d40f81c0c4e1be18dc0c27351f89ca019c17c8c5a2e98720c09c7f04d434dbd4_prof);

        
        $__internal_ea53e74d8ee16779909e1bbcf819e8f8db9097acdd8eee3befd68197ff899362->leave($__internal_ea53e74d8ee16779909e1bbcf819e8f8db9097acdd8eee3befd68197ff899362_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09ea158c32f81fe42d219a7f87977ee283210f7426b46fbd663b5cda9c71a29b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ea158c32f81fe42d219a7f87977ee283210f7426b46fbd663b5cda9c71a29b->enter($__internal_09ea158c32f81fe42d219a7f87977ee283210f7426b46fbd663b5cda9c71a29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eb8c7204feb7b4da022e1da96e17f674b7f530d5e96c2b8c04540fb7f409c869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8c7204feb7b4da022e1da96e17f674b7f530d5e96c2b8c04540fb7f409c869->enter($__internal_eb8c7204feb7b4da022e1da96e17f674b7f530d5e96c2b8c04540fb7f409c869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eb8c7204feb7b4da022e1da96e17f674b7f530d5e96c2b8c04540fb7f409c869->leave($__internal_eb8c7204feb7b4da022e1da96e17f674b7f530d5e96c2b8c04540fb7f409c869_prof);

        
        $__internal_09ea158c32f81fe42d219a7f87977ee283210f7426b46fbd663b5cda9c71a29b->leave($__internal_09ea158c32f81fe42d219a7f87977ee283210f7426b46fbd663b5cda9c71a29b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50504693c0822433246b25bb56e49f427e7e28a4d064d1408288375dac5211b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50504693c0822433246b25bb56e49f427e7e28a4d064d1408288375dac5211b7->enter($__internal_50504693c0822433246b25bb56e49f427e7e28a4d064d1408288375dac5211b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_367da2bc60741d6291f36156b279415e744bedaa04c33fb22a3bc8daf791928c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367da2bc60741d6291f36156b279415e744bedaa04c33fb22a3bc8daf791928c->enter($__internal_367da2bc60741d6291f36156b279415e744bedaa04c33fb22a3bc8daf791928c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_367da2bc60741d6291f36156b279415e744bedaa04c33fb22a3bc8daf791928c->leave($__internal_367da2bc60741d6291f36156b279415e744bedaa04c33fb22a3bc8daf791928c_prof);

        
        $__internal_50504693c0822433246b25bb56e49f427e7e28a4d064d1408288375dac5211b7->leave($__internal_50504693c0822433246b25bb56e49f427e7e28a4d064d1408288375dac5211b7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\eshop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
