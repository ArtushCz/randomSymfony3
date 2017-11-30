<?php

/* EventBundle:Event:index.html.twig */
class __TwigTemplate_b1dbc30d432369ae6615918bf0fc342f0c99219a986e3f916c9c382b371c523f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EventBundle::layout.html.twig", "EventBundle:Event:index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_49e35dc3eca4ee094e9b8e58476ffd3ef77b7a85671017ddb5d2a240a30e7c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e35dc3eca4ee094e9b8e58476ffd3ef77b7a85671017ddb5d2a240a30e7c5b->enter($__internal_49e35dc3eca4ee094e9b8e58476ffd3ef77b7a85671017ddb5d2a240a30e7c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:index.html.twig"));

        $__internal_53cfb4a6b65d921849f9c1418263ff01bfa37917007ec02fac063decd868c612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cfb4a6b65d921849f9c1418263ff01bfa37917007ec02fac063decd868c612->enter($__internal_53cfb4a6b65d921849f9c1418263ff01bfa37917007ec02fac063decd868c612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e35dc3eca4ee094e9b8e58476ffd3ef77b7a85671017ddb5d2a240a30e7c5b->leave($__internal_49e35dc3eca4ee094e9b8e58476ffd3ef77b7a85671017ddb5d2a240a30e7c5b_prof);

        
        $__internal_53cfb4a6b65d921849f9c1418263ff01bfa37917007ec02fac063decd868c612->leave($__internal_53cfb4a6b65d921849f9c1418263ff01bfa37917007ec02fac063decd868c612_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_0858bc3f575bc661a0e4361dd66270d5f9c33c2cf21024fd1862278ccb4b78d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0858bc3f575bc661a0e4361dd66270d5f9c33c2cf21024fd1862278ccb4b78d7->enter($__internal_0858bc3f575bc661a0e4361dd66270d5f9c33c2cf21024fd1862278ccb4b78d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e5119db4598f6c22de6844119b845e3f59e85616553d3a051c044ec390250f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5119db4598f6c22de6844119b845e3f59e85616553d3a051c044ec390250f22->enter($__internal_e5119db4598f6c22de6844119b845e3f59e85616553d3a051c044ec390250f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "  <div class=\"my-h1\"> Events list</div> ";
        
        $__internal_e5119db4598f6c22de6844119b845e3f59e85616553d3a051c044ec390250f22->leave($__internal_e5119db4598f6c22de6844119b845e3f59e85616553d3a051c044ec390250f22_prof);

        
        $__internal_0858bc3f575bc661a0e4361dd66270d5f9c33c2cf21024fd1862278ccb4b78d7->leave($__internal_0858bc3f575bc661a0e4361dd66270d5f9c33c2cf21024fd1862278ccb4b78d7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba40e45deffb24c5a9be7619250ef462b3a84f044138ab9135f395358c7a3947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba40e45deffb24c5a9be7619250ef462b3a84f044138ab9135f395358c7a3947->enter($__internal_ba40e45deffb24c5a9be7619250ef462b3a84f044138ab9135f395358c7a3947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_801627deb0535c3fd5c00c1559cf361c9d1512db27de59e74b697d877f1ef49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801627deb0535c3fd5c00c1559cf361c9d1512db27de59e74b697d877f1ef49e->enter($__internal_801627deb0535c3fd5c00c1559cf361c9d1512db27de59e74b697d877f1ef49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <script>
        var divList = [];
    </script>
    ";
        // line 10
        $context["i"] = 0;
        // line 11
        echo "    <div class=\"container-fluid \">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 13
            echo "            ";
            if ((0 == ($context["i"] ?? $this->getContext($context, "i")) % 3)) {
                // line 14
                echo "                ";
                if ( !(($context["i"] ?? $this->getContext($context, "i")) === 0)) {
                    // line 15
                    echo "                </div>
            ";
                }
                // line 17
                echo "            <div class=\"row\">
            ";
            }
            // line 19
            echo "            <div class=\"col-sm-4 event-block\" id=\"id-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\">

                <div class=\"event\">
                    <div class=\"event-name\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_show", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</a></div> 
                    <div class=\"event-time\">";
            // line 23
            if ($this->getAttribute($context["event"], "time", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "time", array()), "d.m.Y H:i"), "html", null, true);
                echo " - ";
            }
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "location", array()), "html", null, true);
            echo "</div>
                    <div class=\"event-detail\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "details", array()), "html", null, true);
            echo " </div>
                    <div class=\"event-links\">  <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_edit", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
            echo "\"  class=\"btn btn-default btnmargin\" >edit</a></div>
                </div>


            </div>

            <script>
                divList.push('id-";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "');
            </script>

            ";
            // line 35
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " 
            </div>
        ";
            }
            // line 38
            echo "

        ";
            // line 40
            $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
            // line 41
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    <script>

        \$(document).ready(function () {
           
            var max = 0;
            divList.forEach(function (divID) {
                if (\$('#' + divID).height() > max) {
                    max = \$('#' + divID).height();
                }
            });
            \$(\".event\").css(\"min-height\", max);
            calculateContent();

        });
    </script>
</div>



";
        
        $__internal_801627deb0535c3fd5c00c1559cf361c9d1512db27de59e74b697d877f1ef49e->leave($__internal_801627deb0535c3fd5c00c1559cf361c9d1512db27de59e74b697d877f1ef49e_prof);

        
        $__internal_ba40e45deffb24c5a9be7619250ef462b3a84f044138ab9135f395358c7a3947->leave($__internal_ba40e45deffb24c5a9be7619250ef462b3a84f044138ab9135f395358c7a3947_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 42,  163 => 41,  161 => 40,  157 => 38,  151 => 35,  145 => 32,  135 => 25,  131 => 24,  122 => 23,  116 => 22,  109 => 19,  105 => 17,  101 => 15,  98 => 14,  95 => 13,  78 => 12,  75 => 11,  73 => 10,  68 => 7,  59 => 6,  41 => 2,  11 => 1,);
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
{% block header %}  <div class=\"my-h1\"> Events list</div> {% endblock %}



{% block body %}
    <script>
        var divList = [];
    </script>
    {% set i = 0%}
    <div class=\"container-fluid \">
        {% for event in events %}
            {% if i is divisible by(3) %}
                {% if i is not sameas(0)%}
                </div>
            {%endif%}
            <div class=\"row\">
            {% endif %}
            <div class=\"col-sm-4 event-block\" id=\"id-{{event.id}}\">

                <div class=\"event\">
                    <div class=\"event-name\"><a href=\"{{ path('event_show', { 'id': event.id }) }}\">{{ event.name }}</a></div> 
                    <div class=\"event-time\">{% if event.time %}{{ event.time|date('d.m.Y H:i')  }} - {% endif %}  {{ event.location }}</div>
                    <div class=\"event-detail\">{{ event.details }} </div>
                    <div class=\"event-links\">  <a href=\"{{ path('event_edit', { 'id': event.id }) }}\"  class=\"btn btn-default btnmargin\" >edit</a></div>
                </div>


            </div>

            <script>
                divList.push('id-{{event.id}}');
            </script>

            {% if loop.last %} 
            </div>
        {% endif %}


        {%   set i = i+1%}
    {% endfor %}
    <script>

        \$(document).ready(function () {
           
            var max = 0;
            divList.forEach(function (divID) {
                if (\$('#' + divID).height() > max) {
                    max = \$('#' + divID).height();
                }
            });
            \$(\".event\").css(\"min-height\", max);
            calculateContent();

        });
    </script>
</div>



{% endblock %}
", "EventBundle:Event:index.html.twig", "D:\\xampp\\htdocs\\eshop\\src\\EventBundle/Resources/views/Event/index.html.twig");
    }
}
