<?php

/* przejscie.html.twig */
class __TwigTemplate_1685b164d3f20758ee48c3ee0982d35dd4e43f2c985bcd63ce70a7bbde6eb976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "przejscie.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47b53ffaa0f832608b58a7eb3dfe376453a27335b4b558a674ff7cae4d2eccd3 = $this->env->getExtension("native_profiler");
        $__internal_47b53ffaa0f832608b58a7eb3dfe376453a27335b4b558a674ff7cae4d2eccd3->enter($__internal_47b53ffaa0f832608b58a7eb3dfe376453a27335b4b558a674ff7cae4d2eccd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "przejscie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b53ffaa0f832608b58a7eb3dfe376453a27335b4b558a674ff7cae4d2eccd3->leave($__internal_47b53ffaa0f832608b58a7eb3dfe376453a27335b4b558a674ff7cae4d2eccd3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_24fa4fff64da21edb9bb5d6a0e51be3a767b253a110979c79859f0c3a00dea96 = $this->env->getExtension("native_profiler");
        $__internal_24fa4fff64da21edb9bb5d6a0e51be3a767b253a110979c79859f0c3a00dea96->enter($__internal_24fa4fff64da21edb9bb5d6a0e51be3a767b253a110979c79859f0c3a00dea96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div>
Czy chcesz kontynuować przydzielanie harmonogramu?
<a type=\"button\" class=\"btn btn-sm btn-default\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("generateOneAfterOne");
        echo "\" >Tak</a>
<a type=\"button\" class=\"btn btn-sm btn-default\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" >Nie</a>
</div>


";
        
        $__internal_24fa4fff64da21edb9bb5d6a0e51be3a767b253a110979c79859f0c3a00dea96->leave($__internal_24fa4fff64da21edb9bb5d6a0e51be3a767b253a110979c79859f0c3a00dea96_prof);

    }

    public function getTemplateName()
    {
        return "przejscie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div>*/
/* Czy chcesz kontynuować przydzielanie harmonogramu?*/
/* <a type="button" class="btn btn-sm btn-default" href="{{ path('generateOneAfterOne') }}" >Tak</a>*/
/* <a type="button" class="btn btn-sm btn-default" href="{{ path('homepage') }}" >Nie</a>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
