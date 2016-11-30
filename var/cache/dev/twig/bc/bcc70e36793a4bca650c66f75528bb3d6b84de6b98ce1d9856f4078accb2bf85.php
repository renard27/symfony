<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_39c8a8ff53a0f4f45b9b530ea5a6f26e5b4468672e662e71848b59469014e4ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65702dcfa717dd396c7f4acfdf31f450ad0889553390c4821e659769f63b5bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65702dcfa717dd396c7f4acfdf31f450ad0889553390c4821e659769f63b5bbc->enter($__internal_65702dcfa717dd396c7f4acfdf31f450ad0889553390c4821e659769f63b5bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65702dcfa717dd396c7f4acfdf31f450ad0889553390c4821e659769f63b5bbc->leave($__internal_65702dcfa717dd396c7f4acfdf31f450ad0889553390c4821e659769f63b5bbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e52208c79d86f4d98e1e1643ea1b2479c922c2c594891567967e5675551092cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52208c79d86f4d98e1e1643ea1b2479c922c2c594891567967e5675551092cb->enter($__internal_e52208c79d86f4d98e1e1643ea1b2479c922c2c594891567967e5675551092cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e52208c79d86f4d98e1e1643ea1b2479c922c2c594891567967e5675551092cb->leave($__internal_e52208c79d86f4d98e1e1643ea1b2479c922c2c594891567967e5675551092cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3ac382d9869f61995ca53a6efa3bcbe3a89f70f21ed49d05453e6fcc6dd0ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ac382d9869f61995ca53a6efa3bcbe3a89f70f21ed49d05453e6fcc6dd0ddf->enter($__internal_f3ac382d9869f61995ca53a6efa3bcbe3a89f70f21ed49d05453e6fcc6dd0ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3ac382d9869f61995ca53a6efa3bcbe3a89f70f21ed49d05453e6fcc6dd0ddf->leave($__internal_f3ac382d9869f61995ca53a6efa3bcbe3a89f70f21ed49d05453e6fcc6dd0ddf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_21baa32cb48b074bbfe1aee6a2568e54a41e4db4130930c8207460517c359900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21baa32cb48b074bbfe1aee6a2568e54a41e4db4130930c8207460517c359900->enter($__internal_21baa32cb48b074bbfe1aee6a2568e54a41e4db4130930c8207460517c359900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_21baa32cb48b074bbfe1aee6a2568e54a41e4db4130930c8207460517c359900->leave($__internal_21baa32cb48b074bbfe1aee6a2568e54a41e4db4130930c8207460517c359900_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/anna/NetBeansProjects/PhpProject1/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
