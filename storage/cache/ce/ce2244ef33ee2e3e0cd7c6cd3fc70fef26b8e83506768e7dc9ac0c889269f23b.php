<?php

/* base.html.twig */
class __TwigTemplate_25908c2f9f6a71b81f42654144bcc14fd36eb318a50a0c5700c1437f4e5333b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'homeactive' => array($this, 'block_homeactive'),
            'loginactive' => array($this, 'block_loginactive'),
            'signupactive' => array($this, 'block_signupactive'),
            'content' => array($this, 'block_content'),
            'navbarbottom' => array($this, 'block_navbarbottom'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>

<body>


";
        // line 16
        $this->displayBlock('navbar', $context, $blocks);
        // line 48
        echo "

";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('navbarbottom', $context, $blocks);
        // line 59
        echo "
</body>

";
        // line 62
        $this->displayBlock('scripts', $context, $blocks);
        // line 68
        echo "</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "MAEO";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"/maeo-equipe-04/public/assets/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/maeo-equipe-04/public/assets/css/style.css\">
    ";
    }

    // line 16
    public function block_navbar($context, array $blocks = array())
    {
        // line 17
        echo "    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\">
        <div class=\"container-fluid\">

            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"home\">MAEO</a>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                <ul class=\"nav navbar-nav\">
                    <li ";
        // line 33
        $this->displayBlock('homeactive', $context, $blocks);
        echo "><a href=\"home\">Accueil</a></li>

                    ";
        // line 35
        if (($this->getAttribute(($context["user"] ?? null), "email", array()) != false)) {
            // line 36
            echo "                        <li><a href=\"logout\"><b>Log out</b></a></li>
                    ";
        } else {
            // line 38
            echo "                        <li ";
            $this->displayBlock('loginactive', $context, $blocks);
            echo "><a href=\"login\">Connexion</a></li>
                        <li ";
            // line 39
            $this->displayBlock('signupactive', $context, $blocks);
            echo "><a href=\"signup\">S'enregistrer</a></li>
                    ";
        }
        // line 41
        echo "
                </ul>

            </div>
        </div>
    </nav>
";
    }

    // line 33
    public function block_homeactive($context, array $blocks = array())
    {
        echo "class=\"active\"";
    }

    // line 38
    public function block_loginactive($context, array $blocks = array())
    {
    }

    // line 39
    public function block_signupactive($context, array $blocks = array())
    {
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "    ";
    }

    // line 54
    public function block_navbarbottom($context, array $blocks = array())
    {
        // line 55
        echo "    <nav class=\"navbar navbar-default navbar-fixed-bottom navbar-inverse navbar-footer\">
        Alexis GIOVANNELLI, Victor REEB, David BARRE, Guillaume WEBER, Sébastien DUPUIS<br>
    </nav>
";
    }

    // line 62
    public function block_scripts($context, array $blocks = array())
    {
        // line 63
        echo "
    <script src=\"/maeo-equipe-04/public/assets/js/jquery-3.1.1.min.js\"></script>
    <script src=\"/maeo-equipe-04/public/assets/js/bootstrap.min.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 63,  171 => 62,  164 => 55,  161 => 54,  157 => 51,  154 => 50,  149 => 39,  144 => 38,  138 => 33,  128 => 41,  123 => 39,  118 => 38,  114 => 36,  112 => 35,  107 => 33,  89 => 17,  86 => 16,  80 => 7,  77 => 6,  71 => 5,  67 => 68,  65 => 62,  60 => 59,  58 => 54,  55 => 53,  53 => 50,  49 => 48,  47 => 16,  40 => 10,  38 => 6,  34 => 5,  28 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}MAEO{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"/maeo-equipe-04/public/assets/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/maeo-equipe-04/public/assets/css/style.css\">
    {% endblock %}
</head>

<body>


{# navigation bar #}
{% block navbar %}
    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\">
        <div class=\"container-fluid\">

            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"home\">MAEO</a>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

                <ul class=\"nav navbar-nav\">
                    <li {% block homeactive %}class=\"active\"{% endblock %}><a href=\"home\">Accueil</a></li>

                    {% if user.email != false %}
                        <li><a href=\"logout\"><b>Log out</b></a></li>
                    {% else %}
                        <li {% block loginactive %}{% endblock %}><a href=\"login\">Connexion</a></li>
                        <li {% block signupactive %}{% endblock %}><a href=\"signup\">S'enregistrer</a></li>
                    {% endif %}

                </ul>

            </div>
        </div>
    </nav>
{% endblock %}


{% block content %}
    {# content #}
{% endblock %}

{% block navbarbottom %}
    <nav class=\"navbar navbar-default navbar-fixed-bottom navbar-inverse navbar-footer\">
        Alexis GIOVANNELLI, Victor REEB, David BARRE, Guillaume WEBER, Sébastien DUPUIS<br>
    </nav>
{% endblock %}

</body>

{% block scripts %}

    <script src=\"/maeo-equipe-04/public/assets/js/jquery-3.1.1.min.js\"></script>
    <script src=\"/maeo-equipe-04/public/assets/js/bootstrap.min.js\"></script>

{% endblock %}
</html>", "base.html.twig", "/var/www/html/maeo-equipe-04/components/base.html.twig");
    }
}
