<?php

/* @CoreHome/_singleWidget.twig */
class __TwigTemplate_059a7efe372db7f12af82fa60c280c24b8b1f37928c9bd63328714ec050c6000 extends Twig_Template
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
        echo "<div piwik-content-block content-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array(($context["title"] ?? $this->getContext($context, "title")))), "html_attr");
        echo "\">
    ";
        // line 2
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_singleWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div piwik-content-block content-title=\"{{ title|translate|e('html_attr') }}\">
    {{ content|raw }}
</div>", "@CoreHome/_singleWidget.twig", "C:\\wamp\\www\\piwik\\plugins\\CoreHome\\templates\\_singleWidget.twig");
    }
}