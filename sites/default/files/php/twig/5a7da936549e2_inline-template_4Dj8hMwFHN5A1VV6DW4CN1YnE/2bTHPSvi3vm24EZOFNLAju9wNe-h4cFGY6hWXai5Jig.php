<?php

/* {# inline_template_start #}<div class="post-block {{ field_taxonomy_color }}">
      <div class="post-image">
            {{field_image}}
            <div class="post-categories categories-background {{field_taxonomy_color}}">{{ field_post_category }}</div>
      </div>
      <div class="post-content">
             <div class="post-meta-top"><div class="post-categories">LATEST ARTICLES</div></div>
             <div class="post-title"> {{ title }} </div>
              <div class="post-meta">
	              <span class="post-author">{{field_full_name}}</span> - <span class="created">{{created}}</span>
	     </div>
             <div class="post-body">{{ body }}</div>
       </div>
     <div class="link">{{view_node}}</div>
</div> */
class __TwigTemplate_8ba9ac953efac6fda3a02716ae10c1a2c06a7eb50025627d300cb31136d345c0 extends Twig_Template
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
        echo "<div class=\"post-block ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_taxonomy_color"]) ? $context["field_taxonomy_color"] : null), "html", null, true));
        echo "\">
      <div class=\"post-image\">
            ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
            <div class=\"post-categories categories-background ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_taxonomy_color"]) ? $context["field_taxonomy_color"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_post_category"]) ? $context["field_post_category"] : null), "html", null, true));
        echo "</div>
      </div>
      <div class=\"post-content\">
             <div class=\"post-meta-top\"><div class=\"post-categories\">LATEST ARTICLES</div></div>
             <div class=\"post-title\"> ";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo " </div>
              <div class=\"post-meta\">
\t              <span class=\"post-author\">";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_full_name"]) ? $context["field_full_name"] : null), "html", null, true));
        echo "</span> - <span class=\"created\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "</span>
\t     </div>
             <div class=\"post-body\">";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</div>
       </div>
     <div class=\"link\">";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["view_node"]) ? $context["view_node"] : null), "html", null, true));
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-block {{ field_taxonomy_color }}\">
      <div class=\"post-image\">
            {{field_image}}
            <div class=\"post-categories categories-background {{field_taxonomy_color}}\">{{ field_post_category }}</div>
      </div>
      <div class=\"post-content\">
             <div class=\"post-meta-top\"><div class=\"post-categories\">LATEST ARTICLES</div></div>
             <div class=\"post-title\"> {{ title }} </div>
              <div class=\"post-meta\">
\t              <span class=\"post-author\">{{field_full_name}}</span> - <span class=\"created\">{{created}}</span>
\t     </div>
             <div class=\"post-body\">{{ body }}</div>
       </div>
     <div class=\"link\">{{view_node}}</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 14,  88 => 12,  81 => 10,  76 => 8,  67 => 4,  63 => 3,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"post-block {{ field_taxonomy_color }}\">
      <div class=\"post-image\">
            {{field_image}}
            <div class=\"post-categories categories-background {{field_taxonomy_color}}\">{{ field_post_category }}</div>
      </div>
      <div class=\"post-content\">
             <div class=\"post-meta-top\"><div class=\"post-categories\">LATEST ARTICLES</div></div>
             <div class=\"post-title\"> {{ title }} </div>
              <div class=\"post-meta\">
\t              <span class=\"post-author\">{{field_full_name}}</span> - <span class=\"created\">{{created}}</span>
\t     </div>
             <div class=\"post-body\">{{ body }}</div>
       </div>
     <div class=\"link\">{{view_node}}</div>
</div>", "");
    }
}
