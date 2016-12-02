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
        $__internal_c3e637ef3af111d0833d2e0f4a586950ad620346e322e41f84661193666a725d = $this->env->getExtension("native_profiler");
        $__internal_c3e637ef3af111d0833d2e0f4a586950ad620346e322e41f84661193666a725d->enter($__internal_c3e637ef3af111d0833d2e0f4a586950ad620346e322e41f84661193666a725d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edycja.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3e637ef3af111d0833d2e0f4a586950ad620346e322e41f84661193666a725d->leave($__internal_c3e637ef3af111d0833d2e0f4a586950ad620346e322e41f84661193666a725d_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_190f7a87ceef2e699f999e90ed5a59ed394b87728b6f1a50775b4ede8ce6b9d8 = $this->env->getExtension("native_profiler");
        $__internal_190f7a87ceef2e699f999e90ed5a59ed394b87728b6f1a50775b4ede8ce6b9d8->enter($__internal_190f7a87ceef2e699f999e90ed5a59ed394b87728b6f1a50775b4ede8ce6b9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_190f7a87ceef2e699f999e90ed5a59ed394b87728b6f1a50775b4ede8ce6b9d8->leave($__internal_190f7a87ceef2e699f999e90ed5a59ed394b87728b6f1a50775b4ede8ce6b9d8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6938ab30f383111cd15879555a7ffaaaad40c23611d880475ae16ed6e3e99a10 = $this->env->getExtension("native_profiler");
        $__internal_6938ab30f383111cd15879555a7ffaaaad40c23611d880475ae16ed6e3e99a10->enter($__internal_6938ab30f383111cd15879555a7ffaaaad40c23611d880475ae16ed6e3e99a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6938ab30f383111cd15879555a7ffaaaad40c23611d880475ae16ed6e3e99a10->leave($__internal_6938ab30f383111cd15879555a7ffaaaad40c23611d880475ae16ed6e3e99a10_prof);

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
/*   </table>*/
/*   <button type="button" class="btn btn-default" ng-click="send()">Dodaj</button>*/
/*   <div id="json" ng-bind="message"></div>*/
/* </div>*/
/* */
/*             {% endblock %}*/
/* */
