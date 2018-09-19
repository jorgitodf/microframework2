<?php

/* layouts/front.html.twig */
class __TwigTemplate_0947db2a577a54bd73b4f4253fa5484835a23ffd62448c0c39befd25e5514e7f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"/style.css\">
</head>
<body>
<nav>
    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/page/3\">Sobre nós</a></li>
    </ul>
</nav>
    ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "</body>
</html>";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/front.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  44 => 18,  42 => 17,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"/style.css\">
</head>
<body>
<nav>
    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/page/3\">Sobre nós</a></li>
    </ul>
</nav>
    {% block content %}{% endblock %}
</body>
</html>", "layouts/front.html.twig", "C:\\xampp\\htdocs\\microframework2\\projeto\\views\\layouts\\front.html.twig");
    }
}
