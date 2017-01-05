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
        $__internal_02f7b9e3e46fda011b41bf09149e1a1f3704e661ef063a66d3447ab7443bf970 = $this->env->getExtension("native_profiler");
        $__internal_02f7b9e3e46fda011b41bf09149e1a1f3704e661ef063a66d3447ab7443bf970->enter($__internal_02f7b9e3e46fda011b41bf09149e1a1f3704e661ef063a66d3447ab7443bf970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "przejscie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02f7b9e3e46fda011b41bf09149e1a1f3704e661ef063a66d3447ab7443bf970->leave($__internal_02f7b9e3e46fda011b41bf09149e1a1f3704e661ef063a66d3447ab7443bf970_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dbff059889ae12dfe58861d5385483034f2243dfb5be0fc9d8c25ad8fcebe6d = $this->env->getExtension("native_profiler");
        $__internal_0dbff059889ae12dfe58861d5385483034f2243dfb5be0fc9d8c25ad8fcebe6d->enter($__internal_0dbff059889ae12dfe58861d5385483034f2243dfb5be0fc9d8c25ad8fcebe6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div>
    Czy chcesz kontynuować przydzielanie harmonogramu?
    <a type=\"button\" class=\"btn btn-sm btn-default\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("generateOneAfterOne");
        echo "\" >Tak</a>
    <a type=\"button\" class=\"btn btn-sm btn-default\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" >Nie</a>
    </div>
</div>

";
        
        $__internal_0dbff059889ae12dfe58861d5385483034f2243dfb5be0fc9d8c25ad8fcebe6d->leave($__internal_0dbff059889ae12dfe58861d5385483034f2243dfb5be0fc9d8c25ad8fcebe6d_prof);

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
        return array (  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="container">*/
/*     <div>*/
/*     Czy chcesz kontynuować przydzielanie harmonogramu?*/
/*     <a type="button" class="btn btn-sm btn-default" href="{{ path('generateOneAfterOne') }}" >Tak</a>*/
/*     <a type="button" class="btn btn-sm btn-default" href="{{ path('homepage') }}" >Nie</a>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
