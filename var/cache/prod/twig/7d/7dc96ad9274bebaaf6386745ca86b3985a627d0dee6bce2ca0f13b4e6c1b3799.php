<?php

/* ::base.html.twig */
class __TwigTemplate_d590e0a06cdb429ec893dae4f0c4071c423e84ec65b98a9bb40d2090721f3302 extends Twig_Template
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
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
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
                <a  class=\"navbar-brand\" href=\"#\">Kreator grafiku</a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\" id=\"nav\">
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("wyborPolrocza");
        echo "\">Strona główna</a></li>
                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("allStrazacy");
        echo "\"> Przegląd </a></li>
                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("generateOneAfterOne");
        echo "\">Twórz</a></li>
                    <li><a href=\"";
        // line 45
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
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        echo " <!-- Latest compiled and minified CSS -->

        ";
    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        echo "Kreator grafiku";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "          ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7b315d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7b315d_0") : $this->env->getExtension('asset')->getAssetUrl("css/e7b315d_theme_1.css");
            // line 22
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
        } else {
            // asset "e7b315d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7b315d") : $this->env->getExtension('asset')->getAssetUrl("css/e7b315d.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
          ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "        ";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 62,  154 => 24,  140 => 22,  135 => 21,  132 => 20,  126 => 19,  118 => 4,  111 => 63,  109 => 62,  89 => 45,  85 => 44,  81 => 43,  77 => 42,  56 => 25,  54 => 20,  50 => 19,  44 => 16,  40 => 15,  30 => 7,  28 => 4,  23 => 1,);
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
/*         {% block stylesheets %}*/
/*           {% stylesheets 'bundles/app/css/theme.css' filter='cssrewrite'%}*/
/*               <link rel="stylesheet" href="{{ asset_url }}" />*/
/*           {% endstylesheets %}*/
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
/*                 <a  class="navbar-brand" href="#">Kreator grafiku</a>*/
/*             </div>*/
/*             <div class="navbar-collapse collapse">*/
/*                 <ul class="nav navbar-nav" id="nav">*/
/*                     <li><a href="{{ path('wyborPolrocza') }}">Strona główna</a></li>*/
/*                     <li><a href="{{ path('allStrazacy') }}"> Przegląd </a></li>*/
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
