<?php if(!defined('KIRBY')) exit ?>

title: tabs-demo
pages: false

#########################################################################
## META-DATA
#########################################################################

fields:

  sectionMeta:
    label: Meta
    id: meta
    type: tab
    icon: code

  title:
    label: Title
    type: text

  keywords:
    label: Keywords (SEO)
    type: tags

  description:
    label: Description (SEO)
    type: text

#########################################################################
## SLIDER
#########################################################################

  sectionSlider:
    label: Slider
    id: slider
    type: tab
    icon: image

  title_slider:
    label: Title
    type: text

  text_slider:
    label: Text
    type: text

#########################################################################
## FEATURES
#########################################################################

  sectionFeatures:
    label: Features
    id: features
    type: tab
    icon: diamond

  title_features:
    label: Title
    type: text

  text_features:
    label: Text
    type: text

#########################################################################
## WORKFLOW
#########################################################################

  sectionWorkflow:
    label: Workflow
    id: workflow
    type: tab
    icon: random

  title_workflow:
    label: Title
    type: text

  text_workflow:
    label: Text
    type: text

#########################################################################
## TESTIMONIALS
#########################################################################

  sectionQuotes:
    label: Quotes
    id: quotes
    type: tab
    icon: quote-right

  title_quotes:
    label: Title
    type: text

  text_quotes:
    label: Text
    type: text