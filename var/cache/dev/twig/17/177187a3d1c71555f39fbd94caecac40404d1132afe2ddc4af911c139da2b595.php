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
        $__internal_9ebbec9df4876200be14190c64e39d70d68fd1fdded18dbcc42433862a65420f = $this->env->getExtension("native_profiler");
        $__internal_9ebbec9df4876200be14190c64e39d70d68fd1fdded18dbcc42433862a65420f->enter($__internal_9ebbec9df4876200be14190c64e39d70d68fd1fdded18dbcc42433862a65420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    <li><a href=\"#\">Strona główna</a></li>
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
        
        $__internal_9ebbec9df4876200be14190c64e39d70d68fd1fdded18dbcc42433862a65420f->leave($__internal_9ebbec9df4876200be14190c64e39d70d68fd1fdded18dbcc42433862a65420f_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07200f7f5ec7f7465bca0fc2cc4c944b93e26e77135dd261f25be45e28e4fb49 = $this->env->getExtension("native_profiler");
        $__internal_07200f7f5ec7f7465bca0fc2cc4c944b93e26e77135dd261f25be45e28e4fb49->enter($__internal_07200f7f5ec7f7465bca0fc2cc4c944b93e26e77135dd261f25be45e28e4fb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " <!-- Latest compiled and minified CSS -->

        ";
        
        $__internal_07200f7f5ec7f7465bca0fc2cc4c944b93e26e77135dd261f25be45e28e4fb49->leave($__internal_07200f7f5ec7f7465bca0fc2cc4c944b93e26e77135dd261f25be45e28e4fb49_prof);

    }

    // line 19
    public function block_title($context, array $blocks = array())
    {
        $__internal_94a4553299668c10d8efce049cae7a09ce3fe729a562a57ad6cfaed1298a9d24 = $this->env->getExtension("native_profiler");
        $__internal_94a4553299668c10d8efce049cae7a09ce3fe729a562a57ad6cfaed1298a9d24->enter($__internal_94a4553299668c10d8efce049cae7a09ce3fe729a562a57ad6cfaed1298a9d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Kreator grafiku";
        
        $__internal_94a4553299668c10d8efce049cae7a09ce3fe729a562a57ad6cfaed1298a9d24->leave($__internal_94a4553299668c10d8efce049cae7a09ce3fe729a562a57ad6cfaed1298a9d24_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5bca189559cbb8fa30c718d4debc58f1a67777b096d15a5db38ce3d1e17d0a58 = $this->env->getExtension("native_profiler");
        $__internal_5bca189559cbb8fa30c718d4debc58f1a67777b096d15a5db38ce3d1e17d0a58->enter($__internal_5bca189559cbb8fa30c718d4debc58f1a67777b096d15a5db38ce3d1e17d0a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo "          ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e7b315d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7b315d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e7b315d_theme_1.css");
            // line 22
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
        } else {
            // asset "e7b315d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e7b315d") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/e7b315d.css");
            echo "              <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
          ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "        ";
        
        $__internal_5bca189559cbb8fa30c718d4debc58f1a67777b096d15a5db38ce3d1e17d0a58->leave($__internal_5bca189559cbb8fa30c718d4debc58f1a67777b096d15a5db38ce3d1e17d0a58_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c14d8501bed317c2966ccc753240ed7b4b900584ca054601ba6991de56de9af = $this->env->getExtension("native_profiler");
        $__internal_1c14d8501bed317c2966ccc753240ed7b4b900584ca054601ba6991de56de9af->enter($__internal_1c14d8501bed317c2966ccc753240ed7b4b900584ca054601ba6991de56de9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c14d8501bed317c2966ccc753240ed7b4b900584ca054601ba6991de56de9af->leave($__internal_1c14d8501bed317c2966ccc753240ed7b4b900584ca054601ba6991de56de9af_prof);

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
        return array (  179 => 62,  172 => 24,  158 => 22,  153 => 21,  147 => 20,  135 => 19,  121 => 4,  111 => 63,  109 => 62,  89 => 45,  85 => 44,  81 => 43,  59 => 25,  57 => 20,  53 => 19,  47 => 16,  43 => 15,  33 => 7,  31 => 4,  26 => 1,);
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
/*                     <li><a href="#">Strona główna</a></li>*/
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
