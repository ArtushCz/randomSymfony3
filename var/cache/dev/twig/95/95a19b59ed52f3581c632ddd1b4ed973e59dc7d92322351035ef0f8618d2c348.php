<?php

/* @Twig/Exception/exception.txt.twig */
class __TwigTemplate_d528a542ea08c5601454c15bfb89d29ac994cef1a1689d9414d545c04748ff76 extends Twig_Template
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
        $__internal_9e252df37b90199773035633279d54e5ed926bcd85d3145983eab76191f17949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e252df37b90199773035633279d54e5ed926bcd85d3145983eab76191f17949->enter($__internal_9e252df37b90199773035633279d54e5ed926bcd85d3145983eab76191f17949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.txt.twig"));

        $__internal_c93e43e84f69af0085c4d477aa634c3f8f2838ee416599975384028b0c44a089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93e43e84f69af0085c4d477aa634c3f8f2838ee416599975384028b0c44a089->enter($__internal_c93e43e84f69af0085c4d477aa634c3f8f2838ee416599975384028b0c44a089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo ((((($context["status_code"] ?? $this->getContext($context, "status_code")) . " | ") . ($context["status_text"] ?? $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()));
        echo "
[message] ";
        // line 2
        echo $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo $this->getAttribute($context["e"], "class", array());
            echo ": ";
            echo $this->getAttribute($context["e"], "message", array());
            echo "
";
            // line 5
            echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => $context["e"]), false);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9e252df37b90199773035633279d54e5ed926bcd85d3145983eab76191f17949->leave($__internal_9e252df37b90199773035633279d54e5ed926bcd85d3145983eab76191f17949_prof);

        
        $__internal_c93e43e84f69af0085c4d477aa634c3f8f2838ee416599975384028b0c44a089->leave($__internal_c93e43e84f69af0085c4d477aa634c3f8f2838ee416599975384028b0c44a089_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{{ include('@Twig/Exception/traces.txt.twig', { exception: e }, with_context = false) }}

{% endfor %}
", "@Twig/Exception/exception.txt.twig", "D:\\xampp\\htdocs\\eshop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.txt.twig");
    }
}
