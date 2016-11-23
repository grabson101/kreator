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
        $__internal_dd5a1d6022cfe8fe29cf2ffd849701a8ac639cac12ce22080ed401351d1270cc = $this->env->getExtension("native_profiler");
        $__internal_dd5a1d6022cfe8fe29cf2ffd849701a8ac639cac12ce22080ed401351d1270cc->enter($__internal_dd5a1d6022cfe8fe29cf2ffd849701a8ac639cac12ce22080ed401351d1270cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd5a1d6022cfe8fe29cf2ffd849701a8ac639cac12ce22080ed401351d1270cc->leave($__internal_dd5a1d6022cfe8fe29cf2ffd849701a8ac639cac12ce22080ed401351d1270cc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08a4bb434a76b583b6169128fdff2523f224035383bb4781c1bd98112186366f = $this->env->getExtension("native_profiler");
        $__internal_08a4bb434a76b583b6169128fdff2523f224035383bb4781c1bd98112186366f->enter($__internal_08a4bb434a76b583b6169128fdff2523f224035383bb4781c1bd98112186366f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08a4bb434a76b583b6169128fdff2523f224035383bb4781c1bd98112186366f->leave($__internal_08a4bb434a76b583b6169128fdff2523f224035383bb4781c1bd98112186366f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5db20e317765e198a2c50a740c9ac2033b2bf790a423c3576d709267cc3c829c = $this->env->getExtension("native_profiler");
        $__internal_5db20e317765e198a2c50a740c9ac2033b2bf790a423c3576d709267cc3c829c->enter($__internal_5db20e317765e198a2c50a740c9ac2033b2bf790a423c3576d709267cc3c829c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5db20e317765e198a2c50a740c9ac2033b2bf790a423c3576d709267cc3c829c->leave($__internal_5db20e317765e198a2c50a740c9ac2033b2bf790a423c3576d709267cc3c829c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f756dfe247f24bcd17f4079a2d7086336cf02635f0b1016e3a9040b3853d7dc9 = $this->env->getExtension("native_profiler");
        $__internal_f756dfe247f24bcd17f4079a2d7086336cf02635f0b1016e3a9040b3853d7dc9->enter($__internal_f756dfe247f24bcd17f4079a2d7086336cf02635f0b1016e3a9040b3853d7dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f756dfe247f24bcd17f4079a2d7086336cf02635f0b1016e3a9040b3853d7dc9->leave($__internal_f756dfe247f24bcd17f4079a2d7086336cf02635f0b1016e3a9040b3853d7dc9_prof);

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
