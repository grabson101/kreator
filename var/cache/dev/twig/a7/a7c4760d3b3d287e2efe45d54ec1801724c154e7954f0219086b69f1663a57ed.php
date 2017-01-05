<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1656f35da2a1c8b72dc7b6e2d52b562ae68865d14a50ab92d3754fe6611a2032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5542a631ddbf8984e52e9ba6aa8ad74952799a31f56f5b07fd5ceb090fa1883 = $this->env->getExtension("native_profiler");
        $__internal_f5542a631ddbf8984e52e9ba6aa8ad74952799a31f56f5b07fd5ceb090fa1883->enter($__internal_f5542a631ddbf8984e52e9ba6aa8ad74952799a31f56f5b07fd5ceb090fa1883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5542a631ddbf8984e52e9ba6aa8ad74952799a31f56f5b07fd5ceb090fa1883->leave($__internal_f5542a631ddbf8984e52e9ba6aa8ad74952799a31f56f5b07fd5ceb090fa1883_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3388b2ef510770fdb14702cb872c60e04c463f6032b4ea5ea347adfb76af0bf8 = $this->env->getExtension("native_profiler");
        $__internal_3388b2ef510770fdb14702cb872c60e04c463f6032b4ea5ea347adfb76af0bf8->enter($__internal_3388b2ef510770fdb14702cb872c60e04c463f6032b4ea5ea347adfb76af0bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3388b2ef510770fdb14702cb872c60e04c463f6032b4ea5ea347adfb76af0bf8->leave($__internal_3388b2ef510770fdb14702cb872c60e04c463f6032b4ea5ea347adfb76af0bf8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ad7a9dde7c171b1b0d0913d961ef50690cf7d86c26fc537d23e0034d43e51c6 = $this->env->getExtension("native_profiler");
        $__internal_8ad7a9dde7c171b1b0d0913d961ef50690cf7d86c26fc537d23e0034d43e51c6->enter($__internal_8ad7a9dde7c171b1b0d0913d961ef50690cf7d86c26fc537d23e0034d43e51c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ad7a9dde7c171b1b0d0913d961ef50690cf7d86c26fc537d23e0034d43e51c6->leave($__internal_8ad7a9dde7c171b1b0d0913d961ef50690cf7d86c26fc537d23e0034d43e51c6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_600eee16b6a00b9a5ab420ca7e785ec42e50d55ccb702153dfee771345b9ebef = $this->env->getExtension("native_profiler");
        $__internal_600eee16b6a00b9a5ab420ca7e785ec42e50d55ccb702153dfee771345b9ebef->enter($__internal_600eee16b6a00b9a5ab420ca7e785ec42e50d55ccb702153dfee771345b9ebef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_600eee16b6a00b9a5ab420ca7e785ec42e50d55ccb702153dfee771345b9ebef->leave($__internal_600eee16b6a00b9a5ab420ca7e785ec42e50d55ccb702153dfee771345b9ebef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
