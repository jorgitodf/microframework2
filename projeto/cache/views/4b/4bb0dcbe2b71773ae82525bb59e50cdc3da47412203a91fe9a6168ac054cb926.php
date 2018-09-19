<?php

/* pages/view.html.twig */
class __TwigTemplate_aeea397b4eb9b576e7ee7e598a57499c821372a22b54afcc5e1252557bc69e2c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h3>Título: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", array()), "html", null, true);
        echo "</h3> 
<h3>Texto: ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "body", array()), "html", null, true);
        echo "</h3> 

<p><a href=\"/admin/pages\">Início</a></p>";
    }

    public function getTemplateName()
    {
        return "pages/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Título: {{ page.title }}</h3> 
<h3>Texto: {{ page.body  }}</h3> 

<p><a href=\"/admin/pages\">Início</a></p>", "pages/view.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\pages\\view.html.twig");
    }
}
