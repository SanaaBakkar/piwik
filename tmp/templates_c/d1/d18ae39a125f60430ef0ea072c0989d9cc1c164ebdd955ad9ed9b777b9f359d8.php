<?php

/* @InvalidateReports/admin.twig */
class __TwigTemplate_a92a3cb73366ff2ccc691c304d77c943cead1387929d0e09a2a1f3cffcca0996 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@InvalidateReports/admin.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_InvalidateHistoricalReports")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"ui-confirm\" id=\"confirmInvalidation\">
    <h2>";
        // line 8
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_ConfirmInvalidation", "<span class=\"website\"></span>", "<span class=\"segment\"></span>"));
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<div piwik-content-block content-title=\"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
        echo "\" class=\"invalidate-reports-page\">

    <p>";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_PageDescription")), "html", null, true);
        echo "</p>

    <ul id=\"examples\">
        <li>";
        // line 18
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_ExamplesCustomReports", "<a href=\"https://piwik.org/docs/custom-reports/\" target=\"_blank\">", "</a>"));
        echo "</li>
        <li>";
        // line 19
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_ExamplesFunnels", "<a href=\"https://piwik.org/docs/funnels/\" target=\"_blank\">", "</a>"));
        echo "</li>
        <li>";
        // line 20
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_ExamplesRawData", "<a href=\"https://piwik.org/log-analytics/\" target=\"_blank\">", "</a>"));
        echo "</li>
    </ul>

    <div ng-controller=\"InvalidateReportsController\">

        <div class=\"form-group row\">
            <div class=\"col s12 ng-scope input-field m6\">
                <div class=\"ng-scope\">
                    <div piwik-siteselector
                         title=\"\"
                         show-selected-site=\"true\"
                         siteid=\"all\"
                         sitename=\"";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_AllWebsites")), "html_attr");
        echo "\"
                         class=\"site-selection select-wrapper\"
                         ng-model=\"site\"
                         id=\"invalidateSite\"
                         ng-change=\"fetchSegments()\"
                         all-sites-text=\"";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_AllWebsites")), "html_attr");
        echo "\"
                         all-sites-location=\"top\"
                         switch-site-on-select=\"false\"></div>
                    <label for=\"invalidateSite\" class=\"ng-binding\">";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_ChooseWebsite")), "html", null, true);
        echo "</label>
                </div>
            </div>
        </div>

        <div piwik-field uicontrol=\"select\" name=\"segment\"
             ng-model=\"segment\"
             title=\"";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_ChooseSegment")), "html_attr");
        echo "\"
             value=\"\"
             options=\"availableSegments\">
        </div>

        <div piwik-field uicontrol=\"select\" name=\"months\"
             ng-model=\"months\"
             title=\"";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_ChooseRange")), "html_attr");
        echo "\"
             value=\"0\"
             options=\"";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["availableRanges"] ?? $this->getContext($context, "availableRanges"))), "html", null, true);
        echo "\">
        </div>

        <div piwik-save-button
             onconfirm=\"invalidate()\"
             saving=\"loading\"
             value=\"";
        // line 62
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("InvalidateReports_InvalidateReports")), "html_attr");
        echo "\"></div>
    </div>

</div>

";
    }

    public function getTemplateName()
    {
        return "@InvalidateReports/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 62,  127 => 56,  122 => 54,  112 => 47,  102 => 40,  96 => 37,  88 => 32,  73 => 20,  69 => 19,  65 => 18,  59 => 15,  54 => 13,  48 => 10,  44 => 9,  40 => 8,  36 => 6,  33 => 5,  29 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.twig' %}

{% set title %}{{ 'InvalidateReports_InvalidateHistoricalReports'|translate }}{% endset %}

{% block content %}

<div class=\"ui-confirm\" id=\"confirmInvalidation\">
    <h2>{{ 'InvalidateReports_ConfirmInvalidation'|translate('<span class=\"website\"></span>', '<span class=\"segment\"></span>')|raw }}</h2>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>

<div piwik-content-block content-title=\"{{ title|e('html_attr') }}\" class=\"invalidate-reports-page\">

    <p>{{ 'InvalidateReports_PageDescription'|translate }}</p>

    <ul id=\"examples\">
        <li>{{ 'InvalidateReports_ExamplesCustomReports'|translate('<a href=\"https://piwik.org/docs/custom-reports/\" target=\"_blank\">', '</a>')|raw }}</li>
        <li>{{ 'InvalidateReports_ExamplesFunnels'|translate('<a href=\"https://piwik.org/docs/funnels/\" target=\"_blank\">', '</a>')|raw }}</li>
        <li>{{ 'InvalidateReports_ExamplesRawData'|translate('<a href=\"https://piwik.org/log-analytics/\" target=\"_blank\">', '</a>')|raw }}</li>
    </ul>

    <div ng-controller=\"InvalidateReportsController\">

        <div class=\"form-group row\">
            <div class=\"col s12 ng-scope input-field m6\">
                <div class=\"ng-scope\">
                    <div piwik-siteselector
                         title=\"\"
                         show-selected-site=\"true\"
                         siteid=\"all\"
                         sitename=\"{{ 'InvalidateReports_AllWebsites'|translate|e('html_attr') }}\"
                         class=\"site-selection select-wrapper\"
                         ng-model=\"site\"
                         id=\"invalidateSite\"
                         ng-change=\"fetchSegments()\"
                         all-sites-text=\"{{ 'InvalidateReports_AllWebsites'|translate|e('html_attr') }}\"
                         all-sites-location=\"top\"
                         switch-site-on-select=\"false\"></div>
                    <label for=\"invalidateSite\" class=\"ng-binding\">{{ 'InvalidateReports_ChooseWebsite'|translate }}</label>
                </div>
            </div>
        </div>

        <div piwik-field uicontrol=\"select\" name=\"segment\"
             ng-model=\"segment\"
             title=\"{{ 'InvalidateReports_ChooseSegment'|translate|e('html_attr') }}\"
             value=\"\"
             options=\"availableSegments\">
        </div>

        <div piwik-field uicontrol=\"select\" name=\"months\"
             ng-model=\"months\"
             title=\"{{ 'InvalidateReports_ChooseRange'|translate|e('html_attr') }}\"
             value=\"0\"
             options=\"{{ availableRanges|json_encode }}\">
        </div>

        <div piwik-save-button
             onconfirm=\"invalidate()\"
             saving=\"loading\"
             value=\"{{ 'InvalidateReports_InvalidateReports'|translate|e('html_attr') }}\"></div>
    </div>

</div>

{% endblock %}", "@InvalidateReports/admin.twig", "C:\\wamp\\www\\piwik\\plugins\\InvalidateReports\\templates\\admin.twig");
    }
}
