<?php

/* themes/custom/gavias_great/templates/page/parts/topbar.html.twig */
class __TwigTemplate_ef80749093353e4b6fb2319be8e48561619ee032e1a38220716bdb5911c4b0af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 6);
        $filters = array("raw" => 75);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div class=\"topbar\">
  <div class=\"container\">
    <div class=\"row\">
      
      <div class=\"topbar-left col-sm-6 col-xs-6\">
        ";
        // line 6
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breaking_news", array())) {
            // line 7
            echo "          <div class=\"breaking-news\">
            <div class=\"content-inner clearfix\">
              <div class=\"title\">
                 Breaking news
              </div>
              <div class=\"content\">";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breaking_news", array()), "html", null, true));
            echo "</div> 
            </div> 
          </div>
        ";
        }
        // line 16
        echo "      </div>

      <div class=\"topbar-right col-sm-6 col-xs-6\">
        <div class=\"social-list\">
          ";
        // line 20
        if ($this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "facebook", array())) {
            // line 21
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "facebook", array()), "html", null, true));
            echo "\"><i class=\"fa fa-facebook\"></i></a>
          ";
        }
        // line 22
        echo " 
          ";
        // line 23
        if ($this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "twitter", array())) {
            // line 24
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "twitter", array()), "html", null, true));
            echo "\"><i class=\"fa fa-twitter-square\"></i></a>
          ";
        }
        // line 25
        echo " 
          ";
        // line 26
        if ($this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "skype", array())) {
            // line 27
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "skype", array()), "html", null, true));
            echo "\"><i class=\"fa fa-skype\"></i></a>
          ";
        }
        // line 28
        echo " 
          ";
        // line 29
        if ($this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "instagram", array())) {
            // line 30
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "instagram", array()), "html", null, true));
            echo "\"><i class=\"fa fa-instagram\"></i></a>
          ";
        }
        // line 31
        echo " 
          ";
        // line 32
        if ($this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "dribbble", array())) {
            // line 33
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "dribbble", array()), "html", null, true));
            echo "\"><i class=\"fa fa-dribbble\"></i></a>
          ";
        }
        // line 34
        echo " 
          ";
        // line 35
        if ($this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "linkedin", array())) {
            // line 36
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "linkedin", array()), "html", null, true));
            echo "\"><i class=\"fa fa-linkedin-square\"></i></a>
          ";
        }
        // line 37
        echo " 
          ";
        // line 38
        if ($this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "pinterest", array())) {
            // line 39
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "pinterest", array()), "html", null, true));
            echo "\"><i class=\"fa fa-pinterest\"></i></a>
          ";
        }
        // line 40
        echo " 
          ";
        // line 41
        if ($this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "google", array())) {
            // line 42
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "google", array()), "html", null, true));
            echo "\"><i class=\"fa fa-google-plus-square\"></i></a>
          ";
        }
        // line 43
        echo " 
          ";
        // line 44
        if ($this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "youtube", array())) {
            // line 45
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "youtube", array()), "html", null, true));
            echo "\"><i class=\"fa fa-youtube-square\"></i></a>
          ";
        }
        // line 46
        echo " 
          ";
        // line 47
        if ($this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "vimeo", array())) {
            // line 48
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "vimeo", array()), "html", null, true));
            echo "\"><i class=\"fa fa-vimeo-square\"></i></a>
          ";
        }
        // line 49
        echo "  
          ";
        // line 50
        if ($this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "tumblr", array())) {
            // line 51
            echo "            <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["custom_social_link"]) ? $context["custom_social_link"] : null), "tumblr", array()), "html", null, true));
            echo "\"><i class=\"fa fa-tumblr-square\"></i></a>
          ";
        }
        // line 52
        echo "  
        </div>  

        ";
        // line 55
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array())) {
            // line 56
            echo "          <div class=\"gva-search-region search-region\">
            <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
            <div class=\"search-content\">
              <a class=\"close\"><i class=\"fa fa-times\"></i></a> 
              <div class=\"content-inner\"> 
                ";
            // line 61
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
            echo "
              </div>
            </div>  
          </div>
       ";
        }
        // line 66
        echo "
        <div class=\"gva-account-region\">
          <span class=\"icon\"><i class=\"fa fa-user\"></i></span>
          <div class=\"search-content\">
            <div class=\"content-inner\">  
              ";
        // line 71
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "account", array())) {
            // line 72
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "account", array()), "html", null, true));
            echo "
              ";
        } else {
            // line 74
            echo "                ";
            if ((isset($context["custom_account"]) ? $context["custom_account"] : null)) {
                // line 75
                echo "                  <div class=\"mess-login text-center\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["custom_account"]) ? $context["custom_account"] : null)));
                echo "</div>
                ";
            }
            // line 76
            echo "  
              ";
        }
        // line 77
        echo "  
            </div>  
          </div>  
        </div>

      </div>
    </div>
  </div>  
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_great/templates/page/parts/topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 77,  236 => 76,  230 => 75,  227 => 74,  221 => 72,  219 => 71,  212 => 66,  204 => 61,  197 => 56,  195 => 55,  190 => 52,  184 => 51,  182 => 50,  179 => 49,  173 => 48,  171 => 47,  168 => 46,  162 => 45,  160 => 44,  157 => 43,  151 => 42,  149 => 41,  146 => 40,  140 => 39,  138 => 38,  135 => 37,  129 => 36,  127 => 35,  124 => 34,  118 => 33,  116 => 32,  113 => 31,  107 => 30,  105 => 29,  102 => 28,  96 => 27,  94 => 26,  91 => 25,  85 => 24,  83 => 23,  80 => 22,  74 => 21,  72 => 20,  66 => 16,  59 => 12,  52 => 7,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/gavias_great/templates/page/parts/topbar.html.twig", "/home2/thinktc7/wirekcweb.thinktanksolutionsinc.com/themes/custom/gavias_great/templates/page/parts/topbar.html.twig");
    }
}
