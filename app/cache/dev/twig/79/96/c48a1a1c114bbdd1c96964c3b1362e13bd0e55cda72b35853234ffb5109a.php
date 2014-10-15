<?php

/* base.html.twig */
class __TwigTemplate_7996c48a1a1c114bbdd1c96964c3b1362e13bd0e55cda72b35853234ffb5109a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 7
        $this->displayBlock('css', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('js', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
    }

    // line 8
    public function block_js($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  65 => 8,  60 => 7,  48 => 12,  39 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,  74 => 14,  69 => 12,  61 => 15,  59 => 14,  53 => 12,  50 => 11,  45 => 8,  42 => 9,  35 => 4,  94 => 22,  89 => 21,  86 => 20,  80 => 17,  76 => 16,  72 => 15,  67 => 14,  64 => 13,  58 => 10,  54 => 5,  49 => 8,  46 => 11,  38 => 5,  32 => 3,);
    }
}
