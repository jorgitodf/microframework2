<?php

/* index.html.twig */
class __TwigTemplate_a954ec6d2579d7c12e3f91d7bcd477798778a398eb44e881fb6249dc701d2e02 extends Twig_Template
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
        echo "<pre>
    ";
        // line 2
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ($context["users"] ?? null)), "html", null, true);
        echo "
</pre>

";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["users"] ?? null), 0, array()), "name", array()), "html", null, true);
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["users"] ?? null), 0, array()), "email", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  32 => 5,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<pre>
    {{ dump(users) }}
</pre>

{{ users.0.name }}
{{ users.0.email }}", "index.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\index.html.twig");
    }
}
