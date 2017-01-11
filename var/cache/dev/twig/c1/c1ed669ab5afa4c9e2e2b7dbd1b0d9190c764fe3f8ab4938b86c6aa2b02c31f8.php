<?php

/* wyswietleniePolrocza.html.twig */
class __TwigTemplate_0fe23db97376b04c88eb49aea65f233e509dfc69497fb8e5a69bb05233a70e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wyswietleniePolrocza.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2932511663340f8b65c0de27d47c706813a1337a2f9e14173e574e7807445ab9 = $this->env->getExtension("native_profiler");
        $__internal_2932511663340f8b65c0de27d47c706813a1337a2f9e14173e574e7807445ab9->enter($__internal_2932511663340f8b65c0de27d47c706813a1337a2f9e14173e574e7807445ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wyswietleniePolrocza.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2932511663340f8b65c0de27d47c706813a1337a2f9e14173e574e7807445ab9->leave($__internal_2932511663340f8b65c0de27d47c706813a1337a2f9e14173e574e7807445ab9_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9e7577e305b02acdbc14150cb71a6875520eef73fba033acb20fb1d32106082 = $this->env->getExtension("native_profiler");
        $__internal_f9e7577e305b02acdbc14150cb71a6875520eef73fba033acb20fb1d32106082->enter($__internal_f9e7577e305b02acdbc14150cb71a6875520eef73fba033acb20fb1d32106082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "338dc08_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_338dc08_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/338dc08_wyswietlanieApp_1.js");
            // line 5
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "338dc08"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_338dc08") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/338dc08.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "  ";
        
        $__internal_f9e7577e305b02acdbc14150cb71a6875520eef73fba033acb20fb1d32106082->leave($__internal_f9e7577e305b02acdbc14150cb71a6875520eef73fba033acb20fb1d32106082_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cab97735723acfd63b4ab0e5880bed670b6a255fa662094feeee5b730c26fe8 = $this->env->getExtension("native_profiler");
        $__internal_6cab97735723acfd63b4ab0e5880bed670b6a255fa662094feeee5b730c26fe8->enter($__internal_6cab97735723acfd63b4ab0e5880bed670b6a255fa662094feeee5b730c26fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"container\" id=\"zawartosc\"  ng-app=\"myApp\" ng-controller=\"strazacyCtrl\">
<h1 id=\"rok\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["rok"]) ? $context["rok"] : $this->getContext($context, "rok")), "html", null, true);
        echo "</h1>
  <div ng-repeat=\"miesiac in miesiace\">
      <h2 ng-bind=\"showMonthName(\$index)\"></h2>
    <table class=\"table table-striped table-bordered \" id=\"dni\">
      <thead>
      <tr>
          <th>Imię i nazwisko</th>
          <th ng-repeat=\"a in range(\$index) track by \$index\" ng-bind=\"\$index+1\"></th>
      </tr>
  </thead>
      <tr ng-repeat=\"strazacy in miesiac\">
        <td ng-bind=\"showName(strazacy.strazak)\"></td>
        <td ng-repeat=\"dzien in strazacy.dni\" ng-bind=\"dzien.Ilosc_godzin\"></td>
      <tr>
    </table>
  </div>
 <p ng-bind=\"heh\"></p>
    <p id=\"polowaRoku\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["polowaRoku"]) ? $context["polowaRoku"] : $this->getContext($context, "polowaRoku")), "html", null, true);
        echo "</p>

</div>

";
        
        $__internal_6cab97735723acfd63b4ab0e5880bed670b6a255fa662094feeee5b730c26fe8->leave($__internal_6cab97735723acfd63b4ab0e5880bed670b6a255fa662094feeee5b730c26fe8_prof);

    }

    public function getTemplateName()
    {
        return "wyswietleniePolrocza.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  78 => 11,  75 => 10,  69 => 9,  62 => 7,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>*/
/*     {% javascripts '@AppBundle/Resources/public/js/angular/wyswietlanieApp.js' %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*   {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container" id="zawartosc"  ng-app="myApp" ng-controller="strazacyCtrl">*/
/* <h1 id="rok">{{ rok }}</h1>*/
/*   <div ng-repeat="miesiac in miesiace">*/
/*       <h2 ng-bind="showMonthName($index)"></h2>*/
/*     <table class="table table-striped table-bordered " id="dni">*/
/*       <thead>*/
/*       <tr>*/
/*           <th>Imię i nazwisko</th>*/
/*           <th ng-repeat="a in range($index) track by $index" ng-bind="$index+1"></th>*/
/*       </tr>*/
/*   </thead>*/
/*       <tr ng-repeat="strazacy in miesiac">*/
/*         <td ng-bind="showName(strazacy.strazak)"></td>*/
/*         <td ng-repeat="dzien in strazacy.dni" ng-bind="dzien.Ilosc_godzin"></td>*/
/*       <tr>*/
/*     </table>*/
/*   </div>*/
/*  <p ng-bind="heh"></p>*/
/*     <p id="polowaRoku">{{ polowaRoku }}</p>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
