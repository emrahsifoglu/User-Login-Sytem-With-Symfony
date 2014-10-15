<?php

/* SurgeworksCoreBundle:Contact:index.html.twig */
class __TwigTemplate_a337838e8ab7cc9bd80bac90dc26627c1d18dc8a7cb2d6f3ae142a37128b8af4 extends Twig_Template
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
        echo " Welcome, this is Contact ";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Home</a> - Contact";
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
";
    }

    // line 12
    public function block_js($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/surgeworkscore/js/_contact_form.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo twig_include($this->env, $context, "SurgeworksCoreBundle:Contact:_contact_form.html.twig", array("admins" => (isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SurgeworksCoreBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  74 => 17,  68 => 14,  63 => 13,  60 => 12,  54 => 9,  49 => 8,  46 => 7,  38 => 5,  32 => 3,);
    }
}
