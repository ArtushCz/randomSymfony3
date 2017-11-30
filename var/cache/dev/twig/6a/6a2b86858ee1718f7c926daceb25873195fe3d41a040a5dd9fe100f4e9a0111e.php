<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7a2f4d9b42e2f70e5f5fac8a81bd7b4c2ee6e06c457b04607fa02b5c93dbc6aa extends Twig_Template
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
        $__internal_9499d295a794498cbfaf1dddfcf143b8dd4b6ace45c8929e795d47821de68bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9499d295a794498cbfaf1dddfcf143b8dd4b6ace45c8929e795d47821de68bbb->enter($__internal_9499d295a794498cbfaf1dddfcf143b8dd4b6ace45c8929e795d47821de68bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_5470384cbd333b65ed994d052d80c85f5970c86f78caa9b5682ffbb1ff2fc3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5470384cbd333b65ed994d052d80c85f5970c86f78caa9b5682ffbb1ff2fc3de->enter($__internal_5470384cbd333b65ed994d052d80c85f5970c86f78caa9b5682ffbb1ff2fc3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_9499d295a794498cbfaf1dddfcf143b8dd4b6ace45c8929e795d47821de68bbb->leave($__internal_9499d295a794498cbfaf1dddfcf143b8dd4b6ace45c8929e795d47821de68bbb_prof);

        
        $__internal_5470384cbd333b65ed994d052d80c85f5970c86f78caa9b5682ffbb1ff2fc3de->leave($__internal_5470384cbd333b65ed994d052d80c85f5970c86f78caa9b5682ffbb1ff2fc3de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "D:\\xampp\\htdocs\\eshop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
