<?php

/* edycja.html.twig */
class __TwigTemplate_4df62ac4588c3b5603ac5ea8b07448d80f6033ddd19ec26a5db6d0dcbf1273c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "edycja.html.twig", 1);
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
        $__internal_4a2a6ff417e60ac6ef728ac990198a8ced1500d7359d86c7b66e331610575fde = $this->env->getExtension("native_profiler");
        $__internal_4a2a6ff417e60ac6ef728ac990198a8ced1500d7359d86c7b66e331610575fde->enter($__internal_4a2a6ff417e60ac6ef728ac990198a8ced1500d7359d86c7b66e331610575fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edycja.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a2a6ff417e60ac6ef728ac990198a8ced1500d7359d86c7b66e331610575fde->leave($__internal_4a2a6ff417e60ac6ef728ac990198a8ced1500d7359d86c7b66e331610575fde_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_841514ed74de32fdee44c8948f87a20c032cad0534b34d3efec7b8700b83c6b4 = $this->env->getExtension("native_profiler");
        $__internal_841514ed74de32fdee44c8948f87a20c032cad0534b34d3efec7b8700b83c6b4->enter($__internal_841514ed74de32fdee44c8948f87a20c032cad0534b34d3efec7b8700b83c6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9bf3d6a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9bf3d6a_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9bf3d6a_app_1.js");
            // line 5
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "9bf3d6a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9bf3d6a") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9bf3d6a.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "  ";
        
        $__internal_841514ed74de32fdee44c8948f87a20c032cad0534b34d3efec7b8700b83c6b4->leave($__internal_841514ed74de32fdee44c8948f87a20c032cad0534b34d3efec7b8700b83c6b4_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5ef1107eef1e8d2ce05f8b06b802c43f40d47305947a3f490318dc67dfa9699 = $this->env->getExtension("native_profiler");
        $__internal_d5ef1107eef1e8d2ce05f8b06b802c43f40d47305947a3f490318dc67dfa9699->enter($__internal_d5ef1107eef1e8d2ce05f8b06b802c43f40d47305947a3f490318dc67dfa9699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["nazwaMiesiaca"]) ? $context["nazwaMiesiaca"] : $this->getContext($context, "nazwaMiesiaca")), "html", null, true);
        echo "</h1>
<div ng-app=\"myApp\" ng-controller=\"customersCtrl\">
  <table class=\"table table-bordered\" id=\"tabelka\">
          <tr><td> </td>

         ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["dni"]) ? $context["dni"] : $this->getContext($context, "dni"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 15
            echo "             <td >";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
          </tr>
          <tr ng-repeat=\"x in hours\">
            <td ng-bind=\"(x.Imie)+' '+(x.Nazwisko)\"></td>
            <td ng-repeat=\"datas in x.tabelka\" ng-bind=\"datas.Ilosc_godzin | number:0\" ng-click=\"changeRow(datas.Ilosc_godzin,\$parent.\$index,\$index);\"></td>
            <td ng-bind=\"countHours(\$index)\"></td>
            <td ng-bind=\"lasts(\$index)\"></td>
          </tr>
          <tr>
            <td>Ilość ludzi</td><td ng-repeat=\"a in range() track by \$index\" ng-bind=\"countStrazacy(\$index)\"></td>
          </tr>
  </table>
  <button type=\"button\" class=\"btn btn-default\" ng-click=\"send()\">Dodaj</button>

  <p id=\"miesiac\">";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["miesiac"]) ? $context["miesiac"] : $this->getContext($context, "miesiac")), "html", null, true);
        echo "</p> <p id=\"rok\">";
        echo twig_escape_filter($this->env, (isset($context["rok"]) ? $context["rok"] : $this->getContext($context, "rok")), "html", null, true);
        echo "</p> <p id=\"ostatniDzien\">";
        echo twig_escape_filter($this->env, (isset($context["ostatniDzien"]) ? $context["ostatniDzien"] : $this->getContext($context, "ostatniDzien")), "html", null, true);
        echo "</p>
</div>


";
        
        $__internal_d5ef1107eef1e8d2ce05f8b06b802c43f40d47305947a3f490318dc67dfa9699->leave($__internal_d5ef1107eef1e8d2ce05f8b06b802c43f40d47305947a3f490318dc67dfa9699_prof);

    }

    public function getTemplateName()
    {
        return "edycja.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 31,  97 => 17,  88 => 15,  84 => 14,  75 => 9,  69 => 8,  62 => 7,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/* <h1>{{ nazwaMiesiaca }}</h1>*/
/* <div ng-app="myApp" ng-controller="customersCtrl">*/
/*   <table class="table table-bordered" id="tabelka">*/
/*           <tr><td> </td>*/
/* */
/*          {% for i in 1..  dni %}*/
/*              <td >{{ i }}</td>*/
/*          {% endfor %}*/
/* */
/*           </tr>*/
/*           <tr ng-repeat="x in hours">*/
/*             <td ng-bind="(x.Imie)+' '+(x.Nazwisko)"></td>*/
/*             <td ng-repeat="datas in x.tabelka" ng-bind="datas.Ilosc_godzin | number:0" ng-click="changeRow(datas.Ilosc_godzin,$parent.$index,$index);"></td>*/
/*             <td ng-bind="countHours($index)"></td>*/
/*             <td ng-bind="lasts($index)"></td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td>Ilość ludzi</td><td ng-repeat="a in range() track by $index" ng-bind="countStrazacy($index)"></td>*/
/*           </tr>*/
/*   </table>*/
/*   <button type="button" class="btn btn-default" ng-click="send()">Dodaj</button>*/
/* */
/*   <p id="miesiac">{{ miesiac }}</p> <p id="rok">{{ rok }}</p> <p id="ostatniDzien">{{ ostatniDzien }}</p>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
