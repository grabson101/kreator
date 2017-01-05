<?php

/* ::ustawienia.html.twig */
class __TwigTemplate_9c019ed6da3a17c2077499d7a6a1df26baf1a180c347195dfcc56566d116b698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::ustawienia.html.twig", 1);
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
        echo "<div class=\"container\" id=\"zawartosc\">

    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("ustawieniaSet");
        echo "\" method=\"post\" name=\"form\" id=\"form\" role=\"form\">
      <fieldset>
        <legend>Wybierz ilu minimalnie pracowników z każdego stanowiska musi być każdego dnia</legend>

          ";
        // line 9
        if (((isset($context["stanowiska"]) ? $context["stanowiska"] : null) != false)) {
            // line 10
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stanowiska"]) ? $context["stanowiska"] : null));
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
        if (((isset($context["ustawienia"]) ? $context["ustawienia"] : null) != false)) {
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ustawienia"]) ? $context["ustawienia"] : null));
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
        if (((isset($context["uprawnienia"]) ? $context["uprawnienia"] : null) != false)) {
            // line 38
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["uprawnienia"]) ? $context["uprawnienia"] : null));
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
    }

    public function getTemplateName()
    {
        return "::ustawienia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 46,  137 => 45,  123 => 41,  119 => 39,  114 => 38,  112 => 37,  106 => 33,  103 => 32,  89 => 28,  84 => 25,  79 => 24,  77 => 23,  72 => 20,  69 => 19,  54 => 14,  49 => 11,  44 => 10,  42 => 9,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
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
