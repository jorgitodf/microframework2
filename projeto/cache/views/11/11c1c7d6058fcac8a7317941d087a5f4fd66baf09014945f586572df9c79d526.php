<?php

/* pages/new.html.twig */
class __TwigTemplate_88cee9dbe65c5e6b2dd5635a4b15ab53938f2173c8cb4eb2a797d3b94b18e2f0 extends Twig_Template
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
        echo "<h3>Nova Página</h3>

<form method=\"post\" accept-charset=\"UTF-8\" action=\"/admin/pages/new\">
    <input type=\"text\" name=\"title\" placeholder=\"Título\">
    <textarea name=\"body\"></textarea>    
    <input type=\"submit\" value=\"Salvar\">
</form>";
    }

    public function getTemplateName()
    {
        return "pages/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Nova Página</h3>

<form method=\"post\" accept-charset=\"UTF-8\" action=\"/admin/pages/new\">
    <input type=\"text\" name=\"title\" placeholder=\"Título\">
    <textarea name=\"body\"></textarea>    
    <input type=\"submit\" value=\"Salvar\">
</form>", "pages/new.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\pages\\new.html.twig");
    }
}
