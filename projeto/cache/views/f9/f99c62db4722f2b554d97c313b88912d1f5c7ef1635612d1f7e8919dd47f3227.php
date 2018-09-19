<?php

/* users/view.html.twig */
class __TwigTemplate_2fea0529ab2ffec19ba04373d970a181e89e84df9274a266959214678a40b4e1 extends Twig_Template
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
        echo "<h3>Usuário: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "</h3> 
<h3>E-mail: ";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</h3> 

<p><a href=\"/admin/users\">Início</a></p>";
    }

    public function getTemplateName()
    {
        return "users/view.html.twig";
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
        return new Twig_Source("<h3>Usuário: {{ user.name }}</h3> 
<h3>E-mail: {{ user.email }}</h3> 

<p><a href=\"/admin/users\">Início</a></p>", "users/view.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\users\\view.html.twig");
    }
}
