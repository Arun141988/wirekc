<?php

/* {# inline_template_start #}<div class="post-block">
      <div class="post-image">
            {{ field_image }}
      </div>
      <div class="post-content">
              <div class="post-meta-top"><div class="post-categories">{{field_post_category}}</div></div>
              <div class="post-title"> {{ title }} </div>
             <div class="post-meta"><span class="post-author"><a href="{{ field_event_posted_url }}">Read More</a></span></div>
       </div>
</div> */
class __TwigTemplate_10a6b7084d6be54661a51855dfd5eca7e9c86f69563cf028c18974f079131cf8 extends Twig_Template
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
        echo "<div class=\"post-block\">
      <div class=\"post-image\">
            ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
      </div>
      <div class=\"post-content\">
              <div class=\"post-meta-top\"><div class=\"post-categories\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_post_category"]) ? $context["field_post_category"] : null), "html", null, true));
        echo "</div></div>
              <div class=\"post-title\"> ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo " </div>
             <div class=\"post-meta\"><span class=\"post-author\"><a href=\"";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["field_event_posted_url"]) ? $context["field_event_posted_url"] : null), "html", null, true));
        echo "\">Read More</a></span></div>
       </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-block\">
      <div class=\"post-image\">
            {{ field_image }}
      </div>
      <div class=\"post-content\">
              <div class=\"post-meta-top\"><div class=\"post-categories\">{{field_post_category}}</div></div>
              <div class=\"post-title\"> {{ title }} </div>
             <div class=\"post-meta\"><span class=\"post-author\"><a href=\"{{ field_event_posted_url }}\">Read More</a></span></div>
       </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  66 => 7,  62 => 6,  56 => 3,  52 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"post-block\">
      <div class=\"post-image\">
            {{ field_image }}
      </div>
      <div class=\"post-content\">
              <div class=\"post-meta-top\"><div class=\"post-categories\">{{field_post_category}}</div></div>
              <div class=\"post-title\"> {{ title }} </div>
             <div class=\"post-meta\"><span class=\"post-author\"><a href=\"{{ field_event_posted_url }}\">Read More</a></span></div>
       </div>
</div>", "");
    }
}
