define([
    'ko',
    'jquery'
], function(ko, $) {
    var _vendors = ko.observableArray([]);
    var _pNum = ko.observable();

    var _fetchVendors = function (_pSize, _pNum) {
        $.ajax({
            data: { pageSize: _pSize, pageNumber : _pNum},
            url:"http://localhost/codilarTask/mage3/rest/V2/Vendor/getVendors",
            method:"GET",
            success:function(response) {
                _vendors(response);
            }
        });
    };
    _fetchVendors(2, 1);
    

    return {
        fetchVendors: function(_pSize, _pNum) {
            _fetchVendors(_pSize, _pNum);
        },

        setNumber: function(page){
            _pNum(page());
            this.fetchVendors(2,_pNum());
        },

        getVendors: function (_pSize, _pNum){
        
            // $.ajax({
            //     data: { pageSize: _pSize, pageNumber : _pNum},
            //     url:"http://localhost/codilarTask/mage3/rest/V2/Vendor/getVendors",
            //     method:"GET",
            //     success:function(response) {
            //         _vendors(response);
            //     }
            // });
            return _vendors;
       }
    };
});