<?php

/* SurgeworksCoreBundle:User:index.html.twig */
class __TwigTemplate_c49e98b90d641f5c276403cbece6d9133ba160de1246a4476d00d6880a7fb149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":Security:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Security:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Welcome, this is User Security Area ";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        echo " User Secured Area ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div style=\"margin-top: 5px; margin-left: 5px;\">
        <span style=\"font-weight:bold; background-color: whitesmoke;\">This secured are for Users. You can return <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("login_success");
        echo "\">secured area</a>.</span>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SurgeworksCoreBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
