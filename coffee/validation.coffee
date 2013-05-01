###
* @fileOverview Form validation script for See Katy Cook.
###

'use strict'

skc =
  init: ->
    @cacheVariables()
    @bindEvents()

  cacheVariables: ->
    @$form = $ '#contactForm'
    @errorArray = []
    @inputErrors = false
    return

  bindEvents: ->
    @$form.on 'submit', @validateFields

  validateFields: (e) ->
    e.preventDefault()

    # Reset some values.
    skc.errorArray = []
    skc.inputErrors = false

    # Remove any error messages.
    $(@).find('span.error').remove()
    
    # Check the values of required fields.
    for input in $(@).find '[required]'
      skc.testValue input

    # Display error messages if any.
    if skc.inputErrors
      skc.outputErrors()

    # If no errors submit the form.
    if skc.inputErrors is false
      console.log 'all clear'
      #skc.$form.submit()

  testValue: (input) ->
    # Object for storing info on value given.
    obj = 
      iName: input.name
      message: ''
    # Check for @ symbol if its an email field, otherwise just check any value is given.
    if input.name is 'email'
      if input.value.search(/@/) is -1 or input.value.length < 8
        obj.message = '\u2190 Please enter a valid email address.'
        @inputErrors = true
    else
      if input.value is ''
        obj.message = '\u2190 This is a required field.'
        @inputErrors = true
    # Store our object with the assigned properties.
    @errorArray.push obj
    return

  outputErrors: ->
    # Add error messages to the page.
    for obj in @errorArray
      $("##{obj.iName}").after "<span class='error'>#{obj.message}</span>"

skc.init()