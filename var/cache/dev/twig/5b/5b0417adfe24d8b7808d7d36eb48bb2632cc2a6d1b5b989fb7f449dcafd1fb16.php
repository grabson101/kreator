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
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b628ac3cecdd9e675f4b70f20026b14b10d149a2f7a8973f76f264a41d113a74 = $this->env->getExtension("native_profiler");
        $__internal_b628ac3cecdd9e675f4b70f20026b14b10d149a2f7a8973f76f264a41d113a74->enter($__internal_b628ac3cecdd9e675f4b70f20026b14b10d149a2f7a8973f76f264a41d113a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edycja.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b628ac3cecdd9e675f4b70f20026b14b10d149a2f7a8973f76f264a41d113a74->leave($__internal_b628ac3cecdd9e675f4b70f20026b14b10d149a2f7a8973f76f264a41d113a74_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1922581f9ca4f02e353078dc288e89444e7bd2ac133e4b01110d360979dc8d2 = $this->env->getExtension("native_profiler");
        $__internal_c1922581f9ca4f02e353078dc288e89444e7bd2ac133e4b01110d360979dc8d2->enter($__internal_c1922581f9ca4f02e353078dc288e89444e7bd2ac133e4b01110d360979dc8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js\"></script>
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8c9072d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c9072d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8c9072d_edycjaApp_1.js");
            // line 5
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "8c9072d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8c9072d") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8c9072d.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 7
        echo "  ";
        
        $__internal_c1922581f9ca4f02e353078dc288e89444e7bd2ac133e4b01110d360979dc8d2->leave($__internal_c1922581f9ca4f02e353078dc288e89444e7bd2ac133e4b01110d360979dc8d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b100094d6255eab17bd28cc43703fc0e5c3a0cd3502cdbbc467cbecfa60e629 = $this->env->getExtension("native_profiler");
        $__internal_6b100094d6255eab17bd28cc43703fc0e5c3a0cd3502cdbbc467cbecfa60e629->enter($__internal_6b100094d6255eab17bd28cc43703fc0e5c3a0cd3502cdbbc467cbecfa60e629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "245ae68_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_245ae68_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/245ae68_table-responsive_1.css");
            // line 10
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "245ae68"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_245ae68") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/245ae68.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "
  ";
        
        $__internal_6b100094d6255eab17bd28cc43703fc0e5c3a0cd3502cdbbc467cbecfa60e629->leave($__internal_6b100094d6255eab17bd28cc43703fc0e5c3a0cd3502cdbbc467cbecfa60e629_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_43b85002f972025ab722346779afa4eba6d46d54301f1bb9f78bda864edaaa05 = $this->env->getExtension("native_profiler");
        $__internal_43b85002f972025ab722346779afa4eba6d46d54301f1bb9f78bda864edaaa05->enter($__internal_43b85002f972025ab722346779afa4eba6d46d54301f1bb9f78bda864edaaa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<div class=\"container\" id=\"zawartosc\">
  <h1>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["nazwaMiesiaca"]) ? $context["nazwaMiesiaca"] : $this->getContext($context, "nazwaMiesiaca")), "html", null, true);
        echo "</h1><h1 id=\"rok\">";
        echo twig_escape_filter($this->env, (isset($context["rok"]) ? $context["rok"] : $this->getContext($context, "rok")), "html", null, true);
        echo "</h1>
  <div ng-app=\"myApp\" ng-controller=\"strazacyCtrl\">
    <div class=\"panel-body table-responsive\">
    <table class=\"table table-striped table-bordered \" id=\"dni\">
                <thead>
                <tr>
                    <th>Imię i nazwisko</th>
                    <th>Stanowisko</th>
                    <th colspan=\"3\">Poprzedni miesiąc</th>
                    <th ng-repeat=\"a in rangeActualMonth() track by \$index\" ng-bind=\"\$index+1\"></th>
                    <th>Przydzielone godziny</th>
                    <th>Pozostało</th>
                </tr>
            </thead>
            <tr ng-repeat=\"strazak in przydzialy\">
              <td class=\"nazwisko\" ng-bind=\"(strazak.Imie)+' '+(strazak.Nazwisko)\" ></td>
              <td class=\"stanowisko\" ng-bind=\"showStanowisko(strazak.Stanowisko)\"></td>
              <td class=\"godziny\" ng-repeat=\"dzien in strazak.dni\" ng-bind=\"dzien.Ilosc_godzin | number:0\" ng-click=\"changeRow(dzien.Ilosc_godzin,\$parent.\$index,\$index);\"></td>
              <td class=\"suma-godzin\" ng-bind=\"countGodziny(\$index)\"></td>
              <td ng-bind=\"lasts(\$index)\"></td>
            </tr>
            <tr>
              <td class=\"empty\">&nbsp;</td><th class=\"ustawienia-nazwa\">Liczba ludzi</th><td class=\"ustawienia\" ng-repeat=\"a in range() track by \$index\" ng-bind=\"countStrazacy(\$index)\" ng-style=\"styleUstawienia(\$index)\"></td>
            </tr>
            <tr ng-repeat=\"stanowisko in stanowiska\">
              <td class=\"empty\">&nbsp;</td><th class=\"ustawienia-nazwa\" ng-bind=\"stanowisko.Nazwa\"></th><td class=\"ustawienia\" ng-repeat=\"a in range() track by \$index\" ng-bind=\"countStanowisko(stanowisko.ID,\$index)\"  ng-style=\"styleStanowiska(stanowisko.ID,\$index)\"></td>
            </tr>
            <tr ng-repeat=\"uprawnienie in uprawnienia\">
              <td class=\"empty\">&nbsp;</td><th class=\"ustawienia-nazwa\" ng-bind=\"uprawnienie.Nazwa\"></th><td class=\"ustawienia\" ng-repeat=\"a in range() track by \$index\" ng-bind=\"countUprawnienie(uprawnienie.ID,\$index)\" ng-style=\"styleUprawnienia(uprawnienie.ID,\$index)\"></td>
            </tr>
    </table>
  </div>
    <button type=\"button\" class=\"btn btn-default\" ng-click=\"send()\">Dodaj</button>

    <p id=\"miesiac\" hidden=\"true\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["miesiac"]) ? $context["miesiac"] : $this->getContext($context, "miesiac")), "html", null, true);
        echo "</p> <p id=\"ostatniDzien\" hidden=\"true\">";
        echo twig_escape_filter($this->env, (isset($context["ostatniDzien"]) ? $context["ostatniDzien"] : $this->getContext($context, "ostatniDzien")), "html", null, true);
        echo "</p>
  </div>
</div>

";
        
        $__internal_43b85002f972025ab722346779afa4eba6d46d54301f1bb9f78bda864edaaa05->leave($__internal_43b85002f972025ab722346779afa4eba6d46d54301f1bb9f78bda864edaaa05_prof);

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
        return array (  151 => 52,  112 => 18,  109 => 17,  103 => 16,  95 => 12,  81 => 10,  76 => 9,  70 => 8,  63 => 7,  49 => 5,  45 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>*/
/*     {% javascripts '@AppBundle/Resources/public/js/angular/edycjaApp.js' %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*   {% endblock %}*/
/*   {% block stylesheets %}*/
/*     {% stylesheets 'bundles/app/css/table-responsive.css' filter='cssrewrite' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* */
/*   {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <div class="container" id="zawartosc">*/
/*   <h1>{{ nazwaMiesiaca }}</h1><h1 id="rok">{{ rok }}</h1>*/
/*   <div ng-app="myApp" ng-controller="strazacyCtrl">*/
/*     <div class="panel-body table-responsive">*/
/*     <table class="table table-striped table-bordered " id="dni">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Imię i nazwisko</th>*/
/*                     <th>Stanowisko</th>*/
/*                     <th colspan="3">Poprzedni miesiąc</th>*/
/*                     <th ng-repeat="a in rangeActualMonth() track by $index" ng-bind="$index+1"></th>*/
/*                     <th>Przydzielone godziny</th>*/
/*                     <th>Pozostało</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tr ng-repeat="strazak in przydzialy">*/
/*               <td class="nazwisko" ng-bind="(strazak.Imie)+' '+(strazak.Nazwisko)" ></td>*/
/*               <td class="stanowisko" ng-bind="showStanowisko(strazak.Stanowisko)"></td>*/
/*               <td class="godziny" ng-repeat="dzien in strazak.dni" ng-bind="dzien.Ilosc_godzin | number:0" ng-click="changeRow(dzien.Ilosc_godzin,$parent.$index,$index);"></td>*/
/*               <td class="suma-godzin" ng-bind="countGodziny($index)"></td>*/
/*               <td ng-bind="lasts($index)"></td>*/
/*             </tr>*/
/*             <tr>*/
/*               <td class="empty">&nbsp;</td><th class="ustawienia-nazwa">Liczba ludzi</th><td class="ustawienia" ng-repeat="a in range() track by $index" ng-bind="countStrazacy($index)" ng-style="styleUstawienia($index)"></td>*/
/*             </tr>*/
/*             <tr ng-repeat="stanowisko in stanowiska">*/
/*               <td class="empty">&nbsp;</td><th class="ustawienia-nazwa" ng-bind="stanowisko.Nazwa"></th><td class="ustawienia" ng-repeat="a in range() track by $index" ng-bind="countStanowisko(stanowisko.ID,$index)"  ng-style="styleStanowiska(stanowisko.ID,$index)"></td>*/
/*             </tr>*/
/*             <tr ng-repeat="uprawnienie in uprawnienia">*/
/*               <td class="empty">&nbsp;</td><th class="ustawienia-nazwa" ng-bind="uprawnienie.Nazwa"></th><td class="ustawienia" ng-repeat="a in range() track by $index" ng-bind="countUprawnienie(uprawnienie.ID,$index)" ng-style="styleUprawnienia(uprawnienie.ID,$index)"></td>*/
/*             </tr>*/
/*     </table>*/
/*   </div>*/
/*     <button type="button" class="btn btn-default" ng-click="send()">Dodaj</button>*/
/* */
/*     <p id="miesiac" hidden="true">{{ miesiac }}</p> <p id="ostatniDzien" hidden="true">{{ ostatniDzien }}</p>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
