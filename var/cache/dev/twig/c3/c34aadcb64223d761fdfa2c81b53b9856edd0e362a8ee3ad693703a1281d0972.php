<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7c46fe2e6e2ea2eb07b2604bdafca284406948d51b8ff651e4c6ec264cda09fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efa5184276fdfeb578d3fee0fcf171c0954762e5c24f3bac58ed78e5c732c561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa5184276fdfeb578d3fee0fcf171c0954762e5c24f3bac58ed78e5c732c561->enter($__internal_efa5184276fdfeb578d3fee0fcf171c0954762e5c24f3bac58ed78e5c732c561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0d35a93579d510496a3098faf7ec1ad92fe340c7a310e8735a2b3664e6975a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d35a93579d510496a3098faf7ec1ad92fe340c7a310e8735a2b3664e6975a7d->enter($__internal_0d35a93579d510496a3098faf7ec1ad92fe340c7a310e8735a2b3664e6975a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_efa5184276fdfeb578d3fee0fcf171c0954762e5c24f3bac58ed78e5c732c561->leave($__internal_efa5184276fdfeb578d3fee0fcf171c0954762e5c24f3bac58ed78e5c732c561_prof);

        
        $__internal_0d35a93579d510496a3098faf7ec1ad92fe340c7a310e8735a2b3664e6975a7d->leave($__internal_0d35a93579d510496a3098faf7ec1ad92fe340c7a310e8735a2b3664e6975a7d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_afa9bea2738abd641899c7064051c240cd4d6ed5aebfaa8ba73b63a71d7e3b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa9bea2738abd641899c7064051c240cd4d6ed5aebfaa8ba73b63a71d7e3b3f->enter($__internal_afa9bea2738abd641899c7064051c240cd4d6ed5aebfaa8ba73b63a71d7e3b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f596a0091c77ad096a7a94cb21698f81df22c6d96735af6fddb2885186c76df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f596a0091c77ad096a7a94cb21698f81df22c6d96735af6fddb2885186c76df->enter($__internal_7f596a0091c77ad096a7a94cb21698f81df22c6d96735af6fddb2885186c76df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7f596a0091c77ad096a7a94cb21698f81df22c6d96735af6fddb2885186c76df->leave($__internal_7f596a0091c77ad096a7a94cb21698f81df22c6d96735af6fddb2885186c76df_prof);

        
        $__internal_afa9bea2738abd641899c7064051c240cd4d6ed5aebfaa8ba73b63a71d7e3b3f->leave($__internal_afa9bea2738abd641899c7064051c240cd4d6ed5aebfaa8ba73b63a71d7e3b3f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_38393e7d5c585763476e02e71d9ee915a2e741463f2356044f88e11cd5e01fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38393e7d5c585763476e02e71d9ee915a2e741463f2356044f88e11cd5e01fea->enter($__internal_38393e7d5c585763476e02e71d9ee915a2e741463f2356044f88e11cd5e01fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e3278a5d895caafd6a2d2f06a1175bb2b76a1569c146499338d8d09a2e5d897a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3278a5d895caafd6a2d2f06a1175bb2b76a1569c146499338d8d09a2e5d897a->enter($__internal_e3278a5d895caafd6a2d2f06a1175bb2b76a1569c146499338d8d09a2e5d897a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e3278a5d895caafd6a2d2f06a1175bb2b76a1569c146499338d8d09a2e5d897a->leave($__internal_e3278a5d895caafd6a2d2f06a1175bb2b76a1569c146499338d8d09a2e5d897a_prof);

        
        $__internal_38393e7d5c585763476e02e71d9ee915a2e741463f2356044f88e11cd5e01fea->leave($__internal_38393e7d5c585763476e02e71d9ee915a2e741463f2356044f88e11cd5e01fea_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a21e39e5f92e4d4db8192438ab1c48b8531b12be534eed0810ac1460c26773d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a21e39e5f92e4d4db8192438ab1c48b8531b12be534eed0810ac1460c26773d->enter($__internal_8a21e39e5f92e4d4db8192438ab1c48b8531b12be534eed0810ac1460c26773d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7183da0acb622869a5712be1cbe6e7acf20c96d9878fe5ff30c21616c39b4d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7183da0acb622869a5712be1cbe6e7acf20c96d9878fe5ff30c21616c39b4d8d->enter($__internal_7183da0acb622869a5712be1cbe6e7acf20c96d9878fe5ff30c21616c39b4d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7183da0acb622869a5712be1cbe6e7acf20c96d9878fe5ff30c21616c39b4d8d->leave($__internal_7183da0acb622869a5712be1cbe6e7acf20c96d9878fe5ff30c21616c39b4d8d_prof);

        
        $__internal_8a21e39e5f92e4d4db8192438ab1c48b8531b12be534eed0810ac1460c26773d->leave($__internal_8a21e39e5f92e4d4db8192438ab1c48b8531b12be534eed0810ac1460c26773d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\xampp\\htdocs\\eshop\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
