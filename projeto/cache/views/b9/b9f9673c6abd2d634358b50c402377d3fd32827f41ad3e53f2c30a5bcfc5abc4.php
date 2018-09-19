<?php

/* users/edit.html.twig */
class __TwigTemplate_cdb74238c62dac6155cafa3713eb64dea403dc35ec58b2eaf576e67bbb16f8f8 extends Twig_Template
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
        echo "<h3>Ediação Usuário</h3>

<form method=\"post\" accept-charset=\"UTF-8\" action=\"/admin/users/edit/";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\">
    <input type=\"text\" name=\"name\" placeholder=\"Nome\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\">
    <input type=\"email\" name=\"email\" placeholder=\"E-mail\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\">
    <input type=\"password\" name=\"password\" placeholder=\"Senha\">
    <input type=\"submit\" value=\"Salvar\">
</form>";
    }

    public function getTemplateName()
    {
        return "users/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Ediação Usuário</h3>

<form method=\"post\" accept-charset=\"UTF-8\" action=\"/admin/users/edit/{{ user.id }}\">
    <input type=\"text\" name=\"name\" placeholder=\"Nome\" value=\"{{ user.name }}\">
    <input type=\"email\" name=\"email\" placeholder=\"E-mail\" value=\"{{ user.email }}\">
    <input type=\"password\" name=\"password\" placeholder=\"Senha\">
    <input type=\"submit\" value=\"Salvar\">
</form>", "users/edit.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\users\\edit.html.twig");
    }
}
