<?php

/* themes/custom/gavias_great/templates/page/header.html.twig */
class __TwigTemplate_bcf3333fea7735ae8f49d82b344fba5be6ea96dca806c928955fd061aa6afce9 extends Twig_Template
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
        $tags = array("include" => 3, "if" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
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
        echo "<header id=\"header\" class=\"header-v1\">
  
  ";
        // line 3
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/parts/topbar.html.twig"), "themes/custom/gavias_great/templates/page/header.html.twig", 3)->display($context);
        // line 4
        echo "
   <div class=\"header-main\">
      <div class=\"container\">
         <div class=\"header-main-inner\">
            <div class=\"row\">
               <div class=\"col-md-4 col-xs-12\">
               ";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array())) {
            // line 11
            echo "                  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
            echo "
               ";
        }
        // line 13
        echo "               </div>

               <div class=\"col-md-8 col-xs-12 header-right\">
                  ";
        // line 16
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_right", array())) {
            // line 17
            echo "                     <div class=\"header-right-inner\">
                        ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_right", array()), "html", null, true));
            echo "
                     </div>
                   ";
        }
        // line 21
        echo "               </div>
            </div>
         </div>
      </div>
   </div>

    <div class=\"header-bottom ";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["sticky_menu"]) ? $context["sticky_menu"] : null), "html", null, true));
        echo "\">
      <div class=\"main-menu\">
        <div class=\"container\">
           <div class=\"row\">
              <div class=\"col-xs-12 area-main-menu\">
                <div class=\"area-inner menu-hover\">
                  ";
        // line 33
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 34
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
                  ";
        }
        // line 35
        echo "  
                  <div id=\"menu-bar\" class=\"menu-bar\">
                    <span class=\"one\"></span>
                    <span class=\"two\"></span>
                    <span class=\"three\"></span>
                  </div>
                </div>   
              </div>
           </div>
        </div>
      </div>
   </div>
   
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_great/templates/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  100 => 34,  98 => 33,  89 => 27,  81 => 21,  75 => 18,  72 => 17,  70 => 16,  65 => 13,  59 => 11,  57 => 10,  49 => 4,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/gavias_great/templates/page/header.html.twig", "/home2/thinktc7/wirekcweb.thinktanksolutionsinc.com/themes/custom/gavias_great/templates/page/header.html.twig");
    }
}
