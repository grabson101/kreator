<?php

/* ::przejscie.html.twig */
class __TwigTemplate_2bd870e51839651dfe42ece9c30151ae3e8e054c9f6247fdf07b235f3e36f4c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::przejscie.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "::przejscie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
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
