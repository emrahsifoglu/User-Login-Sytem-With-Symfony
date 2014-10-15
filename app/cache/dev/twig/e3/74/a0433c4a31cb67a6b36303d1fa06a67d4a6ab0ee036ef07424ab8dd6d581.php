<?php

/* layout.html.twig */
class __TwigTemplate_e374a0433c4a31cb67a6b36303d1fa06a67d4a6ab0ee036ef07424ab8dd6d581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
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
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "      <link rel='stylesheet' type='text/css' media='all' href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/surgeworkscore/css/layout.css"), "html", null, true);
        echo "' />
";
    }

    // line 7
    public function block_js($context, array $blocks = array())
    {
        // line 8
        echo "        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-2.1.1.min.js\"></script>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <header>";
        $this->displayBlock('header', $context, $blocks);
        echo "</header>
    <div id=\"content\">
        ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "    </div>
    <footer class=\"site-footer\">
        Footer
    </footer>
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  69 => 12,  61 => 15,  59 => 14,  53 => 12,  50 => 11,  45 => 8,  42 => 7,  35 => 4,  94 => 22,  89 => 21,  86 => 20,  80 => 17,  76 => 16,  72 => 15,  67 => 14,  64 => 13,  58 => 10,  54 => 9,  49 => 8,  46 => 7,  38 => 5,  32 => 3,);
    }
}
