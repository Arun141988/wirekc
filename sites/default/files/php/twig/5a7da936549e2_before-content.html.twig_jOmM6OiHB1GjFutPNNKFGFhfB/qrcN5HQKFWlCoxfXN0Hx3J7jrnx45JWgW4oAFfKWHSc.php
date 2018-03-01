<?php

/* themes/custom/gavias_great/templates/page/parts/before-content.html.twig */
class __TwigTemplate_a54c020ac272ef00673d1c654a047c914e7be98b102e4c23941b8295ce030dda extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_promotion", array())) {
            // line 2
            echo "  <div class=\"promotion-fw area\">
    <div class=\"content-inner\">
      ";
            // line 4
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_promotion", array()), "html", null, true));
            echo "
    </div>  
  </div>
";
        }
        // line 7
        echo " 

";
        // line 9
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promotion", array())) {
            // line 10
            echo "  <div class=\"promotion area\">
    <div class=\"container\">
      <div class=\"content-inner\">
        ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promotion", array()), "html", null, true));
            echo "
      </div>
    </div>    
  </div>
";
        }
        // line 17
        echo " 

";
        // line 19
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 20
            echo "  <div class=\"help\">
    <div class=\"container\">
      <div class=\"content-inner\">
        ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 28
        echo "
";
        // line 29
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_before_content", array())) {
            // line 30
            echo "  <div class=\"fw-before-content area\">
    ";
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_before_content", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 34
        echo "
<div class=\"clearfix\"></div>
";
        // line 36
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array())) {
            // line 37
            echo "  <div class=\"before_content area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          ";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array()), "html", null, true));
            echo "
          </div>
      </div>
    </div>
  </div>
";
        }
        // line 47
        echo "<div class=\"clearfix\"></div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_great/templates/page/parts/before-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  120 => 41,  114 => 37,  112 => 36,  108 => 34,  102 => 31,  99 => 30,  97 => 29,  94 => 28,  86 => 23,  81 => 20,  79 => 19,  75 => 17,  67 => 13,  62 => 10,  60 => 9,  56 => 7,  49 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/gavias_great/templates/page/parts/before-content.html.twig", "/home2/thinktc7/wirekcweb.thinktanksolutionsinc.com/themes/custom/gavias_great/templates/page/parts/before-content.html.twig");
    }
}
