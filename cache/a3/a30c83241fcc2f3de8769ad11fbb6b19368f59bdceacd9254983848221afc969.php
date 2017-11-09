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
            'headextra' => array($this, 'block_headextra'),
            'searchbar' => array($this, 'block_searchbar'),
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
    public function block_headextra($context, array $blocks = array())
    {
        // line 4
        echo "   ";
    }

    // line 14
    public function block_searchbar($context, array $blocks = array())
    {
        // line 15
        echo "    <!-- Search Bar with \"searchbar-init\" class for auto initialization -->
    <form class=\"searchbar searchbar-init\" data-search-list=\".list-block-search\" data-search-in=\".item-title\" data-found=\".searchbar-found\" data-not-found=\".searchbar-not-found\">
        <div class=\"searchbar-input\">
            <input type=\"search\" placeholder=\"Search\">
            <a href=\"#\" class=\"searchbar-clear\"></a>
        </div>
        <a href=\"#\" class=\"searchbar-cancel\">Cancel</a>
    </form>
    
    <div class=\"searchbar-overlay\"></div>
    
    <div class=\"page-content\">
        <div class=\"content-block searchbar-not-found\">
                Nothing found
        </div>
 
        <div class=\"list-block list-block-search searchbar-found\">
            <ul>
                <!-- List View -->
    <div class=\"content-block-title\">Store List</div>
    <div class=\"list-block accordion-list\">
        <ul>
            <div id=\"searchList\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 39
            echo "                <li class=\"accordion-item\"><a href=\"#\" class=\"item-content item-link\">
                        <div class=\"item-inner\">
                            <div class=\"item-title\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "name", array()), "html", null, true);
            echo "</div>
                        </div></a>
                    <div class=\"accordion-item-content\">
                        <div class=\"content-block\">    
                            <div class=\"row\">
                                <div class=\"col-33\">
                                    <a href=\"/stores/view/";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" class=\"external button button-big button-fill button-raised color-cyan\">View</a>
                                </div>
                                <div class=\"col-33\">
                                    <a href=\"/stores/edit/";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" class=\"external button button-big button-fill button-raised color-cyan\">Update</a>
                                </div>
                                <div class=\"col-33\"> 
                                    <a href=\"/stores/delete/";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" class=\"button button-big button-fill button-raised color-pink external\">Delete</a>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </div>
        </ul>
    </div>
            </ul>
        </div>
    </div>

";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        // line 73
        echo "
       

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
        return array (  135 => 73,  132 => 72,  121 => 62,  114 => 60,  102 => 53,  96 => 50,  90 => 47,  81 => 41,  77 => 39,  72 => 38,  47 => 15,  44 => 14,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
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
{% block headextra %}
   {# <script>
        \$(document).ready(function () {
        // respond to all events that may change the value of input
        \$('input[name=searchbar]').bind('propertychange change keyup input paste', function () {
            var searchInput = \$('input[name=searchbar]').val();
            \$('#searchList').load('/storeresult/' + searchInput);
        });
    });
    </script> #}
{% endblock %}
{% block searchbar %}
    <!-- Search Bar with \"searchbar-init\" class for auto initialization -->
    <form class=\"searchbar searchbar-init\" data-search-list=\".list-block-search\" data-search-in=\".item-title\" data-found=\".searchbar-found\" data-not-found=\".searchbar-not-found\">
        <div class=\"searchbar-input\">
            <input type=\"search\" placeholder=\"Search\">
            <a href=\"#\" class=\"searchbar-clear\"></a>
        </div>
        <a href=\"#\" class=\"searchbar-cancel\">Cancel</a>
    </form>
    
    <div class=\"searchbar-overlay\"></div>
    
    <div class=\"page-content\">
        <div class=\"content-block searchbar-not-found\">
                Nothing found
        </div>
 
        <div class=\"list-block list-block-search searchbar-found\">
            <ul>
                <!-- List View -->
    <div class=\"content-block-title\">Store List</div>
    <div class=\"list-block accordion-list\">
        <ul>
            <div id=\"searchList\">
            {% for l in list %}
                <li class=\"accordion-item\"><a href=\"#\" class=\"item-content item-link\">
                        <div class=\"item-inner\">
                            <div class=\"item-title\">{{l.name}}</div>
                        </div></a>
                    <div class=\"accordion-item-content\">
                        <div class=\"content-block\">    
                            <div class=\"row\">
                                <div class=\"col-33\">
                                    <a href=\"/stores/view/{{l.id}}\" class=\"external button button-big button-fill button-raised color-cyan\">View</a>
                                </div>
                                <div class=\"col-33\">
                                    <a href=\"/stores/edit/{{l.id}}\" class=\"external button button-big button-fill button-raised color-cyan\">Update</a>
                                </div>
                                <div class=\"col-33\"> 
                                    <a href=\"/stores/delete/{{l.id}}\" class=\"button button-big button-fill button-raised color-pink external\">Delete</a>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </li>
            {% else %}

            {% endfor %}
            </div>
        </ul>
    </div>
            </ul>
        </div>
    </div>

{% endblock %}


{% block content %}

       

{% endblock %}", "stores_list.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_list.html.twig");
    }
}
