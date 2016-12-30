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
        $__internal_c55bff45c48cdf89dd979584b3a18022af2a364e564d98a30d11bdb991a71ef5 = $this->env->getExtension("native_profiler");
        $__internal_c55bff45c48cdf89dd979584b3a18022af2a364e564d98a30d11bdb991a71ef5->enter($__internal_c55bff45c48cdf89dd979584b3a18022af2a364e564d98a30d11bdb991a71ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formularzTworzenie.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c55bff45c48cdf89dd979584b3a18022af2a364e564d98a30d11bdb991a71ef5->leave($__internal_c55bff45c48cdf89dd979584b3a18022af2a364e564d98a30d11bdb991a71ef5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6494709ae37b446ed8659556ad1606996d5e2d2905f6a83fbeeed6de2551b55 = $this->env->getExtension("native_profiler");
        $__internal_c6494709ae37b446ed8659556ad1606996d5e2d2905f6a83fbeeed6de2551b55->enter($__internal_c6494709ae37b446ed8659556ad1606996d5e2d2905f6a83fbeeed6de2551b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c6494709ae37b446ed8659556ad1606996d5e2d2905f6a83fbeeed6de2551b55->leave($__internal_c6494709ae37b446ed8659556ad1606996d5e2d2905f6a83fbeeed6de2551b55_prof);

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
