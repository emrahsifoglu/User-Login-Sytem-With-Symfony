<?php

/* SurgeworksCoreBundle:Security:index.html.twig */
class __TwigTemplate_07c2564aa6952d7cb8e04344791068159b0b1784cd5cf9d6884129cbf9417650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate(":Security:layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <div style=\"margin-top: 5px; margin-left: 5px;\">
        <span style=\"font-weight:bold; background-color: whitesmoke;\">This is secured area. Your role which is ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
        echo " allows you to view <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["area"]) ? $context["area"] : $this->getContext($context, "area")), "html", null, true);
        echo "\">this page</a>.</span>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SurgeworksCoreBundle:Security:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  31 => 4,  28 => 3,);
    }
}
