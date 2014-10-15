<?php

/* :Security:layout.html.twig */
class __TwigTemplate_85d223067999cae2776ba5e82c059cfd7c40cc9a75fc7ff9a22844a9d209499e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Welcome, this is secured Area ";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo " Secured Area ";
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel='stylesheet' type='text/css' media='all' href='";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/surgeworkscore/css/_logout_form.css"), "html", null, true);
        echo "' />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_include($this->env, $context, "SurgeworksCoreBundle:Security:_logout_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return ":Security:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  57 => 12,  51 => 9,  46 => 8,  43 => 7,  37 => 5,  31 => 3,  28 => 3,);
    }
}
