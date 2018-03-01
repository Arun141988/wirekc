<?php

/* {# inline_template_start #}<div class="post-categories categories-background {{field_taxonomy_color}}">{{ name }}</div>
<div class="post-image">{{ field_image }}</div>
<div class="post-content text-left">
     <div class="post-title">{{ title }}</div>
     <div class="post-meta"><span class="post-author">{{name_1}} - </span><span class="created">{{ created }}</span></div>
</div>
 */
class __TwigTemplate_290c3cbfbed477ff8eea64fb105a2bd439f69e5539c2b4126a210e3e1a9fbbda extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"post-categories categories-background ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_taxonomy_color"]) ? $context["field_taxonomy_color"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true));
        echo "</div>
<div class=\"post-image\">";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "</div>
<div class=\"post-content text-left\">
     <div class=\"post-title\">";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
     <div class=\"post-meta\"><span class=\"post-author\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["name_1"]) ? $context["name_1"] : null), "html", null, true));
        echo " - </span><span class=\"created\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "</span></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-categories categories-background {{field_taxonomy_color}}\">{{ name }}</div>
<div class=\"post-image\">{{ field_image }}</div>
<div class=\"post-content text-left\">
     <div class=\"post-title\">{{ title }}</div>
     <div class=\"post-meta\"><span class=\"post-author\">{{name_1}} - </span><span class=\"created\">{{ created }}</span></div>
</div>
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 5,  61 => 4,  56 => 2,  49 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"post-categories categories-background {{field_taxonomy_color}}\">{{ name }}</div>
<div class=\"post-image\">{{ field_image }}</div>
<div class=\"post-content text-left\">
     <div class=\"post-title\">{{ title }}</div>
     <div class=\"post-meta\"><span class=\"post-author\">{{name_1}} - </span><span class=\"created\">{{ created }}</span></div>
</div>
", "");
    }
}
