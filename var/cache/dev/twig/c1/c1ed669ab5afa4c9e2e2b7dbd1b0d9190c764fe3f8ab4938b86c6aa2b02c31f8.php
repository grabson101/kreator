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
        $__internal_700646ee3b3640fef6cdc15c3d2c6ee8bae42a5fb6cac72f5cebff686e49dd89 = $this->env->getExtension("native_profiler");
        $__internal_700646ee3b3640fef6cdc15c3d2c6ee8bae42a5fb6cac72f5cebff686e49dd89->enter($__internal_700646ee3b3640fef6cdc15c3d2c6ee8bae42a5fb6cac72f5cebff686e49dd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wyswietleniePolrocza.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_700646ee3b3640fef6cdc15c3d2c6ee8bae42a5fb6cac72f5cebff686e49dd89->leave($__internal_700646ee3b3640fef6cdc15c3d2c6ee8bae42a5fb6cac72f5cebff686e49dd89_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c38c281062f3d4c126a5d8c68a99a6184d3f704a648c679d058a84faa98a3c37 = $this->env->getExtension("native_profiler");
        $__internal_c38c281062f3d4c126a5d8c68a99a6184d3f704a648c679d058a84faa98a3c37->enter($__internal_c38c281062f3d4c126a5d8c68a99a6184d3f704a648c679d058a84faa98a3c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c38c281062f3d4c126a5d8c68a99a6184d3f704a648c679d058a84faa98a3c37->leave($__internal_c38c281062f3d4c126a5d8c68a99a6184d3f704a648c679d058a84faa98a3c37_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e421606c474e9e41331f73b5e40012726b84f22a957d8ab6c78fb0dc9c14664 = $this->env->getExtension("native_profiler");
        $__internal_8e421606c474e9e41331f73b5e40012726b84f22a957d8ab6c78fb0dc9c14664->enter($__internal_8e421606c474e9e41331f73b5e40012726b84f22a957d8ab6c78fb0dc9c14664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"container\" id=\"zawartosc\">

  <div ng-app=\"myApp\" ng-controller=\"strazacyCtrl\">
    <table ng-repeat=\"miesiac in miesiace\" class=\"table table-striped table-bordered \" id=\"dni\">
      <tr ng-repeat=\"strazacy in miesiac\">
        <td ng-bind=\"showName(strazacy.strazak)\"></td>
        <td ng-repeat=\"dzien in strazacy.dni\" ng-bind=\"dzien.Ilosc_godzin\"></td>
      <tr>
    </table>

    <p id=\"polowaRoku\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["polowaRoku"]) ? $context["polowaRoku"] : $this->getContext($context, "polowaRoku")), "html", null, true);
        echo "</p> <p id=\"rok\">";
        echo twig_escape_filter($this->env, (isset($context["rok"]) ? $context["rok"] : $this->getContext($context, "rok")), "html", null, true);
        echo "</p>
  </div>
</div>

";
        
        $__internal_8e421606c474e9e41331f73b5e40012726b84f22a957d8ab6c78fb0dc9c14664->leave($__internal_8e421606c474e9e41331f73b5e40012726b84f22a957d8ab6c78fb0dc9c14664_prof);

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
        return array (  87 => 20,  75 => 10,  69 => 9,  62 => 7,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/* <div class="container" id="zawartosc">*/
/* */
/*   <div ng-app="myApp" ng-controller="strazacyCtrl">*/
/*     <table ng-repeat="miesiac in miesiace" class="table table-striped table-bordered " id="dni">*/
/*       <tr ng-repeat="strazacy in miesiac">*/
/*         <td ng-bind="showName(strazacy.strazak)"></td>*/
/*         <td ng-repeat="dzien in strazacy.dni" ng-bind="dzien.Ilosc_godzin"></td>*/
/*       <tr>*/
/*     </table>*/
/* */
/*     <p id="polowaRoku">{{ polowaRoku }}</p> <p id="rok">{{ rok }}</p>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
