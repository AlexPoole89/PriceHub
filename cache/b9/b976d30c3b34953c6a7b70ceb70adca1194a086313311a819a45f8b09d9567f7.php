<?php

/* stores_addedit_success.html.twig */
class __TwigTemplate_966641724b18eeef23c7f372463b3b1b7996b1813140df075d8e9bd402bbcfb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "stores_addedit_success.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Store ";
        if (($context["isEditing"] ?? null)) {
            echo "edited";
        } else {
            echo "added";
        }
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo "    
    <div class=\"content-block-title\">Store Added</div>
    <div class=\"card\">
  <div class=\"card-content\">
    <div class=\"card-content-inner\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "name", array()), "html", null, true);
        echo " added successfully</div>
  </div>
         <div class=\"card-footer\">
    <a href=\"/stores/list\" class=\"link\">Go to list</a>
    <a href=\"/stores/view/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "id", array(), "array"), "html", null, true);
        echo "\" class=\"link\">See store</a>
  </div>
</div>
    
";
    }

    public function getTemplateName()
    {
        return "stores_addedit_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  48 => 9,  40 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Store {% if isEditing %}edited{% else %}added{% endif %}{% endblock %}

{% block content %}    
    <div class=\"content-block-title\">Store Added</div>
    <div class=\"card\">
  <div class=\"card-content\">
    <div class=\"card-content-inner\">{{v.name}} added successfully</div>
  </div>
         <div class=\"card-footer\">
    <a href=\"/stores/list\" class=\"link\">Go to list</a>
    <a href=\"/stores/view/{{v['id']}}\" class=\"link\">See store</a>
  </div>
</div>
    
{% endblock %}

", "stores_addedit_success.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_addedit_success.html.twig");
    }
}
