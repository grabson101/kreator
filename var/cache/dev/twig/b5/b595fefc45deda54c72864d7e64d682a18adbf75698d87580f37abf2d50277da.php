<?php

/* uprawnienia.html.twig */
class __TwigTemplate_d96eebdfcd0fd17a931613744f1e98a737e330cd713c54bbc5da2e550d5e4014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "uprawnienia.html.twig", 1);
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
        $__internal_8999fb35a4073ae3e243be92c0f567d28f505f2caa8ebcdda8297ecdd38ffcc5 = $this->env->getExtension("native_profiler");
        $__internal_8999fb35a4073ae3e243be92c0f567d28f505f2caa8ebcdda8297ecdd38ffcc5->enter($__internal_8999fb35a4073ae3e243be92c0f567d28f505f2caa8ebcdda8297ecdd38ffcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "uprawnienia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8999fb35a4073ae3e243be92c0f567d28f505f2caa8ebcdda8297ecdd38ffcc5->leave($__internal_8999fb35a4073ae3e243be92c0f567d28f505f2caa8ebcdda8297ecdd38ffcc5_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_446c069d0e30f884844d83eac547f7decc4bf273c235a6ab0868cca9e8b02ed9 = $this->env->getExtension("native_profiler");
        $__internal_446c069d0e30f884844d83eac547f7decc4bf273c235a6ab0868cca9e8b02ed9->enter($__internal_446c069d0e30f884844d83eac547f7decc4bf273c235a6ab0868cca9e8b02ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  <div class=\"container\">
    <form  method=\"post\" name=\"form\" id=\"form\" role=\"form\">
     <div class=\"form-group col-xs-5\">
       <label for=\"uprawnienie\">Nazwa:</label>
       <input type=\"text\" class=\"form-control\" id=\"uprawnienie\">
     </div>
     <div class=\"form-group col-xs-2\">
       <label for=\"minimum\">Minimum:</label>
       <input type=\"number\" min=\"0\" class=\"form-control\" id=\"minimum\">
     </div>
     <br>
     <button id=\"dodaj\" type=\"submit\" class=\"btn btn-default\">Dodaj</button>
    </form>
  </div>
";
        
        $__internal_446c069d0e30f884844d83eac547f7decc4bf273c235a6ab0868cca9e8b02ed9->leave($__internal_446c069d0e30f884844d83eac547f7decc4bf273c235a6ab0868cca9e8b02ed9_prof);

    }

    public function getTemplateName()
    {
        return "uprawnienia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*   <div class="container">*/
/*     <form  method="post" name="form" id="form" role="form">*/
/*      <div class="form-group col-xs-5">*/
/*        <label for="uprawnienie">Nazwa:</label>*/
/*        <input type="text" class="form-control" id="uprawnienie">*/
/*      </div>*/
/*      <div class="form-group col-xs-2">*/
/*        <label for="minimum">Minimum:</label>*/
/*        <input type="number" min="0" class="form-control" id="minimum">*/
/*      </div>*/
/*      <br>*/
/*      <button id="dodaj" type="submit" class="btn btn-default">Dodaj</button>*/
/*     </form>*/
/*   </div>*/
/* {% endblock %}*/
/* */
