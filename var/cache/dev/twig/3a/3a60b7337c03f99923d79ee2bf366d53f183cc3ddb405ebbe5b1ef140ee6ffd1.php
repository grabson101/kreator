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
        $__internal_97b36f8eab5075acb03f4f9ba83a9a8a234ea97d743d0f6c3ba1739f5f056ffc = $this->env->getExtension("native_profiler");
        $__internal_97b36f8eab5075acb03f4f9ba83a9a8a234ea97d743d0f6c3ba1739f5f056ffc->enter($__internal_97b36f8eab5075acb03f4f9ba83a9a8a234ea97d743d0f6c3ba1739f5f056ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "formularzTworzenie.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97b36f8eab5075acb03f4f9ba83a9a8a234ea97d743d0f6c3ba1739f5f056ffc->leave($__internal_97b36f8eab5075acb03f4f9ba83a9a8a234ea97d743d0f6c3ba1739f5f056ffc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1048cea953e45ad79bcf5d14334b247a026586cf88d52662643c5e6ccda80cc1 = $this->env->getExtension("native_profiler");
        $__internal_1048cea953e45ad79bcf5d14334b247a026586cf88d52662643c5e6ccda80cc1->enter($__internal_1048cea953e45ad79bcf5d14334b247a026586cf88d52662643c5e6ccda80cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <div class=\"container\">

        <form class=\"form\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("generateOneAfterOne");
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
        
        $__internal_1048cea953e45ad79bcf5d14334b247a026586cf88d52662643c5e6ccda80cc1->leave($__internal_1048cea953e45ad79bcf5d14334b247a026586cf88d52662643c5e6ccda80cc1_prof);

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
/*         <form class="form" action="{{ path('generateOneAfterOne') }}" method="post" name="form" id="form" role="form">*/
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
