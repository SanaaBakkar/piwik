<?php

/* @Provider/_visitorDetails.twig */
class __TwigTemplate_7b25eed4891b74f967081a4e3b37ce62b7d6b975400b3cfd93b5be4cbf81d9a8 extends Twig_Template
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
        // line 1
        echo "<div class=\"visitorProvider\">
    <br />
    ";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Provider_ColumnProvider")), "html", null, true);
        echo ":
    ";
        // line 4
        if ($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "providerUrl"), "method")) {
            // line 5
            echo "        <a href=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "providerUrl"), "method"), "html", null, true);
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "providerName"), "method"), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "providerUrl"), "method"), "html", null, true);
            echo "\" style=\"text-decoration:underline;\">";
        }
        // line 7
        echo "        ";
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "providerName"), "method"), "html", null, true);
        // line 8
        if ($this->getAttribute(($context["visitInfo"] ?? $this->getContext($context, "visitInfo")), "getColumn", array(0 => "providerUrl"), "method")) {
            echo "</a>";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Provider/_visitorDetails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  41 => 8,  38 => 7,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"visitorProvider\">
    <br />
    {{ 'Provider_ColumnProvider'|translate }}:
    {% if visitInfo.getColumn('providerUrl') %}
        <a href=\"{{ visitInfo.getColumn('providerUrl') }}\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"{{ visitInfo.getColumn('providerName') }} {{ visitInfo.getColumn('providerUrl') }}\" style=\"text-decoration:underline;\">
    {%- endif %}
        {{ visitInfo.getColumn('providerName') }}
    {%- if visitInfo.getColumn('providerUrl') %}</a>{% endif %}
</div>
", "@Provider/_visitorDetails.twig", "C:\\wamp\\www\\piwik\\plugins\\Provider\\templates\\_visitorDetails.twig");
    }
}
