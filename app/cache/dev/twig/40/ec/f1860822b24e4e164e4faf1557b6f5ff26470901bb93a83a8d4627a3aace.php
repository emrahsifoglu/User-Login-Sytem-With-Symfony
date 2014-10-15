<?php

/* SurgeworksCoreBundle:Contact:_contact_form.html.twig */
class __TwigTemplate_40ecf1860822b24e4e164e4faf1557b6f5ff26470901bb93a83a8d4627a3aace extends Twig_Template
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
        echo "<div id=\"page-wrap\">
    <div id=\"contact-area\">
        <form id=\"contact-form\" action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("contact_form_action");
        echo "\" method=\"post\">
            <label for=\"_name\">Name:</label>
            <input id=\"_name\" data-min=\"1\" data-max=\"32\" data-required=\"true\" data-type=\"text\" type=\"text\" data-error-valid=\"name\" name=\"_name\" placeholder=\"Your Full Name\" />

            <label for=\"_from\">From:</label>
            <input id=\"_from\" data-required=\"true\" data-type=\"email\" type=\"email\" data-error-valid=\"email\" name=\"_from\" placeholder=\"Valid Email Address\" />

            <label for=\"_subject\">Subject:</label>
            <input id=\"_subject\" data-min=\"1\" data-max=\"32\" data-required=\"true\" data-type=\"text\" type=\"text\" data-error-valid=\"subject\" name=\"_subject\" placeholder=\"Your Subject\" />

            <label for=\"_body\">Message:</label><br />
            <textarea id=\"_body\" data-min=\"1\" data-max=\"50\" data-required=\"true\" data-type=\"text\" data-error-valid=\"body\" name=\"_body\" rows=\"20\" cols=\"20\" placeholder=\"Your Message\"></textarea>

            <label for=\"_to\">Admin</label>
            <select data-required=\"true\" data-type=\"select-one\" data-error-valid=\"select\" id=\"_to\" name=\"_to\">
                <option value=\"-1\">Please select.</option>
                ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 20
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "email"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "username"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </select>
            <h1></h1>
            <input type=\"button\" class=\"submit-button\" id=\"_submit\" name=\"_submit\" value=\"Send\" />
        </form>
        <div style=\"clear: both;\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "SurgeworksCoreBundle:Contact:_contact_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  42 => 19,  23 => 3,  19 => 1,  77 => 18,  74 => 17,  68 => 14,  63 => 13,  60 => 12,  54 => 9,  49 => 8,  46 => 20,  38 => 5,  32 => 3,);
    }
}
