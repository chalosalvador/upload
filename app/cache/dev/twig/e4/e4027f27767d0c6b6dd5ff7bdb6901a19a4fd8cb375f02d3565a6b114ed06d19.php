<?php

/* product/new.html.twig */
class __TwigTemplate_94abe9e434ac323b0ca1034141cba5b37c3b55153935b5bf026dd50b59a8d81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93d154fb201edfa68a57fb4e93a7c0389b20e378a22732109d3b2d027d60d26e = $this->env->getExtension("native_profiler");
        $__internal_93d154fb201edfa68a57fb4e93a7c0389b20e378a22732109d3b2d027d60d26e->enter($__internal_93d154fb201edfa68a57fb4e93a7c0389b20e378a22732109d3b2d027d60d26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        // line 2
        echo "<h1>Adding a new product</h1>

";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brochure", array()), 'row');
        echo "
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<table>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "    <tr>
        <td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["product"], "brochure", array()))), "html", null, true);
            echo "\">View brochure (PDF)</a>
</td>
        <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/brochures/" . $this->getAttribute($context["product"], "photo", array()))), "html", null, true);
            echo "\">View brochure (PDF)</a>
</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>";
        
        $__internal_93d154fb201edfa68a57fb4e93a7c0389b20e378a22732109d3b2d027d60d26e->leave($__internal_93d154fb201edfa68a57fb4e93a7c0389b20e378a22732109d3b2d027d60d26e_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  55 => 15,  50 => 13,  47 => 12,  43 => 11,  37 => 8,  33 => 7,  30 => 6,  26 => 4,  22 => 2,);
    }
}
/* {# app/Resources/views/product/new.html.twig #}*/
/* <h1>Adding a new product</h1>*/
/* */
/* {{ form_start(form) }}*/
/*     {# ... #}*/
/* */
/*     {{ form_row(form.brochure) }}*/
/* {{ form_end(form) }}*/
/* */
/* <table>*/
/* {% for product in products %}*/
/*     <tr>*/
/*         <td><a href="{{ asset('uploads/brochures/' ~ product.brochure) }}">View brochure (PDF)</a>*/
/* </td>*/
/*         <td><a href="{{ asset('uploads/brochures/' ~ product.photo) }}">View brochure (PDF)</a>*/
/* </td>*/
/*     </tr>*/
/* {% endfor %}*/
/* </table>*/
