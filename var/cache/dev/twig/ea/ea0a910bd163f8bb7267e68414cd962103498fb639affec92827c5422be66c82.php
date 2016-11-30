<?php

/* test/category.html.twig */
class __TwigTemplate_7030d8893743f24e41cb6739df0965bd840486b4cfd1790d7d4ed4fc190e636f extends Twig_Template
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
        $__internal_7ac9be8d7251509e8134aa98b5a91a828d6daa601bd08427958540dceb26ca86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac9be8d7251509e8134aa98b5a91a828d6daa601bd08427958540dceb26ca86->enter($__internal_7ac9be8d7251509e8134aa98b5a91a828d6daa601bd08427958540dceb26ca86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/category.html.twig"));

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
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
        
        $__internal_7ac9be8d7251509e8134aa98b5a91a828d6daa601bd08427958540dceb26ca86->leave($__internal_7ac9be8d7251509e8134aa98b5a91a828d6daa601bd08427958540dceb26ca86_prof);

    }

    public function getTemplateName()
    {
        return "test/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  29 => 3,  25 => 2,  22 => 1,);
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
        </li>
    {% endfor %}
</ul>", "test/category.html.twig", "/home/anna/NetBeansProjects/PhpProject1/symfony_project/app/Resources/views/test/category.html.twig");
    }
}
