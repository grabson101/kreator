<?php

/* ::edycja.html.twig */
class __TwigTemplate_355929a64c43c101b71675bf39e81c7570ce80a1afef799ba91a76bf891c4d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::edycja.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        // line 3
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8c9072d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c9072d_0") : $this->env->getExtension('asset')->getAssetUrl("js/8c9072d_edycjaApp_1.js");
            // line 5
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "8c9072d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c9072d") : $this->env->getExtension('asset')->getAssetUrl("js/8c9072d.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "  ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"container\" id=\"zawartosc\">
  <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["nazwaMiesiaca"]) ? $context["nazwaMiesiaca"] : null), "html", null, true);
        echo "</h1>
  <div ng-app=\"myApp\" ng-controller=\"strazacyCtrl\">
    <div class=\"panel-body table-responsive\">
    <table class=\"table table-striped table-bordered \" id=\"dni\">

            <tr ng-repeat=\"strazak in przydzialy\">
              <td ng-bind=\"(strazak.Imie)+' '+(strazak.Nazwisko)\" ></td>
              <td ng-bind=\"showStanowisko(strazak.Stanowisko)\"></td>
              <td ng-repeat=\"dzien in strazak.dni\" ng-bind=\"dzien.Ilosc_godzin | number:0\" ng-click=\"changeRow(dzien.Ilosc_godzin,\$parent.\$index,\$index);\"></td>
              <td ng-bind=\"countGodziny(\$index)\"></td>
              <td ng-bind=\"lasts(\$index)\"></td>
            </tr>
            <tr>
              <td>&nbsp;</td><td>Ilość ludzi</td><td ng-repeat=\"a in range() track by \$index\" ng-bind=\"countStrazacy(\$index)\"></td>
            </tr>
            <tr ng-repeat=\"stanowisko in stanowiska\">
              <td ng-bind=\"stanowisko.Nazwa\"><td>&nbsp;</td></td><td ng-repeat=\"a in range() track by \$index\" ng-bind=\"countStanowisko(stanowisko.ID,\$index)\"  ng-style=\"styleStanowiska(stanowisko.ID,\$index)\"></td>
            </tr>
            <tr ng-repeat=\"uprawnienie in uprawnienia\">
              <td ng-bind=\"uprawnienie.Nazwa\"></td><td>&nbsp;</td></td><td ng-repeat=\"a in range() track by \$index\" ng-bind=\"countUprawnienie(uprawnienie.ID,\$index)\" ng-style=\"styleUprawnienia(uprawnienie.ID,\$index)\"></td>
            </tr>
    </table>
  </div>
    <button type=\"button\" class=\"btn btn-default\" ng-click=\"send()\">Dodaj</button>

    <p id=\"miesiac\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["miesiac"]) ? $context["miesiac"] : null), "html", null, true);
        echo "</p> <p id=\"rok\">";
        echo twig_escape_filter($this->env, (isset($context["rok"]) ? $context["rok"] : null), "html", null, true);
        echo "</p> <p id=\"ostatniDzien\">";
        echo twig_escape_filter($this->env, (isset($context["ostatniDzien"]) ? $context["ostatniDzien"] : null), "html", null, true);
        echo "</p>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "::edycja.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  63 => 12,  60 => 11,  57 => 10,  53 => 7,  39 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>*/
/*     {% javascripts '@AppBundle/Resources/public/js/angular/edycjaApp.js' %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*   {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <div class="container" id="zawartosc">*/
/*   <h1>{{ nazwaMiesiaca }}</h1>*/
/*   <div ng-app="myApp" ng-controller="strazacyCtrl">*/
/*     <div class="panel-body table-responsive">*/
/*     <table class="table table-striped table-bordered " id="dni">*/
/* */
/*             <tr ng-repeat="strazak in przydzialy">*/
/*               <td ng-bind="(strazak.Imie)+' '+(strazak.Nazwisko)" ></td>*/
/*               <td ng-bind="showStanowisko(strazak.Stanowisko)"></td>*/
/*               <td ng-repeat="dzien in strazak.dni" ng-bind="dzien.Ilosc_godzin | number:0" ng-click="changeRow(dzien.Ilosc_godzin,$parent.$index,$index);"></td>*/
/*               <td ng-bind="countGodziny($index)"></td>*/
/*               <td ng-bind="lasts($index)"></td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td>&nbsp;</td><td>Ilość ludzi</td><td ng-repeat="a in range() track by $index" ng-bind="countStrazacy($index)"></td>*/
/*             </tr>*/
/*             <tr ng-repeat="stanowisko in stanowiska">*/
/*               <td ng-bind="stanowisko.Nazwa"><td>&nbsp;</td></td><td ng-repeat="a in range() track by $index" ng-bind="countStanowisko(stanowisko.ID,$index)"  ng-style="styleStanowiska(stanowisko.ID,$index)"></td>*/
/*             </tr>*/
/*             <tr ng-repeat="uprawnienie in uprawnienia">*/
/*               <td ng-bind="uprawnienie.Nazwa"></td><td>&nbsp;</td></td><td ng-repeat="a in range() track by $index" ng-bind="countUprawnienie(uprawnienie.ID,$index)" ng-style="styleUprawnienia(uprawnienie.ID,$index)"></td>*/
/*             </tr>*/
/*     </table>*/
/*   </div>*/
/*     <button type="button" class="btn btn-default" ng-click="send()">Dodaj</button>*/
/* */
/*     <p id="miesiac">{{ miesiac }}</p> <p id="rok">{{ rok }}</p> <p id="ostatniDzien">{{ ostatniDzien }}</p>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
