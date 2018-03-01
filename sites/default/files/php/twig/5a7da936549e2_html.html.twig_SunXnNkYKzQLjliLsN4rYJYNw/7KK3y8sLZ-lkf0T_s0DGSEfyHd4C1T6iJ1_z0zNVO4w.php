<?php

/* themes/custom/gavias_great/templates/page/html.html.twig */
class __TwigTemplate_cc5e9770347d8309b0e8c6824fa517736fc2663fdf6a556b3c5541815e9db4e4 extends Twig_Template
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
        $tags = array("if" => 40, "set" => 52);
        $filters = array("raw" => 29, "safe_join" => 31, "clean_class" => 54, "t" => 62);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set'),
                array('raw', 'safe_join', 'clean_class', 't'),
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

        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head> 
    <head-placeholder token=\"";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    
    <title>";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    
    ";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["links_google_fonts"]) ? $context["links_google_fonts"] : null)));
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["theme_path"]) ? $context["theme_path"] : null), "html", null, true));
        echo "/css/custom.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["theme_path"]) ? $context["theme_path"] : null), "html", null, true));
        echo "/css/update.css\" media=\"screen\" />
    
    ";
        // line 40
        if ((isset($context["customize_styles"]) ? $context["customize_styles"] : null)) {
            // line 41
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["customize_styles"]) ? $context["customize_styles"] : null)));
            echo "
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if ((isset($context["customize_css"]) ? $context["customize_css"] : null)) {
            // line 45
            echo "      <style type=\"text/css\">
        ";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["customize_css"]) ? $context["customize_css"] : null)));
            echo "
      </style>
     ";
        }
        // line 48
        echo " 

  </head>
  ";
        // line 52
        $context["body_classes"] = array(0 => ((        // line 53
(isset($context["logged_in"]) ? $context["logged_in"] : null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 54
(isset($context["root_path"]) ? $context["root_path"] : null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass((isset($context["root_path"]) ? $context["root_path"] : null))))), 2 => ((        // line 55
(isset($context["node_type"]) ? $context["node_type"] : null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass((isset($context["node_type"]) ? $context["node_type"] : null)))) : ("")), 3 => ((        // line 56
(isset($context["db_offline"]) ? $context["db_offline"] : null)) ? ("db-offline") : ("")), 4 => ((        // line 57
(isset($context["current_path"]) ? $context["current_path"] : null)) ? (("context" . \Drupal\Component\Utility\Html::getClass((isset($context["current_path"]) ? $context["current_path"] : null)))) : ("")));
        // line 60
        echo "  <body";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </body>
</html>
";
        // line 70
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
        } else {
            // line 72
            if (((isset($context["current_path"]) ? $context["current_path"] : null) == "/home-1")) {
                // line 73
                echo "<div class=\"modal fade bs-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\"  id=\"onload\">
    <div class=\"modal-dialog\">
      <!-- Modal content-->
      <div class=\"modal-content\">
        <div class=\"modal-body\">\t
         <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>\t       
         <div class=\"modal_site_logo\"><img src=\"/themes/gavias_great/images/sb_popup_logo.jpeg\" alt=\"Home\" class=\"sb_popup_logo\"></div>        \t
         ";
                // line 80
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["simplenewssubscription_popup"]) ? $context["simplenewssubscription_popup"] : null), "html", null, true));
                echo "
        </div>
      </div>
    </div>
</div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_great/templates/page/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 80,  151 => 73,  149 => 72,  146 => 70,  140 => 67,  136 => 66,  132 => 65,  128 => 64,  123 => 62,  117 => 60,  115 => 57,  114 => 56,  113 => 55,  112 => 54,  111 => 53,  110 => 52,  105 => 48,  99 => 46,  96 => 45,  94 => 44,  91 => 43,  85 => 41,  83 => 40,  78 => 38,  74 => 37,  69 => 35,  64 => 33,  60 => 32,  56 => 31,  51 => 29,  46 => 27,  43 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/gavias_great/templates/page/html.html.twig", "/home2/thinktc7/wirekcweb.thinktanksolutionsinc.com/themes/custom/gavias_great/templates/page/html.html.twig");
    }
}
