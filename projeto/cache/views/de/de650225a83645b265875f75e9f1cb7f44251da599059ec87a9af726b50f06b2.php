<?php

/* users/new.html.twig */
class __TwigTemplate_1bbe913c6e0d0a400a2db288e1cde14fbef24e97ed2d1ebdd34d4d2769662b35 extends Twig_Template
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
        echo "<h3>Novo Usuário</h3>

<form method=\"post\" accept-charset=\"UTF-8\" action=\"/admin/users/new\">
    <input type=\"text\" name=\"name\" placeholder=\"Nome\">
    <input type=\"email\" name=\"email\" placeholder=\"E-mail\">
    <input type=\"password\" name=\"password\" placeholder=\"Senha\">
    <input type=\"submit\" value=\"Salvar\">
</form>";
    }

    public function getTemplateName()
    {
        return "users/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Novo Usuário</h3>

<form method=\"post\" accept-charset=\"UTF-8\" action=\"/admin/users/new\">
    <input type=\"text\" name=\"name\" placeholder=\"Nome\">
    <input type=\"email\" name=\"email\" placeholder=\"E-mail\">
    <input type=\"password\" name=\"password\" placeholder=\"Senha\">
    <input type=\"submit\" value=\"Salvar\">
</form>", "users/new.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\users\\new.html.twig");
    }
}
