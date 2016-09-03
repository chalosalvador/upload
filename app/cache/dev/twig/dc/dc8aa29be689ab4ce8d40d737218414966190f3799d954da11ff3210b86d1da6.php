<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e4c950232f71cc8a8f8eb870d3f369633c15169fb28961a32d490d0c2d9bc0d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1c9ffa63b100d3016f0186d2c0d11404260ce291dc37bc076eb9830ec80ed9f = $this->env->getExtension("native_profiler");
        $__internal_b1c9ffa63b100d3016f0186d2c0d11404260ce291dc37bc076eb9830ec80ed9f->enter($__internal_b1c9ffa63b100d3016f0186d2c0d11404260ce291dc37bc076eb9830ec80ed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c9ffa63b100d3016f0186d2c0d11404260ce291dc37bc076eb9830ec80ed9f->leave($__internal_b1c9ffa63b100d3016f0186d2c0d11404260ce291dc37bc076eb9830ec80ed9f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_414a87073297a8b0ba870b3d1c9b5fce2508dca1a4a5535db20d8dff58b7be18 = $this->env->getExtension("native_profiler");
        $__internal_414a87073297a8b0ba870b3d1c9b5fce2508dca1a4a5535db20d8dff58b7be18->enter($__internal_414a87073297a8b0ba870b3d1c9b5fce2508dca1a4a5535db20d8dff58b7be18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_414a87073297a8b0ba870b3d1c9b5fce2508dca1a4a5535db20d8dff58b7be18->leave($__internal_414a87073297a8b0ba870b3d1c9b5fce2508dca1a4a5535db20d8dff58b7be18_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4844ccd7a667b83302ef37814e38175b77486cef70a0f034a1b144c0cf7b35b = $this->env->getExtension("native_profiler");
        $__internal_e4844ccd7a667b83302ef37814e38175b77486cef70a0f034a1b144c0cf7b35b->enter($__internal_e4844ccd7a667b83302ef37814e38175b77486cef70a0f034a1b144c0cf7b35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e4844ccd7a667b83302ef37814e38175b77486cef70a0f034a1b144c0cf7b35b->leave($__internal_e4844ccd7a667b83302ef37814e38175b77486cef70a0f034a1b144c0cf7b35b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_85c63cf6a220ecf70146929bc5872c0002e53b535743ac642865cd5179292655 = $this->env->getExtension("native_profiler");
        $__internal_85c63cf6a220ecf70146929bc5872c0002e53b535743ac642865cd5179292655->enter($__internal_85c63cf6a220ecf70146929bc5872c0002e53b535743ac642865cd5179292655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_85c63cf6a220ecf70146929bc5872c0002e53b535743ac642865cd5179292655->leave($__internal_85c63cf6a220ecf70146929bc5872c0002e53b535743ac642865cd5179292655_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
