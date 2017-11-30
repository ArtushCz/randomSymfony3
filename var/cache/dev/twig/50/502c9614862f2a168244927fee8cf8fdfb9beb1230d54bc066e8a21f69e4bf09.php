<?php

/* menu.html.twig */
class __TwigTemplate_2e7035a40b588045db04eaa369ca2a71ef3c98f80c8aec0fa067ab7c04277ae3 extends Twig_Template
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
        $__internal_e4ceba90e2d4e3083316a9abf9831454bca0129ac2336fca095a961662788666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ceba90e2d4e3083316a9abf9831454bca0129ac2336fca095a961662788666->enter($__internal_e4ceba90e2d4e3083316a9abf9831454bca0129ac2336fca095a961662788666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_df12fba55ac53f78a73059b27c235663badcd018c34a0d0b1056939e74806390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df12fba55ac53f78a73059b27c235663badcd018c34a0d0b1056939e74806390->enter($__internal_df12fba55ac53f78a73059b27c235663badcd018c34a0d0b1056939e74806390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 2
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" id=\"id-menu-top-bar\">
    <div class=\"container-fluid maxWidth\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
        </div>
        <ul class=\"nav navbar-nav navbar-right\">
            <li >
                <a href=\"#menu\" style=\"background-color: transparent; float:right; padding: 7px !important; \"
                   onclick=\"\" class=\"text-right\"><img src=\"/global/icons/user_icon.png\" id=\"id-mm-user\"></a>
            </li >
        </ul>
    </div>
</nav>


<div class=\"col-sm-3 menu\" id=\"id-menu\">
    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_new");
        echo "\">Create a new event</a>
        </li>
        <li>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Back to the list</a>
        </li>
        <li>

        </li>
        ";
        // line 30
        echo "

        ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "            <li>
                <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout</a>
            </li>
        ";
        } else {
            // line 37
            echo "            <li>
                <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_form");
            echo "\">Login</a>
            </li>
        ";
        }
        // line 40
        echo " 
    </ul>

</div>

";
        
        $__internal_e4ceba90e2d4e3083316a9abf9831454bca0129ac2336fca095a961662788666->leave($__internal_e4ceba90e2d4e3083316a9abf9831454bca0129ac2336fca095a961662788666_prof);

        
        $__internal_df12fba55ac53f78a73059b27c235663badcd018c34a0d0b1056939e74806390->leave($__internal_df12fba55ac53f78a73059b27c235663badcd018c34a0d0b1056939e74806390_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 40,  77 => 38,  74 => 37,  68 => 34,  65 => 33,  63 => 32,  59 => 30,  51 => 23,  45 => 20,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# menu Twig template #}
<nav class=\"navbar navbar-inverse navbar-fixed-top\" id=\"id-menu-top-bar\">
    <div class=\"container-fluid maxWidth\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
        </div>
        <ul class=\"nav navbar-nav navbar-right\">
            <li >
                <a href=\"#menu\" style=\"background-color: transparent; float:right; padding: 7px !important; \"
                   onclick=\"\" class=\"text-right\"><img src=\"/global/icons/user_icon.png\" id=\"id-mm-user\"></a>
            </li >
        </ul>
    </div>
</nav>


<div class=\"col-sm-3 menu\" id=\"id-menu\">
    <ul>
        <li>
            <a href=\"{{ path('event_new') }}\">Create a new event</a>
        </li>
        <li>
            <a href=\"{{ path('event_index') }}\">Back to the list</a>
        </li>
        <li>

        </li>
        {#        {% if is_granted('IS_AUTHENTICATED_FULLY')%}
                    {% if is_granted('IS_AUTHENTICATED_ANONYMOUSLY')%}#}


        {% if is_granted('IS_AUTHENTICATED_REMEMBERED')%}
            <li>
                <a href=\"{{ path('logout') }}\">Logout</a>
            </li>
        {% else %}
            <li>
                <a href=\"{{ path('login_form') }}\">Login</a>
            </li>
        {% endif %} 
    </ul>

</div>

", "menu.html.twig", "D:\\xampp\\htdocs\\eshop\\app\\Resources\\views\\menu.html.twig");
    }
}
