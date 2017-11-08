<?php

/* index.html.twig */
class __TwigTemplate_b1d9f4be629dbc67fbada3827432ce4c43329a984ff316c15ec432d75abb77e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'overlayTitle' => array($this, 'block_overlayTitle'),
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

    // line 3
    public function block_overlayTitle($context, array $blocks = array())
    {
        echo "Main";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"content-block\">
   
    <a href=\"#\" class=\"button button-fill button-big button-blue\">Add Product</a> 
    </div>
    
    <div class=\"content-block\">
<div class=\"row\">
  <div class=\"col-50\">
    <a href=\"#\" class=\"button button-fill button-big button-blue\">Stores</a>
  </div>
  <div class=\"col-50\">
    <a href=\"#\" class=\"button button-fill button-big button-blue\">Products</a>
  </div>
</div>  
    </div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block overlayTitle %}Main{% endblock %}

{% block content %}

    <div class=\"content-block\">
   
    <a href=\"#\" class=\"button button-fill button-big button-blue\">Add Product</a> 
    </div>
    
    <div class=\"content-block\">
<div class=\"row\">
  <div class=\"col-50\">
    <a href=\"#\" class=\"button button-fill button-big button-blue\">Stores</a>
  </div>
  <div class=\"col-50\">
    <a href=\"#\" class=\"button button-fill button-big button-blue\">Products</a>
  </div>
</div>  
    </div>
{% endblock %}



", "index.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\index.html.twig");
    }
}
