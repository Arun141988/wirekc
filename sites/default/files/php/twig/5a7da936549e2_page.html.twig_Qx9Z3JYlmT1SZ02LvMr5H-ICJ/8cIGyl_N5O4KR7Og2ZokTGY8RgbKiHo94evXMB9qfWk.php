<?php

/* themes/custom/gavias_great/templates/page/page.html.twig */
class __TwigTemplate_20af0b91e26ccd292717bb9e875f77b3b2e47644baec114e18da99c8875dcdea extends Twig_Template
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
        $tags = array("include" => 8, "if" => 11, "set" => 40);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if', 'set'),
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

        // line 7
        echo "<div class=\"body-page\">
\t";
        // line 8
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/parts/preloader.html.twig"), "themes/custom/gavias_great/templates/page/page.html.twig", 8)->display($context);
        // line 9
        echo "   ";
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . (isset($context["header_skin"]) ? $context["header_skin"] : null)), "themes/custom/gavias_great/templates/page/page.html.twig", 9)->display($context);
        // line 10
        echo "\t
   ";
        // line 11
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumbs", array())) {
            // line 12
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumbs", array()), "html", null, true));
            echo "\t
\t\t</div>
\t";
        }
        // line 16
        echo "\t
\t<div role=\"main\" class=\"main main-page\">\t
\t\t";
        // line 18
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/parts/before-content.html.twig"), "themes/custom/gavias_great/templates/page/page.html.twig", 18)->display($context);
        // line 19
        echo "\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container\">\t
\t\t\t\t";
        // line 21
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/main.html.twig"), "themes/custom/gavias_great/templates/page/page.html.twig", 21)->display($context);
        // line 22
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 24
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/parts/after-content.html.twig"), "themes/custom/gavias_great/templates/page/page.html.twig", 24)->display($context);
        // line 25
        echo "\t</div>

\t";
        // line 27
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_after_content", array())) {
            // line 28
            echo "\t\t<div class=\"fw-before-content area\">
\t\t\t";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_after_content", array()), "html", null, true));
            echo "
\t\t</div>
\t";
        }
        // line 32
        echo "
\t";
        // line 33
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_after_content_black", array())) {
            // line 34
            echo "\t\t<div class=\"fw-before-content-black area\">
\t\t\t";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_after_content_black", array()), "html", null, true));
            echo "
\t\t</div>
\t";
        }
        // line 38
        echo "
\t";
        // line 39
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first", array()) || (isset($context["panel_second"]) ? $context["panel_second"] : null))) {
            // line 40
            echo "\t\t";
            $context["cl_panel"] = "col-lg-6 col-md-6 col-sm-6 col-xs-12";
            // line 41
            echo "\t\t";
            $context["nub_panel"] = 0;
            // line 42
            echo "\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first", array())) {
                echo "\t
\t\t\t";
                // line 43
                $context["nub_panel"] = ((isset($context["nub_panel"]) ? $context["nub_panel"] : null) + 1);
                // line 44
                echo "\t\t";
            }
            // line 45
            echo "\t\t";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second", array())) {
                echo "\t
\t\t\t";
                // line 46
                $context["nub_panel"] = ((isset($context["nub_panel"]) ? $context["nub_panel"] : null) + 1);
                // line 47
                echo "\t\t";
            }
            // line 48
            echo "\t\t
\t\t";
            // line 49
            if (((isset($context["nub_panel"]) ? $context["nub_panel"] : null) == "1")) {
                // line 50
                echo "\t\t   ";
                $context["cl_panel"] = "col-lg-12 col-md-12 col-sm-12 col-xs-12";
                // line 51
                echo "\t\t";
            } elseif (((isset($context["nub_panel"]) ? $context["nub_panel"] : null) == "2")) {
                // line 52
                echo "\t\t   ";
                $context["cl_panel"] = "col-lg-6 col-md-6 col-sm-6 col-xs-12";
                // line 53
                echo "\t\t";
            }
            echo "  

\t\t<div class=\"area area-panel\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"area-panel-inner\">
\t\t\t\t\t<div class=\"row\">\t
\t\t\t\t\t\t";
            // line 59
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first", array())) {
                // line 60
                echo "\t\t\t\t\t\t\t<div class=\"panel_first ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["cl_panel"]) ? $context["cl_panel"] : null), "html", null, true));
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"panel-inner\">
\t\t\t\t\t\t\t\t\t";
                // line 62
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first", array()), "html", null, true));
                echo "
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 65
            echo "\t
\t\t\t\t\t\t";
            // line 66
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second", array())) {
                // line 67
                echo "\t\t\t\t\t\t\t<div class=\"panel_second ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["cl_panel"]) ? $context["cl_panel"] : null), "html", null, true));
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"panel-inner\">
\t\t\t\t\t\t\t\t\t";
                // line 69
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second", array()), "html", null, true));
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 72
            echo "\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>\t
\t\t</div>
\t";
        }
        // line 77
        echo "\t

\t";
        // line 79
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/footer.html.twig"), "themes/custom/gavias_great/templates/page/page.html.twig", 79)->display($context);
        // line 80
        echo "\t";
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/parts/offcanvas.html.twig"), "themes/custom/gavias_great/templates/page/page.html.twig", 80)->display($context);
        // line 81
        echo "\t
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_great/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 81,  214 => 80,  212 => 79,  208 => 77,  200 => 72,  193 => 69,  187 => 67,  185 => 66,  182 => 65,  175 => 62,  169 => 60,  167 => 59,  157 => 53,  154 => 52,  151 => 51,  148 => 50,  146 => 49,  143 => 48,  140 => 47,  138 => 46,  133 => 45,  130 => 44,  128 => 43,  123 => 42,  120 => 41,  117 => 40,  115 => 39,  112 => 38,  106 => 35,  103 => 34,  101 => 33,  98 => 32,  92 => 29,  89 => 28,  87 => 27,  83 => 25,  81 => 24,  77 => 22,  75 => 21,  71 => 19,  69 => 18,  65 => 16,  59 => 13,  56 => 12,  54 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/gavias_great/templates/page/page.html.twig", "/home2/thinktc7/wirekcweb.thinktanksolutionsinc.com/themes/custom/gavias_great/templates/page/page.html.twig");
    }
}
