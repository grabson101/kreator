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
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["strazacy"]) ? $context["strazacy"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["strazak"]) {
                // line 11
                echo "
        <div class=\"panel-body\">";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "Imie", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "Nazwisko", array()), "html", null, true);
                echo "  <a type=\"button\" class=\"btn btn-sm btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete", array("idStrazaka" => $this->getAttribute($context["strazak"], "ID", array()))), "html", null, true);
                echo "\" >x</a> <a type=\"button\" onclick=\"edit('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "Imie", array()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "Nazwisko", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "ID", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["strazak"], "Stanowisko", array()), "html", null, true);
                echo "')\" class=\"btn btn-sm btn-warning\">Edytuj</a> </div>



        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['strazak'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </div>

    ";
        }
        // line 20
        echo "
    <h2 id=\"dodaj\">Dodaj Strażaka</h2><div id=\"przycisk\"></div>
    <form action=\"";
        // line 22
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
        <div class=\"form-group\">
            <label for=\"stanowisko\">Stanowisko:</label>
            <input type=\"number\" min=\"1\" max=\"6\"  class=\"form-control\" name=\"stanowisko\" id=\"stanowisko\" autocomplete=\"off\">
        </div>
        <div class=\"form-group\">
            <input type=\"hidden\" name=\"id\" id=\"id\"  autocomplete=\"off\"/>
        </div>
        <button id=\"wstaw_button\" type=\"submit\" class=\"btn btn-default\">Wstaw</button>
    </form>
    </div>
    <br>
    <br>

";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('asset')->getAssetUrl("js/bb54fd1_part_1_formularzGen_1.js");
            // line 49
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "bb54fd1_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_1") : $this->env->getExtension('asset')->getAssetUrl("js/bb54fd1_part_1_showAllStrazacy_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "bb54fd1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1") : $this->env->getExtension('asset')->getAssetUrl("js/bb54fd1.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
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
        return array (  120 => 49,  115 => 48,  112 => 47,  85 => 22,  81 => 20,  76 => 17,  53 => 12,  50 => 11,  46 => 10,  41 => 7,  37 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
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
/*     {% for strazak in strazacy %}*/
/* */
/*         <div class="panel-body">{{ strazak.Imie}} {{ strazak.Nazwisko }}  <a type="button" class="btn btn-sm btn-danger" href="{{ path('delete', {'idStrazaka': strazak.ID}) }}" >x</a> <a type="button" onclick="edit('{{ strazak.Imie }}','{{ strazak.Nazwisko}}', '{{ strazak.ID }}', '{{ strazak.Stanowisko }}')" class="btn btn-sm btn-warning">Edytuj</a> </div>*/
/* */
/* */
/* */
/*         {% endfor %}*/
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
/*         <div class="form-group">*/
/*             <label for="stanowisko">Stanowisko:</label>*/
/*             <input type="number" min="1" max="6"  class="form-control" name="stanowisko" id="stanowisko" autocomplete="off">*/
/*         </div>*/
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
