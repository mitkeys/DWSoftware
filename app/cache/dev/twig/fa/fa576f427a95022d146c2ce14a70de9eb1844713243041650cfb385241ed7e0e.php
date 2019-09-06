<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_50d1920763b0ea1f98d54eda3ae6b2ea515a5edb3c6353d013be4b19b850d6c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85ab59d294758c7778d49f01b7c17363f4edcb0669800410c9033c5bc5593409 = $this->env->getExtension("native_profiler");
        $__internal_85ab59d294758c7778d49f01b7c17363f4edcb0669800410c9033c5bc5593409->enter($__internal_85ab59d294758c7778d49f01b7c17363f4edcb0669800410c9033c5bc5593409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85ab59d294758c7778d49f01b7c17363f4edcb0669800410c9033c5bc5593409->leave($__internal_85ab59d294758c7778d49f01b7c17363f4edcb0669800410c9033c5bc5593409_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdb99c8495461066d14086e0e7b1e549fef974630dad982c2f4a7f45cbb00ef3 = $this->env->getExtension("native_profiler");
        $__internal_bdb99c8495461066d14086e0e7b1e549fef974630dad982c2f4a7f45cbb00ef3->enter($__internal_bdb99c8495461066d14086e0e7b1e549fef974630dad982c2f4a7f45cbb00ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bdb99c8495461066d14086e0e7b1e549fef974630dad982c2f4a7f45cbb00ef3->leave($__internal_bdb99c8495461066d14086e0e7b1e549fef974630dad982c2f4a7f45cbb00ef3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6a946fbc94ef2340f7890e348fe8e1588df9429c63c879f830aed424f7113a7 = $this->env->getExtension("native_profiler");
        $__internal_e6a946fbc94ef2340f7890e348fe8e1588df9429c63c879f830aed424f7113a7->enter($__internal_e6a946fbc94ef2340f7890e348fe8e1588df9429c63c879f830aed424f7113a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e6a946fbc94ef2340f7890e348fe8e1588df9429c63c879f830aed424f7113a7->leave($__internal_e6a946fbc94ef2340f7890e348fe8e1588df9429c63c879f830aed424f7113a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_70e6600c0bcfd105e31e784dd0eede8733c5de5b14d05c0dc1326dbaa892c48c = $this->env->getExtension("native_profiler");
        $__internal_70e6600c0bcfd105e31e784dd0eede8733c5de5b14d05c0dc1326dbaa892c48c->enter($__internal_70e6600c0bcfd105e31e784dd0eede8733c5de5b14d05c0dc1326dbaa892c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_70e6600c0bcfd105e31e784dd0eede8733c5de5b14d05c0dc1326dbaa892c48c->leave($__internal_70e6600c0bcfd105e31e784dd0eede8733c5de5b14d05c0dc1326dbaa892c48c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
