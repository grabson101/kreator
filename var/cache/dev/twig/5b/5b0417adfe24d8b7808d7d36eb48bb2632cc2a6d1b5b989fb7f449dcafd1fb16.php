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
        $__internal_b2ed297c1bd7b2376926acd559ba7512caecdd040977c2841a983c937f581d1b = $this->env->getExtension("native_profiler");
        $__internal_b2ed297c1bd7b2376926acd559ba7512caecdd040977c2841a983c937f581d1b->enter($__internal_b2ed297c1bd7b2376926acd559ba7512caecdd040977c2841a983c937f581d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edycja.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2ed297c1bd7b2376926acd559ba7512caecdd040977c2841a983c937f581d1b->leave($__internal_b2ed297c1bd7b2376926acd559ba7512caecdd040977c2841a983c937f581d1b_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319155f8b1e99238bcf882d984998df6e585b86eaf65363490539bbeb5e0c6fe = $this->env->getExtension("native_profiler");
        $__internal_319155f8b1e99238bcf882d984998df6e585b86eaf65363490539bbeb5e0c6fe->enter($__internal_319155f8b1e99238bcf882d984998df6e585b86eaf65363490539bbeb5e0c6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319155f8b1e99238bcf882d984998df6e585b86eaf65363490539bbeb5e0c6fe->leave($__internal_319155f8b1e99238bcf882d984998df6e585b86eaf65363490539bbeb5e0c6fe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_edbc6f51df4ab1a825e0bf2970009e6db757ba4f8ea6734e391da5e9d492b961 = $this->env->getExtension("native_profiler");
        $__internal_edbc6f51df4ab1a825e0bf2970009e6db757ba4f8ea6734e391da5e9d492b961->enter($__internal_edbc6f51df4ab1a825e0bf2970009e6db757ba4f8ea6734e391da5e9d492b961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"container\" id=\"zawartosc\">
  <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["nazwaMiesiaca"]) ? $context["nazwaMiesiaca"] : $this->getContext($context, "nazwaMiesiaca")), "html", null, true);
        echo "</h1>
  <div ng-app=\"myApp\" ng-controller=\"customersCtrl\">
    <div class=\"panel-body table-responsive\">
    <table class=\"table table-striped table-bordered \" id=\"dni\">
            <tr><td>&nbsp;</td><td>&nbsp;</td>

           ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["dni"]) ? $context["dni"] : $this->getContext($context, "dni"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "               <td >";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
            </tr>
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
        // line 43
        echo twig_escape_filter($this->env, (isset($context["miesiac"]) ? $context["miesiac"] : $this->getContext($context, "miesiac")), "html", null, true);
        echo "</p> <p id=\"rok\">";
        echo twig_escape_filter($this->env, (isset($context["rok"]) ? $context["rok"] : $this->getContext($context, "rok")), "html", null, true);
        echo "</p> <p id=\"ostatniDzien\">";
        echo twig_escape_filter($this->env, (isset($context["ostatniDzien"]) ? $context["ostatniDzien"] : $this->getContext($context, "ostatniDzien")), "html", null, true);
        echo "</p>
  </div>
</div>

";
        
        $__internal_edbc6f51df4ab1a825e0bf2970009e6db757ba4f8ea6734e391da5e9d492b961->leave($__internal_edbc6f51df4ab1a825e0bf2970009e6db757ba4f8ea6734e391da5e9d492b961_prof);

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
        return array (  124 => 43,  100 => 21,  91 => 19,  87 => 18,  78 => 12,  75 => 11,  69 => 10,  62 => 7,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>*/
/*     {% javascripts '@AppBundle/Resources/public/js/angular/app.js' %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*   {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <div class="container" id="zawartosc">*/
/*   <h1>{{ nazwaMiesiaca }}</h1>*/
/*   <div ng-app="myApp" ng-controller="customersCtrl">*/
/*     <div class="panel-body table-responsive">*/
/*     <table class="table table-striped table-bordered " id="dni">*/
/*             <tr><td>&nbsp;</td><td>&nbsp;</td>*/
/* */
/*            {% for i in 1..  dni %}*/
/*                <td >{{ i }}</td>*/
/*            {% endfor %}*/
/* */
/*             </tr>*/
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
