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
        <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<style>
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "</style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
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
                    <li><a href=\"#\">Strona główna</a></li>
                    <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("allStrazacy");
        echo "\"> Przegląd </a></li>
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("genForm");
        echo "\">Twórz</a></li>
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
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
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

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo "Kreator grafiku";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "


        ";
    }

    // line 59
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
        return array (  128 => 59,  121 => 18,  118 => 17,  112 => 15,  104 => 4,  97 => 60,  95 => 59,  75 => 42,  71 => 41,  50 => 23,  47 => 22,  45 => 17,  40 => 15,  30 => 7,  28 => 4,  23 => 1,);
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
/*         <title>{% block title %}Kreator grafiku{% endblock %}</title>*/
/* <style>*/
/*         {% block stylesheets %}*/
/* */
/* */
/* */
/*         {% endblock %}*/
/* </style>*/
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
/*                     <li><a href="#">Strona główna</a></li>*/
/*                     <li><a href="{{ path('allStrazacy') }}"> Przegląd </a></li>*/
/*                     <li><a href="{{ path('genForm') }}">Twórz</a></li>*/
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
