<?php

/* ::wyborRoku.html.twig */
class __TwigTemplate_91f9b9f9eaf085fc0a7e2443468e5f5fd1b1350e2b7760c17c283f0f13faf02f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::wyborRoku.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container\">
      ";
        // line 4
        if (((isset($context["tablicaLat"]) ? $context["tablicaLat"] : null) == null)) {
            // line 5
            echo "      <div id=\"danger\" class=\"alert alert-danger\"  role=\"alert\">Brak strażaków w bazie!</div>
      ";
        } else {
            // line 7
            echo "        <form class=\"form\" action=\"\" method=\"post\" name=\"form\" id=\"form\" role=\"form\">
          <div class=\"form-group\">
              <label for=\"sel1\">Select list (select one):</label>
              <select class=\"form-control\" id=\"sel1\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tablicaLat"]) ? $context["tablicaLat"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["rok"]) {
                // line 12
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rok"], "Rok", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rok"], "Rok", array()), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rok'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "              </select>
              <div class=\"radio\">
                  <label><input type=\"radio\" name=\"miesiac\" id=\"miesiac\" value=\"1\" checked>Pierwsza połowa roku</label>
              </div>
              <div class=\"radio\">
                  <label><input type=\"radio\" name=\"miesiac\" id=\"miesiac\" value=\"7\" >Druga połowa roku</label>
              </div>
          </div>
          <button id=\"stworz\" type=\"submit\" class=\"btn btn-default\">Submit</button>
        </form>
      ";
        }
        // line 25
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "::wyborRoku.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  61 => 14,  50 => 12,  46 => 11,  40 => 7,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <div class="container">*/
/*       {% if tablicaLat == null %}*/
/*       <div id="danger" class="alert alert-danger"  role="alert">Brak strażaków w bazie!</div>*/
/*       {% else %}*/
/*         <form class="form" action="" method="post" name="form" id="form" role="form">*/
/*           <div class="form-group">*/
/*               <label for="sel1">Select list (select one):</label>*/
/*               <select class="form-control" id="sel1">*/
/*                 {% for rok in tablicaLat %}*/
/*                     <option value="{{rok.Rok}}">{{rok.Rok}}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="radio">*/
/*                   <label><input type="radio" name="miesiac" id="miesiac" value="1" checked>Pierwsza połowa roku</label>*/
/*               </div>*/
/*               <div class="radio">*/
/*                   <label><input type="radio" name="miesiac" id="miesiac" value="7" >Druga połowa roku</label>*/
/*               </div>*/
/*           </div>*/
/*           <button id="stworz" type="submit" class="btn btn-default">Submit</button>*/
/*         </form>*/
/*       {% endif %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
