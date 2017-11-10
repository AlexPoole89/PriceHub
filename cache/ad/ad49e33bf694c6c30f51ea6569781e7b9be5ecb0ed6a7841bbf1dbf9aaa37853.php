<?php

/* products_view.html.twig */
class __TwigTemplate_9daf38a375b4d827a9ab0d509b2849e0f093e9f1f6ccf6531e378177b6bc0507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "products_view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
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
    public function block_headextra($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        #map{
            height: 12em;
        }
    </style>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        // line 12
        echo "    <div class=\"content-block-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "name", array()), "html", null, true);
        echo "</div>
 
       
    
<div class=\"card\">
  <div style=\"background-image:url(";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["p"] ?? null), "picPath", array()), "html", null, true);
        echo ")\" valign=\"bottom\" class=\"card-header color-white no-border\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "name", array()), "html", null, true);
        echo "</div>
  <div class=\"card-content\">
    <div class=\"card-content-inner\">
      ";
        // line 21
        echo "      <p class=\"buttons-row\">
  <a href=\"#\" class=\"button button-big button-fill\">";
        // line 22
        echo twig_escape_filter($this->env, ($context["price"] ?? null), "html", null, true);
        echo " ";
        if ((($context["price"] ?? null) > 1)) {
            echo "Prices";
        } else {
            echo "Price";
        }
        echo "</a>
</p>
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"/products/list\" class=\"link external\">Store list</a>
    <a href=\"/products/edit/";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"link external\">Update</a>
    <a href=\"/products/delete/";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"link  external\">Delete</a>
  </div>
</div>

   ";
        // line 34
        echo "    
    ";
    }

    public function getTemplateName()
    {
        return "products_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  93 => 29,  89 => 28,  74 => 22,  71 => 21,  63 => 17,  54 => 12,  52 => 11,  49 => 10,  40 => 4,  37 => 3,  30 => 2,  11 => 1,);
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
{% block headextra %}
    <style>
        #map{
            height: 12em;
        }
    </style>
{% endblock %}
{% block content %}
  {#  {% for s in store %}  #}
    <div class=\"content-block-title\">{{p.name}}</div>
 
       
    
<div class=\"card\">
  <div style=\"background-image:url({{p.picPath}})\" valign=\"bottom\" class=\"card-header color-white no-border\">{{s.name}}</div>
  <div class=\"card-content\">
    <div class=\"card-content-inner\">
      {# TODO ADD TWO COLUMNS SHOWING PRODUCTS COUNT NUMBER AND PRICES COUNT # LINKING TO LIST OF EACH #}
      <p class=\"buttons-row\">
  <a href=\"#\" class=\"button button-big button-fill\">{{price}} {% if price > 1 %}Prices{% else %}Price{% endif %}</a>
</p>
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"/products/list\" class=\"link external\">Store list</a>
    <a href=\"/products/edit/{{s.id}}\" class=\"link external\">Update</a>
    <a href=\"/products/delete/{{s.id}}\" class=\"link  external\">Delete</a>
  </div>
</div>

   {# {% endfor %}  #}
    
    {% endblock %}
", "products_view.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\products_view.html.twig");
    }
}
