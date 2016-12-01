(function() {
    function markAnswerAjax(e) {
        e.preventDefault();

        var ajaxRequest = getAjaxRequest(function(data) {
            if(data.approved) {
                $(this).text('Approved');
            } else {
                $(this).text('Mark as answer');
            }
            $(this).toggleClass('btn-markedAnswer');
        }.bind(this));

        ajaxRequest.apply(this);
    }
    $('.btn-markAnswer').on('click', markAnswerAjax);
})();