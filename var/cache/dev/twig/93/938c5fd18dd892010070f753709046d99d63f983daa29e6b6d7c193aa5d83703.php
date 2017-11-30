<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_467aab16890da916271f7e766decc479c4cf589d87365e855c1b576b05377c13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_86d3e3ab0e7aab844e494e94a51ef0447c53db775f3990cdbcb55aecf9301dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d3e3ab0e7aab844e494e94a51ef0447c53db775f3990cdbcb55aecf9301dca->enter($__internal_86d3e3ab0e7aab844e494e94a51ef0447c53db775f3990cdbcb55aecf9301dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7b960cb3e4622f782f4cf0a7460ec78ac8632dc7199189deffe8b6ace93d2af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b960cb3e4622f782f4cf0a7460ec78ac8632dc7199189deffe8b6ace93d2af8->enter($__internal_7b960cb3e4622f782f4cf0a7460ec78ac8632dc7199189deffe8b6ace93d2af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86d3e3ab0e7aab844e494e94a51ef0447c53db775f3990cdbcb55aecf9301dca->leave($__internal_86d3e3ab0e7aab844e494e94a51ef0447c53db775f3990cdbcb55aecf9301dca_prof);

        
        $__internal_7b960cb3e4622f782f4cf0a7460ec78ac8632dc7199189deffe8b6ace93d2af8->leave($__internal_7b960cb3e4622f782f4cf0a7460ec78ac8632dc7199189deffe8b6ace93d2af8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_221f6bda862d03661b9774d85568337038ba3fff8a27f671d978b9f297713679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221f6bda862d03661b9774d85568337038ba3fff8a27f671d978b9f297713679->enter($__internal_221f6bda862d03661b9774d85568337038ba3fff8a27f671d978b9f297713679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30a26a7e42329d68b5994532e93ae4e400a9b2a08a87a418f193278f02200905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a26a7e42329d68b5994532e93ae4e400a9b2a08a87a418f193278f02200905->enter($__internal_30a26a7e42329d68b5994532e93ae4e400a9b2a08a87a418f193278f02200905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_30a26a7e42329d68b5994532e93ae4e400a9b2a08a87a418f193278f02200905->leave($__internal_30a26a7e42329d68b5994532e93ae4e400a9b2a08a87a418f193278f02200905_prof);

        
        $__internal_221f6bda862d03661b9774d85568337038ba3fff8a27f671d978b9f297713679->leave($__internal_221f6bda862d03661b9774d85568337038ba3fff8a27f671d978b9f297713679_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8fdc2a889f2f44916b86a41859f9c4f46f816f21f978e7ffc7e91a9c71c3a33c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fdc2a889f2f44916b86a41859f9c4f46f816f21f978e7ffc7e91a9c71c3a33c->enter($__internal_8fdc2a889f2f44916b86a41859f9c4f46f816f21f978e7ffc7e91a9c71c3a33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e6196de33d4c28e09cfbaff31d2718ee9007560ade0860609aedefedcc529445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6196de33d4c28e09cfbaff31d2718ee9007560ade0860609aedefedcc529445->enter($__internal_e6196de33d4c28e09cfbaff31d2718ee9007560ade0860609aedefedcc529445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e6196de33d4c28e09cfbaff31d2718ee9007560ade0860609aedefedcc529445->leave($__internal_e6196de33d4c28e09cfbaff31d2718ee9007560ade0860609aedefedcc529445_prof);

        
        $__internal_8fdc2a889f2f44916b86a41859f9c4f46f816f21f978e7ffc7e91a9c71c3a33c->leave($__internal_8fdc2a889f2f44916b86a41859f9c4f46f816f21f978e7ffc7e91a9c71c3a33c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c20fcd37790528548129b056c0d492143036e9b842612db9cca46e599ab1949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c20fcd37790528548129b056c0d492143036e9b842612db9cca46e599ab1949->enter($__internal_0c20fcd37790528548129b056c0d492143036e9b842612db9cca46e599ab1949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56e51293fcc4ad235bd9c1d423ece9b665c825b243db1463e2b595de8513ae78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e51293fcc4ad235bd9c1d423ece9b665c825b243db1463e2b595de8513ae78->enter($__internal_56e51293fcc4ad235bd9c1d423ece9b665c825b243db1463e2b595de8513ae78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_56e51293fcc4ad235bd9c1d423ece9b665c825b243db1463e2b595de8513ae78->leave($__internal_56e51293fcc4ad235bd9c1d423ece9b665c825b243db1463e2b595de8513ae78_prof);

        
        $__internal_0c20fcd37790528548129b056c0d492143036e9b842612db9cca46e599ab1949->leave($__internal_0c20fcd37790528548129b056c0d492143036e9b842612db9cca46e599ab1949_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\eshop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
