<?php

/* render_page.html.twig */
class __TwigTemplate_2dec8a1b03fc1f43b8fe67c42e3660664d242da3a983cc8a7631f86177976e93 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/front.html.twig", "render_page.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", array()), "html", null, true);
        echo "</h3>

    <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "body", array()), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "render_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts/front.html.twig\" %}

{% block content %}
    <h3>{{ page.title }}</h3>

    <p>{{page.body}}</p>
{% endblock %}", "render_page.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\render_page.html.twig");
    }
}
