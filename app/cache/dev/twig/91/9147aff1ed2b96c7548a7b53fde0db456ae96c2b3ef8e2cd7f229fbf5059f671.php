<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_58df7f2cecd6d1d93496ab1ed6df2bff517918680fa042f000712ca8ae5e60a9 extends Twig_Template
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
        $__internal_08df6da4b3fc1783d23bc5b5347aa0e14e118e713c53e189cd044369d48b85c1 = $this->env->getExtension("native_profiler");
        $__internal_08df6da4b3fc1783d23bc5b5347aa0e14e118e713c53e189cd044369d48b85c1->enter($__internal_08df6da4b3fc1783d23bc5b5347aa0e14e118e713c53e189cd044369d48b85c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08df6da4b3fc1783d23bc5b5347aa0e14e118e713c53e189cd044369d48b85c1->leave($__internal_08df6da4b3fc1783d23bc5b5347aa0e14e118e713c53e189cd044369d48b85c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c4514b0e1cc72362f54773482b83aa40accfa92a28a91ad80317988dbb750cb = $this->env->getExtension("native_profiler");
        $__internal_0c4514b0e1cc72362f54773482b83aa40accfa92a28a91ad80317988dbb750cb->enter($__internal_0c4514b0e1cc72362f54773482b83aa40accfa92a28a91ad80317988dbb750cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c4514b0e1cc72362f54773482b83aa40accfa92a28a91ad80317988dbb750cb->leave($__internal_0c4514b0e1cc72362f54773482b83aa40accfa92a28a91ad80317988dbb750cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_63ebe4f6ca66ab11ce3ed5dbb6cca1d61f2513f7102ebfcd919ea21d33576773 = $this->env->getExtension("native_profiler");
        $__internal_63ebe4f6ca66ab11ce3ed5dbb6cca1d61f2513f7102ebfcd919ea21d33576773->enter($__internal_63ebe4f6ca66ab11ce3ed5dbb6cca1d61f2513f7102ebfcd919ea21d33576773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_63ebe4f6ca66ab11ce3ed5dbb6cca1d61f2513f7102ebfcd919ea21d33576773->leave($__internal_63ebe4f6ca66ab11ce3ed5dbb6cca1d61f2513f7102ebfcd919ea21d33576773_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c767e7bc6ad69758e872ed994b90e22c83ea5a5ec7a04a99c5d37e0b48e6aa2 = $this->env->getExtension("native_profiler");
        $__internal_3c767e7bc6ad69758e872ed994b90e22c83ea5a5ec7a04a99c5d37e0b48e6aa2->enter($__internal_3c767e7bc6ad69758e872ed994b90e22c83ea5a5ec7a04a99c5d37e0b48e6aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3c767e7bc6ad69758e872ed994b90e22c83ea5a5ec7a04a99c5d37e0b48e6aa2->leave($__internal_3c767e7bc6ad69758e872ed994b90e22c83ea5a5ec7a04a99c5d37e0b48e6aa2_prof);

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
