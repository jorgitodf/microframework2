<?php

/* pages/edit.html.twig */
class __TwigTemplate_b96e8845d6e91c74363172e0ba52ae3e94c5a434038dbb263f92f7935775a6cc extends Twig_Template
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
        echo "<h3>Edição Páginas</h3>

<form method=\"post\" accept-charset=\"UTF-8\" action=\"/admin/pages/edit/";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "id", array()), "html", null, true);
        echo "\">
    <input type=\"text\" name=\"title\" placeholder=\"Título\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", array()), "html", null, true);
        echo "\">
    <textarea name=\"body\" id=\"\" cols=\"30\" rows=\"10\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "body", array()), "html", null, true);
        echo "</textarea>    
    <input type=\"submit\" value=\"Salvar\">
</form>";
    }

    public function getTemplateName()
    {
        return "pages/edit.html.twig";
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
        return new Twig_Source("<h3>Edição Páginas</h3>

<form method=\"post\" accept-charset=\"UTF-8\" action=\"/admin/pages/edit/{{ page.id }}\">
    <input type=\"text\" name=\"title\" placeholder=\"Título\" value=\"{{ page.title }}\">
    <textarea name=\"body\" id=\"\" cols=\"30\" rows=\"10\">{{ page.body }}</textarea>    
    <input type=\"submit\" value=\"Salvar\">
</form>", "pages/edit.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\pages\\edit.html.twig");
    }
}
