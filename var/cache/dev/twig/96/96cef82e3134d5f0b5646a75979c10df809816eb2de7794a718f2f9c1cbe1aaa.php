<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8b138ae9ba76b421123458668aa776d6ae9079d1dab78879639ab12c497286b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c72e37c779e7342320c0da40b7496f87b79e681f522306c16f4509556d1681a1 = $this->env->getExtension("native_profiler");
        $__internal_c72e37c779e7342320c0da40b7496f87b79e681f522306c16f4509556d1681a1->enter($__internal_c72e37c779e7342320c0da40b7496f87b79e681f522306c16f4509556d1681a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c72e37c779e7342320c0da40b7496f87b79e681f522306c16f4509556d1681a1->leave($__internal_c72e37c779e7342320c0da40b7496f87b79e681f522306c16f4509556d1681a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12dff2a355b652aa764795644f6ba3184d98d42cef290c47a5d1eaf1a5e284a7 = $this->env->getExtension("native_profiler");
        $__internal_12dff2a355b652aa764795644f6ba3184d98d42cef290c47a5d1eaf1a5e284a7->enter($__internal_12dff2a355b652aa764795644f6ba3184d98d42cef290c47a5d1eaf1a5e284a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_12dff2a355b652aa764795644f6ba3184d98d42cef290c47a5d1eaf1a5e284a7->leave($__internal_12dff2a355b652aa764795644f6ba3184d98d42cef290c47a5d1eaf1a5e284a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4969b9d337898643b16ff7d1213097e9f8c715362439d81883706f8aa28bf6a = $this->env->getExtension("native_profiler");
        $__internal_d4969b9d337898643b16ff7d1213097e9f8c715362439d81883706f8aa28bf6a->enter($__internal_d4969b9d337898643b16ff7d1213097e9f8c715362439d81883706f8aa28bf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4969b9d337898643b16ff7d1213097e9f8c715362439d81883706f8aa28bf6a->leave($__internal_d4969b9d337898643b16ff7d1213097e9f8c715362439d81883706f8aa28bf6a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96c08b6b05d863778eb213818f224750aa3ebd2cc8a72033b0a35f44904860df = $this->env->getExtension("native_profiler");
        $__internal_96c08b6b05d863778eb213818f224750aa3ebd2cc8a72033b0a35f44904860df->enter($__internal_96c08b6b05d863778eb213818f224750aa3ebd2cc8a72033b0a35f44904860df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_96c08b6b05d863778eb213818f224750aa3ebd2cc8a72033b0a35f44904860df->leave($__internal_96c08b6b05d863778eb213818f224750aa3ebd2cc8a72033b0a35f44904860df_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
