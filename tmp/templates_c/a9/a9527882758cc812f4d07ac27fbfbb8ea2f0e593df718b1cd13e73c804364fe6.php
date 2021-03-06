<?php

/* layout.twig */
class __TwigTemplate_fa550a76baaf9919d9983f803520fc3d0f0b4cab58c14b3d703951ae203293e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'pageDescription' => array($this, 'block_pageDescription'),
            'meta' => array($this, 'block_meta'),
            'body' => array($this, 'block_body'),
            'root' => array($this, 'block_root'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ";
        // line 2
        if (array_key_exists("language", $context)) {
            echo "lang=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["language"] ?? $this->getContext($context, "language")), "html", null, true);
            echo "\"";
        }
        echo " ng-app=\"piwikApp\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "    </head>
    <body id=\"";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("bodyId", $context)) ? (_twig_default_filter(($context["bodyId"] ?? $this->getContext($context, "bodyId")), "")) : ("")), "html", null, true);
        echo "\" ng-app=\"app\" class=\"";
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("bodyClass", $context)) ? (_twig_default_filter(($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "")) : ("")), "html", null, true);
        echo "\">

    ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
        <div id=\"pageFooter\">
            ";
        // line 51
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.pageFooter"));
        echo "
        </div>

        ";
        // line 54
        $this->loadTemplate("@CoreHome/_adblockDetect.twig", "layout.twig", 54)->display($context);
        // line 55
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <meta charset=\"utf-8\">
            <title>";
        // line 7
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 12
        echo "</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\"/>
            <meta name=\"generator\" content=\"Matomo - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"";
        // line 16
        $this->displayBlock('pageDescription', $context, $blocks);
        echo "\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            ";
        // line 18
        $this->displayBlock('meta', $context, $blocks);
        // line 21
        echo "
            ";
        // line 22
        $this->loadTemplate("@CoreHome/_favicon.twig", "layout.twig", 22)->display($context);
        // line 23
        echo "            ";
        $this->loadTemplate("@CoreHome/_applePinnedTabIcon.twig", "layout.twig", 23)->display($context);
        // line 24
        echo "            <meta name=\"theme-color\" content=\"#37474f\">
            ";
        // line 25
        $this->loadTemplate("_jsGlobalVariables.twig", "layout.twig", 25)->display($context);
        // line 26
        echo "            ";
        $this->loadTemplate("_jsCssIncludes.twig", "layout.twig", 26)->display($context);
        // line 28
        if ( !($context["isCustomLogo"] ?? $this->getContext($context, "isCustomLogo"))) {
            echo "<link rel=\"manifest\" href=\"plugins/CoreHome/javascripts/manifest.json\">";
        }
        // line 29
        echo "
        ";
    }

    // line 7
    public function block_pageTitle($context, array $blocks = array())
    {
        // line 8
        if (array_key_exists("title", $context)) {
            echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo " - ";
        }
        // line 9
        if (array_key_exists("categoryTitle", $context)) {
            echo \Piwik\piwik_escape_filter($this->env, ($context["categoryTitle"] ?? $this->getContext($context, "categoryTitle")), "html", null, true);
            echo " - ";
        }
        // line 10
        echo "Matomo";
    }

    // line 16
    public function block_pageDescription($context, array $blocks = array())
    {
    }

    // line 18
    public function block_meta($context, array $blocks = array())
    {
        // line 19
        echo "                <meta name=\"robots\" content=\"noindex,nofollow\">
            ";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "
        ";
        // line 36
        $this->loadTemplate("_iframeBuster.twig", "layout.twig", 36)->display($context);
        // line 37
        echo "        ";
        $this->loadTemplate("@CoreHome/_javaScriptDisabled.twig", "layout.twig", 37)->display($context);
        // line 38
        echo "
        <div id=\"root\">
            ";
        // line 40
        $this->displayBlock('root', $context, $blocks);
        // line 42
        echo "        </div>

        <div piwik-popover-handler></div>

        ";
        // line 46
        $this->loadTemplate("@CoreHome/_shortcuts.twig", "layout.twig", 46)->display($context);
        // line 47
        echo "
    ";
    }

    // line 40
    public function block_root($context, array $blocks = array())
    {
        // line 41
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 41,  175 => 40,  170 => 47,  168 => 46,  162 => 42,  160 => 40,  156 => 38,  153 => 37,  151 => 36,  148 => 35,  145 => 34,  140 => 19,  137 => 18,  132 => 16,  128 => 10,  123 => 9,  118 => 8,  115 => 7,  110 => 29,  106 => 28,  103 => 26,  101 => 25,  98 => 24,  95 => 23,  93 => 22,  90 => 21,  88 => 18,  83 => 16,  77 => 12,  75 => 7,  72 => 5,  69 => 4,  63 => 55,  61 => 54,  55 => 51,  51 => 49,  49 => 34,  42 => 32,  39 => 31,  37 => 4,  28 => 2,  25 => 1,);
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
<html id=\"ng-app\" {% if language is defined %}lang=\"{{ language }}\"{% endif %} ng-app=\"piwikApp\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\">
            <title>
                {%- block pageTitle %}
                    {%- if title is defined -%}{{ title }} - {% endif -%}
                    {%- if categoryTitle is defined -%}{{ categoryTitle }} - {% endif -%}
                    Matomo
                {%- endblock -%}
            </title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\"/>
            <meta name=\"generator\" content=\"Matomo - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"{% block pageDescription %}{% endblock %}\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            {% block meta %}
                <meta name=\"robots\" content=\"noindex,nofollow\">
            {% endblock %}

            {% include \"@CoreHome/_favicon.twig\" %}
            {% include \"@CoreHome/_applePinnedTabIcon.twig\" %}
            <meta name=\"theme-color\" content=\"#37474f\">
            {% include \"_jsGlobalVariables.twig\" %}
            {% include \"_jsCssIncludes.twig\" %}

            {%- if not isCustomLogo %}<link rel=\"manifest\" href=\"plugins/CoreHome/javascripts/manifest.json\">{% endif %}

        {% endblock %}
    </head>
    <body id=\"{{ bodyId|default('') }}\" ng-app=\"app\" class=\"{{ bodyClass|default('') }}\">

    {% block body %}

        {% include \"_iframeBuster.twig\" %}
        {% include \"@CoreHome/_javaScriptDisabled.twig\" %}

        <div id=\"root\">
            {% block root %}
            {% endblock %}
        </div>

        <div piwik-popover-handler></div>

        {% include \"@CoreHome/_shortcuts.twig\" %}

    {% endblock %}

        <div id=\"pageFooter\">
            {{ postEvent('Template.pageFooter') }}
        </div>

        {% include \"@CoreHome/_adblockDetect.twig\" %}
    </body>
</html>
", "layout.twig", "C:\\wamp\\www\\piwik\\plugins\\Morpheus\\templates\\layout.twig");
    }
}
