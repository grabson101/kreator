<?php

/* tomasz_terka.php.twig */
class __TwigTemplate_b74e804f8210d57c6ff64170dac7ebbc926a90f3ef2dab3a96744076ff3d4dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tomasz_terka.php.twig", 1);
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
        $__internal_059e63005fa84e499c082a4f75701cacbd67c67700614dd9746af2b3b763f1f9 = $this->env->getExtension("native_profiler");
        $__internal_059e63005fa84e499c082a4f75701cacbd67c67700614dd9746af2b3b763f1f9->enter($__internal_059e63005fa84e499c082a4f75701cacbd67c67700614dd9746af2b3b763f1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tomasz_terka.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_059e63005fa84e499c082a4f75701cacbd67c67700614dd9746af2b3b763f1f9->leave($__internal_059e63005fa84e499c082a4f75701cacbd67c67700614dd9746af2b3b763f1f9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc0ae96c54c401a15dc86e38f0776f041fe9e821cd9e9320fd43e4a3654542cc = $this->env->getExtension("native_profiler");
        $__internal_cc0ae96c54c401a15dc86e38f0776f041fe9e821cd9e9320fd43e4a3654542cc->enter($__internal_cc0ae96c54c401a15dc86e38f0776f041fe9e821cd9e9320fd43e4a3654542cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    <div id=\"informacja\"> Tak będzie wyglądać grafik na najbliższy miesiąc</div>


    <table id=\"tabelka\" class=\"table table-striped\">
        <thead>
     <tr><td> </td>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["zmienna"]) ? $context["zmienna"] : $this->getContext($context, "zmienna")), 0, array(), "array")) - 1)));
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
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["zmienna"]) ? $context["zmienna"] : $this->getContext($context, "zmienna"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 23
            echo "
    <tr><td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nazwiska"]) ? $context["nazwiska"] : $this->getContext($context, "nazwiska")), $context["i"], array(), "array"), "html", null, true);
            echo " </td>
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, $this->getAttribute((isset($context["zmienna"]) ? $context["zmienna"] : $this->getContext($context, "zmienna")), 0, array(), "array")) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 26
                echo "
             <td onclick='zmien(this)'> ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["zmienna"]) ? $context["zmienna"] : $this->getContext($context, "zmienna")), $context["i"], array(), "array"), $context["j"], array(), "array"), "html", null, true);
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
        
        $__internal_cc0ae96c54c401a15dc86e38f0776f041fe9e821cd9e9320fd43e4a3654542cc->leave($__internal_cc0ae96c54c401a15dc86e38f0776f041fe9e821cd9e9320fd43e4a3654542cc_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd69d04acd0eb12ac9b49951881530cf5a360e3ee4b3f807d4cf54fbcad51dd1 = $this->env->getExtension("native_profiler");
        $__internal_dd69d04acd0eb12ac9b49951881530cf5a360e3ee4b3f807d4cf54fbcad51dd1->enter($__internal_dd69d04acd0eb12ac9b49951881530cf5a360e3ee4b3f807d4cf54fbcad51dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    <script>

        function zmien(o) {


            o.innerHTML='1';

        }


    </script>
";
        
        $__internal_dd69d04acd0eb12ac9b49951881530cf5a360e3ee4b3f807d4cf54fbcad51dd1->leave($__internal_dd69d04acd0eb12ac9b49951881530cf5a360e3ee4b3f807d4cf54fbcad51dd1_prof);

    }

    public function getTemplateName()
    {
        return "tomasz_terka.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  125 => 43,  114 => 38,  105 => 31,  98 => 29,  90 => 27,  87 => 26,  83 => 25,  79 => 24,  76 => 23,  72 => 22,  65 => 17,  56 => 15,  52 => 14,  41 => 5,  35 => 4,  11 => 1,);
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
