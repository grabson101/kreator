<?php

/* base.html.twig */
class __TwigTemplate_ee486d85754b35b1afc6d631b6c65470bad3cd027d26fa0f80322def5a0e4ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bb72927d26a21f436b7e3fac7fdeb668c41b2923d5e710847e3873b287043a6 = $this->env->getExtension("native_profiler");
        $__internal_5bb72927d26a21f436b7e3fac7fdeb668c41b2923d5e710847e3873b287043a6->enter($__internal_5bb72927d26a21f436b7e3fac7fdeb668c41b2923d5e710847e3873b287043a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('javascripts', $context, $blocks);
        // line 7
        echo "        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">

        <!-- jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>

        <!-- Latest compiled JavaScript -->
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>


        <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7b315d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7b315d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e7b315d_theme_1.css");
            // line 21
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "e7b315d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7b315d") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e7b315d.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
    <nav class=\"navbar navbar-default\" id=\"navbar\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a  class=\"navbar-brand\">Aplikacja wspierająca tworzenie grafiku służb w jednostce straży pożarnej</a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\" id=\"nav\">
                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("wyborPolrocza");
        echo "\">Przeglądaj harmonogramy</a></li>
                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("allStrazacy");
        echo "\"> Strażacy </a></li>
                    <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("generateOneAfterOne");
        echo "\">Twórz</a></li>
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("ustawienia");
        echo "\">Ustawienia</a></li>
                  <!--  <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Action</a></li>
                            <li><a href=\"#\">Another action</a></li>
                            <li><a href=\"#\">Something else here</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">Nav header</li>
                            <li><a href=\"#\">Separated link</a></li>
                            <li><a href=\"#\">One more separated link</a></li>
                        </ul>
                    </li>-->
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
    </body>
</html>
";
        
        $__internal_5bb72927d26a21f436b7e3fac7fdeb668c41b2923d5e710847e3873b287043a6->leave($__internal_5bb72927d26a21f436b7e3fac7fdeb668c41b2923d5e710847e3873b287043a6_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_472dd13ac36557778d532f264be7162131084701b707244866580c83472aac5f = $this->env->getExtension("native_profiler");
        $__internal_472dd13ac36557778d532f264be7162131084701b707244866580c83472aac5f->enter($__internal_472dd13ac36557778d532f264be7162131084701b707244866580c83472aac5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " <!-- Latest compiled and minified CSS -->

        ";
        
        $__internal_472dd13ac36557778d532f264be7162131084701b707244866580c83472aac5f->leave($__internal_472dd13ac36557778d532f264be7162131084701b707244866580c83472aac5f_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_534b019236b2d3313f3c28cfe3c65f741269cf2e972f0932e14315ebe6ec6742 = $this->env->getExtension("native_profiler");
        $__internal_534b019236b2d3313f3c28cfe3c65f741269cf2e972f0932e14315ebe6ec6742->enter($__internal_534b019236b2d3313f3c28cfe3c65f741269cf2e972f0932e14315ebe6ec6742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kreator grafiku";
        
        $__internal_534b019236b2d3313f3c28cfe3c65f741269cf2e972f0932e14315ebe6ec6742->leave($__internal_534b019236b2d3313f3c28cfe3c65f741269cf2e972f0932e14315ebe6ec6742_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9633ce2788ffff13809a1448fb06c6856ecc1449da0e54fabf6337ab4ab8475 = $this->env->getExtension("native_profiler");
        $__internal_d9633ce2788ffff13809a1448fb06c6856ecc1449da0e54fabf6337ab4ab8475->enter($__internal_d9633ce2788ffff13809a1448fb06c6856ecc1449da0e54fabf6337ab4ab8475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "
        ";
        
        $__internal_d9633ce2788ffff13809a1448fb06c6856ecc1449da0e54fabf6337ab4ab8475->leave($__internal_d9633ce2788ffff13809a1448fb06c6856ecc1449da0e54fabf6337ab4ab8475_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5ff725a6b682f1f112d025fd90b769956dfb5acecddb2646038c01b124b9a52 = $this->env->getExtension("native_profiler");
        $__internal_b5ff725a6b682f1f112d025fd90b769956dfb5acecddb2646038c01b124b9a52->enter($__internal_b5ff725a6b682f1f112d025fd90b769956dfb5acecddb2646038c01b124b9a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b5ff725a6b682f1f112d025fd90b769956dfb5acecddb2646038c01b124b9a52->leave($__internal_b5ff725a6b682f1f112d025fd90b769956dfb5acecddb2646038c01b124b9a52_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 64,  177 => 25,  171 => 24,  159 => 19,  145 => 4,  135 => 65,  133 => 64,  113 => 47,  109 => 46,  105 => 45,  101 => 44,  80 => 27,  78 => 24,  75 => 23,  61 => 21,  57 => 20,  53 => 19,  47 => 16,  43 => 15,  33 => 7,  31 => 4,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% block javascripts %} <!-- Latest compiled and minified CSS -->*/
/* */
/*         {% endblock %}*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* */
/*         <!-- jQuery library -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/* */
/*         <!-- Latest compiled JavaScript -->*/
/*         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/* */
/* */
/*         <title>{% block title %}Kreator grafiku{% endblock %}</title>*/
/*         {% stylesheets 'bundles/app/css/theme.css' filter='cssrewrite'%}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/* */
/*         {% block stylesheets %}*/
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body>*/
/*     <nav class="navbar navbar-default" id="navbar">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a  class="navbar-brand">Aplikacja wspierająca tworzenie grafiku służb w jednostce straży pożarnej</a>*/
/*             </div>*/
/*             <div class="navbar-collapse collapse">*/
/*                 <ul class="nav navbar-nav" id="nav">*/
/*                     <li><a href="{{ path('wyborPolrocza') }}">Przeglądaj harmonogramy</a></li>*/
/*                     <li><a href="{{ path('allStrazacy') }}"> Strażacy </a></li>*/
/*                     <li><a href="{{ path('generateOneAfterOne') }}">Twórz</a></li>*/
/*                     <li><a href="{{ path('ustawienia') }}">Ustawienia</a></li>*/
/*                   <!--  <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">Action</a></li>*/
/*                             <li><a href="#">Another action</a></li>*/
/*                             <li><a href="#">Something else here</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li class="dropdown-header">Nav header</li>*/
/*                             <li><a href="#">Separated link</a></li>*/
/*                             <li><a href="#">One more separated link</a></li>*/
/*                         </ul>*/
/*                     </li>-->*/
/*                 </ul>*/
/*             </div><!--/.nav-collapse -->*/
/*         </div>*/
/*     </nav>*/
/*     {% block body %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
