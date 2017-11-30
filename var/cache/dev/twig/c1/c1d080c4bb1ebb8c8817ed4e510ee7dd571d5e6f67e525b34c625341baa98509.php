<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_76499a020ea2b89dcd937768e8bb37e182d7b90564d66428ce24c85b1173087d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_509ba4fe5b455861578944839ab6361fe88c5c0ab073fcff0cd005cb9000b548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509ba4fe5b455861578944839ab6361fe88c5c0ab073fcff0cd005cb9000b548->enter($__internal_509ba4fe5b455861578944839ab6361fe88c5c0ab073fcff0cd005cb9000b548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_82b3b53e743bcdccfb8b298a472d54f1c91bcd90834153325048b57950edd9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b3b53e743bcdccfb8b298a472d54f1c91bcd90834153325048b57950edd9b0->enter($__internal_82b3b53e743bcdccfb8b298a472d54f1c91bcd90834153325048b57950edd9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509ba4fe5b455861578944839ab6361fe88c5c0ab073fcff0cd005cb9000b548->leave($__internal_509ba4fe5b455861578944839ab6361fe88c5c0ab073fcff0cd005cb9000b548_prof);

        
        $__internal_82b3b53e743bcdccfb8b298a472d54f1c91bcd90834153325048b57950edd9b0->leave($__internal_82b3b53e743bcdccfb8b298a472d54f1c91bcd90834153325048b57950edd9b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14b8fb8ba840428b82a60905cf1ec8d16d951105348be67db973858d4ad305a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b8fb8ba840428b82a60905cf1ec8d16d951105348be67db973858d4ad305a7->enter($__internal_14b8fb8ba840428b82a60905cf1ec8d16d951105348be67db973858d4ad305a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2489d074cef332b1f3d7ccdcc523f53eafee4d5caede5a01f90096c15dc999f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2489d074cef332b1f3d7ccdcc523f53eafee4d5caede5a01f90096c15dc999f7->enter($__internal_2489d074cef332b1f3d7ccdcc523f53eafee4d5caede5a01f90096c15dc999f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2489d074cef332b1f3d7ccdcc523f53eafee4d5caede5a01f90096c15dc999f7->leave($__internal_2489d074cef332b1f3d7ccdcc523f53eafee4d5caede5a01f90096c15dc999f7_prof);

        
        $__internal_14b8fb8ba840428b82a60905cf1ec8d16d951105348be67db973858d4ad305a7->leave($__internal_14b8fb8ba840428b82a60905cf1ec8d16d951105348be67db973858d4ad305a7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_82adcae64ed35f082ed9a0565c67dc65d2660babca764460456b8ce7b5a82f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82adcae64ed35f082ed9a0565c67dc65d2660babca764460456b8ce7b5a82f8a->enter($__internal_82adcae64ed35f082ed9a0565c67dc65d2660babca764460456b8ce7b5a82f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_daa0f9bb2162d7fa6e54edfd02924ef0534cff286dd082623aae3f200b2eb502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa0f9bb2162d7fa6e54edfd02924ef0534cff286dd082623aae3f200b2eb502->enter($__internal_daa0f9bb2162d7fa6e54edfd02924ef0534cff286dd082623aae3f200b2eb502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_daa0f9bb2162d7fa6e54edfd02924ef0534cff286dd082623aae3f200b2eb502->leave($__internal_daa0f9bb2162d7fa6e54edfd02924ef0534cff286dd082623aae3f200b2eb502_prof);

        
        $__internal_82adcae64ed35f082ed9a0565c67dc65d2660babca764460456b8ce7b5a82f8a->leave($__internal_82adcae64ed35f082ed9a0565c67dc65d2660babca764460456b8ce7b5a82f8a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_54957be0d7b0f6267806256437239482614c5e631f6a5f1d82ce941bc116a61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54957be0d7b0f6267806256437239482614c5e631f6a5f1d82ce941bc116a61d->enter($__internal_54957be0d7b0f6267806256437239482614c5e631f6a5f1d82ce941bc116a61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ace391b739163c527df9172b31929379c876d792f979ac57e71d745f41d56ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace391b739163c527df9172b31929379c876d792f979ac57e71d745f41d56ae4->enter($__internal_ace391b739163c527df9172b31929379c876d792f979ac57e71d745f41d56ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ace391b739163c527df9172b31929379c876d792f979ac57e71d745f41d56ae4->leave($__internal_ace391b739163c527df9172b31929379c876d792f979ac57e71d745f41d56ae4_prof);

        
        $__internal_54957be0d7b0f6267806256437239482614c5e631f6a5f1d82ce941bc116a61d->leave($__internal_54957be0d7b0f6267806256437239482614c5e631f6a5f1d82ce941bc116a61d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\xampp\\htdocs\\eshop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
