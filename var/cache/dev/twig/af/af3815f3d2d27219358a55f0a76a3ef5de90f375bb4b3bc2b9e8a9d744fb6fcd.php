<?php

/* test/index.html.twig */
class __TwigTemplate_42cb0d45f88fd519af4fc7612fc130fe341734009911bba589a2f223ada14676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fea6ff2158246e05cc02c64297bca042670749fc05c11db582482c38a910d838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea6ff2158246e05cc02c64297bca042670749fc05c11db582482c38a910d838->enter($__internal_fea6ff2158246e05cc02c64297bca042670749fc05c11db582482c38a910d838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        // line 1
        echo " <ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
            // line 3
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prod"], "prodName", array()), "html", null, true);
            echo " 
                <a href='/test/cat?name=";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prod"], "cat", array()), "catName", array()), "html", null, true);
            echo "'>(Категория - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prod"], "cat", array()), "catName", array()), "html", null, true);
            echo ")</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
        
        $__internal_fea6ff2158246e05cc02c64297bca042670749fc05c11db582482c38a910d838->leave($__internal_fea6ff2158246e05cc02c64297bca042670749fc05c11db582482c38a910d838_prof);

    }

    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  34 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <ul>
    {% for prod in products  %}
        <li>{{ prod.prodName }} 
                <a href='/test/cat?name={{ prod.cat.catName }}'>(Категория - {{ prod.cat.catName }})</a>
        </li>
    {% endfor %}
</ul>", "test/index.html.twig", "/home/anna/NetBeansProjects/PhpProject1/symfony_project/app/Resources/views/test/index.html.twig");
    }
}
