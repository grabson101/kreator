<?php

/* grafik.php.twig */
class __TwigTemplate_a3aa27b7781b02197a34544ebc4d10d04ed033c1704993ababa7d1416ab72126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grafik.php.twig", 1);
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
        $__internal_925787cd9627cd75531e1191f51fc7b6a9e7fdb10137ebaccdbfffff19cc782a = $this->env->getExtension("native_profiler");
        $__internal_925787cd9627cd75531e1191f51fc7b6a9e7fdb10137ebaccdbfffff19cc782a->enter($__internal_925787cd9627cd75531e1191f51fc7b6a9e7fdb10137ebaccdbfffff19cc782a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grafik.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925787cd9627cd75531e1191f51fc7b6a9e7fdb10137ebaccdbfffff19cc782a->leave($__internal_925787cd9627cd75531e1191f51fc7b6a9e7fdb10137ebaccdbfffff19cc782a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dde5f089eb0e46220f2d4a687eca75f4192c19014177b0bf7008d7894b9035dd = $this->env->getExtension("native_profiler");
        $__internal_dde5f089eb0e46220f2d4a687eca75f4192c19014177b0bf7008d7894b9035dd->enter($__internal_dde5f089eb0e46220f2d4a687eca75f4192c19014177b0bf7008d7894b9035dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    <div id=\"informacja\"> Tak będzie wyglądać grafik na najbliższe pół roku</div>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["zmienna"]) ? $context["zmienna"] : $this->getContext($context, "zmienna"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "
    <table id=\"tabelka\" class=\"table table-striped\">
        <thead>
     <tr><td> </td>

    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zmienna"]) ? $context["zmienna"] : $this->getContext($context, "zmienna")), $context["i"], array(), "array"), 0, array(), "array")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 16
                echo "        <td >";
                echo twig_escape_filter($this->env, ($context["j"] + 1), "html", null, true);
                echo "</td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "
     </tr>
        </thead>


    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["zmienna"]) ? $context["zmienna"] : $this->getContext($context, "zmienna")), $context["i"], array(), "array")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 24
                echo "
    <tr><td> ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nazwiska"]) ? $context["nazwiska"] : $this->getContext($context, "nazwiska")), $context["j"], array(), "array"), "html", null, true);
                echo " </td>
        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zmienna"]) ? $context["zmienna"] : $this->getContext($context, "zmienna")), $context["i"], array(), "array"), $context["j"], array(), "array")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                    // line 27
                    echo "
             <td onclick='zmien(this)'> ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["zmienna"]) ? $context["zmienna"] : $this->getContext($context, "zmienna")), $context["i"], array(), "array"), $context["j"], array(), "array"), $context["k"], array(), "array"), "html", null, true);
                    echo "</td>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        <tr>
            <td>Suma</td>
        </tr>

     </table>
    <br>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    <a  type=\"button\"   href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("add");
        echo "\" id=\"button\" class=\"btn btn-lg btn-default\">Zapisz</a>


";
        
        $__internal_dde5f089eb0e46220f2d4a687eca75f4192c19014177b0bf7008d7894b9035dd->leave($__internal_dde5f089eb0e46220f2d4a687eca75f4192c19014177b0bf7008d7894b9035dd_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9dc258186165981f49ac3bd1318469b04d56ae2d60d762f0d1731c1274d3b32 = $this->env->getExtension("native_profiler");
        $__internal_a9dc258186165981f49ac3bd1318469b04d56ae2d60d762f0d1731c1274d3b32->enter($__internal_a9dc258186165981f49ac3bd1318469b04d56ae2d60d762f0d1731c1274d3b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    <script>

        function zmien(o) {


            o.innerHTML='1';

        }


    </script>
";
        
        $__internal_a9dc258186165981f49ac3bd1318469b04d56ae2d60d762f0d1731c1274d3b32->leave($__internal_a9dc258186165981f49ac3bd1318469b04d56ae2d60d762f0d1731c1274d3b32_prof);

    }

    public function getTemplateName()
    {
        return "grafik.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  138 => 46,  127 => 41,  124 => 40,  111 => 32,  104 => 30,  96 => 28,  93 => 27,  89 => 26,  85 => 25,  82 => 24,  78 => 23,  71 => 18,  62 => 16,  58 => 15,  51 => 10,  47 => 9,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* */
/*     <div id="informacja"> Tak będzie wyglądać grafik na najbliższe pół roku</div>*/
/* */
/*     {% for i in 0.. (zmienna|length)-1 %}*/
/* */
/*     <table id="tabelka" class="table table-striped">*/
/*         <thead>*/
/*      <tr><td> </td>*/
/* */
/*     {% for j in 0..  (zmienna[i][0]|length)-1 %}*/
/*         <td >{{ j+1 }}</td>*/
/*     {% endfor %}*/
/* */
/*      </tr>*/
/*         </thead>*/
/* */
/* */
/*     {% for j in 0 .. (zmienna[i]|length)-1 %}*/
/* */
/*     <tr><td> {{ nazwiska[j] }} </td>*/
/*         {% for k in 0 .. zmienna[i][j]|length -1 %}*/
/* */
/*              <td onclick='zmien(this)'> {{ zmienna[i][j][k]}}</td>*/
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
/*     {% endfor %}*/
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
