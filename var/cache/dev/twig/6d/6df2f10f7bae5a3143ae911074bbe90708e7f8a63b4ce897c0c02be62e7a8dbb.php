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
        $__internal_3b12bc80fc3a15e45b238a011459ff423ba170b2fea4d7e15ce00316577333eb = $this->env->getExtension("native_profiler");
        $__internal_3b12bc80fc3a15e45b238a011459ff423ba170b2fea4d7e15ce00316577333eb->enter($__internal_3b12bc80fc3a15e45b238a011459ff423ba170b2fea4d7e15ce00316577333eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "showAllStrazacy.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b12bc80fc3a15e45b238a011459ff423ba170b2fea4d7e15ce00316577333eb->leave($__internal_3b12bc80fc3a15e45b238a011459ff423ba170b2fea4d7e15ce00316577333eb_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e76fbfac72255e51e0d0cd272a765f1aec7ab3c59a0264199a37d8eaf29ea2b = $this->env->getExtension("native_profiler");
        $__internal_0e76fbfac72255e51e0d0cd272a765f1aec7ab3c59a0264199a37d8eaf29ea2b->enter($__internal_0e76fbfac72255e51e0d0cd272a765f1aec7ab3c59a0264199a37d8eaf29ea2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["strazacy"]) ? $context["strazacy"] : $this->getContext($context, "strazacy")));
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
        
        $__internal_0e76fbfac72255e51e0d0cd272a765f1aec7ab3c59a0264199a37d8eaf29ea2b->leave($__internal_0e76fbfac72255e51e0d0cd272a765f1aec7ab3c59a0264199a37d8eaf29ea2b_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4f7f99d4ca659f86d5b0ab7d5dbed0855a37542b67e94cc170d408eb8c1cd30 = $this->env->getExtension("native_profiler");
        $__internal_d4f7f99d4ca659f86d5b0ab7d5dbed0855a37542b67e94cc170d408eb8c1cd30->enter($__internal_d4f7f99d4ca659f86d5b0ab7d5dbed0855a37542b67e94cc170d408eb8c1cd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb54fd1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bb54fd1_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/bb54fd1_part_1_formularzGen_1.js");
            // line 49
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
        
        $__internal_d4f7f99d4ca659f86d5b0ab7d5dbed0855a37542b67e94cc170d408eb8c1cd30->leave($__internal_d4f7f99d4ca659f86d5b0ab7d5dbed0855a37542b67e94cc170d408eb8c1cd30_prof);

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
        return array (  135 => 49,  130 => 48,  124 => 47,  94 => 22,  90 => 20,  85 => 17,  62 => 12,  59 => 11,  55 => 10,  50 => 7,  46 => 5,  44 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
