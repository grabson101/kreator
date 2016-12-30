<?php

/* ustawienia.html.twig */
class __TwigTemplate_6431668510291b0a68c96211c0c45f988c822289e6b2f2bfca2dc0bf3457e75d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ustawienia.html.twig", 1);
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
        $__internal_d3eceb36909a7b9c8738652e06f51a7a6bfda278afeddf601817cf82b502d045 = $this->env->getExtension("native_profiler");
        $__internal_d3eceb36909a7b9c8738652e06f51a7a6bfda278afeddf601817cf82b502d045->enter($__internal_d3eceb36909a7b9c8738652e06f51a7a6bfda278afeddf601817cf82b502d045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ustawienia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3eceb36909a7b9c8738652e06f51a7a6bfda278afeddf601817cf82b502d045->leave($__internal_d3eceb36909a7b9c8738652e06f51a7a6bfda278afeddf601817cf82b502d045_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4651529c21cb1f59687e31b513d6e8260a7e4ad17b036ce9daa810b73f4ef47 = $this->env->getExtension("native_profiler");
        $__internal_b4651529c21cb1f59687e31b513d6e8260a7e4ad17b036ce9daa810b73f4ef47->enter($__internal_b4651529c21cb1f59687e31b513d6e8260a7e4ad17b036ce9daa810b73f4ef47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\" id=\"zawartosc\">

    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("ustawieniaSet");
        echo "\" method=\"post\" name=\"form\" id=\"form\" role=\"form\">
      <fieldset>
        <legend>Wybierz ilu minimalnie pracowników z każdego stanowiska musi być każdego dnia</legend>

          ";
        // line 9
        if (((isset($context["stanowiska"]) ? $context["stanowiska"] : $this->getContext($context, "stanowiska")) != false)) {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stanowiska"]) ? $context["stanowiska"] : $this->getContext($context, "stanowiska")));
            foreach ($context['_seq'] as $context["_key"] => $context["stanowisko"]) {
                // line 11
                echo "                  <div class=\"form-group row\">

                      <div class=\"col-xs-4\">
                          <label><input class=\"form-control\" type=\"number\" name=stanowisko[";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["stanowisko"], "ID", array()), "html", null, true);
                echo "] value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["stanowisko"], "Minimum", array()), "html", null, true);
                echo " id=\"stanowisko\" min=\"0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["stanowisko"], "Nazwa", array()), "html", null, true);
                echo "</label>
                      </div>
                  </div>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stanowisko'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "          ";
        }
        // line 20
        echo "    </fieldset>
    <fieldset>
      <legend>Wybierz ilu minimalnie pracowników z każdego stanowiska musi być każdego dnia</legend>
          ";
        // line 23
        if (((isset($context["ustawienia"]) ? $context["ustawienia"] : $this->getContext($context, "ustawienia")) != false)) {
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ustawienia"]) ? $context["ustawienia"] : $this->getContext($context, "ustawienia")));
            foreach ($context['_seq'] as $context["_key"] => $context["opcja"]) {
                // line 25
                echo "                <div class=\"form-group row\">

                      <div class=\"col-xs-4\">
                          <label><input class=\"form-control\" type=\"number\" name=opcja[";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["opcja"], "ID", array()), "html", null, true);
                echo "] value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["opcja"], "Minimum", array()), "html", null, true);
                echo " id=\"opcja\" min=\"0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["opcja"], "Nazwa", array()), "html", null, true);
                echo "</label>
                      </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcja'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "          ";
        }
        // line 33
        echo "    </fieldset>

    <fieldset>
      <legend>Wybierz uprawnienia dodatkowe, które też mają być liczone (\"0\"- uprawnienie nie jest brane pod uwagę)</legend>
      ";
        // line 37
        if (((isset($context["uprawnienia"]) ? $context["uprawnienia"] : $this->getContext($context, "uprawnienia")) != false)) {
            // line 38
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["uprawnienia"]) ? $context["uprawnienia"] : $this->getContext($context, "uprawnienia")));
            foreach ($context['_seq'] as $context["_key"] => $context["uprawnienie"]) {
                // line 39
                echo "      <div class=\"form-group row\">
        <div class=\"col-xs-4\">
          <label><input class=\"form-control\" type=\"number\" name=uprawnienie[";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["uprawnienie"], "ID", array()), "html", null, true);
                echo "] value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["uprawnienie"], "Minimum", array()), "html", null, true);
                echo " id=\"opcja\" min=\"0\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["uprawnienie"], "Nazwa", array()), "html", null, true);
                echo "</label>
        </div>
    </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uprawnienie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      ";
        }
        // line 46
        echo "  </fieldset>

    <button id=\"wstaw_button\" type=\"submit\" class=\"btn btn-default\">Zapisz</button>
  </form>

