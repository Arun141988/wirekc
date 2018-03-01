<?php

/* themes/custom/gavias_great/templates/page/footer.html.twig */
class __TwigTemplate_62576f919a3a28da46280e598cf1cd1c55793fb2860d4732843a876f57858f06 extends Twig_Template
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
        $tags = array("if" => 3, "set" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array(),
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
        echo "<footer id=\"footer\" class=\"footer\">
  
  ";
        // line 3
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_footer", array())) {
            // line 4
            echo "   <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-12\">
            <div class=\"before_footer area\">
                ";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_footer", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>     
      </div>   
    </div> 
   ";
        }
        // line 16
        echo "   
   <div class=\"footer-center\">
      <div class=\"container\">      
         <div class=\"row\">
            ";
        // line 20
        $context["footer_count"] = 0;
        // line 21
        echo "              
              ";
        // line 22
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 23
            echo "                ";
            $context["footer_count"] = ((isset($context["footer_count"]) ? $context["footer_count"] : null) + 1);
            // line 24
            echo "              ";
        }
        echo "  
              
              ";
        // line 26
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 27
            echo "                ";
            $context["footer_count"] = ((isset($context["footer_count"]) ? $context["footer_count"] : null) + 1);
            // line 28
            echo "              ";
        }
        echo "  
              
              ";
        // line 30
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
            // line 31
            echo "                ";
            $context["footer_count"] = ((isset($context["footer_count"]) ? $context["footer_count"] : null) + 1);
            // line 32
            echo "              ";
        }
        echo "  
              
              ";
        // line 34
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_four", array())) {
            // line 35
            echo "                ";
            $context["footer_count"] = ((isset($context["footer_count"]) ? $context["footer_count"] : null) + 1);
            // line 36
            echo "              ";
        }
        echo "   

              ";
        // line 38
        $context["col_class"] = "footer-1col col-lg-12 col-md-12 col-md-12 col-xs-12";
        // line 39
        echo "
              ";
        // line 40
        if (((isset($context["footer_count"]) ? $context["footer_count"] : null) == 2)) {
            // line 41
            echo "                  ";
            $context["col_class"] = "footer-2col col-lg-6 col-md-6 col-md-6 col-xs-12";
            // line 42
            echo "              ";
        } elseif (((isset($context["footer_count"]) ? $context["footer_count"] : null) == 3)) {
            echo "  
                  ";
            // line 43
            $context["col_class"] = "footer-3col col-lg-4 col-md-4 col-md-1 col-xs-12";
            // line 44
            echo "              ";
        } elseif (((isset($context["footer_count"]) ? $context["footer_count"] : null) == 4)) {
            // line 45
            echo "                   ";
            $context["col_class"] = "footer-4col col-lg-3 col-md-3 col-md-6 col-xs-12";
            // line 46
            echo "              ";
        }
        // line 47
        echo "              
              ";
        // line 48
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 49
            echo "                <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
            echo " column\">
                  ";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 53
        echo "
              ";
        // line 54
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 55
            echo "                <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
            echo " column\">
                  ";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 59
        echo "
              ";
        // line 60
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
            // line 61
            echo "                <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
            echo " column\">
                  ";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 65
        echo "
              ";
        // line 66
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_four", array())) {
            // line 67
            echo "                <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["col_class"]) ? $context["col_class"] : null), "html", null, true));
            echo " column\">
                  ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_four", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 71
        echo "         </div>   
      </div>
   </div>   
  
  ";
        // line 75
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_footer", array())) {
            // line 76
            echo "    <div class=\"after-footer area\">
      <div class=\"container\">
        <div class=\"content-inner\">
          ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_footer", array()), "html", null, true));
            echo "
        </div>
      </div>      
    </div>
  ";
        }
        // line 84
        echo "
   ";
        // line 85
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "copyright", array())) {
            // line 86
            echo "   <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            ";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "copyright", array()), "html", null, true));
            echo "
        </div>   
      </div>   
   </div>
 ";
        }
        // line 94
        echo " <div class=\"return-top default hidden-xs\"><i class=\"fa fa-angle-up\"></i></div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_great/templates/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 94,  242 => 89,  237 => 86,  235 => 85,  232 => 84,  224 => 79,  219 => 76,  217 => 75,  211 => 71,  205 => 68,  200 => 67,  198 => 66,  195 => 65,  189 => 62,  184 => 61,  182 => 60,  179 => 59,  173 => 56,  168 => 55,  166 => 54,  163 => 53,  157 => 50,  152 => 49,  150 => 48,  147 => 47,  144 => 46,  141 => 45,  138 => 44,  136 => 43,  131 => 42,  128 => 41,  126 => 40,  123 => 39,  121 => 38,  115 => 36,  112 => 35,  110 => 34,  104 => 32,  101 => 31,  99 => 30,  93 => 28,  90 => 27,  88 => 26,  82 => 24,  79 => 23,  77 => 22,  74 => 21,  72 => 20,  66 => 16,  56 => 9,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/gavias_great/templates/page/footer.html.twig", "/home2/thinktc7/wirekcweb.thinktanksolutionsinc.com/themes/custom/gavias_great/templates/page/footer.html.twig");
    }
}
