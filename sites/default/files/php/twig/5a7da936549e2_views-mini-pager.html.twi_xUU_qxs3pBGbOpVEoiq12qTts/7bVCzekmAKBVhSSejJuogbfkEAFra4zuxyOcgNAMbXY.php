<?php

/* themes/custom/gavias_great/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_746d83c62d681180a5951faeb22d872e151ce355a9a4284c3f2dc20353f77a20 extends Twig_Template
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
        $tags = array("if" => 14, "trans" => 29);
        $filters = array("t" => 16, "without" => 20);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('t', 'without'),
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

        // line 14
        if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()))) {
            // line 15
            echo "  <nav role=\"navigation\">
    <h4 class=\"visually-hidden\">";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"js-pager__items\">
      ";
            // line 18
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 19
                echo "        <li class=\"prev\">
          <a href=\"";
                // line 20
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
            <span><i class=\"fa fa-angle-left\"></i></span>
          </a>
        </li>
      ";
            } else {
                // line 25
                echo "        <li class=\"prev\"><span class=\"disable-show\"><i class=\"fa fa-angle-left\"></i></span></li>
      ";
            }
            // line 27
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "current", array())) {
                // line 28
                echo "        <li class=\"hidden\">
          ";
                // line 29
                echo t("Page @items.current", array("@items.current" => $this->getAttribute(                // line 30
(isset($context["items"]) ? $context["items"] : null), "current", array()), ));
                // line 32
                echo "        </li>
      ";
            }
            // line 34
            echo "      ";
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 35
                echo "        <li class=\"next\">
          <a href=\"";
                // line 36
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
            <span><i class=\"fa fa-angle-right\"></i></span>
          </a>
        </li>
      ";
            } else {
                // line 41
                echo "        <li class=\"next\"><span class=\"disable-show\"><i class=\"fa fa-angle-right\"></i></span></li>
      ";
            }
            // line 43
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_great/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  105 => 41,  93 => 36,  90 => 35,  87 => 34,  83 => 32,  81 => 30,  80 => 29,  77 => 28,  74 => 27,  70 => 25,  58 => 20,  55 => 19,  53 => 18,  48 => 16,  45 => 15,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/gavias_great/templates/views/views-mini-pager.html.twig", "/home2/thinktc7/wirekcweb.thinktanksolutionsinc.com/themes/custom/gavias_great/templates/views/views-mini-pager.html.twig");
    }
}
