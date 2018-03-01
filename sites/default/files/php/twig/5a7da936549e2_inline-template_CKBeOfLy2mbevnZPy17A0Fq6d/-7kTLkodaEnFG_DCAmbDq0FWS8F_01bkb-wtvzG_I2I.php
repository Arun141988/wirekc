<?php

/* {# inline_template_start #}<div class="post-block {{ field_taxonomy_color }}">
      <div class="post-image">
            {{field_image}}
      </div>
      <div class="post-content">
             <div class="post-title"> {{ title }} </div>
              <div class="post-meta"><span class="post-author">{{field_full_name}} - </span><span class="created ">{{ field_event_date }}</span>
	     </div>
             <div class="post-body">{{ body }}</div>
       </div>
</div> */
class __TwigTemplate_95dfd4f78507ee01b05a2125361deb2073db264125c2e36000ffce67df680a73 extends Twig_Template
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
      </div>
      <div class=\"post-content\">
             <div class=\"post-title\"> ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo " </div>
              <div class=\"post-meta\"><span class=\"post-author\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_full_name"]) ? $context["field_full_name"] : null), "html", null, true));
        echo " - </span><span class=\"created \">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_event_date"]) ? $context["field_event_date"] : null), "html", null, true));
        echo "</span>
\t     </div>
             <div class=\"post-body\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</div>
       </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-block {{ field_taxonomy_color }}\">
      <div class=\"post-image\">
            {{field_image}}
      </div>
      <div class=\"post-content\">
             <div class=\"post-title\"> {{ title }} </div>
              <div class=\"post-meta\"><span class=\"post-author\">{{field_full_name}} - </span><span class=\"created \">{{ field_event_date }}</span>
\t     </div>
             <div class=\"post-body\">{{ body }}</div>
       </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  69 => 7,  65 => 6,  59 => 3,  53 => 1,);
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
      </div>
      <div class=\"post-content\">
             <div class=\"post-title\"> {{ title }} </div>
              <div class=\"post-meta\"><span class=\"post-author\">{{field_full_name}} - </span><span class=\"created \">{{ field_event_date }}</span>
\t     </div>
             <div class=\"post-body\">{{ body }}</div>
       </div>
</div>", "");
    }
}
