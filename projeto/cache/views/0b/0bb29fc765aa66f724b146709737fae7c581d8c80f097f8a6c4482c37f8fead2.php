<?php

/* pages/index.html.twig */
class __TwigTemplate_95c434afed37b40c61f528bac61f65418378d18fb730269ee9ddad024f107b93 extends Twig_Template
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
        echo "<h2>Páginas</h2>

<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Texto</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "body", array()), "html", null, true);
            echo "</td>
            <td>
                <a href=\"/admin/pages/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", array()), "html", null, true);
            echo "\">Ver</a>
                <a href=\"/admin/pages/edit/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", array()), "html", null, true);
            echo "\">Editar</a>
                <form method=\"post\" action=\"/admin/pages/delete/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", array()), "html", null, true);
            echo "\" style=\"display:inline-block\">
                    <input type=\"submit\" value=\"Apagar\">
                </form>
            </td>    
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "        <tr>
            <td colspan=\"3\">Nenhum Registro</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    
    </tbody>    
</table>

<a href=\"/admin/pages/new\">Nova Página</a>";
    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  72 => 25,  61 => 19,  57 => 18,  53 => 17,  48 => 15,  44 => 14,  41 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Páginas</h2>

<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Texto</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    {% for page in pages %}
        <tr>
            <td>{{ page.title }}</td>
            <td>{{ page.body }}</td>
            <td>
                <a href=\"/admin/pages/{{page.id}}\">Ver</a>
                <a href=\"/admin/pages/edit/{{page.id}}\">Editar</a>
                <form method=\"post\" action=\"/admin/pages/delete/{{page.id}}\" style=\"display:inline-block\">
                    <input type=\"submit\" value=\"Apagar\">
                </form>
            </td>    
        </tr>
    {% else %}
        <tr>
            <td colspan=\"3\">Nenhum Registro</td>
        </tr>
    {% endfor %}    
    </tbody>    
</table>

<a href=\"/admin/pages/new\">Nova Página</a>", "pages/index.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\pages\\index.html.twig");
    }
}
