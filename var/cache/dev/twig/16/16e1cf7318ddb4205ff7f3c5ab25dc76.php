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

/* pizza/contact.html.twig */
class __TwigTemplate_ed515d4b83cd74323fd069bc3c467a2c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pizza/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pizza/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pizza/contact.html.twig", 1);
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

            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6 col-lg-6 mt-5\">
                    <div class=\"card\">
                        <img src=\"../../img/boss.jpg\" alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-text\">
                                <p>
                                    Carleone Bambino <br>
                                    Adres: 1e van hofstraat 32 <br>
                                    Postcode: 2433EE <br>
                                    Nr.+31 0699438821 <br>
                                    Email: pizza.pizza@soprano.nl
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=\"col-sm-12 col-md-6 col-lg-6 mt-5\">

                        <div class=\"embed-responsive embed-responsive-100x400px\">
                            <iframe src=\"https://maps.google.com/maps?q=denhaag&t=&z=13&ie=UTF8&iwloc=&output=embed\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen>

                            </iframe>
                        </div>

                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pizza/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Soprano's Pizza{% endblock %}
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6 col-lg-6 mt-5\">
                    <div class=\"card\">
                        <img src=\"../../img/boss.jpg\" alt=\"\">
                        <div class=\"card-body\">
                            <div class=\"card-text\">
                                <p>
                                    Carleone Bambino <br>
                                    Adres: 1e van hofstraat 32 <br>
                                    Postcode: 2433EE <br>
                                    Nr.+31 0699438821 <br>
                                    Email: pizza.pizza@soprano.nl
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=\"col-sm-12 col-md-6 col-lg-6 mt-5\">

                        <div class=\"embed-responsive embed-responsive-100x400px\">
                            <iframe src=\"https://maps.google.com/maps?q=denhaag&t=&z=13&ie=UTF8&iwloc=&output=embed\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen>

                            </iframe>
                        </div>

                </div>
            </div>
        </div>

    </div>
{% endblock %}

", "pizza/contact.html.twig", "C:\\xampp\\htdocs\\sd21-p7-symfony-pizzaproject-HMPandt\\templates\\pizza\\contact.html.twig");
    }
}
