<?php

/* ::tomasz_terka.php.twig */
class __TwigTemplate_8187af7e0262267e64851fa3112fd56db27348413dfafb1a0dff899c12b16f23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::tomasz_terka.php.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "

    <div id=\"informacja\"> Tak będzie wyglądać grafik na najbliższy miesiąc</div>


    <table id=\"tabelka\" class=\"table table-striped\">
        <thead>
     <tr><td> </td>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["zmienna"]) ? $context["zmienna"] : null), 0, array(), "array")) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 15
            echo "        <td >";
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo "</td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
     </tr>
        </thead>


    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["zmienna"]) ? $context["zmienna"] : null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 23
            echo "
    <tr><td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nazwiska"]) ? $context["nazwiska"] : null), $context["i"], array(), "array"), "html", null, true);
            echo " </td>
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["zmienna"]) ? $context["zmienna"] : null), 0, array(), "array")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 26
                echo "
             <td onclick='zmien(this)'> ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zmienna"]) ? $context["zmienna"] : null), $context["i"], array(), "array"), $context["j"], array(), "array"), "html", null, true);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <tr>
            <td>Suma</td>
        </tr>

     </table>
    <br>

    <a  type=\"button\"   href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("add");
        echo "\" id=\"button\" class=\"btn btn-lg btn-default\">Zapisz</a>


";
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "    <script>

        function zmien(o) {


            o.innerHTML='1';

        }


    </script>
";
    }

    public function getTemplateName()
    {
        return "::tomasz_terka.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  113 => 43,  105 => 38,  96 => 31,  89 => 29,  81 => 27,  78 => 26,  74 => 25,  70 => 24,  67 => 23,  63 => 22,  56 => 17,  47 => 15,  43 => 14,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* */
/*     <div id="informacja"> Tak będzie wyglądać grafik na najbliższy miesiąc</div>*/
/* */
/* */
/*     <table id="tabelka" class="table table-striped">*/
/*         <thead>*/
/*      <tr><td> </td>*/
/* */
/*     {% for i in 0..  (zmienna[0]|length)-1 %}*/
/*         <td >{{ i+1 }}</td>*/
/*     {% endfor %}*/
/* */
/*      </tr>*/
/*         </thead>*/
/* */
/* */
/*     {% for i in 0 .. (zmienna|length)-1 %}*/
/* */
/*     <tr><td> {{ nazwiska[i] }} </td>*/
/*         {% for j in 0 .. zmienna[0]|length -1 %}*/
/* */
/*              <td onclick='zmien(this)'> {{ zmienna[i][j]}}</td>*/
/*         {% endfor %}*/
/*     </tr>*/
/*     {% endfor %}*/
/*         <tr>*/
/*             <td>Suma</td>*/
/*         </tr>*/
/* */
/*      </table>*/
/*     <br>*/
/* */
/*     <a  type="button"   href="{{ path('add') }}" id="button" class="btn btn-lg btn-default">Zapisz</a>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script>*/
/* */
/*         function zmien(o) {*/
/* */
/* */
/*             o.innerHTML='1';*/
/* */
/*         }*/
/* */
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
