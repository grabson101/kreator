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
        $__internal_ea246aac159b434c3a3bfab33c556d47f45c1c0b44101034a534c6f74f03cd07 = $this->env->getExtension("native_profiler");
        $__internal_ea246aac159b434c3a3bfab33c556d47f45c1c0b44101034a534c6f74f03cd07->enter($__internal_ea246aac159b434c3a3bfab33c556d47f45c1c0b44101034a534c6f74f03cd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea246aac159b434c3a3bfab33c556d47f45c1c0b44101034a534c6f74f03cd07->leave($__internal_ea246aac159b434c3a3bfab33c556d47f45c1c0b44101034a534c6f74f03cd07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29f12a39f7c9f37139dc07bee29ae97f487fd7bde6bb086656c5611dce6f6655 = $this->env->getExtension("native_profiler");
        $__internal_29f12a39f7c9f37139dc07bee29ae97f487fd7bde6bb086656c5611dce6f6655->enter($__internal_29f12a39f7c9f37139dc07bee29ae97f487fd7bde6bb086656c5611dce6f6655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_29f12a39f7c9f37139dc07bee29ae97f487fd7bde6bb086656c5611dce6f6655->leave($__internal_29f12a39f7c9f37139dc07bee29ae97f487fd7bde6bb086656c5611dce6f6655_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb341932b8f1d3059f06489714ee396214b26dff93a4b58d8f7066f6221acfd6 = $this->env->getExtension("native_profiler");
        $__internal_fb341932b8f1d3059f06489714ee396214b26dff93a4b58d8f7066f6221acfd6->enter($__internal_fb341932b8f1d3059f06489714ee396214b26dff93a4b58d8f7066f6221acfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fb341932b8f1d3059f06489714ee396214b26dff93a4b58d8f7066f6221acfd6->leave($__internal_fb341932b8f1d3059f06489714ee396214b26dff93a4b58d8f7066f6221acfd6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff9d627a9bc33b50dec32f8f7d0eb5b962906402c2cbd8bc0551654148fa25af = $this->env->getExtension("native_profiler");
        $__internal_ff9d627a9bc33b50dec32f8f7d0eb5b962906402c2cbd8bc0551654148fa25af->enter($__internal_ff9d627a9bc33b50dec32f8f7d0eb5b962906402c2cbd8bc0551654148fa25af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ff9d627a9bc33b50dec32f8f7d0eb5b962906402c2cbd8bc0551654148fa25af->leave($__internal_ff9d627a9bc33b50dec32f8f7d0eb5b962906402c2cbd8bc0551654148fa25af_prof);

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
