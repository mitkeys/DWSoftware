<?php

/* base.html.twig */
class __TwigTemplate_0d7855e972084fe05a2d24dfefdde93c0e7809378254bca960c51fd60ad7dc91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83ccd3b714d284c5b2fc574299e97c45a3e060ccb98d1d6360b94e21c19dc299 = $this->env->getExtension("native_profiler");
        $__internal_83ccd3b714d284c5b2fc574299e97c45a3e060ccb98d1d6360b94e21c19dc299->enter($__internal_83ccd3b714d284c5b2fc574299e97c45a3e060ccb98d1d6360b94e21c19dc299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_83ccd3b714d284c5b2fc574299e97c45a3e060ccb98d1d6360b94e21c19dc299->leave($__internal_83ccd3b714d284c5b2fc574299e97c45a3e060ccb98d1d6360b94e21c19dc299_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f50c10f339dda64bdf3029cf58e6d31020c50d4d93af5c721a306c0c80203182 = $this->env->getExtension("native_profiler");
        $__internal_f50c10f339dda64bdf3029cf58e6d31020c50d4d93af5c721a306c0c80203182->enter($__internal_f50c10f339dda64bdf3029cf58e6d31020c50d4d93af5c721a306c0c80203182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f50c10f339dda64bdf3029cf58e6d31020c50d4d93af5c721a306c0c80203182->leave($__internal_f50c10f339dda64bdf3029cf58e6d31020c50d4d93af5c721a306c0c80203182_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7856963b4ca08f749dfe968860ee49a4c89c8020579491d9e277438dc07b609 = $this->env->getExtension("native_profiler");
        $__internal_c7856963b4ca08f749dfe968860ee49a4c89c8020579491d9e277438dc07b609->enter($__internal_c7856963b4ca08f749dfe968860ee49a4c89c8020579491d9e277438dc07b609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c7856963b4ca08f749dfe968860ee49a4c89c8020579491d9e277438dc07b609->leave($__internal_c7856963b4ca08f749dfe968860ee49a4c89c8020579491d9e277438dc07b609_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ea4c1c6b8a45a9ae4f55fdaedcc81ee92b94c1f48df769d3f25f6aa02e9407d = $this->env->getExtension("native_profiler");
        $__internal_3ea4c1c6b8a45a9ae4f55fdaedcc81ee92b94c1f48df769d3f25f6aa02e9407d->enter($__internal_3ea4c1c6b8a45a9ae4f55fdaedcc81ee92b94c1f48df769d3f25f6aa02e9407d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ea4c1c6b8a45a9ae4f55fdaedcc81ee92b94c1f48df769d3f25f6aa02e9407d->leave($__internal_3ea4c1c6b8a45a9ae4f55fdaedcc81ee92b94c1f48df769d3f25f6aa02e9407d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fd01c04676e5f51cd47ae28614c5a6d791e33999cf588e16e0774db6d6824981 = $this->env->getExtension("native_profiler");
        $__internal_fd01c04676e5f51cd47ae28614c5a6d791e33999cf588e16e0774db6d6824981->enter($__internal_fd01c04676e5f51cd47ae28614c5a6d791e33999cf588e16e0774db6d6824981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fd01c04676e5f51cd47ae28614c5a6d791e33999cf588e16e0774db6d6824981->leave($__internal_fd01c04676e5f51cd47ae28614c5a6d791e33999cf588e16e0774db6d6824981_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
