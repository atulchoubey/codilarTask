define([
    'uiComponent',
    'ko',
    'Codilar_Grid/js/model/vendorModel'
], function(Component, ko, vendorModel) {
    'use strict';
    
    return Component.extend({
        vendorName: ko.observable(""),
        initialize: function(){
            this._super();
        },
        fetchVendors: function(){
            return vendorModel.getVendors();
        }
    })
    
});