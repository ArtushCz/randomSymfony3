<?php

/* EventBundle:Event:edit.html.twig */
class __TwigTemplate_4190f9a4e78df7f5e63e640c1c7a548161d30f89dc4e08fd24d464cafab8abbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EventBundle::layout.html.twig", "EventBundle:Event:edit.html.twig", 1);
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
        $__internal_460a3608360623ad429126db8a307aff840a0a9d40ad8cf399248751600aaf49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_460a3608360623ad429126db8a307aff840a0a9d40ad8cf399248751600aaf49->enter($__internal_460a3608360623ad429126db8a307aff840a0a9d40ad8cf399248751600aaf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:edit.html.twig"));

        $__internal_fdf8c952d5aa98b8881835aec37537263de60419b50fb15b66b2cee27dcd3922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf8c952d5aa98b8881835aec37537263de60419b50fb15b66b2cee27dcd3922->enter($__internal_fdf8c952d5aa98b8881835aec37537263de60419b50fb15b66b2cee27dcd3922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Event:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_460a3608360623ad429126db8a307aff840a0a9d40ad8cf399248751600aaf49->leave($__internal_460a3608360623ad429126db8a307aff840a0a9d40ad8cf399248751600aaf49_prof);

        
        $__internal_fdf8c952d5aa98b8881835aec37537263de60419b50fb15b66b2cee27dcd3922->leave($__internal_fdf8c952d5aa98b8881835aec37537263de60419b50fb15b66b2cee27dcd3922_prof);

    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $__internal_8c48045bf1998870129738076ecf12bb01cb98826028f58f73e461d8f97429e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c48045bf1998870129738076ecf12bb01cb98826028f58f73e461d8f97429e1->enter($__internal_8c48045bf1998870129738076ecf12bb01cb98826028f58f73e461d8f97429e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_1f6dbda55c60d7772fd5c411e72823befe2f55b458cb9a1e00c6cfc0c89d1d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f6dbda55c60d7772fd5c411e72823befe2f55b458cb9a1e00c6cfc0c89d1d75->enter($__internal_1f6dbda55c60d7772fd5c411e72823befe2f55b458cb9a1e00c6cfc0c89d1d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "    <div class=\"my-h1\"> Event edit</div> ";
        
        $__internal_1f6dbda55c60d7772fd5c411e72823befe2f55b458cb9a1e00c6cfc0c89d1d75->leave($__internal_1f6dbda55c60d7772fd5c411e72823befe2f55b458cb9a1e00c6cfc0c89d1d75_prof);

        
        $__internal_8c48045bf1998870129738076ecf12bb01cb98826028f58f73e461d8f97429e1->leave($__internal_8c48045bf1998870129738076ecf12bb01cb98826028f58f73e461d8f97429e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_12529ac8982bb42fd33702fb1b6ac192d0a1573a6faeddba374e9ff63d9d8752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12529ac8982bb42fd33702fb1b6ac192d0a1573a6faeddba374e9ff63d9d8752->enter($__internal_12529ac8982bb42fd33702fb1b6ac192d0a1573a6faeddba374e9ff63d9d8752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72dce64c170ab35e402925303e8e60a4586003628fc33b21e057437219713a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72dce64c170ab35e402925303e8e60a4586003628fc33b21e057437219713a50->enter($__internal_72dce64c170ab35e402925303e8e60a4586003628fc33b21e057437219713a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"form-group\">
        ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\"  class=\"btn btn-default btnmargin\"  value=\"Edit\" />
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
         ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\"  class=\"btn btn-default btnmargin\"  value=\"Delete\">
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    </div>
   
";
        
        $__internal_72dce64c170ab35e402925303e8e60a4586003628fc33b21e057437219713a50->leave($__internal_72dce64c170ab35e402925303e8e60a4586003628fc33b21e057437219713a50_prof);

        
        $__internal_12529ac8982bb42fd33702fb1b6ac192d0a1573a6faeddba374e9ff63d9d8752->leave($__internal_12529ac8982bb42fd33702fb1b6ac192d0a1573a6faeddba374e9ff63d9d8752_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Event:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 12,  85 => 10,  81 => 9,  76 => 7,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
 {% block header %}    <div class=\"my-h1\"> Event edit</div> {% endblock %}
{% block body %}

    <div class=\"form-group\">
        {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\"  class=\"btn btn-default btnmargin\"  value=\"Edit\" />
        {{ form_end(edit_form) }}
         {{ form_start(delete_form) }}
        <input type=\"submit\"  class=\"btn btn-default btnmargin\"  value=\"Delete\">
        {{ form_end(delete_form) }}
    </div>
   
{% endblock %}
", "EventBundle:Event:edit.html.twig", "D:\\xampp\\htdocs\\eshop\\src\\EventBundle/Resources/views/Event/edit.html.twig");
    }
}
