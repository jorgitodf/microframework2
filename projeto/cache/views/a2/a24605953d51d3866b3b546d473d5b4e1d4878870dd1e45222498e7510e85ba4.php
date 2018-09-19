<?php

/* login/index.html.twig */
class __TwigTemplate_d7c7532d94bdc7d1a9d5fdfd86683d745416f39a94cbdd6ff5e5e1b67d92ac3d extends Twig_Template
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
        echo "<h3>Autenticação</h3>

<form action=\"/admin/login\" method=\"post\">
    <input name=\"email\" type=\"email\" placeholder=\"E-mail\">
    <input name=\"password\" type=\"password\" placeholder=\"Senha\">
    <input type=\"submit\" value=\"Salvar\">
</form>";
    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Autenticação</h3>

<form action=\"/admin/login\" method=\"post\">
    <input name=\"email\" type=\"email\" placeholder=\"E-mail\">
    <input name=\"password\" type=\"password\" placeholder=\"Senha\">
    <input type=\"submit\" value=\"Salvar\">
</form>", "login/index.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\login\\index.html.twig");
    }
}
