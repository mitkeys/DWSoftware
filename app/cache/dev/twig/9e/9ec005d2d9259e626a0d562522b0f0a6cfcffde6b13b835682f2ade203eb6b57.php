<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8daec40c78498e39a087ec27f5473d3257cd3c4337ca5766a40c5dc39e2984e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9e3c26db4ded81d830058c71e20d4168d5b99acd3aaad124ee8ecb48daf2dfb = $this->env->getExtension("native_profiler");
        $__internal_d9e3c26db4ded81d830058c71e20d4168d5b99acd3aaad124ee8ecb48daf2dfb->enter($__internal_d9e3c26db4ded81d830058c71e20d4168d5b99acd3aaad124ee8ecb48daf2dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9e3c26db4ded81d830058c71e20d4168d5b99acd3aaad124ee8ecb48daf2dfb->leave($__internal_d9e3c26db4ded81d830058c71e20d4168d5b99acd3aaad124ee8ecb48daf2dfb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3483edf82f57bb91f4bf637f5caf6152f827c44e180d811881aec6effbbfade1 = $this->env->getExtension("native_profiler");
        $__internal_3483edf82f57bb91f4bf637f5caf6152f827c44e180d811881aec6effbbfade1->enter($__internal_3483edf82f57bb91f4bf637f5caf6152f827c44e180d811881aec6effbbfade1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3483edf82f57bb91f4bf637f5caf6152f827c44e180d811881aec6effbbfade1->leave($__internal_3483edf82f57bb91f4bf637f5caf6152f827c44e180d811881aec6effbbfade1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e67f03e07fffb451ff4b488c861647a68e739e69b103b3569b520bec431f95c = $this->env->getExtension("native_profiler");
        $__internal_3e67f03e07fffb451ff4b488c861647a68e739e69b103b3569b520bec431f95c->enter($__internal_3e67f03e07fffb451ff4b488c861647a68e739e69b103b3569b520bec431f95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e67f03e07fffb451ff4b488c861647a68e739e69b103b3569b520bec431f95c->leave($__internal_3e67f03e07fffb451ff4b488c861647a68e739e69b103b3569b520bec431f95c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d122ed82803c609c06477718fbc4286834738e4a6f1ef5ad1cd8f2492c45419 = $this->env->getExtension("native_profiler");
        $__internal_8d122ed82803c609c06477718fbc4286834738e4a6f1ef5ad1cd8f2492c45419->enter($__internal_8d122ed82803c609c06477718fbc4286834738e4a6f1ef5ad1cd8f2492c45419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d122ed82803c609c06477718fbc4286834738e4a6f1ef5ad1cd8f2492c45419->leave($__internal_8d122ed82803c609c06477718fbc4286834738e4a6f1ef5ad1cd8f2492c45419_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
