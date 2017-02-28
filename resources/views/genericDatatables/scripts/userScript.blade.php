<script>

/*

	NOTE:

	You just might have to chagne the URL for fucntions hitting AJAX calls

*/

var page;

        var INDEXJS = {

            GENERIC_AJAX : {

                ajax: function (httpmethod, url, data, successCallBack, failureCallBack, async, cache) {

                    if (typeof async == "undefined")
                        async = true;
                    if (typeof cache == "undefined")
                        cache = false;

                    var defObj = $.ajax({
                        type: httpmethod,
                        url: url,
                        data: data,
                        async: async,
                        cache: cache,

                        success: function (response) {
                            try {
                                if (successCallBack)
                                    successCallBack(response);
                            } catch (err) {
                                console.log(err);
                            }
                        },
                        error: function (err, type, httpStatus) {
                            if (failureCallBack)
                                failureCallBack(err, type, httpStatus);
                            console.log('Error occurred in ajax call' + err.status + " - " + err.responseText + " - " + httpStatus);
                        }
                    });

                    return defObj;
                }

            },/*end GENERIC_AJAX*/
        
            GET_RECORDS : {
                
                getData: function (table ,page, term, range) {

                    var termFlag = 0;

                    if (term.trim() == ''){
                        termFlag = 0;
                    }else {
                        termFlag = 1;
                    }

                    var url = "/datatable/users/update?page="+page;
                    var data = {"table" : table ,"termFlag" : termFlag, "term" : term, "range" : range};

                    INDEXJS.GENERIC_AJAX.ajax('GET', url, data, function (data) {

                        $('.'+table+'-content').html(data);
                        location.hash = page;

                    }, function (xhr, ajaxOptions, thrownError) {

                    });
                }
            },/*end GET_RECORDS*/

            SEARCH : {

                searchDataTables: function (term, table) {
                    
                    var url = "/datatable/users/update/search";
                    var data = {"table": table, "term": term, "range": 5 };

                    INDEXJS.GENERIC_AJAX.ajax('GET', url, data, function (data) {
                        
                        $('.'+table+'-content').html(data);
                        

                    }, function (xhr, ajaxOptions, thrownError) {

                    });
                }
            },/*end SEARCH*/

            RANGE : {

                dataTableRange: function (range, table, term) {

                    var url = "/datatable/users/update"
                    var data = {"table" : table, "range" : range};

                    INDEXJS.GENERIC_AJAX.ajax('GET', url, data, function (data) {

                        $('.'+table+'-content').html(data);
                        

                    }, function (xhr, ajaxOptions, thrownError) {

                    });

                }
            
            },/*end RANGE*/

            REFRESH : {

               refreshDataTable: function (datatable, table, page) {

                    var term = $('#'+table+'-Search').val();
                    var range = $( '#'+table+'-range option:selected' ).text();

                    var termFlag = 0;

                    if ( typeof term !== 'undefined')
                    {
	                    if (term.trim() == ''){
	                        termFlag = 0;
	                    }else {
	                        termFlag = 1;
	                    }
	                }    

                    var url = "/datatable/users/update?page="+page;
                    var data = {"table" : table ,"termFlag" : termFlag, "term" : term, "range" : range};

                    INDEXJS.GENERIC_AJAX.ajax('GET', url, data, function (data) {

                        $(datatable).html(data);
                        location.hash = page;

                    }, function (xhr, ajaxOptions, thrownError) {

                    });
               
               }     

            }/*end REFRESH*/

        }/*end INDEXJS*/
    	

        $(document).delegate( ".pagination a", "click", function(e) {   
        
            e.preventDefault();
            var table = $(this).parent().parent().parent().data('datatable');
            var page = $(this).attr('href').split('page=')[1];
            var term = $('#'+table+'-Search').val();
            var range = $( '#'+table+'-range option:selected' ).text();

            INDEXJS.GET_RECORDS.getData(table ,page, term, range);

        });

        
        $('body').delegate( ".userSearch", "keyup", function() {

            var term = $(this).val();
            var table = $(this).data('datatable');

            if ( !term.trim() ==  true )
            {
                INDEXJS.REFRESH.refreshDataTable('.'+table+'-content', 'users', page);
            }else {
                INDEXJS.SEARCH.searchDataTables(term, table); 
            }
            
        });

        $('body').delegate( ".range", "change", function() {

           var range = $(this).val();
           var table = $(this).data('datatable');
           var term = $('#'+table+'-Search').val();

           INDEXJS.RANGE.dataTableRange(range, table, term);

        });

        var refreshTables = setInterval( function() 
        {   
        	 var table = $(this).data('datatable');
             page = $( '.active', '.users-content').text();
            
            INDEXJS.REFRESH.refreshDataTable('.'+table+'-content', table, page);

        }, 10000);

        /*Date*/

        var time = setInterval( function() 
        {
            var today = new Date;
            document.getElementById('date').innerHTML= today;

        }, 1000);
            
</script>
