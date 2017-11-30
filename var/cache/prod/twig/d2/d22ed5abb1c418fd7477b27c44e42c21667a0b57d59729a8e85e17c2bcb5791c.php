<?php

/* EventBundle:Default:index.html.twig */
class __TwigTemplate_f1eed396451c8c599f6d3199097586b5d6215feb82a354f326f21a24de72c76a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EventBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        echo " 
Hello World!

<h2>Event</h2>
<br> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "name", array()), "html", null, true);
        echo "
<br> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["event"] ?? null), "location", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EventBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EventBundle:Default:index.html.twig", "D:\\xampp\\htdocs\\eshop\\src\\EventBundle/Resources/views/Default/index.html.twig");
    }
}
