<?php

/* stores_list.html.twig */
class __TwigTemplate_5ed2b921d4af368b54eedce9966459bb156ce949088d96c0712aefee289e200b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "stores_list.html.twig", 1);
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
        echo "Store List";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "                                                          
<!-- List View -->
<div class=\"content-block-title\">Store List</div>
<div class=\"list-block accordion-list\">
  <ul>
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 10
            echo "    <li class=\"accordion-item\"><a href=\"#\" class=\"item-content item-link\">
        <div class=\"item-inner\">
          <div class=\"item-title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "name", array()), "html", null, true);
            echo "</div>
        </div></a>
      <div class=\"accordion-item-content\">
        <div class=\"content-block\">           
                <div class=\"col-50\">
                   <a href=\"/stores/view/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" class=\"button button-big button-fill button-raised color-cyan\">View</a>
                </div>
            <form method=\"post\"  action=\"/stores/delete/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" >
                <input type=\"hidden\" name=\"confirmed\" value=\"true\">
                <div class=\"col-50\">
                    <input type=\"submit\" class=\"button button-big button-fill button-raised color-pink\" value=\"Delete\">
                </div>
            </form>
        </div>
      </div>
    </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "                            
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </ul>
</div>
          
";
    }

    public function getTemplateName()
    {
        return "stores_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  82 => 29,  67 => 19,  62 => 17,  54 => 12,  50 => 10,  45 => 9,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
 {% block title %}Store List{% endblock %}
{% block content %}
                                                          
<!-- List View -->
<div class=\"content-block-title\">Store List</div>
<div class=\"list-block accordion-list\">
  <ul>
      {% for l in list %}
    <li class=\"accordion-item\"><a href=\"#\" class=\"item-content item-link\">
        <div class=\"item-inner\">
          <div class=\"item-title\">{{l.name}}</div>
        </div></a>
      <div class=\"accordion-item-content\">
        <div class=\"content-block\">           
                <div class=\"col-50\">
                   <a href=\"/stores/view/{{l.id}}\" class=\"button button-big button-fill button-raised color-cyan\">View</a>
                </div>
            <form method=\"post\"  action=\"/stores/delete/{{l.id}}\" >
                <input type=\"hidden\" name=\"confirmed\" value=\"true\">
                <div class=\"col-50\">
                    <input type=\"submit\" class=\"button button-big button-fill button-raised color-pink\" value=\"Delete\">
                </div>
            </form>
        </div>
      </div>
    </li>
    {% else %}
                            
                        {% endfor %}
  </ul>
</div>
          
{% endblock %}", "stores_list.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_list.html.twig");
    }
}
