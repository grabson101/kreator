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
        $__internal_e7010bef8a6330832032294f799b50c08f55546639dedd7b2f21147a70df1e5f = $this->env->getExtension("native_profiler");
        $__internal_e7010bef8a6330832032294f799b50c08f55546639dedd7b2f21147a70df1e5f->enter($__internal_e7010bef8a6330832032294f799b50c08f55546639dedd7b2f21147a70df1e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edycja.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7010bef8a6330832032294f799b50c08f55546639dedd7b2f21147a70df1e5f->leave($__internal_e7010bef8a6330832032294f799b50c08f55546639dedd7b2f21147a70df1e5f_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79cf2c414ffc9d1018a73e3f2ffa03143880f52d5248aaa724c138479c90a287 = $this->env->getExtension("native_profiler");
        $__internal_79cf2c414ffc9d1018a73e3f2ffa03143880f52d5248aaa724c138479c90a287->enter($__internal_79cf2c414ffc9d1018a73e3f2ffa03143880f52d5248aaa724c138479c90a287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_79cf2c414ffc9d1018a73e3f2ffa03143880f52d5248aaa724c138479c90a287->leave($__internal_79cf2c414ffc9d1018a73e3f2ffa03143880f52d5248aaa724c138479c90a287_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef02c4a522bee2a5713cc81f32f79a5d4fe9847df2ebdfd3107f35f697d34db1 = $this->env->getExtension("native_profiler");
        $__internal_ef02c4a522bee2a5713cc81f32f79a5d4fe9847df2ebdfd3107f35f697d34db1->enter($__internal_ef02c4a522bee2a5713cc81f32f79a5d4fe9847df2ebdfd3107f35f697d34db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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


        </div>
            ";
        
        $__internal_ef02c4a522bee2a5713cc81f32f79a5d4fe9847df2ebdfd3107f35f697d34db1->leave($__internal_ef02c4a522bee2a5713cc81f32f79a5d4fe9847df2ebdfd3107f35f697d34db1_prof);

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
        return array (  75 => 9,  69 => 8,  62 => 7,  48 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*         </table>*/
/* */
/* */
/*         </div>*/
/*             {% endblock %}*/
/* */
