<?php

/* ::akcja.html.twig */
class __TwigTemplate_e664132db276674e54d8cdc71b80dfef5f27431a540fa86e740f042fc5bf8dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::akcja.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
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
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "
    #info
    {
        text-align: center;
        position: relative;

    }

";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<div id=\"info\">Akcja została wykonana</div>
";
    }

    public function getTemplateName()
    {
        return "::akcja.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block css %}*/
/* */
/*     #info*/
/*     {*/
/*         text-align: center;*/
/*         position: relative;*/
/* */
/*     }*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* <div id="info">Akcja została wykonana</div>*/
/* {% endblock %}*/
/* */
