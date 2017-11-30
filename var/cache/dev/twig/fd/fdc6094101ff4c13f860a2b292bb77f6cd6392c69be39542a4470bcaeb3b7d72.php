<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_353014c9da6207b97fe284e1ac868f10de3d7a6d70bcf15127ba992e43b9ef47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f14c9686015c5fe9b30b9c98c5ae260a49f4cfca742d8fc865d732b377a80ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14c9686015c5fe9b30b9c98c5ae260a49f4cfca742d8fc865d732b377a80ae7->enter($__internal_f14c9686015c5fe9b30b9c98c5ae260a49f4cfca742d8fc865d732b377a80ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_8772c2c59ac7fd3f0a38297c8ab48004382335b8f0b5185a09c7e5aa29b8c9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8772c2c59ac7fd3f0a38297c8ab48004382335b8f0b5185a09c7e5aa29b8c9f3->enter($__internal_8772c2c59ac7fd3f0a38297c8ab48004382335b8f0b5185a09c7e5aa29b8c9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f14c9686015c5fe9b30b9c98c5ae260a49f4cfca742d8fc865d732b377a80ae7->leave($__internal_f14c9686015c5fe9b30b9c98c5ae260a49f4cfca742d8fc865d732b377a80ae7_prof);

        
        $__internal_8772c2c59ac7fd3f0a38297c8ab48004382335b8f0b5185a09c7e5aa29b8c9f3->leave($__internal_8772c2c59ac7fd3f0a38297c8ab48004382335b8f0b5185a09c7e5aa29b8c9f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7401a36ce724a3515ee757605921e74ff6c2ed49ae5097105e7e1fb33a4db519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7401a36ce724a3515ee757605921e74ff6c2ed49ae5097105e7e1fb33a4db519->enter($__internal_7401a36ce724a3515ee757605921e74ff6c2ed49ae5097105e7e1fb33a4db519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_278ab0f8747b2be2ff210643ca044e38b74cb047e1c8841046e1f6c1b4a3c3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278ab0f8747b2be2ff210643ca044e38b74cb047e1c8841046e1f6c1b4a3c3b6->enter($__internal_278ab0f8747b2be2ff210643ca044e38b74cb047e1c8841046e1f6c1b4a3c3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 20
        echo "
        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_278ab0f8747b2be2ff210643ca044e38b74cb047e1c8841046e1f6c1b4a3c3b6->leave($__internal_278ab0f8747b2be2ff210643ca044e38b74cb047e1c8841046e1f6c1b4a3c3b6_prof);

        
        $__internal_7401a36ce724a3515ee757605921e74ff6c2ed49ae5097105e7e1fb33a4db519->leave($__internal_7401a36ce724a3515ee757605921e74ff6c2ed49ae5097105e7e1fb33a4db519_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  66 => 10,  61 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        {#
            If you want to control the URL the user
            is redirected to on success (more details below)
            <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
        #}

        <button type=\"submit\">login</button>
    </form>
{% endblock %}", "UserBundle:Security:login.html.twig", "D:\\xampp\\htdocs\\eshop\\src\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
