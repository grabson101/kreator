<?php

/* uprawnieniaForm.html.twig */
class __TwigTemplate_bba674f78b8328b4b699d26fdd81b8be6457b0199c6e45366b8d54b0823c0029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "uprawnieniaForm.html.twig", 1);
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
        $__internal_f688d6a8842607b8425442d33a5c8d1b94f5d869a3b68d4b3c05f18b017c9fc8 = $this->env->getExtension("native_profiler");
        $__internal_f688d6a8842607b8425442d33a5c8d1b94f5d869a3b68d4b3c05f18b017c9fc8->enter($__internal_f688d6a8842607b8425442d33a5c8d1b94f5d869a3b68d4b3c05f18b017c9fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "uprawnieniaForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f688d6a8842607b8425442d33a5c8d1b94f5d869a3b68d4b3c05f18b017c9fc8->leave($__internal_f688d6a8842607b8425442d33a5c8d1b94f5d869a3b68d4b3c05f18b017c9fc8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c00ac34e459810763da914d91a524dd7c59a77eab7bf5db72047562b083ae0f2 = $this->env->getExtension("native_profiler");
        $__internal_c00ac34e459810763da914d91a524dd7c59a77eab7bf5db72047562b083ae0f2->enter($__internal_c00ac34e459810763da914d91a524dd7c59a77eab7bf5db72047562b083ae0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  <div class=\"container\">
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("dodawanieUprawnien");
        echo "\" method=\"post\" name=\"form\" id=\"form\" role=\"form\">
     <div class=\"form-group\">
       <label for=\"uprawnienie\">Nazwa:</label>
       <input type=\"text\" class=\"form-control\" name=\"uprawnienie\" id=\"uprawnienie\">
     </div>
     <div class=\"form-group\">
       <label for=\"minimum\">Minimum:</label>
       <input type=\"number\" min=\"0\" class=\"form-control\" name=\"minimum\" id=\"minimum\">
     </div>
     <div class=\"form-group\">
       <label for=\"dodaj\"> </label>
       <input id=\"dodaj\" type=\"submit\" class=\"btn btn-default\" value=\"Dodaj\"></input>
     </div>
    </form>
  </div>
";
        
        $__internal_c00ac34e459810763da914d91a524dd7c59a77eab7bf5db72047562b083ae0f2->leave($__internal_c00ac34e459810763da914d91a524dd7c59a77eab7bf5db72047562b083ae0f2_prof);

    }

    public function getTemplateName()
    {
        return "uprawnieniaForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*   <div class="container">*/
/*     <form action="{{ path('dodawanieUprawnien')}}" method="post" name="form" id="form" role="form">*/
/*      <div class="form-group">*/
/*        <label for="uprawnienie">Nazwa:</label>*/
/*        <input type="text" class="form-control" name="uprawnienie" id="uprawnienie">*/
/*      </div>*/
/*      <div class="form-group">*/
/*        <label for="minimum">Minimum:</label>*/
/*        <input type="number" min="0" class="form-control" name="minimum" id="minimum">*/
/*      </div>*/
/*      <div class="form-group">*/
/*        <label for="dodaj"> </label>*/
/*        <input id="dodaj" type="submit" class="btn btn-default" value="Dodaj"></input>*/
/*      </div>*/
/*     </form>*/
/*   </div>*/
/* {% endblock %}*/
/* */
