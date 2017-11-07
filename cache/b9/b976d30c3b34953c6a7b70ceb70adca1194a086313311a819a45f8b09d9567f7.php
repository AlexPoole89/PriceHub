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
        echo " Product ";
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
    <div class=\"list-block\">
  <ul>
    <li>
      <a href=\"#\" class=\"item-link item-content\">
        <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
        <div class=\"item-inner\">
            <div class=\"item-title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "name", array()), "html", null, true);
        echo "</div>
          <div class=\"item-after\">See more</div>
        </div>
      </a>
    </li>
   
  </ul>
  <div class=\"list-block-label\">New store added</div>
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
        return array (  51 => 12,  40 => 5,  29 => 3,  11 => 1,);
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

{% block title %} Product {% if isEditing %}edited{% else %}added{% endif %}{% endblock %}

{% block content %}    
    <div class=\"list-block\">
  <ul>
    <li>
      <a href=\"#\" class=\"item-link item-content\">
        <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
        <div class=\"item-inner\">
            <div class=\"item-title\">{{v.name}}</div>
          <div class=\"item-after\">See more</div>
        </div>
      </a>
    </li>
   
  </ul>
  <div class=\"list-block-label\">New store added</div>
</div>
{% endblock %}

", "stores_addedit_success.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_addedit_success.html.twig");
    }
}
