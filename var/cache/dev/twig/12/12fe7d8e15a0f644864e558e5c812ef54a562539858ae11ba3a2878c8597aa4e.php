<?php

/* base.html.twig */
class __TwigTemplate_9cfdff2bab39d6524b94036abff54c9dd9f2d569a654053ed3de0d9163f5500f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  

  ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "</head>

<body class=\"homepage\">
  <header id=\"header\">
    <nav class=\"navbar navbar-fixed-top\" role=\"banner\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          
          
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
     
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">AboutUs</a>
      </li>

      
     
    
     <li class=\"nav-link\">
     
            ";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "            <span style=\"border-style: solid; color:red;\"> 
                <span style=\"border-style: solid; color:red;\"> ";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 43, $this->source); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " </span>
                </span>
                <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
                
            ";
        } else {
            // line 50
            echo "                   <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 52
        echo "        </li>
      
        </div>
</ul>
        <div class=\"collapse navbar-collapse navbar-right\">
          <ul class=\"nav navbar-nav\">
            
           <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
      <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>

    </form>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->

  </header>
  <!--/header-->


 <div class=\"container\">
        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "        
                 </div>


  <!--/#bottom-->

 ";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
        // line 124
        echo "</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"icon\" type=\"image/gif\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fav-icon.ico"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "          
        <link rel=\"icon\" type=\"image/gif\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fav-icon.ico"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 91
        echo "  <!--/#bottom-->

  <div class=\"top-bar\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"social\">
            <ul class=\"social-share\">
              <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </div>
  <!--/.top-bar-->

  <footer id=\"footer\" class=\"midnight-blue\">
    <div class=\"container\">
      <div class=\"row\">
        <center>POWERED BY AMINE AND LOUAY</center>
    </div>
  </footer>
  <!--/#footer-->


</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 91,  232 => 90,  220 => 82,  216 => 81,  212 => 80,  208 => 79,  204 => 78,  200 => 77,  197 => 76,  188 => 75,  176 => 16,  172 => 15,  168 => 14,  164 => 13,  160 => 12,  155 => 11,  146 => 10,  136 => 124,  134 => 90,  126 => 84,  124 => 75,  99 => 52,  91 => 50,  84 => 46,  80 => 45,  75 => 43,  72 => 42,  70 => 41,  45 => 18,  43 => 10,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  

  {% block stylesheets %}
        <link rel=\"icon\" type=\"image/gif\" href=\"{{ asset('fav-icon.ico') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
  {% endblock %}
</head>

<body class=\"homepage\">
  <header id=\"header\">
    <nav class=\"navbar navbar-fixed-top\" role=\"banner\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          
          
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
     
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">AboutUs</a>
      </li>

      
     
    
     <li class=\"nav-link\">
     
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            <span style=\"border-style: solid; color:red;\"> 
                <span style=\"border-style: solid; color:red;\"> {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} </span>
                </span>
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
                
            {% else %}
                   <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </li>
      
        </div>
</ul>
        <div class=\"collapse navbar-collapse navbar-right\">
          <ul class=\"nav navbar-nav\">
            
           <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
      <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>

    </form>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->

  </header>
  <!--/header-->


 <div class=\"container\">
        {% block body %}
          
        <link rel=\"icon\" type=\"image/gif\" href=\"{{ asset('fav-icon.ico') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css') }}\"/>
\t<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\"/>
  {% endblock %}
        
                 </div>


  <!--/#bottom-->

 {% block footer %}
  <!--/#bottom-->

  <div class=\"top-bar\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"social\">
            <ul class=\"social-share\">
              <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-skype\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </div>
  <!--/.top-bar-->

  <footer id=\"footer\" class=\"midnight-blue\">
    <div class=\"container\">
      <div class=\"row\">
        <center>POWERED BY AMINE AND LOUAY</center>
    </div>
  </footer>
  <!--/#footer-->


</body>
{% endblock %}
</html>", "base.html.twig", "/home/zorgan/Desktop/WORK/symfonyproject/app/Resources/views/base.html.twig");
    }
}
