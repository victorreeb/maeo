<?php

/* signup.html.twig */
class __TwigTemplate_9eafbc330742a5335022d56688d1cada82ea23e5bf1f4901ff7f10880167add6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "signup.html.twig", 1);
        $this->blocks = array(
            'homeactive' => array($this, 'block_homeactive'),
            'signupactive' => array($this, 'block_signupactive'),
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
    public function block_signupactive($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"panel panel-primary panel-register text-center\">
        <div class=\"panel-heading\"><h1 class=\"panel-title\">Enregistrement</h1></div>
        <div class=\"panel-body\">

            <form action=\"signup\" method=\"post\">

                <div class=\"form-group\">
                    <label for=\"emailRegister\">Adresse email</label>
                    <input class=\"form-control\" name=\"email\" type=\"email\" autocomplete=\"off\" placeholder=\"Adresse email\" required/>
                </div>

                <div class=\"form-group\">
                    <label for=\"passwordRegister\">Mot de passe</label>
                    <input class=\"form-control\" name=\"mdp\" type=\"password\" autocomplete=\"off\" placeholder=\"Mot de passe\" required/>
                </div>

                <div class=\"form-group\">
                    <label for=\"firstNameRegister\">Prénom</label>
                    <input class=\"form-control\" name=\"prenom\" type=\"text\" autocomplete=\"off\" placeholder=\"Prénom\" required/>
                </div>

                <div class=\"form-group\">
                    <label for=\"lastNameRegister\">Nom</label>
                    <input class=\"form-control\" name=\"nom\" type=\"text\" autocomplete=\"off\" placeholder=\"Nom\" required/>
                </div>

                <button class=\"btn btn-primary\" type=\"submit\">S'enregistrer</button>

            </form>

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "signup.html.twig";
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
{% block signupactive %}class=\"active\"{% endblock %}

{% block content %}

    <div class=\"panel panel-primary panel-register text-center\">
        <div class=\"panel-heading\"><h1 class=\"panel-title\">Enregistrement</h1></div>
        <div class=\"panel-body\">

            <form action=\"signup\" method=\"post\">

                <div class=\"form-group\">
                    <label for=\"emailRegister\">Adresse email</label>
                    <input class=\"form-control\" name=\"email\" type=\"email\" autocomplete=\"off\" placeholder=\"Adresse email\" required/>
                </div>

                <div class=\"form-group\">
                    <label for=\"passwordRegister\">Mot de passe</label>
                    <input class=\"form-control\" name=\"mdp\" type=\"password\" autocomplete=\"off\" placeholder=\"Mot de passe\" required/>
                </div>

                <div class=\"form-group\">
                    <label for=\"firstNameRegister\">Prénom</label>
                    <input class=\"form-control\" name=\"prenom\" type=\"text\" autocomplete=\"off\" placeholder=\"Prénom\" required/>
                </div>

                <div class=\"form-group\">
                    <label for=\"lastNameRegister\">Nom</label>
                    <input class=\"form-control\" name=\"nom\" type=\"text\" autocomplete=\"off\" placeholder=\"Nom\" required/>
                </div>

                <button class=\"btn btn-primary\" type=\"submit\">S'enregistrer</button>

            </form>

        </div>

    </div>

{% endblock %}", "signup.html.twig", "/var/www/html/maeo-equipe-04/components/signup.html.twig");
    }
}
