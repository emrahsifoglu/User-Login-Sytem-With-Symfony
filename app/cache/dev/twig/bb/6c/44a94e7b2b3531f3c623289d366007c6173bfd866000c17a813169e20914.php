<?php

/* SurgeworksCoreBundle:Security:_logout_form.html.twig */
class __TwigTemplate_bb6c44a94e7b2b3531f3c623289d366007c6173bfd866000c17a813169e20914 extends Twig_Template
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
        echo "<div id=\"logout-container\">
    <span>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</span> - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>
</div>";
    }

    public function getTemplateName()
    {
        return "SurgeworksCoreBundle:Security:_logout_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,  60 => 13,  57 => 12,  51 => 9,  46 => 8,  43 => 7,  37 => 5,  31 => 3,  28 => 3,);
    }
}
