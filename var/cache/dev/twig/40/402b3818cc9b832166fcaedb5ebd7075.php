<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pizza/pizzas.html.twig */
class __TwigTemplate_0cdf8c93a00f4a58c5a8a4e333ca6e1b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pizza/pizzas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pizza/pizzas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pizza/pizzas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Soprano's Pizza";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\">

        <div class=\"container\">

            <div class=\"row text-center \">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 9, $this->source); })()), "pizzas", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 10
            echo "                    <div class=\"col-sm-12 col-md-4 col-lg-4 \">
                        <div class=\"card border-2px border-danger mt-5 \">
                            <img class=\"img img-fluid\" style=\"height: 300px\" src=\"../../img/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pizza"], "img", [], "any", false, false, false, 12), "html", null, true);
            echo "\" alt=\"\">
                            <div class=\"card-body\">
                                <div class=\"card-text\">
                                    <h3>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pizza"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</h3> <br>
";
            // line 23
            echo "                                    <br>
                                    <button type=\"button\" class=\"btn btn-danger mt-4\">
                                        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bestellen", ["id" => twig_get_attribute($this->env, $this->source, $context["pizza"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"text-light\" style=\"text-decoration: none\">Bestel</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

            </div>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pizza/pizzas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  117 => 25,  113 => 23,  109 => 15,  103 => 12,  99 => 10,  95 => 9,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Soprano's Pizza{% endblock %}
{% block body %}
    <div class=\"container-fluid\">

        <div class=\"container\">

            <div class=\"row text-center \">
                {% for pizza in category.pizzas %}
                    <div class=\"col-sm-12 col-md-4 col-lg-4 \">
                        <div class=\"card border-2px border-danger mt-5 \">
                            <img class=\"img img-fluid\" style=\"height: 300px\" src=\"../../img/{{ pizza.img }}\" alt=\"\">
                            <div class=\"card-body\">
                                <div class=\"card-text\">
                                    <h3>{{ pizza.name }}</h3> <br>
{#                                    <input type=\"number\" class=\"border-3px border-danger\" max=\"10\" min=\"0\">#}
{#                                    <select class=\"border-3px border-danger\" name=\"size\" id=\"\">#}
{#                                        <option value=\"0\">Small</option>#}
{#                                        <option value=\"1\">medium</option>#}
{#                                        <option value=\"2\">large</option>#}
{#                                        <option value=\"3\">calzone</option>#}
{#                                    </select>#}
                                    <br>
                                    <button type=\"button\" class=\"btn btn-danger mt-4\">
                                        <a href=\"{{ path('bestellen', {id: pizza.id}) }}\" class=\"text-light\" style=\"text-decoration: none\">Bestel</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}


            </div>
        </div>

    </div>

{% endblock %}", "pizza/pizzas.html.twig", "C:\\xampp\\htdocs\\sd21-p7-symfony-pizzaproject-HMPandt\\templates\\pizza\\pizzas.html.twig");
    }
}
