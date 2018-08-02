define([
    'ko',
], function(ko) {
    'use strict';

    var currentStep = ko.observable("vendor");

    return{
        initialize: function(){
            this._super();  
        },
        setCurrentStep: function(step){
            currentStep(step);
        },
        getCurrentStep: function(){
            return currentStep();
        }
    }    
});