<?php

/* default/index.html.twig */
class __TwigTemplate_15a26de9ff55b85f0d0dd03106564ce5b79c278a13cad9027a334a9ada9b7cb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c9fba5666224a2877bd2661f67a624af4e70275cc96e4efd944b47f07c6fc3b = $this->env->getExtension("native_profiler");
        $__internal_5c9fba5666224a2877bd2661f67a624af4e70275cc96e4efd944b47f07c6fc3b->enter($__internal_5c9fba5666224a2877bd2661f67a624af4e70275cc96e4efd944b47f07c6fc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c9fba5666224a2877bd2661f67a624af4e70275cc96e4efd944b47f07c6fc3b->leave($__internal_5c9fba5666224a2877bd2661f67a624af4e70275cc96e4efd944b47f07c6fc3b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3ea2239e7d0c72a1dd969740f9e859e170bca82f0329263f1875b07a933c2f4 = $this->env->getExtension("native_profiler");
        $__internal_e3ea2239e7d0c72a1dd969740f9e859e170bca82f0329263f1875b07a933c2f4->enter($__internal_e3ea2239e7d0c72a1dd969740f9e859e170bca82f0329263f1875b07a933c2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <p>The following form requires you to input an existing candidate. It will not work out of the box.</p>
    <p>Although you can fix all the issues of this app by removing code. We recommend that you don&lsquo;t.</p>
    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        // line 7
        if ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))) {
            // line 8
            echo "        <div class=\"results\">
            <p>The result is: <span id=\"theResult\">";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
            echo "</span></p>
            <p>Congratulations! You fixed the bugs and used the simple app correctly.</p>
            <p>Please fork the repository into a public repo of your own, commit and push the changes required to make the app work to said repository, and send its url to your recruiting contact.</p>
            <p>The mail should contain the result generated in <pre>span#theResult</pre>, and the answer to the following items, in english: </p>
            <ol>
                <li>Describe how an http request is processed by the stack of your choice</li>
                <li>What is the difference between unit tests and integrations tests?</li>
                <li>Mention a disadvantage of database normalization</li>
                <li>In your opinion, why does software exist?</li>
            </ol>
        </div>
    ";
        }
        
        $__internal_e3ea2239e7d0c72a1dd969740f9e859e170bca82f0329263f1875b07a933c2f4->leave($__internal_e3ea2239e7d0c72a1dd969740f9e859e170bca82f0329263f1875b07a933c2f4_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03b6e2b7fa92e5d249440d13b681597923f0b06b1e43ce74370c1b3e3fa9f4d8 = $this->env->getExtension("native_profiler");
        $__internal_03b6e2b7fa92e5d249440d13b681597923f0b06b1e43ce74370c1b3e3fa9f4d8->enter($__internal_03b6e2b7fa92e5d249440d13b681597923f0b06b1e43ce74370c1b3e3fa9f4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    .results { border: 1px solid green; }
</style>
";
        
        $__internal_03b6e2b7fa92e5d249440d13b681597923f0b06b1e43ce74370c1b3e3fa9f4d8->leave($__internal_03b6e2b7fa92e5d249440d13b681597923f0b06b1e43ce74370c1b3e3fa9f4d8_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  74 => 23,  54 => 9,  51 => 8,  49 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <p>The following form requires you to input an existing candidate. It will not work out of the box.</p>*/
/*     <p>Although you can fix all the issues of this app by removing code. We recommend that you don&lsquo;t.</p>*/
/*     {{ form(form) }}*/
/*     {% if result %}*/
/*         <div class="results">*/
/*             <p>The result is: <span id="theResult">{{ result }}</span></p>*/
/*             <p>Congratulations! You fixed the bugs and used the simple app correctly.</p>*/
/*             <p>Please fork the repository into a public repo of your own, commit and push the changes required to make the app work to said repository, and send its url to your recruiting contact.</p>*/
/*             <p>The mail should contain the result generated in <pre>span#theResult</pre>, and the answer to the following items, in english: </p>*/
/*             <ol>*/
/*                 <li>Describe how an http request is processed by the stack of your choice</li>*/
/*                 <li>What is the difference between unit tests and integrations tests?</li>*/
/*                 <li>Mention a disadvantage of database normalization</li>*/
/*                 <li>In your opinion, why does software exist?</li>*/
/*             </ol>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     .results { border: 1px solid green; }*/
/* </style>*/
/* {% endblock %}*/
/* */
