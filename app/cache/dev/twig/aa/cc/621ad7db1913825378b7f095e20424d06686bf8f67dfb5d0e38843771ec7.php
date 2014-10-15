<?php

/* SurgeworksCoreBundle:Home:index.html.twig */
class __TwigTemplate_aacc621ad7db1913825378b7f095e20424d06686bf8f67dfb5d0e38843771ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
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
        echo " Welcome, this is Home ";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo " Home - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a>";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/surgeworkscore/css/_contact_form.css"), "html", null, true);
        echo "' />
    <link rel='stylesheet' type='text/css' media='all' href='";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/surgeworkscore/css/_login_form.css"), "html", null, true);
        echo "' />
";
    }

    // line 13
    public function block_js($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/surgeworkscore/js/jquery.vticker.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/surgeworkscore/js/_news_slider.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/surgeworkscore/js/_login_form.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        echo twig_include($this->env, $context, "SurgeworksCoreBundle:Home:_news_slider.html.twig");
        echo "
    ";
        // line 22
        echo twig_include($this->env, $context, "SurgeworksCoreBundle:Home:_login_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SurgeworksCoreBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  89 => 21,  86 => 20,  80 => 17,  76 => 16,  72 => 15,  67 => 14,  64 => 13,  58 => 10,  54 => 9,  49 => 8,  46 => 7,  38 => 5,  32 => 3,);
    }
}
