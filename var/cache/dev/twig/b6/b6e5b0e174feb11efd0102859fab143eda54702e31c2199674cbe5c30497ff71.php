<?php

/* EventBundle:Event:new.html.twig */
class __TwigTemplate_c2c115a2dd6f363dcb6d6b7f17523d5db5ee6560f4045af93fc9948e3da00ed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EventBundle::layout.html.twig", "EventBundle:Event:new.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EventBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ec35cc9b1f0fd64781a7eb6d5c68a3258ce19387512f648f1bffe0071e44e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec35cc9b1f0fd64781a7eb6d5c68a3258ce19387512f648f1bffe0071e44e42->enter($__internal_1ec35cc9b1f0fd64781a7eb6d5c68a3258ce19387512f648f1bffe0071e44e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:new.html.twig"));

        $__internal_48c2250fc3c135db0af31840cf1cb8346e0812308c2f54aa4a6dbcbcc4cadd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c2250fc3c135db0af31840cf1cb8346e0812308c2f54aa4a6dbcbcc4cadd4e->enter($__internal_48c2250fc3c135db0af31840cf1cb8346e0812308c2f54aa4a6dbcbcc4cadd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec35cc9b1f0fd64781a7eb6d5c68a3258ce19387512f648f1bffe0071e44e42->leave($__internal_1ec35cc9b1f0fd64781a7eb6d5c68a3258ce19387512f648f1bffe0071e44e42_prof);

        
        $__internal_48c2250fc3c135db0af31840cf1cb8346e0812308c2f54aa4a6dbcbcc4cadd4e->leave($__internal_48c2250fc3c135db0af31840cf1cb8346e0812308c2f54aa4a6dbcbcc4cadd4e_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_95bf9cb5ab22ea6e8c87e408b5e1b526c0d5684b7fe04f63aefe609290394445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bf9cb5ab22ea6e8c87e408b5e1b526c0d5684b7fe04f63aefe609290394445->enter($__internal_95bf9cb5ab22ea6e8c87e408b5e1b526c0d5684b7fe04f63aefe609290394445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_96f013cc10981824fa7cc8916b9924b5c69d70c6a91a4e15fd77e6a90b368913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f013cc10981824fa7cc8916b9924b5c69d70c6a91a4e15fd77e6a90b368913->enter($__internal_96f013cc10981824fa7cc8916b9924b5c69d70c6a91a4e15fd77e6a90b368913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "   <div class=\"my-h1\"> New Event</div> ";
        
        $__internal_96f013cc10981824fa7cc8916b9924b5c69d70c6a91a4e15fd77e6a90b368913->leave($__internal_96f013cc10981824fa7cc8916b9924b5c69d70c6a91a4e15fd77e6a90b368913_prof);

        
        $__internal_95bf9cb5ab22ea6e8c87e408b5e1b526c0d5684b7fe04f63aefe609290394445->leave($__internal_95bf9cb5ab22ea6e8c87e408b5e1b526c0d5684b7fe04f63aefe609290394445_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3d7d64b1ddc964d9f6c090029b0064258267f042f4877be5d1132228e38ccd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d7d64b1ddc964d9f6c090029b0064258267f042f4877be5d1132228e38ccd2->enter($__internal_a3d7d64b1ddc964d9f6c090029b0064258267f042f4877be5d1132228e38ccd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bae943cc2aa7daa02338cd2aa836ace9e88d36518bc94c02d98d543f3965414b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae943cc2aa7daa02338cd2aa836ace9e88d36518bc94c02d98d543f3965414b->enter($__internal_bae943cc2aa7daa02338cd2aa836ace9e88d36518bc94c02d98d543f3965414b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    

    <div class=\"form-group\">
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-default btnmargin\" value=\"Create\" />
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    ";
        // line 13
        $this->displayBlock('menu', $context, $blocks);
        
        $__internal_bae943cc2aa7daa02338cd2aa836ace9e88d36518bc94c02d98d543f3965414b->leave($__internal_bae943cc2aa7daa02338cd2aa836ace9e88d36518bc94c02d98d543f3965414b_prof);

        
        $__internal_a3d7d64b1ddc964d9f6c090029b0064258267f042f4877be5d1132228e38ccd2->leave($__internal_a3d7d64b1ddc964d9f6c090029b0064258267f042f4877be5d1132228e38ccd2_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_338f7e2c4888fabe967d7e7c53bc3926697be175c2c1761ed69c2fd57dc82e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338f7e2c4888fabe967d7e7c53bc3926697be175c2c1761ed69c2fd57dc82e68->enter($__internal_338f7e2c4888fabe967d7e7c53bc3926697be175c2c1761ed69c2fd57dc82e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_de07ee153e33d30823ad5c90eb2bce65cee89d8df0715bb85f4e3f8b125156e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de07ee153e33d30823ad5c90eb2bce65cee89d8df0715bb85f4e3f8b125156e4->enter($__internal_de07ee153e33d30823ad5c90eb2bce65cee89d8df0715bb85f4e3f8b125156e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 14
        echo "        
    ";
        
        $__internal_de07ee153e33d30823ad5c90eb2bce65cee89d8df0715bb85f4e3f8b125156e4->leave($__internal_de07ee153e33d30823ad5c90eb2bce65cee89d8df0715bb85f4e3f8b125156e4_prof);

        
        $__internal_338f7e2c4888fabe967d7e7c53bc3926697be175c2c1761ed69c2fd57dc82e68->leave($__internal_338f7e2c4888fabe967d7e7c53bc3926697be175c2c1761ed69c2fd57dc82e68_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Event:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 14,  88 => 13,  83 => 11,  78 => 9,  74 => 8,  69 => 5,  60 => 4,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EventBundle::layout.html.twig\" %}
 {% block header %}   <div class=\"my-h1\"> New Event</div> {% endblock %}

{% block body %}
    

    <div class=\"form-group\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" class=\"btn btn-default btnmargin\" value=\"Create\" />
        {{ form_end(form) }}
    </div>
    {% block menu %}
        
    {% endblock %}
{% endblock %}
", "EventBundle:Event:new.html.twig", "D:\\xampp\\htdocs\\eshop\\src\\EventBundle/Resources/views/Event/new.html.twig");
    }
}
