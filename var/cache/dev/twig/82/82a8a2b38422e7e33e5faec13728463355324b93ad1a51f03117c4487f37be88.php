<?php

/* base.html.twig */
class __TwigTemplate_4feb52027b31db162a2d72e286a6a6feccc33b82b2c1d148ed08caa5f4b8ddef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_172419ff3e62e630643aafd234a775612e9081f891a9104597822e63f959d659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172419ff3e62e630643aafd234a775612e9081f891a9104597822e63f959d659->enter($__internal_172419ff3e62e630643aafd234a775612e9081f891a9104597822e63f959d659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_172419ff3e62e630643aafd234a775612e9081f891a9104597822e63f959d659->leave($__internal_172419ff3e62e630643aafd234a775612e9081f891a9104597822e63f959d659_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb7e43d666a635905bd341f078db718cd681c2c57c88a9183682da5823e1d59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7e43d666a635905bd341f078db718cd681c2c57c88a9183682da5823e1d59c->enter($__internal_fb7e43d666a635905bd341f078db718cd681c2c57c88a9183682da5823e1d59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fb7e43d666a635905bd341f078db718cd681c2c57c88a9183682da5823e1d59c->leave($__internal_fb7e43d666a635905bd341f078db718cd681c2c57c88a9183682da5823e1d59c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cc2fc4fb637d73ef2c1fcb18b91b8529e6bff10d9ceb8ab19dc953af9c9ab04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc2fc4fb637d73ef2c1fcb18b91b8529e6bff10d9ceb8ab19dc953af9c9ab04->enter($__internal_1cc2fc4fb637d73ef2c1fcb18b91b8529e6bff10d9ceb8ab19dc953af9c9ab04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1cc2fc4fb637d73ef2c1fcb18b91b8529e6bff10d9ceb8ab19dc953af9c9ab04->leave($__internal_1cc2fc4fb637d73ef2c1fcb18b91b8529e6bff10d9ceb8ab19dc953af9c9ab04_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a854d424ce6d9b80d8231443677a84dab68056065aea6adcde2c9efb66b1a181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a854d424ce6d9b80d8231443677a84dab68056065aea6adcde2c9efb66b1a181->enter($__internal_a854d424ce6d9b80d8231443677a84dab68056065aea6adcde2c9efb66b1a181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a854d424ce6d9b80d8231443677a84dab68056065aea6adcde2c9efb66b1a181->leave($__internal_a854d424ce6d9b80d8231443677a84dab68056065aea6adcde2c9efb66b1a181_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d7d26abdb82435e6d7264d58fe46410153ef47db7168af57cf1150f69294e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7d26abdb82435e6d7264d58fe46410153ef47db7168af57cf1150f69294e21->enter($__internal_1d7d26abdb82435e6d7264d58fe46410153ef47db7168af57cf1150f69294e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1d7d26abdb82435e6d7264d58fe46410153ef47db7168af57cf1150f69294e21->leave($__internal_1d7d26abdb82435e6d7264d58fe46410153ef47db7168af57cf1150f69294e21_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/anna/NetBeansProjects/PhpProject1/symfony_project/app/Resources/views/base.html.twig");
    }
}
