<?php

/* themes/custom/gavias_great/templates/navigation/menu--menu-mobile.html.twig */
class __TwigTemplate_336d3bf6b91c6a35647bb5de6d7f30c96f66a7115dc22e2a6cfefd380f2e4be1 extends Twig_Template
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
        $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 39, "set" => 40);
        $filters = array("join" => 46, "without" => 59);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array('join', 'without'),
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

        // line 21
        echo "
<div class=\"gva-navigation\">
";
        // line 23
        $context["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
        // line 82
        echo "</div>
";
    }

    // line 31
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "  ";
            $context["menus"] = $this;
            // line 33
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 34
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "gva_menu gva_menu_main"), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul class=\"menu sub-menu\">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      ";
                    $context["class_mega_menu"] = "";
                    // line 41
                    echo "      ";
                    $context["class_columns"] = "";
                    // line 42
                    echo "      ";
                    if ((($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout", array()) == "menu-block") && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0))) {
                        // line 43
                        echo "        ";
                        $context["class_mega_menu"] = "gva-mega-menu mega-menu-block";
                        echo " 
      ";
                    } elseif ((($this->getAttribute($this->getAttribute(                    // line 44
$context["item"], "attributes", array()), "gva_layout", array()) == "menu-grid") && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0))) {
                        echo "   
        ";
                        // line 45
                        $context["class_mega_menu"] = "gva-mega-menu megamenu menu-grid";
                        echo " 
        ";
                        // line 46
                        $context["class_columns"] = twig_join_filter(array(0 => "menu-columns-", 1 => $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout_columns", array())), "");
                        // line 47
                        echo "      ";
                    }
                    // line 48
                    echo "      ";
                    // line 49
                    $context["classes"] = array(0 => "menu-item", 1 => (($this->getAttribute(                    // line 51
$context["item"], "is_expanded", array())) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 52
$context["item"], "is_collapsed", array())) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 53
$context["item"], "in_active_trail", array())) ? ("menu-item--active-trail") : ("")), 4 => $this->getAttribute($this->getAttribute(                    // line 54
$context["item"], "attributes", array()), "gva_class", array()), 5 =>                     // line 55
(isset($context["class_mega_menu"]) ? $context["class_mega_menu"] : null), 6 =>                     // line 56
(isset($context["class_columns"]) ? $context["class_columns"] : null));
                    // line 59
                    echo "      <li ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "gva_icon", "gva_class", "gva_layout_columns", "gva_block", "gva_layout"), "html", null, true));
                    echo ">
        <a href=\"";
                    // line 60
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\">
          ";
                    // line 61
                    if (($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_icon", array()) != "")) {
                        // line 62
                        echo "            <i class=\"fa ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_icon", array()), "html", null, true));
                        echo "\"></i>
          ";
                    }
                    // line 64
                    echo "          ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "
          ";
                    // line 65
                    if (($this->getAttribute($context["item"], "below", array()) || (($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout", array()) == "menu-block") && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)))) {
                        // line 66
                        echo "            <span class=\"icaret nav-plus fa fa-angle-down\"></span>
          ";
                    }
                    // line 67
                    echo "  
        </a>
        ";
                    // line 69
                    if ((($this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "gva_layout", array()) == "menu-block") && ((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0))) {
                        // line 70
                        echo "          <div class=\"sub-menu\">
            ";
                        // line 71
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "gva_block_content", array()), "html", null, true));
                        echo "
          </div>
        ";
                    }
                    // line 73
                    echo "  
        ";
                    // line 74
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 75
                        echo "          ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
        ";
                    }
                    // line 77
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/gavias_great/templates/navigation/menu--menu-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 79,  191 => 77,  185 => 75,  183 => 74,  180 => 73,  174 => 71,  171 => 70,  169 => 69,  165 => 67,  161 => 66,  159 => 65,  154 => 64,  148 => 62,  146 => 61,  142 => 60,  137 => 59,  135 => 56,  134 => 55,  133 => 54,  132 => 53,  131 => 52,  130 => 51,  129 => 49,  127 => 48,  124 => 47,  122 => 46,  118 => 45,  114 => 44,  109 => 43,  106 => 42,  103 => 41,  100 => 40,  95 => 39,  91 => 37,  85 => 35,  82 => 34,  79 => 33,  76 => 32,  62 => 31,  57 => 82,  52 => 29,  49 => 24,  47 => 23,  43 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/gavias_great/templates/navigation/menu--menu-mobile.html.twig", "/home2/thinktc7/wirekcweb.thinktanksolutionsinc.com/themes/custom/gavias_great/templates/navigation/menu--menu-mobile.html.twig");
    }
}
