<?php

/* SurgeworksCoreBundle:Home:_login_form.html.twig */
class __TwigTemplate_6258af0ebee9a162f7bd676522abb36db06a600308968cd5e72846b7f9e77909 extends Twig_Template
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
        echo "<input type=\"hidden\" id=\"login-success\" value=\"";
        echo $this->env->getExtension('routing')->getPath("login_success");
        echo "\" />
<div id=\"login-container\">
    <form id=\"login-form\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        ";
        // line 5
        echo "        <div>
            <label for=\"username\">Username</label>
            <input name=\"_username\" id=\"_username\" type=\"text\" data-required=\"true\" data-error-valid=\"Username is not valid\" data-min=\"4\" data-max=\"15\" data-error-len=\"Username must be between 4 and 15 characters\" data-error-required=\"Username is required\"/>
        </div>
        <div>
            <label for=\"password\">Password</label>
            <input name=\"_password\" id=\"_password\" type=\"Password\" data-required=\"true\" data-min=\"4\" data-max=\"16\" data-error-len=\"Password must be between 4 and 16 characters\" data-error-required=\"Password is required\"/>
        </div>
        <input name=\"login\" type=\"button\" id=\"_submit\" value=\"Log In\" />
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "SurgeworksCoreBundle:Home:_login_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,  70 => 11,  65 => 8,  60 => 7,  48 => 12,  39 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,  74 => 14,  69 => 12,  61 => 15,  59 => 14,  53 => 12,  50 => 11,  45 => 8,  42 => 9,  35 => 4,  94 => 22,  89 => 21,  86 => 20,  80 => 17,  76 => 16,  72 => 15,  67 => 14,  64 => 13,  58 => 10,  54 => 5,  49 => 8,  46 => 11,  38 => 5,  32 => 3,);
    }
}
