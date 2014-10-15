<?php

/* SurgeworksCoreBundle:Home:_news_slider.html.twig */
class __TwigTemplate_faa0d7dc833ad1a2607c0ab38cb1e2f96f60a1dad34b9bde854c34fab80ea76b extends Twig_Template
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
        echo "<input type=\"hidden\" id=\"news-read-all\" value=\"";
        echo $this->env->getExtension('routing')->getPath("news_form_action");
        echo "\" />
<div id=\"news-items-container\">
    <ul style=\"font-weight:bold; background-color: whitesmoke;\" id=\"news-items\"></ul>
</div>";
    }

    public function getTemplateName()
    {
        return "SurgeworksCoreBundle:Home:_news_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
