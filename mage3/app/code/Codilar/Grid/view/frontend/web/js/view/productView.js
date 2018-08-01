define([
    'uiComponent',
    'ko',
    'Codilar_Grid/js/model/productModel',
    'Codilar_Grid/js/model/stepNavigator'
], function(Component, ko, vendorModel, stepNavigator) {
    'use strict';

    var status = function() {
        if (stepNavigator.getCurrentStep() == "product") {
            return true;
        } else {
            return false;
        }
    };
    status();
    return Component.extend({
        initialize: function(){
            this._super();
        },
        isVisible: function(){
            return status();
        },
        goBack: function(){
            stepNavigator.setCurrentStep("vendor");
        }
    })
    
});