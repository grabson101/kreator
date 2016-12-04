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
            // asset "9bf3d6a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9bf3d6a_0") : $this->env->getExtension('asset')->getAssetUrl("js/9bf3d6a_app_1.js");
            // line 5
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "9bf3d6a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9bf3d6a") : $this->env->getExtension('asset')->getAssetUrl("js/9bf3d6a.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "  ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<div ng-app=\"myApp\" ng-controller=\"customersCtrl\">
  <table class=\"table table-striped\" id=\"tabelka\">
          <tr ng-repeat=\"x in hours\">
            <td ng-bind=\"x.ImieINazwisko\"></td>
            <td ng-repeat=\"datas in x.tabelka\" ng-bind=\"datas.Ilosc_godzin | number:0\" ng-click=\"datas.Ilosc_godzin= changeRow(datas.Ilosc_godzin);\"></td>
            <td ng-bind=\"countRow(\$index)\"></td>
          </tr>
          <tr>
            <td>Ilość ludzi</td><td ng-repeat=\"a in range() track by \$index\" ng-bind=\"countStrazacy(\$index)\"></td>
          </tr>
  </table>
  <button type=\"button\" class=\"btn btn-default\" ng-click=\"send()\">Dodaj</button>
  <div id=\"json\" ng-bind=\"message\"></div>
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
        return array (  60 => 9,  57 => 8,  53 => 7,  39 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>*/
/*     {% javascripts '@AppBundle/Resources/public/js/angular/app.js' %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*   {% endblock %}*/
/* {% block body %}*/
/* */
/* <div ng-app="myApp" ng-controller="customersCtrl">*/
/*   <table class="table table-striped" id="tabelka">*/
/*           <tr ng-repeat="x in hours">*/
/*             <td ng-bind="x.ImieINazwisko"></td>*/
/*             <td ng-repeat="datas in x.tabelka" ng-bind="datas.Ilosc_godzin | number:0" ng-click="datas.Ilosc_godzin= changeRow(datas.Ilosc_godzin);"></td>*/
/*             <td ng-bind="countRow($index)"></td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td>Ilość ludzi</td><td ng-repeat="a in range() track by $index" ng-bind="countStrazacy($index)"></td>*/
/*           </tr>*/
/*   </table>*/
/*   <button type="button" class="btn btn-default" ng-click="send()">Dodaj</button>*/
/*   <div id="json" ng-bind="message"></div>*/
/* </div>*/
/* */
/*             {% endblock %}*/
/* */