</div>

";
        
        $__internal_b4651529c21cb1f59687e31b513d6e8260a7e4ad17b036ce9daa810b73f4ef47->leave($__internal_b4651529c21cb1f59687e31b513d6e8260a7e4ad17b036ce9daa810b73f4ef47_prof);

    }

    public function getTemplateName()
    {
        return "ustawienia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 46,  146 => 45,  132 => 41,  128 => 39,  123 => 38,  121 => 37,  115 => 33,  112 => 32,  98 => 28,  93 => 25,  88 => 24,  86 => 23,  81 => 20,  78 => 19,  63 => 14,  58 => 11,  53 => 10,  51 => 9,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="container" id="zawartosc">*/
/* */
/*     <form action="{{path('ustawieniaSet')}}" method="post" name="form" id="form" role="form">*/
/*       <fieldset>*/
/*         <legend>Wybierz ilu minimalnie pracowników z każdego stanowiska musi być każdego dnia</legend>*/
/* */
/*           {% if stanowiska != false %}*/
/*             {% for stanowisko in stanowiska %}*/
/*                   <div class="form-group row">*/
/* */
/*                       <div class="col-xs-4">*/
/*                           <label><input class="form-control" type="number" name=stanowisko[{{stanowisko.ID}}] value={{stanowisko.Minimum}} id="stanowisko" min="0">{{stanowisko.Nazwa}}</label>*/
/*                       </div>*/
/*                   </div>*/
/* */
/*             {% endfor %}*/
/*           {% endif %}*/
/*     </fieldset>*/
/*     <fieldset>*/
/*       <legend>Wybierz ilu minimalnie pracowników z każdego stanowiska musi być każdego dnia</legend>*/
/*           {% if ustawienia != false %}*/
/*             {% for opcja in ustawienia %}*/
/*                 <div class="form-group row">*/
/* */
/*                       <div class="col-xs-4">*/
/*                           <label><input class="form-control" type="number" name=opcja[{{ opcja.ID }}] value={{opcja.Minimum}} id="opcja" min="0">{{opcja.Nazwa}}</label>*/
/*                       </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*     </fieldset>*/
/* */
/*     <fieldset>*/
/*       <legend>Wybierz uprawnienia dodatkowe, które też mają być liczone ("0"- uprawnienie nie jest brane pod uwagę)</legend>*/
/*       {% if uprawnienia != false %}*/
/*       {% for uprawnienie in uprawnienia %}*/
/*       <div class="form-group row">*/
/*         <div class="col-xs-4">*/
/*           <label><input class="form-control" type="number" name=uprawnienie[{{ uprawnienie.ID }}] value={{uprawnienie.Minimum}} id="opcja" min="0">{{uprawnienie.Nazwa}}</label>*/
/*         </div>*/
/*     </div>*/
/*       {% endfor %}*/
/*       {% endif %}*/
/*   </fieldset>*/
/* */
/*     <button id="wstaw_button" type="submit" class="btn btn-default">Zapisz</button>*/
/*   </form>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
