<?php

/* users/index.html.twig */
class __TwigTemplate_fc7ea8d6e803c259125d9aee0b6a20c8d98e3e2b74a347edeeac4941ec6efc15 extends Twig_Template
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
        echo "<h2>Usuários</h2>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "</td>
            <td>
                <a href=\"/admin/users/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\">Ver</a>
                <a href=\"/admin/users/edit/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\">Editar</a>
                <form method=\"post\" action=\"/admin/users/delete/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    
    </tbody>    
</table>

<a href=\"/admin/users/new\">Novo Usuário</a>";
    }

    public function getTemplateName()
    {
        return "users/index.html.twig";
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
        return new Twig_Source("<h2>Usuários</h2>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    {% for user in users %}
        <tr>
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
            <td>
                <a href=\"/admin/users/{{user.id}}\">Ver</a>
                <a href=\"/admin/users/edit/{{user.id}}\">Editar</a>
                <form method=\"post\" action=\"/admin/users/delete/{{user.id}}\" style=\"display:inline-block\">
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

<a href=\"/admin/users/new\">Novo Usuário</a>", "users/index.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\users\\index.html.twig");
    }
}
