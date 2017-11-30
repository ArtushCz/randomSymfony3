<?php

/* EventBundle:Event:show.html.twig */
class __TwigTemplate_840c4f91cfdbd03512ba637b844255daa956f525887937575a0ed57a1f634eca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EventBundle::layout.html.twig", "EventBundle:Event:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EventBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71335799ad917de62a8d41fe9f60d33764199aa8e55ea052243c435850a79765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71335799ad917de62a8d41fe9f60d33764199aa8e55ea052243c435850a79765->enter($__internal_71335799ad917de62a8d41fe9f60d33764199aa8e55ea052243c435850a79765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:show.html.twig"));

        $__internal_c9bd79a99a1493b24884e01c3b4efddef083197c5335297f161585965ca6b8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bd79a99a1493b24884e01c3b4efddef083197c5335297f161585965ca6b8de->enter($__internal_c9bd79a99a1493b24884e01c3b4efddef083197c5335297f161585965ca6b8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71335799ad917de62a8d41fe9f60d33764199aa8e55ea052243c435850a79765->leave($__internal_71335799ad917de62a8d41fe9f60d33764199aa8e55ea052243c435850a79765_prof);

        
        $__internal_c9bd79a99a1493b24884e01c3b4efddef083197c5335297f161585965ca6b8de->leave($__internal_c9bd79a99a1493b24884e01c3b4efddef083197c5335297f161585965ca6b8de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cbe5f4e9c23a459c6c5d86a4dbd5cb870144efc60711ca37f6bcdc2ed928638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cbe5f4e9c23a459c6c5d86a4dbd5cb870144efc60711ca37f6bcdc2ed928638->enter($__internal_1cbe5f4e9c23a459c6c5d86a4dbd5cb870144efc60711ca37f6bcdc2ed928638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d271ab6e0612ac77437093477efda8e4bd7ca4665aa76949767958a29b6e128f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d271ab6e0612ac77437093477efda8e4bd7ca4665aa76949767958a29b6e128f->enter($__internal_d271ab6e0612ac77437093477efda8e4bd7ca4665aa76949767958a29b6e128f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo " ";
        
        $__internal_d271ab6e0612ac77437093477efda8e4bd7ca4665aa76949767958a29b6e128f->leave($__internal_d271ab6e0612ac77437093477efda8e4bd7ca4665aa76949767958a29b6e128f_prof);

        
        $__internal_1cbe5f4e9c23a459c6c5d86a4dbd5cb870144efc60711ca37f6bcdc2ed928638->leave($__internal_1cbe5f4e9c23a459c6c5d86a4dbd5cb870144efc60711ca37f6bcdc2ed928638_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_cb00c8700c7eeb42026476dba1b6aed66f832dd81e24c2506faf718bba7a03ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb00c8700c7eeb42026476dba1b6aed66f832dd81e24c2506faf718bba7a03ff->enter($__internal_cb00c8700c7eeb42026476dba1b6aed66f832dd81e24c2506faf718bba7a03ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_297b7cd4cf2dc1f47a4ba1b95e4f4f801af8c6330ea0e9c7ff9f7bc490dc9084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297b7cd4cf2dc1f47a4ba1b95e4f4f801af8c6330ea0e9c7ff9f7bc490dc9084->enter($__internal_297b7cd4cf2dc1f47a4ba1b95e4f4f801af8c6330ea0e9c7ff9f7bc490dc9084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "   <div class=\"my-h1\"> Event - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</div>  ";
        
        $__internal_297b7cd4cf2dc1f47a4ba1b95e4f4f801af8c6330ea0e9c7ff9f7bc490dc9084->leave($__internal_297b7cd4cf2dc1f47a4ba1b95e4f4f801af8c6330ea0e9c7ff9f7bc490dc9084_prof);

        
        $__internal_cb00c8700c7eeb42026476dba1b6aed66f832dd81e24c2506faf718bba7a03ff->leave($__internal_cb00c8700c7eeb42026476dba1b6aed66f832dd81e24c2506faf718bba7a03ff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_296988262cc8644f396778f846b647f4576f3c306dfe07a80e3634555709e935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296988262cc8644f396778f846b647f4576f3c306dfe07a80e3634555709e935->enter($__internal_296988262cc8644f396778f846b647f4576f3c306dfe07a80e3634555709e935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f21c86942d21b2f874685615e04cc2b044b24afdfcfd09b6b1c44fcce74f6a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21c86942d21b2f874685615e04cc2b044b24afdfcfd09b6b1c44fcce74f6a52->enter($__internal_f21c86942d21b2f874685615e04cc2b044b24afdfcfd09b6b1c44fcce74f6a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  



    <div class=\"event\">
        <div class=\"event-name\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_show", array("id" => $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</a></div> 
        <div class=\"event-time\">";
        // line 11
        if ($this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "time", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "time", array()), "d.m.Y H:i"), "html", null, true);
            echo " - ";
        }
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "location", array()), "html", null, true);
        echo "</div>
        <div class=\"event-detail\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "details", array()), "html", null, true);
        echo " </div>
        <div class=\"event-links\">  <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_edit", array("id" => $this->getAttribute(($context["event"] ?? $this->getContext($context, "event")), "id", array()))), "html", null, true);
        echo "\"  class=\"btn btn-default btnmargin\" >edit</a>
            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\"  class=\"btn btn-default btnmargin\"  value=\"Delete\">
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "</div>
    </div>

";
        
        $__internal_f21c86942d21b2f874685615e04cc2b044b24afdfcfd09b6b1c44fcce74f6a52->leave($__internal_f21c86942d21b2f874685615e04cc2b044b24afdfcfd09b6b1c44fcce74f6a52_prof);

        
        $__internal_296988262cc8644f396778f846b647f4576f3c306dfe07a80e3634555709e935->leave($__internal_296988262cc8644f396778f846b647f4576f3c306dfe07a80e3634555709e935_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 16,  119 => 14,  115 => 13,  111 => 12,  102 => 11,  96 => 10,  81 => 5,  61 => 4,  42 => 3,  11 => 1,);
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

{% block title %}{{ event.name }} {% endblock %} 
 {% block header %}   <div class=\"my-h1\"> Event - {{ event.name}}</div>  {% endblock %}
{% block body %}  



    <div class=\"event\">
        <div class=\"event-name\"><a href=\"{{ path('event_show', { 'id': event.id }) }}\">{{ event.name }}</a></div> 
        <div class=\"event-time\">{% if event.time %}{{ event.time|date('d.m.Y H:i') }} - {% endif %}  {{ event.location }}</div>
        <div class=\"event-detail\">{{ event.details }} </div>
        <div class=\"event-links\">  <a href=\"{{ path('event_edit', { 'id': event.id }) }}\"  class=\"btn btn-default btnmargin\" >edit</a>
            {{ form_start(delete_form) }}
            <input type=\"submit\"  class=\"btn btn-default btnmargin\"  value=\"Delete\">
            {{ form_end(delete_form) }}</div>
    </div>

{% endblock %}
", "EventBundle:Event:show.html.twig", "D:\\xampp\\htdocs\\eshop\\src\\EventBundle/Resources/views/Event/show.html.twig");
    }
}
