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
        $__internal_10711b9ce7f2c5eb6e1687c120497438dced0f3fe3509fe455b224e066132d67 = $this->env->getExtension("native_profiler");
        $__internal_10711b9ce7f2c5eb6e1687c120497438dced0f3fe3509fe455b224e066132d67->enter($__internal_10711b9ce7f2c5eb6e1687c120497438dced0f3fe3509fe455b224e066132d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showAllStrazacy.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10711b9ce7f2c5eb6e1687c120497438dced0f3fe3509fe455b224e066132d67->leave($__internal_10711b9ce7f2c5eb6e1687c120497438dced0f3fe3509fe455b224e066132d67_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_995efb3b2cdd3808e18bd70fd4235c5835e08251dbdb3a5b2daa60817c826ede = $this->env->getExtension("native_profiler");
        $__internal_995efb3b2cdd3808e18bd70fd4235c5835e08251dbdb3a5b2daa60817c826ede->enter($__internal_995efb3b2cdd3808e18bd70fd4235c5835e08251dbdb3a5b2daa60817c826ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo "')\" class=\"btn btn-sm btn-warning\">Edytuj</a></td>
          <td><a type=\"button\"
          ";
                // line 17
                if (($this->getAttribute($context["strazak"], "Aktywny", array()) > 0)) {
                    // line 18
                    echo "                class=\"btn btn-sm btn-success\" ";
                    if ((((isset($context["ostatniMiesiac"]) ? $context["ostatniMiesiac"] : $this->getContext($context, "ostatniMiesiac")) == 12) || ((isset($context["ostatniMiesiac"]) ? $context["ostatniMiesiac"] : $this->getContext($context, "ostatniMiesiac")) == 6))) {
                        // line 19
                        echo "                    href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aktywny", array("idStrazaka" => $this->getAttribute($context["strazak"], "ID", array()), "aktywny" => $this->getAttribute($context["strazak"], "Aktywny", array()))), "html", null, true);
                        echo "\"";
                    } else {
                        echo "disabled
                        ";
                    }
                    // line 20
                    echo ">Aktywny</a></td>
          ";
                } else {
                    // line 22
                    echo "                class=\"btn btn-sm btn-danger\" ";
                    if ((((isset($context["ostatniMiesiac"]) ? $context["ostatniMiesiac"] : $this->getContext($context, "ostatniMiesiac")) == 12) || ((isset($context["ostatniMiesiac"]) ? $context["ostatniMiesiac"] : $this->getContext($context, "ostatniMiesiac")) == 6))) {
                        // line 23
                        echo "                     href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aktywny", array("idStrazaka" => $this->getAttribute($context["strazak"], "ID", array()), "aktywny" => $this->getAttribute($context["strazak"], "Aktywny", array()))), "html", null, true);
                        echo "\" ";
                    } else {
                        echo "disabled
                        ";
                    }
                    // line 24
                    echo "> Nieaktywny</a></td>
          ";
                }
                // line 26
                echo "
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['strazak'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </table>
    </div>
    ";
        }
        // line 32
        echo "    ";
        if ((((isset($context["ostatniMiesiac"]) ? $context["ostatniMiesiac"] : $this->getContext($context, "ostatniMiesiac")) == 12) || ((isset($context["ostatniMiesiac"]) ? $context["ostatniMiesiac"] : $this->getContext($context, "ostatniMiesiac")) == 6))) {
            // line 33
            echo "    <h2 id=\"dodaj\">Dodaj Strażaka</h2><div id=\"przycisk\"></div>
    <form action=\"";
            // line 34
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
            // line 45
            if (((isset($context["stanowiska"]) ? $context["stanowiska"] : $this->getContext($context, "stanowiska")) != false)) {
                // line 46
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stanowiska"]) ? $context["stanowiska"] : $this->getContext($context, "stanowiska")));
                foreach ($context['_seq'] as $context["_key"] => $context["stanowisko"]) {
                    // line 47
                    echo "          <div class=\"radio\">
            <label><input type=\"radio\" name=\"stanowisko\" id=\"stanowisko\" value=\"";
                    // line 48
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
                // line 51
                echo "          ";
            }
            // line 52
            echo "      </fieldset>
      <fieldset>
        <legend>Wybierz uprawnienia dodatkowe</legend>
        ";
            // line 55
            if (((isset($context["uprawnienia"]) ? $context["uprawnienia"] : $this->getContext($context, "uprawnienia")) != false)) {
                // line 56
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["uprawnienia"]) ? $context["uprawnienia"] : $this->getContext($context, "uprawnienia")));
                foreach ($context['_seq'] as $context["_key"] => $context["uprawnienie"]) {
                    // line 57
                    echo "        <div class=\"checkbox\">
          <label><input type=\"checkbox\" name=\"uprawnienie[]\" id=\"uprawnienie\" value=\"";
                    // line 58
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
                // line 61
                echo "        ";
            }
            // line 62
            echo "    </fieldset>
        <button id=\"wstaw_button\" type=\"submit\" class=\"btn btn-default\">Wstaw</button>
    </form>
    ";
        } else {
            // line 66
            echo "        <div id=\"danger\" class=\"alert alert-danger\"  role=\"alert\">Nie można edytować ani dodawać strażaków w trakcie ustalania nowego grafiku!
          <a type=\"button\" class=\"btn btn-sm btn-primary\" href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("generateOneAfterOne");
            echo "\" >Kontynuuj</a>
        </div>
    ";
        }
        // line 70
        echo "    </div>
    <br>
    <br>


