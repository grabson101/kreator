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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77275ad5c1a8ea609b5df2f2ea8b26c6c60053dee21e27c06f14cb3e48aa92a5 = $this->env->getExtension("native_profiler");
        $__internal_77275ad5c1a8ea609b5df2f2ea8b26c6c60053dee21e27c06f14cb3e48aa92a5->enter($__internal_77275ad5c1a8ea609b5df2f2ea8b26c6c60053dee21e27c06f14cb3e48aa92a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2c8c367_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c8c367_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2c8c367_part_1_theme_1.css");
            // line 22
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />



        ";
        } else {
            // asset "2c8c367"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2c8c367") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/2c8c367.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />



        ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 28
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
        // line 46
        echo $this->env->getExtension('routing')->getPath("allStrazacy");
        echo "\"> Przegląd </a></li>
                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("genForm");
        echo "\">Twórz</a></li>
                    <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show", array("dni" => 30, "zmiana" => 2, "wymaganaIloscGodzin" => 170)), "html", null, true);
        echo "\">Test</a></li>
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
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
    </body>
</html>
";
        
        $__internal_77275ad5c1a8ea609b5df2f2ea8b26c6c60053dee21e27c06f14cb3e48aa92a5->leave($__internal_77275ad5c1a8ea609b5df2f2ea8b26c6c60053dee21e27c06f14cb3e48aa92a5_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f74f2db95439a301cc6d5b1f2b9371d7cfa58dcfad1ae33ee4ca3853575ec1c = $this->env->getExtension("native_profiler");
        $__internal_5f74f2db95439a301cc6d5b1f2b9371d7cfa58dcfad1ae33ee4ca3853575ec1c->enter($__internal_5f74f2db95439a301cc6d5b1f2b9371d7cfa58dcfad1ae33ee4ca3853575ec1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " <!-- Latest compiled and minified CSS -->

        ";
        
        $__internal_5f74f2db95439a301cc6d5b1f2b9371d7cfa58dcfad1ae33ee4ca3853575ec1c->leave($__internal_5f74f2db95439a301cc6d5b1f2b9371d7cfa58dcfad1ae33ee4ca3853575ec1c_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_99b7a95d57dffcefdf6e868877f1c90d2373ea1c8d61e83223792feb40fa51c6 = $this->env->getExtension("native_profiler");
        $__internal_99b7a95d57dffcefdf6e868877f1c90d2373ea1c8d61e83223792feb40fa51c6->enter($__internal_99b7a95d57dffcefdf6e868877f1c90d2373ea1c8d61e83223792feb40fa51c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kreator grafiku";
        
        $__internal_99b7a95d57dffcefdf6e868877f1c90d2373ea1c8d61e83223792feb40fa51c6->leave($__internal_99b7a95d57dffcefdf6e868877f1c90d2373ea1c8d61e83223792feb40fa51c6_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_118dda373d221705d3d881fc3ca149b2af678bb236812d44db146f033b2cad73 = $this->env->getExtension("native_profiler");
        $__internal_118dda373d221705d3d881fc3ca149b2af678bb236812d44db146f033b2cad73->enter($__internal_118dda373d221705d3d881fc3ca149b2af678bb236812d44db146f033b2cad73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_118dda373d221705d3d881fc3ca149b2af678bb236812d44db146f033b2cad73->leave($__internal_118dda373d221705d3d881fc3ca149b2af678bb236812d44db146f033b2cad73_prof);

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
        return array (  171 => 65,  159 => 19,  145 => 4,  135 => 66,  133 => 65,  113 => 48,  109 => 47,  105 => 46,  84 => 28,  81 => 27,  61 => 22,  57 => 21,  52 => 19,  46 => 16,  42 => 15,  32 => 7,  30 => 4,  25 => 1,);
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
/* */
/*         {%stylesheets 'bundles/app/css/*' filter='cssrewrite'%}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" />*/
/* */
/* */
/* */
/*         {% endstylesheets %}*/
/* */
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
/*                     <li><a href="{{ path('show', {'dni': 30, 'zmiana':2, 'wymaganaIloscGodzin':170}) }}">Test</a></li>*/
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
