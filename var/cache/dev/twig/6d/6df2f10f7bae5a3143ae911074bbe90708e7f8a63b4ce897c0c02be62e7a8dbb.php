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
        $__internal_b150e88d23208d081685bfd40451529de74694c68db1df585237a7cb77d409e8 = $this->env->getExtension("native_profiler");
        $__internal_b150e88d23208d081685bfd40451529de74694c68db1df585237a7cb77d409e8->enter($__internal_b150e88d23208d081685bfd40451529de74694c68db1df585237a7cb77d409e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showAllStrazacy.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b150e88d23208d081685bfd40451529de74694c68db1df585237a7cb77d409e8->leave($__internal_b150e88d23208d081685bfd40451529de74694c68db1df585237a7cb77d409e8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_27c67f4f2ddec950a4dad6834f1bcdd0773c1a1e33e5666f98328381d2ea4d9f = $this->env->getExtension("native_profiler");
        $__internal_27c67f4f2ddec950a4dad6834f1bcdd0773c1a1e33e5666f98328381d2ea4d9f->enter($__internal_27c67f4f2ddec950a4dad6834f1bcdd0773c1a1e33e5666f98328381d2ea4d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "ID_Stanowiska", array()), "html", null, true);
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
                echo "\" autocomplete=\"off\">";
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
      <fieldset>
        <legend>Wybierz uprawnienia dodatkowe</legend>
        ";
        // line 48
        if (((isset($context["uprawnienia"]) ? $context["uprawnienia"] : $this->getContext($context, "uprawnienia")) != false)) {
            // line 49
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["uprawnienia"]) ? $context["uprawnienia"] : $this->getContext($context, "uprawnienia")));
            foreach ($context['_seq'] as $context["_key"] => $context["uprawnienie"]) {
                // line 50
                echo "        <div class=\"checkbox\">
          <label><input type=\"checkbox\" name=\"uprawnienie[]\" id=\"uprawnienie\" value=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["uprawnienie"], "ID", array()), "html", null, true);
                echo "\" autocomplete=\"off\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["uprawnienie"], "Nazwa", array()), "html", null, true);
                echo "</label>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uprawnienie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        // line 55
        echo "    </fieldset>

        <button id=\"wstaw_button\" type=\"submit\" class=\"btn btn-default\">Wstaw</button>
    </form>
    </div>
    <br>
    <br>
    <p id=\"test\"></p>

";
        
        $__internal_27c67f4f2ddec950a4dad6834f1bcdd0773c1a1e33e5666f98328381d2ea4d9f->leave($__internal_27c67f4f2ddec950a4dad6834f1bcdd0773c1a1e33e5666f98328381d2ea4d9f_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f44dc6689067d132a8cb6f34b5351caa257a71e61027b026ba1e446edbeb54a5 = $this->env->getExtension("native_profiler");
        $__internal_f44dc6689067d132a8cb6f34b5351caa257a71e61027b026ba1e446edbeb54a5->enter($__internal_f44dc6689067d132a8cb6f34b5351caa257a71e61027b026ba1e446edbeb54a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "
    ";
        // line 69
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e5244fe_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5244fe_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e5244fe_showAllStrazacy_1.js");
            // line 70
            echo "        <script>var strazak_uprawnienia= ";
            echo twig_jsonencode_filter((isset($context["strazak_uprawnienia"]) ? $context["strazak_uprawnienia"] : $this->getContext($context, "strazak_uprawnienia")));
            echo ";</script>
        <script src=\"";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e5244fe"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5244fe") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e5244fe.js");
            // line 70
            echo "        <script>var strazak_uprawnienia= ";
            echo twig_jsonencode_filter((isset($context["strazak_uprawnienia"]) ? $context["strazak_uprawnienia"] : $this->getContext($context, "strazak_uprawnienia")));
            echo ";</script>
        <script src=\"";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 73
        echo "
";
        
        $__internal_f44dc6689067d132a8cb6f34b5351caa257a71e61027b026ba1e446edbeb54a5->leave($__internal_f44dc6689067d132a8cb6f34b5351caa257a71e61027b026ba1e446edbeb54a5_prof);

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
        return array (  220 => 73,  214 => 71,  209 => 70,  202 => 71,  197 => 70,  193 => 69,  190 => 68,  184 => 67,  168 => 55,  165 => 54,  154 => 51,  151 => 50,  146 => 49,  144 => 48,  139 => 45,  136 => 44,  125 => 41,  122 => 40,  117 => 39,  115 => 38,  101 => 27,  97 => 25,  91 => 21,  65 => 15,  62 => 14,  58 => 13,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*           <td> {{ strazak.Imie}} </td><td>{{ strazak.Nazwisko }}</td><td>{{strazak.Nazwa_Stanowiska}}</td><td><a type="button" onclick="edit('{{ strazak.Imie }}','{{ strazak.Nazwisko}}', '{{ strazak.ID }}', '{{ strazak.ID_Stanowiska }}')" class="btn btn-sm btn-warning">Edytuj</a></td><td><a type="button" class="btn btn-sm btn-danger" href="{{ path('delete', {'idStrazaka': strazak.ID}) }}" >x</a></td>*/
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
/*             <label><input type="radio" name="stanowisko" id="stanowisko" value="{{stanowisko.ID}}" autocomplete="off">{{stanowisko.Nazwa}}</label>*/
/*           </div>*/
/*           {% endfor %}*/
/*           {% endif %}*/
/*       </fieldset>*/
/*       <fieldset>*/
/*         <legend>Wybierz uprawnienia dodatkowe</legend>*/
/*         {% if uprawnienia != false %}*/
/*         {% for uprawnienie in uprawnienia %}*/
/*         <div class="checkbox">*/
/*           <label><input type="checkbox" name="uprawnienie[]" id="uprawnienie" value="{{uprawnienie.ID}}" autocomplete="off">{{uprawnienie.Nazwa}}</label>*/
/*         </div>*/
/*         {% endfor %}*/
/*         {% endif %}*/
/*     </fieldset>*/
/* */
/*         <button id="wstaw_button" type="submit" class="btn btn-default">Wstaw</button>*/
/*     </form>*/
/*     </div>*/
/*     <br>*/
/*     <br>*/
/*     <p id="test"></p>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/* */
/*     {% javascripts '@AppBundle/Resources/public/js/showAllStrazacy.js' %}*/
/*         <script>var strazak_uprawnienia= {{strazak_uprawnienia|json_encode()|raw}};</script>*/
/*         <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/* {% endblock %}*/
/* */
