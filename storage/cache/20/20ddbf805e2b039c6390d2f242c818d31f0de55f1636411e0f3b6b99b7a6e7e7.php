<?php

/* login.html.twig */
class __TwigTemplate_dd45ccec49a54556a7295199feb088c5491802c92ade28d674008b9d89706a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'homeactive' => array($this, 'block_homeactive'),
            'loginactive' => array($this, 'block_loginactive'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_homeactive($context, array $blocks = array())
    {
    }

    // line 4
    public function block_loginactive($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"panel panel-primary panel-register text-center\">
        <div class=\"panel-heading\"><h1 class=\"panel-title\">Connexion</h1></div>
        <div class=\"panel-body\">

            <form action=\"login\" method=\"post\">

                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"mail\" type=\"email\" autocomplete=\"off\" placeholder=\"Adresse email\" autofocus required/>
                </div>

                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"password\" type=\"password\" autocomplete=\"off\" placeholder=\"Mot de passe\" required/>
                </div>

                <button class=\"btn btn-primary\">Se connecter</button>
            </form>

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  41 => 6,  35 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block homeactive %}{% endblock %}
{% block loginactive %}class=\"active\"{% endblock %}

{% block content %}

    <div class=\"panel panel-primary panel-register text-center\">
        <div class=\"panel-heading\"><h1 class=\"panel-title\">Connexion</h1></div>
        <div class=\"panel-body\">

            <form action=\"login\" method=\"post\">

                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"mail\" type=\"email\" autocomplete=\"off\" placeholder=\"Adresse email\" autofocus required/>
                </div>

                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"password\" type=\"password\" autocomplete=\"off\" placeholder=\"Mot de passe\" required/>
                </div>

                <button class=\"btn btn-primary\">Se connecter</button>
            </form>

        </div>

    </div>

{% endblock %}", "login.html.twig", "/var/www/html/maeo-equipe-04/components/login.html.twig");
    }
}
