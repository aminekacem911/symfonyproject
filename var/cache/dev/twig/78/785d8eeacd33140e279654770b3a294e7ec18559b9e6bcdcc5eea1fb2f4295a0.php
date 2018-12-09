<?php

/* default/index.html.twig */
class __TwigTemplate_6483ce3545008525dc873739add3ca5506b001f2581a8a26bed808464668028e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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
        echo " 



";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 8
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
<body ></br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div class=\"row\">
<div class=\"col-md-6\">
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 22
            echo "

<div><img class=\"thumbnail\" class=\"rounded-circle\" src=\"/uploads/photos/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "image", array()), "html", null, true);
            echo "\"></div>

<style>
.thumbnail {
\twidth: 350px;
\theight: 350px;
\t
}
</style>
<div>
<a class=\"btn btn-primary\" href=\"details/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), "html", null, true);
            echo "\">Details</a>
 

</div>
</div>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
</div>

  <section id=\"bottom\">
    <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
      <div class=\"row\">
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            <h3>Company</h3>
            <ul>
              <li><a href=\"#\">About us</a></li>
              <li><a href=\"#\">We are hiring</a></li>
              <li><a href=\"#\">Meet the team</a></li>
              <li><a href=\"#\">Copyright</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            <h3>Support</h3>
            <ul>
              <li><a href=\"#\">Faq</a></li>
              <li><a href=\"#\">Blog</a></li>
              <li><a href=\"#\">Forum</a></li>
              <li><a href=\"#\">Documentation</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            <h3>Developers</h3>
            <ul>
              <li><a href=\"#\">Web Development</a></li>
              <li><a href=\"#\">SEO Marketing</a></li>
              <li><a href=\"#\">Theme</a></li>
              <li><a href=\"#\">Development</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            <h3>Our Partners</h3>
            <ul>
              <li><a href=\"#\">Adipisicing Elit</a></li>
              <li><a href=\"#\">Eiusmod</a></li>
              <li><a href=\"#\">Tempor</a></li>
              <li><a href=\"#\">Veniam</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->
      </div>
    </div>
  </section>
</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  105 => 34,  92 => 24,  88 => 22,  84 => 21,  71 => 10,  63 => 8,  59 => 7,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}  
{% block body %}
 



{% for msg in  app.session.flashbag.get('info')%}
{{ msg }}
{% endfor %}

<body ></br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div class=\"row\">
<div class=\"col-md-6\">
{% for produit in produits %}


<div><img class=\"thumbnail\" class=\"rounded-circle\" src=\"/uploads/photos/{{produit.image}}\"></div>

<style>
.thumbnail {
\twidth: 350px;
\theight: 350px;
\t
}
</style>
<div>
<a class=\"btn btn-primary\" href=\"details/{{produit.id}}\">Details</a>
 

</div>
</div>



{% endfor %}

</div>

  <section id=\"bottom\">
    <div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
      <div class=\"row\">
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            <h3>Company</h3>
            <ul>
              <li><a href=\"#\">About us</a></li>
              <li><a href=\"#\">We are hiring</a></li>
              <li><a href=\"#\">Meet the team</a></li>
              <li><a href=\"#\">Copyright</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            <h3>Support</h3>
            <ul>
              <li><a href=\"#\">Faq</a></li>
              <li><a href=\"#\">Blog</a></li>
              <li><a href=\"#\">Forum</a></li>
              <li><a href=\"#\">Documentation</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            <h3>Developers</h3>
            <ul>
              <li><a href=\"#\">Web Development</a></li>
              <li><a href=\"#\">SEO Marketing</a></li>
              <li><a href=\"#\">Theme</a></li>
              <li><a href=\"#\">Development</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class=\"col-md-3 col-sm-6\">
          <div class=\"widget\">
            <h3>Our Partners</h3>
            <ul>
              <li><a href=\"#\">Adipisicing Elit</a></li>
              <li><a href=\"#\">Eiusmod</a></li>
              <li><a href=\"#\">Tempor</a></li>
              <li><a href=\"#\">Veniam</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->
      </div>
    </div>
  </section>
</body>

{% endblock %}




", "default/index.html.twig", "/home/zorgan/Desktop/WORK/symfonyproject/app/Resources/views/default/index.html.twig");
    }
}
