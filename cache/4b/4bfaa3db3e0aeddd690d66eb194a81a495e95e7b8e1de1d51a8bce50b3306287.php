<?php

/* stores_view.html.twig */
class __TwigTemplate_a61888a9149862e8515898977ba16ccbc588cd85c91da2e2bccd6564472bb7a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "stores_view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "name", array()), "html", null, true);
        echo " Page";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        // line 5
        echo "    <div class=\"content-block-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "name", array()), "html", null, true);
        echo "</div>
 
       
    
<div class=\"card demo-card-header-pic\">
  <div style=\"background-image:";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "logoPath", array()), "html", null, true);
        echo "\" valign=\"bottom\" class=\"card-header color-white no-border\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "name", array()), "html", null, true);
        echo "</div>
  <div class=\"card-content\">
    <div class=\"card-content-inner\">
      <p class=\"color-gray\">Posted on January 21, 2015</p>
      <p>Quisque eget vestibulum nulla...</p>
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"/stores/list\" class=\"link external\">Back</a>
    <a href=\"/stores/delete/";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"link color-red external\">Delete</a>
  </div>
</div>
  
   <div class=\"card\">
  <div class=\"card-content\">
    <div class=\"card-content-inner\">gonna put google map with location in here</div>
  </div>
</div>  
    
   ";
        // line 30
        echo "    
    ";
    }

    public function getTemplateName()
    {
        return "stores_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 30,  64 => 19,  50 => 10,  41 => 5,  39 => 4,  36 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}
{% block title %}{{s.name}} Page{% endblock %}
{% block content %}
  {#  {% for s in store %}  #}
    <div class=\"content-block-title\">{{s.name}}</div>
 
       
    
<div class=\"card demo-card-header-pic\">
  <div style=\"background-image:{{s.logoPath}}\" valign=\"bottom\" class=\"card-header color-white no-border\">{{s.name}}</div>
  <div class=\"card-content\">
    <div class=\"card-content-inner\">
      <p class=\"color-gray\">Posted on January 21, 2015</p>
      <p>Quisque eget vestibulum nulla...</p>
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"/stores/list\" class=\"link external\">Back</a>
    <a href=\"/stores/delete/{{s.id}}\" class=\"link color-red external\">Delete</a>
  </div>
</div>
  
   <div class=\"card\">
  <div class=\"card-content\">
    <div class=\"card-content-inner\">gonna put google map with location in here</div>
  </div>
</div>  
    
   {# {% endfor %}  #}
    
    {% endblock %}
", "stores_view.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_view.html.twig");
    }
}
