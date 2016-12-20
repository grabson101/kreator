<?php

/* showAllStrazacy.php.twig */
class __TwigTemplate_46e3c5cd9fc63d3ca9d6aaabd94d2de75eed8bf513435c4cc795579cdf142193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "showAllStrazacy.php.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5abcc61fba4951ee88a3016e0b98667f4fce5977e9601edfdfa1dff96e6bd458 = $this->env->getExtension("native_profiler");
        $__internal_5abcc61fba4951ee88a3016e0b98667f4fce5977e9601edfdfa1dff96e6bd458->enter($__internal_5abcc61fba4951ee88a3016e0b98667f4fce5977e9601edfdfa1dff96e6bd458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showAllStrazacy.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5abcc61fba4951ee88a3016e0b98667f4fce5977e9601edfdfa1dff96e6bd458->leave($__internal_5abcc61fba4951ee88a3016e0b98667f4fce5977e9601edfdfa1dff96e6bd458_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcec2eb8e1ed71e1f82fc60c3a769c129e10b36de89f8b7d7a882233a080ff4b = $this->env->getExtension("native_profiler");
        $__internal_dcec2eb8e1ed71e1f82fc60c3a769c129e10b36de89f8b7d7a882233a080ff4b->enter($__internal_dcec2eb8e1ed71e1f82fc60c3a769c129e10b36de89f8b7d7a882233a080ff4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\" id=\"zawartosc\">
    ";
        // line 4
        if (((isset($context["strazacy"]) ? $context["strazacy"] : $this->getContext($context, "strazacy")) == null)) {
            // line 5
            echo "        <div id=\"danger\" class=\"alert alert-danger\"  role=\"alert\">Brak strażaków w bazie!</div>
        ";
        } else {
            // line 7
            echo "
    <h2>Strażacy</h2>
    <div class=\"panel panel-default\">

    <table id=\"tabelka\" class=\"table table-striped\">
      <thead><tr><th>Imię</th><th>Nazwisko</th><th>Stanowisko</th></tr></thead>
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["strazacy"]) ? $context["strazacy"] : $this->getContext($context, "strazacy")));
            foreach ($context['_seq'] as $context["_key"] => $context["strazak"]) {
                // line 14
                echo "        <tr>
          <td> ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "Imie", array()), "html", null, true);
                echo " </td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "Nazwisko", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "Nazwa_Stanowiska", array()), "html", null, true);
                echo "</td><td><a type=\"button\" onclick=\"edit('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "Imie", array()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "Nazwisko", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "ID", array()), "html", null, true);
                echo "')\" class=\"btn btn-sm btn-warning\">Edytuj</a></td><td><a type=\"button\" class=\"btn btn-sm btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete", array("idStrazaka" => $this->getAttribute($context["strazak"], "ID", array()))), "html", null, true);
                echo "\" >x</a></td>
        </tr>



        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['strazak'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </table>
    </div>

    ";
        }
        // line 25
        echo "
    <h2 id=\"dodaj\">Dodaj Strażaka</h2><div id=\"przycisk\"></div>
    <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("addStrazak");
        echo "\" method=\"post\" name=\"form\" id=\"form\" role=\"form\">
        <div class=\"form-group\">
            <label for=\"imie\">Imię:</label>
            <input type=\"text\" class=\"form-control\" name=\"imie\" id=\"imie\" autocomplete=\"off\">
        </div>
        <div class=\"form-group\">
            <label for=\"nazwisko\">Nazwisko:</label>
            <input type=\"text\" class=\"form-control\" name=\"nazwisko\" id=\"nazwisko\" autocomplete=\"off\">
        </div>
        <fieldset>
          <legend>Wybierz odpowiednie stanowisko (tylko 1)</legend>
          ";
        // line 38
        if (((isset($context["stanowiska"]) ? $context["stanowiska"] : $this->getContext($context, "stanowiska")) != false)) {
            // line 39
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stanowiska"]) ? $context["stanowiska"] : $this->getContext($context, "stanowiska")));
            foreach ($context['_seq'] as $context["_key"] => $context["stanowisko"]) {
                // line 40
                echo "          <div class=\"radio\">
            <label><input type=\"radio\" name=\"stanowisko\" id=\"stanowisko\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["stanowisko"], "ID", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["stanowisko"], "Nazwa", array()), "html", null, true);
                echo "</label>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stanowisko'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "          ";
        }
        // line 45
        echo "      </fieldset>
        <div class=\"form-group\">
            <input type=\"hidden\" name=\"id\" id=\"id\"  autocomplete=\"off\"/>
        </div>
        <button id=\"wstaw_button\" type=\"submit\" class=\"btn btn-default\">Wstaw</button>
    </form>
    </div>
    <br>
    <br>

";
        
        $__internal_dcec2eb8e1ed71e1f82fc60c3a769c129e10b36de89f8b7d7a882233a080ff4b->leave($__internal_dcec2eb8e1ed71e1f82fc60c3a769c129e10b36de89f8b7d7a882233a080ff4b_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5d81ec811a8042f3d4d8e8246fd0356fda88eb97bd63d294f3749cc061bd72e = $this->env->getExtension("native_profiler");
        $__internal_f5d81ec811a8042f3d4d8e8246fd0356fda88eb97bd63d294f3749cc061bd72e->enter($__internal_f5d81ec811a8042f3d4d8e8246fd0356fda88eb97bd63d294f3749cc061bd72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1_part_1_formularzGen_1.js");
            // line 60
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "bb54fd1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1_part_1_showAllStrazacy_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_f5d81ec811a8042f3d4d8e8246fd0356fda88eb97bd63d294f3749cc061bd72e->leave($__internal_f5d81ec811a8042f3d4d8e8246fd0356fda88eb97bd63d294f3749cc061bd72e_prof);

    }

    public function getTemplateName()
    {
        return "showAllStrazacy.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 60,  160 => 59,  154 => 58,  137 => 45,  134 => 44,  123 => 41,  120 => 40,  115 => 39,  113 => 38,  99 => 27,  95 => 25,  89 => 21,  65 => 15,  62 => 14,  58 => 13,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <div class="container" id="zawartosc">*/
/*     {% if strazacy == null %}*/
/*         <div id="danger" class="alert alert-danger"  role="alert">Brak strażaków w bazie!</div>*/
/*         {% else %}*/
/* */
/*     <h2>Strażacy</h2>*/
/*     <div class="panel panel-default">*/
/* */
/*     <table id="tabelka" class="table table-striped">*/
/*       <thead><tr><th>Imię</th><th>Nazwisko</th><th>Stanowisko</th></tr></thead>*/
/*         {% for strazak in strazacy %}*/
/*         <tr>*/
/*           <td> {{ strazak.Imie}} </td><td>{{ strazak.Nazwisko }}</td><td>{{strazak.Nazwa_Stanowiska}}</td><td><a type="button" onclick="edit('{{ strazak.Imie }}','{{ strazak.Nazwisko}}', '{{ strazak.ID }}')" class="btn btn-sm btn-warning">Edytuj</a></td><td><a type="button" class="btn btn-sm btn-danger" href="{{ path('delete', {'idStrazaka': strazak.ID}) }}" >x</a></td>*/
/*         </tr>*/
/* */
/* */
/* */
/*         {% endfor %}*/
/*     </table>*/
/*     </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <h2 id="dodaj">Dodaj Strażaka</h2><div id="przycisk"></div>*/
/*     <form action="{{ path('addStrazak') }}" method="post" name="form" id="form" role="form">*/
/*         <div class="form-group">*/
/*             <label for="imie">Imię:</label>*/
/*             <input type="text" class="form-control" name="imie" id="imie" autocomplete="off">*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="nazwisko">Nazwisko:</label>*/
/*             <input type="text" class="form-control" name="nazwisko" id="nazwisko" autocomplete="off">*/
/*         </div>*/
/*         <fieldset>*/
/*           <legend>Wybierz odpowiednie stanowisko (tylko 1)</legend>*/
/*           {% if stanowiska != false %}*/
/*           {% for stanowisko in stanowiska %}*/
/*           <div class="radio">*/
/*             <label><input type="radio" name="stanowisko" id="stanowisko" value="{{stanowisko.ID}}">{{stanowisko.Nazwa}}</label>*/
/*           </div>*/
/*           {% endfor %}*/
/*           {% endif %}*/
/*       </fieldset>*/
/*         <div class="form-group">*/
/*             <input type="hidden" name="id" id="id"  autocomplete="off"/>*/
/*         </div>*/
/*         <button id="wstaw_button" type="submit" class="btn btn-default">Wstaw</button>*/
/*     </form>*/
/*     </div>*/
/*     <br>*/
/*     <br>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     {% javascripts '@AppBundle/Resources/public/js/*' %}*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
