<?php

/* formularzTworzenie.php.twig */
class __TwigTemplate_82878d16c7bc967bf80875e2066cd297baa913b28e422ee7baf1752f46adf2cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formularzTworzenie.php.twig", 1);
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
        $__internal_f0d76a402df39376f6e0efac267939dabf79ab76d718e77703cd5bbae7ecb3ad = $this->env->getExtension("native_profiler");
        $__internal_f0d76a402df39376f6e0efac267939dabf79ab76d718e77703cd5bbae7ecb3ad->enter($__internal_f0d76a402df39376f6e0efac267939dabf79ab76d718e77703cd5bbae7ecb3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formularzTworzenie.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0d76a402df39376f6e0efac267939dabf79ab76d718e77703cd5bbae7ecb3ad->leave($__internal_f0d76a402df39376f6e0efac267939dabf79ab76d718e77703cd5bbae7ecb3ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_130369f2835bc545ba651ae22991c5819a25e328cd3a5ea3b6f192f808e2f69e = $this->env->getExtension("native_profiler");
        $__internal_130369f2835bc545ba651ae22991c5819a25e328cd3a5ea3b6f192f808e2f69e->enter($__internal_130369f2835bc545ba651ae22991c5819a25e328cd3a5ea3b6f192f808e2f69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <div class=\"container\">

        <form class=\"form\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("generateOneAfterOne", array("redirected" => 1));
        echo "\" method=\"post\" name=\"form\" id=\"form\" role=\"form\">
            <div class=\"radio\">
                <label><input type=\"radio\" name=\"miesiac\" id=\"miesiac\" value=\"1\" checked>Pierwsza połowa roku</label>
            </div>
            <div class=\"radio\">
            <label><input type=\"radio\" name=\"miesiac\" id=\"miesiac\" value=\"7\" >Druga połowa roku</label>
            </div>
            <div class=\"form-group\">
                <label for=\"rok\">Rok:</label>
                <input type=\"number\" value=\"2016\" min=\"2015\" class=\"form-control\" name=\"rok\" id=\"rok\" >
            </div>
            <fieldset class=\"form-group row\">
              <legend class=\"col-form-legend col-sm-4\">Wybierz ilośc godzin w ostatnim dniu poprzedniego półrocza</legend>
            <div class=\"form-group\">
                <label class=\"radio-inline\"><input type=\"radio\" name=\"ostatniDzien\" value=\"0\">0 Godzin</label>
                <label class=\"radio-inline\"><input type=\"radio\" name=\"ostatniDzien\" value=\"8\">8 Godzin</label>
                <label class=\"radio-inline\"><input type=\"radio\" name=\"ostatniDzien\" value=\"16\">16 Godzin</label>
            </div>
            </fieldset>
            <div class=\"form-group\">
                <label for=\"iloscGodzin\">Ilość godzin w miesiącu:</label>
                <input type=\"number\" value=\"170\" min=\"1\" class=\"form-control\" id=\"iloscGodzin\" name=\"iloscGodzin\" placeholder=\"Ilość godzin\">
            </div>


            <button id=\"stworz\" type=\"submit\" class=\"btn btn-default\">Submit</button>
    </form>

 </div>

";
        
        $__internal_130369f2835bc545ba651ae22991c5819a25e328cd3a5ea3b6f192f808e2f69e->leave($__internal_130369f2835bc545ba651ae22991c5819a25e328cd3a5ea3b6f192f808e2f69e_prof);

    }

    public function getTemplateName()
    {
        return "formularzTworzenie.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*  <div class="container">*/
/* */
/*         <form class="form" action="{{ path('generateOneAfterOne',{'redirected':1} ) }}" method="post" name="form" id="form" role="form">*/
/*             <div class="radio">*/
/*                 <label><input type="radio" name="miesiac" id="miesiac" value="1" checked>Pierwsza połowa roku</label>*/
/*             </div>*/
/*             <div class="radio">*/
/*             <label><input type="radio" name="miesiac" id="miesiac" value="7" >Druga połowa roku</label>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label for="rok">Rok:</label>*/
/*                 <input type="number" value="2016" min="2015" class="form-control" name="rok" id="rok" >*/
/*             </div>*/
/*             <fieldset class="form-group row">*/
/*               <legend class="col-form-legend col-sm-4">Wybierz ilośc godzin w ostatnim dniu poprzedniego półrocza</legend>*/
/*             <div class="form-group">*/
/*                 <label class="radio-inline"><input type="radio" name="ostatniDzien" value="0">0 Godzin</label>*/
/*                 <label class="radio-inline"><input type="radio" name="ostatniDzien" value="8">8 Godzin</label>*/
/*                 <label class="radio-inline"><input type="radio" name="ostatniDzien" value="16">16 Godzin</label>*/
/*             </div>*/
/*             </fieldset>*/
/*             <div class="form-group">*/
/*                 <label for="iloscGodzin">Ilość godzin w miesiącu:</label>*/
/*                 <input type="number" value="170" min="1" class="form-control" id="iloscGodzin" name="iloscGodzin" placeholder="Ilość godzin">*/
/*             </div>*/
/* */
/* */
/*             <button id="stworz" type="submit" class="btn btn-default">Submit</button>*/
/*     </form>*/
/* */
/*  </div>*/
/* */
/* {% endblock %}*/
/* */
