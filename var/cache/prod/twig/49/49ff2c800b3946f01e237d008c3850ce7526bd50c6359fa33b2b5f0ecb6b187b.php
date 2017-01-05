<?php

/* ::formularzTworzenie.php.twig */
class __TwigTemplate_15acec21fef8d6c0dce10b3e2b703c85abf40f95969563dabfdefc60d2e2ea94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::formularzTworzenie.php.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "::formularzTworzenie.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
