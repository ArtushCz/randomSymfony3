<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_82019071eb957395525cac0969e26183ece724c979d0c988d70115b31d259d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b64ef9ce2f6be46893796e8b146f5db0cca8db506c5b98b84048a9285d34f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b64ef9ce2f6be46893796e8b146f5db0cca8db506c5b98b84048a9285d34f60->enter($__internal_3b64ef9ce2f6be46893796e8b146f5db0cca8db506c5b98b84048a9285d34f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3800c0d5cd26494339a46e851be3683ea33b573f78905758509d16445adb908f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3800c0d5cd26494339a46e851be3683ea33b573f78905758509d16445adb908f->enter($__internal_3800c0d5cd26494339a46e851be3683ea33b573f78905758509d16445adb908f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b64ef9ce2f6be46893796e8b146f5db0cca8db506c5b98b84048a9285d34f60->leave($__internal_3b64ef9ce2f6be46893796e8b146f5db0cca8db506c5b98b84048a9285d34f60_prof);

        
        $__internal_3800c0d5cd26494339a46e851be3683ea33b573f78905758509d16445adb908f->leave($__internal_3800c0d5cd26494339a46e851be3683ea33b573f78905758509d16445adb908f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28efe9245776663e9ad3c0fabdae2fa03b33867b4d633ee983053ce0ea69d4e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28efe9245776663e9ad3c0fabdae2fa03b33867b4d633ee983053ce0ea69d4e3->enter($__internal_28efe9245776663e9ad3c0fabdae2fa03b33867b4d633ee983053ce0ea69d4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b1784b7b90022617ed2c45732bbf702aff42ad2913c6aadf53dd6b5462bfb0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1784b7b90022617ed2c45732bbf702aff42ad2913c6aadf53dd6b5462bfb0c4->enter($__internal_b1784b7b90022617ed2c45732bbf702aff42ad2913c6aadf53dd6b5462bfb0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b1784b7b90022617ed2c45732bbf702aff42ad2913c6aadf53dd6b5462bfb0c4->leave($__internal_b1784b7b90022617ed2c45732bbf702aff42ad2913c6aadf53dd6b5462bfb0c4_prof);

        
        $__internal_28efe9245776663e9ad3c0fabdae2fa03b33867b4d633ee983053ce0ea69d4e3->leave($__internal_28efe9245776663e9ad3c0fabdae2fa03b33867b4d633ee983053ce0ea69d4e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xampp\\htdocs\\eshop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
