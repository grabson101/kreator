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
        $__internal_5e7974916af3e119458278e3e57e580ab52655f9bda28c9bc2e383e224535596 = $this->env->getExtension("native_profiler");
        $__internal_5e7974916af3e119458278e3e57e580ab52655f9bda28c9bc2e383e224535596->enter($__internal_5e7974916af3e119458278e3e57e580ab52655f9bda28c9bc2e383e224535596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formularzTworzenie.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e7974916af3e119458278e3e57e580ab52655f9bda28c9bc2e383e224535596->leave($__internal_5e7974916af3e119458278e3e57e580ab52655f9bda28c9bc2e383e224535596_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67d36e8c1677a84dd4ddb272a117c0262e6ac3809a62ae340f4daae7adad1ce1 = $this->env->getExtension("native_profiler");
        $__internal_67d36e8c1677a84dd4ddb272a117c0262e6ac3809a62ae340f4daae7adad1ce1->enter($__internal_67d36e8c1677a84dd4ddb272a117c0262e6ac3809a62ae340f4daae7adad1ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

            <div class=\"form-group\">
                <label for=\"zmiana\">Zmiana:</label>
                <input type=\"number\" value=\"2\" min=\"1\" max=\"3\" class=\"form-control\" name=\"zmiana\" id=\"zmiana\" placeholder=\"Zmiana\">
            </div>
            <div class=\"form-group\">
                <label for=\"iloscGodzin\">Ilość godzin w miesiącu:</label>
                <input type=\"number\" value=\"170\" min=\"1\" class=\"form-control\" id=\"iloscGodzin\" name=\"iloscGodzin\" placeholder=\"Ilość godzin\">
            </div>


            <button id=\"stworz\" type=\"submit\" class=\"btn btn-default\">Submit</button>
    </form>

 </div>

";
        
        $__internal_67d36e8c1677a84dd4ddb272a117c0262e6ac3809a62ae340f4daae7adad1ce1->leave($__internal_67d36e8c1677a84dd4ddb272a117c0262e6ac3809a62ae340f4daae7adad1ce1_prof);

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
/* */
/*             <div class="form-group">*/
/*                 <label for="zmiana">Zmiana:</label>*/
/*                 <input type="number" value="2" min="1" max="3" class="form-control" name="zmiana" id="zmiana" placeholder="Zmiana">*/
/*             </div>*/
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
