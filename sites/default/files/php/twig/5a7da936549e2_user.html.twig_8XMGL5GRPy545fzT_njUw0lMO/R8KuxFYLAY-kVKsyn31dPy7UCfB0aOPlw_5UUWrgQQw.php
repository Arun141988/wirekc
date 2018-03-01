<?php

/* themes/custom/gavias_great/templates/user/user.html.twig */
class __TwigTemplate_0dc557da5c9559fea6a4c47e56e597f645d1905a56a77a94dc60ce16b71b1b47 extends Twig_Template
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
        $tags = array("if" => 21);
        $filters = array("without" => 48);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('without'),
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

        // line 19
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile user-profile"), "method"), "html", null, true));
        echo ">
   <div class=\"row\">
      ";
        // line 21
        if ((isset($context["user_content"]) ? $context["user_content"] : null)) {
            // line 22
            echo "         <div class=\"col-md-8 col-xs-12\">
            ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["user_content"]) ? $context["user_content"] : null), "html", null, true));
            echo "
         </div>
      ";
        }
        // line 26
        echo "
      ";
        // line 27
        if ((isset($context["user_content"]) ? $context["user_content"] : null)) {
            // line 28
            echo "         <div class=\"col-md-4 col-xs-12\">
      ";
        } else {
            // line 29
            echo "   
         <div class=\"col-md-12 col-xs-12\">
      ";
        }
        // line 31
        echo "   
         ";
        // line 32
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user_picture", array())) {
            // line 33
            echo "            <div class=\"user-picture\">
               ";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user_picture", array()), "html", null, true));
            echo "
            </div>
         ";
        }
        // line 36
        echo "    
         ";
        // line 37
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_full_name", array())) {
            // line 38
            echo "            <div class=\"user-fullname\">
               ";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_full_name", array()), "html", null, true));
            echo "
            </div>
         ";
        }
        // line 41
        echo "      
         ";
        // line 42
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_user_position", array())) {
            // line 43
            echo "            <div class=\"user-position\">
               ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_user_position", array()), "html", null, true));
            echo "
            </div>
         ";
        }
        // line 46
        echo "     
         ";
        // line 47
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "user_picture", "field_full_name", "field_user_position"), "html", null, true));
        }
        // line 50
        echo "      </div>
   </div>  
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_great/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  121 => 48,  119 => 47,  116 => 46,  110 => 44,  107 => 43,  105 => 42,  102 => 41,  96 => 39,  93 => 38,  91 => 37,  88 => 36,  82 => 34,  79 => 33,  77 => 32,  74 => 31,  69 => 29,  65 => 28,  63 => 27,  60 => 26,  54 => 23,  51 => 22,  49 => 21,  43 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/gavias_great/templates/user/user.html.twig", "/home2/thinktc7/wirekcweb.thinktanksolutionsinc.com/themes/custom/gavias_great/templates/user/user.html.twig");
    }
}
