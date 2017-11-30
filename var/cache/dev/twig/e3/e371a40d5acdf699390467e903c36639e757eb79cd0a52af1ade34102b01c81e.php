<?php

/* ::base.html.twig */
class __TwigTemplate_fe856e838cf8dc4e7d0d0dc093060f3a2667e599e4965785e499e16520d1f243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c08e3f51ff24de42986a64c240fd43d5aba9ee44a08cd8aa6cce5326c1a6601b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08e3f51ff24de42986a64c240fd43d5aba9ee44a08cd8aa6cce5326c1a6601b->enter($__internal_c08e3f51ff24de42986a64c240fd43d5aba9ee44a08cd8aa6cce5326c1a6601b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_412dfa0e6b8d89526dbd8095697ef525388627e19ccf3d497f0ffb694d786bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412dfa0e6b8d89526dbd8095697ef525388627e19ccf3d497f0ffb694d786bb0->enter($__internal_412dfa0e6b8d89526dbd8095697ef525388627e19ccf3d497f0ffb694d786bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>";
        // line 7
        if (        $this->renderBlock("title", $context, $blocks)) {
            // line 8
            $this->displayBlock("title", $context, $blocks);
            echo " | Eshop.cz";
        } else {
            // line 10
            echo "Best shop | eshop.cz";
        }
        // line 13
        echo "</title>
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


    </head>
    <body>
        <div class=\"container-fluid maxWidth maxHeight\">

            <div class=\"row top-menu-height\"> 
            </div>
            <div class=\"row\">  

                <div class=\"col-sm-12 menu text-right\" >
                ";
        // line 42
        $this->loadTemplate("::base.html.twig", "::base.html.twig", 42, "313447444")->display($context);
        // line 43
        echo "
            </div>


        </div>

        <div class=\"row\" id=\"id_row_content\">  
        ";
        // line 50
        $this->loadTemplate("::base.html.twig", "::base.html.twig", 50, "1360344616")->display($context);
        // line 51
        echo "        <div class=\" col-sm-9 content\" id=\"id-content\">
        ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    </div>
</div>
<div class=\"row test\">  
    <div class=\" col-sm-12 footer text-center \" id=\"id-footer\">
        Made by Imbecile  in 2018!
    </div>
</div>
<script>
    \$(document).ready(function () {
        calculateContent();
    });
</script>
</div>

</div>
";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "</body>
</html>
";
        
        $__internal_c08e3f51ff24de42986a64c240fd43d5aba9ee44a08cd8aa6cce5326c1a6601b->leave($__internal_c08e3f51ff24de42986a64c240fd43d5aba9ee44a08cd8aa6cce5326c1a6601b_prof);

        
        $__internal_412dfa0e6b8d89526dbd8095697ef525388627e19ccf3d497f0ffb694d786bb0->leave($__internal_412dfa0e6b8d89526dbd8095697ef525388627e19ccf3d497f0ffb694d786bb0_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a64e6ad2cda93d19f7bc36d751f148c8c72685719b310d1651b279e6b128832c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64e6ad2cda93d19f7bc36d751f148c8c72685719b310d1651b279e6b128832c->enter($__internal_a64e6ad2cda93d19f7bc36d751f148c8c72685719b310d1651b279e6b128832c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b2cfcd46039c9848712187623d866690f61b9d6eb37abfb750b6b7f468736527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cfcd46039c9848712187623d866690f61b9d6eb37abfb750b6b7f468736527->enter($__internal_b2cfcd46039c9848712187623d866690f61b9d6eb37abfb750b6b7f468736527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "121d2e0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_121d2e0_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/121d2e0_main_1.css");
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            ";
            // asset "121d2e0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_121d2e0_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/121d2e0_events_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            ";
        } else {
            // asset "121d2e0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_121d2e0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/121d2e0.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
            <script src=\"/global/js/global.js\"></script>


        ";
        
        $__internal_b2cfcd46039c9848712187623d866690f61b9d6eb37abfb750b6b7f468736527->leave($__internal_b2cfcd46039c9848712187623d866690f61b9d6eb37abfb750b6b7f468736527_prof);

        
        $__internal_a64e6ad2cda93d19f7bc36d751f148c8c72685719b310d1651b279e6b128832c->leave($__internal_a64e6ad2cda93d19f7bc36d751f148c8c72685719b310d1651b279e6b128832c_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0cb67fe8acb5564d322f93186fb9618ffd168d800926201fb354e43b90d2cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0cb67fe8acb5564d322f93186fb9618ffd168d800926201fb354e43b90d2cd6->enter($__internal_d0cb67fe8acb5564d322f93186fb9618ffd168d800926201fb354e43b90d2cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd0085a500158f0eddcfe3889547a8f506a03fd51fcb54db53b085b514329c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0085a500158f0eddcfe3889547a8f506a03fd51fcb54db53b085b514329c5a->enter($__internal_cd0085a500158f0eddcfe3889547a8f506a03fd51fcb54db53b085b514329c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd0085a500158f0eddcfe3889547a8f506a03fd51fcb54db53b085b514329c5a->leave($__internal_cd0085a500158f0eddcfe3889547a8f506a03fd51fcb54db53b085b514329c5a_prof);

        
        $__internal_d0cb67fe8acb5564d322f93186fb9618ffd168d800926201fb354e43b90d2cd6->leave($__internal_d0cb67fe8acb5564d322f93186fb9618ffd168d800926201fb354e43b90d2cd6_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8dc659abbfbe2b74b8a4bdd5481222cad47e53f5aadccf7689d92c28803f7434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc659abbfbe2b74b8a4bdd5481222cad47e53f5aadccf7689d92c28803f7434->enter($__internal_8dc659abbfbe2b74b8a4bdd5481222cad47e53f5aadccf7689d92c28803f7434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5dec53ee6f199ca948b83ec2e0041897117f37ec822a22f607d2dffe58b2da5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dec53ee6f199ca948b83ec2e0041897117f37ec822a22f607d2dffe58b2da5f->enter($__internal_5dec53ee6f199ca948b83ec2e0041897117f37ec822a22f607d2dffe58b2da5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5dec53ee6f199ca948b83ec2e0041897117f37ec822a22f607d2dffe58b2da5f->leave($__internal_5dec53ee6f199ca948b83ec2e0041897117f37ec822a22f607d2dffe58b2da5f_prof);

        
        $__internal_8dc659abbfbe2b74b8a4bdd5481222cad47e53f5aadccf7689d92c28803f7434->leave($__internal_8dc659abbfbe2b74b8a4bdd5481222cad47e53f5aadccf7689d92c28803f7434_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 68,  168 => 52,  152 => 23,  129 => 20,  124 => 15,  115 => 14,  103 => 69,  101 => 68,  84 => 53,  82 => 52,  79 => 51,  77 => 50,  68 => 43,  66 => 42,  50 => 30,  48 => 14,  45 => 13,  42 => 10,  38 => 8,  36 => 7,  28 => 1,);
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
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>{%- if block('title')-%}
            {{ block ('title') }} | Eshop.cz
            {%- else -%}
            Best shop | eshop.cz
            {%- endif -%}

        </title>
        {% block stylesheets %}
            {% stylesheets
                        'global/css/main.css'
                        'bundles/event/events.css'
                        filter='cssrewrite'
            %}
            <link rel=\"stylesheet\" href=\"{{asset_url}}\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            {% endstylesheets %}

            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
            <script src=\"/global/js/global.js\"></script>


        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />


    </head>
    <body>
        <div class=\"container-fluid maxWidth maxHeight\">

            <div class=\"row top-menu-height\"> 
            </div>
            <div class=\"row\">  

                <div class=\"col-sm-12 menu text-right\" >
                {% embed  'mobile-menu.html.twig' %}{% endembed %}

            </div>


        </div>

        <div class=\"row\" id=\"id_row_content\">  
        {% embed  'menu.html.twig' %}{% endembed %}
        <div class=\" col-sm-9 content\" id=\"id-content\">
        {% block body %}{% endblock %}
    </div>
</div>
<div class=\"row test\">  
    <div class=\" col-sm-12 footer text-center \" id=\"id-footer\">
        Made by Imbecile  in 2018!
    </div>
</div>
<script>
    \$(document).ready(function () {
        calculateContent();
    });
</script>
</div>

</div>
{% block javascripts %}{% endblock %}
</body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\eshop\\app/Resources\\views/base.html.twig");
    }
}


/* ::base.html.twig */
class __TwigTemplate_fe856e838cf8dc4e7d0d0dc093060f3a2667e599e4965785e499e16520d1f243_313447444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 42
        $this->parent = $this->loadTemplate("mobile-menu.html.twig", "::base.html.twig", 42);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "mobile-menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f6906c0085b53f00b99bb10d59f97153a454ec3ad696ca804da64097a530254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6906c0085b53f00b99bb10d59f97153a454ec3ad696ca804da64097a530254->enter($__internal_0f6906c0085b53f00b99bb10d59f97153a454ec3ad696ca804da64097a530254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_40726fb30b292cdbac197ddad1a8ce60f33eaa3cb611a12ee8176df8312b31b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40726fb30b292cdbac197ddad1a8ce60f33eaa3cb611a12ee8176df8312b31b9->enter($__internal_40726fb30b292cdbac197ddad1a8ce60f33eaa3cb611a12ee8176df8312b31b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f6906c0085b53f00b99bb10d59f97153a454ec3ad696ca804da64097a530254->leave($__internal_0f6906c0085b53f00b99bb10d59f97153a454ec3ad696ca804da64097a530254_prof);

        
        $__internal_40726fb30b292cdbac197ddad1a8ce60f33eaa3cb611a12ee8176df8312b31b9->leave($__internal_40726fb30b292cdbac197ddad1a8ce60f33eaa3cb611a12ee8176df8312b31b9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 42,  185 => 68,  168 => 52,  152 => 23,  129 => 20,  124 => 15,  115 => 14,  103 => 69,  101 => 68,  84 => 53,  82 => 52,  79 => 51,  77 => 50,  68 => 43,  66 => 42,  50 => 30,  48 => 14,  45 => 13,  42 => 10,  38 => 8,  36 => 7,  28 => 1,);
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
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>{%- if block('title')-%}
            {{ block ('title') }} | Eshop.cz
            {%- else -%}
            Best shop | eshop.cz
            {%- endif -%}

        </title>
        {% block stylesheets %}
            {% stylesheets
                        'global/css/main.css'
                        'bundles/event/events.css'
                        filter='cssrewrite'
            %}
            <link rel=\"stylesheet\" href=\"{{asset_url}}\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            {% endstylesheets %}

            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
            <script src=\"/global/js/global.js\"></script>


        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />


    </head>
    <body>
        <div class=\"container-fluid maxWidth maxHeight\">

            <div class=\"row top-menu-height\"> 
            </div>
            <div class=\"row\">  

                <div class=\"col-sm-12 menu text-right\" >
                {% embed  'mobile-menu.html.twig' %}{% endembed %}

            </div>


        </div>

        <div class=\"row\" id=\"id_row_content\">  
        {% embed  'menu.html.twig' %}{% endembed %}
        <div class=\" col-sm-9 content\" id=\"id-content\">
        {% block body %}{% endblock %}
    </div>
</div>
<div class=\"row test\">  
    <div class=\" col-sm-12 footer text-center \" id=\"id-footer\">
        Made by Imbecile  in 2018!
    </div>
</div>
<script>
    \$(document).ready(function () {
        calculateContent();
    });
</script>
</div>

</div>
{% block javascripts %}{% endblock %}
</body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\eshop\\app/Resources\\views/base.html.twig");
    }
}


/* ::base.html.twig */
class __TwigTemplate_fe856e838cf8dc4e7d0d0dc093060f3a2667e599e4965785e499e16520d1f243_1360344616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 50
        $this->parent = $this->loadTemplate("menu.html.twig", "::base.html.twig", 50);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55bf86f515fdd05308c611e0335a80ad77364259aa34a65d98dc1d5ad5a33625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55bf86f515fdd05308c611e0335a80ad77364259aa34a65d98dc1d5ad5a33625->enter($__internal_55bf86f515fdd05308c611e0335a80ad77364259aa34a65d98dc1d5ad5a33625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5b08eed2178482f30d744576de3e4a63213e7af87e9a3536edb42a091b3b0d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b08eed2178482f30d744576de3e4a63213e7af87e9a3536edb42a091b3b0d11->enter($__internal_5b08eed2178482f30d744576de3e4a63213e7af87e9a3536edb42a091b3b0d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55bf86f515fdd05308c611e0335a80ad77364259aa34a65d98dc1d5ad5a33625->leave($__internal_55bf86f515fdd05308c611e0335a80ad77364259aa34a65d98dc1d5ad5a33625_prof);

        
        $__internal_5b08eed2178482f30d744576de3e4a63213e7af87e9a3536edb42a091b3b0d11->leave($__internal_5b08eed2178482f30d744576de3e4a63213e7af87e9a3536edb42a091b3b0d11_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 50,  309 => 42,  185 => 68,  168 => 52,  152 => 23,  129 => 20,  124 => 15,  115 => 14,  103 => 69,  101 => 68,  84 => 53,  82 => 52,  79 => 51,  77 => 50,  68 => 43,  66 => 42,  50 => 30,  48 => 14,  45 => 13,  42 => 10,  38 => 8,  36 => 7,  28 => 1,);
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
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>{%- if block('title')-%}
            {{ block ('title') }} | Eshop.cz
            {%- else -%}
            Best shop | eshop.cz
            {%- endif -%}

        </title>
        {% block stylesheets %}
            {% stylesheets
                        'global/css/main.css'
                        'bundles/event/events.css'
                        filter='cssrewrite'
            %}
            <link rel=\"stylesheet\" href=\"{{asset_url}}\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            {% endstylesheets %}

            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
            <script src=\"/global/js/global.js\"></script>


        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />


    </head>
    <body>
        <div class=\"container-fluid maxWidth maxHeight\">

            <div class=\"row top-menu-height\"> 
            </div>
            <div class=\"row\">  

                <div class=\"col-sm-12 menu text-right\" >
                {% embed  'mobile-menu.html.twig' %}{% endembed %}

            </div>


        </div>

        <div class=\"row\" id=\"id_row_content\">  
        {% embed  'menu.html.twig' %}{% endembed %}
        <div class=\" col-sm-9 content\" id=\"id-content\">
        {% block body %}{% endblock %}
    </div>
</div>
<div class=\"row test\">  
    <div class=\" col-sm-12 footer text-center \" id=\"id-footer\">
        Made by Imbecile  in 2018!
    </div>
</div>
<script>
    \$(document).ready(function () {
        calculateContent();
    });
</script>
</div>

</div>
{% block javascripts %}{% endblock %}
</body>
</html>
", "::base.html.twig", "D:\\xampp\\htdocs\\eshop\\app/Resources\\views/base.html.twig");
    }
}
