<?php

/* themes/custom/gavias_great/templates/page/parts/offcanvas.html.twig */
class __TwigTemplate_7f7f72e993f466c625cffcc03ead193cfe5ee3141b00090102aa9b12037332dc extends Twig_Template
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
        $tags = array("if" => 4);
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
        echo "<div class=\"offcanvas-sidebar\">
    <div id=\"gva-offcanvas-inner\" class=\"gva-offcanvas-inner\">
      <div class=\"offcanvas-close\"><a><i class=\"fa fa-times\"></i></a></div>
      ";
        // line 4
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array())) {
            // line 5
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array()), "html", null, true));
            echo "
      ";
        }
        // line 7
        echo "    </div>
  </div>  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_great/templates/page/parts/offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/gavias_great/templates/page/parts/offcanvas.html.twig", "/home2/thinktc7/wirekcweb.thinktanksolutionsinc.com/themes/custom/gavias_great/templates/page/parts/offcanvas.html.twig");
    }
}
