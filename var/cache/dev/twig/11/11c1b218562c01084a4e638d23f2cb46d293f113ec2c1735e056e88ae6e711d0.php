<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_e8be44f881fb68cc7acb3b4adee0355285d227512b3815983c4026c76f333a30 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "<div class=\"container\">
</br></br></br></br></br></br></br></br></br></br>
<div class=\"fos_user_user_show\">
    <div class=\"container emp-profile\">
    
            <form method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"profile-img\">
                            <img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"\"/>
                            
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"profile-head\">
                                    <h3>
                                        Profile User:
                                    </h3>
                                    <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>User Id</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 25, $this->source); })()), "username", array()), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>first Name</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 33, $this->source); })()), "firstName", array()), "html", null, true);
        echo " </p>
                                            </div>
                                        </div>
                                         <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>last Name</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 41, $this->source); })()), "lastName", array()), "html", null, true);
        echo " </p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Email</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                               <p> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 49, $this->source); })()), "email", array()), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Phone</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                 <p> ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 57, $this->source); })()), "number", array()), "html", null, true);
        echo "</p>
                                            </div>
                                        
                                  
                           
                        </div>
                    </div>

                </div>
                </br></br></br></br></br></br></br>
                
                        
                           
                                      
            </form>  
           
</div>
</div>
</br></br></br></br></br></br></br>
</br></br></br></br></br></br></br>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 57,  87 => 49,  76 => 41,  65 => 33,  54 => 25,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"container\">
</br></br></br></br></br></br></br></br></br></br>
<div class=\"fos_user_user_show\">
    <div class=\"container emp-profile\">
    
            <form method=\"post\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"profile-img\">
                            <img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog\" alt=\"\"/>
                            
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"profile-head\">
                                    <h3>
                                        Profile User:
                                    </h3>
                                    <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>User Id</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>{{ user.username }}</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>first Name</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>{{ user.firstName }} </p>
                                            </div>
                                        </div>
                                         <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>last Name</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                <p>{{ user.lastName }} </p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Email</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                               <p> {{ user.email}}</p>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col-md-6\">
                                                <label>Phone</label>
                                            </div>
                                            <div class=\"col-md-6\">
                                                 <p> {{ user.number }}</p>
                                            </div>
                                        
                                  
                           
                        </div>
                    </div>

                </div>
                </br></br></br></br></br></br></br>
                
                        
                           
                                      
            </form>  
           
</div>
</div>
</br></br></br></br></br></br></br>
</br></br></br></br></br></br></br>", "@FOSUser/Profile/show_content.html.twig", "/home/zorgan/Desktop/WORK/symfonyproject/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