";
        
        $__internal_995efb3b2cdd3808e18bd70fd4235c5835e08251dbdb3a5b2daa60817c826ede->leave($__internal_995efb3b2cdd3808e18bd70fd4235c5835e08251dbdb3a5b2daa60817c826ede_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8864aee150ea16f83a66fdbab58f23afeb3845eda314bf10f3ab31d8b76556e6 = $this->env->getExtension("native_profiler");
        $__internal_8864aee150ea16f83a66fdbab58f23afeb3845eda314bf10f3ab31d8b76556e6->enter($__internal_8864aee150ea16f83a66fdbab58f23afeb3845eda314bf10f3ab31d8b76556e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "
    ";
        // line 80
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e5244fe_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5244fe_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e5244fe_showAllStrazacy_1.js");
            // line 81
            echo "        <script>var strazak_uprawnienia= ";
            echo twig_jsonencode_filter((isset($context["strazak_uprawnienia"]) ? $context["strazak_uprawnienia"] : $this->getContext($context, "strazak_uprawnienia")));
            echo ";</script>
        <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e5244fe"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e5244fe") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/e5244fe.js");
            // line 81
            echo "        <script>var strazak_uprawnienia= ";
            echo twig_jsonencode_filter((isset($context["strazak_uprawnienia"]) ? $context["strazak_uprawnienia"] : $this->getContext($context, "strazak_uprawnienia")));
            echo ";</script>
        <script src=\"";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 84
        echo "
";
        
        $__internal_8864aee150ea16f83a66fdbab58f23afeb3845eda314bf10f3ab31d8b76556e6->leave($__internal_8864aee150ea16f83a66fdbab58f23afeb3845eda314bf10f3ab31d8b76556e6_prof);

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
        return array (  263 => 84,  257 => 82,  252 => 81,  245 => 82,  240 => 81,  236 => 80,  233 => 79,  227 => 78,  215 => 70,  209 => 67,  206 => 66,  200 => 62,  197 => 61,  186 => 58,  183 => 57,  178 => 56,  176 => 55,  171 => 52,  168 => 51,  157 => 48,  154 => 47,  149 => 46,  147 => 45,  133 => 34,  130 => 33,  127 => 32,  122 => 29,  114 => 26,  110 => 24,  102 => 23,  99 => 22,  95 => 20,  87 => 19,  84 => 18,  82 => 17,  65 => 15,  62 => 14,  58 => 13,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
/*           {% if strazak.Aktywny > 0 %}*/
/*                 class="btn btn-sm btn-success" {% if (ostatniMiesiac == 12) or (ostatniMiesiac == 6) %}*/
/*                     href="{{ path('aktywny', {'idStrazaka': strazak.ID, 'aktywny':strazak.Aktywny}) }}"{% else %}disabled*/
/*                         {% endif %}>Aktywny</a></td>*/
/*           {% else %}*/
/*                 class="btn btn-sm btn-danger" {% if (ostatniMiesiac == 12) or (ostatniMiesiac == 6) %}*/
/*                      href="{{ path('aktywny', {'idStrazaka': strazak.ID, 'aktywny':strazak.Aktywny}) }}" {% else %}disabled*/
/*                         {% endif %}> Nieaktywny</a></td>*/
/*           {% endif %}*/
/* */
/*         </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if ostatniMiesiac == 12 or ostatniMiesiac == 6 %}*/
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
/*         <button id="wstaw_button" type="submit" class="btn btn-default">Wstaw</button>*/
/*     </form>*/
/*     {% else %}*/
/*         <div id="danger" class="alert alert-danger"  role="alert">Nie można edytować ani dodawać strażaków w trakcie ustalania nowego grafiku!*/
/*           <a type="button" class="btn btn-sm btn-primary" href="{{ path('generateOneAfterOne') }}" >Kontynuuj</a>*/
/*         </div>*/
/*     {% endif %}*/
/*     </div>*/
/*     <br>*/
/*     <br>*/
/* */
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
