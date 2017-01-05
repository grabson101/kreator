<?php

/* wyborRoku.html.twig */
class __TwigTemplate_e7aa5113a3ce3f13555301377d4d96772b6d9155f9edda2ba056cf0e68f3e425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wyborRoku.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_446b23066998030008294045ab6d4cb141660258c7e1475054b6501a88ee7bf1 = $this->env->getExtension("native_profiler");
        $__internal_446b23066998030008294045ab6d4cb141660258c7e1475054b6501a88ee7bf1->enter($__internal_446b23066998030008294045ab6d4cb141660258c7e1475054b6501a88ee7bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wyborRoku.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_446b23066998030008294045ab6d4cb141660258c7e1475054b6501a88ee7bf1->leave($__internal_446b23066998030008294045ab6d4cb141660258c7e1475054b6501a88ee7bf1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9490242e14c0c8c71c4108f00b02794e49f127b26f7c704f99bd7b2bf9b1fda7 = $this->env->getExtension("native_profiler");
        $__internal_9490242e14c0c8c71c4108f00b02794e49f127b26f7c704f99bd7b2bf9b1fda7->enter($__internal_9490242e14c0c8c71c4108f00b02794e49f127b26f7c704f99bd7b2bf9b1fda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
      ";
        // line 4
        if (((isset($context["tablicaLat"]) ? $context["tablicaLat"] : $this->getContext($context, "tablicaLat")) == null)) {
            // line 5
            echo "      <div id=\"danger\" class=\"alert alert-danger\"  role=\"alert\">W bazie nie ma harmonogramów!</div>
      ";
        } else {
            // line 7
            echo "
        <form class=\"form\" action=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("wyswietleniePolrocza");
            echo "\" method=\"post\" name=\"form\" id=\"form\" role=\"form\">
          <div class=\"form-group\">
              <label for=\"sel1\">Select list (select one):</label>
              <select name=\"rok\" class=\"form-control\" id=\"sel1\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tablicaLat"]) ? $context["tablicaLat"] : $this->getContext($context, "tablicaLat")));
            foreach ($context['_seq'] as $context["_key"] => $context["rok"]) {
                // line 13
                echo "                    <option  id=\"rok\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rok"], "Rok", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rok"], "Rok", array()), "html", null, true);
                echo " </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rok'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "              </select>
              <div class=\"radio\">
                  <label><input type=\"radio\" name=\"polowaRoku\" id=\"polowaRoku\" value=\"1\" checked>Pierwsza połowa roku</label>
              </div>
              <div class=\"radio\">
                  <label><input type=\"radio\" name=\"polowaRoku\" id=\"polowaRoku\" value=\"2\" >Druga połowa roku</label>
              </div>
          </div>
          <button id=\"wyswietl\" type=\"submit\" class=\"btn btn-default\">Submit</button>
        </form>

      ";
        }
        // line 27
        echo "    </div>
";
        
        $__internal_9490242e14c0c8c71c4108f00b02794e49f127b26f7c704f99bd7b2bf9b1fda7->leave($__internal_9490242e14c0c8c71c4108f00b02794e49f127b26f7c704f99bd7b2bf9b1fda7_prof);

    }

    public function getTemplateName()
    {
        return "wyborRoku.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  74 => 15,  63 => 13,  59 => 12,  52 => 8,  49 => 7,  45 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*       {% if tablicaLat == null %}*/
/*       <div id="danger" class="alert alert-danger"  role="alert">W bazie nie ma harmonogramów!</div>*/
/*       {% else %}*/
/* */
/*         <form class="form" action="{{path('wyswietleniePolrocza')}}" method="post" name="form" id="form" role="form">*/
/*           <div class="form-group">*/
/*               <label for="sel1">Select list (select one):</label>*/
/*               <select name="rok" class="form-control" id="sel1">*/
/*                 {% for rok in tablicaLat %}*/
/*                     <option  id="rok" value="{{rok.Rok}}"> {{rok.Rok}} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="radio">*/
/*                   <label><input type="radio" name="polowaRoku" id="polowaRoku" value="1" checked>Pierwsza połowa roku</label>*/
/*               </div>*/
/*               <div class="radio">*/
/*                   <label><input type="radio" name="polowaRoku" id="polowaRoku" value="2" >Druga połowa roku</label>*/
/*               </div>*/
/*           </div>*/
/*           <button id="wyswietl" type="submit" class="btn btn-default">Submit</button>*/
/*         </form>*/
/* */
/*       {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
