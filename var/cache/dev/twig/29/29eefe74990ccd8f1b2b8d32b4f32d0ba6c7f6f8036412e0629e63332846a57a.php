<?php

/* default/details.html.twig */
class __TwigTemplate_0c12f7a41e554785fc1d6b41c278379d56cff334074500f6a7aaa623f2e21a83 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/details.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<div class=\"container\">
<h1>Détail du produit ";
        // line 14
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 14, $this->source); })()), "name", array())), "html", null, true);
        echo "</h1>

<p>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 18
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</p>

<table class=\"table table-hover table-striped\" border=\"1\">
<tr>
<td>ID# : </td>
<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 25, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
</tr>
<tr>
<td>Name: </td>
<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 29, $this->source); })()), "name", array())), "html", null, true);
        echo "</td>
</tr>
<tr>
<td>Image : </td>
<td><img class=\"thumbnail\" src=\"/uploads/photos/";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 33, $this->source); })()), "image", array()), "html", null, true);
        echo "\"></td>
</tr>
<tr>
<td>Category : </td>
<td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 37, $this->source); })()), "category", array()), "html", null, true);
        echo "</td>
</tr>
<tr>
<td>Prix : </td>
<td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new Twig_Error_Runtime('Variable "produit" does not exist.', 41, $this->source); })()), "prix", array()), "html", null, true);
        echo "</td>
</tr>
</table>


</div>
</body>
<style>
.thumbnail {
\twidth: 80px;
\theight: 80px;
}
</style>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  112 => 37,  105 => 33,  98 => 29,  91 => 25,  84 => 20,  76 => 18,  72 => 17,  66 => 14,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<body>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<div class=\"container\">
<h1>Détail du produit {{produit.name | upper}}</h1>

<p>
{% for msg in  app.session.flashbag.get('info')%}
{{ msg }}
{% endfor %}
</p>

<table class=\"table table-hover table-striped\" border=\"1\">
<tr>
<td>ID# : </td>
<td>{{produit.id}}</td>
</tr>
<tr>
<td>Name: </td>
<td>{{produit.name | upper}}</td>
</tr>
<tr>
<td>Image : </td>
<td><img class=\"thumbnail\" src=\"/uploads/photos/{{produit.image}}\"></td>
</tr>
<tr>
<td>Category : </td>
<td>{{produit.category}}</td>
</tr>
<tr>
<td>Prix : </td>
<td>{{produit.prix}}</td>
</tr>
</table>


</div>
</body>
<style>
.thumbnail {
\twidth: 80px;
\theight: 80px;
}
</style>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
{% endblock %}", "default/details.html.twig", "/home/zorgan/Desktop/WORK/symfonyproject/app/Resources/views/default/details.html.twig");
    }
}
