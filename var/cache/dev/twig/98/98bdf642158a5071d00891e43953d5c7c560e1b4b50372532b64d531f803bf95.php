<?php

/* mobile-menu.html.twig */
class __TwigTemplate_8fedc0c1e445ef49acbc9fc9d7acda455d8619d5eb93203d1b6f9a37f7ab7122 extends Twig_Template
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
        $__internal_c859a59d6e351bfc69a03a6188fb68bd636de924008af13c959d6047702df9e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c859a59d6e351bfc69a03a6188fb68bd636de924008af13c959d6047702df9e2->enter($__internal_c859a59d6e351bfc69a03a6188fb68bd636de924008af13c959d6047702df9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mobile-menu.html.twig"));

        $__internal_996cf00d538e8822ced4646cc47a6e031c4c0fb395684869514f36712cbf9e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996cf00d538e8822ced4646cc47a6e031c4c0fb395684869514f36712cbf9e10->enter($__internal_996cf00d538e8822ced4646cc47a6e031c4c0fb395684869514f36712cbf9e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mobile-menu.html.twig"));

        // line 1
        echo "<div  class=\"\" id=\"id-mobile-menu\">
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" id=\"id-mm-top-bar\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\"  id=\"id-navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
                <ul class=\"nav navbar-nav \">
                    <li >
                        <a href=\"#menu\" style=\"background-color: transparent;float:right; \"
                           onclick=\"showMobileMenu();\" class=\"text-right\"><img src=\"/global/icons/btn_topnav.png\" id=\"id-mm\"></a>
                        <a href=\"#menu\" style=\"background-color: transparent;float:right; \"
                           onclick=\"\" class=\"text-right\"><img src=\"/global/icons/user_icon.png\" id=\"id-mm-usr\"></a>
                    </li>
                </ul>
                <div id=\"id-mm-content\" class=\"mm-content-container\">
                    <div class=\"mm-content-background\">
                    </div>
                    <div class=\"mm-content\" >
                        <div class=\"mm-content-arrow\">
                        </div>
                        <ul>
                            <li>
                                <a href=\"#\"  onclick=\"menuClassToggle(this)\">Menu</a>
                                <ul id=\"test\"  class=\"submenu\">
                                    <li>
                                        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_new");
        echo "\">New Event!</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Test1</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Test2</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Test3</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Test4</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href=\"#\" onclick=\"menuClassToggle(this)\">Menu</a>
                                <ul id=\"test\"  class=\"submenu\">
                                    <li>
                                        <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_new");
        echo "\">New Event!</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Test1</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Test2</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Test3</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Test4</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event_index");
        echo "\">Back to the list</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</div>

<script>
    function  menuClassToggle(aLink) {
        \$('a').removeClass('active');
        \$(aLink).toggleClass('active')
    }
    \$(\".submenu\").hide();
    \$('a').click(function () {
        if (\$('a', this).hasClass('active')) {
            \$('a', this).removeClass('active');
        } else {
            \$('a', this).addClass('active');
        }
    })
    \$(\"li:has(ul)\").click(function () {
        \$(\".submenu\").slideUp('slow');
        if (\$(\"ul\", this).is(':visible')) {
            \$('a', this).removeClass('active');
        } else {
            \$(\"ul\", this).slideDown('slow');

        }

    });
</script>";
        
        $__internal_c859a59d6e351bfc69a03a6188fb68bd636de924008af13c959d6047702df9e2->leave($__internal_c859a59d6e351bfc69a03a6188fb68bd636de924008af13c959d6047702df9e2_prof);

        
        $__internal_996cf00d538e8822ced4646cc47a6e031c4c0fb395684869514f36712cbf9e10->leave($__internal_996cf00d538e8822ced4646cc47a6e031c4c0fb395684869514f36712cbf9e10_prof);

    }

    public function getTemplateName()
    {
        return "mobile-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 64,  111 => 58,  105 => 55,  99 => 52,  93 => 49,  87 => 46,  75 => 37,  69 => 34,  63 => 31,  57 => 28,  51 => 25,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div  class=\"\" id=\"id-mobile-menu\">
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" id=\"id-mm-top-bar\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\"  id=\"id-navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">WebSiteName</a>
                <ul class=\"nav navbar-nav \">
                    <li >
                        <a href=\"#menu\" style=\"background-color: transparent;float:right; \"
                           onclick=\"showMobileMenu();\" class=\"text-right\"><img src=\"/global/icons/btn_topnav.png\" id=\"id-mm\"></a>
                        <a href=\"#menu\" style=\"background-color: transparent;float:right; \"
                           onclick=\"\" class=\"text-right\"><img src=\"/global/icons/user_icon.png\" id=\"id-mm-usr\"></a>
                    </li>
                </ul>
                <div id=\"id-mm-content\" class=\"mm-content-container\">
                    <div class=\"mm-content-background\">
                    </div>
                    <div class=\"mm-content\" >
                        <div class=\"mm-content-arrow\">
                        </div>
                        <ul>
                            <li>
                                <a href=\"#\"  onclick=\"menuClassToggle(this)\">Menu</a>
                                <ul id=\"test\"  class=\"submenu\">
                                    <li>
                                        <a href=\"{{ path('event_new') }}\">New Event!</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('event_index') }}\">Test1</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('event_index') }}\">Test2</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('event_index') }}\">Test3</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('event_index') }}\">Test4</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href=\"#\" onclick=\"menuClassToggle(this)\">Menu</a>
                                <ul id=\"test\"  class=\"submenu\">
                                    <li>
                                        <a href=\"{{ path('event_new') }}\">New Event!</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('event_index') }}\">Test1</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('event_index') }}\">Test2</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('event_index') }}\">Test3</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('event_index') }}\">Test4</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href=\"{{ path('event_index') }}\">Back to the list</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</div>

<script>
    function  menuClassToggle(aLink) {
        \$('a').removeClass('active');
        \$(aLink).toggleClass('active')
    }
    \$(\".submenu\").hide();
    \$('a').click(function () {
        if (\$('a', this).hasClass('active')) {
            \$('a', this).removeClass('active');
        } else {
            \$('a', this).addClass('active');
        }
    })
    \$(\"li:has(ul)\").click(function () {
        \$(\".submenu\").slideUp('slow');
        if (\$(\"ul\", this).is(':visible')) {
            \$('a', this).removeClass('active');
        } else {
            \$(\"ul\", this).slideDown('slow');

        }

    });
</script>", "mobile-menu.html.twig", "D:\\xampp\\htdocs\\eshop\\app\\Resources\\views\\mobile-menu.html.twig");
    }
}
