<?php

/* ::showAllStrazacy.php.twig */
class __TwigTemplate_b62d3e6269f9d508c08a85a98afa2b15235c90f14b4f98e8ea29064c5476cb37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::showAllStrazacy.php.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container\" id=\"zawartosc\">
    ";
        // line 4
        if (((isset($context["strazacy"]) ? $context["strazacy"] : null) == null)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["strazacy"]) ? $context["strazacy"] : null));
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
                echo "')\" class=\"btn btn-sm btn-warning\">Edytuj</a></td>
          <td><a type=\"button\"
            ";
                // line 17
                if (($this->getAttribute($context["strazak"], "Aktywny", array()) > 0)) {
                    // line 18
                    echo "                class=\"btn btn-sm btn-success\"

            ";
                } else {
                    // line 21
                    echo "                class=\"btn btn-sm btn-danger\"
            ";
                }
                // line 23
                echo "
            href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aktywny", array("idStrazaka" => $this->getAttribute($context["strazak"], "ID", array()), "aktywny" => $this->getAttribute($context["strazak"], "Aktywny", array()))), "html", null, true);
                echo "\" >Aktywny</a></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['strazak'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </table>
    </div>

    ";
        }
        // line 31
        echo "
    <h2 id=\"dodaj\">Dodaj Strażaka</h2><div id=\"przycisk\"></div>
    <form action=\"";
        // line 33
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
        // line 44
        if (((isset($context["stanowiska"]) ? $context["stanowiska"] : null) != false)) {
            // line 45
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stanowiska"]) ? $context["stanowiska"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["stanowisko"]) {
                // line 46
                echo "          <div class=\"radio\">
            <label><input type=\"radio\" name=\"stanowisko\" id=\"stanowisko\" value=\"";
                // line 47
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
            // line 50
            echo "          ";
        }
        // line 51
        echo "      </fieldset>
      <fieldset>
        <legend>Wybierz uprawnienia dodatkowe</legend>
        ";
        // line 54
        if (((isset($context["uprawnienia"]) ? $context["uprawnienia"] : null) != false)) {
            // line 55
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["uprawnienia"]) ? $context["uprawnienia"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["uprawnienie"]) {
                // line 56
                echo "        <div class=\"checkbox\">
          <label><input type=\"checkbox\" name=\"uprawnienie[]\" id=\"uprawnienie\" value=\"";
                // line 57
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
            // line 60
            echo "        ";
        }
        // line 61
        echo "    </fieldset>

        <button id=\"wstaw_button\" type=\"submit\" class=\"btn btn-default\">Wstaw</button>
    </form>
    </div>
    <br>
    <br>
    <p id=\"test\"></p>

";
    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        // line 74
        echo "
    ";
        // line 75
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e5244fe_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5244fe_0") : $this->env->getExtension('asset')->getAssetUrl("js/e5244fe_showAllStrazacy_1.js");
            // line 76
            echo "        <script>var strazak_uprawnienia= ";
            echo twig_jsonencode_filter((isset($context["strazak_uprawnienia"]) ? $context["strazak_uprawnienia"] : null));
            echo ";</script>
        <script src=\"";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e5244fe"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5244fe") : $this->env->getExtension('asset')->getAssetUrl("js/e5244fe.js");
            // line 76
            echo "        <script>var strazak_uprawnienia= ";
            echo twig_jsonencode_filter((isset($context["strazak_uprawnienia"]) ? $context["strazak_uprawnienia"] : null));
            echo ";</script>
        <script src=\"";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 79
        echo "
";
    }

    public function getTemplateName()
    {
        return "::showAllStrazacy.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 79,  213 => 77,  208 => 76,  201 => 77,  196 => 76,  192 => 75,  189 => 74,  186 => 73,  173 => 61,  170 => 60,  159 => 57,  156 => 56,  151 => 55,  149 => 54,  144 => 51,  141 => 50,  130 => 47,  127 => 46,  122 => 45,  120 => 44,  106 => 33,  102 => 31,  96 => 27,  87 => 24,  84 => 23,  80 => 21,  75 => 18,  73 => 17,  56 => 15,  53 => 14,  49 => 13,  41 => 7,  37 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
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
/*           <td> {{ strazak.Imie}} </td><td>{{ strazak.Nazwisko }}</td><td>{{strazak.Nazwa_Stanowiska}}</td><td><a type="button" onclick="edit('{{ strazak.Imie }}','{{ strazak.Nazwisko}}', '{{ strazak.ID }}', '{{ strazak.ID_Stanowiska }}')" class="btn btn-sm btn-warning">Edytuj</a></td>*/
/*           <td><a type="button"*/
/*             {% if strazak.Aktywny > 0 %}*/
/*                 class="btn btn-sm btn-success"*/
/* */
/*             {% else %}*/
/*                 class="btn btn-sm btn-danger"*/
/*             {% endif %}*/
/* */
/*             href="{{ path('aktywny', {'idStrazaka': strazak.ID, 'aktywny':strazak.Aktywny}) }}" >Aktywny</a></td>*/
/*         </tr>*/
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
